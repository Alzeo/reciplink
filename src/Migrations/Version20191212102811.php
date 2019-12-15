<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191212102811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE regime (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_food (id INT AUTO_INCREMENT NOT NULL, quantity INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food (id INT AUTO_INCREMENT NOT NULL, recipe_food_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D43829F7F66A8984 (recipe_food_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, recipe_food_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, dificulty VARCHAR(255) NOT NULL, time INT NOT NULL, time_unity VARCHAR(255) NOT NULL, part INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_DA88B137F66A8984 (recipe_food_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_regime (recipe_id INT NOT NULL, regime_id INT NOT NULL, INDEX IDX_2798545D59D8A214 (recipe_id), INDEX IDX_2798545D35E7D534 (regime_id), PRIMARY KEY(recipe_id, regime_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE food ADD CONSTRAINT FK_D43829F7F66A8984 FOREIGN KEY (recipe_food_id) REFERENCES recipe_food (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B137F66A8984 FOREIGN KEY (recipe_food_id) REFERENCES recipe_food (id)');
        $this->addSql('ALTER TABLE recipe_regime ADD CONSTRAINT FK_2798545D59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_regime ADD CONSTRAINT FK_2798545D35E7D534 FOREIGN KEY (regime_id) REFERENCES regime (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe_regime DROP FOREIGN KEY FK_2798545D35E7D534');
        $this->addSql('ALTER TABLE food DROP FOREIGN KEY FK_D43829F7F66A8984');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B137F66A8984');
        $this->addSql('ALTER TABLE recipe_regime DROP FOREIGN KEY FK_2798545D59D8A214');
        $this->addSql('DROP TABLE regime');
        $this->addSql('DROP TABLE recipe_food');
        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE recipe_regime');
    }
}
