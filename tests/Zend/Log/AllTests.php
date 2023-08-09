<?php

use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\TestRunner;

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Log
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Zend_Log_AllTests::main');
}

require_once 'Zend/Log/LogTest.php';
require_once 'Zend/Log/Filter/AllTests.php';
require_once 'Zend/Log/Formatter/AllTests.php';
require_once 'Zend/Log/Writer/AllTests.php';

/**
 * @category   Zend
 * @package    Zend_Log
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Log
 */
class Zend_Log_AllTests
{
    public static function main()
    {
        (new resources_Runner())->run(self::suite());
    }

    public static function suite()
    {
        $suite = new TestSuite('Zend Framework - Zend_Log');

        $suite->addTestSuite('Zend_Log_LogTest');
        $suite->addTest(Zend_Log_Filter_AllTests::suite());
        $suite->addTest(Zend_Log_Formatter_AllTests::suite());
        $suite->addTest(Zend_Log_Writer_AllTests::suite());

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD === 'Zend_Log_AllTests::main') {
    Zend_Log_AllTests::main();
}
