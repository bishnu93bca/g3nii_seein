<div class="gray_background">&nbsp;
    <div id="contact-form">
        <div class="medium_break"></div>
        <div class="head_subtext2 text-center text-uppercase">Contact Us</div>

        <div  class="head_microtext text-center small_break"><?php echo $messages;?></div>
        <div class="small_break"></div>

        <?php echo $this->Form->create($contacts,['enctype'=>"multipart/form-data", "class"=>"form-horizontal"]); ?>

        <div class="form-group">
            <label for="name" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8">
                <?php  echo $this->Form->input('name',['type'=>'text', 'label'=>false, 'size'=>'40', 'class'=>'form-control head_subtext', 'placeholder'=> 'Name', 'required'=>true]); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8">
                 <?php echo $this->Form->input('email', ['label'=>false, 'size'=>'40', 'class'=>'form-control head_subtext', 'placeholder'=> 'Email', 'required'=>true]); ?>
             </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8">
                <?php  echo $this->Form->input('mobile', ['label'=>false, 'size'=>'40', 'class'=>'form-control head_subtext', 'placeholder'=> 'Mobile', 'required'=>true]); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="package" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8">
                <?php  echo $this->Form->input('package_id',['options'=>$packages,'default'=>$id, 'label'=>false, 'class'=>'form-control head_subtext', 'placeholder'=> 'Package', 'required'=>true]); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="message" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8">
                <?php  echo $this->Form->input('messages',['type' => 'textarea', 'label'=>false, 'cols'=>'40', 'class'=>'form-control head_subtext', 'placeholder'=> 'Message', 'required'=>true]); ?>
            </div>
        </div>
        
        <div class="form-group">
            <label for="message" class="head_subtext control-label col-sm-2"></label>
            <div class="col-sm-8 text-center">
                  <button class="button1 head_subtext">Submit</button>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
        <div class="small_break"></div>
        &nbsp;

    </div>
</div>