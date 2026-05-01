<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset($setting->logo) }}"width="140px" height="55px" alt="{{ $setting->name }}">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}" wire:navigate>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('web.service') }}" wire:navigate>
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{route("web.projects")}}" wire:navigate>
                        Projects
                    </a>
                </li>
                {{-- <li class="menu-item-has-children">
                    <a href="#">
                        Collabrate
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route("web.contribution")}}" wire:navigate>Become a Contributor</a></li>
                        <li><a href="{{route("web.contribution")}}" wire:navigate>Book a Speaker</a></li>
                    </ul>
                </li> --}}
                <li class="menu-item-has-children">
                    <a href="#">
                        Resources
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route("web.heathdesign")}}" wire:navigate>Events</a></li>
                        <li><a href="{{route("web.accredited")}}" wire:navigate>Accredited Buildings</a></li>
                        <li><a href="{{route("web.faq")}}" wire:navigate>FAQ</a></li>
                        <li><a href="{{route("web.logo")}}" wire:navigate>Associate Partners</a></li>
                        <li><a href="{{route('web.certification')}}" wire:navigate>Certification</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">
                        About Us
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="shop.html">
                                About 
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{route("web.aboutus")}}">
                                        Healthy Building
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wellness-spaces-builder.replit.app/" target="_blank">
                                        Healthy People
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://www.linkedin.com/company/build-holistik/" target="_blank">Blogs</a></li>
                        {{-- <li><a href="{{route("web.press-releases")}}" wire:navigate>Press Releases</a></li>
                        <li><a href="{{route("web.press-contacts")}}" wire:navigate>Press Contacts</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('web.contactus') }}" wire:navigate>
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1 onepage-nav">
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset($setting->logo) }}"width="140px" height="55px" alt="{{ $setting->name }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" wire:navigate>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('web.service',) }}" wire:navigate>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route("web.projects")}}" wire:navigate>
                                        Projects
                                    </a>
                                </li>
                                {{-- <li class="menu-item-has-children">
                                    <a href="#">
                                        Collabrate
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route("web.contribution")}}" wire:navigate>Become a Contributor</a></li>
                                        <li><a href="{{route("web.contribution")}}" wire:navigate>Book a Speaker</a></li>
                                    </ul>
                                </li> --}}
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        Resources
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route("web.heathdesign")}}" wire:navigate>Events</a></li>
                                        <li><a href="{{route("web.accredited")}}" wire:navigate>Accredited Buildings</a></li>
                                        {{-- <li><a href="{{route("web.clients")}}" wire:navigate>Clients</a></li> --}}
                                        <li><a href="{{route("web.faq")}}" wire:navigate>FAQ</a></li>
                                        <li><a href="{{route("web.logo")}}" wire:navigate>Associate Partners</a></li>
                                        <li><a href="{{route('web.certification')}}" wire:navigate>Certification</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">
                                        About Us
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">
                                                About
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route("web.aboutus")}}">
                                                        Healthy Building
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://wellness-spaces-builder.replit.app/" target="_blank">
                                                        Healthy People
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="https://www.linkedin.com/company/build-holistik/" target="_blank">Blogs</a></li>
                                        {{-- <li><a href="{{route("web.media-coverage")}}" wire:navigate>Media Coverage</a></li> --}}
                                        {{-- <li><a href="{{route("web.press-releases")}}" wire:navigate>Press Releases</a></li>
                                        <li><a href="{{route("web.press-contacts")}}" wire:navigate>Press Contacts</a></li> --}}
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="{{ route('web.contactus') }}" wire:navigate
                                class="th-btn btn-mask th-btn-icon">Contact Us</a>
                            {{-- <button type="button" class="simple-icon sideMenuInfo sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
