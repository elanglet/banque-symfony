<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Compte;

class CompteTest extends TestCase
{
    private $compte;
    
    public function setUp(): void 
    {
        $this->compte = new Compte();
    }
    
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }
}
