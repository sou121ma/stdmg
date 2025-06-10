@extends('layout')
@section('content')

    <div class="card mt-3">
        <div class="card-header">Add New Course</div>
        <div class="card-body">

            <form action="{{ url('courses') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Course Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />

                    @error('name')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror

                </div>


                <div class="mb-3">
                    <label for="course_duration" class="form-label">Course Duration</label>
                    <input type="number" name="course_duration" id="course_duration" class="form-control"
                        value="{{ old('course_duration') }}" />

                    @error('course_duration')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror

                </div>


                <a class="btn btn-secondary" href="{{ URL::previous() }}"> Close </a>
                <input type="submit" value="Save" class="btn btn-success">

            </form>

        </div>
    </div>

@endsection