<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <link rel="stylesheet" href="admin_products.css">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #333; /* لون الخلفية */
        }
        .options {
            margin-top: 200px;
            text-align: center;
        }
        .question {
            margin-bottom: 30px;
            color: #fff; /* لون السؤال */
            font-size: 24px;
            font-weight: bold;
        }
        .options a {
            margin: 10px;
            padding: 20px 40px;
            border-radius: 25px;
            text-decoration: none;
            color: #fff;
            transition: all 0.3s ease;
            font-size: 20px;
            display: inline-block;
        }
        .admin {
            background-color: #4CAF50; /* لون خلفية زر الأدمن */
        }
        .user {
            background-color: #008CBA; /* لون خلفية زر اليوزر */
        }
        .options a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col options">
            <div class="question">Are you a user or an admin ?</div>
            <a href="../admin_products.php" class="admin">Admin</a>
            <a href="../users/loginUser.php" class="user">User</a>
        </div>
    </div>
</div>

</body>
</html>
