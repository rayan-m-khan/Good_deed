<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        table{
            border-collapse: collapse;
            width: 1500px;
            background-color: white;
            
        }
        tr,td,th{
            border:2px solid black;
            border-spacing: px;
            padding: 10px;
            text-align: center;


        }
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://wallpapercave.com/wp/wp6438851.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            color:yellow;
            background-color:#073236;
            border-radius: 90%;
            border-color: black;
            font-size: x-large;
            box-shadow: 10px 0px 20px rgb(67, 67, 48);
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        a{
            background-color:#dce316;
        text-decoration: none;
        font-size: 20px;
        border-radius: 10px;
        padding: 4px;
        padding-left: 8px;
        padding-right: 8px;
        color: #073236;
        
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
            text-align: left;
            padding-left: 20px;
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
        .con{
          background-image: url(https://img5.goodfon.com/wallpaper/nbig/3/56/fastfud-gamburger-bulochki-pomidory-kartofel-fri-nozh-butylk.jpg);
          background-repeat: no-repeat;
          text-align: center;
          color: white;
          background-size:cover;
        }
        .xa{
            text-align: center;
            padding-left: 33%;
        }
        .ax{
            background-color:#dce316;
            color: #073236;
            width: 500px;
            border-radius: 10px;
            font-size: 20px;
        }
        p{
            padding-right: 20px;
        }
        h2{
            text-align: center;
            text-shadow:#073236;
            color: white;
        }
        a:hover{
            background-color: cyan;
        }
    </style>
    <script>
       
    </script>
</head>
<body>

            <p style="text-align:right;padding-top:20px;"><a href="donor.php" >Home</a>&emsp;&emsp;&emsp;&emsp;<a href="request.php"  >Request</a>
            &emsp;&emsp;&emsp;&emsp;<a href="login.php" >Logout</a> </p>
        

    <br><br><br><br>

    <?php //session
        session_start();
        if (isset($_SESSION['data'])) {
            $data = $_SESSION['data'];}
            
            
            
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

        

        $sql = "SELECT * FROM donor WHERE phone=$data";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="xa">
                    <div class="ax" >
                        <br><p><h2 style="color:black;">DONOR PROFILE</h2> <br>NAME : &emsp;&emsp;<?php echo $row['name'] ?><br><br>PHONE NUMBER : &emsp13; <?php echo $row['phone'] ?><br><br>ADDRESS :&emsp; <?php echo $row['address'] ?><br><br>Points : <?php echo $row['point'] ?></p>
                        <br><br>
                    </div>
                </div><br><br>
                <?php
            }

         }
        
         else {
            echo "No records found.";
        }
        



                  ?>
    <br>
<br>
<p style="text-align:left;padding-left:370px;"><a href="changepass.php">Change Password</a> </p>
<p style="text-align:right;padding-right:370px;position:relative;bottom:40px;"> <a href="changeadd.php" >Change Address</a></p>
<hr>
<h2 >DONATION HISTORY:</h2>
  <?php
  $sq= "SELECT * FROM donation WHERE donorid=$data";
  $res = $conn->query($sq);
  
  if ($res->num_rows > 0) {
    ?><table>
    <tr>
        <th>Description</th><th>Quantity</th><th>Address</th><th>Date</th><th>Time</th><th>Reciever</th><th>Requested</th>
        <th>Approved</th><th>Complete</th>
    </tr>
    <?php
      
      while ($r = $res->fetch_assoc()) {
        ?>
        <tr>
        <td><?php echo $r['des']; ?></td>
        <td><?php echo $r['quantity']." People"; ?></td>
        <td><?php echo $r['address']; ?></td>
        <td><?php echo $r['ddate']; ?></td>
        <td><?php echo $r['dtime']; ?></td>
        <td><?php echo $r['reqid']; ?></td>
        <td><?php echo $r['requested']; ?></td>
        <td><?php echo $r['approved']; ?></td>
        <td><?php echo $r['donated']; ?></td>
      </tr>
        <?php   
      }
    }
    else{
        ?>
        <div class="xa">
                    <div class="ax" >
            <p>NO DONATIONS</p>
        </div></div>
        
   <?php }
  
  
  ?></table><?php
  $conn->close();  ?>              
    </body>
</html>
