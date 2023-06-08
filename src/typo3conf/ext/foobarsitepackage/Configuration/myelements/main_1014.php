<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;


$elements = new elements();


$objConf_element1014 = $elements->newElement('textblock_1014','News Übersicht');

$intro_tt_element1014 = $objConf_element1014->addNewPalette('title','Intro');
$field = $intro_tt_element1014->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_tt_element1014->addField('hintergrundbild',3,'Hintergrundbild');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(16,10);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_LARGE);
$field->addCropSize(3,4,1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(3,2,1,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(2,3,1,cropsizeconfig::CROPSIZE_EXTRASMALL);
$field->setRenderWidth(1);


$field = $intro_tt_element1014->addField('bildHGOption',3,'Bild verhalten');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Bild scrollt mit');
$field->addOption('1','Bild fix im Hintergrund');
$field->addOption('2','Bild als Parallax');


$field = $intro_tt_element1014->addField('header1',4,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element1014->addField('optHeadline',4,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $intro_tt_element1014->addField('optNewsCount',4,'Anzahl News');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Alle Einträge');
$field->addOption('1','4 Einträge');


$field = $intro_tt_element1014->addField('pagelink',5,'Referenz');
$field->setType(fieldconfig::FILETYPE_PAGEREFERENCE);


return $elements;
