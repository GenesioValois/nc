CREATE TABLE IF NOT EXISTS `dog` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  `idade` varchar(30) NOT NULL,
  `origem` varchar(140) NOT NULL,
  `ingrus` varchar(140) NOT NULL,
  `foto` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

