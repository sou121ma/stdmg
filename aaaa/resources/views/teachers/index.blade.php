@extends('layout')
@section('content')

    <style>
        a {
            text-decoration: none;
        }
    </style>

    <div class="card">
        <div class="card-header">
            <h2>teacher Application</h2>
        </div>
        <div class="card-body">

            <!-- <a href="{{ url('teachers/create') }}" class="btn btn-success btn-sm" title="add new teacher">
                            <i class="fa fa plus" aria-hidden="true"></i> Add New
                        </a> -->

            <a href="{{ route('teachers.create') }}" class="btn btn-success btn-sm" title="add new teacher">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                <!-- <i class="fa-solid fa-plus"></i> -->
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
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td>
                                    <a href="{{ url('teachers' . '/' . $teacher->id) }}"><button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>View
                                        </button>
                                    </a>
                                    <a href="{{ url('teachers' . '/' . $teacher->id . '/edit') }}"><button
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i>Edit
                                        </button>
                                    </a>
                                    

                                    <form method="post" action="{{ url(path: 'teachers' . '/' . $teacher->id) }}"
                                        style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure ?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i>Delete

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