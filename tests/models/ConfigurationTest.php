<?php
require('src/models/Configuration.php');

use PHPUnit\Framework\TestCase;

final class ConfigurationTest extends TestCase {
    private $configuration;

    protected function setUp() : void {
        $this->configuration = new Configuration();
    }

    protected function tearDown() :void {
        $this->configuration = NULL;
    }

    public function testGetMailConfig() {
        $result = $this->configuration->getMailConfig();
        $this->assertIsArray($result);
    }
}

?>