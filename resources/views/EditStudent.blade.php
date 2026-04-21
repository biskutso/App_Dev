<div>
    <form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf

        <label>First Name:</label>
        <input type="text" name="fname" value="{{$student->fname}}">

        <br><br>

        <label>Middle Name:</label>
        <input type="text" name="mname" value="{{$student->mname}}">

        <br><br>

        <label>Last Name:</label>
        <input type="text" name="lname" value="{{$student->lname}}">

        <br><br>

        <label>Suffix:</label>
        <input type="text" name="sname" value="{{$student->sname}}">

        <br><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="" disabled selected>Select your option</option>
            <option value="M" {{ (isset($student) && $student->gender == 'M') ? 'selected' : '' }}>Male</option>
            <option Value="F" {{ (isset($student) && $student->gender == 'F') ? 'selected' : '' }}>Female</option>
        </select>

        <br><br>

        <label>Birth Date:</label>
        <input type="date" name="bdate" value="{{$student->bdate}}">

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{$student->email}}">

        <br><br>

        <button type="submit">Update Student</button>
        <br><br>
        <a href=" {{ route('home') }}"> Back to students List </a>

    </form>
</div>
