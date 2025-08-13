<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard-container {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 15px;
            color: #333;
        }
        p {
            color: #555;
            margin-bottom: 20px;
            font-size: 14px;
        }
        a {
            display: inline-block;
            padding: 10px 15px;
            background: #dc3545;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            background: #b02a37;
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <h2>Welcome, {{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>
    <a href="/logout">Logout</a>
</div>
</body>
</html>
