<?php
/**
 * Preview of index file
 * 
 * PHP version 5
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
 * @category	Usage Preview
 * @package		MVC Test
 * @author		Spencer A. Lockhart
 * @copright	2011 WysGui Web Services
 * @license		http://www.opensource.org/licenses/bsd-license.php
 * @since		Test Available since 1.0
 * 
 */

// {{{ pre-headers
/**
 * Require code used before headers are sent
 * @see			./header.php
 */
require_once 'header.php';

// }}}

/**
 * Instanciate object of SomeClass Controller
 * @see			Controller_SomeClass::some_method
 * 
 * @global object $test
 */

// {{{ Global Scope

$test = new Controller_SomeClass();
$test->some_method();

/**
 * Call static method of SomeClass Model
 * @see			Model_SomeClass::some_method
 */
Model_SomeClass::some_method();

// }}}
