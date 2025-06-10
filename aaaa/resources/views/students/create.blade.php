@extends('layout')
@section('content')

<div class="card mt-3">
    <div class="card-header">Student Pages</div>
    <div class="card-body">

        <form action="{{ url('students') }}" method="post">
            {{ csrf_field() }}

            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" name="name" id="name" class="form-control" required />

            </div>


            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" required />
            </div>

            <a class="btn btn-secondary" href="{{ URL::previous() }}"> Close </a>
            <input type="submit" value="Save" class="btn btn-success">

        </form>
    </div>

</div>

@stop