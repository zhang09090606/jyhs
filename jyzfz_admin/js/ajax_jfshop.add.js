var vf = $(".demoform").Validform({
	tiptype: 2,
	datatype: {
		"zh2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,

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
				return "图片大小不符合标准";
			}
		},


	}
});
vf.addRule(
	[{
		ele: "[name=name]",
		datatype: "zh1-10",
		nullmsg: "物品名不能为空！",
		sucmsg: "符合标准！",
		errormsg: "物品为1-10个中文英文或数字！",
		tip: "请填写物品名",
		altercss: "hui"
	}, {
		ele: "[name=need]",
		datatype: "n1-11",
		sucmsg: "符合标准！",
		errormsg: "请填写1-10位的数字"
	}, {
		ele: "[name=num]",
		datatype: "n1-11",
		sucmsg: "符合标准！",
		errormsg: "请填写1-10位的数字"
	}, {
		ele: "[name=file]",
		datatype: "isfile",
		sucmsg: "符合标准！",
		nullmsg: "请选择上传的图片",

	}, ]
);
