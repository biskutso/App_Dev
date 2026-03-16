<!DOCTYPE html>
<html>
    <head>
        <title>Edit User</title>
    </head>
    <body>

    <h2>Edit User</h2>

    <form action="/user/update/{{$user->id}}" method="POST">

        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{$user->name}}">

        <br><br>

        <label>Email</label>
        <input type="email" name="email" value="{{$user->email}}">

        <br><br>

        <label>Password</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit">Update</button>

    </form>

    <br>

    <a href="/user">Back</a>

    </body>
</html>