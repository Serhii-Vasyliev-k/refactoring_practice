<?php

//Hint - Open Closed Principle
interface  Worker
{
    public function work();
}

class AnotherProgrammer implements Worker
{
    public function work()
    {
        return 'coding';
    }
}
class Tester
{
    public function work()
    {
        return 'testing';
    }
}

class Designer implements Worker
{
    public function work()
    {
        return 'рainting';
    }
}

/** Что если добавить еще класс Designer с методом draw() **/

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof Worker) {
            $member->work();
        }
        else
        {
            throw new Exception('Invalid input member');
        }

    }
}



