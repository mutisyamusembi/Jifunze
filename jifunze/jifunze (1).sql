-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 02:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jifunze`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `teacher_` int(10) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `student_id`, `teacher_`, `created_time`) VALUES
(21, 3, 7, '2019-04-04 12:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(20) NOT NULL,
  `downloads` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `teacher_id`, `title`, `body`, `created_at`) VALUES
(12, 7, 'Learn C', 'The C programming language is a general purpose programming language, which relates closely to the way machines work. Understanding how computer memory works is an important aspect of the C programming language. Although C can be considered as \"hard to learn\", C is in fact a very simple language, with very powerful capabilities.\r\n\r\nC is a very common language, and it is the language of many applications such as Windows, the Python interpreter, Git, and many many more.\r\n\r\nC is a compiled language - which means that in order to run it, the compiler (for example, GCC or Visual Studio) must take the code that we wrote, process it, and then create an executable file. This file can then be executed, and will do what we intended for the program to do.\r\n\r\nEvery C program uses libraries, which give the ability to execute necessary functions. For example, the most basic function called printf, which prints to the screen, is defined in the stdio.h header file.\r\n\r\nTo add the ability to run the printf command to our program', '2019-04-04 12:09:12'),
(13, 7, 'What is JAVA', 'Java is a popular programming language, created in 1995.\r\nIt is owned by Oracle, and more than 3 billion devices run Java.\r\nIt is used for:\r\nMobile applications (specially Android apps)\r\nDesktop applications\r\nWeb applications\r\nWeb servers and application servers\r\nGames\r\nDatabase connection\r\nAnd much, much more!\r\nWhy Use Java?\r\nJava works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)\r\nIt is one of the most popular programming language in the world\r\nIt is easy to learn and simple to use\r\nIt is open-source and free\r\nIt is secure, fast and powerful\r\nIt has a huge community support (tens of millions of developers)\r\nGet Started\r\nThis tutorial will teach you the basics of Java.\r\n\r\n', '2019-04-04 12:13:32'),
(14, 7, 'Operating Systems', 'The Operating System is a program with the following features âˆ’\r\n\r\nAn operating system is a program that acts as an interface between the software and the computer hardware.\r\n\r\nIt is an integrated set of specialized programs used to manage overall resources and operations of the computer.\r\n\r\nIt is a specialized software that controls and monitors the execution of all other programs that reside in the computer, including application programs and other system software.\r\nThe objectives of the operating system are âˆ’\r\n\r\nTo make the computer system convenient to use in an efficient manner.\r\n\r\nTo hide the details of the hardware resources from the users.\r\n\r\nTo provide users a convenient interface to use the computer system.\r\n\r\nTo act as an intermediary between the hardware and its users, making it easier for the users to access and use other resources.\r\n\r\nTo manage the resources of a computer system.\r\n\r\nTo keep track of who is using which resource, granting resource requests, and mediating conflicting requests from different programs and users.\r\n\r\nTo provide efficient and fair sharing of resources among users and programs.', '2019-04-04 12:16:45'),
(15, 8, 'Agriculture as a way of life', 'Agriculture is the science and art of cultivating plants and livestock.[1] Agriculture was the key development in the rise of sedentary human civilization, whereby farming of domesticated species created food surpluses that enabled people to live in cities. The history of agriculture began thousands of years ago. After gathering wild grains beginning at least 105,000 years ago, nascent farmers began to plant them around 11,500 years ago. Pigs, sheep and cattle were domesticated over 10,000 years ago. Plants were independently cultivated in at least 11 regions of the world. Industrial agriculture based on large-scale mono culture in the twentieth century came to dominate agricultural output, though about 2 billion people still depended on subsistence agriculture into the twenty-first.\r\n\r\nIn the twentieth century, intensive agriculture increased productivity. It substituted synthetic fertilizers and pesticides for labor, but caused increased water pollution, and often involved farm subsidies. In recent years there has been a backlash against the environmental effects of conventional agriculture, resulting in the organic, regenerative, and sustainable agriculture movements.[69][78] One of the major forces behind this movement has been the European Union, which first certified organic food in 1991 and began reform of its Common Agricultural Policy (CAP) in 2005 to phase out commodity-linked farm subsidies,[79] also known as decoupling. The growth of organic farming has renewed research in alternative technologies such as integrated pest management, selective breeding,[80] and controlled-environment agriculture.[81][82] Recent mainstream technological developments include genetically modified food.[83]', '2019-04-04 12:31:52'),
(16, 8, 'How beneficial is terracing', 'n agriculture, a terrace is a piece of sloped plane that has been cut into a series of successively receding flat surfaces or platforms, which resemble steps, for the purposes of more effective farming. This type of landscaping is therefore called terracing. Graduated terrace steps are commonly used to farm on hilly or mountainous terrain. Terraced fields decrease both erosion and surface runoff, and may be used to support growing crops that require irrigation, such as rice. The Rice Terraces of the Philippine Cordilleras have been designated as a UNESCO World Heritage Site because of the significance of this technique.[1]\r\n\r\n\r\n\r\n\r\n', '2019-04-04 12:33:37'),
(17, 9, 'How Fast is an electric Car, really?', 'First, in general racing terminology, \"quick\" means how long it takes to get from point A to point B, while \"fast\" means the top speed a vehicle reaches. In drag racing, for example, the \"faster\" vehicle hits the higher speed over the course of the race, but the quicker vehicle gets to the finish line first.\r\n\r\nElectric cars are capable of being quicker than gas-powered cars, but EVs aren\'t yet capable of going faster. Our little zero to 60 scenario is a good example. Gasoline cars do have a performance advantage when those top speeds are being sustained for longer periods of time.\r\n\r\nA 2015 Fortune article featured former Tesla engineer Dustin Grace, who provided a good overview. Electric vehicles generate much more torque than gas vehicles, which is important because torque is what drives the vehicle forward. Furthermore, an electric car\'s motor eliminates the need for a traditional transmission in many modern designs. The power goes straight to the wheels for instant acceleration, making EVs quicker on the start.\r\n\r\nIn a gas-powered car, the engine has to route the power first to the transmission and then to the wheels (the components collectively known as the \"drivetrain\" or \"powertrain\"). This process takes longer, wasting crucial zero to 60 potential. Some of the power created by the engine â€” usually about 15 percent â€” is also wasted traveling through the drivetrain, known as drivetrain loss.', '2019-04-04 12:36:56'),
(18, 9, 'Is Tesla the Future?', 'Teslaâ€™s Gigafactory will soon be the largest covered building ever built and, with the permission of the Chinese company BYD, the largest battery factory in the world in what has become the fight to control of one of the most important technologies for the future. Teslaâ€™s joint venture with Panasonic will make it one of the most relevant players in the field, a household name with greater capacity for expansion in an increasingly dynamic and contested market that goes far beyond the automotive industry, configuring one of the key industries in the transition to a world fueled by clean energy.\r\n\r\nWhile European industry will increasingly depend on the Chinese to develop its battery capacity, and a range of countries court Elon Musk to build another Gigafactory in their territory, there is clear evidence of the suitability of lithium-ion technology as a solution to the problems posed by the supply of electricity from renewable sources, while the alleged problems posed by the doomsayers regarding the scarcity of this material are being solved through new developments to improve recycling: the clear difference that makes electric batteries superior to fossil fuels is that we do not have to burnâ€Šâ€”â€Šand eventually breatheâ€Šâ€”â€Šany of its chemical components.\r\n\r\nBut as electric vehicle autonomy increases and transportation-derived emissions fall, itâ€™s increasingly clear that battery technology is subject to fewer limitations: Teslas have been on the road for more than a decade, clocking up hundreds of thousands of kilometers, while their batteries last much, much better than the critics of electric vehicle technology presaged.\r\n', '2019-04-04 12:40:59'),
(19, 10, 'What is a Macro-Economy', 'Macroeconomics (from the Greek prefix makro- meaning \"large\" + economics) is a branch of economics dealing with the performance, structure, behavior, and decision-making of an economy as a whole. This includes regional, national, and global economies.[1][2] Macroeconomists study aggregated indicators such as GDP, unemployment rates, national income, price indices, and the interrelations among the different sectors of the economy to better understand how the whole economy functions. They also develop models that explain the relationship between such factors as national income, output, consumption, unemployment, inflation, saving, investment, international trade, and international finance.\r\n\r\nWhile macroeconomics is a broad field of study, there are two areas of research that are emblematic of the discipline: the attempt to understand the causes and consequences of short-run fluctuations in national income (the business cycle), and the attempt to understand the determinants of long-run economic growth (increases in national income). Macroeconomic models and their forecasts are used by governments to assist in the development and evaluation of economic policy.\r\n\r\nMacroeconomics and microeconomics, a pair of terms coined by Ragnar Frisch, are the two most general fields in economics.[3] In contrast to macroeconomics, microeconomics is the branch of economics that studies the behavior of individuals and firms in making decisions and the interactions among these individuals and firms in narrowly-defined markets.', '2019-04-04 12:43:30'),
(20, 10, 'Inflation explained', 'The Government set the MPC a target for CPI of 2.% +/-1. It believes inflation higher than 3.0% is potentially damaging to the economy.\r\n\r\nDecline in relative competitiveness. If inflation in the UK is higher than elsewhere, then UK goods will become uncompetitive leading to a fall in demand for UK exports. If there is a fall in demand for exports then there may be a deficit on the current account Balance of Payments. However, this may be offset by a devaluation that is likely to occur from high inflation.\r\nIf the inflation was worldwide caused by an increase in the oil price (e.g. like in 2008), it may be necessary to revise the inflation target of 2% â€“ or at least tolerate a higher inflation rate. The UK would not lose its competitive advantage because every country would have higher inflation. To reduce inflation could cause stagflation (lower growth and higher prices) In other words, it would be more harmful to reduce inflation than to tolerate a temporary spike in inflation.\r\nDepreciation in the exchange rate. If inflation is high there will be a devaluation of the exchange rate, This is something the govt wishes to avoid as it creates uncertainty amongst business and lower purchasing power of Sterling abroad.\r\nMenu costs. Higher rates of inflation may cause menu costs, which means firms have to change price lists quite often. However, this is not that significant when inflation is only 5%. Modern technology has also made it easier for firms to change prices.\r\nBoom and bust economic cycles. If inflation is caused by unsustainable economic growth then the economic boom may be followed by a recession. To reduce inflation and keep inflation within the target, the B of E will have to increase interest rates; this causes problems because AD will fall causing lower growth. For example, in the late 1980s, the UK experienced demand-pull inflation from rapid economic growth â€“ but this led to higher interest rates and the boom turning to bust.', '2019-04-04 12:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `email`, `password`) VALUES
(1, 'kilo', 'a@gmail.com', 'bcedc450f8481e89b1445069acdc3dd9'),
(2, 'mutis', 'b@gmail.com', 'ef28f869b241b00b879922832b14da10'),
(3, 'mutisya', 'yy@gmail.com', 'cbd44f8b5b48a51f7dab98abcdf45d4e'),
(4, 'ggggggg', 'wow@gmail.com', '6a5eac2bedb4b96d9b8c1fb4d1cfbc8b'),
(5, 'kilonzo', 'wwwww@gmail.com', '8134b84030cca5285ed0e0b31ba06f10');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `images` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `username`, `description`, `email`, `password`, `images`) VALUES
(7, 'Johnson', 'John', 'I enjoy Sciences and Math, I am passionate about teaching. If I am not in a library reading, then I am out enjoying nature.Enjoy my series', 'a@gmail.com', '275ee914408c526ece9734debe626829', 'b.jpg'),
(8, 'Osiemo', 'osiemo', 'Change the world by being yourself.', 'b@gmail.com', '3e63afd0565f7fa98d084139112a04d5', 'images.jpg'),
(9, 'Janet', 'JJ', 'Believe in yourself. I\'ll be teaching a lot of car related stuff, if you know what i mean', 'c@gmail.com', '335cf4508dd597be4bfc9caa3e08b901', 'images (3).jpg'),
(10, 'Mutisya', 'mutisya', 'I am all over the place, I won\'t stick to a single topic, i\'ll show you anything and everything that i know', 'd@gmail.com', 'db88a0257c220dbfdd2e40f6152d6a8d', 'headshot-of-young-businessman-vector.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
