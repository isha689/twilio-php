<?php
require(__DIR__.'/../src/Twilio/autoload.php');

function recursiveDelete($str) {
    if (is_file($str)) {
        return @unlink($str);
    }
    elseif (is_dir($str)) {
        $scan = glob(rtrim($str,'/').'/*');
        foreach($scan as $index=>$path) {
            recursiveDelete($path);
        }
    }
}
recursiveDelete("../reflectionCode/");

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../src/Twilio/Rest/Wireless')) as $filename)
{

    if ($filename->isDir()) continue;

    $filename = preg_replace("(../src/)","",$filename);
    $filename = preg_replace("(/)","\\",$filename);

    if(strpos($filename,".php")!==false){
        $pos = strrpos($filename,"\\");
        $filename = preg_replace("(\.php)","",$filename);

        $file = substr($filename,$pos+1);
        $file = "../reflectionCode/" . $file;
        $reflection = new ReflectionClass($filename);
        $str=(string) $reflection;
        $str = preg_replace("((@@).*)","",$str);
        $str = preg_replace("(/*\*.*)","",$str);
        $str = preg_replace("/\s\s+/","\n",$str);
        $str = preg_replace("/^[ \t]*[\r\n]+/m","",$str);
        file_put_contents($file, $str);
    }
}
