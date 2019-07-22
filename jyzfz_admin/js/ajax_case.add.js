var vf = $( ".demoform" ).Validform( {

			tiptype: 2,
			datatype: {
				"zh2-4": /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
				"*1-16": /^[\w\W]{1,16}$/,
				"*1-50": /^[\w\W]{0,50}$/,
				"*1-11": /^[\w\W]{1,11}$/,
			},
		} );

		vf.addRule(
			[ {
					ele: "[name=name]",
					datatype: "username",
					nullmsg: "用户名不能为空！",
					ajaxurl: "case.check.php",
					errormsg: "用户名为6-16个英文！",
					tip: "请填写用户名",
					altercss: "hui"
				}, {
					ele: "[name=num]",
					datatype: "n1-10",
					errormsg: "数量为1-10位的数字！",
					nullmsg: "数量不能为空！",
				}, {
					ele: "[name=parentid]",
					nullmsg: "请选择要添加的废品",
				},

			]
		);