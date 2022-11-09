<?php
namespace Nurbek\Translate\Tests;

use Nurbek\Translate\TranslateServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{

    public function setUp(): void {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app): array
    {
        return [
            TranslateServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app) {
        // perform environment setup
    }

    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}