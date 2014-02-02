<?php

/**
 * Gekosale, Open Source E-Commerce Solution
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 *
 * @category    Gekosale
 * @package     Gekosale\Core
 * @author      Adam Piotrowski <adam@gekosale.com>
 * @copyright   Copyright (c) 2008-2014 Gekosale sp. z o.o. (http://www.gekosale.com)
 */
namespace Gekosale\Core;

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Propel\Runtime\Propel;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Translation extends Translator
{

    protected $locale;

    protected $container;

    public function __construct (ContainerInterface $container, $locale)
    {
        $this->container = $container;
        $this->locale = $locale;
        
        parent::__construct($this->locale);
        parent::addLoader('array', new ArrayLoader());
        parent::addResource('array', $this->getResource(), $this->locale);
    }

    protected function getResource ()
    {
        $Data = Array();
        //        if (($Data = $this->container->get('cache')->load('translations')) === false){
        ////            $sql = 'SELECT
        ////                    	T.name,
        ////                      	TD.translation
        ////                    FROM translation T
        ////                    LEFT JOIN translationdata TD ON T.idtranslation = TD.translationid
        ////                    WHERE TD.languageid = :languageid';
        ////            $stmt = Db::getInstance()->prepare($sql);
        ////            $stmt->bindValue('languageid', $this->container->get('helper')->getLanguageId());
        ////            $stmt->execute();
        ////            while ($rs = $stmt->fetch()){
        ////                $Data[$rs['name']] = $rs['translation'];
        ////            }
        //            $this->container->get('cache')->save('translations', $Data);
        //        }
        return $Data;
    }

    public static function get ($id)
    {
        $translation = new Translation();
        return $translation->trans($id);
    }
}