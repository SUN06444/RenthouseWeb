<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<script src="http://www.jq22.com/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript" src="js/popwin.js"></script>

<script>

$(document).ready(function() {

    $("a").on('click' , function(){

		popWin.showWin("450","635","依區域來搜尋學校","http://localhost/renthouse/seletest.php");

	});

});

</script>

</head>

<body>

<!-- 代码 开始 -->

<?php 
    if(!isset($_GET['school'])){
?>
<a href="javascript:void(0)">(請點擊選擇區域)</a>
<?php }else{ ?>
<a style="color: teal;" href="javascript:void(0)">(重新搜索學校?)</a>
<?php
} 
?>




<!-- 代码 结束 -->


</body>
