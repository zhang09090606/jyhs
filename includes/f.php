<?php
class Page
{
    protected $total;//定义总的记录条数    100条
    protected $num;//定义显示条数          11条
    protected $totalPages;//总页数         100/11得出小数,需要用ceil函数向上取整  ceil(100/11)
    protected $currentPage;//当前页数
    protected $prevPage;//上一页
    protected $nextPage;//下一页
    protected $firstPage;//首页
    protected $endPage;//尾页
    protected $url;//获取当前请求url
    protected $address;//用于获取外部传递参数 &username=lucy

    public function __construct($total,$num,$query_url="")
    {
        $this->total = $total;
        $this->num = $num;
        $this->address = $query_url;
        $this->totalPages = $this->getTotalPages();//总的显示页数
        $this->currentPage = $this->getCurrentPage();//获取当前页数
        //用于输出
        $this->getPrevPage();
        $this->getNextPage();
        $this->getFirstPage();
        $this->getEndPage();
        $this->getUrl();
    }

    //获取计算总的显示页数
    protected function getTotalPages()
    {
        return ceil($this->total/$this->num);
    }
    //获取当前页数
    protected function getCurrentPage()
    {
        if(isset($_GET['page']) && intval($_GET['page'] > 0)){
            $this->currentPage = intval($_GET['page']);
        }else{
            $this->currentPage = 1;
        }
        return $this->currentPage;
    }

    //获取上一页
    protected function getPrevPage()
    {
       $this->prevPage =  $this->currentPage-1;
       if($this->prevPage < 1){
           $this->prevPage = 1;
       }
        return $this->prevPage;
    }
    //下一页
    protected function getNextPage()
    {
        $this->nextPage = $this->currentPage +1;
        if($this->nextPage > $this->totalPages){
            $this->nextPage = $this->totalPages;
        }
        return $this->nextPage;
    }

    //首页
    protected function getFirstPage()
    {
        return $this->firstPage = 1;  //首页 默认为1页
    }

    //尾页
    protected function getEndPage()
    {
        return $this->endPage = $this->totalPages;//尾页 等于 当前最大页数
    }
    //用于外部输出查询的字句
    public function limit()
    {
        return ($this->currentPage-1)*$this->num.",".$this->num;
    }

    public function test()
    {
       //return $this->getTotalPages();
        return $this->limit();
    }

	//获取请求地址
    public function getUrl()
    {
        //利用sever函数获取当前请求地址
       // echo $_SERVER['REQUEST_URI'];///includes/f.php
        $url = $_SERVER['REQUEST_URI'];
        $parse = parse_url($url);//函数可以解析访问的Url,以数组的形式返回
       //http://www.zx05xm.com/includes/f.php?page=1&username=lucy
        //print_r($parse);  array ( [path] => /includes/f.php [query] => page=1&username=lucy )
        //path: 请求地址    query:传递参数
        if(!empty($this->address)){
            $parse['query'] = $this->address;
            //echo $parse['query'];//&lucy=898
            $query = $parse['query'];
        }else{
            //获取传递参数 默认分页点击传递的get  page的值
            $query = isset($parse['query']) ? $parse['query']: false;
        }
        //如果有传递的值我们就把，传递的参数值，进行删除，从新整合
        if($query){
            //parse_str(字符串，[数组])函数，把字符串解析到变量中
            parse_str($query,$query);
            //http://www.zx05xm.com/includes/f.php?page=1&username=lucy
            //print_r($query); Array ( [page] => 1 [username] => lucy )
            unset($query['page']);//删掉请求的page
            //http_bulid_query()//函数作用给输出的关联(或下标)数组，生成一个经过url_encode的请求字符串
            //获取当前请求的地址与传递的参数进行拼接
            $uri = $parse['path']."?".http_build_query($query);
            //http://www.zx05xm.com/includes/f.php?page=1&username=lucy
            // echo $uri; /includes/f.php?username=lucy

        }else{
            //rtrim()
            //参数一  必填项目，要检查的字符串
            //参数二  可选，规定从字符串中删除哪些字符，如果省略，则移除下列所有的字符；
			$uri = rtrim($parse['path'],"?")."?";
        }

        //智能判断是http 请求 还是https
        //http 默认端口号：80    https默认端口号：443
        //获取当前服务访问端口号
        // $_SERVER['SERVER_PORT'];//80
        $protocal = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT']==443) ? "https://" : "http://";
        //echo $protocal;//http://
        switch($_SERVER['SERVER_PORT'])
        {
            case"80":
            case"443":
                //protocal 请求的协议
                //$_SERVER['SERVER_NAME'] 请求的网址
                //uri  当前请求的页面 includes/f.php
                $uri = $protocal.$_SERVER['SERVER_NAME'].$uri;
                break;
            default;
                $uri = $protocal.$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$uri;
                break;
        }
       $this->url = $uri;
    }

