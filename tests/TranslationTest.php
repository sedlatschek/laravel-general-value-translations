<?php

use Illuminate\Support\Facades\Validator;

it('can retrieve general value translations', function () {
    expect(__('validation.general-values.today'))->toBe('Heute');

});

it('applies general value translations through validator', function () {
    $validator = Validator::make([
        'date' => new DateTime(),
    ], [
        'date' => 'date|before:today',
    ]);

    expect($validator->fails())->tobeTrue();

    expect($validator->messages()->get('date')[0])
        ->toBe('The date field must be a date before Heute.');
});
