-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 05.44
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtraviora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `armada`
--

CREATE TABLE `armada` (
  `armada_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bus` int(3) NOT NULL,
  `minibus` int(3) NOT NULL,
  `hiace` int(3) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `armada`
--

INSERT INTO `armada` (`armada_id`, `name`, `address`, `phone`, `email`, `bus`, `minibus`, `hiace`, `note`, `created`, `updated`) VALUES
(1, 'Songgon Trans', 'Seragi, Songgon, Banyuwangi', '082244922833', 'irvanhidayat0623@gmail.com', 7, 10, 5, 'hiya hiya', '2020-12-05 03:00:46', '2020-12-04 21:00:46'),
(2, 'Purworharjo Trans', 'Purwoharjo, Banyuwangi', '081336914904', 'miftahulhuda08@gmail.com', 3, 6, 2, NULL, '2020-11-25 13:15:14', NULL),
(3, 'Lorena', 'Tukangkayu Banyuwangi', '083355625353', 'deny.dand@outlook.com', 5, 7, 2, 'milik pribadi aktif stiap hari', '2020-11-25 15:34:38', '2020-11-25 09:34:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `writer` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `image`, `content`, `writer`, `created`, `updated`) VALUES
(1, 'Blue Fire Phenomenon on Ijen Crater', 'blog-160620-8d3be1831c.jpg', '<p><strong>Ijen Volcano</strong> or known as ‘Ijen Crater’ or ‘Kawah Ijen’ has elevation 2,769m (9,085 ft) which located in East Java, Indonesia. Highly recommended for mountain buffs and hikers. Ijen is a quiet but active volcano, and the landscape is dominated by the volcanic cones.</p>\r\n', 'admintraviora', '2020-12-15 17:05:34', '2020-12-15 11:05:34'),
(2, 'Corona in Bali – Is it safe to travel?', 'blog-160620-090ec5e43d.jpg', '<p>The World Health Organization (WHO) has declared COVID-19 a pandemic. The risk of transmission around the world is increasing, especially the spread of corona in Bali</p>\r\n', 'admintraviora', '2020-12-08 08:43:33', '2020-12-08 02:43:33'),
(3, 'NYEPI 2020 – What you can do in Bali', 'blog-160620-0e02852a6e.jpg', 'Bali has a big day called Nyepi Day. In 2020, preparations for the Nyepi celebration ritual begin a few weeks before the actual date with the large Ogoh-ogoh craft. If you travel around the island, maybe you will see some that are being made.', 'admintraviora', '2020-11-27 10:12:42', '2020-06-16 16:44:27'),
(4, 'Tourist Attractions In Bali Began To Be Closed', 'blog-160620-05dd40be09.jpg', 'The Indonesian government has appealed to the public to implement social distancing along with the increasing number of positive cases of corona in Indonesia. Most companies and government agencies have also adopted work from home policies for their employees.', 'Irvan Alfi', '2020-11-27 10:12:45', '2020-06-16 16:45:41'),
(5, 'Bali Status and Prevention Spread of Covid-19', 'blog-160620-ffbfe0ba4c.jpg', 'Bali Update Covid-19. Until May 4, 2020, the cumulative number of positive patients is 271 people. The number of patients who had recovered was 159 people. Meanwhile, the number of patients who died remained 4 people (2 local and 2 foreign). The number of positive patients in medical care 108 people in 9 hospitals and in quarantine (Bapelkesmas).', 'Irvan Alfi', '2020-11-27 10:12:48', '2020-06-16 16:44:46'),
(8, 'Akses Wisata ke Bali Kembali dibuka dengan Aturan New Normal', 'blog-160620-06ca08d3b3.jpg', 'semenjak indonesia terdapak wabah firus corona, mentri pariwisata memberikan himbauan untuk menonaktif kan seluruh tempat wisata di berbagai daerah di Indonesia. akan tetapi seiring berjalan nya waktu sepertinya peraturan untuk tetap stay di rumah , socialdistancing, lockdown semuanya belum bisa sepenuhnya di terapkan kepada seluruh masyarakat indonesia\r\nAkhirnya pemerintah memutuskan untuk memberlakukan new normal dengan membebaskan semua kegiatan seperti semula, akan tetapi tetap dalam peraturan untuk menggunakan masker, handsanitizer, apbd dan lain sebagainya. ', 'Irvan', '2020-11-27 10:12:51', '2020-06-16 16:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `pesan`, `answer`, `created`, `updated`) VALUES
(1, 'M. Irvan Alfi Hidayat', 'irvanhidayat0623@gmail.com', 'Saran', 'Mohon di tingkatkan lagi fitur fiturnya. masih banyak yang kurang smoth', NULL, '2020-05-17 21:33:12', NULL),
(3, 'irvanalfy', 'irvan_alfy23@yahoo.com', 'tiket traviora', 'gcdhgklhl\'k;l', NULL, '2020-05-19 12:07:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(225) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `updated`) VALUES
(1, 'Abdul Ajiz', 'L', '081358588519', 'Malioboro, Jogja', '2020-12-05 03:12:15', '2020-12-04 21:12:15'),
(2, 'Intan Nur Ja\'a Al Faricha', 'P', '081443244233', 'Cluring, Banyuwangi', '2020-05-04 10:25:08', NULL),
(3, 'Abdurrosyid Muhasibi', 'L', '085667443666', 'Kediri, Jawa Timur', '2020-05-04 10:25:42', NULL),
(4, 'Septianda Reza Maulana', 'L', '082257125415', 'Perumahan Jati Asri Blok A3, Kebon Agung, Kraksaan-Probolinggo', '2020-05-04 10:27:23', NULL),
(5, 'Silvia Amalia', 'P', '082255667344', 'Lumajang, Jawa Timur', '2020-05-07 22:25:58', '2020-05-07 17:25:58'),
(6, 'Herlina Sari', 'P', '089933267788', 'Rogojampi, Banyuwangi, Jawa Timur', '2020-05-04 10:29:07', NULL),
(7, 'Syefil Angela', 'P', '082226677344', 'Terusan Surabaya, Malang', '2020-05-04 10:30:22', NULL),
(8, 'Irgi Saputra', 'L', '081776543882', 'Jombang, Jawa Timur', '2020-05-04 10:31:08', NULL),
(9, 'Iqbaludin Alhuda', 'L', '085441991833', 'Pati, Mojokerto, Jawa Timur', '2020-05-04 10:32:04', NULL),
(10, 'Alta Larik ', 'L', '081226775590', 'Blimbing, Malang, Jawa Timur', '2020-05-07 20:27:07', '2020-05-07 15:27:07'),
(11, 'Mirza Zarqani', 'L', '082230913815', 'Pakis, Malang', '2020-05-07 20:28:03', NULL),
(12, 'oskar pra', 'L', '082334334807', 'ST Shanta maria', '2020-12-26 14:24:54', NULL),
(13, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:48:00', NULL),
(14, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:48:16', NULL),
(15, 'nafis', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:52:30', NULL),
(16, 'dwike', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:53:47', NULL),
(17, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:55:04', NULL),
(18, 'a', 'P', '', '', '2021-01-02 08:59:24', NULL),
(19, 'a', 'P', '085219466559', 'banyuwangi', '2021-01-02 08:59:39', NULL),
(20, 'gjgj', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:01:05', NULL),
(21, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:03:22', NULL),
(22, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:08:39', NULL),
(23, 'gjgj', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:08:54', NULL),
(24, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:16:55', NULL),
(25, 'nafis', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:19:38', NULL),
(26, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:26:12', NULL),
(27, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:33:35', NULL),
(28, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:34:37', NULL),
(29, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:41:29', NULL),
(30, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:42:11', NULL),
(31, 'Paramitha', 'P', '085219466559', 'banyuwangi', '2021-01-02 09:48:19', NULL),
(32, 'nafis', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:01:48', NULL),
(33, 'nafis', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:03:40', NULL),
(34, 'nafis', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:04:51', NULL),
(35, 'gjgj', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:08:04', NULL),
(36, 'gjgj', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:12:26', NULL),
(37, 'andini', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:21:46', NULL),
(38, 'andini', 'P', '085219466559', 'banyuwangi', '2021-01-02 10:23:27', NULL),
(39, 'bajul', 'P', '085219466559', 'banyuwangi', '2021-01-02 11:02:47', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL,
  `status` enum('E','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `updated`, `status`) VALUES
(1, 'Java Tour', '2020-12-05 02:52:05', '2020-12-04 20:52:05', 'E'),
(2, 'Bali Tour', '2020-05-04 05:39:31', NULL, 'E'),
(3, 'Lombok Tour', '2020-11-27 08:05:55', '2020-11-27 02:05:55', 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `image2` varchar(225) DEFAULT NULL,
  `image3` varchar(225) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `groupsize` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `overview` text NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `address`, `image`, `image2`, `image3`, `duration`, `groupsize`, `language`, `overview`, `type_id`, `category_id`, `unit_id`, `stock`, `price`, `created`, `updated`) VALUES
(8, 'A001', 'BROMO OVERNIGHT TRIP', 'Gunung Bromo, Area Gunung Bromo, Podokoyo, Pasuruan, East Java, Indonesia', 'item-141220-2cf1d2c5a4.jpg', 'item-141220-2cf1d2c5a41.jpg', 'item-141220-2cf1d2c5a42.jpg', '2 Days 1 night', 'Unlimited', 'English', '<p><strong>BROMO OVERNIGHT TRIP – START YOGYAKARTA</strong> Booking Bromo Overnight Trip start from Yogyakarta. Depart with Executive Sancaka Pagi train at 6.30 from Yogyakarta. You will arrive eat Jombang station within 3.5 hours and the drive will be ready in Jombang station to drive you to Sukapura Village. Upon your arrival in Sukapura village, you can witness the daily activities of the Tenggerese people around your hotel.</p>\r\n\r\n<p>In the second day, you’ll trip will start at 3.30 am, picked up by a 4 WD-vehicle to reach Mt. Penanjakan which has known as the best spot to witness the beauty of Bromo Sunrise. Next, driving down the hill, you will pass the vast sea of sand, you’ll reach the peak in 30 minutes with an easy track all the way. From the crater rim, you can see the active Bromo crater, caldera and the mountainous views of Mt.Batur and the highest mount in Java Island, Mt. Semeru. Also, you can find the Hindu temple reflecting the Majapahit history. If you are lucky, you will be able to witness the Yadnya Kasada ceremony, a Tenggerese festival held every 14th of the Kasada month, to honor Sang HyangWidhi the Almighty God, Roro Anteng the daughter of King Majapahit and Joko Seger the son of Brahmana. Afterward, you will be guided to return to the hotel for a breakfast before going back to Surabaya Airport or another place upon request</p>\r\n\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Mount Penanjakan</li>\r\n <li>Bromo Sunrise Point</li>\r\n <li>Mount Bromo Crater</li>\r\n <li>Volcano Climbing</li>\r\n</ul>\r\n', 1, 1, 1, 12, 2000000, '2020-12-16 16:28:31', '2020-12-16 10:28:31'),
(15, 'A002', 'Amazing Malang Batu', 'Malang, Malang City, East Java, Indonesia', 'item-070520-85759d47b3.jpg', 'item-151220-12138ac99d.jpg', 'item-151220-12138ac99d1.jpg', '2 days 1 night', 'Unlimited', 'English', '<p><strong>Malang City</strong> located on the southwestern part of Indonesia, Java island. Malang has many tourist destinations, both natural and city.</p>\r\n\r\n<p><strong>Museum Angkut</strong> is a transport museum located in Batu, East Java, Indonesia and is located on the hillside of Mount Panderman, part of Mount Kawi-Butak. The museum has more than 300 collections of types of traditional to modern transportation.</p>\r\n\r\n<p><strong>Colorful Village</strong> was actually a slum area that is located on the riverbank of Daerah Aliran Sungai (DAS) Brantas. It was even one of the 11 most rundown villages in Indonesia. It all changed when a group of students changed it and eventually became a popular tourist destination.</p>\r\n\r\n<p><strong>Omah Kayu (Wooden House)</strong> near enough from other tourist destinations in Batu. Omah Kayu is a very natural ambience, and cool. Not only that, during the day various birds chirping sound. This outstanding charm makes a lot of interested people to stay and reserve the hotel.</p>\r\n\r\n<p>HIGHLIGTS</p>\r\n\r\n<ul>\r\n <li>Visit Colorful Village Tourism Object</li>\r\n <li>Apple Picking and visit Omah Kayu</li>\r\n <li>Visit Museum Angkut / Jatimpark 3</li>\r\n <li>Batu Flower Garden</li>\r\n <li>Souvenir Center of Batu Malang</li>\r\n</ul>\r\n', 1, 1, 3, 13, 1935000, '2021-01-02 11:02:47', '2020-12-15 17:26:32'),
(19, 'A003', 'Gili Trawangan Tour', 'Gili Trawangan, Gili Indah, North Lombok Regency, West Nusa Tenggara, Indonesia', 'item-070520-3f2dc55bc9.jpg', 'item-151220-f686330c6c.png', 'item-151220-f686330c6c.jpg', '8 hours', 'Unlimited', 'English', '<p><strong>Full Day Gili Trawangan Tour</strong> Start your trip by visiting <strong>Bukit Malimbu ( Malimbu Hill )</strong>, where you can see and enjoy the beautiful Mount Agung which is the highest mountain in Bali. Here, you will also see the beautiful view of Gilis’. Then, drive <strong>to Teluk Nare port</strong> and cross for 35 minutes to <strong>Gili Trawangan</strong>, which is a small island where you can do some activities such as swimming, snorkeling, glass bottom boat, etc. This island is very unique, because the motorcycle, car, another vehicle is forbidden on this small island. As an option, you can be surrounding this small island by bicycle or Cidomo, the traditional Lombok’s transportation. In the afternoon, we will back to Lombok and <strong>visiting Pusuk conservation forest</strong>. Here, you will see the beautiful valley and some monkeys around the way. And for lunch and dinner, you will be served at local Restaurant.</p>\r\n\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Visit Malimbu Hill</li>\r\n <li>Visit Gili Trawangan</li>\r\n <li>Visit Pusuk conservation forest</li>\r\n</ul>\r\n', 1, 3, 5, 12, 1200000, '2020-12-15 23:39:36', '2020-12-15 17:39:36'),
(21, 'A006', 'Sendang Gile Waterfall', 'West Nusa Tenggara, Indonesia', 'item-161220-54538b40e1.jpg', 'item-161220-54538b40e11.jpg', 'item-161220-54538b40e12.jpg', '8 hours', 'Unlimited', 'English', '<p>Sendang Gile Waterfall Tour Start your trip by visiting Pusuk Pass, you will see the beautiful valley and some monkeys around the way. Then, drive to Sendang Gile Waterfall and Tiu Kelep Waterfall is located under the foot of Mount Rinjani precisely in the Villa Senaru. After that, you will go to the Ancient Mosque Bayan and traditional house Segenter. Then you visiting Bukit Malimbu, where you can see and enjoy the sunset. And for lunch and dinner, you will be served at local Restaurant.</p>\r\n\r\n<h4>Noted :</h4>\r\n\r\n<ul>\r\n <li>There will be an additional if you start the tour or finish the tour from Kuta Area, Sire Beach area (please contact us for additional fees).</li>\r\n <li>Minimum booking is 2 person.</li>\r\n</ul>\r\n', 1, 3, 8, 13, 950000, '2020-12-16 16:33:52', '2020-12-16 10:33:52'),
(24, 'A008', 'Amazing Malang Batu Bromo', 'Malang, East Java, Indonesia', 'item-161220-d4c54a5272.jpg', 'item-161220-d4c54a52721.jpg', 'item-161220-d4c54a52722.jpg', '2 days 1 night', 'Unlimited', 'English', '<p><strong>Malang City</strong> located on the southwestern part of Indonesia, Java island. Malang has many tourist destinations, both natural and city.</p>\r\n\r\n<p><strong>Museum Angkut</strong> is a transport museum located in Batu, East Java, Indonesia and is located on the hillside of Mount Panderman, part of Mount Kawi-Butak. The museum has more than 300 collections of types of traditional to modern transportation.</p>\r\n\r\n<p><strong>Colorful Village</strong> was actually a slum area that is located on the riverbank of Daerah Aliran Sungai (DAS) Brantas. It was even one of the 11 most rundown villages in Indonesia. It all changed when a group of students changed it and eventually became a popular tourist destination.</p>\r\n\r\n<p><strong>Omah Kayu (Wooden House)</strong> near enough from other tourist destinations in Batu. Omah Kayu is a very natural ambience, and cool. Not only that, during the day various birds chirping sound. This outstanding charm makes a lot of interested people to stay and reserve the hotel.</p>\r\n\r\n<p><strong>Mount Bromo</strong> is a part of the Bromo Tengger Semeru National Park that covers a massive area of 800 square km. While it may be small when measured against other volcanoes in Indonesia, the magnificent Mt Bromo will not disappoint with its spectacular views and dramatic landscapes at 2,392 meters tall. From a vantage point on Mount Penanjakan (2,770 meters above sea level), 2.5 hours from Malang. visitors from around the world come to see the sunrise over Mt Bromo. Around Mount Bromo there are other best spots such as Padang Savana or Bukit Teletubbies and Whispering Sand (Pasir Berbisik).</p>\r\n\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Visit Colorful Village Tourism Object</li>\r\n <li>Apple Picking and visit Omah Kayu</li>\r\n <li>Visit Museum Angkut / Jatimpark 3</li>\r\n <li>Mount Penanjakan</li>\r\n <li>Mount Bromo Crater</li>\r\n <li>Visit Padang Savana or Bukit Teletubbies</li>\r\n <li>Visit Pasir Berbisik</li>\r\n</ul>\r\n', 1, 1, 11, -240, 2413000, '2021-01-02 10:12:26', '2020-12-16 10:44:15'),
(25, 'A009', 'Africa of Java & Staycation', 'Baluran National Park, Area Hutan/Kebun, Wonorejo, Situbondo Regency, East Java, Indonesia', 'item-160520-cd506846e3.jpg', 'item-161220-159e81ffd2.jpeg', 'item-161220-159e81ffd2.jpg', '2 days 1 night', 'Unlimited', 'English', '<p>Explore National Park and enjoy the panorama of savanna and mount Baluran (inactive volcano) in the center of the area that becomes habitat of many exotic animals such as wild pigs, deers, peacocks, wild chickens, some species of monkeys and also bulls as the protected animals in the area.</p>\r\n\r\n<p>Known as Baluran National Park, coverning 250 sq km comprising lowland forests, mangrove forests and 40% swathes of fertile savannahs, they provide abundant food for the animals. Here also are many typical Java trees like the Java tamarind and the pecan nut trees.</p>\r\n\r\n<p>At the center of this large Park stands the extinct Baluran volcano, watching over its pristine environment dominated by the dry east wind, Baluran receives on average only 3 months of rain. The rainy season in East Java being between November through April, peaking in December and January, while the dry season lasts from April through October.</p>\r\n\r\n<p>Around on Baluran National Park, you can see the original and virgin beach with its amazing scenery, it’s Bama Beach. Located 15 km from the main gate. It’s small white-sandy opening on the end of the road perfectly faces the east.</p>\r\n\r\n<p>Beside that you also can see mangrove forest, Bama spring and Mantingan spring. One of special moment here is that you can see monkey with the long tail (Macaca fascicularis) that fishing crabs with their long tail.</p>\r\n\r\n<hr>\r\n<p><strong>SPECIAL GROUP PRICES</strong></p>\r\n\r\n<ul>\r\n <li>2 pax ( Rp.1.098.000/pax )</li>\r\n <li>3 pax ( Rp.955.000/pax )</li>\r\n <li>4 pax ( Rp.791.000/pax )</li>\r\n <li>5-9 pax ( Rp.769.000/pax )</li>\r\n <li>10-14 pax ( Rp670.000/pax )</li>\r\n <li>15-19 pax ( Rp.626.000/pax )</li>\r\n <li>20-29 pax ( Rp.593.000/pax )</li>\r\n <li>30-39 pax ( Rp.560.000/pax )</li>\r\n <li>40-49 pax ( Rp.527.000/pax )</li>\r\n <li>>50 pax ( Rp.516.500/pax )</li>\r\n</ul>\r\n\r\n<hr>\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Visit Baluran National Park, the panorama of savannah.</li>\r\n <li>Visit Bama Beach</li>\r\n <li>Visit Mangrove Forest</li>\r\n</ul>\r\n', 1, 1, 2, 9, 1098000, '2021-01-02 11:02:47', '2020-12-16 11:08:17'),
(26, 'A010', 'Nusa Lembongan Day', 'Bounty Cruise Pontoon, Klungkung Regency, Bali, Indonesia', 'item-161220-271578683b.jpg', 'item-161220-271578683b1.jpg', 'item-161220-271578683b.png', '6 Hours', 'Unlimited', 'English', '<p><strong>Nusa Lembongan</strong> is a small island off the southeast coast of the main island of Bali. Quickly becoming one of Bali’s most popular attractions, this island paradise is a world away from the hassle and hectic pace of South Bali. Neither hawkers nor traffic mar the magnificent scenery; this is a fine place to just put your feet up and relax. Main activities include surfing, diving, and snorkeling.</p>\r\n\r\n<p>Cruise in comfort by Nusa Lembongan Day Cruise with Bounty Cruises that can accommodate 600 passenger catamaran. Just sit back and relax by cruising 30 knots to Lembongan Island. These cruises are equipped with state of the art computerized stabilizer and meet with International Safety Standards. An executive service will make your cruise enjoyable. Nusa Lembongan is an island Paradise that has magnificent scenery. This island is a fine place to relax. The timetable is approximate only depending on the weather and sea conditions. Boarding commences 30 minutes before each departure time. Bounty Cruises only provide transfer boat from Pontoon Nusa Lembongan to Villa Wayan or from Villa Wayan to Pontoon.</p>\r\n\r\n<p>Travel time from Benoa Harbor to the beach of Nusa Lembongan Island for approximately 1 hour. Various tourist activities can be enjoyed during the enjoyment of Bounty Day Cruise without additional cost such as skating on the pontoon (44m waterslide), banana boat, canoeing as much as possible, snorkeling, glass bottom boat, and tour to Island.</p>\r\n\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Cruise to Lembongan Island</li>\r\n <li>Diving, and snorkeling, glass bottom boat</li>\r\n <li>Surfing and skating on the pontoon (44m waterslide)</li>\r\n <li>Banana boat, canoeing as much as possible</li>\r\n <li>Tour to Island</li>\r\n</ul>\r\n', 1, 2, 7, 15, 1250000, '2020-12-16 17:18:39', '2020-12-16 11:18:39'),
(27, 'A011', 'Amazing Malang Batu – 2Days 1Night', 'Malang, Malang City, East Java, Indonesia', 'item-160520-eaf9bcfb9d.jpg', NULL, NULL, '2 Days', 'Unlimited', 'English', 'Omah Kayu (Wooden House) near enough from other tourist destinations in Batu', 1, 1, 11, 6, 1935000, '2021-01-02 10:12:27', NULL),
(28, 'A012', 'Beautiful Malang Batu – 3Days 2Nights', 'Malang, Malang City, East Java, Indonesia', 'item-160520-d479f33fde.jpg', NULL, NULL, '3 Days', 'Unlimited', 'English', 'Museum Angkut is a transport museum located in Batu, East Java, Indonesia', 1, 1, 11, 12, 2775000, '2021-01-02 10:12:27', NULL),
(29, 'A013', 'Beautiful Malang Batu Bromo', 'Malang, Malang City, East Java, Indonesia', 'item-160520-5a816a2aa6.jpg', 'item-161220-f43c1b2c82.jpg', 'item-161220-f43c1b2c821.jpg', '3 days 2 nights', 'Unlimited', 'English', '<p><strong>Malang City</strong> located on the southwestern part of Indonesia, Java island. Malang has many tourist destinations, both natural and city.</p>\r\n\r\n<p><strong>Museum Angkut</strong> is a transport museum located in Batu, East Java, Indonesia and is located on the hillside of Mount Panderman, part of Mount Kawi-Butak. The museum has more than 300 collections of types of traditional to modern transportation.</p>\r\n\r\n<p><strong>Colorful Village</strong> was actually a slum area that is located on the riverbank of Daerah Aliran Sungai (DAS) Brantas. It was even one of the 11 most rundown villages in Indonesia. It all changed when a group of students changed it and eventually became a popular tourist destination.</p>\r\n\r\n<p>And <strong>Mount Bromo</strong> is a part of the Bromo Tengger Semeru National Park that covers a massive area of 800 square km. While it may be small when measured against other volcanoes in Indonesia, the magnificent Mt Bromo will not disappoint with its spectacular views and dramatic landscapes at 2,392 meters tall. From a vantage point on Mount Penanjakan (2,770 meters above sea level), 2.5 hours from Malang. visitors from around the world come to see the sunrise over Mt Bromo. Around Mount Bromo there are other best spots such as Padang Savana or Bukit Teletubbies and Whispering Sand (Pasir Berbisik).</p>\r\n\r\n<h3><strong>HIGHLIGHTS</strong></h3>\r\n\r\n<ul>\r\n <li>Visit Colorful Village Tourism Object</li>\r\n <li>Visit Dino Park / The Legend Star</li>\r\n <li>Mount Penanjakan by Jeep</li>\r\n <li>Mount Bromo Crater</li>\r\n <li>Padang Savana or Bukit Teletubbies</li>\r\n <li>Pasir Berbisik</li>\r\n <li>Museum Angkut</li>\r\n</ul>\r\n', 1, 1, 1, 20, 3290000, '2020-12-16 17:22:39', '2020-12-16 11:22:39'),
(30, 'A014', 'Jogjakarta Golf Tours', 'Yogyakarta, Yogyakarta City, Special Region of Yogyakarta, Indonesia', 'item-160520-5325c264ac.jpg', NULL, NULL, '3 Days', 'Unlimited', 'English', 'Yogyakarta (some people call it Jogja, Jogjakarta, or Yogya) is a city with outstanding historical and cultural heritage. ', 1, 1, 4, 14, 4710000, '2021-01-02 10:23:27', NULL),
(31, 'A015', 'Ramayana Ballet Performance Entrance Ticket (Performance Only)', 'Ramayana Ballet Purawisata, Jalan Brigjen Katamso, Keparakan, Yogyakarta City, Special Region of Yogyakarta, Indonesia', 'item-160520-30a8212bde.jpg', NULL, NULL, '1 hours 30 minutes', 'Unlimited', 'English', 'Mandira Baruga was formerly known as PURAWISATA, Travel Destinations that are well known and visited by millions of tourists from various foreign countries', 3, 1, 5, 10, 250000, '2020-11-27 08:50:49', '2020-05-18 00:53:53'),
(32, 'A016', 'Cycling and Rafting with Bahama', ' Ayung River Rafting Ubud Bali, Jalan Raya Ubud, Ubud, Gianyar, Bali, Indonesia', 'item-160520-ef08b3fcde.jpg', NULL, NULL, '5 Hours', 'Unlimited', 'English', 'Bahama rafting adventure located in the Ayung River which is one of the best selected adventure companies in Bali', 1, 2, 5, 20, 550000, '2020-11-27 08:50:52', NULL),
(33, 'A017', 'Taman Sari Buwana – Balinese Traditional Farming (Village Life & Traditional farming)', ' Taman Sari Buwana - Balinese Traditional Farming, Tunjuk, Tabanan Regency, Bali, Indonesia', 'item-160520-70b527dfeb.jpg', NULL, NULL, ' 2,5 hours - 3 hours', 'Unlimited', 'English', 'Taman Sari Buwana is a semi-social activity which is developed related to sustainable tourism concept', 1, 2, 5, 15, 540000, '2020-11-27 08:51:10', NULL),
(34, 'A018', 'Bali Treetop Adventure Park – Treetop Activity (Foreigners Only)', ' Bali Treetop Adventure Park, Candikuning, Tabanan Regency, Bali, Indonesia', 'item-160520-744ce0b33b.jpg', NULL, NULL, ' 2 hours 30 minutes (approx.)', 'Unlimited', 'English', 'Bali Treetop Adventure Park is a fun activity set in an open air environment for group and family in Indonesia.', 1, 2, 5, 15, 345000, '2020-11-27 08:51:14', NULL),
(35, 'A019', '3 Points Snorkeling Package with Bali Funtasea', ' Nusa Penida, Klungkung Regency, Bali, Indonesia', 'item-160520-2b0c8d0f0d.jpg', NULL, NULL, '8 Hours', 'Unlimited', 'English', 'Bali Funtasea has varieties of day cruises and land tours in Nusa Penida and Nusa Lembongan Island. ', 4, 2, 5, 15, 630000, '2020-11-27 08:51:17', NULL),
(36, 'A020', 'Exotic Sasak Daily Tour', ' Rambitan village, Rembitan, Central Lombok Regency, West Nusa Tenggara, Indonesia', 'item-160520-7743b0ecc1.jpg', NULL, NULL, '8 Hours', 'Unlimited', 'English', 'Discover the exotic of Lombok by visiting some villages with its unique culture. Firstly, visit Banyumelek village', 8, 3, 8, 15, 900000, '2020-11-27 08:51:31', NULL),
(37, 'A021', 'West Nusa Tenggara City Tour', ' Mataram City, West Nusa Tenggara, Indonesia', 'item-160520-2ae1fe8586.jpg', NULL, NULL, '8 Hours', 'Unlimited', 'English', 'Your trip starts with visiting the Islamic Center. Located in Mataram, the Islamic Center is a Mosque with a magnificent and artistic design.', 8, 3, 4, 10, 875000, '2020-11-27 08:51:53', NULL),
(38, 'A022', 'Lombok Land Cruise', ' Lombok Island, West Nusa Tenggara, Indonesia', 'item-160520-2a9352dc46.jpg', NULL, NULL, 'Full Day', 'Unlimited', 'English', 'Lombok land cruise will start by picking up and meeting services at your hotel, directly drive to Malimbu Hill to see the scenic view of Lombok Coast', 1, 3, 8, 15, 1480000, '2020-11-27 08:51:58', NULL),
(39, 'A023', 'Gili 3 Island Snorkeling', ' Gili Islands, Gili Indah, North Lombok Regency, West Nusa Tenggara, Indonesia', 'item-160520-7eb17c3a3a.jpg', NULL, NULL, '12 Hours', 'Unlimited', 'English', 'You’ll enjoy snorkeling at the best snorkeling points of Gili Trawangan, Gili Meno and Gili Air. Specifically designed to see all three Island in one day.', 4, 3, 8, 20, 1100000, '2020-11-27 08:52:10', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_type`
--

CREATE TABLE `p_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL,
  `status` enum('E','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_type`
--

INSERT INTO `p_type` (`type_id`, `name`, `created`, `updated`, `status`) VALUES
(1, 'Daily Tour', '2020-12-05 02:54:18', '2020-12-04 20:54:18', 'E'),
(2, 'Family Tour', '2020-05-04 05:42:42', NULL, 'E'),
(3, 'Education', '2020-11-27 08:07:35', '2020-11-27 02:07:35', 'E'),
(4, 'Snorkeling', '2020-11-27 08:07:44', '2020-11-27 02:07:44', 'E'),
(5, 'Scuba Diving', '2020-05-04 05:51:57', NULL, 'E'),
(6, 'City Tour', '2020-05-04 05:52:28', NULL, 'E'),
(7, 'History Tour', '2020-05-04 05:53:47', NULL, 'E'),
(8, 'Cultural Tour', '2020-11-27 08:07:51', '2020-11-27 02:07:51', 'E'),
(9, 'Adventure Tour', '2020-11-27 08:07:59', '2020-11-27 02:07:59', 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('E','D') NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `status`, `created`, `updated`) VALUES
(1, 'Mount Bromo Tours', 'E', '2020-05-07 00:00:00', '2020-12-16 19:20:26'),
(2, 'Banyuwangi', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(3, 'Malang City', 'E', '2020-05-07 00:00:00', '2020-11-27 02:58:38'),
(4, 'Yogyakarta', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(5, 'Bali Island Tour', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(6, 'Nusa Penida Tour', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(7, 'Nusa Lembongan Tour', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(8, 'Lombok Island  Tour', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(9, 'Mount Rinjani Trekking', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(10, 'Gili Islands Tour', 'E', '2020-05-07 00:00:00', '0000-00-00 00:00:00'),
(11, 'Batu', 'E', '2020-11-25 13:48:17', '2020-12-04 21:38:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(225) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `phone`, `address`, `description`, `created`, `updated`) VALUES
(1, 'Agen Tour Songgon', '081336914904', 'Songgon, Banyuwangi', 'Agen Rumahan', '2020-05-04 05:34:54', NULL),
(2, 'Miftahul Huda', '081358588519', 'Purwoharjo, Banyuwangi', 'Supliyer ke 2', '2020-05-04 05:35:30', NULL),
(3, 'Tour Fun', '087755635625', 'Ambulu, Jember', 'Hanya melayani tour  pada Hari libur', '2020-05-04 05:36:00', NULL),
(4, 'Septianda Reza Maulana', '082257125415', ' Perumahan Jati Asri Blok A3, Kebon Agung, Kraksaan-Probolinggo', 'Agen Perjalanan daerah probolinggo saja', '2020-05-04 05:36:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_cart`
--

CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(10) NOT NULL,
  `discount_item` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_cart`
--

INSERT INTO `t_cart` (`cart_id`, `item_id`, `price`, `qty`, `discount_item`, `total`, `date`, `user_id`) VALUES
(15, 25, 1098000, 1, 0, 1098000, '2021-01-22', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `final_price` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `remaining`, `note`, `date`, `user_id`, `created`) VALUES
(1, 'MP2005150001', NULL, 3800000, 0, 3800000, 3800000, 0, 'lunas', '2020-05-15', 1, '2020-05-15 06:36:13'),
(2, 'MP2007030001', NULL, 2775000, 0, 2775000, 2775000, 0, '', '2020-07-03', 1, '2020-07-03 21:56:45'),
(3, 'MP2011230001', NULL, 1900000, 0, 1900000, 1900000, 0, 'lunas', '2020-11-23', 1, '2020-11-23 13:19:42'),
(4, 'MP2011230002', 2, 1000000, 0, 1000000, 1000000, 0, 'cek customer id', '2020-11-23', 1, '2020-11-23 13:56:15'),
(5, '', 33, 1935000, 0, 1935000, 1935000, 0, '', '0000-00-00', 12, '2021-01-02 10:03:40'),
(6, '', 33, 296799000, 0, 296799000, 296799000, 0, '', '0000-00-00', 12, '2021-01-02 10:03:40'),
(7, '', 33, 2775000, 0, 2775000, 2775000, 0, '', '0000-00-00', 12, '2021-01-02 10:03:41'),
(8, '', 33, 5805000, 0, 5805000, 5805000, 0, '', '0000-00-00', 12, '2021-01-02 10:03:41'),
(9, '', 34, 1935000, 0, 1935000, 1935000, 0, '', '0000-00-00', 12, '2021-01-02 10:04:51'),
(10, '', 34, 296799000, 0, 296799000, 296799000, 0, '', '0000-00-00', 12, '2021-01-02 10:04:51'),
(11, '', 34, 2775000, 0, 2775000, 2775000, 0, '', '0000-00-00', 12, '2021-01-02 10:04:51'),
(12, '', 34, 5805000, 0, 5805000, 5805000, 0, '', '0000-00-00', 12, '2021-01-02 10:04:52'),
(13, '', 35, 1935000, 0, 1935000, 1935000, 0, '', '0000-00-00', 12, '2021-01-02 10:08:04'),
(14, '', 36, 1935000, 0, 1935000, 1935000, 0, '', '0000-00-00', 12, '2021-01-02 10:12:26'),
(15, '', 36, 296799000, 0, 296799000, 296799000, 0, '', '0000-00-00', 12, '2021-01-02 10:12:26'),
(16, '', 36, 2775000, 0, 2775000, 2775000, 0, '', '0000-00-00', 12, '2021-01-02 10:12:26'),
(17, '', 36, 5805000, 0, 5805000, 5805000, 0, '', '0000-00-00', 12, '2021-01-02 10:12:27'),
(18, 'MP2101020001', 38, 4710000, 0, 4710000, 4710000, 0, '', '0000-00-00', 12, '2021-01-02 10:23:27'),
(19, 'MP2101020002', 39, 1935000, 0, 1935000, 1935000, 0, '', '0000-00-00', 25, '2021-01-02 11:02:47'),
(20, 'MP2101020003', 39, 1098000, 0, 1098000, 1098000, 0, '', '0000-00-00', 25, '2021-01-02 11:02:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale_detail`
--

CREATE TABLE `t_sale_detail` (
  `detail_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `discount_item` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale_detail`
--

INSERT INTO `t_sale_detail` (`detail_id`, `sale_id`, `item_id`, `price`, `qty`, `discount_item`, `total`) VALUES
(1, 1, 8, 2000000, 2, 0, 3800000),
(2, 2, 28, 2775000, 1, 0, 2775000),
(3, 3, 21, 950000, 2, 0, 1900000),
(4, 4, 15, 1000000, 1, 0, 1000000),
(5, 9, 27, 1935000, 1, 0, 1935000),
(6, 10, 24, 2413000, 123, 0, 296799000),
(7, 11, 28, 2775000, 1, 0, 2775000),
(8, 12, 27, 1935000, 3, 0, 5805000),
(9, 13, 27, 1935000, 1, 0, 1935000),
(10, 14, 27, 1935000, 1, 0, 1935000),
(11, 15, 24, 2413000, 123, 0, 296799000),
(12, 16, 28, 2775000, 1, 0, 2775000),
(13, 17, 27, 1935000, 3, 0, 5805000),
(14, 18, 30, 4710000, 1, 0, 4710000),
(15, 19, 15, 1935000, 1, 0, 1935000),
(16, 20, 25, 1098000, 1, 0, 1098000);

--
-- Trigger `t_sale_detail`
--
DELIMITER $$
CREATE TRIGGER `stock_min` AFTER INSERT ON `t_sale_detail` FOR EACH ROW BEGIN
	UPDATE p_item SET stock = stock - NEW.qty
    WHERE item_id = NEW.item_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(225) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `supplier_id`, `qty`, `date`, `created`, `user_id`) VALUES
(1, 8, 'in', 'tambah stock', NULL, 6, '2020-05-15', '2020-05-15 05:59:13', 1),
(2, 15, 'in', 'add stock from irvan', 1, 15, '2020-05-15', '2020-05-15 05:59:32', 1),
(3, 19, 'in', 'irvan', 3, 12, '2020-05-15', '2020-05-15 06:02:10', 1),
(5, 8, 'in', 'tambah stock', 1, 8, '2020-05-15', '2020-05-15 06:03:02', 1),
(6, 21, 'in', 'tambah stock', 4, 15, '2020-05-15', '2020-05-15 06:03:28', 1),
(7, 24, 'in', 'tambah stock', 2, 6, '2020-05-15', '2020-05-15 06:03:48', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(225) DEFAULT NULL,
  `level` enum('1','2','3') NOT NULL COMMENT '	1:admin, \r\n2:kasir,\r\n3:user',
  `status` enum('Y','N') NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `gender`, `email`, `password`, `address`, `level`, `status`, `avatar`, `token`, `created`, `updated`) VALUES
(1, 'M. Irvan Alfi Hidayat', 'Super Admin', 'L', 'irvanhidayat0623@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Banyuwangi', '1', 'Y', 'user-131120-0799900a6d.jpg', 'nxRCn6mjgq4h5eLeW1VMI74sGl6dhhs0udSrbVayoKZiODzDxArBE8JTpucffCw7', '2020-12-19 20:24:15', NULL),
(2, 'Septianda Reza Maulana', 'septiandareza', 'L', 'septiandareza07@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Perumahan Jati Asri Blok A3', '1', 'Y', '2.jpg', '', '2020-06-21 22:03:35', NULL),
(3, 'Mirza Zarqani Rayhan', 'mirza', 'L', 'mirza@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Malang', '2', 'Y', 'user-131120-67e6ce3384.jpg', '', '2020-11-13 10:05:12', NULL),
(5, 'Sifa Safira', 'safira', 'P', 'safira14@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Malang Jawa Timur', '2', 'Y', 'user-151120-49f57a7e07.jpg', '', '2020-11-15 18:31:03', NULL),
(6, 'Febri Alia Anggreini', 'febri', 'P', 'febrialia_anggreini@rocketmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Probolinggo', '2', 'N', '5.jpg', '', '2020-06-21 22:03:54', NULL),
(7, 'alan perdana', 'alanWalker', 'L', 'alan@gmail.com', '12345678', 'mojokerto Jawa Timur', '2', 'N', 'user-010720-1bf9f2796b.JPG', '', '2020-07-01 20:50:17', NULL),
(8, 'Wildanul Irham', 'danu123', 'L', 'wildanulirham26@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'padang, singojuruh, banyuwangi', '2', 'N', 'user-131120-4356aa0c67.jpg', '', '2020-11-15 18:29:24', NULL),
(9, 'Nida Futwiyatul Fatma', 'NidaFutwi', 'L', 'Nida123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nghjfjgkgh', '2', 'Y', 'user-151120-80b7ca2869.jpg', '', '2020-11-15 18:30:13', NULL),
(10, 'Siti Hajar', 'hajar', 'L', 'sitihajar03@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'lkdfg;lkdf;lgk;d', '2', 'N', '', '', '2020-11-06 08:55:49', NULL),
(11, 'Dwike Ikromi', 'dwike123', 'P', 'dwike@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Banyuwangi', '1', 'Y', 'user-201120-bb20d3bea5.jpg', '', '2020-11-20 11:10:23', NULL),
(25, 'halow', 'halow', 'L', 'dwikeikromi1205@gmail.com', '7ab515d12bd2cf431745511ac4ee13fed15ab578', 'banyuwangi\r\njl. mahakam 1', '3', 'Y', '', 'vupDtklOrhJb3ygd7tOXETxLaC9SBGU1M5WVKx2N4cD8QF0oAke9Im4hC32zzjZT', '2021-01-02 10:58:26', NULL),
(26, 'mail', 'mail123', 'L', 'dwikeikromi1205@gmail.com', '417a15001062aa44db0274cac438dfab85081179', 'banyuwangi\r\njl. mahakam 1', '2', 'N', '', 'LW2q83IunMlfQavTYzBh1xEd129mBpKl9kENMyszN0trG7WUOo6icjZJf5AnSXHA', '2021-01-02 11:36:39', NULL),
(27, 'halo', 'popipo', 'L', 'dwikeikromi1205@gmail.com', '7ab515d12bd2cf431745511ac4ee13fed15ab578', 'banyuwangi\r\njl. mahakam 1', '3', 'Y', '', 'ObKb78FNcinGBsJ0y6QpSmIdqHa7eeZogc8toYfA9h2qExrt1z4a4lukFvrDjKLU', '2021-01-02 11:38:14', NULL),
(28, 'Dwike Ikromi', 'lolaa', 'L', 'mastercracker0220@protonmail.com', '7ab515d12bd2cf431745511ac4ee13fed15ab578', 'banyuwangi\r\njl. mahakam 1', '3', 'Y', '', 'lcYCJs9dXNWlTqeHbOkfyXStbeIZvPoV5xW8YBx9vZjIkz7Qnpwyu4FLUHzaOQTG', '2021-01-02 11:41:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `armada`
--
ALTER TABLE `armada`
  ADD PRIMARY KEY (`armada_id`) USING BTREE;

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `FK_p_item_p_item` (`type_id`),
  ADD KEY `FK_p_item_p_category` (`category_id`),
  ADD KEY `FK_p_item_p_unit` (`unit_id`);

--
-- Indeks untuk tabel `p_type`
--
ALTER TABLE `p_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indeks untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indeks untuk tabel `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `FK_t_sale_detail_t_sale` (`sale_id`);

--
-- Indeks untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `armada`
--
ALTER TABLE `armada`
  MODIFY `armada_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `p_type`
--
ALTER TABLE `p_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_cart`
--
ALTER TABLE `t_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD CONSTRAINT `FK_p_item_p_category` FOREIGN KEY (`category_id`) REFERENCES `p_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_p_item_p_item` FOREIGN KEY (`type_id`) REFERENCES `p_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_p_item_p_unit` FOREIGN KEY (`unit_id`) REFERENCES `p_unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_cart`
--
ALTER TABLE `t_cart`
  ADD CONSTRAINT `t_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD CONSTRAINT `FK_t_sale_detail_t_sale` FOREIGN KEY (`sale_id`) REFERENCES `t_sale` (`sale_id`),
  ADD CONSTRAINT `t_sale_detail_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`);

--
-- Ketidakleluasaan untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD CONSTRAINT `t_stock_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `p_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_stock_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
