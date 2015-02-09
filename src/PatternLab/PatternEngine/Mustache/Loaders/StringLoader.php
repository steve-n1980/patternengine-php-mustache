<?php

/*!
 * Mustache Pattern Engine Loader Class - String
 *
 * Copyright (c) 2014 Dave Olsen, http://dmolsen.com
 * Licensed under the MIT license
 *
 * Sets an instance of Mustache to deal with rendering of strings
 *
 */

namespace PatternLab\PatternEngine\Mustache\Loaders;

use \PatternLab\PatternEngine\Loader;

class StringLoader extends Loader {
	
	/**
	* Load a new Mustache instance that is just a vanilla Mustache rendering engine for strings
	*/
	public function __construct($options = array()) {
		
		$this->instance = new \Mustache_Engine;
		
	}
	
	/**
	* Render a string
	* @param  {Array}        the options to be rendered by Mustache
	*
	* @return {String}       the rendered result
	*/
	public function render($options = array()) {
		
		return $this->instance->render($options["string"], $options["data"]);
		
	}
	
}
