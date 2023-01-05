<?php
require(__DIR__ . '/../src/Twilio/autoload.php');

function ownProperties($reflection): array
{
    $properties = $reflection->getProperties();
    $ownProperties = [];

    foreach ($properties as $property) {
        if ($property->getDeclaringClass()->getName() == $reflection->getName()) {
            $ownProperties[$property->getName()] = $property->getModifiers();
        }
    }
    return $ownProperties;
}

function ownMethods($reflection): array
{
    $methods = $reflection->getMethods();
    $ownMethods = [];
    foreach ($methods as $method) {
        if ($method->getDeclaringClass()->getName() == $reflection->getName()) {
            $ownMethods[] = $method;
        }
    }
    sort($ownMethods);
    return $ownMethods;
}

function parameters($methods): array
{
    $parameters = [];

    foreach ($methods as $method) {
        $params = $method->getParameters();
        foreach ($params as $param) {
            $parameters["name"] = $param;
            $parameters["type"] = (string)$param->getType();
        }
    }

    return $parameters;
}

function reflectionTest($str)
{


    if (is_file($str)) {
        $filename = $str;
        $filename = preg_replace("(../src/)", "", $filename);
        $filename = preg_replace("(/)", "\\", $filename);

        if (strpos($filename, ".php") !== false) {
            $filename = preg_replace("(\.php)", "", $filename);
            $reflection = new ReflectionClass($filename);

            $filename1 = preg_replace("(Twilio\\\Rest)", "Twilio\Rest2", $filename);
            $reflection1 = new ReflectionClass($filename1);

            $properties = ownProperties($reflection);
            $properties1 = ownProperties($reflection1);

            $methods = ownMethods($reflection);
            $methods1 = ownMethods($reflection1);

            $parameters = parameters($methods);
            $parameters1 = parameters($methods1);

            $methodNames = [];
            $methodNames1 = [];

            foreach ($methods as $method) {
                $methodNames[] = $method->getName();
            }
            foreach ($methods1 as $method) {
                $methodNames1[] = $method->getName();
            }

            try {
                assert($properties == $properties1, $filename1);
                assert($methodNames == $methodNames1, $filename1);
                assert($parameters == $parameters1, $filename1);
            } catch (AssertionError $e) {
                echo $e->getMessage() . "\n";
            }

        }
    } elseif (is_dir($str)) {
        $scan = glob(rtrim($str, '/') . '/*');
        foreach ($scan as $index => $path) {
            reflectionTest($path);
        }
    }
}

reflectionTest("../src/Twilio/Rest/");
