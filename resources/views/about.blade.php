@extends('user.layouts.app')
@section('hero')
    <div class="container-xxl py-5 bg-dark hero-header mb-5"
        style="
    background: linear-gradient(#00000099, #00000099), url({{ uploads('page', 'lawn-09.jpg') }});
">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 position-relative">
                    <img src="{{ uploads('page', 'lawn-08.jpg') }}" alt="">
                    <div class="bg-primary px-3 client-counter F">
                        <h1 class="mb-0 text-white" data-toggle="counter-up">8500</h1>
                        <div class="">
                            <h6 class="text-uppercase mb-0">Happy Clients
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">All About Us</h5>
                    <h1 class="mb-4">Expert Tree Care Services
                    </h1>
                    <p class="mb-4">With years of experience and a deep passion for trees, The Tree Service Pros has
                        established itself as a trusted provider of expert tree care services. We are dedicated to
                        preserving the health and beauty of your trees, utilizing our knowledge and skills to deliver
                        exceptional results. Our team of certified arborists is committed to excellence in every aspect of
                        tree care, ensuring your complete satisfaction with our services.
                    </p>
                    <p class="mb-4">
                        When you choose The Tree Service Pros, you can trust that your trees are in the hands of true
                        professionals who genuinely care about the well-being of your arboreal assets.
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">25</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">abc</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="tel:{{ getPhone() }}"
                        class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{ getPhone() }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="mission-content"
            style="background:linear-gradient(#6ab42e99, #6ab42e99), url({{ uploads('page', 'lawn-02-1.jpg') }});background-size: cover;background-repeat: no-repeat;">
            <div class="align-items-center row">
                <div class="col-md-6">
                    <div class="mission">

                        <h2>Our Mission</h2>
                        <h3 class="text-white">Excellence In Tree Care</h3>
                        <p>Our mission is to deliver excellence in tree care, ensuring the health and beauty of your
                            trees.
                        </p>
                        <div class="row text-start">
                            <div class="col-md-6 mb-4 mission-icons">
                                <i class="far fa-lightbulb"></i>
                                <p>Experienced</p>
                            </div>
                            <div class="col-md-6 mb-4 mission-icons">
                                <i class="far fa-thumbs-up"></i>
                                <p>Reliable</p>
                            </div>
                            <div class="col-md-6 mb-4 mission-icons">
                                <i class="fas fa-briefcase"></i>
                                <p>Professional</p>
                            </div>
                            <div class="col-md-6 mb-4 mission-icons">
                                <i class="far fa-money-bill-alt"></i>
                                <p>Reasonable Prices</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="{{ uploads('page', 'lawn-08.jpg') }}" alt="Tree Care" class="img-fluid"
                        style="
                    width: 100%;
                ">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class=" text-primary">Feature</h3>

                </div>
            </div>
            <div class="g-4 justify-content-center row text-center">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3" style="height: auto;">
                            <div class="p-4">
                                <a href="{{ route('user.service', $service->slug) }}">
                                    <img src="{{ uploads('service', $service->icon) }}" alt="" class="mb-3">
                                    <h5>{{ $service->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-7">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">All About Us
                    </h5>
                    <h1 class="mb-4">Dedicated Tree Specialists</h1>
                    <p class="mb-4">At The Tree Service Pros, we are a team of dedicated tree specialists passionate about
                        providing top-quality tree care services.</p>
                    <div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Home</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">Contact</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3 border border-top-0" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <p><strong>This is some placeholder content the Home tab's associated content.</strong>
                                    Clicking another tab will toggle the visibility of this one for the next. The tab
                                    JavaScript swaps
                                    classes to control the content visibility and styling. You can use it with tabs, pills,
                                    and any
                                    other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <p><strong>This is some placeholder content the Profile tab's associated content.</strong>
                                    Clicking another tab will toggle the visibility of this one for the next.
                                    The tab JavaScript swaps classes to control the content visibility and styling. You can
                                    use it with
                                    tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <p><strong>This is some placeholder content the Contact tab's associated content.</strong>
                                    Clicking another tab will toggle the visibility of this one for the next.
                                    The tab JavaScript swaps classes to control the content visibility and styling. You can
                                    use it with
                                    tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 position-relative">
                    <img src="{{ uploads('page', 'lawn-08.jpg') }}" alt="">

                    <div class="bg-primary px-3 client-counter F">
                        <h1 class=" mb-0 text-white" data-toggle="counter-up">8500</h1>
                        <div class="">
                            <h6 class="text-uppercase mb-0">Happy Clients
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
