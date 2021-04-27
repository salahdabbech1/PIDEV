<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407011342 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat CHANGE idSender idSender INT DEFAULT NULL');
        $this->addSql('ALTER TABLE film CHANGE director director VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE filmactors CHANGE Faid Faid INT DEFAULT NULL, CHANGE Fid Fid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY salle_ibfk_1');
        $this->addSql('ALTER TABLE salle CHANGE idCin idCin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5C8AAD2D5D FOREIGN KEY (idCin) REFERENCES cinema (id)');
        $this->addSql('ALTER TABLE theatre CHANGE idTactor idTactor INT DEFAULT NULL');
        $this->addSql('ALTER TABLE theatreactors CHANGE TactorId TactorId INT DEFAULT NULL, CHANGE TheatreId TheatreId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role INT NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE idUser idUser INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chat CHANGE idSender idSender INT NOT NULL');
        $this->addSql('ALTER TABLE film CHANGE director director TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE filmactors CHANGE Faid Faid INT NOT NULL, CHANGE Fid Fid INT NOT NULL');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5C8AAD2D5D');
        $this->addSql('ALTER TABLE salle CHANGE idCin idCin INT NOT NULL');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT salle_ibfk_1 FOREIGN KEY (idCin) REFERENCES cinema (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE theatre CHANGE idTactor idTactor INT NOT NULL');
        $this->addSql('ALTER TABLE theatreactors CHANGE TactorId TactorId INT NOT NULL, CHANGE TheatreId TheatreId INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE wishlist CHANGE idUser idUser INT NOT NULL');
    }
}
