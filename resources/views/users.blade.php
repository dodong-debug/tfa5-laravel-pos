
<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['role'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
