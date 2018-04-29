<?php namespace Codecheck;

function run ($argc, $argv)
{
  var_dump($argc, $argv);
  foreach ($argv as $index=>$value) {
    #printf("argv[%s]: %s\n", $index, $value);
    printf("Hello "."%s"."!"."\n", $value);
  }
}
