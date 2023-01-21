-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2023 at 01:34 AM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mengkerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Teknik'),
(3, 'Perbankan'),
(4, 'Informatika'),
(5, 'Sipil'),
(6, 'Administrasi'),
(7, 'Boga'),
(8, 'Kelautan'),
(9, 'Perpajakan'),
(10, 'Manufaktur'),
(11, 'Marketing'),
(14, 'Human Resource'),
(15, 'Logistik'),
(16, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `form_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `category_id`, `type`, `name`, `company`, `description`, `form_link`) VALUES
(1, 2, 'Full-time', 'Server Dan Network Admin', 'PT Divatel Pratama', 'Job Highlights\r\nBPJS Kesehatan\r\nBPJS Ketenagakerjaan\r\nBekerja di lingkungan gedung perkantoran\r\nJob Description\r\nPT DIVATEL PRATAMA bergerak di bidang penyediaan cloud pbx, call center dan contact center cloud dan on-premise saat ini butuh tenaga sebagai Network dan Server Administrator.\r\n\r\nTanggung jawab yang diharapkan dapat memaintain server serta jaringan yang ada di perusahaan saat ini maupun client (1 atau 2 client), maupun mensetup ataupun mengkonfigurasi server maupun jaringan baru saat dibutuhkan. Dapat mengenal dan mempelajari jaringan maupun server yang sedang berjalan.\r\n\r\nSkill yang dibutuhkan antara lain:\r\n\r\nPaham Centos Server maupun Ubuntu Server dengan baik serta dapat menginstalasi, setup maupun konfigurasi server tersebut pada hardware HP maupun Dell.\r\nPaham dengan perintan- perintah Linux terutama Centos server dan Ubuntu server dengan baik.\r\nPaham dan dapat menginstalasi, setup dan konfigurasi Proxmox maupun Proxmox Cluster pada Centos Server maupun Ubuntu Server.\r\nPaham dan dapat mensetup serta konfigurasi Mikrotik maupun Pfsense router, baik dalam bentuk software maupun appliance.\r\nPaham dengan managed switch dengan baik.\r\nPaham Asterisk dengan skill menengah.\r\nPaham dan dapat mensetup jaringan baru maupun memodifikasi jaringan LAN/WAN existing.\r\nPaham dan dapat mensetup QOS pada suatu jaringan dengan managed switch.', 'https://www.jobstreet.co.id/en/job-search/job-vacancy.php'),
(2, 10, 'Full-time', 'QUALITY CONTROL AND INVENTORY STAFF', 'PT Cahaya Mode Abadi', 'Job Highlights\r\nLearn more about fashion\r\nJob Description\r\nQC & Inventory Staff\r\n\r\nTanggung Jawab Pekerjaan :\r\n\r\nMelakukan QC (noda, benang, ukuran) atas produk yang datang\r\nMengecek kesesuaian barang sebelum disimpan di gudang\r\nBertanggung jawab atas pengelolaan material di gudang baik secara aktual maupun administrasi\r\nBertanggung jawab memesan/membeli dan mengawasi akurasi inventory material produksi maupun operasional\r\nMenjaga gudang agar rapi, aman dan bersih\r\nKeahlian :\r\n\r\nMemiliki ketelitian yang baik\r\nMampu melakukan quality control\r\nKualifikasi :\r\n\r\nPendidikan SMA/SMK Sederajat\r\nUsia 18-25 tahun\r\nSudah vaksin booster\r\nBersedia kerja lembur kalau diperlukan\r\nRapi, teliti, rajin, jujur dan gesit', 'https://www.jobstreet.co.id/en/job-search/job-vacancy.php'),
(3, 14, 'Full-time', 'HR Administration', 'Margaria Group', 'Job Description\r\nUsia maksimum 30 tahun\r\nPendidikan minimal S1 (Psikologi, Manajemen, atau relevan)\r\nPengalaman Kerja Minimal 2 Tahun di bidang HRD\r\nMenguasai program komputer Microsoft Office (Excel, Word, Power point)\r\nMemahami BPJS Kesehatan dan Ketenagakerjaan\r\nMengetahui tentang Administrasi HRD \r\nMemiliki kemampuan komunikasi interpersonal yang baik dan problem solving\r\nDapat bekerja secara individu maupun dalam tim.\r\nTeliti, detail-oriented, analytical thinking dan menyenangi pekerjaan yang barhubungan dengan angka dan rapih dengan data.\r\nBerpengalaman dalam mengoperasikan applikasi HRIS Talenta by mekari (diutamakan)', 'https://www.jobstreet.co.id/en/job-search/job-vacancy.php'),
(4, 15, 'Part-time', 'Staff Logistik', 'PT Mitra Agung Tekindo', 'Job Description\r\nTanggung Jawab :\r\n\r\n-memiliki pengalaman tentang pergudangan\r\n\r\n-mengelola keluar masuk barang dan stok gudang.\r\n\r\n-membuat laporan surat jalan masuk dan keluar\r\n\r\n-memiliki pengalaman tentang pengiriman barang\r\n\r\n-berpengalaman dalam mengurus pengiriman invoice\r\n\r\n-mengerti computer Ms.Office\r\n\r\nKriteria :\r\n\r\n-usia max 35th\r\n\r\n-minimal D3\r\n\r\n-Memiliki SIM A & C\r\n\r\n-Pengalaman 2th\r\n\r\n-Jujur,Teliti,kerja keras, Sehat\r\n\r\n-domisili lebih disukai ditanggerang\r\n\r\n-siap kerja dalam waktu dekat\r\n\r\n-penempatan di daan mogot', 'https://myjobstreet-id.jobstreet.co.id/application/online-apply.php?AdvertisementSource=1&advertisement_id=4189889&fr=49&jobId=4188047&job_id=4188047&s=40&searchPath=%2Fen%2Fjob-search%2Fpart-time-jobs%2F&token=0~14c64a4f-f6fd-4daf-9d96-a8cd70f0212f&trackData=%7B%22ApplySource%22%3A7%7D'),
(5, 16, 'Part-time', 'STAFF FINANCE/KEUANGAN', '4SIST LAUNDRY', 'Job Description\r\nKami adalah perusahaan laundry yang ada didaerah Tebet,Jakarta Selatan.\r\n\r\nSaat ini kami sedang mencari kandidat dengan kriteria sbb :\r\n\r\n-Membantu mengurus pembukuan\r\n\r\n- Membuat laporan keuangan\r\n\r\n- Pria/Wanita\r\n\r\n- Usia max 35 tahun\r\n\r\n- Pengalaman minimal 1 tahun dibidang yang sama\r\n\r\n- Domisili Jakarta Selatan dan Jakarta Timur', 'https://id.jobstreetexpress.com/job/j-2099dbc65acc65d42242b22b3f21fcd0'),
(6, 2, 'Internship', 'Star Energy Geothermal Trainee Program 2023', 'PT Star Energy Geothermal Indonesia', 'Job Description\r\n•StarFAST: Trainee program for Accounting, Finance, Strategy & Planning Department\r\n\r\n•StarSHINE: Trainee program for Supply Chain Management, Human Capital and IT Department\r\n\r\nWe invite the best talents from reputable universities to join:\r\n\r\nThe Criteria as follows:\r\n\r\n•  Fresh graduate\r\n\r\n•  Minimum GPA 3.25\r\n\r\n•  Minimum TOEFL score 500\r\n\r\n•  Bachelor’s degree (S1) major in: \r\n\r\n    - Accounting \r\n\r\n    - Management\r\n\r\n    - Finance\r\n\r\n    - Industrial Engineering\r\n\r\n    - Information & Technology\r\n\r\n    - Mathematics\r\n\r\n    - Psychology \r\n\r\nPlease send your CV, legalized S1 certificate, and academic transcript in one file (.pdf) with maximum size of 1 MB by 25 February 2023.\r\n\r\nShall you encounter any technical issue, you can contact Jobstreet Customer Services.\r\n\r\nOnly shortlisted candidates will be contacted.\r\n\r\nwww.starenergygeothermal.co.id\r\n\r\nwww.linkedin.com/company/starenergygeothermal', 'https://myjobstreet-id.jobstreet.co.id/application/online-apply.php?AdvertisementSource=1&advertisement_id=4194092&fr=49&jobId=4192249&job_id=4192249&s=40&searchPath=%2Fen%2Fjob-search%2Finternship-jobs%2F&token=0~a9193d49-3962-4916-9209-c8806a8bae89&trackData=%7B%22ApplySource%22%3A7%7D');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(9, 'Admin', 'admin@mengkerja.com', '0192023a7bbd73250516f069df18b500', 1),
(10, 'Rizky Adi', 'rizky@gmail.com', '4297f44b13955235245b2497399d7a93', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_vacancy_category` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD CONSTRAINT `fk_job_vacancy_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
