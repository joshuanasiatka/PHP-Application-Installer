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
        session_start();
        define( 'ABSPATH', dirname( dirname( __FILE__ ) ) . '/' );
        define('DB_HOST', $_SESSION['DB_HOST']);
        define('DB_USER', $_SESSION['DB_USER']);
        define('DB_PASS', $_SESSION['DB_PASS']);
        define('DB_NAME', $_SESSION['DB_NAME']);
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
                                <strong>Installing Application</strong>
                            </div>
                            <div class="panel-body">
                                <?php
                                    $conf->buildConfig();
                                ?>
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
