#!/usr/bin/env python
#_*_coding:utf-8_*_
#这是一个土壤监测数据转换为方便数据库录入的文本文件的转换脚本
#原始数据文件为：
#1、上报省厅的无机物监测数据文件，为excel格式，手工复制为纯数据文本文件
#2、监测点位的二维码对照表，为word格式，手工转换为纯数据文本文件
#生成的文件也是一个中间文件，将进一步转换为能够使用load data命令的文件
import os
df1="sss.txt"		#数据文件
df2="ssss.txt"		#二维码对照文件
dic={}
f1=open(df1,"r")
for i in f1.readlines():
	s=i.split('\t')
	if s[0][:4] == "2017":
		l=len(s)
		for j in range(0,l):
			dic[j]=s[j]
		break
f1.close()
i=len(dic)
for j in range(0,i):
	st="%d : %s\n" % (j,dic[j].decode('gbk'))
	print st
print type(dic[1])
print "finished!"
