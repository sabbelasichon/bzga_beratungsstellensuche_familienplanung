<?php

namespace BZgA\BzgaBeratungsstellensucheFamilienplanung\Slots;

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

use Bzga\BzgaBeratungsstellensuche\Service\Importer\XmlImporter;
use BZgA\BzgaBeratungsstellensuche\Domain\Serializer\Serializer as BaseSerializer;
use BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\PndConsulting;
use BZgA\BzgaBeratungsstellensucheFamilienplanung\Domain\Model\Religion;

/**
 * @package TYPO3
 * @subpackage bzga_beratungsstellensuche_familienplanung
 * @author Sebastian Schreiber
 */
class Importer
{

    /**
     * @var \Bzga\BzgaBeratungsstellensucheFamilienplanung\Domain\Manager\ReligionManager
     * @inject
     */
    protected $religionManager;

    /**
     * @var \Bzga\BzgaBeratungsstellensucheFamilienplanung\Domain\Manager\PndConsultingManager
     * @inject
     */
    protected $pndConsultingManager;

    /**
     * @param XmlImporter $importer
     * @param \SimpleXMLIterator $sxe
     * @param $pid
     * @param BaseSerializer $serializer
     */
    public function preImport(XmlImporter $importer, \SimpleXMLIterator $sxe, $pid, BaseSerializer $serializer)
    {
        # Import religions
        $importer->convertRelations($sxe->konfessionen->konfession, $this->religionManager, Religion::class, $pid);

        # Import pnd beratungen
        $importer->convertRelations($sxe->pndberatungen->pndberatung, $this->pndConsultingManager, PndConsulting::class, $pid);

        $this->pndConsultingManager->persist();
        $this->religionManager->persist();

    }

}