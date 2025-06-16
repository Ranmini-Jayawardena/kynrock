<?php

namespace App\Http\Controllers\Adminpanel\Banners;

use App\Http\Controllers\Controller;
use App\Models\TopBanner;
use Illuminate\Http\Request;
use DataTables;

class TopBannersController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:top-banner-list|top-banner-edit', ['only' => ['list']]);
        $this->middleware('permission:top-banner-edit', ['only' => ['edit, update']]);
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = TopBanner::orderBy('order', 'ASC')->get();
            // die(var_dump($data));
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('banner_image', function ($row) {
                    $imgpath = "storage/app/$row->banner_image";
                    $img = '<img src="'.$imgpath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-top-banner/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-top-banner/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
              
                ->rawColumns(['banner_image','edit','activation'])
                ->make(true);
        }

        return view('adminpanel.banner.topbanner.list');
    }

    public function edit($id)
    {
        $topBannerId = decrypt($id);
        $data = TopBanner::find($topBannerId);

        return view('adminpanel.banner.topbanner.edit', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $request->validate([
            'page_name' => 'required',

        ]);

        if (!$request->file('banner_image') == "") {

            $request->validate([
                'banner_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:20480',
            ]);

            $image = $request->file('banner_image')->getClientOriginalName();

            $bannerimage = $request->file('banner_image')->store('public/topbanners');
        } else {
            $bannerimage = "";
        }

        $data =  TopBanner::find($request->id);
        $data->page_name = $request->page_name;
        $data->heading = $request->heading;
        $data->order = $request->order;
        $data->status = $request->status;

        if(!empty($bannerimage)) {
            $data->banner_image = $bannerimage;
        }
        $data->save();

        \LogActivity::addToLog('Top banner record updated.');

        return redirect()->route('top-banner-list')
            ->with('success', 'Top banner updated successfully.');
    }


    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  TopBanner::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Top Banner record '.$data->heading.' deactivated('.$id.').');

            return redirect()->route('top-banner-list')
            ->with('success', 'Top Banner deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Top Banner record '.$data->heading.' activated('.$id.').');

            return redirect()->route('top-banner-list')
            ->with('success', 'Top Banner activate successfully.');
        }
    }

}


