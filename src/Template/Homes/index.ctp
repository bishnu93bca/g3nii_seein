
<div id="home_adventure_mood" class="text-uppercase text-center">

    
</div>

<div class="medium_break"></div>
<div id="home_adventure_images">
<?php 
foreach ($themes as $key => $value) {
    
    $id=$value['id'];
    $theme_val[]=$value['value'];
}
for($i=sizeof($theme_val);$i<8;$i++){
    $theme_val[]=$value['value'];
}

?>
    <?php $i=1; foreach ($moods as $key => $value): ?>
    <?php $image=json_decode($value['images'],true);?>
    <?php if($i == 1 or $i==4){echo '<div class="row owl-carousel">';} ?>
        
            
        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
            <div class="img_adventures">
                <div class="hovereffect">
                    <?php echo $this->Html->image("subfilters/".$image[0], array("height"=>"190","width"=>"414","alt"=>"Seeingo package name"));?>
                    <a href="<?php echo BASE_URL.'packages/months/'.$value['id'];?>"><div class="overlay">
                        <div class="stylish_semi_text text-capitalize"><?php echo substr(ucwords(strtolower($value['value'])),0,23);?></div>
                        <div class="head_microtext" style="color:white"><?php echo ucwords(strtolower($value['remarks']));?></div>
                        <div class="small_break"></div>
                       <button class="head_microtext month">View More</button>
                    </div></a>
                </div>
            </div>
         </div>

    <?php if($i==3 or $i==6){echo '</div><div class="small_break"></div>';}$i++;?>
    <?php endforeach; ?>
 

  <center><?php echo $this->Html->link($this->Form->button('View All',['class' => "button head_microtext text-center"]),['controller'=>'packages','action' => 'filtervalue',3],['escape'=>false]);?></center>   
</div>

<div class="big_break"></div>


<div id="home_trip_by_month" class="text-center">
    <div class="background_image" >&nbsp;
        <div class="small_break header text-uppercase head_maintext"><?php echo HOME_TRIP_BY_MONTH; ?></div>
        <div class="small_break header text-uppercase head_subtext"><?php echo HOME_TRIP_BY_MONTH_SUBTEXT; ?></div>
        <div class="medium_break"></div>
        <div class="row row_padding ">


            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                 <a href="<?php echo BASE_URL.'packages/months/8';?>"> 
                    <button class="month head_subtext">January</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/9';?>">
                    <button class="month head_subtext">February</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/10';?>">
                    <button class="month head_subtext">March</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/11';?>">
                    <button class="month head_subtext">April</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/12';?>">
                    <button class="month head_subtext">May</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/13';?>">
                    <button class="month head_subtext">June</button>
                </a>
            </div>
        </div>

        <div class="row small_break row_padding">

            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/14';?>">
                    <button class="month head_subtext">July</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/15';?>">
                    <button class="month head_subtext">August</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/16';?>">
                    <button class="month head_subtext">September</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/17';?>">
                    <button class="month head_subtext">October</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8"> 
                <a href="<?php echo BASE_URL.'packages/months/18';?>">
                    <button class="month head_subtext">November</button>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-xs-8">
                <a href="<?php echo BASE_URL.'packages/months/19';?>">
                    <button class="month head_subtext">December</button>
                </a>
            </div>
        </div>

    </div>
</div>

<div class="big_break"></div>

<div id="home_destinations" class="text-center">
    <div class="head_maintext text-uppercase"><?php echo HOME_DESTINATIONS_HEAD; ?></div>
    <div class="head_subtext"><?php echo HOME_DESTINATIONS_TEXT; ?></div>
    
                                
    <!-- <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-3 col-xs-2"></div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-8">
         
            <div class="input-group stylish-input-group">

                <input type="text" name="search" id="search_val" class="form-control text-center head_subtext"  placeholder="Search" >
                <span class="input-group-addon">
                    <button type="submit" id='submit_search' >
                        <span class="glyphicon glyphicon-search "></span>
                    </button>  
                </span> 
                
            </div>
           
        </div>
        <div class="col-xl-4 col-lg-4 col-md-3 col-xs-2"></div>

    </div> -->


</div>

<div class="medium_break"></div>

