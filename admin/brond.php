<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
              <div class="min_conteant">
                <h3>Brond  List</h3>
                <a  class="btn btn-success" href="addBrond.php">Add New Brond</a>
                <div class="cattable">
                              <h5 style="color: blue"><?php 
                              if(isset($_REQUEST['add_success'])){
                                    echo "category_add_success";
                              }


                               ?></h5>
                               <h5 style="color: red"><?php 
                              if(isset($_REQUEST['add_error'])){
                                    echo "category_add_error";
                              }


                               ?></h5>
                                <h5 style="color: blue"><?php 
                              if(isset($_REQUEST['update_success'])){
                                    echo "category_update_success";
                              }


                               ?></h5>
                               <h5 style="color: red"><?php 
                              if(isset($_REQUEST['update_error'])){
                                    echo "category_update_error";
                              }


                               ?></h5>
                                 <h5 style="color: blue"><?php 
                              if(isset($_REQUEST['delete_success'])){
                                    echo "category_delete_success";
                              }


                               ?></h5>
                               <h5 style="color: red"><?php 
                              if(isset($_REQUEST['delete_error'])){
                                    echo "category_delete_error";
                              }


                               ?></h5>
                               <form action="brond_all_delete.php" method="POST">
                  <table class="table" border="2px">
                  <thead>
                    <th style="background-color: #000;color: #fff">S/N</th>
                    <th style="background-color: #000;color: #fff">DB/SN</th>
                    <th style="background-color: #000;color: #fff">Brond Name</th>
                    <th style="background-color: #000;color: #fff">Brond Post Number </th>
                    <th style="background-color: #000;color: #fff">Edit Brond </th>
                    <th style="background-color: #000;color: #fff">Delete Brond </th>
                    <th style="background-color: #000;color: #fff">
                      <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                    </th>
                  </thead>
                  <?php 

                  $serile=1;
                  $showCatQuery="SELECT * FROM table_brand";
                  $runCatQuery=mysqli_query($connect,$showCatQuery);

                  if($runCatQuery) {
                    while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
                      
                       $gatId=$gatData['brand_id'];
                       $gatName=$gatData['brand_name'];
                       $gatPost=$gatData['bPost_number'];

                   ?>

                  <thead>
                    <th><?php echo $serile++; ?></th>
                    <th><?php echo $gatId; ?></th>
                    <th><?php echo $gatName; ?></th>
                    <th><?php echo $gatPost; ?></th>
                                    <td>
                                          <a href="brond_edit.php?edit_id=<?php echo $gatId ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                     <td>
                                          <a href="brond_delete.php?delete_id=<?php echo $gatId ?>" onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                     </td>
                                     <td>
                                      <input type="checkbox" name="checkbox_al[]" value="<?php echo$gatId;?>">
                                    </td>
                  </thead>
                <?php }  } ?>
                </table>
              </form>
                  
                </div>

                
              </div>
              
            </div>

        </div>
    </div>


  <?php 

include("inclued/footer.php");


   ?> 