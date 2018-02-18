<?php foreach ($filtervalues as $value): 
    if($value['filter_id']==1){
      $id=$value['id'];
      $budget[$id]=$value['value'];
    }
    if($value['filter_id']==2){
      $id=$value['id'];
      $duration[$id]=$value['value'];
    }
    if($value['filter_id']==3){
      $id=$value['id'];
      $hotel_choice[$id]=$value['value'];
    }
    if($value['filter_id']==4){
      $id=$value['id'];
      $travel_option[$id]=$value['value'];
    }
    if($value['filter_id']==5){
      $id=$value['id'];
    
      $themes[$id]=$value['value'];
    }
    if($value['filter_id']==6){
      $id=$value['id'];
     
      $places[$id]=$value['value'];
    }

    ?>
<?php endforeach; ?>

<div class="gray_background">
  &nbsp;
<div class="medium_break"></div>
<br/><br/>
  <!-- <div class="head_subtext2 text-center text-uppercase">filters</div>
  <div id="packages_adventure_filters">
      <div class="row row_padding">
        <div class="col-lg-4">
          <dl>
            <dt class="head_subtext slideToggle1">Months <span class="glyphicon glyphicon-menu-down"></span></dt>
            <?php foreach ($budget as $key => $value) {?>
              <dd class="head_microtext slideToggleClass1">
                <input type="radio" name="filters" value="<?php echo $key;?>" id="<?php echo $key;?>" class="filter">
                <label for="<?php echo $key;?>"><?php echo $value;?></label>
              </dd>
            <?php }?>
          </dl>
        </div>
        <div class="col-lg-4">
          <dl>
            <dt class="head_subtext slideToggle2">Destinations <span class="glyphicon glyphicon-menu-down"></span></dt>
            <?php foreach ($duration as $key => $value) {?>
              <dd class="head_microtext slideToggleClass2">
                <input type="radio" name="filters" value="<?php echo $key;?>" id="<?php echo $key.'1';?>" class="filter">
                <label for="<?php echo $key.'1';?>"><?php echo $value;?></label>
              </dd>
            <?php }?>
          </dl>
        </div>
        <div class="col-lg-4">
          <dl>
            <dt class="head_subtext slideToggle">Moods <span class="glyphicon glyphicon-menu-down"></span></dt>
            <?php foreach ($hotel_choice as $key => $value) {?>
              <dd class="head_microtext slideToggleClass">
                <input type="radio" name="filters" value="<?php echo $key;?>" id="<?php echo $key.'2';?>" class="filter">
                <label for="<?php echo $key.'2';?>"><?php echo $value;?></label>
              </dd>
            <?php }?>
          </dl>
        </div>
 
      </div>
     
  </div> -->

 

  <div class="small_break"></div> 
    <div id="packages_list">
      <div id="packages_new"></div>
      <div id="packages_old">
      <?php
        foreach ($search as $key => $value) {
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
                    if(strlen(strip_tags($value['overview']))> 300){
                      echo substr(strip_tags($value['overview']),0,300)."...";

                    } else{
                      echo strip_tags($value['overview'])."...";
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
  <div class="medium_break"></div>
  <div class="text-center head_subtext"><span class="glyphicon glyphicon-triangle-left"><?php echo $this->Html->link("Back",['controller'=>'homes','action'=>'index'],['class'=>'head_microtext']);?></span></div>

</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#packages_new').hide();

    for(i=1; i<=5; i++){
      $('.slideToggleClass'+i).slideToggle();
    }
    

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
    });


        $('.image_crop').fakecrop();

      


    });

  $(".slideToggle1").click(function(){
      $('.slideToggleClass1').slideToggle();
  });
  $(".slideToggle2").click(function(){
      $('.slideToggleClass2').slideToggle();
  });
  $(".slideToggle3").click(function(){
      $('.slideToggleClass3').slideToggle();
  });
  $(".slideToggle4").click(function(){
      $('.slideToggleClass4').slideToggle();
  });
  $(".slideToggle5").click(function(){
      $('.slideToggleClass5').slideToggle();
  });

  $(".image_crop").hide();
  $(".image_crop").find("img").load(function(){
    $(".image_crop").show();
  });

</script>

