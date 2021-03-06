<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'between'              => [
        'numeric' => 'A(z) :attribute :min és :max között kell legyen.',
    ],
    'email'                => 'Nem adtál meg valós E-mail címet.',
    'integer'              => 'A(z) :attribute nem számjegy.',
    'min'                  => [
        'string'  => 'A(z) :attribute minimum :min karakter kell hogy legyen.',
    ],
    'required'             => 'A(z) :attribute mező kitöltése kötelező.',
    'url'                  => 'A(z) :attribute mező nem érvényes URL.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
