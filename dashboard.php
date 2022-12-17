<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SAKSHYAM NEPAL</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body{
    font:16px arial;
    margin: 0;
    padding: 0;
    background: #d1d1d1;
}

#wrapper{
    width: 1000px;
    margin: 50px auto 0;
    background-color: #fff;
}

#header{
    text-align: center;
    background-color: #1abc9c;
    padding: 10px;
}
#header h1{
    color: #fff;
    font-size: 40px;
    font-style: italic;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}

#menu{
    background-color: #333;
}
#menu ul{
    font-size: 0;
    padding: 0 10px;
    margin: 0;
    list-style: none;
}
#menu ul li{
    display: inline-block;
}
#menu ul li a{
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 8px 10px;
    display: block;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

#menu ul li a:hover{
    background-color: rgba(255,255,255,0.2);
}

</style>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>SAKSHYAM NEPAL</h1>
        </div>
        <div id="menu">
            <!-- <ul>
                <li>
                    <a href="addevent.php">Add Event</a>
                </li>
                <li>
                    <a href="add.php">Add JOb</a>
                </li>
                <li>
                    <a href="logout.php">Log Out</a>
                </li>
                 <li>
                    <a href="update.php">Update</a>
                </li>
                <li>
                    <a href="delete.php">Delete</a>
                </li> -->
            </ul> 
        </div>

        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: red;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="dashboard.php">View Record</a>
  <a href="addevent.php">Add Event</a>
  <a href="addjob.php">Add Job</a>
  <a href="contactlog.php">Contact View</a>
  <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
    <form action="logout.php">
      
      <button type="submit">Log out</button>
    </form>
  </div>
</div>

<!-- <div style="padding-left:16px">
  <h2>Responsive Input Field in Navbar</h2>
  <p>Navigation bar with a search box and a submit button inside of it.</p>
  <p>Resize the browser window to see the responsive effect.</p>
</div> -->

<?php
include 'viewcommunity.php';
?>

</body>
</html>

       
