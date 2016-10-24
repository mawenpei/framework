<?php
/**
 * This file is part of Notadd.
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-10-21 12:14
 */
namespace Notadd\Foundation\Mail\Commands;
use Carbon\Carbon;
use Illuminate\Console\GeneratorCommand;
/**
 * Class MailMakeCommand
 * @package Notadd\Foundation\Console\Consoles
 */
class MailMakeCommand extends GeneratorCommand {
    /**
     * @var string
     */
    protected $name = 'make:mail';
    /**
     * @var string
     */
    protected $description = 'Create a new email class';
    /**
     * @var string
     */
    protected $type = 'Mail';
    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace) {
        return $rootNamespace . '\Mail';
    }
    /**
     * @return string
     */
    protected function getStub() {
        return $this->laravel->basePath() . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR . 'mails' . DIRECTORY_SEPARATOR . 'mail.stub';
    }
    /**
     * @param string $stub
     * @param string $name
     * @return mixed
     */
    protected function replaceClass($stub, $name) {
        $stub = parent::replaceClass($stub, $name);
        return str_replace('DummyDatetime', Carbon::now()->toDateTimeString(), $stub);
    }
}