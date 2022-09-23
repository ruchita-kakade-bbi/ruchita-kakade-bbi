<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        form {
            border-radius: 30px;
            border-color: black;
            text-align: center;
            margin-top: 15%;
        }   
    </style>
</head>

<body>
    <!-- <form action="get.php" method="get">
        Name: <input type="text" name="fname"><br>
        Email: <input type="text" name="Email"><br>
        <button type="submit">Submit</button>
    </form> -->
         <!-- <form action="post.php" method="post">
        Name: <input type="text" name="fname"><br>
        Email: <input type="text" name="Email"><br>
        <button type="submit">Submit</button>
    </form> -->
         <form action="post.php" method="get" >
         Name: <input type="text" name="fname" required><br>
         Email: <input type="text" name="Email"><br>
        <button type="submit">Submit</button>
    </form>
        
</body>

</html>