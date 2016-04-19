<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Hyperwave 服务器函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Hyperwave 服务器函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 53 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>要使用这种函数库，须先到 <a href="/to.asp?url=http://www.hyperwave.com/" tppabs="/to.asp?url=http://www.hyperwave.com/">http://www.hyperwave.com</a> 
              下载函数库，和大多数 PHP 支持的函数库不同，这套是需要收费的函数库，提供下载的试用版为三十天的试用版。
<p>

Hyperwave 是一种信息系统，和一般数据库不同的是，Hyperwave 着重在文件的储存及管理。Hyperwave 将每一笔文件当成一个类，同时也记载着有关该类的 meta 信息，当然 meta 资料可由用户自行扩充。属性的格式为 name/value 这也对映到 form 上的 name=value 信息。比较特别的是这些 name 的名称不必是只一的，也就是 name 可以重覆。每笔类属性都是由换行字符分开，亦即每行代表一笔属性。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-hw_Children.php" alt="function.php?hw_Children">hw_Children</a>:</td><td valign=top>取得子类代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_ChildrenObj.php" alt="function.php?hw_ChildrenObj">hw_ChildrenObj</a>:</td><td valign=top>取得子类的类记录。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Close.php" alt="function.php?hw_Close">hw_Close</a>:</td><td valign=top>关闭 Hyperwave 连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Connect.php" alt="function.php?hw_Connect">hw_Connect</a>:</td><td valign=top>连上 Hyperwave 服务器。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Cp.php" alt="function.php?hw_Cp">hw_Cp</a>:</td><td valign=top>复制类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Deleteobject.php" alt="function.php?hw_Deleteobject">hw_Deleteobject</a>:</td><td valign=top>删除类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocByAnchor.php" alt="function.php?hw_DocByAnchor">hw_DocByAnchor</a>:</td><td valign=top>取得指定锚的文件类代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocByAnchorObj.php" alt="function.php?hw_DocByAnchorObj">hw_DocByAnchorObj</a>:</td><td valign=top>取得指定锚的文件类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocumentAttributes.php" alt="function.php?hw_DocumentAttributes">hw_DocumentAttributes</a>:</td><td valign=top>取得指定文件类属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocumentBodyTag.php" alt="function.php?hw_DocumentBodyTag">hw_DocumentBodyTag</a>:</td><td valign=top>取得指定文件类的文件主体标记。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocumentContent.php" alt="function.php?hw_DocumentContent">hw_DocumentContent</a>:</td><td valign=top>取得指定文件类的内容。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocumentSetContent.php" alt="function.php?hw_DocumentSetContent">hw_DocumentSetContent</a>:</td><td valign=top>重设指定文件类的内容。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_DocumentSize.php" alt="function.php?hw_DocumentSize">hw_DocumentSize</a>:</td><td valign=top>取得文件大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_ErrorMsg.php" alt="function.php?hw_ErrorMsg">hw_ErrorMsg</a>:</td><td valign=top>取得错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_EditText.php" alt="function.php?hw_EditText">hw_EditText</a>:</td><td valign=top>改动文字文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Error.php" alt="function.php?hw_Error">hw_Error</a>:</td><td valign=top>取得错误代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Free_Document.php" alt="function.php?hw_Free_Document">hw_Free_Document</a>:</td><td valign=top>释放文件使用的内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetParents.php" alt="function.php?hw_GetParents">hw_GetParents</a>:</td><td valign=top>取得父类的 ID。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetParentsObj.php" alt="function.php?hw_GetParentsObj">hw_GetParentsObj</a>:</td><td valign=top>取得父类的资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetChildColl.php" alt="function.php?hw_GetChildColl">hw_GetChildColl</a>:</td><td valign=top>取得子类们的 ID。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetChildCollObj.php" alt="function.php?hw_GetChildCollObj">hw_GetChildCollObj</a>:</td><td valign=top>取得子类们的资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetRemote.php" alt="function.php?hw_GetRemote">hw_GetRemote</a>:</td><td valign=top>取得远端文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetRemoteChildren.php" alt="function.php?hw_GetRemoteChildren">hw_GetRemoteChildren</a>:</td><td valign=top>取得远端的子文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetSrcByDestObj.php" alt="function.php?hw_GetSrcByDestObj">hw_GetSrcByDestObj</a>:</td><td valign=top>取得指定目的的文件内容。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetObject.php" alt="function.php?hw_GetObject">hw_GetObject</a>:</td><td valign=top>取得类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetAndLock.php" alt="function.php?hw_GetAndLock">hw_GetAndLock</a>:</td><td valign=top>取得并锁住类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetText.php" alt="function.php?hw_GetText">hw_GetText</a>:</td><td valign=top>取得纯文字文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetObjectByQuery.php" alt="function.php?hw_GetObjectByQuery">hw_GetObjectByQuery</a>:</td><td valign=top>搜寻类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetObjectByQueryObj.php" alt="function.php?hw_GetObjectByQueryObj">hw_GetObjectByQueryObj</a>:</td><td valign=top>搜寻类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetObjectByQueryColl.php" alt="function.php?hw_GetObjectByQueryColl">hw_GetObjectByQueryColl</a>:</td><td valign=top>搜寻聚集类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetObjectByQueryCollObj.php" alt="function.php?hw_GetObjectByQueryCollObj">hw_GetObjectByQueryCollObj</a>:</td><td valign=top>搜寻聚集类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetChildDocColl.php" alt="function.php?hw_GetChildDocColl">hw_GetChildDocColl</a>:</td><td valign=top>取得全部子文件聚集。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetChildDocCollObj.php" alt="function.php?hw_GetChildDocCollObj">hw_GetChildDocCollObj</a>:</td><td valign=top>取得全部子文件聚集记录。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetAnchors.php" alt="function.php?hw_GetAnchors">hw_GetAnchors</a>:</td><td valign=top>取得文件的链接锚。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetAnchorsObj.php" alt="function.php?hw_GetAnchorsObj">hw_GetAnchorsObj</a>:</td><td valign=top>取得文件的链接锚记录。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Mv.php" alt="function.php?hw_Mv">hw_Mv</a>:</td><td valign=top>移动类。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Identify.php" alt="function.php?hw_Identify">hw_Identify</a>:</td><td valign=top>用户身份确认。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_InCollections.php" alt="function.php?hw_InCollections">hw_InCollections</a>:</td><td valign=top>检查类聚集。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Info.php" alt="function.php?hw_Info">hw_Info</a>:</td><td valign=top>连接信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_InsColl.php" alt="function.php?hw_InsColl">hw_InsColl</a>:</td><td valign=top>插入聚集。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_InsDoc.php" alt="function.php?hw_InsDoc">hw_InsDoc</a>:</td><td valign=top>插入文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_InsertDocument.php" alt="function.php?hw_InsertDocument">hw_InsertDocument</a>:</td><td valign=top>上传文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_InsertObject.php" alt="function.php?hw_InsertObject">hw_InsertObject</a>:</td><td valign=top>插入类记录。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Modifyobject.php" alt="function.php?hw_Modifyobject">hw_Modifyobject</a>:</td><td valign=top>修改类记录。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_New_Document.php" alt="function.php?hw_New_Document">hw_New_Document</a>:</td><td valign=top>建立新文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Objrec2Array.php" alt="function.php?hw_Objrec2Array">hw_Objrec2Array</a>:</td><td valign=top>类记录转为数组。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_OutputDocument.php" alt="function.php?hw_OutputDocument">hw_OutputDocument</a>:</td><td valign=top>输出文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_pConnect.php" alt="function.php?hw_pConnect">hw_pConnect</a>:</td><td valign=top>连上 Hyperwave 服务器。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_PipeDocument.php" alt="function.php?hw_PipeDocument">hw_PipeDocument</a>:</td><td valign=top>取得文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Root.php" alt="function.php?hw_Root">hw_Root</a>:</td><td valign=top>取得根类代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Unlock.php" alt="function.php?hw_Unlock">hw_Unlock</a>:</td><td valign=top>取消锁定。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_Who.php" alt="function.php?hw_Who">hw_Who</a>:</td><td valign=top>列出目前用户。</td></tr>
<tr><td align=right valign=top><a href="function.php-hw_GetUsername.php" alt="function.php?hw_GetUsername">hw_GetUsername</a>:</td><td valign=top>目前用户名字。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-18.php" alt="group.php?18">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-20.php" alt="group.php?20">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
