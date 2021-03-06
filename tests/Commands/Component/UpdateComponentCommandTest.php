<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Commands\Component;

use CachetHQ\Cachet\Commands\Component\UpdateComponentCommand;
use CachetHQ\Cachet\Handlers\Commands\Component\UpdateComponentCommandHandler;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Tests\Cachet\Commands\AbstractCommandTestCase;

/**
 * This is the update component command test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class UpdateComponentCommandTest extends AbstractCommandTestCase
{
    protected function getObjectAndParams()
    {
        $params = [
            'component'   => new Component(),
            'name'        => 'Test',
            'description' => 'Foo',
            'status'      => 1,
            'link'        => 'https://cachethq.io',
            'order'       => 0,
            'group_id'    => 0,
        ];
        $object = new UpdateComponentCommand(
            $params['component'],
            $params['name'],
            $params['description'],
            $params['status'],
            $params['link'],
            $params['order'],
            $params['group_id']
        );

        return compact('params', 'object');
    }

    protected function objectHasRules()
    {
        return true;
    }

    protected function getHandlerClass()
    {
        return UpdateComponentCommandHandler::class;
    }
}
