SET CHARSET UTF8;
CREATE DATABASE IF NOT EXISTS twitter DEFAULT CHARACTER SET utf8;
USE twitter;

CREATE TABLE IF NOT EXISTS `tweet`
(
  `id`       int(11) NOT NULL AUTO_INCREMENT,
  `poster`   varchar(255) NOT NULL,
  `tweet`    text,
  PRIMARY KEY (`id`)
);

INSERT INTO `tweet`(`poster`, `tweet`) VALUES
('さくら', '春が来た〜'),
('もみじ', '秋が来た〜'),
('あさがお', '夏が来た〜'),
('つばき', '冬が来た〜');