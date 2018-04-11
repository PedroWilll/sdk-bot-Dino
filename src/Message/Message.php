<?php

namespace CodeBot\Message;

class Message 
{
   public function __construct (string $recipientId);
   public function message (string $messageText):array;
}