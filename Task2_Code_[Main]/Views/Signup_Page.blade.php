@extends('Default_View_Template')

@section('title')
<title>Signup</title>
@endsection
@section('content')

<div style=" margin-top: 5vh; margin-bottom: 10vh; margin-left: 5vw; margin-right: 5vw;">
    <h1>Sign up for an account!</h1>
    <form action="Createup_Page.php" method="post" >
        <div class="mb-3">
            <label for="userFirstName" class="form-label">First Name:</label>
            <input type="string" class="form-control" id="userFirstName" placeholder="Enter First Name" name="userFirstName">
        </div>
        <div class="mb-3">
            <label for="userLastName" class="form-label">Last Name:</label>
            <input type="string" class="form-control" id="userLastName" placeholder="Enter Last Name" name="userLastName">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" name="confirmPassword">
        </div>
        <div class="mb-3">
            <label for="dateOfBirth" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select" name="gender" aria-label="Default select example">
                <option value="">Select Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="N">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="accountType" class="form-label">Account type:</label>
            <select class="form-select" name="accountType" aria-label="Default select example">
                <option value="">Select Account Type</option>
                <option value="M">Teacher</option>
                <option value="F">Student</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection