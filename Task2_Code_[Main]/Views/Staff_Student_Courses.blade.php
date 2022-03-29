@extends('Staff_View_Template')

@section('title')
<title>Student Courses</title>
@endsection
@section('content')

<div class="staff-student-courses-container">
    <div class="staff-student-courses-filter">
    <form action="FORM_Staff_Student_Courses_Filter.php" method="post">
        <div class="mb-3 mt-3">
            <label for="studentID" class="form-label">Student ID:</label>
            <input type="text" class="form-control" id="studentID" placeholder="Enter Student ID" name="studentID">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <table id="staff-student-courses-list" class="table table-bordered">
        <thead>
            <th> Student ID </th>
            <th> Course ID </th>
            <th> Staff ID </th>
            <th> Current Course Content </th>
        </thead>
        @for($itemNum = 1; $itemNum <= count($MatchingEntries); $itemNum++)
        <?php print($MatchingEntries[$itemNum]); ?>
            <tr>
            @foreach ($MatchingEntries as $rowitem)
            <?php print($rowitem) ?>
                <td>{{$rowitem}}</td>
            @endforeach
            </tr>
        @endfor
    </table>
</div>

@endsection
