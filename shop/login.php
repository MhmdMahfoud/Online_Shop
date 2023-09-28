<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <form action="login_action.php" method="post">
        <div>
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required />
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
