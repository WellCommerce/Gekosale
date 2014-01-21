<?php

namespace SimpleForm\Elements;

class Select extends \SimpleForm\Element
{
	public $attributes;

	public function __construct ($attributes)
	{
		if (! isset($attributes['default_value'])){
			$attributes['value'] = '';
		}
		
		if (! isset($attributes['rules'])){
			$attributes['rules'] = Array();
		}
		
		foreach ($attributes['rules'] as $rule){
			
			if ($rule instanceof \SimpleForm\Rules\Required){
				$attributes['required'] = true;
			}
			
			if ($rule instanceof \SimpleForm\Rules\RequiredDependency){
				$attributes['required'] = true;
			}
		}
		
		$this->attributes = $attributes;
	}
}
