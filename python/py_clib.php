<?php
header("Content-Type:text/html;charset=utf-8");
echo "<center><h2>linux下用C编写python扩展模块</h2></center>";
echo "<center><table width=60% border=0 cellpading=0 cellspacing=0>";
echo "<tr><td><font size=6>一、简介</font></td></tr>";
echo "<tr><td><font size=4>&nbsp;&nbsp;&nbsp;&nbsp;Python是一门功能强大的高级脚本语言，它的强大不仅表现在其自身的功能上，而且还表现在其良好的可扩展性上，正因如此，Python已经开始受到越来越多人的青睐，并且被屡屡成功地应用于各类大型软件系统的开发过程中。<br><br>
与其它普通脚本语言有所不同，Python程序员可以借助Python语言提供的API，使用C或者C++来对Python进行功能性扩展，从而即可以利用Python方便灵活的语法和功能，又可以获得与C或者C++几乎相同的执行性能。执行速度慢是几乎所有脚本语言都具有的共性，也是倍受人们指责的一个重要因素，Python则通过与C语言的有机结合巧妙地解决了这一问题，从而使脚本语言的应用范围得到了很大扩展。<br><br>
在用Python开发实际软件系统时，很多时候都需要使用C/C++来对Python进行扩展。最常见的情况是目前已经存在一个用C编写的库，需要在Python语言中使用该库的某些功能，此时就可以借助Python提供的扩展功能来实现。此外，由于Python从本质上讲还是一种脚本语言，某些功能用Python实现可能很难满足实际软件系统对执行效率的要求，此时也可以借助Python提供的扩展功能，将这些关键代码段用C或者C++实现，从而提供程序的执行性能。<br><br>
本文主要介绍Python提供的C语言扩展接口，以及如何使用这些接口和C/C++语言来对Python进行功能性扩展，并辅以具体的实例讲述如何实现Python的功能扩展。<br><br></pre></font></td></tr>";
echo "<tr><td><font size=6>二、Python的C语言接口</font></td></tr>";
echo "<tr><td><font size=4>Python是用C语言实现的一种脚本语言，本身具有优良的开放性和可扩展性，并提供了方便灵活的应用程序接口(API)，从而使得C/C++程序员能够在各个级别上对Python解释器的功能进行扩展。在使用C/C++对Python进行功能扩展之前，必须首先掌握Python解释所提供的C语言接口。<br><br>
</font></td></tr>";
echo "<tr><td><font size=5>2.1 Python对象(PyObject)</font></td></tr>";
echo "<tr><td><font size=4><br>Python是一门面向对象的脚本语言，所有的对象在Python解释器中都被表示成PyObject，PyObject结构包含Python对象的所有成员指针，并且对Python对象的类型信息和引用计数进行维护。在进行Python的扩展编程时，一旦要在C或者C++中对Python对象进行处理，就意味着要维护一个PyObject结构。
<br><br>在Python的C语言扩展接口中，大部分函数都有一个或者多个参数为PyObject指针类型，并且返回值也大都为PyObject指针。<br><br>
</font></td></tr>";
echo "<tr><td><font size=5>2.2 引用计数</font></td></tr>";
echo "<tr><td><font size=4><br>为了简化内存管理，Python通过引用计数机制实现了自动的垃圾回收功能，Python中的每个对象都有一个引用计数，用来计数该对象在不同场所分别被引用了多少次。每当引用一次Python对象，相应的引用计数就增1，每当消毁一次Python对象，则相应的引用就减1，只有当引用计数为零时，才真正从内存中删除Python对象。<br><br>
下面的例子说明了Python解释器如何利用引用计数来对Pyhon对象进行管理：<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;例1:refcount.py<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class refcount:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# etc.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1 = refcount() # 引用计数为1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r2 = r1         # 引用计数为2<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;del(r1)         # 引用计数为1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;del(r2)         # 引用计数为0，删除对象<br><br>
/C++中处理Python对象时，对引用计数进行正确的维护是一个关键问题，处理不好将很容易产生内存泄漏。Python的C语言接口提供了一些宏来对引用计数进行维护，最常见的是用Py_INCREF()来增加使Python对象的引用计数增1，用Py_DECREF()来使Python对象的引用计数减1。<br><br></font></td></tr>";
echo "<tr><td><font size=5>2.3 数据类型</font></td></tr>";
echo "<tr><td><font size=4><br>Python定义了六种数据类型：整型、浮点型、字符串、元组、列表和字典，在使用C语言对Python进行功能扩展时，首先要了解如何在C和Python的数据类型间进行转化。<br><br></font></td></tr>";
echo "<tr><td><font size=4><strong>2.3.1 整型、浮点型和字符串</strong></font></td></tr>";
echo "<tr><td><font size=4><br>在Python的C语言扩展中要用到整型、浮点型和字符串这三种数据类型时相对比较简单，只需要知道如何生成和维护它们就可以了。下面的例子给出了如何在C语言中使用Python的这三种数据类型：<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;例2：typeifs.c
&nbsp;&nbsp;&nbsp;&nbsp;// build an integer<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pInt = Py_BuildValue('i', 2003);<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyInt_Check(pInt));<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i = PyInt_AsLong(pInt);<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pInt);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// build a float<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pFloat = Py_BuildValue('f', 3.14f);<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyFloat_Check(pFloat));<br>
&nbsp;&nbsp;&nbsp;&nbsp;float f = PyFloat_AsDouble(pFloat);<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pFloat);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// build a string<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pString = Py_BuildValue('s', 'Python');<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyString_Check(pString);<br>
&nbsp;&nbsp;&nbsp;&nbsp;int nLen = PyString_Size(pString);<br>
&nbsp;&nbsp;&nbsp;&nbsp;char* s = PyString_AsString(pString);<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pString);<br><br></font></td></tr>";
echo "<tr><td><font size=4><strong>2.3.2 元组</strong></font></td></tr>";
echo "<tr><td><font size=4><br>Python语言中的元组是一个长度固定的数组，当Python解释器调用C语言扩展中的方法时，所有非关键字(non-keyword)参数都以元组方式进行传递。下面的例子示范了如何在C语言中使用Python的元组类型：<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;例3：typetuple.c
&nbsp;&nbsp;&nbsp;&nbsp;// create the tuple<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pTuple = PyTuple_New(3);<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyTuple_Check(pTuple));<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyTuple_Size(pTuple) == 3);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// set the item<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyTuple_SetItem(pTuple, 0, Py_BuildValue('i', 2003));<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyTuple_SetItem(pTuple, 1, Py_BuildValue('f', 3.14f));<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyTuple_SetItem(pTuple, 2, Py_BuildValue('s', 'Python'));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// parse tuple items<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;<br>
&nbsp;&nbsp;&nbsp;&nbsp;float f;<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *s;<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!PyArg_ParseTuple(pTuple, 'ifs', &i, &f, &s))<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PyErr_SetString(PyExc_TypeError, 'invalid parameter');<br>
&nbsp;&nbsp;&nbsp;&nbsp;// cleanup<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pTuple);<br><br></font></td></tr>";
echo "<tr><td><font size=4><strong>2.3.3 列表</strong></font></td></tr>";
echo "<tr><td><font size=4><br>Python语言中的列表是一个长度可变的数组，列表比元组更为灵活，使用列表可以对其存储的Python对象进行随机访问。下面的例子示范了如何在C语言中使用Python的列表类型：<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;例4：typelist.c<br>
&nbsp;&nbsp;&nbsp;&nbsp;// create the list<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pList = PyList_New(3); // new reference<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyList_Check(pList));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// set some initial values<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i < 3; ++i)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PyList_SetItem(pList, i, Py_BuildValue('i', i));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// insert an item<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyList_Insert(pList, 2, Py_BuildValue('s', 'inserted'));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// append an item<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyList_Append(pList, Py_BuildValue('s', 'appended'));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// sort the list<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyList_Sort(pList);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// reverse the list<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyList_Reverse(pList);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// fetch and manipulate a list slice<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pSlice = PyList_GetSlice(pList, 2, 4); // new reference<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int j = 0; j < PyList_Size(pSlice); ++j) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PyObject *pValue = PyList_GetItem(pList, j);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(pValue);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pSlice);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// cleanup<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pList);<br><br></font></td></tr>";
echo "<tr><td><font size=4><strong>2.3.4 字典</strong></font></td></tr>";
echo "<tr><td><font size=4><br>Python语言中的字典是一个根据关键字进行访问的数据类型。下面的例子示范了如何在C语言中使用Python的字典类型：<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;例5：typedic.c<br>
&nbsp;&nbsp;&nbsp;&nbsp;// create the dictionary<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pDict = PyDict_New(); // new reference<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(PyDict_Check(pDict));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// add a few named values<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyDict_SetItemString(pDict, 'first', <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Py_BuildValue('i', 2003));<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyDict_SetItemString(pDict, 'second', <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Py_BuildValue('f', 3.14f));<br>
&nbsp;&nbsp;&nbsp;&nbsp;// enumerate all named values<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyObject* pKeys = PyDict_Keys(); // new reference<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i < PyList_Size(pKeys); ++i) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PyObject *pKey = PyList_GetItem(pKeys, i);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PyObject *pValue = PyDict_GetItem(pDict, pKey);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(pValue);<br>
&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pKeys);<br>
&nbsp;&nbsp;&nbsp;&nbsp;// remove a named value<br>
&nbsp;&nbsp;&nbsp;&nbsp;PyDict_DelItemString(pDict, 'second');<br>
&nbsp;&nbsp;&nbsp;&nbsp;// cleanup<br>
&nbsp;&nbsp;&nbsp;&nbsp;Py_DECREF(pDict);<br><br>
</font></td></tr>";
echo "<tr><td><font size=6>三、Python的C语言扩展</font></td></tr>";
echo "<tr><td><font size=5><br>3.1 模块封装</font></td></tr>";
echo "<tr><td><font size=4></font><br>在了解了Python的C语言接口后，就可以利用Python解释器提供的这些接口来编写Python的C语言扩展，假设有如下一个C语言函数：<br><br>
例6：example.c
int fact(int n)
{
	  if (n <= 1) 
		      return 1;
	    else 
			    return n * fact(n - 1);
}
</td></tr>";
echo "<tr><td><font size=4></font></td></tr>";
echo "<tr><td><font size=4></font></td></tr>";
echo "<tr><td><font size=4></font></td></tr>";
echo "</table></center>";
?>
