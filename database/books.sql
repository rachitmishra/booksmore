/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : books_db

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-11-10 02:09:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
`username`  varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`password`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`username`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `authors`
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
`authorid`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`aname`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`aaddress`  varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`acontact`  int(10) UNSIGNED NULL DEFAULT NULL ,
`acountry`  char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`ayear`  year NOT NULL ,
`aisbn`  char(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`aemail`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`authorid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of authors
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
`isbn`  char(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`author`  char(96) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`title`  char(96) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`catid`  int(10) UNSIGNED NULL DEFAULT NULL ,
`price`  float(6,2) NOT NULL ,
`description`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`publisher`  varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`year`  year NOT NULL ,
`bestprice`  int(10) NOT NULL ,
`language`  char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`isnew`  smallint(2) NOT NULL ,
`bestselling`  bigint(20) NOT NULL ,
`popularity`  bigint(20) NOT NULL ,
`iseditorpick`  smallint(2) NOT NULL ,
`isbookofday`  smallint(2) NOT NULL ,
`isdiscounted`  smallint(2) NOT NULL ,
`addedon`  date NOT NULL ,
PRIMARY KEY (`isbn`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of books
-- ----------------------------
BEGIN;
INSERT INTO `books` VALUES ('8128108186', 'Chetan Bhagat', 'One Night @ The Call Center', '1011', '140.00', 'The story within the story relates the events that happen one night at a call center. Told through the eyes of the protagonist, Shyam, it is a story of almost lost love, thwarted ambitions, absence of family affection, and the work environment of a globalized office. Shyam loves but has lost Priyanka; Vroom loves Esha who wants to be a model, Radhika is in an unhappy marriage, and military uncle wants to talk to his grandson; they all hate Bakshi, their cruel boss. Claimed to be based on a true story.', 'Rupa & Co.', '2005', '80', 'English', '0', '24', '0', '1', '0', '1', '2012-10-01'), ('8129104598', 'Chetan Bhagat', 'Five Point Someone-What not to do at IIT', '1011', '140.00', 'The novel is set in the Indian Institute of Technology Delhi, in the period 1991 to 1995. It is about the adventures of three mechanical engineering students (and friends), Hari Kumar (the narrator), Ryan Oberoi, and Alok Gupta, who fail to cope with the ', 'Rupa & Co.', '2004', '80', 'English', '0', '32', '0', '1', '0', '1', '2012-10-05'), ('81291188077', 'Chetan Bhagat', 'Revolution 2020-Love Corruption Ambition', '1011', '140.00', 'Revolution 2020 is the story of Aarti, Gopal and Raghav . It is about two childhood friends who find themselves at loggerheads due to their divergent ambitions. While Gopal caves in to the system, Raghav fights it.\r\n\r\nThe story is setup in the holy-city o', 'Rupa & Co.', '2011', '80', 'English', '0', '12', '0', '0', '0', '1', '2012-10-07'), ('9780143415527', 'Manasi Vaidya', 'No Deadline For Love', '1042', '160.00', 'All her life Megha has diligently done what was expected of her: the graduation in economics, the MBA in marketing and now the straitlaced job in a highprofile FMCG company.\r\n\r\nBut lately, she?s been wondering if this unending routine of juggling late hours and unreasonable deadlines is really her life?s calling. Her mother?s desperate attempts to put her on the ?marriage market? are not making life any easier. And to top it all, Megha?s latest project has been bogged down by a complete dearth of creative ideas, giving her nasty boss the perfect excuse to disregard the blood, sweat and tears she?s poured into her job so far. The last thing she needs is having her suggestions trampled upon by the team?s new creative consultant, Yudi?gorgeous, sardonic and only too eager to disagree with Megha. And so the stage is set for a quirky battle of wits and some unexpected romance.', 'Penguin Books India', '2011', '143', 'English', '1', '3', '15', '1', '0', '1', '2012-10-28'), ('9780143416111', 'Ruskin Bond', 'Susannas Seven Husbands', '1042', '175.00', '\'That Black Widow spider always reminds me of Susanna, my lifelong friend and neighbour . . . As I was never her husband, I have survived to tell this story.\'\r\n\r\nSince his childhood, Arun has secretly been in love with Susanna, his dangerously alluring neighbour, who becomes his friend despite the wide difference in their ages. But Susanna has a weakness for falling in love with the wrong men. Over the years, Arun watches as Susanna becomes notorious as the merry widow who flits from one marriage to another, leaving behind a trail of dead husbands. It is only a matter of time before he too begins to wonder if there is any truth to the slanderous gossip surrounding the woman he is in love with.\r\n\r\nIn this gripping new novella of love and death, Bond revisits his previously published short story of the same name, included here in an appendix. This edition also features the screenplay Saat Khoon Maaf, based on this novella and written by award-winning film-maker Vishal Bhardwaj and Matthew Robbins.', 'Penguin Books India', '2011', '151', 'English', '1', '31', '1', '1', '0', '1', '2012-10-28'), ('9780224094153', 'Julian Barnes', 'The Sense Of An Ending', '1011', '399.00', 'Tony Webster and his clique first met Adrian Finn at school. Sex-hungry and book-hungry, they would navigate the girl-less sixth form together, trading in affectations, in-jokes, rumour and wit. Maybe Adrian was a little more serious than the others, certainly more intelligent, but they all swore to stay friends for life.\r\nNow Tony is in middle age. He?s had a career and a single marriage, a calm divorce. He?s certainly never tried to hurt anybody. Memory, though, is imperfect. It can always throw up surprises, as a lawyer?s letter is about to prove.\r\nThe Sense of an Ending is the story of one man coming to terms with the mutable past. Laced with trademark precision, dexterity and insight, it is the work of one of the world?s most distinguished writers.', 'Random House Group', '2011', '284', 'English', '1', '4', '0', '1', '0', '1', '2012-10-28'), ('9780857532091', 'Niall Leonard', 'Crusher', '1011', '399.00', 'The most talked-about debut thriller of 2012. \r\n\r\nThe day Finn Maguire discovers his fathet bludgeoned to death in a pool of blood, his dreary life is turned upside down. Prime suspect in the murder, Finn must race against time to clear his name and find out who hated his dad enough to kill him. \r\n\r\nTrawling the sordid, brutal London underworld for answers, Finn exposes dark family secrets and faces danger at every turn. But he\'s about to learn that it\'s the people you trust who can hit you the hardest.', 'Doubleday books', '2012', '299', 'English', '1', '21', '0', '1', '1', '1', '2012-10-28'), ('9788129118653', 'Kartik Sharma, Ravi Sharma', 'The Quest of the Sparrows', '1011', '225.00', 'A seemingly ordinary young man forced to become a guru takes a leap of faith and sets off with his followers on a taxing journey that changes their mindsets and lives forever.\r\n\r\nInspired by the carefree life of a sparrow, reluctant guru Partibhan takes off on a 600-kilometre expedition on foot to test his theory of practical spirituality. He believes that human beings can become powerful creators, but the desire to secure the future makes them mere survivors. However, survival isn?t the only goal of life. A much bigger role, a higher calling awaits us.\r\n\r\nWill Guru Partibhan and his disciples complete the journey? Will they discover their true potential and find everlasting joy?\r\n\r\nLooks at the importance of spirituality in today?s fast-paced World\r\nA must read for all those feeling burnt out and wondering about the ?higher purpose? of their lives\r\nThe story of a young man who finds his calling in life, written in a relatable manner\r\nTwists in the tale will keep the reader guessing till the end.', 'Rupa & Co.', '2012', '185', 'English', '1', '0', '0', '0', '0', '1', '2012-10-28');
COMMIT;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
`catid`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`catname`  char(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`categorycount`  bigint(20) NULL DEFAULT NULL ,
PRIMARY KEY (`catid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=1043

;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1000', 'Mystery', null), ('1001', 'Children\'s', null), ('1002', 'Sexuality', '50'), ('1003', 'Lifestyle', '5'), ('1004', 'Science', null), ('1005', 'Engineering', null), ('1006', 'Computer', '8'), ('1007', 'Internet', null), ('1008', 'Self-Help', null), ('1009', 'Comics', '21'), ('1010', 'Magazines', null), ('1011', 'Fiction', '4'), ('1012', 'Novels', null), ('1013', 'Horror', null), ('1014', 'Sci-Fi', '9'), ('1015', 'Biographies', null), ('1016', 'Civil Services', null), ('1017', 'Photography', '6'), ('1018', 'Hacking', null), ('1019', 'Automobiles', null), ('1020', 'General Knowledge', null), ('1021', 'Sports', null), ('1022', 'Travel', null), ('1023', 'Cooking', null), ('1024', 'Arts & Cinema', null), ('1025', 'Astrology', null), ('1026', 'Religion', null), ('1027', 'Business', null), ('1028', 'Planning', null), ('1029', 'Law', null), ('1030', 'Adventure', null), ('1031', 'Literature', null), ('1032', 'Medical', null), ('1033', 'Military', null), ('1034', 'History', null), ('1035', 'Environment', null), ('1036', 'Paranormal', null), ('1037', 'Health', null), ('1038', 'Gardening', null), ('1039', 'Love', null), ('1040', 'Romance', null), ('1041', 'Short Stories', '1'), ('1042', 'General', '17');
COMMIT;

