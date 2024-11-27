<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Image;

class AuthorController extends Controller
{
    public function addAuthor(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $author = new Author;
            $author->marathi_title = isset($data['marathi_title']) ? $data['marathi_title'] : null;
            $author->english_title = isset($data['english_title']) ? $data['english_title'] : null;
            $author->hindi_title = isset($data['hindi_title']) ? $data['hindi_title'] : null;
            $author->marathi_subtitle = isset($data['marathi_subtitle']) ? $data['marathi_subtitle'] : null;
            $author->english_subtitle = isset($data['english_subtitle']) ? $data['english_subtitle'] : null;
            $author->hindi_subtitle = isset($data['hindi_subtitle']) ? $data['hindi_subtitle'] : null;
            $author->marathi_description = isset($data['marathi_description']) ? $data['marathi_description'] : null;
            $author->english_description = isset($data['english_description']) ? $data['english_description'] : null;
            $author->hindi_description = isset($data['hindi_description']) ? $data['hindi_description'] : null;

            if($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $path = 'assets/imgs/author/' . $filename;
                    Image::make($image_tmp)->save($path);
                    $author->image = $filename;
                }
            }
            
            $author->save();
            return redirect('admin/view-author')->with('flash_message_success','New record added successfully');
        }
        return view('admin.author.add-author');
    }
    
    // edit specific banner
    public function editAuthor(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            if ($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $path = 'assets/imgs/author/' . $filename;
                    Image::make($image_tmp)->save($path);
                }
            } else if (!empty($data['current_image'])) {
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            Author::where('id', $id)->update([
                'marathi_title' => $data['marathi_title'] ?? null,
                'english_title' => $data['english_title'] ?? null,
                'hindi_title' => $data['hindi_title'] ?? null,
                'marathi_subtitle' => $data['marathi_subtitle'] ?? null,
                'english_subtitle' => $data['english_subtitle'] ?? null,
                'hindi_subtitle' => $data['hindi_subtitle'] ?? null,
                'marathi_description' => $data['marathi_description'] ?? null,
                'english_description' => $data['english_description'] ?? null,
                'hindi_description' => $data['hindi_description'] ?? null,
               
                'image' => $filename,
            ]);
            return redirect('admin/view-author')->with('flash_message_success','New record updated successfully');
        }
        $author = Author::where('id',$id)->first();
        return view('admin.author.edit-author')->with(compact('author'));
    }

     public function viewAuthor(){
        $author = Author::orderBy('id','ASC')->paginate(5);
        return view('admin.author.view-author')->with(compact('author'));
    }

    public function deleteAuthor(Request $request, $id){
        Author::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Data deleted successfully');
    }
}
