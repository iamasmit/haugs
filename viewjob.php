<?php
include 'heade.php';
?>
<?php
$conn = mysqli_connect("localhost","root","","haugs");
$query= "SELECT * FROM job";
$query_run = mysqli_query($conn,$query);


?>
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
    <h1>List of vacancy</h1>
<table class="table">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Organization Name</th>
            <th>Job Title</th>
            <th>No. of vacancy</th>
            <th>Published Date</th>
            <th>file</th>
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
                    <td><?php echo $row['S.N'];?></td>
                    <td><?php echo $row['user'];?></td>
                  
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['num'];?></td>
                    <td><?php echo $row['date'];?></td>
                   
                    <td><a href="<?php echo "upload/" .$row['file_doc'];?>">view</a></td>
                    <td>
                    <a href='join.php?id=<?php echo $row['S.N']; ?>'>Apply</a>
                    <!-- <a href='delete-inline.php?id=<?php echo $row['S.N']; ?>'>Delete</a> -->
                </td>
    

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


