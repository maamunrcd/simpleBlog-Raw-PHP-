-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 02:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zboom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_album`
--

CREATE TABLE IF NOT EXISTS `article_album` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `art_title` varchar(90) NOT NULL,
  `art_subtitle` varchar(100) NOT NULL,
  `art_content` text NOT NULL,
  `art_thumnail` varchar(400) NOT NULL,
  `art_published_date` text NOT NULL,
  `artcle_public_time` text NOT NULL,
  `art_author` varchar(50) NOT NULL,
  `art_comment` varchar(20) NOT NULL,
  `art_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`art_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `article_album`
--

INSERT INTO `article_album` (`art_id`, `cat_id`, `art_title`, `art_subtitle`, `art_content`, `art_thumnail`, `art_published_date`, `artcle_public_time`, `art_author`, `art_comment`, `art_status`) VALUES
(4, 1, 'The White Night', '', '<p>However there have been persistent reports that the former Valencia Liverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez. Benitez also appears to have been blamed for Real&#39;s expulsion from the King&#39;s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game Whistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960. Benitez said the way to win over the fans was to score goals and win matches. &quot;The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals,&quot; he told a news conference. &quot;We all saw that after the 1-0 we weren&#39;t playing well but it was only a brief lapse,&quot; he added. &quot; Later we did what we had to do.&quot;</p>\r\n', '', '0000-00-00', ' PM PM', 'Mamun Or Rashid', '', 1),
(5, 1, 'Tons of Fans', '', 'Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.Lorem ipsum dolor sit amet  consectetur adipiscing elit. Aliquam viverra convallis auctor dolor sit amet consectetur adipiscing elit. Aliquam viverra convallis auctor\nHowever there have been persistent reports that the former Valencia Liverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez.\n\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\n\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\n\nBenitez said the way to win over the fans was to score goals and win matches.\n\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\n\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\nLater we did what we had to do."', '', '0000-00-00', '', '', '', 1),
(6, 1, 'Aliquam viverra convallis ', '', '<p>Cum sociis natoque penatibus et magnis.Lorem ipsum dolor sit amet consectetur adipiscing elit. Aliquam viverra convallis auctor dolor sit amet consectetur adipiscing elit. Aliquam viverra convallis auctor However there have been persistent reports that the former Valencia Liverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez. Benitez also appears to have been blamed for Real&#39;s expulsion from the King&#39;s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game Whistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960. Benitez said the way to win over the fans was to score goals and win matches. &quot;The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals,&quot; he told a news conference. &quot;We all saw that after the 1-0 we weren&#39;t playing well but it was only a brief lapse,&quot; he added. &quot; Later we did what we had to do.&quot;</p>\r\n', 'http://localhost/zBoomMusic/upolad/28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '0000-00-00', ' PM', 'Mamun Or Rashid', '', 1),
(7, 2, 'Benitez said the way to win over the ', '', '<p>However there have been persistent reports that the former Valencia Liverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez. Benitez also appears to have been blamed for Real&#39;s expulsion from the King&#39;s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game Whistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960. Benitez said the way to win over the fans was to score goals and win matches. &quot;The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals,&quot; he told a news conference. &quot;We all saw that after the 1-0 we weren&#39;t playing well but it was only a brief lapse,&quot; he added. &quot; Later we did what we had to do.&quot;</p>\r\n', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '2015-12-22', ' PM', 'Mamun Or Rashid', '', 1),
(8, 2, 'The supporters are unhappy at certain', '', 'Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez.\n\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\n\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\n\nBenitez said the way to win over the fans was to score goals and win matches.\n\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\n\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\nLater we did what we had to do."', 'images/img2.png', '2015-12-23', '', 'admin', '', 1),
(10, 2, 'Milan Chelsea and Napoli manager', '', 'Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez.\r\n\r\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\nBenitez said the way to win over the fans was to score goals and win matches.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/img3.png', '2015-12-10', '', 'admin', '', 1),
(11, 2, 'Whistles also swirled around the stadium ', '', 'Cristiano Ronaldo and James Rodriguez.\r\n\r\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\nBenitez said the way to win over the fans was to score goals and win matches.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/img4.png', '2015-12-08', '', 'admin', '', 1),
(12, 2, 'Appears to have been blamed for Real', '', 'Liverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez.\n\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\n\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\n\nBenitez said the way to win over the fans was to score goals and win matches.\n\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\n\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\nLater we did what we had to do."', 'images/img1.png', '2015-12-01', '', 'admin', '', 1),
(16, 4, 'Among the notable moments of the pageant', '', 'Said they were trying to determine whether the driver a woman who was detained drove onto the sidewalk intentionally or due to impairment.\n \nAmong the notable moments of the pageant Flora Coquerel of France, who was at the Paris stadium the night of the November attacks by militants reached the final five and Ariana Miyamoto of Japa whose father is African-American reached the last 10.\n \nMiyamoto''s height of 1.73 m (5.7 ft) and bronze skin are unusual in Japan and her selection to represent Japan created an online firestorm in her native country.\n \nFor the first time viewers had a chance to vote on the winner rating contestants in the swimwear evening gown and interview competitions.\n \nUntil recently the pageant was co-owned by Comcast Corp''s NBCUniversal and Trump who is leading national polls in the 2016 Republican presidential nomination race.\n ', 'images/singer.jpg', '2015-12-22', '', 'admin', '', 1),
(17, 4, 'Online firestorm in her native country', '', 'Las Vegas authorities said they were trying to determine whether the driver a woman who was detained drove onto the sidewalk intentionally or due to impairment.\r\n \r\nAmong the notable moments of the pageant Flora Coquerel of France, who was at the Paris stadium the night of the November attacks by militants reached the final five and Ariana Miyamoto of Japa whose father is African-American reached the last 10.\r\n \r\nMiyamoto''s height of 1.73 m (5.7 ft) and bronze skin are unusual in Japan and her selection to represent Japan created an online firestorm in her native country.\r\n \r\nFor the first time viewers had a chance to vote on the winner rating contestants in the swimwear evening gown and interview competitions.\r\n \r\nUntil recently the pageant was co-owned by Comcast Corp''s NBCUniversal and Trump who is leading national polls in the 2016 Republican presidential nomination race.\r\n ', 'images/singer2.jpg', '2015-12-08', '', 'admin', '', 1),
(18, 4, 'Was detained drove onto the sidewalk.', '', 'Authorities said they were trying to determine whether the driver a woman who was detained drove onto the sidewalk intentionally or due to impairment.\n \nAmong the notable moments of the pageant Flora Coquerel of France, who was at the Paris stadium the night of the November attacks by militants reached the final five and Ariana Miyamoto of Japa whose father is African-American reached the last 10.\n \nMiyamoto''s height of 1.73 m (5.7 ft) and bronze skin are unusual in Japan and her selection to represent Japan created an online firestorm in her native country.\n \nFor the first time viewers had a chance to vote on the winner rating contestants in the swimwear evening gown and interview competitions.\n \nUntil recently the pageant was co-owned by Comcast Corp''s NBCUniversal and Trump who is leading national polls in the 2016 Republican presidential nomination race.\n ', 'images/singer3.jpg', '2015-12-07', '', 'admin', '', 1),
(19, 4, 'The supporters are unhappy at certain', '', 'Iverpool Inter Milan Chelsea and Napoli manager does not get on with some of his key players including Cristiano Ronaldo and James Rodriguez.\r\n\r\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/singer4.jpg', '2015-12-04', '', 'admin', '', 1),
(20, 4, 'Benitez also appears to have been blamed ', '', 'Benitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/singer5.jpg', '2015-12-24', '', 'admin', '', 1),
(21, 4, 'Ineligible player against third-tier Cadiz', '', 'Ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/singer6.jpg', '2015-01-24', '', 'admin', '', 1),
(22, 4, 'Was read out before the Rayo game', '', 'Benitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/singer7.jpg', '2015-11-24', '', 'admin', '', 1),
(23, 4, 'Swirled around the stadium when Rayo', '', 'Benitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/singer8.jpg', '2015-05-24', '', 'admin', '', 1),
(24, 2, 'Also swirled around the stadium ', '', 'Cristiano Ronaldo and James Rodriguez.\r\n\r\nBenitez also appears to have been blamed for Real''s expulsion from the King''s Cup for fielding an ineligible player against third-tier Cadiz and fans at the Bernabeu again whistled when his name was read out before the Rayo game\r\n\r\nWhistles also swirled around the stadium when Rayo fought back from a goal down to take a 2-1 lead, but after they had two players sent off Real steamrollered their city rivals to hit double figures in a La Liga game for the first time since 1960.\r\n\r\nBenitez said the way to win over the fans was to score goals and win matches.\r\n\r\n"The supporters are unhappy at certain moments in games and what we have to do is change their opinion with victories and goals," he told a news conference.\r\n\r\n"We all saw that after the 1-0 we weren''t playing well but it was only a brief lapse," he added. "\r\nLater we did what we had to do."', 'images/img4.png', '2016-01-13', '', 'admin', '', 1),
(25, 5, 'Win Some Lose Some', 'BRYAN ADAMS LYRICS', 'Pardon me, \r\nHave you got the time \r\nTo let me say hello. \r\nCouldn''t help but see \r\nThat you look like a lady I used to know \r\nA long time ago. \r\n\r\nRemember the time we spent together. \r\nRemember the days I dreamt forever. \r\nRemember the nights we stayed together. \r\nWhatever I do I still remember. \r\n\r\nIt''s hard to believe\r\nThat I held her up \r\nAnd then she let me down. \r\nSomeone''s sayin'' to me \r\nThat she broke my heart and left me\r\nSpinnin'' round and round and round. \r\n\r\nRemember the time we spent together. \r\nRemember the days I dreamt forever. \r\nRemember the nights we stayed together. \r\nWhatever I do I still remember.', 'images/albums3.jpg', '2016-01-14', '', 'admin', '', 1),
(26, 5, 'Wait And See', 'BRYAN ADAMS LYRICS', 'There you go looking cool, \r\nWriting rules \r\nFor your theories of romance.\r\n\r\nI know that you doubt me, \r\nBut without me \r\nYou''d be tearing off your one chance.\r\n\r\nWait and see, \r\nThis could be the last time for me. \r\nBaby, just wait and see. \r\n\r\nAll the times \r\nI came running back \r\nDown the path of the least resistance. \r\n\r\nI felt my body \r\nWas just a hobby \r\nFor your heart''s indifference. \r\n\r\nWait and see, \r\nThis could be the last time for me. \r\nNow baby, can''t you wait and see? \r\nJust you wait and see. \r\nJust you wait and see. \r\nWait and see. \r\n\r\nI''ve been trapped by your innocence, \r\nHaven''t seen you since \r\nYou caught me, baby. \r\n\r\nShot down by the one I love, \r\nNow I''m taking off \r\nWith the things you taught me.\r\n\r\nWait and see, \r\nThis could be the last time for me. \r\nNow baby, can''t you wait and see? \r\nJust you wait and see. \r\nJust you wait and see. \r\nWait and see.', 'images/albums2.jpg', '2016-01-14', '', 'admin', '', 1),
(27, 5, 'Give Me Your Love ', 'BRYAN ADAMS LYRICS', 'I can fool myself for a night \r\nGoin'' on \r\nLike I don''t need you any more. \r\n\r\nThat''s like walking in the dark. \r\nTel me now \r\nThat you''ll give me all your love.\r\n\r\nOh, give me your love give me your love \r\nOr nothing at all nothing at all. \r\nOh, give me your love. \r\n\r\nI''ve been everywhere and here I go again \r\nLooking out for me and \r\nLeaving you behind. \r\n\r\nBut let me hold you just one time. \r\nSo will you give me your love, \r\nI''ll know that you''ll be mine. \r\n\r\nOh, give me your love give me your love \r\nOr nothing at all nothing at all \r\nOh, give me your love.\r\n', 'images/albums3.jpg', '2015-01-22', '', 'admin', '', 1),
(28, 5, 'Wastin Time', 'BRYAN ADAMS LYRICS', 'Pardon me, Have you got the time To let me say hello. Couldn''t help but see That you look like a lady I used to know A long time ago. Remember the time we spent together. Remember the days I dreamt forever. Remember the nights we stayed together. Whatever I do I still remember. It''s hard to believeThat I held her up And then she let me down. Someone''s sayin'' to me That she broke my heart and left meSpinnin'' round and round and round. Remember the time we spent together. Remember the days I dreamt forever. Remember the nights we stayed together. Whatever I do I still remember.', 'images/albums.jpg', '2015-11-20', '', 'admin', '', 1),
(29, 5, 'Don t Ya Say It', 'BRYAN ADAMS LYRICS', 'Pardon me, Have you got the time To let me say hello. Couldn''t help but see That you look like a lady I used to know A long time ago. Remember the time we spent together. Remember the days I dreamt forever. Remember the nights we stayed together. Whatever I do I still remember. It''s hard to believeThat I held her up And then she let me down. Someone''s sayin'' to me That she broke my heart and left meSpinnin'' round and round and round. Remember the time we spent together. Remember the days I dreamt forever. Remember the nights we stayed together. Whatever I do I still remember.', 'images/albums3.jpg', '2015-05-19', '', 'admin', '', 1),
(30, 2, 'Hello world', '', '', '', '0000-00-00', '', '', '', 0),
(31, 2, 'Lorem Ipsum is simply dummy text of the ', '', '', '', '0000-00-00', '', '', '', 0),
(32, 2, 'Lorem Ipsum is simply dummy text of the ', 'simply dummy text of the ', '<p>Hay man how are you</p>\r\n', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '0000-00-00', '', '', '', 0),
(33, 2, 'Lorem Ipsum is simply dummy text of the ', 'simply dummy text of the ', '<p>Hay man how are you</p>\r\n', 'http://localhost/zBoomMusic/upolad/b763a6fcbea704afa7802e1fed356e121001c71a.jpg', '0000-00-00', '', '', '', 0),
(34, 2, 'Lorem Ipsum is simply dummy text of the ', 'simply dummy text of the ', '<p>Hay man how are you</p>\r\n', 'http://localhost/zBoomMusic/upolad/b763a6fcbea704afa7802e1fed356e121001c71a.jpg', '0000-00-00', '', '', '', 0),
(35, 2, 'Lorem Ipsum is simply dummy text of the ', 'simply dummy text of the ', '<p>Hay man how are you</p>\r\n', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '0000-00-00', '', '', '', 0),
(36, 2, 'Design Your Weay', 'simply dummy text of the ', '<p>Bangladesh</p>\r\n', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '0000-00-00', '', '', '', 0),
(37, 2, 'Design Your Weay', 'simply dummy text of the ', '<p>Bangladesh</p>\r\n', 'http://localhost/zBoomMusic/upolad/28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '0000-00-00', '', '', '', 0),
(38, 2, 'Design your weay', '', '', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '2016-04-06', '5:20', 'admin', '', 1),
(39, 2, 'Hello man', 'how r u', '<p>Design your weay ddhh</p>\r\n', '', '2016-04-05', '5:20 PM PM', 'Mamun Or Rashid', '', 1),
(40, 2, 'Design Your Weay man', 'simply dummy text of the ', '<p>Amar sonar bangla ami tomar valobasi</p>\r\n', '', '0000-00-00', '01:27 PM PM', 'Mamun Or Rashid', '', 0),
(41, 2, 'Mamun Or Rashid Man', 'Harun or rashid', '<p>design your weay headinggg</p>\r\n', 'http://localhost/zBoomMusic/upolad/28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '0000-00-00', '01:30 PM PM PM', 'Mamun Or Rashid', '', 1),
(42, 2, 'Lorem Ipsum is simply dummy text of the ', 'hello world', '<p>Fixed table layout is important as otherwise the browser will adjust the widths as it sees fit if the contents don&#39;t fit ie the widths are otherwise a suggestion not a rule without fixed table layout.</p>\r\n\r\n<p>Obviously, adjust the CSS to fit your circumstances, which usually means applying the styling only to a tables with a given class or possibly with a given ID.</p>\r\n', 'http://localhost/zBoomMusic/upolad/22516c5fd77a3618e9054cfcbd8dceada0ae5974.jpg', '0000-00-00', '02:30 PM', '1', '', 1),
(43, 4, 'Lorem Ipsum is simply dummy text of the ', 'hello world', '<p>Fixed table layout is important as otherwise the browser will adjust the widths as it sees fit if the contents don&#39;t fit ie the widths are otherwise a suggestion not a rule without fixed table layout.</p>\r\n\r\n<p>Obviously, adjust the CSS to fit your circumstances, which usually means applying the styling only to a tables with a given class or possibly with a given ID.</p>\r\n', 'http://localhost/zBoomMusic/upolad/28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '04/12/2016', '02:33 PM', '1', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE IF NOT EXISTS `categorys` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL,
  `cat_type` varchar(40) NOT NULL,
  `cat_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`cat_id`, `cat_name`, `cat_type`, `cat_status`) VALUES
