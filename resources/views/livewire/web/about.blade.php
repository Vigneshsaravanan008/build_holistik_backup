@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
<div>
    <div class="breadcumb-wrapper" data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="25%" data-right="12%">
            <img src="{{asset("assets/img/shape/section_shape_2_1.jpg")}}" alt="img">
        </div>
        <div class="sec-bg-shape2-1 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-left="5%">
            <img src="{{asset("assets/img/shape/section_shape_2_3.jpg")}}" alt="img">
        </div>
        <div class="container">
            <div class="about-page-wrap">
                <div class="row gy-40 justify-content-between align-items-center">
                    <div class="col-lg-12">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">About Build Holistik</h2>
                            <p class="mb-0 text-theme"> Build Holistik  is a company dedicated to enhancing the health and well-being of facilities, campuses, buildings, and their inhabitants. As the Indian arm of the     Healthy by Design Building Institute (HDBI)    , Build Holistik is the leading provider of the     IMMUNE Building Standard™    , a globally recognized certification system designed to boost the resilience of the built environment against health threats.</p>
                            <p class="mt-2 text-theme">
                                Our team of experienced real estate consultants specializes in sustainability, health, safety, and environmental impact assessments, ensuring that buildings align with global green standards while optimizing occupant well-being.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">Why Build Holistik?</h2>
                            <p class="mb-0 text-theme">Build Holistik is at the forefront of transforming the built environment by introducing the IMMUNE Building Standard™    , a globally recognized certification system designed to enhance the resilience of buildings against health threats. In a post-pandemic world, Build Holistik is committed to creating healthier, safer, and more productive spaces for occupants while aligning with global sustainability and ESG goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{asset("uploads/building/1.png")}}" alt="About">
                            </div>
                            {{-- <div class="about-tag">
                                <div class="about-experience-tag">
                                    <span class="circle-title-anime">Building Resilience</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                   

                    <div class="col-lg-12">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">About HDBI</h2>
                            <p class="mb-0 text-theme"> The Healthy by Design Building Institute (HDBI) is the global accreditor of the IMMUNE Building Standard™. HDBI provides the framework, training, and certification for buildings worldwide, ensuring they meet the highest standards of health resilience and operational readiness. Build Holistik is proud to be affiliated with HDBI, bringing this global standard to the Indian market.</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="img-box3 mb-0">
                            <div class="img1">
                                <img src="{{asset("assets/img/certificate_1.jpg")}}" alt="About">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 mt-4">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">Certification</h2>
                            <p class="mb-0 text-theme">The IMMUNE Building Standard™ is a blueprint for the healthy buildings of the future. It evaluates buildings across     135 criteria    , covering governance, access, outdoor spaces, common areas, office spaces, amenities, and facility management. Buildings can achieve one of three certification levels:</p>
                            <div class="checklist mt-4">
                                <ul>
                                    <li><i class="fal fa-circle-check"></i> IMMUNE™ Strong (55-70%)</li>
                                    <li><i class="fal fa-circle-check"></i> IMMUNE™ Powerful (71-85%) </li>
                                    <li><i class="fal fa-circle-check"></i> IMMUNE™ Resilient (85%+)  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Benefits of Build Holistik</h3>
                            <div class="row gap-4">
                                <div class="col-lg-4 aboutus-card">
                                    <div class="tagcloud">
                                        <a href="#">For Developers</a>
                                    </div>
                                    <div class="checklist mt-3">
                                        <ul>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Market Leadership</li>
                                                <p class="text-white">Position your projects as pioneers in health-resilient building design</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Increased Property Value</li>
                                                <p class="text-white">Command premium leasing rates and attract tenants who prioritize health and safety.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Regulatory Compliance </li>
                                                <p class="text-white">Align with global and local building codes, reducing the risk of non-compliance</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Competitive Edge </li>
                                                <p class="text-white">Differentiate your projects with the IMMUNE certification, a mark of health resilience.</p>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-lg-4 aboutus-card">
                                    <div class="tagcloud">
                                        <a href="#">For Contributors</a>
                                    </div>
                                    <div class="checklist mt-3">
                                        <ul>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Leverage Expertise</li>
                                                <p class="text-white">Contribute your unique skills to the creation of healthier buildings.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Join a Global Community</li>
                                                <p class="text-white">Be part of a network of best-in-class experts in sustainable and healthy building design.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Innovate </li>
                                                <p class="text-white">Work on cutting-edge projects that integrate advanced technologies like UV disinfection, touchless systems, and real-time health monitoring.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 aboutus-card">
                                    <div class="tagcloud">
                                        <a href="#">For Assessors</a>
                                    </div>
                                    <div class="checklist mt-3">
                                        <ul>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Lead the Change</li>
                                                <p class="text-white">Take the lead in assessing buildings for health resilience and operational readiness.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Certify Immunity</li>
                                                <p class="text-white">Become a certified IMMUNE Assessor and play a key role in shaping the future of healthy buildings.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Professional Growth  </li>
                                                <p class="text-white">Gain specialized training in sustainable and healthy building design, development, and certification.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 aboutus-card">
                                    <div class="tagcloud">
                                        <a href="#">For Owners and Landlords</a>
                                    </div>
                                    <div class="checklist mt-3">
                                        <ul>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Healthier Workplaces</li>
                                                <p class="text-white">Create spaces that minimize health risks and enhance occupant well-being.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Attract Premium Tenants  </li>
                                                <p class="text-white">Tenants are increasingly prioritizing health and safety, making IMMUNE-certified buildings more desirable.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Operational Efficiency  </li>
                                                <p class="text-white">Reduce health-related liability risks and improve crisis preparedness.</p>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 aboutus-card">
                                    <div class="tagcloud">
                                        <a href="#">For Tenants and People</a>
                                    </div>
                                    <div class="checklist mt-3">
                                        <ul>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i>  Healthier Spaces</li>
                                                <p class="text-white">Work, live, and thrive in environments designed to minimize health risks.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Productivity Gains </li>
                                                <p class="text-white">Improved indoor air quality and reduced pathogen transmission lead to higher cognitive performance and well-being.</p>
                                            <li class="text-white"><i class="text-white fal fa-circle-check"></i> Peace of Mind</li>
                                                <p class="text-white">Trust in the resilience of the spaces where you spend most of your time.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="img-box3">
                            <div class="img1">
                                <img src="{{asset("assets/img/normal/about_3_2.png")}}" alt="About">
                            </div>
                        </div> --}}
                    </div>
                   



                    <div class="col-lg-6">
                        {{-- <h3 class="sec-title text-theme mb-2">Book an Build Holistik Speaker </h3> --}}
                        <p class="text-theme">Invite an Build Holistik expert to speak at your next event, conference, or workshop. Our speakers are industry leaders in health-resilient building design, sustainability, and workplace wellness. Contact us to book a speaker and inspire your audience with insights on the future of healthy buildings.</p>
                        {{-- <div class="about-wrap2 style-theme mt-50">
                            <div class="checklist style4">
                                <ul>
                                    <li><img src="{{asset("assets/img/icon/checkmark.svg")}}" alt="img">Quality real estate services</li>
                                    <li><img src="{{asset("assets/img/icon/checkmark.svg")}}" alt="img">100% Satisfaction guarantee</li>
                                    <li><img src="{{asset("assets/img/icon/checkmark.svg")}}" alt="img">Highly professional team</li>
                                    <li><img src="{{asset("assets/img/icon/checkmark.svg")}}" alt="img">Dealing always on time</li>
                                </ul>
                            </div>
                            <div class="call-btn">
                                <div class="icon-btn bg-theme">
                                    <img src="{{asset("assets/img/icon/phone.svg")}}" alt="img">
                                </div>
                                <div class="btn-content">
                                    <h6 class="btn-title text-theme">Call Us 24/7</h6>
                                    <span class="btn-text"><a class="text-theme" href="tel:0123456789">+01 234 56789</a></span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{asset("assets/img/outcome.jpg")}}" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
