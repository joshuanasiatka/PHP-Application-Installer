<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bitcraft Service Desk | Installer</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <?php 
        define( 'ABSPATH', dirname( dirname( __FILE__ ) ) . '/' );
        require_once ( ABSPATH . 'sd-includes/sd-functions.php' );
        $conf = new Configure();
    ?>
    <div class="container">
        <div class="row text-center pad-top ">
            <div class="col-md-12">
                <h2>Bitcraft Service Desk<br><small>Installer</small><hr></h2>
            </div>
        </div>
         <div class="row pad-top">
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Database Configuration</strong>
                            </div>
                            <div class="panel-body">
                                <form id='login' class="col-md-12" action='<?php echo $conf->GetSelfScript(); ?>?step=2' name="login_form" method='post' accept-charset='UTF-8'>
                                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                                    <div class="form-group has-feedback">
                                        <p>Database Host: 
                                        <input type='text' name='dbhost' class="form-control" id='dbhost' placeholder="localhost" required /></p>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <p>Database Username: 
                                        <input type='text' name='dbuser' class="form-control" id='dbuser' placeholder="root" required /></p>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <p>Database Password: 
                                        <input type='text' name='dbpass' class="form-control" id='dbpass' placeholder="password"  /></p>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <p>Database Name: 
                                        <input type='text' name='dbname' class="form-control" id='dbname' placeholder="bcl_sd" required /></p>
                                    </div>
                                    <div class="col-xs-12">
                                        <button name="Submit" name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                        <p class="copyright"><br />powered by <a href='http://itsm.bitcraftlabs.net' target="_blank">Bitcraft Service Desk</a></p>
                    </div>
                
                
        </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="/assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="/assets/plugins/bootstrap.js"></script>
   
</body>
</html>
