<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222135158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE peinture (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, largeur NUMERIC(6, 2) DEFAULT NULL, hauteur NUMERIC(6, 2) DEFAULT NULL, en_vente TINYINT(1) NOT NULL, prix NUMERIC(10, 2) DEFAULT NULL, date_realisation DATETIME DEFAULT NULL, date DATETIME DEFAULT NULL, description LONGTEXT NOT NULL, portofolio TINYINT(1) NOT NULL, slug VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, INDEX IDX_8FB3A9D6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE peinture_categorie (peinture_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_38CEF7CFC2E869AB (peinture_id), INDEX IDX_38CEF7CFBCF5E72D (categorie_id), PRIMARY KEY(peinture_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE peinture ADD CONSTRAINT FK_8FB3A9D6A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE peinture_categorie ADD CONSTRAINT FK_38CEF7CFC2E869AB FOREIGN KEY (peinture_id) REFERENCES peinture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE peinture_categorie ADD CONSTRAINT FK_38CEF7CFBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE peinture_categorie DROP FOREIGN KEY FK_38CEF7CFBCF5E72D');
        $this->addSql('ALTER TABLE peinture_categorie DROP FOREIGN KEY FK_38CEF7CFC2E869AB');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE peinture');
        $this->addSql('DROP TABLE peinture_categorie');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
