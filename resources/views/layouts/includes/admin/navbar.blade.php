{{-- 
<div class="pre-loader">
   <div class="pre-loader-box">
      <div class="loader-logo">
         <img src="{{ asset('assets/vendors/images/deskapp-logo.svg')}}" alt="Logo" />
      </div>
      <div class="loader-progress" id="progress_div">
         <div class="bar" id="bar1"></div>
      </div>
      <div class="percent" id="percent1">0%</div>
      <div class="loading-text">Loading...</div>
   </div>
</div>
--}}
<div class="header">
    <div class="header-left">
       <div class="menu-icon bi bi-list"></div>
       {{-- <div class="search-toggle-icon bi bi-search"
          data-toggle="header_search"
          ></div>
       <div class="header-search">
          <form>
             <div class="form-group mb-0">
                <i class="dw dw-search2 search-icon"></i>
                <input
                   type="text"
                   class="form-control search-input"
                   placeholder="Search Here"
                   />
                <div class="dropdown">
                   <a
                      class="dropdown-toggle no-arrow"
                      href="#"
                      role="button"
                      data-toggle="dropdown"
                      >
                   <i class="ion-arrow-down-c"></i>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right">
                      <div class="form-group row">
                         <label class="col-sm-12 col-md-2 col-form-label"
                            >From</label
                            >
                         <div class="col-sm-12 col-md-10">
                            <input
                               class="form-control form-control-sm form-control-line"
                               type="text"
                               />
                         </div>
                      </div>
                      <div class="form-group row">
                         <label class="col-sm-12 col-md-2 col-form-label">To</label>
                         <div class="col-sm-12 col-md-10">
                            <input
                               class="form-control form-control-sm form-control-line"
                               type="text"
                               />
                         </div>
                      </div>
                      <div class="form-group row">
                         <label class="col-sm-12 col-md-2 col-form-label"
                            >Subject</label
                            >
                         <div class="col-sm-12 col-md-10">
                            <input
                               class="form-control form-control-sm form-control-line"
                               type="text"
                               />
                         </div>
                      </div>
                      <div class="text-right">
                         <button class="btn btn-primary">Search</button>
                      </div>
                   </div>
                </div>
             </div>
          </form>
       </div> --}}
    </div>
    <div class="header-right">
       <div class="dashboard-setting user-notification">
          <div class="dropdown">
             <a
                class="dropdown-toggle no-arrow"
                href="javascript:;"
                data-toggle="right-sidebar"
                >
             <i class="dw dw-settings2"></i>
             </a>
          </div>
       </div>
       <div class="user-notification">
          {{-- <div class="dropdown">
             <a
                class="dropdown-toggle no-arrow"
                href="#"
                role="button"
                data-toggle="dropdown"
                >
             <i class="icon-copy dw dw-notification"></i>
             <span class="badge notification-active"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-right">
                <div class="notification-list mx-h-350 customscroll">
                   <ul>
                      <li>
                         <a href="#">
                            <img src="vendors/images/img.jpg" alt="" />
                            <h3>John Doe</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img src="vendors/images/photo1.jpg" alt="" />
                            <h3>Lea R. Frith</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img src="vendors/images/photo2.jpg" alt="" />
                            <h3>Erik L. Richards</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img src="vendors/images/photo3.jpg" alt="" />
                            <h3>John Doe</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img src="vendors/images/photo4.jpg" alt="" />
                            <h3>Renee I. Hansen</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img src="vendors/images/img.jpg" alt="" />
                            <h3>Vicki M. Coleman</h3>
                            <p>
                               Lorem ipsum dolor sit amet, consectetur adipisicing
                               elit, sed...
                            </p>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div> --}}
       </div>
       <div class="user-info-dropdown">
          <div class="dropdown">
             <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
             <span class="user-icon">
             <img src="{{ asset('uploads/profile/'.Auth::user()->image)}}" alt="{{ Auth::user()->name }}" />
             </span>
             <span class="user-name">Welcome {{ Auth::user()->name }}</span>
             </a>
             <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="{{ url('/my-profile') }}">
                  <i class="dw dw-user1"></i> Profile
               </a>
                <a class="dropdown-item" href="{{ url('/my-profile') }}">
                  <i class="dw dw-settings2"></i> Setting
               </a>
                <a class="dropdown-item" href="faq.html">
                  <i class="dw dw-help"></i> Help
               </a> 
                   <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="dw dw-logout"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                {{-- <a class="dropdown-item" href="login.html"
                   ><i class="dw dw-logout"></i> Log Out</a> --}}
             </div>
          </div>
       </div>
       {{-- <div class="github-link">
          <a href="https://github.com/dropways/deskapp" target="_blank"
             ><img src="vendors/images/github.svg" alt=""
             /></a>
       </div> --}}
    </div>
 </div>
 <div class="right-sidebar">
    <div class="sidebar-title">
       <h3 class="weight-600 font-16 text-blue">
          Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings
            </span>
       </h3>
       <div class="close-sidebar" data-toggle="right-sidebar-close">
          <i class="icon-copy ion-close-round"></i>
       </div>
    </div>
    <div class="right-sidebar-body customscroll">
       <div class="right-sidebar-body-content">
          <h4 class="weight-600 font-18 pb-10">Header Background</h4>
          <div class="sidebar-btn-group pb-30 mb-10">
             <a
                href="javascript:void(0);"
                class="btn btn-outline-primary header-white active"
                >White</a
                >
             <a
                href="javascript:void(0);"
                class="btn btn-outline-primary header-dark"
                >Dark</a
                >
          </div>
          <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
          <div class="sidebar-btn-group pb-30 mb-10">
             <a
                href="javascript:void(0);"
                class="btn btn-outline-primary sidebar-light"
                >White</a
                >
             <a
                href="javascript:void(0);"
                class="btn btn-outline-primary sidebar-dark active"
                >Dark</a
                >
          </div>
          <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
          <div class="sidebar-radio-group pb-10 mb-10">
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebaricon-1"
                   name="menu-dropdown-icon"
                   class="custom-control-input"
                   value="icon-style-1"
                   checked=""
                   />
                <label class="custom-control-label" for="sidebaricon-1"
                   ><i class="fa fa-angle-down"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebaricon-2"
                   name="menu-dropdown-icon"
                   class="custom-control-input"
                   value="icon-style-2"
                   />
                <label class="custom-control-label" for="sidebaricon-2"
                   ><i class="ion-plus-round"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebaricon-3"
                   name="menu-dropdown-icon"
                   class="custom-control-input"
                   value="icon-style-3"
                   />
                <label class="custom-control-label" for="sidebaricon-3"
                   ><i class="fa fa-angle-double-right"></i
                   ></label>
             </div>
          </div>
          <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
          <div class="sidebar-radio-group pb-30 mb-10">
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-1"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-1"
                   checked=""
                   />
                <label class="custom-control-label" for="sidebariconlist-1"
                   ><i class="ion-minus-round"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-2"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-2"
                   />
                <label class="custom-control-label" for="sidebariconlist-2"
                   ><i class="fa fa-circle-o" aria-hidden="true"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-3"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-3"
                   />
                <label class="custom-control-label" for="sidebariconlist-3"
                   ><i class="dw dw-check"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-4"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-4"
                   checked=""
                   />
                <label class="custom-control-label" for="sidebariconlist-4"
                   ><i class="icon-copy dw dw-next-2"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-5"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-5"
                   />
                <label class="custom-control-label" for="sidebariconlist-5"
                   ><i class="dw dw-fast-forward-1"></i
                   ></label>
             </div>
             <div class="custom-control custom-radio custom-control-inline">
                <input
                   type="radio"
                   id="sidebariconlist-6"
                   name="menu-list-icon"
                   class="custom-control-input"
                   value="icon-list-style-6"
                   />
                <label class="custom-control-label" for="sidebariconlist-6"
                   ><i class="dw dw-next"></i
                   ></label>
             </div>
          </div>
          <div class="reset-options pt-30 text-center">
             <button class="btn btn-danger" id="reset-settings">
             Reset Settings
             </button>
          </div>
       </div>
    </div>
 </div>
 <div class="left-side-bar">
    <div class="brand-logo">
       <a href="{{ url('/admin/dashboard')}}">
       <img src="{{ asset('assets/images/logo.png') }}" alt="" class="dark-logo" />
       <img src="{{ asset('assets/images/white-logo.png') }}" alt="Logo" class="light-logo" />
       </a>
       <div class="close-sidebar" data-toggle="left-sidebar-close">
          <i class="ion-close-round"></i>
       </div>
    </div>
    <div class="menu-block customscroll">
       <div class="sidebar-menu">
          <ul id="accordion-menu">
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-briefcase"></span>
                {{-- <i class="icon-copy ion-social-buffer"></i> --}}
                <span class="mtext">Category</span>
                </a>
                <ul class="submenu">
                  <li> <a href="{{ url('admin/category/create') }}">Add Category</a></li>
                  <li><a href="{{ url('admin/category') }}">View Category</a></li>
                  <li> <a href="{{ url('/admin/category/delete') }}">Deleted Category</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-textarea-resize"></span
                   ><span class="mtext">Brand</span>
                </a>
                <ul class="submenu">
                  <li><a href="{{ url('admin/brand/create') }}">Add Brand</a></li>
                   <li><a href="{{ url('admin/brand') }}">View Brand</a></li>
                   <li><a href="{{ url('admin/brand/delete') }}">Deleted Brand</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-table"></span
                   ><span class="mtext">Venue</span>
                </a>
                <ul class="submenu">
                   <li><a href="{{ url('admin/products/create')}}">Add Venue</a></li>
                   <li><a href="{{ url('admin/products')}}">View Venue</a></li>
                   <li><a href="{{ url('admin/products/delete')}}">Deleted Venue</a></li>
                </ul>
             </li>
            
             {{-- <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                  <span class="micon bi bi-archive"></span><span class="mtext"> Colors </span>
                </a>
                <ul class="submenu">
                   <li><a href="{{ url('admin/colors') }}">View Colors</a></li>
                   <li><a href="{{url('admin/colors/create')}}">Add Colors</a></li>
                </ul>
             </li> --}}
              <li>
                <a href="{{ url('admin/business') }}" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-calendar4-week"></span
                   ><span class="mtext">Business Inquiry</span>
                </a>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-command"></span><span class="mtext">Slider</span>
                </a>
                <ul class="submenu">
                  <li><a href="{{ url('admin/sliders/create')}}">Add Slider</a></li>
                   <li><a href="{{ url('admin/sliders')}}">View Slider</a></li>
                </ul>
             </li>
            
             <li class="dropdown">
               <a href="javascript:;" class="dropdown-toggle">
               <span class="micon bi bi-command"></span><span class="mtext">Orders</span>
               </a>
               <ul class="submenu">
                  <li><a href="{{ url('admin/orders/create')}}">Add Orders</a></li>
                  <li><a href="{{ url('admin/orders')}}">View Orders</a></li>
               </ul>
            </li>

            
             <li class="{{ Request::is('admin/ratings') ? 'active' : '' }}">
               <a href="{{ url('admin/ratings')}}" class="dropdown-toggle no-arrow">
               <span class="micon bi bi-diagram-3"></span
                  ><span class="mtext">Ratings</span>
               </a>
            </li>
            <li class="dropdown">
               <a href="javascript:;" class="dropdown-toggle">
               <span class="micon bi bi-pie-chart"></span
                  ><span class="mtext">Blog Category</span>
               </a>
               <ul class="submenu">
                  <li><a href="{{ url('/admin/blogcategory/create') }}">Add Blog Category</a></li>
                  <li><a href="{{ url('/admin/blogcategory')}}">View Blog Category</a></li>
                  <li><a href="{{ url('/admin/blogcategory/delete')}}">Deleted  Category</a></li>
               </ul>
            </li>
            <li class="dropdown">
               <a href="javascript:;" class="dropdown-toggle">
               <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Blogs</span>
               </a>
               <ul class="submenu">
                  <li><a href="{{ url('/admin/blogs/create')}}">Add Blogs</a></li>
                  <li><a href="{{ url('/admin/blogs/')}}">View Blogs</a></li>
                  <li><a href="{{ url('/admin/blogs/delete')}}">Deleted Blogs</a></li>
               </ul>
            </li>
            <li>
               <a href="javascript:;" class="dropdown-toggle">
               <span class="micon dw dw-user1"></span
                  ><span class="mtext">Users</span>
               </a>
               <ul class="submenu">
                  <li><a href="{{ url('admin/usersdetails') }}">All Users</a></li>
               </ul>
            </li> 
             {{-- <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-pie-chart"></span
                   ><span class="mtext">Charts</span>
                </a>
                <ul class="submenu">
                   <li><a href="highchart.html">Highchart</a></li>
                   <li><a href="knob-chart.html">jQuery Knob</a></li>
                   <li><a href="jvectormap.html">jvectormap</a></li>
                   <li><a href="apexcharts.html">Apexcharts</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-file-earmark-text"></span
                   ><span class="mtext">Additional Pages</span>
                </a>
                <ul class="submenu">
                   <li><a href="video-player.html">Video Player</a></li>
                   <li><a href="login.html">Login</a></li>
                   <li><a href="forgot-password.html">Forgot Password</a></li>
                   <li><a href="reset-password.html">Reset Password</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-bug"></span
                   ><span class="mtext">Error Pages</span>
                </a>
                <ul class="submenu">
                   <li><a href="400.html">400</a></li>
                   <li><a href="403.html">403</a></li>
                   <li><a href="404.html">404</a></li>
                   <li><a href="500.html">500</a></li>
                   <li><a href="503.html">503</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-back"></span
                   ><span class="mtext">Extra Pages</span>
                </a>
                <ul class="submenu">
                   <li><a href="blank.html">Blank</a></li>
                   <li><a href="contact-directory.html">Contact Directory</a></li>
                   <li><a href="blog.html">Blog</a></li>
                   <li><a href="blog-detail.html">Blog Detail</a></li>
                   <li><a href="product.html">Product</a></li>
                   <li><a href="product-detail.html">Product Detail</a></li>
                   <li><a href="faq.html">FAQ</a></li>
                   <li><a href="profile.html">Profile</a></li>
                   <li><a href="gallery.html">Gallery</a></li>
                   <li><a href="pricing-table.html">Pricing Tables</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-hdd-stack"></span
                   ><span class="mtext">Multi Level Menu</span>
                </a>
                <ul class="submenu">
                   <li><a href="javascript:;">Level 1</a></li>
                   <li><a href="javascript:;">Level 1</a></li>
                   <li><a href="javascript:;">Level 1</a></li>
                   <li class="dropdown">
                      <a href="javascript:;" class="dropdown-toggle">
                      <span class="micon fa fa-plug"></span
                         ><span class="mtext">Level 2</span>
                      </a>
                      <ul class="submenu child">
                         <li><a href="javascript:;">Level 2</a></li>
                         <li><a href="javascript:;">Level 2</a></li>
                      </ul>
                   </li>
                   <li><a href="javascript:;">Level 1</a></li>
                   <li><a href="javascript:;">Level 1</a></li>
                   <li><a href="javascript:;">Level 1</a></li>
                </ul>
             </li>
             <li>
                <a href="sitemap.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-diagram-3"></span
                   ><span class="mtext">Sitemap</span>
                </a>
             </li>
             <li>
                <a href="chat.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-chat-right-dots"></span
                   ><span class="mtext">Chat</span>
                </a>
             </li>
             <li>
                <a href="invoice.html" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-receipt-cutoff"></span
                   ><span class="mtext">Invoice</span>
                </a>
             </li>
             <li>
                <div class="dropdown-divider"></div>
             </li>
             <li>
                <div class="sidebar-small-cap">Extra</div>
             </li>
             <li>
                <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-file-pdf"></span
                   ><span class="mtext">Documentation</span>
                </a>
                <ul class="submenu">
                   <li><a href="introduction.html">Introduction</a></li>
                   <li><a href="getting-started.html">Getting Started</a></li>
                   <li><a href="color-settings.html">Color Settings</a></li>
                   <li>
                      <a href="third-party-plugins.html">Third Party Plugins</a>
                   </li>
                </ul>
             </li>
             <li>
                <a
                   href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                   target="_blank"
                   class="dropdown-toggle no-arrow"
                   >
                <span class="micon bi bi-layout-text-window-reverse"></span>
                <span class="mtext"
                   >Landing Page
                <img src="vendors/images/coming-soon.png" alt="" width="25"
                   /></span>
                </a>
             </li> --}}
          </ul>
       </div>
    </div>
 </div>
 <div class="mobile-menu-overlay"></div>