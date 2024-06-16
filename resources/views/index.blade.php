@extends('user.layouts.app')
@section('hero')
    {{-- <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h4>Tree Care Specialists
                    </h4>
                    <h1 class="display-3 text-white animated slideInLeft">Professional Tree Services In {Location}</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Offering top-notch tree care services in {Location}
                        by certified arborists.</p>
                    <a href="tel:{{ getPhone() }}"
                        class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                </div>
                <div class="col-lg-6 ">
                    <img class="img-fluid" src="{{ uploads('home', 'professional-tree-services.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="bg-dark hero-header mb-5 pt-5">
        <div class="my-4">
            <div class="align-items-center row">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="container">
                        <h4 class="text-primary">Tree Care Specialists
                        </h4>
                        <h1 class="display-3 text-white animated slideInLeft">Professional Tree Services In {Location}</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Offering top-notch tree care services in
                            {Location}
                            by certified arborists.</p>
                        <a href="tel:123456789"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">123456789</a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <img class="img-fluid" src="{{ uploads('home', '2.jpg') }}" style="height:100vh;" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-5">Top-Rated Tree Services In {Location} Since 2000
                </h2>
                <p>If you are looking to elevate the outdoor look of your home and business but don’t have the time to
                    go
                    through the DIY hassles, The Tree Service Pros can be of help. We have pioneered the best tree
                    services
                    in {Locaion} since 2000 with our team of expert arborists.
                    <br>
                    Our seasoned tree arborists in {Location} are local experts who know their job as tree servicing
                    experts. Fueled with commitment and dedication, they are above par in doing a professional job and
                    beautifying your property.
                </p>
                <a href="tel:{{ getPhone() }}"
                    class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

            </div>

        </div>
    </div>
    <!-- Menu End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class=" text-primary">Why Choose Us?</h3>
                        <h2>Our Tree Services
                        </h2>
                        <p>As an experienced tree care company, we strive to provide the best tree services to our
                            valuable customers. Here is what we do:
                        </p>
                </div>
            </div>
            <div class="g-4 justify-content-center row">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="{{ uploads('service', $service->icon) }}" alt="" class="mb-3">
                                <h5>{{ $service->name }}</h5>
                                <p>{{ $service->home_content }}</p>
                                <a href="{{ route('user.service', $service->slug) }}"> <i
                                        class="fa fa-arrow-alt-circle-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'residential-tree-services.webp') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="">Comprehensive Residential Tree Services</h2>
                        <p>For people who are looking for licensed residential tree services in {Location}, your search
                            ends
                            here. We at The Tree Service Pros know how important a role the aesthetic of residential
                            landscapes plays. Hence, we offer the best tree trimming and tree pruning services to give
                            your
                            house landscape the grooming session it needs.
                            <br>
                            Have an outdoor party or get-together lined up for the evening and need to get your lawn
                            trees
                            in the best shape? Our emergency tree services provided by our vetted arborists can get your
                            residential landscape in its best look and shape. We don’t just sell tree services, we
                            provide
                            complete maintenance of your trees to improve the overall vibe of your outdoors and increase
                            the
                            curb appeal of your house.
                        </p>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

                    </div>

                </div>


            </div>

        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">

                    <div class="col-lg-6">
                        <h2 class="">Top Commercial Tree Services</h2>
                        <p>Our tree service company in {Location} provides ISA-certified commercial tree services for
                            businesses and private enterprises for an improved outdoor look so visitors can have a
                            really
                            good first impression on their visit. A groomed commercial landscape doesn’t only impress
                            passersby but also improves the value of your property and other features such as safety. So
                            if
                            you are looking for reliable tree services such as tree removals or just scheduled
                            maintenance
                            of your greenery, feel free to schedule our expert tree arborists via call.
                        </p>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'top-commercial-tree-services.webp') }}" alt="">
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'residential-tree-services.webp') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="">Emergency Tree Services When You Need Them Most</h2>
                        <p>Our vision stands still at being available for our customers when they need us the most. Our
                            emergency tree services in {Location} provide rapid-fast action in case of storms and tree
                            accidents. On just a call, our certified tree arborists will be at your service so you can
                            relax
                            indoors while they do their job of fixing your outdoors.
                        </p>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

                    </div>

                </div>


            </div>

        </div>

    </div>

    <div class="container-xxl emergency-section pb-5 pt-6"
        style="background: linear-gradient(#000000d9, #000000d9),url({{ uploads('home', 'residential-tree-services.webp') }})">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-12">
                        <h2 class="line mb-5 position-relative text-white">Need Emergency Tree Services In {Location}?
                            Feel
                            Free To Call Us
                            To Get
                            In
                            Touch With Our Vetted Arborists.
                        </h2>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                    </div>


                </div>

            </div>


        </div>

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">

                    <div class="col-lg-6">
                        <h2 class="">Licensed And Certified Tree Service Company In {Location}</h2>
                        <p>We are the best tree company in {Location} with International Society of Arboriculture (ISA)
                            certified arborists who know their job in and out. Our certified arborists are required to
                            have
                            hands-on experience as tree specialists and knowledge in the fields of forestry and tree
                            biology
                            in order to be on our team. Moreover, we provide our staff with intensive training before
                            sending them to you so you get the most professional tree service.
                        </p>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'residential-tree-services.webp') }}" alt="">
                    </div>

                </div>


            </div>

        </div>

    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'residential-tree-services.webp') }}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="">Affordable And Transparent Pricing For Tree Services In {Location}</h2>
                        <p>Our pricing is kept simple so that customers can easily book us without any
                            confusion. We provide tier-based options and each of our tree service prices are adjusted
                            according to your individual needs. There are no hidden charges since we openly communicate
                            our
                            tree service cost with our customers upfront.
                            <br>
                            If you don’t know which package suits your needs the best, no need to worry! Call us today
                            and
                            answer some of our questions about your outdoor space and we will have a special plan ready
                            just
                            for you. If you are looking for affordable tree services without compromising on quality,
                            get in
                            touch today!
                        </p>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

                    </div>

                </div>


            </div>

        </div>

    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="text-center text-primary">Testimonial</h5>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="align-items-center row">
                <div class="col-lg-2">
                    <h3>Reviews</h3>
                    @php
                        $starRating = 0; // Initialize the variable to hold total star ratings
                    @endphp

                    @foreach ($testimonials as $testimonial)
                        @php
                            $starRating += $testimonial->star; // Accumulate total star ratings
                        @endphp
                    @endforeach

                    @php
                        $reviewCount = $testimonials->count(); // Get total number of reviews
                        $averageRating = $reviewCount > 0 ? $starRating / $reviewCount : 0; // Calculate average rating
                    @endphp

                    <div class="rating">
                        <?php
                        // Determine the number of full stars
                        $fullStars = floor($averageRating);
                        
                        // Determine if there should be a half star
                        $halfStar = $averageRating - $fullStars >= 0.5 ? 1 : 0;
                        
                        // Determine the number of empty stars
                        $emptyStars = 5 - ($fullStars + $halfStar);
                        
                        // Output the full stars
                        for ($i = 0; $i < $fullStars; $i++) {
                            echo '<i class="fa fa-star"></i>';
                        }
                        
                        // Output the half star if needed
                        if ($halfStar) {
                            echo '<i class="fa fa-star-half-alt"></i>';
                        }
                        
                        // Output the empty stars
                        for ($i = 0; $i < $emptyStars; $i++) {
                            echo '<i class="far fa-star"></i>';
                        }
                        ?>
                    </div>
                    <p>{{ number_format($averageRating, 1) }} ({{ $reviewCount }} reviews)</p>
                </div>
                <div class="col-lg-10">


                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-item bg-transparent border rounded">
                                <div class="px-3 py-2">
                                    <h5 class="mb-1">{{ $testimonial->name }}</h5>
                                    <div class="rating">
                                        @php
                                            $filledStars = $testimonial->star;
                                            $totalStars = 5;
                                            $emptyStars = $totalStars - $filledStars;
                                        @endphp

                                        @for ($i = 0; $i < $filledStars; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor

                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                                <hr class="m-0">
                                <p class=" p-3">{{ $testimonial->content }}</p>

                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-center text-primary">Our Process – Ensuring Excellence
                    In Tree Care
                </h5>
                <p>Our tree expert company knows that a tailored tree service process is required based on the specific
                    needs of different landscapes and environments in {Location}. Hiring our expertly-vetted tree
                    service in
                    {Location} can be explained through the following steps:
                </p>
            </div>
            <ul class="timeline list-unstyled">
                @foreach ($processes as $key => $process)
                    <li class="timeline-item">
                        <div class="row {{ $key % 2 != 0 ? 'text-end flex-column-reverse' : '' }}">
                            <div class="col-md-6 order-md-2">
                                <div class="rounded timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ $process->heading }}</h4>

                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ $process->name }}.</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md-6 order-md-1 d-flex align-items-center justify-content-md-end justify-content-center">
                                <div class="timeline-badge  rounded-circle">{{ $key + 1 }}</div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

    <div class="container-xxl py-5wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">


                    <div class="col-lg-12">
                        <h5 class="text-center text-primary">Trusted Tree Services In {Location}
                        </h5>
                        <h2 class="">Regulation Compliant And Up-To-Date Tree Company In {Location}
                        </h2>
                        <p>We have a local team of certified arborists for each city in its respective state and the
                            same goes for {Location}. Our tree doctors are up-to-date with local ordinance laws
                            related
                            to specific parishes, counties, and cities, making your experience with our tree
                            services a
                            seamless one. We cover all legal hoops as our company also has the necessary permits
                            required for our tree removal and stump grinding services.
                        </p>
                        <p>

                            We are a responsible tree service company in {Location} that is aware of the
                            environmental
                            considerations regarding endangered species, wildlife, and debris disposal. We make sure
                            that we do not harm the environment by any percent. Our tree arborists go through
                            specialized training sessions, aligning theirs and our mission of protecting the
                            environment.
                        </p>
                    </div>

                </div>


            </div>

        </div>

    </div>
    <div class="container-xxl emergency-section pb-5 pt-6"
        style="background: linear-gradient(#000000d9, #000000d9),url({{ uploads('home', 'residential-tree-services.webp') }})">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-12">
                        <div class=" mb-5  line position-relative">

                            <h2 class="text-white">Ready To Get Started? Contact The Tree
                                Service Pros Today!

                            </h2>
                            <p>If you need a tree service in {Location}, call us today to get in touch with our
                                professional
                                tree arborists or contact us directly through the contact form available below to
                                get a
                                free
                                estimate of our services.

                            </p>
                        </div>

                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                    </div>


                </div>

            </div>


        </div>

    </div>


    
    </div>
@endsection
