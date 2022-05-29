        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                        <li class="nav-item {{ Request::is('admin/dashboard*')? 'active' : '' }}"> 
                            <a href="{{ route('admin.dashboard') }}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu ">Home</span></a></li>

                        <li class="nav-item {{ Request::is('admin/visitor*')? 'active' : '' }}"> 
                            <a href="{{ route('admin.visitor') }}" ><span> <i class="fas fa-users "></i> </span><span class="hide-menu">Visitor</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('admin/service*')? 'active' : '' }}"> 
                            <a href="{{ route('service.index') }}" ><span> <i class="fas fa-globe"></i> </span><span class="hide-menu">Services</span>
                            </a>
                        </li>
                       <li class="nav-item {{ Request::is('admin/course*')? 'active': '' }}"> 
                            <a href="{{ route('course.index') }}" ><span> <i class="fas fa-book-open"></i> </span><span class="hide-menu">Courses</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('admin/project*')? 'active': '' }}"> 
                            <a href="{{ route('project.index') }}" ><span> <i class="fas fa-project-diagram"></i> </span><span class="hide-menu">Projects</span>
                            </a>
                        </li> 

                         <li class="nav-item {{ Request::is('admin/contact*')? 'active': '' }}"> 
                            <a href="{{ route('contact.index') }}" ><span> <i class="fas fa-address-book"></i> </span><span class="hide-menu">Contact</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/photos*')? 'active': '' }}"> 
                            <a href="{{ route('photos.index') }}" ><span> <i class="fas fa-image"></i> </span><span class="hide-menu">Gallery</span>
                            </a>
                        </li>



{{--                 <li class="nav-item {{ Request::is('admin/slider*')? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('slider.index')}}">
                        <i class="material-icons">slideshow</i>
                        <p>Slider</p>
                    </a>
                </li> --}}
{{-- 
                        <li> <a href="service.html" ><span> <i class="fas fa-globe"></i> </span><span class="hide-menu">Services</span></a></li> --}}
                    </ul>
                </nav>
            </div>
        </aside>