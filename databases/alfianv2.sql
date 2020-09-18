-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 01:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfian`
--

-- --------------------------------------------------------

--
-- Table structure for table `baner`
--

CREATE TABLE `baner` (
  `id_baner` int(11) NOT NULL,
  `nama_baner` varchar(70) NOT NULL,
  `penulis_baner` varchar(30) NOT NULL,
  `tgl_baner` varchar(50) NOT NULL,
  `isi_baner` text NOT NULL,
  `gambar_baner` text NOT NULL,
  `meta_key_baner` text NOT NULL,
  `meta_des_baner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baner`
--

INSERT INTO `baner` (`id_baner`, `nama_baner`, `penulis_baner`, `tgl_baner`, `isi_baner`, `gambar_baner`, `meta_key_baner`, `meta_des_baner`) VALUES
(1, 'Wawa Gaming oa', 'Dwiki Firmansyah', '04 Apr 2020', '<h2>Harga Rp 174.000</h2>\r\n\r\n<form action="https://www.sepatuindonesia.com/keranjangbelanja/add/16873.html" method="post">\r\n<p>Produk baju muslim wanita RKO 021 yang siap menemani anda sehari-hari. Baju muslim wanita RKO 021 merupakan baju muslim wanita yang nyaman untuk dipakai, bahannya bagus dan modelnya trendy, terbuat dari bahan&nbsp;<em>cotton,&nbsp;</em>baju wanita ini tersedia warna&nbsp;<em>abu-abu,</em>&nbsp;dengan ukuran&nbsp;<em>l, m, s, xl.</em></p>\r\n\r\n<p>Desain baju muslim wanita RKO 021 yang elegan membuat penampilan anda semakin sempurna. Dijamin anda akan lebih percaya diri dan fashionable.</p>\r\n\r\n<p>Foto produk baju muslim wanita RKO 021 adalah foto asli (real picture), tidak direkayasa, kalaupun ada sedikit perbedaan antara foto dengan aslinya maksimal 5% - 10%, karena pengaruh cahaya sekitar ketika foto produk baju wanita ini difoto camera.</p>\r\n\r\n<p>Ayo dapatkan segera salah satu produk terbaik kami ini, untuk pemesanan baju muslim wanita RKO 021 bisa melalui Whataspps / SMS berikut&nbsp;<a href="https://wa.me/6282219336347?text=Saya%20mau%20pesan%20baju%20muslim%20wanita%20RKO%20021%20info%20produk%20https://www.sepatuindonesia.com/baju-wanita/id/16873/baju-muslim-wanita-rko-021.html" target="_blank">082219336347</a>&nbsp;atau&nbsp;<a href="https://wa.me/6281221867994?text=Saya%20mau%20pesan%20baju%20muslim%20wanita%20RKO%20021%20info%20produk%20https://www.sepatuindonesia.com/baju-wanita/id/16873/baju-muslim-wanita-rko-021.html" target="_blank">081221867994</a></p>\r\n&nbsp;\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Ukuran</th>\r\n			<th scope="col">Stok</th>\r\n			<th scope="col">Terakhir update</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>S</td>\r\n			<td>6</td>\r\n			<td>09 Mar 2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M</td>\r\n			<td>0</td>\r\n			<td>09 Mar 2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td>L</td>\r\n			<td>5</td>\r\n			<td>09 Mar 2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td>XL</td>\r\n			<td>0</td>\r\n			<td>09 Mar 2020</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<p>Model:<br />\r\n<select name="model">&nbsp;<option selected="selected" value="131">Cotton</option>&nbsp;</select></p>\r\n\r\n<hr />\r\n<p>Warna:<br />\r\n<select name="color">&nbsp;<option selected="selected" value="14">Abu-abu</option>&nbsp;</select></p>\r\n\r\n<hr />\r\n<p>Ukuran:<br />\r\n<select name="size">&nbsp;<option selected="selected" value="85">L</option>&nbsp;<option value="84">M</option>&nbsp;<option value="83">S</option>&nbsp;<option value="86">XL</option>&nbsp;</select></p>\r\n\r\n<hr />\r\n<p>Jumlah yang akan dibeli:<br />\r\n<select name="quantity">&nbsp;<option selected="selected" value="1">1</option>&nbsp;<option value="2">2</option>&nbsp;<option value="3">3</option>&nbsp;<option value="4">4</option>&nbsp;<option value="5">5</option>&nbsp;<option value="6">6</option>&nbsp;<option value="7">7</option>&nbsp;<option value="8">8</option>&nbsp;<option value="9">9</option>&nbsp;<option value="10">10</option>&nbsp;<option value="11">11</option>&nbsp;<option value="12">12</option>&nbsp;<option value="13">13</option>&nbsp;<option value="14">14</option>&nbsp;<option value="15">15</option>&nbsp;<option value="16">16</option>&nbsp;<option value="17">17</option>&nbsp;<option value="18">18</option>&nbsp;<option value="19">19</option>&nbsp;<option value="20">20</option>&nbsp;<option value="21">21</option>&nbsp;<option value="22">22</option>&nbsp;<option value="23">23</option>&nbsp;<option value="24">24</option>&nbsp;<option value="25">25</option>&nbsp;<option value="26">26</option>&nbsp;<option value="27">27</option>&nbsp;<option value="28">28</option>&nbsp;<option value="29">29</option>&nbsp;<option value="30">30</option>&nbsp;<option value="31">31</option>&nbsp;<option value="32">32</option>&nbsp;<option value="33">33</option>&nbsp;<option value="34">34</option>&nbsp;<option value="35">35</option>&nbsp;<option value="36">36</option>&nbsp;<option value="37">37</option>&nbsp;<option value="38">38</option>&nbsp;<option value="39">39</option>&nbsp;<option value="40">40</option>&nbsp;<option value="41">41</option>&nbsp;<option value="42">42</option>&nbsp;<option value="43">43</option>&nbsp;<option value="44">44</option>&nbsp;<option value="45">45</option>&nbsp;<option value="46">46</option>&nbsp;<option value="47">47</option>&nbsp;<option value="48">48</option>&nbsp;<option value="49">49</option>&nbsp;<option value="50">50</option>&nbsp;<option value="51">51</option>&nbsp;<option value="52">52</option>&nbsp;<option value="53">53</option>&nbsp;<option value="54">54</option>&nbsp;<option value="55">55</option>&nbsp;<option value="56">56</option>&nbsp;<option value="57">57</option>&nbsp;<option value="58">58</option>&nbsp;<option value="59">59</option>&nbsp;<option value="60">60</option>&nbsp;<option value="61">61</option>&nbsp;<option value="62">62</option>&nbsp;<option value="63">63</option>&nbsp;<option value="64">64</option>&nbsp;<option value="65">65</option>&nbsp;<option value="66">66</option>&nbsp;<option value="67">67</option>&nbsp;<option value="68">68</option>&nbsp;<option value="69">69</option>&nbsp;<option value="70">70</option>&nbsp;<option value="71">71</option>&nbsp;<option value="72">72</option>&nbsp;<option value="73">73</option>&nbsp;<option value="74">74</option>&nbsp;<option value="75">75</option>&nbsp;<option value="76">76</option>&nbsp;<option value="77">77</option>&nbsp;<option value="78">78</option>&nbsp;<option value="79">79</option>&nbsp;<option value="80">80</option>&nbsp;<option value="81">81</option>&nbsp;<option value="82">82</option>&nbsp;<option value="83">83</option>&nbsp;<option value="84">84</option>&nbsp;<option value="85">85</option>&nbsp;<option value="86">86</option>&nbsp;<option value="87">87</option>&nbsp;<option value="88">88</option>&nbsp;<option value="89">89</option>&nbsp;<option value="90">90</option>&nbsp;<option value="91">91</option>&nbsp;<option value="92">92</option>&nbsp;<option value="93">93</option>&nbsp;<option value="94">94</option>&nbsp;<option value="95">95</option>&nbsp;<option value="96">96</option>&nbsp;<option value="97">97</option>&nbsp;<option value="98">98</option>&nbsp;<option value="99">99</option>&nbsp;<option value="100">100</option>&nbsp;</select></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n<strong>Catatan:</strong><br />\r\n* Langsung dikirim dihari yang sama setelah pembayaran !!<br />\r\n* Harga belum termasuk ongkos kirim<br />\r\n* Setelah pengiriman nomor resi pasti selalu kami informasikan</form>\r\n', 'foto_baner/200896sbadmin.jpg', 'wawa', 'awaw'),
(2, 'listrik', 'Dwiki Firmansyah', '04 Apr 2020', '<p><samp>istrik Pintar adalah pembayaran listrik dengan cara prabayar. Pada sistem listrik pintar, pelanggan menggunakan listrik sesuai dengan pembelian token atau pulsa listrik, jika token sudah limit, maka pemakai harus mengisi ulang token listrik. Karena listrik sudah menjadi kebutuhan sehari-hari, maka penting untuk kita mencari cara untuk membeli token listrik ini.</samp></p>\r\n\r\n<p><samp>Sebelum beli token listrik, ada baiknya Anda terlebih dahulu&nbsp;cek token listrik&nbsp;yang tersisa di rumah Anda. Walaupun terdapat berbagai macam merk meteran listrik, cara mengecek sisa token listrikpun mudah sekali. Anda bisa ikuti langkah-langkah berikut.</samp></p>\r\n\r\n<ul>\r\n	<li><samp>Merk Hexing, tekan angka 801 lalu&nbsp;tekan enter. Sisa token akan muncul.</samp></li>\r\n	<li><samp>Merk Conlog, Anda bisa melihat sisa token listrik pada monitor. Pada Monitor terdapat kWH dan angka xxxx</samp></li>\r\n	<li><samp>Merk Star, tekan angka 07 setelah itu tekan enter.</samp></li>\r\n	<li><samp>Merk Itron, bisa langsung lihat di monitor. Di monitor terdapat kWH dan angka xxxx</samp></li>\r\n</ul>\r\n\r\n<p><samp>Setelah Anda mengetahui sisa token listrik yang ada, Anda bisa menilai apakah memerlukan pengisian token listrik. Jika akan habis, segeralah melakukan pembelian token listrik. Sepulsa akan membahas mengenai cara pembelian token listrik dengan berbagai metode pembayaran.</samp></p>\r\n\r\n<h2><samp>1. Via online</samp></h2>\r\n\r\n<p><samp>Cara isi token PLN via online adalah pembelian secara online via mobile maupun PC. Kita bisa membeli pulsa listrik lewat beberapa website yang bisa membantu mengisi token listrik diantaranya adalah Sepulsa.com. Selain praktis dan cepat, kita juga bisa menghemat waktu dengan hanya melakukan transfer lewat e-banking saja. Berikut cara membeli token listrik secara online :</samp></p>\r\n\r\n<ol>\r\n	<li><samp>Masuk website&nbsp;<a href="https://www.sepulsa.com/?utm_source=blog&amp;utm_medium=artikel&amp;utm_campaign=blog_cara-pembelian-token-listrik-pintar">Sepulsa.com</a>, kemudian pilih tab token listrik</samp></li>\r\n	<li><samp>Masukan nomer ID pelanggan dan nomer handphone Anda</samp></li>\r\n	<li><samp>Pilih nominal token PLN yang diinginkan</samp></li>\r\n	<li><samp>Pilih voucher yang ingin didapatkan</samp></li>\r\n	<li><samp>Transfer lewat E-Banking</samp></li>\r\n	<li><samp>Dua puluh angka kode unik akan dikirimkan lewat sms ke nomor handphone Anda.</samp></li>\r\n</ol>\r\n\r\n<p><samp>Alasan kenapa kalian harus mengisi pulsa listrik di Sepulsa</samp></p>', 'foto_baner/823597Untitled-1.jpg', 'wdawd', 'awdaw'),
(4, 'Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat', 'Dwiki Firmansyah', '05 Apr 2020', '<p>0812-9908-7667 (Call/WA)&nbsp;<strong>Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat</strong>, Bikin Website Murah Bekasi, Buat Web Bekasi, Desain Web Bekasi, Jasa Bikin Web Bekasi, Jasa Bikin Website Bekasi, Jasa Buat Web Bekasi.</p>\r\n\r\n<p>Jasa Pembuatan Website Murah di Bekasi Utara, Barat, Timur, Jawa Barat | Kami hadir memberi solusi untuk kebutuhan media promosi online Anda. Dapatkan website dengan desain menarik dengan harga yang terjangkau.</p>\r\n\r\n<p>Bila anda sebagai Pebisnis/ Pengusaha/ Marketing, website adalah kunci promosi bisnis anda. Bila anda memiliki website usaha dan merasakan hasil dari website, maka satu website rasanya tidak cukup untuk berpromosi. Karena website 24 jam setiap hari online, dan kapan pun customer siap melirik bisnis anda.</p>\r\n\r\n<p>Kami siap mewujudkan impian bisnis anda dalam sebuah website, Jasa buat website dengan kami dan kami membantu merancang, mendesain dan mengelola (maintenance). Dengan website promosi bisnis anda dapat dilakukan dimana saja kepada pengguna internet di seluruh dunia.</p>\r\n\r\n<p>Kami tidak sekedar membuat website, kami memiliki tenaga ahli dalam hal marketing di dunia maya. Tidak hanya melayani perusahaan, kami juga menerima pembuatan website untuk yayasan, ukm, sekolah, sekolah tinggi, universitas atau perseorangan.</p>\r\n\r\n<p>Mengapa Harus Buat Website?</p>\r\n\r\n<p>Karena, Website merupakan teknologi informasi terbaik saat ini sebagai sarana pertukaran informasi kepada konsumen atau klien Anda secara mudah, cepat, dan tanpa batas jarak maupun waktu. Artinya, konsumen maupun calon konsumen akan dengan sangat mudah untuk mendapatkan informasi bisnis maupun perusahaan secara lengkap dan akurat hanya dengan mencari memalui komputer yang terkoneksi dengan internet, atau bahkan hanya dengan gadget mereka kapanpun dan dimanapun.</p>\r\n\r\n<p>contoh client kami :</p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Bekasi"><img alt="Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-di-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website di Bekasi"><img alt="Jasa Pembuatan Website di Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--2.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-E-Commerce-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website E Commerce Bekasi"><img alt="Jasa Pembuatan Website E Commerce Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--3.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-E-Commerce-Murah-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website E-Commerce Murah Bekasi"><img alt="Jasa Pembuatan Website E-Commerce Murah Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--4.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Ecommerce-Profesional-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Ecommerce Profesional Bekasi"><img alt="Jasa Pembuatan Website Ecommerce Profesional Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--5.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Ekspedisi-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Ekspedisi Bekasi"><img alt="Jasa Pembuatan Website Ekspedisi Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--6.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Hotel-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Hotel Bekasi"><img alt="Jasa Pembuatan Website Hotel Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--7.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Iklan-Baris-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Iklan Baris Bekasi"><img alt="Jasa Pembuatan Website Iklan Baris Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--8.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Iklan-Baris-Murah-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Iklan Baris Murah Bekasi"><img alt="Jasa Pembuatan Website Iklan Baris Murah Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--9.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Iklan-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Iklan Bekasi"><img alt="Jasa Pembuatan Website Iklan Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--10.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Iklan-Mobil-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Iklan Mobil Bekasi"><img alt="Jasa Pembuatan Website Iklan Mobil Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--11.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Jakarta-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Jakarta, Bekasi"><img alt="Jasa Pembuatan Website Jakarta, Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--12.jpg" style="height:300px; width:240px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Bekasi-Barat.jpg" title="0812-9908-7667 Jasa Pembuatan Website Bekasi Barat"><img alt="Jasa Pembuatan Website Bekasi Barat - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--13.jpg" style="height:300px; width:300px" /></a></p>\r\n\r\n<p><a href="https://www.jasapembuatanwebsitebekasi.net/wp-content/uploads/2019/11/0812-9908-7667-Jasa-Pembuatan-Website-Kantor-Bekasi.jpg" title="0812-9908-7667 Jasa Pembuatan Website Kantor Bekasi"><img alt="Jasa Pembuatan Website Kantor Bekasi - Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--14.jpg" style="height:298px; width:300px" /></a></p>\r\n\r\n<p>Info dan Pemesanan hub: Bpk. Fikri (Call/WA)<br />\r\n&gt; 0812-9908-7667 (Indosat)<br />\r\n&gt; 0812-9908-7667 (Telkomsel)</p>\r\n\r\n<p><a href="https://wa.me/6281299087667"><img alt="Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat" src="https://www.jasapembuatanwebsitebekasi.net/ocs-images/972/jasa-pembuatan-web-bekasi-kota-bks-jawa-barat--15.png" style="height:90px; width:248px" /></a></p>\r\n\r\n<p>Link chat WA:&nbsp;<a href="https://wa.me/6281299087667">https://wa.me/6281299087667</a></p>\r\n\r\n<p>Jasa Pembuatan Website di Bekasi |&nbsp;Lokasi :<br />\r\nVilla Anggrek Desa, Jl. Anggrek 5A No.6, Karangsatria, Kec. Tambun Utara, Bekasi, Jawa Barat 17568<br />\r\n<a href="https://goo.gl/maps/9sGTXCwpdZcnNoBR7">https://goo.gl/maps/9sGTXCwpdZcnNoBR7</a></p>\r\n\r\n<p>website :<br />\r\n&ndash;&nbsp;<a href="https://www.jasawebseo.web.id/">https://www.JasaWebSEO.web.id</a><br />\r\n&ndash;&nbsp;<a href="https://www.jasapembuatanwebsitebekasi.net/">https://www.JasaPembuatanWebsiteBekasi.net</a><br />\r\n&ndash;&nbsp;<a href="https://www.internetmarketerbekasi.com/">https://www.InternetMarketerBekasi.com</a></p>', 'foto_baner/927404OvotoGopay.jpg', 'Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat', 'asa Pembuatan Website Murah di Bekasi Utara, Barat, Timur, Jawa Barat | Kami hadir memberi solusi untuk kebutuhan media promosi online Anda. Dapatkan website dengan desain menarik dengan harga yang terjangkau.');

-- --------------------------------------------------------

--
-- Table structure for table `baner_komentar`
--

CREATE TABLE `baner_komentar` (
  `id` int(11) NOT NULL,
  `post_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'assets/img/avatar.png',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `approved` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baner_komentar`
--

INSERT INTO `baner_komentar` (`id`, `post_id`, `comment`, `avatar`, `author`, `date`, `time`, `approved`) VALUES
(34, 'WAWA GAMING OA', 'Wawa dmna kau berada', 'assets/img/avatar.png', 'Dwiki', '01 April 2020', '05:16', 'yes'),
(35, 'Detail baju muslim wanita RKO 021', 'Hayoaaa', 'assets/img/avatar.png', 'wawa', '03 April 2020', '21:21', 'Yes'),
(36, 'About TRISI', 'Dwiki Firamansyah yayp', 'assets/img/avatar.png', 'Dwiki', '04 April 2020', '00:17', 'Yes'),
(37, 'Website Compny', 'awdawd', 'assets/img/avatar.png', 'Tes', '04 April 2020', '00:20', 'Yes'),
(39, 'Jasa Pembuatan Web Bekasi Kota BKS Jawa Barat', 'Untuk harga brapaan yah?', 'assets/img/avatar.png', 'Dwiki', '05 April 2020', '07:57', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis` text NOT NULL,
  `suplier` text NOT NULL,
  `modal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `tgl_input` varchar(50) NOT NULL,
  `gambar_barang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `deskripsi2` text NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jenis`, `suplier`, `modal`, `harga`, `jumlah`, `sisa`, `tgl_input`, `gambar_barang`, `deskripsi`, `warna`, `kode_barang`, `deskripsi2`, `meta_key`, `meta_des`) VALUES
(43, 'baju perempuan', 'pakaian', 'Pt Pandanux', 35000, 50000, 1, 10, '2020-03-07 : 03:10', 'foto_barang/229201baju_muslim_wanita_RKO_021.jpg', '<p>adaw</p>\r\n', 'rose', 'PRODUK-0001', '<p>asd</p>\r\n', 'awd', 'awd'),
(44, 'Celana Cino', 'pakaian', 'Pt Pandanux', 25500, 50000, 3, 10, '2020-03-07 : 03:11', 'foto_barang/37002hemmeh-5336-6489581-1.jpg', '', '', 'PRODUK-0002', '', '', ''),
(47, 'topi laki', 'pakaian', 'Pt Pandanux', 13000, 25000, 2, 10, '2020-03-07 : 03:15', 'foto_barang/193469kairui-topi-baseball-visor-sport-fashion-hat-mz237-black-10.jpg', '<p>awd</p>\r\n', 'pink', 'PRODUK-0003', '<p>awd</p>\r\n', 'awd', 'awd'),
(48, 'iphone 11', 'Elektronik', 'pandanuxPhone', 11500000, 15500000, 50, 50, '2020-03-07 : 12:41', 'foto_barang/850086iphone-11-pro-max-midnight-green_3.png', '', '', 'PRODUK-0004', '', '', ''),
(49, 'kursi kayu', 'Alatrumah', 'Pt Pandanux', 450000, 800000, 100, 100, '2020-03-07 : 12:42', 'foto_barang/965746main-qimg-14e8a73d7928771d697a07823bf299b4.png', '', '', 'PRODUK-0005', '', '', ''),
(50, 'meja belajar', 'alatrumah', 'Pt Pandanux', 1500000, 2500000, 35, 35, '2020-03-07 : 12:43', 'foto_barang/944790GRC-355303.jpg', '', '', 'PRODUK-0006', '', '', ''),
(51, 'Laptop xp', 'Elektronik', 'Pandanuxsell', 4500000, 6500000, 27, 27, '2020-03-07 : 12:44', 'foto_barang/5848426364560_sd.jpg', '', '', 'PRODUK-0007', '', '', ''),
(52, 'iphone x', 'Elektronik', 'Pt Pandanux', 7500000, 8900000, 15, 15, '2020-03-07 : 12:44', 'foto_barang/532392iphone_x_silver.jpeg', '', '', 'PRODUK-0008', '', '', ''),
(53, 'iphone 8', 'Elektronik', 'Pt Pandanux', 3500000, 4500000, 15, 20, '2020-03-07 : 12:50', 'foto_barang/920722IPHONE-8-GOLD.jpg', 'iphone 8', 'orange', 'PRODUK-0009', '', '', ''),
(54, 'iphone 7', 'Elektronik', 'Pt Pandanux', 2000000, 3500000, 8, 78, '2020-03-07 : 12:52', 'foto_barang/967138Apple_iPhone_7_Plus__L_1.jpg', 'Iphone', 'black', 'PRODUK-0010', '', '', ''),
(57, 'baju gamis perempuan 2020', 'pakaian', 'Pt Pandanux', 209000, 350500, 100, 100, '2020-03-10 : 16:46', 'foto_barang/277646Model-Baju-Gamis-Terbaru-Harga-Murah-Untuk-Wanita-Remaja-BWM09.jpg', '<p><a href="https://bajumurahonline.biz/product-category/baju-gamis/">Model Baju Gamis Terbaru Harga Murah Untuk Wanita Remaja BWM09</a>Â â€“ Mungkin Kamu salah satu Wanita Remaja yang lagi bosan mengenakan model busana muslim yang itu-itu melulu? Emang maklum karena Hampir setiap wanita remaja ingin selalu terlihat modis dalam setiap penampilan terutama saat mengenakan baju gamis. Dengan mengenakan busana muslim yang satu ini apalagi jika modelnya terbaru tentu bisa meningkatkan rasa percaya diri dalam pergaulan sosial.</p>\r\n\r\n<p>Untuk saat ini banyak sekali model baju gamis untuk remaja yang dijual di pasaran, namun kebanyakan modelnya cenderung out of date alias model lawas. Hal ini jelas membuat Kamu merasa enggan mengenakannya karena takut penampilan terlihat norak dan nggak mengikuti trend busana masa kini. Dan kalaupun ada baju gamis yang modelnya terbaru kekinian tapi harganya mahal setinggi langit. Jelas kalau begini terpaksa Kamu menunda keinginan untuk membelinya. Betul kan?</p>\r\n\r\n<p>Apakah Kamu ingin mengenakan model baju gamis terbaru harga murah agar bisa tampil makin keren sekaligus mengirit pengeluaran?</p>\r\n\r\n<p>Harap tenang, Mulai sekarang di BAJUBIZ Kamu bisa mendapatkan Model Baju Gamis Terbaru Harga Murah Untuk Wanita Remaja BWM09. Busana muslim yang satu ini modelnya lagi booming di kalangan wanita remaja Indonesia, dan harganyapun terjangkau sehinggaÂ  tidak hanya dompet kamu aman terlebih dengan mengenakan baju gamis ini memastikan Kamu makin percaya diri bila mengenakannya. Mau tahu keistimewaan baju gamis yang satu ini?</p>\r\n\r\n<ul>\r\n	<li>Model Baju Gamis ini sangat fleksibel sehingga Kamu bisa mengenakannya baik untuk acara santai maupun formal</li>\r\n	<li>Busana ini terbuat dari kain wolfis kualitas Premium yang terkenal lembut, luwes serta terasa lembut di kulit memastikan Kamu merasa nyaman dan leluasa bergerak</li>\r\n	<li>Baju ini Dipercantik rempel di bagian dada membuat ilusi bentuk tubuhmu terlihat lebih tinggi dan ramping</li>\r\n	<li>Karena Baju gamis terbaru ini mempunyai warna polos tentu memudahkan Kamu memadukannya dengan aneka warna jilbab</li>\r\n	<li>Baju berlengan panjang memberikan rasa hangat dalam cuaca dingin</li>\r\n	<li>ModelÂ <a href="http://www.coatsindustrial.com/id/information-hub/apparel-expertise/seam-types">jahitanÂ <em>â€˜Superimposedâ€™</em></a>Â kualitas butik menjamin Kamu mendapatkan baju gamis yang presisi, dan tidak mengkerut</li>\r\n</ul>\r\n\r\n<p><strong>Petunjuk perawatan Baju:</strong>.</p>\r\n\r\n<ul>\r\n	<li>Saat mencuci Jangan sekalipun baju di sikat karena bisa mengakibatkan permukaan kain menjadi kasar dan berserabut</li>\r\n	<li>Pisahkan baju dengan pakaian bertekstur kasar untuk menghindari kain sobek terkena gesekan / puntiran</li>\r\n	<li>Untuk menghindari permukaan kain bergaris bila kelebihan panas maka Setrikalah baju pada suhu medium dan diberi pelembab</li>\r\n	<li>Jangan sekalipun mencuci baju memakai pemutih sebab bisa membuat warna pudar</li>\r\n	<li>Untuk mencegah serat kain berserabut maka cucilah Busana wanita ini menggunakan detergen yang lembut sepertiÂ <a href="https://www.rinso.com/id/home.html">Rinso</a></li>\r\n</ul>\r\n\r\n<p>Bayangkan Kamu Terlihat makin modis mengenakanÂ Model Baju Gamis Terbaru Harga Murah Untuk Wanita Remaja BWM09 saat hangout bersama temanmu, pasti banyak orang mengagumi penampilanmu yang terlihat makin tinggi dan jenjang. Tunggu apa lagi, beli busana muslim terbaru ini sekarang hanya di BAJUBIZ selagi diskon 20%</p>', 'grey', 'PRODUK-0012', '', '', ''),
(58, 'wawawawawaw', 'pakian', 'Pt Pandanux', 79000, 100000, 100, 100, '2020-03-10 : 20:07', 'foto_barang/156770Model-Baju-Atasan-Wanita-Terbaru-2020-Lengan-Panjang-LINA95.jpg', '<p><a href="https://bajumurahonline.biz/product-category/model-baju-wanita/"><strong>Model Baju Atasan Wanita Terbaru 2020 Lengan Panjang LINA95</strong></a>&nbsp;&ndash; Apakah Kamu Wanita yang tidak percaya diri disebabkan bentuk tubuhmu yang kecil dan pendek? Jangan khawatir karena Model baju atasan yang berlengan panjang bisa membuat penampilan Kamu terlihat lebih tinggi dan ramping. Dan menurut para pakar kecantikan, baju atasan yang berlengan panjang bisa membuat ilusi bentuk tubuh terlihat lebih kecil dan proporsional.</p>\r\n\r\n<p>Tahun 2020 ini, beragam model baju atasan untuk wanita yang berlengan panjang mudah Kamu temukan di berbagai Toko Online dan Mall. Namun Kamu jangan asal-asalan memilih model baju yang cocok, karena bila salah memilih model bisa berakibat penampilan Kamu terlihat makin pendek dan bulat percis seperti balon. Jelas Kamu tidak mau mengalami masalah seperti itu? ya kan.</p>\r\n\r\n<p>Apakah Kamu ingin mengenakan model baju atasan terbaru yang berlengan panjang agar penampilan terlihat makin anggun dan menawan sekaligus rasa percaya diri makin meningkat?</p>\r\n\r\n<p>&ldquo;Betul sekali!&rdquo; katamu</p>\r\n\r\n<p>Percayakan saja Model Baju Atasan Wanita Terbaru 2020 Lengan Panjang LINA95. Kenapa? Karena Model Busana keluaran terbaru 2020 ini bisa mendukung penampilan Kamu makin percaya diri walau berada di keramaian.</p>\r\n\r\n<p>Apa keistimewaan Model Baju Atasan Wanita Terbaru 2020 Lengan Panjang LINA90?</p>\r\n\r\n<ul>\r\n	<li>Terbuat dari kain Moscrepe premium yang terasa lembut di kulit membuat badan merasa sejuk WALAU dalam kondisi cuaca panas</li>\r\n	<li>Model Baju kekinian Kamu bisa mengenakan dalam aneka situasi baik saat santai maupun formal</li>\r\n	<li>Berwarna cerah, memudahkan Kamu memadukan dengan aneka warna celana</li>\r\n	<li>Karena Baju ini berlengan panjang maka memberikan rasa hangat dalam ruangan ber AC</li>\r\n	<li>Jahitan ornamental kualitas butik sehingga memastikan Kamu mendapatkan baju atasan terbaru yang kuat, rapi, presisi dan tidak mengkerut</li>\r\n	<li>Desain modern sehingga bisa Kamu gunakan sebagai pengganti jaket dalam kondisi hujan</li>\r\n</ul>\r\n\r\n<p><strong>Perawatan Baju:</strong></p>\r\n\r\n<ul>\r\n	<li>Cuci baju menggunakan soft detergen sehingga warna tidak cepat kusam</li>\r\n	<li>Jangan dicuci pakaian wanita ini memakai pemutih. karena bisa mengakibatkan warna luntur</li>\r\n	<li>Untuk mencegah kain tidak melar&nbsp; maka sebaiknya disetrika baju wanita ini pada suhu medium dan diberi pelembab.</li>\r\n	<li>Karena bahan kain sangat lembut maka saat mencuci jangan disikat agar serat kain tetap halus dan mulus tidak berserabut</li>\r\n	<li>Bila mencuci sebaiknya dikucek jangan disikat untuk menghindari mutiara terlepas</li>\r\n	<li>Pisahkan baju atasan ini dengan baju kotor untuk menghindari terkena imbas kotoran dari baju lainnya</li>\r\n</ul>\r\n\r\n<p>Bayangkan Model Baju Atasan Wanita Terbaru 2020 Lengan Panjang LINA95 memunculkan kesan anggun saat Kamu kenakan di acara pesta ulang tahun temanmu, jangan heran jika banyak orang mengagumi bentuk badan Kamu yang terlihat makin tinggi dan jenjang. Pesan model baju ini hanya di Bajubiz mumpung diskon 15% hingga akhir bulan februari 2020 dan stok terbatas</p>\r\n\r\n<p>Membeli Model Baju Atasan Wanita Terbaru 2020 Lengan Panjang LINA95 di BAJUBIZ adalah keputusan yang sangat tepat. Berdasarkan kiriman Email maupun WA dari pembeli yang kami baca, Banyak dari mereka yang merasa sangat puas dengan model busana wanita yang satu ini. Percayalah BAJUBIZ Hanya menjual busana terbaru kualitas Butik yang berkualitas</p>\r\n', 'brown', 'PRODUK-0013', '<p>Spesifikasi:</p>\r\n\r\n<ul>\r\n	<li>Bahan: Moscrepe HQ</li>\r\n	<li>Model: Baju Atasan</li>\r\n	<li>Ukuran: XL</li>\r\n	<li>Warna: Coklat</li>\r\n	<li>Lingkar dada: 104 cm</li>\r\n	<li>Panjang lengan: 56 cm</li>\r\n	<li>Panjang baju: 110 cm</li>\r\n</ul>\r\n\r\n<p><strong>Pengiriman:</strong></p>\r\n\r\n<ul>\r\n	<li>P. Jawa 2 &ndash; 7 hari</li>\r\n	<li>Luar Jawa 5 &ndash; 7 hari</li>\r\n</ul>\r\n\r\n<p><strong>Garansi:</strong></p>\r\n\r\n<ul>\r\n	<li>Garansi 30 hari uang kembali</li>\r\n</ul>\r\n', 'awdaw', 'awdawdawd'),
(60, 'wawa', 'Baju', 'Pt Pandanux', 5000, 650000, 5, 5, '2020-03-29 : 18:24', 'foto_barang/548701kasus3.jpg', '<p>awd</p>', 'pink', 'PRODUK-0014', '<p>awd</p>', 'awd', 'awd');

-- --------------------------------------------------------

--
-- Table structure for table `barang_laku`
--

CREATE TABLE `barang_laku` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `laba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_laku`
--

INSERT INTO `barang_laku` (`id`, `tanggal`, `nama`, `jumlah`, `harga`, `total_harga`, `laba`) VALUES
(198, '2020-03-29', 'baju perempuan', 9, 50000, 450000, 135000),
(199, '2020-03-29', 'Celana Cino', 7, 50000, 350000, 171500),
(200, '2020-03-29', 'topi laki', 8, 50000, 400000, 296000),
(202, '2020-03-30', 'iphone 7', 70, 3500000, 245000000, 105000000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `active` varchar(3) NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `active`) VALUES
(1, 'ABOUT US', 'yes'),
(66, 'Website', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `counter` varchar(20) NOT NULL,
  `browser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(29, '2019-07-01', '::1', '1', 'Chrome/Opera'),
