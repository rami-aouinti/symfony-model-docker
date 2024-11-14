<?php

declare(strict_types=1);

namespace App;

use Override;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * @package App
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    #[Override]
    protected function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
