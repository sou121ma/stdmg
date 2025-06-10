@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Student Pages</div>
    <div class="card-body">

        <form action="{{ url('students/' . $student->id) }}" method="post">

            {{ csrf_field() }}
            @method('PATCH')

            <input type="hidden" name="id" id="id" value="{{ $student->id }}" />

            <label for="">Name</label><br />
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}"><br />

            <label for="">Address</label><br />
            <input type=" text" name="address" id="address" class="form-control" value="{{ $student->address }}"><br />

            <label for="">mobile</label><br />
            <input type=" text" name="mobile" id="mobile" class="form-control" value="{{ $student->mobile }}"><br />

            <input type="submit" value="Update" class="btn btn-success"> <br />

        </form>
    </div>

</div>


@stop