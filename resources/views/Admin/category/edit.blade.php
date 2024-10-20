@extends('Admin.layouts.master')

@section('main-body')
    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

    <div class="flex-align gap-16">
        <!-- Toggle Button Start -->
         <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
        <!-- Toggle Button End -->
        
        <form action="#" class="w-350 d-sm-block d-none">
            <div class="position-relative">
                <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i class="ph ph-magnifying-glass"></i></button> 
                <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
            </div>
        </form>
    </div>

    <div class="flex-align gap-16">
        <div class="flex-align gap-8">
            <!-- Notification Start -->
            <div class="dropdown">
                <button class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="position-relative">
                        <i class="ph ph-bell"></i>
                        <span class="alarm-notify position-absolute end-0"></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom p-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="py-8 px-24 bg-main-600">
                                <div class="flex-between">
                                    <h5 class="text-xl fw-semibold text-white mb-0">Notifications</h5>
                                    <div class="flex-align gap-12">
                                        <button type="button" class="bg-white rounded-6 text-sm px-8 py-2 hover-text-primary-600"> New </button>
                                        <button type="button" class="close-dropdown hover-scale-1 text-xl text-white"><i class="ph ph-x"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-24 max-h-270 overflow-y-auto scroll-sm">
                                <div class="d-flex align-items-start gap-12">
                                    <img src="assets/images/thumbs/notification-img1.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="border-bottom border-gray-100 mb-24 pb-24">
                                        <div class="flex-align gap-4">
                                            <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Ashwin Bose is requesting access to Design File - Final Project. </a>
                                            <!-- Three Dot Dropdown Start -->
                                            <div class="dropdown flex-shrink-0">
                                                <button class="text-gray-200 rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ph-fill ph-dots-three-outline"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                        <div class="card-body p-12">
                                                            <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                                <ul>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Mark as read</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Delete Notification</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Report</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Three Dot Dropdown End -->
                                        </div>
                                        <div class="flex-align gap-6 mt-8">
                                            <img src="assets/images/icons/google-drive.png" alt="">
                                            <div class="flex-align gap-4">
                                                <p class="text-gray-900 text-sm text-line-1">Design brief and ideas.txt</p>
                                                <span class="text-xs text-gray-200 flex-shrink-0">2.2 MB</span>
                                            </div>
                                        </div>
                                        <div class="mt-16 flex-align gap-8">
                                            <button type="button" class="btn btn-main py-8 text-15 fw-normal px-16">Accept</button>
                                            <button type="button" class="btn btn-outline-gray py-8 text-15 fw-normal px-16">Decline</button>
                                        </div>
                                        <span class="text-gray-200 text-13 mt-8">2 mins ago</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-12">
                                    <img src="assets/images/thumbs/notification-img2.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="">
                                        <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Patrick added a comment on Design Assets - Smart Tags file:</a>
                                        <span class="text-gray-200 text-13">2 mins ago</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline"> View All </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Notification Start -->
            
            <!-- Language Start -->
            <div class="dropdown">
                <button class="text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ph ph-globe"></i>
                </button>
                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                        <div class="card-body">
                            <div class="max-h-270 overflow-y-auto scroll-sm pe-8">
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="arabic"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="assets/images/thumbs/flag1.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Arabic</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="arabic">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="germany"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="assets/images/thumbs/flag2.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Germany</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="germany">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="english"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="assets/images/thumbs/flag3.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">English</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="english">
                                </div>
                                <div class="form-check form-radio d-flex align-items-center justify-content-between ps-0">
                                  <label class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light" for="spanish"> 
                                    <span class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8"> 
                                      <img src="assets/images/thumbs/flag4.png" alt="" class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                      <span class="text-15 fw-semibold mb-0">Spanish</span>
                                    </span>
                                  </label>
                                  <input class="form-check-input" type="radio" name="language" id="spanish">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Language Start -->
        </div>


        <!-- User Profile Start -->
        <div class="dropdown">
            <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="position-relative">
                    <img src="assets/images/thumbs/user-img.png" alt="Image" class="h-32 w-32 rounded-circle">
                    <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                    <div class="card-body">
                        <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                            <img src="assets/images/thumbs/user-img.png" alt="" class="w-54 h-54 rounded-circle">
                            <div class="">
                                <h4 class="mb-0">Michel John</h4>
                                <p class="fw-medium text-13 text-gray-200">examplemail@mail.com</p>
                            </div>
                        </div>
                        <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                            <li class="mb-4">
                                <a href="setting.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-gear"></i></span>
                                    <span class="text">Account Settings</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="pricing-plan.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-bar"></i></span>
                                    <span class="text">Upgrade Plan</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="analytics.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-line-up"></i></span>
                                    <span class="text">Daily Activity</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="message.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chats-teardrop"></i></span>
                                    <span class="text">Inbox</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="email.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-envelope-simple"></i></span>
                                    <span class="text">Email</span>
                                </a>
                            </li>
                            <li class="pt-8 border-top border-gray-100">
                                <a href="sign-in.html" class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-danger-600 d-flex"><i class="ph ph-sign-out"></i></span>
                                    <span class="text">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile Start -->

    </div>
