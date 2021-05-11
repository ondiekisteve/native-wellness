<!-- footer-area -->
<footer class="footer-area">
    <div class="footer-top pt-65 pb-25">
        <div class="container">
            <div class="footer-newsletter-wrap">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="newsletter-title">
                            <h4>Subscribe Now !</h4>
                            <span>Signing Up To Our Newsletter.</span>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Enter Your Email....">
                                <button class="btn gradient-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="footer-logo mb-30">
                            <a href="index.html"><img src="{{ asset('img/logo/white_logo.png') }}" class="sticky-none" alt="Logo" width="200"></a>

                        </div>
                        <div class="footer-text mb-35">
                            <p>At Native Wellness store we believe when you lack good health, everything else in life suffers. It’s harder to concentrate and study.</p>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Customer Service</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Product Recalls</a></li>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Quick Links</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Store Pickup</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Customer Service</h5>
                        </div>
                        <div class="footer-contact">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i> Our Store in Nairobi, Kenya</li>
                                <li><i class="fas fa-headphones"></i> +254 701 234 567</li>
                                <li><i class="fas fa-envelope-open"></i>Support@nativewellness.co,ke</li>
                                <li><i class="fas fa-fax"></i>www.nativewellness-store.co.ke</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap copyright-style-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright © 2020 <a href="#">Nativewellness-store</a> All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        <img src="{{ asset('img/images/card_img.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->


<!-- promo-popup-area -->
<div class="promo-popup">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="promo-close third-bg" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="flaticon-plus-1"></i></span>
                </button>
                <div class="modal-body relative-position">
                    <img src="{{ asset('img/images/popup_subs_bg.png') }}" alt="">
                    <div class="promo-text pera-content">
                        <div class="popup-title">
                            <h6 class="sub-title">Newsletter</h6>
                            <h2 class="title">Subscribe And Get <span>35%</span> Discount!</h2>
                        </div>
                        <div class="promo-subscribe pera-content">
                            <p class="subscribe-text">Subscribe to the newsletter to receive updates about all new
                                products.</p>
                            <div class="promo-form">
                                <form action="#" method="post">
                                    <input class="email" name="email" type="email" placeholder="Email Address">
                                    <button class="btn">Subscribe</button>
                                    <div class="comment-check-box">
                                        <input type="checkbox" id="comment-check">
                                        <label for="comment-check">Don't show this popup again!</label>
                                    </div>
                                </form>
                            </div>
                            <p class="trial-text">Get started for 1 Month free trial No <span>Purchase</span> required.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo-popup-area-end -->





<!-- JS here -->
<script src="{{ asset('js/vendor/jquery-3.5.0.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.odometer.min.js')}}"></script>
<script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('js/jquery.appear.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/ajax-form.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
