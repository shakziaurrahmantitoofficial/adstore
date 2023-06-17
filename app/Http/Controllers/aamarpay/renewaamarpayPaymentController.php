<?php

namespace App\Http\Controllers\aamarpay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class renewaamarpayPaymentController extends Controller
{

    public function index(Request $req){
        $url = env('AAMARPAY_BASEURL').'/request.php';

        $customerId = base64_encode(Auth::guard("customer")->user()->id);
        $successData = "customerId=".$customerId."&packageName=".$req->packageName."&duration=".$req->duration."&price=".$req->price;

            $fields = array(
                'store_id' => env('AAMARPAY_STORE_ID'),
                'tran_id' => rand(1111111,9999999),
                'signature_key' => env('AAMARPAY_SIGNATURE_KEY'),
                'currency' => 'BDT',
                'desc' => 'There is no description',

                'success_url' => url("/success?".$successData),
                'fail_url' => route('fail'),
                'cancel_url' => route('cancel'),
                
                'amount' => base64_decode($req->price),
                'cus_name' => Auth::guard("customer")->user()->name,
                'cus_email' => 'info@sobkisubazar.com',
                'cus_phone' => Auth::guard("customer")->user()->mailPhone,
                'cus_add1' => Auth::guard("customer")->user()->address,
                'cus_add2' => Auth::guard("customer")->user()->address,

                'cus_city' => 'Dhaka',
                'cus_state' => 'Dhaka',
                'cus_postcode' => '1205',
                'cus_country' => 'Bangladesh'
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
          
            <form name="redirectpost" method="post" action="<?php echo env('AAMARPAY_BASEURL').$url; ?>"></form>
            <!-- for live url https://secure.aamarpay.com -->
          </body>
        </html>
        <?php   
        exit;
    } 

    
    public function success(Request $request){
        $package = new package();
        $package->packageName   = base64_decode($request->packageName);
        $package->duration      = base64_decode($request->duration);
        $package->price         = base64_decode($request->price);
        $package->customerId    = base64_decode($request->customerId);
        $package->paymentMethod = 'AamarPay';
        $package->paymentgetway = 'AamarPay';
        $package->payment = 1;
        $package->adstatus = 1;
        $package->save();
        return redirect("/packagelist")->with("success","Thanks your! Order created.");
    }

    public function fail(Request $request){
        return redirect("/dashboard");
    }

    public function cancel(Request $request){
        return redirect("/dashboard");
    }
}
