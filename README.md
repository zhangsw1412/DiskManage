# DiskManage
Management for disks

### 环境部署
在服务器上安装php,nginx,mysql

设置nginx支持php-fpm，添加路由规则使其支持框架的pathinfo路由模式

在网站根目录/APP下创建Runtime目录,并chmod 777 -R Runtime/

修改网站根目录/APP/Conf/config.php末尾的数据库配置连接相应数据库

修改网站根目录/APP/Modules/Home/Conf/config.php中的NFS协议挂载目录配置