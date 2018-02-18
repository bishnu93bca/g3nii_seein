<div class="row">
    <?php $i=1; foreach ($search as $key => $value): ?>
        <?php $image=json_decode($value['images'],true);?>
        




    <div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
                <div class="center_content">
                <div class="hovereffect">
                    <?php echo $this->Html->image("package/".$image[0], array("height"=>"150","width"=>"170", "alt"=>"Seeingo package name"));?>
                    <div class="head_microtext"> <?php echo $value['package_name'];?></div>
                    <div class="overlay">
                        <center><div class="head_minitext destination_name"><?php echo substr(ucwords(strtolower($value['package_name'])),0,17);?></div></center>
                        <center><a href="<?php echo BASE_URL.'packages/view/'.$value['id'];?>"> <div class="head_microtext month">View More</div></a></center>
                    </div>
                </div>
                </div>
            </div>
            <?php if($i==4){echo '</div><div class="row small_break">';$i=0;}$i++;?>
    <?php endforeach ?>
    <?php echo '</div>';?>