@extends("web.layouts.master")
@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
@section("content")
<style>
    .get_service.active{
        color:#EED26E !important;
    }
    </style>
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Service</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Services</li>
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
                        {{-- <div class="widget widget_categories">
                            <div class="accordion-card mb-0 mt-0">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">Certification</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="collapse-item-1"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="checklist mt-2">
                                            <ul>
                                                <li class="text-white">
                                                    <i class="fal fa-circle-check text-white"></i>
                                                    <div class="cursor-pointer get_service" data-id="service_1_1">
                                                        Immune
                                                    </div>
                                                </li>
                                                <li class="text-white">
                                                    <i class="fal fa-circle-check text-white"></i>
                                                    <div class="cursor-pointer get_service" data-id="service_1_2">
                                                        ISO
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-card mb-0">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed text-white fs-14" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Facility Management Advisory & Consulting Services</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="checklist mt-2">
                                            <ul>
                                                <li class="text-white">
                                                    <i class="fal fa-circle-check text-white"></i>
                                                    <div class="cursor-pointer get_service" data-id="service_2_1">
                                                        Process Re-engineering
                                                    </div>
                                                </li>
                                                <li class="text-white">
                                                    <i class="fal fa-circle-check text-white"></i>
                                                    <div class="cursor-pointer get_service" data-id="service_2_2">
                                                        Efficiency Management
                                                    </div>
                                                </li>
                                                <li class="text-white">
                                                    <i class="fal fa-circle-check text-white"></i>
                                                    <div class="cursor-pointer get_service" data-id="service_2_3">
                                                        Facility Audit
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card mb-0 mt-4">
                                <div class="accordion-header">
                                    <span class="services-card collapsed text-white get_service cursor-pointer" data-id="service_3">ESG Consulting</span>
                                </div>
                            </div>
                            <div class="accordion-card mb-0 mt-4">
                                <div class="accordion-header">
                                    <span class="services-card collapsed text-white get_service cursor-pointer" data-id="service_4">Enabling Digitization & Automation </span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="aboutus-card service_bg">
                            <div class="d-flex flex-column align-items-center">
                                <h5 class="text-white mb-0">For Services</h5>
                            </div>
                            <hr>
                            <div class="checklist mt-1">
                                <ul>
                                    <li class="text-white mb-0">
                                        <h6 class="post-title text-white"> <i class="fa-brands fa-servicestack me-2"></i>Certification</h6>
                                    </li>
                                    <ul class="mx-4 mt-0">
                                        <li class="text-white cursor-pointer get_service" data-id="service_1_1"><i class="text-white fa-solid fa-circle-dot"></i>Immune</li>
                                        <li class="text-white cursor-pointer get_service" data-id="service_1_2"><i class="text-white fa-solid fa-circle-dot"></i>ISO</li>
                                    </ul>
                                </ul>
                            
                                <ul class="mt-4">
                                    <li class="text-white mb-0">
                                        <h6 class="post-title text-white"> <i class="fa-brands fa-servicestack me-2"></i> Facility Management Advisory & Consulting Services</h6>
                                    </li>
                                    <ul class="px-4">
                                        <li class="text-white cursor-pointer get_service" data-id="service_2_1"><i class="text-white fa-solid fa-circle-dot"></i>Process Re-engineering</li>
                                        <li class="text-white cursor-pointer get_service" data-id="service_2_2"><i class="text-white fa-solid fa-circle-dot"></i>Efficiency Management</li>
                                        <li class="text-white cursor-pointer get_service" data-id="service_2_3"><i class="text-white fa-solid fa-circle-dot"></i>Facility Audit</li>
                                    </ul>
                                </ul>

                                <ul class="mt-4">
                                    <li class="text-white mb-0">
                                        <h6 class="post-title text-white get_service cursor-pointer" data-id="service_3"> <i class="fa-brands fa-servicestack me-2"></i>ESG Consulting</h6>
                                    </li>
                                   
                                    <li class="text-white mb-0">
                                        <h6 class="post-title text-white get_service cursor-pointer" data-id="service_4"> <i class="fa-brands fa-servicestack me-2"></i>Enabling Digitization & Automation</h6>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                    </aside>
                </div>
                <div class="col-xxl-8 col-lg-7 boder">
                    <div class="agency-page-single">
                        <div class="page-content service_content" id="service_1_1" style="display:block;">
                            <div class="checklist mt-3">
                                <ul>
                                    <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune System Certification</b></li></h5>
                                        <p class="text-theme">Build Holistic is the only Indian arm for HOBI’s ImmuneTM  Building Standard. We facilitate the process from Registration, consulting & finally certifying a space under the Global standard seamlessly.</p>
                                        <p class="text-theme">Our Goal is to evaluate & certify the resilience & indoor environments (offices, residential, industrial, logistics, etc;) against biological and toxic threads.  </p>
                                    {{-- <p class="text-theme"></p> --}}
                                    <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune Design </b></li></h5>
                                        <p class="text-theme">We device national out strategies during the design stage of the project along with the designer to design a facility that is ready and resilient for the client.</p>
                                        <p class="text-theme">We customize this based on client requirements and designers vision for the client. These strategies don’t come in the way of the clients specific art & the designers creative expression.</p>
                                    <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Assessor Training & Certification </b></li></h5>
                                        <p class="text-theme">Build Holistik has a Army of trained Assessors & a few assessors under training for our growing clientele in the Region.</p>
                                        <p class="text-theme">We are affiliated with a training partner responsible for training young professionals as immune assessors that continue to join our team and grow the assessor community here in India.</p>
                                    <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune Material Consultancy </b></li></h5>
                                        <p class="text-theme">We can provide Keg material guidelines to help keep our client at their best score. Ranging from workstation surface finishes, Desk frames, chairs, partition panels & recommended prophetic elements.</p>
                                        <p class="text-theme">We are also able to guide on interior paints, wall finishes, glass partitions & overall sustainable & Hygienic furniture materials recommended for the client & Design professionals.</p>
                                </ul>
                            </div>
                            <p class="mb-30 text-theme mt-40"></p>
                        </div>
                        <div class="page-content service_content" id="service_1_2" style="display:none;">
                            <div class="checklist mt-3">
                                <ul>
                                    <h5><li class="text-theme"><i class="text-theme fal fa-circle-check"></i><b> ISO 41k</b></li></h5>
                                    <p class="mb-30 text-theme mt-3">This standard is specifically for Facility Management Systems (FMS), which is crucial for managing the diverse aspects of a mall, including maintenance, security, and overall environment. It helps ensure a safe, comfortable, and efficient environment for tenants and visitors.</p>
                                    <h5><li class="text-theme"><i class="text-theme fal fa-circle-check"></i><b> ISO 45K</b></li></h5>
                                    <p class="mb-30 text-theme mt-3">This standard deals with Occupational Health and Safety Management Systems (OH&SMS). It helps malls ensure a safe and healthy working environment for employees and visitors by mitigating workplace hazards</p>
                                    <h5><li class="text-theme"><i class="text-theme fal fa-circle-check"></i><b> ISO 13K</b> </li></h5>
                                    <p class="mb-30 text-theme mt-3">Lorem Ipsum Dummy Content</p>
                                    <h5><li class="text-theme"><i class="text-theme fal fa-circle-check"></i><b> ISO 14K</b> </li></h5>
                                    <p class="mb-30 text-theme mt-3">This standard focuses on Environmental Management Systems (EMS). Implementing ISO 14001 can help malls optimize their resource utilization, reduce waste, and minimize their environmental footprint.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="page-content service_content" id="service_2_1" style="display:none;">
                            <h4 class="sec-title text-theme mb-1">Process Re-engineering</h4>
                            <p class="mb-30 text-theme mt-40">Build Holistik partners with clients to develop customized Facilities Management (FM) performance solutions. We bring to the table best in industry Market expertise to achieve operational excellence, cost reduction and as a result enhanced workplace innovation and experience.</p>
                            <p class="mb-30 text-theme mt-2">We are a  specialized group of seasoned practitioners, professional engineers, academics, and industry-accredited professionals. Our team brings a unique spectrum of expertise and viewpoints when providing consulting and technical services to Architects, building owners/operators and facilities managers. </p>
                            <p class="mb-30 text-theme mt-2">We assess your existing FM processes and completely reimagining and reworking them to make them better. Looking out for an opportunity to improve efficiency along with employee experience.</p>
                            <div class="checklist mt-3">
                                <ul>
                                    <li class="text-theme"><i class="text-theme fal fa-circle-check"></i>Is the process aligned with company objectiveS?</li>
                                    <li class="text-theme"><i class="text-theme fal fa-circle-check"></i>Relevancy of processes to todays market challenges.</li>
                                    <li class="text-theme"><i class="text-theme fal fa-circle-check"></i>Bringing continuous improvement to the existing Process DNA.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="page-content service_content" id="service_2_2" style="display:none;">
                            <h4 class="sec-title text-theme mb-1">Efficiency Management</h4>
                            <p class="mb-30 text-theme mt-40">Focuses on optimizing resources, operations, and processes to enhance productivity, reduce costs, and improve overall performance. It involves strategies like preventive maintenance, space optimization, and leveraging technology to streamline workflows and asset management</p>
                        </div>
                        <div class="page-content service_content" id="service_2_3" style="display:none;">
                            <h4 class="sec-title text-theme mb-1">Facility Audit</h4>
                            <p class="mb-30 text-theme mt-40">Facility Audit an extensive evaluation of an organisation's assets, systems, processes and technology related to the maintenance and management of a facility, regardless of whether it’s a new building or has been in operation for a long time. </p>
                            <p class="mb-30 text-theme mt-2">Audits cover various areas of FM including (but not limited to) health and safety, compliance with regulations and standards, asset management, energy use, maintenance strategies, and the overall performance of FM services.  </p>
                        </div>
                        <div class="page-content service_content" id="service_3" style="display:none;">
                            <h4 class="sec-title text-theme mb-1">ESG Consulting</h4>
                             <p class="mb-30 text-theme mt-40">Build Holistic in house ESG Consultants that are able to ties in ESG score requirements to what the standard offers.</p>
                             <p class="mb-30 text-theme mt-2">The standard enhances a building ESG quotient by integrating health, safety & sustainability measures. Our consultant will guide on how it aligns with Global trends in responsible investments & corporate sustainability. We Holistically support organizations to meet their ESG reporting requirements by enabling technology in the process.</p>
                        </div>
                        <div class="page-content service_content" id="service_4" style="display:none;">
                             <p class="mb-30 text-theme mt-40">Lorem Ipsum Contenwst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push("javascript")
<script>
    $(".get_service").on("click",function(){
        $(".get_service").removeClass("active");
        $(this).addClass("active");
        var id=$(this).data("id");
        $(".service_content").css("display","none");
        $(`#${id}`).css("display","block");
    })
</script>
@endpush