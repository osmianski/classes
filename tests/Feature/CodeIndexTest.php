<?php

use Osmianski\CodeIndex\CodeIndex;

it('has classes', function() {
    $index = new CodeIndex();

    expect($index->classes)->toBeArray();
});
