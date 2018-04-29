<?php namespace Codecheck;

function run ($argc, $argv)
{
  foreach ($argv as $index=>$value) {
    printf("Hello %s!\n", $value);
  }
}
