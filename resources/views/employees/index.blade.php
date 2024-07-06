<!DOCTYPE html>
<html>

<head>
    <title>Employee Management</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h2>Employee List</h2>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->position }}</td>
                <td>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>