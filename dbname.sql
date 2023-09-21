-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 10:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbname`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `Actor_ID` varchar(4) NOT NULL,
  `Actor_Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`Actor_ID`, `Actor_Name`) VALUES
('A001', 'Jason Bateman'),
('A002', 'Laura Linney'),
('A003', 'Sofia Hublitz'),
('A007', 'Winona Ryder'),
('A008', 'David Harbour'),
('A009', 'Finn Wolfhard'),
('A010', 'Elliot Page'),
('A011', 'Tom Hopper'),
('A012', 'David Castaneda'),
('A013', 'Alison Brie'),
('A014', 'Betty Gilpin'),
('A015', 'Marc Maron'),
('A019', 'Olivia Colman'),
('A020', 'Helena Bonham Carter'),
('A021', 'Tobias Menzies'),
('A032', 'Michiel Huisman'),
('A033', 'Victoria Pedretti'),
('A034', 'Eddy Iee'),
('A035', 'Erica Schroeder'),
('A036', 'Wagner Moura'),
('A037', 'Adjoa Andoh'),
('A038', 'Julie Andrews'),
('A039', 'Scoot McNairy'),
('A040', 'Diego Luna');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(7) NOT NULL,
  `first_name` varchar(4) DEFAULT NULL,
  `last_name` varchar(6) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `password`, `email`) VALUES
