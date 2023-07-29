<?php //session
        session_start();
        if (isset($_SESSION['data'])) {
            $data = $_SESSION['data'];?>
<!DOCTYPE html>
<html>

<head>
    <style>
     
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
        input[type="number"] {
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align: center;
            outline: none;
        }
        table,tr,td{
            text-align: center;
            padding-left: 30px;
        }
       

        h3{
          background-color: #073236;
          border-radius: 0%;
          box-shadow:10px 0px 10px #717171;
          color:yellow;
          text-decoration: none;
          font-size: 15;
          font-family: Arial, Helvetica, sans-serif;
        }

        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img{vertical-align:bottom;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
        padding-left: 200px;
        top: 70px;
        }

        /* Caption text */
        .text {
        color: white;
        font-size: 50px;
        top: 400px;
        padding: 8px 12px;
        position: absolute;
        bottom: 0%;
        width: 100%;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        height: 100px;
        
         
        }

       

        /* The dots/bullets/indicators */
        .dot {
        height: 15px;
        width: 15px;
        
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
        }

        .loc{
            position: relative;
            bottom: 460px;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            background-color: #f0c20a;
            width:650px;
            
        }
        .o{
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }
        
        h2{
            text-align: center;
            color: yellow;
            font-size: x-large;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }
        h5{
            text-align: center;
            

        }
        h5:focus{
          box-shadow: 20px 20px 20px #f0c20a;
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
        body{
            background-image:url(https://wallpaperaccess.com/full/3204698.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
        }
        p{
            text-align: right;
            padding-right: 50px;
        }
        .r{
            text-align: right;
            position: relative;
            top: 20px;
            padding-right: 20px;
        }
        .d{
            position: relative;
            top: 100px;
            text-align: right;
            right: 350px;
        }
        a:hover{
            background-color: cyan;
        }
    </style>

</head>

<body>

<div class="r" ><a href="rprofile.php" style="background-color:#f0c20a;">Profile</a>&emsp;&emsp;&emsp;&emsp;<a href="donations.php" style="background-color:#f0c20a;">Available Donations</a>&emsp;&emsp;&emsp;&emsp;

            <a href="rrequest.php" style="background-color:#f0c20a;">
    
             Requests </a>&emsp;&emsp;&emsp;
            <a href="login.php" style="background-color:#f0c20a;">Logout</a> </div>
        
    <div align=center class="slideshow-container" >

        <div class="mySlides fade" >
          
          <img src="https://voa-production.s3.amazonaws.com/dragonfly-uploads/2020/12/04/10/43/31/c8e94754-c55f-4713-8645-0cf477013da2/Smaller_20Landing_20Page__20shutterstock_489716194.jpg" style="width:800px;height:500px;box-shadow: none;" >
          <div class="text"><b></b></div>
        </div>
        
        <div class="mySlides fade">
        <img src="https://images.pexels.com/photos/6994982/pexels-photo-6994982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:800px;height:500px;box-shadow: none;">
        
        
        </div>

        <div class="mySlides fade">
        <img src="https://images.pexels.com/photos/6646904/pexels-photo-6646904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:800px;height:500px;box-shadow: none;">
        
        </div>
        
        </div>
       
        <div class="d">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <div class="loc"><h1>Welcome to GOOD DEEDS!!</h1><div class="o"> We believe that no one should go to bed hungry. Our mission is
    <br> to bridge the gap between surplus food and those in need,
    <br> ensuring that every person has access to a nutritious meal. We 
    <br>are dedicated to making a positive impact on our community and 
    <br>beyond by encouraging food donations and supporting those <br>facing food insecurity.<br>
    <br>Join us in making a difference in the lives of those facing <br>
    hunger. Your act of kindness can bring hope and nourishment to someone in need. Let's come together and build a world where no one has to experience hunger.

<br><br>Thank you for being a part of our Food Donation family!<br>




</div> </div>
       
        <script>
          function alfunc(){
            alert("Added successfully , Check your cart to proceed.");
          }
          function f1(el){
            
            el.style.boxShadow = ' 0px 3px 3px 2px  #f0c20a';
            el.style.opacity="0.8";
          }
          function fh2(el){
            el.style.boxShadow='0px 0px 10px 1px black';
            el.style.opacity="1";
          }
          function fh111(el){
            
            el.style.boxShadow = ' 0px 5px 5px #073236';
            el.style.opacity="0.8";
          }
          function fh121(el){
            el.style.boxShadow='none';
            el.style.opacity="0.6";
          }
        
        let slideIndex = 0;
        showSlides();
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>      
    </body>
</html>
<?php }?>



