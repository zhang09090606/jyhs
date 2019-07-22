$(function () {
	$("#delete").click(function () {
		var s = "<?php echo $row['class']?>";
		if (s == 1) {
			if (!confirm('该类为一级分类删除会使其子类同时删除，确定删除?')) {
				return false;
			}
		} else {
			if (!confirm('确定删除?')) {
				return false;
			}
		}
	})
})
