<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaleAdStoreRequest;
use App\Models\Sale;
use Image;
use File;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index()
    {
        $sales = Sale::all();
        return view('backend.pages.sales.manage', compact('sales'));
    }
    public function create()
    {
        return view('backend.pages.sales.add');
    }

    public function store(SaleAdStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            //image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/sales/' . $img);
            Image::make($image)->resize(570, 230)->save($location);

            // banner
            if ($request->banner) {
                $banner_image  = $request->file('banner');
                $banner =date('YmdHisa'). time() . '.' . $banner_image->getClientOriginalExtension();
                $location_banner = public_path('images/sales/' . $banner);
                Image::make($banner_image)->resize(1170, 400)->save($location_banner);
            }

            $sale = new Sale();
            $sale->type = $request->type;
            $sale->name = $request->name;
            $sale->description = $request->description;
            $sale->image = $img;
            $sale->banner = $banner ?? '';
            $sale->save();
        }
        return back()->with('success', 'Sales add successfully.');
    }
}
