&nbsp;
<div class="medium_break"></div>

<div class="gray_background">
  <!-- <div class="head_subtext2 text-center text-uppercase small_break">TRIP BY MONTH</div> -->
  
     

  
&nbsp;
  <div class="small_break"></div> 
    <div id="packages_list">
      <div id="packages_new"></div>
      <div id="packages_old">
      <?php
        foreach ($packages as $key => $value) {
          $image=json_decode($value['images'],true);
        ?>

        <div class="row lazy">
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
                    if(strlen(strip_tags($value['itinerary_details']))> 300){
                      echo substr(strip_tags($value['itinerary_details']),0,300)."...";

                    } else{
                      echo strip_tags($value['itinerary_details'])."...";
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
                  <a href="<?php echo BASE_URL.'contacts/queryform2/'.$value['id'];?>">
                    <button class="button2 small_break head_subtext">
                    Customize Package</button></a>
                
              </div>
            </div>
          </div>
          <div class="col-lg-2" id="test"></div>
        </div>
        <?php } ?>
        </div>
    </div> 
  <div class="big_break"></div>

  <div class="text-center head_subtext">
    
      <ul id="page_horizontal">
        <li>Navigation</li>
        <?php echo $this->Paginator->numbers(); ?>
      </ul>
      Showing <?php echo $this->Paginator->counter('{{current}} records out of {{count}}. Page {{page}} of {{pages}}');?><br/>
  </div>  


  </div>

</div>

  

<script type="text/javascript">
  $(document).ready(function(){
    $('#packages_new').hide();

    $('.filter').click(function(){
      var val=$(this).val();
      $('#packages_old').hide();
      $.ajax({
        url: "<?php echo BASE_URL;?>filtervalues/ajax/" +val,
        success: function (data) {
           
            $('#packages_new').show();
            $("#packages_new").html(data);
          }
      });
     // console.log(val); 
    });

        // for a filled square thumbnail
        $('.image_crop').fakecrop();
        // for a fixed width/height
        //$('img').fakecrop({fill: false});

        console.log(<?php echo $_GET['page'];?>);
    });

  $(".image_crop").hide();
  $(".image_crop").find("img").load(function(){
        $(".image_crop").show();
    });
</script>

