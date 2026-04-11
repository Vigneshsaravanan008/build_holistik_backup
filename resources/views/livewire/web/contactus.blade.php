@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title text-theme">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Our Address</h6>
                            <p class="about-contact-details-text">{{$setting->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:{{$setting->phone_number}}">{{$setting->phone_number}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                            <p class="about-contact-details-text"><a href="mailto:info.@h2bindia.in">info.@h2bindia.in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space contact-area-3 z-index-common" data-bg-src="{{asset("assets/img/certificate.jpg")}}" data-overlay="title" data-opacity="3" id="contact-sec">
        <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="{{asset("assets/img/shape/section_shape_2_1.jpg")}}" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-6">
                    <div class="appointment-wrap2 bg-white me-xxl-5">
                        <h2 class="form-title text-theme">Schedule a visit</h2>
                        <form  wire:submit="addContactus" method="POST" class="appointment-form">
                            @csrf
                            <div class="row">
                                <div class="form-group style-border style-radius col-12">
                                    <input type="text" class="form-control" wire:model="name" id="name" placeholder="Your Name*">
                                    <i class="fal fa-user"></i>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group style-border style-radius col-12">
                                    <input type="email" class="form-control" wire:model="email" id="email" placeholder="Your Email*">
                                    <i class="fal fa-envelope"></i>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group style-border style-radius col-12">
                                    <input type="email" class="form-control" wire:model="phone_number" id="phone_number" placeholder="Your PhoneNumber*">
                                    <i class="fal fa-mobile"></i>
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 form-group style-border style-radius">
                                    <i class="far fa-comments"></i>
                                    <textarea placeholder="Type Your Message*" wire:model="message" class="form-control"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 form-btn mt-4">
                                    <button type="button" wire:click="addContactus" class="th-btn">Submit <span class="btn-icon"><img src="{{asset("assets/img/icon/paper-plane.svg")}}" alt="img"></span></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map z-index-common">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address bg-theme">
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
        </div>
    </div>
</div>
@push('javascript')
<script>
    Livewire.on('dismissmodal', function(data) {
        setTimeout(() => {
            window.location.href="/thank-you";
        }, 1500);
    });
</script>
@endpush
