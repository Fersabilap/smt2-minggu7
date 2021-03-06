-- Struktur tabel untuk tabel `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `productid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oderdetail`
--

INSERT INTO `orderdetail` (`productid`, `orderid`, `price`, `quantity`) VALUES
(1, 37, 100000, 3),
(2, 36, 200000, 1),
(3, 39, 300000, 4),
(4, 40, 400000, 4);

-- --------------------------------------------------------

--
-- Table struktur untuk tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `datecreation` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `name`, `datecreation`, `status`, `username`) VALUES
(16, 'New Order', '2016-03-03', 0, 'acc2'),
(17, 'New Order', '2016-03-03', 0, 'acc2'),
(18, 'New Order', '2016-03-03', 0, 'acc2'),
(19, 'New Order', '2016-03-03', 0, 'acc2'),
(20, 'New Order', '2016-03-03', 0, 'acc2'),
(21, 'New Order', '2016-03-03', 0, 'acc2'),
(22, 'New Order', '2016-03-03', 0, 'acc2'),
(23, 'New Order', '2016-03-03', 0, 'acc2'),
(24, 'New Order', '2016-03-03', 0, 'acc2'),
(25, 'New Order', '2016-03-03', 0, 'acc2'),
(26, 'New Order', '2016-03-03', 0, 'acc2'),
(27, 'New Order', '2016-03-03', 0, 'acc2'),
(28, 'New Order', '2016-03-03', 0, 'acc2'),
(29, 'New Order', '2016-03-03', 0, 'acc2'),
(30, 'New Order', '2016-03-03', 0, 'acc2'),
(31, 'New Order', '2016-03-03', 0, 'acc2'),
(32, 'New Order', '2016-03-03', 0, 'acc2'),
(33, 'New Order', '2016-03-03', 0, 'acc2'),
(34, 'New Order', '2016-03-03', 0, 'acc2'),
(35, 'New Order', '2016-03-03', 0, 'acc2'),
(36, 'New Order', '2016-03-03', 0, 'acc2'),
(37, 'New Order', '2016-03-03', 0, 'acc2'),
(38, 'New Order', '2016-03-03', 0, 'acc2'),
(39, 'New Order', '2016-03-03', 0, 'acc2'),
(40, 'New Order', '2016-03-03', 0, 'acc2');

-- --------------------------------------------------------

--
--Struktur tabel untuk table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `description`) VALUES
(1, 'Sony1', 100000, 2, 'good'),
(2, 'Apple1', 200000, 3, 'good'),
(3, 'Samsung1', 300000, 4, 'good'),
(4, 'Apple2', 400000, 5, 'good');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk Tabel yang dibuang
--AUTO_INCREMENT untuk table 'order'
--
ALTER TABLE `orderr`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
--AUTO_INCREMENT untuk tabel 'product'
ALTER TABLE `product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;