	var vf = $( ".demoform" ).Validform( {
		tiptype: 2,
		datatype: {
			"n1-30": /^[\w\W]{1,30}$/

		}
	} );

	vf.addRule(
		[ {
				ele: "[name=inf]",
				datatype: "n1-30",
				nullmsg: "详细地址不能为空！",
				errormsg: "详细地址为1-30的任意字符",
				sucmsg: "符合标准！"
			}, {
				"ele": "[name=tel]",
				sucmsg: "符合标准！",
				"datatype": "m",
				errormsg: "手机号格式不符，请输入正确手机号"
			},

		]
	);