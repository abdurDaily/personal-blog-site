@extends('backend.layout')
@section('backend_contains')
    <section>
        <div class="container">
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <span></span>
                <a href="{{ route('backend.skill.all') }}" class="btn btn-primary">All Skill Record</a>
            </div>
            <form action="{{ route('backend.skill.store') }}" method="post">
                @csrf

                <div class="row">

                    <div class="col-xl-4">
                        <label for="year">Year (for <b class="text-danger">institute</b> and <b class="text-danger">experience</b>)</label>
                        <input name="year" type="text" id="year" placeholder="year" class="form-control py-3"> <br>
                    </div>

                    <div class="col-xl-4">
                        <label for="institute">Institute Name</label>
                        <input name="institute" type="text" id="institute" placeholder="institute name"
                            class="form-control py-3"> <br>
                    </div>

                    <div class="col-xl-4">
                        <label for="skill_range">Skill Range</label>
                        <input name="skill_range" type="number" id="skill_range" placeholder="skill range"
                            class="form-control py-3"> <br>
                    </div>

                    <div class="col-12">
                        <div class="row">

                            <div class="col-xl-6">
                                <label for="title">Title <b class="text-danger">*</b> </label>
                                <input name="title" required type="text" id="title" placeholder="title"
                                    class="form-control py-3">
                                <br>
                            </div>

                            <div class="col-xl-6">
                                <label for="type">Select any type <b class="text-danger">*</b> </label>
                                <select required name="type" id="type" class="py-3 form-control" required>
                                    <option selected disabled>select type</option>
                                    <option value="education">Education</option>
                                    <option value="Experience">Experience</option>
                                    <option value="Skill">Skill</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                        </div>
                    </div>


                    <div class="col-12">
                        <label for="details">Details (for <b class="text-danger">institute</b> and <b class="text-danger">experience</b>)</label>
                        <textarea class="form-control " placeholder="details..." name="description" id="details" cols="30"
                            rows="10"></textarea>
                        <button class="btn btn-primary w-100 mt-3 py-3">submit</button>
                    </div>



                </div>
                
            </form>
        </div>
    </section>

@endsection
