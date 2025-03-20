<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250316191901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE music_tag (music_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_ECDA0575399BBB13 (music_id), INDEX IDX_ECDA0575BAD26311 (tag_id), PRIMARY KEY(music_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE music_tag ADD CONSTRAINT FK_ECDA0575399BBB13 FOREIGN KEY (music_id) REFERENCES music (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE music_tag ADD CONSTRAINT FK_ECDA0575BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE music ADD CONSTRAINT FK_CD52224A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_CD52224A12469DE2 ON music (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE music_tag DROP FOREIGN KEY FK_ECDA0575399BBB13');
        $this->addSql('ALTER TABLE music_tag DROP FOREIGN KEY FK_ECDA0575BAD26311');
        $this->addSql('DROP TABLE music_tag');
        $this->addSql('ALTER TABLE music DROP FOREIGN KEY FK_CD52224A12469DE2');
        $this->addSql('DROP INDEX IDX_CD52224A12469DE2 ON music');
    }
}
