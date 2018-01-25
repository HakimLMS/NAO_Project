<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180119132417 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, date_article DATE NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_image (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, article_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, date_comment DATETIME NOT NULL, reported TINYINT(1) NOT NULL, INDEX IDX_9474526CF675F31B (author_id), INDEX IDX_9474526C7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, type VARCHAR(100) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', lastname VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, firstname VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, birth DATE NOT NULL, member TINYINT(1) NOT NULL, newsletter TINYINT(1) NOT NULL, image VARCHAR(100) DEFAULT NULL, procard VARCHAR(100) DEFAULT NULL, state VARCHAR(100) NOT NULL, salt VARCHAR(255) DEFAULT NULL, is_active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE aves ADD id INT AUTO_INCREMENT NOT NULL, CHANGE order_aves order_aves VARCHAR(255) NOT NULL, CHANGE family family VARCHAR(255) NOT NULL, CHANGE cd_name cd_name VARCHAR(255) NOT NULL, CHANGE lb_name lb_name VARCHAR(255) NOT NULL, CHANGE vern_name vern_name VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C7294869C');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF675F31B');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_image');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE aves MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE aves DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE aves DROP id, CHANGE order_aves order_aves VARCHAR(500) NOT NULL COLLATE latin1_swedish_ci, CHANGE family family VARCHAR(500) NOT NULL COLLATE latin1_swedish_ci, CHANGE cd_name cd_name VARCHAR(10) NOT NULL COLLATE latin1_swedish_ci, CHANGE lb_name lb_name VARCHAR(500) NOT NULL COLLATE latin1_swedish_ci, CHANGE vern_name vern_name VARCHAR(5000) NOT NULL COLLATE latin1_swedish_ci');
    }
}
