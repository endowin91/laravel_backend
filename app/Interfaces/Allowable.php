<?php

/**
 * @author: Endo
 * Date: 5/1/16
 * @copyright: Endo
 */

namespace App\Interfaces;

interface Allowable
{
    public function isAllowed();
    public function getDisallowedExceptions();
    public function getDisallowedMessages();
    public function getDisallowedMessagesAsString();
}