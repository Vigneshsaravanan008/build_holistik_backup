@section("meta-title")
<title>{{env("APP_NAME")}} | Immune Scoring Systems</title>
@endsection
<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Immune Scoring Systems</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Immune Scoring Systems</li>
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
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($buildings as $key => $building)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{$building->title}}</td>
                                                <td>
                                                    <label class="switch_box">
                                                        <input type="checkbox" class="checkbox" data-id="{{$building->id}}" {{($building->status==1)?"checked":""}}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editBuilding({{ $building->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $building->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Immune Scoring Systems</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $buildings->links() }}</li>
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
                    <h4 class="modal-title">{{ $heading }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="addBuilding" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        wire:model="slug" id="slug" placeholder="Enter Slug">
                                    @error('slug')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" wire:ignore>
                                    <label for="Description">Description</label>
                                    <textarea class="form-control summernote @error('description_content') is-invalid @enderror" rows="3" wire:model="description_content"
                                        placeholder="Enter Description"></textarea>
                                    @error('description_content')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Document</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('document') is-invalid @enderror"
                                                wire:model="document" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('document')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Blog Category">is Form</label>
                                    <select class="form-control @error('is_form') is-invalid @enderror" wire:model="is_form">
                                        <option value="">Select Type</option>
                                        <option value="1">With Form</option>
                                        <option value="0">Without Form</option>
                                    </select>
                                    @error('is_form')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="text"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="meta_title" placeholder="Enter Meta Title">
                                    @error('meta_title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Keyword">Meta Keyword</label>
                                    <textarea class="form-control @error('meta_keyword') is-invalid @enderror" rows="3" wire:model="meta_keyword"
                                        placeholder="Enter Meta Keyword"></textarea>
                                    @error('meta_keyword')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Description">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3"
                                        wire:model="meta_description" placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addBuilding" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="edit_modal_form" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $heading }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="updateBuilding">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        wire:model="title" id="title" placeholder="Enter Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input type="text"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        wire:model="slug" id="slug" placeholder="Enter Slug">
                                    @error('slug')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" wire:ignore>
                                    <label for="Description">Description</label>
                                    <textarea class="form-control summernote_text @error('description') is-invalid @enderror" rows="3" wire:model="description"
                                        placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image
                                        @if ($image_url != null)
                                            <a href="{{ $image_url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Document
                                        @if ($document_path != null)
                                            <a href="{{ $document_path }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('document') is-invalid @enderror"
                                                wire:model="document" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('document')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Blog Category">is Form</label>
                                    <select class="form-control @error('is_form') is-invalid @enderror" wire:model="is_form">
                                        <option value="">Select Type</option>
                                        <option value="1">With Form</option>
                                        <option value="0">Without Form</option>
                                    </select>
                                    @error('is_form')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Meta Title">Meta Title</label>
                                    <input type="text"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        wire:model="meta_title" id="meta_title" placeholder="Enter Meta Title">
                                    @error('meta_title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Keyword">Meta Keyword</label>
                                    <textarea class="form-control @error('meta_keyword') is-invalid @enderror" rows="3" wire:model="meta_keyword"
                                        placeholder="Enter Meta Keyword"></textarea>
                                    @error('meta_keyword')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Meta Description">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror" rows="3"
                                        wire:model="meta_description" placeholder="Enter Meta Description"></textarea>
                                    @error('meta_description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="updateBuilding" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
          Livewire.on('calljs', function(data) {
            setTimeout(() => {
                $(".select2").select2();
                $('.summernote').summernote('focus');
            }, 1000);
        });

         Livewire.on('dismissmodal', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
               (data.parameter == 200)&& location.reload();
            }, 1500);
        });

        Livewire.on('delete', function(data) {
            if (data.parameter == "200") {
                Swal.fire({
                    title: "Deleted!",
                    text: "Building has been deleted.",
                    icon: "success"
                });
            } else {
                toastr.error(data.message);
            }
        });
        Livewire.on('message', function(data) {
            if (data.parameter == 200) {
                $("#edit_modal_form").modal('show');
                $(".summernote_text").summernote("code",data.description);
                setTimeout(() => {
                    $(".select2").select2();
                }, 1000);
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
                    @this.deleteBuilding(value);
                }
            });
        })

        $('.summernote,.summernote_text').summernote({
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.setContent(contents);
                }
            }
        });

        $(document).ready(function(){
            $(".checkbox").on('click',function(){
                var value=$(this).data('id');
                @this.statusBuilding(value);
            })
        });
    </script>
@endpush