(31, '2019-07-01', '11.11.11.7', '1', ''),
(32, '2019-07-01', '::1', '1', 'Chrome/Opera'),
(33, '2019-07-01', '11.11.11.7', '1', ''),
(34, '2019-07-01', '11.11.11.7', '1', ''),
(35, '2019-07-01', '11.11.11.7', '1', ''),
(36, '2019-07-01', '::1', '1', 'Chrome/Opera'),
(37, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(38, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(39, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(40, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(41, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(42, '2019-07-02', '::1', '1', 'Chrome/Opera'),
(43, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(44, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(45, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(46, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(47, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(48, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(49, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(50, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(51, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(52, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(53, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(54, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(55, '2019-07-03', '::1', '1', 'Chrome/Opera'),
(56, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(57, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(58, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(59, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(60, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(61, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(62, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(63, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(64, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(65, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(66, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(67, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(68, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(69, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(70, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(71, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(72, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(73, '2019-07-04', '::1', '1', 'Chrome/Opera'),
(74, '2019-07-07', '::1', '1', 'Chrome/Opera'),
(75, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(76, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(77, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(78, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(79, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(80, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(81, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(82, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(83, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(84, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(85, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(86, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(87, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(88, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(89, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(90, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(91, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(92, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(93, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(94, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(95, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(96, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(97, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(98, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(99, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(100, '2019-07-08', '::1', '1', 'Chrome/Opera'),
(101, '2019-07-09', '::1', '1', 'Chrome/Opera'),
(102, '2019-07-09', '::1', '1', 'Firefox'),
(103, '2019-07-09', '::1', '1', 'Chrome/Opera'),
(104, '2019-07-10', '::1', '1', 'Chrome/Opera'),
(105, '2019-07-10', '::1', '1', 'Chrome/Opera'),
(106, '2019-07-10', '11.11.11.18', '1', ''),
(107, '2019-07-10', '::1', '1', 'Chrome/Opera'),
(108, '2020-02-09', '::1', '1', 'Chrome/Opera'),
(109, '2020-02-17', '::1', '1', 'Chrome/Opera'),
(110, '2020-02-17', '::1', '1', 'Chrome/Opera'),
(111, '2020-02-25', '::1', '1', 'Chrome/Opera'),
(112, '2020-02-27', '::1', '1', 'Chrome/Opera'),
(113, '2020-02-27', '::1', '1', 'Chrome/Opera'),
(114, '2020-02-28', '::1', '1', 'Chrome/Opera'),
(115, '2020-02-28', '::1', '1', 'Chrome/Opera'),
(116, '2020-02-29', '::1', '1', 'Chrome/Opera'),
(117, '2020-03-02', '::1', '1', 'Chrome/Opera'),
(118, '2020-03-02', '::1', '1', 'Chrome/Opera'),
(119, '2020-03-02', '::1', '1', 'Chrome/Opera'),
(120, '2020-03-02', '::1', '1', 'Chrome/Opera'),
(121, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(122, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(123, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(124, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(125, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(126, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(127, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(128, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(129, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(130, '2020-03-03', '::1', '1', 'Chrome/Opera'),
(131, '2020-03-04', '::1', '1', 'Chrome/Opera'),
(132, '2020-03-04', '::1', '1', 'Chrome/Opera'),
(133, '2020-03-04', '::1', '1', 'Chrome/Opera'),
(134, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(135, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(136, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(137, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(138, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(139, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(140, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(141, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(142, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(143, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(144, '2020-03-05', '::1', '1', 'Chrome/Opera'),
(145, '2020-03-06', '::1', '1', 'Chrome/Opera'),
(146, '2020-03-06', '::1', '1', 'Chrome/Opera'),
(147, '2020-03-06', '::1', '1', 'Chrome/Opera'),
(148, '2020-03-06', '::1', '1', 'Chrome/Opera'),
(149, '2020-03-07', '::1', '1', 'Chrome/Opera'),
(150, '2020-03-07', '::1', '1', 'Chrome/Opera'),
(151, '2020-03-07', '::1', '1', 'Chrome/Opera'),
(152, '2020-03-08', '::1', '1', 'Chrome/Opera'),
(153, '2020-03-08', '::1', '1', 'Chrome/Opera'),
(154, '2020-03-08', '::1', '1', 'Chrome/Opera'),
(155, '2020-03-09', '::1', '1', 'Chrome/Opera'),
(156, '2020-03-09', '12.12.12.3', '1', ''),
(157, '2020-03-09', '12.12.12.3', '1', ''),
(158, '2020-03-09', '::1', '1', 'Chrome/Opera'),
(159, '2020-03-09', '12.12.12.3', '1', ''),
(160, '2020-03-09', '::1', '1', 'Chrome/Opera'),
(161, '2020-03-09', '12.12.12.3', '1', ''),
(162, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(163, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(164, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(165, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(166, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(167, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(168, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(169, '2020-03-10', '::1', '1', 'Chrome/Opera'),
(170, '2020-03-12', '::1', '1', 'Chrome/Opera'),
(171, '2020-03-12', '::1', '1', 'Chrome/Opera'),
(172, '2020-03-13', '::1', '1', 'Chrome/Opera'),
(173, '2020-03-13', '110.138.82.73', '1', 'Chrome/Opera'),
(174, '2020-03-14', '103.10.66.71', '1', 'Chrome/Opera'),
(175, '2020-03-15', '110.138.82.40', '1', 'Chrome/Opera'),
(176, '2020-03-15', '110.138.82.40', '1', 'Chrome/Opera'),
(177, '2020-03-15', '94.237.68.152', '1', 'Chrome/Opera'),
(178, '2020-03-15', '116.206.13.172', '1', 'Chrome/Opera'),
(179, '2020-03-15', '103.10.66.21', '1', 'Chrome/Opera'),
(180, '2020-03-15', '180.244.208.203', '1', 'Chrome/Opera'),
(181, '2020-03-15', '180.244.208.203', '1', 'Chrome/Opera'),
(182, '2020-03-15', '180.244.208.203', '1', 'Chrome/Opera'),
(183, '2020-03-18', '36.69.213.100', '1', 'Chrome/Opera'),
(184, '2020-03-18', '::1', '1', 'Chrome/Opera'),
(185, '2020-03-18', '::1', '1', 'Chrome/Opera'),
(186, '2020-03-18', '::1', '1', 'Chrome/Opera'),
(187, '2020-03-19', '::1', '1', 'Chrome/Opera'),
(188, '2020-03-19', '::1', '1', 'Chrome/Opera'),
(189, '2020-03-21', '::1', '1', 'Chrome/Opera'),
(190, '2020-03-22', '::1', '1', 'Chrome/Opera'),
(191, '2020-03-24', '::1', '1', 'Chrome/Opera'),
(192, '2020-03-24', '::1', '1', 'Chrome/Opera'),
(193, '2020-03-24', '::1', '1', 'Chrome/Opera'),
(194, '2020-03-24', '::1', '1', 'Chrome/Opera'),
(195, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(196, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(197, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(198, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(199, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(200, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(201, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(202, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(203, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(204, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(205, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(206, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(207, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(208, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(209, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(210, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(211, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(212, '2020-04-01', '::1', '1', 'Chrome/Opera'),
(213, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(214, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(215, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(216, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(217, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(218, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(219, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(220, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(221, '2020-03-31', '::1', '1', 'Chrome/Opera'),
(222, '2020-04-01', '12.12.12.2', '1', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `idkategori` int(5) NOT NULL,
  `foto_nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `userfile` varchar(50) DEFAULT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `idkategori`, `foto_nama`, `isi`, `userfile`, `meta_key`, `meta_des`) VALUES
(123, 2, 'projek sumbawa', '<p>awdaw</p>', 'foto_upload/107241latihan3.jpg', 'awda', 'awd'),
(124, 6, 'awd', '<p>awd</p>\r\n', 'foto_upload/382408kasus2.jpg', 'awd', 'awd'),
(125, 6, 'awd', '<p>awd</p>', 'foto_upload/916914teori.jpg', 'wd', 'aawd');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(10) NOT NULL,
  `namakategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(2, 'Profil'),
(6, 'Olahraga'),
(13, 'TUGAS TEORI 1 PEMROGRAMAN'),
(14, 'TUGAS PRAKTIKUM 1 PEMROGR');

-- --------------------------------------------------------

--
-- Table structure for table `kategorifoto`
--

CREATE TABLE `kategorifoto` (
  `idkategori` int(10) NOT NULL,
  `namakategori` varchar(25) NOT NULL,
  `active` varchar(15) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorifoto`
--

INSERT INTO `kategorifoto` (`idkategori`, `namakategori`, `active`) VALUES
(2, 'Profil', 'yes'),
(6, 'Olahraga', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `post_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'assets/img/avatar.png',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `approved` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `post_id`, `comment`, `avatar`, `author`, `date`, `time`, `approved`) VALUES
(34, 'Drag and Drop Admin Layout Parameter Fleksibel Wid', 'Wawa dmna kau berada', 'assets/img/avatar.png', 'Dwiki', '01 April 2020', '05:16', 'yes'),
(35, 'Detail baju muslim wanita RKO 021', 'Hayoaaa', 'assets/img/avatar.png', 'wawa', '03 April 2020', '21:21', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `isi_kontak` text NOT NULL,
  `tgl_input_kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `isi_kontak`, `tgl_input_kontak`) VALUES
(1, 'Dwiki', 'dwolo12@gmail.com', 'wwawda', '02 Apr 2020 ');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `category_id` int(5) NOT NULL,
  `page_title` varchar(30) NOT NULL,
  `page_content` longtext NOT NULL,
  `meta_description` varchar(160) NOT NULL,
  `meta_keywords` varchar(160) NOT NULL,
  `active` varchar(3) NOT NULL,
  `page_gambar` text NOT NULL,
  `page_date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `category_id`, `page_title`, `page_content`, `meta_description`, `meta_keywords`, `active`, `page_gambar`, `page_date`) VALUES
(1, 1, 'About TRISI', '<p><samp>PT. TRISI ENERGI INDONESIA&nbsp;</samp></p>\r\n\r\n<p><samp>Perusahaan Kontraktor yang bergerak di bidang pengadaan dan jasa pemasangan barang Mekankal Elektrikal. Berdiri Pada 30 Mei 2010, berdasarkan akta notaris H.Zaffrullah Hidayat, S.H M. Kn.</samp></p>\r\n\r\n<p><samp>PT. TRISI ENERGI INDONESIA&nbsp;Telah bermitra dengan PT.PLN(Persero) Area pengatur Distribusi Jakarta, Area Pengatur Distribusi Banten, dan PT. PLN Area Sejabodetabek sejak 2010 hingga saat ini.</samp></p>\r\n\r\n<hr />\r\n<p><samp>VISI</samp></p>\r\n\r\n<p><samp>Melayani serta memberi inovasi-inovasi baru kepada konsumen dalam bidang kelistrikan dan konstruksi.</samp></p>\r\n\r\n<hr />\r\n<p><samp>MISI</samp></p>\r\n\r\n<p><samp>Menjadi perusahaan yang senantiasa termotivasi untuk melayani&nbsp; dan memusakan konsumen dan turut berperan serta menunjang pembangunan dari sisi usaha yang kami bidangi.</samp></p>\r\n\r\n<ol>\r\n	<li><samp>dwiki</samp></li>\r\n	<li><samp>dwiki</samp></li>\r\n	<li><samp>dwiki</samp></li>\r\n	<li><samp>dwiki</samp></li>\r\n	<li><samp>dwiki</samp></li>\r\n</ol>\r\n', 'About TRISI', 'PT. TRISI ENERGI INDONESIA   Perusahaan Kontraktor yang bergerak di bidang pengadaan dan jasa pemasangan barang Mekankal Elektrikal. Berdiri Pada 30 Mei 2010, b', 'yes', 'foto_halaman/301638sbadmin.jpg', '19 Jul 2019 '),
(51, 66, 'Website Compny', '<h3>Website</h3>\r\n\r\n<h4>Website Compny&nbsp;<em>Dwiki.id</em></h4>\r\n\r\n<p>..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Web Company profile</strong></em>&nbsp;adalah suatu media yang berfungsi sebagai sarana komunikasi/penyampaian informasi tertentu tentang perusahaan pada pihak-pihak yang membutuhkan, baik di dalam maupun di luar perusahaan.</p>\r\n\r\n<p>Kegunaan&nbsp;dan manfaat company profile sangat banyak salah satunya yaitu sebagai alat marketing atau media promosi untuk memperoleh klien atau customer, dan disetiap manfaat dan kegunaannya nanti dipengaruhi oleh bentuk desain dan kelengkapan data. Sehingga pada dasarnya company profile yang menariklah yang akan banyak pengunjung/klien, baik menarik dari segi image maupun tulisan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Company Profile terdiri dari berbagai jenis media, antara lain :</em></strong></p>\r\n\r\n<hr />\r\n<p>1.Media cetak, misalnya katalog album, brosur, iklan di majalah dan koran</p>\r\n\r\n<p>2.Media Elektronik, misalnya iklan di radio dan televisi</p>\r\n\r\n<p>3.Media CD/DVD yang berisi presentasi dalam bentuk video ataupun flash</p>\r\n\r\n<p>4.Media online di internet yang biasa dikenal dengan Web Company Profile</p>\r\n\r\n<p>Dari berbagai jenis media di atas, yang mulai banyak dipergunakan adalah Website Company Profile. Apa saja kelebihan Website Company Profile itu ???<br />\r\n- Biaya lebih murah bahkan bisa gratis, silahkan bandingkan dengan biaya cetak pembuatan katalog atau brosur. Anda bisa menanyakan biayanya di Jasa Pembuatan Web Company Profile.</p>\r\n\r\n<p>- Jangkauan penyebaran atau promosi yang lebih luas, karena menggunakan media online internet sebagai sarana, maka web company profile bisa diakses dari manapun, dari seluruh penjuru dunia.</p>\r\n\r\n<p>- Lebih Efektif, calon klien atau customer atau klien bisa berinteraksi langsung dengan perusahaan misalnya melalui fasilitas chatting Yahoo Messenger</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contoh webcompny Hasil kami</strong>&nbsp;<a href="https://trisienergiindo.com/">trisienergiindo.com</a></p>\r\n', 'awdaw', 'wawd', 'yes', 'foto_halaman/509892praktikum.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages_komentar`
--

CREATE TABLE `pages_komentar` (
  `id` int(11) NOT NULL,
  `post_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'assets/img/avatar.png',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `approved` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_komentar`
--

INSERT INTO `pages_komentar` (`id`, `post_id`, `comment`, `avatar`, `author`, `date`, `time`, `approved`) VALUES
(34, 'About TRISI', 'Wawa dmna kau berada', 'assets/img/avatar.png', 'Dwiki', '01 April 2020', '05:16', 'yes'),
(35, 'Detail baju muslim wanita RKO 021', 'Hayoaaa', 'assets/img/avatar.png', 'wawa', '03 April 2020', '21:21', 'Yes'),
(37, 'Website Compny', 'awdawd', 'assets/img/avatar.png', 'Tes', '04 April 2020', '00:20', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `tanggal_post` varchar(50) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `userfile` varchar(100) NOT NULL,
  `active` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `views` int(11) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `tanggal_post`, `penulis`, `judul`, `isi`, `idkategori`, `userfile`, `active`, `views`, `meta_key`, `meta_des`) VALUES
(62, '2020-03-06 : 21:49', 'Dwiki Firmansyah', 'Detail baju muslim wanita RKO 021', '<h2>Harga Rp 174.000</h2>\n\n<form action="https://www.sepatuindonesia.com/keranjangbelanja/add/16873.html" method="post">\n<p>Produk baju muslim wanita RKO 021 yang siap menemani anda sehari-hari. Baju muslim wanita RKO 021 merupakan baju muslim wanita yang nyaman untuk dipakai, bahannya bagus dan modelnya trendy, terbuat dari bahan&nbsp;<em>cotton,&nbsp;</em>baju wanita ini tersedia warna&nbsp;<em>abu-abu,</em>&nbsp;dengan ukuran&nbsp;<em>l, m, s, xl.</em></p>\n\n<p>Desain baju muslim wanita RKO 021 yang elegan membuat penampilan anda semakin sempurna. Dijamin anda akan lebih percaya diri dan fashionable.</p>\n\n<p>Foto produk baju muslim wanita RKO 021 adalah foto asli (real picture), tidak direkayasa, kalaupun ada sedikit perbedaan antara foto dengan aslinya maksimal 5% - 10%, karena pengaruh cahaya sekitar ketika foto produk baju wanita ini difoto camera.</p>\n\n<p>Ayo dapatkan segera salah satu produk terbaik kami ini, untuk pemesanan baju muslim wanita RKO 021 bisa melalui Whataspps / SMS berikut&nbsp;<a href="https://wa.me/6282219336347?text=Saya%20mau%20pesan%20baju%20muslim%20wanita%20RKO%20021%20info%20produk%20https://www.sepatuindonesia.com/baju-wanita/id/16873/baju-muslim-wanita-rko-021.html" target="_blank">082219336347</a>&nbsp;atau&nbsp;<a href="https://wa.me/6281221867994?text=Saya%20mau%20pesan%20baju%20muslim%20wanita%20RKO%20021%20info%20produk%20https://www.sepatuindonesia.com/baju-wanita/id/16873/baju-muslim-wanita-rko-021.html" target="_blank">081221867994</a></p>\n&nbsp;\n\n<table>\n	<thead>\n		<tr>\n			<th scope="col">Ukuran</th>\n			<th scope="col">Stok</th>\n			<th scope="col">Terakhir update</th>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>S</td>\n			<td>6</td>\n			<td>09 Mar 2020</td>\n		</tr>\n		<tr>\n			<td>M</td>\n			<td>0</td>\n			<td>09 Mar 2020</td>\n		</tr>\n		<tr>\n			<td>L</td>\n			<td>5</td>\n			<td>09 Mar 2020</td>\n		</tr>\n		<tr>\n			<td>XL</td>\n			<td>0</td>\n			<td>09 Mar 2020</td>\n		</tr>\n	</tbody>\n</table>\n\n<hr />\n<p>Model:<br />\n<select name="model">&nbsp;<option selected="selected" value="131">Cotton</option>&nbsp;</select></p>\n\n<hr />\n<p>Warna:<br />\n<select name="color">&nbsp;<option selected="selected" value="14">Abu-abu</option>&nbsp;</select></p>\n\n<hr />\n<p>Ukuran:<br />\n<select name="size">&nbsp;<option selected="selected" value="85">L</option>&nbsp;<option value="84">M</option>&nbsp;<option value="83">S</option>&nbsp;<option value="86">XL</option>&nbsp;</select></p>\n\n<hr />\n<p>Jumlah yang akan dibeli:<br />\n<select name="quantity">&nbsp;<option selected="selected" value="1">1</option>&nbsp;<option value="2">2</option>&nbsp;<option value="3">3</option>&nbsp;<option value="4">4</option>&nbsp;<option value="5">5</option>&nbsp;<option value="6">6</option>&nbsp;<option value="7">7</option>&nbsp;<option value="8">8</option>&nbsp;<option value="9">9</option>&nbsp;<option value="10">10</option>&nbsp;<option value="11">11</option>&nbsp;<option value="12">12</option>&nbsp;<option value="13">13</option>&nbsp;<option value="14">14</option>&nbsp;<option value="15">15</option>&nbsp;<option value="16">16</option>&nbsp;<option value="17">17</option>&nbsp;<option value="18">18</option>&nbsp;<option value="19">19</option>&nbsp;<option value="20">20</option>&nbsp;<option value="21">21</option>&nbsp;<option value="22">22</option>&nbsp;<option value="23">23</option>&nbsp;<option value="24">24</option>&nbsp;<option value="25">25</option>&nbsp;<option value="26">26</option>&nbsp;<option value="27">27</option>&nbsp;<option value="28">28</option>&nbsp;<option value="29">29</option>&nbsp;<option value="30">30</option>&nbsp;<option value="31">31</option>&nbsp;<option value="32">32</option>&nbsp;<option value="33">33</option>&nbsp;<option value="34">34</option>&nbsp;<option value="35">35</option>&nbsp;<option value="36">36</option>&nbsp;<option value="37">37</option>&nbsp;<option value="38">38</option>&nbsp;<option value="39">39</option>&nbsp;<option value="40">40</option>&nbsp;<option value="41">41</option>&nbsp;<option value="42">42</option>&nbsp;<option value="43">43</option>&nbsp;<option value="44">44</option>&nbsp;<option value="45">45</option>&nbsp;<option value="46">46</option>&nbsp;<option value="47">47</option>&nbsp;<option value="48">48</option>&nbsp;<option value="49">49</option>&nbsp;<option value="50">50</option>&nbsp;<option value="51">51</option>&nbsp;<option value="52">52</option>&nbsp;<option value="53">53</option>&nbsp;<option value="54">54</option>&nbsp;<option value="55">55</option>&nbsp;<option value="56">56</option>&nbsp;<option value="57">57</option>&nbsp;<option value="58">58</option>&nbsp;<option value="59">59</option>&nbsp;<option value="60">60</option>&nbsp;<option value="61">61</option>&nbsp;<option value="62">62</option>&nbsp;<option value="63">63</option>&nbsp;<option value="64">64</option>&nbsp;<option value="65">65</option>&nbsp;<option value="66">66</option>&nbsp;<option value="67">67</option>&nbsp;<option value="68">68</option>&nbsp;<option value="69">69</option>&nbsp;<option value="70">70</option>&nbsp;<option value="71">71</option>&nbsp;<option value="72">72</option>&nbsp;<option value="73">73</option>&nbsp;<option value="74">74</option>&nbsp;<option value="75">75</option>&nbsp;<option value="76">76</option>&nbsp;<option value="77">77</option>&nbsp;<option value="78">78</option>&nbsp;<option value="79">79</option>&nbsp;<option value="80">80</option>&nbsp;<option value="81">81</option>&nbsp;<option value="82">82</option>&nbsp;<option value="83">83</option>&nbsp;<option value="84">84</option>&nbsp;<option value="85">85</option>&nbsp;<option value="86">86</option>&nbsp;<option value="87">87</option>&nbsp;<option value="88">88</option>&nbsp;<option value="89">89</option>&nbsp;<option value="90">90</option>&nbsp;<option value="91">91</option>&nbsp;<option value="92">92</option>&nbsp;<option value="93">93</option>&nbsp;<option value="94">94</option>&nbsp;<option value="95">95</option>&nbsp;<option value="96">96</option>&nbsp;<option value="97">97</option>&nbsp;<option value="98">98</option>&nbsp;<option value="99">99</option>&nbsp;<option value="100">100</option>&nbsp;</select></p>\n\n<hr />\n<p>&nbsp;</p>\n<strong>Catatan:</strong><br />\n* Langsung dikirim dihari yang sama setelah pembayaran !!<br />\n* Harga belum termasuk ongkos kirim<br />\n* Setelah pengiriman nomor resi pasti selalu kami informasikan</form>\n', '13', 'foto_blog/589334baju_muslim_wanita_RKO_021.jpg', 'yes', 11, 'wadaw', 'awdawd'),
(63, '2020-03-09 : 08:44', 'Dwiki Firmansyah', 'PENJELASAN LISTRIK PINTAR', '<p><samp>istrik Pintar adalah pembayaran listrik dengan cara prabayar. Pada sistem listrik pintar, pelanggan menggunakan listrik sesuai dengan pembelian token atau pulsa listrik, jika token sudah limit, maka pemakai harus mengisi ulang token listrik. Karena listrik sudah menjadi kebutuhan sehari-hari, maka penting untuk kita mencari cara untuk membeli token listrik ini.</samp></p>\r\n\r\n<p><samp>Sebelum beli token listrik, ada baiknya Anda terlebih dahulu&nbsp;cek token listrik&nbsp;yang tersisa di rumah Anda. Walaupun terdapat berbagai macam merk meteran listrik, cara mengecek sisa token listrikpun mudah sekali. Anda bisa ikuti langkah-langkah berikut.</samp></p>\r\n\r\n<ul>\r\n	<li><samp>Merk Hexing, tekan angka 801 lalu&nbsp;tekan enter. Sisa token akan muncul.</samp></li>\r\n	<li><samp>Merk Conlog, Anda bisa melihat sisa token listrik pada monitor. Pada Monitor terdapat kWH dan angka xxxx</samp></li>\r\n	<li><samp>Merk Star, tekan angka 07 setelah itu tekan enter.</samp></li>\r\n	<li><samp>Merk Itron, bisa langsung lihat di monitor. Di monitor terdapat kWH dan angka xxxx</samp></li>\r\n</ul>\r\n\r\n<p><samp>Setelah Anda mengetahui sisa token listrik yang ada, Anda bisa menilai apakah memerlukan pengisian token listrik. Jika akan habis, segeralah melakukan pembelian token listrik. Sepulsa akan membahas mengenai cara pembelian token listrik dengan berbagai metode pembayaran.</samp></p>\r\n\r\n<h2><samp>1. Via online</samp></h2>\r\n\r\n<p><samp>Cara isi token PLN via online adalah pembelian secara online via mobile maupun PC. Kita bisa membeli pulsa listrik lewat beberapa website yang bisa membantu mengisi token listrik diantaranya adalah Sepulsa.com. Selain praktis dan cepat, kita juga bisa menghemat waktu dengan hanya melakukan transfer lewat e-banking saja. Berikut cara membeli token listrik secara online :</samp></p>\r\n\r\n<ol>\r\n	<li><samp>Masuk website&nbsp;<a href="https://www.sepulsa.com/?utm_source=blog&amp;utm_medium=artikel&amp;utm_campaign=blog_cara-pembelian-token-listrik-pintar">Sepulsa.com</a>, kemudian pilih tab token listrik</samp></li>\r\n	<li><samp>Masukan nomer ID pelanggan dan nomer handphone Anda</samp></li>\r\n	<li><samp>Pilih nominal token PLN yang diinginkan</samp></li>\r\n	<li><samp>Pilih voucher yang ingin didapatkan</samp></li>\r\n	<li><samp>Transfer lewat E-Banking</samp></li>\r\n	<li><samp>Dua puluh angka kode unik akan dikirimkan lewat sms ke nomor handphone Anda.</samp></li>\r\n</ol>\r\n\r\n<p><samp>Alasan kenapa kalian harus mengisi pulsa listrik di Sepulsa</samp></p>\r\n\r\n<ul>\r\n	<li><samp>Harga di&nbsp;<a href="https://www.sepulsa.com/?utm_source=blog&amp;utm_medium=artikel&amp;utm_campaign=blog_cara-pembelian-token-listrik-pintar">Sepulsa&nbsp;</a>lebih murah dibandingkan toko pulsa konvensional</samp></li>\r\n	<li><samp>Kalian akan mendapatkan 3 voucher belanja dengan nominal ratusan ribu dari ecommerce besar di Indonesia setiap bertransaksi pulsa.</samp></li>\r\n	<li><samp>Metode pembayaran praktis, kalian dapat mengisi pulsa melalui debit atau kartu kredit.</samp></li>\r\n	<li><samp>Klik&nbsp;<a href="https://www.sepulsa.com/?utm_source=blog&amp;utm_medium=artikel&amp;utm_campaign=blog_cara-pembelian-token-listrik-pintar">disini&nbsp;</a>untuk mengunjungi website sepulsa.com.</samp></li>\r\n</ul>\r\n\r\n<p><samp><img alt="banner-blog-carapembeliantoken-3-6apr2016.png" src="https://d1ffqr687y72wp.cloudfront.net/s3fs-public/banner/banner-blog-carapembeliantoken-3-6apr2016.png" style="height:120px; width:300px" /></samp></p>\r\n\r\n<h2><samp>2. Cara Isi Token PLN Lewat ATM</samp></h2>\r\n\r\n<p><samp>Ada beberapa bank yang menyediakan pelayanan pembelian token listrik lewat ATM. Berikut adalah cara transaksi pembelian token lewat atm di bank-bank tertentu :</samp></p>\r\n\r\n<h3><samp>ATM Mandiri</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih Pembayaran/Pembelian</samp></li>\r\n	<li><samp>Pilih Multi Payment</samp></li>\r\n	<li><samp>Ketik&nbsp;<strong>&ldquo;30300&rdquo;</strong></samp></li>\r\n	<li><samp>Masukkan No Meter (11 nomor)</samp></li>\r\n	<li><samp>Masukkan Nominal Pembelian</samp></li>\r\n	<li><samp>Ketik&nbsp;<strong>&ldquo;1&rdquo;</strong></samp></li>\r\n</ol>\r\n\r\n<h3><samp>ATM BCA</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih Transaksi Lainnya</samp></li>\r\n	<li><samp>Pilih Voucher isi Ulang</samp></li>\r\n	<li><samp>Pilih Lainnya</samp></li>\r\n	<li><samp>Pilih PLN Prepaid</samp></li>\r\n	<li><samp>Masukkan nomor Meter (11 nomor)</samp></li>\r\n	<li><samp>Pilih Nominal Voucher</samp></li>\r\n	<li><samp>Tekan Benar / Salah</samp></li>\r\n</ol>\r\n\r\n<h3><samp>ATM BNI</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih Pembayaran</samp></li>\r\n	<li><samp>PLN</samp></li>\r\n	<li><samp>PLN PRABAYAR</samp></li>\r\n	<li><samp>Pembelian Token</samp></li>\r\n	<li><samp>Masukan No meter (11 nomor, tambahkan &ldquo;0&rdquo; di depan no meter)</samp></li>\r\n	<li><samp>Pilih jenis&nbsp;<strong>&ldquo;0&rdquo;</strong></samp></li>\r\n	<li><samp>Pilih Nominal Pembelian</samp></li>\r\n</ol>\r\n\r\n<h3><samp>ATM Bukopin</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih ISI ULANG PULSA DAN LISTRIK</samp></li>\r\n	<li><samp>Pilih LISTRIK / PLN</samp></li>\r\n	<li><samp>Masukan Nomor Meter (11 nomor)</samp></li>\r\n	<li><samp>Pilih Nominal Pembelian</samp></li>\r\n</ol>\r\n\r\n<h3><samp>ATM NISP</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih MENU LAINNYA</samp></li>\r\n	<li><samp>Pilih PULSA ISI ULANG DAN PLN</samp></li>\r\n	<li><samp>Pilih PLN PRABAYAR</samp></li>\r\n	<li><samp>Masukan Nomor Meter (11 nomor)</samp></li>\r\n	<li><samp>Pilih Nominal Pembelian</samp></li>\r\n</ol>\r\n\r\n<h3><samp>ATM BRI</samp></h3>\r\n\r\n<ol>\r\n	<li><samp>Pilih Transaksi Lainnya</samp></li>\r\n	<li><samp>Pilih Pembayaran</samp></li>\r\n	<li><samp>Pilih PLN</samp></li>\r\n	<li><samp>Pilih Prabayar</samp></li>\r\n	<li><samp>Masukkan Nomor Meter (11 nomor)</samp></li>\r\n	<li><samp>Tekan Benar/Salah</samp></li>\r\n	<li><samp>Pilih Nominal Token / Voucher</samp></li>\r\n	<li><samp>Tekan Benar / Salah</samp></li>\r\n</ol>\r\n\r\n<p><samp><img alt="banner-blog-carapembeliantoken-2-6apr2016.png" src="https://d1ffqr687y72wp.cloudfront.net/s3fs-public/banner/banner-blog-carapembeliantoken-2-6apr2016.png" style="height:120px; width:300px" /></samp></p>\r\n\r\n<h2><samp>3. Di Tempat Penjualan Pulsa Listrik</samp></h2>\r\n\r\n<p><samp>Tempat yang menyediakan pulsa &ndash;pulsa eletrik untuk handphone biasanya juga menjual pulsa listrik yaitu counter handphone. Namun biasanya kita juga bisa membeli pada minimarket terdekat diantaranya Indomaret atau alfamart. Berikut cara membeli token listrik di minimarket serta counter terdekat :</samp></p>\r\n\r\n<ul>\r\n	<li><samp>Tunjukan ID pelanggan serta nomor meter ke kasir.</samp></li>\r\n	<li><samp>Informasikan nominal pulsa yang akan diisikan.</samp></li>\r\n	<li><samp>Setelah melakukan pembayaran, kasir akan memberikan 20 angka kode unik untuk isi ulang yang tertera di struk Anda</samp></li>\r\n	<li><samp>Input 20 angka tersebut ke meteran listrik untuk menambah pulsanya</samp></li>\r\n</ul>\r\n', '2', 'foto_blog/725662920399listrik.jpg', 'Yes', 190, 'sds', 'sdsd'),
(64, '2020-03-09 : 10:53', 'Dwiki Firmansyah', 'Drag and Drop Admin Layout Parameter Fleksibel Wid', '<p>Siapa propaganda Kardashian Gotze Guillermo sepak bola Shirley Maecenas akhir pekan. Waktu video Jules Bianchi Michael Malaysia elemen. hari Tolstoy Biro Gayet sebelum Pistorius perubahan sampai orang-orang Kim. Geldof Seotish Guillermo Williams atau tidak, adalah Morgan sepak bola Julie. James robot sejarah Malaysia ejekan dan baking dolor. Maya, serangkaian global jalan berjalan sungai Zellweger eu.<br />\r\n<a name="more"></a><br />\r\nMaskapai penerbangan sendok sambil menonton hidup microwave Ice serangan. Simon jalan Phasellus sapien berkabung chatting Renee Marquez. Sebuah Sochi, untuk hidup gerbang portugal belanda sapien elit. Curabitur est ray budweiser komersial, nelson pemain maya sehingga cabang jalan. Berkabung Michael, tidak memiliki besar, tidak ada egestas placerat Mattis. Nike ronaldo pencarian mereka tinggal, renee, selalu menonton ke danau. Setiap permainan konyol melati robin, biokimia mitra pengembang saya selalu Internasional. Stres epik massa sedih nibh burung jelek bahwa tidak ada harta Luis. Berkabung harga pot besok rok hadir McConaughey. Menonton Season Berikan buah persik Kinerja Schumacher Jerman Air Portugal.<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><a href="https://1.bp.blogspot.com/-BsVeWFOZl-4/XQoExkxidZI/AAAAAAAAAC8/Uma-69YGGaQbHvpzQDp0Tsoi8oc_S_SVwCLcBGAs/s1600/photography_i-see-a-pink-sky_084K.jpg"><img src="https://1.bp.blogspot.com/-BsVeWFOZl-4/XQoExkxidZI/AAAAAAAAAC8/Uma-69YGGaQbHvpzQDp0Tsoi8oc_S_SVwCLcBGAs/s320/photography_i-see-a-pink-sky_084K.jpg" style="height:214px; width:320px" /></a></p>\r\n\r\n<p>Matius John Rooney yang Neymar kelaparan cinta kacang Belanda. Avery Jennifer Renee berita gerbang tanah beku Conchita Philae. Hoffman lulus Guillermo alamuddin Geldof Lauren Sherman. Ebola di Tolstoy rok hari Goku, sepak bola resep saus Renee. Atau kadang-kadang suhu lebih, Jerman dan waktu untuk penerbangan, Jerman diameter. Penawaran fotografi Piala Portugal pergi dan Francisco di seluruh negeri. Morgan diameter Reserved epik, tetap ante dan Bacall. Non Inggris melakukan Williams, diktum termal Belanda. Mario, Jerman, dan masing-masing ingin Phelps Enquiry Zellweger. Neymar Ren&eacute;e tortor Aliquam Arcu wardega busur, audrey.</p>', '6', 'foto_blog/wawa.png', 'Yes', 56, '', ''),
(83, '29 Mar 2020', 'Dwiki Firmansyah', 'ascs', '<p>dawdaw awdajnawd awdanwjdanwjd awdjnawkjdnawd awdnawldnawldnawd&nbsp;</p>\r\n', '2', 'foto_blog/545172latihan2.jpg', 'Yes', 10, 'awd', 'awd');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penjelasan` text NOT NULL,
  `sosial_ig` varchar(100) NOT NULL,
  `sosial_fb` varchar(100) NOT NULL,
  `sosial_twitter` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `gambar2` varchar(150) NOT NULL,
  `gambar3` varchar(150) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_des` text NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama`, `penjelasan`, `sosial_ig`, `sosial_fb`, `sosial_twitter`, `email`, `no`, `alamat`, `gambar`, `gambar2`, `gambar3`, `meta_key`, `meta_des`, `maps`) VALUES
(1, 'Pandanux', '<p style="text-align:justify"><strong><span style="font-size:16px"><span style="font-family:Times New Roman,Times,serif"><samp>Dwiki.id Merupakan Sebuah Jasa Pembuatan Website Toko Online,Compny profile, Website sekolah, Website Instansi Pemerintahan, Website Pribadi&nbsp;Dan maintenance Networking, Yang dimana Jasa kami Cocok Untuk Ukm kecil atau baru mau merintis usaha dan bersaing&nbsp; di Dunia Digital Saat ini.</samp></span></span></strong></p>\r\n', 'https://www.instagram.com/dwikiye/', 'https://www.facebook.com/dwikiye', 'https://twitter.com/dwikiye', 'dwikiye@dwiki.id', '082110148225', 'Ko poncol bulak Rt02/017', 'foto_setting/209013Untitled-1.png', 'foto_setting/888205dwiki.ico', 'foto_setting/265473Dwiki.JPG', 'yayayay', '33', 'https://www.google.com/maps/embed/v1/place?q=Rmh%20Bapa%20Suyoto&key=AIzaSyDWZUI5nKoMuyafavgIz4KRhOsk_UkJrEI');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `datetime` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `last_update` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `status` enum('Pending','Responded','Closed','Waiting') COLLATE utf8_swedish_ci NOT NULL,
  `seen_user` varchar(5) COLLATE utf8_swedish_ci NOT NULL,
  `seen_admin` varchar(5) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user`, `subject`, `message`, `datetime`, `last_update`, `status`, `seen_user`, `seen_admin`) VALUES
(27, 'dwiki', 'nanya', 'itu iphone ada?', '2020-03-09 : 12:56:09', ' 2020-03-09 : 13:23:09', 'Responded', '1', '1'),
(26, 'demo', 'teslagi', 'teslagi', '2020-03-09 : 12:51:09', ' 2020-03-09 : 12:55:09', 'Waiting', '1', '1'),
(24, 'demo', 'awdaw', 'awdaw', '2020-03-09 : 12:38:09', ' 2020-03-09 : 14:51:09', 'Closed', '1', '1'),
(25, 'demo', 'wa', 'wad', '2020-03-09 : 12:50:09', ' 2020-03-09 : 12:51:09', 'Waiting', '1', '1'),
(28, 'dwiki', 'hallo bantuan', '1111', '2020-03-09 : 13:38:09', '2020-03-09 : 13:38:09', 'Pending', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_message`
--

CREATE TABLE `tickets_message` (
  `id` int(10) NOT NULL,
  `ticket_id` int(10) NOT NULL,
  `sender` enum('user','admin') COLLATE utf8_swedish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `datetime` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `tickets_message`
--

INSERT INTO `tickets_message` (`id`, `ticket_id`, `sender`, `user`, `message`, `datetime`) VALUES
(42, 24, 'admin', 'demo', 'gpp cuy', '2020-03-09 : 12:48:09'),
(41, 24, 'user', 'demo', 'knapa bang', '2020-03-09 : 12:49:09'),
(40, 24, 'admin', 'demo', 'iyahola', '2020-03-09 : 12:48:09'),
(43, 25, 'admin', 'demo', 'awdawda', '2020-03-09 : 12:50:09'),
(44, 25, 'user', 'demo', 'awdad', '2020-03-09 : 12:50:09'),
(45, 25, 'admin', 'demo', 'haiik', '2020-03-09 : 12:51:09'),
(46, 25, 'user', 'demo', 'bujek', '2020-03-09 : 12:51:09'),
(47, 26, 'admin', 'demo', 'ok coba lagi', '2020-03-09 : 12:54:09'),
(48, 26, 'user', 'demo', 'teslagi 2', '2020-03-09 : 12:54:09'),
(49, 26, 'admin', 'demo', 'tes tross', '2020-03-09 : 12:55:09'),
(50, 26, 'user', 'demo', 'teslagi 3', '2020-03-09 : 12:54:09'),
(51, 27, 'admin', 'dwiki', 'ada gann', '2020-03-09 : 12:56:09'),
(52, 27, 'user', 'dwiki', 'cara pembayaran nya gmna ya?', '2020-03-09 : 12:57:09'),
(53, 27, 'user', 'dwiki', 'wawa', '2020-03-09 : 12:57:09'),
(54, 27, 'user', 'dwiki', 'wad', '2020-03-09 : 12:59:09'),
(55, 27, 'user', 'dwiki', 'adawd', '2020-03-09 : 12:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(10) NOT NULL,
  `nama_tiket` varchar(50) NOT NULL,
  `email_tiket` varchar(100) NOT NULL,
  `kategori_tiket` varchar(50) NOT NULL,
  `subjek_tiket` varchar(100) NOT NULL,
  `url_tiket` text NOT NULL,
  `isi_tiket` text NOT NULL,
  `tgl_tiket` varchar(50) NOT NULL,
  `ip_tiket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_tiket`, `email_tiket`, `kategori_tiket`, `subjek_tiket`, `url_tiket`, `isi_tiket`, `tgl_tiket`, `ip_tiket`) VALUES
(1, 'waw', 'dwaw@gmail.com', 'Bugs', 'info', 'http://localhost:84/alfian/blog', 'hallo ada bug', '04 Apr 2020 ', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hak_akses` enum('member','atasan','admin','user') NOT NULL,
  `userfile` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `no` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '+62',
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_user`, `nama_user`, `email`, `username`, `password`, `hak_akses`, `userfile`, `keterangan`, `no`, `alamat`) VALUES
(46, '', 'Dwiki Firmansyah', 'dwikifirmansyah27@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'foto/latihan10.jpg', 'Low Skill!!!', '+6282110148215', 'kp poncol bulak RT02/017 Bekasi Selatan pekayon jaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baner`
--
ALTER TABLE `baner`
  ADD PRIMARY KEY (`id_baner`);

--
-- Indexes for table `baner_komentar`
--
ALTER TABLE `baner_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_barang`);

--
-- Indexes for table `barang_laku`
--
ALTER TABLE `barang_laku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `kategorifoto`
--
ALTER TABLE `kategorifoto`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `page_title` (`page_title`);

--
-- Indexes for table `pages_komentar`
--
ALTER TABLE `pages_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets_message`
--
ALTER TABLE `tickets_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idu` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baner`
--
ALTER TABLE `baner`
  MODIFY `id_baner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `baner_komentar`
--
ALTER TABLE `baner_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `barang_laku`
--
ALTER TABLE `barang_laku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kategorifoto`
--
ALTER TABLE `kategorifoto`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `pages_komentar`
--
ALTER TABLE `pages_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tickets_message`
--
ALTER TABLE `tickets_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
