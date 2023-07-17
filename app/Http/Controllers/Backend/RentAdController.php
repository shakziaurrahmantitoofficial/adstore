<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RentAdFormRequest;
use App\Models\RentAd;
use Illuminate\Http\Request;
use Image;

class RentAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = RentAd::all();
        return view('backend.pages.rents.manage',compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.rents.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RentAdFormRequest $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/rent_ad/' . $img);
            Image::make($image)->resize(570, 230)->save($location);

            // banner
            if ($request->banner) {
                $banner_image  = $request->file('banner');
                $banner = date('YmdHisa') . time() . '.' . $banner_image->getClientOriginalExtension();
                $location_banner = public_path('images/rent_ad/' . $banner);
                Image::make($banner_image)->resize(1170, 400)->save($location_banner);
            }
            
            $rent_add = new RentAd();
            $rent_add->type = $request->type;
            $rent_add->name = $request->name;
            $rent_add->description = $request->description;
            $rent_add->image = $img;
            $rent_add->banner = $banner ?? '';
            $rent_add->save();
        }


        return back()->with('success', 'Rent ads add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
