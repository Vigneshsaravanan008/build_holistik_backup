@section("meta-title")
<title>{{env("APP_NAME")}} | Dashboard</title>
@endsection
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-newspaper"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Press Release</span>
                            <span class="info-box-number">
                                {{$press_release}} 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-4">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hashtag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Media Coverage</span>
                            <span class="info-box-number">{{$media_coverage}}</span>
                        </div>
                    </div>
                </div>

                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">IMMUNE™ Scoring</span>
                            <span class="info-box-number">{{$immune}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Contact Us</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contact_us as $key => $contact)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->phone_number}}</td>
                                                <td>{{$contact->message}}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td cospan="5" class="text-center">No Contact Us</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="{{route("admin.contactus")}}" class="btn btn-sm btn-secondary float-right">View All
                                ContactUs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
