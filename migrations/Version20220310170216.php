<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220310170216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon_type DROP FOREIGN KEY pokemon_type_ibfk_1');
        $this->addSql('DROP TABLE pokemon_type');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP INDEX numero ON pokemon');
        $this->addSql('DROP INDEX numero_2 ON pokemon');
        $this->addSql('ALTER TABLE pokemon CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE numero numero INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pokemon_type (id INT AUTO_INCREMENT NOT NULL, pokemon_numero INT UNSIGNED NOT NULL, type_id INT UNSIGNED NOT NULL, INDEX pokemon_numero (pokemon_numero), INDEX type_id (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type (id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, color VARCHAR(6) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pokemon_type ADD CONSTRAINT pokemon_type_ibfk_1 FOREIGN KEY (type_id) REFERENCES type (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE pokemon_type ADD CONSTRAINT pokemon_type_ibfk_2 FOREIGN KEY (pokemon_numero) REFERENCES pokemon (numero) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE pokemon CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE numero numero INT UNSIGNED NOT NULL');
        $this->addSql('CREATE INDEX numero ON pokemon (numero)');
        $this->addSql('CREATE UNIQUE INDEX numero_2 ON pokemon (numero)');
    }
}
