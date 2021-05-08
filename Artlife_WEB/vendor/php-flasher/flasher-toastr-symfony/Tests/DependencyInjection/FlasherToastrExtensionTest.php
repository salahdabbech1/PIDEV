<?php

namespace Flasher\Toastr\Symfony\Tests\DependencyInjection;

use Flasher\Prime\Tests\TestCase;
use Flasher\Symfony\DependencyInjection\FlasherExtension;
use Flasher\Symfony\FlasherSymfonyBundle;
use Flasher\Toastr\Symfony\DependencyInjection\FlasherToastrExtension;
use Flasher\Toastr\Symfony\FlasherToastrSymfonyBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FlasherToastrExtensionTest extends TestCase
{
    public function testContainerContainFlasherServices()
    {
        $container = $this->getRawContainer();
        $container->loadFromExtension('flasher', array());
        $container->loadFromExtension('flasher_toastr', array());
        $container->compile();

        $this->assertTrue($container->has('flasher.toastr'));
    }

    public function testCreateInstanceOfToastrAdapter()
    {
        $container = $this->getRawContainer();
        $container->loadFromExtension('flasher');
        $container->loadFromExtension('flasher_toastr');
        $container->compile();

        $flasher = $container->getDefinition('flasher');
        $calls = $flasher->getMethodCalls();

        $this->assertCount(2, $calls);
        $this->assertSame('addFactory', $calls[0][0]);
        $this->assertSame('template', $calls[0][1][0]);
        $this->assertSame('flasher.notification_factory', (string) $calls[0][1][1]);

        $this->assertSame('addFactory', $calls[1][0]);
        $this->assertSame('toastr', $calls[1][1][0]);
        $this->assertSame('flasher.toastr', (string) $calls[1][1][1]);
    }

    private function getRawContainer()
    {
        $container = new ContainerBuilder();

        $container->registerExtension(new FlasherExtension());
        $flasherBundle = new FlasherSymfonyBundle();
        $flasherBundle->build($container);

        $container->registerExtension(new FlasherToastrExtension());
        $adapterBundle = new FlasherToastrSymfonyBundle();
        $adapterBundle->build($container);

        $container->getCompilerPassConfig()->setOptimizationPasses(array());
        $container->getCompilerPassConfig()->setRemovingPasses(array());
        $container->getCompilerPassConfig()->setAfterRemovingPasses(array());

        return $container;
    }

    private function getContainer()
    {
        $container = $this->getRawContainer();
        $container->loadFromExtension('flasher', array());
        $container->loadFromExtension('flasher_toastr', array());
        $container->compile();

        return $container;
    }
}
