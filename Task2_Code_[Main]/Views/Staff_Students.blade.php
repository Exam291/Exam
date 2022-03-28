@extends('Staff_View_Template')

@section('title')
<title>Students</title>
@endsection
@section('content')

<div class="staff-students-container">
    <div class="staff-students-filter">
    <form action="FORM_Staff_Student_Filter.php" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <div id="staff-students-list" class="table .table-bordered">
        <thead>
            <th> Student ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Email </th>
            <th> password </th>
            <th> Date Of Birth </th>
            <th> Gender </th>
        </thead>
        @for (sizeof($MatchingEntries))
        <tr id="{$MatchingEntries['StudentID']}">
            @foreach ($MatchingEntries as $MatchingEntries)
            <td>{{$MatchingEntries}}</td>
            @endforeach
        </tr>
        @endfor
    </div>
</div>

@endsection