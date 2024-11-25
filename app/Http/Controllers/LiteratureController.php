<?php

namespace App\Http\Controllers;

use App\Models\Literature;
use Illuminate\Http\Request;
use Image;

class LiteratureController extends Controller
{
    public function addLiterature(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $literature = new Literature;
            $literature->marathi_title = isset($data['marathi_title']) ? $data['marathi_title'] : null;
            $literature->english_title = isset($data['english_title']) ? $data['english_title'] : null;
            $literature->hindi_title = isset($data['hindi_title']) ? $data['hindi_title'] : null;
            if($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $path = 'assets/imgs/literature/' . $filename;
                    Image::make($image_tmp)->save($path);
                    $literature->image = $filename;
                }
            }
            
            $literature->save();
            return redirect('admin/view-literature')->with('flash_message_success','New record added successfully');
        }
        return view('admin.literature.add-literature');
    }
    
    // edit specific banner
    public function editLiterature(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            if ($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $path = 'assets/imgs/literature/' . $filename;
                    Image::make($image_tmp)->save($path);
                }
            } else if (!empty($data['current_image'])) {
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            Literature::where('id', $id)->update([
                'marathi_title' => $data['marathi_title'] ?? null,
                'english_title' => $data['english_title'] ?? null,
                'hindi_title' => $data['hindi_title'] ?? null,
                'image' => $filename,
            ]);
            return redirect('admin/view-literature')->with('flash_message_success','New record updated successfully');
        }
        $literature = Literature::where('id',$id)->first();
        return view('admin.literature.edit-literature')->with(compact('literature'));
    }

     public function viewLiterature(){
        $literature = Literature::orderBy('id','ASC')->paginate(5);
        return view('admin.literature.view-literature')->with(compact('literature'));
    }

    public function deleteLiterature(Request $request, $id){
        Literature::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Data deleted successfully');
    }

}
