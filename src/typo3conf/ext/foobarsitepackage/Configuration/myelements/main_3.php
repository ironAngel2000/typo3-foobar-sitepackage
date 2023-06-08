<?php

use FooBar\foobarSitePackage\foobarSitePackage;
use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;

$elements = new elements();

$objConf_element3 = $elements->newElement('textblock_3','Icon - Text - 3 Spalten');
//$objConf->addPaletteSprache();

$intro_tt_element3 = $objConf_element3->addNewPalette('title','Intro');

$field = $intro_tt_element3->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_tt_element3->addField('linkButton',2,'Link Details');
$field->setType(fieldconfig::FILETYPE_LINK);

$field = $intro_tt_element3->addField('textButton',2,'Bezeichnung Link Details');
$field->setType(fieldconfig::FILETYPE_TEXT);



$element_tx_element3 = $objConf_element3->addNewPalette('entry','Eintrag',foobarsitepackage::TABLE_TXFOOBARSITE);

$field = $element_tx_element3->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $element_tx_element3->addField('header1',3,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $element_tx_element3->addField('optHeadline',3,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $element_tx_element3->addField('bildgalerie',4,'Icon');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(1,1);
$field->setRenderWidth(1/3);// 1 = 100% von Maximaler Breite (Konfiguration CropsizeConfig)
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_SMALL);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_EXTRASMALL);


$field = $element_tx_element3->addField('introtext',5,'Text');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

$field = $element_tx_element3->addField('linkButton',5,'Link Details');
$field->setType(fieldconfig::FILETYPE_LINK);


return $elements;
