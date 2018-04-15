<?php 
include_once 'Controller/ErrorSettings.php';
?>
<?php
	include('Connect/Connect.php');
	include('Controller/Search.php');
?>


<form name="myForm" method="GET">
<select onChange="renew1(this.value);" >
	<option value="nomal">--請選擇區域--
<?php
  $mysqli = Connect::conn();
  $search = new Search();
  $location = $search->location();
    if(!empty($location)){
      foreach ($location as $locat){
?>
	<option value="<?php echo $locat['id']?>"><?php echo $locat['location_ch']?>
<?php
}
}
?>	
</select>


<select name="county" onchange="submit();" >
	<option value="">--請先由上方選取大學--
</select>

</form>

<?php
  $mysqli = Connect::conn();
  $search = new Search();
  $county_id1 = $search->county_id1();
 // $county_id2 = $search->county_id2();
  //$county_id3 = $search->county_id3();
 // $county_id4 = $search->county_id4();
  //$county_id5 = $search->county_id5();

    
?>
<?php 
if(!empty($county_id1)){ 
	$a = urldecode(json_encode($county_id1,JSON_UNESCAPED_UNICODE));
	//echo $a;
} 
?>


<script>

tw_county = new Array();

var a = <?php echo $a ?>;
var json =JSON.stringify(a);
//var jsonObj =JSON.parse(json);
document.write(json);

var todo = new Array();
todo.push(json);
	console.log(json);


tw_county[1]=["請選擇地區","1"]; 

	
tw_county[2]=["請選擇地區","苗栗縣","臺中市","彰化縣", "南投縣", "雲林縣"];	
tw_county[3]=["請選擇地區","嘉義縣", "嘉義市", "臺南市", "高雄市", "屏東縣"];			
tw_county[4]=["請選擇地區","宜蘭縣", "花蓮縣", "臺東縣"];				
tw_county[5]=["請選擇地區","澎湖縣", "金門連江"];

			
function renew1(index){
	for(var i=0;i<tw_county[index].length;i++)
		document.myForm.county.options[i]=new Option(tw_county[index][i], tw_county[index][i]);	// 設定新選項
	document.myForm.county.length=tw_county[index].length;	// 刪除多餘的選項
}

</script>


