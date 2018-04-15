
<form id="myForm" name="myForm"  action="school.php" method="get">

	<select name="region" id="region" onChange="renew1(this.selectedIndex);"  >
		<option value="nomal">--請選擇區域--
		<option value="1">北部
		<option value="2">中部
		<option value="3">南部
		<option value="4">東部
		<option value="5">離島
	</select>

	<select name="county">
		<option value="">--請先由上方選取大學--
	</select>
	<button type="submit" form="myForm" value="Submit">Submit</button>
</form>


<script>
	tw_county = new Array();
	tw_county[1]=["請選擇地區","台北市","新北市", "桃園市", "基隆市", "新竹縣", "新竹市"];	
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


