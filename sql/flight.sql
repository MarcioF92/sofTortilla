-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 08:55 PM
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
`idcathegory` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`idcomment` int(11) NOT NULL,
  `idauthor` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menues`
--

CREATE TABLE IF NOT EXISTS `menues` (
`idmenu` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `habilitado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menues`
--

INSERT INTO `menues` (`idmenu`, `nombre`, `position`, `habilitado`) VALUES
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
  `idpadre` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`idmenuitem`, `idmenu`, `label`, `type`, `information`, `idpadre`, `orden`) VALUES
(1, 1, 'Inicio', 'url', '/', 0, 0),
(2, 1, 'Posts', 'url', '/posts', 0, 0),
(3, 2, 'Inicio', 'url', '/', 0, 0),
(4, 2, 'Inicio', 'url', '/', 0, 0),
(5, 1, 'Sub Post', 'url', '/', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
`idmodulo` int(11) NOT NULL,
  `carpeta` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `modulos`
--

INSERT INTO `modulos` (`idmodulo`, `carpeta`, `nombre`, `descripcion`, `autor`, `version`, `habilitado`) VALUES
(5, 'cms_config', 'CMS Config', 'Config de los contenidos', 'Marcio Fuentes', '1.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
`idpermiso` int(11) NOT NULL,
  `permiso` varchar(100) NOT NULL,
  `llave` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `permiso`, `llave`) VALUES
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
-- Table structure for table `permisos_role`
--

CREATE TABLE IF NOT EXISTS `permisos_role` (
`idpermisorole` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `permisos_role`
--

INSERT INTO `permisos_role` (`idpermisorole`, `idrole`, `idpermiso`, `valor`) VALUES
(1, 1, 1, 1),
(18, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(13, 2, 3, 1),
(12, 2, 2, 1),
(7, 2, 4, 0),
(8, 3, 2, 1),
(9, 3, 3, 1),
(14, 1, 5, 1),
(15, 1, 6, 1),
(16, 1, 7, 1),
(17, 1, 9, 1),
(19, 2, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permisos_usuario`
--

CREATE TABLE IF NOT EXISTS `permisos_usuario` (
`idpermisousuario` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `permisos_usuario`
--

INSERT INTO `permisos_usuario` (`idpermisousuario`, `idusuario`, `idpermiso`, `valor`) VALUES
(12, 8, 3, 1),
(16, 8, 2, 0);

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
(1, 'El primer post de prueba', '', 'el-primer-post-de-prueba', 'page', 0, 1, 0, '/el-primer-post-de-prueba', NULL, NULL, 0, 1),
(2, 'Post Hijo', '', 'post-hijo', 'page', 1, 1, 0, '/el-primer-post-de-prueba/post-hijo', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts_categories`
--

CREATE TABLE IF NOT EXISTS `posts_categories` (
`idpost_category` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `idcategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE IF NOT EXISTS `posts_tags` (
  `idpost` int(11) NOT NULL,
  `idtag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_versions`
--

CREATE TABLE IF NOT EXISTS `posts_versions` (
`idversion` int(11) NOT NULL,
  `idpost` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `author` int(11) NOT NULL,
  `show` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts_versions`
--

INSERT INTO `posts_versions` (`idversion`, `idpost`, `content`, `date`, `author`, `show`) VALUES
(1, 1, '<h1>Contenido</h1>\r\n<p><i>Subtítulo</i></p>\r\n<p>Pseudo Lorem Ipsum</p>', '2015-05-26', 1, 1),
(2, 2, 'asdadasdadasdasd', '2015-05-26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`idrole` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idrole`, `role`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `title` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` int(10) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `usuario`, `pass`, `email`, `role`, `estado`, `fecha`, `codigo`) VALUES
(1, 'nombre1', 'admin', '06d6adadec053f09d59a1584c59347098669a4ba', 'marciofuentes50@hotmail.com', 1, 1, '0000-00-00', 0),
(15, 'Probando', 'prob1', '06d6adadec053f09d59a1584c59347098669a4ba', 'elmarcio81@hotmail.com', 3, 0, '2015-05-18', 258930435);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
`idwidget` int(11) NOT NULL,
  `carpeta` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `habilitado` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`idwidget`, `carpeta`, `nombre`, `descripcion`, `autor`, `version`, `habilitado`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
 ADD PRIMARY KEY (`idcathegory`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `menues`
--
ALTER TABLE `menues`
 ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
 ADD PRIMARY KEY (`idmenuitem`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
 ADD PRIMARY KEY (`idmodulo`), ADD UNIQUE KEY `nombre` (`nombre`), ADD UNIQUE KEY `carpeta` (`carpeta`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
 ADD PRIMARY KEY (`idpermiso`);

--
-- Indexes for table `permisos_role`
--
ALTER TABLE `permisos_role`
 ADD PRIMARY KEY (`idpermisorole`);

--
-- Indexes for table `permisos_usuario`
--
ALTER TABLE `permisos_usuario`
 ADD PRIMARY KEY (`idpermisousuario`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`idpost`), ADD UNIQUE KEY `name` (`name`,`short_url`);

--
-- Indexes for table `posts_categories`
--
ALTER TABLE `posts_categories`
 ADD PRIMARY KEY (`idpost_category`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
 ADD UNIQUE KEY `post_tag` (`idpost`,`idtag`);

--
-- Indexes for table `posts_versions`
--
ALTER TABLE `posts_versions`
 ADD PRIMARY KEY (`idversion`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`idrole`), ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `show_menues`
--
ALTER TABLE `show_menues`
 ADD PRIMARY KEY (`idshow`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`idtag`), ADD UNIQUE KEY `title` (`title`,`name`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuario`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
 ADD PRIMARY KEY (`idwidget`);

--
-- Indexes for table `widgets_content`
--
ALTER TABLE `widgets_content`
 ADD PRIMARY KEY (`idwidgetcontent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `idcathegory` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
MODIFY `idmodulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permisos_role`
--
ALTER TABLE `permisos_role`
MODIFY `idpermisorole` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permisos_usuario`
--
ALTER TABLE `permisos_usuario`
MODIFY `idpermisousuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts_categories`
--
ALTER TABLE `posts_categories`
MODIFY `idpost_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_versions`
--
ALTER TABLE `posts_versions`
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
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
