function alls() {
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for (i = 0; i < document.myform.elements.length; i++) {

		f = document.myform.elements[i]; //获取每一个元素

		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if (f.checked == false) {
			f.checked = true;
		}

	}
}

function removeall() {
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for (i = 0; i < document.myform.elements.length; i++) {

		f = document.myform.elements[i]; //获取每一个元素

		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if (f.checked == true) {
			f.checked = false;
		}

	}
}

function invert() {
	//获取表单元素的个数，在获取每个元素的状态进行判断
	for (i = 0; i < document.myform.elements.length; i++) {

		f = document.myform.elements[i]; //获取每一个元素

		//判断每个元素是否选中，选中的元素：checked  选中的状态 true  未选中false
		if (f.checked == true) {
			f.checked = false;
		} else {
			f.checked = true;
		}

	}
}

function dels(url) {

	//$('#ck').is(':checked');  ID 选择器
	t = $("input[type='checkbox']").is(":checked");
	if (t == false) {
		alert('请选择一个要删除的目标');
		return false;
	} else {
		document.myform.action = url; //提交地址
		document.myform.submit(); //模拟提交的按钮	
	}
}
$(document).ready(function (e) {
	$('#title').hide();
	$('#cid').hide();
	$('#date').hide();
});

function test() {
	var se = $('#se').val();
	if (se == 'a') {
		$('#title').show();
		$('#cid').hide();
		$('#date').hide();
	} else if (se == 'b') {
		$('#title').hide();
		$('#date').hide();
		$('#cid').show();
	} else {
		$('#date').hide();
		$('#title').hide();
		$('#cid').hide();
	}
}
