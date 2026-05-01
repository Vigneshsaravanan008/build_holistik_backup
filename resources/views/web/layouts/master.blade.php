<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_details')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @livewireStyles
    {!! $seo->google_tagmanager !!}
    {!! $seo->google_analytics !!}
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=3236803806611159&ev=PageView&noscript=1"
        /></noscript>
</head>

<body class="bg-smoke">

    <div class="cursor-follower"></div>

    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>


    @include('web.layouts.header')
        @yield('content')
    @include('web.layouts.footer')

    <div class="modal fade" id="newsletter" tabindex="-1" aria-labelledby="newsletterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered br-20 d-flex justify-content-center align-items-center">
            <div class="modal-content w-50">
                <div class="card rounded-4 d-flex justify-content-around p-3">
                    <i class="text-center fa-regular fa-face-smile" style="font-size: 60px;" aria-hidden="true"></i>
                    <h2 class="text-center mb-0 mt-3">Thank You !!!</h2>
                    <p class="testi-card_text text-center">We will get back to you soon!</p>
                    <p class="text-center">For a detailed enquiry, please write to us at <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <script src="{{url("assets/js/jquery.js")}}"></script>
    <script src="{{url("assets/js/jquery-validate.js")}}"></script>
    {{-- <script src="{{ 'assets/js/vendor/jquery-3.7.1.min.js' }}"></script> --}}
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @livewireScripts
    <script>
        const programswiper = new Swiper(".programswiper", {
            direction: "horizontal",
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: ".program-swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
            },
        });
    </script>
    @stack('javascript')
    <script>
        $(".newsletter_form").validate({
            rules: {
                email: {}
            },
            messages: {},
            submitHandler: function(form) {
                savenewsletter();
            },
        })

        function savenewsletter() {
            if ($(".newsletter_email").val() == '') {
                $(".email-error").html('This Field is Required');
            } else {
                $.ajax({
                    url: "{{ url('newsletter') }}",
                    type: "post",
                    _token: "{{ csrf_token() }}",
                    data: $(".newsletter_form").serialize(),
                    success: (data) => {
                        if (data.status == 200) {
                            setTimeout(() => {
                                $(".text-danger").hide();
                                $(".newsletter_form")[0].reset();
                                $("#newsletter").modal('show');
                            }, 2000)
                        }
                    },
                    error: function(data) {
                        const notyf = new Notyf({
                            duration: 2000,
                            position: {
                                x: 'right',
                                y: 'top',
                            },
                            types: [{
                                    type: 'error',
                                    background: 'orange',
                                },
                                {
                                    type: 'success',
                                    background: 'green',
                                }
                            ],
                            icon: false
                        });
                        notyf.open({
                            type: 'error',
                            message: data.responseJSON.errors.email
                        });
                    },
                })
            }
        }
    </script>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3236803806611159');
        fbq('track', 'PageView');
    </script>
</body>

</html>
