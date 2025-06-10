@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">

        <form action="{{ url('teachers') }}" method="post">
            {{ csrf_field() }}

            <label for="">Name</label><br />
            <input type="text" name="name" id="name" class="form-control"><br />

            <label for="">Address</label><br />
            <input type="text" name="address" id="address" class="form-control"><br />

            <label for="">mobile</label><br />
            <input type="text" name="mobile" id="mobile" class="form-control"><br />

            <a class="btn btn-secondary" href="{{ URL::previous() }}"> Close </a>
            <input type="submit" value="Save" class="btn btn-success"> <br />

        </form>
    </div>

</div>

@stop