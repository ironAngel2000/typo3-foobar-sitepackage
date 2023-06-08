<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;


$elements = new elements();


$objConf_element1013 = $elements->newElement('textblock_1013','Vorschau Newseintrag');
$objConf_element1013->addColpos(15);

$intro_tt_element1013 = $objConf_element1013->addNewPalette('title','Intro');
$field = $intro_tt_element1013->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $intro_tt_element1013->addField('inhaltbild',2,'Inhaltsbild');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(1,1);
$field->setRenderWidth(1/2);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_SMALL);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_EXTRASMALL);

$field = $intro_tt_element1013->addField('header1',3,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element1013->addField('introtext',4,'Text');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

return $elements;
