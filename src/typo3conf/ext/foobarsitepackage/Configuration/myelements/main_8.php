<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_element8 = $elements->newElement('textblock_8','Formular');

$intro_element8 = $objConf_element8->addNewPalette('title','Intro');
$field = $intro_element8->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');


$field = $intro_element8->addField('header2',3,'Titel - Header 2');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_element8->addField('header1',4,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_element8->addField('optHeadline',4,'Headline Typ');
$field->setType(fieldconfig::FILETYPE_SELECT);
$field->addOption('0','H2');
$field->addOption('1','H1');
$field->addOption('2','H3');
$field->addOption('3','H4');

$field = $intro_element8->addField('introtext',5,'Inhalttext');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

$field = $intro_element8->addField('refform',6,'Formular');
$field->setType(fieldconfig::FILETYPE_FORMULARLINK);

return $elements;
