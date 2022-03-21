@extends('Staff_View_Template')

@section('title')
<title>Students</title>
@endsection
@section('content')

<div class="staff-students-container">
    <div class="staff-students-filter">
    <form action="Models/Login_Script.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="staff-students-list">

    </div>
</div>

@endsection