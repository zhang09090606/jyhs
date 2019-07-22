<?php
header('content-type:text/html;charset=utf-8');
session_start();
class MyDb
{
    private $host;//主机地址
    private $user;//mysql的账号
    private $pwd;//mysql的密码
    private $charset;//字符集
    public $dbname;//数据库名字
    private $link;//连接资源

    public function __construct($dbname,$host="qdm190234501.my3w.com",$user="qdm190234501",$pwd="zfz666666",$charset="SET NAMES UTF8")
    {
        //初始化成员变量
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->charset = $charset;
        $this->connect();
    }
    //连接数据库
    private  function connect()
    {
       $this->link = @mysql_connect($this->host,$this->user,$this->pwd)or die($this->get_error()) ;
       $this->query($this->charset);
        mysql_select_db($this->dbname);
    }

    public function query($sql)
    {
        return @mysql_query($sql);
    }
    public function fetch($res)
    {
        return @mysql_fetch_array($res);
    }

    public function rows($res)
    {
	//	echo @mysql_num_rows($res);die;
        return @mysql_num_rows($res);
    }
    /*get_one
   *获取一条查询记录
   *$table  表名
   *$where  条件
   *$coment  字段  username,pwd
   *用法 $row = get_one("admin","id=$id");
   */
   public  function get_one($table,$where,$coment="*")
    {
        $table = self::getTableName($table);
		
        $sql = "select $coment from $table where $where";
		//echo $sql;die;
        $res = $this->query($sql);
        $row = $this->fetch($res);
		return $row;
    }

    public function get_all($tablename,$where="",$column="*",$order="",$limit="",$join="",$group="")
    {
       $res =  $this->select_num($tablename,$where,$column,$order,$join,$limit,$group);
       $arr = array();
        while($row = $this->fetch($res)){
            $arr[] = $row;
        }
        return $arr;
    }

    /**
     * @param $tableName  数据表名字
     * @param string $tablePrifx  表前缀
     * @return string   前缀+表名
     */
    private  function getTableName($tableName,$tablePrifx="lo_")
    {
        return $tablePrifx.$tableName;
    }

    //查询的语句封装
    /**
     * @param $tablename   表名
     * @param string $where  条件
     * @param string $column  字段名
     * @param null $order    排序
     * @param null $join     联合查询
     * @param null $limit    分页
     * @param null $group    分组
     * @return resource
     */
    public function select_num($tablename,$where="",$column="*",$order=null,$join=null,$limit=null,$group=null)
    {
        $tablename = self::getTableName($tablename);
        //$Db->select_num("admin","username='admin'","*","id desc","","1,3","age >=12");
        $sql = "select {$column}  from {$tablename}";

        if($join){
            $sql.=" {$join}";
        }
        if($where){
            $sql.=" where {$where}";
        }
        if($order){
            $sql.=" order by {$order}";
        }
        if($group){
            $sql.=" group by {$group}";
        }
        if($limit){
            $sql.=" limit {$limit}";
        }
   //echo $sql;
        return $this->query($sql);

        //select * from admin
        //select  username,pwd from admin
        //select * from admin where id=1
        //select * from admin  order by id desc
        //select * from admin where id=1 orede by  id desc
        //select * from admin  inner join admin2 on admin.id=admin2.sid
        //select * from admin group by age >=12
        //select * from admin inner join admin2 on admin.id=admin2.sid  where id=1 order by id desc group by age>=12 limit 5
    }

    /**
     * @param $tablename  表名
     * @param $data    数据    以数组的形式存储，数组的key就是我们的字段名,数组的value就是我们获取的变量
     * @param$surl    成功跳转地址
     * @param$eurl    失败跳转地址
     */
    public function insertdata($tablename,$data)
    {
        $tablename = self::getTableName($tablename);
        foreach($data as $key=>$v){
            //判断循环取的值是否为空
            //echo "字段名：".$key."----字段值：".$v;die;
            $v = mysql_real_escape_string($v);//去掉特殊字符
            if(is_null($v)){
                $fields[] = $key;//把提取来的字段名，传递给数组$fields
                $values[] = 'null';//把提取来的值，传递给数组$values
            }else{
                $fields[] = "`".$key."`";//加入重音符防止注入
                $values[] = "'".$v."'";//给字段值[变量加入单引号]
            }
			
//            echo "<pre>";
//            print_r($fields);
        }
        if(empty($fieldList)){

            $fieldList = implode(",",$fields);//拆分数组的字段名部分，变成我们需要的格式
            //echo $fieldList;//`username`,`pwd`
            $valuesList[] = "(".implode(",",$values).")";//将字段值变成数组，后续我们进行拆分
//                echo "<pre>";
//                print_r($valuesList);
//            Array
//            (
//                [0] => ('admin','111111')
//            )
            $sql = "insert into {$tablename}(".$fieldList.")values";
//            echo $sql;inser into admin(`username`,`pwd`)values
            $sql.=implode(",",$valuesList);
           // echo $sql;die;
             $res = $this->query($sql);

			
        }
    }

