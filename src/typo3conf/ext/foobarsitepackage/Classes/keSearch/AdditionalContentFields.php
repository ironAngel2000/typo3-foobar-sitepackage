<?php
// set you own vendor name adjust the extension name part of the namespace to your extension key
namespace FooBar\foobarSitePackage\keSearch;

use FooBar\foobarSitePackage\Config\fieldconfig;
use FooBar\foobarSitePackage\foobarsitepackage;

/**
 * Class AdditionalContentFields
 *
 * @package TeaminmediasPluswerk\KeSearchHooks
 * This class is an example on how index more fields of the tt_content table without having to write a custom
 * indexer. The default page indexer is used. Two hooks are needed: One adds the field to the list of fields
 * fetched from the tt_content table, one adds the field to the content written to the index.
 * See also ext_localconf.php on how to register the hooks.
 */

class AdditionalContentFields {

    private function getCols()
    {
        $arrFields = (new foobarsitepackage())->getAllFields([fieldconfig::FILETYPE_TEXT,fieldconfig::FILETYPE_TEXTMULTILINE,fieldconfig::FILETYPE_RICHTEXT]);

        $arrCols = [];

        foreach ($arrFields[foobarsitepackage::TABLE_TTCONTENT] as $objField){
            if($objField instanceof fieldconfig){
                if($objField->getNoIndex()!==true) {
                    $arrCols[$objField->getColumn()] = true;
                }
            }
        }

        $fields = [];
        foreach ($arrCols as $col=>$status){
            $fields[] = $col;
        }

        return $fields;

    }

    public function modifyPageContentFields(&$fields, $pageIndexer)
    {
        $arrCols = $this->getCols();

        $fields = "uid, pid, CType, sys_language_uid, header_layout, fe_group, file_collections, filelink_sorting";

        // add field "subheader" from tt_content table which is normally not indexed to list of fields
        foreach ($arrCols as $col) {
            $fields .= " ,".$col;
        }
    }

    public function modifyContentFromContentElement(string &$bodytext, array $ttContentRow, $pageIndexer)
    {
        $arrCols = $this->getCols();

        // add the content of the field "subheader" to $bodytext which is what will be saved to the index
        foreach ($arrCols as $col) {
            $bodytext .= strip_tags($ttContentRow[$col]);
        }
    }

}
