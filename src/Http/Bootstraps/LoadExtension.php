<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-30 20:24
 */
namespace Notadd\Foundation\Http\Bootstraps;

use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Notadd\Foundation\Application;
use Notadd\Foundation\Extension\Events\ExtensionLoaded;
use Notadd\Foundation\Extension\Extension;
use Notadd\Foundation\Extension\ExtensionManager;

/**
 * Class LoadExtension.
 */
class LoadExtension
{
    /**
     * @var \Illuminate\Events\Dispatcher
     */
    private $events;

    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * @var \Notadd\Foundation\Extension\ExtensionManager
     */
    protected $manager;

    /**
     * LoadExtension constructor.
     *
     * @param \Illuminate\Events\Dispatcher                 $events
     * @param \Illuminate\Filesystem\Filesystem             $files
     * @param \Notadd\Foundation\Extension\ExtensionManager $manager
     */
    public function __construct(Dispatcher $events, Filesystem $files, ExtensionManager $manager)
    {
        $this->events = $events;
        $this->files = $files;
        $this->manager = $manager;
    }

    /**
     * @param \Notadd\Foundation\Application $application
     */
    public function bootstrap(Application $application)
    {
        $this->manager->getExtensions()->each(function (Extension $extension) use ($application) {
            $path = $extension->getDirectory();
            if ($this->files->isDirectory($path) && is_string($extension->getEntry())) {
                $extension->isEnabled() && $application->register($extension->getEntry());
            }
        });
        $this->events->dispatch(new ExtensionLoaded());
    }
}
