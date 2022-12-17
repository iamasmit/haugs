<?php
include 'heade.php';
?>
<?php
$conn = mysqli_connect("localhost","root","","haugs");
$query= "SELECT * FROM notice";
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
    <h1>Event For Disabled People</h1>
<table class="table">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Name of Event</th>
            <th>Published Date</th>
            <th>Event File</th>
    

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
                  
                    <td><?php echo $row['date'];?></td>
                   
                    <td><a href="<?php echo "upload/" .$row['file_doc'];?>">view</a></td>
    

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



