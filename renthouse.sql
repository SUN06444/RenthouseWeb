-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2018 at 01:57 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `bid` int(11) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`bid`, `price`) VALUES
(1, '2000~2500'),
(2, '2500~3000'),
(3, '3000~3500'),
(4, '3500~4000'),
(5, '4000以上');

-- --------------------------------------------------------

--
-- Table structure for table `collect`
--

CREATE TABLE `collect` (
  `collect_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collect`
--

INSERT INTO `collect` (`collect_id`, `mem_id`, `house_id`, `date`) VALUES
(12, 24, 4, '2017-12-09 23:03:01'),
(13, 24, 11, '2017-12-09 23:43:40'),
(14, 24, 18, '2017-12-09 23:51:29'),
(16, 24, 18, '2017-12-09 23:52:21'),
(17, 26, 2, '2017-12-10 02:10:20'),
(18, 27, 18, '2018-01-02 02:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `houseinfo`
--

CREATE TABLE `houseinfo` (
  `house_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `relationship` varchar(10) NOT NULL,
  `housename` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `lease_term` varchar(20) NOT NULL,
  `rental` varchar(40) NOT NULL,
  `housetype` varchar(30) NOT NULL,
  `ping` varchar(20) NOT NULL,
  `house_age` varchar(20) NOT NULL,
  `deposit` varchar(40) NOT NULL,
  `pet` varchar(5) NOT NULL,
  `elevator` varchar(5) NOT NULL,
  `opened` varchar(5) NOT NULL,
  `parking_spaces` varchar(5) NOT NULL,
  `house_limit` varchar(70) NOT NULL,
  `material` varchar(70) NOT NULL,
  `curfew` varchar(70) NOT NULL,
  `equipment` varchar(70) NOT NULL,
  `security_equipment` varchar(40) NOT NULL,
  `identity_requirements` varchar(10) NOT NULL,
  `balcony` varchar(5) NOT NULL,
  `others` varchar(200) NOT NULL,
  `school` varchar(30) NOT NULL,
  `file1` varchar(50) DEFAULT NULL,
  `file2` varchar(50) DEFAULT NULL,
  `file3` varchar(50) DEFAULT NULL,
  `file4` varchar(50) DEFAULT NULL,
  `file5` varchar(50) DEFAULT NULL,
  `file6` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houseinfo`
--

INSERT INTO `houseinfo` (`house_id`, `mem_id`, `email`, `phone`, `contact`, `relationship`, `housename`, `address`, `lease_term`, `rental`, `housetype`, `ping`, `house_age`, `deposit`, `pet`, `elevator`, `opened`, `parking_spaces`, `house_limit`, `material`, `curfew`, `equipment`, `security_equipment`, `identity_requirements`, `balcony`, `others`, `school`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `date`) VALUES
(1, 1, 'aaaaa@gmail.com', '0955-977-588', '梁坤祥 先生', '房東', '採光佳，空間大，讀書的好地方', '台中市太平區中山路一段322巷42弄3之1號', '一年', '2600', '套房', '7', '-', '5000', '否', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '磁卡感應管控', '桌子,椅子,衣櫃,床,熱水器,電視,冰箱,網路,第四台,飲水機,個人衛浴設備', '', '男女不限', '有', '套房的設備雅房的價位，學校認證、公安檢查合格，免投幣洗衣機、感應照明 ，驗證合格防火門 ，沒用瓦斯‧住得安心，家長放心(步行5分鐘到校),※優勢：每樓僅2戶，不吵雜，戶戶邊間,採光佳，空間大，讀書的好地方\r\n●雙人套房每人2600元起', 'ncut', 'uploads/6edea20cd54134f47b6f340ab7e935d1.jpg', 'uploads/64563550145f92757071a966c4751fb2.jpg', 'uploads/5c362947b4a7138022aa80978e278391.jpg', 'uploads/9cf43025b05e0f307d2219e9f3ca4b08.jpg', 'uploads/31270cf731009f3f5b5cbf7d68f8057d.jpg', 'uploads/ffc915e8c1096f1ca82c79d7b1fda306.jpg', '2017-12-09 09:18:10'),
(2, 2, 'bbbbb@gmail.com', '0928-593-175', '江榮貴 先生', '房東', '哈佛綠墅社區', '台中市太平區中山路一段322巷12弄30號', '一年', '4300', '套房', '7', '-', '5000', '可', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '社區警衛*監視器24小時錄影', '桌子,椅子,衣櫃,床,熱水器,電視,冰箱,網路,第四台,個人衛浴設備', '', '男女不限', '有', '單人套房及雙人大套房共8間 \r\nfacebook帳號 : fafo302826@yahoo.com.tw裡面有更多照片\r\nLINE ID:0928593175可預約看房', 'ncut', 'uploads/cbe73e6793a0fcdb0f3337f96a1c90d1.jpg', 'uploads/c936c9b05e0e8605e24ba5d9c59990a0.jpg', 'uploads/fddd9ae8e87162a67a9eb32b91b0fb49.jpg', 'uploads/f60fce17e6c7d91e631e17795d258d30.jpg', 'uploads/08b1c9e1c208eae416cfacafdbd89a74.jpg', 'uploads/62dc8af61ce0b9fb50b2aa851c5f1134.jpg', '2017-12-09 11:47:58'),
(3, 3, 'ccccc@gmail.com', '0921333189', '張鳳蓮小姐', '房東', '安泰別莊內雅房', '台中市太平區中山路一段322巷121號', '一年', '3000', '雅房', '4', '-', '5000', '否', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '保全公司警衛管理', '熱水器,電視,冰箱,冷氣,洗衣機,網路,第四台,晒衣場', '', '只限女生', '有', '106年7月1日起有三間雅房,歡迎同學預約看房', 'ncut', 'uploads/18b2e9a86689e4239f814fc6c995cebc.jpg', 'uploads/e539b2542d56a77010d138ed007cd583.jpg', 'uploads/94e1a02a830686b1950921fc30f79f6e.jpg', 'uploads/38bb4c21243502cba79c777897c357fb.jpg', 'uploads/8e95252d4366d5bef6665be3792e7077.jpg', 'uploads/ebaf81d0e015e92d705b05d5fdaf2f9f.jpg', '2017-12-09 13:29:58'),
(4, 4, 'ddddd@gmail.com', '0911109073', '許麗琴小姐', '房東', '巴菲特之家', '台中市太平區中山路一段215南巷30號', '一年', '42000', '套房', '5', '-', '5000', '否', '有', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '-', '桌子,椅子,衣櫃,床,冷氣,洗衣機,網路,個人衛浴設備', '', '男女不限', '無', '-', 'ncut', 'uploads/57eef41afca32c2e0082aac81d4b60a5.jpg', 'uploads/c42b5f8ebc4a1012348dfae0f56e9e9c.jpg', 'uploads/aac32e9638001c158735b8a4ffa36d16.jpg', 'uploads/7f7ae4bcaa16d1c378d768446326c47e.jpg', 'uploads/ebca7dbe07b0c5a7808c42e0ee5f9456.jpg', 'uploads/3622633c104f5e55ff8c7d3d3d0444a3.jpg', '2017-12-09 13:40:43'),
(5, 5, 'eeeee@gmail.com', '0918-989-215', '許進華先生', '房東', '進華之套房', '台中市太平區中山路二段32巷2號', '一年', '4000', '套房', '5', '-', '5000', '否', '有', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '刷卡', '桌子,椅子,衣櫃,床,熱水器,冰箱,冷氣,個人衛浴設備', '', '男女不限', '有', '-', 'ncut', 'uploads/e4d638b1c3653e842425d35d88ffef95.jpg', 'uploads/ddf7fce713eea428fd3e023b06a4ff8c.jpg', 'uploads/eb502343eae09236f63fe28c9ff990c9.jpg', 'uploads/7f44c870fd2cf8b115a1d4705457d1a6.jpg', 'uploads/34be07a2ba2ae58f4744ae2fed7f3dfa.jpg', 'uploads/bdb92b87f51d49ed326f83e81cc06663.jpg', '2017-12-09 13:47:10'),
(6, 6, 'fffff@gmail.com', '0937-916-069', '莊伯雪小姐', '房東', '宏采華廈', '太平市中山路一段159巷73號', '一年', '2600', '套房', '5', '-', '5000', '否', '有', '否', '有', '禁止養寵物.室內全部禁煙.禁止賭博', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '刷卡、出入及公共空間24小時錄影監視', '桌子,椅子,衣櫃,床,熱水器,電視,冷氣,個人衛浴設備,洗衣機,網路,第四台', '', '男女不限', '有', '宏采華夏雙人套房每人2600元起.陽台套房採光佳.通風好.停車場，投幣式洗衣機（20元），陽台晒衣場，飲水機，光纖寬頻。消防檢驗合格.水電費以水電公司實際價格計費。可另加冰箱1500元。走路3分鐘到校。', 'ncut', 'uploads/d55312a93a6ea13d441d64bf916839bf.jpg', 'uploads/485672b7176e9dc973216d142775272e.jpg', '', 'uploads/0dada207f63935702375504aa2cc7964.jpg', 'uploads/72211f1bc00c8072f13634676a5ca6f5.jpg', 'uploads/da63538e690ae5d2abd98ba37c69b94d.jpg', '2017-12-09 14:43:05'),
(7, 7, 'ggggg@gmail.com', '0980779929', '陳精華老師', '房東', '治安最高級三星認證房屋', '台中市太平區中山路一段5號', '一年', '2000', '雅房', '5', '-', '5000', '否', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '-', '桌子,椅子,衣櫃,床,天然瓦斯,冰箱,冷氣,洗衣機,網路,第四台,飲水機', '', '只限男生', '無', '獨棟通風環境優 隔音佳 空間寬敞 採光足 客廳廚房衛浴乾淨(公用環境專人清理) (獨立電表)(5間房有冷氣)包水.瓦斯 室內晒衣場 治安最高級三星認證 有吊扇涼爽省電 可整層出租 2或3人用一間衛浴 有家的溫馨感~歡迎帥哥!!', 'ncut', 'uploads/54775290a15490a530fd2e2fdc95d15d.jpg', 'uploads/764f3f59dc469dbdc32f9c371e8cfbc5.jpg', 'uploads/74ab6abe12733088714ee093d1780f00.jpg', 'uploads/154ecea9173ea7423debb63db25940d1.jpg', 'uploads/ded11d1f840287731f20918fcf69ce91.jpg', 'uploads/4e96c00fd59a97ed863b794a2befdcf1.jpg', '2017-12-09 14:52:56'),
(8, 8, 'hhhhh@gmail.com', '0922017819', '劉漢斐 先生', '房東', '環境清幽房屋', '台中市太平區中山路二段311巷2弄13號', '半年', '4000', '套房', '5', '-', '5000', '否', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場,公車站,醫療機構,便利商店', '刷卡', '桌子,椅子,衣櫃,床,熱水器,電視,冰箱,冷氣,個人衛浴設備,洗衣機,網路,第四台,飲水機', '', '男女不限', '有', '2012年裝潢完工，設備完善，電費每度4元 有圍牆的庭院內附設機車停車場，方便安全，步行勤益科大約10分鐘，騎車不到5分鐘 榮獲105年高級中等以上學校學生賃居安全標章的學舍，編號:13090，安全與品質兼顧 歡迎來電預約看屋', 'ncut', 'uploads/85d03312040bcbd44835261f0b19d779.jpg', 'uploads/b19494c6121c5c08efd4a54c7be34bde.jpg', 'uploads/c28d51a2d5e44fffdee7739e009b6710.jpg', 'uploads/acd15bf47814c889d30369899513f6ca.jpg', 'uploads/60be5a04615403776c8b6dda42ad8793.jpg', 'uploads/ab4a733c7009ad86f9c1351c644be901.jpg', '2017-12-09 14:59:43'),
(9, 9, 'iiiii@gmail.com', '0932-273-882', '李清先生', '房東', '靠山別墅', '台中市太平區坪林路61之11巷8號', '二年', '3000', '雅房', '6', '-', '5000', '可', '無', '否', '有', '-', '市場,超市,警察局,公車站,醫療機構', '-', '桌子,椅子,衣櫃,床,天然瓦斯,洗衣機,網路,飲水機,晒衣場', '', '男女不限', '無', '靠山別墅，單純安靜，套房設備，雅房價格，獨立門戶', 'ncut', 'uploads/cef9689811d70c9b756ee863d05a22cc.jpg', 'uploads/f5f24f0099cca5ca559811521869f043.jpg', 'uploads/fb63fe7d1eba91e5e6e3bec8eea4f54c.jpg', 'uploads/0403e360c2315feec5ce806a7c96e8c0.jpg', 'uploads/8ec9c0ee06d5c5aefedd4fac8cf31b84.jpg', 'uploads/878858570e458be0e9124b6ade1afa4c.jpg', '2017-12-09 15:07:45'),
(10, 10, 'jjjjj@gmail.com', '0932-639-130', '賴錦櫻小姐', '房東', '勤益後門雅房', '台中市太平區大源5街9號', '兩年以上', '3000', '雅房', '5', '-', '5000', '可', '無', '可', '有', '-', '公園,市場,小吃店,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,天然瓦斯,冰箱,冷氣,洗衣機,網路,飲水機,晒衣場', '', '只限男生', '有', '雅房共10間 獨棟二層樓房 每間均採光 通風良好 環境清幽 位於學校後門約三分鐘到校 冷氣電費另計', 'ncut', 'uploads/0ed11bca77da9c94fabda8d97335ca11.jpg', 'uploads/2715ad5a97b03b12ae47969752d58798.jpg', 'uploads/5d325e6db7fe58fa449dcfbd89c3fb28.jpg', 'uploads/28a3a95dabf955eb65139d306af75066.jpg', 'uploads/b98959dd654e3b012d0b8783c97179b3.jpg', 'uploads/78ffaa8e0e754d5efb9bdef47346bd64.jpg', '2017-12-09 15:14:05'),
(11, 11, 'kkkkk@gmail.com', '0939662613', '郭先生', '房東', '近政治大學、環境清優', '台北市文山區萬壽路62號', '一年', '7800', '套房', '8', '-', '10000', '否', '有', '否', '有', '-', '公園,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,天然瓦斯,電視,冰箱,冷氣,個人衛浴設備,洗衣機,網路,第四台', '', '男女不限', '有', '政治大學徒步10分、政大附中徒步3分、停車方便、環境清幽。政大一街到底右轉50公尺(綠野山莊對面)紅色7樓建築。禁菸套房。', 'nccu', 'uploads/cc4f2fe29e67df0646c4e4986e6bc329.jpg', 'uploads/e7a2a9d3ceee2b845b72d14d7cfc8bc8.jpg', 'uploads/bb212e840059e4be4aca8e3f0d75bcf6.jpg', 'uploads/fe3dcc9a01ad4244600a2690dfeb42ea.jpg', '', '', '2017-12-09 15:26:09'),
(12, 12, 'lllll@gmail.com', '0919-740-061', '張美玲小姐', '房東', '張小姐房屋', '台中市太平區坪林路60-5號', '1~3個月', '2000', '雅房', '6', '-', '5000', '否', '無', '否', '有', '禁止賭博', '公園,市場,小吃店,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,天然瓦斯,冷氣,洗衣機,網路,飲水機', '', '男女不限', '有', '本宿舍榮獲101-105年度校外租賃安全標章,冷氣雅房共6間 1.月租2000-2800元(依樓層而定).水費,網路費免付費,瓦斯費平均分攤2.電費依台電公告兩段收費(另加公共電費)3.每層樓兩間雅房均有窗戶或落地窗採光佳,一套衛浴(兩房共用)4.尚有2間空房(同樓層)一起租更便宜,請提早來電洽詢預約看屋', 'ncut', 'uploads/551b7fb7d9922dd379b4b4e36bd6a46e.jpg', 'uploads/224f0b8f394e20a7b074bfbf57ecb175.jpg', 'uploads/51b756470d9a4deca0b613f5fa0be29a.jpg', 'uploads/ce40454227b20dbea2a88f12f2e4ef94.jpg', 'uploads/4e2b6ffb22d2190ff93d86d4c522da1e.jpg', 'uploads/c869109df2bb6c5ee201072eff672365.jpg', '2017-12-09 15:34:36'),
(13, 13, 'mmmmm@gmail.com', '0923-223593', '孫士德 先生', '房東', '東平路雅房', '台中市太平區東平路148號', '半年', '3000', '雅房', '7', '-', '5000', '可', '無', '否', '有', '-', '公車站,便利商店,夜市,市場', '-', '桌子,椅子,衣櫃,床,熱水器,冰箱,冷氣,洗衣機,網路,飲水機,晒衣場', '', '只限男生', '無', '-', 'ncut', 'uploads/c08db438191581718dae22851270bad3.jpg', 'uploads/ced6c5ac52a72239f9199c465419d8dc.jpg', 'uploads/dfe35d7639c70a91b248d52a4b51385c.jpg', 'uploads/2176b300c20b5e07aee3fc17d8f2a30e.jpg', 'uploads/4594b70fbeeb51ad238c5bfe3f77a3bb.jpg', 'uploads/8354d59a843ba55324618cff8715b353.jpg', '2017-12-09 15:40:47'),
(14, 14, 'nnnnn@gmail.com', '0985365728', '余俊傑先生', '房東', '台灣之光', '台中市太平區大源13街32號', '半年', '4000', '套房', '7', '-', '5000', '可', '有', '否', '有', '-', '公園,市場,小吃店,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,熱水器,電視,冰箱,個人衛浴設備,洗衣機,網路,飲水機', '', '男女不限', '有', '於4月30日前簽訂租賃契約並繳交訂金5000元之學生.將享有早鳥優惠NT500元!優惠金額從第二學期房租扣抵.(一年租金48,000.可半年繳24,000再享早鳥優惠)', 'ncut', 'uploads/4cf9e3e77466a2a856f0f38c0de9046f.jpg', 'uploads/d0d660e324d44837671ecac90e8b26c7.jpg', 'uploads/7f4a79479657f2ee1d4aee2e97e6ec76.jpg', 'uploads/48c1a5f07ce3c2cf499c25070d491f48.jpg', 'uploads/e679ff8e88eb70f0fb34fe82ea3905b9.jpg', 'uploads/62aaf5f515bd17e325c5668add5aacb0.jpg', '2017-12-09 15:49:35'),
(15, 15, 'ooooo@gmail.com', '0937599505', '徐兆機先生', '房東', '雅緻套房', '台中市太平區中山路一段159巷29弄8號', '兩年以上', '3800', '套房', '6', '-', '4000', '否', '無', '否', '有', '-', '公園,小吃店,警察局,公車站,醫療機構,便利商店', '刷卡管制，即時錄影設備', '桌子,椅子,衣櫃,床,熱水器,冷氣,個人衛浴設備,洗衣機,網路,飲水機', '', '男女不限', '有', '消防安全符合學校的消防安檢!套房的設備雅房的價位，免投幣洗衣機.感應照明 沒用瓦斯‧住得安心，家長放心(步行十分鐘到校) ※優勢：不吵雜，戶戶邊間,採光佳，空間大，讀書的好地方 http://song4327.myweb.hinet.net/index.htm', 'ncut', 'uploads/dcd75b5f4d6098059ff648435dbfda57.jpg', 'uploads/15f6f87ddc232eb1a5234b2638825917.jpg', 'uploads/15141a230cc86c61ea6c5a5fea9385c3.jpg', 'uploads/c3f237684be6776138856f0c8e7ed6c4.jpg', 'uploads/5f5d692f993dcbf1ff4359091304991a.jpg', 'uploads/f9794f2e9281422da86d6a66f75b962e.jpg', '2017-12-09 15:56:22'),
(16, 16, 'ppppp@gmail.com', '0930-977826', '梁蓮娗小姐', '房東', '陽光學舍', '台中市太平區大源5街43號', '1~3個月', '4200', '套房', '4', '-', '3000', '否', '有', '否', '有', '-', '公園,市場,小吃店,公車站,醫療機構,便利商店', '感應入戶', '桌子,椅子,衣櫃,床,冷氣,個人衛浴設備', '', '男女不限', '有', '-', 'ncut', 'uploads/df3dfcb31359d7c1cb2667f445b76b9e.jpg', 'uploads/fd55bd981fbf31c64b0a9885250a41ad.jpg', 'uploads/73af4443bb85f27ee29787f5a4829b57.jpg', 'uploads/1fb0789a88aae0a201b5377c38ceda21.jpg', 'uploads/5eb93f3805931009cc21cc60fddefdb8.jpg', 'uploads/3060216a180b068f28ba4711a5b7e058.jpg', '2017-12-09 16:02:55'),
(17, 17, 'qqqqq@gmail.com', '0935279296', '王翔 先生', '房東', '三番街', '台中市太平區中山路一段243巷18號', '二年', '2500', '雅房', '5', '-', '5000', '可', '無', '否', '有', '-', '公園,超市,小吃店,警察局,公車站,便利商店', '三道門鎖', '桌子,椅子,衣櫃,床,熱水器,電視,冰箱,冷氣,洗衣機,網路,第四台,飲水機,晒衣場', '', '男女不限', '有', '-', 'ncut', 'uploads/82dfb99d567f689cd712b8741eacfdf5.jpg', 'uploads/f718ef682f0a62feca1cf299a518e08f.jpg', 'uploads/9108d567622c78d6da12d06ac34a70c7.jpg', 'uploads/d7aab1d49971e4cdb1bc770d479ab91f.jpg', 'uploads/c10fcfea996c9836e2880ff6f11eb370.jpg', 'uploads/2e5ac21f66cdc30d60e0e3dd3089ecad.jpg', '2017-12-09 16:08:42'),
(18, 18, 'rrrrr@gmail.com', '0923873818', '傅幻民先生', '房東', '專屬機車位', '台中市太平區中山路二段129巷52號', '二年', '6000', '套房', '6', '-', '5000', '否', '有', '否', '有', '-', '公園,警察局,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,電視,冰箱,個人衛浴設備,洗衣機,網路,第四台,飲水機', '', '男女不限', '有', '全新裝潢,社區環境優美安全,有專屬機車停車位,空氣流通,陽光充足,4月1日即可入住,歡迎看屋', 'ncut', 'uploads/457c072e88a0cbc881df0f6991a9804d.jpg', 'uploads/0f77454c81c6123766d2ddf86f3a1011.jpg', 'uploads/90cdc58a00d809d2e6dc6eca273a10d1.jpg', 'uploads/54fdebc7b044078058b2067c000f8c63.jpg', 'uploads/160923c348e6b84c71904226cc3659eb.jpg', 'uploads/ea589e568c77e26db018e9b8062d872a.jpg', '2017-12-09 16:15:34'),
(19, 19, 'sssss@gmail.com', '0919-085789', '邰淑芬小姐', '房東', '落地窗陽台套房', '台中市太平區中山路一段322巷77號', '兩年以上', '4500', '套房', '6', '-', '5000', '否', '有', '否', '有', '-', '公園,超市,警察局,公車站,醫療機構,便利商店', '電子門鎖(感應扣)', '桌子,椅子,衣櫃,床,冰箱,冷氣,個人衛浴設備,洗衣機,網路,第四台,飲水機', '', '男女不限', '有', '我們有通過台中市政府及學校安全認證~每房均有落地窗陽台,採光通風極佳,離校走路8分鐘,歡迎同學來看房', 'ncut', 'uploads/8629d0cb341aac950515eae09e976638.jpg', 'uploads/88beac96af526e8ec98d0a6a016b0044.jpg', 'uploads/39f13ff5eed6bd924d0a67edcfaee923.jpg', 'uploads/85cd106930fa165e22b9562093822be5.jpg', 'uploads/48ca0e9cdcb69f9625c39d22ba015faa.jpg', 'uploads/5d8110c8e3567dbd6074184aa8f219db.jpg', '2017-12-09 16:20:47'),
(20, 20, 'ttttt@gmail.com', '0937-228886', '楊先生/太太', '房東', '大源房屋', '臺中市太平區大源17街82號', '二年', '4000', '套房', '5', '-', '5000', '否', '無', '否', '有', '-', '公園,超市,公車站,便利商店', '-', '桌子,椅子,衣櫃,床,熱水器,冷氣,個人衛浴設備,洗衣機,網路', '', '男女不限', '無', '-', 'ncut', 'uploads/0a3f62be87d27a674bb480fbdc5c4e4c.jpg', 'uploads/1723cbae464ea45841ef269f7c6216e0.jpg', 'uploads/d8f0a40399a38e187557c7b5470683c0.jpg', 'uploads/e2ec1ae73bc19b54e0ffcd9d09d19f0d.jpg', 'uploads/f83e2ee6c5ac2a75508b1c91914e5e8c.jpg', 'uploads/c9f8381e5c653103a1b9789431b9d315.jpg', '2017-12-09 16:26:21'),
(21, 21, 'uuuuu@gmail.com', '0921753773', '陳小姐', '房東', '279巷某間小房屋', '台中市太平區中山路一段279巷36弄13號', '二年', '4000', '套房', '6', '-', '5000', '否', '有', '否', '有', '-', '公園,超市,小吃店,警察局,公車站,醫療機構,便利商店', '磁卡感應', '桌子,椅子,衣櫃,床,電視,冰箱,冷氣,個人衛浴設備,洗衣機,網路,第四台,飲水機', '', '男女不限', '有', '走路校門口1分鐘.三番街30秒', 'ncut', 'uploads/4871dd35ca343b73ad0caf6004a5295f.jpg', 'uploads/21d927ca863b9fa84c610a0d62794f47.jpg', 'uploads/06d1c9467936a66c19e0606404e86779.jpg', 'uploads/0d294e07166a4588f3c0dca7ba602fc9.jpg', 'uploads/61f9891f55f3f00c334126cfda537e32.jpg', 'uploads/3faf88d32272dc4c9e678aadce7f040f.jpg', '2017-12-09 16:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `houseinfo_seed`
--

CREATE TABLE `houseinfo_seed` (
  `house_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `relationship` varchar(10) NOT NULL,
  `housename` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `lease_term` varchar(20) NOT NULL,
  `rental` varchar(40) NOT NULL,
  `housetype` varchar(30) NOT NULL,
  `ping` varchar(20) NOT NULL,
  `house_age` varchar(20) NOT NULL,
  `deposit` varchar(40) NOT NULL,
  `pet` varchar(5) NOT NULL,
  `elevator` varchar(5) NOT NULL,
  `opened` varchar(5) NOT NULL,
  `parking_spaces` varchar(5) NOT NULL,
  `house_limit` varchar(40) NOT NULL,
  `material` varchar(20) NOT NULL,
  `curfew` varchar(10) NOT NULL,
  `equipment` varchar(20) NOT NULL,
  `security_equipment` varchar(40) NOT NULL,
  `identity_requirements` varchar(10) NOT NULL,
  `balcony` varchar(5) NOT NULL,
  `others` varchar(40) NOT NULL,
  `school` varchar(30) NOT NULL,
  `file1` varchar(50) DEFAULT NULL,
  `file2` varchar(50) DEFAULT NULL,
  `file3` varchar(50) DEFAULT NULL,
  `file4` varchar(50) DEFAULT NULL,
  `file5` varchar(50) DEFAULT NULL,
  `file6` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `houseinfo_seed`
--

INSERT INTO `houseinfo_seed` (`house_id`, `mem_id`, `email`, `phone`, `contact`, `relationship`, `housename`, `address`, `lease_term`, `rental`, `housetype`, `ping`, `house_age`, `deposit`, `pet`, `elevator`, `opened`, `parking_spaces`, `house_limit`, `material`, `curfew`, `equipment`, `security_equipment`, `identity_requirements`, `balcony`, `others`, `school`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `date`) VALUES
(1, 1, 'aaaaa@gmail.com', '0955-977-588', '梁坤祥 先生', '房東', '採光佳，空間大，讀書的好地方', '台中市太平區中山路一段322巷42弄3之1號', '一年', '2600', '套房', '7', '-', '5000', '否', '無', '否', '有', '-', '公園,市場,超市,小吃店,警察局,停車場', '磁卡感應管控', '', '', '男女不限', '有', '套房的設備雅房的價位，學校認證、公安檢查合格，免投幣洗衣機、感應照明 ，驗證合格', '', 'uploads/6edea20cd54134f47b6f340ab7e935d1.jpg', 'uploads/64563550145f92757071a966c4751fb2.jpg', 'uploads/5c362947b4a7138022aa80978e278391.jpg', 'uploads/9cf43025b05e0f307d2219e9f3ca4b08.jpg', 'uploads/31270cf731009f3f5b5cbf7d68f8057d.jpg', 'uploads/ffc915e8c1096f1ca82c79d7b1fda306.jpg', '2017-12-09 17:18:10'),
(2, 1, 'aaaaa@gmail.com', '', '', '', '', '', '未選擇租期', '', '未選擇房型', '', '', '', '可', '有', '可', '有', '', '', '', '', '', '只限男生', '有', '', '', '', '', '', '', '', '', '2017-12-09 18:56:17'),
(43, 2, 'bbbbb@gmail.com', '', '', '', '222', '22', '半年', '22', '雅房', '22', '2', '22', '否', '有', '否', '有', '22', '公園,停車場', '2', '桌子,天然瓦斯,洗衣機,滅火器,防火天花', '', '只限女生', '有', '22', '', '', '', '', '', '', '', '2017-12-12 10:44:20'),
(44, 3, 'ccccc@gmail.com', '', '', '', 'ccc', 'ccc', '兩年以上', 'ccc', '公寓', 'ccc', 'ccc', 'ccc', '否', '有', '可', '有', 'ccc', '公園,停車場', 'ccc', '桌子,天然瓦斯,洗衣機,滅火器,防火天花', '', '只限女生', '無', 'ccc', '', '', '', '', '', '', '', '2017-12-12 10:48:39'),
(45, 4, 'ddddd@gmail.com', '', '', '', 'ddd', 'dd', '兩年以上', 'dd', '未選擇房型', 'd', 'd', 'dd', '可', '無', '可', '有', 'dd', '公園,公車站', 'd', '椅子,電視,網路,緊急照明燈,安全走道', '', '只限男生', '無', 'dd', '', '', '', '', '', '', '', '2017-12-12 10:53:17'),
(46, 4, 'ddddd@gmail.com', '', '', '', 'fwf', 'wf', '未選擇租期', 'wef', '未選擇房型', 'wef', 'wfwfw', '', '可', '無', '可', '有', '', '市場,公車站', '', '安全走道', '', '只限男生', '有', '', '', '', '', '', '', '', '', '2017-12-12 10:56:01'),
(47, 4, 'ddddd@gmail.com', '', '', '', 'qdw', '', '未選擇租期', '', '未選擇房型', '', '', '', '可', '有', '可', '無', '', '市場,公車站', '', '椅子', '', '只限男生', '有', 'sfd', '', 'uploads/23f0de91045c9b788ec611d85f582291.png', '', '', '', '', '', '2017-12-12 10:56:44'),
(48, 6, 'fffff@gmail.com', '', '', '', 'qq', 'qq', '半年', 'qq', '雅房', 'qq', 'qq', 'qq', '可', '無', '可', '無', 'qq', '公園,停車場', 'qq', '電視,冰箱,洗衣機,防火天花板,安全走道', '', '只限女生', '有', 'qq', '', 'uploads/eb9260c17f004c9387ba84953c246b94.png', '', '', '', '', '', '2017-12-12 11:00:53'),
(49, 6, 'fffff@gmail.com', 'rr', 'rr', 'rr', 'rr', 'rr', '一年', 'rr', '雅房', 'rr', 'rr', 'rr', '否', '無', '可', '有', 'rr', '市場,公車站', 'rr', '椅子,電視,網路,緊急照明燈,安全走道', '', '只限女生', '無', 'rr', '', 'uploads/fd27530b32323ead2f99088c4c958dcc.png', 'uploads/93eb2bdbef6144b5375f4f50c42812db.png', '', '', '', '', '2017-12-12 11:04:45'),
(50, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:35:34'),
(51, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:35:47'),
(52, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:35:58'),
(53, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:36:20'),
(54, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:36:50'),
(55, 7, 'ggggg@gmail.com', '', 'sf', '', 'sf', 'sf', '未選擇租期', 'sf', '未選擇房型', '', '', 'sf', '可', '無', '可', '有', 'sf', '市場,公車站', '', '', '', '只限男生', '有', 'sf', '', '', '', '', '', '', '', '2017-12-12 13:37:59'),
(56, 7, 'ggggg@gmail.com', '2', '22', '2', '22', '', '未選擇租期', '', '未選擇房型', '', '', '', '可', '有', '可', '有', '', '', '', '', '', '只限男生', '有', '', '', '', '', '', '', '', '', '2017-12-12 13:38:18'),
(57, 7, 'ggggg@gmail.com', '1', '1', '1', '1', '1', '二年', '1', '公寓', '1', '2', '1', '可', '有', '否', '有', '', '市場,公車站', '2', '', '', '只限男生', '有', '2', '', '', '', '', '', '', '', '2017-12-12 13:44:22'),
(58, 7, 'ggggg@gmail.com', 'oo', 'oo', 'oo', 'oo', 'oo', '未選擇租期', 'oo', '雅房', '', '', '', '否', '有', '可', '有', '', '醫療機構', '', '電視,網路,緊急照明燈', '', '只限女生', '有', 'oo', '', '', '', '', '', '', '', '2017-12-12 13:48:57'),
(59, 7, 'ggggg@gmail.com', '4', '4', '44', '4', '4', '未選擇租期', '4', '未選擇房型', '', '', '', '可', '有', '可', '有', '', '', '', '', '', '只限女生', '有', '4', '', '', '', '', '', '', '', '2017-12-12 14:01:40'),
(60, 7, 'ggggg@gmail.com', '2', '4', '4', '3', '3', '未選擇租期', '3', '未選擇房型', '', '', '', '可', '有', '可', '有', '', '醫療機構', '', '', '', '只限男生', '有', '', '', '', '', '', '', '', '', '2017-12-12 14:04:01'),
(61, 7, 'ggggg@gmail.com', '3', '2', '3', '43', '3', '未選擇租期', '4', '未選擇房型', '', '', '', '可', '有', '可', '有', '', '', '', '安全走道', '', '只限男生', '有', '', '', '', '', '', '', '', '', '2017-12-12 14:04:51'),
(62, 7, 'ggggg@gmail.com', '', '', '', 'qqw', 'qqw', '1~3個月', 'qw', '雅房', 'q', 'q', 'qw', '否', '有', '否', '有', '', '超市,醫療機構', 'q', '衣櫃,冰箱,第四台,緊急照明燈,安全走道', '', '只限女生', '有', '', '', 'uploads/cde9246ff12489de52c17af8606e76db.jpeg', '', '', '', '', '', '2017-12-12 14:29:25'),
(63, 7, 'ggggg@gmail.com', '', '', '', 'aaa', 'aa', '一年', 'aa', '套房', 'aaa', 'aaa', 'aaa', '否', '無', '否', '無', 'aaa', '公園,醫療機構', 'aaa', '床,洗衣機,滅火器,安全走道', '', '只限女生', '有', 'aaa', '123', 'uploads/e3a6a5d7632e687ee919aad6943565f6.jpeg', 'uploads/908dba02e4e58c2287b2be89f2d2708d.jpeg', '', '', '', '', '2017-12-12 14:34:48'),
(64, 7, 'ggggg@gmail.com', '0912345678', '孫孫孫', '我是房東', '污名', '屋地址', '二年', '租金喔', '套房', '12', '12', '押金喔', '否', '有', '否', '有', 'limit', '公園,停車場', 'no', '桌子,天然瓦斯,洗衣機,滅火器,防火天花', '', '只限女生', '有', 'r', '123', 'uploads/bb5e533361198a48f3817ab198cf098c.jpeg', '', '', '', '', '', '2017-12-12 14:38:07'),
(65, 7, 'ggggg@gmail.com', '測試電話', '測試聯絡人', '測試關係', '測試房屋名稱', '測試地址', '半年', '測試租金', '套房', '測試評述', '測試屋齡', '測試押金', '否', '無', '否', '有', '測試租屋限制', '公園,停車場', '無', '桌子,天然瓦斯,洗衣機', '滅火器,防火天花板', '只限女生', '有', '測試備註', '123', 'uploads/9029ad63e099b456c467db261bfd18a9.jpeg', 'uploads/5ed57fda99e513cef6e9bd3efbfb87a0.jpg', '', '', '', '', '2017-12-12 14:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `housetype`
--

CREATE TABLE `housetype` (
  `hid` int(10) NOT NULL,
  `type_ch` varchar(30) NOT NULL,
  `type_eg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `housetype`
--

INSERT INTO `housetype` (`hid`, `type_ch`, `type_eg`) VALUES
(1, '雅房', 'room'),
(2, '套房', 'studio'),
(3, '公寓', 'apartment');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `lev_id` int(10) NOT NULL,
  `lev_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lev_id`, `lev_name`) VALUES
(1, '房客(學生)'),
(2, '房東'),
(3, '管理人員');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `head` varchar(50) DEFAULT NULL,
  `mday` datetime NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `withdrawal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `account`, `password`, `name`, `email`, `file`, `head`, `mday`, `verify`, `level`, `withdrawal`) VALUES
(1, 'aaaaa', '827ccb0eea8a706c4c34a16891f84e7b', '梁坤祥', 'aaaaa@gmail.com', 'img/users/92992.jpg', NULL, '2017-12-09 16:55:16', 1, 2, 0),
(2, 'bbbbb', '827ccb0eea8a706c4c34a16891f84e7b', '江榮貴', 'bbbbb@gmail.com', 'img/users/4656house.jpg', NULL, '2017-12-09 19:40:33', 1, 2, 0),
(3, 'ccccc', '827ccb0eea8a706c4c34a16891f84e7b', '張鳳蓮', 'ccccc@gmail.com', 'img/users/59282.jpg', NULL, '2017-12-09 21:23:20', 1, 2, 0),
(4, 'ddddd', '827ccb0eea8a706c4c34a16891f84e7b', '許麗琴', 'ddddd@gmail.com', 'img/users/5468house.jpg', NULL, '2017-12-09 21:32:44', 1, 2, 0),
(5, 'eeeee', '827ccb0eea8a706c4c34a16891f84e7b', '許進華', 'eeeee@gmail.com', 'img/users/4006house.jpg', NULL, '2017-12-09 21:42:01', 1, 2, 0),
(6, 'fffff', '827ccb0eea8a706c4c34a16891f84e7b', '莊伯雪', 'fffff@gmail.com', 'img/users/58812.jpg', NULL, '2017-12-09 21:53:47', 1, 2, 0),
(7, 'ggggg', '827ccb0eea8a706c4c34a16891f84e7b', '陳精華', 'ggggg@gmail.com', 'img/users/6049house.jpg', NULL, '2017-12-09 22:46:57', 1, 2, 0),
(8, 'hhhhh', '827ccb0eea8a706c4c34a16891f84e7b', '劉漢斐', 'hhhhh@gmail.com', 'img/users/75612.jpg', NULL, '2017-12-09 22:54:06', 1, 2, 0),
(9, 'iiiii', '827ccb0eea8a706c4c34a16891f84e7b', '李清', 'iiiii@gmail.com', 'img/users/9517house.jpg', NULL, '2017-12-09 23:03:16', 1, 2, 0),
(10, 'jjjjj', '827ccb0eea8a706c4c34a16891f84e7b', '賴錦櫻', 'jjjjj@gmail.com', 'img/users/64552.jpg', NULL, '2017-12-09 23:09:57', 1, 2, 0),
(11, 'kkkkk', '827ccb0eea8a706c4c34a16891f84e7b', '郭', 'kkkkk@gmail.com', 'img/users/4967house.jpg', NULL, '2017-12-09 23:17:03', 1, 2, 0),
(12, 'lllll', '827ccb0eea8a706c4c34a16891f84e7b', '張美玲', 'lllll@gmail.com', 'img/users/3139house.jpg', NULL, '2017-12-09 23:28:27', 1, 2, 0),
(13, 'mmmmm', '827ccb0eea8a706c4c34a16891f84e7b', '孫士德', 'mmmmm@gmail.com', 'img/users/63812.jpg', NULL, '2017-12-09 23:36:58', 0, 2, 0),
(14, 'nnnnn', '827ccb0eea8a706c4c34a16891f84e7b', '余俊傑', 'nnnnn@gmail.com', 'img/users/8108house.jpg', NULL, '2017-12-09 23:45:28', 0, 2, 0),
(15, 'ooooo', '827ccb0eea8a706c4c34a16891f84e7b', '徐兆機', 'ooooo@gmail.com', 'img/users/86622.jpg', NULL, '2017-12-09 23:51:06', 0, 2, 0),
(16, 'ppppp', '827ccb0eea8a706c4c34a16891f84e7b', '梁蓮娗', 'ppppp@gmail.com', 'img/users/8309house.jpg', NULL, '2017-12-09 23:59:38', 0, 2, 0),
(17, 'qqqqq', '827ccb0eea8a706c4c34a16891f84e7b', '王翔', 'qqqqq@gmail.com', 'img/users/22522.jpg', NULL, '2017-12-10 00:04:32', 1, 2, 0),
(18, 'rrrrr', '827ccb0eea8a706c4c34a16891f84e7b', '傅幻民', 'rrrrr@gmail.com', 'img/users/3132house.jpg', NULL, '2017-12-10 00:10:14', 1, 2, 0),
(19, 'sssss', '827ccb0eea8a706c4c34a16891f84e7b', '邰淑芬', 'sssss@gmail.com', 'img/users/3727house.jpg', NULL, '2017-12-10 00:16:36', 1, 2, 0),
(20, 'ttttt', '827ccb0eea8a706c4c34a16891f84e7b', '楊', 'ttttt@gmail.com', 'img/users/7248house.jpg', NULL, '2017-12-10 00:22:53', 1, 2, 0),
(21, 'uuuuu', '827ccb0eea8a706c4c34a16891f84e7b', '陳', 'uuuuu@gmail.com', 'img/users/5882house.jpg', NULL, '2017-12-10 00:27:24', 1, 2, 0),
(22, 'student1', '827ccb0eea8a706c4c34a16891f84e7b', '鄭宏', 'student1@gmail.com', 'img/users/96501.jpg', '../head/users/5991cropped (1).png', '2017-12-10 02:33:19', 1, 1, 0),
(23, 'student2', '827ccb0eea8a706c4c34a16891f84e7b', '張國恩', 'student2@gmail.com', 'img/users/65282.jpg', '../head/users/90191245.jpg', '2017-12-10 02:35:33', 0, 1, 1),
(24, 'student3', '827ccb0eea8a706c4c34a16891f84e7b', '許丹尼', 'student3@gmail.com', 'img/users/37503.jpg', '', '2017-12-10 02:36:13', 0, 1, 0),
(25, 'student4', '827ccb0eea8a706c4c34a16891f84e7b', '孫小毛', 'student4@gmail.com', 'img/users/62964.JPG', '../head/users/12032015.jpeg', '2017-12-10 02:36:52', 0, 1, 0),
(26, 'student5', '827ccb0eea8a706c4c34a16891f84e7b', '張文慧', 'studnet5@gmail.com', 'img/users/31465.jpg', '../head/users/1825cropped.png', '2017-12-10 02:37:22', 0, 1, 0),
(27, 'test', '098f6bcd4621d373cade4e832627b4f6', '測試', 'test@gmail.com', 'img/users/1452長榮大學.jpg', NULL, '2018-01-02 10:03:05', 1, 1, 0),
(28, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '孫小毛', 'admin@gmail.com', 'img/users/user.PNG', '', '2017-12-10 02:36:52', 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_seed`
--

CREATE TABLE `member_seed` (
  `mem_id` int(11) NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `head` varchar(50) DEFAULT NULL,
  `mday` datetime NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_seeder`
--

CREATE TABLE `member_seeder` (
  `mem_id` int(11) NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file` varchar(50) NOT NULL,
  `head` varchar(50) DEFAULT NULL,
  `mday` datetime NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `withdrawal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_seeder`
--

INSERT INTO `member_seeder` (`mem_id`, `account`, `password`, `name`, `email`, `file`, `head`, `mday`, `verify`, `level`, `date`, `withdrawal`) VALUES
(1, 'aaaaa', '827ccb0eea8a706c4c34a16891f84e7b', '梁坤祥', 'aaaaa@gmail.com', 'img/users/92992.jpg', NULL, '2017-12-09 16:55:16', 0, 2, '2017-12-19 03:57:56', 0),
(2, 'bbbbb', '827ccb0eea8a706c4c34a16891f84e7b', '江榮貴', 'bbbbb@gmail.com', 'img/users/4656house.jpg', NULL, '2017-12-09 19:40:33', 0, 2, '2017-12-19 03:57:56', 0),
(3, 'ccccc', '827ccb0eea8a706c4c34a16891f84e7b', '張鳳蓮', 'ccccc@gmail.com', 'img/users/59282.jpg', NULL, '2017-12-09 21:23:20', 0, 2, '2017-12-19 03:57:56', 0),
(4, 'ddddd', '827ccb0eea8a706c4c34a16891f84e7b', '許麗琴', 'ddddd@gmail.com', 'img/users/5468house.jpg', NULL, '2017-12-09 21:32:44', 0, 2, '2017-12-19 03:57:56', 0),
(5, 'eeeee', '827ccb0eea8a706c4c34a16891f84e7b', '許進華', 'eeeee@gmail.com', 'img/users/4006house.jpg', NULL, '2017-12-09 21:42:01', 0, 2, '2017-12-19 03:57:56', 0),
(6, 'fffff', '827ccb0eea8a706c4c34a16891f84e7b', '莊伯雪', 'fffff@gmail.com', 'img/users/58812.jpg', NULL, '2017-12-09 21:53:47', 0, 2, '2017-12-19 03:57:56', 0),
(7, 'ggggg', '827ccb0eea8a706c4c34a16891f84e7b', '陳精華', 'ggggg@gmail.com', 'img/users/6049house.jpg', NULL, '2017-12-09 22:46:57', 0, 2, '2017-12-19 03:57:56', 0),
(8, 'hhhhh', '827ccb0eea8a706c4c34a16891f84e7b', '劉漢斐', 'hhhhh@gmail.com', 'img/users/75612.jpg', NULL, '2017-12-09 22:54:06', 0, 2, '2017-12-19 03:57:56', 0),
(9, 'iiiii', '827ccb0eea8a706c4c34a16891f84e7b', '李清', 'iiiii@gmail.com', 'img/users/9517house.jpg', NULL, '2017-12-09 23:03:16', 0, 2, '2017-12-19 03:57:56', 0),
(10, 'jjjjj', '827ccb0eea8a706c4c34a16891f84e7b', '賴錦櫻', 'jjjjj@gmail.com', 'img/users/64552.jpg', NULL, '2017-12-09 23:09:57', 0, 2, '2017-12-19 03:57:56', 0),
(11, 'kkkkk', '827ccb0eea8a706c4c34a16891f84e7b', '郭', 'kkkkk@gmail.com', 'img/users/4967house.jpg', NULL, '2017-12-09 23:17:03', 0, 2, '2017-12-19 03:57:56', 0),
(12, 'lllll', '827ccb0eea8a706c4c34a16891f84e7b', '張美玲', 'lllll@gmail.com', 'img/users/3139house.jpg', NULL, '2017-12-09 23:28:27', 0, 2, '2017-12-19 03:57:56', 0),
(13, 'mmmmm', '827ccb0eea8a706c4c34a16891f84e7b', '孫士德', 'mmmmm@gmail.com', 'img/users/63812.jpg', NULL, '2017-12-09 23:36:58', 0, 2, '2017-12-19 03:57:56', 0),
(14, 'nnnnn', '827ccb0eea8a706c4c34a16891f84e7b', '余俊傑', 'nnnnn@gmail.com', 'img/users/8108house.jpg', NULL, '2017-12-09 23:45:28', 0, 2, '2017-12-19 03:57:56', 0),
(15, 'ooooo', '827ccb0eea8a706c4c34a16891f84e7b', '徐兆機', 'ooooo@gmail.com', 'img/users/86622.jpg', NULL, '2017-12-09 23:51:06', 0, 2, '2017-12-19 03:57:56', 0),
(16, 'ppppp', '827ccb0eea8a706c4c34a16891f84e7b', '梁蓮娗', 'ppppp@gmail.com', 'img/users/8309house.jpg', NULL, '2017-12-09 23:59:38', 0, 2, '2017-12-19 03:57:56', 0),
(17, 'qqqqq', '827ccb0eea8a706c4c34a16891f84e7b', '王翔', 'qqqqq@gmail.com', 'img/users/22522.jpg', NULL, '2017-12-10 00:04:32', 0, 2, '2017-12-19 03:57:56', 0),
(18, 'rrrrr', '827ccb0eea8a706c4c34a16891f84e7b', '傅幻民', 'rrrrr@gmail.com', 'img/users/3132house.jpg', NULL, '2017-12-10 00:10:14', 0, 2, '2017-12-19 03:57:56', 0),
(19, 'sssss', '827ccb0eea8a706c4c34a16891f84e7b', '邰淑芬', 'sssss@gmail.com', 'img/users/3727house.jpg', NULL, '2017-12-10 00:16:36', 0, 2, '2017-12-19 03:57:56', 0),
(20, 'ttttt', '827ccb0eea8a706c4c34a16891f84e7b', '楊', 'ttttt@gmail.com', 'img/users/7248house.jpg', NULL, '2017-12-10 00:22:53', 0, 2, '2017-12-19 03:57:56', 0),
(21, 'uuuuu', '827ccb0eea8a706c4c34a16891f84e7b', '陳', 'uuuuu@gmail.com', 'img/users/5882house.jpg', NULL, '2017-12-10 00:27:24', 0, 2, '2017-12-19 03:57:56', 0),
(22, 'student1', '827ccb0eea8a706c4c34a16891f84e7b', '鄭宏', 'student1@gmail.com', 'img/users/96501.jpg', '../head/users/5991cropped (1).png', '2017-12-10 02:33:19', 1, 1, '2017-12-18 03:57:56', 0),
(23, 'student2', '827ccb0eea8a706c4c34a16891f84e7b', '張國恩', 'student2@gmail.com', 'img/users/65282.jpg', '../head/users/90191245.jpg', '2017-12-10 02:35:33', 1, 1, '2017-12-17 03:57:56', 0),
(24, 'student3', '827ccb0eea8a706c4c34a16891f84e7b', '許丹尼', 'student3@gmail.com', 'img/users/37503.jpg', '', '2017-12-10 02:36:13', 0, 1, '2017-12-19 03:57:56', 1),
(25, 'student4', '827ccb0eea8a706c4c34a16891f84e7b', '孫小毛', 'student4@gmail.com', 'img/users/62964.JPG', '../head/users/12032015.jpeg', '2017-12-09 02:36:52', 1, 1, '2017-12-01 03:57:56', 0),
(26, 'student5', '827ccb0eea8a706c4c34a16891f84e7b', '張文慧', 'studnet5@gmail.com', 'img/users/31465.jpg', '../head/users/1825cropped.png', '2017-12-10 02:37:22', 1, 1, '2017-12-19 03:57:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ping`
--

CREATE TABLE `ping` (
  `pid` int(11) NOT NULL,
  `ping` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ping`
--

INSERT INTO `ping` (`pid`, `ping`) VALUES
(1, '5坪以下'),
(2, '5~10坪'),
(3, '10~15坪'),
(4, '15~20坪'),
(5, '20~25坪'),
(6, '25坪以上');

-- --------------------------------------------------------

--
-- Table structure for table `record_add_collect`
--

CREATE TABLE `record_add_collect` (
  `record_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `record_collect`
--

CREATE TABLE `record_collect` (
  `record_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delete_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `record_collect`
--

INSERT INTO `record_collect` (`record_id`, `mem_id`, `house_id`, `add_date`, `delete_date`) VALUES
(1, 24, 18, '2017-12-09 23:02:57', '0000-00-00 00:00:00'),
(2, 24, 4, '2017-12-09 23:03:01', '0000-00-00 00:00:00'),
(3, 24, 18, '0000-00-00 00:00:00', '2017-12-09 23:03:24'),
(4, 24, 11, '2017-12-09 23:43:40', '0000-00-00 00:00:00'),
(5, 24, 18, '2017-12-09 23:52:21', '0000-00-00 00:00:00'),
(6, 24, 18, '0000-00-00 00:00:00', '2017-12-09 23:59:32'),
(7, 26, 2, '2017-12-10 02:10:20', '0000-00-00 00:00:00'),
(8, 27, 18, '2018-01-02 02:04:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `record_delete_collect`
--

CREATE TABLE `record_delete_collect` (
  `record_delete_id` int(10) NOT NULL,
  `mem_id` int(10) NOT NULL,
  `house_id` int(10) NOT NULL,
  `delete_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tw_county`
--

CREATE TABLE `tw_county` (
  `cid` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `county_ch` varchar(30) NOT NULL,
  `county_eg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_county`
--

INSERT INTO `tw_county` (`cid`, `id`, `county_ch`, `county_eg`) VALUES
(1, 1, '臺北市', 'Taipei City'),
(2, 1, '新北市', 'New Taipei City'),
(3, 1, '桃園市', 'Taoyuan City'),
(4, 1, '基隆市', 'Keelung City'),
(5, 1, '新竹縣', 'Hsinchu Country'),
(6, 1, '新竹市', 'Hsinchu City'),
(7, 1, '苗栗縣', 'Miaoli County'),
(8, 2, '臺中市', 'Taichung City'),
(9, 2, '彰化縣', 'Changhua County '),
(10, 2, '南投縣', 'Nantou County'),
(11, 2, '雲林縣', 'Yunlin County'),
(12, 3, '嘉義縣', 'Chiayi County'),
(13, 3, '嘉義市', 'Chiayi City'),
(14, 3, '臺南市', 'Tainan City'),
(15, 3, '高雄市', 'Kaohsiung City'),
(16, 3, '屏東縣', 'Pingtung Country'),
(17, 4, '宜蘭縣', 'Yilan County'),
(18, 4, '花蓮縣', 'Hualien County'),
(19, 4, '臺東縣 ', 'Taitung County'),
(20, 5, '澎湖縣', 'Penghu County'),
(21, 5, '金門連江', 'Kinmen Lienchiang ');

-- --------------------------------------------------------

--
-- Table structure for table `tw_location`
--

CREATE TABLE `tw_location` (
  `id` int(20) NOT NULL,
  `location_ch` varchar(20) NOT NULL,
  `location_eg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_location`
--

INSERT INTO `tw_location` (`id`, `location_ch`, `location_eg`) VALUES
(1, '北部', 'Northern'),
(2, '中部', 'Central'),
(3, '南部', 'Southern'),
(4, '東部', 'Eastern'),
(5, '離島', 'Islands');

-- --------------------------------------------------------

--
-- Table structure for table `tw_school`
--

CREATE TABLE `tw_school` (
  `rid` int(30) NOT NULL,
  `id` int(20) NOT NULL,
  `cid` int(30) NOT NULL,
  `tid` int(10) NOT NULL,
  `region_ch` varchar(30) NOT NULL,
  `region_eg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_school`
--

INSERT INTO `tw_school` (`rid`, `id`, `cid`, `tid`, `region_ch`, `region_eg`) VALUES
(1, 1, 1, 1, '臺北市立大學', 'utaipei'),
(2, 1, 1, 1, '國立臺北大學(臺北校區)', 'ntpu'),
(3, 1, 1, 1, '國立臺北藝術大學', 'tnua'),
(4, 1, 1, 1, '國立臺灣師範大學', 'ntnu'),
(5, 1, 1, 1, '國立政治大學', 'nccu'),
(6, 1, 1, 1, '國立臺北教育大學', 'ntue'),
(7, 1, 1, 1, '國立臺灣大學', 'ntu'),
(8, 1, 1, 1, '國立交通大學(臺北校區)', 'nctu'),
(9, 1, 1, 1, '國立陽明大學', 'ym'),
(10, 1, 1, 1, '中國文化大學', 'pccu'),
(11, 1, 1, 1, '大同大學', 'ttu'),
(12, 1, 1, 1, '世新大學', 'shu'),
(13, 1, 1, 1, '臺北醫學大學', 'tmu'),
(14, 1, 1, 1, '東吳大學', 'scu'),
(15, 1, 1, 1, '淡江大學(臺北校區)', 'tku'),
(16, 1, 1, 1, '實踐大學', 'usc'),
(17, 1, 1, 1, '銘傳大學', 'mcu'),
(18, 1, 1, 1, '國防醫學院', 'ndmctsgh'),
(19, 1, 1, 1, '基督教臺灣浸會神學院', 'tbts'),
(20, 1, 1, 2, '國立臺北科技大學', 'ntut'),
(21, 1, 1, 2, '國立臺北商業大學', 'ntub'),
(22, 1, 1, 2, '國立臺北護理健康大學', 'ntunhs'),
(23, 1, 1, 2, '國立臺灣科技大學', 'ntust'),
(24, 1, 1, 2, '國立臺灣戲曲學院', 'tcpa'),
(25, 1, 1, 2, '中國科技大學', 'cute'),
(26, 1, 1, 2, '中華科技大學', 'cust'),
(27, 1, 1, 2, '台北海洋科技大學(士林校區)', 'tcmt'),
(28, 1, 1, 2, '台北城市科技大學', 'tpcu'),
(29, 1, 1, 2, '德明財經科技大學', 'takming'),
(30, 1, 2, 1, '國立臺北大學', 'ntpu'),
(31, 1, 2, 1, '國立臺灣師範大學(林口校區)', 'ntnu'),
(32, 1, 2, 1, '國立臺灣藝術大學', 'ntua'),
(33, 1, 2, 1, '真理大學', 'au'),
(34, 1, 2, 1, '法鼓文理學院', 'dila'),
(35, 1, 2, 1, '淡江大學', 'tku'),
(36, 1, 2, 1, '華梵大學', 'hfu'),
(37, 1, 2, 1, '輔仁大學', 'fju'),
(38, 1, 2, 1, '國立空中大學', 'nou'),
(39, 1, 2, 1, '馬偕醫學院', 'mmc'),
(40, 1, 2, 2, '台北海洋科技大學(淡水校區)', 'tcmt'),
(41, 1, 2, 2, '亞東技術學院', 'oit'),
(42, 1, 2, 2, '明志科技大學', 'mit'),
(43, 1, 2, 2, '東南科技大學', 'tnu'),
(44, 1, 2, 2, '致理科技大學', 'chihlee'),
(45, 1, 2, 2, '景文科技大學', 'just'),
(46, 1, 2, 2, '華夏科技大學', 'hwh'),
(47, 1, 2, 2, '聖約翰科技大學', 'sju'),
(48, 1, 2, 2, '宏國德霖科技大學', 'hdut'),
(49, 1, 2, 2, '黎明科技大學', 'lit'),
(50, 1, 2, 2, '醒吾科技大學', 'hwu'),
(51, 2, 8, 1, '國立中興大學', 'nchu'),
(52, 2, 8, 1, '國立臺中教育大學', 'ntcu'),
(53, 2, 8, 1, '國立臺灣體育運動大學', 'ntupes'),
(54, 2, 8, 1, '中山醫學大學', 'csmu'),
(55, 2, 8, 1, '中國醫藥大學', 'cmu'),
(56, 2, 8, 1, '東海大學', 'thu'),
(57, 2, 8, 1, '逢甲大學', 'fcu'),
(58, 2, 8, 1, '亞洲大學', 'asia'),
(59, 2, 8, 1, '靜宜大學', 'pu'),
(60, 2, 8, 2, '國立臺中科技大學', 'nutc'),
(61, 2, 8, 2, '國立勤益科技大學', 'ncut'),
(62, 2, 8, 2, '中臺科技大學', 'ctust'),
(63, 2, 8, 2, '僑光科技大學', 'ocu'),
(64, 2, 8, 2, '嶺東科技大學', 'ltu'),
(65, 2, 8, 2, '弘光科技大學', 'hk'),
(66, 2, 8, 2, '修平科技大學', 'hust'),
(67, 2, 8, 2, '朝陽科技大學', 'cyut'),
(68, 1, 3, 1, '國立中央大學', 'ncu'),
(69, 1, 3, 1, '國立體育大學', 'ntsu'),
(70, 1, 3, 1, '中原大學', 'cycu'),
(71, 1, 3, 1, '元智大學', 'yzu'),
(72, 1, 3, 1, '長庚大學', 'cgu'),
(73, 1, 3, 1, '開南大學', 'knu'),
(74, 1, 3, 1, '銘傳大學(桃園校區)', 'mcu'),
(75, 1, 3, 1, '中央警察大學', 'cpu'),
(76, 1, 3, 1, '國防大學', 'ndu'),
(77, 1, 3, 2, '長庚科技大學', 'cgust'),
(78, 1, 3, 2, '南亞技術學院', 'nanya'),
(79, 1, 3, 2, '健行科技大學', 'uch'),
(80, 1, 3, 2, '萬能科技大學', 'vnu'),
(81, 1, 3, 2, '龍華科技大學', 'lhu'),
(82, 1, 5, 2, '大華科技大學', 'tust'),
(83, 1, 5, 2, '中國科技大學(新竹校區)', 'cute'),
(84, 1, 5, 2, '中華科技大學(新竹校區)', 'cust'),
(85, 1, 5, 2, '明新科技大學', 'must'),
(86, 1, 6, 1, '國立交通大學', 'nctu'),
(87, 1, 6, 1, '國立清華大學', 'nthu'),
(88, 1, 6, 1, '國立新竹教育大學', 'nhcue'),
(89, 1, 6, 1, '中華大學', 'chu'),
(90, 1, 6, 1, '玄奘大學', 'hcu'),
(91, 1, 6, 2, '元培醫事科技大學', 'ypu'),
(92, 1, 7, 1, '國立聯合大學', 'nuu'),
(93, 1, 7, 2, '育達科技大學', 'ydu'),
(94, 1, 7, 2, '亞太創意技術學院', 'apic'),
(95, 1, 4, 1, '國立海洋大學', 'ntou'),
(96, 1, 4, 2, '崇右影藝科技大學', 'cufa'),
(97, 1, 4, 2, '經國管理暨健康學院', 'cku'),
(98, 2, 9, 1, '國立彰化師範大學', 'ncue'),
(99, 2, 9, 1, '大葉大學', 'dyu'),
(100, 2, 9, 1, '明道大學', 'mdu'),
(101, 2, 9, 2, '中州科技大學', 'ccut'),
(102, 2, 9, 2, '建國科技大學', 'ctu'),
(103, 2, 10, 1, '國立暨南國際大學', 'ncnu'),
(104, 2, 10, 2, '南開科技大學', 'nkut'),
(105, 2, 11, 1, '中國醫藥大學(北港分部)', 'cmu'),
(106, 2, 11, 2, '國立虎尾科技大學', 'nfu'),
(107, 2, 11, 2, '國立雲林科技大學', 'nyust'),
(108, 2, 11, 2, '環球科技大學', 'twu'),
(109, 3, 12, 1, '國立中正大學', 'ccu'),
(110, 3, 12, 1, '國立嘉義大學(民雄校區)', 'ncyu'),
(111, 3, 12, 1, '南華大學', 'nhu'),
(112, 3, 12, 1, '稻江科技暨管理學院', 'toko'),
(113, 3, 12, 2, '大同技術學院(太保校區)', 'ttc'),
(114, 3, 12, 2, '吳鳳科技大學', 'wfu'),
(115, 3, 12, 2, '長庚科技大學(嘉義校區)', 'cgust'),
(116, 3, 13, 1, '國立嘉義大學', 'ncyu'),
(117, 3, 13, 2, '大同技術學院', 'ttc'),
(118, 3, 14, 1, '國立台南大學', 'nutn'),
(119, 3, 14, 1, '國立成功大學', 'ncku'),
(120, 3, 14, 1, '國立台南藝術大學', 'tnnua'),
(121, 3, 14, 1, '康寧大學', 'ukn'),
(122, 3, 14, 1, '中信金融管理學院', 'ctbc'),
(123, 3, 14, 1, '長榮大學', 'cjcu'),
(124, 3, 14, 1, '台灣首府大學', 'tsu'),
(125, 3, 14, 1, '真理大學(麻豆校區)', 'au'),
(126, 3, 14, 2, '中華醫事科技大學', 'hwai'),
(127, 3, 14, 2, '台南應用科技大學', 'tut'),
(128, 3, 14, 2, '南台科技大學', 'stust'),
(129, 3, 14, 2, '南榮科技大學', 'nju'),
(130, 3, 14, 2, '崑山科技大學', 'ksu'),
(131, 3, 14, 2, '嘉南藥理大學', 'cnu'),
(132, 3, 14, 2, '遠東科技大學', 'feu'),
(133, 3, 15, 1, '國立中山大學', 'nsysu'),
(134, 3, 15, 1, '國立高雄大學', 'nuk'),
(135, 3, 15, 1, '國立高雄師範大學', 'nknu'),
(136, 3, 15, 1, '高雄醫學大學', 'kmu'),
(137, 3, 15, 1, '義守大學', 'isu'),
(138, 3, 15, 1, '實踐大學(高雄校區)', 'usc'),
(139, 3, 15, 1, '高雄市立空中大學', 'ouk'),
(140, 3, 15, 1, '陸軍官校', 'cma'),
(141, 3, 15, 1, '海軍官校', 'cna'),
(142, 3, 15, 1, '空軍官校', 'cafa'),
(143, 3, 15, 2, '國立高雄海洋科技大學', 'nkmu'),
(144, 3, 15, 2, '國立高雄餐旅大學', 'nkuht'),
(145, 3, 15, 2, '文藻外語大學', 'wzu'),
(146, 3, 15, 2, '正修科技大學', 'csu'),
(147, 3, 15, 2, '東方設計大學', 'tfu'),
(148, 3, 15, 2, '輔英科技大學', 'fy'),
(149, 3, 15, 2, '國立高雄第一科技大學', 'nkfust'),
(150, 3, 15, 2, '國立高雄應用科技大學', 'kuas'),
(151, 3, 15, 2, '和春技術學院', 'fotech'),
(152, 3, 15, 2, '高苑科技大學', 'kyu'),
(153, 3, 15, 2, '樹德科技大學', 'stu'),
(154, 3, 15, 2, '國立空軍航空技術學院', 'afats'),
(155, 3, 16, 1, '國立屏東教育大學', 'nptu'),
(156, 3, 16, 2, '國立屏東科技大學', 'npust'),
(157, 3, 16, 2, '大仁科技大學', 'tajen'),
(158, 3, 16, 2, '美和科技大學', 'meiho'),
(159, 4, 17, 1, '國立宜蘭大學', 'niu'),
(160, 4, 17, 1, '佛光大學', 'fgu'),
(161, 4, 17, 1, '淡江大學(蘭陽校區)', 'tku'),
(162, 4, 17, 2, '蘭陽技術學院', 'fit'),
(163, 4, 18, 1, '國立東華大學', 'ndhu'),
(164, 4, 18, 1, '慈濟大學', 'tcu'),
(165, 4, 18, 2, '大漢技術學院', 'dahan'),
(166, 4, 18, 2, '慈濟科技大學', 'tcust'),
(167, 4, 18, 2, '台灣觀光學院', 'thtu'),
(168, 4, 19, 1, '國立台東大學', 'nttu'),
(169, 4, 19, 2, '國立台東專科學校', 'ntc'),
(170, 5, 20, 2, '國立澎湖科技大學', 'npu'),
(171, 5, 21, 1, '銘傳大學(金門校區)', 'mcu'),
(172, 5, 21, 1, '國立金門大學', 'nqu');

-- --------------------------------------------------------

--
-- Table structure for table `tw_schtype`
--

CREATE TABLE `tw_schtype` (
  `tid` int(10) NOT NULL,
  `schtpye` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_schtype`
--

INSERT INTO `tw_schtype` (`tid`, `schtpye`) VALUES
(1, '一般大學'),
(2, '科技大學');

-- --------------------------------------------------------

--
-- Table structure for table `vital function`
--

CREATE TABLE `vital function` (
  `vid` int(50) NOT NULL,
  `function_ch` varchar(40) NOT NULL,
  `function_eg` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vital function`
--

INSERT INTO `vital function` (`vid`, `function_ch`, `function_eg`) VALUES
(1, '公園', 'park'),
(2, '市場', 'market'),
(3, '超市', 'Supermarket'),
(4, '夜市', 'night market'),
(5, '小吃店', 'snack bar'),
(6, '警察局', 'Police station'),
(7, '停車場', 'parking lot'),
(8, '公車站', 'bus station'),
(9, '醫療機構', 'Medical institutions'),
(10, '便利商店', 'Convenience store');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `collect`
--
ALTER TABLE `collect`
  ADD PRIMARY KEY (`collect_id`);

--
-- Indexes for table `houseinfo`
--
ALTER TABLE `houseinfo`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `houseinfo_seed`
--
ALTER TABLE `houseinfo_seed`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `housetype`
--
ALTER TABLE `housetype`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `member_seed`
--
ALTER TABLE `member_seed`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `member_seeder`
--
ALTER TABLE `member_seeder`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `ping`
--
ALTER TABLE `ping`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `record_add_collect`
--
ALTER TABLE `record_add_collect`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_collect`
--
ALTER TABLE `record_collect`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `record_delete_collect`
--
ALTER TABLE `record_delete_collect`
  ADD PRIMARY KEY (`record_delete_id`);

--
-- Indexes for table `tw_county`
--
ALTER TABLE `tw_county`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tw_location`
--
ALTER TABLE `tw_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tw_school`
--
ALTER TABLE `tw_school`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tw_schtype`
--
ALTER TABLE `tw_schtype`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `vital function`
--
ALTER TABLE `vital function`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `collect`
--
ALTER TABLE `collect`
  MODIFY `collect_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `houseinfo`
--
ALTER TABLE `houseinfo`
  MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `houseinfo_seed`
--
ALTER TABLE `houseinfo_seed`
  MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `housetype`
--
ALTER TABLE `housetype`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `lev_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `member_seed`
--
ALTER TABLE `member_seed`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_seeder`
--
ALTER TABLE `member_seeder`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `ping`
--
ALTER TABLE `ping`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `record_add_collect`
--
ALTER TABLE `record_add_collect`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `record_collect`
--
ALTER TABLE `record_collect`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `record_delete_collect`
--
ALTER TABLE `record_delete_collect`
  MODIFY `record_delete_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tw_county`
--
ALTER TABLE `tw_county`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tw_location`
--
ALTER TABLE `tw_location`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tw_school`
--
ALTER TABLE `tw_school`
  MODIFY `rid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `tw_schtype`
--
ALTER TABLE `tw_schtype`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vital function`
--
ALTER TABLE `vital function`
  MODIFY `vid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
