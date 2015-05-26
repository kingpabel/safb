-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2015 at 01:59 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zehn_staging`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_master`
--

CREATE TABLE IF NOT EXISTS `action_master` (
  `id` int(11) NOT NULL,
  `action_name` varchar(100) DEFAULT NULL,
  `auth_check` enum('yes','no') DEFAULT NULL,
  `action_type` enum('admin','website','api') DEFAULT NULL,
  `action_method` enum('get','post') DEFAULT NULL,
  `after_login_access` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_master`
--

INSERT INTO `action_master` (`id`, `action_name`, `auth_check`, `action_type`, `action_method`, `after_login_access`) VALUES
(1, 'share', 'no', 'website', 'get', 'yes'),
(2, 'twitter-redirect', 'no', 'website', 'get', 'yes'),
(3, 'social-login', 'no', 'website', 'get', 'yes'),
(4, 'twitter-auth', 'no', 'website', 'get', 'yes'),
(5, 'twitter-login', 'no', 'website', 'get', 'yes'),
(6, 'facebook-login', 'no', 'website', 'get', 'yes'),
(7, 'login/fb', 'no', 'website', 'get', 'yes'),
(8, 'login/fb/callback', 'no', 'website', 'get', 'yes'),
(9, 'activation', 'no', 'website', 'get', 'no'),
(10, 'sign-up', 'no', 'website', 'get', 'no'),
(11, 'sign-up', 'no', 'website', 'post', 'no'),
(12, 'signupwithsocialmedia', 'no', 'website', 'post', 'yes'),
(13, 'login', 'no', 'website', 'post', 'no'),
(14, 'logout', 'no', 'website', 'get', 'yes'),
(15, 'admin_logout', 'no', 'admin', 'get', 'yes'),
(16, '/', 'no', 'website', 'get', 'no'),
(17, 'home-available-contest', 'no', 'website', 'post', 'no'),
(18, 'home-available-contest', 'no', 'website', 'get', 'no'),
(19, 'forget-password', 'no', 'website', 'post', 'no'),
(20, 'forgot-password-view', 'no', 'website', 'get', 'no'),
(21, 'sendContestEmail', 'no', 'website', 'post', 'yes'),
(22, 'gShare', 'no', 'website', 'get', 'yes'),
(23, 'winners', 'no', 'website', 'get', 'yes'),
(24, 'pending-contests', 'yes', 'website', 'get', 'yes'),
(25, 'pending-contests', 'yes', 'website', 'post', 'yes'),
(26, 'available-contests', 'yes', 'website', 'get', 'yes'),
(27, 'available-contests', 'yes', 'website', 'post', 'yes'),
(28, 'join-contest', 'yes', 'website', 'get', 'yes'),
(29, 'join-contest', 'yes', 'website', 'post', 'yes'),
(30, 'joinAddedContest', 'yes', 'website', 'get', 'yes'),
(31, 'billingPopup', 'yes', 'website', 'get', 'yes'),
(32, 'my-contests', 'yes', 'website', 'get', 'yes'),
(33, 'count-answer', 'yes', 'website', 'get', 'yes'),
(34, 'replace-contest', 'yes', 'website', 'get', 'yes'),
(35, 'add-answer', 'yes', 'website', 'post', 'yes'),
(36, 'show-winner', 'yes', 'website', 'get', 'yes'),
(37, 'show-Change-Round', 'yes', 'website', 'get', 'yes'),
(38, 'deleteprofile', 'yes', 'website', 'post', 'yes'),
(39, 'deleteuser', 'yes', 'website', 'post', 'yes'),
(40, 'profile', 'yes', 'website', 'get', 'yes'),
(41, 'setprofile', 'yes', 'website', 'post', 'yes'),
(42, 'change-password', 'yes', 'website', 'post', 'yes'),
(43, 'subscribe-data', 'yes', 'website', 'post', 'yes'),
(44, 'shipping-info', 'yes', 'website', 'get', 'yes'),
(45, 'shipping-info', 'yes', 'website', 'post', 'yes'),
(46, 'billing-info', 'yes', 'website', 'get', 'yes'),
(47, 'check-expire', 'yes', 'website', 'get', 'yes'),
(48, 'invoices', 'yes', 'website', 'get', 'yes'),
(49, 'admin/login', 'no', 'admin', 'post', 'yes'),
(50, 'admin/login', 'no', 'admin', 'get', 'yes'),
(51, 'admin', 'no', 'admin', 'get', 'no'),
(52, 'admin/setadminprofile', 'yes', 'admin', 'post', 'yes'),
(53, 'admin/prizes', 'yes', 'admin', 'get', 'yes'),
(54, 'admin/prizes', 'yes', 'admin', 'post', 'yes'),
(55, 'admin/users', 'yes', 'admin', 'get', 'yes'),
(56, 'admin/users', 'yes', 'admin', 'post', 'yes'),
(57, 'admin/add-user', 'yes', 'admin', 'get', 'yes'),
(58, 'admin/add-user', 'yes', 'admin', 'post', 'yes'),
(59, 'admin/update-user', 'yes', 'admin', 'post', 'yes'),
(60, 'admin/myprofile', 'yes', 'admin', 'get', 'yes'),
(61, 'admin/settings/contests', 'yes', 'admin', 'get', 'yes'),
(62, 'admin/settings/prizes', 'yes', 'admin', 'get', 'yes'),
(63, 'showprize', 'yes', 'admin', 'get', 'yes'),
(64, 'editprize', 'yes', 'admin', 'get', 'yes'),
(65, 'admin/edit-prize', 'yes', 'admin', 'post', 'yes'),
(66, 'deleteprize', 'yes', 'admin', 'post', 'yes'),
(67, 'admin/add-prize', 'yes', 'admin', 'get', 'yes'),
(68, 'admin/add-prize', 'yes', 'admin', 'post', 'yes'),
(69, 'admin/questions', 'yes', 'admin', 'get', 'yes'),
(70, 'admin/questions', 'yes', 'admin', 'post', 'yes'),
(71, 'admin/add-question', 'yes', 'admin', 'get', 'yes'),
(72, 'admin/add-question', 'yes', 'admin', 'post', 'yes'),
(73, 'admin/edit-question', 'yes', 'admin', 'post', 'yes'),
(74, 'deletequestion', 'yes', 'admin', 'post', 'yes'),
(75, 'editquestion', 'yes', 'admin', 'get', 'yes'),
(76, 'admin/contests', 'yes', 'admin', 'get', 'yes'),
(77, 'admin/contests', 'yes', 'admin', 'post', 'yes'),
(78, 'admin/contests/contest', 'yes', 'admin', 'get', 'yes'),
(79, 'admin/add-contest', 'yes', 'admin', 'get', 'yes'),
(80, 'admin/add-contest', 'yes', 'admin', 'post', 'yes'),
(81, 'admin/edit-contest', 'yes', 'admin', 'post', 'yes'),
(82, 'editcontest', 'yes', 'admin', 'get', 'yes'),
(83, 'getQuestion1Ajax', 'yes', 'admin', 'get', 'yes'),
(84, 'getQuestion2Ajax', 'yes', 'admin', 'get', 'yes'),
(85, 'getQuestion3Ajax', 'yes', 'admin', 'get', 'yes'),
(86, 'deletecontest', 'yes', 'admin', 'post', 'yes'),
(87, 'viewcontest', 'yes', 'admin', 'get', 'yes'),
(88, 'viewcontestdetail', 'yes', 'admin', 'get', 'yes'),
(89, 'viewcontest', 'yes', 'admin', 'post', 'yes'),
(90, 'add-category-setting', 'yes', 'admin', 'post', 'yes'),
(91, 'add-prize-category-setting', 'yes', 'admin', 'post', 'yes'),
(92, 'showuser', 'yes', 'admin', 'get', 'yes'),
(93, 'edituser', 'yes', 'admin', 'get', 'yes'),
(94, 'admin/changeStatus', 'yes', 'admin', 'post', 'yes'),
(95, 'admin/deleteuser', 'yes', 'admin', 'post', 'yes'),
(96, 'how-it-works', 'no', 'website', 'get', 'yes'),
(97, 'about', 'no', 'website', 'get', 'yes'),
(98, 'contact', 'no', 'website', 'get', 'yes'),
(99, 'rules', 'no', 'website', 'get', 'yes'),
(100, 'terms', 'no', 'website', 'get', 'yes'),
(101, 'privacy', 'no', 'website', 'get', 'yes'),
(102, 'test', 'no', 'website', 'get', 'yes'),
(103, 'pay', 'no', 'website', 'get', 'yes'),
(104, 'logouthere', 'no', 'website', 'get', 'yes'),
(105, 'create-stripe-customer', 'no', 'website', 'post', 'yes'),
(106, 'pendingContestListApi', 'no', 'api', 'post', 'yes'),
(107, 'activeContestListApi', 'no', 'api', 'post', 'yes'),
(108, 'changePasswordApi', 'no', 'api', 'post', 'yes'),
(109, 'executeContestApi', 'no', 'api', 'get', 'yes'),
(110, 'executeMails', 'no', 'api', 'get', 'yes'),
(111, 'executeRounds', 'no', 'api', 'get', 'yes'),
(112, 'stripePaymentAfterElimination', 'no', 'api', 'get', 'yes'),
(113, 'contestListApi', 'no', 'api', 'post', 'yes'),
(114, 'joinContestApi', 'no', 'api', 'post', 'yes'),
(115, 'loginApi', 'no', 'api', 'post', 'yes'),
(116, 'signupApi', 'no', 'api', 'post', 'yes'),
(117, 'checkSocialMediaAccountApi', 'no', 'api', 'post', 'yes'),
(118, 'registrationWithSocialMediaApi', 'no', 'api', 'post', 'yes'),
(119, 'forgetPasswordApi', 'no', 'api', 'post', 'yes'),
(120, 'setEmailApi', 'no', 'api', 'post', 'yes'),
(121, 'setMyProfileApi', 'no', 'api', 'post', 'yes'),
(122, 'setShippingInfoApi', 'no', 'api', 'post', 'yes'),
(123, 'setBillingInfoApi', 'no', 'api', 'post', 'yes'),
(124, 'getStateApi', 'no', 'api', 'get', 'yes'),
(125, 'getPriceApi', 'no', 'api', 'get', 'yes'),
(126, 'getPriceCategoryApi', 'no', 'api', 'get', 'yes'),
(127, 'getContestCategoryApi', 'no', 'api', 'post', 'yes'),
(128, 'deleteUserAccountApi', 'no', 'api', 'post', 'yes'),
(129, 'getAvailableContestlistApi', 'no', 'api', 'post', 'yes'),
(130, 'getActiveContestDetailApi', 'no', 'api', 'post', 'yes'),
(131, 'addAnswerApi', 'no', 'api', 'post', 'yes'),
(132, 'getUserDetailById', 'no', 'api', 'post', 'yes'),
(133, 'getTotalActiveContest', 'no', 'api', 'post', 'yes'),
(134, 'setusernotification', 'no', 'api', 'post', 'yes'),
(135, 'setShippingSession', 'no', 'website', 'post', 'yes'),
(1, 'share', 'no', 'website', 'get', 'yes'),
(2, 'twitter-redirect', 'no', 'website', 'get', 'yes'),
(3, 'social-login', 'no', 'website', 'get', 'yes'),
(4, 'twitter-auth', 'no', 'website', 'get', 'yes'),
(5, 'twitter-login', 'no', 'website', 'get', 'yes'),
(6, 'facebook-login', 'no', 'website', 'get', 'yes'),
(7, 'login/fb', 'no', 'website', 'get', 'yes'),
(8, 'login/fb/callback', 'no', 'website', 'get', 'yes'),
(9, 'activation', 'no', 'website', 'get', 'no'),
(10, 'sign-up', 'no', 'website', 'get', 'no'),
(11, 'sign-up', 'no', 'website', 'post', 'no'),
(12, 'signupwithsocialmedia', 'no', 'website', 'post', 'yes'),
(13, 'login', 'no', 'website', 'post', 'no'),
(14, 'logout', 'no', 'website', 'get', 'yes'),
(15, 'admin_logout', 'no', 'admin', 'get', 'yes'),
(16, '/', 'no', 'website', 'get', 'no'),
(17, 'home-available-contest', 'no', 'website', 'post', 'no'),
(18, 'home-available-contest', 'no', 'website', 'get', 'no'),
(19, 'forget-password', 'no', 'website', 'post', 'no'),
(20, 'forgot-password-view', 'no', 'website', 'get', 'no'),
(21, 'sendContestEmail', 'no', 'website', 'post', 'yes'),
(22, 'gShare', 'no', 'website', 'get', 'yes'),
(23, 'winners', 'no', 'website', 'get', 'yes'),
(24, 'pending-contests', 'yes', 'website', 'get', 'yes'),
(25, 'pending-contests', 'yes', 'website', 'post', 'yes'),
(26, 'available-contests', 'yes', 'website', 'get', 'yes'),
(27, 'available-contests', 'yes', 'website', 'post', 'yes'),
(28, 'join-contest', 'yes', 'website', 'get', 'yes'),
(29, 'join-contest', 'yes', 'website', 'post', 'yes'),
(30, 'joinAddedContest', 'yes', 'website', 'get', 'yes'),
(31, 'billingPopup', 'yes', 'website', 'get', 'yes'),
(32, 'my-contests', 'yes', 'website', 'get', 'yes'),
(33, 'count-answer', 'yes', 'website', 'get', 'yes'),
(34, 'replace-contest', 'yes', 'website', 'get', 'yes'),
(35, 'add-answer', 'yes', 'website', 'post', 'yes'),
(36, 'show-winner', 'yes', 'website', 'get', 'yes'),
(37, 'show-Change-Round', 'yes', 'website', 'get', 'yes'),
(38, 'deleteprofile', 'yes', 'website', 'post', 'yes'),
(39, 'deleteuser', 'yes', 'website', 'post', 'yes'),
(40, 'profile', 'yes', 'website', 'get', 'yes'),
(41, 'setprofile', 'yes', 'website', 'post', 'yes'),
(42, 'change-password', 'yes', 'website', 'post', 'yes'),
(43, 'subscribe-data', 'yes', 'website', 'post', 'yes'),
(44, 'shipping-info', 'yes', 'website', 'get', 'yes'),
(45, 'shipping-info', 'yes', 'website', 'post', 'yes'),
(46, 'billing-info', 'yes', 'website', 'get', 'yes'),
(47, 'check-expire', 'yes', 'website', 'get', 'yes'),
(48, 'invoices', 'yes', 'website', 'get', 'yes'),
(49, 'admin/login', 'no', 'admin', 'post', 'yes'),
(50, 'admin/login', 'no', 'admin', 'get', 'yes'),
(51, 'admin', 'no', 'admin', 'get', 'no'),
(52, 'admin/setadminprofile', 'yes', 'admin', 'post', 'yes'),
(53, 'admin/prizes', 'yes', 'admin', 'get', 'yes'),
(54, 'admin/prizes', 'yes', 'admin', 'post', 'yes'),
(55, 'admin/users', 'yes', 'admin', 'get', 'yes'),
(56, 'admin/users', 'yes', 'admin', 'post', 'yes'),
(57, 'admin/add-user', 'yes', 'admin', 'get', 'yes'),
(58, 'admin/add-user', 'yes', 'admin', 'post', 'yes'),
(59, 'admin/update-user', 'yes', 'admin', 'post', 'yes'),
(60, 'admin/myprofile', 'yes', 'admin', 'get', 'yes'),
(61, 'admin/settings/contests', 'yes', 'admin', 'get', 'yes'),
(62, 'admin/settings/prizes', 'yes', 'admin', 'get', 'yes'),
(63, 'showprize', 'yes', 'admin', 'get', 'yes'),
(64, 'editprize', 'yes', 'admin', 'get', 'yes'),
(65, 'admin/edit-prize', 'yes', 'admin', 'post', 'yes'),
(66, 'deleteprize', 'yes', 'admin', 'post', 'yes'),
(67, 'admin/add-prize', 'yes', 'admin', 'get', 'yes'),
(68, 'admin/add-prize', 'yes', 'admin', 'post', 'yes'),
(69, 'admin/questions', 'yes', 'admin', 'get', 'yes'),
(70, 'admin/questions', 'yes', 'admin', 'post', 'yes'),
(71, 'admin/add-question', 'yes', 'admin', 'get', 'yes'),
(72, 'admin/add-question', 'yes', 'admin', 'post', 'yes'),
(73, 'admin/edit-question', 'yes', 'admin', 'post', 'yes'),
(74, 'deletequestion', 'yes', 'admin', 'post', 'yes'),
(75, 'editquestion', 'yes', 'admin', 'get', 'yes'),
(76, 'admin/contests', 'yes', 'admin', 'get', 'yes'),
(77, 'admin/contests', 'yes', 'admin', 'post', 'yes'),
(78, 'admin/contests/contest', 'yes', 'admin', 'get', 'yes'),
(79, 'admin/add-contest', 'yes', 'admin', 'get', 'yes'),
(80, 'admin/add-contest', 'yes', 'admin', 'post', 'yes'),
(81, 'admin/edit-contest', 'yes', 'admin', 'post', 'yes'),
(82, 'editcontest', 'yes', 'admin', 'get', 'yes'),
(83, 'getQuestion1Ajax', 'yes', 'admin', 'get', 'yes'),
(84, 'getQuestion2Ajax', 'yes', 'admin', 'get', 'yes'),
(85, 'getQuestion3Ajax', 'yes', 'admin', 'get', 'yes'),
(86, 'deletecontest', 'yes', 'admin', 'post', 'yes'),
(87, 'viewcontest', 'yes', 'admin', 'get', 'yes'),
(88, 'viewcontestdetail', 'yes', 'admin', 'get', 'yes'),
(89, 'viewcontest', 'yes', 'admin', 'post', 'yes'),
(90, 'add-category-setting', 'yes', 'admin', 'post', 'yes'),
(91, 'add-prize-category-setting', 'yes', 'admin', 'post', 'yes'),
(92, 'showuser', 'yes', 'admin', 'get', 'yes'),
(93, 'edituser', 'yes', 'admin', 'get', 'yes'),
(94, 'admin/changeStatus', 'yes', 'admin', 'post', 'yes'),
(95, 'admin/deleteuser', 'yes', 'admin', 'post', 'yes'),
(96, 'how-it-works', 'no', 'website', 'get', 'yes'),
(97, 'about', 'no', 'website', 'get', 'yes'),
(98, 'contact', 'no', 'website', 'get', 'yes'),
(99, 'rules', 'no', 'website', 'get', 'yes'),
(100, 'terms', 'no', 'website', 'get', 'yes'),
(101, 'privacy', 'no', 'website', 'get', 'yes'),
(102, 'test', 'no', 'website', 'get', 'yes'),
(103, 'pay', 'no', 'website', 'get', 'yes'),
(104, 'logouthere', 'no', 'website', 'get', 'yes'),
(105, 'create-stripe-customer', 'no', 'website', 'post', 'yes'),
(106, 'pendingContestListApi', 'no', 'api', 'post', 'yes'),
(107, 'activeContestListApi', 'no', 'api', 'post', 'yes'),
(108, 'changePasswordApi', 'no', 'api', 'post', 'yes'),
(109, 'executeContestApi', 'no', 'api', 'get', 'yes'),
(110, 'executeMails', 'no', 'api', 'get', 'yes'),
(111, 'executeRounds', 'no', 'api', 'get', 'yes'),
(112, 'stripePaymentAfterElimination', 'no', 'api', 'get', 'yes'),
(113, 'contestListApi', 'no', 'api', 'post', 'yes'),
(114, 'joinContestApi', 'no', 'api', 'post', 'yes'),
(115, 'loginApi', 'no', 'api', 'post', 'yes'),
(116, 'signupApi', 'no', 'api', 'post', 'yes'),
(117, 'checkSocialMediaAccountApi', 'no', 'api', 'post', 'yes'),
(118, 'registrationWithSocialMediaApi', 'no', 'api', 'post', 'yes'),
(119, 'forgetPasswordApi', 'no', 'api', 'post', 'yes'),
(120, 'setEmailApi', 'no', 'api', 'post', 'yes'),
(121, 'setMyProfileApi', 'no', 'api', 'post', 'yes'),
(122, 'setShippingInfoApi', 'no', 'api', 'post', 'yes'),
(123, 'setBillingInfoApi', 'no', 'api', 'post', 'yes'),
(124, 'getStateApi', 'no', 'api', 'get', 'yes'),
(125, 'getPriceApi', 'no', 'api', 'get', 'yes'),
(126, 'getPriceCategoryApi', 'no', 'api', 'get', 'yes'),
(127, 'getContestCategoryApi', 'no', 'api', 'post', 'yes'),
(128, 'deleteUserAccountApi', 'no', 'api', 'post', 'yes'),
(129, 'getAvailableContestlistApi', 'no', 'api', 'post', 'yes'),
(130, 'getActiveContestDetailApi', 'no', 'api', 'post', 'yes'),
(131, 'addAnswerApi', 'no', 'api', 'post', 'yes'),
(132, 'getUserDetailById', 'no', 'api', 'post', 'yes'),
(133, 'getTotalActiveContest', 'no', 'api', 'post', 'yes'),
(134, 'setusernotification', 'no', 'api', 'post', 'yes'),
(135, 'setShippingSession', 'no', 'website', 'post', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer` text
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `answer`) VALUES
(1, 4, '1|&2|&3'),
(2, 5, '1|&2|&3'),
(3, 6, '1|&2|&3'),
(4, 7, '1|&2|&3'),
(5, 8, '2|&2'),
(6, 9, '1|&2'),
(7, 10, '1|&2'),
(8, 11, '3|&4'),
(9, 12, '1|&2'),
(10, 13, '1|&2'),
(11, 14, '1|&2|&5'),
(12, 15, '1|&2|&5'),
(13, 16, '2|&3'),
(14, 17, '1|&2'),
(15, 18, '3'),
(16, 19, 'super|&duper'),
(17, 20, '1-1'),
(18, 21, '2-3|&4'),
(19, 22, '3'),
(20, 23, 'a'),
(21, 24, 'yes|&no'),
(22, 25, 't|&3|&e'),
(23, 26, '4|&6|&7'),
(24, 27, '1|&2|&4'),
(25, 28, '2|&3|&4'),
(26, 29, '1|&2|&3'),
(27, 30, '1|&2|&3'),
(28, 31, '1|&2|&3'),
(29, 32, 'jjj|&J|&L'),
(30, 33, '2'),
(31, 34, '4'),
(32, 35, 'ad'),
(33, 36, '42'),
(34, 37, 'afa'),
(35, 38, '4'),
(36, 39, 'af'),
(37, 40, 'afaf'),
(38, 41, 'af'),
(39, 42, 'electron'),
(40, 43, 'Stephen Hawkins'),
(41, 44, 'energy');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL,
  `contestCategory_id` int(11) DEFAULT NULL,
  `question_id_round_1` int(11) DEFAULT NULL COMMENT 'Question id which is asked in round 1, should be linked with question id from question table having round=1.',
  `question_id_round_2` int(11) DEFAULT NULL COMMENT 'Question id which is asked in round 2, should be linked with question id from question table having round=2.',
  `question_id_round_3` int(11) DEFAULT NULL COMMENT 'Question id which is asked in round 3, should be linked with question id from question table having round=3.',
  `lifetime` smallint(6) DEFAULT NULL COMMENT 'Integer, as it is entered as number of days the contest is alive.',
  `elimination_fee` decimal(10,2) DEFAULT NULL,
  `contestant_limit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `updated_by_user_id` int(11) DEFAULT NULL,
  `created_by_user_id` int(11) DEFAULT NULL,
  `status` enum('Active','Inactive','Deleted') DEFAULT 'Active',
  `activated_at` timestamp NULL DEFAULT NULL,
  `prize_id` int(11) DEFAULT NULL,
  `contest_status` enum('NEW','ACTIVE','EXPIRED','COMPLETED','COMPLETED','NOTCOMPLETED') DEFAULT 'NEW',
  `contest_unique_id` varchar(20) DEFAULT NULL,
  `contest_url_name` varchar(45) DEFAULT NULL,
  `question_distribution_time` int(11) DEFAULT '6',
  `answer_given_time` int(11) DEFAULT '1',
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`id`, `contestCategory_id`, `question_id_round_1`, `question_id_round_2`, `question_id_round_3`, `lifetime`, `elimination_fee`, `contestant_limit`, `created_at`, `updated_at`, `updated_by_user_id`, `created_by_user_id`, `status`, `activated_at`, `prize_id`, `contest_status`, `contest_unique_id`, `contest_url_name`, `question_distribution_time`, `answer_given_time`, `expired_at`) VALUES
(1, 1, 9, 14, 17, 6, 8.63, 500, '2015-05-01 09:11:39', '2015-05-01 09:31:56', 1, 1, 'Deleted', NULL, 4, 'EXPIRED', '000001', '000001', 1, 1, '2015-05-07 09:11:39'),
(2, 5, 9, 12, 13, 7, 5.00, 750, '2015-05-05 23:09:07', NULL, NULL, 1, 'Deleted', NULL, 8, 'NEW', '000002', '000002', 1, 1, '2015-05-12 23:09:07'),
(3, 1, 28, 30, 31, 2, 56.00, 500, '2015-05-12 06:13:16', NULL, NULL, 1, 'Deleted', NULL, 4, 'EXPIRED', '000003', '000003', 1, 1, '2015-05-14 06:13:16'),
(4, 1, 28, 30, 31, 3, 5.00, 250, '2015-05-12 15:25:05', '2015-05-17 08:04:51', 1, 1, 'Deleted', '2015-05-14 19:18:01', 8, 'EXPIRED', '000004', '000004', 1, 1, '2015-05-15 15:25:05'),
(5, 1, 29, 30, 31, 1, 5.00, 1, '2015-05-12 19:36:34', NULL, NULL, 1, 'Deleted', '2015-05-13 09:59:01', 8, 'NOTCOMPLETED', '000005', '000005', 1, 1, '2015-05-13 19:36:34'),
(6, 5, 38, 33, 34, 10, 44.00, 3, '2015-05-14 06:51:01', '2015-05-15 05:33:31', 1, 1, 'Active', '2015-05-17 14:04:01', 8, 'NOTCOMPLETED', '000006', '000006', 1, 1, '2015-05-24 06:51:01'),
(7, 1, 28, 30, 31, 1, 1.00, 250, '2015-05-14 13:44:31', NULL, NULL, 1, 'Deleted', NULL, 5, 'EXPIRED', '000007', '000007', 1, 1, '2015-05-15 13:44:31'),
(8, 1, 28, 30, 31, 4, 3.00, 4, '2015-05-14 18:13:01', NULL, NULL, 1, 'Active', '2015-05-17 17:40:01', 5, 'COMPLETED', '000008', '000008', 1, 1, '2015-05-18 18:13:00'),
(9, 5, 38, 33, 34, 3, 55.00, 4, '2015-05-14 18:13:22', '2015-05-15 05:31:48', 1, 1, 'Deleted', '2015-05-15 20:54:01', 1, 'COMPLETED', '000009', '000009', 1, 1, '2015-05-17 18:13:22'),
(10, 1, 28, 30, 31, 4, 6.00, 4, '2015-05-14 18:13:34', NULL, NULL, 1, 'Active', '2015-05-17 13:54:02', 7, 'NOTCOMPLETED', '000010', '000010', 1, 1, '2015-05-18 18:13:34'),
(11, 2, 36, 37, 32, 6, 67.00, 1, '2015-05-14 18:13:52', '2015-05-15 05:32:35', 1, 1, 'Active', '2015-05-17 09:08:01', 4, 'NOTCOMPLETED', '000011', '000011', 1, 1, '2015-05-20 18:13:52'),
(12, 9, 39, 40, 41, 3, 4.00, 2, '2015-05-15 06:29:46', NULL, NULL, 1, 'Deleted', '2015-05-15 11:44:01', 5, 'NOTCOMPLETED', '000012', '000012', 1, 1, '2015-05-18 06:29:46'),
(14, 1, 28, 30, 31, 1, 9.00, 750, '2015-05-15 17:17:48', NULL, NULL, 1, 'Deleted', NULL, 5, 'EXPIRED', '000014', '000014', 1, 1, '2015-05-16 17:17:48'),
(15, 9, 39, 40, 41, 0, 0.00, 250, '2015-05-17 04:07:33', NULL, NULL, 1, 'Deleted', NULL, 5, 'EXPIRED', '000015', '000015', 1, 1, '2015-05-17 04:07:33'),
(16, 9, 39, 40, 41, 1, 0.00, 1, '2015-05-17 08:06:49', NULL, NULL, 1, 'Active', '2015-05-17 12:08:01', 4, 'NOTCOMPLETED', '000016', '000016', 1, 1, '2015-05-18 08:06:49'),
(17, 9, 39, 40, 41, 1, 0.00, 1, '2015-05-17 08:11:41', NULL, NULL, 1, 'Active', '2015-05-17 12:13:01', 8, 'NOTCOMPLETED', '000017', '000017', 1, 1, '2015-05-18 08:11:41'),
(18, 5, 38, 33, 34, 1, 0.00, 1, '2015-05-17 08:14:49', NULL, NULL, 1, 'Active', '2015-05-17 12:20:01', 7, 'NOTCOMPLETED', '000018', '000018', 1, 1, '2015-05-18 08:14:49'),
(19, 9, 39, 40, 41, 1, 0.00, 2, '2015-05-17 09:12:02', NULL, NULL, 1, 'Deleted', '2015-05-17 13:24:02', 1, 'NOTCOMPLETED', '000019', '000019', 1, 1, '2015-05-18 09:12:02'),
(20, 1, 28, 30, 31, 1, 1.00, 2, '2015-05-17 14:05:11', NULL, NULL, 1, 'Active', '2015-05-17 18:08:01', 5, 'COMPLETED', '000020', '000020', 1, 1, '2015-05-18 14:05:11'),
(21, 1, 28, 30, 31, 1, 1.00, 3, '2015-05-17 15:09:56', NULL, NULL, 1, 'Active', '2015-05-17 21:52:01', 5, 'NOTCOMPLETED', '000021', '000021', 1, 1, '2015-05-18 15:09:56'),
(22, 5, 38, 33, 34, 1, 1.00, 2, '2015-05-17 15:10:09', NULL, NULL, 1, 'Active', '2015-05-17 19:23:01', 8, 'NOTCOMPLETED', '000022', '000022', 1, 1, '2015-05-18 15:10:09'),
(23, 9, 39, 40, 41, 1, 2.00, 500, '2015-05-17 17:21:56', NULL, NULL, 1, 'Deleted', NULL, 5, 'NEW', '000023', '000023', 1, 1, '2015-05-18 17:21:56'),
(24, 5, 38, 33, 34, 4, 4.00, 4, '2015-05-17 17:22:14', NULL, NULL, 1, 'Active', '2015-05-17 21:34:01', 8, 'NOTCOMPLETED', '000024', '000024', 1, 1, '2015-05-21 17:22:14'),
(25, 10, 42, 43, 44, 2, 10.00, 3, '2015-05-17 18:08:57', NULL, NULL, 1, 'Active', '2015-05-18 00:02:01', 10, 'NOTCOMPLETED', '000025', '000025', 1, 1, '2015-05-19 18:08:57'),
(26, 10, 42, 43, 44, 3, 5.00, 1, '2015-05-18 12:50:54', NULL, NULL, 1, 'Active', '2015-05-19 18:12:01', 10, 'NOTCOMPLETED', '000026', '000026', 1, 1, '2015-05-21 12:50:54'),
(27, 5, 38, 33, 34, 6, 20.00, 1, '2015-05-18 13:03:18', NULL, NULL, 1, 'Active', '2015-05-19 18:12:01', 5, 'NOTCOMPLETED', '000027', '000027', 1, 1, '2015-05-24 13:03:18'),
(28, 5, 38, 33, 34, 8, 5.00, 2, '2015-05-19 16:09:29', NULL, NULL, 1, 'Active', '2015-05-19 20:44:01', 5, 'NOTCOMPLETED', '000028', '000028', 1, 1, '2015-05-27 16:09:29'),
(29, 5, 38, 33, 34, 5, 5.00, 1, '2015-05-19 16:09:46', NULL, NULL, 1, 'Active', '2015-05-21 18:10:01', 8, 'NOTCOMPLETED', '000029', '000029', 1, 1, '2015-05-24 16:09:46'),
(30, 10, 42, 43, 44, 5, 5.00, 250, '2015-05-19 16:10:03', NULL, NULL, 1, 'Active', NULL, 10, 'EXPIRED', '000030', '000030', 1, 1, '2015-05-24 16:10:03'),
(31, 10, 42, 43, 44, 6, 5.00, 1, '2015-05-24 05:00:39', NULL, NULL, 1, 'Active', '2015-05-24 09:18:02', 5, 'NOTCOMPLETED', '000031', '000031', 1, 1, '2015-05-30 05:00:39'),
(32, 10, 42, 43, 44, 7, 10.00, 750, '2015-05-25 06:24:18', NULL, NULL, 1, 'Active', NULL, 10, 'NEW', '000032', '000032', 1, 1, '2015-06-01 06:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `contestcategory`
--

CREATE TABLE IF NOT EXISTS `contestcategory` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT '',
  `status` enum('0','1') DEFAULT '0' COMMENT '''0'' for inactive and ''1'' for active contest category'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestcategory`
