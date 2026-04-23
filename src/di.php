<?php

declare(strict_types=1);

defined('ABSPATH') || exit;

use LunaPress\Wp\Assets\Entity\AssetDependency;
use LunaPress\Wp\Assets\Factory\AssetDependencyFactory;
use LunaPress\Wp\AssetsContracts\Entity\IAssetDependency;
use LunaPress\Wp\AssetsContracts\Factory\IAssetDependencyFactory;
use function LunaPress\Foundation\Container\autowire;

return [
    IAssetDependency::class => autowire(AssetDependency::class),
    IAssetDependencyFactory::class => autowire(AssetDependencyFactory::class),
];
