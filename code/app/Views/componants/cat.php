<tr>
                          <td><h4><a href="catedit/<?php echo $parameter['id']; ?>"><i class="fa fa-edit"></i></h4></a></td>
                          <td><?php echo $parameter['name']; ?></td>
                          <td><?php echo $parameter['main_cat_name']; ?></td>
                          <td class="align-middle">
							<!-- BEGIN Avatar Group -->
							<div class="avatar-group">
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
							</div>
							<!-- END Avatar Group -->
						  </td>
                          <td><h4><a href="catdelete/<?php echo $parameter['id']; ?>"><i style="color:#cc0505;" class="fa fa-trash"></i></h4></a></td>
                          
                       
</tr>

