<?php

namespace FooBar\foobarSitePackage\ViewHelper;

use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class PageChildrenViewHelper extends AbstractViewHelper
{
    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        $this->registerArgument('pageid', 'string', 'Typo Pagid', true);
        $this->registerArgument('ammount', 'string', 'Typo Ammount', false);
    }


    public function render()
    {
        $ret = [];

        $pid = (int)  $this->arguments['pageid'];
        $ammount = (int)  $this->arguments['ammount'];

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
        $queryBuilder->select('uid')
            ->from('pages')
            ->where('pages.pid = '.$pid.'')
            ->addOrderBy('pages.pid')
            ->addOrderBy('pages.sorting');

        //DebugUtility::debug($queryBuilder->getSql());

        $statement = $queryBuilder->execute();

        $main['categories'] = [];

        while ($record = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $ret[] = $record['uid'];
            if($ammount > 0 && count($ret)>=$ammount){
                break;
            }
        }

        return $ret;

    }

}
