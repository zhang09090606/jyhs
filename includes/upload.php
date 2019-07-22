<?php
function pic_water($dst_path,$src_path)
{

    //file_get_contents()获取目标的内容
//echo file_get_contents($dst_path);die;
//imagecreatefromstring(字符串);//从字符串中图像流新建一个图像
    $dst = imagecreatefromstring(file_get_contents($dst_path));
    $src = imagecreatefromstring(file_get_contents($src_path));
//$arr = getimagesize($src_path);
//echo "<pre>";
//print_r($arr);

//list()用于在一次操作中给一组变量赋值
//$arrs = array('black','red','green');
//list($a,,$c)=$arrs;
//echo "a的结果是：".$a."--c的结果是：".$c;

    list($src_w,$src_h) = getimagesize($src_path);
    /*
     * dst_im   目标图像
     * src_im   被拷贝的图像(水印图)
     * dst_x    目标图像的开始x坐标
     * dst_y    目标图像的开始y坐标   x,y同时设置为0则从左上角开始
     * src_x    拷贝图像x坐标
     * src_y    拷贝图像的y坐标  x,y同时设置0，则从左上交开始
     * src_w   (从src x 开始)拷贝的宽度
     * src_h   (从src y 开始)拷贝的高度
     * pct     图像合并程度,取值0-100 数值越大越清晰，数值越小越透明
     */
    imagecopymerge($dst,$src,180,180,0,0,$src_w,$src_h,90);//用于拷贝并合并图像的一部分

//获取原图的宽和高
    list($dst_w,$dst_h,$dst_type)=getimagesize($dst_path);
//echo $dst_w;1024
//echo "<br>";
//echo $dst_h;768
//echo "<br>";
//echo $dst_type;2  判断使用什么图像类型输出
    switch($dst_type)
    {
        case"1";
            header("content-type:image/gif");
            imagegif($dst);
            break;
        case"2";
            header("content-type:image/jpeg");
            imagejpeg($dst);
            break;
        case"3";
            header("content-type:image/png");
            imagepng($dst);
            break;
    }
    imagedestroy($dst);
    imagedestroy($src);

}
 function waterImage($sourceImg,$waterText="",$wTextX=0,$wTextY=0,$waterImg="",$wImgX=0,$wImgY=0,$wImgPct=50){
    if(!file_exists($sourceImg)){
        return false;
    }
    $arrType = array("1"=>"gif","2"=>"jpeg","3"=>"png");
    list($sourceWidth,$sourceHeight,$sourceType) = getimagesize($sourceImg);
    if(!isset($arrType[$sourceType])){
        return false;
    }
    $sourceType = $arrType[$sourceType];
    $funImageCreate = "imagecreatefrom$sourceType";
    $funImage = "image$sourceType";
    $sImg = $funImageCreate($sourceImg);
    if($waterText){
        $white=imagecolorallocate($sImg,255,232,220);//字体颜色
        imagestring($sImg,5,$wTextX,$wTextY,$waterText,$white);
    }
    if($waterImg && file_exists($waterImg)){
        list($wImgWidth,$wImgHeight,$wImgType) = getimagesize($waterImg);
        if(!isset($arrType[$wImgType])){
            return false;
        }
        $sourceType = $arrType[$wImgType];
        $funImageCreate = "imagecreatefrom$sourceType";
        $wImg = $funImageCreate($waterImg);
        imagecopymerge($sImg,$wImg,$wImgX,$wImgY,0,0,$wImgWidth,$wImgHeight,$wImgPct);
        imagedestroy($wImg);
    }
    return $funImage($sImg,$sourceImg);
}
/*if(file_exists('add.php')){
	echo "yes";
}else{
	echo 'not';
}
die;*/
/*$img = "a.jpg";

$type = explode(".",$img);//将字符串拆分成数组

//implode(".",$img);//将数组拆分成字符串

$imgtype = end($type);

print_r($type);
echo '<hr>';	
echo "图片类型：".$imgtype;
*/
/*echo '<pre>';
print_r($_FILES);*/
/*Array
(
    [picurl] => Array
        (
            [name] => 488365146733538594.jpg
            [type] => image/jpeg
            [tmp_name] => C:\Windows\Temp\php2E69.tmp
            [error] => 0
			0  上传文件成功
			1  文件超过大小  
			2  超出文件的上传个数  20默认
			3  文件只有部分被上传
			4  文件没有被上传
			5  文件上传大小为0
            [size] => 110164
        )

)*/

//echo  $_FILES['picurl']['name'];

function uploads($files)
{
	//统一赋值管理
	
	$file = $files;	
	$file_name = $file['name'];
	$file_type = $file['type'];
	$file_tmp_name = $file['tmp_name'];
	$file_error = $file['error'];
	$file_size = $file['size'];
	
	//判断文件上传是否成功
	
	if($file_error > 0){
		exit('错误的代码'.$file_name);
	}else{
		//判断上传文件的类型
		//echo $file_type;
		$a = explode("/",$file_type);
		$type = end($a);
		//echo $type;
		if($type != 'jpg' && $type != 'jpeg' && $type != 'gif' && $type != 'png' && $type != 'bmp'){
			exit('上传文件类型错误：'.$file_name);
		}
		
		//判断上传文件的大小
		// 1k= 1024 字节  1m= 1024k  10m = 10240 1mb = 1024* 1024 
		if($file_size > 2000000){
			exit('上传文件过大<a href="form.html">返回</a>');
		}else{
			//定义文件上传的目录 upload
			$dir = "upload";//定义上传文件存放的位置
			//echo $dir.$file_name; 组合上传文件的路径
			if(file_exists($dir.$file_name)){
				exit($file_name."上传文件存在，无法重命名");
			}else{
				
				$new_file_name = time().rand(10000,99999).date("Ymd").".".$type;//新的文件名
				$upload_dir = $dir.$new_file_name;
                //echo $_SERVER['SERVER_NAME']."/".$upload_dir;die;
//                $Y_path = "{$_SERVER['SERVER_NAME']}."/".$upload_dir";
//                pic_water("$Y_path","b.gif");
				//echo $upload_dir;die;
				//开始移动文件
				move_uploaded_file($file_tmp_name,$upload_dir);
				/*echo '上传图片成功';
				echo '<hr>';
				echo '<img src="'.$upload_dir.'" width="200" height="200">';*/
				return $upload_dir;
			}	
		}	
	}

}



?>