<?php
include('security.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Table Registration Data</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM restro";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-fluid" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <style>
table { 
  width: 100%; 
  table-layout: auto;
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}   

</style>

            
                        <tr> 
                            <th scope="col"> ID </th>
                            <th scope="col">fullname</th>
                            <th scope="col">email </th>
                            <th scope="col">Phone</th>
                            <th scope="col">date</th>
                            <th scope="col">time</th>
                            <th scope="col">person</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr class="table table-dark">
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['fullname']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone1']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td><?php  echo $row['person']; ?></td>
                             
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>



                    </br>  </br>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">ContactForm Data</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
                $query = "SELECT * FROM contactform";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table class="table table-fluid" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <style>
table { 
  width: 100%; 
  table-layout: auto;
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee;     
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}   

</style>

            
                        <tr> 
                            <th scope="col"> ID </th>
                            <th scope="col">name</th>
                            <th scope="col">email </th>
                            <th scope="col">subject</th>
                            <th scope="col">message</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr class="table table-dark">
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['subject']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                             
                    
                             
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>