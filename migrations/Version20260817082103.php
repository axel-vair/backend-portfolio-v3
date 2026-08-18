<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260817082103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE projet_tag (projet_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY (projet_id, tag_id))');
        $this->addSql('CREATE INDEX IDX_D6560E82C18272 ON projet_tag (projet_id)');
        $this->addSql('CREATE INDEX IDX_D6560E82BAD26311 ON projet_tag (tag_id)');
        $this->addSql('ALTER TABLE projet_tag ADD CONSTRAINT FK_D6560E82C18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_tag ADD CONSTRAINT FK_D6560E82BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projet_tag DROP CONSTRAINT FK_D6560E82C18272');
        $this->addSql('ALTER TABLE projet_tag DROP CONSTRAINT FK_D6560E82BAD26311');
        $this->addSql('DROP TABLE projet_tag');
        $this->addSql('ALTER TABLE projet DROP image');
    }
}
