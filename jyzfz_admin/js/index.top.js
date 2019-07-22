var displayBar = true;

function switchBar(obj)

{

	if (document.all) //IE

	{

		if (displayBar)

		{

			parent.frame.cols = "0,*";

			displayBar = false;

			obj.value = "打开左边菜单";

		} else {

			parent.frame.cols = "210,*";

			displayBar = true;

			obj.value = "关闭左边菜单";

		}

	} else //Firefox 

	{

		if (displayBar)

		{

			self.top.document.getElementById('frame').cols = "0,*";

			displayBar = false;

			obj.value = "打开左边菜单";

		} else {

			self.top.document.getElementById('frame').cols = "210,*";

			displayBar = true;

			obj.value = "关闭左边菜单";

		}

	}

}
