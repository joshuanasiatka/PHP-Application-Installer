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
                                <strong>Welcome!</strong>
                            </div>
                            <div class="panel-body">
                                <p>Thank you for choosing Bitcraft Service Desk. We appreciate your consideration to have us be your provider as your IT Service Management Application. We put our heart and soul into making this be the best that it can by testing several other ticketing softwares and making one that takes all of the good features of them into something better. </p><p>This was originally just a class project but we took it several steps further to bring you <strong>Bitcraft Service Desk</strong></p>
                                <p><a href="?step=1"><button class="btn btn-primary">Let's get started</button></a></p>
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
