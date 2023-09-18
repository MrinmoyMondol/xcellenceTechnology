
<!-- Start Footer & Subscribe Section -->
<section class="footer-subscribe-wrapper">

    <!-- Start Footer Area -->
    <div class="footer-area pt-70 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>About Us</h3>
                        </div>
                        <p class="text-justify">
                           Xcellence Technology is the partner of choice for many of the world’s leading enterprises, SMEs, and technology challengers. We help businesses elevate their value through Virtual Assistants,
                           custom website development, Software Quality Assurance, Project Management, and consultancy services.
                           We can help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.

                        </p>

                        <ul class="footer-social">
                            <li>
                                <a href="#"> <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul class="footer-quick-links">
                            <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Contact Info</h3>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-phone-call"></i>
                            <h3>Phone</h3>
                            <span><a href="tel:0802235678">(+880) 16-255-48959</a></span>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-envelope"></i>
                            <h3>Email</h3>
                            <span><a href="mailto:info@xcellencetechnology.com">info@xcellencetechnology.com</a></span>
                        </div>
                        <div class="footer-info-contact"> <i class="flaticon-placeholder"></i>
                            <h3>Address</h3>
                            <span>Dhaka, Bangladesh</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
{{--                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fvirtualsheba2&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=232497725092445" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>--}}


                        <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61551428818550" data-tabs="timeline" data-width="440" data-height="330"
                             data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/profile.php?id=61551428818550" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/profile.php?id=61551428818550">Xcellence Technology</a>
                            </blockquote>
                        </div>



                    </div>


                </div>


            </div>


            <!-- Messenger Chat Plugin Code -->
            <div id="fb-root"></div>

            <!-- Your Chat Plugin code -->
            <div id="fb-customer-chat" class="fb-customerchat">
            </div>

            <script>
                var chatbox = document.getElementById('fb-customer-chat');
                chatbox.setAttribute("page_id", "105466885534845");
                chatbox.setAttribute("attribution", "biz_inbox");
            </script>

            <!-- Your SDK code -->
            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        xfbml            : true,
                        version          : 'v14.0'
                    });
                };

                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>


        </div>
    </div>
    <!-- End Footer Section -->
</section>
<!-- End Footer & Subscribe Section -->

<!-- Start Copy Right Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p> <i class="far fa-copyright"></i>  <script>document.write(new Date().getFullYear())</script>  Xcellence Technology - All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul>
                    <li> <a href="">Terms & Conditions</a>
                    </li>
                    <li> <a href="">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Section -->
