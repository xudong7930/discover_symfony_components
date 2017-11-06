<?php
require 'vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$path = realpath(__DIR__.'/docs');

// $files = Finder::create()->in($path);
$files = Finder::create()
    ->in($path)
    ->name('*.txt') // 名称正则匹配
    ->contains('One morning'); // 文件内容包含

foreach ($files as $file) {
    echo $file->getRealPath().PHP_EOL; // 文件路径
    
    /*
    $contents = File::get($file->getRealPath());
    var_dump($contents);

    $updated = '';
    File::put($file->getRealPath(), $updated);
    */
}
