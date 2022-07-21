<?php

require_once('./vendor/autoload.php');

test('truthy', function () {
    $trueValues = [1, 2, 3, 1.1, 'true', 'TRUE', 't', 'yes', 'y', 'on', [1]];
    foreach ($trueValues as $value) {
        expect(isTruthy($value))->toBeTrue();
    }
});

test('falsy', function () {
    $falseValues = [
        0, '0', 0.0, '0.0', false, null, 'f', 'false', 'no', 'n', [], new stdClass(),
    ];

    foreach ($falseValues as $value) {
        expect(isTruthy($value))->toBeFalse();
    }
});
