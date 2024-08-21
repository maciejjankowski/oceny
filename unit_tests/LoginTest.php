<?php
// tests/LoginTest.php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../auth.php'; // Adjust path if needed

class LoginTest extends TestCase
{
    public function testValidLogin()
    {
        // Start a session for testing
        session_start();

        $result = login('admin', 'password'); // Replace with your actual credentials

        $this->assertTrue($result);
        $this->assertEquals('admin', $_SESSION['user']);

        // Destroy the session after the test
        session_unset();
        session_destroy();
    }

    public function testInvalidLogin()
    {
        // Start a session for testing
        session_start();

        $result = login('wrong_username', 'wrong_password');

        $this->assertFalse($result);
        $this->assertArrayNotHasKey('user', $_SESSION);

        // Destroy the session after the test
        session_unset();
        session_destroy();
    }
}
