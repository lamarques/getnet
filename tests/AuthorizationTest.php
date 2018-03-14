<?php
/**
 * Created by PhpStorm.
 * User: lamarques
 * Date: 14/03/18
 * Time: 00:28
 */

namespace tests;

use Lamarques\GetNet\Authorization;

class AuthorizationTest extends \PHPUnit_Framework_TestCase
{

    public function testGetTransaction()
    {
        $authorization = new Authorization();
        $authorization->setEnvironment(1);
        $dadosTransation = [
            'username' => 'azpay',
            'password' => '#password#',
            'mercantID' => '1234567',
            'terminalID' => 'D12345699',
            'mercantTrackID' => '127',
            'amount' => '1.00',
            'currecyCode' => '986',
            'instType' => 'SGL',
            'instNum' => 'none',
            'number' => '4444333322221111',
            'cvv2' => '123',
            'expiryMonth' => '12',
            'expiryYear' => '2025',
            'holderName' => 'Bruno Paz',
            'udf1' => 'none',
            'udf2' => 'none',
            'udf3' => 'none',
            'udf4' => 'none',
            'udf5' => 'none',
            'tranMcc' => 'none',
            'description' => 'none',
        ];

        $dados = $authorization->getTransaction($dadosTransation);
        print_r($dado);
    }

    public function testGetEnvironment()
    {
        $authorization = new Authorization();
        $authorization->setEnvironment(1);
        print($authorization->getEnvironment());
    }

    public function testSetEnvironment()
    {
        $authorization = new Authorization();
        $authorization->setEnvironment(1);
    }
}
