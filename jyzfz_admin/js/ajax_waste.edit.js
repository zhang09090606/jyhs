var vf = $(".demoform").Validform({
	tiptype: 2,
	datatype: {
		"zh2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
		"*1-16": /^[\w\W]{1,16}$/,
		"price": /^\d{1,7}\.\d{0,1}$|^\d{1,7}$/,
		"*1-50": /^[\w\W]{0,50}$/,
		"*1-11": /^[\w\W]{1,11}$/,
		"isfile": function CheckWorkFile() {
			var file = document.getElementById("file").value;
			if (file.length < 1) {
				return "请选择图片";
			}
			var filepath = $("input[name='file']").val();
			var extStart = filepath.lastIndexOf(".");
			var ext = filepath.substring(extStart, filepath.length).toUpperCase();
			if (ext != ".BMP" && ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
				return "图片限于bmp,png,gif,jpeg,jpg格式";
			}
			var fileSize = document.getElementById('file').files[0];
			if (fileSize.size > 1048576) {
				return "图片大小不符合标准最大不超过1MB";
			}
		}
	}

});

vf.addRule(
	[{
		ele: "[name=name]",
		datatype: "*1-16",
		nullmsg: "物品不能为空！",
		sucmsg: "符合标准！",
		errormsg: "物品为1-16个任意字符！",
		tip: "请填写物品名称",
		altercss: "hui"
	}, {
		ele: "[name=price]",
		datatype: "price",

		errormsg: "价格整数部分为7位以内数字，小数部分最多两位小数！",
		nullmsg: "价格不能为空,如果没有价格填写数字0！",
	}, {
		ele: "[name=inf]",
		datatype: "*0-50",
		errormsg: "提示信息为0-50位的任意字符",
	}, {
		ele: "[name=file]",
		datatype: "isfile",
	}, ]
);
