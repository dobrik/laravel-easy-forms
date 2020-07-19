<?php

return [
    'common' => [
        \Dobrik\LaravelEasyForm\Handlers\IdHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\TitleHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\ClassHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\CustomAttributesHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\PluginsHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\FiltersHandler::class,
        \Dobrik\LaravelEasyForm\Handlers\CallbackHandler::class,
    ],

    'types' => [
        \Dobrik\LaravelEasyForm\Forms\Html\Form::class => [
            \Dobrik\LaravelEasyForm\Handlers\FormActionHandler::class,
            \Dobrik\LaravelEasyForm\Handlers\FormMethodHandler::class,
        ],
        \Dobrik\LaravelEasyForm\Forms\Html\Select::class => [
            \Dobrik\LaravelEasyForm\Handlers\SelectValuesHandler::class
        ],
        \Dobrik\LaravelEasyForm\Forms\Html\Input::class => [
            \Dobrik\LaravelEasyForm\Handlers\InputTypeHandler::class
        ],
        \Dobrik\LaravelEasyForm\Forms\Interfaces\HasContentInterface::class => [
            \Dobrik\LaravelEasyForm\Handlers\ChildHandler::class,
        ],
        \Dobrik\LaravelEasyForm\Forms\Interfaces\HasValueInterface::class => [
            \Dobrik\LaravelEasyForm\Handlers\NameHandler::class,
            \Dobrik\LaravelEasyForm\Handlers\DefaultValueHandler::class,
            \Dobrik\LaravelEasyForm\Handlers\CurrentValueHandler::class,
            \Dobrik\LaravelEasyForm\Handlers\OldValueHandler::class,
            \Dobrik\LaravelEasyForm\Handlers\TranslatableFieldHandler::class,
        ]

    ]
];