<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
  $rectorConfig->sets([
    LevelSetList::UP_TO_PHP_83,
    SetList::PHP_83,
    SetList::TYPE_DECLARATION,
    SetList::DEAD_CODE,
    SetList::EARLY_RETURN,
    SetList::CODE_QUALITY,
    SetList::CODING_STYLE
  ]);

  // Drupal specific settings
  $rectorConfig->skip([
    '*/upgrade_status/tests/modules/*',
    '*/node_modules/*',
    '*/vendor/*',
  ]);

  $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon');
  // $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);

  /*$rectorConfig->paths([
    __DIR__ . '/src',
    __DIR__ . '/tests',
  ]);*/
};
