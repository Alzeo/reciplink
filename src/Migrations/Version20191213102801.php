<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191213102801 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tags_regime_recipe');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tags_regime_recipe (tags_regime_id INT NOT NULL, recipe_id INT NOT NULL, INDEX IDX_462A953251E6EB68 (tags_regime_id), INDEX IDX_462A953259D8A214 (recipe_id), PRIMARY KEY(tags_regime_id, recipe_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tags_regime_recipe ADD CONSTRAINT FK_462A953251E6EB68 FOREIGN KEY (tags_regime_id) REFERENCES tags_regime (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tags_regime_recipe ADD CONSTRAINT FK_462A953259D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
    }
}
