<html>
<head>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
      <div>
      </div>
  </nav>
<div><center>
<form action="exec.php" method="POST">
  <select name ="com1">
    <option value="show">show</option>
  </select>
  <select name ="com2">
    <option value="disk">disk</option>
    <option value="diskgroup">diskgroup</option>
    <option value="fs">filesystem</option>
    <option value="controller">Controller</option>
    <option value="storage">All storage components</option>
    <option value="version">Running software version</option>
    <option value="dbhomes">Installed oracle database homes</option>
    <option value="dbstorage">Details of ACFS storage setup for the databases</option>
    <option value="databases">Database names</option>
    <option value="db_config_params">db_config_params file</option>
    <option value="asr">ASR configuration</option>
    <option value="env_hw">Environment and Hardware information</option>
    <option value="raidsyncstatus">RAID sync status information</option>
    <option value="core_config_key">Core configuration</option>
  </select>
<input type="submit" value="Details" /></center>
</form>
</div>
</body>
</html>
