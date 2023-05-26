<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221102135245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, id_activite INT NOT NULL, hr_rdv_activite TIME NOT NULL, hr_debut_act TIME NOT NULL, hr_fin_act TIME NOT NULL, date_annule_act DATE NOT NULL, nom_resp VARCHAR(255) NOT NULL, prenom_resp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animation (id INT AUTO_INCREMENT NOT NULL, id_animation INT NOT NULL, nom_anim VARCHAR(255) NOT NULL, date_creation_anim DATE NOT NULL, date_valid_anim DATE NOT NULL, duree_anim TIME NOT NULL, limite_age INT NOT NULL, tarif_anim INT NOT NULL, nbre_place_anim INT NOT NULL, descrip_anim VARCHAR(255) NOT NULL, comment_anim VARCHAR(255) NOT NULL, difficulte_anim VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, mdp VARCHAR(255) NOT NULL, nom_compte VARCHAR(255) NOT NULL, prenom_compte VARCHAR(255) NOT NULL, date_inscrip DATE NOT NULL, date_ferme DATE NOT NULL, type_profil VARCHAR(255) NOT NULL, date_deb_sejour DATE NOT NULL, date_fin_sejour DATE NOT NULL, date_nais_compte DATE NOT NULL, adr_mail_compte VARCHAR(255) NOT NULL, no_tel_compte INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_act (id INT AUTO_INCREMENT NOT NULL, id_etat VARCHAR(255) NOT NULL, nom_etat_act VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, no_inscrip INT NOT NULL, date_inscrip DATE NOT NULL, date_annule DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_anim (id INT AUTO_INCREMENT NOT NULL, nom_type_anim VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE vacancier');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vacancier (id INT AUTO_INCREMENT NOT NULL, id_vacancier INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT NOT NULL, age INT NOT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE animation');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE etat_act');
        $this->addSql('DROP TABLE inscription');
        $this->addSql('DROP TABLE type_anim');
    }
}
