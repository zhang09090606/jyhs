<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>角色管理</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="css/zzstyle.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/Validform_v5.3.2.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SCZpBSN5mqc9jztqS1wOvl05DGH2w2xf"></script>
</head>

<body>
	<div id="wrap">
		<div class="tab">
			<ul>
				<li><a href="hsuser.inc.php">回收员信息管理</a>
				</li>
				<li><a href="admin.add.php" class="on">添加回收员员</a>
				</li>
			
			</ul>
		</div>
		<div class="main">
			<fieldset>
				<legend>操作提示</legend>
				1：角色名称不能为空；
			</fieldset>
			<form action="hsuser_check.php" method="post" name="myform" class="demoform">
				<table cellspacing="0" class="sub">
					<tr>
						<td width="100" align="right">用户名：</td>
						<td><input type="text" name="username" id="username" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">新密码：</td>
						<td><input type="password" name="pwd" id="password" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">确认密码：</td>
						<td><input type="password" name="repwd" id="password_t" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">真实姓名：</td>
						<td><input type="text" name="name" value="" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">身份证号：</td>
						<td><input type="text" name="idcard" id="idcard" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">星级：</td>
						<td><input type="text" name="star" id="star" size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">电话：</td>
						<td><input type="text" name="tel" id="tel" size="20"/>
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right">是否空闲：</td>
						<td><input type="radio" name="isfree" id="" value="是">是
							<input type="radio" name="isfree" id="" value="否">否
							<td> </td>
					</tr>
					<tr>
						<td width="100" align="right" id="f3"></td>
						<td><input type="text" id="f1" value="" size="20" hidden/>
							<input type="button" value="搜索" id="f2" hidden onclick="searchByStationName();">
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">请在地图上选择位置：</td>
						<td> <input type='button' value='点击开启地图' id='open' size="20"/>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div id='allmap' style='width: 600px; height: 600px; position: relative; display: none'></div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td width="100" align="right">地图上选择的地点为：</td>
						<td><input name="addname" type="text" value="还未选择地址" id="sever_add" readonly>
						</td>
						<td></td>
					</tr>
					<tr class="bg2">
						<td></td>
						<td><input type="submit" class="button" value="添加管理"/>
							<input type="reset" class="button" value="取消返回"/>
							<input type="hidden" name="action" value="add"/>
							<input type="hidden" name="lng" id="lng" value=""/>
							<input type="hidden" name="lat" id="lat" value=""/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</body>
<script type="text/javascript">
	function validate() {
		var sever_add = document.getElementsByName( 'sever_add' )[ 0 ].value;
		if ( isNull( sever_add ) ) {
			alert( '请选择地址' );
			return false;
		}
		return true;
	}

	//判断是否是空  
	function isNull( a ) {
		return ( a == '' || typeof ( a ) == 'undefined' || a == null ) ? true : false;
	}

	document.getElementById( 'open' ).onclick = function () {
		if ( document.getElementById( 'allmap' ).style.display == 'none' ) {
			document.getElementById( 'allmap' ).style.display = 'block';
			$( "#f1" ).show();
			$( "#f2" ).show();
			$( "#f3" ).html( "输入您要查询的地址" );

		} else {
			document.getElementById( 'allmap' ).style.display = 'none';
		}
	}

	var map = new BMap.Map( "allmap" );
	var geoc = new BMap.Geocoder(); //地址解析对象  
	var markersArray = [];
	var geolocation = new BMap.Geolocation();
	var localSearch = new BMap.LocalSearch( map );
	localSearch.enableAutoViewport(); //允许自动调节窗体大小  

	var point = new BMap.Point( 116.331398, 39.897445 );
	map.centerAndZoom( point, 12 ); // 中心点  
	geolocation.getCurrentPosition( function ( r ) {
		if ( this.getStatus() == BMAP_STATUS_SUCCESS ) {
			var mk = new BMap.Marker( r.point );
			map.addOverlay( mk );
			map.panTo( r.point );
			map.enableScrollWheelZoom( true );
		} else {
			alert( 'failed' + this.getStatus() );
		}
	}, {
		enableHighAccuracy: true
	} )
	map.addEventListener( "click", showInfo );


	//清除标识  
	function clearOverlays() {
		if ( markersArray ) {
			for ( i in markersArray ) {
				map.removeOverlay( markersArray[ i ] )
			}
		}
	}
	//地图上标注  
	function addMarker( point ) {
		var marker = new BMap.Marker( point );
		markersArray.push( marker );
		clearOverlays();
		map.addOverlay( marker );
	}
	//点击地图时间处理  
	function showInfo( e ) {
		geoc.getLocation( e.point, function ( rs ) {
				var addComp = rs.addressComponents;
				var address = addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber;
				alert( "地址为" + address );
					map.clearOverlays();
					document.getElementById( 'lng' ).value = e.point.lng;
					document.getElementById( 'lat' ).value = e.point.lat;
					document.getElementById( 'sever_add' ).value = address;
					addMarker( e.point );
				
			} );
	}

	function searchByStationName() {
		map.clearOverlays(); //清空原来的标注  
		var keyword = document.getElementById( "f1" ).value;

		localSearch.setSearchCompleteCallback( function ( searchResult ) {
			var poi = searchResult.getPoi( 0 );
			map.centerAndZoom( poi.point, 13 );
			var marker = new BMap.Marker( new BMap.Point( poi.point.lng, poi.point.lat ) ); // 创建标注，为要查询的地方对应的经纬度  
			map.addOverlay( marker );
			showInfo(poi);
			$( "#lng" ).val( poi.point.lng );
			$( "#lat" ).val( poi.point.lat );
		} );
		localSearch.search( keyword );
	}
</script>
<script src="js/ajax_hsuser.add.js"></script>

</html>