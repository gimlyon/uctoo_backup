DELETE FROM `uctoo_attribute` WHERE model_id = (SELECT id FROM uctoo_model WHERE `name`='love' ORDER BY id DESC LIMIT 1);
DELETE FROM `uctoo_model` WHERE `name`='love' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `uctoo_love`;

DELETE FROM `uctoo_attribute` WHERE model_id = (SELECT id FROM uctoo_model WHERE `name`='love_comment' ORDER BY id DESC LIMIT 1);
DELETE FROM `uctoo_model` WHERE `name`='love_comment' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `uctoo_love_comment`;