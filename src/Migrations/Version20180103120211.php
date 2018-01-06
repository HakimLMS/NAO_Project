<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180103120211 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD username VARCHAR(100) NOT NULL, ADD type VARCHAR(100) NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD lastname VARCHAR(100) NOT NULL, ADD password VARCHAR(100) NOT NULL, ADD firstname VARCHAR(100) NOT NULL, ADD email VARCHAR(100) NOT NULL, ADD birth DATE NOT NULL, ADD member TINYINT(1) NOT NULL, ADD newsletter TINYINT(1) NOT NULL, ADD image VARCHAR(100) DEFAULT NULL, ADD procard VARCHAR(100) DEFAULT NULL, ADD state VARCHAR(100) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user DROP username, DROP type, DROP roles, DROP lastname, DROP password, DROP firstname, DROP email, DROP birth, DROP member, DROP newsletter, DROP image, DROP procard, DROP state');
    }
}