    /**
     * @param $tableName  表名
     * @param $data       修改的数据
     * @param $where      条件
     * @param$surl    成功跳转地址
     * @param$eurl    失败跳转地址
     * @return resource    $pp->updatedata("admin",$data,"id=2");
     */
    public function updatedata($tableName,$data,$where)
    {
        $tableName = self::getTableName($tableName);
        if(is_array($data)){
            foreach($data as $key=>$v){
				 $v = mysql_real_escape_string($v);//去掉特殊字符
                if(is_null($v)){
                    $dataList[] = $key."=NULL";
                }else{
                    $dataList[] = "`".$key."`='".$v."'";//set username='$username'
                }
            }
            $data = implode(",",$dataList);//username='admin',password='111111'
        }else{
           echo "<script>alert('错误提示：修改的参数必须是数组');history.go(-1)</script>";die;
        }
        $sql="update ".$tableName." set ".$data." where ".$where;
        //echo $sql;die;
       $res =  $this->query($sql);
        return $res;

    }
    public function deletedata($tableName,$where)
    {
        $tableName = self::getTableName($tableName);
        $sql = "delete from {$tableName} where {$where} ";
        $res =  $this->query($sql);
        return $res;
    }

    protected function get_error()
    {
        return "连接失败".mysql_error();
    }
    //消息弹窗
    //$msg  消息
    //$url  跳转地址
    function back_info($msg,$url)
    {
        echo '<script>alert("'.$msg.'");location.href="'.$url.'"</script>';die;
    }
    function back($msg)
    {
        echo '<script>alert("'.$msg.'");javascript:history.go(-1);"</script>';
    }


    //检查表单提交的值，如果是空，就给个提示，否则不是空就返回值
    //$post  表单提交的值  $_POST['username']
    //$msg  提示的消息
    //$url  跳转地址
    //使用  $users = check_str($_POST['username'],"账号不能为空",$url);
    function  check_str($post,$msg,$url)
    {
        $post = trim($post);
        if(empty($post)){
           $this->back_info($msg,$url);
        }else{
            return $post;
        }
    }

    function  check_strs($post,$msg)
    {
        $post = trim($post);
        if(!isset($post)){
            $this->back($msg);
        }else{
            return $post;
        }
    }


    function dates()
    {
        return date("Y-m-d H:i:s");
    }

    //关闭数据库
    public function __destruct()
    {
        mysql_close($this->link);
    }

