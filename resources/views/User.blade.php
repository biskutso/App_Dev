<!DOCTYPE html>
<html>
    <head>
        <title>User CRUD</title>
    </head>
        <body>

        <h2>Add User</h2>

            <form action="{{ route('user.store') }}" method="POST">
            @csrf

                <label>Name:</label>
                <input type="text" name="name">

                <br><br>

                <label>Email:</label>
                <input type="email" name="email">

                <br><br>

                <label>Password:</label>
                <input type="password" name="password">

                <br><br>

                <button type="submit">Add User</button>

            </form>

        <hr>

        <h2>User List</h2>

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>

            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

                <td>
                    <a href="{{ route('user.show', $user->id) }}">View |</a>
                    <a href="{{ route('user.edit', $user->id) }}">Edit |</a>

                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" style="display:inline">
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