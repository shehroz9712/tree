<footer class=" m-0" style="background-color: #ffc0cb80">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-6 ms-3">
                <div class="d-flex mt-5">
                    <img src="{{ getDarkLogo() }}" alt="">
                </div>
                <div>
                    <img src="{{ ImageFile('figma/Link.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <ul class="mt-5">
                    <li class="mb-2 f-18 fw-bolder">About Bookmyspot</li>
                    <hr class="bg-dark">
                    <li><a href="{{ route('user.page', 'careers') }}">Careers</a></li>

                    <li><a href="{{ route('user.contact') }}">Customer Support</a></li>
                    <li><a href="{{ route('user.blogs.index') }}">Blog</a></li>
                    <li><a href="{{ route('user.page', 'sitemap') }}">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <ul class="mt-5">
                    <li class="mb-2 f-18 fw-bolder">For business</li>
                    <hr class="bg-dark">
                    <li><a href="{{ route('user.page', 'for-patners') }}">For patners</a></li>

                    <li><a href="{{ route('user.page', 'pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('user.page', 'card-terminals') }}">Card terminals</a></li>
                    <!-- <li><a href="#">Support</a></li> -->
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <ul class="mt-5">
                    <li class="mb-2 f-18 fw-bolder">Legal</li>
                    <hr class="bg-dark">
                    <li><a href="{{ route('user.page', 'privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('user.page', 'terms-of-service') }}">Terms of service</a></li>
                    <li><a href="{{ route('user.page', 'terms-of-use') }}">Terms of use</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6">
                <ul class="mt-5">
                    <li class="mb-2 f-18 fw-bolder">Find us on social</li>
                    <hr class="bg-dark">
                    @if (getFacebook())
                        <li><a href="{{ getFacebook() }}"> <img src="{{ imageFile('figma/arrow.png') }}"
                                    alt="">Facebook</a></li>
                    @endif
                    @if (getTwitter())
                        <li><a href="{{ getTwitter() }}"> <img src="{{ imageFile('figma/arrow.png') }}"
                                    alt="">Twitter</a></li>
                    @endif
                    @if (getInstagram())
                        <li><a href="{{ getInstagram() }}"> <img src="{{ imageFile('figma/arrow.png') }}"
                                    alt="">Instagram</a></li>
                    @endif
                    @if (getLinkedin())
                        <li><a href="{{ getLinkedin() }}"> <img src="{{ imageFile('figma/arrow.png') }}"
                                    alt="">Linkedin</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>

    </div>

</footer>
<div class="text-center mt-3 me-3 ">
    <a href="{{ route('user.home') }}" class="fw-bold">© Copy {{ date('Y') }} {{ getFooterSentence() }}</p>
</div>
