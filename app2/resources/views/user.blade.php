<!-- resources/views/user.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>

    <form action="{{ url('/update-user/' . $id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $name }}">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <button type="submit">Update User</button>
    </form>

    <form action="{{ url('/delete-user/' . $id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button type="submit">Delete User</button>
    </form>
</body>
</html>
