@extends('backend.layout')
@section('backend_contains')
    @push('backend_css')
        <link rel="stylesheet" href="{{ asset('assets/css/richEditor/rte_theme_default.css') }}">
    @endpush


    <section id="banner">
        <div class="container">
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <span></span>
                <a href="{{ route('backend.banner.all') }}" class="btn btn-primary">All Banner</a>
            </div>
           <form action="{{ route('backend.banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label for="expertise">Expertise</label>
                        <input type="text" id="expertise" placeholder="expertise" class="form-control p-4 mt-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="title">Title</label>
                        <input type="text" id="title" placeholder="title" class="form-control p-4 mt-2">
                    </div>
                </div>
                <textarea name="description" id="blog"></textarea>
            
                <div class="row my-2">

                    <div class="col-lg-8">
                        <label for="image" class="w-100">
                            <input id="image" accept=".png,.jpg,.jpeg" type="file"  name="image" class="form-control p-4">
                        </label>
                        <button type="submit" class="btn btn-primary w-100 py-3 mt-3">submit</button>
                    </div>

                    <div class="col-lg-4">
                        <img id="preview_img" class="img-fluid d-block w-100 pt-3 pt-lg-0" src="{{ asset('assets/images/placeholder.jpg') }}" alt="">
                    </div>

                </div>
           </form>
        </div>
    </section>



    @push('backend_js')
        <script src="{{ asset('assets/js/richEditor/rte.js') }}"></script>
        <script src="{{ asset('assets/js/richEditor/all_plugins.js') }}"></script>
        <script>
           

            $(function(){
                var editor1 = new RichTextEditor("#blog");

                $('#image').on('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const imageUrl = URL.createObjectURL(file);
                        $('#preview_img').attr('src', imageUrl).show();
                    } else {
                        $('#preview_img').hide();
                    }
                });
            })

        </script>
    @endpush
@endsection
