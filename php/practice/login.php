<html>
<head>
  <style>
    body {
         background-color:#f8efed;
         display:flex;
        justify-content:center;
        align-items:center; 
          
      }
     div{
            border-radius: 10px;
            border-color: black; 
            border-width: 3px;
            border-style: outset;
            padding:10px 15px 36px 15px;
            background-color: lightblue;  
            height :25%;
            width:25%;
            text-align:center;
            font-size:23px;
            /* border:px solid; */
           
        }
       
        h1{
          font-size: 40px;
        }
          #btn {
         background-color: rgba(0, 0, 0, 0.607);
         color: aliceblue;
         padding: 4px 10px 5px 10px;
         border-radius: 5px;
      }
  </style>
</head>
<body>
  <div >
      <h1>Login form</h1>
      <form action="loginData.php" method ="POST" >
        Username:- <input type = "text" name = "first_name" placeholder="Username" required />
         <br><br>
         Password:- <input type="password" name ="password" placeholder="Password" required><br><br>
         <!-- <button>submit</button> -->
         <input type="submit" id="btn">&nbsp;&nbsp;
         <a href="signUp.html">signup</a>
         
      </form>
      </div>
</body>

</html>
