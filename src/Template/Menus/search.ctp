<?php 
$option=['0'=>'All'];
foreach ($filter as $key => $value) {
	$val=json_decode($value,true);
	 $id=$val['id'];
	 $option[$id]=$val['filter'];
}

?>
<form class="navbar-form navbar-right" role="search">

    <div class="input-group stylish-input-group">
    
        <span class="input-group-addon">
            <?php echo $this->Form->input('place',['options'=>$option,'class'=>'input-group','label'=>false])?>
            <!-- <span class="glyphicon glyphicon-chevron-down"></span> -->
        </span>

        <input type="text" name="search" class="form-control"  placeholder="Search" >
        <span class="input-group-addon">
            <button type="submit">
            <span class="glyphicon glyphicon-search "></span>
            </button>  
        </span>
    </div>

</form>