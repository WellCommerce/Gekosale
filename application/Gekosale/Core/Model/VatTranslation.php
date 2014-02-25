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
namespace Gekosale\Core\Model;

/**
 * Class VatTranslation
 *
 * @package Gekosale\Core\Model
 * @author  Adam Piotrowski <adam@gekosale.com>
 */
class VatTranslation extends Eloquent
{

    protected $table = 'vat_translation';

    public $timestamps = TRUE;

    protected $softDelete = FALSE;

    protected $fillable = array(
        'language_id',
        'name'
    );

    protected $visible = array(
        'language_id',
        'name'
    );
}