<?php


namespace Bones\Component\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ContainerAwareTestCase extends KernelTestCase
{

    public function setUp()
    {
        static::bootKernel();
    }

    protected function get($id)
    {
        return static::$kernel->getContainer()->get($id);
    }
} 
