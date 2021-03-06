<?php

namespace Dobrik\LaravelEasyForm\Forms\Html;

use Illuminate\Support\Arr;
use Dobrik\LaravelEasyForm\Forms\HtmlAbstract;

/**
 * Class Button
 * @package Dobrik\LaravelEasyForm\Forms\Inputs
 */
class Button extends HtmlAbstract
{
    /**
     * @var array
     */
    protected $requiredAttributes = [
        'title'
    ];

    /**
     * @return array
     */
    public function getData(): array
    {
        return ['title' => $this->pullTitle()];
    }
}
