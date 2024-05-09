<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240417134940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trotinette DROP FOREIGN KEY id-station');
        $this->addSql('DROP TABLE reclamations');
        $this->addSql('DROP TABLE recu');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE station');
        $this->addSql('DROP TABLE trotinette');
        $this->addSql('ALTER TABLE reservation CHANGE model model VARCHAR(50) DEFAULT NULL, CHANGE qte qte INT DEFAULT NULL, CHANGE datersv datersv VARCHAR(50) DEFAULT NULL, CHANGE heurersv heurersv VARCHAR(50) DEFAULT NULL, CHANGE periode periode INT DEFAULT NULL, CHANGE prix prix INT DEFAULT NULL, CHANGE impot impot DOUBLE PRECISION DEFAULT NULL, CHANGE total total DOUBLE PRECISION DEFAULT NULL, CHANGE mtotal mtotal DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE roles CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utlilisateur DROP FOREIGN KEY utlilisateur_ibfk_1');
        $this->addSql('DROP INDEX role_id ON utlilisateur');
        $this->addSql('ALTER TABLE utlilisateur CHANGE role_id role_id VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamations (idrec INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, emailrec VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pnrec INT NOT NULL, issue VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, subject VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, message VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, stater INT DEFAULT 0 NOT NULL, PRIMARY KEY(idrec)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recu (id INT AUTO_INCREMENT NOT NULL, name_client VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, impot DOUBLE PRECISION NOT NULL, total DOUBLE PRECISION NOT NULL, mtotal DOUBLE PRECISION NOT NULL, date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (idrep INT AUTO_INCREMENT NOT NULL, emailrep VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, response VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, daterep DATE NOT NULL, idrec INT NOT NULL, INDEX fk (idrec), PRIMARY KEY(idrep)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE station (id_station INT AUTO_INCREMENT NOT NULL, lieu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_station)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE trotinette (id_trotinette INT AUTO_INCREMENT NOT NULL, id_station INT NOT NULL, vitesse INT NOT NULL, charge INT NOT NULL, couleur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, dispo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id-station (id_station), PRIMARY KEY(id_trotinette)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE trotinette ADD CONSTRAINT id-station FOREIGN KEY (id_station) REFERENCES station (id_station) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation CHANGE model model VARCHAR(50) NOT NULL, CHANGE qte qte INT NOT NULL, CHANGE prix prix INT NOT NULL, CHANGE datersv datersv VARCHAR(50) NOT NULL, CHANGE heurersv heurersv VARCHAR(20) NOT NULL, CHANGE periode periode INT NOT NULL, CHANGE impot impot DOUBLE PRECISION NOT NULL, CHANGE total total DOUBLE PRECISION NOT NULL, CHANGE mtotal mtotal DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE roles CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE utlilisateur CHANGE role_id role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utlilisateur ADD CONSTRAINT utlilisateur_ibfk_1 FOREIGN KEY (role_id) REFERENCES roles (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX role_id ON utlilisateur (role_id)');
    }
}
