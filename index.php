<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<style>
* {
  box-sizing: border-box;
}

.main {
  float: left;
  width: 45%;
  padding: 0 20px;
  overflow: hidden;
  margin-top: 7px;
}

.right {
  float: left;
  width: 50%;
  padding: 10px 15px;
  margin-top: 7px;
}
.right h1{
    color: #f9004d;
    font-size: 40px;
    text-transform: capitalize;
    text-align:center;
}
.right h2{
    color: red;
    font-size: 25px;
    text-transform: capitalize;
    letter-spacing: 2px;
    font-family: Arial, Helvetica, sans-serif;
    text-align:center;
    
}
.right p{
    color: blue;
    font-size: 18px;
    line-height: 28px;
    letter-spacing: 1px;
    margin-bottom: 5px;
    font-family: Arial, Helvetica, sans-serif;
    text-align:left;

}
button{
    background-color: #f9004d;
    color: white;
    border: 2px solid transparent;
    text-decoration: none;
    border: 30px;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 30px;

}
button a{
    text-decoration: none;
    color:white;

}

button:hover{
    transform: scale(1.2);
    background-color: transparent;
    border: 2px solid;
    color: #f9004d;
    transform: .4s;
    cursor: pointer;

}



@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
   .main, .right {
    width: 100%;
  }
  h1{
    font-size: 20px;
    text-align:center;
  }
  h2{
      text-align:center;
    font-size: 15px;  
  }
  p{
    text-align:center;
  }
  .main img{
    padding: 5px;
  }
  
}
</style>
</head>
<body style="font-family:"Times New Roman", Times, serif;">

<!-- navbar -->
<?php
include 'heade.php';
?>



  <div class="main">
    
    <img src="logo1.jpeg" style="width:100%">
  </div>

  <div class="right">
    <h1>We all are Capable</h1>
    <p> No one is disabled, some are abled while others are specially-abled.
        "Disability is just a mindset".</p>
    <button type="button"><a href="join.php">Join Us </a></button>
    
  </div>
</div>


<?php
include 'footer.php'
?>
</body>
</html>

