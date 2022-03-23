@extends('Staff_View_Template')

@section('title')
<title>Students</title>
@endsection
@section('content')

<div class="staff-students-container">
    <div class="staff-students-filter">
    <form action="FORM_Staff_Student_Filter.php" method="post">
        <div class="mb-3 mt-3">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="firstName">
        </div>
        <div class="mb-3 mt-3">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lastName">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="dateOfBirth" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select" name="gender" aria-label="Default select example">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="staff-students-list">
        {{ $studentArray }}
    </div>
</div>

@endsection