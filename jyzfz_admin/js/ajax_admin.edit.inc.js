var vf = $(".demoform").Validform({
	tiptype: 2,
});

vf.addRule(
	[{
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
		},

	]
);
