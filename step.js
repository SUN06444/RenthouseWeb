<script type="text/javascript">
			var $step = $("#step");
			var $index = $("#index");

			$step.step({
				index: 0,
				time: 500,
				title: ["填寫房東相關資料", "填寫房屋詳細資訊", "预约完成"]
			});

			$index.text($step.getIndex());

			$("#prevBtn").on("click", function() {
				$step.prevStep();
				$index.text($step.getIndex());
			});

			$("#nextBtn").on("click", function() {
				$step.nextStep();
				$index.text($step.getIndex());
			});

			$("#btn1").on("click", function() {
				$step.toStep(1);
				$index.text($step.getIndex());
			});

			$("#btn2").on("click", function() {
				$step.toStep(2);
				$index.text($step.getIndex());
			});
</script>