<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://images.pexels.com/photos/6647111/pexels-photo-6647111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-repeat: no-repeat;
            background-size: cover;
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
        select{
            padding: 10px;
            font-size: 16px;

        }
        input[type="number"], input[type="password"] {
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
    </style>
</head>
<body>

             
    <div class="container">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required><br>

                CATEGORY : <select id="type" name="type">
                    <option value="donor">DONOR</option>
                    <option value="reciever">RECIEVER</option>
                </select><br><br>
            
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <input type="submit" value="Login">
        </form>
        <p>New user? <a href="signup.php">click here</a> </p>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $p="'".$_POST['phone']."'";
            $pa="'".$_POST['password']."'";
            $t=$_POST['type'];
        
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

        

        $sql = "SELECT * FROM $t WHERE phone=$p and password=$pa";
        $result = $conn->query($sql);
        

        // Check if the query was successful
        if ($result->num_rows > 0) {
            if($t=='donor'){
            session_start();
            $_SESSION['data'] = $p;
            
            // Redirect to the destination page
            header("Location: donor.php");
            exit;
            
            
        }
        else{
            session_start();
            $_SESSION['data'] = $p;
            
            // Redirect to the destination page
            header("Location: reciever.php");
            exit;

        }
    }
         else {
            echo "<p>INVALID CREDENTIALS</p>";
        }
        $conn->close();
    }
        ?>

</div>
</body>
</html>

