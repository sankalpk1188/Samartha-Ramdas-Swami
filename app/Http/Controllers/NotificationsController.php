<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;
use Image;

class NotificationsController extends Controller
{

        // add new notifications
    public function addNotifications(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //dd($data);
            $notifications = new Notifications;
            $notifications->title = $data['title'];
            $notifications->url = $data['url'];

            $notifications->save();
            return redirect('admin/view-notifications')->with('flash_message_success','New record added successfully');
        }
        return view('admin.notifications.add-notifications');
    }
    
    // edit specific notifications
    public function editNotifications(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            Notifications::where('id',$id)->update(['title'=>$data['title'],'url'=>$data['url']]);
            return redirect('admin/view-notifications')->with('flash_message_success','New record updated successfully');
        }
        $notifications = Notifications::where('id',$id)->first();
        return view('admin.notifications.edit-notifications')->with(compact('notifications'));
    }

     public function viewNotifications(){
        $notifications = Notifications::orderBy('id','ASC')->get();
        // dd($newsviewss);
        return view('admin.notifications.view-notifications')->with(compact('notifications'));
    }

    public function deleteNotifications(Request $request, $id){
        Notifications::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Data deleted successfully');
    }

}