<div id="home_destination_blocks" class="text-center">
    <div class="row" id="new_destination"></div>
    <div id='old_destination'>
        <div class="row autoplay slider">
        <?php $i=1; foreach ($destinations as $key => $value): ?>
        <?php $image=json_decode($value['images'],true);?>
        
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-6">
                <div class="center_content">
                <div class="hovereffect">
                    <?php echo $this->Html->image("subfilters/".$image[0], array("height"=>"200", "alt"=>"Seeingo package name"));?>
                    <div class="head_subtext text-uppercase small_break"> <?php echo $value['value'];?></div>
                    <div class="overlay">
                        <div class="medium_break"></div>
                        <center><a href="<?php echo BASE_URL.'packages/months/'.$value['id'];?>"> <div class="head_microtext month">View More</div></a></center>
                    </div>
                </div>
                </div>
            </div>
            
        <?php endforeach ?>
        </div><div class="row small_break"></div>
    </div>

    <div class="medium_break"></div>

    <?php echo $this->Html->link($this->Form->button('View All',['class' => "button head_microtext text-center"]),['controller'=>'packages','action' => 'filtervalue',2],['escape'=>false]);?>
</div>


<div class="medium_break"></div>

<div id="home_best_offers" class="text-center">
    <div class="background_image" >&nbsp;
        <div class="big_break header text-uppercase home_best_offer_text head_maintext"><?php echo HOME_BEST_OFFER; ?></div>
        <div class="home_best_offer_text head_subtext"><?php echo HOME_BEST_OFFER_TEXT; ?></div>
        <div class="medium_break"></div>

        <div class="row owl-carousel">
            <?php foreach ($last_packages as $key => $value):?>
            <?php $image=json_decode($value['images'],true);?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-xs-10">
                <div class="center_content">
                    <div class="home_card">
                        
                        <?php echo $this->Html->image("package/".$image[0], array("width"=>"250","height"=>"200","alt"=>"Seeingo package name"));?>
                        <div class="small_break"></div>
                        <div class="head_subtext text-left"><b><?php echo $value['package_name'];?></b></div>
                        <div class="text-justify head_microtext">
                        <?php 
                         $description=explode(')',$value['itinerary_details']);
                        if(strlen(strip_tags($description[1]))> 300){
                          echo substr(strip_tags($description[1]),0,300)."...";

                        } else{
                            $remaining_length = 300 - strlen(strip_tags($description[1]));
                            $new_lines = $remaining_length / 30;
                            $remaining_new_lines = "";
                            for($i = 0; $i <= $new_lines; $i++){
                                $remaining_new_lines .= "<br/>";
                            }

                            
                          echo strip_tags($description[1])."...".$remaining_new_lines;
                        }
                        ?>
                        </div>
                        <div class="small_break"></div>
                        <?php echo $this->Html->link($this->Form->button('View Details',['class' => "button head_microtext"]),['controller'=>'packages','action' => 'view',$value['id']],['escape'=>false]);?>
                    </div>
                </div>
                </div>
            <?php endforeach ?>

        </div>
        <div class="separator">&nbsp;</div>
    </div>
</div>

<div class="medium_break"></div>

<div id="home_fill_form" class="text-center">
    <div class="big_break header text-uppercase head_maintext"><?php echo HOME_FILL_FORM; ?></div>
    <div class="medium_break"></div>

    <form name="home_contact_form" action="" id="home_contact_form" class="form-horizontal" method="POST">
        <div class="row">
        
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-1"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-5 nopadding">
                <input type="text" name="name" id="name" class="form-group" placeholder="Name" required class="head_microtext" size="30">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-3"></div>
        </div>
        <div class="row">
        
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-1"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-5 nopadding">
                <input type="text" name="phone" id="phone" class="form-group" placeholder="Phone" required  class="head_subtext" size="30">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-3"></div>
        </div>
        <div class="row">
        
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-1"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-5 nopadding">
                <input type="email" name="email"  id="email"class="form-group" placeholder="Email" required  class="head_subtext" size="30">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-3"></div>
        </div>
        <div class="row">
        
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-1"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-5 nopadding">
                <textarea rows="4" name='message' id='message' placeholder="Message" required class="head_subtext"  cols="25"></textarea>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-3"></div>
        </div>
                
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-2"></div>
            <div class="col-xl-4 col-lg-4 col-md-8 col-xs-8"><div  id="message_status"></div></div>
            <div class="col-xl-4 col-lg-4 col-md-2 col-xs-2"></div>
        </div>
        <div class="small_break"></div>
    </form>
    <button  id='submit' class="button">Send</button>


