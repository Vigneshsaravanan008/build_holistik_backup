@section("meta_details")
    @include("web.seo.custom",['common'=>@$building])
@endsection
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{$building->title}}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Services</li>
                            <li>{{$building->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sticky-sidebar">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Services</h3>
                            <ul class="list-unstyled">
                                @foreach ($immune_scoring as $scoring)
                                    <li class="services active">
                                        <a href="{{ route('web.building', $scoring->slug) }}" class="{{request()->routeIs('web.building', $scoring->slug)?"active":""}}" wire:navigate>
                                            {{ $scoring->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-xxl-8 col-lg-7">
                    <div class="agency-page-single">
                        <div class="page-content">
                            <div class="agency-page-img">
                                <div class="thumb">
                                    <img src="{{asset("assets/img/agency/agency_inner_1.jpg")}}" alt="Blog Image">
                                </div>
                                {{-- <div class="agency-card-brand">
                                    <img src="{{asset("assets/img/brand/brand_1_2.svg")}}" alt="img">
                                </div> --}}
                            </div>
                            {{-- <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <h2 class="page-title h4 text-theme mb-0 mt-15">Town House</h2>
                                    <p class="text-theme">Brooklyn, New York 11233, United States</p>
                                </div>
                                <div class="col-lg-auto">
                                    <h4 class="text-theme h5 mb-2">Contact Info</h4>
                                    <p class="mb-0 text-theme"><i class="far fa-phone me-2"></i><strong class="fw-medium">0123456789</strong></p>
                                    <p class="mb-0 text-theme"><i class="far fa-envelope me-2"></i><strong class="fw-medium">exampleinfo@realar.com</strong></p>
                                </div>
                            </div> --}}

                            <p class="mb-30 text-theme mt-40">{!! @$building->description !!}</p>
                            {{-- <p class="mb-30 text-theme">The open-concept layout seamlessly connects the living room with the fully equipped kitchen, boasting top-of-the-line appliances and all the essentials for preparing delicious meals.</p> --}}

                            {{-- <h3 class="page-title mt-45 mb-30 h4 text-theme">Location</h3>
                            <div class="location-map mb-60">
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="location-map-address">
                                    <div class="thumb">
                                        <img src="{{asset("assets/img/property/property_inner_1.jpg")}}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="title">Address:</h4>
                                        <p class="text">Brooklyn, New York 11233, United States</p>
                                        <h4 class="title">Post Code:</h4>
                                        <p class="text">12345</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
