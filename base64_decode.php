<?php
header('Content-Type: text/html; charset=gb2312');
$txt1 = stripslashes(trim( @$_POST['text1']));
$button = @$_POST['button'];
$down = @trim($_GET['down']);
if ($down==1) {
        header("Content-type: command");
	    header("Content-Disposition: attachment; filename=base64_decode.txt");
	    $contents = file_get_contents(basename($_SERVER['PHP_SELF']));
        echo $contents;
        exit;
        }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta content="Base64在线编码解码" name="keywords">
<title>Base64在线编码解码 gb2312</title>
<style>
P {  
FONT-SIZE: 9pt;
line-height:150%;
width:50%;
BORDER:#DDDDDD 1px solid;
padding:5px 5px 5px 5px;text-align:justify;
   }   
A {
text-decoration: none;
font-size:9pt;
color:blue
   }
A:hover {
COLOR: red;
TEXT-DECORATION: underline
   }  
h1 {
font-size:12pt;
text-align:center;
margin-top:30px;
font-family: 微软雅黑, msyh, Tahoma, Helvetica, sans-serif;
   }
.bginput, select {
  color:#000000;
  vertical-align:middle;
  padding:2px;
  border:1px solid #BAC0C3;
  background:#F9FBFD;
}
.button {
  vertical-align:middle;
  padding:1px 3px 0px 3px;
  background:#F3F4F5;
  border:1px solid #B7C0C7;
  margin:0px; 
  width:180px;
}
div {
width:100%;
  }
</style>
</head>
  
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
<tr><td height="20" bgcolor="#CCCCCC" align =right style="padding-right:5px;">
</td></tr><tr><td valign="top" align =center>

<form name="form1" method="post" action="">
<h1>Base64在线编码解码 gb2312 </h1>
<p>
请输入转换内容：
  <textarea name="text1" rows="14" class="bginput" style="width:520px;"><?php echo htmlspecialchars($txt1,ENT_QUOTES);?></textarea>  
  <br>
转换后输出结果：
<textarea rows="14" class="bginput" style="width:520px;"><?php
if($button=="编码") echo base64_encode($txt1);
if($button=="解码") echo mb_convert_encoding(base64_decode($txt1),"gb2312","UTF-8"); 
?>
</textarea>
<br>
</p>
<input type="submit" name="button" class="button" value="编码" />
<input type="submit" name="button" class="button" value="解码" /><br>
</form>
</td></tr>
<tr><td height="10"></td></tr><tr><td height="20" bgcolor="#CCCCCC" align=center></td>
</tr>
</table>
</body>
</html>