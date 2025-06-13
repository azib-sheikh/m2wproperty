
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@stack('title')</title>
    <meta name="description" content="Bery-Real Estate Listing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png" />

  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/magnific.popup.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-hidden">
        <!-- Header start -->

        <header id="sticky-header" class="absolute left-0 top-[15px] lg:top-[30px] xl:top-[40px] w-full z-10">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="index.html" class="block">
                                <img class="white-logo" src="{{asset('assets/images/m2ww-YleWPxZV8ZsVBboM.png')}}" loading="lazy" width="70px" height="70px" alt="brand logo">
                                <img class=" hidden dark-logo" src="{{asset('assets/images/m2ww-YleWPxZV8ZsVBboM.png')}}" loading="lazy" width="70px" height="70px" alt="brand logo">
                            </a>
                            <nav class="flex flex-wrap items-center">
                                <ul class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#" class="sticky-dark transition-all text-white hover:text-secondary">Home</a>


                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#" class="sticky-dark transition-all text-white hover:text-secondary">Properties</a>

                                  
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="agency.html" class="sticky-dark transition-all text-white hover:text-secondary">Agency</a>

                                     

                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#" class="sticky-dark transition-all text-white hover:text-secondary">Blog</a>

                                     

                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="contact-us.html" class="sticky-dark transition-all text-white hover:text-secondary">Contact</a>

                                    </li>
                                </ul>

                    
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- offcanvas-overlay start -->
        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <!-- offcanvas-overlay end -->
        <!-- offcanvas-mobile-menu start -->
        <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

            <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
                <!-- close button start -->
                <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]" aria-label="offcanvas">x</button>
                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-menu mr-[20px]">
                    <ul>
                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index.html">home 01</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-2.html">home 02</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-3.html">home 03</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-4.html">home 04</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-5.html">home 05</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="index-6.html">home 06</a></li>
                            </ul>
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="about.html" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about.html">About</a></li>

                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="about-v2.html">About v2</a></li>
                            </ul>

                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties</a>
                                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">



                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v1.html"> properties v1</a>
                                        </li>
                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="properties-v2.html"> properties v2</a>
                                        </li>
                                        <li>
                                            <a class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary" href="add-properties.html">add properties </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Properties with sidebar</a>
                                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                        <li>
                                            <a href="properties-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                left side bar</a>
                                        </li>
                                        <li>
                                            <a href="properties-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                right side bar</a>
                                        </li>

                                        <li>
                                            <a href="properties-list-left-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                list left side bar</a>
                                        </li>

                                        <li>
                                            <a href="properties-list-right-side-bar.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                list
                                                right side bar</a>
                                        </li>
                                    </ul>


                                </li>
                                <li>
                                    <a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="#">Property Details</a>

                                    <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">

                                        <li>
                                            <a href="add-properties.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">add
                                                properties</a>
                                        </li>

                                        <li>
                                            <a href="properties-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">properties
                                                details</a>
                                        </li>

                                    </ul>

                                </li>

                            </ul>
                        </li>
                        <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Pages</a>

                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">Service</a>
                                </li>
                                <li>
                                    <a href="single-service.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">single
                                        service</a>
                                </li>
                                <li>
                                    <a href="contact-us.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">contact
                                        us</a>
                                </li>
                                <li>
                                    <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                        agency</a>
                                </li>
                                <li>
                                    <a href="login.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">login</a>
                                </li>
                                <li>
                                    <a href="register.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">register</a>
                                </li>
                            </ul>
                        </li>

                        <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">agency</a>

                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li>
                                    <a href="agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency</a>
                                </li>
                                <li>
                                    <a href="create-agency.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">create
                                        agency</a>
                                </li>

                                <li>
                                    <a href="agent.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent</a>
                                </li>

                                <li>
                                    <a href="agency-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agency
                                        details</a>
                                </li>

                                <li>
                                    <a href="agent-details.html" class="text-sm pt-3 px-10 pb-1 text-black font-light block transition-all hover:text-secondary">agent
                                        details</a>
                                </li>

                            </ul>

                        </li>

                        <li class="relative block border-b-primary border-b"><a href="#" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a>

                          
                        </li>
                        <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a></li>
                    </ul>
                </nav>
                <!-- offcanvas-menu end -->

                <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                    <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                        Property</a>
                </div>



            </div>
        </div>
        <!-- offcanvas-mobile-menu end -->
        <!-- Header end -->