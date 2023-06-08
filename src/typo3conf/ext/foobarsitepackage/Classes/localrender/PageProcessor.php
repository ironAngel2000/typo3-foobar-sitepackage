<?php

/**
 * Created by PhpStorm.
 * User: bw
 * Date: 28.02.2019
 * Time: 16:26
 */

namespace  FooBar\foobarSitePackage\LocalProcessor;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Imaging\ImageManipulation\CropVariantCollection;
use TYPO3\CMS\Core\Imaging\ImageManipulation\Area;
use TYPO3\CMS\Extbase\Service\ImageService;

use FooBar\foobarSitePackage\Config\cropsizeconfig;

class PageProcessor implements DataProcessorInterface
{

    /**
     * Primäre Renderklasse wird vor Ausgabe Fluid gerendert
     * Daten in die Arrays Main und Sub rendern
     *
     * @param ContentObjectRenderer $cObj
     * @param array $contentObjectConfiguration
     * @param array $processorConfiguration
     * @param array $processedData
     * @return array
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    )
    {

        if((int) $processedData['data']['pid']!==0) {
            $aktRootData = $this->getRootPageData($processedData['data']['pid']);
        }
        else{
            $aktRootData = $processedData['data'];
        }

        $arrRootMenu['data'] = $aktRootData;
        $title = $aktRootData['title'];
        if(trim($aktRootData['nav_title'])!==''){
            $title = $aktRootData['nav_title'];
        }
        $arrRootMenu['title'] = $title;
        $arrRootMenu['link'] = $aktRootData['slug'];
        $arrRootMenu['target'] = $aktRootData['target'];
        $arrRootMenu['active'] = $processedData['data']['pid']==0;
        $arrRootMenu['current'] =$processedData['data']['pid']==0;
        $arrRootMenu['spacer'] = 0;

        //array_unshift($processedData['mainnavigation'],$arrRootMenu);

        $processedData['rootId'] = $aktRootData['uid'];


        return $processedData;

    }

    protected function getRootPageData($aktId)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
        $queryBuilder->select('*')
            ->from('pages')
            ->where('pages.uid = '.$aktId)
            ->addOrderBy('uid');

        $statement = $queryBuilder->execute();

        $ret = [];
        while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {
            if((int) $record['pid']!==0){
                $ret = $this->getRootPageData($record['pid']);
            }
            else{
                $ret = $record;
            }
        }

        return $ret;
    }
}