    //获取上一页
    protected function getprevUrl()
    {
        return $this->url."&page=".$this->prevPage;
    }
    //获取下一页
    protected function getnextUrl()
    {
        return $this->url."&page=".$this->nextPage;
    }
    protected function getfirstUrl()
    {
        return $this->url."&page=".$this->firstPage;
    }

    protected function getendUrl()
    {
        return $this->url."&page=".$this->endPage;
    }

    //分页输出
    public function PageShow($method="")
    {
        //$method   1  正常输出    2带数字点击    3 下拉菜单
        switch($method)
        {
            case"1";
                $pagenav = '总共'.$this->total."条/".$this->currentPage."页";
                $pagenav.='<a href="'.$this->getfirstUrl().'">[首页]</a>';
                $pagenav.='<a href="'.$this->getprevUrl().'">[上一页]</a>';
                $pagenav.='<a href="'.$this->getnextUrl().'">[下一页]</a>';
                $pagenav.='<a href="'.$this->getendUrl().'">[尾页]</a>';
                return $pagenav;
                break;
            case"2";
                $pagenav = '总共'.$this->total."条/".$this->currentPage."页";
                $pagenav.='<a href="'.$this->getfirstUrl().'">[首页]</a>';
                $pagenav.='<a href="'.$this->getprevUrl().'">[上一页]</a>';
                //防止页面数过多，如果当前页面的总数大于自己预设的值，就选择预设值来显示输出，否则就选择总的页数
                if($this->totalPages >= $this->num){
                    $num = $this->num;
                }else{
                    $num = $this->totalPages;
                }
                for($i=1;$i<=$num;$i++){
                    if($this->currentPage == $i){
                        $pagenav.="[$i]";
                    }else{
                        $pagenav.="<a href='{$this->url}&page={$i}{$this->address}'>[{$i}]</a>";
                    }
                }
                $pagenav.='<a href="'.$this->getnextUrl().'">[下一页]</a>';
                $pagenav.='<a href="'.$this->getendUrl().'">[尾页]</a>';
                return $pagenav;
                break;
            default;
                $pagenav = '总共'.$this->total."条/".$this->currentPage."页";
                $pagenav.='<a href="'.$this->getfirstUrl().'">[首页]</a>';
                $pagenav.='<a href="'.$this->getprevUrl().'">[上一页]</a>';
                $pagenav.='<a href="'.$this->getnextUrl().'">[下一页]</a>';
                $pagenav.='<a href="'.$this->getendUrl().'">[尾页]</a>';
                $pagenav.="跳到<select name='totalpage' size=1 onchange='window.location=\"?page=\"+this.value+\"\"'>\n";
                for($i=1;$i<=$this->totalPages;$i++){
                    if($i==$this->currentPage){
                        $pagenav.="<option value='$i$this->address' selected>$i</option>";
                    }else{
                        $pagenav.="<option value='$i$this->address' >$i</option>";
                    }
                }
                return $pagenav;


        }

    }
	

}

//$link = mysql_connect("localhost","root","123456");
//mysql_query("SET NAMES UTF8");
//mysql_select_db("zx05");
//$sql = "select * from lx_admin";
//$res = mysql_query($sql);
//$count = mysql_num_rows($res);
//
//$url = "&lucy=898";
//$f = new Page($count,3,$url);
//$s = "select * from lx_admin limit ".$f->limit();
//$r =  mysql_query($s);
//while($row = mysql_fetch_array($r)){
//    echo 'id--'.$row['id']."--username".$row['username']."<br>";
//}
//echo $f->PageShow();
//// $f->getUrl();
//?>
