<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_foot_link = $elements->newElement('Footer_Text','Text Element');
$objConf_foot_link->addColpos(10);

$intro_foot_link = $objConf_foot_link->addNewPalette('title','Intro');
$field = $intro_foot_link->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $intro_foot_link->addField('text_titel',2,'Titel');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_foot_link->addField('text_text',3,'Text');
$field->setType(fieldconfig::FILETYPE_RICHTEXT);

return $elements;
