
<?php include('partials/menu.php'); ?>
        
    <!--Fillimi i main content-->
    <div class="main-content">
    <div class="wrapper">
           <h1>Manage Admin</h1>
           <br /><br />
           <?php
               if(isset($_SESSION['add']))
               {
                  echo $_SESSION['add'];
                  unset($_SESSION['add']);
               }
           ?>
            <br/><br/><br/>

           <!-- Button to add admin-->
           <a href="add-admin.php" class="btn-primary">Add Admin</a>

           <br /><br />
           <br /> 
           <table class="tbl-full">
              <tr>
                 <th>S.N</th>
                 <th>Full Name</th>
                 <th>Username</th>
                 <th>Actions</th>
              </tr>

              <?php



                  $sql="SELECT * FROM tbl_admin";
                  var_dump($sql);
                  $res = mysqli_query($conn, $sql);

                  if($res==TRUE)
                  {
                     //numrimi i rreshtave me pa nese kena te dhena ne databaz
                     $count=mysqli_num_rows($res);//krejt rreshtat ne databaze
                     if($count>0)
                     {
                        //kena
                        while($rows=mysqli_fetch_assoc($res))
                        {
                           //me While i marim te gjitha te dhenat nga databaza
                           //egzekutohet perderisa ka te dhena ne databaze 

                           $id=$rows['id'];
                           $full_name=$rows['full_name'];
                           $username=$rows['username'];
                           ?>


                              <tr>
                              <td><?php echo $id?></td>
                              <td><?php echo $full_name?></td>
                              <td><?php echo $username?></td>
                              <td>
                              <a href="#" class="btn-secondary">Update Admin</a>
                                 <a href="#" class="btn-danger">Delete Admin</a>
                              </td>
                           </tr>
                           <?php

                            
                        }
                     }
                     else
                     {
                        //nuk kena
                     }
                  }

                 

              ?>

              
           </table>
        </div>
    </div>
    <!--perfundimi i main content-->
         
 <?php include('partials/footer.php'); ?>
 