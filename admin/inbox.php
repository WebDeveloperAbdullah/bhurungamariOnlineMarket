<?php 
include("inclued/header.php");

 

 ?>
            <div class="col-9">
            	<div class="min_conteant">
            		
            		<h3> Inbox Massage</h3>
            		<a href="seenBox.php" class="btn btn-info"> Seen Box</a>
            		 	
            		<div class="cattable">
                              

                             

                             
                               <form action="all_post_delete.php" method="POST">
            	
                                <table class="table" border="1px solid #000;">
                                  <thead style="background-color: #000;color: #eee">
                                  <th>S/N</th>
                                  
                                  <th width="35%">Massage </th>
                                  <th width="25%"> Date </th>
                                  <th> Replay</th>
                                  <th> View</th>
                                  <th> Seen</th>
                                 
                                  <th> Delete</th>
                                  <th style="background-color: #000;color: #fff">
                                       <input type="submit" name="delete_m_data" value="Delete_All" class="btn btn-danger">
                                  </th>
                 
                                  </thead>
                                  <?php 
                                  $sereal=1;
                                  $showQuery="SELECT * FROM `contact_table` WHERE contact_roll='0'";
                                  $runQuery=mysqli_query($connect,$showQuery);
                                  $rowCount=mysqli_num_rows($runQuery);
                                  if ($rowCount) {
                                    while ($gatSMS=mysqli_fetch_assoc($runQuery)) {
                                     $gatId=$gatSMS['contact_id'];
                                     $contact_name=$gatSMS['contact_name'];
                                     $contact_email=$gatSMS['contact_email'];
                                     $contact_sub=$gatSMS['contact_sub'];
                                     $contact_sms=$gatSMS['contact_sms'];
                                     $contact_roll=$gatSMS['contact_roll'];
                                     $contact_time=$gatSMS['contact_time'];
                                 


                                   ?>

                                  <td> <?php echo $sereal++; ?> </td>
                                  <td><?php echo $contact_sms; ?></td>
                                  <td><?php echo date('F j,Y g:ia',strtotime($contact_time)); ?></td>

                                <td>
                                <a href="replay.php?replay_id=<?php echo $gatId;?>">Replay</a>
                              </td>
                               <td>
                                <a href="view.php?view_id=<?php echo $gatId;?>">View</a>
                              </td>
                              <td>
                              	
                              	<a href="seenQuery.php?seen_id=<?php echo $gatId;?>">Seen</a>
                              </td>
                             

                                <td>
                                	<a href="delete_inbox.php?delete_id=<?php echo $gatId;?>" onclick="return confirm('ARE YOU SURE?')"><i class="fa fa-trash"></i></a>
                                </td>
                                  <td>
                                      <input type="checkbox" name="checkbox_al[]" value="">
                                    </td>
                                    </tr>
                              <?php }} ?>
                             
                            
                   
                            </table>
                                    </form>
                                  			
                                  		</div>
                                  		

                                <div class="pajination">
                                  
                                


                                </div>


                                  	</div>
                                  	
                                  </div>

                              </div>
                          </div>


 	<?php 

include("inclued/footer.php");


 	 ?>	