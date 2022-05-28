-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 11 2022 г., 13:29
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blogsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Ea vel doloribus fugit dolor molestiae. Dignissimos qui et tempora vero. Perferendis esse asperiores voluptate. Autem numquam esse debitis consequatur dolores recusandae in. Consequatur ut officia minima quos dolorum assumenda facilis. Velit consequatur ut consequatur dolorem unde corrupti veniam ratione. Autem architecto hic magnam sit qui qui perspiciatis. Dolores aliquid officiis magni error. Ab eos tempora dolores magnam id eligendi. Voluptas dolorum ab aut voluptates neque harum. Vitae porro vel qui quae voluptatibus quo vel. Ut nihil corrupti dolorem. Qui praesentium dolorem deserunt veritatis. Porro eaque quas ut impedit laborum sapiente in. Cumque nobis quo veniam voluptatem. Natus est quidem explicabo eos. Unde praesentium est sit nesciunt. Inventore odit maiores perferendis eos rerum. A laborum a tempora recusandae. Eveniet libero excepturi debitis ducimus laudantium officiis repudiandae. Atque doloribus enim sunt omnis maiores doloribus quidem. Aliquam praesentium impedit numquam est corrupti corrupti. Iure dolor harum vel quia qui eos nihil. Facilis perferendis et sequi quas fugiat sunt dolore voluptatem. Beatae esse eos sunt dolorum earum aspernatur molestiae. A porro temporibus quo iste qui. Quia nihil et eaque laborum. Aut repellendus omnis fugiat. Recusandae et sed ut quidem asperiores consectetur recusandae quis. Ducimus placeat repellendus placeat nemo totam officia. Est quisquam delectus assumenda in omnis beatae sed.', '2022-03-07 07:36:01', '2022-03-07 07:36:01');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Sport', 'sport', '2022-03-02 07:01:42', '2022-03-02 07:01:42'),
(8, 'Bilim', 'bilim', '2022-03-02 07:01:48', '2022-03-02 07:01:48'),
(9, 'Medeniyet', 'medeniyet', '2022-03-02 07:01:58', '2022-03-02 07:01:58'),
(10, 'Tehnologiýa', 'tehnologiya', '2022-03-07 05:54:08', '2022-03-11 06:30:30');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `phone_number`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, '+99365097512', 'polat@gmail.com', 'Ashgabat, Turkmenistan', '2022-03-02 07:00:51', '2022-03-02 07:00:51');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_28_090610_create_sessions_table', 1),
(7, '2022_02_28_094412_category', 1),
(8, '2022_02_28_103423_contact', 1),
(9, '2022_02_28_111632_posts', 1),
(10, '2022_03_07_102036_about', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(48, 'Türkmenistanly sungat ussatlary zenanlar üçin döredijilik sowgadyny taýýarlady', 'turkmenistanly-sungat-ussatlary-zenanlar-ucin-doredijilik-sowgadyny-tayyarlady', '<p><strong><em>7-nji martda &yacute;urdumyzda giňden bellenil&yacute;&auml;n Halkara zenanlar g&uuml;n&uuml;niň &ouml;ň&uuml;syrasynda D&ouml;wlet medeni&yacute;et merkeziniň Mukamlar k&ouml;şg&uuml;nde sungat ussatlarynyň gatnaşmagynda Watanymyzyň gelin-gyzlaryna bagyşlanan konsert boldy.</em></strong></p>\r\n\r\n<p>8-nji mart ba&yacute;ramynda enelere, zenanlara, gelin-gyzlara hoşni&yacute;etli s&ouml;zler, m&auml;hirli gutlaglar a&yacute;dyl&yacute;ar, sungatyň aja&yacute;yp &ouml;w&uuml;şginleriniň &uuml;sti bilen ba&yacute;ram&ccedil;ylyk &ccedil;&auml;resi dabaralandyryl&yacute;ar.&nbsp;Gelin-gyzlaryň gatnaşmagynda ge&ccedil;irilen d&ouml;wlet derejesind&auml;ki ba&yacute;ram&ccedil;ylyk konserti zenanlara bildiril&yacute;&auml;n hormatyň a&yacute;dyň nyşanyna &ouml;wr&uuml;ldi. Konserte m&auml;hrem eneler, &ouml;n&uuml;m&ccedil;iligiň &ouml;ňdebaryjy zenanlary, jemgy&yacute;et&ccedil;ilik guramalarynyň işjeň agzalary we d&uuml;rli pudaklarda işle&yacute;&auml;n gelin-gyzlar, &ldquo;&Yacute;ylyň zenany&rdquo; di&yacute;en hormatly ada mynasyp bolanlar we be&yacute;leki d&ouml;redijilik g&ouml;zden ge&ccedil;irilişiniň &yacute;eňijileri,&nbsp;&ldquo;Ene m&auml;hri&rdquo; di&yacute;en hormatly ady alan k&ouml;p &ccedil;agaly eneler, &yacute;aşuly nesliň wekilleri we &yacute;aşlar gatnaşdylar.</p>\r\n\r\n<p>K&ouml;şg&uuml;ň sahnasynda guralan konsertde &yacute;urdumyzyň d&ouml;redijilik işg&auml;rleri, meşhur tans we folklor toparlary, bagşy-sazandalar, estrada a&yacute;dym&ccedil;ylary we &yacute;aşajyk artistler &ouml;zleriniň aja&yacute;yp &ccedil;ykyşlaryny, sungat eserlerini m&auml;hriban gelin-gyzlara, olaryň bagty&yacute;ar durmuşyna bagyşladylar. Sungat ussatlarynyň &yacute;erine &yacute;etirmeginde milli sazlar, nusgawy a&yacute;dymlar, zenan bagty&yacute;arlygyna, wepadarlygyna, ene s&ouml;&yacute;g&uuml;sine we yhlasyna bagyşlanan h&auml;zirki zaman hem-de halk a&yacute;dymlary &yacute;aňlanyp, olar h&auml;zirki d&ouml;w&uuml;rde topragyň bahar howasy bilen janlan&yacute;an pursatlarynda emele gelen g&ouml;zelligiň nusgasy hasaplanyl&yacute;an gelin-gyzlaryň waspyny &yacute;etir&yacute;&auml;n sena &ouml;wr&uuml;ldi.</p>', '33350404photo1.png', 8, 1, '2022-03-09 04:29:05', '2022-03-09 04:29:05'),
(50, 'ABŞ-da iň uzyn awtoulag abatlandy', 'abs-da-in-uzyn-awtoulag-abatlandy', '<p>&ldquo;American Dream&rdquo; atly aňrybaş limuziniň abatla&yacute;yş işleri tamamlandy, netijede d&uuml;n&yacute;&auml;de iň uzyn awtoulag &yacute;ene uzaldy we 1986-nji &yacute;yldaky &ouml;z rekordyny t&auml;zeledi di&yacute;lip, Ginnesiň rekordlar kitabynyň sa&yacute;tynda a&yacute;dyl&yacute;ar.</p>\r\n\r\n<p>Durky t&auml;zelenen awtoulagyň uzynlygy 30,54 metre &yacute;et&yacute;&auml;r, ol &ouml;ň 18,28 metrdi. Limuzin hereketde we ol &yacute;olag&ccedil;y gatnatmaga ta&yacute;&yacute;ar.</p>\r\n\r\n<p>Oňa 75 adam &yacute;erleşip bil&yacute;&auml;r, olar &uuml;&ccedil;in awtoulagyň i&ccedil;inde birn&auml;&ccedil;e telewizor, sowadyjy, telefon, howuz, jakuzi, wanna, ki&ccedil;i-golf &uuml;&ccedil;in me&yacute;dan&ccedil;a (şol bir wagtda diku&ccedil;ar gonmak &uuml;&ccedil;in &yacute;er) d&ouml;redilipdir.</p>\r\n\r\n<p>Bu limuzin &ldquo;Cadillac Eldorado&rdquo; ulaglarynyň ikisiniň ornunda d&ouml;redilip, iki hereketlendirijilidir. T&auml;ze e&yacute;esi ony h&auml;zirki g&ouml;rn&uuml;şe getirmek &uuml;&ccedil;in k&ouml;p pul we wagt sarp edipdir.</p>\r\n\r\n<p>Bu barada MIR24 &yacute;az&yacute;ar.</p>', '3904423761cb4dd6c0791222625d4b9d1c135444-8886194-300x335-2.jpg', 7, 1, '2022-03-11 06:23:24', '2022-03-11 06:23:24'),
(51, 'Azmun «Baýer» bilen Ýewroligadaky ilkinji duşuşygyna gatnaşdy, «Barselona» öz meýdanynda ýene ýeňip bilmedi we başga netijeler', 'azmun-bayer-bilen-yewroligadaky-ilkinji-dususygyna-gatnasdy-barselona-oz-meydanynda-yene-yenip-bilmedi-we-basga-netijeler', '<p>E&yacute;ranly t&uuml;rkmen Serdar Azmun &laquo;Ba&yacute;eriň&raquo; d&uuml;z&uuml;minde &Yacute;ewropa ligasyndaky ilkinji duşuşygyny ge&ccedil;irdi. Ol 1/8 finalyň &ccedil;&auml;ginde &laquo;Atalanta&raquo; bilen bolan duşuşygyň 85-nji minudynda o&yacute;na girdi. Duşuşyk 3:2 hasabynda &laquo;Atalantanyň&raquo; &yacute;eňşi bilen tamamlandy.</p>\r\n\r\n<p>Nemes toparyna ge&ccedil;en gyşda goşulan e&yacute;ranly t&uuml;rkmen duşuşykda 8 minut me&yacute;danda galdy. Ol &laquo;Ba&yacute;eriň&raquo; d&uuml;z&uuml;minde ilkinji duşuşygyny &laquo;Bawari&yacute;a&raquo; bilen bolan o&yacute;unda ge&ccedil;iripdi.</p>\r\n\r\n<p>&laquo;Kamp Nouda&raquo; &laquo;Barselona&raquo; bilen &laquo;Galatasara&yacute;yň&raquo; arasynda ge&ccedil;irilen duşuşyk ikitarapla&yacute;yn h&uuml;j&uuml;mlere ba&yacute; bolan hem bolsa, hasaby a&ccedil;yp, &ouml;ňe sa&yacute;lanmak toparlaryň hi&ccedil; birine-de e&yacute;gertmedi.</p>\r\n\r\n<p>&Yacute;ewropa ligasynyň 1/8 finalynda bolan &auml;hli duşuşyklaryň netijeleri bilen aşakda tanyş boluň:</p>\r\n\r\n<p><strong>&laquo;Portu&raquo; ― &laquo;Lion&raquo; ― 0:1.</strong></p>\r\n\r\n<p><strong>Gol:&nbsp;</strong>Lukas Paketa, 59.</p>\r\n\r\n<p><strong>&laquo;Real Betis&raquo; ― &laquo;A&yacute;ntraht Frankfurt&raquo; ― 1:2.</strong></p>\r\n\r\n<p><strong>Gollar:&nbsp;</strong>Nabil Fekir 30 ― Filip Kosti&ccedil; 14, Daidi Kamada 32.</p>\r\n\r\n<p><strong>&laquo;Sewil&yacute;a&raquo; ― &laquo;West Hem &Yacute;una&yacute;ted&raquo; ― 1:0.</strong></p>\r\n\r\n<p><strong>Gol:</strong>&nbsp;Mnir El-Haddadi 60.</p>\r\n\r\n<p><strong>&laquo;Le&yacute;psig&raquo; ― &laquo;Spartak Moskwa&raquo; (&yacute;atyryldy)</strong></p>\r\n\r\n<p><strong>&laquo;Barselona&raquo; ― &laquo;Galatasara&yacute;&raquo; ― 0:0.</strong></p>\r\n\r\n<p><strong>&laquo;Re&yacute;njers&raquo; ― &laquo;Srwena Zwezda&raquo; ― 3:0.</strong></p>\r\n\r\n<p><strong>Gollar:</strong>&nbsp;Je&yacute;ms Tawern&yacute;e 11 (pen.), Alfredo Morelos 15, Leon Balogun 51.</p>\r\n\r\n<p><strong>&laquo;Braga&raquo; ― &laquo;Monako&raquo; ― 2:0.</strong></p>\r\n\r\n<p><strong>Gollar:</strong>&nbsp;Abel Ruis 3, Witor Manuel Karwal&yacute;o Oliwe&yacute;ra 89.</p>\r\n\r\n<p><strong>&laquo;Atalanta&raquo; ― &laquo;Ba&yacute;er&raquo; ― 3:2.</strong></p>\r\n\r\n<p><strong>Gollar:</strong>&nbsp;Ruslan Malinowski&yacute; 23, Luis Mur&yacute;el 25, 49 ― &Ccedil;arles Arangis 11, Mussa Diabi 63.</p>\r\n\r\n<p>Jogap duşuşyklary 17-nji martdan 18-nji marta ge&ccedil;il&yacute;&auml;n gijede ge&ccedil;iriler.</p>', '400640198e671ac3267cec294a9c06ea8ab3d3e6-8886155-300x335-2.jpg', 7, 1, '2022-03-11 06:24:33', '2022-03-11 06:24:33'),
(52, '«Köpetdag» futbol topary tejribeli oýunçylaryň üçüsini düzümine goşdy', 'kopetdag-futbol-topary-tejribeli-oyuncylaryn-ucusini-duzumine-gosdy', '<p>Aşgabadyň &laquo;K&ouml;petdag&raquo; topary T&uuml;rkmenistanyň futbol &ccedil;empionatynyň nobatdaky m&ouml;ws&uuml;miniň &ouml;ň&uuml;syrasy tejribeli o&yacute;un&ccedil;ylaryň &uuml;&ccedil;&uuml;sini d&uuml;z&uuml;mine goşdy.</p>\r\n\r\n<p>TFF-niň resmi web sa&yacute;tynda habar berlişi &yacute;aly, T&uuml;rkmenistanyň futbol &ccedil;empionatynyň ge&ccedil;en m&ouml;ws&uuml;minde &laquo;Altyn asyr&raquo; topary bilen &yacute;urduň futbol &ccedil;empionatynyň &yacute;eňijisi bolan Şam&auml;mmet Hydyrow, ge&ccedil;en m&ouml;ws&uuml;m &laquo;Aşgabatda&raquo; k&auml;rendesinde &ccedil;ykyş eden &laquo;Ahalyň&raquo; o&yacute;un&ccedil;ysy Şazada B&auml;şimow hem-de ge&ccedil;en m&ouml;ws&uuml;mi &laquo;Energetik&raquo; futbol toparynyň d&uuml;z&uuml;minde k&auml;rendesinde ge&ccedil;iren Muhammet Işanguly&yacute;ew h&uuml;n&auml;r &yacute;ollaryny Aşgabadyň &laquo;K&ouml;petdag&raquo; toparynda dowam ederler.</p>\r\n\r\n<p>Mundan başga-da &laquo;K&ouml;petdag&raquo; futbol topary &yacute;aş o&yacute;un&ccedil;ylaryň hem birn&auml;&ccedil;esini d&uuml;z&uuml;mine ge&ccedil;irdi.</p>\r\n\r\n<p>Bell&auml;p ge&ccedil;sek, Aşgabadyň &laquo;K&ouml;petdag&raquo; topary T&uuml;rkmenistanyň futbol &ccedil;empionatynyň ge&ccedil;en m&ouml;ws&uuml;minde ge&ccedil;iren 14 duşuşygynda 21 utuk toplap, &yacute;aryş tertibini d&ouml;rd&uuml;nji hatarda tamamlamagy başardy.</p>', '21571257965470c94ae1f47e8518b40c8be162c0-8886196-300x335-2.jpg', 7, 1, '2022-03-11 06:25:44', '2022-03-11 06:25:44'),
(53, 'Türkmenistanda mekdep okuwçylaryň arasynda yglan edilen ylmy-döredijilik bäsleşiginiň jemi jemlendi', 'turkmenistanda-mekdep-okuwcylaryn-arasynda-yglan-edilen-ylmy-doredijilik-baslesiginin-jemi-jemlendi', '<p>T&uuml;rkmenistanyň Bilim ministrligi tarapyndan &yacute;urduň umumybilim ber&yacute;&auml;n &yacute;&ouml;riteleşdirilen mekdepleriniň okuw&ccedil;ylarynyň arasynda robot tehnikasy, takyk we tebigy ugurly okuw dersleri bo&yacute;un&ccedil;a yglan edilen ylmy-d&ouml;redijilik b&auml;sleşiginiň d&ouml;wlet tapgyry ge&ccedil;irildi. Milli bilim institutynda onla&yacute;n usulda guralan b&auml;sleşige Aşgabat ş&auml;heri hem-de wela&yacute;atlar bo&yacute;un&ccedil;a &yacute;eňiji bolan mekdep okuw&ccedil;ylary &ouml;z ta&yacute;&yacute;arlan işleri bilen gatnaşdylar.</p>\r\n\r\n<p>&laquo;T&uuml;rkmenistan&raquo; gazetiniň habar bermegine g&ouml;r&auml;, &uuml;&ccedil; tapgyrda ge&ccedil;irilen b&auml;sleşigiň maksady okuw&ccedil;ylary robot tehnikasy bilen meşgullanmaga h&ouml;weslendirmekden, olaryň d&ouml;redijilik başarnyklaryny, b&auml;sleşige ukyplylyk endiklerini &ouml;sd&uuml;rmekden, ylmy işler bilen meşgullanmaga &ccedil;ekmekden we wajyp meseleleri &ccedil;&ouml;zmegiň t&auml;ze usullaryny &yacute;&uuml;ze &ccedil;ykarmakdan ybarat boldy.</p>\r\n\r\n<p>Jemle&yacute;ji tapgyra mekdep okuw&ccedil;ylary ylmy-g&ouml;zleg, taslama, t&auml;ze&ccedil;illik we o&yacute;lap tapyjylyk hem-de tehniki d&ouml;redijilikde konstruktor&ccedil;ylyk, modelirleme we maket ta&yacute;&yacute;arlamak bo&yacute;un&ccedil;a başarnyklaryny a&ccedil;yp g&ouml;rkez&yacute;&auml;n, sanly tehnologi&yacute;alara esaslan&yacute;an işleriniň 60-dan gowragy bilen gatnaşdylar. H&ouml;d&uuml;rlenen işler wajyplygy, mesel&auml;niň &ouml;wreniliş derejesi, maksady we wezipeleri, ylmy t&auml;ze&ccedil;illigi, amaly gymmatlygy, durmuşda &yacute;a-da &ouml;n&uuml;m&ccedil;ilikde ulanmak m&uuml;mkin&ccedil;iligi, hiliniň we be&yacute;an edilişiniň g&ouml;rkezijileri bo&yacute;un&ccedil;a bahalandyryldy.</p>\r\n\r\n<p>B&auml;sleşigiň ahyrynda eminler toparynyň gelen netijesine la&yacute;yklykda, Daşoguz ş&auml;herind&auml;ki daşary &yacute;urt dillerine &yacute;&ouml;riteleşdirilen 24-nji orta mekdebiň okuw&ccedil;ylary Da&yacute;an&ccedil; Kurbandurdy&yacute;ew we Altyna&yacute; Araztaganowa robot tehnikasy, Aşgabat ş&auml;herind&auml;ki 59-njy orta mekdebiň okuw&ccedil;ylary Mekan Begenjow hem-de Hydyr Ba&yacute;arow takyk ylymlar, Mary wela&yacute;atynyň Ba&yacute;ramaly ş&auml;herind&auml;ki tebigy ugurlara &yacute;&ouml;riteleşdirilen 4-nji orta mekdebiň okuw&ccedil;ylary Selbin&yacute;az Ata&yacute;ewa we Wepa Juma&yacute;ew tebigy ugurlar bo&yacute;un&ccedil;a &yacute;eňiji bolmagy başardylar.</p>\r\n\r\n<p>B&auml;sleşigiň &yacute;eňijileri Bilim ministrliginiň we Milli bilim institutynyň diplomlarydyr &yacute;adyg&auml;rlik sowgatlary bilen sylaglandy.</p>', '379107299c8569224e567531ffe6387efb45537d-8886143-300x335-2.jpg', 8, 1, '2022-03-11 06:26:52', '2022-03-11 06:26:52'),
(54, '«Talyp gözeli — 2022» atly gözellik bäsleşiginiň ýeňijileri yglan edildi', 'talyp-gozeli-2022-atly-gozellik-baslesiginin-yenijileri-yglan-edildi', '<p>Şu g&uuml;n &mdash; 3-nji martda Aşgabatdaky Jemgy&yacute;et&ccedil;ilik guramalarynyň merkezinde Halkara zenanlar g&uuml;ni mynasybetli, T&uuml;rkmenistanyň &yacute;okary okuw mekdeplerinde bilim al&yacute;an talyp gyzlaryň arasynda T&uuml;rkmenistanyň Magtymguly adyndaky &Yacute;aşlar guramasynyň Merkezi geňeşiniň, Bilim ministrliginiň, Zenanlar birleşiginiň Merkezi geňeşiniň bilelikde guramagynda yglan edilen&nbsp;<a href=\"https://turkmenportal.com/tm/photoreport/44875/talyp-gozeli--2022-atly-gozellik-basleshiginin-jemleyji-tapgyryndan-fotoreportazh\" target=\"_blank\">&laquo;Talyp g&ouml;zeli &mdash; 2022&raquo;</a>&nbsp;atly g&ouml;zellik b&auml;sleşiginiň jemle&yacute;ji tapgyry ge&ccedil;irildi. Oňa b&auml;sleşigiň deslapky tapgyrynda &yacute;eňiji bolmagy başaran talyp gyzlaryň 22-si gatnaşdy.</p>\r\n\r\n<p>T&uuml;rkmenistanyň Magtymguly adyndaky &Yacute;aşlar guramasynyň Merkezi geňeşiniň h&uuml;n&auml;rmenleriniň &laquo;T&uuml;rkmenportal.com&raquo; web sa&yacute;tymyza habar bermegine g&ouml;r&auml;, b&auml;sleşigiň d&uuml;zg&uuml;nnamasyna la&yacute;yklykda, oňa gatnaş&yacute;an talyp g&ouml;zeller &uuml;&ccedil; şert bo&yacute;un&ccedil;a b&auml;sleşdiler.</p>\r\n\r\n<p>B&auml;sleşigiň birinji şertine la&yacute;yklykda, talyp gyzlar t&uuml;rkmen gelin-gyzlaryna go&yacute;ul&yacute;an sarpany, şe&yacute;le hem &ouml;zleriniň sungata, d&ouml;redijilige bolan ukybyny, T&uuml;rkmenistanyň Prezidenti Gurbanguly Berdimuhamedowyň başlangyjy esasynda yglan edilen &laquo;Halkyň Arkadagly zamanasy&raquo; &yacute;ylynyň joşgunly owazyny a&yacute;dym, goşgy, sahna &ccedil;ykyşlaryny &yacute;erine &yacute;etirmek bilen &ouml;z ussatlyklaryny g&ouml;rkezdiler. B&auml;sleşigiň ikinji şertine g&ouml;r&auml;, talyp gyzlar t&uuml;rkmen Lideriniň tagallasy bilen neşir edilen &laquo;Bereketli t&uuml;rkmen sa&ccedil;agy&raquo; atly kitapda be&yacute;an edil&yacute;&auml;n t&uuml;rkmen milli tagamy bolan unaş kesmekde &ouml;zara b&auml;sleşdiler. &laquo;H&uuml;n&auml;rim bar &mdash; hormatym bar&raquo; atly &uuml;&ccedil;&uuml;nji şerte g&ouml;r&auml;, talyp gyzlar ene-mamalarymyzdan miras galan keşde &ccedil;ekmek bo&yacute;un&ccedil;a başarnyklaryny g&ouml;rkezdiler.</p>\r\n\r\n<p>B&auml;sleşigiň jemleri bo&yacute;un&ccedil;a eminler toparynyň gelen netijesine g&ouml;r&auml;, T&uuml;rkmen d&ouml;wlet ykdysady&yacute;et we dolandyryş institutynyň 1-nji &yacute;yl talyby G&uuml;lb&auml;bek M&auml;mmedowa baş ba&yacute;raga mynasyp boldy. Magtymguly adyndaky T&uuml;rkmen d&ouml;wlet uniwersitetiniň 3-nji &yacute;yl talyby Ma&yacute;a &Ccedil;ary&yacute;ewa bolsa birinji, T&uuml;rkmen d&ouml;wlet binag&auml;rlik-gurluşyk institutynyň 2-nji &yacute;yl talyby Merjen Annadurdy&yacute;ewa bilen S.A.Ny&yacute;azow adyndaky T&uuml;rkmen oba hojalyk uniwersitetiniň 1-nji &yacute;yl talyby Merjen Bek&ccedil;erowa ikinji, T&uuml;rkmen d&ouml;wlet mali&yacute;e institutynyň 4-nji &yacute;yl talyby Jahan Ataşowa, D&ouml;wletm&auml;mmet Azady adyndaky T&uuml;rkmen milli d&uuml;n&yacute;&auml; dilleri institutynyň 2-nji &yacute;yl talyby Z&uuml;be&yacute;da M&auml;terowa, şe&yacute;le-de T&uuml;rkmen oba hojalyk institutynyň 3-nji &yacute;yl talyby Le&yacute;li Soltanowa dagy &uuml;&ccedil;&uuml;nji orunlara mynasyp bolmagy başardylar.</p>\r\n\r\n<p>&Yacute;eňiji bolan talyp g&ouml;zellere b&auml;sleşigi gura&yacute;jylar tarapyndan Hormat hatlarydyr &yacute;adyg&auml;rlik sowgatlar dabaraly &yacute;agda&yacute;da gowşuryldy.</p>', '2086780784546c3bfd56f46cc1ac1075a10cde35-8885586-300x335-2.jpg', 8, 1, '2022-03-11 06:27:43', '2022-03-11 06:27:43'),
(55, '«Iň eýjejik gyzjagaz — 2022» bäsleşigiň Balkan welaýat tapgyry geçirildi', 'in-eyjejik-gyzjagaz-2022-baslesigin-balkan-welayat-tapgyry-gecirildi', '<p>Balkan wela&yacute;at d&ouml;wlet drama teatrynda &laquo;Iň e&yacute;jejik gyzjagaz &mdash; 2022&raquo; atly şady&yacute;an b&auml;sleşigiň ge&ccedil;irildi. T&uuml;rkmenistanyň Magtymguly adyndaky &Yacute;aşlar guramasynyň Merkezi geňeşiniň hem-de Bilim ministrliginiň Milli bahar ba&yacute;ramy mynasybetli &yacute;urduň orta mekdepleriniň 2-4-nji synplarynda oka&yacute;an okuw&ccedil;y gyzlarynyň arasynda yglan edilen b&auml;sleşige onuň etrap-ş&auml;her tapgyrlarynda &yacute;eňiji bolan zehinli gyzjagazlar gatnaşdylar.</p>\r\n\r\n<p>&laquo;Balkan&raquo; wela&yacute;at gazetiniň habar bermegine g&ouml;r&auml;, b&auml;sleşige gatnaşan gyzjagazlar şirin owazly a&yacute;dym-sazlarda Prezident Gurbanguly Berdimuhamedowyň alyp bar&yacute;an be&yacute;ik işleriniň, bagtly &ccedil;agalygyň waspyny &yacute;etirdiler. Milli lybasly gyzjagazlar dakynan şa&yacute;-seplerini taryp etdiler, &yacute;aş a&yacute;ratynlyklaryna g&ouml;r&auml;, ene-mamalardan miras galan el işlerini &yacute;erine &yacute;etirmekde başarnyklaryny g&ouml;rkezdiler.</p>\r\n\r\n<p>B&auml;sleşigiň ahyrynda eminler toparynyň gelen netijesine la&yacute;yklykda, Serdar ş&auml;herind&auml;ki 7-nji orta mekdebiň 4-nji synp okuw&ccedil;ysy G&uuml;lendam Merdanowa birinji, Balkanabat ş&auml;herind&auml;ki 6-njy orta mekdebiň 3-nji synp okuw&ccedil;ysy Nurjahan T&auml;şli&yacute;ewa ikinji orunlara mynasyp boldular we b&auml;sleşigiň d&ouml;wlet tapgyryna gatnaşmaga hukuk gazandylar.</p>\r\n\r\n<p>&Yacute;eňiji bolan e&yacute;jejik gyzjagazlara Hormat hatlary we sowgatlar gowşuryldy.</p>', '48758074cd7763e88f001fbd14322ed9af60fd3c-8886149-300x335-2.jpg', 9, 1, '2022-03-11 06:29:02', '2022-03-11 06:29:02'),
(56, 'Türkmenistanyň Medeniýet ministrliginiň Döwlet medeniýet merkeziniň hasabynda duran bina hususylaşdyrylar', 'turkmenistanyn-medeniyet-ministrliginin-dowlet-medeniyet-merkezinin-hasabynda-duran-bina-hususylasdyrylar', '<p>T&uuml;rkmen suratkeşlerini d&ouml;wlet tarapyndan goldamak, olaryň işlemekleri &uuml;&ccedil;in amatly şertleri d&ouml;retmek maksady bilen, şe&yacute;le hem &laquo;E&yacute;e&ccedil;iligiň d&ouml;wletiň garamagyndan a&yacute;rylmagy we d&ouml;wlet eml&auml;giniň hususylaşdyrylmagy hakynda&raquo; T&uuml;rkmenistanyň Kanunynyň 11-nji maddasyna la&yacute;yklykda, T&uuml;rkmenistanyň Prezidenti Karara gol &ccedil;ekdi. Resminama bilen Mali&yacute;e we ykdysady&yacute;et ministrligine Medeni&yacute;et ministrliginiň D&ouml;wlet medeni&yacute;et merkeziniň hasabynda duran, Aşgabat ş&auml;heriniň T&uuml;rkmenbaşy şa&yacute;olunyň 10-njy salgysynda &yacute;erleş&yacute;&auml;n binany Suratkeşler birleşigine bellenen tertipde g&ouml;ni (salgyly) satmak arkaly hususylaşdyrmak tabşyryldy. Bu barada &laquo;T&uuml;rkmenistan&raquo; gazetinde habar berildi.</p>', '35766272b7a3b3547d14f97b91fffc9fb821de70-8886072-300x335-2.jpg', 9, 1, '2022-03-11 06:29:43', '2022-03-11 06:29:43'),
(57, 'Türkmen alymlary tehniki ýaglaryň we dökünleriň täze görnüşlerini önümçilige ornaşdyrýarlar', 'turkmen-alymlary-tehniki-yaglaryn-we-dokunlerin-taze-gornuslerini-onumcilige-ornasdyryarlar', '<p>T&uuml;rkmenistanyň YA-nyň Tehnologi&yacute;alar merkeziniň t&auml;ze maddalaryň sintezi barlaghanasy T&uuml;rkmenbaşynyň nebiti ga&yacute;tadan işle&yacute;&auml;n zawodlar toplumy (TNGIZT) bilen baglaşan şertnamasynyň &ccedil;&auml;klerinde &yacute;aglaryň &ccedil;algy, motor, dizel, senagat we be&yacute;leki g&ouml;rn&uuml;şleriniň &ouml;nd&uuml;rilişiniň tehnologi&yacute;asyny işl&auml;p ta&yacute;&yacute;arla&yacute;ar. Se&yacute;diniň nebiti ga&yacute;tadan işle&yacute;&auml;n zawodynyň &yacute;ol bitumyny &ouml;nd&uuml;r&yacute;&auml;n enjamyndan alyn&yacute;an wakum-gaz-&yacute;ag fraksi&yacute;asyndan bin&yacute;atlyk &yacute;aglaryň kompenentini almak bo&yacute;un&ccedil;a ylmy-barlag işleri alnyp baryl&yacute;ar ― di&yacute;ip, &laquo;T&uuml;rkmenistan: Altyn asyr&raquo; neşiri&nbsp;<a href=\"https://turkmenistan.gov.tm/tk/habar/61423/ylmy-islap-tayyarlamalar-onumcilige\" target=\"_blank\">habar ber&yacute;&auml;r.</a></p>\r\n\r\n<p>― T&uuml;rkmenistanyň YA-nyň Tehnologi&yacute;alar merkeziniň t&auml;ze maddalaryň sintezi barlaghanasynyň esasy maksady &yacute;erli &ccedil;ig maldan d&uuml;n&yacute;&auml; bazarynda b&auml;sleişge ukyply sintezleri almak we ylmyň has &ouml;ňdebaryjy gazananlaryny, usullaryny we innowasi&yacute;alary ulanyp, olaryň &ouml;n&uuml;m&ccedil;ilginiň tehnlogi&yacute;asyny işl&auml;p ta&yacute;&yacute;arlamakdyr-di&yacute;ip barlaghananyň m&uuml;diri Jeren Sylapowa neşiriň habar&ccedil;ysyna g&uuml;rr&uuml;ň berdi. ― T&auml;ze maddalaryň sintezi barlaghanasyna 2020-nji &yacute;ylyň aprelinde &laquo;T&uuml;rkmenstandartlary&raquo; Baş d&ouml;wet gullugynyň g&uuml;w&auml;namasy berildi. Barlaghananyň belli haryt &ouml;nd&uuml;rijileriň analizle&yacute;ji enjamlary bilen &uuml;pj&uuml;n edilmegi standartlaryň bellenilen kadalaşdyryjy talaplaryna la&yacute;yklykda analiz ge&ccedil;irm&auml;ge m&uuml;mkin&ccedil;ilik ber&yacute;&auml;r.</p>\r\n\r\n<p>Laboratori&yacute;a nebitiň we nebit &ouml;n&uuml;mleriniň fiziki-himiki g&ouml;rkezijilerini, &ccedil;algy, motor we transformator &yacute;aglarynyň konsistent g&ouml;rkezijilerini, bitumyň markasyny kesgitlemek &yacute;aly işleri &yacute;erine &yacute;etir&yacute;&auml;r.</p>\r\n\r\n<p>Barlaghananyň işg&auml;rleri &laquo;T&uuml;rkmenhimi&yacute;a&raquo; DK-nyň T&uuml;rkmenabatdaky himi&yacute;a zawodynyň hem-de T&uuml;rkmenistanyň Senagat&ccedil;ylar we teleke&ccedil;iler birleşmesiniň h&uuml;n&auml;rmenleri bilen bilelikde toplumla&yacute;yn garyşyk NPS-d&ouml;k&uuml;n (azotly-fosforly-k&uuml;k&uuml;rtli toplumla&yacute;yn d&ouml;k&uuml;n) ta&yacute;&yacute;arladylar, ol geljegi uly adaty d&auml;l meliorant-d&ouml;k&uuml;nleriň, karbamid we mineral goşundylaryň: bentonitiň &yacute;a-da dolomitiň garyşygyndan ta&yacute;&yacute;arlanyl&yacute;ar, şe&yacute;le hem ony &ouml;n&uuml;m&ccedil;ilige ornaşdyrmak bo&yacute;un&ccedil;a iş alyp bar&yacute;arlar.</p>\r\n\r\n<p>Alnan d&ouml;k&uuml;niň organoleptiki we fiziki-himiki g&ouml;rkezijileri kesgitlenende analiziň spektral usuly, has takygy &ndash; UM-spektroskopi&yacute;a we rengenfluoressent spektormetr ulanyldy. Işlenip ta&yacute;&yacute;arlanan NPS-d&ouml;k&uuml;ni tehniki, galla we g&ouml;k ekinlerde topragyň hasyllylygyny, &ccedil;yg sakla&yacute;şyny &yacute;okarlandyrmak we gurluşyny gowulandyrmak &uuml;&ccedil;in giňden ulanyl&yacute;ar.</p>', '2650435385c1dc21803a4a859024f8e9165507e5-8886065-300x335-2.jpg', 10, 1, '2022-03-11 06:31:36', '2022-03-11 06:31:36'),
(58, 'Türkmenistan Halkara elektroaragatnaşyk birleşigi bilen hyzmatdaşlygyny giňeldýär', 'turkmenistan-halkara-elektroaragatnasyk-birlesigi-bilen-hyzmatdaslygyny-gineldyar', '<p>T&uuml;rkmenistan Halkara elektroaragatnaşyk birleşigi (HEB) bilen hyzmatdaşlygyny giňeltmegi maksat edin&yacute;&auml;r. Bu barada şu g&uuml;n Ministrler Kabinetiniň mejlisinde habar berildi.</p>\r\n\r\n<p>Halkara elektroaragatnaşyk birleşigi BMG-niň &yacute;&ouml;riteleşdirilen edarasy bolmak bilen, global derejede sanlylaşdyrmak ulgamynda &ouml;ňdebaryjy halkara gurama hasaplanyl&yacute;ar. T&uuml;rkmenistan bu guramanyň agzasy h&ouml;km&uuml;nde ulgamla&yacute;yn esasda işjeň halkara hyzmatdaşlygyny sakla&yacute;ar.</p>\r\n\r\n<p>Bu ugurda bilelikde amala aşyrylan &uuml;st&uuml;nlikli işleriň mysaly h&ouml;km&uuml;nde T&uuml;rkmenistanyň &ldquo;T&uuml;rkmen&Auml;lem 52&deg; E&rdquo; emeli hemrasynyň kosmos giňişligine u&ccedil;urylmagyny a&yacute;tmak bolar.</p>\r\n\r\n<p>Wise-prem&yacute;er, T&uuml;rkmenistanyň Daşary işler ministri Raşid Meredowyň belle&yacute;şi &yacute;aly, &yacute;urtda sanly ykdysady&yacute;eti mundan be&yacute;l&auml;k-de &ouml;sd&uuml;rmek &uuml;&ccedil;in belli bir ugurda Halkara elektroaragatnaşyk birleşigi bilen hyzmatdaşlyk etmek teklip edil&yacute;&auml;r.</p>\r\n\r\n<p>Hususan-da, kiberhowpsuzlygy berkitmek meselelerine a&yacute;ratyn &auml;hmi&yacute;et beril&yacute;&auml;ndigini nazara almak bilen, T&uuml;rkmenistanyň Milli kiberhowpsuzlyk strategi&yacute;asynyň hem-de Hereketler me&yacute;ilnamasynyň taslamalaryny ta&yacute;&yacute;arlamak teklip edil&yacute;&auml;r. Şunuň bilen baglylykda, şu &yacute;ylyň birinji &yacute;arymynda HEB bilen T&uuml;rkmenistanyň degişli d&ouml;wlet edaralarynyň arasynda olaryň işini k&auml;milleşdirmek meseleleri bo&yacute;un&ccedil;a yzygiderli maslahatlaşmalary ge&ccedil;irmek, milli kiberhowpsuzlyk t&uuml;rgenleşiklerini guramak hem-de sebit derejesinde ge&ccedil;iril&yacute;&auml;n kibert&uuml;rgenleşiklere gatnaşmak, ilatyň arasynda kiberhowpsuzlyk meseleleri bo&yacute;un&ccedil;a d&uuml;ş&uuml;ndiriş işlerini ge&ccedil;irmek teklip edil&yacute;&auml;r.</p>\r\n\r\n<p>&ldquo;Elektron h&ouml;k&uuml;metiň&rdquo; &yacute;ola go&yacute;ulmagy T&uuml;rkmenistanyň ykdysady&yacute;etiniň sanly ulgama ge&ccedil;irilmeginiň esasy ugry bolup dur&yacute;ar. Birleşigiň bu babatda toplan tejribesine esaslanyp, 2022-nji &yacute;ylyň birinji &ccedil;&auml;r&yacute;eginde HEB-niň h&uuml;n&auml;rmenleriniň gatnaşmagynda pudagara duşuşyklary ge&ccedil;irmek me&yacute;illeşdiril&yacute;&auml;r.</p>\r\n\r\n<p>2012-nji &yacute;yldan b&auml;ri d&uuml;n&yacute;&auml; derejesinde sanly ulgam we innowasion tehnologi&yacute;alar bo&yacute;un&ccedil;a bilimi &yacute;okarlandyrmak babatda Halkara elektroaragatnaşyk birleşiginiň akademi&yacute;asy hem hereket ed&yacute;&auml;r. Akademi&yacute;a tarapyndan amala aşyryl&yacute;an &ldquo;Sanly &ouml;zgeriş merkezleri&rdquo; taslamasynyň &ccedil;&auml;klerinde T&uuml;rkmenistanyň degişli h&uuml;n&auml;rmenleri, tehniki işg&auml;rleri we talyplary &uuml;&ccedil;in a&yacute;ratyn okuw maksatnamasyny işl&auml;p ta&yacute;&yacute;arlamak teklip edil&yacute;&auml;r. Bu maksatnama halkara maglumat, kommunikasi&yacute;a we aragatnaşyk ulgamlarynda d&uuml;n&yacute;&auml; derejesinde toplanan tejribe bilen tanyşmak we d&ouml;wletde ornaşdyrmak &uuml;&ccedil;in okuw &ccedil;&auml;relerini &ouml;z i&ccedil;ine alar.</p>\r\n\r\n<p>&Yacute;okarda a&yacute;dylanlary nazara alyp, wise-prem&yacute;er, daşary işler ministri Halkara elektroaragatnaşyk birleşigi bilen hyzmatdaşlygy mundan be&yacute;l&auml;k-de &ouml;sd&uuml;rmek &uuml;&ccedil;in 2022-nji &yacute;ylyň iş me&yacute;ilnamasynyň ta&yacute;&yacute;arlanylmagynyň maksadala&yacute;yk boljakdygyny a&yacute;tdy.</p>\r\n\r\n<p>T&uuml;rkmenistanyň Prezidenti Gurbanguly Berdimuhamedow hasabaty diňl&auml;p, bu mesel&auml;niň &ouml;r&auml;n m&ouml;h&uuml;mdigini hem-de sanlylaşdyrmak ulgamynda d&ouml;wlet sy&yacute;asaty bilen baglydygyny nygtady.</p>\r\n\r\n<p>Innowasion &ouml;s&uuml;ş &yacute;oluna d&uuml;şen T&uuml;rkmenistan d&ouml;wr&uuml;ň talaplaryna la&yacute;yklykda, &ouml;r&auml;n wajyp wezipeleri &ouml;z &ouml;ň&uuml;nde go&yacute;&yacute;ar. Şolaryň hatarynda &ouml;ňdebaryjy maglumat-kommunikasi&yacute;a tehnologi&yacute;alaryny işjeň ornaşdyrmak we kiberhowpsuzlygy &uuml;pj&uuml;n etmek wezipeleri bar.</p>\r\n\r\n<p>Halkara elektroaragatnaşyk birleşigi bilen &ouml;zara b&auml;hbitli hyzmatdaşlygy mundan be&yacute;l&auml;k-de &ouml;sd&uuml;rmek baradaky teklipleri tassyklap, d&ouml;wlet Baştutany bu meselede birn&auml;&ccedil;e anyk g&ouml;rkezmeleri berdi di&yacute;ip, T&uuml;rkmenistanyň D&ouml;wlet habarlar gullugy habar ber&yacute;&auml;r.</p>', '37144011735e8dcf5cafccf68f41dcee602ca999-8511578-300x335-2.jpg', 10, 1, '2022-03-11 06:32:16', '2022-03-11 06:32:32');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('SUpY9dQTPWwe2GvldLcMjdLUShnyX4vqpIcURb8z', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiemk1c09DbnRZMTU3ZG5sZjhQUW01Yjc4Z2JtZm1CYjdFT2VzekhScCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9hbGxwb3N0cz9wYWdlPTEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkRVJUN3lPcDkzSFJwcmN4UmZwamZhLkJ4SEpZWWt1Wmt6RThOUHZiUEQuUWFjd3NNWXRGRXkiO30=', 1647001755);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` enum('Super_admin','admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `utype`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Polat', 'admin', 'polat@gmail.com', '2022-03-02 07:00:48', '$2y$10$ERT7yOp93HRprcxRfpjfa.BxHJYYkuZkzE8NPvbPD.QacwsMYtFEy', NULL, NULL, '5vc67pIAVOMo0LBfHEbcV0mwlv7ZDkeA20qFAacqyIyCMTp7LV58AWkoU1y5', NULL, NULL, '2022-03-02 07:00:48', '2022-03-02 07:00:48'),
(2, 'Madaline Weimann', 'admin', 'fkuhn@example.org', '2022-03-02 07:00:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'bkQJjCbUq4', NULL, NULL, '2022-03-02 07:00:49', '2022-03-02 07:00:49'),
(3, 'Ms. Roma Kreiger DVM', 'admin', 'elenor.spinka@example.net', '2022-03-02 07:00:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '57o56vfp1Y', NULL, NULL, '2022-03-02 07:00:49', '2022-03-02 07:00:49'),
(4, 'Rafael Shanahan DDS', 'user', 'hintz.reagan@example.com', '2022-03-02 07:00:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'W0BYfLwRZk', NULL, NULL, '2022-03-02 07:00:49', '2022-03-02 07:00:49'),
(5, 'Meredith Gislason', 'Super_admin', 'eichmann.zoie@example.org', '2022-03-02 07:00:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'TGiLFKsJLL', NULL, NULL, '2022-03-02 07:00:49', '2022-03-02 07:00:49'),
(6, 'Frederique Collins', 'Super_admin', 'ritchie.rasheed@example.com', '2022-03-02 07:00:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'Ko90Nfw3p2', NULL, NULL, '2022-03-02 07:00:49', '2022-03-02 07:00:49'),
(7, 'test', 'user', 'test@gmail.com', NULL, '$2y$10$qFfWo7YPfAohpbIcezKstew0oWlYSl8u7BDFoCISX3MCMfXgYMGtO', NULL, NULL, NULL, NULL, NULL, '2022-03-07 04:50:55', '2022-03-07 04:50:55'),
(8, 'Gena', 'user', 'gena@gmail.com', NULL, '$2y$10$XF3Qbg8tfErUbg8CePi.ne2VdSGdqVpH2WloeOL7ZfH/GmBVhvMYi', NULL, NULL, NULL, NULL, NULL, '2022-03-09 04:47:04', '2022-03-09 04:47:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
