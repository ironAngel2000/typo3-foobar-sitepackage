<?php
/**
 * Created by PhpStorm.
 * User: Bernd Wagner
 * Date: 18.12.2018
 * Time: 09:36
 */

namespace FooBar\foobarSitePackage\ViewHelper;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ModuloViewHelper extends AbstractViewHelper
{


    /**
     * Arguments Initialization
     */

    //Erstelle und deklariere Basiszahl und Teiler
    public function initializeArguments() {
        $this->registerArgument('basis', 'string',
            'Basiszahl', TRUE);

        $this->registerArgument('teiler', 'string',
            'Teiler', true);
    }


    /**
     * @param mixed $zuschnitt Array mit Bildparametern
     * @return number ModuloZahl
     */
    public function render()
    {
        $basis = (float) $this->arguments['basis'];
        $teiler = (float) $this->arguments['teiler'];

        $ret = $basis;

        if($teiler != 0){
            $ret = fmod($basis , $teiler);
        }

        return $ret;
    }

}
