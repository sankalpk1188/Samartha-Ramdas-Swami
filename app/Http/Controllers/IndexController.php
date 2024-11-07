<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Rules\Recaptcha;
use App\Models\PartnersCategory;
use App\Models\ServiceCategory;
use App\Models\GalleryCategory;
use App\Models\JobApplication;
use App\Models\Opportunities;
use App\Models\Aboutpage;
use App\Models\Industry;
use App\Models\Service;
use App\Models\Whykpca;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Banner;
use App\Models\Spread;
use App\Models\Vision;
use App\Models\Blogs;
use App\Models\Stats;
use App\Models\About;
use App\Models\Story;
use App\Models\Core;
use Mail;
use Log;
use Session;

class IndexController extends Controller
{   
    public function search(Request $request){
       
        $query = $request->input('query');

     
         $results = YourModel::where('name', 'LIKE', "%{$query}%")->get();
      

       
        if ($request->ajax()) {
            return response()->json($results);    
        }

        // If not AJAX, load a regular view (optional fallback)
        return view('search', compact('results'));
     }

    public function switchLang(Request $request, $lang=null){
        Session::forget('lang');
        Session::put('lang',$lang);
        // dd(Session::get('lang'));
        return redirect()->back();
    }

    public function __construct() {
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        // Log the locale being set
        \Log::info('Locale set in IndexController: ' . $locale);
    }

    public function index() {
        $banners = Banner::where('status',1)->get();
        $stats = Stats::get();
        $whykpca = Whykpca::get();
        $about = About::first();
        $services = ServiceCategory::with('services')->where('status',1)->get();
        // $reports = Industry::orderBy('report_date','DESC')->take(4)->get();
        $meta_title = 'Home | '. config('app.name');
        return view('index',compact('meta_title','banners','stats','whykpca','about','services'));
    }
    
    public function contact(Request $request){
        if($request->isMethod('post')){

            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $data = $request->all();
            Log::info($data);
            // dd($data);

            $enquiry = new Enquiry;
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->phone = $data['phone'];
            $enquiry->subject = $data['subject'];
            $enquiry->comment = $data['comment'];
            $enquiry->save();


            if($data['type'] == "Contact"){
                $email = getValue('contact_form_email');
            }else{
                $email = getValue('alumni_form_email');            
            }
            $messageData = [
                'data' => $data,
            ];
            Mail::send('emails.enquiry',$messageData,function($message) use($email){
                $message->to($email)->subject('New enquiry received from website');
            });
            if($data['type'] == "Contact"){
                return redirect('contact-us#form')->with('success_message','Form submitted successfully.');
            }else{
                return redirect('alumni#form')->with('success_message','Form submitted successfully.');
            }
        }
        $contacts = Contact::orderBy('id','ASC')->get();

        $meta_title = 'Contact Us | '. config('app.name');
        return view('contact',compact('meta_title','contacts'));
    }

    public function about(Request $request){
        $about = Aboutpage::first();
        $story = Story::where('id',1)->first();
        $data = Story::where('id',2)->first();
        $values = Core::orderBy('id','ASC')->get();
        $vision = Vision::first();
        $meta_title = 'About Us | '. config('app.name');
        return view('about',compact('meta_title','about','story','data','values','vision'));
    }

    public function partnersPage(Request $request){
        $partners = PartnersCategory::with(['partners' => function ($query) {
            $query->where('status', 1);
        }])->where('status',1)->get();
        $meta_title = 'Partners';
        return view('partners',compact('meta_title','partners'));
    }

    public function clientSpreadPage(Request $request){
        $clients = Spread::orderBy('id','ASC')->get();
        $meta_title = 'Clients Spread';
        return view('clients_spread',compact('meta_title','clients'));
    }

    public function author(Request $request){
        $meta_title = 'Author | '. config('app.name');
        return view('author',compact('meta_title'));
    }

    public function literature(Request $request){
        $meta_title = 'Literature | '. config('app.name');
        return view('literature',compact('meta_title'));
    }

    public function daswani(Request $request){
        $meta_title = 'Daswani | '. config('app.name');
        return view('daswani',compact('meta_title'));
    }

    public function gallery(Request $request, $id=null){
        $meta_title = 'Gallery';
        return view('gallery');
    }

    public function events(){
        
        $meta_title = 'Reports & Publications';
        return view('events');
    }

    public function blogsListing(Request $request){
        $blogs = Blogs::where('status',1)->orderBy('date','DESC')->paginate(9);
        $meta_title = 'Blogs';
        return view('blog_listing',compact('meta_title','blogs'));
    }

    public function blogDetail(Request $request, $id=null){
        $blog = Blogs::with(['comments'=> function($q) { $q->where('status',1)->orderBy('id','DESC'); },'likes'])->where('id',$id)->first();
        $meta_title = $blog->title;
        return view('blog_detail',compact('meta_title','blog'));
    }

    public function career(Request $request){
        $opportunities = Opportunities::select('id','designation_name','job_description','location')->where('status',1)->orderBy('id','DESC')->paginate(8);
        $meta_title = 'Career at '. config('app.name');
        return view('career',compact('meta_title','opportunities'));
    }

    public function submitJobApp(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $this -> validate($request, [
                'g-recaptcha-response' => ['required', new Recaptcha()]
            ]);

            $app = new JobApplication;
            $app->job_id = $data['job_id'];
            $app->name = $data['name'];
            $app->email = $data['email'];
            $app->phone = $data['phone'];
            $app->qualification = $data['qualification'];
            $app->experience = $data['experience'];
            $app->address = $data['address'];
            $app->current_ctc = $data['current_ctc'];
            $app->expect_ctc = $data['expect_ctc'];
            $app->ref_by = $data['ref_by'] ? $data['ref_by'] : null;
            $app->source = $data['source'] ? $data['source'] : null;
            
            if($request->hasFile('resume')) {
                $file = $request->file('resume');
                $pdf = strtotime('now') .'-'. $file->getClientOriginalName();
                $destinationPath = public_path('assets/applications/');
                $file->move($destinationPath, $pdf);
                $app->resume=$pdf;
            }
            $app->save();

            $job = Opportunities::select('id','email','designation_name')->where('id',$data['job_id'])->first();
            $job_title = $job->designation_name;
            $recipients = array_map('trim', explode(',', $job->email));
            $messageData = [
                'data' => $data,
                'job_title' => $job_title,
                'resume' => $pdf,
            ];
            Mail::send('emails.resume-form',$messageData,function($message) use($recipients,$job_title){
                $message->to($recipients)->subject($job_title.' | New job application received from website');
            });
            return redirect()->back()->with('success_message','Application submitted successfully.');
        }
    }

    public function jobDetails(Request $request, $id){
        $job = Opportunities::find($id);
        $meta_title = $job->designation_name .' | Careers';
        return view('job_detail',compact('meta_title','job'));
    }

    public function serviceDetailPage(Request $request, $id){
        $service = Service::select('services.*','service_categories.name')
            ->leftJoin('service_categories','service_categories.id','services.service_cat_id')
            ->where('services.id',$id)
            ->first();

        $meta_title = $service->title.' | '. config('app.name');
        return view('services.service_detail',compact('meta_title','service'));
    }
    
}