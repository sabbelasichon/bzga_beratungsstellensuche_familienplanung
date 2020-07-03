<?php

declare(strict_types = 1);

namespace Bzga\BzgaBeratungsstellensucheFamilienplanung\Slots;

use Bzga\BzgaBeratungsstellensucheFamilienplanung\Domain\Repository\PndConsultingRepository;
use Bzga\BzgaBeratungsstellensucheFamilienplanung\Domain\Repository\ReligionRepository;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class EntryRepository
{

    /**
     * @var string
     */
    public const LANGUAGE_MM_TABLE = 'tx_bzgaberatungsstellensuche_entry_pnd_language_mm';

    public function truncate(): void
    {
        $this->getDatabaseConnectionForTable(ReligionRepository::TABLE)->truncate(ReligionRepository::TABLE);
        $this->getDatabaseConnectionForTable(PndConsultingRepository::TABLE)->truncate(PndConsultingRepository::TABLE);
        $this->getDatabaseConnectionForTable(PndConsultingRepository::MM_TABLE)->truncate(PndConsultingRepository::MM_TABLE);

        $this->getDatabaseConnectionForTable(self::LANGUAGE_MM_TABLE)->truncate(self::LANGUAGE_MM_TABLE);
    }

    protected function getDatabaseConnectionForTable(string $table): Connection
    {
        return GeneralUtility::makeInstance(ConnectionPool::class)
                             ->getConnectionForTable($table);
    }
}
