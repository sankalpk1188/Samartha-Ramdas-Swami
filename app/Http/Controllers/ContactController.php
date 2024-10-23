<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Image;

class ContactController extends Controller
{

        // add new contact
    public function addContact(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //dd($data);
            $contact = new Contact;
            $contact->location = $data['location'];
            $contact->address = $data['address'];
            $contact->phone = $data['phone'];
            $contact->email = $data['email'];

            $contact->save();
            return redirect('admin/view-contact')->with('flash_message_success','New record added successfully');
        }
        return view('admin.contact.add-contact');
    }
    
    // edit specific contact
    public function editContact(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();

            Contact::where('id',$id)->update(['location'=>$data['location'],'address'=>$data['address'],'phone'=>$data['phone'],'email'=>$data['email']]);
            return redirect('admin/view-contact')->with('flash_message_success','New record updated successfully');
        }
        $contact = Contact::where('id',$id)->first();
        return view('admin.contact.edit-contact')->with(compact('contact'));
    }

     public function viewContact(){
        $contact = Contact::orderBy('id','ASC')->get();
        // dd($newsviewss);
        return view('admin.contact.view-contact')->with(compact('contact'));
    }

    public function deleteContact(Request $request, $id){
        Contact::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Data deleted successfully');
    }

}
