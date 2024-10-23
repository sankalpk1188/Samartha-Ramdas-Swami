<footer class="footer bg-light">
    <div class="footer-1 border-top bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-10">
                        <img src="{{asset('assets/imgs/template/kpca.png')}}" class="w-75" alt="logo">
                    </div>
                    <p class="font-md mb-20 color-grey-400">Kirtane & Pandit LLP Chartered Accountants, Chartered Accountants (KPCA) is an Accounting, Auditing & Consulting firm with a well-established network of financial experts across India.</p>
                    <h6 class="color-brand-1">Follow Us</h6>
                    <div class="mt-15">
                        <a class="icon-socials icon-linkedin mr-15" href="https://www.linkedin.com/company/kirtane-&-pandit-chartered-accountants/?viewAsMember=true" target="_blank"></a>
                        <a class="icon-socials icon-facebook mr-15" href="https://www.facebook.com/Kirtane-Pandit-LLP-Chartered-Accountants-130357583679055" target="_blank"></a>
                        <a class="icon-socials icon-instagram mr-15" href="https://www.instagram.com/kirtane_pandit/" target="_blank"></a>
                        <a class="icon-socials icon-youtube mr-15" href="#" target="_blank"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <h5 class="mb-10 color-brand-1">Quick Links</h5>
                    <ul class="menu-footer">
                        <li><a href="{{url('reports-and-publications')}}">Reports & Publications</a></li>
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('blogs')}}">Blogs</a></li>
                        <li><a href="{{url('careers')}}">Careers</a></li>
                        <li><a href="{{url('careers')}}">Alumni</a></li>
                        <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-30">
                    <h5 class="mb-10 color-brand-1">Services</h5>
                    <ul class="menu-footer">
                        <li><a href="{{url('/services/audit-and-assurance/attest-and-assurance')}}">Audit & Assurance</a></li>
                        <li><a href="#">Tax</a></li>
                        <li><a href="#">BFSI & NBFCs</a></li>
                        <li><a href="#">Consulting & Advisory</a></li>
                        <li><a href="#">IT & Cyber Security</a></li>
                        <li><a href="#">Outsourcing</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    {{-- <h5 class="mb-10 color-brand-1">Get in Touch</h5> --}}
                    <div>
                        <img src="{{asset('assets/imgs/address_map.svg')}}" height="250" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-12 text-center text-lg-start">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-grey-300" href="#">Privacy Policy</a></li>
                            {{-- <li><a class="font-sm color-grey-300" href="term-conditions.html">Cookies</a></li> --}}
                            {{-- <li><a class="font-sm color-grey-300" href="term-conditions.html">Terms of service</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-12 text-center text-lg-end">
                        <span class="color-grey-300">&copy; 1956 - {{date('Y')}}. {{config('app.name')}} LLP Chaterted Accountants | All right reserved. Design & Developed by <a href="https://ycstech.in" target="_blank">YCS TechSoft Pvt. Ltd.</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
