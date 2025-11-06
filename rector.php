<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php81: true)
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
        naming: false,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withRules([
        InlineConstructorDefaultToPropertyRector::class,
        AddVoidReturnTypeWhereNoReturnRector::class,
    ])
    ->withSkip([
        AddLiteralSeparatorToNumberRector::class,
        NullToStrictStringFuncCallArgRector::class,
    ])
    ->withImportNames(importShortClasses: false)
    ->withAttributesSets(symfony: true, doctrine: true);
