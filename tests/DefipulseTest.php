<?php
/**
 * Tests for DefiPulse
 */

use PHPUnit\Framework\TestCase;
use Defipulse\Defipulse;

class DefipulseTest extends TestCase {
    private Defipulse $instance;

    protected function setUp(): void {
        $this->instance = new Defipulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defipulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
