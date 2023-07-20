<?php 
include("inclued/header.php");


 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		<h3>Category List</h3>
            		<a  class="btn btn-success" href="addcategory.php">Add New Category</a>
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
                               <form action="all_category_delete.php" method="POST">
            			<table class="table" border="2px">
            			<thead>
            				<th style="background-color: #000;color: #fff">S/N</th>
            				<th style="background-color: #000;color: #fff">DB/SN</th>
            				<th style="background-color: #000;color: #fff">Category Name</th>
            				<th style="background-color: #000;color: #fff">Post Number </th>
                    <th style="background-color: #000;color: #fff">Edit Category </th>
                    <th style="background-color: #000;color: #fff">Delete Category </th>
                    <th style="background-color: #000;color: #fff">
                      <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                    </th>
            			</thead>
            			<?php 

            			$serile=1;
            			$showCatQuery="SELECT * FROM category_table";
            			$runCatQuery=mysqli_query($connect,$showCatQuery);

            			if($runCatQuery) {
            				while ($gatData=mysqli_fetch_assoc($runCatQuery)) {
            					
            				   $gatId=$gatData['category_id'];
            				   $gatName=$gatData['category_name'];
            				   $gatPost=$gatData['post_number'];

            			 ?>

            			<thead>
            				<th><?php echo $serile++; ?></th>
            				<th><?php echo $gatId; ?></th>
            				<th><?php echo $gatName; ?></th>
            				<th><?php echo $gatPost; ?></th>
                                    <td>
                                          <a href="category_edit.php?edit_id=<?php echo $gatId ?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                     <td>
                                          <a href="category_delete.php?delete_id=<?php echo $gatId ?>" onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                     </td>
                                     <td>
                                      <input type="checkbox" name="checkbox_al[]" value="<?php echo$gatData['category_id']; ?>">
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