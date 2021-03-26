<?php
class Person
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

interface Module
{
    public function execute();
}

class FtpModule implements Module
{
    public function setHost($host)
    {
        print "FtpModule::setHost(): $host \n";
    }

    public function setUser($user)
    {
        print "FtpModule::setUser(): $user \n";
    }

    public function execute()
    {
        // do something
        print "do something FtpModule";
    }
}

class PersonModule implements Module
{
    public function setPerson(Person $person)
    {
        print "PersonModule::setPerson(): $person->name \n";
    }

    public function execute()
    {
        // do something
        print "do something PersonModule";
    }
}

class ModuleRunner
{
    private $confData = [
        'PersonModule' => [
            'person' => 'safuan'
        ],
        'FtpModule' => [
            'host' => 'saf.com',
            'user' => 'safuan'
        ]
    ];

    private $modules = [];

    public function init()
    {
        $interface = new ReflectionClass('Module');
        foreach ($this->confData as $modulename =>$params) {
            $module_class = new ReflectionClass($modulename);
            if (!$module_class->isSubclassOf($interface)) {
                throw new Exception('неизвестный модуль ' . $modulename);
            }

            $module = $module_class->newInstance();
            foreach ($module_class->getMethods() as $method) {
                $this->handleMethod($module, $method, $params);
            }
            array_push($this->modules, $module);
        }
    }

    public function handleMethod(Module $module, ReflectionMethod $method, $params)
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if (count($args) != 1 || substr($name, 0, 3) != 'set') {
            return false;
        }

        $property = strtolower(substr($name, 3));

        if (!isset($params[$property])) {
            return false;
        }

        $arg_class = $args[0]->getClass();

        if (empty($arg_class)) {
            $method->invoke($module, $params[$property]);
        } else {
            $method->invoke($module, $arg_class->newInstance($params[$property]));
        }
    }

    public function test()
    {
        foreach ($this->modules as $module) {
            var_dump($module->execute());
        }
    }
}

$test = new ModuleRunner();
$test->init();
$test->test();