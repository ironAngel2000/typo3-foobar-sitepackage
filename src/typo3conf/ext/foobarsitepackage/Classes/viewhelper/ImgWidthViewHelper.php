<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 11.03.2019
 * Time: 16:25
 */

namespace FooBar\foobarSitePackage\ViewHelper;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ImgWidthViewHelper extends AbstractViewHelper
{

    /**
     * Arguments Initialization
     */

    //Erstelle und deklariere Basiszahl und Teiler
    public function initializeArguments() {

        $this->registerArgument('arrsizes', 'mixed', 'Crop Variants', true);
        $this->registerArgument('count', 'string', 'Anzahl Spalten', true);
        $this->registerArgument('template', 'string', 'Template', false);
    }

    public function render()
    {

        $arrSizes =  $this->arguments['arrsizes'];
        $count = (int) $this->arguments['count'];
        $templlate = $this->arguments['template'];


        if($count == 1){
            // Original
        }
        elseif($count == 2){
            $arrSizes['default']['renderwidth'] /= 2;
            $arrSizes['large']['renderwidth'] /= 2;
            $arrSizes['medium']['renderwidth'] /= 2;
        }
        elseif(!fmod($count,3)){
            $arrSizes['default']['renderwidth'] /= 3;
            $arrSizes['large']['renderwidth'] /= 3;
            $arrSizes['medium']['renderwidth'] /= 3;
        }
        else{
            $arrSizes['default']['renderwidth'] /= 4;
            $arrSizes['large']['renderwidth'] /= 4;
            $arrSizes['medium']['renderwidth'] /= 4;
        }

        return $arrSizes;

    }

}
