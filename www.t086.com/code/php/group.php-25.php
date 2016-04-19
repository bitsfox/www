<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - LDAP Ŀ¼Э�麯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>LDAP Ŀ¼Э�麯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 25 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>LDAP (Lightweight Directory Access Protocol) ��һ��������Ŀ¼��ȡЭ�飬�ṩ�ͻ��Ӹ����������ӵ�Ŀ¼�������С��� RFC 1777 �� RFC 1778 �ж� LDAP �н��������������ɲο� Netscape վ���й� LDAP ��������ϡ�<p>

�� LDAP ��Э��֮�У�����Ӳ��Ŀ¼�ṹ�򵹹�������״�ṹ��LDAP �ĸ�����ȫ���磬��һ�������ڹ��� (countries) ���ʵĲ㼶��֮����ܻ��й�˾ (organization) �Ĳ㼶�������ǲ��� (organizationalUnit)������Ϊ���ˡ��������ļ���ÿ���˶�������ν������ (distinguished name, ��� dn)��dn �������� cn=John Smith,ou=Accounts,o=My Company,c=US��

<p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;����ʹ�õ�&nbsp;connect,&nbsp;bind,&nbsp;search,&nbsp;interpret&nbsp;search<br>//&nbsp;result,&nbsp;close&nbsp;connection&nbsp;�ȵ�&nbsp;LDAP&nbsp;�Ĺ��ܡ�<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"&lt;h3&gt;LDAP&nbsp;��Ѱ����&lt;/h3&gt;"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"������&nbsp;..."</font><font color="#007700">;<br></font><font color="#0000BB">$ds</font><font color="#007700">=</font><font color="#0000BB">ldap_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��������Ч��&nbsp;LDAP&nbsp;������<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"����&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$ds</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br><br>if&nbsp;(</font><font color="#0000BB">$ds</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Binding&nbsp;..."</font><font color="#007700">;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$r</font><font color="#007700">=</font><font color="#0000BB">ldap_bind</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������&nbsp;bind��Ϊֻ������<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"Bind&nbsp;����&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$r</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Searching&nbsp;for&nbsp;(sn=S*)&nbsp;..."</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��Ѱ&nbsp;S&nbsp;��ͷ������<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">=</font><font color="#0000BB">ldap_search</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,</font><font color="#DD0000">"o=My&nbsp;Company,&nbsp;c=US"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"sn=S*"</font><font color="#007700">);&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Search&nbsp;����&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$sr</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"S&nbsp;��ͷ��������&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">ldap_count_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,</font><font color="#0000BB">$sr</font><font color="#007700">).</font><font color="#DD0000">"&nbsp;��&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"ȡ����������&nbsp;...&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$info&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"���Ϸ���&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;��:&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"dn&nbsp;Ϊ:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"dn"</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"cn&nbsp;Ϊ:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"cn"</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"email&nbsp;Ϊ:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"mail"</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"�ر�����"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">ldap_close</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;h4&gt;�޷����ӵ�&nbsp;LDAP&nbsp;������&lt;/h4&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

��ʹ�� LDAP ����������Ҫ���� Web ��������װ LDAP �ͻ��˳��򣬽���������������������ѧ�� ldap-3.3 �׼������� Netscape �� Directory SDK���ɵ�������ַ�һ�����װ<p>

