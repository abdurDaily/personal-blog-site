@extends('backend.layout')
@section('backend_contains')
    @push('backend_css')
        <link rel="stylesheet" href="{{ asset('assets/css/richEditor/rte_theme_default.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .select2-selection--multiple {
                padding: 20px !important;
                padding-bottom: 28px !important;
                border: none !important;
            }

            #blog .select2-selection__clear {
                width: 30px;
                height: 30px;
                display: inline-block;
                text-align: center;
                line-height: 30px;
                font-size: 18px;
                background: red;
                color: #fff;
                position: absolute;
                right: 15px;
            }
        </style>
    @endpush

    <div class="container">

        <div class="d-flex justify-content-between mb-3 align-items-center">
            <h4>Create a Blog</h4>
            <a href="{{ route('backend.blog.list') }}" class="btn btn-primary">All Blogs</a>
        </div>

        <form id="blog" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="title">Title <b class="text-danger">*</b> </label>
                    <input value="{{ $blog->blog_title }}" type="text" name="blog_title" placeholder="Title"
                        class="form-control p-4 mb-2">
                    @error('blog_title')
                        <b class="text-danger">{{ $message }}</b> <br>
                    @enderror
                </div>


                <div class="col-12 ">
                    <div class="row align-items-center d-flex">
                        <div class="col-xl-5">
                            <label for="blog_preview_image">Preview image <b class="text-danger">*</b> </label>
                            <input name="blog_preview_image" type="file" class="form-control p-4"
                                id="blog_preview_image">
                            @error('blog_preview_image')
                                <b class="text-danger">{{ $message }}</b> <br>
                            @enderror
                        </div>
                        <div class="col-xl-2 text-center mt-2">
                            <img class="img-fluid" id="imagePreview"
                                src="{{ $blog->blog_preview_image ? $blog->blog_preview_image : asset('assets/images/placeholder.jpg') }}"
                                alt="Image Preview">
                        </div>
                        <div class="col-xl-5">
                            <label for="">Select Category <b class="text-danger">*</b></label>
                            {{-- <select name="blog_category" id="" class="form-control p-4 mb-2 text-center">
                            <option value="" selected disabled>----Select Category----</option>
                            <option value="1">Web Development</option>
                        </select> --}}

                            <select class="js-example-basic-multiple form-control p-4 mb-2 text-center"
                                name="blog_category[]" multiple="multiple" id="blog-category-select">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($selectedCategories->contains('id', $category->id)) selected @endif>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>



                            @error('blog_category')
                                <b class="text-danger">{{ $message }}</b> <br>
                            @enderror
                        </div>
                    </div>

                </div>


                <div class="col-12">
                    <label for="blog_details">Blog Details <b class="text-danger">*</b></label>
                    <textarea name="blog_details" id="richEditor">
                    {{ $blog->blog_details }}
                </textarea>
                    @error('blog_details')
                        <b class="text-danger">{{ $message }}</b> <br>
                    @enderror
                </div>


            </div>

            <button type="submit" class="btn btn-primary w-100 p-3 mt-3">Submit</button>
        </form>
    </div>




    @push('backend_js')
        <script src="{{ asset('assets/js/richEditor/rte.js') }}"></script>
        <script src="{{ asset('assets/js/richEditor/all_plugins.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
        <script>
            var editor1 = new RichTextEditor("#richEditor");


            // IMAGE PREVIEW 
            $(document).ready(function() {
                $('#blog_preview_image').on('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const imageUrl = URL.createObjectURL(file);
                        $('#imagePreview').attr('src', imageUrl).show();
                    } else {
                        $('#imagePreview').hide();
                    }
                });

                $('.js-example-basic-multiple').select2();
                $('#blog-category-select').select2({
                    placeholder: "Select a categories",
                    allowClear: true
                });




                // UPDATE CODE 
                $('#blog').on('submit', function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('backend.blog.update', $blog->blog_slug) }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Swal.fire({
                                title: "Success!",
                                text: "successfully updated!",
                                icon: "success",
                                timer: 2000
                            });
                            window.location.href = `{{ route('backend.blog.list') }}`;
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                })

            });
        </script>
    @endpush
@endsection
