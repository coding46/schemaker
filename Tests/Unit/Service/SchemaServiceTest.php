<?php
namespace FluidTYPO3\Schemaker\Tests\Unit\Service;

/*
 * This file is part of the FluidTYPO3/Schemaker project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Tests\UnitTestCase;

/**
 * Class SchemaServiceTest
 */
class SchemaServiceTest extends UnitTestCase {

	/**
	 * @param string $class
	 * @param string $expected
	 * @test
	 * @dataProvider getTagNameForClassTestValues
	 */
	public function testGetTagNameForClass($class, $expected) {
		$instance = $this->getMock('FluidTYPO3\\Schemaker\\Service\\SchemaService', array(), array(), '', FALSE);
		$result = $this->callInaccessibleMethod($instance, 'getTagNameForClass', $class);
		$this->assertEquals($expected, $result);
	}

	/**
	 * @return array
	 */
	public function getTagNameForClassTestValues() {
		return array(
			array('Tx_Vhs_ViewHelpers_Content_RenderViewHelper', 'content.render'),
			array('Tx_Vhs_ViewHelpers_Content_GetViewHelper', 'content.get'),
			array('Tx_Vhs_ViewHelpers_ContentViewHelper', 'content'),
			array('FluidTYPO3\\Vhs\\ViewHelpers\\Content\\RenderViewHelper', 'content.render'),
			array('FluidTYPO3\\Vhs\\ViewHelpers\\Content\\GetViewHelper', 'content.get'),
			array('TYPO3\\CMS\\Fluid\\ViewHelpers\\IfViewHelper', 'if'),
			array('TYPO3\\CMS\\Fluid\\ViewHelpers\\Format\\HtmlentitiesViewHelper', 'format.htmlentities'),
		);
	}

}
