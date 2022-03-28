@extends('Default_View_Template')

@section('title')
<title>Login</title>
@endsection
@section('content')

<div style="margin-top: 5vh; margin-bottom: 10vh; margin-left: 5vw; margin-right: 5vw;">
    <h1>Log in</h1>

    <form action="Login_Handling.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="mb-3">
            <label for="accountType" class="form-label">Account type:</label>
            <select class="form-select" name="accountType" aria-label="Default select example">
                <option value="">Select Account Type</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection