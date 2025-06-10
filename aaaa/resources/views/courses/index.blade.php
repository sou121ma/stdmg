@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>All Courses</h3>
        </div>
        <div class="card-body">
            <a href="{{ url('courses/create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />

            <div class="row">

                @foreach ($courses as $course)
                    <div class="col-md-3 mb-1 ">
                        <div class="card text-center">
                            <div class="card-body">
                                <p class="card-header">{{ $course->name }} </p>
                                <h5>{{ $course->course_duration }} Hours</h5>
                            </div>

                            <div class="mb-1">

                                <a href="{{ url('courses' . '/' . $course->id . '/edit') }}"><button
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o"></i> Edit
                                    </button>
                                </a>


                                <form method="POST" action="{{ url('courses/' . $course->id) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </button>
                                </form>



                            </div>

                        </div>

                    </div>
                @endforeach




            </div>



        </div>
    </div>
@endsection