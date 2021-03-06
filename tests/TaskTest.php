<?php

use PHPUnit\Framework\TestCase;


class TaskTest extends TestCase
{
    private $CI;
    private $task;

    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->task = new Task;
    }

    public function testSetTask(){
        $this->task->setTask("Todo project");
        $this->assertEquals("Todo project", $this->task->getTask());
    }

    public function testSetPriority(){
        $this->task->setPriority(2);
        $this->assertEquals(2, $this->task->getPriority());
        $this->expectException(Exception::class);
        $this->task->setPriority("testSetPriority");
        
    }

    public function testSetSize() {
        $this->task->setSize(3);
        $this->assertEquals(3, $this->task->getSize());
        $this->expectException(Exception::class);
        $this->task->setSize(321);
    }

    public function testSetGroup() {
        $this->task->setGroup(2);
        $this->assertEquals(2, $this->task->getGroup());
        $this->expectException(Exception::class);
        $this->task->setGroup(-1);
    }
}