-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 03:53 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`idcategory` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategory`, `category`, `parent`) VALUES
(1, 'Nombre Category', NULL),
(2, 'Nombre Category', NULL),
(3, 'Nombre Category', NULL),
(4, 'Nombre Category', NULL),
(5, 'Nombre Category', NULL),
(6, 'Nombre Category', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`idcomment` int(11) NOT NULL,
  `idauthor` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menues`
--

CREATE TABLE IF NOT EXISTS `menues` (
`idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menues`
--

INSERT INTO `menues` (`idmenu`, `name`, `position`, `enabled`) VALUES
(1, 'Principal', 'header', 1),
(2, 'Sidebar', 'sidebar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
`idmenuitem` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `label` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `information` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `item_order` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`idmenuitem`, `idmenu`, `label`, `type`, `information`, `parent`, `item_order`) VALUES
(1, 1, 'Inicio', 'url', '/', 0, 0),
(2, 1, 'Posts', 'url', '/posts', 0, 0),
(3, 2, 'Inicio', 'url', '/', 0, 0),
(4, 2, 'Inicio', 'url', '/', 0, 0),
(5, 1, 'Sub Post', 'url', '/', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
`idmodule` int(11) NOT NULL,
  `folder` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `enable` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`idmodule`, `folder`, `name`, `description`, `author`, `version`, `enable`) VALUES
(5, 'cms_config', 'CMS Config', 'Config de los contenidos', 'Marcio Fuentes', '1.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`idpermission` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `permission_key` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`idpermission`, `name`, `permission_key`) VALUES
(1, 'Tareas de administración', 'admin_access'),
(2, 'Agregar Post', 'nuevo_post'),
(3, 'Editar Post', 'editar_post'),
(4, 'Eliminar Post', 'eliminar_post'),
(5, 'Módulos', 'modulos'),
(6, 'Widgets', 'widgets'),
(7, 'Usuarios', 'usuarios'),
(9, 'Hacer Pete', 'hacer_pete');

-- --------------------------------------------------------

--
-- Table structure for table `permissions_role`
--

CREATE TABLE IF NOT EXISTS `permissions_role` (
  `idrole` int(11) NOT NULL,
  `idpermission` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions_role`
--

INSERT INTO `permissions_role` (`idrole`, `idpermission`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 9),
(2, 2),
(2, 3),
(2, 9),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permissions_user`
--

CREATE TABLE IF NOT EXISTS `permissions_user` (
  `iduser` int(11) NOT NULL,
  `idpermission` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions_user`
--

INSERT INTO `permissions_user` (`iduser`, `idpermission`) VALUES
(15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`idpost` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(4) NOT NULL,
  `parent` int(11) NOT NULL,
  `enable` int(11) NOT NULL,
  `post_order` int(11) NOT NULL,
  `short_url` varchar(100) NOT NULL,
  `descrp` varchar(146) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `comments` int(11) NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`idpost`, `title`, `img`, `name`, `type`, `parent`, `enable`, `post_order`, `short_url`, `descrp`, `keywords`, `comments`, `author`) VALUES
(1, 'Titulo', 'asdasd', 'asdasd', 'post', 0, 1, 1, 'asdasd', 'asdasd', 'asdasd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts_categories`
--

CREATE TABLE IF NOT EXISTS `posts_categories` (
  `idpost` int(11) NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_revisions`
--

CREATE TABLE IF NOT EXISTS `posts_revisions` (
`idversion` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `author` int(11) NOT NULL,
  `post_show` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts_revisions`
--

INSERT INTO `posts_revisions` (`idversion`, `idpost`, `content`, `date`, `author`, `post_show`) VALUES
(1, 1, '<h1>Contenido</h1>\r\n<p><i>Subtítulo</i></p>\r\n<p>Pseudo Lorem Ipsum</p>', '2015-05-26', 1, 1),
(2, 2, 'asdadasdadasdasd', '2015-05-26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `idpost` int(11) NOT NULL,
  `idtag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`idrole` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idrole`, `name`) VALUES
(1, 'Admin'),
(2, 'Gestor'),
(3, 'Editor'),
(4, 'nuevoRole');

-- --------------------------------------------------------

--
-- Table structure for table `show_menues`
--

CREATE TABLE IF NOT EXISTS `show_menues` (
`idshow` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `menu_show` varchar(30) DEFAULT NULL,
  `menu_hide` varchar(30) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `show_menues`
--

INSERT INTO `show_menues` (`idshow`, `idmenu`, `menu_show`, `menu_hide`) VALUES
(1, 1, 'all', NULL),
(2, 2, NULL, 'all');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`idtag` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`iduser` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `enabled` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `code` int(10) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `name`, `user`, `password`, `email`, `role`, `enabled`, `date`, `code`) VALUES
(1, 'nombre1', 'admin', '06d6adadec053f09d59a1584c59347098669a4ba', 'marciofuentes50@hotmail.com', 1, 1, '0000-00-00', 0),
(15, 'Probando', 'prob1', '06d6adadec053f09d59a1584c59347098669a4ba', 'elmarcio81@hotmail.com', 3, 0, '2015-05-18', 258930435);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
`idwidget` int(11) NOT NULL,
  `folder` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`idwidget`, `folder`, `name`, `description`, `author`, `version`, `enabled`) VALUES
(38, 'menu', 'Menú', 'El Widget Menu', 'Marcio Fuentes', '1.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `widgets_content`
--

CREATE TABLE IF NOT EXISTS `widgets_content` (
`idwidgetcontent` int(11) NOT NULL,
  `idwidget` int(11) NOT NULL,
  `stringid` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `widgets_content`
--

INSERT INTO `widgets_content` (`idwidgetcontent`, `idwidget`, `stringid`, `position`) VALUES
(7, 38, 'top', 'top'),
(8, 38, 'sidebar', 'sidebar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`idcategory`), ADD KEY `parent` (`parent`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`idcomment`), ADD KEY `idpost` (`idpost`);

--
-- Indexes for table `menues`
--
ALTER TABLE `menues`
 ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
 ADD PRIMARY KEY (`idmenuitem`), ADD KEY `idmenu` (`idmenu`), ADD KEY `parent` (`parent`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
 ADD PRIMARY KEY (`idmodule`), ADD UNIQUE KEY `nombre` (`name`), ADD UNIQUE KEY `carpeta` (`folder`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`idpermission`);

--
-- Indexes for table `permissions_role`
--
ALTER TABLE `permissions_role`
 ADD PRIMARY KEY (`idrole`,`idpermission`), ADD KEY `idpermission` (`idpermission`);

--
-- Indexes for table `permissions_user`
--
ALTER TABLE `permissions_user`
 ADD PRIMARY KEY (`iduser`,`idpermission`), ADD KEY `idpermission` (`idpermission`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`idpost`), ADD UNIQUE KEY `name` (`name`,`short_url`), ADD KEY `idpost` (`idpost`), ADD KEY `parent` (`parent`), ADD KEY `author` (`author`);

--
-- Indexes for table `posts_categories`
--
ALTER TABLE `posts_categories`
 ADD PRIMARY KEY (`idpost`,`idcategory`), ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `posts_revisions`
--
ALTER TABLE `posts_revisions`
 ADD PRIMARY KEY (`idversion`), ADD KEY `idpost` (`idpost`), ADD KEY `author` (`author`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
 ADD PRIMARY KEY (`idpost`,`idtag`), ADD UNIQUE KEY `post_tag` (`idpost`,`idtag`), ADD KEY `idtag` (`idtag`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`idrole`), ADD UNIQUE KEY `role` (`name`);

--
-- Indexes for table `show_menues`
--
ALTER TABLE `show_menues`
 ADD PRIMARY KEY (`idshow`), ADD KEY `idmenu` (`idmenu`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`idtag`), ADD UNIQUE KEY `title` (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`iduser`), ADD UNIQUE KEY `codigo` (`code`), ADD KEY `role` (`role`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
 ADD PRIMARY KEY (`idwidget`);

--
-- Indexes for table `widgets_content`
--
ALTER TABLE `widgets_content`
 ADD PRIMARY KEY (`idwidgetcontent`), ADD KEY `idwidget` (`idwidget`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menues`
--
ALTER TABLE `menues`
MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
MODIFY `idmenuitem` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
MODIFY `idmodule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `idpermission` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts_revisions`
--
ALTER TABLE `posts_revisions`
MODIFY `idversion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `show_menues`
--
ALTER TABLE `show_menues`
MODIFY `idshow` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `idtag` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
MODIFY `idwidget` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `widgets_content`
--
ALTER TABLE `widgets_content`
MODIFY `idwidgetcontent` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `categories` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
