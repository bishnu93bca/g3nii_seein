&nbsp;
<div class="big_break"></div>
<br/><br/>
<div id="home_adventure_images">
    <?php $i=1; foreach ($filtervalues as $key => $value): ?>
    <?php $image=json_decode($value['images'],true);?>
    
    <?php if($i%3 == 1){echo '<div class="row owl-carousel">';} ?>    
            
        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12">
            <div class="img_adventures">
                <div class="hovereffect">
                    <?php echo $this->Html->image("subfilters/".$image[0], array("height"=>"190","width"=>"414","alt"=>$value['value']." image"));?>
                    <a href="<?php echo BASE_URL.'packages/months/'.$value['id'];?>">
                        <div class="overlay">
                            <div class="stylish_semi_text text-capitalize"><?php echo substr(ucwords(strtolower($value['value'])),0,23);?></div>
                            <div class="head_microtext" style="color:white"><?php echo ucwords(strtolower($value['remarks']));?></div>
                            <div class="small_break"></div>
                           <button class="head_microtext month">View More</button>
                        </div>
                    </a>
                </div>
            </div>
         </div>

    <?php if($i%3 == 0 and $i != 0){echo '</div><div class="small_break"></div>';}$i++;?>
    <?php endforeach; ?>
 

     
</div>