<?php
/**
 * Created by PhpStorm.
 * User: lamarques
 * Date: 13/03/18
 * Time: 23:21
 */

namespace Lamarques\GetNet;


class Authorization
{

    private $environment;


    public function getTransaction($transaction)
    {
        $getnet = new Getnet();
        $getnet->setEnvironment($this->getEnvironment());
        $getnet->setUsername($transaction['username']);
        $getnet->setPassword($transaction['password']);
        $getnet->setMerchantID($transaction['mercantID']);
        $getnet->setTerminalID($transaction['terminalID']);
        $getnet->setMerchantTrackID($transaction['mercantTrackID']);
        $getnet->setAmount($transaction['amount']);
        $getnet->setCurrencycode($transaction['currecyCode']);
        $getnet->setInstType($transaction['instType']);
        $getnet->setInstNum($transaction['instNum']);
        $getnet->setNumber($transaction['number']);
        $getnet->setCvv2($transaction['cvv2']);
        $getnet->setExpiryMonth($transaction['expiryMonth']);
        $getnet->setExpiryYear($transaction['expiryYear']);
        $getnet->setHolderName($transaction['holderName']);
        $getnet->setUdf1($transaction['udf1']);
        $getnet->setUdf2($transaction['udf2']);
        $getnet->setUdf3($transaction['udf3']);
        $getnet->setUdf4($transaction['udf4']);
        $getnet->setUdf5($transaction['udf5']);
        $getnet->setTranMCC($transaction['tranMcc']);
        $getnet->setSoftDescriptor($transaction['description']);
        return $getnet->AuthorizationService();
    }

    /**
     * @return int
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param int $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }

}