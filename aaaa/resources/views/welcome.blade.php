@extends('layout')
@section('content')

    <div class="row mt-3">
        <div class="col-md-3 ">
            <div class="card shadow">
                <div class="card-header text-center">
                    Total Students
                </div>
                <div class="card-body">
                    <h2 class="text-center">{{ $students->count() }}</h2>
                </div>

            </div>
        </div>

        <div class="col-md-3 ">
            <div class="card shadow">
                <div class="card-header text-center">
                    Total Teachers
                </div>
                <div class="card-body">
                    <h2 class="text-center">{{ $teachers->count() }}</h2>
                </div>

            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card shadow">
                <div class="card-header text-center">
                    Total Courses
                </div>
                <div class="card-body">
                    <h2 class="text-center">{{ $courses->count() }}</h2>
                </div>

            </div>
        </div>

        <!-- <div class="col-md-3 ">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Total Enrolled
                    </div>
                    <div class="card-body">
                        <h2 class="text-center">{{ $teachers->count() }}</h2>
                    </div>

                </div>
            </div> -->

    </div>

    <div class="row mt-3">
        <div class="col-4">
            {{ $test }}
        </div>
    </div>

@endsection