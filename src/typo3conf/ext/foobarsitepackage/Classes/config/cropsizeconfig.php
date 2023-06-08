<?php
/**
 * Created by PhpStorm.
 * User: bw
 * Date: 08.03.2019
 * Time: 16:41
 */

namespace FooBar\foobarSitePackage\Config;

class cropsizeconfig
{
    public const CROPSIZE_ALL = 'all';
    public const CROPSIZE_DEFAULT = 'default';
    public const CROPSIZE_LARGE = 'large';
    public const CROPSIZE_MEDIUM = 'medium';
    public const CROPSIZE_SMALL = 'small';
    public const CROPSIZE_EXTRASMALL = 'extrasmall';
    public const IMGFULLWIDTH = 1920;

    protected $arrSizes;

    public function __construct()
    {
        $this->arrSizes = [];
        $this->arrSizes[self::CROPSIZE_DEFAULT]=['name'=>'Zuschnitt - Desktop',
                                    'breakpoint'=>1200];

        $this->arrSizes[self::CROPSIZE_LARGE]=['name'=>'Zuschnitt - Tablet quer',
                                  'breakpoint'=>992];

        $this->arrSizes[self::CROPSIZE_MEDIUM]=['name'=>'Zuschnitt - Tablett hochkant',
                                   'breakpoint'=>768];

        $this->arrSizes[self::CROPSIZE_SMALL]=['name'=>'Zuschnitt - Mobile quer',
                                  'breakpoint'=>576];

        $this->arrSizes[self::CROPSIZE_EXTRASMALL]=['name'=>'Zuschnitt - Mobile',
                                       'breakpoint'=>0];

    }

    public function getSizesText()
    {
        $ret = [];
        foreach ($this->arrSizes as $size=>$arrS){
            $ret[$size] = $arrS['name'];
        }
        return $ret;
    }

    public function getBreakpoints()
    {
        $ret = [];
        foreach ($this->arrSizes as $size=>$arrS){
            $ret[$size] = $arrS['breakpoint'];
        }
        return $ret;
    }
}
