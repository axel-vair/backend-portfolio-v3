<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260817093449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tag_projet DROP CONSTRAINT fk_b954d585bad26311');
        $this->addSql('ALTER TABLE tag_projet DROP CONSTRAINT fk_b954d585c18272');
        $this->addSql('DROP TABLE tag_projet');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tag_projet (tag_id INT NOT NULL, projet_id INT NOT NULL, PRIMARY KEY (tag_id, projet_id))');
        $this->addSql('CREATE INDEX idx_b954d585c18272 ON tag_projet (projet_id)');
        $this->addSql('CREATE INDEX idx_b954d585bad26311 ON tag_projet (tag_id)');
        $this->addSql('ALTER TABLE tag_projet ADD CONSTRAINT fk_b954d585bad26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE tag_projet ADD CONSTRAINT fk_b954d585c18272 FOREIGN KEY (projet_id) REFERENCES projet (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
