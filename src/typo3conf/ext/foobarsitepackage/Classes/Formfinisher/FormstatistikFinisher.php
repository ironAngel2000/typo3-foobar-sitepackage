<?php

namespace FooBar\foobarSitePackage\Finisher;

use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;
use TYPO3\CMS\Core\Utility\DebugUtility;


class FormstatistikFinisher  extends AbstractFinisher
{
    /**
     * Dies sind die Optionen die wir später haben wollen.
     *
     * @var array
     */
    protected $defaultOptions = [
        'apiKey' => '',
        'logUrl' => ''
    ];

    /**
     * Hier kommt unsere schöne Logik hin.
     */
    protected function executeInternal()
    {
        // liefert alle formular werte
        $this->finisherContext->getFormValues();
        // holt die Option apikey, die wir später definieren
        $this->parseOption('apiKey');
        $this->parseOption('logUrl');

        // die exakte implementierung zeige ich hier nicht
        // die wird ehh je nach anforderung unterschiedlich sein

        $apiKey = $this->options['apiKey'];
        $logUrl = $this->options['logUrl'];

        $formValues = $this->finisherContext->getFormRuntime()->getFormState()->getFormValues();

        $sendVals = [];

        if(is_array($formValues)) foreach ($formValues as $key=>$value){

            if(trim($key)!='') {

                $objElement = $this->finisherContext->getFormRuntime()->getFormDefinition()->getElementByIdentifier($key);

                if(trim($objElement->getLabel())!=='') {
                    $row = [$objElement->getLabel(), $value];
                    $sendVals[] = $row;
                }
            }
        }

        if(trim($logUrl)!=='' && trim($apiKey)!==''){
            $ch = curl_init();

            $trackUrl = $logUrl.'/'.trim($apiKey).'/';

            curl_setopt($ch, CURLOPT_URL, $trackUrl);
            curl_setopt($ch, CURLOPT_POST, 1);

            curl_setopt($ch, CURLOPT_POSTFIELDS,"formdata=".json_encode($sendVals));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec($ch);

            //DebugUtility::debug($server_output);

            curl_close ($ch);

        }

        //DebugUtility::debug($this);

    }
}
