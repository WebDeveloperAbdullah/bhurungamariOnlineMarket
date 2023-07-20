<?php 
include("inclued/header.php");

 

 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		
            		<h3> Seen Massage</h3>
            		<a href="inbox.php" class="btn btn-info">Inbox Box</a>
            		 	
            		<div class="cattable">
                              

                             

                             
                               <form action="all_post_delete.php" method="POST">
            	
                                <table class="table" border="1px solid #000;">
                                  <thead style="background-color: #000;color: #eee">
                                  <th>S/N</th>
                                  
                                  <th width="35%">Massage </th>
                                  <th width="25%"> Date </th>
                                 <th> Replay</th>
                                  <th> View</th>
                                  <th> unSeen</th>
                                 
                                  <th> Delete</th>
                                  <th style="background-color: #000;color: #fff">
                                       <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                                  </th>
                 
                                  </thead>

                        <?php 
                         
                            $serial=1;

                            $limet=3;

                          if(isset($_REQUEST['page'])) {

                            $page=$_REQUEST['page'];
                          }else{
                            $page=1;
                          }

                           $start_from=($page-1)*$limet;
                               
                            
                              $showAllData="SELECT * FROM contact_table WHERE contact_roll ='1'  LIMIT  $start_from, $limet ";

                              $runQuery=mysqli_query($connect,$showAllData);
                              if($runQuery){
                              	while ($gatData=mysqli_fetch_assoc($runQuery)) {
                              	$contact_id=$gatData['contact_id'];
                                $contact_name=$gatData['contact_name'];
                                $contact_email=$gatData['contact_email'];
                                $contact_sub=$gatData['contact_sub'];
                                $contact_sms=$gatData['contact_sms'];
                                $contact_roll=$gatData['contact_roll'];
                                $contact_time=$gatData['contact_time'];

                                ?>
                           <tr>
                              <td><?php echo $serial++;  ?></td>
                              
                              <td><?php echo $contact_sms ; ?></td>
                              
                           
                              <td><?php echo date('F j,Y g:ia',strtotime($contact_time)); ?></td>
                              
                             
                              <td>
                                <a href="replay.php?replay_id=<?php echo $gatData['contact_id'];?>">Replay</a>
                              </td>
                               <td>
                                <a href="view.php?view_id=<?php echo $contact_id;?>">View</a>
                              </td>
                                <td>
                                
                                <a href="unseen.php?seen_id=<?php echo $contact_id;?>">unSeen</a>
                              </td>
                              
                             

                                <td>
                                	<a href="delete_inbox.php?delete_id=<?php echo $contact_id;?>" onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                </td>
                                  <td>
                                      <input type="checkbox" name="checkbox_al[]" value="">
                                    </td>
                                    </tr>
                               <?php } } ?>
                             
                            
                   
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