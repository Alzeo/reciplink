<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200103120343 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, quantity INT NOT NULL, quantity_unity VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_like (id INT AUTO_INCREMENT NOT NULL, recipe_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_D3781A6C59D8A214 (recipe_id), INDEX IDX_D3781A6CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, dificulty VARCHAR(255) NOT NULL, time INT NOT NULL, time_unity VARCHAR(255) NOT NULL, part INT NOT NULL, description LONGTEXT NOT NULL, protein INT DEFAULT NULL, glucide INT DEFAULT NULL, lipide INT DEFAULT NULL, calorie INT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, publish TINYINT(1) NOT NULL, regime VARCHAR(255) NOT NULL, INDEX IDX_DA88B137A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_tags (recipe_id INT NOT NULL, tags_id INT NOT NULL, INDEX IDX_10A7CEF959D8A214 (recipe_id), INDEX IDX_10A7CEF98D7B4FB4 (tags_id), PRIMARY KEY(recipe_id, tags_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_food (recipe_id INT NOT NULL, food_id INT NOT NULL, INDEX IDX_AB23732859D8A214 (recipe_id), INDEX IDX_AB237328BA8E87C4 (food_id), PRIMARY KEY(recipe_id, food_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recipe_like ADD CONSTRAINT FK_D3781A6C59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE recipe_like ADD CONSTRAINT FK_D3781A6CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B137A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE recipe_tags ADD CONSTRAINT FK_10A7CEF959D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_tags ADD CONSTRAINT FK_10A7CEF98D7B4FB4 FOREIGN KEY (tags_id) REFERENCES tags (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB23732859D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_food ADD CONSTRAINT FK_AB237328BA8E87C4 FOREIGN KEY (food_id) REFERENCES food (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe_tags DROP FOREIGN KEY FK_10A7CEF98D7B4FB4');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB237328BA8E87C4');
        $this->addSql('ALTER TABLE recipe_like DROP FOREIGN KEY FK_D3781A6C59D8A214');
        $this->addSql('ALTER TABLE recipe_tags DROP FOREIGN KEY FK_10A7CEF959D8A214');
        $this->addSql('ALTER TABLE recipe_food DROP FOREIGN KEY FK_AB23732859D8A214');
        $this->addSql('ALTER TABLE recipe_like DROP FOREIGN KEY FK_D3781A6CA76ED395');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B137A76ED395');
        $this->addSql('DROP TABLE tags');
        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE recipe_like');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE recipe_tags');
        $this->addSql('DROP TABLE recipe_food');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE newsletter');
    }
}
