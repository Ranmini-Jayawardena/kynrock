<?php


namespace App\Http\Controllers\Adminpanel\Experience;

use App\Http\Controllers\Controller;
use App\Models\ExperienceList as Experience;
use App\Models\ExperienceImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class ExperienceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:experience-list|experience-create|experience-edit|experience-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:experience-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:experience-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:experience-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.experience.experience_list.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'experience_name' => 'required',
            'description' => 'required',
         'images.*.image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',


        ], [
            // custom messages here if any
        ], [
            'images.*.image_name' => 'Image',
        ]);
    
        $experience = new Experience();
        $experience->experience_name = $request->experience_name;
        $experience->description = $request->description;
        $experience->description2 = $request->description2;
        $experience->status = $request->status;
        $experience->save();
    
        // Handle images
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name'])) {
                    $imagePath = $image['image_name']->store('public/experienceimages');
                    $imageModel = new ExperienceImages();
                    $imageModel->experience_id = $experience->id;
                    $imageModel->image_name = $imagePath;
                    $imageModel->order = $image['order'];
                    $imageModel->save();
                }
            }
        }
        return redirect()->route('experience-list')
            ->with('success', 'Experience List created successfully.');
    }
    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Experience::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-experience/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function($row){
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="'.route('changestatus-experience', ['id' => $row->id]).'"><i class="'.$status.'"></i></a>';
                })
                ->addColumn('blockexperience', 'adminpanel.experience.experience_list.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockexperience'])
                ->make(true);
        }

        return view('adminpanel.experience.experience_list.list');
    }
 
    public function edit($id)
    {
        $experienceID = decrypt($id);
        $data = Experience::find($experienceID);
        $images = ExperienceImages::where('experience_id', $experienceID)->get();

        return view('adminpanel.experience.experience_list.edit', ['data' => $data, 'images' => $images]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'experience_name' => 'required',
            'description' => 'required',
        'images.*.image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',


        ], [
            // custom messages here if any
        ], [
            'images.*.image_name' => 'Image',
        ]);
        // Find the experience first
        $data = Experience::find($request->id);
        if (!$data) {
            return redirect()->route('experience-list')->with('error', 'Experience not found.');
        }
    
        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = ExperienceImages::find($imageId);
                if ($image) {
                    Storage::delete($image->image_name); // Delete the image file from storage
                    $image->delete(); // Delete the record from the database
                }
            }
        }
    
        // Handle image updates/additions
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name']) && $image['image_name']) { // Check if image_name exists
                    $imagePath = $image['image_name']->store('public/experienceimages');
                    ExperienceImages::updateOrCreate(
                        ['id' => $image['id'] ?? null],
                        [
                            'experience_id' => $data->id,
                            'image_name' => $imagePath,
                            'order' => $image['order'] ?? 0
                        ]
                    );
                }elseif (isset($image['id'])) {
                    // If only order is updated
                    ExperienceImages::where('id', $image['id'])->update([
                        'order' => $image['order'] ?? 0
                    ]);
                }
            }
        }
    
        // Update experience data
        $data->experience_name = $request->experience_name;
        $data->description = $request->description;
        $data->description2 = $request->description2;
        $data->status = $request->status;
        $data->save();
    
        \LogActivity::addToLog('Experience record ' . $data->experience_name . ' updated(' . $data->id . ').');
    
        return redirect()->route('experience-list')
            ->with('success', 'Experience updated successfully.');
    }
    
    public function activation($id)
    {
        $data = Experience::find($id);

        if ($data->status == "Y") {
            $data->status = 'N';
        } else {
            $data->status = 'Y';
        }

        $data->save();

        \LogActivity::addToLog('Experience record ' . $data->experience_name . ' status changed (' . $data->id . ').');

        return redirect()->route('experience-list')
            ->with('success', 'Experience status changed successfully.');
    }

    

    public function block(Request $request)
    {
        $data = Experience::find($request->id);
    
        if (!$data) {
            return redirect()->route('experience-list')->with('error', 'Experience not found.');
        }

        // Retrieve and delete all associated images
        $images = ExperienceImages::where('experience_id', $data->id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image_name); // Delete the image file from storage
            $image->delete(); // Delete the record from the database
        }

    // Mark the experience as deleted
        $data->is_delete = 1;
        $data->save();

        \LogActivity::addToLog('Experience record ' . $data->experience_name . ' and its images deleted(' . $data->id . ').');

        return redirect()->route('experience-list')
            ->with('success', 'Experience and associated images deleted successfully.');
        }

    
}
