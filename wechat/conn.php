<?php 
	@$conn = mysql_connect('127.0.0.1','root','zaq!2wsx') or die('���ݿ����Ӵ���'.mysql_error());
	@mysql_select_db('drccr', $conn) or die('���ݿ����Ӵ���'.mysql_error());
	@mysql_query('set names utf8', $conn) or die('���ݿ����Ӵ���'.mysql_error());
	date_default_timezone_set($timezone); //����ʱ��
