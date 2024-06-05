<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img
                                src="{{ userFile('images/envelope-outline.svg') }}" alt="Image"
                                class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">
                        <img src="{{ getLogo() }}" alt="{{ getTitle() }}"> </a>
                    </a>
                </div>
                <p>{{ getFooterSentence() }}</p>
                <ul class="list-unstyled custom-social">
                    @if (getFacebook())
                        <li><a href="{{ getFacebook() }}"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    @endif
                    @if (getTwitter())
                        <li><a href="{{ getTwitter() }}"><span class="fa fa-brands fa-twitter"></span></a></li>
                    @endif
                    @if (getInstagram())
                        <li><a href="{{ getInstagram() }}"><span class="fa fa-brands fa-instagram"></span></a></li>
                    @endif
                    @if (getLinkedin())
                        <li><a href="{{ getLinkedin() }}"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    @endif
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Knowledge base</a></li>
                            <li><a href="#">Live chat</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Our team</a></li>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Nordic Chair</a></li>
                            <li><a href="#">Kruzo Aero</a></li>
                            <li><a href="#">Ergonomic Chair</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            https://untree.co">Untree.co</a> Distributed By <a
                            hreff="https://themewagon.com">ThemeWagon</a>
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
<!-- End Footer Section -->


<script src="{{ userFile('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ userFile('js/tiny-slider.js') }}"></script>
<script src="{{ userFile('js/custom.js') }}"></script>
