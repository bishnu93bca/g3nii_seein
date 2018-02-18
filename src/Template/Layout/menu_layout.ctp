<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Seeingo meta description">
        <meta name="author" content="Seeingo">
        <link rel="icon" href="<?php echo BASE_URL; ?>img/favicon.png" type="image/x-icon" />
        <title>Seeingo.com</title>


        <meta property="og:title" content="Seeing meta description">
        <meta property="og:site_name" content="Seeingo">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Seeing meta description">
        <meta property="og:image" content="/assets/img/og/startbootstrap-logo.jpg">
        <meta property="og:url" content="https://seeingo.com">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
            echo $this->Html->css(["bootstrap.min.css", "custom", "jquery.rateyo.min"]);
            echo $this->Html->script(["jquery.min", "bootstrap.min", "jquery.rateyo.min" ,"bootstrap-waitingfor.min"]);
        ?>
    </head>
    <body>
        <div class="container-fluid" id="full-width" >

            <nav class="navbar navbar-fixed-top">

                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-header">
                  
                            <?php echo $this->Html->image("logo.png", array("height"=>"40px", "alt"=>"Seeingo logo top"));?>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div class="input-group stylish-input-group">
                                
                                    <span class="input-group-addon">
                                        <select>
                                            <option value="1">All</option>
                                            <option value="2">None</option>
                                        </select>
                                        <i class="glyphicon glyphicon-chevron-down"></i>
                                    </span>

                                    <input type="text" class="form-control"  placeholder="Search" >
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <span class="glyphicon glyphicon-search "></span>
                                        </button>  
                                    </span>
                                </div>
                   
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>





            <?php echo $this->Flash->render();?>
            <?php echo $this->fetch('content');?>

            <div class="small_break"></div>
            <div class="text-center"><?php echo $this->Html->image("logo.png", array("height"=>"40px", "alt"=>"Seeingo logo footer"));?></div>
            <div class="small_break"></div>

        </div>

    </body>
</html>