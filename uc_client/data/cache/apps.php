Last login: Tue Jul 21 17:22:54 on ttys000
mayindeMacBook-Pro:~ pony$ ssh root@121.199.35.78
root@121.199.35.78's password: 
Last login: Tue Jul 21 17:25:14 2015 from 116.236.188.246

Welcome to aliyun Elastic Compute Service!

[root@iZ23qa9mgy6Z ~]# cd /a/domains/wenda.kjcwd.com/public_html/uc_client/
[root@iZ23qa9mgy6Z uc_client]# ls
client.php  config.inc.php  control  data  index.htm  lib  model
[root@iZ23qa9mgy6Z uc_client]# sudo rm -rf config.inc.php 
[root@iZ23qa9mgy6Z uc_client]# sudo nano config.inc.php
[root@iZ23qa9mgy6Z uc_client]# cd /a/domains/bbs.come2feed.me/public_html/uc_client/
[root@iZ23qa9mgy6Z uc_client]# ls
client.php  control  data  index.htm  lib  model
[root@iZ23qa9mgy6Z uc_client]# sudo nano config.inc.php
[root@iZ23qa9mgy6Z uc_client]# ls
client.php  config.inc.php  control  data  index.htm  lib  model
[root@iZ23qa9mgy6Z uc_client]# cd data
[root@iZ23qa9mgy6Z data]# ls
cache  index.htm
[root@iZ23qa9mgy6Z data]# cd cache/
[root@iZ23qa9mgy6Z cache]# ls
apps.php  badwords.php  index.htm  settings.php
[root@iZ23qa9mgy6Z cache]# sudo nano apps.php

  GNU nano 2.0.9               文件: apps.php                           已更动  

  array (
    'appid' => '2',
    'type' => 'OTHER',
    'name' => 'wenda',
    'url' => 'http://wenda.kjcwd.com',
    'ip' => '121.199.35.78',
    'viewprourl' => '',
    'apifilename' => 'uc.php',
    'charset' => '',
    'dbcharset' => '',
    'synlogin' => '1',
    'recvnote' => '0',
    'extra' => false,
    'tagtemplates' => '<?xml version="1.0" encoding="ISO-8859-1"?>

<root>

    <item id="template"><![CDATA[]]></item>

</root>',
    'allowips' => '',
  ),
);

?>
