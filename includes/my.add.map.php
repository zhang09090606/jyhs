<?php
include( "includes/init.php" );
if(empty($_SESSION['name'])){
    $Db->back_info("请您先登录","login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="css/add.add.css" rel="stylesheet" type="text/css"/>
	
			<script src="js/jquery-1.9.1.min.js"></script>
		<title>添加地图信息</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SCZpBSN5mqc9jztqS1wOvl05DGH2w2xf"></script>
	</head>
<body>
	<div class="head" align="center">
		<font color="#FFFFFF" size="+2">选择您的位置</font>
	</div>
	<form action="my.add.add.php" method="post">
		<div class="search bar7" align="center">
				<input id="f1" type="text" placeholder="输入想查找地址的关键字">
<!--				<button value="搜索" id="f2" onclick="searchByStationName();">搜索</button>-->
		</div>
	<!--	<input style="float: left;margin-left: 10px;" size="18px" type="text" id="f1" value="" placeholder="输入想查找地址的关键字" class="input"  />-->
		<input type="button" class="push_button red" value="搜索" id="f2" onclick="searchByStationName();">

		<div id='allmap' align="center" style='width: 100%; height: 400px; position: relative; display: block'></div>

		<input type="hidden" name="sever_add" id="sever_add" value=""/>
		<input type="hidden" name="lng" id="lng" value=""/>
		<input type="hidden" name="lat" id="lat" value=""/>
		<div id="sumbit" align="center" class="botten">确认</div>
	</form>
<script type="text/javascript">
		$(function(){
			$('#sumbit').click(function(){
				var add=$('#sever_add').val();
				if ( confirm( "确定地址是" + add + "?" ) ) {
					$("form").submit();
				}
			})
		});
	
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
		</body>
		
</html>