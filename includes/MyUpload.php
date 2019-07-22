<?php
class Uploads_File
{
	public $new_file_name;
    private $file_size;  //上传文件的大小
    private $file_tmp_name;  //上传文件临时文件存放位置
    private $file_name;  //上传的文件名
    private $file_type;   //上传文件的格式
    private $file_max_size = 2000000;  //允许文件上传最大值
    private $errorNum;   //上传时错误的代码
    private $file_floder;//定义文件上传的存放位置
    private $allow_type = array("image/jpg","image/jpeg","image/gif","image/png","image/bmp","image/x-png","image/pjpeg");
	
    /**
     * @param $file  外部获取的文件名称$_FILES['picurl']
     * @param $dir   文件上传的目录，后面我们可以自动创建
     */
    public function __construct($file,$dir="")
    {
        $this->file_name = $file['name'];//文件名
        $this->file_size = $file['size'];//文件大小
        $this->file_type = $file['type'];//文件类型
        $this->file_tmp_name = $file['tmp_name'];//文件临时上传的位置
        $this->errorNum = $file['error'];//错误代码
        $this->file_floder = $dir;//文件上传的路径
        $this->show();
		
    }

    /**检查上传文件的路径
     * @param $f_path  文件路径
     */
    private function createFloder($f_path)
    {
        if(!file_exists($f_path)){
            mkdir($f_path,777,true);
        }
    }

    /**
     * 判断上传文件过大
     */
    private function is_big()
    {
        if($this->file_size > $this->file_max_size){
            exit("上传文件过大，超过最大限制".$this->file_max_size);
        }
    }

    /**
     * 检查上传文件的类型
     */
    private function check_type()
    {
        if(!in_array($this->file_type,$this->allow_type)){
            exit("上传文件类型不对");
        }
    }

    /**
     * @return mixed  获取文件的类型
     */
    private function get_file_type()
    {
        $arr = explode("/",$this->file_type);//变成数组
        $type = end($arr);//获取数组的最后一个元素的值
        return $type;
    }

    /**
     * @param $filename  文件名称
     * @return string
     */
    private function check_same_file($filename)
    {
        if(file_exists($filename)){
           exit("上传文件以及存在:".$filename);
        }else{
            $this->new_file_name = time().rand(10000,99999).date("Ymd").".".$this->get_file_type();
			
        }
        return $this->new_file_name;
    }

    /**
     * 创建以当前年月日的文件夹名目录
     */
    private function create_mulu()
    {
        $this->createFloder($this->file_floder);
        return $this->file_floder;
    }

    /**
     * @return string 合并文件夹与文件名组成新的上传文件夹名
     */
    private function file_name()
    {
        $name = $this->check_same_file($this->file_name);
        $flode = $this->create_mulu();
        return $flode."/".$name;
    }

    /**
     * @return string 设置上传错误信息
     */
    private function getError()
    {
        $str = "<font color=red>{$this->file_name}</font>";
        switch($this->errorNum)
        {
            case"4"; $str.="没有上传的文件";break;
            case"3"; $str.="文件只有部分被上传";break;
            case"2"; $str.="上传文件超过最大数量";break;
            case"1"; $str.="上传文件超过选项的最大值";break;
            //default; $str="";break;
        }
        if($this->errorNum <> 0){
            exit($str);
        }
    }

    /**
     * @return string 文件移动
     */
    public function upload_file()
    {
        $f_name = $this->file_name();
        move_uploaded_file($this->file_tmp_name,$f_name);
        return $f_name;
    }

    /**
     * 定义自动运行的函数，放入构造函数内
     */
    private function show()
    {
//        echo $this->file_type;
//        echo $this->errorNum;die;
        $this->getError();
        $this->check_type();
        $this->is_big();
        $this->create_mulu();
		$this->upload_file();
		
    }
}