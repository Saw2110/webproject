-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 04:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(100) DEFAULT NULL,
  `blog_img` varchar(100) DEFAULT NULL,
  `blog_short_description` varchar(420) DEFAULT NULL,
  `blog_intro` varchar(1000) DEFAULT NULL,
  `blog_sub_title` varchar(100) DEFAULT NULL,
  `blog_secondary_text` varchar(4000) DEFAULT NULL,
  `blog_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `blog_title`, `blog_img`, `blog_short_description`, `blog_intro`, `blog_sub_title`, `blog_secondary_text`, `blog_link`) VALUES
(1, 'Bungee Jumping', 'bungee.jpg', 'Bungee jumping is an activity that involves jumping from a tall structure while connected to a large elastic cord.The tall structure is usually a fixed object, such as a building, bridge or crane; but it is also possible to jump from a movable object, such as a hot-air-balloon or helicopter, that has the ability to hover above the ground. The thrill comes from the free-falling and the rebound.', 'Bungee jumping (also spelled bungy jumping, which is the usual spelling in New Zealand and several other countries) is an activity that involves jumping from a tall structure while connected to a large elastic cord.The tall structure is usually a fixed object, such as a building, bridge or crane; but it is also possible to jump from a movable object, such as a hot-air-balloon or helicopter, that has the ability to hover above the ground. The thrill comes from the free-falling and the rebound. When the person jumps, the cord stretches and the jumper flies upwards again as the cord recoils, and continues to oscillate up and down until all the kinetic energy is dissipated.', 'History Of Bungee', 'The first modern bungee jumps were made on 1 April 1979 from the 250-foot (76 m) Clifton Suspension Bridge in Bristol, by David Kirke, and Simon Keeling, members of the Oxford University Dangerous Sports Club, and Geoff Tabin, a professional climber who tied the ropes for the jump.The students had come up with the idea after discussing a \"vine jumping\" ritual carried out by certain residents of Vanuatu. The jumpers were arrested shortly after, but continued with jumps in the US from the Golden Gate Bridge and the Royal Gorge Bridge (this last jump sponsored by and televised on the American programme That\'s Incredible), spreading the concept worldwide. By 1982, they were jumping from mobile cranes and hot air balloons.<br>Organised commercial bungee jumping began with the New Zealander, A J Hackett, who made his first jump from Auckland\'s Greenhithe Bridge in 1986. During the following years, Hackett performed a number of jumps from bridges and other structures (including the Eiffel Tower), building public interest in the sport, and opening the world\'s first permanent commercial bungee site, the Kawarau Bridge Bungy at the Kawarau Gorge Suspension Bridge near Queenstown in the South Island of New Zealand.Hackett remains one of the largest commercial operators, with concerns in several countries.<br>Several million successful jumps have taken place since 1980. This safety record is attributable to bungee operators rigorously conforming to standards and guidelines governing jumps, such as double checking calculations and fittings for every jump.As with any sport, injuries can still occur, and there have been fatalities. A relatively common mistake in fatality cases is to use a cord that is too long. The cord should be substantially shorter than the height of the jumping platform to allow it room to stretch. When the cord becomes taut and then is stretched, the tension in the cord progressively increases. Initially the tension is less than the jumper\'s weight and the jumper continues to accelerate downwards.', 'bungee.php'),
(2, 'Scuba Diving', 'scuba.jpg', 'Scuba diving may be done recreationally or professionally in a number of applications, including scientific, military and public safety roles, but most commercial diving uses surface-supplied diving equipment when this is practicable. A scuba diver primarily moves underwater by using fins attached to the feet, but external propulsion can be provided by a diver propulsion vehicle, or a sled pulled from the surface.', 'Scuba diving may be done recreationally or professionally in a number of applications, including scientific, military and public safety roles, but most commercial diving uses surface-supplied diving equipment when this is practicable. Some scuba divers use a snorkel when swimming on the surface. Scuba divers are trained in the procedures and skills appropriate to their level of certification by instructors affiliated to the diver certification organisations which issue these certifications.These include standard operating procedures for using the equipment and dealing with the general hazards of the underwater environment, and emergency procedures for self-help and assistance of a similarly equipped diver experiencing problems. A minimum level of fitness and health is required by most training organisations, but a higher level of fitness may be appropriate for some applications.', 'History Of Scuba Diving', 'The history of scuba diving is closely linked with the history of scuba equipment. By the turn of the twentieth century, two basic architectures for underwater breathing apparatus had been pioneered; open-circuit surface supplied equipment where the diver\'s exhaled gas is vented directly into the water, and closed-circuit breathing apparatus where the diver\'s carbon dioxide is filtered from unused oxygen, which is then recirculated. Closed circuit equipment was more easily adapted to scuba in the absence of reliable, portable, and economical high pressure gas storage vessels. By the mid twentieth century, high pressure cylinders were available and two systems for scuba had emerged: open-circuit scuba where the diver\'s exhaled breath is vented directly into the water, and closed-circuit scuba where the carbon dioxide is removed from the diver\'s exhaled breath which has oxygen added and is recirculated. Oxygen rebreathers are severely depth-limited due to oxygen toxicity risk, which increases with depth, and the available systems for mixed gas rebreathers were fairly bulky and designed for use with diving helmets.[8] The first commercially practical scuba rebreather was designed and built by the diving engineer Henry Fleuss in 1878, while working for Siebe Gorman in London.<br>His self contained breathing apparatus consisted of a rubber mask connected to a breathing bag, with an estimated 50–60% oxygen supplied from a copper tank and carbon dioxide scrubbed by passing it through a bundle of rope yarn soaked in a solution of caustic potash, the system giving a dive duration of up to about three hours. This apparatus had no way of measuring the gas composition during use.\r\nDuring the 1930s and all through World War II, the British, Italians and Germans developed and extensively used oxygen rebreathers to equip the first frogmen. The British adapted the Davis Submerged Escape Apparatus and the Germans adapted the Dräger submarine escape rebreathers, for their frogmen during the war. In the U.S. Major Christian J. Lambertsen invented an underwater free-swimming oxygen rebreather in 1939, which was accepted by the Office of Strategic Services.<br>In 1952 he patented a modification of his apparatus, this time named SCUBA, which became the generic English word for autonomous breathing equipment for diving, and later for the activity using the equipment. After World War II, military frogmen continued to use rebreathers since they do not make bubbles which would give away the presence of the divers. The high percentage of oxygen used by these early rebreather systems limited the depth at which they could be used due to the risk of convulsions caused by acute oxygen toxicity.Although a working demand regulator system had been invented in 1864 by Auguste Denayrouze and Benoît Rouquayrol, the first open-circuit scuba system developed in 1925 by Yves Le Prieur in France was a manually adjusted free-flow system with a low endurance, which limited its practical usefulness. In 1942, during the German occupation of France, Jacques-Yves Cousteau and Émile Gagnan designed the first successful and safe open-circuit scuba, known as the Aqua-Lung. Their system combined an improved demand regulator with high-pressure air tanks. This was patented in 1945. To sell his regulator in English-speaking countries Cousteau registered the Aqua-Lung trademark, which was first licensed to the U.S. Divers company, and in 1948 to Siebe Gorman of England. Siebe Gorman was allowed to sell in Commonwealth countries, but had difficulty in meeting the demand and the U.S. patent prevented others from making the product. The patent was circumvented by Ted Eldred of Melbourne, Australia, who developed the single-hose open-circuit scuba system, which separates the first stage and demand valve of the pressure regulator by a low-pressure hose, puts the demand valve at the diver\'s mouth, and releases exhaled gas through the demand valve casing.', 'scuba.php'),
(3, 'Paragliding', 'paragliding.jpg', 'Paragliding is the recreational and competitive adventure sport of flying paragliders: lightweight, free-flying, foot-launched glider aircraft with no rigid primary structure. The pilot sits in a harness suspended below a fabric wing. Wing shape is maintained by the suspension lines, the pressure of air entering vents in the front of the wing, and the aerodynamic forces of the air flowing over the outside atmosphere.', 'Paragliding is the recreational and competitive adventure sport of flying paragliders: lightweight, free-flying, foot-launched glider aircraft with no rigid primary structure. The pilot sits in a harness suspended below a fabric wing. Wing shape is maintained by the suspension lines, the pressure of air entering vents in the front of the wing, and the aerodynamic forces of the air flowing over the outside atmosphere.<br>Despite not using an engine, paraglider flights can last many hours and cover many hundreds of kilometres, though flights of one to two hours and covering some tens of kilometres are more the norm. By skillful exploitation of sources of lift, the pilot may gain height, often climbing to altitudes of a few thousand metres.', 'History Of Paragliding', 'In 1952 Canadian Domina Jalbert patented a governable gliding parachute with multi-cells and controls for lateral glide.In 1954, Walter Neumark predicted (in an article in Flight magazine) a time when a glider pilot would be \"able to launch himself by running over the edge of a cliff or down a slope ... whether on a rock-climbing holiday in Skye or ski-ing in the Alps\". In 1961, the French engineer Pierre Lemongine produced improved parachute designs that led to the Para-Commander. The PC had cutouts at the rear and sides that enabled it to be towed into the air and steered, leading to parasailing/parascending. Domina Jalbert invented the Parafoil, which had sectioned cells in an aerofoil shape; an open leading edge and a closed trailing edge, inflated by passage through the air – the ram-air design. He filed US Patent 3131894 on January 10, 1963.<br>These developments were combined in June 1978 by three friends, Jean-Claude Bétemps, André Bohn and Gérard Bosson, from Mieussy, Haute-Savoie, France. After inspiration from an article on slope soaring in the Parachute Manual magazine by parachutist and publisher Dan Poynter, they calculated that on a suitable slope, a \"square\" ram-air parachute could be inflated by running down the slope; Bétemps launched from Pointe du Pertuiset, Mieussy, and flew 100 m. Bohn followed him and glided down to the football pitch in the valley 1000 metres below.\"Parapente\" (pente being French for \"slope\") was born. From the 1980s, equipment has continued to improve, and the number of paragliding pilots and established sites has continued to increase. The first (unofficial) Paragliding World Championship was held in Verbier, Switzerland, in 1987, though the first officially sanctioned FAI World Paragliding Championship was held in Kössen, Austria, in 1989. Europe has seen the greatest growth in paragliding, with France alone registering in 2011 over 25,000 active pilots.', 'paragliding.php'),
(4, 'Hiking', 'hike.jpg', 'Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. The idea of taking a walk in the countryside for pleasure developed in the 18th century, and arose because of changing attitudes to the landscape and nature associated with the Romantic movement resulting in m', 'Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word \"walking\" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps. The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell walking (a term mostly used for hillwalking in northern England).', 'History Of Hiking', 'The idea of taking a walk in the countryside for pleasure developed in the 18th century, and arose because of changing attitudes to the landscape and nature associated with the Romantic movement.In earlier times walking generally indicated poverty and was also associated with vagrancy.<br>Thomas West, an English priest, popularized the idea of walking for pleasure in his guide to the Lake District of 1778. In the introduction he wrote that he aimed to encourage the taste of visiting the lakes by furnishing the traveller with a Guide and for that purpose, the writer has here collected and laid before him, all the select stations and points of view, noticed by those authors who have last made the tour of the lakes, verified by his own repeated observations.To this end he included various \'stations\' or viewpoints around the lakes, from which tourists would be encouraged to enjoy the views in terms of their aesthetic qualities.Published in 1778 the book was a major success.', 'hike.php'),
(5, 'Camping', 'camping.jpg', 'Camping as a recreational activity became popular among elites in the early 20th century. With time, it grew more democratic, and varied. Modern campers frequent publicly owned natural resources such as national and state parks, wilderness areas, and commercial campgrounds. Camping is a key part of many youth organizations around the world, such as Scouting, which use it to teach both self-reliance and teamwork.', 'Camping as a recreational activity became popular among elites in the early 20th century. With time, it grew more democratic, and varied. Modern campers frequent publicly owned natural resources such as national and state parks, wilderness areas, and commercial campgrounds. Camping is a key part of many youth organizations around the world, such as Scouting, which use it to teach both self-reliance and teamwork.<br>Camping describes a range of activities and approaches to outdoor accommodation. Survivalist campers set off with as little as possible to get by, whereas recreational vehicle travelers arrive equipped with their own electricity, heat, and patio furniture. Camping may be combined with hiking, as in backpacking, and is often enjoyed in conjunction with other outdoor activities such as canoeing, climbing, fishing, and hunting. Fastpacking involves both running and camping.', 'History Of Camping', 'The history of recreational camping is often traced back to Thomas Hiram Holding, a British travelling tailor, but it was actually first popularised in the UK on the river Thames. By the 1880s large numbers of visitors took part in the pastime, which was connected to the late Victorian craze for pleasure boating. The early camping equipment was very heavy, so it was convenient to transport it by boat or to use craft that converted into tents. Although Thomas Hiram Holding is often seen as the father of modern camping in the UK, he was responsible for popularising a different type of camping in the early twentieth century. He experienced the activity in the wild from his youth, when he had spent much time with his parents traveling across the American prairies. Later he embarked on a cycling and camping tour with some friends across Ireland. His book on his Ireland experience, Cycle and Camp in Connemara led to the formation of the first camping group in 1901, the Association of Cycle Campers, later to become the Camping and Caravanning Club. He wrote The Campers Handbook in 1908, so that he could share his enthusiasm for the great outdoors with the world<br>Possibly the first commercial camping ground in the world was Cunningham’s camp, near Douglas, Isle of Man, which opened in 1894. In 1906 the Association of Cycle Campers opened its first own camping site, in Weybridge.By that time the organization had several hundred members. In 1910 the Association was merged into the National Camping Club. Although WW1 was responsible for a certain hiatus in camping activity, the association received a new lease of life after the war when Sir Robert Baden-Powell (founder of the Boy Scouts movement) became its president.<br>In the US, camping may be traced to William Henry Harrison Murray 1869 publication of Camp-Life in the Adirondacks resulting in a flood of visitors to the Adirondacks that summer.', 'camping.php');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cmmt` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `index_slider`
--

