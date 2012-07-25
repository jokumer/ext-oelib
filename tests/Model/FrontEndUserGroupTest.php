<?php
/***************************************************************
* Copyright notice
*
* (c) 2009-2012 Bernd Schönbach <bernd@oliverklee.de>
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for the tx_oelib_Model_FrontEndUserGroup class in the "oelib"
 * extension.
 *
 * @package TYPO3
 * @subpackage oelib
 *
 * @author Bernd Schönbach <bernd@oliverklee.de>
 */
class tx_oelib_Model_FrontEndUserGroupTest extends tx_phpunit_testcase {
	/**
	 * @var tx_oelib_Model_FrontEndUserGroup
	 */
	private $fixture;

	public function setUp() {
		$this->fixture = new tx_oelib_Model_FrontEndUserGroup();
	}

	public function tearDown() {
		$this->fixture->__destruct();
		unset($this->fixture);
	}


	////////////////////////////////
	// Tests concerning getTitle()
	////////////////////////////////

	public function test_GetTitle_ForNonEmptyGroupTitle_ReturnsGroupTitle() {
		$this->fixture->setData(array('title' => 'foo'));

		$this->assertSame(
			'foo',
			$this->fixture->getTitle()
		);
	}

	public function test_GetTitle_ForEmptyGroupTitle_ReturnsEmptyString() {
		$this->fixture->setData(array('title' => ''));

		$this->assertSame(
			'',
			$this->fixture->getTitle()
		);
	}


	//////////////////////////////////////
	// Tests concerning getDescription()
	//////////////////////////////////////

	public function test_GetDescription_ForNonEmptyGroupDescription_ReturnsGroupDescription() {
		$this->fixture->setData(array('description' => 'foo'));

		$this->assertSame(
			'foo',
			$this->fixture->getDescription()
		);
	}

	public function test_GetDescription_ForEmptyGroupDescription_ReturnsEmptyString() {
		$this->fixture->setData(array('description' => ''));

		$this->assertSame(
			'',
			$this->fixture->getDescription()
		);
	}
}
?>