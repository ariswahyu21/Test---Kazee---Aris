<!-- resources/views/employees/show.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Show Employee</title>
</head>

<body>
    <h1>Show Employee</h1>
    <div>
        <strong>Name:</strong>
        {{ $employee->name }}
    </div>
    <div>
        <strong>Email:</strong>
        {{ $employee->email }}
    </div>
    <div>
        <strong>Position:</strong>
        {{ $employee->position }}
    </div>
    <div>
        <a href="{{ route('employees.index') }}">Back</a>
    </div>
</body>

</html>