@extends('backend.layout')

@section('backend_contains')
    @push('backend_css')
        <style>
            #pagination {
                padding: 5px;

            }

            #pagination a {
                outline: 1px solid #777;
                border: none;
                margin: 0 5px;
                text-decoration: none;
                color: #000;
            }

            #pagination .active {
                outline: 1px solid #3c2fed;
                color: #000;
                text-decoration: none;
            }
        </style>
    @endpush

    <section id="blogs">
        <div class="container table-responsive">

            <div class="d-flex justify-content-between mb-3 align-items-center">

                <a href="{{ route('backend.blog.store') }}" class="btn btn-primary">Create a Blog</a>
            </div>

            <table class="table table-hover  table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Title</th>
                        <th style="text-align: center;">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($blogs as $key => $blog)
                        <tr class="">
                            <td valign="middle" align="center">{{ ++$key }}</td>
                            <td valign="middle" width="30%">{{ Str::limit($blog->blog_title, 50, '...') }}</td>
                            <td valign="middle" align="center">
                                <img style="width:80px; height:80px; object-fit:cover; border-radius:50%;"
                                    src="{{ $blog->blog_preview_image ? $blog->blog_preview_image : asset('assets/images/placeholder.jpg') }}"
                                    alt="">
                            </td>
                            <td valign="middle" class="text-center">
                                <a href="#" class="blog_status" data-find="{{ $blog->id }}"
                                    data-status="{{ $blog->status }}">
                                    <span>
                                        @if ($blog->status == 1)
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
                            <td valign="middle" class="text-center">
                                <a style="width:50%; display:inline-block;"
                                    href="{{ route('backend.blog.edit', $blog->blog_slug) }}">
                                    <span>
                                        <iconify-icon icon="flowbite:edit-outline" width="24"
                                            height="24"></iconify-icon>
                                    </span>
                                </a>
                                <a href="#" class="delete_blog" data-id="{{ $blog->id }}">
                                    <span class="text-danger">
                                        <iconify-icon icon="material-symbols:delete-outline-sharp" width="24"
                                            height="24">
                                        </iconify-icon>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @empty

                        <tr>
                            <td class="text-danger text-center py-5 " colspan="5">No data found!</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
            <!-- Pagination Links -->
            <div id="pagination" class="d-flex justify-content-center">
                <!-- Pagination links will be generated here -->
            </div>
        </div>
    </section>

    @push('backend_js')
        <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@3.1.1/dist/iconify.min.js"></script>
        <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>


        <script>
            $(document).ready(function() {
                const totalPages = {{ $blogs->lastPage() }}; // Total number of pages
                const currentPage = {{ $blogs->currentPage() }}; // Current page
                const paginationContainer = $('#pagination');

                function renderPagination() {
                    paginationContainer.empty(); // Clear existing pagination

                    // Previous button
                    if (currentPage > 1) {
                        paginationContainer.append(
                            `<a href="?page=${currentPage - 1}" class="btn btn-link">Previous</a>`);
                    }

                    // Page numbers
                    for (let i = 1; i <= totalPages; i++) {
                        if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                            if (i === currentPage) {
                                paginationContainer.append(`<span class="btn btn-link active">${i}</span>`);
                            } else {
                                paginationContainer.append(`<a href="?page=${i}" class="btn btn-link">${i}</a>`);
                            }
                        } else if (i === currentPage - 2 || i === currentPage + 2) {
                            paginationContainer.append(`<span class="btn btn-link">...</span>`);
                        }
                    }

                    // Next button
                    if (currentPage < totalPages) {
                        paginationContainer.append(`<a href="?page=${currentPage + 1}" class="btn btn-link">Next</a>`);
                    }
                }

                renderPagination(); // Initial render



                // STATUS 
                $('.blog_status').on('click', function(e) {
                    e.preventDefault();

                    let statusFind = $(this).attr('data-find');
                    let $this = $(this);

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('backend.blog.status') }}',
                        data: {
                            statusFind: statusFind,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            if (data.data.status == 1) {
                                Swal.fire({
                                    title: "Success!",
                                    text: "activated this blog!",
                                    icon: "success",
                                    timer: 2000
                                });
                                $this.html(`<span class="text-success">
                                                <iconify-icon icon="nrk:check-active" width="24"
                                                    height="24"></iconify-icon>
                                            </span>`);

                            } else {
                                $this.html(`<span class="text-danger">
                                                <iconify-icon icon="nrk:close-active" width="24"
                                                    height="24"></iconify-icon>
                                            </span>`)
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Something went wrong!",
                                    timer: 2000
                                });

                            }

                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });
                });



                //******************** DELETE ***************//

                $('.delete_blog').on('click', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('data-id');
                    Swal.fire({
                        title: "Are you sure?",
                        text: "this data will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'get',
                                url: `{{ route('backend.blog.delete', '') }}/${id}`,
                                data: {
                                    id: id,
                                },
                                success: function(res) {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    }).then(() => {
                                        location.reload();
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.log(xhr.responseText);
                                    Swal.fire({
                                        title: "Error!",
                                        text: "There was an error deleting the file.",
                                        icon: "error"
                                    });
                                }
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
