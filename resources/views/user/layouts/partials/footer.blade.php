@if (isset($faqs) && !empty($faqs))
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">


                    <div class="col-lg-12">
                        <h5 class="text-center text-primary">Trusted Tree Services In {Location}
                        </h5>
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                        <button
                                            class="accordion-button bg-white  fw-bold text-reset {{ $key != 0 ? 'collapsed' : '' }} "
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true"
                                            aria-controls="collapse{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-white">
                                            {{ $faq->answer }}

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6">
                <img src="{{ getDarkLogo() }}" alt="Logo">


            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">About</h4>

                <p> We are a team of dedicated tree specialists passionate about providing top-quality tree care
                    services.
                </p>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="copyright">
            {{-- <div class="row">
                     <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                         &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                         <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                         Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                         Distributed By <a class="border-bottom" href="https://themewagon.com"
                             target="_blank">ThemeWagon</a>
                     </div>
                     <div class="col-md-6 text-center text-md-end">
                         <div class="footer-menu">
                             <a href="">Home</a>
                             <a href="">Cookies</a>
                             <a href="">Help</a>
                             <a href="">FQAs</a>
                         </div>
                     </div>
                 </div> --}}
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ userFile('lib/wow/wow.min.js') }}"></script>
<script src="{{ userFile('lib/easing/easing.min.js') }}"></script>
<script src="{{ userFile('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ userFile('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ userFile('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ userFile('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ userFile('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ userFile('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ userFile('js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        // Function to format numbers with commas and a "+" sign
        function formatNumber(number) {
            return `+ ${new Intl.NumberFormat('en-US').format(number)}`;
        }

        // Initialize counterUp
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });

        // Apply the formatted number after the counter animation is complete
        $('[data-toggle="counter-up"]').each(function() {
            var $this = $(this);
            var originalValue = parseInt($this.text().replace(/,/g, ''), 10);

            // Apply the formatted number after the delay
            setTimeout(function() {
                $this.text(formatNumber(originalValue));
            }, 2000);
        });
    });
</script>
