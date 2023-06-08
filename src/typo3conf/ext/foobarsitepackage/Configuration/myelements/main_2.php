<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_element4 = $elements->newElement('textblock_2','Teaser - Bild und Text');
//$objConf->addPaletteSprache();

$intro_element2 = $objConf_element4->addNewPalette('title','Intro');

$field = $intro_element2->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_element2->addField('minhoehe',2,'Mindeshöhe');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','keine');
$field->addOption('1','mittel');
$field->addOption('2','hoch');


$field = $intro_element2->addField('hintergrundbild',3,'Hintergrundbild');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(16,10);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_LARGE);
$field->addCropSize(3,4,1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(3,2,1,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(2,3,1,cropsizeconfig::CROPSIZE_EXTRASMALL);
$field->setRenderWidth(1);


$field = $intro_element2->addField('bildHGOption',3,'Bild verhalten');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Bild scrollt mit');
$field->addOption('1','Bild fix im Hintergrund');
//$field->addOption('2','Bild als Parallax');


$field = $intro_element2->addField('header2',4,'Titel - Subheader');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_element2->addField('optTextmask',4,'Dunkler Texthintergrund');
$field->setType(fieldconfig::FILETYPE_CHECKBOX);

$field = $intro_element2->addField('header1',5,'Titel - Header');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_element2->addField('optHeadline',5,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $intro_element2->addField('introtext',6,'Introtext');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

$field = $intro_element2->addField('textausrichtung',6,'Verhalten Text');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Zentriert');
$field->addOption('1','Links');
$field->addOption('2','Rechts');


$field = $intro_element2->addField('inhalttext',7,'Inhalttext');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);



return $elements;