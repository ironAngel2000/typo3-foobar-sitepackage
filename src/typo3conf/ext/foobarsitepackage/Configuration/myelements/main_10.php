<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_element10 = $elements->newElement('textblock_10','Text mehrspalting');

$intro_tt_element10 = $objConf_element10->addNewPalette('title','Intro');
$field = $intro_tt_element10->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_tt_element10->addField('optPaddingTop',2,'kein Abstand nach oben');
$field->setType(fieldconfig::FILETYPE_CHECKBOX);

$field = $intro_tt_element10->addField('hintergrundbild',4,'Hintergrundbild');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(16,10);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_LARGE);
$field->addCropSize(3,4,1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(3,2,1,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(2,3,1,cropsizeconfig::CROPSIZE_EXTRASMALL);
$field->setRenderWidth(1);


$field = $intro_tt_element10->addField('bildHGOption',4,'Bild verhalten');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Bild scrollt mit');
$field->addOption('1','Bild fix im Hintergrund');

$field = $intro_tt_element10->addField('header2',5,'Titel - Header 2');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element10->addField('header1',6,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element10->addField('optHeadline',6,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $intro_tt_element10->addField('textausrichtung',6,'Ausrichtung Headline');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Zentriert');
$field->addOption('1','Links');
$field->addOption('2','Rechts');

$field = $intro_tt_element10->addField('optColCount',7,'Darstellung Spalten auf Desktop');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','1-Spaltig');
$field->addOption('1','2-Spaltig');
$field->addOption('2','3-Spaltig');
$field->addOption('3','4-Spaltig');


$field = $intro_tt_element10->addField('optPaddingBottom',8,'kein Abstand nach unten');
$field->setType(fieldconfig::FILETYPE_CHECKBOX);


$element_tx_element10 = $objConf_element10->addNewPalette('entry','Eintrag',foobarsitepackage::TABLE_TXFOOBARSITE);

$field = $element_tx_element10->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $element_tx_element10->addField('header1',3,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXTMULTILINE);

$field = $element_tx_element10->addField('optHeadline',3,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $element_tx_element10->addField('optHeadlineSize',3,'Headline Größe');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Kleine Subline');
$field->addOption('1','Headline Standard');

$field = $element_tx_element10->addField('introtext',4,'Text');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);


return $elements;
