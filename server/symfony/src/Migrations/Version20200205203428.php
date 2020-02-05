<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200205203428 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mssql', 'Migration can only be executed safely on \'mssql\'.');

        $this->addSql('CREATE TABLE curso (id INT IDENTITY NOT NULL, nombre NVARCHAR(50) NOT NULL, horas INT NOT NULL, descripcion NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE TABLE estudiante (id INT IDENTITY NOT NULL, id_usuario_id INT NOT NULL, nombre NVARCHAR(60) NOT NULL, apellidos NVARCHAR(100) NOT NULL, calle NVARCHAR(100) NOT NULL, cp NVARCHAR(5) NOT NULL, ciudad NVARCHAR(60) NOT NULL, provincia NVARCHAR(18) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B3F3FAD7EB2C349 ON estudiante (id_usuario_id) WHERE id_usuario_id IS NOT NULL');
        $this->addSql('CREATE TABLE temas (id INT IDENTITY NOT NULL, id_curso_id INT NOT NULL, num_tema SMALLINT NOT NULL, nombre NVARCHAR(50) NOT NULL, objetivos NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE INDEX IDX_336D9430D710A68A ON temas (id_curso_id)');
        $this->addSql('CREATE TABLE usuario (id INT IDENTITY NOT NULL, usu NVARCHAR(60) NOT NULL, pwd NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('ALTER TABLE estudiante ADD CONSTRAINT FK_3B3F3FAD7EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE temas ADD CONSTRAINT FK_336D9430D710A68A FOREIGN KEY (id_curso_id) REFERENCES curso (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mssql', 'Migration can only be executed safely on \'mssql\'.');

        $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('ALTER TABLE temas DROP CONSTRAINT FK_336D9430D710A68A');
        $this->addSql('ALTER TABLE estudiante DROP CONSTRAINT FK_3B3F3FAD7EB2C349');
        $this->addSql('DROP TABLE curso');
        $this->addSql('DROP TABLE estudiante');
        $this->addSql('DROP TABLE temas');
        $this->addSql('DROP TABLE usuario');
    }
}
