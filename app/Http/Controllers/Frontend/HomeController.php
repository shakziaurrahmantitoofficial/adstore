<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BuyAd;
use App\Models\RentAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Sale;
use App\Models\ads;
use Illuminate\Pagination\Paginator;


class HomeController extends Controller
{
    public function index()
    {

        
        $response = Http::get('https://sobkisubazar.com/api/v2/sliders');
        $platinum = Http::get('https://sobkisubazar.com/api/v2/platinum');
        $advertisement = Http::get('https://sobkisubazar.com/api/v2/advertisement');
        $ad_store = Http::get('https://sobkisubazar.com/api/v2/ad-store');


        $data = json_decode($response, true);
        $platinum = json_decode($platinum, true);
        $advertisement = json_decode($advertisement, true);
        $ad_stores = json_decode($ad_store, true);


        $platinum_data = [];
        $advertisement_data = [];
        $ad_stores_data = [];

        //sobkicubazar slider
        if ($data['status'] == '200') {
            $data = $data['data'];
        } else {
            $data = [];
        }

        //platinum package
        foreach ($platinum['data'] as $pl) {
            $platinum_data[] = [
                'photo' => 'https://sobkisubazar.com/public/' . $pl['photo'],
            ];
        }


        //advertiesment package
        // foreach ($advertisement['data'] as $ad) {
        //     $advertisement_data[] = [
        //         'photo' => 'https://sobkisubazar.com/public/' . $ad['photo'],
        //     ];
        // }

        //adstore package
        foreach ($ad_stores['data'] as $ad_store) {
            $ad_stores_data[] = [
                'photo' => 'https://sobkisubazar.com/public/' . $ad_store['photo'],
            ];
        }
        $sales = Sale::orderBy('id', 'desc')->paginate(4);
        $buy_ads = BuyAd::orderBy('id', 'desc')->paginate(4);
        $rent_ads = RentAd::orderBy('id', 'desc')->paginate(4);





        //For more code new developer

        $platinum = null;
        if(ads::where("packageName", "platinum")->where("status", 1)->count() > 0){
            $platinum = ads::where("packageName", "platinum")->where("status", 1)->orderby("id","DESC")->get();
        }


        $gold = null;
        if(ads::where("packageName", "gold")->where("status", 1)->count() > 0){
            $gold = ads::where("packageName", "gold")->where("status", 1)->orderby("id","DESC")->get();
        }



        $silver = null;
        if(ads::where("packageName", "silver")->where("status", 1)->count() > 0){
            $silver = ads::where("packageName", "silver")->where("status", 1)->orderby("id","DESC")->get();
        }



        $regular = null;
        if(ads::where("packageName", "regular")->where("status", 1)->count() > 0){
            $regular = ads::where("packageName", "regular")->where("status", 1)->orderby("id","DESC")->get();
        }



        return view('frontend.pages.index', compact('data', 'platinum_data', 'advertisement_data','ad_stores_data','sales','buy_ads','rent_ads','platinum','gold', "silver", "regular"));




    }




    
    public function adstore()
    {
        return view('frontend.pages.adstore');
    }

    public function search(Request $request){
        $search = $request->search;
        $searchItem = Sale::orWhere('name','like','%'.$search.'%')
        ->orWhere('description','like','%'.$search.'%')
        ->orderBy('id','desc')
        ->paginate(4);
        return view('frontend.pages.search', compact('searchItem'));
    }

    public function showSale($id){
        $saleItem = Sale::find($id);
        return view('frontend.pages.sale-details', compact('saleItem'));
    }
    public function showBuy($id){
        $buyItem = BuyAd::find($id);
        return view('frontend.pages.buy-details', compact('buyItem'));
    }

    public function showRent($id){
        $rentItem = RentAd::find($id);
        return view('frontend.pages.rent-details', compact('rentItem'));
    }

    public function allFiltering(Request $request){

        
        $saleData = null;
        $buy_ads = null;
        $rent_ads = null;


        $saleType = false;
        $buyType = false;
        $rentType = false;



        if($request->saleData != "" && count($request->saleData)){
            $saleData = Sale::whereIn('type', $request->saleData)->get();
            $saleType = true;
        }

        if($request->buyData != "" && count($request->buyData)){
            $buy_ads = BuyAd::whereIn('type', $request->buyData)->get();
            $buyType = true;
        }


        if($request->rentData != "" && count($request->rentData)){
            $rent_ads = RentAd::whereIn('type', $request->rentData)->get();
            $rentType = true;
        }


        return response()->json([
            'saleData' => $saleData,
            'saleType' => $saleType,

            'buy_ads' => $buy_ads,
            'buyType' => $buyType,

            'rent_ads' => $rent_ads,
            'rentType' => $rentType

        ]);

    }
}
