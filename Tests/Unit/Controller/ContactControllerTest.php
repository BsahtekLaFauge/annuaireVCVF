<?php
namespace VFVC\VfvcAnnuairevfvc\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Valentin Faugier <valentinfaugier@gmail.com>, dawin-alt
 *  			Vincent Cousin <vincent.cousin3@gmail.com>, dawin-alt
 *  			
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

/**
 * Test case for class VFVC\VfvcAnnuairevfvc\Controller\ContactController.
 *
 * @author Valentin Faugier <valentinfaugier@gmail.com>
 * @author Vincent Cousin <vincent.cousin3@gmail.com>
 */
class ContactControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \VFVC\VfvcAnnuairevfvc\Controller\ContactController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('VFVC\\VfvcAnnuairevfvc\\Controller\\ContactController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllContactsFromRepositoryAndAssignsThemToView()
	{

		$allContacts = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$contactRepository = $this->getMock('VFVC\\VfvcAnnuairevfvc\\Domain\\Repository\\ContactRepository', array('findAll'), array(), '', FALSE);
		$contactRepository->expects($this->once())->method('findAll')->will($this->returnValue($allContacts));
		$this->inject($this->subject, 'contactRepository', $contactRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('contacts', $allContacts);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenContactToView()
	{
		$contact = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Contact();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('contact', $contact);

		$this->subject->showAction($contact);
	}
}
