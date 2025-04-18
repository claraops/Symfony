<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250316172924 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_tag (category_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_264B1AD912469DE2 (category_id), INDEX IDX_264B1AD9BAD26311 (tag_id), PRIMARY KEY(category_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category_tag ADD CONSTRAINT FK_264B1AD912469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_tag ADD CONSTRAINT FK_264B1AD9BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE music ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE music ADD CONSTRAINT FK_CD52224A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_CD52224A12469DE2 ON music (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE music DROP FOREIGN KEY FK_CD52224A12469DE2');
        $this->addSql('ALTER TABLE category_tag DROP FOREIGN KEY FK_264B1AD912469DE2');
        $this->addSql('ALTER TABLE category_tag DROP FOREIGN KEY FK_264B1AD9BAD26311');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_tag');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP INDEX IDX_CD52224A12469DE2 ON music');
        $this->addSql('ALTER TABLE music DROP category_id');
    }
}
