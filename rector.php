<?php

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\Class_\TypedPropertyFromCreateMockAssignRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php84: true)
    ->withPreparedSets(deadCode: true, typeDeclarations: true, privatization: true)
    ->withImportNames(removeUnusedImports: true)
    ->withSkip([
        TypedPropertyFromCreateMockAssignRector::class,
        AddOverrideAttributeToOverriddenMethodsRector::class,
    ]);
