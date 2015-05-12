-- Adminer 3.3.4 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- Table Group
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
`id` int(2) NOT NULL,
`name` varchar(64) NOT NULL,
`description` text,
PRIMARY KEY (`id`),
UNIQUE KEY `nazwa` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `group` (`id`, `name`, `description`) VALUES
(0, 'Guest', 'Gość - niezalogowany użytkownik'),
(1, 'Administrator', 'Admin'),
(2, 'Moderator', 'Mod'),
(3, 'User', 'User');


-- Table User
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_login` varchar(64) NOT NULL,
`user_email` varchar(64) NOT NULL,
`user_password` varchar(128) NOT NULL,
`user_name` varchar(128) NOT NULL,
`user_surname` varchar(128) NOT NULL,
`user_description` text,
`student_index` varchar(32) DEFAULT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
`modified_user_id` int(11) NOT NULL,
`group_id` int(2) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `user_login` (`user_login`),
KEY `grupa_id` (`group_id`),
KEY `created_user_id` (`created_user_id`),
KEY `modified_user_id` (`modified_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `user_login`, `user_email`, `user_password`, `user_name`, `user_description`, `student_index`, `created_dt`, `created_user_id`, `modified_dt`, `modified_user_id`, `group_id`)
VALUES(1, 'admin', 'andrzej.domurat@gmail.com', 'e66055e8e308770492a44bf16e875127', 'Andrzej Domurat', NULL, NULL, '2012-04-16 00:12:44', 1, '0000-00-00 00:00:00', 1, 1);

