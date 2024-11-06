@extends('layouts/frontLayout/front_design')
@section('content')

@section('styles')
<style>
	.list-ticks li {
	    width: 100% !important;
	    text-indent: -30px;
	    margin-left: 30px;
	}
</style>
@endsection('styles')

<main class="main">

    <section class="banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/about_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>
    
    <section class="section banner-5">
        <div class="container">
            <div class="mt-65 mb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-20">
                        {{-- <span class="title-line color-brand-2 wow animate__animated animate__fadeInUp" data-wow-delay=".0s">Great sales platform</span> --}}
                        <h2 class="color-brand-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="color: #902e01!important;">जीवन प्रवास</h2>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <p class="font-md color-grey-50 wow animate__animated animate__fadeInUp text-justify" data-wow-delay=".4s">सर्व वयोगटातील एक संत ज्यांचे ध्येय सामर्थ्यवान आणि सद्गुणी मानव धर्म निर्माण करण्याचे आहे. तो चार शतकांपूर्वी जगला असला तरी त्याची शिकवण काळाच्या सर्व मर्यादा ओलांडते. त्यांच्या तत्त्वज्ञानाने महाराष्ट्राच्या तत्कालीन नशिबात आलेल्या आत्म्याला केवळ पुनर्जागृत केले आणि नवसंजीवनी दिली नाही, तर भ्रष्टाचार, दारिद्र्य, उद्धटपणा आणि बेपर्वा उपभोगतावाद यांनी ग्रासलेल्या आजच्या भारतीय परिस्थितीसाठीही ते तितकेच वैध आहे.<br><br>त्याच्या तत्त्वज्ञानाचे नियमन करणारी तत्त्वे पाळण्यास अतिशय सोपी आणि तरीही अद्वितीय आहेत कारण ती सामान्यज्ञानाला आकर्षित करतात, जीवनात कृतीची मागणी करतात आणि वास्तविक वर्तणुकीतील बदलांद्वारे चारित्र्य निर्माण करण्याचे उद्दिष्ट ठेवतात. समर्थ रामदासांच्या मते, “वेळ व्यवस्थापन” हा यशस्वी जीवनाचा गाभा आहे.<br><br>हे आधुनिक व्यवस्थापकीय शब्दजाल सारखेच नाही का? जे सर्वोच्च सत्याकडे प्रभावीपणे निर्देशित केले जाते. केवळ समर्थांचे तत्त्वज्ञानच आज आपल्या देशाला सध्याच्या संकटातून सोडवू शकते, तरुणांना स्वाभिमानाचे शिक्षण देऊन आणि आत्मसन्मान आत्मसात करून राष्ट्राला आरोग्य आणि संपत्तीच्या बाजूने घेऊन जाऊ शकते.</p>
                    </div>
                </div>
                <div class="box-video-banner">
                    <div class="image-banner-5 wow animate__animated animate__fadeIn">
                        <img src="assets/imgs/ChitramayJivanCharitra.png" alt="iori">
                    </div>
                </div>
                <div class="box-info-video-banner d-none" >
                    <div class="box-inner-video-banner">
                        <div class="row align-items-start">
                            <div class="col-lg-5">
                                <p class="color-grey-500 font-lg wow animate__animated animate__fadeIn text-justify" data-wow-delay=".0s">हे आधुनिक व्यवस्थापकीय शब्दजाल सारखेच नाही का? जे सर्वोच्च सत्याकडे प्रभावीपणे निर्देशित केले जाते. केवळ समर्थांचे तत्त्वज्ञानच आज आपल्या देशाला सध्याच्या संकटातून सोडवू शकते, तरुणांना स्वाभिमानाचे शिक्षण देऊन आणि आत्मसन्मान आत्मसात करून राष्ट्राला आरोग्य आणि संपत्तीच्या बाजूने घेऊन जाऊ शकते.
                                </p>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="card-small card-small-2">
                                            <div class="card-image">
                                                <a href="#">
                                                    <div class="box-image">
                                                        <img src="assets/imgs/page/homepage1/free.svg" alt="iori">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <a href="#">
                                                    <h6 class="color-brand-1 mb-10">Connected</h6>
                                                </a>
                                                <p class="font-xs color-grey-500">We come together wherever we are – across time zones, regions, offices and screens. You will receive support from your teammates anytime and anywhere.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                        <div class="card-small card-small-2">
                                            <div class="card-image">
                                                <a href="#">
                                                    <div class="box-image">
                                                        <img src="assets/imgs/page/homepage2/identity.png" alt="iori">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-info">
                                                <a href="#">
                                                    <h6 class="color-brand-1 mb-10">Flexible</h6>
                                                </a>
                                                <p class="font-xs color-grey-500">We believe in your freedom to work when and how you work best, to help us all thrive. Only freedom and independent work can bring out the best in you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pb-50 bg-core-value" id="charitra">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-70">
                    <div class="box-core-value">
                        <div class="shape-left shape-1"></div>
                        <h2 class="color-brand-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="color: #902e01!important;">श्री समर्थ चरित्र</h2>
                        <p class="font-md color-grey-400 wow animate__animated animate__fadeIn pt-30 text-justify" data-wow-delay=".0s">जन्म – चैत्र शु. ९ ( रामनवमी ) शके १५३० : सन १६०८ दुपारी बारा वाजता. जिल्हा – औरंगाबाद, तालुका – अंबड, गाव – जांब. गोदावरी नदीकाठी, नाव – नारायण. मोठा भाऊ – गंगाधर, पिता – सूर्याजीपंत, माता – राणूबाई, आडनाव – ठोसर. घराण्यात सूर्य आणि श्रीराम यांच्या उपासनेची दीर्घ परंपरा.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">बालपण </h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20 text-justify">मर्दानी खेळ, व्यायाम यांची आवड, शरीर कमावलेले, बुध्दी तीव्र, मनोनिग्रह दृढ. वृत्ती हनुमंत आणि श्रीराम यांच्या भक्तीकडे. भक्ती, शुध्द चारित्र्य यांच्या अभावी लोक जन्ममृत्युच्या फेर्‍यात अडकतात याचे दु:ख वाटे. यातून लोकांची सुटका कशी करता येईल याची बालपणापासून चिंता. स्वत:चा विवाह, गृहस्थाश्रम यांची नावड. जन्मजात विरागी. वयाच्या अकराव्या वर्षी श्रीरामाचा साक्षात्कार. श्रीरामाचा आदेश – कृष्णातीरी जाऊन धर्मस्थापना करणे. शिसोदिया वंशी शिवनामा अवतार घेणार आहे. त्यास उपासना देऊन साह्य करणे</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">साधना </h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20 text-justify">भल्या पहाटे उठणे. प्रातर्विधी, स्नान, सूर्यनमस्कार. मग नदीच्या पात्रात कमरेइतक्या पाण्यात उभे राहून सूर्य माथ्यावर येईपर्यंत ‘श्रीराम जय राम जय जय राम’ या तेरा अक्षरी मंत्राचा जप. त्यानंतर फक्त पाच घरी माधुकरी मागणे. श्रीरामाला नैवेद्य दाखवून मग स्वत: जेवणे. दुपारी पंचवटीतील श्रीराममंदिरात जाऊन अध्यात्मग्रंथांचे वाचन – श्रवण. वाल्मिकी रामायणाचा अभ्यास व लेखन. सायंकाळी प्रवचन कीर्तन, रात्री भजन ऎकणे. आरती झाल्यावर निद्रा.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list-core-value">
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">मठस्थापना व स्त्रियांचे सबलीकरण</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20 text-justify">आपल्या राष्ट्र्जागृतीच्या कार्यासाठी रामदासांनी देशभर जागोजागी मठ स्थापन केले. अनेक महंत – शिष्य तयार केले. एवढेच नव्हे तर स्त्रियांनाही या धर्मकार्याला लावले. रामदासांच्या अठरा स्त्री शिष्या होत्या. त्यापैकी वेणाबाईंना त्यांनी मिरजेच्या मठाची व्यवस्था सांगितली. आक्काबाईंना चाफळ व सज्जनगडाची व्यवस्था सांगितली. स्त्री जातीची निंदा करणार्‍या एका वृध्दाला रामदासांनी ” बहुता दिसांच्या वयोवृध्द मूला । जनी बायकोच्या गुणे जन्म तूला । तये जन्ननीच्या कुळा निंदितोसी । वृथा पुष्ट तू मानवामाजि होसी ॥” अशा शब्दांत फटकारले आहे.</p>
                            </div>
                        </li>
                        <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <span class="ticked"></span>
                            <h5 class="color-brand-1 mb-5">कार्यारंभ व विस्तार</h5>
                            <div class="box-border-dashed">
                                <p class="font-md color-grey-500 mb-20 text-justify">आपल्या या समाज जागृतीच्या कार्याला चाफळ हे ठिकाण उत्तम आहे असे समजून स्वामी शके १५६६ – सन १६४४ मध्ये तेथे आले. तेथे श्रीरामाच्या मूर्तीची स्थापना करुन धडाक्याने रामजन्मोत्सव सुरु केला.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>


<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection('content')