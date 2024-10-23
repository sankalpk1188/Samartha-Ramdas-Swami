<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Image;

class ServiceController extends Controller
{

    public function addService(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $service = new Service;
            $service->title = $data['title'];
            $service->service_cat_id = $data['service_cat_id'];
            $service->description = $data['description'];
            $service->service_content = $data['service_content'];
            $service->status = !empty($data['status']) ? 1 : 0;

            if($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $file_path = 'assets/imgs/services/'.$filename;
                    Image::make($image_tmp)->save($file_path);
                    $service->image = $filename;
                }
            }
            $service->save();
            return redirect('admin/view-services/')->with('flash_message_success','Service added successfully');
        }
        return view('admin.services.add_service');
    }

    public function editService(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            if ($request->hasFile('image')) {
                $image_tmp = $request->image;
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalName();
                    $filename = strtotime("now") . '.' . $extension;
                    $file_path = 'assets/img/services/' . $filename;
                    Image::make($image_tmp)->save($file_path);
                }
            } else if (!empty($data['current_image'])) {
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            Service::where('id',$id)->update([
                'title' => $data['title'],
                'service_cat_id' => $data['service_cat_id'],
                'description' => $data['description'],
                'service_content' => $data['service_content'],
                'status' => !empty($data['status']) ? 1 : 0,
            ]);
            return redirect('admin/view-services')->with('flash_message_success','Service details updated successfully');
        }
        $service = Service::where('id',$id)->first();
        return view('admin.services.edit_service')->with(compact('service'));
    }

    public function deleteService(Request $request, $id){
        Service::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Service deleted successfully');
    }

    public function viewServices(Request $request) {
        $services = Service::select('services.id','services.title','services.service_cat_id','services.status','service_categories.name')
            ->leftJoin('service_categories','services.service_cat_id','service_categories.id')
            ->orderBy('services.id','ASC');

        if($request->service_cat_id){
            $services = $services->where('services.service_cat_id',$request->service_cat_id);
        }

        $services = $services->paginate(10);
        return view('admin.services.view_services', compact('services'));
    }
}
