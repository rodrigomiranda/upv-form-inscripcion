<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120607091940 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE inscripcion CHANGE sede sede INT NOT NULL");
        $this->addSql("ALTER TABLE inscripcion ADD CONSTRAINT FK_935E99F02C395692 FOREIGN KEY (sexo) REFERENCES opcion_sexo(id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE inscripcion DROP FOREIGN KEY FK_935E99F02C395692");
        $this->addSql("ALTER TABLE inscripcion CHANGE sede sede TINYINT(1) DEFAULT NULL");
    }
}
