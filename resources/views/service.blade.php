@extends('user.layouts.app')
@section('hero')
    <div class="bg-dark hero-header mb-5 pt-5">
        <div class="my-4">
            <div class="align-items-center row">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="container">
                        <h4 class="text-primary">Tree Removal Specialists

                        </h4>
                        <h1 class="display-3 text-white animated slideInLeft">Professional Tree Removal Services In
                            {Location}
                        </h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Offering top-notch tree removal services in
                            {Location} by certified arborists.

                        </p>
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-5">Top-Rated Tree Services In {Location} Since 2000
                </h2>
                <p>Trees are a wonderful asset to nature but sometimes become a liability if diseased or damaged beyond
                    recovery. We at The Tree Service Pros provide expert tree removal services in {Location} to effectively
                    remove these trees and preserve the look of a landscape.


                </p>
                <p>

                    As a certified tree removal company, we do a thorough tree risk assessment to see if the tree can be
                    saved. If tree removal is the last option, our vetted tree arborists safely remove it through
                    sophisticated equipment and industry best practices.


                </p>
                <a href="tel:{{ getPhone() }}"
                    class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>

            </div>

        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-12 text-center mb-3">
                        <h2 class="">Why Choose Our Tree Removal Services In {Location}?

                        </h2>
                    </div>
                    <div class="col-lg-3">
                        <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                            src="{{ uploads('home', 'residential-tree-services.webp') }}" alt="">
                    </div>
                    <div class="col-lg-9">
                        <h2 class="">Certified And Experienced Arborists
                        </h2>
                        <p>Our ISA-certified tree arborists prioritize the well-being of your landscape. With years of
                            professional experience in tree removal in {Location} and related services, our team has the
                            knowledge and techniques to take corrective actions regarding a tree’s health.

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
                        <h2 class="">Comprehensive Tree Risk Assessment
                        </h2>
                        <p>As one of the finest tree removal companies in {Location}, our tree risk assessment process
                            includes two main branches. First, is an area-based assessment of the potential hazards that
                            humans and animals can face due to a tree. Also, we conduct a tree-based assessment to analyze
                            how healthy the tree is and whether it poses an above-average level of risk to people and
                            property nearby.


                        </p>
                        <p>Tree risk assessment helps us manage the risks and dangers of a tree before removal. It helps in
                            identifying which tree requires timely removal and which one can be saved through care. Our
                            thorough assessment allows us to do our best to preserve your landscape.

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



    <div class="container-xxl emergency-section pb-5 pt-6"
        style="background: linear-gradient(#000000d9, #000000d9),url({{ uploads('home', 'residential-tree-services.webp') }})">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-12">
                        <h2 class="line mb-5 position-relative text-white">Contact The Tree Service Pros To Get A Free
                            Estimate For A Professional Tree Removal Service In {Location} Today!
                        </h2>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="container-xxl py-5">
        <div class="container">
            <div class=" wow fadeInUp" data-wow-delay="0.1s">
                <div class="row  mb-3">
                    <div class="col-lg-12 text-center">
                        <h4>Types Of {{ $service->name }} Services We Offer In {Location}
                        </h4>
                    </div>
                </div>
                @foreach ($service_type as $key => $item)
                    <div class="row align-items-center mb-3 {{ $key % 2 != 0 ? ' flex-row-reverse' : '' }}">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded  wow zoomIn" data-wow-delay="0.3s"
                                src="{{ uploads('service', $item->image) }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="">{{ $item->heading }}</h2>
                            <p>{{ $item->content }}
                            </p>
                            <a href="tel:{{ getPhone() }}"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                        </div>
                    </div>
                @endforeach


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

                            <h2 class="text-white">Contact The Tree Service Pros To Get A Free Estimate For A Professional
                                Tree Removal Service In {Location} Today!
                            </h2>
                        </div>

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
                    <div class="col-lg-7">
                        <h2 class="">Compliant And Up-To-Date With {Location} Regulations
                        </h2>
                        <p>According to local ordinance laws in the US, every property owner has the right of self-help
                            where they can remove a tree completely or part of it in case it invades their property.


                        </p>
                        <p>As a certified tree removal company in {Location}, our tree arborists have all the necessary
                            permits, licenses, and qualifications required to take down a tree. We also take care of the
                            environment by making sure our tree removal is done efficiently without any damage to the
                            environment and surrounding structures.
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="">Cost Of Tree Removal Services In {Location}

                        </h2>
                        <p>The cost of a tree removal service in {Location} mainly depends on the size, type, and age of the
                            tree. Tree removal prices also vary on the area where the tree is located and how much effort
                            will be required to remove it. Our tree removal service in {Location} not only accounts for
                            removing the tree but also includes complete aftercare of your landscape after the process. The
                            average tree removal cost can be $200 for small trees which can go up to $2,000 for large trees.

                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h2 class="">Why Trust The Tree Service Pros?


                        </h2>
                        <p>We tick all the boxes of being a trusted and reliable tree removal company in {Location}. Apart
                            from having up-to-date licenses for tree services, we have valid insurance and endorsements from
                            companies making us the best option for your tree removal needs. Hear it out from our customers
                            yourself.


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

                            <h2 class="text-white">
                                Want Emergency Tree Removal Services?

                            </h2>
                            <p>Be it lightning-fast consultation, expert recommendations, and highly advanced tree removal,
                                we offer it all. Our local tree arborists in {Location} provide your landscape with the care
                                it deserves through personalized tree removal in {Location}.

                            </p>
                            <p>So what’s the wait for? Call us today and receive a free tree removal estimate from our
                                expertly vetted tree specialists!

                            </p>
                        </div>
                        <a href="tel:{{ getPhone() }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ///////////////// --}}

    
@endsection
