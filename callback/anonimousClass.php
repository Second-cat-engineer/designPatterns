<?php

interface PersonWriter
{
    public function write(Person $person);
}

class Person
{
    public function output(PersonWriter $writer)
    {
        $writer->write($this);
    }

    public function getName(): string
    {
        return 'safuan';
    }

    public function getAge(): int
    {
        return 42;
    }
}

$person = new Person();
$person->output(
    new class implements PersonWriter {
        public function write(Person $person)
        {
            echo $person->getName() . ' ' . $person->getAge();
        }
    }
);