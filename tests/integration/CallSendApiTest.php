<?php

namespace CodeBot;

use CodeBot\Message\Text;
use PHPUnit\Framework\TestCase;

class CallSendApiTest extends TestCase
{

    public function testMakeRequest()
    {   /**
        * @expectedException GuzzleHttp\Exception\ClientException 
        */
        $message = (new Text(1))->message('Oiii');
        (new CallSendApi(pageAccessToken, '28aj82'))->make($message);

    }
}