@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
<div>
    <div class="breadcumb-wrapper " data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Associate Partners</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Associate Partners</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top">
        <div class="container">
            <div class="row gx-30 mt-4">
                <div class="col-xxl-12 col-sm-12 col-lg-12">
                    <p class="mb-3 text-theme">The IMMUNE Building Standard™’s Trademark Guidelines have been created to help our customers, partners, and other third parties understand how to use the IMMUNE™ brand features correctly, including our logos and trademarks for all projects and in all places worldwide.</p>
                    <p class="text-theme">   You are permitted to use the IMMUNE™'s name, logos, artwork, and other brand features only in accordance with our Guidelines and Style Guide. Any use of IMMUNE™'s brand features contrary to our guidelines is prohibited.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <h3 class="text-center mb-4">Our Associate Partners</h3>
            <style>
                .partner-card {
                    background: #fff;
                    border-radius: 24px;
                    padding: 1.5rem;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                }
                .partner-thumb {
                    width: 100%;
                    height: 200px;
                    background: #fff;
                    border-radius: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                    flex-shrink: 0;
                }
                .partner-thumb img {
                    max-width: 80%;
                    max-height: 80%;
                    object-fit: contain;
                }
                .partner-info {
                    text-align: center;
                    padding-top: 1rem;
                    flex-grow: 1;
                }
                .partner-info h4 {
                    color: #1C2D37;
                    font-size: 1.1rem;
                    font-weight: 600;
                    margin-bottom: 0.5rem;
                }
                .partner-info a {
                    color: #6E7070;
                    font-size: 0.9rem;
                }
                .partner-info a:hover {
                    color: #1C2D37;
                }
            </style>
            <div class="row gy-30 mt-3">
                <h4 class="page-title">Healthy Building Partners</h4>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-thumb">
                            <img src="{{asset("uploads/companyimage/genesis.jpg")}}" alt="Genesis Property">
                        </div>
                        <div class="partner-info">
                            <h4>Genesis Property</h4>
                            <a href="https://genesisproperty.net" target="_blank">genesisproperty.net</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-30 mt-3">
                <h4 class="page-title">Healthy People Partners</h4>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-thumb">
                            <img src="{{asset("uploads/companyimage/azooka.webp")}}" alt="Azooka">
                        </div>
                        <div class="partner-info">
                            <h4>Azooka Labs</h4>
                            <a href="https://azooka.life/" target="_blank">azooka.life</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-thumb">
                            <img src="{{asset("uploads/companyimage/bugspeaks-logo.jpg")}}" alt="BugSpeaks">
                        </div>
                        <div class="partner-info">
                            <h4>BugSpeaks</h4>
                            <a href="https://bugspeaks.com/" target="_blank">bugspeaks.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
