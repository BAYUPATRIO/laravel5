<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #0078A8;
            color: white;
            width: 100%;
            text-align: right;
            padding: 10px 20px;
            box-sizing: border-box;
        }
        .header span {
            font-size: 14px;
        }
        .container {
            margin-top: 20px;
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container img {
            width: 100px;
            margin-bottom: 20px;
        }
        .container input[type="text"],
        .container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .container button {
            background-color: #D32F2F;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #B71C1C;
        }
        .container a {
            display: block;
            margin: 10px 0;
            font-size: 14px;
            color: #0078A8;
            text-decoration: none;
        }
        .container a:hover {
            text-decoration: underline;
        }
        .guest {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        
    </div>

    <div class="container">
        <img src="logo.png" alt="University Logo">
        <form method="post" action="http://laravel11.test/elearning#Home">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <label>
        <input type="checkbox" name="rememberusername"> Remember username
    </label>
    <button type="submit">LOG IN</button>
</form>

        <a href="#">Forgotten your username or password?</a>
        <div class="guest">
            <button>LOG IN AS A GUEST</button>
        </div>
    </div>
    <script>
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Mencegah reload halaman

        const formData = new FormData(this);
        fetch('http://laravel11.test/elearning#Home', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'http://laravel11.test/elearning#Home';
            } else {
                alert('Login failed. Please check your username or password.');
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\laravel11\resources\views/tampilan.blade.php ENDPATH**/ ?>