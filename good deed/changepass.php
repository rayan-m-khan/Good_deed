<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://wallpapercave.com/wp/wp6438851.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        a:hover{
            background-color: cyan;
        }
        .container {
            max-width: 450px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px black;
            margin-top: 100px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label, input {
            display: block;
            width: 95%;
        }
        input[type="password"]{
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        input[type="submit"] {
            background-color: #dce316;
            color: black;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #4591a0;
        }
        p{
            text-align: center;
        }
        .bg {
            background-color: yellow;
            box-shadow: 10px 5px 20px grey ;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            top:0px;
            padding-top: 0%;
            box-sizing: border-box;
            position: relative;
            width: 100%;
            border-top: 0%;
            left:0px;
            text-align: left;
        }
        h5{
            color: grey;
            font-size: small;
        }
        h2{
            text-align:center;
        }
        a{
            color: black;
        text-decoration: none;
        font-size: 20px;
        border-radius: 10px;
        padding: 4px;
        padding-left: 8px;
        padding-right: 8px;
        
        }
    </style>
</head>
<body>
<p style="text-align:right;padding-right:20px;"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="donor.php" style="background-color:#f0c20a;">Home</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="profile.php"  style="background-color:#f0c20a;">Profile</a> </p>
      
    <div class="container">
        <h5>Note : To change password , enter your new password and click submit.</h5><br><br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="pass">New password:</label>
                <input type="password" id="pass" name="pass" placeholder="Enter new password" required><br>
            
            </div>
            <input type="submit" value="Submit">
        </form>
       
    </div>
    <?php
        session_start();
        if (isset($_SESSION['data'])) {
            $data = $_SESSION['data'];}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $a="'".$_POST['pass']."'";
            
        
        $servername = "localhost";  
        $username = "root";  
        $password = ""; 
        $dbname = "good";  

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        

        $sql = "UPDATE donor SET password=$a WHERE phone=$data";
        $result = $conn->query($sql);
        

        // Check if the query was successful
        if ($result==TRUE) {
            echo "<h2>SUCCESSFULLY UPDATED</h>";
        }
         else {
            echo "failed";
        }
        $conn->close();
    }
        ?>


</body>
</html>

