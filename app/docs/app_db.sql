-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2016 a las 04:23:05
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nb_cargos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nb_cargos`) VALUES
(1, 'Jefe de Estado Mayor'),
(2, 'Jefe de puesto de Comando'),
(3, 'Comandante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nb_ciudad` varchar(30) NOT NULL,
  `id_edo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nb_ciudad`, `id_edo`) VALUES
(1, 'San Juan de los Morros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_cargos_admin', 0, '', NULL, 'N;'),
('action_cargos_create', 0, '', NULL, 'N;'),
('action_cargos_delete', 0, '', NULL, 'N;'),
('action_cargos_index', 0, '', NULL, 'N;'),
('action_cargos_update', 0, '', NULL, 'N;'),
('action_cargos_view', 0, '', NULL, 'N;'),
('action_ciudad_admin', 0, '', NULL, 'N;'),
('action_ciudad_create', 0, '', NULL, 'N;'),
('action_ciudad_delete', 0, '', NULL, 'N;'),
('action_ciudad_index', 0, '', NULL, 'N;'),
('action_ciudad_selectciudad', 0, '', NULL, 'N;'),
('action_ciudad_selectestado', 0, '', NULL, 'N;'),
('action_ciudad_selectmunicipio', 0, '', NULL, 'N;'),
('action_ciudad_update', 0, '', NULL, 'N;'),
('action_ciudad_view', 0, '', NULL, 'N;'),
('action_depend_admin', 0, '', NULL, 'N;'),
('action_depend_create', 0, '', NULL, 'N;'),
('action_depend_delete', 0, '', NULL, 'N;'),
('action_depend_index', 0, '', NULL, 'N;'),
('action_depend_update', 0, '', NULL, 'N;'),
('action_depend_view', 0, '', NULL, 'N;'),
('action_estado_admin', 0, '', NULL, 'N;'),
('action_estado_create', 0, '', NULL, 'N;'),
('action_estado_delete', 0, '', NULL, 'N;'),
('action_estado_index', 0, '', NULL, 'N;'),
('action_estado_update', 0, '', NULL, 'N;'),
('action_estado_view', 0, '', NULL, 'N;'),
('action_grados_admin', 0, '', NULL, 'N;'),
('action_grados_create', 0, '', NULL, 'N;'),
('action_grados_delete', 0, '', NULL, 'N;'),
('action_grados_index', 0, '', NULL, 'N;'),
('action_grados_update', 0, '', NULL, 'N;'),
('action_grados_view', 0, '', NULL, 'N;'),
('action_muncp_admin', 0, '', NULL, 'N;'),
('action_muncp_create', 0, '', NULL, 'N;'),
('action_muncp_delete', 0, '', NULL, 'N;'),
('action_muncp_index', 0, '', NULL, 'N;'),
('action_muncp_selectciudad', 0, '', NULL, 'N;'),
('action_muncp_selectestado', 0, '', NULL, 'N;'),
('action_muncp_selectmunicipio', 0, '', NULL, 'N;'),
('action_muncp_selectparroquia', 0, '', NULL, 'N;'),
('action_muncp_update', 0, '', NULL, 'N;'),
('action_muncp_view', 0, '', NULL, 'N;'),
('action_pais_admin', 0, '', NULL, 'N;'),
('action_pais_create', 0, '', NULL, 'N;'),
('action_pais_delete', 0, '', NULL, 'N;'),
('action_pais_index', 0, '', NULL, 'N;'),
('action_pais_update', 0, '', NULL, 'N;'),
('action_pais_view', 0, '', NULL, 'N;'),
('action_parroquia_admin', 0, '', NULL, 'N;'),
('action_parroquia_create', 0, '', NULL, 'N;'),
('action_parroquia_delete', 0, '', NULL, 'N;'),
('action_parroquia_index', 0, '', NULL, 'N;'),
('action_parroquia_selectciudad', 0, '', NULL, 'N;'),
('action_parroquia_selectestado', 0, '', NULL, 'N;'),
('action_parroquia_selectmunicipio', 0, '', NULL, 'N;'),
('action_parroquia_selectparroquia', 0, '', NULL, 'N;'),
('action_parroquia_update', 0, '', NULL, 'N;'),
('action_parroquia_view', 0, '', NULL, 'N;'),
('action_personal_admin', 0, '', NULL, 'N;'),
('action_personal_create', 0, '', NULL, 'N;'),
('action_personal_delete', 0, '', NULL, 'N;'),
('action_personal_index', 0, '', NULL, 'N;'),
('action_personal_pdf', 0, '', NULL, 'N;'),
('action_personal_selectpersonal', 0, '', NULL, 'N;'),
('action_personal_update', 0, '', NULL, 'N;'),
('action_personal_view', 0, '', NULL, 'N;'),
('action_reportes_personal', 0, '', NULL, 'N;'),
('action_reportes_unidades', 0, '', NULL, 'N;'),
('action_respaldo_respaldo', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_tipounidad_admin', 0, '', NULL, 'N;'),
('action_tipounidad_create', 0, '', NULL, 'N;'),
('action_tipounidad_delete', 0, '', NULL, 'N;'),
('action_tipounidad_index', 0, '', NULL, 'N;'),
('action_tipounidad_update', 0, '', NULL, 'N;'),
('action_tipounidad_view', 0, '', NULL, 'N;'),
('action_unidades_admin', 0, '', NULL, 'N;'),
('action_unidades_create', 0, '', NULL, 'N;'),
('action_unidades_delete', 0, '', NULL, 'N;'),
('action_unidades_index', 0, '', NULL, 'N;'),
('action_unidades_listarpersonal', 0, '', NULL, 'N;'),
('action_unidades_pdf', 0, '', NULL, 'N;'),
('action_unidades_selectciudad', 0, '', NULL, 'N;'),
('action_unidades_selectestado', 0, '', NULL, 'N;'),
('action_unidades_selectmunicipio', 0, '', NULL, 'N;'),
('action_unidades_selectparroquia', 0, '', NULL, 'N;'),
('action_unidades_update', 0, '', NULL, 'N;'),
('action_unidades_view', 0, '', NULL, 'N;'),
('controller_cargos', 0, '', NULL, 'N;'),
('controller_ciudad', 0, '', NULL, 'N;'),
('controller_depend', 0, '', NULL, 'N;'),
('controller_estado', 0, '', NULL, 'N;'),
('controller_grados', 0, '', NULL, 'N;'),
('controller_muncp', 0, '', NULL, 'N;'),
('controller_pais', 0, '', NULL, 'N;'),
('controller_parroquia', 0, '', NULL, 'N;'),
('controller_personal', 0, '', NULL, 'N;'),
('controller_reportes', 0, '', NULL, 'N;'),
('controller_respaldo', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('controller_tipounidad', 0, '', NULL, 'N;'),
('controller_unidades', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE `cruge_field` (
  `idfield` int(11) NOT NULL,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE `cruge_session` (
  `idsession` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(32, 1, 1452181205, 1452199205, 0, '127.0.0.1', 6, 1452188434, 1452189679, '127.0.0.1'),
(33, 1, 1452189682, 1452207682, 0, '127.0.0.1', 3, 1452207581, NULL, NULL),
(34, 1, 1452208419, 1452226419, 0, '127.0.0.1', 1, 1452208419, 1452208435, '127.0.0.1'),
(35, 1, 1452209430, 1452227430, 0, '127.0.0.1', 1, 1452209430, 1452209758, '127.0.0.1'),
(36, 1, 1452209813, 1452227813, 0, '127.0.0.1', 1, 1452209813, 1452209854, '127.0.0.1'),
(37, 1, 1452210808, 1452228808, 0, '127.0.0.1', 1, 1452210808, 1452210815, '127.0.0.1'),
(38, 1, 1452211201, 1452229201, 0, '127.0.0.1', 5, 1452211222, 1452211229, '127.0.0.1'),
(39, 1, 1452211232, 1452229232, 0, '127.0.0.1', 1, 1452211232, 1452211249, '127.0.0.1'),
(40, 1, 1452211736, 1452229736, 0, '127.0.0.1', 1, 1452211736, 1452211743, '127.0.0.1'),
(41, 1, 1452211907, 1452229907, 0, '127.0.0.1', 1, 1452211907, 1452211923, '127.0.0.1'),
(42, 1, 1452212131, 1452230131, 0, '127.0.0.1', 1, 1452212131, 1452213652, '127.0.0.1'),
(43, 1, 1452213672, 1452231672, 1, '127.0.0.1', 1, 1452213672, NULL, NULL),
(44, 1, 1452300663, 1452318663, 0, '127.0.0.1', 1, 1452300663, 1452300666, '127.0.0.1'),
(45, 1, 1452300679, 1452318679, 0, '127.0.0.1', 1, 1452300679, NULL, NULL),
(46, 1, 1452354208, 1452372208, 0, '127.0.0.1', 2, 1452355787, 1452362251, '127.0.0.1'),
(47, 1, 1452363491, 1452381491, 0, '127.0.0.1', 1, 1452363491, 1452363817, '127.0.0.1'),
(48, 1, 1452364474, 1452382474, 0, '127.0.0.1', 1, 1452364474, 1452364493, '127.0.0.1'),
(49, 1, 1452364620, 1452382620, 0, '127.0.0.1', 1, 1452364620, 1452364725, '127.0.0.1'),
(50, 1, 1452364872, 1452382872, 0, '127.0.0.1', 1, 1452364872, 1452364876, '127.0.0.1'),
(51, 1, 1452364938, 1452382938, 0, '127.0.0.1', 1, 1452364938, 1452365396, '127.0.0.1'),
(52, 1, 1452365438, 1452383438, 0, '127.0.0.1', 1, 1452365438, 1452365533, '127.0.0.1'),
(53, 1, 1452369339, 1452387339, 0, '127.0.0.1', 1, 1452369339, 1452369349, '127.0.0.1'),
(54, 1, 1452369959, 1452387959, 0, '127.0.0.1', 1, 1452369959, 1452369961, '127.0.0.1'),
(55, 1, 1452371005, 1452389005, 0, '127.0.0.1', 1, 1452371005, 1452371011, '127.0.0.1'),
(56, 1, 1452371718, 1452389718, 0, '127.0.0.1', 1, 1452371718, 1452371753, '127.0.0.1'),
(57, 1, 1452371767, 1452389767, 0, '127.0.0.1', 1, 1452371767, 1452371771, '127.0.0.1'),
(58, 1, 1452373580, 1452391580, 0, '127.0.0.1', 1, 1452373580, 1452375902, '127.0.0.1'),
(59, 1, 1452375914, 1452393914, 0, '127.0.0.1', 1, 1452375914, 1452378023, '127.0.0.1'),
(60, 1, 1452378053, 1452396053, 0, '127.0.0.1', 1, 1452378053, 1452378215, '127.0.0.1'),
(61, 1, 1452378816, 1452396816, 0, '127.0.0.1', 2, 1452392740, NULL, NULL),
(62, 1, 1452397140, 1452415140, 1, '127.0.0.1', 1, 1452397140, NULL, NULL),
(63, 1, 1452463412, 1452499412, 0, '127.0.0.1', 1, 1452463412, 1452476540, '127.0.0.1'),
(64, 1, 1452476561, 1452512561, 1, '127.0.0.1', 1, 1452476561, NULL, NULL),
(65, 1, 1452608296, 1452644296, 0, '127.0.0.1', 1, 1452608296, 1452608378, '127.0.0.1'),
(66, 1, 1452608404, 1452644404, 1, '127.0.0.1', 1, 1452608404, NULL, NULL),
(67, 1, 1452648451, 1452684451, 0, '127.0.0.1', 1, 1452648451, 1452651766, '127.0.0.1'),
(68, 1, 1452655539, 1452691539, 0, '127.0.0.1', 6, 1452691369, 1452691413, '127.0.0.1'),
(69, 1, 1452691420, 1452727420, 0, '127.0.0.1', 1, 1452691420, 1452691797, '127.0.0.1'),
(70, 1, 1452691815, 1452727815, 0, '127.0.0.1', 1, 1452691815, 1452691865, '127.0.0.1'),
(71, 1, 1452702207, 1452738207, 0, '127.0.0.1', 1, 1452702207, 1452702851, '127.0.0.1'),
(72, 1, 1452708240, 1452744240, 1, '127.0.0.1', 1, 1452708240, NULL, NULL),
(73, 1, 1452873786, 1452909786, 0, '127.0.0.1', 1, 1452873786, 1452905194, '127.0.0.1'),
(74, 1, 1452916105, 1452952105, 0, '127.0.0.1', 1, 1452916105, 1452916269, '127.0.0.1'),
(75, 1, 1452916464, 1452952464, 0, '127.0.0.1', 1, 1452916464, 1452916966, '127.0.0.1'),
(76, 1, 1452917045, 1452953045, 0, '127.0.0.1', 3, 1452919636, 1452920867, '127.0.0.1'),
(77, 1, 1452920919, 1452956919, 0, '127.0.0.1', 1, 1452920919, 1452921182, '127.0.0.1'),
(78, 1, 1452921190, 1452957190, 1, '127.0.0.1', 1, 1452921190, NULL, NULL),
(79, 1, 1452962770, 1452998770, 0, '127.0.0.1', 1, 1452962770, 1452962924, '127.0.0.1'),
(80, 1, 1452962972, 1452998972, 0, '127.0.0.1', 3, 1452964995, 1452966268, '127.0.0.1'),
(81, 1, 1452966275, 1453002275, 0, '127.0.0.1', 1, 1452966275, 1452968681, '127.0.0.1'),
(82, 1, 1452968723, 1453004723, 0, '127.0.0.1', 3, 1452969657, 1452972689, '127.0.0.1'),
(83, 1, 1452972717, 1453008717, 0, '127.0.0.1', 1, 1452972717, 1452973109, '127.0.0.1'),
(84, 1, 1452973116, 1453009116, 0, '127.0.0.1', 1, 1452973116, 1452994214, '127.0.0.1'),
(85, 1, 1452994435, 1453030435, 0, '127.0.0.1', 1, 1452994435, 1452994631, '127.0.0.1'),
(86, 1, 1452994638, 1453030638, 0, '127.0.0.1', 2, 1452997362, 1453000143, '127.0.0.1'),
(87, 1, 1453000529, 1453036529, 0, '127.0.0.1', 1, 1453000529, 1453000765, '127.0.0.1'),
(88, 1, 1453001075, 1453037075, 0, '127.0.0.1', 1, 1453001075, 1453002215, '127.0.0.1'),
(89, 1, 1453002308, 1453038308, 0, '127.0.0.1', 1, 1453002308, 1453007444, '127.0.0.1'),
(90, 1, 1453007459, 1453043459, 0, '127.0.0.1', 1, 1453007459, 1453007463, '127.0.0.1'),
(91, 1, 1453007557, 1453043557, 0, '127.0.0.1', 1, 1453007557, 1453010393, '127.0.0.1'),
(92, 1, 1453010451, 1453046451, 1, '127.0.0.1', 1, 1453010451, NULL, NULL),
(93, 1, 1453057708, 1453093708, 0, '127.0.0.1', 2, 1453058182, 1453063964, '127.0.0.1'),
(94, 1, 1453068784, 1453104784, 0, '127.0.0.1', 1, 1453068784, 1453068788, '127.0.0.1'),
(95, 1, 1453069747, 1453105747, 0, '127.0.0.1', 1, 1453069747, 1453069752, '127.0.0.1'),
(96, 1, 1453071165, 1453107165, 0, '127.0.0.1', 1, 1453071165, 1453071168, '127.0.0.1'),
(97, 1, 1453071473, 1453107473, 0, '127.0.0.1', 1, 1453071473, 1453071476, '127.0.0.1'),
(98, 1, 1453076331, 1453112331, 0, '127.0.0.1', 1, 1453076331, 1453076334, '127.0.0.1'),
(99, 1, 1453078315, 1453114315, 0, '127.0.0.1', 1, 1453078315, 1453078319, '127.0.0.1'),
(100, 1, 1453081112, 1453117112, 0, '127.0.0.1', 1, 1453081112, 1453081124, '127.0.0.1'),
(101, 1, 1453086644, 1453122644, 0, '127.0.0.1', 1, 1453086644, 1453086655, '127.0.0.1'),
(102, 1, 1453086678, 1453122678, 0, '127.0.0.1', 1, 1453086678, 1453086680, '127.0.0.1'),
(103, 1, 1453086936, 1453122936, 0, '127.0.0.1', 1, 1453086936, 1453086938, '127.0.0.1'),
(104, 1, 1453087723, 1453123723, 0, '127.0.0.1', 2, 1453088888, 1453089039, '127.0.0.1'),
(105, 1, 1453089088, 1453125088, 0, '127.0.0.1', 1, 1453089088, 1453089168, '127.0.0.1'),
(106, 1, 1453090777, 1453126777, 0, '127.0.0.1', 2, 1453094901, 1453098251, '127.0.0.1'),
(107, 1, 1453098445, 1453134445, 0, '127.0.0.1', 1, 1453098445, 1453098451, '127.0.0.1'),
(108, 1, 1453132380, 1453168380, 0, '127.0.0.1', 1, 1453132380, 1453132839, '127.0.0.1'),
(109, 1, 1453132846, 1453168846, 0, '127.0.0.1', 2, 1453132990, 1453135931, '127.0.0.1'),
(110, 1, 1453135949, 1453171949, 0, '127.0.0.1', 1, 1453135949, 1453138529, '127.0.0.1'),
(111, 1, 1453138542, 1453174542, 0, '127.0.0.1', 1, 1453138542, 1453138641, '127.0.0.1'),
(112, 1, 1453138649, 1453174649, 0, '127.0.0.1', 1, 1453138649, 1453139804, '127.0.0.1'),
(113, 1, 1453139864, 1453175864, 0, '127.0.0.1', 2, 1453166953, 1453166964, '127.0.0.1'),
(114, 1, 1453167336, 1453203336, 0, '127.0.0.1', 1, 1453167336, 1453167351, '127.0.0.1'),
(115, 1, 1453167427, 1453203427, 0, '127.0.0.1', 1, 1453167427, 1453167430, '127.0.0.1'),
(116, 1, 1453167439, 1453203439, 0, '127.0.0.1', 1, 1453167439, 1453167604, '127.0.0.1'),
(117, 1, 1453168475, 1453204475, 0, '127.0.0.1', 1, 1453168475, 1453168477, '127.0.0.1'),
(118, 1, 1453168776, 1453204776, 0, '127.0.0.1', 1, 1453168776, 1453170397, '127.0.0.1'),
(119, 1, 1453171898, 1453207898, 0, '127.0.0.1', 2, 1453175100, 1453178161, '127.0.0.1'),
(120, 1, 1453178169, 1453214169, 1, '127.0.0.1', 3, 1453179158, NULL, NULL),
(121, 1, 1458601962, 1458637962, 1, '127.0.0.1', 1, 1458601962, NULL, NULL),
(122, 1, 1458785554, 1458821554, 0, '127.0.0.1', 3, 1458785576, 1458785586, '127.0.0.1'),
(123, 1, 1458785593, 1458821593, 0, '127.0.0.1', 1, 1458785593, 1458785763, '127.0.0.1'),
(124, 1, 1458785832, 1458821832, 1, '127.0.0.1', 2, 1458788922, NULL, NULL),
(125, 1, 1458957239, 1458993239, 1, '127.0.0.1', 2, 1458960549, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE `cruge_system` (
  `idsystem` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 600, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE `cruge_user` (
  `iduser` int(11) NOT NULL,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1458960549, 'admin', 'admin@tucorreo.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 1, 0, 0),
(2, 1415311728, NULL, NULL, 'invitado', 'invitado@invitado.com', 'e10adc3949ba59abbe56e057f20f883e', 'c97e31dbbcdd35590dbeb0d3f380c913', 1, 0, 0),
(3, 1450551819, NULL, 1450551880, 'Francesca', 'checa1305@hotmai.com', '25d55ad283aa400af464c76d713c07ad', '56f4ec3745c8e494f9b499b8e0ae8310', 1, 0, 0),
(4, 1452380318, NULL, NULL, 'Maria', 'maria@hotmail.com', '61cff02eaf0b5c0d8e23e24ef334aedd', '5659a98e00ed387bb62b9e96d4950208', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depend`
--

CREATE TABLE `depend` (
  `id` int(11) NOT NULL,
  `nb_dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `depend`
--

INSERT INTO `depend` (`id`, `nb_dep`) VALUES
(1, 'Jefatura'),
(2, 'Jefe de Estado Mayor'),
(3, 'Jefe de Estado Mayor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nb_edo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nb_edo`) VALUES
(1, 'Guarico'),
(2, 'Barinas'),
(3, 'Portuguesa'),
(4, 'Apure');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `nb_grados` varchar(50) NOT NULL,
  `abreviatura` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `nb_grados`, `abreviatura`) VALUES
(1, 'Teniente', ''),
(2, 'General en Jefe', 'G/J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muncp`
--

CREATE TABLE `muncp` (
  `id` int(11) NOT NULL,
  `nb_muncp` varchar(30) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muncp`
--

INSERT INTO `muncp` (`id`, `nb_muncp`, `id_ciudad`) VALUES
(1, 'Juan Germán Roscio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE `parroquia` (
  `id` int(11) NOT NULL,
  `nb_parroquia` varchar(30) NOT NULL,
  `id_muncp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`id`, `nb_parroquia`, `id_muncp`) VALUES
(1, 'San Juan de los Morros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nu_docm_idnt` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nu_tlf_local` varchar(15) DEFAULT NULL,
  `nu_tlf_cel` varchar(15) DEFAULT NULL,
  `id_depen` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nu_docm_idnt`, `username`, `nombre`, `apellido`, `sexo`, `email`, `nu_tlf_local`, `nu_tlf_cel`, `id_depen`, `id_cargo`, `id_grado`) VALUES
(1, 20878863, 'admin', 'Francesca', 'Castillo', 'F', 'francesca.castillo@hotmail.com', '02469962993', '04124812835', 1, 1, 1),
(4, 10671918, 'invitado', 'Eleonora', 'Blefari', 'F', 'blefari2911@hotmail.com', '1234598', '12345567', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_unidad`
--

CREATE TABLE `tipo_unidad` (
  `id` int(11) NOT NULL,
  `nb_tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_unidad`
--

INSERT INTO `tipo_unidad` (`id`, `nb_tipo`) VALUES
(1, 'Militar'),
(2, 'ZODI'),
(3, 'ADI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `nb_unid` varchar(50) NOT NULL,
  `direccion_unid` varchar(200) NOT NULL,
  `coor_unid` varchar(50) DEFAULT NULL,
  `id_parroquia` int(11) DEFAULT NULL,
  `id_personal` int(11) NOT NULL,
  `tipo_unid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `nb_unid`, `direccion_unid`, `coor_unid`, `id_parroquia`, `id_personal`, `tipo_unid`) VALUES
(1, 'Redi los Llanos', 'Avenida los puentes, San Juan de los Morros', '23 45 67', 1, 1, 1),
(2, 'Zodi Guarico', 'Avenida fuerzas armandas, San juan de los morros.', '35 58 26', 1, 1, 2),
(3, 'Redi los Llanos', 'Avenida los Puentes', '23 34 23', NULL, 4, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_depend_UNIQUE` (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_edo_UNIQUE` (`id`),
  ADD KEY `fk_muncp_estado1_idx` (`id_edo`);

--
-- Indices de la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD PRIMARY KEY (`userid`,`itemname`),
  ADD KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  ADD KEY `fk_cruge_authassignment_user` (`userid`);

--
-- Indices de la tabla `cruge_authitem`
--
ALTER TABLE `cruge_authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
  ADD PRIMARY KEY (`idfield`);

--
-- Indices de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD PRIMARY KEY (`idfieldvalue`),
  ADD KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  ADD KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`);

--
-- Indices de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
  ADD PRIMARY KEY (`idsession`),
  ADD KEY `crugesession_iduser` (`iduser`);

--
-- Indices de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
  ADD PRIMARY KEY (`idsystem`);

--
-- Indices de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indices de la tabla `depend`
--
ALTER TABLE `depend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_depend_UNIQUE` (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_edo_UNIQUE` (`id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_depend_UNIQUE` (`id`);

--
-- Indices de la tabla `muncp`
--
ALTER TABLE `muncp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_edo_UNIQUE` (`id`),
  ADD KEY `fk_ciudad_muncp1_idx` (`id_ciudad`);

--
-- Indices de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parroquia_muncp1_idx` (`id_muncp`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_personal_UNIQUE` (`id`),
  ADD UNIQUE KEY `nu_docm_idnt_UNIQUE` (`nu_docm_idnt`),
  ADD KEY `fk_personal_grados1_idx` (`id_grado`),
  ADD KEY `fk_personal_cargos1_idx` (`id_cargo`),
  ADD KEY `fk_personal_depend1_idx` (`id_depen`),
  ADD KEY `fk_personal_cruge_user1_idx` (`username`);

--
-- Indices de la tabla `tipo_unidad`
--
ALTER TABLE `tipo_unidad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_tipo_unidad_UNIQUE` (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_unid_UNIQUE` (`id`),
  ADD KEY `fk_unidades_tipo_unidad1_idx` (`tipo_unid`),
  ADD KEY `fk_unidades_personal1_idx` (`id_personal`),
  ADD KEY `fk_unidades_parroquia1_idx` (`id_parroquia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
  MODIFY `idfield` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  MODIFY `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
  MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
  MODIFY `idsystem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `depend`
--
ALTER TABLE `depend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `muncp`
--
ALTER TABLE `muncp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_unidad`
--
ALTER TABLE `tipo_unidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_muncp_estado1` FOREIGN KEY (`id_edo`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `muncp`
--
ALTER TABLE `muncp`
  ADD CONSTRAINT `fk_ciudad_muncp1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD CONSTRAINT `fk_parroquia_muncp1` FOREIGN KEY (`id_muncp`) REFERENCES `muncp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_cargos1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_cruge_user1` FOREIGN KEY (`username`) REFERENCES `cruge_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_depend1` FOREIGN KEY (`id_depen`) REFERENCES `depend` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personal_grados1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD CONSTRAINT `fk_unidades_parroquia1` FOREIGN KEY (`id_parroquia`) REFERENCES `parroquia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unidades_personal1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unidades_tipo_unidad1` FOREIGN KEY (`tipo_unid`) REFERENCES `tipo_unidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
