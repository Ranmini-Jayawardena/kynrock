<?php

namespace App\Http\Controllers\Adminpanel\Banners;

use App\Http\Controllers\Controller;
use App\Models\BottomBanner;
use Illuminate\Http\Request;
use DataTables;

class BottomBannersController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:bottom-banner-list|bottom-banner-edit', ['only' => ['list']]);
        $this->middleware('permission:bottom-banner-edit', ['only' => ['edit, update']]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = BottomBanner::orderBy('order', 'ASC')->get();
            // die(var_dump($data));
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('banner_image', function ($row) {
                    $imgpath = "storage/app/$row->banner_image";
                    $img = '<img src="'.$imgpath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-bottom-banner/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-bottom-banner/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
              
                ->rawColumns(['banner_image','edit','activation'])
                ->make(true);
        }

        return view('adminpanel.banner.bottombanner.list');
    }

    public function edit($id)
    {
        $bottomBannerId = decrypt($id);
        $data = BottomBanner::find($bottomBannerId);

        return view('adminpanel.banner.bottombanner.edit', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $request->validate([
            'page_name' => 'required',

        ]);

        if (!$request->file('banner_image') == "") {

            $request->validate([
                'banner_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $image = $request->file('banner_image')->getClientOriginalName();

            $bannerimage = $request->file('banner_image')->store('public/bottombanners');
        } else {
            $bannerimage = "";
        }

        $data =  BottomBanner::find($request->id);
        $data->page_name = $request->page_name;
        $data->heading = $request->heading;
        $data->order = $request->order;
        $data->status = $request->status;

        if(!empty($bannerimage)) {
            $data->banner_image = $bannerimage;
        }
        $data->save();

        \LogActivity::addToLog('Bottom banner record updated.');

        return redirect()->route('bottom-banner-list')
            ->with('success', 'Top banner updated successfully.');
    }


    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  BottomBanner::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Bottom Banner record '.$data->heading.' deactivated('.$id.').');

            return redirect()->route('bottom-banner-list')
            ->with('success', 'Bottom Banner deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Bottom Banner record '.$data->heading.' activated('.$id.').');

            return redirect()->route('bottom-banner-list')
            ->with('success', 'Bottom Banner activate successfully.');
        }
    }

}