-- ----------------------------
-- Table structure for `customers`
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
`customerid`  bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
`name`  char(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`address`  varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`city`  char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`pin`  int(10) UNSIGNED NOT NULL ,
`state`  char(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`country`  char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`customerid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=201200001

;

-- ----------------------------
-- Records of customers
-- ----------------------------
BEGIN;
INSERT INTO `customers` VALUES ('201200000', 'Rachit Mishra', '1/203,Vikasnagar', 'Lucknow', '226022', 'Uttar Pradesh', 'India');
COMMIT;

-- ----------------------------
-- Table structure for `links`
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
`linkid`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`link`  varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`linkdetail`  varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`addedon`  date NOT NULL ,
`ajaxify`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`linkid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=201208

;

-- ----------------------------
-- Records of links
-- ----------------------------
BEGIN;
INSERT INTO `links` VALUES ('201200', 'Request a book', 'request.php', 'Process user requests.', '2012-10-22', 'requests'), ('201201', 'Pre-Order', 'request.php', 'Process user requests.', '2012-10-22', 'preorder'), ('201202', 'Track Order', 'tracker.php', 'Track user order', '2012-10-22', 'track'), ('201203', 'Educational Discounts', 'discounts.php', 'Shows available user discounts.', '2012-10-22', 'educationaldiscount'), ('201204', 'Bulk Order', 'bulkorder.php', 'Process bul orders', '2012-10-22', 'bulk'), ('201205', 'Complaint', 'complaint.php', 'Process any complaints', '2012-10-22', 'complaints'), ('201206', 'Feedback', 'feedback.php', 'Process user feedback', '2012-10-22', 'feedback'), ('201207', 'Home', 'default.php', 'Homepage', '0000-00-00', 'home');
COMMIT;

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
`orderid`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`customerid`  int(10) UNSIGNED NOT NULL ,
`amount`  float(6,2) NULL DEFAULT NULL ,
`date`  date NOT NULL ,
`order_status`  char(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`ship_address`  varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`ship_city`  char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`ship_pin`  int(6) NOT NULL ,
`ship_country`  char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`orderid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of orders
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `publishers`
-- ----------------------------
DROP TABLE IF EXISTS `publishers`;
CREATE TABLE `publishers` (
`publisherid`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`pname`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`paddress`  varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`pcontact`  int(10) NOT NULL ,
`pcountry`  char(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`pyear`  year NOT NULL ,
`popularity`  bigint(20) NOT NULL ,
PRIMARY KEY (`publisherid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of publishers
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `userlogin`
-- ----------------------------
DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE `userlogin` (
`userid`  bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
`username`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`password`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`lastlogindate`  date NOT NULL ,
`lastloginip`  bigint(20) UNSIGNED NOT NULL ,
`persistent`  smallint(5) UNSIGNED NULL DEFAULT NULL ,
PRIMARY KEY (`userid`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=201200001

;

-- ----------------------------
-- Records of userlogin
-- ----------------------------
BEGIN;
INSERT INTO `userlogin` VALUES ('201200000', 'lucky', '123456', '2012-10-20', '100110120196', '0');
COMMIT;

-- ----------------------------
-- Auto increment value for `authors`
-- ----------------------------
ALTER TABLE `authors` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `categories`
-- ----------------------------
ALTER TABLE `categories` AUTO_INCREMENT=1043;

-- ----------------------------
-- Auto increment value for `customers`
-- ----------------------------
ALTER TABLE `customers` AUTO_INCREMENT=201200001;

-- ----------------------------
-- Auto increment value for `links`
-- ----------------------------
ALTER TABLE `links` AUTO_INCREMENT=201208;

-- ----------------------------
-- Auto increment value for `orders`
-- ----------------------------
ALTER TABLE `orders` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `userlogin`
-- ----------------------------
ALTER TABLE `userlogin` AUTO_INCREMENT=201200001;
