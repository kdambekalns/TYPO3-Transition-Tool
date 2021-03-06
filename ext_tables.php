<?php                                    
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Nicolas Forgerit <nicolas.forgerit@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

if (TYPO3_MODE === 'BE') {    
Tx_Extbase_Utility_Extension::registerModule(
    $_EXTKEY,
    'tools',
    'tx_t3tt_mod1',
    '',
    array(
        'Index' => 'index, step1, step2, step3, downloadOutputFile',
    ),
    array(
        'access' => 'user,group',
        'icon' => 'EXT:'. $_EXTKEY .'/ext_icon.png', 
		'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xml',
    )
);
}