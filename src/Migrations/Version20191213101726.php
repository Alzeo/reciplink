<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191213101726 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B137F66A8984');
        $this->addSql('DROP INDEX IDX_DA88B137F66A8984 ON recipe');
        $this->addSql('ALTER TABLE recipe DROP recipe_food_id');
        $this->addSql('ALTER TABLE recipe_food ADD recipe_id INT DEFAULT NULL, ADD food_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB23732859D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB237328BA8E87C4 FOREIGN KEY (food_id) REFERENCES food (id)');
        $this->addSql('CREATE INDEX IDX_AB23732859D8A214 ON recipe_food (recipe_id)');
        $this->addSql('CREATE INDEX IDX_AB237328BA8E87C4 ON recipe_food (food_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe ADD recipe_food_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B137F66A8984 FOREIGN KEY (recipe_food_id) REFERENCES recipe_food (id)');
        $this->addSql('CREATE INDEX IDX_DA88B137F66A8984 ON recipe (recipe_food_id)');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB23732859D8A214');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB237328BA8E87C4');
        $this->addSql('DROP INDEX IDX_AB23732859D8A214 ON recipe_food');
        $this->addSql('DROP INDEX IDX_AB237328BA8E87C4 ON recipe_food');
        $this->addSql('ALTER TABLE recipe_food DROP recipe_id, DROP food_id');
    }
}
