 <?php 
session_start();
include_once 'Controller/ErrorSettings.php';
?>
<?php

include('Connect/Connect.php');
include ('Controller/Search.php');
?>


<head>
	<meta charset="UTF-8">
</head>
<body>
  請選擇學校：<br>




<?php 
  $mysqli = Connect::conn();
  $search = new Search();
  $school = $search->school();
    if(!empty($school)){
      foreach ($school as $sch){
?>
<div style="margin-left: 25%;" class="school">
	<a  href="index.php?school='<?php echo $sch['region_eg'];?>'" target="_top"><?php echo $sch['region_ch'];?></a>
	<br>
</div>

 	<?php
      }
    }
?> 

</body>

