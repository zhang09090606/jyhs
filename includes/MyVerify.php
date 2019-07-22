<?php
class MyVerify
{
    protected  $width;
    protected  $height;
    private    $verifyCode;//验证码的字符串   私有
    protected  $verifyNum;//验证码的显示个数
    protected  $verifySessionCode;//验证码存储session的值
    protected  $bgColor;//验证码的背景颜色
    protected  $verifyType;//验证码的类型 1 数字  2 字母  3 混合
    protected  $imgType;//验证码的图片类型
    protected  $fontColor;//验证码文字的颜色
    private    $img;//验证码的返回资源    私有
	
    public function __construct($width=120,$height=24,$sessionCode="ygy",$imgType="jpg",$verifyNum=4,$verifyType=1)
    {
        $this->width = $width;
        $this->height = $height;
        $this->verifySessionCode = $sessionCode;
        $this->imgType = $imgType;
        $this->verifyNum = $verifyNum;
        $this->verifyType = $verifyType;
        $this->verifyCode = $this->createVerifyCode();//获取验证的字符串
    }
    private function createVerifyCode()
    {
        switch($this->verifyType)
        {
            case"1";
                    $str = "0123456789";
                break;

            case"2";
                    $str = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWYXZ";
                break;

            case"3";
                    $str = "123456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWYXZ";
                    $words = str_shuffle($str);//随机打乱字符串中的所有字符串
                    $str = substr($words,0,$this->verifyNum);
                break;
        }
        return $str;
    }
    public function __get($name)
    {
        if($name = "verifyCode"){
            return $this->verifyCode;
        }
    }
    //创建图像
    private function createImg()
    {
        $this->img = imagecreatetruecolor($this->width,$this->height);
    }
    //设置背景颜色
    private function SetbgColor()
    {
        return imagecolorallocate($this->img,0,0,0);
    }
    //设置线的颜色
    private function SetLineColor()
    {
        return imagecolorallocate($this->img,rand(100,255),rand(100,255),rand(100,255));
    }
    //设置填充背景颜色
    private function fillBg()
    {
        imagefill($this->img,0,0,$this->SetbgColor());
    }
    //制作雪花点
    private function fillPix()
    {
        $num = ceil($this->width*$this->height)/25;
        for($i=1;$i<=$num;$i++){
            imagesetpixel($this->img,rand(0,$this->width),rand(0,$this->height),$this->SetLineColor());
        }
    }
    //制作干扰线
    private function fillLine()
    {
        for($i=1;$i<=3;$i++){
            imageline($this->img,rand(1,$this->width),
			rand(1,$this->height),rand(1,$this->width),
			rand(1,$this->height),$this->SetLineColor());
        }
    }
    //图像输出
    private function outPutImg()
    {
        header("content-type:image/".$this->imgType);
        $ftype = "image".$this->imgType;
        $ftype($this->img);
    }
    //在画布向上写要输出的字符串
    private function writeFont()
    {
        $num = "";
        for($i=0;$i<$this->verifyNum;$i++){
            $num.= $this->verifyCode[rand(0,strlen($this->verifyCode)-1)];
        }

        session_start();
        $_SESSION[$this->verifySessionCode] = $num;
        for($j=0;$j<$this->verifyNum;$j++){
            $x = floor($this->width/$this->verifyNum)*$j+2;//算出x轴的每个字母之间的距离，floor向下取整
            $y = rand(0,$this->height-12);
            $bg = imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
            imagechar($this->img,rand(4,5),$x,$y,$num[$j],$bg);
        }
    }
    public function show()
    {
        $this->createImg();//创建画布
        $this->fillBg();//填充背景颜色
        $this->fillPix();//设置雪花点
        $this->fillLine();//设置干扰线
        $this->writeFont();//往画布写字
        $this->outPutImg();//图像输出
    }
    public function __destruct()
    {
        imagedestroy($this->img);
    }
}

$a = new MyVerify(120,24,"ygy","gif",4,3);
echo $a->show();