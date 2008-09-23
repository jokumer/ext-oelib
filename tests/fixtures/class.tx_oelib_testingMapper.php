<?php
/***************************************************************
* Copyright notice
*
* (c) 2008 Oliver Klee <typo3-coding@oliverklee.de>
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

require_once(t3lib_extMgm::extPath('oelib') . 'tests/fixtures/class.tx_oelib_testingModel.php');
require_once(t3lib_extMgm::extPath('oelib') . 'class.tx_oelib_dataMapper.php');

/**
 * Class 'tx_oelib_testingMapper' for the 'oelib' extension.
 *
 * This class represents a mapper for a testing model.
 *
 * @package		TYPO3
 * @subpackage	tx_oelib
 *
 * @author		Oliver Klee <typo3-coding@oliverklee.de>
 */
class tx_oelib_testingMapper extends tx_oelib_dataMapper {
	/**
	 * @var	string		the name of the database table for this mapper
	 */
	protected $tableName = 'tx_oelib_test';

	/**
	 * Creates an empty model of the correct type for this mapper.
	 *
	 * @return	tx_oelib_testingModel		an empty model
	 */
	protected function createEmptyModel() {
		return t3lib_div::makeInstance('tx_oelib_testingModel');
	}

	/**
	 * Sets the map for this mapper.
	 *
	 * This function is intendend to be used for testing purposes only.
	 *
	 * @param	tx_oelib_identityMap	the map to set
	 */
	public function setMap(tx_oelib_identityMap $map) {
		$this->map = $map;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/oelib/class.tx_oelib_testingMapper.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/oelib/class.tx_oelib_testingMapper.php']);
}
?>