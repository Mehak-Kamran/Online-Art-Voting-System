<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    

    <body id="loginbody">
        <!--
            <div id="img">
            <img src="image/imgre.png"  >
            </div>
            
-->
            
            
            <div id="loginSection">
                <h2 align=center style="color:#13a796;">Login</h2>
                
                <form action="api/login.php" method="POST"></center>
                <center><input type="number" name="mob" placeholder="Enter mobile" required><br><br></center>
                <center><input type="password" name="pass" placeholder="Enter password" required><br><br></center>
                <center><select name="role" style="width: 25%; border-bottom: 1px solid #13a796; ">
                        <option value="1">Voter</option>
                        <option value="2">Artist</option>
                    </select><br><br> </center>                 
                    <center><button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br></center>
                   <center> New user? <a href="routes/register.php">Register here</a></center>
                </form>

            </div>
 
</head>
<body>


             
    </body>
</html>