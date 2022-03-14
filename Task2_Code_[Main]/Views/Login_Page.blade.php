@extends('Default_View_Template')

@section('title')
<title>Login</title>
@endsection
@section('content')

<div style=" margin-top: 5vh; margin-bottom: 10vh;">
    <h1>Log in</h1>

    <form action="Login_Page.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(isset($message))
    <div class="msg">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>

@endsection