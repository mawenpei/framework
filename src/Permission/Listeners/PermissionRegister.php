<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-04 13:41
 */
namespace Notadd\Foundation\Permission\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionRegister as AbstractPermissionRegister;

/**
 * Class PermissionRegister.
 */
class PermissionRegister extends AbstractPermissionRegister
{
    /**
     * Handle Route Registrar.
     */
    public function handle()
    {
        $this->manager->group('global', [
            'description' => '全局权限定义。',
            'identification' => 'global',
            'name' => '全局权限',
        ]);
    }
}
