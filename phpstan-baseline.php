<?php

declare(strict_types=1);

$ignoreErrors = [];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:append\\(\\) has no return type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:append\\(\\) has parameter \\$content with no type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:append\\(\\) has parameter \\$property with no type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:prepend\\(\\) has no return type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:prepend\\(\\) has parameter \\$content with no type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:prepend\\(\\) has parameter \\$property with no type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:render\\(\\) has no return type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Method Pontedilana\\\\OpenGraphBundle\\\\OpenGraph\\\\DocumentWriterInterface\\:\\:render\\(\\) has parameter \\$indent with no type specified\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/OpenGraph/DocumentWriterInterface.php',
];
$ignoreErrors[] = [
    'message' => '#^Cannot access property \\$name on mixed\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/tests/Mock/Map.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
