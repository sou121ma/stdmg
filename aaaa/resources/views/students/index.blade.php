@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Student Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('students/create') }}" class="btn btn-success btn-sm"
                title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->mobile }}</td>
                                <td>
                                    <a class="text-decoration-none" href="{{ url('students' . '/' . $student->id) }}"><button
                                            class="btn btn-info btn-sm text-decoration-none">
                                            <i class="fa fa-eye"></i>View
                                        </button>
                                    </a>

                                    <a class="text-decoration-none"
                                        href="{{ url('students' . '/' . $student->id . '/edit') }}"><button
                                            class="btn btn-primary btn-sm ">
                                            <i class="fa fa-pencil-square-o"></i>Edit
                                        </button>
                                    </a>

                                    <form method="post" action="{{ url('students' . '/' . $student->id) }}"
                                        style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure ?')"><i
                                                class="fa fa-trash-o"></i>Delete

                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>


        </div>
    </div>

@endsection