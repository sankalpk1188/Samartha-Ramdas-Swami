<?php $url = url()->current();?>

<aside class="main-sidebar elevation-4" style="background:#000000; color:white;">
    <a href="{{ url('/admin/dashboard') }}" class="brand-link text-white p-2">
        <img src="{{asset('/assets/imgs/Logo_srs.svg')}}" class="brand-image" style="width:80%;">
    </a>
    <div class="sidebar">        
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-link text-white @if(preg_match('#/admin/dashboard#',$url)) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                {{-- Notifications --}}
                <li class="nav-item">
                    <a href="{{url('admin/view-notifications')}}" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Notifications</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i> 
                        <p>Literature & Author <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-literature/')}}" class="nav-link text-white @if(preg_match('/aboutpage/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Literature
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-author/')}}" class="nav-link text-white @if(preg_match('/story/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Author
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-detailpage/')}}" class="nav-link text-white @if(preg_match('/core/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Detail Page
                            </a>
                        </li>
                    </ul>
                   
                </li>

                {{-- Home --}}
                <li class="nav-item">
                    <a href="#" class="nav-link text-white ">
                        <i class="nav-icon fas fa-home"></i> 
                        <p>Home Page <i class="fas fa-angle-right right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-banner/')}}" class="nav-link text-white @if(preg_match('/banner/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Banner
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/view-about/')}}" class="nav-link text-white @if(preg_match('/about/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/view-stats/')}}" class="nav-link text-white @if(preg_match('/stats/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Stats
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/view-whykpca/')}}" class="nav-link text-white @if(preg_match('/whykpca/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Why KPCA
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- About --}}
                <li class="nav-item">
                    <a href="#" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i> 
                        <p>About Us Page <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-aboutpage/')}}" class="nav-link text-white @if(preg_match('/aboutpage/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> About Us
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-story/')}}" class="nav-link text-white @if(preg_match('/story/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Our Story
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-core/')}}" class="nav-link text-white @if(preg_match('/core/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Core Values
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-vision/')}}" class="nav-link text-white @if(preg_match('/vision/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Vision & Mission
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-spread/')}}" class="nav-link text-white @if(preg_match('/spread/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Industry Spread
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- News --}}
                <li class="nav-item">
                    <a href="#" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Media <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/add-news/')}}" class="nav-link text-white @if(preg_match('/add-news/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Add News
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-news/')}}" class="nav-link text-white @if(preg_match('/view-news/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> View News 
                            </a>
                        </li>
                    </ul>
                </li>

               

              

                <li class="nav-item">
                    <a href="{{url('admin/view-gallery')}}" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Gallery</p>
                    </a>
                </li>

                {{-- Contact --}}
                <li class="nav-item">
                    <a href="#" class="nav-link text-white ">
                        <i class="nav-icon fas fa-user-cog"></i> 
                        <p>Contact Page <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admin/view-contact/')}}" class="nav-link text-white @if(preg_match('/contact/', $url)) active @endif">
                                <i class="nav-icon fas fa-arrow-right"></i> Contact Details
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon fas fa-arrow-right"></i> Contact Enquiry
                            </a>
                        </li>
                    </ul>
                </li> 
            </ul>
        </nav>  
    </div>
</aside>