<?php
/**
 * Tests for WalletLink
 */

use PHPUnit\Framework\TestCase;
use Walletlink\Walletlink;

class WalletlinkTest extends TestCase {
    private Walletlink $instance;

    protected function setUp(): void {
        $this->instance = new Walletlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
