CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `sex` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`,`sex`) VALUES
(1, 'MEN WATCH', '1', 'product-images/1.jpg', 1500.00,'M'),
(2, 'MEN WATCH', '2', 'product-images/2.jpg', 300.00,'M'),
(3, 'MEN WATCH', '3', 'product-images/3.jpg', 500.00,'M'),
(4, 'MEN WATCH', '4', 'product-images/4.jpg', 700.00,'M'),
(5, 'MEN WATCH', '5', 'product-images/5.jpg', 200.00,'M'),
(6, 'WOMEN WATCH', '6', 'product-images/6.jpg', 1100.00,'F'),
(7, 'WOMEN WATCH', '7', 'product-images/7.jpg', 1200.00,'F'),
(8, 'WOMEN WATCH', '8', 'product-images/8.jpg', 6100.00,'F'),
(9, 'WOMEN WATCH', '9', 'product-images/9.jpg', 200.00,'F'),
(10, 'WOMEN WATCH', '10', 'product-images/10.jpg', 300.00,'F');
