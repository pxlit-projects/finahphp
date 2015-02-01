DROP TABLE IF EXISTS `bb_aanvraagtabel`;
CREATE TABLE IF NOT EXISTS `bb_aanvraagtabel` (
  `idRecord` int(11) NOT NULL AUTO_INCREMENT,
  `idMantel` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idHulpverlener` int(11) NOT NULL,
  `idRapport` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idM_compleet` int(1) NOT NULL DEFAULT '0',
  `idP_compleet` int(1) NOT NULL DEFAULT '0',
  `nahcategorie` varchar(65) NOT NULL default '',
  `relatie` varchar(65) NOT NULL default '',
  `relatieandere` varchar(65) NOT NULL default '',
  `leeftijdclient` varchar(65) NOT NULL default '',
  `leeftijdmantelzorger` varchar(65) NOT NULL default '',
  `openfield` varchar(100) NOT NULL default '',
  `test` int(1) NOT NULL default '1',
  `lastpageC` varchar(100) NOT NULL default 'client-step1.php',
  `lastpageM` varchar(100) NOT NULL default 'mantel-step1.php',
  PRIMARY KEY (`idRecord`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `bb_client`;
CREATE TABLE IF NOT EXISTS `bb_client` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `idPatient` int(11) NOT NULL,
  `variable` varchar(5) NOT NULL,
  `waarde` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `bb_mantel`;
CREATE TABLE IF NOT EXISTS `bb_mantel` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `idMantel` int(11) NOT NULL,
  `variable` varchar(5) NOT NULL,
  `waarde` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;