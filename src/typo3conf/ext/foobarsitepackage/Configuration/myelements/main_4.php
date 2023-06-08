<?php
use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();


$objConf_element4 = $elements->newElement('textblock_4','Text Bild - rechts links');

$intro_tt_element4 = $objConf_element4->addNewPalette('title','Intro');
$field = $intro_tt_element4->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $intro_tt_element4->addField('bildgalerie',2,'Bild Inhalt (Galerie)');
$field->setType(fieldconfig::FILETYPE_MEDIA);
$field->addCropSize(4,3);
$field->setRenderWidth(1/2);// 1 = 100% von Maximaler Breite (Konfiguration CropsizeConfig)
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_MEDIUM);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_SMALL);
$field->setRenderWidth(1,cropsizeconfig::CROPSIZE_EXTRASMALL);

$field = $intro_tt_element4->addField('anzeigRechtsLinks',2,'Bildposition');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','Links');
$field->addOption('1','Rechts');

$field = $intro_tt_element4->addField('vollbild',2,'Bildgröße');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','1/2');
$field->addOption('1','1/3');
$field->addOption('2','2/3');

$field = $intro_tt_element4->addField('header2',3,'Titel - Header 2');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element4->addField('header1',4,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_tt_element4->addField('optHeadline',4,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $intro_tt_element4->addField('introtext',5,'Inhalttext');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

$field = $intro_tt_element4->addField('optTextmask',5,'Dunkler Texthintergrund');
$field->setType(fieldconfig::FILETYPE_CHECKBOX);

return $elements;
