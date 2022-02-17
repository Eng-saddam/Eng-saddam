<tr>
    
                          <td><h4><a href="productedit/<?php echo $parameter['id']; ?>"><i class="fa fa-edit"></i></h4></a></td>
                          <td><?php echo $parameter['name']; ?></td>
                          <td><?php echo $parameter['main_cat_name']; ?></td>
                          <td><?php echo $parameter['sub_cat_name']; ?></td>
                          <td><?php echo $parameter['amount']; ?></td>
                          <td><?php echo $parameter['count']; ?></td>
                          <td><?php echo $parameter['views']; ?></td>
                          <td class="align-middle">
							<!-- BEGIN Avatar Group -->
							<div class="avatar-group">
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
                                <?php if(isset($parameter['image2']) && $parameter['image2'] !=''){
                                ?>
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image2']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
                                <?php
                                }
                                ?>
                                <?php if(isset($parameter['image3']) && $parameter['image3'] !=''){
                                ?>
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image3']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
                                <?php
                                }
                                ?>
                                <?php if(isset($parameter['image4']) && $parameter['image4'] !=''){
                                ?>
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image4']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
                                <?php
                                }
                                ?>
                                <?php if(isset($parameter['image5']) && $parameter['image5'] !=''){
                                ?>
								<div class="avatar avatar-circle">
									<div class="avatar-display">
										<img src="<?php echo base_url(); ?>/<?php echo $parameter['image5']; ?>" alt="<?php echo $dictionary[156]; ?>">
									</div>
								</div>
                                <?php
                                }
                                ?>



							</div>
							<!-- END Avatar Group -->
												</td>
                          <td><h4><a href="productdelete/<?php echo $parameter['id']; ?>"><i style="color:#cc0505;" class="fa fa-trash"></i></h4></a></td>
                          
                       
</tr>