<ul type=disc>
                <li>Netscape <a href="http://developer.netscape.com/tech/directory/" tppabs="/to.asp?url=http://developer.netscape.com/tech/directory/">http://developer.netscape.com/tech/directory/</a> 
                <li>��������ѧ <a href="/to.asp?url=http://www.umich.edu/%7Edirsvcs/ldap/index.html" tppabs="/to.asp?url=http://www.umich.edu/~dirsvcs/ldap/index.html">http://www.umich.edu/~dirsvcs/ldap/index.html</a> 
                <li>OpenLDAP �ƻ� <a href="/to.asp?url=http://www.openldap.com/" tppabs="/to.asp?url=http://www.openldap.com/">http://www.openldap.com</a> 
                <li>LDAP World <a href="http://elvira.innosoft.com/ldapworld" tppabs="/to.asp?url=http://elvira.innosoft.com/ldapworld">http://elvira.innosoft.com/ldapworld</a> 
              </ul>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ldap_add.php" alt="function.php?ldap_add">ldap_add</a>:</td><td valign=top>���� LDAP ��¼����Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_add.php" alt="function.php?ldap_mod_add">ldap_mod_add</a>:</td><td valign=top>���� LDAP ��¼�����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_del.php" alt="function.php?ldap_mod_del">ldap_mod_del</a>:</td><td valign=top>ɾ�� LDAP ��¼�����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_replace.php" alt="function.php?ldap_mod_replace">ldap_mod_replace</a>:</td><td valign=top>�µ� LDAP ��¼ȡ�������ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_bind.php" alt="function.php?ldap_bind">ldap_bind</a>:</td><td valign=top>ϵס LDAP Ŀ¼��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_close.php" alt="function.php?ldap_close">ldap_close</a>:</td><td valign=top>���� LDAP ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_connect.php" alt="function.php?ldap_connect">ldap_connect</a>:</td><td valign=top>���� LDAP ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_count_entries.php" alt="function.php?ldap_count_entries">ldap_count_entries</a>:</td><td valign=top>��Ѱ�������Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_delete.php" alt="function.php?ldap_delete">ldap_delete</a>:</td><td valign=top>ɾ��ָ����Դ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_dn2ufn.php" alt="function.php?ldap_dn2ufn">ldap_dn2ufn</a>:</td><td valign=top>�� dn ת���׶������֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_explode_dn.php" alt="function.php?ldap_explode_dn">ldap_explode_dn</a>:</td><td valign=top>�п� dn ���ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_first_attribute.php" alt="function.php?ldap_first_attribute">ldap_first_attribute</a>:</td><td valign=top>ȡ�õ�һ����Դ�����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_first_entry.php" alt="function.php?ldap_first_entry">ldap_first_entry</a>:</td><td valign=top>ȡ�õ�һ�ʽ�����š�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_free_result.php" alt="function.php?ldap_free_result">ldap_free_result</a>:</td><td valign=top>�ͷŷ��������ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_attributes.php" alt="function.php?ldap_get_attributes">ldap_get_attributes</a>:</td><td valign=top>ȡ�÷������ϵ����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_dn.php" alt="function.php?ldap_get_dn">ldap_get_dn</a>:</td><td valign=top>ȡ�� DN ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_entries.php" alt="function.php?ldap_get_entries">ldap_get_entries</a>:</td><td valign=top>ȡ��ȫ���������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_values.php" alt="function.php?ldap_get_values">ldap_get_values</a>:</td><td valign=top>ȡ��ȫ������ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_list.php" alt="function.php?ldap_list">ldap_list</a>:</td><td valign=top>�г����</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_modify.php" alt="function.php?ldap_modify">ldap_modify</a>:</td><td valign=top>�ı� LDAP ��¼�����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute</a>:</td><td valign=top>ȡ�÷������ϵ��±����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_next_entry.php" alt="function.php?ldap_next_entry">ldap_next_entry</a>:</td><td valign=top>ȡ����һ�ʽ�����š�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_read.php" alt="function.php?ldap_read">ldap_read</a>:</td><td valign=top>ȡ��Ŀǰ���������ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_search.php" alt="function.php?ldap_search">ldap_search</a>:</td><td valign=top>�г���״���</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_unbind.php" alt="function.php?ldap_unbind">ldap_unbind</a>:</td><td valign=top>���� LDAP ���ӡ�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-24.php" alt="group.php?24">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-26.php" alt="group.php?26">��һҳ</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