</div>


<div class="medium_break"></div>

<div id="home_background_yellow">
    <div class="row text_compress">

        <div class="col-xl-3 col-lg-3 col-12">
            <div class="head_microtext"><?php echo HOME_CALL_TEXT;?></div>
        </div>
        <div class="col-xl-4 col-lg-4 col-12">
            <ul class="list-inline">
                <li class="glyphicon glyphicon-calendar"></li>
                <li class="head_microtext"><?php echo HOME_OFFICE_ADDRESS;?></li>
            </ul>
        </div>
        <div class="col-xl-2 col-lg-2 col-12">
            <ul class="list-inline">
                <li class="glyphicon glyphicon-phone-alt"></li>
                <li class="head_microtext"><?php echo HOME_LANDLINE;?></li>
            </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-12">
            <ul class="list-inline">
                <li class="glyphicon glyphicon-envelope"></li>
                <li class="head_microtext"><?php echo HOME_EMAIL;?></li>
            </ul>
        </div>

    </div>
</div>
<div id="home_map"></div>

<script>

    function initMap() {

        var seeingo = {lat: <?php echo HOME_LATITUDE; ?>, lng: <?php echo HOME_LONGITUDE; ?>};
        var map = new google.maps.Map(document.getElementById('home_map'), {
            zoom: 11,
            center: seeingo
        });
        var marker = new google.maps.Marker({
            position: seeingo,
            map: map
        });
    };


    $(document).ready(function(){
       $('#new_destination').hide();

         $('#home_contact_form').on('keydown', '#phone', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});


       $("#submit").click(function(){
           
            var name= $('#name').val();
            var phone= $('#phone').val();
            var email= $('#email').val();
            var message= $('#message').val();

            $("#email").focusout(function(){
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                if (filter.test(email)) {
                    emailValid = true;
                }
                else{
                    emailValid = false;
                }
            });
            
            if(name.length >= 3 && phone.length >= 10 && email.length >=8 && message.length >= 5 && emailValid == true){

                $.ajax({
                    type: 'POST',
                    url: "<?php echo BASE_URL;?>websites/message",
                    data: { name: name, phone: phone,email:email,message:message },

                    success: function(response) {
                        $("#message_status").attr("class", "bg-success head_microtext"); 
                        $("#message_status").text("Message sent successfuly. A team member will get in touch");
                    },

                    error: function(response){
                         
                        $("#message_status").attr("class", "bg-danger head_microtext"); 
                        $("#message_status").text("Message sending failure. Please fill all the fields"); 
                    } 
                }); 
            }else{

                if(name.length < 3){
                    var msg_error = "Invalid name. Should be more than 3 characters";
                }
                else if(phone.length < 10){
                    var msg_error = "Invalid phone. Should be more than 9 digits";
                }
                else if(email.length < 10){
                    var msg_error = "Invalid email. Should be more than 7 characters";
                }
                else if(emailValid == false){
                    var msg_error = "Invalid email format";
                }
                else if(message.length < 5){
                    var msg_error = "Invalid message. Should be more than 5 characters";
                }
                else{
                    var msg_error = "Message sending failure.";
                }
                $("#message_status").attr("class", "bg-danger head_microtext"); 
                $("#message_status").text(msg_error); 
            }
             
        });
        $('#submit_search').click(function() {
            var search_val= $('#search_val').val();
            // console.log(search_val);
             $.ajax({
                type: 'POST',
                url: "<?php echo BASE_URL;?>homes/search",
                data: { filter_id: 0, search:search_val},

                success: function(response) {
                    $('#new_destination').show();
                    $('#new_destination').html(response);
                }
            });

           $('#old_destination').hide();
       });

        $('.owl-carousel').owlCarousel({
            loop:false,
            responsive:{
                0:{
                    items:1
                },
                750:{
                    items:2
                },
                1024:{
                    items:3
                }
                
            }
        });


        $('.autoplay').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          cssEase: 'linear',
        });

        
    });
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_KEY;?>&callback=initMap">
</script>
