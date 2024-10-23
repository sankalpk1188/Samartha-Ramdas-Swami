<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Image;

class BlogsController extends Controller
{

    // add new blogs
    public function addBlogs(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //dd($data);
            $blogs = new Blogs;            
            $blogs->title = $data['title'];
            $blogs->description = $data['description'];
            $blogs->date = $data['date'];
            $blogs->status = !empty($data['status']) ? 1 : 0;

            if($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $filename = strtotime("now").'.'. $image_tmp->getClientOriginalName();
                    $newsviews_path = 'assets/imgs/blogs/'.$filename;
                    Image::make($image_tmp)->save($newsviews_path);
                    $blogs->image = $filename;
                }
            }
        
            $blogs->save();
            return redirect('admin/view-blogs')->with('flash_message_success','New blog added successfully');
        }
        return view('admin.blogs.add-blogs');
    }
    
    // edit specific blogs
    public function editBlogs(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            if ($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now").'.'. $extension;
                    $collaborate_path = 'assets/imgs/blogs/' . $filename;
                    Image::make($image_tmp)->save($collaborate_path);
                }
            } else if (!empty($data['current_image'])) {
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            Blogs::where('id',$id)->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'date' => $data['date'],
                'status' => !empty($data['status']) ? 1 : 0,
            ]);

            return redirect('admin/view-blogs')->with('flash_message_success','Blog updated successfully');
        }
        $blogs = Blogs::where('id',$id)->first();
        return view('admin.blogs.edit-blogs')->with(compact('blogs'));
    }

    public function viewBlogs(){
        $blogs = Blogs::orderBy('date','DESC')->get();
        // dd($newsviewss);
        return view('admin.blogs.view-blogs')->with(compact('blogs'));
    }

    public function deleteBlogs(Request $request, $id){
        Blogs::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Blog deleted successfully');
    }
}
