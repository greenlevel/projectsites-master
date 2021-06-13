<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210613172344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE webcategorie (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, position INT NOT NULL, ftitle VARCHAR(255) NOT NULL, furl VARCHAR(255) NOT NULL, INDEX IDX_70E282B9F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weblink (id INT AUTO_INCREMENT NOT NULL, webcategorie_id INT NOT NULL, title VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, position INT NOT NULL, INDEX IDX_1880CDF2EB7F7942 (webcategorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE webcategorie ADD CONSTRAINT FK_70E282B9F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE weblink ADD CONSTRAINT FK_1880CDF2EB7F7942 FOREIGN KEY (webcategorie_id) REFERENCES webcategorie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE webcategorie DROP FOREIGN KEY FK_70E282B9F675F31B');
        $this->addSql('ALTER TABLE weblink DROP FOREIGN KEY FK_1880CDF2EB7F7942');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE webcategorie');
        $this->addSql('DROP TABLE weblink');
    }
}
