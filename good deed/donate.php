<?php //session
        session_start();
        if (isset($_SESSION['data'])) {
            $data = $_SESSION['data'];?>
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
        input[type="number"], input[type="password"],input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        select{
            font-size: 16px;
            padding: 10px;
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
        h2{
            text-align: center;
        }
        a{
            background-color:#f0c20a;
        text-decoration: none;
        font-size: 20px;
        border-radius: 10px;
        padding: 4px;
        padding-left: 8px;
        padding-right: 8px;
        color: #073236;
        
        }
        p{
          text-align: right;
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
        }
    </style>
    <script>
      function updateCurrentTime() {
                  const now = new Date();
                  const currentTimeInput = document.getElementById('currentTime');
                  currentTimeInput.value = now.toLocaleTimeString();
              }

              function updateCurrentDate() {
            const now = new Date();
            const currentDateInput = document.getElementById('currentDate');
            currentDateInput.value = now.toDateString();
        }
        window.onload = function () {
                updateCurrentDate(); 
                  updateCurrentTime(); // Call the function to display the current time immediately
                  setInterval(updateCurrentTime, 1000); // Update the current time every second
              };

        
    </script>
</head>
<body>

<p style="text-align:right;padding-top:20px;"><a href="donor.php" >Home</a>&emsp;&emsp;&emsp;&emsp;<a href="request.php"  >Request</a>
            &emsp;&emsp;&emsp;&emsp;<a href="login.php" >Logout</a> </p>
        

    <div class="container">
        <h2>DONATE</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" id="des" name="des" placeholder="Enter Food description" maxlength="2000" required><br>

                <label for="q">Quantity:</label>
                <input type="number" id="q" name="q" placeholder="How many can it feed ?" required><br>

                <label for="add">Address:</label>
                <input type="text" id="add" name="add" placeholder="Enter your address" required><br>

                
                <input type="hidden" id="currentDate" name="currentDate" readonly>
                <input type="hidden" id="currentTime" name="currentTime" readonly>
            
                
            </div>
            <input type="submit" value="Donate">
        </form>
       
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $des="'".$_POST['des']."'";
        $q=$_POST['q'];
        $add="'".$_POST['add']."'";
        $date="'".$_POST['currentDate']."'";
        $time="'".$_POST['currentTime']."'";

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

        

        $sql = "INSERT INTO donation VALUES($data,$des,$q,$add,$date,$time,'none','no','no','no')";
        $result = $conn->query($sql);
        

        // Check if the query was successful
        if ($result==TRUE) {
            
            echo "<p>DONATION SUCCESSFULL</p>";
 
            
        }
         else {
            echo "<p>DONATION FAILED</p>";
        }
        $conn->close();
    
    }?> </div>
    </body>
 </html>
 <?php }?>
