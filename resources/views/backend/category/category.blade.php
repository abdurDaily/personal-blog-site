@extends('backend.layout')
@section('backend_contains')

@push('backend_css')
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
<style>
    #category .select2-container--default .select2-selection--single {

        height: 55px;
        display: flex;
        align-items: center;
        padding-left: 10px;
        border: 1px solid #dee2e6;
    }

    #category .select2-container--default .select2-selection--single .select2-selection__arrow {
        /* background: red; */
        width: 30px;
        height: 30px;
        text-align: center;
        color: #fff;
        position: absolute;
        line-height: 30px;
        top: 53%;
        right: 2%;
        transform: translateY(-50%);
        border: 1px solid #dee2e6;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #dee2e6 !important;
        padding: 14px !important;
    }
</style>
@endpush

<section id="category" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Category</h4>
                    </div>

                    <div class="card-body">
                        <form id="categoryForm" action="{{ route('backend.category.store') }}" method="post">
                            @csrf
                            <label for="category_name">category name <strong class="text-danger">*</strong> </label>
                            <input name="category_name" type="text" class="form-control p-3 mb-2"
                                placeholder="category name">
                            <b class="category_title_success text-success"></b>
                            <b class="category_title_err text-danger"></b> <br>


                            <label for="category_select">Select Parent Category </label>
                            <select class="js-example-basic-single form-control " name="state" id="category-select">
                                <option value="" selected disabled>Select Parent Category</option>
                                @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            
                            <button class="btn btn-primary w-100 p-3 mt-3">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('backend_js')

<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    $('#category-select').select2({
            placeholder: "Select a categories",
    });


    $('#categoryForm').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: "{{ route('backend.category.store') }}",
        data: $(this).serialize(),
        success: function(response) {
            
            // Create a new option as an HTML string
            var newOptionHtml = '<option value="' + response.new_category.id + '">' + response.new_category.category_name + '</option>';
            
            // Append the new option HTML to the dropdown
            $('#category-select').append(newOptionHtml).trigger('change');

            // Clear the input field for the next entry
            $('input[name="category_name"]').val('');

            Swal.fire({
                title: response.success,
                icon: "success",
                draggable: true,
                timer:1500
            });


        },
        error: function(xhr) {

            Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: xhr.responseJSON.message,
                    timer: 2000
                    });


        }
    });
});


});
</script>
@endpush
@endsection