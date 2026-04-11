@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])

@endsection

<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Projects</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="container">
                    {{-- <div class="row justify-content-lg-between align-items-center">
                        <div class="col-xxl-5 col-lg-6">
                            <div class="title-area">
                                <span class="sub-title">Our Projects</span>
                                <h2 class="sec-title text-theme">PMI</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-area team-slider3">
                        <div class="swiper th-slider slider-drag-wrap swiper-initialized swiper-horizontal swiper-backface-hidden" id="teamSlider3" data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1400&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;grabCursor&quot;:&quot;true&quot;}">
                            <div class="swiper-wrapper" id="swiper-wrapper-c3231d2c7846d672" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px); transition-delay: 0ms;">
                                <div class="swiper-slide" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/pmi/1.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="swiper-slide" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/pmi/5.jpg")}}" alt="Team" height="100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image" style="height: 277px !important;object-fit: contain;">
                                                <img src="{{asset("assets/projects/pmi/3.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image" style="height: 277px !important;object-fit: contain;">
                                                <img src="{{asset("assets/projects/pmi/2.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image" style="height: 277px !important;object-fit: contain;">
                                                <img src="{{asset("assets/projects/pmi/6.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div> --}}

                    <div class="row justify-content-lg-between align-items-center mt-4">
                        <div class="col-xxl-8 col-lg-8">
                            <div class="title-area">
                                <h2 class="sec-title text-theme fs-35">Executive centre India Limited</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-area team-slider3">
                        <div class="swiper th-slider slider-drag-wrap swiper-initialized swiper-horizontal swiper-backface-hidden" id="teamSlider3" data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1400&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;grabCursor&quot;:&quot;true&quot;}">
                            <div class="swiper-wrapper" id="swiper-wrapper-c3231d2c7846d672" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px); transition-delay: 0ms;">
                                

                                <div class="swiper-slide" role="group" aria-label="2 / 7" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/client/2.png")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide" role="group" aria-label="3 / 7" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/1.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" role="group" aria-label="1 / 7" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/13.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="swiper-slide" role="group" aria-label="4 / 7" data-swiper-slide-index="2" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/5.jpg")}}" alt="Team" height="100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 7" data-swiper-slide-index="3" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/3.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 7" data-swiper-slide-index="5" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/2.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide" role="group" aria-label="7 / 7" data-swiper-slide-index="6" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/tec/1space_shots/6.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>

                    {{-- <div class="row justify-content-lg-between align-items-center mt-4">
                        <div class="col-xxl-5 col-lg-6">
                            <div class="title-area">
                                <h2 class="sec-title text-theme">Wellness CO</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-area team-slider3">
                        <div class="swiper th-slider slider-drag-wrap swiper-initialized swiper-horizontal swiper-backface-hidden" id="teamSlider3" data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1400&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;grabCursor&quot;:&quot;true&quot;}">
                            <div class="swiper-wrapper" id="swiper-wrapper-c3231d2c7846d672" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px); transition-delay: 0ms;">
                                <div class="swiper-slide" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/wellness_co/1.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="swiper-slide" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/wellness_co/7.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/wellness_co/3.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("assets/projects/wellness_co/2.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image" style="height: 277px !important;object-fit: contain;">
                                                <img src="{{asset("assets/projects/wellness_co/6.jpeg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div> --}}

                    <div class="row justify-content-lg-between align-items-center mt-4">
                        <div class="col-xxl-8 col-lg-8">
                            <div class="title-area">
                                <h2 class="sec-title text-theme fs-35">Bangalore International Airport Limited</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-area team-slider3">
                        <div class="swiper th-slider slider-drag-wrap swiper-initialized swiper-horizontal swiper-backface-hidden" id="teamSlider3" data-slider-options="{&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;},&quot;992&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;},&quot;1400&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;}},&quot;grabCursor&quot;:&quot;true&quot;}">
                            <div class="swiper-wrapper" id="swiper-wrapper-c3231d2c7846d672" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px); transition-delay: 0ms;">
                                <div class="swiper-slide" role="group" aria-label="1 / 20" data-swiper-slide-index="1" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/21.png")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="swiper-slide" role="group" aria-label="2 / 20" data-swiper-slide-index="2" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/2.jpg")}}" alt="Team" height="100px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 20" data-swiper-slide-index="3" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/3.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="4 / 20" data-swiper-slide-index="4" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/4.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Single Item -->
                                <div class="swiper-slide" role="group" aria-label="5 / 20" data-swiper-slide-index="5" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/5.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="6 / 20" data-swiper-slide-index="6" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/6.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="7 / 20" data-swiper-slide-index="7" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/7.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="8 / 20" data-swiper-slide-index="8" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/8.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="9 / 20" data-swiper-slide-index="9" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/9.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="10 / 20" data-swiper-slide-index="10" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/10.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="11 / 20" data-swiper-slide-index="11" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/11.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="12 / 20" data-swiper-slide-index="12" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/12.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="13 / 20" data-swiper-slide-index="13" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/13.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="14 / 20" data-swiper-slide-index="14" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/14.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="15 / 20" data-swiper-slide-index="15" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/15.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="16 / 20" data-swiper-slide-index="16" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/16.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="17 / 20" data-swiper-slide-index="17" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/17.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="18 / 20" data-swiper-slide-index="18" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/18.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="19 / 20" data-swiper-slide-index="19" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/19.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="20 / 20" data-swiper-slide-index="20" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/20.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="21 / 20" data-swiper-slide-index="20" style="width: 416px; margin-right: 24px;">
                                    <div class="th-team team-card style3">
                                        <div class="img-wrap">
                                            <div class="team-img project_image">
                                                <img src="{{asset("uploads/bengaluru/1.jpg")}}" alt="Team">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
