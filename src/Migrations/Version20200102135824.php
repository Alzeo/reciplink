<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200102135824 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe_love DROP FOREIGN KEY FK_28990AC2CBB24A1C');
        $this->addSql('ALTER TABLE user_love DROP FOREIGN KEY FK_2D031CD4CBB24A1C');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE love');
        $this->addSql('DROP TABLE recipe_love');
        $this->addSql('DROP TABLE user_love');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE love (id INT AUTO_INCREMENT NOT NULL, loves INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recipe_love (recipe_id INT NOT NULL, love_id INT NOT NULL, INDEX IDX_28990AC259D8A214 (recipe_id), INDEX IDX_28990AC2CBB24A1C (love_id), PRIMARY KEY(recipe_id, love_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_love (user_id INT NOT NULL, love_id INT NOT NULL, INDEX IDX_2D031CD4A76ED395 (user_id), INDEX IDX_2D031CD4CBB24A1C (love_id), PRIMARY KEY(user_id, love_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE recipe_love ADD CONSTRAINT FK_28990AC259D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_love ADD CONSTRAINT FK_28990AC2CBB24A1C FOREIGN KEY (love_id) REFERENCES love (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_love ADD CONSTRAINT FK_2D031CD4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_love ADD CONSTRAINT FK_2D031CD4CBB24A1C FOREIGN KEY (love_id) REFERENCES love (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE newsletter');
    }
}
