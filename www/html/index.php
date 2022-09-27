<html>
    <head>
        <title>Test page</title>
    </head>
    <body>
        <h1>PHP test connection</h1>
    </body>
    <?php 
        ini_set('display_errors',1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $dbname = "vagrant";
        $dbuser = "vagrant";
        $dbpass = "vagrantpass"
        $dbhost="10.10.20.15";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Unable to connect to '$dbhost'");
        echo "Connected to $dbhost";
        
        
    ?>

</html>