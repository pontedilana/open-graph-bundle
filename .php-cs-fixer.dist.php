<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(['vendor', 'var', '_materiale', 'node_modules', 'doc'])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'cast_spaces' => ['space' => 'none'],
        'types_spaces' => ['space' => 'none'],
        'native_function_invocation' => false,
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_separation' => ['groups' => [['ORM\\*'], ['Assert\\*'], ['Serializer\\*']]],
    ])
    ->setFinder($finder)
;
