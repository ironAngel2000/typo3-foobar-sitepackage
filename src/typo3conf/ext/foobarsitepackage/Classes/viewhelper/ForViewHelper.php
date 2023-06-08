<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 11.03.2019
 * Time: 16:25
 */

namespace FooBar\foobarSitePackage\ViewHelper;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ForViewHelper extends AbstractViewHelper
{

    /**
     * Arguments Initialization
     */

    //Erstelle und deklariere Basiszahl und Teiler
    public function initializeArguments() {
        parent::initializeArguments();

        $this->registerArgument('to', 'integer','Maximalzahl', true);
        $this->registerArgument('from', 'integer','Startzahl', false, 0);
        $this->registerArgument('step', 'integer','Schritte', false, 1);
    }

    public function render()
    {

        $to = (integer) $this->arguments['to'];
        $from = (integer) $this->arguments['from'];
        $step = (integer) $this->arguments['step'];

        $content = '';

        if (0 === $step) {
            throw new \RuntimeException('"step" may not be 0.', 1383267698);
        }

        if ($from === $to) {
            $content .= $this->renderChildren();
        } elseif ($from < $to) {
            for ($i = $from; $i <= $to; $i += $step) {
                $content .= $this->renderChildren();
            }
        } else {
            for ($i = $to; $i <= $from; $i += $step) {
                $content .= $this->renderChildren();
            }
        }

        return $content;

    }

}
