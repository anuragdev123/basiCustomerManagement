

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `normalphoto` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) ,
  `clickdate` varchar(25) ,
  
  `phonenumber` varchar(40) ,
  `city` varchar(25) ,
  `size` varchar(20) ,
  `clickedby` varchar(10) ,
  `numberofphoto` varchar(10),
  `totalamount` varchar(20)  ,
  `amountpaid` varchar(20)  ,
  `dueamount` varchar(20)  ,
  `comment` longtext ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;





CREATE TABLE IF NOT EXISTS `bookingphoto` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) ,
  `bookingdate` varchar(25) ,
  `functiondate` varchar(25) ,
  `occasiontype` varchar(40) ,
  `phonenumber` varchar(40) ,
  `size` varchar(20) ,
  `city` varchar(25) ,
  `numberofphoto(approx)` varchar(10),
  `totalamount` varchar(20)  ,
  `amountpaid` varchar(20)  ,
  `dueamount` varchar(20)  ,
  `comment` longtext ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `phonebook` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) ,
  `phonenumber` varchar(40) NOT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


