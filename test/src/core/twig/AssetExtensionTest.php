<?php

namespace test\core\twig;

use core\twig\AssetExtension;

class AssetExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AssetExtension
     */
    private $assetExtension;

    public function setUp()
    {
        $this->assetExtension = new AssetExtension();

        $_SERVER['DOCUMENT_ROOT'] = '/';
    }

    public function testGetFunctions()
    {
        $this->assertArrayHasKey('asset', $this->assetExtension->getFunctions());
    }

    public function testAsset()
    {
        $this->assertTrue( is_string($this->assetExtension->asset('my/css/path')) );
    }
}
