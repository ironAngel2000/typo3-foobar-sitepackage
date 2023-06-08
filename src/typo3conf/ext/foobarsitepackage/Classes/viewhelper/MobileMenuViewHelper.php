<?php

namespace FooBar\foobarSitePackage\ViewHelper;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Utility\DebugUtility;


class MobileMenuViewHelper extends AbstractViewHelper
{
    /**
     * Arguments Initialization
     */

    //Erstelle und deklariere Basiszahl und Teiler
    public function initializeArguments() {

        $this->registerArgument('menudata', 'mixed', 'MenuData', true);
    }

    public function render()
    {
        $strMenu = '';

        $arrData =  $this->arguments['menudata'];

        $strMenu = $this->getStage(0, $arrData);

        return $strMenu;
    }

    protected function getStage($aktId, $arrData, $pData = null, $pid=0)
    {
        $stage = '';

        $aktCl = '';
        if((int) $aktId==0){
            $aktCl = 'aktiv';
        }

        $arrNextChilds = [];

        $stage .= '<ul class="lvl pid_'.$aktId.' '.$aktCl.'">';
            if(is_array($pData)){

                $li = '<li>';
                $li .= '<a id="prev'.$pid.'" class="prev" href="javascript:;">';
                    $li .= $pData['title'];
                $li .= '</li>';

                $stage .= $li;
            }

            foreach ($arrData as $arrChild){

                $arrNext = null;

                $li = '<li>';
                    $id = '';
                    $cls = '';
                    $link = $arrChild['link'];
                    if(isset($arrChild['children']) && is_array($arrChild['children'])){
                        $id = 'nxt'.$arrChild['data']['uid'];
                        $cls = 'next';
                        $link = 'javascript:;';

                        $arrNext = [];
                        $arrNext['parent'] = $arrChild;
                        $arrNext['childs'] = $arrChild['children'];
                        $arrNext['uid'] = $arrChild['data']['uid'];
                        unset($arrNext['parent']['children']);

                        $arrNextChilds[] = $arrNext;
                    }

                    if($arrChild['active']){
                        $cls .= ' auswahl';
                    }

                    $li .= '<a id="'.$id.'" class="'.$cls.'" href="'.$link.'">';
                        $li .= $arrChild['title'];
                    $li .= '</a>';
                $li .= '</li>';

                $stage .= $li;
            }

        $stage .= '</ul>';

        if(count($arrNextChilds)){
            foreach ($arrNextChilds as $nextChilds){
                $stage .= $this->getStage($nextChilds['uid'],$nextChilds['childs'],$nextChilds['parent'],$aktId);
            }
        }

        return $stage;
    }

}
