<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191213104737 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE food DROP FOREIGN KEY FK_D43829F7F66A8984');
        $this->addSql('DROP INDEX IDX_D43829F7F66A8984 ON food');
        $this->addSql('ALTER TABLE food DROP recipe_food_id');
        $this->addSql('ALTER TABLE recipe_food MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB23732859D8A214');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB237328BA8E87C4');
        $this->addSql('ALTER TABLE recipe_food DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE recipe_food DROP id, DROP quantity, CHANGE recipe_id recipe_id INT NOT NULL, CHANGE food_id food_id INT NOT NULL');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB23732859D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB237328BA8E87C4 FOREIGN KEY (food_id) REFERENCES food (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_food ADD PRIMARY KEY (recipe_id, food_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE food ADD recipe_food_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE food ADD CONSTRAINT FK_D43829F7F66A8984 FOREIGN KEY (recipe_food_id) REFERENCES recipe_food (id)');
        $this->addSql('CREATE INDEX IDX_D43829F7F66A8984 ON food (recipe_food_id)');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB23732859D8A214');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB237328BA8E87C4');
        $this->addSql('ALTER TABLE recipe_food DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE recipe_food ADD id INT AUTO_INCREMENT NOT NULL, ADD quantity INT NOT NULL, CHANGE recipe_id recipe_id INT DEFAULT NULL, CHANGE food_id food_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB23732859D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB237328BA8E87C4 FOREIGN KEY (food_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE recipe_food ADD PRIMARY KEY (id)');
    }
}
