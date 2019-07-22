var vf = $(".demoform").Validform({
	tiptype: 2,
	datatype: {
		"zh2-4": /^[\w\W]{2,10}$/,

	}
});

vf.addRule(
	[{
			ele: "[name=name]",
			"datatype": "m",
			nullmsg: "手机号不能为空！",
			sucmsg: "符合标准！",
			errormsg: "手机号格式不符，请输入正确手机号",
			ajaxurl: "user.check.php",
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
			"ele": "[name=sex]",
			"datatype": "*",
			sucmsg: "符合标准！",
			nullmsg: "请选择性别"
		},  {
			ele: "[name=nickname]",
			datatype: "zh2-6",
			sucmsg: "符合标准！",
			ajaxurl: "user.nickname.check.php",
			errormsg: "请填写2-10任意字符的昵称！",
		}, {
			"ele": "[name=isadd]",
			"datatype": "*",
			nullmsg: "请选择是否注册地址"
		},  {
			"ele": "[name=point]",
			"datatype": "n1-11",
			errormsg: "绿化值为1-10位数字"
		},

	]
);
