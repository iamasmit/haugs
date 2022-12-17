<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<style>
    /* menu bar */
  
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgb(64, 96, 238);
}

.topnav a {
  float: left;
  
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
    background-color: #f9004d;
    transform: scale(1.0);   
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

/* image */
@media (max-width:767px) {
    .as img {
        max-width: 100%;
        max-height: 100%;
    }
}

@media (min-width:768px) {
    .as img {
        max-width: 240px;
        max-height: 240px;
    }
}

@media (min-width:992px) {
    .as img {
        max-width: 314px;
        max-height: 314px;
    }
}

@media (min-width:1200px) {
    .as img {
        max-width: 480px;
        max-height: 480px;
    }
}
/* For desktop responsive */


/* for mobile phoes responsive */

@media screen and (max-width: 768px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 768px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* for 468 */

@media screen and (max-width: 468px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 468px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
   
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }
}



/* menu Apply Online */
.badge-bounce{
  animation: bouncing .8s cubic-bezier(0.1,0.05,0.05,1) 0s infinite alternate both;

}
.menu-badge{
  font-size: 12px;
    margin-left: 4px;
    position: relative;
    top: -10px;
    margin-bottom: 13px;
    color: #ffffff;
    background-color: #FF0000;
    padding: 3px 4px;
    border-radius: 3px;
}

/* Social Icon */
.share{
  position: absolute;
  top: 5%;
  left: 70%;
  display: flex;
  flex-wrap: nowrap;
  justify-content: flex-start;
  align-items: center;

}
.share p{
  font-size: 20px;
  color: rgb(10, 201, 42);
  margin-right: 15px;
}
.share .social a{
  display: inline-block;
  color:rgb(12, 142, 248);
  margin-right: 15px;
  transition: transform .3s;




}
.share .social a:hover{
  transform: scale(1.6);
}

@media screen and (max-width: 768px) {
    .share {
        /* display: none; */
        position: relative;
        left:0;
        margin-top:-5%;
   

    }
    .share p{
      background-color: #f9004d;
    color: white;
    border: 2px solid transparent;
    text-decoration: none;
    border: 20px;
    font-size: 12px;
    font-weight: bold;
    padding: 8px 15px;
    border-radius: 20px;

    }
}

/* responsive of image */

@media (max-width:768px) {
    .as img {
      
        max-width: 90%;
        max-height: 100%;
    }
}

</style>
</head>
<body>

<div class="as">
        <h2><img src="logo.png" width=""></h2>
        <div class="share">
            <p>FOLLOW US</p>
    
            <div class="social">
                <a href="" target="-blank"><i class="fab fa-facebook-f"></i></a>
                <a href="" target="-blank"><i class="fab fa-twitter"></i></a>
                <a href="" target="-blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-whatsapp" target="-blank"></i></a>
                <a href="" target="-blank"><i class="fab fa-instagram"></i></a>
               
            </div>
        </div>
        </div>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="./about.php" class="">About</a>
    <a href="viewevent.php">Event</a>
    <a href="facility.php">Special Facilities</a>
    <a href="viewjob.php">Vacancy</a>
    <a href="join.php">Join Community</a>
    <a href="contact.php">Contact Us</a>

    <a href="newlogin.php">Login<span class="menu-badge badge-bounce">Admin Login</span></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
