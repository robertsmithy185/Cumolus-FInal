-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 12:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `code_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`code_id`, `username`, `code`, `name`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'agus', 'CodePost/52s5s3RtYCXbRNbUXEGV5GSvcNokPrqRIQcU8aHF.zip', 'Tugas AI Robert', 'ini adalah tugas AI menggunakan logika Fuzzy', '2024-06-21 04:38:24', '2024-06-21 04:55:21'),
(3, 'Robert Smith Y', 'CodePost/SqxB6FCHKGOpjCejr7nyrUKKpJ3rxaGwthLnyEIC.zip', 'Kalkulator sederhana', 'Ini adalah kalkulator sederhana dengan menggunakan HTML , CSS ,  JavaScript dan PHP', '2024-06-21 05:10:37', '2024-06-21 05:10:37'),
(4, 'Robert Smith Y', 'CodePost/RM8jNL9AVsMyQ7eUFbiJQXUSp8ze3L168aAAlUDy.zip', 'Proyek HTML', 'ini adalah Proyek HTML pertama pada semester 4', '2024-06-21 05:12:33', '2024-06-21 05:12:33'),
(5, 'agus', 'CodePost/wG88ubrudIVUQrrTgQMg7DqaGXPQLUojKg7OoirM.zip', 'Latihan JQuery', 'ini adalah latihan JQuery untuk tugas Pemrograman Web', '2024-06-21 05:16:01', '2024-06-21 05:16:01'),
(6, 'agus', 'CodePost/HEiWiseI4eXnsYkKcpoQlxr4g3V4PNviwQTRAkdp.zip', 'Praktikum 8 Pewaris', 'ini adalah praktikum Semester 4 di ITH', '2024-06-21 05:16:57', '2024-06-21 05:16:57'),
(7, 'Valen', 'CodePost/Q0kbN2b5Um52eEUhg0RvQMzH8bm1g4sqQOg87Ka4.zip', 'Praktikum Ai', 'Praktikum Ai sebagai tugas mata kuliah kecerdasan buatan', '2024-06-22 09:20:57', '2024-06-22 09:20:57'),
(8, 'Robert Smith Y', 'CodePost/STHW1uFGV7lACUOL5bHzVdKL0u2KdpDUEaehYFtS.zip', 'Tugas AI Robert', 'ini adalh tugas AI', '2024-06-24 16:09:58', '2024-06-24 16:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `image_id`, `username`, `comment`, `created_at`, `updated_at`) VALUES
(13, 6, 'Robert Smith Y', 'pixar yang menarik', '2024-06-22 07:59:54', '2024-06-22 07:59:54'),
(14, 6, 'Valen', 'gambar yang menarik', '2024-06-22 09:18:23', '2024-06-22 09:18:23'),
(15, 17, 'Robert Smith Y', 'Desain UI yang menarik', '2024-06-24 03:52:13', '2024-06-24 03:52:13'),
(16, 19, 'Robert Smith Y', 'Gmbar yang menrik', '2024-06-24 16:06:41', '2024-06-24 16:06:41'),
(18, 6, 'Robert Smith Y', 'Seperi ini menarik', '2024-06-27 05:57:55', '2024-06-27 05:57:55'),
(19, 17, 'Robert Smith Y', 'ini desain yang menarik', '2024-06-27 06:04:42', '2024-06-27 06:04:42'),
(20, 17, 'Robert Smith Y', 'ini adalah koment', '2024-06-27 06:08:01', '2024-06-27 06:08:01'),
(21, 17, 'Robert Smith Y', 'UI yng menrik', '2024-06-27 06:30:14', '2024-06-27 06:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `comments_codes`
--

CREATE TABLE `comments_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments_codes`
--

INSERT INTO `comments_codes` (`id`, `code_id`, `username`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 'Robert Smith Y', 'Tugas yang lengkap', '2024-06-22 08:15:37', '2024-06-22 08:15:37'),
(2, 5, 'Robert Smith Y', 'tugas yang menarik', '2024-06-23 16:27:53', '2024-06-23 16:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments_prompts`
--

CREATE TABLE `comments_prompts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prompt_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments_prompts`
--

