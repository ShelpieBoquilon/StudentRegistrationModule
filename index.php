<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
        }

        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 300px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Student Information Management Form</h1>
    <form action="register.php" method="POST">
        <label for="email">email:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">address:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required><br><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
