<?php

/**
 * Gekosale, Open Source E-Commerce Solution 
 * 
 * For the full copyright and license information, 
 * please view the LICENSE file that was distributed with this source code. 
 * 
 * @category    Gekosale 
 * @package     Gekosale\Component\Cache
 * @subpackage  Gekosale\Component\Cache\Storage
 * @author      Adam Piotrowski <adam@gekosale.com>
 * @copyright   Copyright (c) 2008-2014 Gekosale sp. z o.o. (http://www.gekosale.com)
 */
namespace Gekosale\Core\Cache\Storage;

use Predis;

class Redis
{

    protected $prefix;

    protected $settings;

    protected $client;

    public function __construct (Array $settings)
    {
        $this->settings = $settings;
        
        $this->ttl = 900;
        
        $this->client = new Predis\Client($settings['redis'], array(
            'prefix' => 'cache:' . $config['database']['dbname'] . ':'
        ));
    }

    protected function getPrefix ($key)
    {
        return sprintf('%s:%s:%s:%s:%s:', 'cache', $this->settings['database']['dbname'], Helper::getViewId(), Helper::getLanguageId(), $key);
    }

    public function save ($key, $value, $ttl = NULL)
    {
        $this->client->setex($key, ($ttl == NULL) ? $this->ttl : $ttl, $value);
    }

    public function load ($key)
    {
        if ($data = $this->client->get($key)) {
            return $data;
        }
        else {
            return FALSE;
        }
    }

    public function delete ($key)
    {
        $this->client->del($key);
    }

    public function deleteAll ()
    {
        $this->client->flushdb();
    }
}
