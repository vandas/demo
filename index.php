<?php 

if(strpos($_SERVER['HTTP_HOST'],"food.yzsns.cc") !== false)  //判断域名是否存在 cai-pu.com 
{ 
Header( "HTTP/1.1 301 Moved Permanently" );    
Header( "Location: http://www.yzsns.cc/forum-food-1.html" );
exit;
}

if(strpos($_SERVER['HTTP_HOST'],"3456h.com") !== false) 
{ 
Header( "HTTP/1.1 301 Moved Permanently" );    
Header( "Location: http://www.0125.com/3456.html" );
exit;
}

if(strpos($_SERVER['HTTP_HOST'],"2ryx.com") !== false) 
{ 
Header( "HTTP/1.1 301 Moved Permanently" );    
Header( "Location: http://xyx.0125.com/pic/pic_0_0_1_78_0.html" );
exit;
}


echo "域名未定义";
?>