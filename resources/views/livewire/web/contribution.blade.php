@section("meta_details")
    @include("web.seo.custom",['common'=>@$page])
@endsection
<div>
    <div class="breadcumb-wrapper" data-bg-src="{{asset("assets/img/bg_image.jpg")}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contributors</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{url("/")}}">Home</a></li>
                            <li>Contributors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-12 col-sm-12 col-lg-12">
                    <p class="mb-30 text-theme text-center">Join the global movement to create healthier, safer buildings. As an IMMUNE Contributor, you can leverage your expertise to design, assess, and certify buildings that meet the highest standards of health resilience. Contact us to learn more about how you can become a part of this transformative initiative.</p>
                </div>
            </div>
            <div class="row gy-30 mt-4">
                @foreach($contributions as $contribution)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="{{asset($contribution->image)}}" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">{{$contribution->name}}</h3>
                                <h4 class="product-title"><a href="javascript:void(0)">{{$contribution->country}}</a></h4>
                                <span class="price">{{$contribution->description}}</span>
                                <p class="product-title text-dark"><a href="{{$contribution->website}}" target="_blank">{{$contribution->website}}</a></p>
                                {{-- <div class="woocommerce-product-rating">
                                    <span class="count">(120 Reviews)</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
