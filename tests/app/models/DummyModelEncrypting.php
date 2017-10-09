<?php


/**
 * @author: Endo
 * Date: 4/11/16
 * @copyright: Endo
 */
class DummyModelEncrypting extends DummyModel
{
    protected $encrypts = [
        'phone',
        'cell'
    ];
}