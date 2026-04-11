<style>
    .bg-footer{
        background-color:#3C5564 !important;
    }
    </style>
<footer class="footer-wrapper footer-default bg-footer">
    <div class="container">
        <div class="footer-wrap space-top">
            <div class="newsletter-wrap newsletter_bottom">
                <h5 class="newsletter-title text-white">Newsletter To Get Updated The Latest News</h5>
                <form method="POST" action="javascript:void(0)" class="newsletter_form newsletter-form" id="subscription">
                    @csrf
                    <input type="hidden" name="page_url" value="{{ url()->current() }}" />
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <button class="th-btn style3">Subscribe Now <i class="far fa-paper-plane"></i></button>
                </form>
            </div>
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{url("/")}}" wire:navigate><img src="{{ asset($setting->logo) }}" alt="{{ $setting->name }}" width="250px"></a>
                                </div>
                                <p class="about-text"> Build Holistik is affiliated with HDBI, the global accreditor of the IMMUNE Building Standard™. HDBI provides the framework, training, and certification for buildings worldwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{asset("assets/img/icon/location-dot.svg")}}" alt="img"></div>
                                    <div class="details">
                                        <p>{{$setting->address}}</p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="{{asset("assets/img/icon/phone.svg")}}" alt="img">
                                    </div>
                                    <div class="details d-flex justify-content-center align-items-center">
                                        <p><a href="tel:{{ $setting->phone_number }}" class="info-box_link">{{ $setting->phone_number }}</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="{{asset("assets/img/icon/envelope.svg")}}" alt="img">
                                    </div>
                                    <div class="details d-flex justify-content-center align-items-center">
                                        <p><a href="mailto:{{ $setting->email }}" class="info-box_link">{{ $setting->email }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">About</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{route("web.aboutus")}}" wire:navigate>About BuildHolistik</a></li>
                                    <li><a href="#" wire:navigate>Become an IMMUNE™ Assessor</a></li>
                                    <li><a href="#" wire:navigate>Media & Coverage</a></li>
                                    <li><a href="#" wire:navigate>Contact</a></li>
                                    {{-- <li><a href="https://liviu-tudor.com/home/" target="_blank">Liviu Tudor</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Resources</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{route("web.heathdesign")}}" wire:navigate>Healthy by Design</a></li>
                                    <li><a href="{{route("web.accredited")}}" wire:navigate>Accredited Buildings</a></li>
                                    <li><a href="{{route("web.faq")}}" wire:navigate>FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright-wrap bg-light">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">
                        Copyright <i class="fal fa-copyright"></i> {{date("Y")}} <a href="{{url("/")}}" wire:navigate>{{$setting->name}}</a>, All rights reserved.</p>
                </div>
                <div class="col-lg-6">
                    <div class="th-social justify-content-lg-end justify-content-center">
                        <a href="{{$social->linkedin_url}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="{{$social->twitter_url}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="{{$social->facebook_url}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$social->instagram_url}}" target="_blank"><i class="fa-solid fa-globe"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