</div>

        
        <div class="dashboard-body">
            <!-- Breadcrumb Start -->
<div class="breadcrumb mb-24">
    <ul class="flex-align gap-4">
        <li><a href="index-2.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
        <li><span class="text-main-600 fw-normal text-15">Library</span></li>
    </ul>
</div>
<!-- Breadcrumb End -->

            <!-- Recommended Start -->
            <div class="card mt-24">
                <div class="card-body">
                    <form action="#" class="search-input-form">
                        <div class="search-input">
                            <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                <option value="" selected disabled>Category</option>
                                <option value="">Web Development</option>
                                <option value="">Web Design</option>
                                <option value="">UX/UI Design</option>
                                <option value="">SEO</option>
                                <option value="">Content Writing</option>
                                <option value="">WordPress Development</option>
                            </select>
                        </div>
                        <div class="search-input">
                            <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                <option value="" selected disabled>Design Level</option>
                                <option value="">Authentication</option>
                                <option value="">Meta</option>
                                <option value="">System</option>
                            </select>
                        </div>
                        <div class="search-input">
                            <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                <option value="" selected disabled>Duration</option>
                                <option value="">1 Hour</option>
                                <option value="">2 Hour</option>
                                <option value="">3 Hour</option>
                                <option value="">4 Hour</option>
                            </select>
                        </div>
                        <div class="search-input">
                            <select class="form-control form-select h6 rounded-4 mb-0 py-6 px-8">
                                <option value="" selected disabled>Type</option>
                                <option value="">Authentication</option>
                                <option value="">Meta</option>
                                <option value="">System</option>
                            </select>
                        </div>
                        <div class="search-input custom--range range-slider px-8">
                            <div id="slider-range"></div>
                            <div class="custom--range__content mt-4">
                                <input type="text" class="custom--range__prices text-gray-600 text-13 fw-semibold" id="amount" readonly>
                            </div>
                        </div>
                        <div class="search-input">
                            <button type="submit" class="btn btn-main rounded-pill py-9 w-100">Search</button>
                        </div>
                    </form>                    
                </div>
            </div>
            <!-- Recommended End -->

            <!-- Recommended Start -->
            <div class="card mt-24">
                <div class="card-body">

                    <div class="mb-20 flex-between flex-wrap gap-8">
                        <h4 class="mb-0">Recommended For You</h4>
                        <div class="flex-align gap-8 flex-wrap">
                            <div class="flex-align text-gray-500 text-13 border border-gray-100 rounded-4 ps-8 focus-border-main-600">
                                <span class="text-lg"><i class="ph ph-layout"></i></span>
                                <select class="form-control px-8 py-12 border-0 text-inherit rounded-4 text-center">
                                    <option value="1" selected disabled>Category</option>
                                    <option value="1">Web</option>
                                    <option value="1">Design</option>
                                    <option value="1">App</option>
                                    <option value="1">SEO</option>
                                </select>
                            </div>
                            <div class="position-relative text-gray-500 flex-align gap-4 text-13">
                                <span class="text-inherit">Sort by: </span>
                                <div class="flex-align text-gray-500 text-13 border border-gray-100 rounded-4 ps-8 focus-border-main-600">
                                    <span class="text-lg"><i class="ph ph-funnel-simple"></i></span>
                                    <select class="form-control px-8 py-12 border-0 text-inherit rounded-4 text-center">
                                        <option value="1" selected>Popular</option>
                                        <option value="1">Latest</option>
                                        <option value="1">Trending</option>
                                        <option value="1">Matches</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-20">
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img1.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Authetication</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Security Management</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img1.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Albert James</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img2.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-main-50 text-main-600 mb-16">Meta</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Meta Verse Method</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img2.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Rober Fox</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img3.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-warning-50 text-warning-600 mb-16">System</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Hook Methodology</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img3.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Sara Wilson</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img4.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Authetication</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Security Management</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img4.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Albert James</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img5.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Authetication</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Data Base System</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img5.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Alizabeth Doe</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img6.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-main-50 text-main-600 mb-16">Meta</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Design Volt</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img6.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Ronald Edwads</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img7.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-warning-50 text-warning-600 mb-16">System</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Printing Design Theory</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img7.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Esther Howard</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card border border-gray-100">
                                <div class="card-body p-8">
                                    <a href="course-details.html" class="bg-main-100 rounded-16 overflow-hidden text-center mb-8 h-164 flex-center">
                                        <img src="assets/images/thumbs/library-img8.png" alt="Course Image" class="cover-img">
                                    </a>
                                    <div class="p-8">
                                        <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Authetication</span>
                                        <h5 class="mb-8"><a href="course-details.html" class="hover-text-main-600">Digital Marketing</a></h5>

                                        <div class="flex-align gap-8">
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-13 text-gray-600">15 min read</span>
                                            </div>
                                            <div class="flex-align gap-4">
                                                <span class="text-sm text-main-600 d-flex"><i class="ph ph-chats-circle"></i></span>
                                                <span class="text-13 text-gray-600">15K</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-align gap-8 flex-wrap mt-20">
                                            <img src="assets/images/thumbs/user-img8.png" class="w-28 h-28 rounded-circle object-fit-cover" alt="User Image">
                                            <div>
                                                <span class="text-gray-600 text-13">Writer <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Jacob Jones</a> </span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex-between gap-4 flex-wrap mt-20">
                                            <div class="flex-align gap-4">
                                                <span class="text-15 fw-bold text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                <span class="text-13 fw-bold text-gray-600">4.8</span>
                                                <span class="text-13 fw-bold text-gray-600">(17k)</span>
                                            </div>
                                            <a href="course-details.html" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                                                Read Now <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-between flex-wrap gap-8 mt-20">
                        <a href="#" class="btn btn-outline-gray rounded-pill py-9 flex-align gap-4">
                            <span class="d-flex text-xl"><i class="ph ph-arrow-left"></i></span> 
                            Previous
                        </a>

                        <ul class="pagination flex-align flex-wrap">
                            <li class="page-item active">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">8</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">9</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link h-44 w-44 flex-center text-15 rounded-8 fw-medium" href="#">10</a>
                            </li>
                        </ul>
                        
                        <a href="#" class="btn btn-outline-main rounded-pill py-9 flex-align gap-4">
                            Next <span class="d-flex text-xl"><i class="ph ph-arrow-right"></i></span> 
                        </a>
                    </div>
                    
                </div>
            </div>
            <!-- Recommended End -->
        </div>
        @endsection