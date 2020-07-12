<?php
namespace SandboxGithubAction;

class Foo
{
    public function bar(): void
    {
        (new \Composer\Autoload\ClassLoader());
    }
}