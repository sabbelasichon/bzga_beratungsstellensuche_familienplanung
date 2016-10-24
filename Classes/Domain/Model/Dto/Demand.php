<?php

namespace BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\Dto;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * @package TYPO3
 * @subpackage bzga_beratungsstellensuche_familienplanung
 * @author Sebastian Schreiber
 */
class Demand extends \BZgA\BzgaBeratungsstellensuche\Domain\Model\Dto\Demand
{

    /**
     * @var \BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\Religion
     */
    protected $religion;

    /**
     * @var boolean
     */
    protected $motherAndChild = false;

    /**
     * @var boolean
     */
    protected $consultingAgreement = false;

    /**
     * @var boolean
     */
    protected $pndConsulting;

    /**
     * @return \BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\Religion
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @param \BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\Religion $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    /**
     * @return boolean
     */
    public function isMotherAndChild()
    {
        return $this->motherAndChild;
    }

    /**
     * @param boolean $motherAndChild
     */
    public function setMotherAndChild($motherAndChild)
    {
        $this->motherAndChild = $motherAndChild;
    }

    /**
     * @return boolean
     */
    public function isConsultingAgreement()
    {
        return $this->consultingAgreement;
    }

    /**
     * @param boolean $consultingAgreement
     */
    public function setConsultingAgreement($consultingAgreement)
    {
        $this->consultingAgreement = $consultingAgreement;
    }

    /**
     * @return boolean
     */
    public function isPndConsulting()
    {
        return $this->pndConsulting;
    }

    /**
     * @param boolean $pndConsulting
     */
    public function setPndConsulting($pndConsulting)
    {
        $this->pndConsulting = $pndConsulting;
    }

}