-- Table Label
DROP TABLE IF EXISTS `label`;
CREATE TABLE `label` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`lang_id` int(2) NOT NULL,
`label_name` varchar(64) DEFAULT NULL,
`label_value` text,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) DEFAULT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`),
FULLTEXT KEY `label_name`(`label_name`,`label_value`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table Lang
DROP TABLE IF EXISTS `lang`;
CREATE TABLE `lang` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`lang_name` varchar(64) DEFAULT NULL,
`lang_short` varchar(3) DEFAULT NULL,
`active` tinyint(1) DEFAULT 1,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) DEFAULT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- Table Menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`lang_id` int(11) NOT NULL,
`parent_menu_id` int(11) DEFAULT NULL,
`menu_name` varchar(64) DEFAULT NULL,
`page_id` int(11) DEFAULT NULL,
`module` varchar(64) DEFAULT NULL,
`action` varchar(64) DEFAULT NULL,
`active` tinyint(1) DEFAULT 1,
`publish_start_dt` timestamp NULL DEFAULT NULL,
`publish_end_dt` timestamp NULL DEFAULT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) DEFAULT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`),
FULLTEXT KEY `menu_name`(`menu_name`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table Page
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`lang_id` int(11) NOT NULL,
`page_name` varchar(64) DEFAULT NULL,
`page_content` text,
`page_type` varchar(64) DEFAULT 'page_article',
`META_TITLE` text,
`META_DESCRIPTION` text,
`META_KEYWORDS` text,
`page_files` varchar(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`),
FULLTEXT KEY `page_content`(`page_name`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table Permission
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
`id` int(4) NOT NULL AUTO_INCREMENT,
`group_id` int(2) NOT NULL,
`module` varchar(64) NOT NULL,
`action` varchar(64) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `permission_id` (`group_id`,`module`,`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




-- ARTICLE
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
`id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
`lang_id` int(11) NOT NULL,
`page_id` int(11) NOT NULL,
`article_name` varchar(64) DEFAULT NULL,
`article_publish` tinyint(1) DEFAULT 0,
`visible_flag` tinyint(1) DEFAULT 1,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
-- `id_blog` int(11) NOT NULL,
PRIMARY KEY (`id`),
  FULLTEXT KEY `article_name`(`article_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- BLOG
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`blog_name` varchar(64) DEFAULT NULL,
`employee_id` int(11) NOT NULL,
`page_id` int(11),
PRIMARY KEY (`id`),
FULLTEXT KEY `blog_name`(`blog_name`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- BLOG TO PAGE
DROP TABLE IF EXISTS `blog_to_page`;
CREATE TABLE `blog_to_page` (
`blog_id` int(11) NOT NULL,
`page_id` int (11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table Institute
DROP TABLE IF EXISTS `institute`;
CREATE TABLE `institute` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`institute_name` varchar(64) DEFAULT NULL,
`lang_id` int(11) NOT NULL DEFAULT '1',
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- Table Branches
DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`branch_name` varchar(64) DEFAULT NULL,
`institute_id` int(11) NOT NULL,
`lang_id` int(11) NOT NULL DEFAULT '1',
`symbol` varchar(11) NOT NULL,
`active` tinyint(1) NOT NULL DEFAULT '1',
`page_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table Employee                                               
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`branch_id` int(11) NULL DEFAULT NULL,
`title` varchar(11) NULL DEFAULT NULL ,
`lang_id` int(11) NOT NULL DEFAULT '1',
`function_name` varchar(11) NULL DEFAULT NULL,
`phone` int(11) NULL DEFAULT NULL,
`phone2` int(11) NULL DEFAULT NULL,
`page_id` int(11) NULL DEFAULT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Table students
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,
`branch_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- 2 type of forum ...

-- the first :

-- FORUM
DROP TABLE IF EXISTS `forum`;
CREATE TABLE `forum` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`forum_name` varchar(64) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- SECTION
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`section_name` varchar(64) NOT NULL,
`description_section` text,
`forum_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;



-- TOPIC
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`topic_name` varchar(64) NOT NULL,
`topic_description` text,
`section_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- MESSAGE
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`message_name` varchar(64) NOT NULL,
`message_description`text,
`topic_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- TOPIC
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`topic_name` varchar(64) NOT NULL,
`topic_description` text,
`section_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;	


-- MESSAGE
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`message_name` varchar(64) NOT NULL,
`message_description`text,
`topic_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- page_views
DROP TABLE IF EXISTS `page_views`;
CREATE TABLE `page_views` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_ip` varchar(64) NOT NULL,
`page_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `idd` (`page_id`,`user_ip`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `page_statistic`;
CREATE TABLE `page_statistic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`page_id` int(11) NOT NULL,
`nbviews` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- File
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`files` varchar(11) NOT NULL,
`file_name` varchar(20) NOT NULL,
`file_label` varchar(30) NOT NULL,
`file_desc` varchar(64) DEFAULT NULL,
`file_type` varchar(30) DEFAULT NULL,
`file_extension` varchar(30) DEFAULT NULL,
`file_order` int(4) DEFAULT 1,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NULL DEFAULT NULL,
`modified_user_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- File download
DROP TABLE IF EXISTS `t_file_downloads`;
CREATE TABLE `t_file_downloads` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_ip` varchar(64) NOT NULL,
`file_id` int(11) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `file_user` (`file_id`,`user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




-- Forum Topics
/*
DROP TABLE IF EXISTS `forum_topic`;
CREATE TABLE `forum_topic` (
`id` int (11) NOT NULL AUTO_INCREMENT,
`topic_name` varchar(64) NOT NULL,
`topic_content` text,
`topic_hidden` tinyint(1) DEFAULT 0,
`category_id` int(11) NOT NULL,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
`modified_user_id` int(11) NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `forum_user_ibfk_45` FOREIGN KEY (`modified_user_id`) REFERENCES `user` (`id`),
CONSTRAINT `forum_user_ibfk_46` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
CONSTRAINT `category_ibfk_47` FOREIGN KEY (`category_id`) REFERENCES `forum_category` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- Forum Categories
DROP TABLE IF EXISTS `forum_category`;
CREATE TABLE `forum_category` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`category_name` varchar(64) NOT NULL,
`category_hidden` tinyint(1) DEFAULT 0,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
`modified_user_id` int(11) NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `forum_user_ibfk_48` FOREIGN KEY (`modified_user_id`) REFERENCES `user` (`id`),
CONSTRAINT `forum_user_ibfk_49` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


-- Forum messages
DROP TABLE IF EXISTS `forum_message`;
CREATE TABLE `forum_message` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`forum_topic_id` int(11) NOT NULL,
`forum_message_name` varchar(64) NOT NULL,
`forum_message_content` text,
`created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`created_user_id` int(11) NOT NULL,
`modified_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
`modified_forum_user_id` int(11) NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `forum_user_ibfk_50` FOREIGN KEY (`modified_user_id`) REFERENCES `user` (`id`),
CONSTRAINT `forum_user_ibfk_51` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
CONSTRAINT `topic_ibfk_52` FOREIGN KEY (`forum_topic_id`) REFERENCES `forum_topic` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
*/
