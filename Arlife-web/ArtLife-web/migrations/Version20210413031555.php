<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210413031555 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE filmactors (id INT AUTO_INCREMENT NOT NULL, Faid INT DEFAULT NULL, Fid INT DEFAULT NULL, INDEX Faid (Faid), INDEX Fid (Fid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE filmactors ADD CONSTRAINT FK_CC7FE22928CE0C45 FOREIGN KEY (Faid) REFERENCES factor (id)');
        $this->addSql('ALTER TABLE filmactors ADD CONSTRAINT FK_CC7FE22975B65DCF FOREIGN KEY (Fid) REFERENCES film (id)');
        $this->addSql('ALTER TABLE film_actors DROP FOREIGN KEY FK_B4D9CDEF567F5183');
        $this->addSql('ALTER TABLE film_actors DROP FOREIGN KEY FK_B4D9CDEFBC88C1A3');
        $this->addSql('ALTER TABLE film_actors ADD CONSTRAINT FK_B4D9CDEF567F5183 FOREIGN KEY (film_id) REFERENCES film (id)');
        $this->addSql('ALTER TABLE film_actors ADD CONSTRAINT FK_B4D9CDEFBC88C1A3 FOREIGN KEY (factor_id) REFERENCES factor (id)');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY salle_ibfk_1');
        $this->addSql('ALTER TABLE salle CHANGE idCin idCin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5C8AAD2D5D FOREIGN KEY (idCin) REFERENCES cinema (id)');
        $this->addSql('ALTER TABLE user CHANGE role role INT NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE idUser idUser INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE filmactors');
        $this->addSql('ALTER TABLE film_actors DROP FOREIGN KEY FK_B4D9CDEF567F5183');
        $this->addSql('ALTER TABLE film_actors DROP FOREIGN KEY FK_B4D9CDEFBC88C1A3');
        $this->addSql('ALTER TABLE film_actors ADD CONSTRAINT FK_B4D9CDEF567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_actors ADD CONSTRAINT FK_B4D9CDEFBC88C1A3 FOREIGN KEY (factor_id) REFERENCES factor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5C8AAD2D5D');
        $this->addSql('ALTER TABLE salle CHANGE idCin idCin INT NOT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT salle_ibfk_1 FOREIGN KEY (idCin) REFERENCES cinema (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE role role INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE idUser idUser INT NOT NULL');
    }
}
