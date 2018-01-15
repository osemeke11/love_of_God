-- Database name --
DBName - church
--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `password`, `active`) VALUES
(1, 'Osemeke Samuel', 'mrexcelsam1@gmail.com', '$2y$10$IlaJszSpzpvMQOUYrAcg4uQIKXUcWTN6Qfq99XPoZvXLBkhP6wYN6', 0);

--
-- Table structure for table `bible_verse`
--

CREATE TABLE IF NOT EXISTS `bible_verse` (
  `id` int(11) NOT NULL,
  `bible_verse` varchar(20) NOT NULL,
  `bible_content` text NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bible_verse`
--

INSERT INTO `bible_verse` (`id`, `bible_verse`, `bible_content`, `day`) VALUES
(1, 'Psalm 23:1', 'The Lord is my shepherd; I shall not want', '2018-01-15'),
(2, 'Psalm 40:3', 'HE PUT A NEW SONG IN MY MOUTH, A HYMN OF PRAISE TO OUR GOD. MANY WILL SEE AND FEAR THE LORD AND PUT THEIR TRUST IN HIM.', '2018-01-16');

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`) VALUES
(6, 'g2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `page` varchar(50) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `page_content`) VALUES
(1, 'about', 'i love u');

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bible_verse`
--
ALTER TABLE `bible_verse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bible_verse`
--
ALTER TABLE `bible_verse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
