# user_system
简单介绍下哈，一个使用php实现用户管理的小项目。共有7个php代码大致功能见下:

1.*user_register.php*以一个html table来读取用户要注册的信息，以POST的方式发送出去。

2.*user_insert.php*接收到POST信息，然后通过mysqli模块完成数据库表user记录的新增。这里在插入前先检查了用户的主见user_no是否出现在user表中。

3.*user_show.php*主要用来展示user表中的信息。同时也是对每条用户记录进行删、改、激活等操作的菜单。

4.*user_delete.php*响应user_show中的删除操作，删除某个用户的信息。

5.*user_active.php*响应user_show中得到激活操作，将user表中对应的记录中的status字段修改为2（原始为1），做激活处理。

6.*user_updateinfo_collect.php*响应user_show中的更新操作，对指定用户进行信息更新，该php程序通过一个html表单来承载要修改的用户信息。其中表单初始信息内容为根据user_no数据库中所查询的信息，其中user_no只可读不可改。

7.*user_update.php*接收到上述的修改的POST信息然后做数据库update处理。

备注:当每次完成删除、更新、修改操作后，都会回到user_show界面，列出user表中的信息。
