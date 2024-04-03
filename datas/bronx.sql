-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2024 at 10:30 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bronx`
--

-- --------------------------------------------------------

--
-- Table structure for table `bronx`
--

DROP TABLE IF EXISTS `bronx`;
CREATE TABLE IF NOT EXISTS `bronx` (
  `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(501) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sm_img_src` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bronx`
--

INSERT INTO `bronx` (`id`, `title`, `description`, `sm_img_src`, `img_src`, `date`, `slug`) VALUES
(1, 'Come On Feet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_comeonfeet.jpg', '../public/images/photosProgramme/comeonfeet.jpg', 'SAM. 30 AVRIL 20:00', 'come-on-feet'),
(2, 'Masques', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_masques.jpg', '../public/images/photosProgramme/masques.jpg', 'SAM. 30 AVRIL 20:00', 'masques'),
(3, 'Cyrano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_cyrano.jpg', '../public/images/photosProgramme/cyrano.jpg', 'SAM. 30 AVRIL 20:00', 'cyrano'),
(4, 'Love', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_love.jpg', '../public/images/photosProgramme/love.jpg', 'SAM. 30 AVRIL 20:00', 'love'),
(5, 'Rome', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_rome.jpg', '../public/images/photosProgramme/rome.jpg', 'SAM. 30 AVRIL 20:00', 'rome'),
(6, 'Romeo et Juliette', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quae animi eveniet eius? Voluptatum totam ducimus beatae reiciendis consectetur aliquam iste tenetur fuga magni illo optio aliquid architecto asperiores voluptates, debitis eligendi iure et atque rem labore? Assumenda dolorem tempore earum laborum ut totam quod, unde optio nobis perspiciatis reiciendis molestias quos voluptatibus asperiores, iure sint alias voluptatum consequatur incidunt aut adipisci cumque reprehenderit nostrum? Vita', '../public/images/photosProgramme/sm_juliette.jpg', '../public/images/photosProgramme/juliette.jpg', 'SAM. 30 AVRIL 20:00', 'romeo-et-juliette');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
