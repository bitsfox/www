<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - SNMP ���ܺ�����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>SNMP ���ܺ�����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 5 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>SNMP (����Э��, Simple Network Management Protocol) 
              ����Ϊ MIS �������������Ա������Ҫ��������Ҫ���⣬���ķ���ɲο���Է������� SNMP �������Э�� (ISBN: 957-8247-14-1)������ֱ�Ӳο� 
              RFC1089 �ļ��������� <a href="/to.asp?url=http://www.snmp.com/" tppabs="/to.asp?url=http://www.snmp.com/">http://www.snmp.com</a> 
              Ҳ��������ϡ�
              <p> Ҫ�� PHP ��ʹ�� SNMP ���ܺ�������Ҫȷ���Ƿ����ʹ�� SNMP ���ܡ�UNIX ϵͳ��Ҫ�ȼ�װ UCD SNMP ���򣬿��� <a href="http://ucd-snmp.ucdavis.edu/" tppabs="/to.asp?url=http://ucd-snmp.ucdavis.edu/">http://ucd-snmp.ucdavis.edu</a> 
                ȡ�á�Windows NT ��Ҫ�Ȱ�װ SNMP ��ϵͳ����Windows 95/98 ϵ�����޷�ʹ�ñ����ܡ�
              <p>

ֵ��ע����� UNIX ƽ̨�ڱ��� UCD SNMP ����֮ǰ��Ҫ�Ƚ� config.h �ļ��е� NO_ZEROLENGTH_COMMUNITY ���� define ��� 1��Ҳ���ǽ����е����� # �ַ�ɾ����������<p>

<code>define NO_ZEROLENGTH_COMMUNITY 1</code><p>

�����粿�� (segmentation) �й�������Σ����ܾͲ���������ķ�ʽ�ˡ������������±��� UCD SNMP������������ PHP ʱ���� --enable-ucd-snmp-hack ��ѡ�
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-snmpget.php" alt="function.php?snmpget">snmpget</a>:</td><td valign=top>ȡ��ָ����ʶ���롣</td></tr>
<tr><td align=right valign=top><a href="function.php-snmpwalk.php" alt="function.php?snmpwalk">snmpwalk</a>:</td><td valign=top>ȡ�������ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-snmpwalkoid.php" alt="function.php?snmpwalkoid">snmpwalkoid</a>:</td><td valign=top>ȡ�����籾����״��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-snmp_get_quick_print.php" alt="function.php?snmp_get_quick_print">snmp_get_quick_print</a>:</td><td valign=top>ȡ�� UCD �������е� quick_print ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-snmp_set_quick_print.php" alt="function.php?snmp_set_quick_print">snmp_set_quick_print</a>:</td><td valign=top>���� UCD �������е� quick_print ֵ��</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-45.php" alt="group.php?45">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-47.php" alt="group.php?47">��һҳ</a> 
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
