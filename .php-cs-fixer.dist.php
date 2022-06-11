<?php

declare(strict_types=1);

/**
 * This file is part of Ethereum library for PHP.
 *
 * (c) fj9140 <fj9140@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Nexus\CsConfig\Fixer\Comment\NoCodeSeparatorCommentFixer;
use Nexus\CsConfig\Fixer\Comment\SpaceAfterCommentStartFixer;

$config = new PhpCsFixer\Config();

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->in([
        __DIR__ . '/src',
    ])
    ->append([
        __FILE__,
        __DIR__ . '/coding-standard/Ethereum.php',
    ])
;

$options = [
    'cacheFile' => 'build/.php-cs-fixer.cache',
    'finder' => $finder,
    'customFixers' => Nexus\CsConfig\FixerGenerator::create('vendor/nexusphp/cs-config/src/Fixer', 'Nexus\\CsConfig\\Fixer'),
    'customRules' => [
        NoCodeSeparatorCommentFixer::name() => true,
        SpaceAfterCommentStartFixer::name() => true,
    ],
];

return Nexus\CsConfig\Factory::create(new Nexus\CsConfig\Ruleset\Nexus81(), [], $options)->forLibrary(
    'Ethereum library for PHP',
    'fj9140',
    'fj9140@gmail.com',
);
