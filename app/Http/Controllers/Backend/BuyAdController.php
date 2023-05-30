<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyAdFormRequest;
use App\Models\BuyAd;
use Image;
use Illuminate\Http\Request;

class BuyAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buys = BuyAd::all();
        return view('backend.pages.buys.manage',compact('buys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.buys.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuyAdFormRequest $request)
    {
            if ($request->hasFile('image')) {
                //image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/buy_ad/' . $img);
                Image::make($image)->resize(570, 230)->save($location);
    
                // banner
                if ($request->banner) {
                    $banner_image  = $request->file('banner');
                    $banner =date('YmdHisa'). time() . '.' . $banner_image->getClientOriginalExtension();
                    $location_banner = public_path('images/buy_ad/' . $banner);
                    Image::make($banner_image)->resize(1170, 400)->save($location_banner);
                }

            $buy = new BuyAd();
            $buy->type = $request->type;
            $buy->name = $request->name;
            $buy->description = $request->description;
            $buy->image = $img;
            $buy->banner = $banner ?? '';
            $buy->save();
        }
            return back()->with('success', 'Buys add successfully.');


        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
