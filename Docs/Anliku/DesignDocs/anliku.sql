/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2016/3/14 23:51:53                           */
/*==============================================================*/


drop table if exists tb_access;

drop table if exists tb_case;

drop table if exists tb_cate;

drop table if exists tb_node;

drop table if exists tb_role;

drop table if exists tb_role_user;

drop table if exists tb_user;

/*==============================================================*/
/* Table: tb_access                                             */
/*==============================================================*/
create table tb_access
(
   role_id              smallint(6) unsigned not null comment '角色id',
   node_id              smallint(6) unsigned not null comment '节点id',
   level                tinyint(1) not null comment '等级',
   module               varchar(50) default NULL comment '模块',
   key groupId (role_id),
   key nodeId (node_id)
)
engine = InnoDB
default charset = UTF8;

alter table tb_access comment '权限表，即角色表和节点表的中间表';

/*==============================================================*/
/* Table: tb_case                                               */
/*==============================================================*/
create table tb_case
(
   id                   int(10) unsigned not null auto_increment,
   case_no              varchar(14) not null default '' comment '入库号',
   title                varchar(255) not null default '' comment '案例标题',
   cate_id              int(10) not null default 0 comment '分类号',
   author               varchar(20) not null default '' comment '作者',
   department           varchar(50) not null default '' comment '单位',
   key_words            varchar(255) not null default '' comment '关键词',
   course               varchar(100) not null default '' comment '适用课程',
   summary              text default NULL comment '摘要',
   content_url          varchar(255) not null default '' comment '正文文件url',
   doc_url              varchar(255) not null default '' comment '说明书url',
   attachment_url       varchar(255) not null default '' comment '附件url',
   pic_url              varchar(255) not null default '' comment '图片url',
   add_time             timestamp not null default CURRENT_TIMESTAMP comment '入库时间',
   click                int(10) not null default 0 comment '点击数',
   primary key (id)
)
engine = InnoDB
default charset = UTF8;

alter table tb_case comment '案例表';

/*==============================================================*/
/* Index: title                                                 */
/*==============================================================*/
create index title on tb_case
(
   title
);

/*==============================================================*/
/* Index: author                                                */
/*==============================================================*/
create index author on tb_case
(
   author
);

/*==============================================================*/
/* Index: department                                            */
/*==============================================================*/
create index department on tb_case
(
   department
);

/*==============================================================*/
/* Table: tb_cate                                               */
/*==============================================================*/
create table tb_cate
(
   id                   int(10) unsigned not null auto_increment,
   name                 char(20) not null default '' comment '分类名称',
   pid                  int(10) unsigned not null default 0 comment '父级分类id',
   sort                 smallint(6) not null default 100 comment '排序',
   primary key (id),
   key pid (pid)
)
engine = InnoDB
default charset = UTF8;

alter table tb_cate comment '分类表，记录每个案例所属的分类';

/*==============================================================*/
/* Table: tb_node                                               */
/*==============================================================*/
create table tb_node
(
   id                   smallint(6) unsigned not null auto_increment,
   name                 varchar(20) not null,
   title                varchar(50) default NULL,
   status               tinyint(1) default 0,
   remark               varchar(255) default NULL,
   sort                 smallint(6) unsigned default NULL,
   pid                  smallint(6) unsigned not null,
   level                tinyint(1) unsigned not null,
   primary key (id),
   key level (level),
   key pid (pid),
   key status (status),
   key name (name)
)
engine = InnoDB
default charset = UTF8;

/*==============================================================*/
/* Table: tb_role                                               */
/*==============================================================*/
create table tb_role
(
   id                   smallint(6) unsigned not null auto_increment,
   name                 varchar(20) not null,
   pid                  smallint(6) default NULL,
   status               tinyint(1) unsigned default NULL,
   remark               varchar(255) default NULL,
   primary key (id),
   key pid (pid),
   key status (status)
)
engine = InnoDB
default charset = UTF8;

/*==============================================================*/
/* Table: tb_role_user                                          */
/*==============================================================*/
create table tb_role_user
(
   role_id              mediumint(9) unsigned default NULL,
   user_id              char(32) default NULL,
   key group_id (role_id),
   key user_id (user_id)
)
engine = InnoDB
default charset = UTF8;

alter table tb_role_user comment '用户表和角色表的中间表';

/*==============================================================*/
/* Table: tb_user                                               */
/*==============================================================*/
create table tb_user
(
   id                   int(10) not null auto_increment comment 'id主键',
   username             char(30) not null default '' comment '用户名',
   password             char(32) not null default '' comment '密码，用md5加密',
   login_time           int(10) unsigned comment '上次登录时间',
   login_ip             char(15) comment '上次登录ip',
   valid                tinyint(1) unsigned default 1 comment '标记用户是否有效，即可以使用',
   primary key (id),
   key AK_Key_2 (username)
)
engine = InnoDB
default charset = UTF8;

alter table tb_user comment '用户表，存放用户信息';

