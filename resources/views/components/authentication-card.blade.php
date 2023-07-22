<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
<section  class="mt-5 bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="">
                    <div class="h5 text-white">
                       About Us
                    </div>
                    <div class="description-bottom text-white">
                      <p>
                        Founded in 2023, venue walaa is a product of Omni force, an Indian internet company. 
                        venue walaa team is making it easier to find and book venues and vendors across 30+ 
                        cities in India. 
                      </p>
                      <p>
                        We are a young team that loves to find all kinds of trendy, chic,
                        professional, or unique venues and vendors.
                      </p>
                        <p>
                            <a class=" text-decoration-none btn-subscribe btn" href="{{ url('about-us') }}">
                                Read More
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 ">
                <div class="">
                    <div class="h5 text-white">
                        Know Us
                    </div>
                    <div class="description-bottom">
                        <div class="footer-listing">
                            <a class="text-white text-decoration-none" href="{{ url('about-us') }}">Our Story</a>
                        </div>
                        <div class="footer-listing">
                            <a class="text-white text-decoration-none" href="{{ url('contact-us') }}">Contact Us</a>
                        </div>
                        
                        {{-- <div class="footer-listing">
                            <a class="text-white text-decoration-none" href="{{ url('blog') }}">Blog</a>
                        </div> --}}
                        <div class="footer-listing mt-4">
                            <a class="btn-subscribe btn" href="{{ url('list-your-business') }}">List your business </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="">
                    <div class="h5 text-white">
                        Need Help
                    </div>
                    <div class="footer-listing">
                        <a class="text-white text-decoration-none" href="{{ url('faq') }}">FAQ
                        </a>
                    </div>
                    
                    <div class="footer-listing">
                        <a class="text-white text-decoration-none" href="{{ url('privacy-policy') }}">Privacy Policy
                        </a>
                    </div>
                    <div class="footer-listing">
                        <a class="text-white text-decoration-none" href="{{ url('terms-and-conditions') }}">Terms and
                            Conditions
                        </a>
                    </div>
                    <div class="footer-listing">
                        <a class="text-white text-decoration-none" 
                        href="{{ url('sitemap.xml') }}">Sitemap
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                    <div class="h5 text-white">
                        Find Us
                    </div>
                    <div class="socila-media ">
                        <a href="https://www.facebook.com/" target="_blank" class="text-white">
                            <i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="text-white">
                            <i class="fa fa-twitter"></i></a>
                        <a href="https://in.linkedin.com/" target="_blank" class="text-white">
                            <i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="h5 mt-4 text-white">
                        Subscribe Our Newsletter
                    </div>
                    <form action="newsletter" method="POST">
                        @csrf
                         <div class="row">
                            <div class="col-lg-8">
                                <input type="email" name="email" class="form-control" id="subscriber_email" 
                                placeholder="Enter email address" required="">
                            </div>
                            <div class="col-lg-4">
                             <div class="">
                                 <input type="submit" onclick="addSubscriber();" class="btn-subscribe btn" value="Subscribe">
                             </div>
                            </div>
                         </div>
                    </form>
            </div>
        </div>
      
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mt-3">
                    <p>
                        © 2023 Venue wallaa All Rights Reserved.  
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-vendor pt-5 pb-2">
    <div class="container">
        <div class="row">
            <div class="container">
                <ul class="college-list">
                    <li>
                        <a href="{{ url('venue/corporate-party') }}" class="text-decoration-none">
                            Corporate party
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('venue/wedding-management') }}" class="text-decoration-none">
                            Wedding management
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('venue/wedding-anniversary') }}" class="text-decoration-none">
                            Wedding anniversary
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('venue/birthday-party') }}" class="text-decoration-none">
                            Birthday party
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('venue/engagement') }}" class="text-decoration-none">
                            Engagement
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<a href="https://api.whatsapp.com/send?phone=+917087227751&amp;text=How may I help you !!!" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>


