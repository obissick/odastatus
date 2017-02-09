<!DOCTYPE HTML>
<html>
<head>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">

        <?php
            set_include_path(__DIR__ . '/' . PATH_SEPARATOR . get_include_path());
            include('Net/SSH2.php');

            $server = "";
            $server2 = "";
            $username = "";
            $password = "";
            $command = "oakcli ".$_POST["com1"]." ".$_POST["com2"]." > com.txt";
            $command2 = "/opt/oracle/oak/bin/oakcli ".$_POST["com1"]." ".$_POST["com2"]." > com.txt";

            $ssh = new Net_SSH2($server);
            if (!$ssh->login($username, $password)) {
                exit('Login Failed');
            }
            $ssh2 = new Net_SSH2($server2);
            if (!$ssh2->login($username, $password)) {
                exit('Login Failed');
            }

            $ssh->exec($command);
            echo $ssh->exec("./awk2.sh");

        ?>
    </div>
    <div class="col-sm-8">
    <?php $ssh2->exec($command2);
    echo $ssh2->exec("./awk2.sh"); ?>
  </div>
  </div>
  <form action="index.php">
      <input type="submit" value="Go Back" />
  </form>
</div>
</body>
</html>
