<?php
include( "../includes/init.php" );
$id = $_GET[ 'id' ];
$row = $Db->get_one( "order", "id=$id" );
$add0=$Db->get_one("add","id=".$row['addid']);
$name=$row['name'];
$hsuser=$row['hsuser'];
$add1=$Db->get_all("add","name='$name'");
$arr=$Db->get_all('case',"name='$name'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>角色管理</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script  src="My97DatePicker/WdatePicker.js"></script>
    <script>
        $(function(){
            $("#select1").change(function(){
                $("#chu").hide();
                var id=$(this).val();
                var shu	=id.split(" ");
                $("#tel").val(shu[0]);
                $("#peo").val(shu[1]);
                $("#addid").val(shu[2]);
            });
            $("#<?php if($row['isfinish']=='是'){ echo "finish";}else if($row['jtime']==''){echo "wait";}else{echo "start";}?>").attr("selected","true");
            $("#select").change(function(){
               if($(this).val()=="1"){
                   $("#ftime").hide();
                   $("#jtime").show();
                   $("#hsuser").show();
                   $("#ftimein").val("");
                   $("#jtimein").val("<?php echo $row['jtime']?>");
                   $("#hs").val("<?php echo $row['hsuser']?>");
               }else if($(this).val()=="2"){
                   $("#ftime").hide();
                   $("#jtime").hide();
                   $("#hsuser").hide();
                   $("#ftimein").val("");
                   $("#jtimein").val("");
                   $("#hs").val("");
               }else{
                   $("#jtime").show();
                   $("#ftime").show();
                   $("#hsuser").show();
                   $("#ftimein").val("<?php echo $row['ftime']?>");
                   $("#jtimein").val("<?php echo $row['jtime']?>");
                   $("#hs").val("<?php echo $row['hsuser']?>");
               }

            });
        })
    </script>
</head>

<body>
<div id="wrap">
    <div class="tab">
        <ul>
            <li><a href="user.inc.php">管理员管理</a>
            </li>
            <li><a href="javascript:;" class="on">添加管理员</a>
            </li>
            <li><a href="user.edit.inc.php">修改密码</a>
            </li>
        </ul>
    </div>
    <div class="main">
        <fieldset>
            <legend>操作提示</legend>
            1：角色名称不能为空；
        </fieldset>
        <form action="order_check.php" method="post" name="myform" class="demoform">
            <table cellspacing="0" class="sub">
                <tr>
                    <td width="100" align="right" >分类：</td>
                    <td>
                        <select id="select">
                            <option id="start" value="1">已派订单</option>
                            <option id="wait" value="2">未派订单</option>
                            <option id="finish" value="3" >已完成订单</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>请选择交易地址信息</td>
                    <td>
                        <select id="select1">
                            <option id="chu" value="<?php echo $add0['tel']?> <?php echo $add0['peo']?>"><?php echo $add0['addname']?>	<?php echo $add0['inf']?></option>
                            <?php
                            foreach($add1 as $v){

                                ?>
                                <option value="<?php echo $v['tel']?> <?php echo $v['peo']?> <?php echo $v['id']?>"><?php echo $v['addname']?>	<?php echo $v['inf']?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td width="100" align="right" >联系人：</td>
                    <td><input name="peo" type="text" id="peo" value="<?php echo $add0['peo']?>"  readonly  size="20"/>
                    </td>
                    <td></td>
                </tr>
                 
                <tr>
                    <td width="100" align="right">用户联系电话：</td>	
                    <td><input name="tel" type="text" id="tel" value="<?php echo $add0['tel']?>" readonly size="20" readonly/>
                    </td>
                    <td></td>
                </tr>
                <tr id="hsuser">
                    <td width="100" align="right" >回收者用户名：</td>
                    <td><input name="hsuser" type="text" id="hs" value="<?php echo $row['hsuser']?>"   size="20"/>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td width="100" align="right">开始交易时间：</td>
                    <td>
                        <input name="stime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px" value="<?php echo $row['stime']?>"/>
                    </td>
                    <td></td>
                </tr>
                <tr id="jtime">
                    <td width="100" align="right">接单时间：</td>
                    <td>
                        <input id="jtimein" name="jtime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px" value="<?php echo $row['jtime']?>"/>
                    </td>
                    <td></td>
                </tr >
                <tr id="ftime">
                    <td width="100" align="right">交易完成时间：</td>
                    <td>
                        <input id="ftimein" name="ftime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px" value="<?php echo $row['ftime']?>"/>
                    </td>
                    <td></td>
                </tr>
                	<tr>
						<td width="100" align="right">预订到达时间：</td>
						<td> 
  					  		<input name="ytime" type="text" id="d241" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="Wdate" style="width:150px" value="<?php echo $row['ytime']?>"/>   
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">交易的物品：</td>
						<td> 
						<?php foreach($arr as $v){?>
					
							<input type="checkbox" name="con[]" value="<?php echo $v['id']?>">
							<?php echo $v['class']?>	<?php echo $v['num']?>kg(个)	<?php echo $v['price']?>元
							<br>
						<?php }?>
						</td>
						<td></td>
					</tr>
                <tr class="bg2">
                    <td></td>
                    <td><input type="submit" class="button" value="提交修改"/>
                        <input type="reset" class="button" value="取消返回"/>
                        <input type="hidden" name="action" value="edit"/>
                        <input type="hidden" name="username" value="<?php echo $row['name'] ?>"/>
                      
                    </td>
                    <input type="hidden" name="gid" id="gid" value="<?php echo $id ?>"/>
                    </td>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>

</html>