    //递归删除
    public function getStree($id)
    {
        $sql = "select * from lx_class";
        $res = $this->query($sql);
        while($row = $this->fetch($res)){
            if( $id == $row['parentid']){
                //删除
                $s = "delete from lx_class where id=$id or  id=".$row['id'];
                $r = $this->query($s);
                //递归调用
                $this->getStree($row['id']);
            }
        }
    }
    /**
     *$sourcestr 是要处理的字符串
     *$cutlength 为截取的长度(即字数)
     *用法 $yang->substr_utf8($syw_equ_row["equ_con"],12)
     */
    function substr_utf8($sourcestr,$cutlength)
    {
        $returnstr='';
        $i=0;
        $n=0;
        $str_length=strlen($sourcestr);//字符串的字节数
        while (($n<$cutlength) and ($i<=$str_length))
        {
            $temp_str=substr($sourcestr,$i,1);
            $ascnum=Ord($temp_str);//得到字符串中第$i位字符的ascii码
            if ($ascnum>=224)    //如果ASCII位高与224，
            {
                $returnstr=$returnstr.substr($sourcestr,$i,3); //根据UTF-8编码规范，将3个连续的字符计为单个字符
                $i=$i+3;            //实际Byte计为3
                $n++;            //字串长度计1
            }
            elseif ($ascnum>=192) //如果ASCII位高与192，
            {
                $returnstr=$returnstr.substr($sourcestr,$i,2); //根据UTF-8编码规范，将2个连续的字符计为单个字符
                $i=$i+2;            //实际Byte计为2
                $n++;            //字串长度计1
            }
            elseif ($ascnum>=65 && $ascnum<=90) //如果是大写字母，
            {
                $returnstr=$returnstr.substr($sourcestr,$i,1);
                $i=$i+1;            //实际的Byte数仍计1个
                $n++;            //但考虑整体美观，大写字母计成一个高位字符
            }
            else                //其他情况下，包括小写字母和半角标点符号，
            {
                $returnstr=$returnstr.substr($sourcestr,$i,1);
                $i=$i+1;            //实际的Byte数计1个
                $n=$n+0.5;        //小写字母和半角标点等与半个高位字符宽...
            }
        }
        if ($str_length>$cutlength){
            $returnstr = $returnstr ;//超过长度时在尾处加上省略号
        }
        return $returnstr;

    }


    /*
    *$row 要截取的字符串  $num 超过最大值  $num2要显示多少个
    */
    function sub($row,$num,$num2)
    {
        if(strlen($row)>$num)
        {
            return $this->substr_utf8($row,$num2);
        }else{
            return $row;
        }
    }


    function title_page($table,$row_cid,$row_id,$url)
    {
        //获取上一篇信息
        //echo "select * from ".$table." where cid=".$row_cid." and id>".$row_id." order by id asc";exit;
        $r = mysql_fetch_array(mysql_query("select * from ".$table." where cid=".$row_cid." and id<".$row_id." order by id desc"));

        $page = "";
        if($r<1){
            $page.= "上一篇：已经没有了&nbsp;&nbsp;&nbsp;&nbsp;";
        }else{
            $page.= '上一篇:<a href="'.$url.'?cid='.$r['cid'].'&id='.$r['id'].'">'.$this->sub($r['title'],15,15)."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        }

        //获取下一篇信息
        $r = mysql_fetch_array(mysql_query("select * from ".$table." where cid=".$row_cid." and id>".$row_id." order by id asc"));
        if($r<1){
            $page.= "下一篇：已经没有了&nbsp;&nbsp;&nbsp;&nbsp;";
        }else{
            $page.= '下一篇:<a href="'.$url.'?cid='.$r['cid'].'&id='.$r['id'].'">'.$this->sub($r['title'],15,15)."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        return $page;

    }

    /**
     * @param $tablename  数据表
     * @param $date  时间
     * @return mixed  总计当日的总额
     */
    public function get_zprice($tablename,$where)
    {
        $tableName = self::getTableName($tablename);
        $sql = "select sum(zprice) as zprice from $tableName where $where";

        $res = $this->query($sql);
        $row = $this->fetch($res);
        return $row['zprice']."/元";
    }

    public function get_stree($tablename,$pid=0,&$arr=array())
    {
        $tableName = self::getTableName($tablename);
        $sql = "select * from $tableName where parentid = {$pid}";
        $res = $this->query($sql);
        while($row = $this->fetch($res)){
            $length = count(explode("-",$row['path']));
            $row['paths'] = $length;
            $row['classname'] = str_repeat("->",$length)."|-".$row['classname'];
            $arr[] = $row;
            $this->get_stree($tablename,$row['id'],$arr);
        }
        return $arr;
    }
    /**
     * @param $filname 生成的文件名
     * @param $mode   创建方法
     * @return int   返回访问量
     * echo "你是第".$Db->nums("aaa.php","a+")."次访问本网站的会员";
     */
    public function nums($filname,$mode)
    {
        $file = fopen($filname,$mode);//创建一个文件
        $arr = file($filname);//把文件读入数组中
        $str = empty($arr)?1:$arr[0]+1;//如果数组是空就默认为1，否则把数组的值+1
        file_put_contents($filname,$str);//每次刷新就把之前的结果重新写入
        return $str;
    }

}

//$pp = new MyDb('zx05');
////
//$data = 8989;
//$pp->updatedata("admin",$data,"id=2");

