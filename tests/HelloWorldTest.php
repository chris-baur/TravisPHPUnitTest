<?php

class HelloWorldTest extends PHPUnit\Framework\TestCase
{
    /**
     * @var PDO
     */
    //private $pdo;
    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE hello (what VARCHAR(50) NOT NULL)");
    }
    public function tearDown()
    {
        $this->pdo->query("DROP TABLE hello");
    }
    // public function testHelloWorld()
    // {
    //     $helloWorld = new HelloWorld($this->pdo);
    //     $this->assertEquals('Hello World', $helloWorld->hello());
    // }
    public function testHello()
    {
        echo 'I am in test hello';
        $helloWorld = new HelloWorld($this->pdo);
        echo 'hello world object has been found';
        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }
    // public function testWhat()
    // {
    //     $helloWorld = new HelloWorld($this->pdo);
    //     $this->assertFalse($helloWorld->what());
    //     $helloWorld->hello('Bar');
    //     $this->assertEquals('Bar', $helloWorld->what());
    // }
    public function testHi(){
        $this->assertEquals('Hello World', 'Hello World');
    }
}