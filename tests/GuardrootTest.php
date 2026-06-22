<?php
/**
 * Tests for GuardRoot
 */

use PHPUnit\Framework\TestCase;
use Guardroot\Guardroot;

class GuardrootTest extends TestCase {
    private Guardroot $instance;

    protected function setUp(): void {
        $this->instance = new Guardroot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Guardroot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
