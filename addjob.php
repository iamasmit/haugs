
<style>
h1{
    color:red;
    text-align:center;
}
.login{
width:360px;
margin:50px auto;
font:"Times New Roman";
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:100%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
/* font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;  */
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}

@media screen and (max-width: 600px) {
.login,input[type=text], input[type=password] {
width: 90%;
padding-left:0px;
padding-right:0px;
}

}


</style>
<?php
include 'heade.php';
?>


<body>
<div class="login">
<h1>Add Job vacancy</h1>
<form action="" method="post"  style="text-align:center;" enctype="multipart/form-data">
<input type="text" placeholder="Enter Organization Name" id="user" name="user"><br/><br/>
<input type="text" placeholder="Enter Job Title" id="title" name="title"><br/><br/>
<input type="text" placeholder="Enter Number of Vacancy" id="num" name="num"><br/><br/>



<input type="file" placeholder="File" id="pass" name="file_doc"><br/><br/>
<input type="submit" value="Submit" name="submit">
</form>
</div>
</body>


<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="haugs";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['user']) && !empty($_POST['title'])  && !empty($_POST['num']) && !empty($_FILES['file_doc'])){
       $user = $_POST['user']; 
       $title = $_POST['title'];
       $num = $_POST['num'];  
       $file_doc = $_FILES["file_doc"]["name"];
       $tempname = $_FILES["file_doc"]["tmp_name"];
       $folder = "upload/".$file_doc;
       move_uploaded_file($tempname,$folder);
       
    
       $query =" insert into job (user,title,num,file_doc) 
       values('$user','$title','$num','$file_doc')";
       if ($query_run=mysqli_query($conn,$query)) {
        echo'<script>alert("Uploaded successfully")</script>';
    }
    else
    {
        echo'<script>alert("Not Uploaded submitted")</script>';
    }
  
    
  }
  else{
    echo'<script>alert("All fields are required")</script>';
    
      } 
}
    
?>

