<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/lib/Eccairs/'
    ])
    // uncomment to reach your current PHP version
    // ->withPhpSets()
    ->withImportNames()
    ->withAttributesSets(symfony: true, doctrine: true)
    ->withPhpSets(php81: true);