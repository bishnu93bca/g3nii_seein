<?php 
  $packages=json_decode($package,true);
    if($packages['flights'] == 1){ $flight_color = "circle_green"; $flight_status = "Flights included";} else{$flight_color = "circle_red"; $flight_status = "No flights";}
    if($packages['hotels'] == 1){ $hotel_color = "circle_green"; $hotel_status = "Hotels included";} else{$hotel_color = "circle_red";  $hotel_status = "No Hotels";}
    if($packages['transfers'] == 1){ $transfer_color = "circle_green"; $transfer_status = "Transfers included";}  else{$transfer_color = "circle_red";  $transfer_status = "No Transfers";}
    if($packages['sight_seeings'] == 1){ $sight_color = "circle_green";  $sight_status = "Sight seeing included";} else{$sight_color = "circle_red";  $sight_status = "No sight seeing";}
    if($packages['meals'] == 1){ $meal_color = "circle_green";  $meal_status = "Meals included";} else{$meal_color = "circle_red";  $meal_status = "No meals";}

?>
<script type="text/javascript">
  $(document).ready(function(){
    var flights='<?php echo $packages['flights'];?>';
    if(flights==1){
        $('#flights').hide();
    }
    var hotels='<?php echo $packages['hotels'];?>';
    if(hotels==1){
        $('#hotels').hide();
    }
    var transfers='<?php echo $packages['transfers'];?>';
    if(transfers==1){
        $('#transfers').hide();
    }
    var sight_seeings='<?php echo $packages['sight_seeings'];?>';
    if(sight_seeings==1){
        $('#seeings').hide();
    }
     var val='<?php echo $packages['meals'];?>';
    if(val==1){
        $('#meals').hide();
    }
  });
</script>
    <div class="gray_background"  id="package_detail_popup">&nbsp;

        <div class="autoplay slider">
          <?php $image = json_decode($packages['images'],true);
            foreach($image as $img){
               echo "<div class='slider_padding text-center'>".$this->Html->image('package/'.$img, array("height"=>"300", "width"=>"470"))."</div>";
            }
           
          ?>

        </div>
        <div class="big_break"   id="top"></div>

        <div class="package_box">
          <div class="head_maintext text-capitalize text-center"><?php echo $packages['package_name']; ?></div>
          <div class="col-lg-12 text-center">
            <center><div id="rateYo"></div></center>
          <div class="head_subtext2"><?php echo '( '.$packages['days'].' Days '.$packages['nights'].' Nights )';?></div>

            <div class="small_break"></div>

            

            <div class="head_microtext text-center">
              <a href="#overview"><button class="button_tags button1">Overview</button></a> . 
              <a href="#trip_highlights"><button class="button_tags button1">Trip Highlights</button></a> . 
              <a href="#itinerary_details"><button class="button_tags button1">Itinerary Details</button></a>
              
            </div>


            

            <div class="icons medium_break">
              <span class="<?php echo $flight_color; ?>" data-toggle="tooltip" title="<?php echo $flight_status;?>"><i class="fa fa-plane fa-lg" aria-hidden="true"></i></span>

              <span class="<?php echo $hotel_color; ?>" data-toggle="tooltip" title="<?php echo $hotel_status;?>"><i class="fa fa-building fa-lg icon_position" aria-hidden="true"></i></span>
              <span class="<?php echo $transfer_color; ?>" data-toggle="tooltip" title="<?php echo $transfer_status;?>"><i class="fa fa-car fa-lg" aria-hidden="true"></i></span>
              <span class="<?php echo $meal_color; ?>" data-toggle="tooltip" title="<?php echo $meal_status;?>"><i class="fa fa-cutlery fa-lg" aria-hidden="true"></i></span>
              <span class="<?php echo $sight_color; ?>" data-toggle="tooltip" title="<?php echo $sight_status;?>"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></span>
            </div>


              <div class="row">
                <div class="col-lg-12">
                  <div id="overview"></div>
                  <div class="medium_break">

                    <span class="head_maintext">Overeview
                    <p class="head_microtext"><a href="#top"> (Back to top)</a></p></span>
                  </div>

                  <div class="head_subtext text-justify small_break"><?php echo $packages['overview'];?></div>

                  <div id="trip_highlights"></div>
                  <div class="big_break">

                    <span class="head_maintext">Trip Highlights
                    <p class="head_microtext"><a href="#top"> (Back to top)</a></p></span>
                  </div>

                  <div class="head_subtext text-justify small_break"><?php echo $packages['trip_highlights'];?></div>

                  <div id="itinerary_details"></div>
                  <div class="big_break">

                    <span class="head_maintext">Itinerary Details
                    <p class="head_microtext"><a href="#top"> (Back to top)</a></p></span>
                  </div>
                  <div class="head_subtext text-justify small_break"><?php echo $packages['itinerary_details'];?></div>
                </div>
                <div class="col-lg-2"></div>
              </div>
              <div class="row">
              <?php if(!empty($packages['budget'])){?>
                <div class="col-lg-12">
                    Prices Starting<br/>
                    <strong>RS <?php echo $packages['budget'];?>/- (For 2 People)</strong>
                </div>
              <?php }?>
              </div>


              <div class="small_break"></div>
              <div class="head_microtext text-center">
              <a href="<?php echo BASE_URL.'contacts/contacts/';?>"><button class="button2 small_break head_subtext">Contacts Us</button></a>
              <a href="<?php echo BASE_URL.'contacts/queryform2/';?>"><button class="button2 small_break head_subtext">Enquiry</button></a>
            </div>

            <div class="medium_break"></div>
            
          </div>
      </div>
    </div> 






<script>
$(document).ready(function(){

    $(function () {

        $("#rateYo").rateYo({
            rating: 3.6,
            starWidth: "20px"
        });

    });



  $('.autoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          cssEase: 'linear',
        });
  $('[data-toggle="tooltip"]').tooltip();  

});


</script>