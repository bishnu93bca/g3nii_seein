<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="icon" href="<?php echo BASE_URL; ?>img/favicon.png" type="image/x-icon" />
        <title>Upindo.com::Admin</title>


        
        <meta property="og:image" content="<?php echo BASE_URL?>img/logo.png">
        <meta property="og:url" content="http://upindo.com">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
            echo $this->Html->css(["bootstrap.min.css", "style", "jquery.rateyo.min", "form_style", "jquery-ui", "font-awesome.min"]);
            echo $this->Html->script(["jquery.min", "bootstrap.min", "jquery.rateyo.min","bootstrap-waitingfor.min", "jquery-ui"]);
        ?>
    </head>
    <body>
        <div class="container-fluid" id="full-width" >
           
            <nav class="navbar-fixed-top navbar_shadow">

                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-header">
                            <a href="<?php echo BASE_URL;?>homes">
                            <?php echo $this->Html->image("logo.png", array("height"=>"60px", "alt"=>"Seeingo logo top"));?></a>
                            
                        </ul>
                        <div class="navbar-form navbar-right">
                            
                            <div class="input-group stylish-input-group">
                                
                                <span id='select'>
                                    
                                </span>
                                <?php echo $this->Form->create('get',array('url' => '#')); ?>
                                <input type="text" class="form-control" name="search"  placeholder="Search" >
                                <span class="input-group-addon">
                                   <button>
                                    <span class="glyphicon glyphicon-search "></span>
                                   </button>
                                </span>
                                <?php echo $this->Form->end();?>

                            </div>
                             
                        </div>
                         
                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>





            <?php echo $this->Flash->render();?>
            <?php echo $this->fetch('content');?>
            <div class="footer">
                

                <div class="medium_break"></div>
                <div class="row">
                     <div class="col-lg-4">
                        <div class="text-left small_padding">
                            <strong class="head_microtext">Accredited to</strong>
                            <div class="small_break"></div>
                            <?php echo $this->Html->image("iata.png", array("height"=>"60px", "alt"=>"IATA Logo"));?>
                            <?php echo $this->Html->image("iato.png", array("height"=>"60px", "alt"=>"IATO Logo"));?>
                            <?php echo $this->Html->image("iaai.png", array("height"=>"60px", "alt"=>"IAAI Logo"));?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-left text-center">
                            <?php echo $this->Html->image("logo.png", array("height"=>"40px", "alt"=>"Seeingo logo footer"));?>
                            <p class="head_microtext">
                                <?php echo $this->Html->link("Home", array("controller"=>"Homes", "action"=>"index")); ?> . 
                                <?php echo $this->Html->link("About Us", array("controller"=>"Contacts", "action"=>"about")); ?> . 
                                <?php echo $this->Html->link("Contact Us", array("controller"=>"Contacts", "action"=>"contacts")); ?> . 
                                <?php echo $this->Html->link("FAQ", array("controller"=>"Contacts", "action"=>"faq")); ?> . 
                                <?php echo $this->Html->link("Enquiry", array("controller"=>"Contacts", "action"=>"queryform")); ?> . 
                                <?php echo $this->Html->link("Agent Login", "http://agents.seeingo.com"); ?>
                            </p>
                            <p class="head_microtext">
                                <?php echo $this->Html->link("Services", array("controller"=>"Contacts", "action"=>"product")); ?> . 
                                <?php echo $this->Html->link("Terms", array("controller"=>"Contacts", "action"=>"terms")); ?> . 
                                <?php echo $this->Html->link("Privacy", array("controller"=>"Contacts", "action"=>"privacy")); ?> . 
                                <?php echo $this->Html->link("Disclaimer", array("controller"=>"Contacts", "action"=>"disclaimer")); ?> . 
                                <?php echo $this->Html->link("Cancellation", array("controller"=>"Contacts", "action"=>"cancel")); ?>
                                
                            <p class="head_microtext">Copyright &copy; 2017</p>
                        </div>
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="text-right small_padding">
                            <strong class="head_microtext">Stay Connected</strong>
                            <p class="head_microtext">Connect with us through our social media pages and stay updated with the latest news</p>

                            <a href="https://www.facebook.com/upindo" target="_blank"><img src = "<?php echo BASE_URL?>img/facebook.png" height="30" alt ="facebook logo" /></a>
                            <a href="https://twitter.com/upindo" target="_blank"><img src = "<?php echo BASE_URL?>img/twitter.png" height="30" alt ="twitter logo" /></a>
                            <a href="https://www.instagram.com/upindo/" target="_blank"><img src = "<?php echo BASE_URL?>img/instagram.png" height="30" alt ="instagram logo" /></a>
                            <a href="https://www.linkedin.com/in/upindo/" target="_blank"><img src = "<?php echo BASE_URL?>img/linkedin.png" height="30" alt ="linkedin logo" /></a>
                        </div>
                    </div>
                </div>

        </div>

    </body>
</html>