('chenht', 'ht', 'chen', 'chen123@', 'htchen@gmail.com'),
('estherw', 'wong', 'esther', 'eswong*456', 'esther@hotmail.com'),
('kwchong', 'kw', 'chong', 'kw567&', 'kwchong@live.com'),
('sylim', 'sy', 'lim', 'lim789*', 'sylim@domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `Award_Name` varchar(60) DEFAULT NULL,
  `Award_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`Award_Name`, `Award_ID`) VALUES
('Life Art Festival 2020', 'AW004'),
('Hollywood Post Alliance, USA 2019', 'AW005'),
('Bram Stoker Awards 2018', 'AW006'),
('Image Awards (NAACP) 2021', 'AW007'),
('AFI Awards, USA 2019', 'AW008'),
('Imagen Foundation Awards 2020', 'AW010'),
('Hollywood Makeup Artist and Hair Stylist Guild Award 2021', 'AW011'),
('AACTA International Award 2021', 'AW012'),
('Gold Derby Award 2020', 'AW016'),
('Online Film & Television Association 2020', 'AW017'),
('Golden Trailer Awards 2019', 'AW018'),
('Annie Awards 2021', 'AW019'),
('Hollywood Post Alliance 2019', 'AW020'),
('Critics Choice Super Awards 2021', 'AW021'),
('American Cinema Editors, USA 2018', 'AW022'),
('California on Location Awards 2018', 'AW023'),
('IGN Summer Movie Award 2018', 'AW024'),
('Cinema Eye Honor Awards, US 2019', 'AW025'),
('Primetime Emmy Awards 2020', 'AW026'),
('BAFTA Award 2018', 'AW027'),
('Hollywood Music in Media Awards 2021', 'AW028'),
('Academy of Science Fiction, Fantasy & Horror Films, USA 2021', 'AW029'),
('Dragon Awards 2020', 'AW030'),
('D0010', 'Bill '),
('D0025', 'Byoun'),
('D0016', 'Carly'),
('D0026', 'Chris'),
('D0023', 'Darre'),
('Director_ID', 'Direc'),
('D0015', 'Liz F'),
('D0011', 'Mark '),
('D0018', 'Peter'),
('D0014', 'Steve'),
('D0013', 'The D');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `Director_ID` varchar(5) NOT NULL,
  `Director_Name` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`Director_ID`, `Director_Name`) VALUES
('D0010', 'Bill Dubuque'),
('D0011', 'Mark Williams'),
('D0013', 'The Duffer Brothers'),
('D0014', 'Steve Blackman'),
('D0015', 'Liz Flahive'),
('D0016', 'Carly Mensch'),
('D0018', 'Peter Morgan'),
('D0023', 'Darren Star'),
('D0025', 'Byoung-wook Ahn'),
('D0026', 'Chris Brancato'),
('D0027', 'Chris van Dusen'),
('D0028', 'Allan Scott'),
('D0029', 'Doug Miro');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `Episode_ID` varchar(5) NOT NULL,
  `Episode_Name` varchar(46) DEFAULT NULL,
  `Episode_Rating` decimal(2,1) DEFAULT NULL,
  `Episode_Num` int(2) DEFAULT NULL,
  `Episode_Duration` varchar(5) DEFAULT NULL,
  `Tv_ID` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`Episode_ID`, `Episode_Name`, `Episode_Rating`, `Episode_Num`, `Episode_Duration`, `Tv_ID`) VALUES
('E0001', 'Sugarwood', '8.0', 1, '58min', 'T0100'),
('E0002', 'Blue Cat', '8.2', 2, '57min', 'T0100'),
('E0003', 'My Dripping Sleep', '7.7', 3, '60min', 'T0100'),
('E0004', 'Tonight We Improvise', '8.1', 4, '60min', 'T0100'),
('E0005', 'Ruling Day', '8.0', 5, '56min', 'T0100'),
('E0006', 'Book of Ruth', '8.1', 6, '59min', 'T0100'),
('E0007', 'Nest Box', '8.1', 7, '59min', 'T0100'),
('E0008', 'Kaleidoscope', '7.6', 8, '53min', 'T0100'),
('E0009', 'Coffee, Black', '8.9', 9, '59min', 'T0100'),
('E0010', 'The Toll', '9.2', 10, '80min', 'T0100'),
('E0011', 'Reparation', '8.3', 1, '61min', 'T0101'),
('E0012', 'The precious Blood of Jesus', '8.1', 2, '61min', 'T0101'),
('E0013', 'Once a Langmore', '7.9', 3, '57min', 'T0101'),
('E0014', 'Stag', '8.2', 4, '62min', 'T0101'),
('E0015', 'Game Day', '8.8', 5, '61min', 'T0101'),
('E0016', 'Outer Darkness', '8.6', 6, '67min', 'T0101'),
('E0017', 'One Way Out', '8.5', 7, '60min', 'T0101'),
('E0018', 'The Big Sleep', '8.3', 8, '63min', 'T0101'),
('E0019', 'The Badger', '8.7', 9, '64min', 'T0101'),
('E0020', 'The Gold Coast', '9.0', 10, '65min', 'T0101'),
('E0021', 'Wartime', '8.2', 1, '61min', 'T0102'),
('E0022', 'Civil Union', '8.5', 2, '64min', 'T0102'),
('E0023', 'Kevin Cronin Was Here', '8.5', 3, '59min', 'T0102'),
('E0024', 'Boss Fight', '8.6', 4, '53min', 'T0102'),
('E0025', 'It Came from Michoacan', '8.3', 5, '63min', 'T0102'),
('E0026', 'Su Casa Es Mi Casa', '8.7', 6, '59min', 'T0102'),
('E0027', 'In Case of Emergency', '8.4', 7, '62min', 'T0102'),
('E0028', 'BFF', '8.8', 8, '58min', 'T0102'),
('E0029', 'Fire Pink', '9.4', 9, '63min', 'T0102'),
('E0030', 'All In', '9.5', 10, '67min', 'T0102'),
('E0035', 'The Vanishing of Will Byers', '8.6', 1, '49min', 'T0104'),
('E0036', 'The Weirdo on Maple Street', '8.5', 2, '56min', 'T0104'),
('E0037', 'Holly, Jolly', '8.9', 3, '52min', 'T0104'),
('E0038', 'The Body', '9.0', 4, '51min', 'T0104'),
('E0039', 'The Flea and The Acrobat', '8.8', 5, '53min', 'T0104'),
('E0040', 'The Monster', '8.9', 6, '47min', 'T0104'),
('E0041', 'The Bathtub', '9.1', 7, '42min', 'T0104'),
('E0042', 'The Upside Down', '9.4', 8, '55min', 'T0104'),
('E0043', 'MADMAX', '8.3', 1, '48min', 'T0105'),
('E0044', 'Trick or Treat, Freak', '8.4', 2, '56min', 'T0105'),
('E0045', 'The Pollywog', '8.6', 3, '51min', 'T0105'),
('E0046', 'Will the Wise', '8.7', 4, '46min', 'T0105'),
('E0047', 'Dig Dug', '8.9', 5, '58min', 'T0105'),
('E0048', 'The Spy', '9.2', 6, '52min', 'T0105'),
('E0049', 'The Lost Sister', '6.1', 7, '46min', 'T0105'),
('E0050', 'The Mind Falyer', '9.3', 8, '48min', 'T0105'),
('E0051', 'The Gate', '9.4', 9, '62min', 'T0105'),
('E0052', 'Suzie, Do You Copy?', '7.9', 1, '51min', 'T0106'),
('E0053', 'The Mall Rats', '8.0', 2, '50min', 'T0106'),
('E0054', 'The Case of Missing Lifeguard', '8.4', 3, '50min', 'T0106'),
('E0055', 'The Sauna Test', '9.0', 4, '53min', 'T0106'),
('E0056', 'The Flayed', '8.6', 5, '52min', 'T0106'),
('E0057', 'E Pluribus Unum', '8.7', 6, '60min', 'T0106'),
('E0058', 'The Bite', '8.8', 7, '55min', 'T0106'),
('E0059', 'The Battle of Starcourt', '9.3', 8, '78min', 'T0106'),
('E0060', 'We Only See Each Other at Wedding and Funerals', '7.9', 1, '60min', 'T0107'),
('E0061', 'Run Boy Run', '7.9', 2, '58min', 'T0107'),
('E0062', 'Extra Ordinary', '7.9', 3, '57min', 'T0107'),
('E0063', 'Man on the Moon', '8.1', 4, '57min', 'T0107'),
('E0064', 'Number Five', '8.3', 5, '61min', 'T0107'),
('E0065', 'The Day That Wasn\'t', '8.4', 6, '59min', 'T0107'),
('E0066', 'The Day That Was', '8.2', 7, '57min', 'T0107'),
('E0067', 'I Heard a Rumor', '8.6', 8, '52min', 'T0107'),
('E0068', 'Changes', '8.6', 9, '46min', 'T0107'),
('E0069', 'The White Violin', '8.8', 10, '48min', 'T0107'),
('E0070', 'Right Back Where We Started', '8.4', 1, '47min', 'T0108'),
('E0071', 'The Frankel Footage', '8.2', 2, '48min', 'T0108'),
('E0072', 'The Swedish Job', '8.4', 3, '48min', 'T0108'),
('E0073', 'The Majestic 12', '8.2', 4, '49min', 'T0108'),
('E0074', 'Valhalla', '8.3', 5, '48min', 'T0108'),
('E0075', 'A Light Supper', '8.4', 6, '50min', 'T0108'),
('E0076', 'Oga for Oga', '8.6', 7, '47min', 'T0108'),
('E0077', 'The Seven Stages', '8.7', 8, '47min', 'T0108'),
('E0078', '743', '8.9', 9, '41min', 'T0108'),
('E0079', 'The End of Somethings', '9.1', 10, '49min', 'T0108'),
('E0080', 'Pilot', '7.9', 1, '37min', 'T0109'),
('E0081', 'Slouch. Submit.', '7.5', 2, '32min', 'T0109'),
('E0082', 'The Wrath of Kuntar', '7.7', 3, '31min', 'T0109'),
('E0083', 'The Dusty Spur', '7.6', 4, '32min', 'T0109'),
('E0084', 'Debbie Does Somethings', '8.1', 5, '35min', 'T0109'),
('E0085', 'This is One of Those Moments', '7.7', 6, '30min', 'T0109'),
('E0086', 'Live Studio Audience', '8.4', 7, '36min', 'T0109'),
('E0087', 'Maybe It\'s All the Disco', '7.9', 8, '32min', 'T0109'),
('E0088', 'The Liberal Chokehold', '8.2', 9, '30min', 'T0109'),
('E0089', 'Money\'s in the Chase', '8.8', 10, '35min', 'T0109'),
('E0090', 'Viking Funeral', '8.0', 1, '34min', 'T0110'),
('E0091', 'Candy of the Year', '7.7', 2, '32min', 'T0110'),
('E0092', 'Concerned Women of America', '7.8', 3, '27min', 'T0110'),
('E0093', 'Mother of All Matches', '8.6', 4, '32min', 'T0110'),
('E0094', 'Percerts Are People, Too', '8.2', 5, '31min', 'T0110'),
('E0095', 'Work the Leg', '8.7', 6, '32min', 'T0110'),
('E0096', 'Nothing Shattered', '8.7', 7, '32min', 'T0110'),
('E0097', 'The Good Twin', '8.5', 8, '35min', 'T0110'),
('E0098', 'Rosalie', '8.4', 9, '36min', 'T0110'),
('E0099', 'Every Potato Has a Receipt', '9.2', 10, '46min', 'T0110'),
('E0100', 'Up, Up, Up', '7.6', 1, '34min', 'T0111'),
('E0101', 'Hot Tub Club', '7.7', 2, '33min', 'T0111'),
('E0102', 'Desert Pollen', '7.8', 3, '37min', 'T0111'),
('E0103', 'Say Yes', '7.7', 4, '35min', 'T0111'),
('E0104', 'Freaky Tuesday', '8.7', 5, '34min', 'T0111'),
('E0105', 'Outward Bound', '8.1', 6, '42min', 'T0111'),
('E0106', 'Hollywood Homecoming', '7.9', 7, '36min', 'T0111'),
('E0107', 'Keep Ridin\'', '7.5', 8, '28min', 'T0111'),
('E0108', 'The Libertines', '8.2', 9, '39min', 'T0111'),
('E0109', 'A Very GLOW Christmas', '8.4', 10, '42min', 'T0111'),
('E0114', 'Wolferton Splash', '8.3', 1, '57min', 'T0113'),
('E0115', 'Hyde Park Corner', '9.1', 2, '62min', 'T0113'),
('E0116', 'Windsor', '8.2', 3, '60min', 'T0113'),
('E0117', 'Act of God', '8.7', 4, '58min', 'T0113'),
('E0118', 'Smoke and Mirrors', '8.5', 5, '56min', 'T0113'),
('E0119', 'Gelignite', '8.1', 6, '59min', 'T0113'),
('E0120', 'Scientia Potentia Est', '8.8', 7, '59min', 'T0113'),
('E0121', 'Pride & Joy', '8.4', 8, '59min', 'T0113'),
('E0122', 'Assassins', '9.1', 9, '61min', 'T0113'),
('E0123', 'Gloriana', '8.6', 10, '55min', 'T0113'),
('E0124', 'Misadventure', '8.2', 1, '57min', 'T0114'),
('E0125', 'A Company of Men', '8.2', 2, '55min', 'T0114'),
('E0126', 'Lisbon', '8.4', 3, '56min', 'T0114'),
('E0127', 'Beryl', '8.7', 4, '61min', 'T0114'),
('E0128', 'Marionettes', '9.0', 5, '61min', 'T0114'),
('E0129', 'Vergangenheit', '9.1', 6, '62min', 'T0114'),
('E0130', 'Matrimonium', '8.2', 7, '61min', 'T0114'),
('E0131', 'Dear Mrs. Kenndy', '9.2', 8, '57min', 'T0114'),
('E0132', 'Paterfamilias', '8.8', 9, '60min', 'T0114'),
('E0133', 'Mystery Man', '8.5', 10, '60min', 'T0114'),
('E0134', 'Olding', '8.0', 1, '48min', 'T0115'),
('E0135', 'Margaretology', '8.6', 2, '48min', 'T0115'),
('E0136', 'Aberfan', '9.4', 3, '55min', 'T0115'),
('E0137', 'Bubbikins', '8.7', 4, '60min', 'T0115'),
('E0138', 'Coup', '8.0', 5, '57min', 'T0115'),
('E0139', 'Tywysog Cymru', '9.2', 6, '56min', 'T0115'),
('E0140', 'Moondust', '8.1', 7, '56min', 'T0115'),
('E0141', 'Dangling Man', '8.3', 8, '47min', 'T0115'),
('E0142', 'Imbroglio', '8.2', 9, '47min', 'T0115'),
('E0143', 'Cri de Coeur', '8.4', 10, '59min', 'T0115'),
('E0144', 'Gold Stick', '8.5', 1, '54min', 'T0116'),
('E0145', 'The Balmoral Test', '8.7', 2, '57min', 'T0116'),
('E0146', 'Fairytale', '8.8', 3, '57min', 'T0116'),
('E0147', 'Favourites', '8.3', 4, '60min', 'T0116'),
('E0148', 'Fagan', '8.7', 5, '53min', 'T0116'),
('E0149', 'Terra Nullius', '8.9', 6, '55min', 'T0116'),
('E0150', 'The Hereditary Principle', '8.3', 7, '50min', 'T0116'),
('E0151', '48:1', '8.6', 8, '54min', 'T0116'),
('E0152', 'Avalanche', '8.4', 9, '50min', 'T0116'),
('E0153', 'War', '8.9', 10, '54min', 'T0116'),
('E0215', 'Steven Sees a Ghost', '8.2', 1, '60min', 'T0122'),
('E0216', 'Open Casket', '8.0', 2, '52min', 'T0122'),
('E0217', 'Touch', '8.7', 3, '54min', 'T0122'),
('E0218', 'The twin thing', '8.6', 4, '53min', 'T0122'),
('E0219', 'The bent neck lady', '9.5', 5, '70min', 'T0122'),
('E0220', 'Two storms', '9.4', 6, '57min', 'T0122'),
('E0221', 'Eulogy', '8.3', 7, '61min', 'T0122'),
('E0222', 'Witness mark', '8.9', 8, '43min', 'T0122'),
('E0223', 'Screaming meemies', '8.9', 9, '58min', 'T0122'),
('E0224', 'Silence lay steadily', '8.6', 10, '71min', 'T0122'),
('E0225', 'The great good place', '7.8', 1, '54min', 'T0123'),
('E0226', 'The pupil', '7.5', 2, '46min', 'T0123'),
('E0227', 'The two faces, part one', '7.5', 3, '57min', 'T0123'),
('E0228', 'The way it came', '8.0', 4, '53min', 'T0123'),
('E0229', 'The altar of the death', '8.7', 5, '55min', 'T0123'),
('E0230', 'The jolly corner', '7.7', 6, '66min', 'T0123'),
('E0231', 'The two faces, part 2', '8.0', 7, '60min', 'T0123'),
('E0232', 'The romance of certain old clothes', '8.5', 8, '56min', 'T0123'),
('E0233', 'The beast in the jungle', '8.3', 9, '52min', 'T0123'),
('E0234', 'Mango', '7.6', 1, '8min', 'T0124'),
('E0235', 'Mango 2', '7.6', 2, '8min', 'T0124'),
('E0236', 'Larva island', '7.2', 3, '8min', 'T0124'),
('E0237', 'Chuck', '8.0', 4, '8min', 'T0124'),
('E0238', 'Clara', '8.2', 5, '8min', 'T0124'),
('E0239', 'Crabsformer', '8.2', 6, '8min', 'T0124'),
('E0240', 'Fishing', '8.1', 7, '8min', 'T0124'),
('E0241', 'Pendent', '7.4', 8, '8min', 'T0124'),
('E0242', 'Lala island', '8.4', 9, '8min', 'T0124'),
('E0243', 'Master chef', '8.1', 10, '8min', 'T0124'),
('E0244', 'Farming', '8.2', 11, '8min', 'T0124'),
('E0245', 'Pirate', '7.9', 12, '8min', 'T0124'),
('E0246', 'Change', '8.2', 13, '8min', 'T0124'),
('E0247', 'Maze', '7.9', 1, '8min', 'T0125'),
('E0248', 'Fire', '8.2', 2, '8min', 'T0125'),
('E0249', 'Beach volleyball', '7.4', 3, '8min', 'T0125'),
('E0250', 'Larva rangers 1', '7.2', 4, '8min', 'T0125'),
('E0251', 'Larva rangers 2', '8.0', 5, '8min', 'T0125'),
('E0252', 'A lucky day', '7.6', 6, '8min', 'T0125'),
('E0253', 'Crabsformer 2', '7.1', 7, '8min', 'T0125'),
('E0254', 'Booby’s love', '7.1', 8, '8min', 'T0125'),
('E0255', 'Mango’s parents', '8.2', 9, '8min', 'T0125'),
('E0256', 'Iceberg', '8.2', 10, '8min', 'T0125'),
('E0257', 'Storm', '7.6', 11, '8min', 'T0125'),
('E0258', 'Escape', '8.6', 12, '8min', 'T0125'),
('E0259', 'Drift', '8.6', 13, '8min', 'T0125'),
('E0260', 'Descenso', '8.9', 1, '57min', 'T0126'),
('E0261', 'The sword of simon bolivar', '8.5', 2, '47min', 'T0126'),
('E0262', 'The men of always', '8.5', 3, '47min', 'T0126'),
('E0263', 'The palace in flames', '8.7', 4, '44min', 'T0126'),
('E0264', 'There will be a future', '8.4', 5, '55min', 'T0126'),
('E0265', 'Explosivos', '9.1', 6, '50min', 'T0126'),
('E0266', 'You will cry tears of blood', '8.6', 7, '51min', 'T0126'),
('E0267', 'La gran mentira', '9.0', 8, '51min', 'T0126'),
('E0268', 'La catedral', '8.7', 9, '51min', 'T0126'),
('E0269', 'Despegue', '8.9', 10, '45min', 'T0126'),
('E0270', 'Free at last', '8.5', 1, '53min', 'T0127'),
('E0271', 'Cambalache', '8.6', 2, '47min', 'T0127'),
('E0272', 'Our man in madrid', '8.7', 3, '47min', 'T0127'),
('E0273', 'The good, the bad and the dead', '9.4', 4, '56min', 'T0127'),
('E0274', 'The enemies of my enemy', '8.6', 5, '52min', 'T0127'),
('E0275', 'Los pepes', '9.2', 6, '54min', 'T0127'),
('E0276', 'Deutschland 93', '8.7', 7, '57min', 'T0127'),
('E0277', 'Exit el patron', '8.8', 8, '55min', 'T0127'),
('E0278', 'Nuestra finca', '8.6', 9, '57min', 'T0127'),
('E0279', 'Al fin cayo!', '9.5', 10, '53min', 'T0127'),
('E0280', 'The kingpin strategy', '8.0', 1, '55min', 'T0128'),
('E0281', 'The cali KGB', '8.1', 2, '49min', 'T0128'),
('E0282', 'Follow the money', '8.1', 3, '59min', 'T0128'),
('E0283', 'Checkmate', '9.0', 4, '53min', 'T0128'),
('E0284', 'MRO', '8.5', 5, '61min', 'T0128'),
('E0285', 'Best laid plans', '8.8', 6, '57min', 'T0128'),
('E0286', 'Sin salida', '9.0', 7, '50min', 'T0128'),
('E0287', 'Convivir', '8.7', 8, '51min', 'T0128'),
('E0288', 'Todos los hombres del presidente', '7.4', 9, '47min', 'T0128'),
('E0289', 'Goin back to cali', '9.2', 10, '51min', 'T0128');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre_ID` int(2) NOT NULL,
  `Genre_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`Genre_ID`, `Genre_name`) VALUES
(1, 'Crime'),
(2, 'Horror'),
(3, 'Action and Adventure'),
(4, 'Comedies'),
(5, 'Mysteries'),
(6, 'Political'),
(7, 'Fantasy'),
(8, 'Law'),
(9, 'Romance'),
(10, 'Drama'),
(11, 'Military'),
(12, 'Animation'),
(13, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `genre_tv`
--

CREATE TABLE `genre_tv` (
  `TV_ID` varchar(5) NOT NULL,
  `Genre_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre_tv`
--

INSERT INTO `genre_tv` (`TV_ID`, `Genre_ID`) VALUES
('T0100', 1),
('T0101', 1),
('T0102', 1),
('T0104', 2),
('T0105', 2),
('T0106', 2),
('T0107', 3),
('T0108', 3),
('T0109', 4),
('T0110', 4),
('T0111', 4),
('T0113', 6),
('T0114', 6),
('T0115', 6),
('T0116', 6),
('T0122', 2),
('T0123', 13),
('T0124', 3),
('T0125', 4),
('T0125', 12),
('T0126', 1),
('T0126', 10),
('T0127', 1),
('T0127', 10),
('T0128', 1),
('T0128', 10),
('T0129', 9),
('T0129', 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(6) NOT NULL,
  `User_ID` int(4) DEFAULT NULL,
  `Amount` decimal(4,2) DEFAULT NULL,
  `Pay_Date` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `User_ID`, `Amount`, `Pay_Date`) VALUES
(300100, 1001, '39.00', '10-05-21'),
(300101, 1002, '17.00', '02-02-21'),
(300102, 1003, '0.00', '15-04-21'),
(300103, 1004, '39.00', '01-01-21'),
(300104, 1001, '17.00', '06-07-21'),
(300105, 1001, '39.00', '06-07-21'),
(300106, 1001, '39.00', '06-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Plan_ID` varchar(2) NOT NULL,
  `Plan_name` varchar(6) DEFAULT NULL,
  `fee` decimal(4,2) DEFAULT NULL,
  `Description` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Plan_ID`, `Plan_name`, `fee`, `Description`) VALUES
('P1', 'Plan A', '17.00', '360p with one device access'),
('P2', 'Plan B', '39.00', '480p with multiple device access up to 3');

-- --------------------------------------------------------

--
-- Table structure for table `tv_actor`
--

CREATE TABLE `tv_actor` (
  `Actor_ID` varchar(4) NOT NULL,
  `TV_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tv_actor`
--

INSERT INTO `tv_actor` (`Actor_ID`, `TV_ID`) VALUES
('A001', 'T0100'),
('A001', 'T0101'),
('A001', 'T0102'),
('A002', 'T0100'),
('A002', 'T0101'),
('A002', 'T0102'),
('A003', 'T0100'),
('A003', 'T0101'),
('A003', 'T0102'),
('A007', 'T0104'),
('A007', 'T0105'),
('A007', 'T0106'),
('A008', 'T0104'),
('A008', 'T0105'),
('A008', 'T0106'),
('A009', 'T0104'),
('A009', 'T0105'),
('A009', 'T0106'),
('A010', 'T0107'),
('A010', 'T0108'),
('A011', 'T0107'),
('A011', 'T0108'),
('A012', 'T0107'),
('A012', 'T0108'),
('A013', 'T0109'),
('A013', 'T0110'),
('A013', 'T0111'),
('A014', 'T0109'),
('A014', 'T0110'),
('A014', 'T0111'),
('A015', 'T0109'),
('A015', 'T0110'),
('A015', 'T0111'),
('A019', 'T0113'),
('A019', 'T0114'),
('A019', 'T0115'),
('A019', 'T0116'),
('A020', 'T0113'),
('A020', 'T0114'),
('A020', 'T0115'),
('A020', 'T0116'),
('A021', 'T0113'),
('A021', 'T0114'),
('A021', 'T0115'),
('A021', 'T0116'),
('A032', 'T0122'),
('A032', 'T0123'),
('A033', 'T0122'),
('A033', 'T0123'),
('A034', 'T0124'),
('A034', 'T0125'),
('A035', 'T0124'),
('A035', 'T0125'),
('A036', 'T0124'),
('A036', 'T0125'),
('A037', 'T0126'),
('A037', 'T0127'),
('A037', 'T0128'),
('A038', 'T0126'),
('A038', 'T0127'),
('A038', 'T0128'),
('A039', 'T0129'),
('A040', 'T0129');

-- --------------------------------------------------------

--
-- Table structure for table `tv_award`
--

CREATE TABLE `tv_award` (
  `Award_ID` varchar(5) NOT NULL,
  `TV_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tv_award`
--

INSERT INTO `tv_award` (`Award_ID`, `TV_ID`) VALUES
('AW001', 'T0100'),
('AW001', 'T0114'),
('AW004', 'T0124'),
('AW005', 'T0125'),
('AW006', 'T0126'),
('AW007', 'T0128'),
('AW008', 'T0129'),
('AW010', 'T0127'),
('AW011', 'T0122'),
('AW012', 'T0123'),
('AW016', 'T0104'),
('AW017', 'T0105'),
('AW018', 'T0106'),
('AW019', 'T0107'),
('AW020', 'T0108'),
('AW021', 'T0109'),
('AW022', 'T0110'),
('AW023', 'T0111'),
('AW024', 'T0112'),
('AW025', 'T0113'),
('AW026', 'T0115'),
('AW027', 'T0116'),
('AW028', 'T0117'),
('AW029', 'T0117'),
('AW030', 'T0117');

-- --------------------------------------------------------

--
-- Table structure for table `tv_director`
--

CREATE TABLE `tv_director` (
  `Director_ID` varchar(5) DEFAULT NULL,
  `TV_ID` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tv_director`
--

INSERT INTO `tv_director` (`Director_ID`, `TV_ID`) VALUES
('D0018', 'T0113'),
('D0018', 'T0114'),
('D0018', 'T0115'),
('D0025', 'T0123'),
('D0026', 'T0125'),
('D0029', 'T0125'),
('D0027', 'T0127'),
('D0027', 'T0128'),
('D0010', 'T0101'),
('D0010', 'T0102'),
('D0011', 'T0101'),
('D0011', 'T0102'),
('D0013', 'T0105'),
('D0013', 'T0106'),
('D0014', 'T0108'),
('D0015', 'T0110'),
('D0015', 'T0110'),
('D0016', 'T0111'),
('D0016', 'T0111'),
('D0010', 'T0100'),
('D0011', 'T0100'),
('D0013', 'T0104'),
('D0014', 'T0107'),
('D0015', 'T0109'),
('D0016', 'T0109'),
('D0018', 'T0116'),
('D0023', 'T0111'),
('D0025', 'T0122'),
('D0026', 'T0124'),
('D0027', 'T0126'),
('D0028', 'T0129'),
('D0029', 'T0124');

-- --------------------------------------------------------

--
-- Table structure for table `tv_series`
--

CREATE TABLE `tv_series` (
  `TV_ID` varchar(5) NOT NULL,
  `TV_Name` varchar(35) DEFAULT NULL,
  `TV_TotalEpisodes` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tv_series`
--

INSERT INTO `tv_series` (`TV_ID`, `TV_Name`, `TV_TotalEpisodes`) VALUES
('T0100', 'Ozark Season 1', 10),
('T0101', 'Ozark Season 2', 10),
('T0102', 'Ozark Season 3', 10),
('T0104', 'Stranger Things Season 1', 8),
('T0105', 'Stranger Things Season 2', 9),
('T0106', 'Stranger Things Season 3', 8),
('T0107', 'The Umbrella Academy Season 1', 10),
('T0108', 'The Umbrella Academy Season 2', 10),
('T0109', 'GLOW Season 1', 10),
('T0110', 'GLOW Season 2', 10),
('T0111', 'GLOW Season 3', 10),
('T0113', 'The Crown Season 1', 10),
('T0114', 'The Crown Season 2', 10),
('T0115', 'The Crown Season 3', 10),
('T0116', 'The Crown Season 4', 10),
('T0122', 'The Haunting of Hill House Season 1', 10),
('T0123', 'The Haunting of Hill House Season 2', 9),
('T0124', 'Larva Island Season 1', 13),
('T0125', 'Larva Island Season 2', 13),
('T0126', 'Narcos Season 1', 10),
('T0127', 'Narcos Season 2', 10),
('T0128', 'Narcos Season 3', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tv_user`
--

CREATE TABLE `tv_user` (
  `tv_id` varchar(5) DEFAULT NULL,
  `user_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tv_user`
--

INSERT INTO `tv_user` (`tv_id`, `user_id`) VALUES
('T0111', 1004),
('T0113', 1002),
('T0122', 1001),
('T0123', 1001),
('T0124', 1003),
('T0100', 1001),
('T0100', 1001),
('T0100', 1001),
('T0102', 1001),
('T0104', 1001),
('T0107', 1001),
('T0100', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `user_1`
--

CREATE TABLE `user_1` (
  `User_ID` int(4) NOT NULL,
  `email` varchar(17) DEFAULT NULL,
  `first_name` varchar(7) DEFAULT NULL,
  `last_name` varchar(6) DEFAULT NULL,
  `password` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_1`
--

INSERT INTO `user_1` (`User_ID`, `email`, `first_name`, `last_name`, `password`) VALUES
(1001, 'chris34@gmail.com', 'Chris', 'garner', '456cb@321'),
(1002, 'melissa@yahoo.com', 'melissa', 'lee', 'Mel#5632'),
(1003, 'ryan78@gmail.com', 'ryan', 'doe', '153&@ry'),
(1004, 'jory@hotmail.com', 'jory', 'chong', 'i*mjo99');

-- --------------------------------------------------------

--
-- Table structure for table `user_plan`
--

CREATE TABLE `user_plan` (
  `Plan_ID` varchar(2) DEFAULT NULL,
  `user_ID` int(4) DEFAULT NULL,
  `start_accdate` varchar(8) DEFAULT NULL,
  `end_accdate` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_plan`
--

INSERT INTO `user_plan` (`Plan_ID`, `user_ID`, `start_accdate`, `end_accdate`) VALUES
('P1', 1001, '01-04-21', '30-04-21'),
('P2', 1004, '06-05-21', '04-06-21'),
('P1', 1002, '15-02-21', '16-03-21'),
('P2', 1003, '10-01-21', '08-02-21'),
('P1', 1001, '06-07-21', '06-08-21'),
('P2', 1001, '06-07-21', '06-08-21'),
('P2', 1001, '06-07-21', '06-08-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`Actor_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`Award_ID`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Director_ID`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`Episode_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`Plan_ID`);

--
-- Indexes for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD PRIMARY KEY (`TV_ID`);

--
-- Indexes for table `user_1`
--
ALTER TABLE `user_1`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre_tv`
--
ALTER TABLE `genre_tv`
  ADD CONSTRAINT `genre_tv_ibfk_1` FOREIGN KEY (`Genre_ID`) REFERENCES `genre` (`Genre_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
