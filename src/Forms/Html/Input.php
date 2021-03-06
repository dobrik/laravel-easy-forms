<?php

namespace Dobrik\LaravelEasyForm\Forms\Html;


use Dobrik\LaravelEasyForm\Forms\HtmlAbstract;
use Dobrik\LaravelEasyForm\Forms\Interfaces\HasValueInterface;

/**
 * Class Input
 * @package Dobrik\LaravelEasyForm\Forms\Inputs
 */
class Input extends HtmlAbstract implements HasValueInterface
{
    /**
     * @var array
     */
    protected $requiredAttributes = [
        'name'
    ];

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }

    public function setValue($value): HtmlAbstract
    {
        return parent::setValue($value);
    }
}
