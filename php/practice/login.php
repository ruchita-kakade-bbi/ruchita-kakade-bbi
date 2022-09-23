<html>
<head>
  <style>
     div{
            border-radius: 30px;
            border-color: black;
            text-align: center;
            margin-top: 10%;
        }
        h1{
          font-size: 40px;
        }
  </style>
</head>
<body>
  <div>
      <h1>Login form</h1>
      <form action="loginData.php" method ="POST" >
        userName: <input type = "text" name = "first_name" />
         <br><br>
         password:<input type="password" name ="password" ><br><br>
         <!-- <button>submit</button> -->
         <input type="submit">
         <a href="signUp.html">signup</a>
         
      </form>
      </div>
</body>

</html>
