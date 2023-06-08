<?php
use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_element5 = $elements->newElement('textblock_5','Bildergalerie');

$intro_element5 = $objConf_element5->addNewPalette('title','Intro');
$field = $intro_element5->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_element5->addField('bild',2,'Bilder (Galerie)');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(2,1);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(4,3,1,cropsizeconfig::CROPSIZE_EXTRASMALL);

$field->addCropSize(3,1,2);
$field->addCropSize(4,3,2,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(4,3,2,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(4,3,2,cropsizeconfig::CROPSIZE_EXTRASMALL);

$field->addCropSize(1,1,3);
$field->addCropSize(4,3,3,cropsizeconfig::CROPSIZE_MEDIUM);
$field->addCropSize(4,3,3,cropsizeconfig::CROPSIZE_SMALL);
$field->addCropSize(4,3,3,cropsizeconfig::CROPSIZE_EXTRASMALL);

$field->setRenderWidth(3/5);// 1 = 100% von Maximaler Breite (Konfiguration CropsizeConfig)
$field->setRenderWidth(1/2,cropsizeconfig::CROPSIZE_MEDIUM);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_SMALL);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_SMALL);

return $elements;
