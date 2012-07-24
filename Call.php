<?php
/**
 * Call methods from classes from Model, View, or Controller using implicit 
 * instantiation.
 * 
 * Or call methods classes from any scope 
 * 
 * PHP version 5.3
 * 
 * LICENSE: BSD 2-Clause 
 * Copyright (c) 2011, Spencer A. Lockhart
 * All rights reserved.
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions 
 * are met:
 * Redistributions of source code must retain the above copyright notice, 
 * this list of conditions and the following disclaimer. Redistributions 
 * in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation 
 * and/or other materials provided with the distribution.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS 
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT 
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR 
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT 
 * HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, 
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT 
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, 
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY 
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT 
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE 
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 * @category	Call
 * @package		MVC Test
 * @author		Spencer A. Lockhart
 * @copright	2011 WysGui Web Services
 * @license		http://www.opensource.org/licenses/bsd-license.php
 * @since		Test Available since 1.0
 * @see			Model_SomeClass::some_method()
 * @see			Controller_SomeClass->some_method()
 * @see			View_SomeClass->some_method()
 * 
 */
class Call
{
	// {{{ Magic Methods
	
	/**
	 * Implicitly instantiate a class and call it's method using 
	 * class name in the form of a method, method name and arguments in
	 * the form of arguments.
	 * 
	 * 
	 * @Example	in scope of Controller_SomeClass->some_method():
	 * 	$this->view_someclass('dump', $this)
	 * 		->dump('Hello!')
	 * 		->model_someclass('somemethod');
	 * 
	 * @access	public
	 * @object
	 * @name	(string) Method name
	 * @args	(array)	Method arguments
	 * 
	 */
	public function __call( $name, $args )
	{
		return call_user_func_array(array( new $name(), array_shift($args) ), $args);
	}
	
	/**
	 * Implicitly call a static class' method using class name in the 
	 * form of a method, method name and arguments in the form of 
	 * arguments.
	 * 
	 * 
	 * @Example	in any scope:
	 * 	model::view_someclass('dump', model_someclass::$var);
	 * 
	 * @access	public
	 * @static
	 * @name	(string) Method name
	 * @args	(array)	Method arguments
	 * 
	 */
	public static function __callStatic( $name, $args )
	{
		return call_user_func_array(__NAMESPACE__ . $name . '::' . array_shift($args), $args);
	}
	
	// }}}
}
