<?php

use FooBar\foobarSitePackage\Config\cropsizeconfig;
use FooBar\foobarSitePackage\Config\elements;
use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

$elements = new elements();

$objConf_foot_social = $elements->newElement('footer_social','Footer Social');
$objConf_foot_social->addColpos(13);

$intro_foot_social = $objConf_foot_social->addNewPalette('title','Intro');
$field = $intro_foot_social->addField('intBezeichnung',1,'Interne Bezeichnung');
$field->setColumn('header');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setNoIndex();
$field->setDescription('Dieses Feld wird nicht indiziert');



$field = $intro_foot_social->addField('link',2,'Link');
$field->setType(fieldconfig::FILETYPE_LINK);

$field = $intro_foot_social->addField('icon',2,'MDI-Icon-Klasse');
$field->setType(fieldconfig::FILETYPE_TEXT);
$field->setDescription('MDI - Klassen können hier eingesehen werden: http://materialdesignicons.com/');


return $elements;
