<?php

return \StubsGenerator\Finder::create()
    ->in( array(
        'source/ninja-forms',
    ) )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/ninja-forms'])
            ->files()
            ->depth('< 1')
            ->path('ninja-forms.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
