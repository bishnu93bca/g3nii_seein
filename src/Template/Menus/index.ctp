&nbsp;
    <div class="big_break"></div>
    <br/><br/>
    <div id="menu_heads" class="text-center">

        <div class="row menu_height text-uppercase text-left">
            <div class="col-lg-4"></div>
            <div class="col-lg-2"><u class="head_maintext2"><?php echo $this->Html->link(__('Home'), ['controller' => 'homes', 'action' => 'index'])?></u></div>
            <div class="col-lg-2"><u class="head_maintext2"><?php echo $this->Html->link(__("Contact Us"), ['controller'=>'contacts','action'=>"add",1])?></u></div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row menu_height text-uppercase text-left">
            <div class="col-lg-4"></div>
            <div class="col-lg-2"><u class="head_maintext2"><?php echo $this->Html->link(__('About Us'), ['action' => 'index'])?></u></div>
            <div class="col-lg-2"><u class="head_maintext2"><?php echo $this->Html->link(__('Packages'), ['controller' => 'packages', 'action' => 'index'])?></u></div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row  menu_height text-uppercase text-left">
            <div class="col-lg-4"></div>
            <div class="col-lg-2">
                <dl>
                    <dt><u class="head_maintext2"><?php echo $this->Html->link("Tours", "#")?></u></dt>
                    <dd class="head_maintext2 text-capitalize">Dramatically</dd>
                    <dd class="head_maintext2 text-capitalize">Mycordinate</dd>
                    <dd class="head_maintext2 text-capitalize">Partners</dd>
                </dl>
                </div>
            <div class="col-lg-2"><u class="head_maintext2"><?php echo $this->Html->link("Moods", "#")?></u></div>
            <div class="col-lg-4"></div>
        </div>
    </div>

    <div class="big_break"></div>

    <div id="menu_images" class="text-center">
        <div class="row">
            <div class="col-lg-6"><?php echo $this->Html->image("2.png", array("class"=>"img-responsive nopadding", "alt"=>"Seeingo menu banner footer 1"));?></div>
            <div class="col-lg-6"><?php echo $this->Html->image("2.png", array("class"=>"img-responsive nopadding", "alt"=>"Seeingo menu banner footer 2"));?></div>
        </div>
    </div>

    <div class="big_break"></div>

    <div class="text-center head_subtext"><span class="glyphicon glyphicon-triangle-left"><?php echo $this->Html->link(__('Back'), 'javascript:history.back()') ?></span>
    </div>
