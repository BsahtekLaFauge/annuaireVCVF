<?php

namespace VFVC\VfvcAnnuairevfvc\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Valentin Faugier <valentinfaugier@gmail.com>, dawin-alt
 *           Vincent Cousin <vincent.cousin3@gmail.com>, dawin-alt
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
 * Test case for class \VFVC\VfvcAnnuairevfvc\Domain\Model\Organisme.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Valentin Faugier <valentinfaugier@gmail.com>
 * @author Vincent Cousin <vincent.cousin3@gmail.com>
 */
class OrganismeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \VFVC\VfvcAnnuairevfvc\Domain\Model\Organisme
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Organisme();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getRaisonSocialeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRaisonSociale()
		);
	}

	/**
	 * @test
	 */
	public function setRaisonSocialeForStringSetsRaisonSociale()
	{
		$this->subject->setRaisonSociale('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'raisonSociale',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAdresseReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAdresse()
		);
	}

	/**
	 * @test
	 */
	public function setAdresseForStringSetsAdresse()
	{
		$this->subject->setAdresse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'adresse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCodePostalReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCodePostal()
		);
	}

	/**
	 * @test
	 */
	public function setCodePostalForStringSetsCodePostal()
	{
		$this->subject->setCodePostal('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'codePostal',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVilleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getVille()
		);
	}

	/**
	 * @test
	 */
	public function setVilleForStringSetsVille()
	{
		$this->subject->setVille('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ville',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone()
	{
		$this->subject->setTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax()
	{
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail()
	{
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSiretReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSiret()
		);
	}

	/**
	 * @test
	 */
	public function setSiretForStringSetsSiret()
	{
		$this->subject->setSiret('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'siret',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLogoReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getLogo()
		);
	}

	/**
	 * @test
	 */
	public function setLogoForFileReferenceSetsLogo()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setLogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'logo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHorairesReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getHoraires()
		);
	}

	/**
	 * @test
	 */
	public function setHorairesForStringSetsHoraires()
	{
		$this->subject->setHoraires('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'horaires',
			$this->subject
		);
	}
}
