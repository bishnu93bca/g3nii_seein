<?php 
foreach ($val as $key => $value) {
	$image=json_decode($value['images'],true);
        ?>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8 row_style">
            <div class="row">
              <div class="col-lg-3"><?php echo $this->Html->image("package/".$image[0], array("class"=>"image_crop")); ?></div>
              <div class="col-lg-6">
                <div class="small_break"></div>
                <div class="head_maintext3 text-capitalize"><?php echo $value['package_name']; ?></div>
                <div class="head_subtext2"><?php echo '( '.$value['days'].' Days '.$value['nights'].' Nights )';?></div>
                <div class="head_microtext text-justify">

                    <?php 
                    if(strlen(strip_tags($value['package_description']))> 300){
                      echo substr(strip_tags($value['package_description']),0,300)."...";

                    } else{
                      echo strip_tags($value['package_description'])."...";
                    }
                    ?>
                </div>
                <div class="small_break"></div>
                <div class="row">
                <div class="col-lg-2">
                    <div class="text-center">
                      <?php 
                            echo $this->Html->image("icons/flights.png" ,array("height"=>"16px"));
                            if($value['flights']==0){
                                echo $this->Html->image("icons/forbidden.png" ,array("height"=>"30px", "class"=>"not_available_image"));
                                }?>
                    </div>
                    <div class="icon_text head_microtext text-center">Flights</div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center">
                      <?php 
                        echo $this->Html->image("icons/5star.png" ,array("height"=>"16px"));
                        if($value['hotels']==0){
                          echo $this->Html->image("icons/forbidden.png" ,array("height"=>"30px", "class"=>"not_available_image")); 
                        } ?>
                      </div>
                    <div class="icon_text head_microtext text-center">5-Star</div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center">
                      <?php 
                          echo $this->Html->image("icons/transport.png" ,array("height"=>"16px"));
                          if($value['transfers']==0){
                              echo $this->Html->image("icons/forbidden.png" ,array("height"=>"30px", "class"=>"not_available_image")); 
                            } ?>
                    </div>
                    <div class="icon_text head_microtext text-center">Transfers</div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center">
                      <?php echo $this->Html->image("icons/meals.png" ,array("height"=>"16px"));
                      if($value['meals']==0){
                        echo $this->Html->image("icons/forbidden.png" ,array("height"=>"30px", "class"=>"not_available_image"));
                        } ?>
                    </div>
                    <div class="icon_text head_microtext text-center">Meals</div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center">
                      <?php 
                        echo $this->Html->image("icons/sightseeing.png" ,array("height"=>"16px"));
                         if($value['sight_seeings']==0){
                          echo $this->Html->image("icons/forbidden.png" ,array("height"=>"30px", "class"=>"not_available_image")); 
                          } ?>
                    </div>
                    <div class="icon_text head_microtext text-center">Sightseeing</div>
                </div>

                </div>
                <?php if(!empty($value['budget'])){?>
                <div class="information">
                  <div class="small_break"></div>
                    <div class="head_subtext text-uppercase">Prices Starting</div>
                    <div class="head_maintext2">RS <?php echo $value['budget'];?>/- <span class="small">(For 2 People)</span></div>
                </div>
                <?php }?>
              </div>
              <div class="col-lg-3 text-center">
                <div class="medium_break"></div>
                  <a href="<?php echo BASE_URL.'packages/view/'.$value['id'];?>">
                  <button class="button1 small_break head_subtext">
                  View Details</button></a>
                <a href="<?php echo BASE_URL.'contacts/queryform/'.$value['id'];?>">
                  <button class="button2 small_break head_subtext">
                  Customize Package</button></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-2" id="test"></div>
        </div>
<?php } ?>
<script>
     
        $('.image_crop').fakecrop();
</script></script>