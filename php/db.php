<?php
   // $servername = "localhost";
    $host = "ec2-54-166-251-173.compute-1.amazonaws.com";
    $user="qfjvfpkrdfgsdc";
    $password= "39065255c1d33631bf6189b29aecf08492db721b757a1a385606ff327974710c";
    $dbname = "d8lld96ssve5u";
    $port = "5432";
    // $username = "root";
    // $password = "";
    // $dbname = "comments";
    // $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed" . mysqli_connect_error());
    // echo 'Connected!';

    // try{
    //     //Set DSN data source name
    //       $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
      
      
    //     //create a pdo instance
    //     $conn = new PDO($dsn, $user, $password);
    //     $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    //     $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   }
    //   catch (PDOException $e) {
    //   echo 'Connection failed: ' . $e->getMessage();
    //   }
    $conn = pg_connect("host=ec2-54-166-251-173.compute-1.amazonaws.com port=5432 dbname=d8lld96ssve5u user=qfjvfpkrdfgsdc password=39065255c1d33631bf6189b29aecf08492db721b757a1a385606ff327974710c");
    if($conn){
        echo "Correct";

    }else{
        echo "Uncorrect";
    }
    // $db = parse_url(getenv('DATABASE_URL'));
    // $db["path"] = ltrim($db["path"], "/");
    // $conn = pg_connect(getenv("DATABASE_URL"));

?>