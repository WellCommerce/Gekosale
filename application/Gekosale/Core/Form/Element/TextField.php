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

class TextField extends Field
{

    const SIZE_SHORT = 'short';

    const SIZE_MEDIUM = 'medium';

    const SIZE_LONG = 'long';

    protected function _PrepareAttributes_JS ()
    {
        $attributes = Array(
            $this->_FormatAttribute_JS('name', 'sName'),
            $this->_FormatAttribute_JS('label', 'sLabel'),
            $this->_FormatAttribute_JS('comment', 'sComment'),
            $this->_FormatAttribute_JS('suffix', 'sSuffix'),
            $this->_FormatAttribute_JS('prefix', 'sPrefix'),
            $this->_FormatAttribute_JS('selector', 'sSelector'),
            $this->_FormatAttribute_JS('wrap', 'sWrapClass'),
            $this->_FormatAttribute_JS('class', 'sClass'),
            $this->_FormatAttribute_JS('css_attribute', 'sCssAttribute'),
            $this->_FormatAttribute_JS('max_length', 'iMaxLength'),
            $this->_FormatAttribute_JS('error', 'sError'),
            $this->_FormatRepeatable_JS(),
            $this->_FormatRules_JS(),
            $this->_FormatDependency_JS(),
            $this->_FormatDefaults_JS()
        );
        
        return $attributes;
    }
}
