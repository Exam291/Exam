@extends('Student_View_Template')

@section('title')
<title>Courses</title>
@endsection
@section('content')

<div class="student-courses-container">
    <div class="students-courses-list">
        <div class="courseList">
            <form action="Fetch_Course.php" method="post">
                <button type="submit" value="'{$course}'"class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
    <div class="students-courses-content">
        
    </div>
</div>

@endsection