<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;
use Image;

class PartnersController extends Controller
{

    public function addPartners(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $partners = new Partners;
            $partners->education = $data['education'];
            $partners->partners_cat_id = $data['partners_cat_id'];
            $partners->url = $data['url'];
            $partners->email = $data['email'];
            $partners->department = $data['department'];
            $partners->location = $data['location'];
            $partners->status = !empty($data['status']) ? 1 : 0;

            if($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $file_path = 'assets/imgs/partners/'.$filename;
                    Image::make($image_tmp)->save($file_path);
                    $partners->image = $filename;
                }
            }
            $partners->save();
            return redirect('admin/view-partners/')->with('flash_message_success','Partners added successfully');
        }
        return view('admin.partners.add_partners');
    }

    public function editPartners(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            if ($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $file_path = 'assets/img/partners/' . $filename;
                    Image::make($image_tmp)->save($file_path);
                }
            } else if (!empty($data['current_image'])) {
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            Partners::where('id',$id)->update([
                'education' => $data['education'],
                'partners_cat_id' => $data['partners_cat_id'],
                'url' => $data['url'],
                'email' => $data['email'],
                'department' => $data['department'],
                'location' => $data['location'],
                'status' => !empty($data['status']) ? 1 : 0,
            ]);
            return redirect('admin/view-partners')->with('flash_message_success','Partners details updated successfully');
        }
        $partners = Partners::where('id',$id)->first();
        return view('admin.partners.edit_partners')->with(compact('partners'));
    }

    public function deletePartners(Request $request, $id){
        Partners::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Partners deleted successfully');
    }

    public function viewPartners(Request $request) {
        $partners = Partners::select('partners.id','partners.education','partners.url','partners.email','partners.department','partners.location','partners.partners_cat_id','partners.status','partners_category.name')
            ->leftJoin('partners_category','partners.partners_cat_id','partners_category.id')
            ->orderBy('partners.id','ASC');

        if($request->partners_cat_id){
            $partners = $partners->where('partners.partners_cat_id',$request->partners_cat_id);
        }

        $partners = $partners->paginate(10);
        return view('admin.partners.view_partners', compact('partners'));
    }
}
