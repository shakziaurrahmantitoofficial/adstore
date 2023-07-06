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
    public function index(Request $request)
    {

        
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

        $regular = ads::where("packageName", "regular")->where("status", 1)->orderby("id","DESC")->paginate(4);

        if($request->ajax()){
            $view = view('frontend.pages.loadmore', compact('regular'))->render();
            return response()->json([
                "html" => $view
            ]);
        }

        return view('frontend.pages.index', compact('platinum','gold', "silver", "regular"));

    }




    
    public function adstore()
    {
        return view('frontend.pages.adstore');
    }

    public function search(Request $request){

        $search = $request->search;
        $searchItem = null;

        if(ads::orWhere('title','like','%'.$search.'%')->where('link','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')->orderBy('id','desc')->where("status", 1)->limit(30)->count() > 0){
            
            $searchItem = ads::where('title','like','%'.$search.'%')
            ->orWhere('link','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%')
            ->orderBy('id','desc')
            ->limit(30)
            ->where("status", 1)
            ->get();

        }

        return view('frontend.pages.search', compact('searchItem', 'search')); 



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
            $saleData = ads::where("adType", "sale")->whereIn('adservicetype', $request->saleData)->get();
            $saleType = true;
        }

        if($request->buyData != "" && count($request->buyData)){
            $buy_ads = ads::where("adType", "buy")->whereIn('adservicetype', $request->buyData)->get();
            $buyType = true;
        }


        if($request->rentData != "" && count($request->rentData)){
            $rent_ads = ads::where("adType", "rent")->whereIn('adservicetype', $request->rentData)->get();
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
