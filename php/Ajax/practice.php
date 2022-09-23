<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        #p1{
            text-align: center;
            font-size:50px;
            margin-top :15%;
        }
        #btn{
            
        }
    </style>
</head>

<body>
    <P id="p1">what is Ajax?</P>
    <button onclick ="display()" id="btn">Click Here</button>

    <script>
   function display(){
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange =function(){
           if(this.readyState == 4 && this.status ==  200){
           document.getElementById("p1").innerHTML=this.responseText;
           }
       };
       xhttp.open('GET',"webdictionary.txt",true);
       xhttp.send();
   }    
</script>
</body>
</html>