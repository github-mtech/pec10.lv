<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pēc10.lv</title>

    <?
       
        if(isset($plugins))
        {
            foreach($plugins as $plugin)
            {
                if(isset($plugin['css']))
                {
                    foreach($plugin['css'] as $file) echo '<link href="'.$file.'" rel="stylesheet">'; 
                }
            }
        }
       
        if(isset($css))
        {
            foreach($css as $file)   echo '<link href="'.$file.'" rel="stylesheet">'; 
        }
    
    
       
    ?>
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>
<body>
    <div class="header">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6">
                        <ul class="list-unstyled">
                               
                                <li><i class="fa fa-user"></i> You are logged as: Toms Cuvarevs</li>
                        </ul> 
                    </div>
                    
                    <div class="col-md-6 col-sm-6 ">
                        <ul class="list-unstyled language">
                            <li class="active"><a href="#">lv</a></li>
                            <li><a href="#">ru</a></li>
                            <li><a href="#">en</a></li>
                        </ul>
                    </div>
                     
                </div>  
            </div>
        </div>
        
        <div role="navigation" class="menu navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
           <div class="container">
                <div class="navbar-header">
                    
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                    <a class="navbar-brand" href="index.html">
                       Pēc10.lv
                    </a>
                 
               
                 </div>
                
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse ">
                  
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="#">ADD NEW PLACE</a></li>
                        <li><a href="#">ABOUT US</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right facebook">
                        
                        <li><a href="#"><i class="fa fa-facebook"></i> Sing in with facebook</a></li>
                    </ul>
                    
                </div>
             </div>
        </div>
        
        
    </div>
    <div class="web">
        <div class="container">
            
            <div class="col-md-9">
                <div class="row-left">
                    <h3>Par projektu</h3>
                    <div class="tech">
                        <div class="col-md-4">a</div>
                        <div class="col-md-4">b</div>
                        <div class="col-md-4">c</div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="row">
                    <h3>Atbalsta:</h3>
                    <ul class="list-unstyled banner">
                        <li><img src="https://support.na.square-enix.com/images/game_banner_dummy.jpg" class="img-responsive" alt="Responsive image"></li>
                        <li><img src="https://support.na.square-enix.com/images/game_banner_dummy.jpg" class="img-responsive" alt="Responsive image"></li>
                        <li><img src="https://support.na.square-enix.com/images/game_banner_dummy.jpg" class="img-responsive" alt="Responsive image"></li>
                    </ul>
                    
                </div>
            </div>
            
        </div>
    </div>
    <div id="js">
        <?
        
        
            if(isset($plugins))
            {
                foreach($plugins as $plugin)
                {
                    if(isset($plugin['js']))
                    {
                        foreach($plugin['js'] as $file) echo '<script src="'.$file.'"></script>'; 
                    }
                }
            }
        
            
            if(isset($js))
            {
                foreach($js as $file) echo '<script src="'.$file.'"></script>';   
            }
        
        ?>
    </div>
    
    
    
</body>
</html>
