<?php

/**
 * Gekosale, Open Source E-Commerce Solution 
 * 
 * For the full copyright and license information, 
 * please view the LICENSE file that was distributed with this source code. 
 * 
 * @category    Gekosale 
 * @package     Gekosale\Core\Form
 * @subpackage  Gekosale\Core\Form\Element
 * @author      Adam Piotrowski <adam@gekosale.com>
 * @copyright   Copyright (c) 2008-2014 Gekosale sp. z o.o. (http://www.gekosale.com)
 */
namespace Gekosale\Core\Form\Element;

class Price extends TextField
{

    public function __construct ($attributes)
    {
        parent::__construct($attributes);
        if (isset($this->_attributes['vat_field']) && is_subclass_of($this->_attributes['vat_field'], 'FormEngine\Elements\Field')) {
            $this->_attributes['vat_field_name'] = $this->_attributes['vat_field']->GetName();
        }
        $this->_attributes['prefixes'] = Array(
            $this->trans('TXT_PRICE_NET'),
            $this->trans('TXT_PRICE_GROSS')
        );
    }

    protected function _PrepareAttributes_JS ()
    {
        $attributes = Array(
            $this->_FormatAttribute_JS('name', 'sName'),
            $this->_FormatAttribute_JS('label', 'sLabel'),
            $this->_FormatAttribute_JS('comment', 'sComment'),
            $this->_FormatAttribute_JS('suffix', 'sSuffix'),
            $this->_FormatAttribute_JS('prefixes', 'asPrefixes'),
            $this->_FormatAttribute_JS('error', 'sError'),
            $this->_FormatAttribute_JS('vat_field_name', 'sVatField'),
            $this->_FormatRules_JS(),
            $this->_FormatDependency_JS(),
            $this->_FormatDefaults_JS()
        );
        return $attributes;
    }
}