--

INSERT INTO `contestcategory` (`id`, `title`, `status`) VALUES
(1, 'Contest Category 1', '1'),
(2, 'Contest Category 2', '1'),
(5, 'Food Lover', '1'),
(9, 'thiswork', '1'),
(10, 'Science', '1'),
(11, 'Adventure', '1'),
(12, 'Zendofalpha', '1'),
(13, 'Alpha', '1'),
(14, 'Omega', '1'),
(15, 'Zend', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contest_expiration_mail_table`
--

CREATE TABLE IF NOT EXISTS `contest_expiration_mail_table` (
  `id` int(11) NOT NULL,
  `contest_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contest_unique_id` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `device_id` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(25) DEFAULT NULL,
  `notification_status` enum('on','off') DEFAULT 'on'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_expiration_mail_table`
--

INSERT INTO `contest_expiration_mail_table` (`id`, `contest_id`, `user_id`, `contest_unique_id`, `first_name`, `last_name`, `email`, `added_date`, `status`, `device_id`, `mobile_no`, `notification_status`) VALUES
(1, 3, 7, '000003', 'Richard', 'Richardson', 'rmrichardson24@gmail.com', '2015-05-14 06:14:01', 'Active', NULL, '', 'on'),
(2, 7, 21, '000007', 'd', 'd', 'DD36yKQ999Rc@meltmail.com', '2015-05-15 13:45:01', 'Active', NULL, '', 'on'),
(3, 14, 7, '000014', 'Richard', 'Richardson', 'rmrichardson24@gmail.com', '2015-05-16 17:18:01', 'Active', NULL, '', 'on'),
(4, 4, 21, '000004', 'd', 'd', 'DD36yKQ999Rc@meltmail.com', '2015-05-17 08:05:01', 'Active', NULL, '', 'on'),
(5, 30, 40, '000030', 'Smit', 'S', 'work.smit@gmail.com', '2015-05-24 16:11:01', 'Active', NULL, '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `contest_has_user`
--

CREATE TABLE IF NOT EXISTS `contest_has_user` (
  `id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `user_user_id` int(11) NOT NULL,
  `join_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` enum('PAID') DEFAULT NULL COMMENT 'Payment status for a contest, paid or not paid for a contest.',
  `level` enum('1','2','3','4') DEFAULT NULL,
  `stripe_charge_id` varchar(45) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest_has_user`
--

INSERT INTO `contest_has_user` (`id`, `contest_id`, `user_user_id`, `join_date_time`, `payment_status`, `level`, `stripe_charge_id`, `status`) VALUES
(1, 3, 7, '2015-05-12 18:32:49', NULL, '1', NULL, 'Active'),
(2, 5, 7, '2015-05-13 09:58:07', NULL, '1', NULL, 'Inactive'),
(3, 7, 21, '2015-05-14 18:11:31', NULL, '1', NULL, 'Active'),
(4, 4, 21, '2015-05-14 18:11:35', NULL, '1', NULL, 'Inactive'),
(5, 6, 7, '2015-05-14 19:20:40', NULL, '1', NULL, 'Inactive'),
(6, 13, 11, '2015-05-15 10:53:51', NULL, '1', NULL, 'Active'),
(7, 13, 15, '2015-05-15 11:00:35', NULL, '1', NULL, 'Active'),
(8, 12, 15, '2015-05-15 11:42:30', NULL, '1', NULL, 'Inactive'),
(9, 12, 11, '2015-05-15 11:42:34', NULL, '1', NULL, 'Inactive'),
(10, 9, 20, '2015-05-15 20:32:49', NULL, '1', NULL, 'Inactive'),
(11, 9, 7, '2015-05-15 20:43:40', NULL, '1', NULL, 'Active'),
(12, 9, 19, '2015-05-15 20:43:42', NULL, '1', NULL, 'Inactive'),
(13, 9, 17, '2015-05-15 20:53:09', NULL, '1', NULL, 'Active'),
(14, 9, 17, '2015-05-15 20:53:09', NULL, '2', NULL, 'Inactive'),
(15, 9, 7, '2015-05-15 20:43:40', NULL, '2', NULL, 'Active'),
(16, 6, 21, '2015-05-15 23:50:52', NULL, '1', NULL, 'Inactive'),
(17, 8, 21, '2015-05-15 23:50:57', NULL, '1', NULL, 'Inactive'),
(18, 11, 21, '2015-05-15 23:50:59', NULL, '1', NULL, 'Inactive'),
(19, 10, 21, '2015-05-15 23:50:58', NULL, '1', NULL, 'Inactive'),
(20, 14, 7, '2015-05-16 00:00:14', NULL, '1', NULL, 'Active'),
(21, 11, 7, '2015-05-16 00:00:15', NULL, '1', NULL, 'Inactive'),
(22, 9, 7, '2015-05-15 20:43:40', NULL, '3', NULL, 'Active'),
(23, 9, 7, '2015-05-15 20:43:40', NULL, '4', NULL, 'Active'),
(24, 8, 7, '2015-05-16 20:40:15', NULL, '1', NULL, 'Active'),
(25, 10, 7, '2015-05-16 22:51:09', NULL, '1', NULL, 'Inactive'),
(26, 11, 32, '2015-05-17 09:03:40', NULL, '1', NULL, 'Inactive'),
(27, 16, 32, '2015-05-17 12:07:59', NULL, '1', NULL, 'Inactive'),
(28, 17, 32, '2015-05-17 12:12:14', NULL, '1', NULL, 'Inactive'),
(29, 18, 32, '2015-05-17 12:19:14', NULL, '1', NULL, 'Inactive'),
(30, 8, 32, '2015-05-17 13:08:47', NULL, '1', NULL, 'Inactive'),
(31, 19, 32, '2015-05-17 13:14:16', NULL, '1', NULL, 'Inactive'),
(32, 19, 33, '2015-05-17 13:23:40', NULL, '1', NULL, 'Inactive'),
(33, 6, 32, '2015-05-17 13:54:54', NULL, '1', NULL, 'Inactive'),
(34, 6, 33, '2015-05-17 14:03:12', NULL, '1', NULL, 'Inactive'),
(35, 8, 31, '2015-05-17 17:39:10', NULL, '1', NULL, 'Active'),
(36, 8, 7, '2015-05-16 20:40:15', NULL, '2', NULL, 'Active'),
(37, 8, 31, '2015-05-17 17:39:10', NULL, '2', NULL, 'Active'),
(38, 8, 7, '2015-05-16 20:40:15', NULL, '3', NULL, 'Inactive'),
(39, 8, 31, '2015-05-17 17:39:10', NULL, '3', NULL, 'Active'),
(40, 8, 31, '2015-05-17 17:39:10', NULL, '4', NULL, 'Active'),
(41, 20, 31, '2015-05-17 18:07:53', NULL, '1', NULL, 'Inactive'),
(42, 20, 7, '2015-05-17 18:07:58', NULL, '1', NULL, 'Active'),
(43, 20, 7, '2015-05-17 18:07:58', NULL, '2', NULL, 'Active'),
(44, 20, 7, '2015-05-17 18:07:58', NULL, '3', NULL, 'Active'),
(45, 20, 7, '2015-05-17 18:07:58', NULL, '4', NULL, 'Active'),
(46, 22, 7, '2015-05-17 19:21:59', NULL, '1', NULL, 'Inactive'),
(47, 21, 7, '2015-05-17 19:21:59', NULL, '1', NULL, 'Inactive'),
(48, 22, 31, '2015-05-17 19:22:02', NULL, '1', NULL, 'Active'),
(49, 21, 31, '2015-05-17 19:22:06', NULL, '1', NULL, 'Inactive'),
(50, 22, 31, '2015-05-17 19:22:02', NULL, '2', NULL, 'Inactive'),
(51, 24, 18, '2015-05-17 21:23:54', NULL, '1', NULL, 'Inactive'),
(52, 24, 31, '2015-05-17 21:24:08', NULL, '1', NULL, 'Active'),
(53, 24, 7, '2015-05-17 21:24:18', NULL, '1', NULL, 'Active'),
(54, 24, 16, '2015-05-17 21:33:11', NULL, '1', NULL, 'Inactive'),
(55, 24, 7, '2015-05-17 21:24:18', NULL, '2', NULL, 'Inactive'),
(56, 24, 31, '2015-05-17 21:24:08', NULL, '2', NULL, 'Inactive'),
(57, 21, 18, '2015-05-17 21:51:29', NULL, '1', NULL, 'Inactive'),
(58, 25, 32, '2015-05-17 23:15:18', NULL, '1', NULL, 'Inactive'),
(59, 25, 7, '2015-05-18 00:00:43', NULL, '1', NULL, 'Active'),
(60, 25, 18, '2015-05-18 00:01:38', NULL, '1', NULL, 'Inactive'),
(61, 25, 7, '2015-05-18 00:00:43', NULL, '2', NULL, 'Inactive'),
(62, 26, 7, '2015-05-19 18:11:26', NULL, '1', NULL, 'Inactive'),
(63, 27, 7, '2015-05-19 18:11:27', NULL, '1', NULL, 'Inactive'),
(64, 28, 7, '2015-05-19 20:36:22', NULL, '1', NULL, 'Active'),
(65, 28, 20, '2015-05-19 20:43:43', NULL, '1', NULL, 'Inactive'),
(66, 28, 7, '2015-05-19 20:36:22', NULL, '2', NULL, 'Inactive'),
(69, 29, 40, '2015-05-21 18:09:33', NULL, '1', NULL, 'Inactive'),
(70, 30, 40, '2015-05-21 18:28:51', NULL, '1', NULL, 'Active'),
(71, 31, 7, '2015-05-24 09:17:58', NULL, '1', NULL, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT '',
  `prizeCategory_id` int(11) DEFAULT NULL,
  `value` varchar(45) DEFAULT '',
  `description` text,
  `photo_path` varchar(255) DEFAULT '',
  `photo_name` varchar(255) DEFAULT '',
  `photo_system_name` varchar(255) DEFAULT '',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `updated_by_user_id` int(11) DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '1' COMMENT '''1'' for active question, ''0'' for inactive or deleted'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id`, `name`, `prizeCategory_id`, `value`, `description`, `photo_path`, `photo_name`, `photo_system_name`, `created_at`, `updated_at`, `created_by_user_id`, `updated_by_user_id`, `status`) VALUES
(1, 'tt', 3, '7', 'sdf sdf', 'uploads/prize_pictures/', 'sly1.jpg', 'uploads/prize_pictures/1431171431sly1.jpg', '2015-05-09 11:37:11', NULL, 1, NULL, '2'),
(4, 'Music Night with Mark', 1, '233', 'Entry pass for music NIght Centere Square NY', 'uploads/prize_pictures/', '1430173305lyle.JPG', 'uploads/prize_pictures/14304686061430173305lyle.JPG', '2015-05-01 08:23:26', NULL, 1, 1, '1'),
(5, 'Rolex (Presidential)', 2, '25000', 'Nice watch', 'uploads/prize_pictures/', 'Latest-Designs-of-Rolex-Swiss-Day-Date-President-Watches-2014-6.jpg', 'uploads/prize_pictures/1431713877Latest-Designs-of-Rolex-Swiss-Day-Date-President-Watches-2014-6.jpg', '2015-05-01 08:23:54', NULL, 1, 1, '1'),
(6, 'MICHAEL G', 2, '1', 'test2', 'uploads/prize_pictures/', 'bowie with glasses.jpg', 'uploads/prize_pictures/1430494835bowie with glasses.jpg', '2015-05-01 15:40:35', NULL, 1, 1, '2'),
(7, 'rich test-updatename', 2, '342488888', 'afewegerg - updated description ', 'uploads/prize_pictures/', '1079x1048.png', 'uploads/prize_pictures/14307649481079x1048.png', '2015-05-01 16:22:17', NULL, 1, 1, '1'),
(8, 'Vitamix - Professional Series 750', 1, '700', 'Next generation, premium blending with more powerful motors and sleek designs that fit under the counter.', 'uploads/prize_pictures/', 'brandedcontest.jpg', 'uploads/prize_pictures/1430867186brandedcontest.jpg', '2015-05-05 23:06:26', NULL, 1, NULL, '1'),
(9, 'Kkkk', 1, '4', 'jijkjihkhiuu', 'uploads/prize_pictures/', 'image.jpg', 'uploads/prize_pictures/1431459003image.jpg', '2015-05-12 19:30:03', NULL, 1, NULL, '2'),
(10, 'Flight to New York City', 6, '500', 'Flight to new york', 'uploads/prize_pictures/', 'photodune-2542896-new-york-m-600x500.jpg', 'uploads/prize_pictures/1431886108photodune-2542896-new-york-m-600x500.jpg', '2015-05-17 18:08:28', NULL, 1, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `prizecategory`
--

CREATE TABLE IF NOT EXISTS `prizecategory` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT '',
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '''0'' for inactive and ''1'' for active prize category'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prizecategory`
--

INSERT INTO `prizecategory` (`id`, `title`, `status`) VALUES
(1, 'Price Category1', '1'),
(2, ' Price Category2', '1'),
(4, 'testeee', '1'),
(5, 'two three', '1'),
(6, 'Travel', '1'),
(7, 'Alpha', '1'),
(8, 'Omega', '1'),
(9, 'ZastOnDaList', '1'),
(10, 'G-Unit', '1'),
(11, 'Smazing', '1');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL,
  `contestCategory_id` int(11) DEFAULT NULL COMMENT 'Contest category',
  `question` text NOT NULL,
  `round` enum('1','2','3') NOT NULL COMMENT 'Questions to be asked in different rounds:\n''1'' : Round 1,\n''2'': Round 2,\n''3'': Round 3.',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `updated_by_user_id` int(11) DEFAULT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '''0'' for Inactive or deleted and ''1'' for Active'
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `contestCategory_id`, `question`, `round`, `created_at`, `updated_at`, `created_by_user_id`, `updated_by_user_id`, `status`) VALUES
(28, 1, 'Round1 Question', '1', '2015-05-12 06:02:20', NULL, 1, NULL, '1'),
(29, 1, 'Round 1 Question Again', '1', '2015-05-12 06:02:56', NULL, 1, NULL, '1'),
(30, 1, 'Round2 Question', '2', '2015-05-12 06:03:13', NULL, 1, NULL, '1'),
(31, 1, 'Round 3 Question', '3', '2015-05-12 06:03:32', NULL, 1, 1, '1'),
(32, 2, 'Hijjjj', '3', '2015-05-12 19:32:01', NULL, 1, 1, '1'),
(33, 5, 'afdf', '2', '2015-05-14 13:43:13', NULL, 1, NULL, '1'),
(34, 5, 'afaf', '3', '2015-05-14 13:43:22', NULL, 1, NULL, '1'),
(35, 5, 'aff', '1', '2015-05-14 13:43:28', NULL, 1, NULL, '1'),
(36, 2, '342', '1', '2015-05-14 14:01:46', NULL, 1, NULL, '1'),
(37, 2, 'afafd', '2', '2015-05-14 14:01:56', NULL, 1, NULL, '1'),
(38, 5, 'What is 2 + 2', '1', '2015-05-15 05:21:20', NULL, 1, 1, '1'),
(39, 9, 'afa', '1', '2015-05-15 06:28:44', NULL, 1, NULL, '1'),
(40, 9, 'afdadf', '2', '2015-05-15 06:28:53', NULL, 1, NULL, '1'),
(41, 9, 'af', '3', '2015-05-15 06:29:01', NULL, 1, NULL, '1'),
(42, 10, 'What type of particle has a negative charge in an atom?', '1', '2015-05-17 18:04:01', NULL, 1, NULL, '1'),
(43, 10, 'What is the first & last name of the author who wrote "A Brief History in Time"?', '2', '2015-05-17 18:04:50', NULL, 1, 1, '1'),
(44, 10, 'What was Einstein''s formula of mass multiplied by the speed of light trying to solve?', '3', '2015-05-17 18:05:57', NULL, 1, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `question_has_user`
--

CREATE TABLE IF NOT EXISTS `question_has_user` (
  `id` int(11) NOT NULL,
  `user_user_id` int(11) NOT NULL DEFAULT '0',
  `answer` text,
  `questions_issued_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `answer_submited_at` datetime DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `mail_time` datetime DEFAULT NULL,
  `is_mailed` enum('yes','no') DEFAULT 'no',
  `answer_time` datetime DEFAULT NULL,
  `contest_has_user_id` int(11) DEFAULT NULL,
  `user_status` enum('active','eliminated','transferred','winner') DEFAULT 'active',
  `message` varchar(255) DEFAULT NULL,
  `is_charged` enum('yes','no') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_has_user`
--

INSERT INTO `question_has_user` (`id`, `user_user_id`, `answer`, `questions_issued_at`, `answer_submited_at`, `question_id`, `mail_time`, `is_mailed`, `answer_time`, `contest_has_user_id`, `user_status`, `message`, `is_charged`) VALUES
(1, 7, NULL, '2015-05-13 05:59:01', NULL, 29, '2015-05-13 06:02:12', 'yes', '2015-05-13 07:02:12', 2, 'eliminated', 'Oops'' You are late in answering.', NULL),
(2, 21, NULL, '2015-05-14 15:18:01', NULL, 28, '2015-05-14 16:05:11', 'yes', '2015-05-14 17:05:11', 4, 'eliminated', 'Oops'' You are late in answering.', NULL),
(3, 7, 'kkq', '2015-05-14 15:21:01', '2015-05-14 16:51:04', 28, '2015-05-14 16:18:31', 'yes', '2015-05-14 17:18:31', 5, 'eliminated', 'Sorry'' Your answer is wrong.', NULL),
(4, 11, NULL, '2015-05-15 07:03:01', NULL, 38, '2015-05-15 08:01:17', 'no', '2015-05-15 09:01:17', 6, 'active', NULL, NULL),
(5, 15, NULL, '2015-05-15 07:03:01', NULL, 38, '2015-05-15 07:09:40', 'yes', '2015-05-15 08:09:40', 7, 'active', NULL, NULL),
(6, 15, NULL, '2015-05-15 07:44:01', NULL, 39, '2015-05-15 08:10:25', 'yes', '2015-05-15 09:10:25', 8, 'eliminated', 'Oops'' You are late in answering.', NULL),
(7, 11, NULL, '2015-05-15 07:44:01', NULL, 39, '2015-05-15 08:25:32', 'yes', '2015-05-15 09:25:32', 9, 'eliminated', 'Oops'' You are late in answering.', NULL),
(8, 20, 'lol ', '2015-05-15 16:54:01', '2015-05-15 17:35:29', 38, '2015-05-15 17:33:56', 'yes', '2015-05-15 18:33:56', 10, 'eliminated', 'Sorry'' Your answer is wrong.', NULL),
(9, 7, '4', '2015-05-15 16:54:01', '2015-05-15 17:23:15', 38, '2015-05-15 16:59:54', 'yes', '2015-05-15 17:59:54', 11, 'transferred', NULL, NULL),
(10, 19, 'aaaa', '2015-05-15 16:54:01', '2015-05-15 17:51:37', 38, '2015-05-15 17:50:35', 'yes', '2015-05-15 18:50:35', 12, 'eliminated', 'Sorry'' Your answer is wrong.', NULL),
(11, 17, '7', '2015-05-15 16:54:01', '2015-05-15 17:29:00', 38, '2015-05-15 17:23:43', 'yes', '2015-05-15 18:23:43', 13, 'transferred', NULL, NULL),
(12, 17, 'j', '2015-05-15 18:50:39', '2015-05-15 19:58:19', 33, '2015-05-15 19:44:54', 'yes', '2015-05-15 20:44:54', 14, 'eliminated', 'Sorry'' Your answer is wrong.', NULL),
(13, 7, '2', '2015-05-15 18:50:39', '2015-05-15 19:57:15', 33, '2015-05-15 19:48:48', 'yes', '2015-05-15 20:48:48', 15, 'transferred', NULL, NULL),
(14, 7, '4', '2015-05-15 20:48:54', '2015-05-15 21:38:03', 34, '2015-05-15 21:30:07', 'yes', '2015-05-15 22:30:07', 22, 'transferred', NULL, NULL),
(15, 7, NULL, '2015-05-15 22:30:11', NULL, NULL, NULL, 'yes', NULL, 23, 'winner', 'Congratulations, you won the contest', NULL),
(16, 21, NULL, '2015-05-17 05:08:01', NULL, 36, '2015-05-17 06:04:39', 'yes', '2015-05-17 07:04:39', 18, 'eliminated', 'Oops'' You are late in answering.', NULL),
(17, 7, NULL, '2015-05-17 05:08:01', NULL, 36, '2015-05-17 05:18:52', 'yes', '2015-05-17 06:18:52', 21, 'eliminated', 'Oops'' You are late in answering.', NULL),
(18, 32, '334', '2015-05-17 05:08:01', '2015-05-17 06:22:47', 36, '2015-05-17 05:27:19', 'yes', '2015-05-17 06:27:19', 26, 'eliminated', 'Sorry, your answer is wrong', NULL),
(19, 32, NULL, '2015-05-17 08:08:01', NULL, 39, '2015-05-17 09:08:01', 'yes', '2015-05-17 10:08:01', 27, 'eliminated', 'Oops'' You are late in answering.', NULL),
(20, 32, '??', '2015-05-17 08:13:01', '2015-05-17 08:17:52', 39, '2015-05-17 08:15:40', 'yes', '2015-05-17 08:18:40', 28, 'eliminated', 'Sorry, your answer is wrong', NULL),
(21, 32, NULL, '2015-05-17 08:20:01', NULL, 38, '2015-05-17 08:24:56', 'yes', '2015-05-17 08:27:56', 29, 'eliminated', 'Sorry your time has expired', NULL),
(22, 32, NULL, '2015-05-17 09:24:02', NULL, 39, '2015-05-17 09:24:52', 'yes', '2015-05-17 09:27:52', 31, 'eliminated', 'Sorry your time has expired', NULL),
(23, 33, NULL, '2015-05-17 09:24:02', NULL, 39, '2015-05-17 09:28:33', 'yes', '2015-05-17 09:31:33', 32, 'eliminated', 'Sorry your time has expired', NULL),
(24, 21, NULL, '2015-05-17 09:54:02', NULL, 28, '2015-05-17 09:55:33', 'yes', '2015-05-17 09:58:33', 19, 'eliminated', 'Oops'' You are late in answering.', NULL),
(25, 7, NULL, '2015-05-17 09:54:02', NULL, 28, '2015-05-17 09:54:32', 'yes', '2015-05-17 09:57:32', 25, 'eliminated', 'Oops'' You are late in answering.', NULL),
(26, 7, NULL, '2015-05-17 10:04:01', NULL, 38, '2015-05-17 10:08:45', 'no', '2015-05-17 10:11:45', 5, 'active', NULL, NULL),
(27, 21, NULL, '2015-05-17 10:04:01', NULL, 38, '2015-05-17 10:05:00', 'yes', '2015-05-17 10:08:00', 16, 'eliminated', 'Oops'' You are late in answering.', NULL),
(28, 32, 'sdfsd', '2015-05-17 10:04:01', '2015-05-17 10:10:25', 38, '2015-05-17 10:07:39', 'yes', '2015-05-17 10:10:39', 33, 'eliminated', 'Sorry, your answer is wrong', NULL),
(29, 33, '??', '2015-05-17 10:04:01', '2015-05-17 10:09:58', 38, '2015-05-17 10:06:52', 'yes', '2015-05-17 10:09:52', 34, 'eliminated', 'Sorry, your answer is wrong', NULL),
(30, 21, NULL, '2015-05-17 13:40:01', NULL, 28, '2015-05-17 13:41:33', 'yes', '2015-05-17 13:44:33', 17, 'eliminated', 'Oops'' You are late in answering.', NULL),
(31, 7, '2', '2015-05-17 13:40:01', '2015-05-17 13:47:09', 28, '2015-05-17 13:44:23', 'yes', '2015-05-17 13:47:23', 24, 'transferred', NULL, NULL),
(32, 32, NULL, '2015-05-17 13:40:01', NULL, 28, '2015-05-17 13:43:39', 'yes', '2015-05-17 13:46:39', 30, 'eliminated', 'Oops'' You are late in answering.', NULL),
(33, 31, '2', '2015-05-17 13:40:01', '2015-05-17 13:46:51', 28, '2015-05-17 13:44:01', 'yes', '2015-05-17 13:47:01', 35, 'transferred', NULL, NULL),
(34, 7, '2', '2015-05-17 13:47:23', '2015-05-17 13:50:23', 30, '2015-05-17 13:48:03', 'yes', '2015-05-17 13:51:03', 36, 'transferred', NULL, NULL),
(35, 31, '3', '2015-05-17 13:47:23', '2015-05-17 13:52:29', 30, '2015-05-17 13:51:35', 'yes', '2015-05-17 13:54:35', 37, 'transferred', NULL, NULL),
(36, 7, '2', '2015-05-17 13:54:39', '2015-05-17 13:56:15', 31, '2015-05-17 13:55:13', 'yes', '2015-05-17 13:58:13', 38, 'eliminated', 'Oops'' You are late in answering.', NULL),
(37, 31, '2', '2015-05-17 13:54:39', '2015-05-17 13:56:21', 31, '2015-05-17 13:55:34', 'yes', '2015-05-17 13:58:34', 39, 'transferred', NULL, NULL),
(38, 31, NULL, '2015-05-17 13:58:38', NULL, NULL, NULL, 'yes', NULL, 40, 'winner', 'Congratulations, you won the contest', NULL),
(39, 31, NULL, '2015-05-17 14:08:01', NULL, 28, '2015-05-17 14:12:08', 'yes', '2015-05-17 14:15:08', 41, 'eliminated', 'Sorry your time has expired', NULL),
(40, 7, '2', '2015-05-17 14:08:01', '2015-05-17 14:12:58', 28, '2015-05-17 14:11:26', 'yes', '2015-05-17 14:14:26', 42, 'transferred', NULL, NULL),
(41, 7, '2', '2015-05-17 14:15:15', '2015-05-17 14:17:16', 30, '2015-05-17 14:16:26', 'yes', '2015-05-17 14:19:26', 43, 'transferred', NULL, NULL),
(42, 7, '2', '2015-05-17 14:19:32', '2015-05-17 14:23:15', 31, '2015-05-17 14:22:37', 'yes', '2015-05-17 14:25:37', 44, 'transferred', NULL, NULL),
(43, 7, NULL, '2015-05-17 14:25:38', NULL, NULL, NULL, 'yes', NULL, 45, 'winner', 'Congratulations, you won the contest', NULL),
(44, 7, 'i', '2015-05-17 15:23:01', '2015-05-17 15:26:59', 38, '2015-05-17 15:24:07', 'yes', '2015-05-17 15:27:07', 46, 'eliminated', 'Sorry, your answer is wrong', NULL),
(45, 31, '4', '2015-05-17 15:23:01', '2015-05-17 15:26:18', 38, '2015-05-17 15:23:32', 'yes', '2015-05-17 15:26:32', 48, 'transferred', NULL, NULL),
(46, 31, '9', '2015-05-17 15:27:09', '2015-05-17 15:29:22', 33, '2015-05-17 15:30:32', 'yes', '2015-05-17 15:33:32', 50, 'eliminated', 'Sorry, your answer is wrong', NULL),
(47, 18, '4', '2015-05-17 17:34:01', '2015-05-17 17:41:46', 38, '2015-05-17 17:38:53', 'yes', '2015-05-17 17:41:53', 51, 'eliminated', 'Times up! Contest round has expired.', NULL),
(48, 31, '4', '2015-05-17 17:34:01', '2015-05-17 17:36:19', 38, '2015-05-17 17:34:47', 'yes', '2015-05-17 17:37:47', 52, 'transferred', NULL, NULL),
(49, 7, '4', '2015-05-17 17:34:01', '2015-05-17 17:36:23', 38, '2015-05-17 17:36:08', 'yes', '2015-05-17 17:39:08', 53, 'transferred', NULL, NULL),
(50, 16, 'Okay ', '2015-05-17 17:34:01', '2015-05-17 17:35:26', 38, '2015-05-17 17:34:37', 'yes', '2015-05-17 17:37:37', 54, 'eliminated', 'Sorry, your answer is wrong', NULL),
(51, 7, NULL, '2015-05-17 17:41:54', NULL, 33, '2015-05-17 17:46:03', 'yes', '2015-05-17 17:49:03', 55, 'eliminated', 'Sorry your time has expired', NULL),
(52, 31, NULL, '2015-05-17 17:41:54', NULL, 33, '2015-05-17 17:42:04', 'yes', '2015-05-17 17:45:04', 56, 'eliminated', 'Sorry your time has expired', NULL),
(53, 7, NULL, '2015-05-17 17:52:01', NULL, 28, '2015-05-17 17:54:33', 'yes', '2015-05-17 17:57:33', 47, 'eliminated', 'Times up! Contest round has expired.', NULL),
(54, 31, NULL, '2015-05-17 17:52:01', NULL, 28, '2015-05-17 17:55:22', 'yes', '2015-05-17 17:58:22', 49, 'eliminated', 'Times up! Contest round has expired.', NULL),
(55, 18, NULL, '2015-05-17 17:52:01', NULL, 28, '2015-05-17 17:52:15', 'yes', '2015-05-17 17:55:15', 57, 'eliminated', 'Times up! Contest round has expired.', NULL),
(56, 32, NULL, '2015-05-17 20:02:01', NULL, 42, '2015-05-17 20:02:56', 'yes', '2015-05-17 20:05:56', 58, 'eliminated', 'Times up! Contest round has expired.', NULL),
(57, 7, 'electron', '2015-05-17 20:02:01', '2015-05-17 20:05:12', 42, '2015-05-17 20:04:16', 'yes', '2015-05-17 20:07:16', 59, 'transferred', NULL, NULL),
(58, 18, 'electron', '2015-05-17 20:02:01', '2015-05-17 20:07:55', 42, '2015-05-17 20:06:06', 'yes', '2015-05-17 20:09:06', 60, 'eliminated', 'Times up! Contest round has expired.', NULL),
(59, 7, 'Stephen Hawking', '2015-05-17 20:09:08', '2015-05-17 20:11:47', 43, '2015-05-17 20:11:00', 'yes', '2015-05-17 20:14:00', 61, 'eliminated', 'Sorry, your answer is wrong', NULL),
(60, 7, NULL, '2015-05-19 14:12:01', NULL, 38, '2015-05-19 14:16:08', 'yes', '2015-05-19 14:19:08', 63, 'eliminated', 'Times up! Contest round has expired.', NULL),
(61, 7, NULL, '2015-05-19 14:12:01', NULL, 42, '2015-05-19 14:14:12', 'yes', '2015-05-19 14:17:12', 62, 'eliminated', 'Times up! Contest round has expired.', NULL),
(62, 7, '4', '2015-05-19 16:44:01', '2015-05-19 16:50:30', 38, '2015-05-19 16:47:30', 'yes', '2015-05-19 16:50:30', 64, 'transferred', NULL, NULL),
(63, 20, '6', '2015-05-19 16:44:01', '2015-05-19 16:46:41', 38, '2015-05-19 16:44:11', 'yes', '2015-05-19 16:47:11', 65, 'eliminated', 'Sorry, your answer is wrong', NULL),
(64, 7, NULL, '2015-05-19 16:50:44', NULL, 33, '2015-05-19 16:50:47', 'yes', '2015-05-19 16:53:47', 66, 'eliminated', 'Sorry your time has expired', NULL),
(65, 40, 'fghghfghfghfghfghfgh', '2015-05-21 14:10:01', '2015-05-21 14:13:50', 38, '2015-05-21 14:13:23', 'yes', '2015-05-21 14:16:23', 69, 'eliminated', 'Sorry, your answer is wrong', NULL),
(66, 7, NULL, '2015-05-24 05:18:02', NULL, 42, '2015-05-24 05:18:40', 'yes', '2015-05-24 05:21:40', 71, 'eliminated', 'Sorry your time has expired', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `title`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia'),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Indiana'),
(15, 'Iowa'),
(16, 'Kansas'),
(17, 'Kentucky'),
(18, 'Louisiana'),
(19, 'Maine'),
(20, 'Maryland'),
(21, 'Massachusetts'),
(22, 'Michigan'),
(23, 'Minnesota'),
(24, 'Mississippi'),
(25, 'Missouri'),
(26, 'Montana'),
(27, 'Nebraska'),
(28, 'Nevada'),
(29, 'New Hampshire'),
(30, 'New Jersey'),
(31, 'New Mexico'),
(32, 'New York'),
(33, 'North Carolina'),
(34, 'North Dakota'),
(35, 'Ohio'),
(36, 'Oklahoma'),
(37, 'Oregon'),
(38, 'Pennsylvania'),
(39, 'Rhode Island'),
(40, 'South Carolina'),
(41, 'South Dakota'),
(42, 'Tennessee'),
(43, 'Texas'),
(44, 'Utah'),
(45, 'Vermont'),
(46, 'Virginia'),
(47, 'Washington'),
(48, 'West Virginia'),
(49, 'Wisconsin'),
(50, 'Wyoming');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_payment_table`
--

CREATE TABLE IF NOT EXISTS `stripe_payment_table` (
  `id` int(11) NOT NULL,
  `question_has_user_id` int(11) DEFAULT NULL,
  `contest_has_user_id` int(11) DEFAULT NULL,
  `user_user_id` int(11) DEFAULT NULL,
  `stripe_customer_id` varchar(45) DEFAULT NULL,
  `elimination_amount` varchar(45) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive','Deleted') DEFAULT 'Active',
  `contest_unique_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stripe_payment_table`
--

INSERT INTO `stripe_payment_table` (`id`, `question_has_user_id`, `contest_has_user_id`, `user_user_id`, `stripe_customer_id`, `elimination_amount`, `added_date`, `status`, `contest_unique_id`) VALUES
(1, 1, 2, 7, 'cus_6E6boQKteQPZqO', '5.00', '2015-05-13 07:03:01', 'Active', '000005'),
(2, 2, 4, 21, 'cus_6EqX9Fz8cb00db', '5.00', '2015-05-14 17:06:02', 'Active', '000004'),
(3, 3, 5, 7, 'cus_6E6boQKteQPZqO', '44.00', '2015-05-14 17:19:01', 'Active', '000006'),
(4, 6, 8, 15, 'cus_6Ec3Br4uKaEEHq', '4.00', '2015-05-15 09:11:01', 'Active', '000012'),
(5, 7, 9, 11, 'cus_6DxzG7DOXsjvZR', '4.00', '2015-05-15 09:26:01', 'Active', '000012'),
(6, 8, 10, 20, 'cus_6FGGK3GwYiUWeb', '55.00', '2015-05-15 18:50:39', 'Active', '000009'),
(7, 10, 12, 19, 'cus_6FGPzGAaAHdlZK', '55.00', '2015-05-15 18:50:39', 'Active', '000009'),
(8, 17, 21, 7, 'cus_6E6boQKteQPZqO', '67.00', '2015-05-17 06:19:01', 'Active', '000011'),
(9, 18, 26, 32, NULL, '67.00', '2015-05-17 07:04:40', 'Active', '000011'),
(10, 16, 18, 21, 'cus_6EqX9Fz8cb00db', '67.00', '2015-05-17 07:05:01', 'Active', '000011'),
(11, 20, 28, 32, NULL, '0.00', '2015-05-17 08:18:57', 'Active', '000017'),
(12, 25, 25, 7, 'cus_6E6boQKteQPZqO', '6.00', '2015-05-17 09:58:01', 'Active', '000010'),
(13, 24, 19, 21, 'cus_6EqX9Fz8cb00db', '6.00', '2015-05-17 09:59:01', 'Active', '000010'),
(14, 27, 16, 21, 'cus_6EqX9Fz8cb00db', '44.00', '2015-05-17 10:08:02', 'Active', '000006'),
(15, 19, 27, 32, NULL, '0.00', '2015-05-17 10:08:02', 'Active', '000016'),
(16, 28, 33, 32, NULL, '44.00', '2015-05-17 10:10:41', 'Active', '000006'),
(17, 29, 34, 33, NULL, '44.00', '2015-05-17 10:10:41', 'Active', '000006'),
(18, 30, 17, 21, 'cus_6EqX9Fz8cb00db', '3.00', '2015-05-17 13:45:44', 'Active', '000008'),
(19, 32, 30, 32, NULL, '3.00', '2015-05-17 13:47:01', 'Active', '000008'),
(20, 44, 46, 7, 'cus_6E6boQKteQPZqO', '1.00', '2015-05-17 15:27:09', 'Active', '000022'),
(21, 50, 54, 16, 'cus_6G1fWdIIxOEq5b', '4.00', '2015-05-17 17:41:54', 'Active', '000024'),
(22, 47, 51, 18, 'cus_6F7qaOv9ad47Sq', '4.00', '2015-05-17 17:41:54', 'Active', '000024'),
(23, 55, 57, 18, 'cus_6F7qaOv9ad47Sq', '1.00', '2015-05-17 17:56:01', 'Active', '000021'),
(24, 53, 47, 7, 'cus_6E6boQKteQPZqO', '1.00', '2015-05-17 17:58:01', 'Active', '000021'),
(25, 54, 49, 31, 'cus_6Fxux32LE0RCRr', '1.00', '2015-05-17 17:59:02', 'Active', '000021'),
(26, 56, 58, 32, NULL, '10.00', '2015-05-17 20:06:01', 'Active', '000025'),
(27, 58, 60, 18, 'cus_6F7qaOv9ad47Sq', '10.00', '2015-05-17 20:09:08', 'Active', '000025'),
(28, 61, 62, 7, 'cus_6E6boQKteQPZqO', '5.00', '2015-05-19 14:26:01', 'Active', '000026'),
(29, 60, 63, 7, 'cus_6E6boQKteQPZqO', '20.00', '2015-05-19 14:26:01', 'Active', '000027'),
(30, 63, 65, 20, 'cus_6FGGK3GwYiUWeb', '5.00', '2015-05-19 16:50:44', 'Active', '000028'),
(31, 65, 69, 40, 'cus_6HT11Gk6wDXqWl', '5.00', '2015-05-21 14:16:25', 'Active', '000029');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_type` enum('admin','superadmin','contestant') NOT NULL DEFAULT 'contestant',
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) DEFAULT '',
  `phone_number` varchar(25) DEFAULT '',
  `address` text,
  `apartment_suite` varchar(255) DEFAULT '',
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(100) DEFAULT '',
  `zipcode` varchar(10) DEFAULT '',
  `photo_path` varchar(255) DEFAULT '',
  `photo_name` varchar(255) DEFAULT '',
  `photo_system_name` varchar(100) DEFAULT '',
  `billing_first_name` varchar(45) DEFAULT '',
  `billing_last_name` varchar(45) DEFAULT '',
  `credit_card_number` varchar(25) DEFAULT '',
  `credit_card_cvv` varchar(5) DEFAULT '',
  `credit_card_expiry` varchar(10) DEFAULT '',
  `billing_zipcode` varchar(10) DEFAULT '',
  `shipping_first_name` varchar(45) DEFAULT '',
  `shipping_last_name` varchar(45) DEFAULT '',
  `shipping_address` text,
  `shipping_state_id` int(11) DEFAULT NULL,
  `shipping_apartment_suite` varchar(255) DEFAULT '',
  `shipping_zipcode` varchar(10) DEFAULT '',
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '''1'' for Active user, ''0'' for Inactive user(Deleted)',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `created_by_user_id` int(11) DEFAULT NULL COMMENT 'Null if user register himself\n',
  `updated_by_user_id` int(11) DEFAULT NULL COMMENT 'Null if user update himself\n',
  `facebook_app_id` varchar(50) DEFAULT NULL,
  `twitter_app_id` varchar(50) DEFAULT NULL,
  `androide_app_id` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `usercode` varchar(25) DEFAULT NULL COMMENT 'User code for registration , Null when use login using registration link',
  `email_subscription` enum('yes','no') DEFAULT 'no',
  `sms_subscription` enum('yes','no') DEFAULT 'no',
  `contest_alert` enum('weekly','daily') DEFAULT 'weekly',
  `stripe_customer_id` varchar(45) DEFAULT NULL,
  `stripe_card_id` varchar(45) DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `notification_status` enum('on','off') DEFAULT 'on'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `apartment_suite`, `state_id`, `city`, `zipcode`, `photo_path`, `photo_name`, `photo_system_name`, `billing_first_name`, `billing_last_name`, `credit_card_number`, `credit_card_cvv`, `credit_card_expiry`, `billing_zipcode`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_state_id`, `shipping_apartment_suite`, `shipping_zipcode`, `status`, `created_at`, `updated_at`, `created_by_user_id`, `updated_by_user_id`, `facebook_app_id`, `twitter_app_id`, `androide_app_id`, `remember_token`, `usercode`, `email_subscription`, `sms_subscription`, `contest_alert`, `stripe_customer_id`, `stripe_card_id`, `device_id`, `notification_status`) VALUES
(1, 'superadmin', 'Richard', 'Richardson', 'contact@triviahedge.com', '$2y$10$KHd9GbwumqeQDpefbQ04x.N272vHny1kBHrmqXKW4fLMBKS8SkTR2', '', NULL, '', 1, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, '', '', '1', '2014-09-26 17:02:40', NULL, NULL, NULL, NULL, NULL, NULL, 'W0dFsrydFcgLpb5NjRI234zmtjU8qDLqEts2ydJovH8ZI6w5tstEVZEdX5ba', NULL, 'yes', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(2, 'admin', 'test', 'test', 'test@test.com', '$2y$10$KHd9GbwumqeQDpefbQ04x.N272vHny1kBHrmqXKW4fLMBKS8SkTR2', '1234567890', '545', '656354', 16, '56466', '452009', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfgdgfd', 15, 'dfgdfgd', '452009', '1', '2014-11-19 23:12:11', NULL, NULL, NULL, NULL, NULL, NULL, '9B7T6COOp7RdBATDtv7S53oBO0Kbmlg4Og8odZRsMP2zzxdWKDmejPq4WdSc', NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(4, 'contestant', 'Michael', 'Goldberg', 'info@quickwebsitefix.com', '$2y$10$TOH8J2wcd9H21F4/2fdbwu5nMRRuS9WYPufegC7ymkB5eDF007fR6', '7575551212', NULL, '', NULL, 'Virginia Beach', '', 'uploads/profile_pictures/', '1430494977bowie with glasses.jpg', 'uploads/profile_pictures/1430494977bowie with glasses.jpg', '', '', '', '', '', '', '', '', '555 test Street', 46, '', '23451', '1', '2015-05-01 15:42:57', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(5, 'contestant', 'Billy', 'Thorton', 'billy@agoigjiojg.com', '$2y$10$s9S9YdYDFKuyJQ1FCyDvQeBLhNPYjguu1Zhca8o44JxnV2imB8VIG', '4059235404', NULL, '', NULL, 'Oklahoma City', '', 'uploads/profile_pictures/', '143076509311_blog_reader.jpg', 'uploads/profile_pictures/143076509311_blog_reader.jpg', '', '', '', '', '', '', '', '', '888 N Solk', 36, '294', '73104', '2', '2015-05-04 18:44:53', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(6, 'admin', 'Second', 'User', 'p5XzFMx3wwXf@meltmail.com', '$2y$10$a4OhRWkKahdj5MJUTaGic.3SIMHe0XR9EO9VT3yZ1.KSOvUZdQaVS', '4024929424', NULL, '', NULL, 'Oklahoma city', '', 'uploads/profile_pictures/', '143076517111188469_1022859154415878_250804874212882526_n.jpg', 'uploads/profile_pictures/143076517111188469_1022859154415878_250804874212882526_n.jpg', '', '', '', '', '', '', '', '', '1 Park Pl.', 36, '', '73104', '1', '2015-05-04 18:46:11', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(7, 'contestant', 'Richard', 'Richardson', 'rmrichardson24@gmail.com', '$2y$10$xo.sY7Dqr/vabeJk5m.9cOrsENbKfBPj6ymBdrrAJo0.dGX8IRHS2', 'aaaaaaa', NULL, NULL, NULL, NULL, NULL, 'uploads/profile_pictures/', '1430769423Facebook.jpg', 'uploads/profile_pictures/1430769423Facebook.jpg', 'Richard', 'Richardson', '4242', '333', '4-2016', '', 'Richard', 'Richardson', '425 N. Oklahoma Ave.', 36, '1204', '73104', '1', '2015-05-04 19:57:03', NULL, NULL, NULL, '714826678635392', NULL, NULL, 'ALAl26dmjKtoeyIvY6uqQGjBvy1NFGWaxJ9XGs2tUxsLthI01n0cp5f421w8', NULL, 'no', 'no', 'weekly', 'cus_6IHsHG8s9TlXkt', 'cus_6IHsHG8s9TlXkt', NULL, 'on'),
(10, 'contestant', 'Daniel', 'Glence', 'danielm@gmail.com', '$2y$10$B90e/LEP48w/guI1jkePF.pRBsjwsluY3e.JHmY59sw3Ofpl7jkpS', '3343434343', NULL, '', NULL, 'Virginia Beach', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '484 Vikign Drive Virginia', 46, '23 Apt ', '23452', '1', '2015-05-05 06:05:34', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(11, 'contestant', 'Glence', 'Mathew', 'glencem@gmail.com', '$2y$10$UOumDHVWZR3VyKIBaDk/8OHINwJKFC7nGPQydFyh2FKtYpl7HanLG', '3774777777', NULL, '', NULL, 'Virginia Beach', '', NULL, NULL, NULL, 'Glence', 'Mathew', '4242', '456', '7-2024', '', 'Glence', 'Mathew', 'Viking Drive Virginia', 46, '12/22 ste', '23452', '1', '2015-05-06 05:33:24', NULL, 1, NULL, NULL, NULL, NULL, 'dxuc3E0BdtUhBdsP5xRPRMJNuD9NudYvFkkkdErD4iiuNF5BeYNl0uE6ZF6E', NULL, 'no', 'no', 'weekly', 'cus_6DxzG7DOXsjvZR', 'cus_6DxzG7DOXsjvZR', NULL, 'on'),
(12, 'admin', 'Markie', 'Mark', 'mark@markiemark.com', '$2y$10$6zeAtC0P5zJCWK3kHxBuqeEUBYa0l3X.C0C4gBywgLzAxkXYIxTUW', '', NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', '', '2', '2015-05-06 20:36:30', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(13, 'contestant', 'contestant', 'user', 'a@adaojoagj.com', '$2y$10$oJPzcEZhMsLUi3TEidrrluPw.0W4tIyj7K6TsyHlh87sBtPJ5jwqi', '', NULL, '', NULL, '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', 0, '', '', '2', '2015-05-06 20:37:03', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(14, 'contestant', 'ThinkPlateO', 'Hello', 'admin@thinkplateo.com', '$2y$10$iJpJBJBOv.htkVh03ceSbO6sm1nRByhVYZ1gzo81ujgHq/3coBAtC', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '0', '2015-05-12 14:36:15', NULL, NULL, NULL, NULL, '2291962614', NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(15, 'contestant', 'Test', 'User', 'rmrichardson24@yahoo.com', '$2y$10$pF578MmiMaz5D4V.skqiJuPulJmHtL8G2S1hdltIWeBCsh4YbKaj6', '', NULL, '', NULL, '', '', '', '', '', 'Test', 'User', '4242', '123', '1-2017', '', '', '', NULL, NULL, '', '', '1', '2015-05-13 22:50:10', NULL, NULL, NULL, NULL, NULL, NULL, 'qPCQjVJSPDcBwAiCOcPMaGcBV7IxsQEXmKVTTwLZjOgH7EGLfKcDaUTmTEpc', '', 'no', 'no', 'weekly', 'cus_6Ec3Br4uKaEEHq', 'cus_6Ec3Br4uKaEEHq', NULL, 'on'),
(16, 'contestant', 'Nelly', 'Isabel', 'isa.nv.22@hotmail.com', '$2y$10$sBw2rKuXQV.VH0la1pBD9.eNUrogpqecfVNJHTvjc/6s5S6y7/Z1W', '', NULL, '', NULL, '', '', 'uploads/profile_pictures/', '1431563945Facebook.jpg', 'uploads/profile_pictures/1431563945Facebook.jpg', 'Nelly', 'Isabel', '4242', '333', '1-2016', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 00:39:06', NULL, NULL, NULL, '10153077568406100', NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', 'cus_6G1fWdIIxOEq5b', 'cus_6G1fWdIIxOEq5b', NULL, 'on'),
(17, 'contestant', 'd', 'd', 'vdZWiVF7t3OK@meltmail.com', '$2y$10$wDlfkPsaHaPB3Jc5VJvT9utTdK26dMc0DaeWsD6Jg9D1ofRuLx5am', '', NULL, '', NULL, '', '', '', '', '', 'd', 'd', '4242', '333', '4-2018', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 03:02:30', NULL, NULL, NULL, NULL, NULL, NULL, 'pTSIVTY2ADTJQ21LvJYclRfMXmnQ5cJpUig3cmU6RBUZ1JniiOvW4ecJcyne', 'nk6gbf6w', 'no', 'no', 'weekly', 'cus_6FGa470tPKiH4n', 'cus_6FGa470tPKiH4n', NULL, 'on'),
(18, 'contestant', 'd', 'd', '7b33slc7IjXY@meltmail.com', '$2y$10$O38BBZ1wUxcYOSWuLan4tulORC.qHJlv0odZYdiOSsM9KgFJiD8xK', '', NULL, NULL, NULL, NULL, NULL, 'uploads/profile_pictures/', '1431661557jenn.png', 'uploads/profile_pictures/1431661557jenn.png', 'd', 'd', '4242', '222', '3-2016', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 03:03:09', NULL, NULL, NULL, NULL, NULL, NULL, 'lBLLGMnnH8cHOTunzgcNTnN7xeXyEnVmWxjLkZC0I7IpbnR4SIrDJBBBE34A', '48hr3s2t', 'no', 'no', 'weekly', 'cus_6F7qaOv9ad47Sq', 'cus_6F7qaOv9ad47Sq', NULL, 'on'),
(19, 'contestant', 'd', 'd', 'uEpMsChKg5T2@meltmail.com', '$2y$10$271CL1nuuJ3r2KDhVvW9IucUzDb6UxSGgLQkLm52es27hhEhedrSW', '', NULL, NULL, NULL, NULL, NULL, 'uploads/profile_pictures/', '1431708154Screen Shot 2015-05-13 at 11.37.45 AM.png', 'uploads/profile_pictures/1431708154Screen Shot 2015-05-13 at 11.37.45 AM.png', 'd', 'd', '4242', '444', '3-2018', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 03:03:40', NULL, NULL, NULL, NULL, NULL, NULL, 'NpD5ylcEFpPvpsrumyCCr3noDR42JRG0XIXD1s37jH3GQyCLlj3a8ZP0jwbV', 'ooywcujt', 'no', 'no', 'weekly', 'cus_6FGPzGAaAHdlZK', 'cus_6FGPzGAaAHdlZK', NULL, 'on'),
(20, 'contestant', 'd', 'd', 't2tETJadmhpj@meltmail.com', '$2y$10$RS3wgfB/k3SgfEZPo7vgKOdPp1UCb/Y/dCkA2Sl4spr7RdCpU704m', '', NULL, NULL, NULL, NULL, NULL, 'uploads/profile_pictures/', '143162474810514713_668851483232912_5216023532282791081_n.jpg', 'uploads/profile_pictures/143162474810514713_668851483232912_5216023532282791081_n.jpg', 'd', 'd', '4242', '333', '3-2018', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 03:04:21', NULL, NULL, NULL, NULL, NULL, NULL, 'MDsfOHYowjABlyfIeKHh5u78fT7gEIfyQa1prT8OC858Y5KGjHw4yuXoLT99', '3imuhftv', 'no', 'no', 'weekly', 'cus_6FGGK3GwYiUWeb', 'cus_6FGGK3GwYiUWeb', NULL, 'on'),
(21, 'contestant', 'd', 'd', 'DD36yKQ999Rc@meltmail.com', '$2y$10$fRfKgIjkcqMICEP1Csq2ou6FElfbM9hpSqgOvjBTmfxBkPar865De', '', NULL, NULL, NULL, 'Oklahoma City', NULL, 'uploads/profile_pictures/', '1431624657IMG_20141225_212634.jpg', 'uploads/profile_pictures/1431624657IMG_20141225_212634.jpg', 'd', 'd', '4242', '444', '6-2031', '', 'D', 'D', '452 N. Oklahoma', 36, '888', '83203', '1', '2015-05-14 03:04:55', NULL, NULL, NULL, NULL, NULL, NULL, 'yrS8LlvraS9lIrE7d8diPcGBx6EoVTtYdzZFF73kulvRO37hIgQGF5wUviCX', '7iyffyha', 'no', 'no', 'weekly', 'cus_6EqX9Fz8cb00db', 'cus_6EqX9Fz8cb00db', NULL, 'on'),
(22, 'contestant', 'Daniel', 'Glen', 'glence@quickwebsitefix.com', '$2y$10$gogPBzvEyfzaqaKK8RPc.OSumq/yeM9Kk9fYZpG1UyA9Px.3hHcde', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 07:49:27', NULL, NULL, NULL, NULL, NULL, NULL, '5pCDdAbTxA2u24LFuRvSTw5uEoluRWWFK3w1fDoTjcf0sHucCJX4GWMlog44', '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(23, 'contestant', 'j', 'j', 'it2VgT4m84FF@meltmail.com', '$2y$10$SLIYQW5/KjX3FghN0dHj/ua4xzIs9zuPNaG3FCcHl4BTjyoVNWWDS', '', NULL, NULL, NULL, NULL, NULL, 'uploads/profile_pictures/', '1431760749Screen Shot 2015-05-11 at 7.53.14 AM.png', 'uploads/profile_pictures/1431760749Screen Shot 2015-05-11 at 7.53.14 AM.png', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-14 13:52:22', NULL, NULL, NULL, NULL, NULL, NULL, 'dwg5fmW69HyeL1Db7OELedSuwvhR3ONR0IVA5A7dC6f65FMiTQ8VzfxdRoot', '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(24, 'contestant', 'Mail', 'Test', '8g4qmDIo2hZf@meltmail.com', '$2y$10$rKecfDpP0NbxzFDWaDceDuIuRxd8T2Cao6RCSRwLxg.YSz16Ni/ym', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-15 03:59:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(25, 'contestant', 'TriviaHedge', 'lset', 'richard@triviahedge.com', '$2y$10$Eu/QinJsKdSEbusZto6hMeLwu/CHz6O0obpPtWPVwbO.pqjCJkSq6', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '0', '2015-05-15 06:39:31', NULL, NULL, NULL, NULL, '2776126787', NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(26, 'contestant', 'TheIgniteAgency', 'jjj', 'contact@theigniteagency.com', '$2y$10$pilh5nPTXocE2K5rtYGkXu54xSIOr8JrLMrtvnfccqtPdrAXMoS1a', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '0', '2015-05-15 16:38:42', NULL, NULL, NULL, NULL, '624198402', NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(27, 'contestant', 'afaf', 'asdfafd', 'aadf@asdfda.coma', '$2y$10$4ju7nEu9LWKwHUAUkV.GJeM0u/m.43XLHQW/QbwbmSZH/3ccNfoc6', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '0', '2015-05-16 00:05:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3b760bp0', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(28, 'contestant', 's', 's', '62jqf4x8HzjT@meltmail.com', '$2y$10$3b2n1.2P91ItXUYmNs4BD.g3/9HWlxJ5l4khDw9MHQWV4E0BFGq.S', '', NULL, '', NULL, '', '', '', '', '', 's', 's', '4242', '444', '4-2017', '', '', '', NULL, NULL, '', '', '1', '2015-05-16 15:28:16', NULL, NULL, NULL, NULL, NULL, NULL, '4zUaTFDkFeTPVLPlM3UDeTtkorZjwDtOnugTsTRlCYcTqkBwthGO5e3nYNzX', '', 'no', 'no', 'weekly', 'cus_6FdK1szAIL79aG', 'cus_6FdK1szAIL79aG', NULL, 'on'),
(29, 'contestant', 'Larry', 'Brown', 'hHOuO7o1k7QL@meltmail.com', '$2y$10$qWsCQ1aQVMEHgkUgtQUqX.4CFw3oDw1mS6iC3w87PnWIb2yTs//9i', '', NULL, '', NULL, '', '', '', '', '', 'Larry', 'Brown', '4242', '222', '5-2019', '', '', '', NULL, NULL, '', '', '1', '2015-05-16 16:23:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', 'cus_6FdNMsB4ie1pjT', 'cus_6FdNMsB4ie1pjT', NULL, 'on'),
(30, 'contestant', 'Monica', 'Marcinek', 'xsooner12@yahoo.com', '$2y$10$/PDSuVA9stI1cxjouNbxoOexc2S2erLbmy5EqVd0bxRju4Bob7ykK', '', NULL, '', NULL, '', '', 'uploads/profile_pictures/', '1431801938Facebook.jpg', 'uploads/profile_pictures/1431801938Facebook.jpg', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-16 18:45:39', NULL, NULL, NULL, '10153313565521419', NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(31, 'contestant', 'Mike', 'Jordan', 'Wq641tn9PzaO@meltmail.com', '$2y$10$ckPzjGF6FVb35jf3YhtT/ObYh.opOA5/iwPmIdvqC44bzzHJk/6r.', '', NULL, '', NULL, '', '', '', '', '', 'Mike', 'Jordan', '4242', '444', '3-2016', '', '', '', NULL, NULL, '', '', '1', '2015-05-16 21:29:59', NULL, NULL, NULL, NULL, NULL, NULL, 'hf2tdvs8sDbNiAd4IRKQJNSy7Yc836WiI6129iq9aTpILaKju2NEaKq5yAQc', '', 'no', 'no', 'weekly', 'cus_6Fxux32LE0RCRr', 'cus_6Fxux32LE0RCRr', NULL, 'on'),
(32, 'contestant', 'ANDREY', 'VALEIEV', 'a.valeiev@yahoo.com', '$2y$10$P6ZS4cjWj2XumWhOnKtvV.YGPQdb.snd31Kn/kENPB//NSzN1u6oq', '', NULL, '', NULL, 'sasdfsf', '', 'uploads/profile_pictures/', '1431824034Facebook.jpg', 'uploads/profile_pictures/1431824034Facebook.jpg', 'zfsdfsd', 'asdasd', '4565456645664566', '445', '12/45', '234', 'sfd', 'sdfsfsdf', 'dghgjbkl', 13, 'asdfsdfs', '43434', '1', '2015-05-17 00:53:55', NULL, NULL, NULL, '848673818536051', NULL, NULL, 'xrmnfhXudEKYjYGwuZBNYr42Gn25s8JprGbuBgpzFVJbZe6iJPJdUOkTKBkh', NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(33, 'contestant', 'ghjkl', 'sdf', 'asdas@asdsa.sd', '$2y$10$IVKUpvNw5wixlG5aFLYxseHxLd2cuShvEmlV/4buHG0UTEorvace.', '3423424234', NULL, '234242', NULL, 'sadfasdad', '54165', '', 'asdad', 'asdad', 'asdad', 'asd', 'asd', '232', '23`', '2323', '22`', '`23wew', '`ewdasdasd', 22, 'q', '', '1', '2015-05-17 09:18:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yzhj4g75', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(34, 'contestant', 'Nel', 'Vance', 'nvance22@yahoo.com', '$2y$10$eA54LUHxFgugV1u9hyNSYu.0TCvmKa/neS6F4XV8l5R2KiX4MmLGq', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-17 17:27:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(35, 'contestant', 'Juicy', 'J', '6L6xj9tYgtnZ@meltmail.com', '$2y$10$.mWhJqPkeA8qvsDskUIoce994slOgM/bTT9ubpxXxD/h8.QIM9CKW', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-18 11:50:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(36, 'contestant', 'John', 'Doe', 'demo.rbts@gmail.com', '$2y$10$tHVgd3h3LgWXAtfRzzw30e5pbhBoM2VxxBircZ7ryq4BKe11dfN32', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-19 15:38:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(37, 'contestant', 'Richard', 'Richardson', 'rmrichardson24333@yahoo.com', '$2y$10$3R7iSmXHQ138qhxoxokOq.u.pXX.WVFv2azOj9SD/Rg3mJO.MFqqa', '', NULL, '', NULL, 'Beverly Hills', '', 'uploads/profile_pictures/', '1432077594Facebook.jpg', 'uploads/profile_pictures/1432077594Facebook.jpg', 'Richard', 'Richardson', '4242', '333', '3-2018', '', 'Richard', 'Richardson', '88 N. Hills', 5, '823', '90210', '1', '2015-05-19 23:19:55', NULL, NULL, NULL, '760862254002467', NULL, NULL, '1EvkuVNVXTBrD8d9s55ZCk1YUk5WCwnzMe7MskV55QAYKbYjCrc47A4Jel5d', NULL, 'no', 'no', 'weekly', 'cus_6HMnWhwMt3mVzo', 'cus_6HMnWhwMt3mVzo', NULL, 'on'),
(38, 'contestant', 'Peter', 'Fulmer', 'prfulmer@cox.net', '$2y$10$mo.Ex.SKH.HuOb.z.KdIkOG2LJUYXNk4pF7OqgrWcTGFL6Xzs2j72', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-20 03:20:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(39, 'contestant', 'Gaurav', 'Bhardwaj', 'gauravatnet@yahoo.co.in', '$2y$10$GWibcmMc1eBUr4/M1ugP5uQKxATvQb4f5mvCqMkSKakXVWSdMWs3u', '', NULL, '', NULL, '', '', 'uploads/profile_pictures/', '1432102242Facebook.jpg', 'uploads/profile_pictures/1432102242Facebook.jpg', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-20 06:10:42', NULL, NULL, NULL, '1089899247705943', NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(40, 'contestant', 'Smit', 'S', 'work.smit@gmail.com', '$2y$10$geTRwXugu/sK8eQb.ym6quM64yKVBWSQku4nl0dg7aFkCbnEzkTS.', '', NULL, '', NULL, '', '', '', '', '', 'Smit', 'S', '1111', '123', '3-2020', '', '', '', NULL, NULL, '', '', '1', '2015-05-21 13:47:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'no', 'no', 'weekly', 'cus_6HT11Gk6wDXqWl', 'cus_6HT11Gk6wDXqWl', NULL, 'on'),
(41, 'contestant', 'Smit', 'Shah', 'aqua.smit@gmail.com', '$2y$10$KMfUCl.EDGiu6RQ.gF5ahek/V5qwB91WFN4.Bu114WawlQL6XpoaK', '', NULL, '', NULL, '', '', 'uploads/profile_pictures/', '1432216240Facebook.jpg', 'uploads/profile_pictures/1432216240Facebook.jpg', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-21 13:50:41', NULL, NULL, NULL, '10153327467712248', NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(42, 'contestant', 'aaa', 'aaa', 'aaa@aa.a', '$2y$10$tVdwPzbigRBJIiwaLQcgze83NO.9fGpQg6s/9BypjIFnAffG5ClaG', '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '0', '2015-05-21 20:59:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aphhn2rf', 'no', 'no', 'weekly', NULL, NULL, NULL, 'on'),
(43, 'contestant', 'Richard', 'Richardson', 'richard@ignitemedianetwork.com', '$2y$10$kXVXgTDcUAj6uVERYDLTfejFpF9vmAS6M.zeZOQ.C8q5IfWAzmXKG', '', NULL, '', NULL, '', '', 'uploads/profile_pictures/', '1432534193Facebook.jpg', 'uploads/profile_pictures/1432534193Facebook.jpg', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '1', '2015-05-25 06:09:53', NULL, NULL, NULL, '329450457247086', NULL, NULL, NULL, NULL, 'no', 'no', 'weekly', NULL, NULL, NULL, 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestcategory`
--
ALTER TABLE `contestcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest_expiration_mail_table`
--
ALTER TABLE `contest_expiration_mail_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest_has_user`
--
ALTER TABLE `contest_has_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prizecategory`
--
ALTER TABLE `prizecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `question_has_user`
--
ALTER TABLE `question_has_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_payment_table`
--
ALTER TABLE `stripe_payment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `contestcategory`
--
ALTER TABLE `contestcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `contest_expiration_mail_table`
--
ALTER TABLE `contest_expiration_mail_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contest_has_user`
--
ALTER TABLE `contest_has_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `prizecategory`
--
ALTER TABLE `prizecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `question_has_user`
--
ALTER TABLE `question_has_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `stripe_payment_table`
--
ALTER TABLE `stripe_payment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
