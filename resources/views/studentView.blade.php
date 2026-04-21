<!DOCTYPE html>
<html>
    <head>
        <title>Student CRUD</title>
    </head>
        <body>

        <h2>Add Student</h2>

            <form action="{{ route('students.store') }}" method="POST">
            @csrf

                <label>First Name:</label>
                <input type="text" name="fname" placeholder="First Name..." required>

                <br><br>

                <label>Middle Name:</label>
                <input type="text" name="mname" placeholder="Middle Name...">

                <br><br>

                <label>Last Name:</label>
                <input type="text" name="lname" placeholder="Last Name..." required>

                <br><br>

                <label>Suffix:</label>
                <input type="text" name="sname" placeholder="Ex. Jr,Sr,...(Optional)">

                <br><br>

                <label>Gender:</label>
                <select name="gender" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="M">Male</option>
                    <option Value="F">Female</option>
                </select>

                <br><br>

                <label>Birth Date:</label>
                <input type="date" name="bdate" required>

                <br><br>

                <label>Email:</label>
                <input type="email" name="email" placeholder="example@gmail.com" required>

                <br><br>

                <button type="submit">Add Student</button>

            </form>

        <hr>

        <h2>Students List</h2>

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach($students as $student)

            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->fname}} {{$student->mname}} {{$student->lname}} {{$student->sname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->bdate}}</td>
                <td>{{$student->email}}</td>

                <td>
                    <a href="{{ route('students.show', $student->id) }}">View |</a>
                    <a href="{{ route('student.edit', $student->id) }}">Edit |</a>

                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach

        </table>

    </body>
</html>