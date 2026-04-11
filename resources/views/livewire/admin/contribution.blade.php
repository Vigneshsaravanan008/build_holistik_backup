@section("meta-title")
<title>{{env("APP_NAME")}} | Contribution</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Contribution</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Contribution</li>
                        </ol> 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right mb-3">
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Country</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Website</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contributions as $key => $contribution)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$contribution->country}}</td>
                                                <td>{{$contribution->name}}</td>
                                                <td><img src="{{asset($contribution->image)}}" alt="" width="100px" height="100px"/></td>
                                                <td>{{$contribution->website}}</td>
                                                <td>
                                                    <label class="switch_box">
                                                        <input type="checkbox" class="checkbox" data-id="{{$contribution->id}}" {{($contribution->status==1)?"checked":""}}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editContribution({{ $contribution->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $contribution->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No Contributions</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $contributions->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div wire:ignore.self class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="addContribution" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Country">Country</label>
                                    <input type="text"
                                        class="form-control @error('country') is-invalid @enderror"
                                        wire:model="country" id="country" placeholder="Enter Country">
                                    @error('country')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Image">Image</label>
                                    <input type="file"
                                        class="form-control @error('image') is-invalid @enderror"
                                        wire:model="image" id="image">
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Website</label>
                                    <input type="text"
                                        class="form-control @error('website') is-invalid @enderror"
                                        wire:model="website" id="website" placeholder="Enter Website">
                                    @error('website')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3" wire:model="description"
                                    placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addContribution" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="edit_modal_form" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="updateContribution">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Country">Country</label>
                                    <input type="text"
                                        class="form-control @error('country') is-invalid @enderror"
                                        wire:model="country" id="country" placeholder="Enter Country">
                                    @error('country')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Image">Image
                                        @if ($image_url != null)
                                            <a href="{{ $image_url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <input type="file"
                                        class="form-control @error('image') is-invalid @enderror"
                                        wire:model="image" id="image">
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Website</label>
                                    <input type="text"
                                        class="form-control @error('website') is-invalid @enderror"
                                        wire:model="website" id="website" placeholder="Enter Website">
                                    @error('website')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="3" wire:model="description"
                                        placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="updateContribution" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('dismissmodal', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            if(data.parameter == 200)
            {
                setTimeout(() => {
                    location.reload();
                }, 1500);
            }
        });

        Livewire.on('delete', function(data) {
            if (data.parameter == "200") {
                Swal.fire({
                    title: "Deleted!",
                    text: "Contribution has been deleted.",
                    icon: "success"
                });
            } else {
                toastr.error(data.message);
            }
        });
        Livewire.on('message', function(data) {
            if (data.parameter == 200) {
                $("#edit_modal_form").modal('show');
            } else {
                toastr.error(data.message);
            }
        });

        $(".delete").on('click', function(e) {
            var value = $(this).data('value');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteContribution(value);
                }
            });
        })

        $(document).ready(function(){
            $(".checkbox").on('click',function(){
                var value=$(this).data('id');
                @this.statusContribution(value);
            })
        });
    </script>
@endpush