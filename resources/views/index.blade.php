@extends('user.layouts.app')
@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="intro-excerpt">
                        <h1>Professional Tree Services in {Location}</h1>
                        <p class="mb-4">Unparalleled tree services are at your disposal.
                            If you are looking to elevate the outdoor look of your home and business but don’t have the
                            time to go through the DIY hassles, The Tree Service Pros can be of help. We have pioneered
                            the best tree services in {Locaion} since 2000 with our team of expert arborists.
                            Our seasoned tree arborists in {Location} are local experts who know their job as tree
                            servicing experts. Fueled with commitment and dedication, they are above par in doing a
                            professional job and beautifying your property.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img-wrap">
                        <img src="{{ uploads('home', '7.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->



    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">

                    <div class="img-wrap">
                        <img src="{{ uploads('home', '5.jpg') }}" alt="Image" style="height: 660px;"class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Our Service</h2>
                    <p>As an experienced tree care company, we strive to provide the best tree services to our valuable
                        customers. Here is what we do:</p>

                    <div class="row my-5">
                        @foreach ($services as $item)
                            <div class="col-6 col-md-6">
                                <div class="feature">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->content }}
                                        <br>
                                        <a href="{{ route('user.service', $item->slug) }}">Read More</a>
                                    </p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="bg-white we-help-section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-9 mb-4">
                    <h3 class="section-title mb-4">Comprehensive Residential Tree Services
                    </h3>
                    <p>For people who are looking for licensed residential tree services in {Location}, your search ends
                        here. We at The Tree Service Pros know how important a role the aesthetic of residential
                        landscapes plays. Hence, we offer the best tree trimming and tree pruning services to give your
                        house landscape the grooming session it needs.

                    </p>
                    <p>
                        Have an outdoor party or get-together lined up for the evening and need to get your lawn trees
                        in the best shape? Our emergency tree services provided by our vetted arborists can get your
                        residential landscape in its best look and shape. We don’t just sell tree services, we provide
                        complete maintenance of your trees to improve the overall vibe of your outdoors and increase the
                        curb appeal of your house.
                    </p>
                </div>
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ uploads('home', '5.jpg') }}" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="{{ uploads('home', '5.jpg') }}" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="{{ uploads('home', '5.jpg') }}" alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">

                    <div class="row">

                        <div class="col-lg-12">
                            <h3>Top Commercial Tree Services</h3>
                            <p>Our tree service company in {Location} provides ISA-certified commercial tree services
                                for
                                businesses and private enterprises for an improved outdoor look so visitors can have a
                                really good first impression on their visit. A groomed commercial landscape doesn’t only
                                impress passersby but also improves the value of your property and other features such
                                as
                                safety. So if you are looking for reliable tree services such as tree removals or just
                                scheduled maintenance of your greenery, feel free to schedule our expert tree arborists
                                via
                                call.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h3>Emergency Tree Services When You Need Them Most</h3>
                            <p>Our vision stands still at being available for our customers when they need us the most.
                                Our
                                emergency tree services in {Location} provide rapid-fast action in case of storms and
                                tree
                                accidents. On just a call, our certified tree arborists will be at your service so you
                                can
                                relax indoors while they do their job of fixing your outdoors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-9 text-center">
                    <h3 class="section-title mb-4">
                        Need emergency tree services in {Location}? <br> Feel free to call us to get in touch with our
                        vetted arborists.
                        <br>
                        {{ getPhone() }}

                    </h3>

                </div>


                <div class="col-lg-6 mb-5 mb-lg-0">

                    <h2>Why Choose Us for Your Tree Care Needs?</h2>
                    <h3 class="h6">Licensed and Certified Tree Service Company in {Location}</h3>
                    <p>We are the best tree company in {Location} with International Society of Arboriculture (ISA)
                        certified arborists who know their job in and out. Our certified arborists are required to
                        have
                        hands-on experience as tree specialists and knowledge in the fields of forestry and tree
                        biology
                        in order to be on our team. Moreover, we provide our staff with intensive training before
                        sending them to you so you get the most professional tree service.
                    </p>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-wrap">
                        <img src="{{ uploads('home', '3.jpg') }}" alt="{{ getTitle() }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->


    <!-- Start Testimonial Slider -->
    <div class="bg-white testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Here is what our customers say
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">
                            @foreach ($testimonials as $item)
                                <div class="item">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mx-auto">

                                            <div class="testimonial-block text-center">
                                                <blockquote class="mb-5">
                                                    <p>&ldquo;{{ $item->content }}.&rdquo;</p>
                                                </blockquote>

                                                <div class="author-info">
                                                    <h3 class="font-weight-bold">{{ $item->name }}</h3>
                                                </div>
                                            </div>

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
    <!-- End Testimonial Slider -->

    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-wrap">
                        <img style="height: 400px;width: 100%;" src="{{ uploads('home', '1.jpg') }}"
                            alt="{{ getTitle() }}">
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h3 class="section-title mb-4">
                        Affordable and Transparent Pricing For Tree Services in {Location}

                    </h3>

                    <h3 class="h6">Licensed and Certified Tree Service Company in {Location}</h3>
                    <p>Our pricing is kept simple so that customers can easily book us without any confusion. We provide
                        tier-based options and each of our tree service prices are adjusted according to your individual
                        needs. There are no hidden charges since we openly communicate our tree service cost with our
                        customers upfront.
                        <br>
                        If you don’t know which package suits your needs the best, no need to worry! Call us today and
                        answer some of our questions about your outdoor space and we will have a special plan ready just
                        for you. If you are looking for affordable tree services without compromising on quality, get in
                        touch today!

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Why Choose Us Section -->
    <div class="bg-white py-4 why-choose-section">
        <div class="container">


            <div class="justify-content-around my-5 row">
                <div class="col-lg-9">
                    <h2>Our Process – Ensuring Excellence in Tree Care
                    </h2>
                    <p>Our tree expert company knows that a tailored tree service process is required based on the
                        specific needs of different landscapes and environments in {Location}. Hiring our
                        expertly-vetted tree service in {Location} can be explained through the following steps:
                    </p>
                </div>
            </div>
            <div class="justify-content-around my-5 row">
                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Initial Contact</h4>
                        <p>You can either call us, email us, or directly contact us through the online form on our
                            website. Even if you aren’t sure what service plan you need, our tree arborist will be ready
                            to guide you at this point.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Consultation</h4>
                        <p>Our certified tree arborist will visit your property to do a thorough inspection of the trees
                            and discuss what needs to be done.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Proposal and Estimate</h4>
                        <p>Based on the examination and requirements of your landscape, we will present a proposal to
                            you outlining the work, timeline, and cost in detail.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Scheduling and Preparation</h4>
                        <p>Once you approve, our company will schedule a team of expert tree arborists at the date and
                            time of your convenience. If needed, we might visit your place to get the area clear of any
                            obstacles.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Tree Service and Clean-Up</h4>
                        <p>Our tree care company sends dedicated arborists to your place that perform the agreed-upon
                            work using proper safety equipment and professional techniques. Once servicing has been
                            done, our crew picks up tree remains, debris, and leaves from the work area leaving it
                            spotless.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Final Walk-Through</h4>
                        <p>Once the project has been completed, one of our seasoned representatives will visit your site
                            to review the tree service and answer any questions or concerns you might have. Note that
                            only after you are fully satisfied, we move towards the last stage of payment.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Payment</h4>
                        <p>You settle the payment based on the agreed-upon terms with us.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="feature">

                        <h4>Payment</h4>
                        <p>You settle the payment based on the agreed-upon terms with us.
                        </p>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <!-- End Why Choose Us Section -->
    <div class=" why-choose-section">
        <div class="container">


            <div class="justify-content-around my-5 row">
                <div class="col-lg-12">
                    <h2>We are available 24/7! Call us to schedule a visit from our certified arborist at the date and time
                        of your convenience.

                        {{ getPhone() }}

                    </h2>

                </div>
            </div>
            <div class="justify-content-around my-5 row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-wrap">
                        <img src="{{ userFile('images/img-grid-1.jpg') }}" alt="{{ getTitle() }}">
                    </div>
                </div>
                <div class="accordion col-lg-6" id="accordionExample">
                    @foreach ($faqs as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $faq->id }}"
                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>

        </div>
    </div>

    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-around">

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <h2 class="section-title mb-4">
                            Regulation Compliant and Up-to-Date Tree Company in {Location}

                        </h2>

                        <p>We have a local team of certified arborists for each city in its respective state and the same
                            goes
                            for {Location}. Our tree doctors are up-to-date with local ordinance laws related to specific
                            parishes, counties, and cities, making your experience with our tree services a seamless one. We
                            cover all legal hoops as our company also has the necessary permits required for our tree
                            removal
                            and stump grinding services.
                            <br>
                            We are a responsible tree service company in {Location} that is aware of the environmental
                            considerations regarding endangered species, wildlife, and debris disposal. We make sure that we
                            do
                            not harm the environment by any percent. Our tree arborists go through specialized training
                            sessions, aligning theirs and our mission of protecting the environment.


                        </p>
                        <h2>Ready to Get Started? Contact The Tree Service Pros Today!</h2>
                        <p>If you need a tree service in {Location}, call us today to get in touch with our professional
                            tree arborists or contact us directly through the contact form available below to get a free
                            estimate of our services.</p>
                    </div>

                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-wrap">
                        <img src="{{ uploads('home', '1.jpg') }}" alt="{{ getTitle() }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