(1, 'Service Category', 'service', 1),
(2, 'Latest Blog', 'post', 1),
(3, 'Latest Albums', 'album', 1),
(4, 'Upcoming Events', 'event', 1),
(5, 'Galaxy', 'album', 1),
(6, 'Beatport', 'album', 1),
(7, 'Amazon', 'album', 1),
(8, 'Itunes', 'album', 1),
(9, 'Sonic', 'album', 1),
(10, 'Kpopps', 'album', 1),
(11, 'Summer', 'album', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_art_id` int(11) NOT NULL,
  `comment_author` varchar(60) NOT NULL,
  `comment_author_email` varchar(50) NOT NULL,
  `author_website` varchar(100) NOT NULL,
  `comment_date` varchar(30) NOT NULL,
  `comment_time` varchar(50) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_approve` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_art_id` (`comment_art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_art_id`, `comment_author`, `comment_author_email`, `author_website`, `comment_date`, `comment_time`, `comment_content`, `comment_approve`, `user_id`) VALUES
(1, 8, 'Mamun Or Rashid', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '', 'Hello Man This article Very helpful ', 1, 0),
(2, 8, 'Mamun Or Rashid', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '06:34:21', 'Hello Man This article Very helpful ', 1, 0),
(3, 8, 'Harun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '06:35:09', 'Hello World', 1, 0),
(4, 8, 'Harun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '06:35:56', 'Hello World', 1, 0),
(5, 8, 'Harun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '06:36:17', 'Hello World', 1, 0),
(6, 8, 'Harun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:06:15', 'Hello World', 1, 0),
(7, 8, 'Harun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:06:43', 'Hello World', 1, 0),
(8, 8, 'Mamun Or Rashid', 'harun@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:09:21', 'Design Your Weay', 1, 0),
(9, 8, 'Wrold', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:10:08', 'Hello Man', 1, 0),
(10, 8, 'Wrold', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:10:27', 'Hello Man', 1, 0),
(11, 8, 'Wrold', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:10:35', 'Hello Man', 1, 0),
(12, 8, 'Wrold', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:10:42', 'Hello Man', 1, 0),
(13, 11, 'Mamun Or Rashid', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:47:15', 'sdsd', 1, 0),
(14, 11, 'Mamun Or Rashid', 'maamunrcd@gmail.com', 'http://www.google.com', '03 Feb 2016', '07:47:58', 'sdsd', 1, 0),
(15, 10, 'Hamidur Rohman', 'hamidur@gmail.com', 'http:www.fb.com', '03 Feb 2016', '09:00:47', 'Designer ', 1, 0),
(16, 7, 'Hamidur Rohman', 'demo@gmail.com', 'http://www.data.com', '03 Feb 2016', '09:05:43', 'Among the notable moments', 1, 0),
(17, 11, 'Dhaka Bangladesh', 'dhaka@gmail.com', 'http://dhakaBangladesh.com', '03 Feb 2016', '11:11:39', 'or that. I have few doubts, how to add forgot password link and i want add two user roles while registration, based on user role i want to redirect to different page. Thank you', 1, 0),
(18, 11, 'Dhaka Bangladesh', 'dhaka@gmail.com', 'http://dhakaBangladesh.com', '03 Feb 2016', '11:11:53', 'or that. I have few doubts, how to add forgot password link and i want add two user roles while registration, based on user role i want to redirect to different page. Thank you', 1, 0),
(19, 7, 'Farid Uzzaman', 'fariduzzama@gmail.com', 'http://www.google.com', '06 Mar 2016', '18:31:20', 'Rocking Bro.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_replay`
--

CREATE TABLE IF NOT EXISTS `comment_replay` (
  `replay_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `comment_replay_author` varchar(60) NOT NULL,
  `comment_replay_author_email` varchar(60) NOT NULL,
  `comment_replay_author_website` varchar(30) NOT NULL,
  `comment_replay_date` varchar(30) NOT NULL,
  `comment_replay_time` varchar(30) NOT NULL,
  `comment_replay_content` text NOT NULL,
  `comment_replay_approve` tinyint(4) NOT NULL,
  `comment_replay_user_id` int(11) NOT NULL,
  PRIMARY KEY (`replay_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comment_replay`
--

INSERT INTO `comment_replay` (`replay_id`, `comment_id`, `comment_replay_author`, `comment_replay_author_email`, `comment_replay_author_website`, `comment_replay_date`, `comment_replay_time`, `comment_replay_content`, `comment_replay_approve`, `comment_replay_user_id`) VALUES
(1, 14, 'dd', 'ff', 'gg', 'hh', 'asa', 'ff', 1, 1),
(2, 14, 'Zamil Uddin', 'zamil@gmail.com', 'http://www.zamil@gmail.com', '12-02-16', '6:15:15', 'or that. I have few doubts, how to add forgot password link and i want add two user roles while registration, based on user role i want to redirect to different page.\r\nThank you', 1, 1),
(3, 1, 'Design Wrold', 'design@gmail.com', 'http://www.google.com', '11 Feb 2016', '19:24:10', 'Very Bad\r\n', 1, 0),
(4, 1, 'Design Wrold', 'design@gmail.com', 'http://www.google.com', '11 Feb 2016', '19:24:53', 'Very Bad\r\n', 1, 0),
(5, 1, 'Design Wrold', 'design@gmail.com', 'http://www.google.com', '11 Feb 2016', '19:31:16', 'Very Bad\r\n', 1, 0),
(6, 1, 'Design Wrold', 'design@gmail.com', 'http://www.google.com', '11 Feb 2016', '19:31:27', 'Very Bad\r\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(40) NOT NULL,
  `page_url` varchar(40) NOT NULL,
  `page_attribute` varchar(40) NOT NULL,
  `page_content` text NOT NULL,
  `menu_position` tinyint(4) NOT NULL,
  `use_page` tinyint(4) NOT NULL,
  `page_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_url`, `page_attribute`, `page_content`, `menu_position`, `use_page`, `page_status`) VALUES
(1, 'Home', 'http://localhost/zBoomMusic', 'home', '', 1, 1, 1),
(2, 'Blog', 'http://localhost/zBoomMusic/blog.php', 'blog', '', 3, 1, 1),
(3, 'Gallery', 'http://localhost/zBoomMusic/gallery.php', 'gallery', '', 4, 1, 1),
(4, 'Contact Us', '', 'contact', '', 5, 1, 1),
(5, 'About Us', 'http://localhost/zBoomMusic/about.php', 'about us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s when an unknown printer took.\n', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `path`
--

CREATE TABLE IF NOT EXISTS `path` (
  `path_id` int(11) NOT NULL AUTO_INCREMENT,
  `path_name` text NOT NULL,
  `path_type` varchar(15) NOT NULL,
  `path_size` varchar(50) NOT NULL,
  `path_thum` text NOT NULL,
  `path_title` varchar(50) NOT NULL,
  `path_alt` varchar(30) NOT NULL,
  `path_content` text NOT NULL,
  `path_link` text NOT NULL,
  `path_date` varchar(30) NOT NULL,
  `path_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`path_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `path`
--

INSERT INTO `path` (`path_id`, `path_name`, `path_type`, `path_size`, `path_thum`, `path_title`, `path_alt`, `path_content`, `path_link`, `path_date`, `path_status`) VALUES
(1, '415452af1da775445cdf1e4745e22fbdbccfa4f5.jpg', 'jpg', '218104', '415452af1da775445cdf1e4745e22fbdbccfa4f5.jpg', '', '', '', 'http://localhost/zBoomMusic/upolad/415452af1da775445cdf1e4745e22fbdbccfa4f5.jpg', '30 Mar 2016', 1),
(2, '22516c5fd77a3618e9054cfcbd8dceada0ae5974.jpg', 'jpg', '392358', '22516c5fd77a3618e9054cfcbd8dceada0ae5974.jpg', '', '', '', 'http://localhost/zBoomMusic/upolad/22516c5fd77a3618e9054cfcbd8dceada0ae5974.jpg', '30 Mar 2016', 1),
(3, 'b763a6fcbea704afa7802e1fed356e121001c71a.jpg', 'jpg', '713036', 'b763a6fcbea704afa7802e1fed356e121001c71a.jpg', '', '', '', 'http://localhost/zBoomMusic/upolad/b763a6fcbea704afa7802e1fed356e121001c71a.jpg', '30 Mar 2016', 1),
(4, 'aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', 'jpg', '1228093', 'aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '', '', '', 'http://localhost/zBoomMusic/upolad/aca4ad6180b8d36f8849429ec3ee82e001b212b9.jpg', '30 Mar 2016', 1),
(5, '28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', 'jpg', '158004', '28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '', '', '', 'http://localhost/zBoomMusic/upolad/28c9c9f4ad6dd0e5221442aa24e4a23084497011.jpg', '30 Mar 2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `key_id` int(11) NOT NULL AUTO_INCREMENT,
  `Key_name` varchar(60) NOT NULL,
  `key_value` varchar(90) NOT NULL,
  PRIMARY KEY (`key_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key_id`, `Key_name`, `key_value`) VALUES
(1, 'contact_address', '0123 Some Street. '),
(2, 'contact_phone', '02 5852 2545'),
(3, 'contact_email', 'admin@zerotheme.com'),
(4, 'contact_website', 'www.zerotheme.com'),
(5, 'contact_fax', '+1-212-9876543');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(20) NOT NULL,
  `slider_thumnail` varchar(100) NOT NULL,
  `slider_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_thumnail`, `slider_status`) VALUES
(1, 'First_slider', 'images/slide1.png', 1),
(2, '2nd Slider', 'images/slide2.jpg', 1),
(3, '3rd Slider', 'images/slide3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_website` varchar(60) NOT NULL,
  `user_role` varchar(6) NOT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`,`user_email`,`user_website`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_website`, `user_role`, `user_status`) VALUES
(1, 'Mamun Or Rashid', 'maamunrcd@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'http://www.google.com', '1', 1),
(2, 'Harun Or Rashid', 'harun@gmail.com', '', 'http://www.google.com', '5', 1),
(3, 'Anisul Haq', 'anisul@gmail.com', '', 'http://www.anisul.com', '5', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_album`
--
ALTER TABLE `article_album`
  ADD CONSTRAINT `article_album_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorys` (`cat_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`comment_art_id`) REFERENCES `article_album` (`art_id`);

--
-- Constraints for table `comment_replay`
--
ALTER TABLE `comment_replay`
  ADD CONSTRAINT `comment_replay_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
