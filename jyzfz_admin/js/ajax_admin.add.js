var vf = $(".demoform").Validform({
	tiptype: 2,
});

vf.addRule(
	[{
			ele: "[name=username]",
			datatype: "username",
			nullmsg: "账号不能为空！",
			ajaxurl: "admin.check.php",
			errormsg: "用户名为6-16个英文或数字！",
			tip: "请填写账号",
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
		},

	]
);
$(function () {
	$("#all").click(function () {
		$("#list :checkbox").attr("checked", true);

	});
	$("#other").click(function () {
		$("input#checkall").click();
	})
})
