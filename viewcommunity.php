<?php
include 'config.php';
?>
<?php
$conn = mysqli_connect("localhost","root","","haugs");
$query= "SELECT * FROM form";
$query_run = mysqli_query($conn,$query);
?>

<table>
<style>
       table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color:blue;
}
td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
        color:red;
        text-align:center;
    }

    </style>
    <h1>Community Member</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        
            <!-- <th>Date of Birth</th> -->
            <!-- <th>Gender</th> -->
            <!-- <th>Address</th> -->
            <th>Country</th>
            <!-- <th>Region</th> -->
            <!-- <th>Image</th> -->
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
                


                <tr>
                    <!-- $ID = $row['ID']; -->
                    <td><?php echo $row['I.D'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                   
                    <!-- <td><?php echo $row['date'];?></td> -->
                    <!-- <td><?php echo $row['gender'];?></td> -->
                    <!-- <td><?php echo $row['address'];?></td> -->
                    <td><?php echo $row['country'];?></td>
                    <!-- <td><?php echo $row['region'];?></td> -->
 
                    <!-- <td> <img src="<?php echo "upload/" .$row['file_img'];?>" width="100px"></td> -->

                    <td>
                    <a href='edit.php?I.D=<?php echo $row['I.D']; ?>'>Edit</a>
                    <a href='delate.php?I.D=<?php echo $row['I.D']; ?>'>Delete</a>
                </td>
                   

                    
                   

                    <!-- <form action="delate.php" method="post">
                        <input type="hidden" name="I.D" value="<?php echo $row['I.D']?>">
                        <th><input type="submit" name="delate" class="delate" value="Reject"></th>
                        
                    </form> -->
                    <!-- <form action="mail.php" method="post">
                        
                        <th><input type="submit" name="mail" class="delate" value="verify"></th>  
                        
                    </form> -->
                    <!-- <div class="click">
        <a href="newmail.php">view</a>
    </div> -->
                    <td><a href="<?php echo "upload/" .$row['file_img'];?>">view</a></td>
                    <td><button onClick="window.print()">Print</button></td>
    

                </tr>
                <?php
            }

        }
        else{
            ?>
            <tr>
                <td>No Records Available</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>