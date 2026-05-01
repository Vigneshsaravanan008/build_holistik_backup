@extends("web.layouts.master")
@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection

@php
use App\Models\Contactus;
@endphp

@section("content")
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
            <style>
                .hp-horizontal-tabs { margin-bottom: 2.5rem; }
                .hp-main-tabs {
                    display: flex;
                    gap: 0.5rem;
                    border-bottom: 2px solid #e5e5e5;
                    padding-bottom: 0;
                }
                .hp-main-tab {
                    padding: 1rem 2rem;
                    font-family: 'Outfit', sans-serif;
                    font-size: 1rem;
                    font-weight: 600;
                    color: #6E7070;
                    background: transparent;
                    border: none;
                    cursor: pointer;
                    position: relative;
                    transition: all 0.3s ease;
                }
                .hp-main-tab::after {
                    content: '';
                    position: absolute;
                    bottom: -2px;
                    left: 0;
                    width: 100%;
                    height: 3px;
                    background: #1C2D37;
                    transform: scaleX(0);
                    transition: transform 0.3s ease;
                }
                .hp-main-tab.active {
                    color: #1C2D37;
                }
                .hp-main-tab.active::after {
                    transform: scaleX(1);
                }
                .hp-main-tab:hover:not(.active) {
                    color: #1C2D37;
                }
                
                .hp-sub-tabs {
                    display: flex;
                    gap: 0;
                    margin-top: 1.5rem;
                    padding: 0;
                    background: #f5f7f6;
                    border-radius: 12px;
                    padding: 0.5rem;
                }
                .hp-sub-tab {
                    padding: 0.75rem 1.5rem;
                    font-family: 'Inter', sans-serif;
                    font-size: 0.95rem;
                    font-weight: 500;
                    color: #6E7070;
                    background: transparent;
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }
                .hp-sub-tab.active {
                    background: #1C2D37;
                    color: white;
                }
                .hp-sub-tab:hover:not(.active) {
                    background: #e5e5e5;
                    color: #1C2D37;
                }
                
                .hp-tab-content { display: none; }
                .hp-tab-content.active { display: block; }
            </style>
            
            <div class="hp-horizontal-tabs">
                <div class="hp-main-tabs">
                    <button class="hp-main-tab active" data-main="certification">Certification</button>
                    <button class="hp-main-tab" data-main="health">Health Partnership</button>
                </div>
                
                <div class="hp-sub-tabs-container" id="certification-subs">
                    <div class="hp-sub-tabs">
                        <button class="hp-sub-tab active" data-sub="immune">Immune</button>
                        <button class="hp-sub-tab" data-sub="esg">ESG Consulting</button>
                    </div>
                </div>
            </div>
            
            <!-- Certification Tab Content -->
            <div class="hp-tab-content active" id="content-certification">
                <!-- Immune Sub-tab -->
                <div class="hp-tab-content active" id="content-immune">
                    <div class="checklist mt-3">
                        <ul>
                            <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune System Certification</b></li></h5>
                                <p class="text-theme">Build Holistic is the only Indian arm for HOBI's ImmuneTM Building Standard. We facilitate the process from Registration, consulting & finally certifying a space under the Global standard seamlessly.</p>
                                <p class="text-theme">Our Goal is to evaluate & certify the resilience & indoor environments (offices, residential, industrial, logistics, etc;) against biological and toxic threads.</p>
                            <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune Design </b></li></h5>
                                <p class="text-theme">We device national out strategies during the design stage of the project along with the designer to design a facility that is ready and resilient for the client.</p>
                                <p class="text-theme">We customize this based on client requirements and designers vision for the client. These strategies don't come in the way of the clients specific art & the designers creative expression.</p>
                            <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Assessor Training & Certification </b></li></h5>
                                <p class="text-theme">Build Holistik has a Army of trained Assessors & a few assessors under training for our growing clientele in the Region.</p>
                                <p class="text-theme">We are affiliated with a training partner responsible for training young professionals as immune assessors that continue to join our team and grow the assessor community here in India.</p>
                            <h5><li class="text-theme fs-24"><i class="text-theme fal fa-circle-check"></i> <b>Immune Material Consultancy </b></li></h5>
                                <p class="text-theme">We can provide Keg material guidelines to help keep our client at their best score. Ranging from workstation surface finishes, Desk frames, chairs, partition panels & recommended prophetic elements.</p>
                                <p class="text-theme">We are also able to guide on interior paints, wall finishes, glass partitions & overall sustainable & Hygienic furniture materials recommended for the client & Design professionals.</p>
                        </ul>
                    </div>
                </div>
                
                <!-- ESG Consulting Sub-tab -->
                <div class="hp-tab-content" id="content-esg">
                    <h4 class="sec-title text-theme mb-1">ESG Consulting</h4>
                    <p class="mb-30 text-theme mt-40">Build Holistic in house ESG Consultants that are able to ties in ESG score requirements to what the standard offers.</p>
                    <p class="mb-30 text-theme mt-2">The standard enhances a building ESG quotient by integrating health, safety & sustainability measures. Our consultant will guide on how it aligns with Global trends in responsible investments & corporate sustainability. We Holistically support organizations to meet their ESG reporting requirements by enabling technology in the process.</p>
                </div>
            </div>
            
            <!-- Health Partnership Tab Content -->
            <div class="hp-tab-content" id="content-health">
                <div class="hp-wrapper">
                    <style>
                        .hp-wrapper { --hp-theme: #1C2D37; --hp-accent: #EED26E; --hp-green: #27AE60; --hp-blue: #185FA5; --hp-red: #C0392B; }
                        
                        /* Transparent Card Backgrounds */
                        .hp-hero-section { background: linear-gradient(135deg, var(--hp-theme) 0%, #2a4a3d 60%, var(--hp-green) 100%); border-radius: 20px; padding: 2.5rem; color: white; margin-bottom: 2.5rem; }
                        .hp-hero-section .sec-title { color: white; font-size: 1.75rem; margin-bottom: 0.75rem; font-weight: 700; }
                        .hp-hero-section p { color: rgba(255,255,255,0.85); font-size: 1rem; max-width: 600px; line-height: 1.7; }
                        .hp-hero-stats { display: flex; flex-wrap: wrap; gap: 1.5rem; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.15); }
                        .hp-hero-stat { text-align: center; }
                        .hp-hero-stat strong { display: block; font-family: 'Outfit', sans-serif; font-size: 1.8rem; font-weight: 800; color: var(--hp-accent); }
                        .hp-hero-stat span { font-size: 0.8rem; color: rgba(255,255,255,0.7); }
                        
                        .hp-subtitle { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--hp-green); margin-bottom: 0.5rem; }
                        .hp-main-title { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 700; color: #0D0D0C; margin-bottom: 0.75rem; }
                        .hp-desc { color: #6E7070; line-height: 1.75; margin-bottom: 1.5rem; }
                        
                        /* Transparent backgrounds for cards */
                        .hp-problem-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2.5rem; }
                        .hp-problem-card {
                            background: var(--hp-theme);
                            border-radius: 14px;
                            padding: 1.25rem;
                            border: 1px solid rgba(255,255,255,0.1);
                            transition: all 0.3s ease;
                        }
                        .hp-problem-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,0.15); }
                        .hp-problem-card .icon-wrap { font-size: 1.5rem; margin-bottom: 0.75rem; }
                        .hp-problem-card h4 { font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600; color: white; margin-bottom: 0.5rem; }
                        .hp-problem-card p { font-size: 0.85rem; color: rgba(255,255,255,0.75); line-height: 1.5; margin: 0; }
                        
                        .hp-process-strip { background: linear-gradient(135deg, var(--hp-theme) 0%, #2a4a3d 100%); border-radius: 18px; padding: 2rem; margin-bottom: 2.5rem; }
                        .hp-process-strip h3 { color: white; text-align: center; font-family: 'Outfit', sans-serif; font-size: 1.3rem; margin-bottom: 0.5rem; }
                        .hp-process-strip p { color: rgba(255,255,255,0.7); text-align: center; margin-bottom: 1.5rem; font-size: 0.9rem; }
                        .hp-process-steps { display: flex; justify-content: space-between; gap: 0.5rem; }
                        .hp-process-step { flex: 1; background: rgba(255,255,255,0.08); border-radius: 12px; padding: 1rem 0.75rem; text-align: center; transition: all 0.3s ease; }
                        .hp-process-step:hover { background: rgba(255,255,255,0.15); }
                        .hp-process-step .step-num { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 800; color: rgba(255,255,255,0.2); margin-bottom: 0.35rem; }
                        .hp-process-step h4 { font-family: 'Outfit', sans-serif; font-size: 0.85rem; font-weight: 600; color: white; margin-bottom: 0.25rem; }
                        .hp-process-step p { font-size: 0.7rem; color: rgba(255,255,255,0.6); margin: 0; }
                        
                        .hp-pain-section { background: transparent; padding: 2.5rem 0; }
                        .hp-pain-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-top: 1.5rem; }
                        .hp-pain-card { background: var(--hp-theme); border-left: 4px solid #EED26E; border-radius: 0 14px 14px 0; padding: 1.25rem; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
                        .hp-pain-card:hover { transform: translateX(5px); box-shadow: 0 4px 15px rgba(0,0,0,0.15); }
                        .hp-pain-card h4 { font-family: 'Outfit', sans-serif; font-size: 0.95rem; font-weight: 600; color: #EED26E; margin-bottom: 0.5rem; }
                        .hp-pain-card p { font-size: 0.85rem; color: rgba(255,255,255,0.75); line-height: 1.5; margin: 0; }
                        
                        .hp-dual-section { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 2.5rem; }
                        .hp-solution-card { background: var(--hp-theme); border-radius: 16px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
                        .hp-solution-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.15); transform: translateY(-3px); }
                        .hp-solution-header { padding: 1.25rem; background: rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1); }
                        .hp-solution-header h4 { font-family: 'Outfit', sans-serif; font-size: 1.1rem; font-weight: 600; color: #EED26E; margin-bottom: 0.2rem; }
                        .hp-solution-header p { font-size: 0.8rem; color: rgba(255,255,255,0.7); margin: 0; }
                        .hp-solution-body { padding: 1.25rem; }
                        .hp-solution-item { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 0.7rem; font-size: 0.9rem; color: rgba(255,255,255,0.85); }
                        .hp-solution-item .check { width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.65rem; flex-shrink: 0; color: var(--hp-theme); font-weight: 700; background: #EED26E; }
                        
                        .hp-steps-section { margin-bottom: 2.5rem; }
                        .hp-steps-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1.5rem; }
                        .hp-step-item { display: flex; gap: 1rem; align-items: flex-start; background: var(--hp-theme); border-radius: 14px; padding: 1.25rem; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
                        .hp-step-item:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
                        .hp-step-num { min-width: 44px; height: 44px; border-radius: 50%; background: #EED26E; color: var(--hp-theme); font-family: 'Outfit', sans-serif; font-weight: 800; font-size: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
                        .hp-step-content h4 { font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600; color: white; margin-bottom: 0.35rem; }
                        .hp-step-content p { font-size: 0.9rem; color: rgba(255,255,255,0.75); line-height: 1.6; margin: 0; }
                        
                        .hp-packages-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2.5rem; }
                        .hp-package-card { background: var(--hp-theme); border-radius: 16px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
                        .hp-package-card:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.15); }
                        .hp-package-header { padding: 1rem 1.25rem; background: rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1); }
                        .hp-package-header h5 { font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600; color: #EED26E; margin-bottom: 0.15rem; }
                        .hp-package-header p { font-size: 0.75rem; color: rgba(255,255,255,0.7); margin: 0; }
                        .hp-package-body { padding: 1rem; }
                        .hp-package-item { display: flex; align-items: flex-start; gap: 0.5rem; margin-bottom: 0.5rem; font-size: 0.85rem; color: rgba(255,255,255,0.85); }
                        .hp-package-item .check { color: #EED26E; font-weight: 700; flex-shrink: 0; }
                        
                        .hp-abha-section { background: var(--hp-theme); border-radius: 18px; padding: 2rem; margin-bottom: 2.5rem; border: 1px solid rgba(255,255,255,0.1); }
                        .hp-abha-section h3 { font-family: 'Outfit', sans-serif; color: #EED26E; font-size: 1.25rem; margin-bottom: 0.75rem; }
                        .hp-abha-section > p { color: rgba(255,255,255,0.85); margin-bottom: 1.25rem; font-size: 0.95rem; }
                        .hp-features-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0.75rem; }
                        .hp-feature-card { background: rgba(255,255,255,0.1); border-radius: 12px; padding: 1.25rem; border: 1px solid rgba(255,255,255,0.1); transition: all 0.3s ease; }
                        .hp-feature-card:hover { transform: translateY(-2px); background: rgba(255,255,255,0.15); }
                        .hp-feature-card h5 { font-family: 'Outfit', sans-serif; font-size: 0.95rem; font-weight: 600; color: white; margin-bottom: 0.35rem; }
                        .hp-feature-card p { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin: 0; }
                        
                        .hp-pun-section { background: #FAEEDA; border-top: 1px solid #FAC775; border-bottom: 1px solid #FAC775; padding: 2.5rem 1.5rem; text-align: center; margin-bottom: 2.5rem; border-radius: 16px; }
                        .hp-pun-section h3 { color: #633806; font-family: 'Outfit', sans-serif; font-size: 1.3rem; margin-bottom: 0.75rem; }
                        .hp-pun-section p { color: #7a4a10; max-width: 500px; margin: 0 auto 1.25rem; font-size: 0.95rem; }
                        
                        .hp-trust-bar { display: flex; justify-content: space-around; padding: 1.5rem 0; border-top: 2px solid #e5e5e5; border-bottom: 2px solid #e5e5e5; margin-bottom: 2rem; }
                        .hp-trust-item { text-align: center; }
                        .hp-trust-item strong { display: block; font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 800; color: var(--hp-theme); }
                        .hp-trust-item span { font-size: 0.75rem; color: #6E7070; }
                        
                        .hp-testimonial-card { background: var(--hp-theme); border-radius: 16px; padding: 1.5rem; border-left: 4px solid #EED26E; border: 1px solid rgba(255,255,255,0.1); margin-bottom: 2rem; }
                        .hp-testimonial-card p { font-style: italic; color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.6; margin-bottom: 0.75rem; }
                        .hp-testimonial-author { font-size: 0.85rem; font-weight: 600; color: #EED26E; }
                        
                        .hp-emotional-cta { text-align: center; padding: 2.5rem; margin-bottom: 2.5rem; background: var(--hp-theme); border-radius: 18px; border: 1px solid rgba(255,255,255,0.1); }
                        .hp-emotional-cta h3 { font-family: 'Outfit', sans-serif; font-size: 1.4rem; color: white; margin-bottom: 1rem; }
                        .hp-emotional-cta p { color: rgba(255,255,255,0.8); max-width: 500px; margin: 0 auto 1.5rem; font-size: 0.95rem; }
                        
                        /* Form Styles */
                        .hp-lead-form { background: linear-gradient(135deg, var(--hp-green) 0%, var(--hp-theme) 100%); border-radius: 20px; padding: 2.5rem; margin-bottom: 2rem; }
                        .hp-lead-form h3 { color: white; font-family: 'Outfit', sans-serif; font-size: 1.4rem; margin-bottom: 0.5rem; text-align: center; }
                        .hp-lead-form > p { color: rgba(255,255,255,0.85); text-align: center; margin-bottom: 1.5rem; font-size: 0.95rem; }
                        .hp-form-wrap { background: white; border-radius: 16px; padding: 2rem; box-shadow: 0 20px 50px rgba(0,0,0,0.2); }
                        .hp-form-title { color: var(--hp-theme); font-family: 'Outfit', sans-serif; font-size: 1.1rem; font-weight: 600; margin-bottom: 1.25rem; }
                        .hp-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
                        .hp-form-field { display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1rem; }
                        .hp-form-field label { font-size: 0.85rem; font-weight: 600; color: #0D0D0C; }
                        .hp-form-field input, .hp-form-field select, .hp-form-field textarea { padding: 12px 16px; border: 1px solid #e5e5e5; border-radius: 10px; font-size: 0.95rem; color: #0D0D0C; background: #fafafa; font-family: 'Inter', sans-serif; transition: all 0.3s ease; }
                        .hp-form-field input:focus, .hp-form-field select:focus, .hp-form-field textarea:focus { outline: none; border-color: var(--hp-green); box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.1); }
                        .hp-form-field textarea { resize: vertical; min-height: 80px; }
                        .hp-form-submit { width: 100%; padding: 16px; background: #EED26E; color: #1C2D37; font-weight: 700; font-size: 1rem; border: none; border-radius: 10px; cursor: pointer; transition: all 0.3s ease; font-family: 'Outfit', sans-serif; }
                        .hp-form-submit:hover { background: #d4b85e; transform: translateY(-2px); }
                        .hp-form-privacy { font-size: 0.75rem; color: #888; margin-top: 0.75rem; text-align: center; }
                        .hp-form-success { background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 1rem; border-radius: 10px; margin-bottom: 1rem; text-align: center; }
                        
                        @media (max-width: 1199px) {
                            .hp-problem-grid, .hp-packages-grid, .hp-features-row, .hp-pain-grid { grid-template-columns: repeat(2, 1fr); }
                        }
                        @media (max-width: 768px) {
                            .hp-hero-stats { flex-direction: column; gap: 1rem; }
                            .hp-dual-section, .hp-steps-grid { grid-template-columns: 1fr; }
                            .hp-process-steps { flex-direction: column; gap: 0.5rem; }
                            .hp-trust-bar { flex-direction: column; gap: 1rem; }
                            .hp-form-row { grid-template-columns: 1fr; }
                        }
                        @media (max-width: 576px) {
                            .hp-problem-grid, .hp-packages-grid, .hp-features-row, .hp-pain-grid { grid-template-columns: 1fr; }
                        }
                    </style>

                    <!-- Hero -->
                    <div class="hp-hero-section">
                        <h2 class="sec-title">Healthy Buildings + Healthy People</h2>
                        <p>Buildings can get sick. Buildings can spread sickness. And your people deserve more than an annual blood test. We fix both — with India's most complete workspace wellness system, now linked to ABHA digital health records.</p>
                        <div class="hp-hero-stats">
                            <div class="hp-hero-stat"><strong>850+</strong><span>IMMUNE-Accredited Buildings</span></div>
                            <div class="hp-hero-stat"><strong>3 flows</strong><span>Air · Water · Waste</span></div>
                            <div class="hp-hero-stat"><strong>ABHA ID</strong><span>Complimentary onboarding</span></div>
                            <div class="hp-hero-stat"><strong>2 weeks</strong><span>Sample to report</span></div>
                        </div>
                    </div>

                    <!-- The Problem - Buildings -->
                    <div class="hp-subtitle">The Problem with Buildings</div>
                    <h3 class="hp-main-title">Buildings don't just wear down — they <span style="color: var(--hp-red)">get sick</span>. And a sick building makes your people sick too.</h3>
                    <p class="hp-desc">A LEED star or an energy certificate doesn't tell you whether your building is actively spreading illness through its air ducts, water lines, or waste systems. That's the gap we diagnose.</p>
                    <div class="hp-problem-grid">
                        <div class="hp-problem-card air"><div class="icon-wrap">💨</div><h4>Airflow Spreading Zones</h4><p>Poorly maintained HVAC systems circulate pathogens, mould spores, and VOCs across entire floors. One sick zone becomes everyone's zone.</p></div>
                        <div class="hp-problem-card water"><div class="icon-wrap">💧</div><h4>Water Flow Risk</h4><p>Stagnant pipes, biofilm, and Legionella thrive in buildings that look clean on the outside. Water testing uncovers what routine maintenance misses.</p></div>
                        <div class="hp-problem-card waste"><div class="icon-wrap">🗑️</div><h4>Waste Management Gaps</h4><p>Improper waste segregation and disposal cycles create cross-contamination pathways that compromise the air and surfaces people touch daily.</p></div>
                        <div class="hp-problem-card infection"><div class="icon-wrap">🦠</div><h4>Invisible Infection Vectors</h4><p>No single inspection catches it all. The IMMUNE Standard maps your entire building's biology — from inlet air to drain outflow — in one certification sweep.</p></div>
                    </div>

                    <!-- Diagnosis Journey Strip -->
                    <div class="hp-process-strip">
                        <h3>Make Your Building Infection-Proof</h3>
                        <p>A structured diagnosis of your building's spreading zones — then the people inside them. Five steps from assessment to future-proofed wellness.</p>
                        <div class="hp-process-steps">
                            <div class="hp-process-step"><div class="step-num">01</div><h4>Check Building</h4><p>Air, water & waste flow audit</p></div>
                            <div class="hp-process-step"><div class="step-num">02</div><h4>Get Certified</h4><p>IMMUNE Standard — HDBI</p></div>
                            <div class="hp-process-step"><div class="step-num">03</div><h4>Screen People</h4><p>On-site health camp</p></div>
                            <div class="hp-process-step"><div class="step-num">04</div><h4>Get ABHA IDs</h4><p>Complimentary digital onboarding</p></div>
                            <div class="hp-process-step"><div class="step-num">05</div><h4>Future-Proof</h4><p>Living health records</p></div>
                        </div>
                    </div>

                    <!-- The People Problem -->
                    <div class="hp-pain-section">
                        <div class="hp-subtitle">The People Problem</div>
                        <h3 class="hp-main-title">Your building could be certified. Your people could still be <span style="color: var(--hp-red)">quietly unwell.</span></h3>
                        <p class="hp-desc">Annual blood tests tick a compliance box. They don't tell you why Priya is exhausted every afternoon, why the team's productivity dips after monsoon, or whether your office air is inflaming your best people.</p>
                        <div class="hp-pain-grid">
                            <div class="hp-pain-card"><h4>Surface-level testing</h4><p>CBC and lipid panels miss stress hormones, microbiome dysbiosis, and skin-environment interactions driving silent chronic conditions.</p></div>
                            <div class="hp-pain-card"><h4>No digital health record</h4><p>Results scatter across paper reports. No continuity, no ABHA ID — employees start from zero with every new doctor or company switch.</p></div>
                            <div class="hp-pain-card"><h4>Buildings certified, people forgotten</h4><p>LEED, WELL, IMMUNE — your facility scores stellar. Yet stress, burnout, and hormonal risk inside those walls stay invisible.</p></div>
                            <div class="hp-pain-card"><h4>Generic wellness programs</h4><p>Yoga sessions and step-count challenges don't address gut health, PCOS, or HPV risk — the real drivers of absenteeism.</p></div>
                        </div>
                    </div>

                    <!-- Solution Bridge -->
                    <div class="hp-subtitle">The Full Picture</div>
                    <h3 class="hp-main-title">A Truly IMMUNE Workspace = Healthy Building <span style="color: var(--hp-green)">+</span> Healthy People</h3>
                    <p class="hp-desc">Build Holistik certifies the environment. Azooka Labs certifies the biology of the people inside it. Together, for the first time, you get the complete picture.</p>
                    <div class="hp-dual-section">
                        <div class="hp-solution-card build">
                            <div class="hp-solution-header build"><h4>Your Building's Health Score</h4><p>Build Holistik</p></div>
                            <div class="hp-solution-body">
                                <div class="hp-solution-item"><span class="check">✓</span>Air quality monitoring & spreading zone remediation</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Water flow & Legionella risk testing</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Waste systems safety evaluation</div>
                                <div class="hp-solution-item"><span class="check">✓</span>STRONG / POWERFUL / RESILIENT certification tiers</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Globally recognised HDBI accreditation</div>
                            </div>
                        </div>
                        <div class="hp-solution-card people">
                            <div class="hp-solution-header people"><h4>Your People's Health Score</h4><p>Azooka Labs</p></div>
                            <div class="hp-solution-body">
                                <div class="hp-solution-item"><span class="check">✓</span>DNA-based stress & burnout susceptibility profiling</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Skin microbiome — how office air affects employees</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Women's hormonal health — PCOS, thyroid, cervical & HPV</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Gut health, oncology risk, and bone health indicators</div>
                                <div class="hp-solution-item"><span class="check">✓</span>Results in DigiLocker via ABHA</div>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works -->
                    <div class="hp-subtitle">The Process</div>
                    <h3 class="hp-main-title">From Swab to Transformation — in 5 Simple Steps</h3>
                    <div class="hp-steps-section">
                        <div class="hp-steps-grid">
                            <div class="hp-step-item">
                                <div class="hp-step-num">1</div>
                                <div class="hp-step-content">
                                    <h4>Building check — air, water & waste flow audit</h4>
                                    <p>Our team maps your building's three spreading zones: HVAC airflow patterns, water circuit risk points, and waste management gaps.</p>
                                </div>
                            </div>
                            <div class="hp-step-item">
                                <div class="hp-step-num">2</div>
                                <div class="hp-step-content">
                                    <h4>On-site people health camp</h4>
                                    <p>Azooka's team arrives at your workspace. Non-invasive sample collection — saliva, buccal swab, skin swab — takes under 10 minutes per employee.</p>
                                </div>
                            </div>
                            <div class="hp-step-item">
                                <div class="hp-step-num">3</div>
                                <div class="hp-step-content">
                                    <h4>Complimentary ABHA Digital Health ID</h4>
                                    <p>Every employee gets enrolled on India's Ayushman Bharat Health Account (ABHA) network as part of onboarding — <strong style="color: var(--hp-green)">Included at no extra cost.</strong></p>
                                </div>
                            </div>
                            <div class="hp-step-item">
                                <div class="hp-step-num">4</div>
                                <div class="hp-step-content">
                                    <h4>Lab processing — 2 weeks</h4>
                                    <p>Samples go through DNA sequencing and microbiome analysis. Your building's data feeds contextually into the human health report.</p>
                                </div>
                            </div>
                        </div>
                        <div class="hp-step-item" style="margin-top: 1rem;">
                            <div class="hp-step-num">5</div>
                            <div class="hp-step-content">
                                <h4>Personalised reports in DigiLocker — forever</h4>
                                <p>Each employee receives a private, portable health report in their DigiLocker — accessible anytime, shareable with any ABHA-network provider.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Health Packages -->
                    <div class="hp-subtitle">Health Packages</div>
                    <h3 class="hp-main-title">Four Layers of Insight. One Complete Workforce Health Score.</h3>
                    <div class="hp-packages-grid">
                        <div class="hp-package-card">
                            <div class="hp-package-header blue"><h5>Basic Health</h5><p>Package 01</p></div>
                            <div class="hp-package-body">
                                <div class="hp-package-item"><span class="check">✓</span>Heart Rate & Rhythm</div>
                                <div class="hp-package-item"><span class="check">✓</span>Blood Pressure (BP)</div>
                                <div class="hp-package-item"><span class="check">✓</span>Respiratory Rate</div>
                                <div class="hp-package-item"><span class="check">✓</span>BMI & Body Composition</div>
                            </div>
                        </div>
                        <div class="hp-package-card">
                            <div class="hp-package-header green"><h5>Stress Score</h5><p>Package 02</p></div>
                            <div class="hp-package-body">
                                <div class="hp-package-item"><span class="check">✓</span>Stress response markers</div>
                                <div class="hp-package-item"><span class="check">✓</span>Sleep & circadian rhythm</div>
                                <div class="hp-package-item"><span class="check">✓</span>Mood & cognitive performance</div>
                                <div class="hp-package-item"><span class="check">✓</span>Burnout susceptibility</div>
                            </div>
                        </div>
                        <div class="hp-package-card">
                            <div class="hp-package-header amber"><h5>Women's Health</h5><p>Package 03</p></div>
                            <div class="hp-package-body">
                                <div class="hp-package-item"><span class="check">✓</span>PCOS / PCOD risk markers</div>
                                <div class="hp-package-item"><span class="check">✓</span>Thyroid function</div>
                                <div class="hp-package-item"><span class="check">✓</span>Cervical & HPV indicators</div>
                                <div class="hp-package-item"><span class="check">✓</span>Oncology & Bone health</div>
                            </div>
                        </div>
                        <div class="hp-package-card">
                            <div class="hp-package-header orange"><h5>Skin Health</h5><p>Package 04</p></div>
                            <div class="hp-package-body">
                                <div class="hp-package-item"><span class="check">✓</span>Skin microbiome diversity</div>
                                <div class="hp-package-item"><span class="check">✓</span>Inflammation & sensitivity</div>
                                <div class="hp-package-item"><span class="check">✓</span>Pollution / environment impact</div>
                                <div class="hp-package-item"><span class="check">✓</span>Hydration & barrier health</div>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center; font-size: 0.8rem; color: #888; margin-bottom: 2rem;">Samples collected: Saliva / buccal swab · Gut · Cervical · Skin swab (non-invasive, on-site)</p>

                    <!-- Digital Health India -->
                    <div class="hp-abha-section">
                        <h3>📋 Complimentary Digital Health Onboarding</h3>
                        <p>India's Ayushman Bharat Digital Mission (ABDM) is live. Hospitals are already onboarded. Health records are going paperless. Yet most corporate employees have zero digital health presence — scattered paper reports that disappear with every job change.</p>
                        <p style="margin-top: 1rem;">Every employee who participates in our wellness camp gets a complimentary ABHA Health ID — a single, portable health identity that stores all their test results in DigiLocker and follows them for life.</p>
                        <div class="hp-features-row">
                            <div class="hp-feature-card"><h5>🔒 Secure</h5><p>Records in DigiLocker, Ministry of Health</p></div>
                            <div class="hp-feature-card"><h5>📤 Portable</h5><p>Share with any doctor instantly</p></div>
                            <div class="hp-feature-card"><h5>📈 Continuous</h5><p>Longitudinal tracking across years</p></div>
                            <div class="hp-feature-card"><h5>🇮🇳 National</h5><p>Part of India's health ecosystem</p></div>
                        </div>
                    </div>

                    <!-- Pun Section -->
                    <div class="hp-pun-section">
                        <div style="font-size: 2rem; margin-bottom: 0.75rem;">😅</div>
                        <h3>Your Digital Health ID is as basic as your Aadhaar. Go paperless on your medical records — <em>today.</em></h3>
                        <p>You file your taxes digitally. You book your flights digitally. You even order your chai digitally. But your health report from 2022? Still in a folder somewhere. Maybe. Time to fix that.</p>
                    </div>

                    <!-- Trust -->
                    <div class="hp-trust-bar">
                        <div class="hp-trust-item"><strong>850+</strong><span>Globally accredited buildings</span></div>
                        <div class="hp-trust-item"><strong>950+</strong><span>Certified spaces worldwide</span></div>
                        <div class="hp-trust-item"><strong>18k+</strong><span>Tonnes of reduced carbon</span></div>
                        <div class="hp-trust-item"><strong>DNA-based</strong><span>Testing beyond routine</span></div>
                        <div class="hp-trust-item"><strong>ABDM-linked</strong><span>India's national grid</span></div>
                    </div>

                    <!-- Testimonials -->
                    <div class="hp-subtitle">What Our Clients Say</div>
                    <div class="hp-testimonial-card" style="margin-bottom: 1rem;">
                        <p>"We knew our office met global air quality standards. What we didn't know was that 40% of our women employees had undetected thyroid imbalances driving their fatigue. Azooka changed that conversation entirely."</p>
                        <div class="hp-testimonial-author">— HR Director, Tech MNC, Bengaluru</div>
                    </div>
                    <div class="hp-testimonial-card" style="border-left-color: var(--hp-blue);">
                        <p>"The IMMUNE certification told us our building was healthy. The Azooka microbiome data told us the building environment was affecting employees' skin barrier health. Now we act on both."</p>
                        <div class="hp-testimonial-author" style="color: var(--hp-blue);">— Facilities Head, Financial Services Firm, Mumbai</div>
                    </div>

                    <!-- Emotional CTA -->
                    <div class="hp-emotional-cta">
                        <div style="font-size: 2.5rem; margin-bottom: 1rem;">🧬</div>
                        <h3>The world's best buildings are only as healthy as the people inside them.</h3>
                        <p>Priya, who sits two desks from the air purifier, could still be carrying undiagnosed PCOS. Rahul, who hits the gym thrice a week, could have a gut microbiome in crisis. Your building can't tell you that. We can.</p>
                    </div>

                    <!-- Lead Form -->
                    <div class="hp-lead-form">
                        <div style="background: rgba(255,255,255,0.1); color: white; padding: 8px 20px; border-radius: 20px; display: inline-block; font-size: 0.8rem; margin-bottom: 1rem;">Get Started</div>
                        <h3>Ready to make your workspace truly well — inside and out?</h3>
                        <p>Fill in below — our team will reach out within 24 hours to plan your first building assessment and people health camp.</p>
                        
                        <div class="hp-form-wrap">
                            <div id="hp-form-success" class="hp-form-success" style="display: none;">
                                ✅ Submitted Successfully! We will reach out within 24 hours.
                            </div>
                            <h4 class="hp-form-title">Request a Free Pilot Assessment</h4>
                            <form id="health-partnership-form">
                                <div class="hp-form-row">
                                    <div class="hp-form-field">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" required placeholder="Anjali">
                                    </div>
                                    <div class="hp-form-field">
                                        <label>Last Name *</label>
                                        <input type="text" name="last_name" required placeholder="Sharma">
                                    </div>
                                </div>
                                <div class="hp-form-field">
                                    <label>Work Email *</label>
                                    <input type="email" name="email" required placeholder="anjali@company.com">
                                </div>
                                <div class="hp-form-row">
                                    <div class="hp-form-field">
                                        <label>Company *</label>
                                        <input type="text" name="company" required placeholder="Acme Corp">
                                    </div>
                                    <div class="hp-form-field">
                                        <label>Team Size *</label>
                                        <select name="team_size" required>
                                            <option value="">Select...</option>
                                            <option>50–150 employees</option>
                                            <option>150–500 employees</option>
                                            <option>500–1000 employees</option>
                                            <option>1000+ employees</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hp-form-field">
                                    <label>What are you most interested in? *</label>
                                    <select name="interest" required>
                                        <option value="">Select...</option>
                                        <option>Building Infection-Proof Check (Air · Water · Waste)</option>
                                        <option>IMMUNE Building Certification</option>
                                        <option>Employee Health Screening (Azooka Labs)</option>
                                        <option>Full Partnership Package (Building + People)</option>
                                        <option>ABHA Digital Health Onboarding</option>
                                    </select>
                                </div>
                                <div class="hp-form-field">
                                    <label>Anything specific you'd like us to know?</label>
                                    <textarea name="message" placeholder="E.g. we already have IMMUNE certification and want to add the people health layer + ABHA onboarding..."></textarea>
                                </div>
                                <button type="submit" class="hp-form-submit">Get My Free Pilot Assessment →</button>
                                <p class="hp-form-privacy">Your data is private and used only to contact you. Aligned with DPDP Act 2023.</p>
                            </form>
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
    $(document).ready(function() {
        // Main tab switching
        $('.hp-main-tab').on('click', function() {
            var mainTab = $(this).data('main');
            $('.hp-main-tab').removeClass('active');
            $(this).addClass('active');
            $('#content-certification, #content-health').removeClass('active');
            $('#content-' + mainTab).addClass('active');
            if (mainTab === 'certification') {
                $('#certification-subs').show();
            } else {
                $('#certification-subs').hide();
            }
        });
        
        // Sub-tab switching for Certification
        $('.hp-sub-tab').on('click', function() {
            var subTab = $(this).data('sub');
            $('.hp-sub-tab').removeClass('active');
            $(this).addClass('active');
            $('#content-immune, #content-esg').removeClass('active');
            $('#content-' + subTab).addClass('active');
        });
        
        // Form submission
        $('#health-partnership-form').on('submit', function(e) {
            e.preventDefault();
            
            var formData = $(this).serialize();
            
            $.ajax({
                url: '{{ route("web.contactus.store") }}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#hp-form-success').fadeIn();
                    $('#health-partnership-form')[0].reset();
                    setTimeout(function() {
                        $('#hp-form-success').fadeOut();
                    }, 5000);
                },
                error: function(xhr) {
                    alert('Something went wrong. Please try again.');
                }
            });
        });
    });
</script>
@endpush