CREATE TABLE `index_slider` (
  `id` int(11) NOT NULL,
  `slider_image_name` varchar(200) DEFAULT NULL,
  `slider_title` varchar(200) DEFAULT NULL,
  `slider_description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_slider`
--

INSERT INTO `index_slider` (`id`, `slider_image_name`, `slider_title`, `slider_description`) VALUES
(1, '1.jpg', 'Mountain Climbing', 'Every thought what the view would like at the top?'),
(2, '2.jpg', 'Unleash Yourself', 'Release your inner self.'),
(3, '3.jpg', 'Bring Your Loved Ones', 'Why have fun alone when you could share it with others.'),
(4, '4.jpg', 'Get Your Quality Time', 'Have a moment of quality time.'),
(5, 'wallpaper.PNG', 'Ditial painting', 'Expression of your imagination in a digital way.');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `user_pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `user_pass`) VALUES
(2, '123', '123'),
(5, 'sabin', 'sabin'),
(6, 'shahil', 'shahil');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_and_notice`
--

CREATE TABLE `news_and_notice` (
  `id` int(11) NOT NULL,
  `n_title` varchar(50) DEFAULT NULL,
  `n_short_description` varchar(75) DEFAULT NULL,
  `n_body` varchar(150) DEFAULT NULL,
  `n_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_and_notice`
--

INSERT INTO `news_and_notice` (`id`, `n_title`, `n_short_description`, `n_body`, `n_link`) VALUES
(2, 'Vacancy Announcement', 'We are hiring competent, qualified and experienced front-end developers.', 'We are hiring competent, qualified and experienced front-end developers.', 'news1.php'),
(3, 'Maintainance Announcement', 'The website will be closed for the next few days.', 'The website will be closed for the next few days.', 'news2.php');

-- --------------------------------------------------------

--
-- Table structure for table `signup_info`
--

CREATE TABLE `signup_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `user_pass` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_info`
--

INSERT INTO `signup_info` (`id`, `name`, `gender`, `dob`, `username`, `user_pass`) VALUES
(2, '123', 'Male', '123', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `index_slider`
--
ALTER TABLE `index_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_notice`
--
ALTER TABLE `news_and_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_info`
--
ALTER TABLE `signup_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `index_slider`
--
ALTER TABLE `index_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_and_notice`
--
ALTER TABLE `news_and_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup_info`
--
ALTER TABLE `signup_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
