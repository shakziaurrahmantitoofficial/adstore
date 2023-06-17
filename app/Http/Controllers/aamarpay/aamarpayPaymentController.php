<?php

namespace App\Http\Controllers\aamarpay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use Illuminate\Support\Facades\Auth;

class aamarpayPaymentController extends Controller
{
    public function index(){
      //Auth::user()->mailPhone
        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
            $fields = array(
                'store_id' => 'aamarpaytest',
                'tran_id' => rand(1111111,9999999),
                'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183',
                'success_url' => route('success'),
                'fail_url' => route('fail'),
                'cancel_url' => 'http://localhost/foldername/cancel.php',
                'amount' => '400',
                'currency' => 'BDT',
                'desc' => 'payment description',
                'cus_name' => 'customer name',
                'cus_email' => 'customeremail@mail.com',
                'cus_add1' => 'Dhaka',
                'cus_add2' => 'Mohakhali DOHS',
                'cus_city' => 'Dhaka',
                'cus_state' => 'Dhaka',
                'cus_postcode' => '1206',
                'cus_country' => 'Bangladesh',
                'cus_phone' => '01741571104',
                );

                $fields_string = http_build_query($fields);
         
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_URL, $url);  
      
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));  
            curl_close($ch); 

            $this->redirect_to_merchant($url_forward);
    }

    function redirect_to_merchant($url) {

        ?>
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head><script type="text/javascript">
            function closethisasap() { document.forms["redirectpost"].submit(); } 
          </script></head>
          <body onLoad="closethisasap();">
          
            <form name="redirectpost" method="post" action="<?php echo 'https://sandbox.aamarpay.com/'.$url; ?>"></form>
            <!-- for live url https://secure.aamarpay.com -->
          </body>
        </html>
        <?php   
        exit;
    } 

    
    public function success(Request $request){
        return 'Success';
    }

    public function fail(Request $request){
        return 'Fail';
    }
}
