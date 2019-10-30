<?php

//Hint - Interface Segregation Principle
interface Workable
{
    public function canCode();
}

interface ProgrammerInterface extends Workable
{
    public function code();
}

interface TesterInterface extends Workable
{
    public function test();
}

class Programmer implements ProgrammerInterface, TesterInterface
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements TesterInterface
{
    public function canCode()
    {
        return false;
    }
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Workable $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
