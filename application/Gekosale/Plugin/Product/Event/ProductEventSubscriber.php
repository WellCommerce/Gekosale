<?php
/*
 * Gekosale Open-Source E-Commerce Platform
 *
 * This file is part of the Gekosale package.
 *
 * (c) Adam Piotrowski <adam@gekosale.com>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace Gekosale\Plugin\Product\Event;

use Symfony\Component\EventDispatcher\Event,
    Symfony\Component\EventDispatcher\EventSubscriberInterface;

use Gekosale\Plugin\AdminMenu\Event\AdminMenuInitEvent;

/**
 * Class ProductEventSubscriber
 *
 * @package Gekosale\Plugin\Product\Event
 * @author  Adam Piotrowski <adam@gekosale.com>
 */
class ProductEventSubscriber implements EventSubscriberInterface
{

    public function onAdminMenuInitAction(Event $event)
    {
    }

    public function onProductDataGridInitAction(Event $event)
    {
//        $datagrid = $event->getDataGrid();
//
//        $datagrid->addColumn('slug', [
//            'source' => 'product_translation.slug'
//        ]);
//
//        $datagrid->getQuery()->where('slug', 'LIKE', 'product%');
    }

    public static function getSubscribedEvents()
    {
        return array(
            AdminMenuInitEvent::ADMIN_MENU_INIT_EVENT => 'onAdminMenuInitAction',
            ProductDataGridEvent::DATAGRID_INIT_EVENT => 'onProductDataGridInitAction'
        );
    }
}