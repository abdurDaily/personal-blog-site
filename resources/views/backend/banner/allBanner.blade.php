@extends('backend.layout')
@section('backend_contains')
    <section>
        <div class="container">
            <div class="d-flex justify-content-between mb-3 align-items-center">

                <a href="{{ route('backend.banner.index') }}" class="btn btn-primary">Create a Banner</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped text-center">
                    <tr>
                        <th>Sn.</th>
                        <th>Title</th>
                        <th>Expertise</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($banners as $key => $banner)
                        <tr>
                            <td valign="middle">{{ ++$key }}</td>
                            <td valign="middle">{{ $banner->title }}</td>
                            <td valign="middle">{{ $banner->expertise }}</td>
                            <td valign="middle">{!! $banner->description !!}</td>
                            <td valign="middle">
                                <a class="text-success banner_status" href="#" data-status="{{ $banner->id }}">
                                    <span>
                                        @if ($banner->status == 1)
                                            <span class="text-success">
                                                <iconify-icon icon="nrk:check-active" width="24"
                                                    height="24"></iconify-icon>
                                            </span>
                                        @else
                                            <span class="text-danger">
                                                <iconify-icon icon="nrk:close-active" width="24"
                                                    height="24"></iconify-icon>
                                            </span>
                                        @endif
                                    </span>
                                </a>
                            </td>
                            <td>
                                <img src="{{ $banner->image ? $banner->image : asset('assets/images/placeholder.jpg') }}"
                                    style="height:80px;" class="img-fluid" alt="">
                            </td>
                            <td valign="middle" class="text-center">
                                <a style="width:50%; display:inline-block;" href="">
                                    <span>
                                        <iconify-icon icon="flowbite:edit-outline" width="24"
                                            height="24"></iconify-icon>
                                    </span>
                                </a>
                                <a href="#" class="delete_blog" data-id="">
                                    <span class="text-danger ">
                                        <iconify-icon icon="material-symbols:delete-outline-sharp" width="24"
                                            height="24">
                                        </iconify-icon>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center p-4 text-danger">
                                <span>no data found</span>
                            </td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </section>

    @push('backend_js')
        <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
        <script>
            $('.banner_status').on('click', function(e) {
                e.preventDefault();
                let status = $(this).attr('data-status'); // Get the status from the clicked element

                // console.log("Status:", status); // Debugging: Log the status to the console

                $.ajax({
                    type: 'POST',
                    url: '{{ route('backend.banner.status') }}',
                    data: {
                        id: status,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        if (res.data.status) {
                            // Update the icon for the clicked element
                            $(e.target).closest('.banner_status').html(`<span class="text-success">
                    <iconify-icon icon="nrk:check-active" width="24" height="24"></iconify-icon>
                </span>`);
                        } else {
                            $(e.target).closest('.banner_status').html(`<span class="text-danger">
                    <iconify-icon icon="nrk:close-active" width="24" height="24"></iconify-icon>
                </span>`);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error); // Log any AJAX errors
                    }
                });
            });
        </script>
    @endpush
@endsection
