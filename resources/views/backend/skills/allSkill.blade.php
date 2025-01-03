@extends('backend.layout')
@section('backend_contains')
    <section id="record">
        <div class="container ">
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <span></span>
                <a href="{{ route('backend.skill.store') }}" class="btn btn-primary">Add Skill </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <tr>
                        <td>Sn.</td>
                        <td>year</td>
                        <td>institute</td>
                        <td>skill range</td>
                        <td>title</td>
                        <td>type</td>
                        <td>details</td>
                        <td>action</td>
                    </tr>
    
                    @php
                        $startIndex = ($skills->currentPage() - 1) * $skills->perPage();
                    @endphp
    
                    @forelse ($skills as $key => $skill)
                        <tr>
                            <td>{{ $startIndex + $key + 1 }}</td>
                            <td>{{ $skill->year }}</td>
                            <td>{{ $skill->institute }}</td>
                            <td>{{ $skill->skill_range }}</td>
                            <td>{{ Str::limit($skill->title,50, '...') }}</td>
                            <td>{{ $skill->type }}</td>
                            <td>{{ Str::limit($skill->description, 100, '...') }}</td>
                            <td valign="middle" class="text-center">
                                <a style="width:50%; display:inline-block;" href="{{ route('backend.skill.edit', $skill->id) }}">
                                    <span>
                                        <iconify-icon icon="flowbite:edit-outline" width="24" height="24"></iconify-icon>
                                    </span>
                                </a>
                                <a href="{{ route('backend.skill.delete', $skill->id) }}" class="delete_blog" data-id="">
                                    <span class="text-danger">
                                        <iconify-icon icon="material-symbols:delete-outline-sharp" width="24"
                                            height="24"></iconify-icon>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No data available</td>
                        </tr>
                    @endforelse
                </table>
                {{ $skills->links() }}
            </div>

        </div>
    </section>


    @push('backend_js')
        <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
        <script src="{{ asset('assets/js/iconify-icon.min.js') }}"></script>
        <script>
            @if (session('delete'))
                Swal.fire({
                    title: "Delete!",
                    text: "{{ session('delete') }}", // Display the success message
                    icon: "warning"
                });
            @endif
        </script>
    @endpush
@endsection
