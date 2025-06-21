@extends('layouts.app')
@push('title')
    m2wproperty | Blogs
@endpush
@section('content')

<!-- Hero section start -->
<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('https://htmldemo.net/bery/bery/assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Our Blog</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Latest Blog Post
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        Huge number of propreties availabe here for buy and sell
                        also you can find here co-living property as you like
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Blog Section Start  -->
<section class="blog-section py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[40px]">
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post1.png" width="370" height="270" loading="lazy" alt="Tip’s about Real Estate Recent Conditions from Agent.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">James Alber on 22 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Tip’s about Real Estate Recent Conditions from Agent.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post2.png" width="370" height="270" loading="lazy" alt="Importance of Build quality of modern Real Estate.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Shohel Gyes on 21 December, 22</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Importance of Build quality of modern Real Estate.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post3.png" width="370" height="270" loading="lazy" alt="Most Popular Real Estae area you can choose from.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Ethan Patel on 19 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Most Popular Real Estae area you can choose from.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post4.png" width="370" height="270" loading="lazy" alt="The Home Buying Process: A Comprehensive Guide.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Harshel Gibs on 17 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">The Home Buying Process: A Comprehensive Guide.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post5.png" width="370" height="270" loading="lazy" alt="The Best Types Of Real Estate Investments information.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Garry Sobers on 15 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">The Best Types Of Real Estate Investments information.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post6.png" width="370" height="270" loading="lazy" alt="How Much Does Land Survey Cost in 2022?.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Shane Watson on 10 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">How Much Does Land Survey Cost in 2022?.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post7.png" width="370" height="270" loading="lazy" alt="18 Best Real Estate Apps For Buyers, Sellers & Investors.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Steve Morgan on 08 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">18 Best Real Estate Apps For Buyers, Sellers & Investors.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post8.png" width="370" height="270" loading="lazy" alt="Ultimate Guide to Buying a Vacation Rental Property.">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Shohel Gyes on 05 December, 21</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Ultimate Guide to Buying a Vacation Rental Property.</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>
            <div class="post-item">
                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[35px]">
                    <img class="w-full h-full" src="https://htmldemo.net/bery/bery/assets/images/blog-post/post9.png" width="370" height="270" loading="lazy" alt="Do You Qualify For Real Estate Line Of Credit?">
                </a>
                <div>
                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px]">Shohel Gyes on 21 December, 29</span>
                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Do You Qualify For Real Estate Line Of Credit?</a></h3>
                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                </div>
            </div>


        </div>
        <div class="grid grid-cols-12 mt-[50px] gap-x-[30px]">
            <div class="col-span-12">
                <ul class="pagination flex flex-wrap items-center justify-center">

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_876_580)">
                                    <path d="M5.8853 10.0592C5.7326 10.212 5.48474 10.212 5.33204 10.0592L0.636322 5.36134C0.48362 5.20856 0.48362 4.96059 0.636322 4.80782L5.33204 0.109909C5.48749 -0.0403413 5.73535 -0.0359829 5.8853 0.119544C6.03181 0.271171 6.03181 0.511801 5.8853 0.663428L1.46633 5.08446L5.8853 9.50573C6.03823 9.65873 6.03823 9.90648 5.8853 10.0592Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_876_580">
                                        <rect width="5.47826" height="10.1739" fill="white" transform="matrix(-1 0 0 1 6 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">1</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">2</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">3</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">4</a>
                    </li>

                    <li class="mx-2">
                        <span>---</span>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">25</a>
                    </li>

                    <li class="mx-2">
                        <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                            <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(.clip0_876_576)">
                                    <path d="M0.114699 10.0592C0.267401 10.212 0.515257 10.212 0.667959 10.0592L5.36368 5.36134C5.51638 5.20856 5.51638 4.96059 5.36368 4.80782L0.667959 0.109909C0.512505 -0.0403413 0.26465 -0.0359829 0.114699 0.119544C-0.031813 0.271171 -0.031813 0.511801 0.114699 0.663428L4.53367 5.08446L0.114699 9.50573C-0.038233 9.65873 -0.038233 9.90648 0.114699 10.0592Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath class="clip0_876_576">
                                        <rect width="5.47826" height="10.1739" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </div>
</section>
<!-- Blog Section End  -->

<!-- News Letter section start -->
<section class="py-[80px] lg:p-[90px] bg-primary relative">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="col-span">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full lg:w-auto">
                        <h3 class="font-lora text-white text-[24px] sm:text-[30px] xl:text-[36px] leading-[1.277] mb-[10px]">Are you a Home Owner?</h3>
                        <p class="text-secondary leading-[1.5] tracking-[0.03em] mb-10">Put your email address and get listed.</p>
                        <form id="mc-form" action="#" class="relative w-full">
                            <input id="mc-email" class="font-light text-white leading-[1.75] opacity-100 border border-secondary w-full lg:w-[395px] xl:w-[495px] h-[60px] rounded-[10px] py-[15px] pl-[15px] pr-[15px] sm:pr-[135px] focus:border-white focus:outline-none border-opacity-60 placeholder:text-[#E2E2E2] bg-transparent" type="text" placeholder="Enter your email here...">
                            <button id="mc-submit" type="submit" class="text-white font-medium text-[16px] leading-none tracking-[0.02em] bg-secondary py-[17px] px-[20px] mt-5 sm:mt-0 rounded-[10px] hover:bg-white hover:text-primary transition-all sm:absolute sm:right-[4px] sm:top-1/2 sm:-translate-y-1/2">Get Listed</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                    <div class="w-full hidden lg:block lg:w-auto mt-5 lg:mt-0">
                        <div class="relative mt-10 md:mt-0 lg:absolute lg:right-0 lg:bottom-0">
                            <img class="hero_image lg:max-w-[550px] xl:max-w-[650px] 2xl:max-w-[714px]" src="https://htmldemo.net/bery/bery/assets/images/newsletter/bg-1.png" width="866" height="879" alt="hero image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- News Letter section End -->


@endsection