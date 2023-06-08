<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_foot_link = $elements->newElement('footer_link','Link Element');
$objConf_foot_link->addColpos(12);
$objConf_foot_link->addColpos(11);

$intro_foot_link = $objConf_foot_link->addNewPalette('title','Intro');
$field = $intro_foot_link->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');

$field = $intro_foot_link->addField('linktext',2,'Link Bezeichnung');
$field->setType(fieldconfig::FILETYPE_TEXT);

$field = $intro_foot_link->addField('link',2,'Link');
$field->setType(fieldconfig::FILETYPE_LINK);

return $elements;
