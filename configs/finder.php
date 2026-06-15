<?php

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/ninja-forms',
    ) )
    ->append(
        Finder::create()
            ->in(['source/ninja-forms'])
            ->files()
            ->depth('< 1')
            ->path('ninja-forms.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
