-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 03:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category`, `title`, `gambar`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'parenting', 'Parenting Islami : Pesan Rasullullah tentang Tata Cara Mendidik Anak', 'https://asianparent-assets-id.dexecure.net/wp-content/uploads/sites/24/2014/03/mendidik-anak.jpg', '<p>Buku kecil ini saya temukan saat menata kembali tumpukan buku yang terpaksa diungsikan di atas plafon rumah karena banjir kemarin. Buku ini cocok sekali sebagai pengetahuan cara mendidik anak menurut Islam.</p><p>Buku ini merupakan bonus dari sebuah buku dengan judul “<i>Cara Mengenal Allah dengan Cara yang Menyenangkan.”</i>Hmmm… terdengar bagus sekali sebagai panduan cara mendidik anak menurut Islam, bukan?</p><p>Ingat karena belum membacanya, saya menghentikan aktivitas beres-beres dan membaca sejenak buku mungil ini.&nbsp;Beberapa hal yang ada di dalamnya sudah biasa atau sering kita dengar.</p><p>Namun sebagai pengingat, izinkan saya berbagi tentang cara mendidik anak menurut Islam ini dengan Anda, pembaca theAsian Parent Indonesia.</p><p>&nbsp;</p><h4><strong>Pesan-pesan Rasullullah tentang tata cara mendidik anak menurut Islam</strong></h4><p>Sesuai dengan judulnya buku ini berisi tentang tata cara mendidik anak sesuai dengan sabda Rasullullah beserta butir-butir kutipan dari para Imam guna memperjelas sabda Nabi tersebut.</p><p>&nbsp;</p><h4><strong>Mengenalkan dan mendidik anak tentang Tauhid</strong></h4><p>Rasullullah SAW bersabda: <i>“Bukalah lidah anak-anak kalian pertama kali dengan kalimat “Lailaha-illaallah”. Dan saat mereka hendak meninggal dunia maka bacakanlah, “Lailaha-illallah”.</i></p><p><i>Sesungguhnya barangsiapa awal dan akhir pembicaraannya “Lailah-illallah”, kemudian ia hidup selama seribu tahun, maka dosa apa pun, tidak akan ditanyakan kepadanya.”</i> (sya’bul Iman, juz 6, hal. 398 dari Ibn abbas)</p><p>Berdasarkan Hadist Nabi di atas, maka, dalam kitab Al Amali hal.475, Imam Al Baqir dan Imam ash Shadiq ra berkata; tahapan untuk mengenalkan Allah kepada anak adalah:</p><p>1. Pada usia 3 tahun, ajarkan kepadanya kalimah Tauhid, “Laila ha illallah” sebanyak tujuh kali.<br>2. Pada usia 3 tahun 7 bulan, ajarkan kepadanya kalimah “Muhammad Rasullullah.”</p><p>&nbsp;</p><p>Masih dalam kitab yang sama, Imam al Baqir dan Imam ash Shadiq ra menerangkan bagaimana seharusnya kita mengenalkan dan mendidik anak tentang salat.</p><p>1. Setelah anak usia 5 tahun dan telah memahami arah, maka coba tanyakan mana bagian kanan dan kirinya. Lalu ajarkan padanya arah kiblat dan mulailah mengajaknya salat.</p><p>2. Pada usia tujuh tahun ajaklah ia untuk membasuh muka dan kedua telapak tangannya dan minta padanya untuk melakukan salat.</p><p>3. Tata cara berwudhu secara penuh boleh diajarkan pada usia 9 tahun. Kewajiban untuk melakukan salat serta pemberian hukuman bila meninggalkannya sudah dapat diterapkan pada usia ini.&nbsp;Pada usia ini anak biasanya sudah pandai memahami akan urutan, aturan dan tata tertib.</p><h4>&nbsp;</h4><h4><strong>Hak anak dalam pendidikan</strong></h4><p>Berkaitan dengan pendidikan agama, ada beberapa hal yang harus orang tua lakukan antara lain<br>1. Memberikan nama yang baik.<br>2. Diakikahkan dan dipotong rambutnya (akan lebih baik dilakukan pada hari ketujuh).<br>3. Ada hak anak yang tertambat pada ayahnya yaitu mendapat pengajaran budi pekerti yang luhur, menulis, dan latihan fisik yang menyehatkan badannya serta diwarisi harta yang halal.</p><p>&nbsp;</p><h4><strong>Tentang ibadah-ibadah dan amalan lainnya</strong></h4><p>Saat anak mendekati usia baligh, maka wajib bagi orang tua untuk mengenalkannya dengan puasa serta mewajibkan salat. Selain itu juga memerintahkan padanya untuk mencari ilmu, menghafal Al-Qur’an, dan jika tidak mampu maka perintahkan padanya untuk mencatat.</p><p><i>Subhanallah</i>, betapa indah tuntunan yang telah Nabi berikan untuk mendidik anak kita. Sebagai penutup berikut adalah penjelasan Imam Ali Zainal Abidin dalam kitab Risatul Huquq.</p><p><i>“Adapun hak anakmu adalah, ketahuilah bahwa ia berasal darimu. Dan segala kebaikan dan keburukannya di dunia, dinisbatkan kepadamu. Engkau bertanggung jawab untuk mendidiknya, membimbingnya menuju Allah dan membantunya untuk menaati perintah-Nya.”</i></p><p><i>“Maka, perlakukanlah anakmu sebagaimana perlakuan seseorang yang mengetahui bahwa andaikan ia berbuat baik pada anaknya, niscaya ia akan mendapatkan pahala dan andaikan ia berbuat buruk niscaya ia akan memperoleh hukuan.”</i> (Al Khislal, hal.568)</p><p>Demikian pesan Rasullullah terkait dengan pendidikan anak. Semoga bermanfaat ya, <i>Parents</i>.</p>', 'null', '2019-11-16 16:16:51', '2019-11-16 16:16:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
