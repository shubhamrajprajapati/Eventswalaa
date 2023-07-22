<section  class="mt-5 bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="">
                    <div class="h5 text-white">
                       About Us
                    </div>
                    <div class="description-bottom text-white">
                      <p>
                        EventsWalaa is an Indian online event booking and management company founded in 2022. EventsWalaa is a product of Omniforce technologies Headquartered in Greater Noida, Uttar Pradesh. The company provides online event booking services including marriage, birthdays, anniversaries, corporate and, private parties. It makes a user to easily find and book venues and vendors across 30+ cities in India.
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
            
            <div class="col-lg-3">
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
                    {{-- <div class="h5 mt-4 text-white">
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
                    </form> --}}
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
                        © 2023 EventsWalaa  All Rights Reserved.  
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
                            <a href="{{ url('/venue/wedding-ceremony') }}" class="text-decoration-none">
                                Wedding Ceremony
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/venue/wedding-reception') }}" class="text-decoration-none">
                                Wedding Reception
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/venue/engagement-ceremony') }}" class="text-decoration-none">
                                Engagement Ceremony
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/venue/wedding-anniversary') }}" class="text-decoration-none">
                                Wedding anniversary
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/venue/birthday-party') }}" class="text-decoration-none">
                                Birthday party
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/venue/birthday-party-for-kids') }}" class="text-decoration-none">
                                Birthday Party for Kids
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/venue/corporate-party') }}" class="text-decoration-none">
                                Corporate party
                            </a>
                        </li>
                    <li>
                        <a href="{{ url('/venue/corporate-training') }}" class="text-decoration-none">
                            Corporate Training
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<a href="https://api.whatsapp.com/send?phone=+918882976880&amp;text=How may I help you !!!" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

