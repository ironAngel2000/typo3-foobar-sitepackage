<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_element1 = $elements->newElement('textblock_1','Kopfbild');

$intro_element1 = $objConf_element1->addNewPalette('title','Intro');
$field = $intro_element1->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$galerie_tx_element1 = $objConf_element1->addNewPalette('slider','Slider Eintrag',foobarsitepackage::TABLE_TXFOOBARSITE);

$field = $galerie_tx_element1->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $galerie_tx_element1->addField('bild',2,'Bild');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(1920,804);
$field->addCropSize(100,66,1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(100,66,1,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(100,66,1,cropsizeconfig::CROPSIZE_EXTRASMALL);
$field->setRenderWidth(1);// 1 = 100% von Maximaler Breite (Konfiguration CropsizeConfig)

$field = $galerie_tx_element1->addField('text_titel',3,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $galerie_tx_element1->addField('optHeadline',3,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');


return $elements;
