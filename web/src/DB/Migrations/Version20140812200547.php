<?php

namespace AgenDAV\DB\Migrations;

use Doctrine\DBAL\Schema\Schema;
use \AgenDAV\DB\Migrations\AgenDAVMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140812200547 extends AgenDAVMigration
{
    public function up(Schema $schema)
    {
        $this->skipIf(!$this->upgradingFrom1x(), 'This migration only applies to AgenDAV 1.x upgrades');
        $this->write('Migrating the shared table');
        $sql = 'INSERT INTO shares (sid, grantor, path, grantee, rw) SELECT'
            .' sid, user_from, calendar, user_which, write_access FROM shared';

        $this->addSql($sql);
    }

    public function down(Schema $schema)
    {
        $this->write('Sorry, no way back!');
    }
}
