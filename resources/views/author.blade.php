@extends('layouts/frontLayout/front_design')
@section('content')

<main class="main">
	<section class="section banner-contact bg-10 bg-size" style="background-image: url('assets/imgs/author_srs.png'); width: 100%; height: 394px; background-size: cover; background-repeat: no-repeat;">
    </section>

    <section class="section mt-50">
	    <div class="container">
	        <h2 class="color-brand-1 mb-50 wow animate__animated animate__fadeIn" data-wow-delay=".2s">लेखक</h2>
	        <div class="row">
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/sushamatai.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">डॉ. सुषमाताई वाटवे</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">डॉ. सुषमाताई वाटवे एक प्रसिद्ध आणि प्रेरणादायी व्यक्तिमत्व आहेत. त्या एक उच्च शिक्षित आणि सामाजिक कार्यकर्त्या आहेत, ज्यांनी आपले संपूर्ण आयुष्य समाजाच्या उत्कर्षासाठी समर्पित केले आहे. डॉ. सुषमाताई यांच्या कार्यक्षेत्रात शैक्षणिक, सामाजिक, आणि सांस्कृतिक क्षेत्रांचा समावेश आहे.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/varadanand_bhrati.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">वरदानंद भारती</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">वरदानंद भारती हे एक प्रसिद्ध संत, तत्त्वज्ञ, आणि समाजसुधारक होते. त्यांचा जीवनकार्य भारतीय तत्त्वज्ञान, संत परंपरा आणि अध्यात्मिक विचारांशी निगडित होते. वरदानंद भारती यांनी आपल्या शिक्षण आणि कार्यातून मानवतेचे, सत्याचे आणि न्यायाचे महत्त्व सांगितले.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/caphle.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">चारूदत्त आफळे</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">चारूदत्त आफळे हे एक प्रतिष्ठित व्यक्तिमत्व आहेत, जे विविध क्षेत्रांमध्ये छाप सोडलेले आहेत. ते एक लेखक, विचारवंत, आणि समाजसेवक म्हणून ओळखले जातात. त्यांच्या लेखनात समाजातील विविध समस्यांवर विचार मांडले जातात आणि ते अधिक व्यापक दृष्टिकोनातून त्या समस्यांवर प्रकाश टाकतात.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/mohabua_ramdasi.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">मोहनबुवा रामदासी</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">मोहनबुवा रामदासी हे एक प्रसिद्ध मराठी संत आणि गुरु होते, जे रामदासी पंथाचे एक महत्त्वाचे धार्मिक नेते होते. त्यांचा जन्म महाराष्ट्रातील एक साधारण कुटुंबात झाला होता, आणि लहानपणापासूनच त्यांना आध्यात्मिकता आणि भक्तिरचनेंमध्ये रस होता.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/makarandnath.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">स्वामी मकरंदनाथ</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">स्वामी मकरंदनाथ हे एक प्रसिद्ध आणि प्रभावशाली संत होते. त्यांचा जन्म महाराष्ट्रातील एक साधारण कुटुंबात झाला. त्यांना आध्यात्मिक साधना आणि ध्यान यामध्ये गाढ रुची होती. स्वामी मकरंदनाथ हे रामदास स्वामींच्या शिकवणीचे अनुयायी होते आणि त्यांनी संत ज्ञानेश्वरीचे गहन अध्ययन केले.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/chaitanya_maharaj.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">चैतन्य महाराज</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">चैतन्य महाराज हे एक अत्यंत प्रसिद्ध संत होते, जे भक्ति आंदोलनाच्या क्षेत्रात महान व्यक्तिमत्व म्हणून ओळखले जातात. त्यांचा जन्म १४८६ साली नवनगर (आधुनिक बांगलादेश) येथील एक ब्राह्मण कुटुंबात झाला. चैतन्य महाराज यांनी श्रीविठोबा किंवा श्रीकृष्णाची भक्ति सर्वत्र प्रसारित केली.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/देखणे.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">डॉ. रामचंद्र देखणे</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">डॉ. रामचंद्र देखणे हे एक प्रसिद्ध मराठी साहित्यिक, शिक्षक आणि समाजसुधारक होते. ते एक कुशल लेखक आणि विचारवंत म्हणून ओळखले जातात. त्यांनी आपल्या लेखनातून समाजातील असमानता, अंधश्रद्धा आणि अन्यायाविरुद्ध आपली भूमिका व्यक्त केली.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn">
	                <div class="card-member">
	                    <div class="card-top align-items-center">
	                        <div class="card-image">
	                            <a href="{{url('literature')}}"><img src="assets/imgs/team/भोसले.png" alt="iori"></a>
	                        </div>
	                        <div class="card-info">
	                            <a href="{{url('literature')}}"><span class="font-lg-bold color-brand-1">प्रा.शिवाजीराव भोसले</span></a>
	                            <p class="font-xs color-grey-200">लेखक</p>
	                        </div>
	                    </div>
	                    <div class="card-bottom">
	                        <p class="font-xs color-grey-500 text-justify">प्रा. शिवाजीराव भोसले हे एक प्रतिष्ठित शैक्षणिक, समाजसेवी आणि विचारवंत आहेत. त्यांचा जन्म भारतीय संस्कृती आणि शास्त्रांमध्ये गती आणण्यासाठी मोठ्या कार्यशीलतेने ओळखला जातो. त्यांनी अनेक शालेय व महाविद्यालयीन विद्यार्थ्यांसाठी शालेय शिक्षणात महत्त्वपूर्ण योगदान दिले आहे.</p>
	                    </div>
	                </div>
	            </div>

	        </div>
	    </div>
	</section>
</main>

@endsection('content')