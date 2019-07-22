var vf = $(".demoform").Validform({
	tiptype: 2,
	datatype: {
		"zh2-4": /^[\w\W]{2,10}$/,
		"idcard": /^\d{8,18}|[0-9x]{8,18}|[0-9X]{8,18}?$/,
		"star": /^([0-9][0-9]*)+(.[0-9]{1})?$/
	}
});

vf.addRule(
	[{
			ele: "[name=username]",
			datatype: "username",
			nullmsg: "用户名不能为空！",
			sucmsg: "符合标准！",
			errormsg: "用户名为6-18位英文字母和数字！",
			tip: "请填写用户名",
			altercss: "hui"
		}, {
			ele: "[name=pwd]",
			datatype: "password",
			nullmsg: "密码不能为空！",
			sucmsg: "符合标准！",
			errormsg: "密码为6-18位英文字母和数字！"
		}, {
			ele: "[name=repwd]",
			datatype: "*6-18",

			recheck: "pwd",
			sucmsg: "符合标准！",
		}, {
			ele: "[name=name]",
			datatype: "zh2-4",
			nullmsg: "密码不能为空！",
			sucmsg: "符合标准！",
			errormsg: "真实姓名为2-4位汉字！"
		},  {
			ele: "[name=idcard]",
			datatype: "idcard",
			sucmsg: "符合标准！",
		}, {
			ele: "[name=star]",
			datatype: "star",
			sucmsg: "符合标准！",

			errormsg: "请填写带一位小数点的数字！",
		}, {
			"ele": "[name=tel]",
			sucmsg: "符合标准！",
			"datatype": "m",
			errormsg: "手机号格式不符，请输入正确手机号"
		},

		{
			"ele": "[name=isfree]",
			sucmsg: "符合标准！",
			"datatype": "*",
			nullmsg: "请选择是否空闲"
		},
	 	{
			"ele": "[name=addname]",
			nullmsg: "请在地图上选择地址",
		},
	]
);