INSERT INTO `comments_prompts` (`id`, `prompt_id`, `username`, `comment`, `created_at`, `updated_at`) VALUES
(6, 4, 'Robert Smith Y', 'ini udh bagus', '2024-06-22 07:55:58', '2024-06-22 07:55:58'),
(7, 4, 'Robert Smith Y', 'ini sudah bagus?', '2024-06-22 07:56:14', '2024-06-22 07:56:14'),
(8, 3, 'Robert Smith Y', 'ini lumayan', '2024-06-22 07:59:20', '2024-06-22 07:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `Deskripsi` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `username`, `image`, `name`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(6, 'agus', 'ImagePost/ips5F2KOfMMz4KrSBaNcXVWKnzRkoKBXhxqAr1cy.png', 'pixel of Astronot at Sky', 'In the vast expanse of the digital cosmos, a lone pixelated astronaut drifts gracefully against the backdrop of a celestial canvas. Each pixel meticulously placed, forming the outline of a space explorer clad in a vintage spacesuit, reminiscent of early space missions.\r\n\r\nThe sky above is a gradient of deep cosmic hues—midnight blues fading into velvety purples, adorned with pinpricks of distant stars twinkling in the pixelated universe. A faint nebula swirls in the background, its ethereal colors blending seamlessly with the digital atmosphere.', '2024-06-19 05:22:47', '2024-06-19 05:22:47'),
(17, 'agus', 'ImagePost/7AQplyatHEccYTGmpHh93JOjLOIikJnJp71fXXTq.jpg', 'AI Haitham UI', 'Website Alhaitham didedikasikan untuk karakter Alhaitham dari game populer Genshin Impact. Situs ini dirancang untuk memberikan informasi lengkap tentang Alhaitham, termasuk build, panduan, cerita latar, fan art, dan video. Desain UI situs ini berfokus pada estetika visual yang menarik, navigasi yang mudah, dan konten yang informatif.', '2024-06-23 17:37:29', '2024-06-23 17:37:29'),
(18, 'agus', 'ImagePost/KDWCWJlcE0MGMPYkICStLDMX7hDEucr5RHGDdfzV.jpg', 'uwu Cat', 'Uwu Cat adalah sebuah website yang dirancang khusus untuk para pecinta kucing. Situs ini menawarkan berbagai konten menarik dan informatif tentang kucing, termasuk artikel perawatan, galeri foto dan video, komunitas pecinta kucing, dan toko online dengan berbagai produk untuk kucing. Desain UI situs ini berfokus pada tampilan yang lucu, menarik, dan ramah pengguna, dengan elemen-elemen visual yang imut dan navigasi yang mudah.', '2024-06-23 17:39:44', '2024-06-23 17:39:44'),
(19, 'Valen', 'ImagePost/olWX2Z4ARb0yeuvUn2LG3RN2ORxe9uPbhlLLzksK.jpg', 'Samurai Cat', 'Samurai Cat adalah sebuah koleksi unik yang memadukan keanggunan kucing dengan kehormatan dan kekuatan seorang samurai. Produk ini mencakup berbagai barang seperti patung, mainan, dan pernak-pernik yang menggabungkan estetika tradisional Jepang dengan kelucuan dan karisma kucing. Setiap item dalam koleksi ini dirancang dengan detail tinggi dan bahan berkualitas, menjadikannya pilihan sempurna untuk penggemar kucing dan budaya Jepang.', '2024-06-23 17:41:50', '2024-06-23 17:41:50'),
(20, 'Valen', 'ImagePost/Lc3w7zBCwTYoRveyWwLtWhKW3jSu65RkKuFjvS3y.jpg', 'Khodam Harimau Putih', 'Harimau Putih dalam konteks ini sering kali dianggap sebagai simbol kekuatan, keberanian, dan perlindungan. Harimau sendiri dikenal sebagai binatang yang kuat dan mempesona dalam banyak budaya, dan kehadiran versi \"putih\"nya menambah dimensi mistis dan keistimewaan.', '2024-06-23 17:42:36', '2024-06-23 17:42:36'),
(21, 'Valen', 'ImagePost/rxX6B3CDtIsVkKQHWzi4mmzUZyqWo58h9W7VEUTE.png', 'Bocchi “hump”', 'Dalam konteks desain karakter Bocchi \"hump\" dari anime \"Hitoribocchi no Marumaru Seikatsu\", \"hump\" mengacu pada ciri khas dari ekspresi wajah atau postur tubuh Bocchi saat menghadapi situasi-situasi sosial yang menantang bagi dirinya.', '2024-06-23 17:45:15', '2024-06-23 17:45:15'),
(22, 'Valen', 'ImagePost/jTi0dpgo02fWsnAZaoF43gc89vpTGJgUIDEwfraD.jpg', 'Desain Webinar', 'Sebuah desain webinar yang efektif dan menarik mencakup tema visual yang konsisten dengan palet warna harmonis dan font yang mudah dibaca, tata letak yang terstruktur dengan judul, pembicara, dan daftar isi yang jelas, serta penggunaan grafik dan gambar yang relevan untuk memperkuat poin-poin presentasi. Media interaktif seperti polling dan sesi tanya jawab langsung meningkatkan keterlibatan peserta, sementara kualitas audio dan video yang baik memastikan transmisi yang lancar. Navigasi yang mudah dan responsif untuk berbagai perangkat serta evaluasi feedback untuk peningkatan berkelanjutan menjamin pengalaman webinar yang produktif dan menyenangkan bagi semua peserta.', '2024-06-23 17:46:33', '2024-06-23 17:46:33'),
(26, 'Michael Y', 'ImagePost/ykflZGwJRKz3RKCi4J2hLOE52niKEnQ3A3ucXpLw.jpg', 'Desain gunung Fuji', 'ini adalh desain UI', '2024-06-27 04:13:33', '2024-06-27 04:13:33'),
(29, 'agus', 'ImagePost/SnViPeB3sVBe8thRoUeDJ30NQGSjtcNk6Mm8mhMd.jpg', 'Desain UI', 'sdsdwdsnds', '2024-06-27 22:48:51', '2024-06-27 22:48:51'),
(30, 'agus', 'ImagePost/EHSmsomCyW3TTj0Lhs63iRU128kAqLJt22jFYA8a.jpg', 'Desain UI', 'onoki', '2024-06-27 22:50:36', '2024-06-27 22:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_16_145946_image', 1),
(6, '2024_06_19_082523_create_prompts_table', 1),
(7, '2024_06_19_160532_code', 2),
(8, '2024_06_19_161204_code', 3),
(9, '2024_06_21_133919_add_profile_fields_to_users_table', 4),
(10, '2024_06_22_140216_create_comments_table', 5),
(11, '2024_06_22_141151_create_comment_prompts_table', 6),
(12, '2024_06_22_151310_create_comments_prompts_table', 7),
(13, '2024_06_22_160046_create_comments_codes_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prompts`
--

CREATE TABLE `prompts` (
  `prompt_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `prompt` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prompts`
--

INSERT INTO `prompts` (`prompt_id`, `username`, `prompt`, `name`, `Deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'agus', 'Gambarkan momen unik saat kucing tidur dengan pose dan ekspresi yang menggemaskan atau menggelitik hati.', 'Melihat Dunia dari Perspektif Kucing', 'Di pagi yang cerah, seorang kucing hitam yang bernama Luna duduk di ambang jendela, memandangi taman yang riuh dengan kehidupan. Mata kuningnya yang tajam memperhatikan burung-burung yang berlarian di atas rerumputan dan daun-daun yang berguguran dari pohon. Luna, dengan lincahnya, memutuskan untuk mengeksplorasi taman di bawah dengan langkah ringan dan elegan. Dalam perjalanannya, dia bertemu dengan seekor tupai yang lucu dan kecil yang sedang mencari makanan. Luna, dengan rasa ingin tahunya yang besar, mengintip dari balik semak-semak dengan tubuhnya yang fleksibel dan mata yang selalu waspada. Di balik tupai itu, ia memperlihatkan giginya. Tangkaplah momen ini dengan kamera Anda dan perlihatkan keindahan dari kucing dan perjalanan mengamati tupai yang menangkap dengan mata tajam', '2024-06-19 04:55:54', '2024-06-19 04:55:54'),
(4, 'agus', 'Gambarkan pemandangan yang dipenuhi cahaya matahari yang hangat dan mengagumkan, memancarkan keindahan alam yang terbuka dan memikat.', 'Cahaya Matahari yang Menyinari Pemandangan', 'ini adalah Cahaya Matahari yang Menyinari Pemandangan', '2024-06-19 05:05:06', '2024-06-19 05:05:06'),
(5, 'agus', 'Gambar sebuah gunung yang tinggi dan tertutup salju, dengan langit biru cerah dan beberapa awan putih. Di kaki gunung, terdapat hutan pinus yang tertutup salju.', 'Pemandangan Gunung di Musim Dingin', 'Prompt ini menggambarkan sebuah pemandangan pegunungan di musim dingin. Gunung yang tinggi dan tertutup salju memberikan kesan keagungan dan kedamaian. Langit biru cerah dengan beberapa awan putih menambah kontras dan kedalaman visual, sementara hutan pinus yang tertutup salju di kaki gunung menambahkan elemen alami dan keseimbangan pada gambar.', '2024-06-19 05:25:38', '2024-06-19 05:25:38'),
(6, 'agus', 'Gambar matahari terbit di balik deretan pegunungan, dengan sinar matahari pertama yang menerangi puncak-puncak gunung dan kabut tipis yang menyelimuti lembah', 'Sunrise di Pegunungan', 'Prompt ini fokus pada momen indah matahari terbit di pegunungan. Sinar matahari pertama yang menerangi puncak-puncak gunung menciptakan efek dramatis dan memperkuat kesan kedamaian pagi hari. Kabut tipis yang menyelimuti lembah menambah suasana misterius dan memperkaya detail gambar.', '2024-06-19 05:26:07', '2024-06-19 05:26:07'),
(7, 'Robert Smith Y', 'Gambar jalanan kota yang ramai di malam hari, dengan lampu neon yang berwarna-warni, mobil-mobil yang berlalu-lalang, dan orang-orang berjalan di trotoar. Langit malam gelap dihiasi dengan lampu jalan yang terang.', 'Jalanan Kota di Malam Hari', 'Prompt ini menggambarkan suasana jalanan kota yang sibuk pada malam hari. Lampu neon yang berwarna-warni dan lampu jalan yang terang menciptakan suasana urban yang hidup. Mobil-mobil yang berlalu-lalang dan orang-orang yang berjalan menambah dinamika dan kesan kesibukan kota di malam hari.', '2024-06-19 05:34:41', '2024-06-19 05:34:41'),
(9, 'Robert Smith Y', 'Gambar langit senja dengan warna-warna jingga, merah, dan ungu yang berpadu harmonis. Siluet pepohonan dan bukit di kejauhan terlihat gelap, sementara matahari hampir tenggelam di cakrawala.', 'Langit Senja yang Indah', 'Prompt ini menggambarkan langit senja yang penuh warna dan dramatis. Warna-warna jingga, merah, dan ungu menciptakan suasana hangat dan menenangkan. Siluet pepohonan dan bukit menambah kontras dan kedalaman, sementara matahari yang hampir tenggelam menjadi fokus utama dalam gambar.', '2024-06-19 05:37:37', '2024-06-19 05:37:37'),
(10, 'Robert Smith Y', 'Gambar langit malam yang dipenuhi bintang-bintang terang, dengan galaksi Bima Sakti terlihat jelas membentang di tengah langit. Di bawahnya, terdapat sebuah desa kecil dengan rumah-rumah tradisional yang tersebar di antara ladang dan pepohonan. Cahaya lampu dari rumah-rumah memberikan kehangatan yang kontras dengan dinginnya malam. Di kejauhan, siluet gunung menambah kedalaman pada pemandangan.', 'Langit Malam Berbintang di Pedesaan', 'Prompt ini menggambarkan suasana malam di sebuah desa pedesaan yang tenang. Langit malam dipenuhi bintang-bintang terang, menciptakan suasana yang damai dan magis. Galaksi Bima Sakti yang terlihat jelas menambah keindahan dan keajaiban visual. Desa kecil dengan rumah-rumah tradisional memberikan kesan hangat dan nyaman, terutama dengan cahaya lampu yang bersinar dari jendela-jendela rumah. Ladang dan pepohonan di sekitar desa menambah elemen alami dan keseimbangan, sementara siluet gunung di kejauhan menambah kedalaman dan perspektif, membuat gambar ini lebih dramatis dan memikat.', '2024-06-19 05:40:04', '2024-06-19 05:40:04'),
(11, 'Robert Smith Y', 'Gambar langit malam yang dipenuhi bintang-bintang terang di atas hamparan sawah yang luas. Terasering sawah yang hijau terlihat samar dalam cahaya bulan purnama. Beberapa petani masih bekerja dengan lentera yang menyala, menciptakan titik-titik cahaya hangat di tengah kegelapan. Pohon kelapa tinggi dan beberapa rumah tradisional dengan atap jerami berada di pinggir sawah, siluetnya terlihat jelas di bawah sinar bintang.', 'Langit Malam Berbintang di Atas Sawah', 'Prompt ini menggambarkan suasana malam hari di area persawahan yang luas. Langit malam yang dipenuhi bintang-bintang terang memberikan kesan tenang dan magis. Cahaya bulan purnama menerangi terasering sawah yang hijau, menambah keindahan alami dan kesan misterius. Petani yang masih bekerja dengan lentera yang menyala menambah elemen kehidupan dan aktivitas di malam hari, serta menciptakan kontras antara cahaya hangat lentera dan dinginnya malam. Pohon kelapa dan rumah tradisional di pinggir sawah menambah detail dan keaslian lingkungan pedesaan, memberikan kedalaman dan keseimbangan pada gambar.', '2024-06-19 05:41:04', '2024-06-19 05:41:04'),
(12, 'Robert Smith Y', 'sebuah gunung yang indah dengan desain 8 bit', 'Gunung 8 Bit', 'ini adalah gunung dengan desain 8 bit', '2024-06-21 18:29:54', '2024-06-21 18:30:18'),
(14, 'Robert Smith Y', 'gu nung fuji dengan desain ART 8 bit', 'Desain gunung Fuji', 'ini adalah desain gunung fuji', '2024-06-24 16:08:52', '2024-06-24 16:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `name`, `deskripsi`, `foto`) VALUES
('admin', 'admin123@gmail.com', '$2y$10$G14VFzK/D8l/9.YoT.yWRepQ5iXe3WbAqHtsgicr/lvgONl4dnhgO', NULL, '2024-06-23 16:53:08', '2024-06-23 16:53:08', NULL, NULL, NULL),
('agus', 'agus123@gmail.com', '$2y$10$xUzrnqWui1ZXSqEhISxU9uVJOPC5uhEG0gUr6Qp8fzHfVEiEJMG0C', NULL, '2024-06-19 04:52:43', '2024-06-21 08:00:25', 'Agus', 'Saya adalah agus', 'fotoPost/0gFAQu8hq23L8HFvI0Ta3Kl2DaMVOTVj9wyurA6r.jpg'),
('Michael Y', 'Michael123@gmail.com', '$2y$10$AFpJwYhVFHN7/Wtpvaw/Te6jug2zy5hw6SuzpSe2beiMhoxtWQAKq', NULL, '2024-06-27 04:12:58', '2024-06-27 04:12:58', NULL, NULL, NULL),
('Robert Smith Y', 'robertsmithy185@gmail.com', '$2y$10$AUrk48vBKL.urjjoCBx94.sGB.LJ2Asax8GJOBP9Ok/ofbYsve8uq', NULL, '2024-06-19 01:05:33', '2024-06-24 16:06:10', 'Robert', 'Saya adalah mahasiswa ITH', 'fotoPost/l4DquWgTpa6qyrVRhn5JOuAcKfTJZy9NeWqTrsvo.png'),
('Valen', 'Valen@gmail.com', '$2y$10$kLgqCJ7D16zwzMVT9nmsQeYI06bGue5PQKQo0/7xI./HSe4oJlueK', NULL, '2024-06-22 09:14:33', '2024-06-22 09:17:49', 'Valent', 'Saya Adalah Valent', 'fotoPost/b8FBVlEtAk1lsmfeYUab6eLjgJrm6qfGamHS0n13.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`code_id`),
  ADD KEY `codes_username_foreign` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_username_foreign` (`username`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `comments_codes`
--
ALTER TABLE `comments_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_codes_username_foreign` (`username`),
  ADD KEY `comments_codes_code_id_foreign` (`code_id`);

--
-- Indexes for table `comments_prompts`
--
ALTER TABLE `comments_prompts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_prompts_username_foreign` (`username`),
  ADD KEY `comments_prompts_prompt_id_foreign` (`prompt_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `images_username_foreign` (`username`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prompts`
--
ALTER TABLE `prompts`
  ADD PRIMARY KEY (`prompt_id`),
  ADD KEY `prompts_username_foreign` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `code_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments_codes`
--
ALTER TABLE `comments_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments_prompts`
--
ALTER TABLE `comments_prompts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prompts`
--
ALTER TABLE `prompts`
  MODIFY `prompt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_id` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments_codes`
--
ALTER TABLE `comments_codes`
  ADD CONSTRAINT `comments_codes_code_id_foreign` FOREIGN KEY (`code_id`) REFERENCES `codes` (`code_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_codes_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `comments_prompts`
--
ALTER TABLE `comments_prompts`
  ADD CONSTRAINT `comments_prompts_prompt_id_foreign` FOREIGN KEY (`prompt_id`) REFERENCES `prompts` (`prompt_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_prompts_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prompts`
--
ALTER TABLE `prompts`
  ADD CONSTRAINT `prompts_username_foreign` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
