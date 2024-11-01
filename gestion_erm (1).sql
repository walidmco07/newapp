-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 31 oct. 2024 à 11:18
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_erm`
--

-- --------------------------------------------------------

--
-- Structure de la table `abilitation`
--

CREATE TABLE `abilitation` (
  `id_abili` int(11) NOT NULL,
  `avis_abili` varchar(255) NOT NULL,
  `nomabili` varchar(50) NOT NULL,
  `prenomabili` varchar(50) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `organe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `bmca`
--

CREATE TABLE `bmca` (
  `idbmca` int(11) NOT NULL,
  `nature_bmca` varchar(100) NOT NULL,
  `numero_bmca` int(11) NOT NULL,
  `date_obtention` date NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_compte` int(11) NOT NULL,
  `num_compte` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `somme` float NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consommationee`
--

CREATE TABLE `consommationee` (
  `numfacture` int(11) NOT NULL,
  `numpolice` int(11) NOT NULL,
  `date` date NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `decoration`
--

CREATE TABLE `decoration` (
  `IDdeco` int(11) NOT NULL,
  `UNITE` varchar(50) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `REFERENCE` varchar(255) NOT NULL,
  `DATE REF` date NOT NULL,
  `NOMBRE` int(11) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `iddeplacement` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `duree` varchar(100) NOT NULL,
  `datevalidation` date NOT NULL,
  `notedeservice` varchar(255) NOT NULL,
  `matriculestagiaire` varchar(50) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `detail_reengagement`
--

CREATE TABLE `detail_reengagement` (
  `ID_reengagement` int(11) NOT NULL,
  `type_engagement` varchar(100) NOT NULL,
  `date_effet` date NOT NULL,
  `date_fin_contrat` date NOT NULL,
  `num_homologation` int(11) NOT NULL,
  `date_homologation` date NOT NULL,
  `reference_annulation` int(11) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `eodr`
--

CREATE TABLE `eodr` (
  `matricule_eodr` varchar(50) NOT NULL,
  `prenomeodr` varchar(50) NOT NULL,
  `nomeodr` varchar(50) NOT NULL,
  `gradeeodr` varchar(50) NOT NULL,
  `dateengmnt` date NOT NULL,
  `specialte` varchar(100) NOT NULL,
  `stageorigin` varchar(100) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `IDstage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_permission`
--

CREATE TABLE `fiche_permission` (
  `idpermission` int(11) NOT NULL,
  `Periode_njour` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL,
  `num_passport` int(50) NOT NULL,
  `matricule_eodr` varchar(50) NOT NULL,
  `matriculestagiaire` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `filiation`
--

CREATE TABLE `filiation` (
  `ID_filiation` int(11) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `commun` varchar(255) NOT NULL,
  `province` int(255) NOT NULL,
  `filsdem` varchar(100) NOT NULL,
  `filsdep` varchar(100) NOT NULL,
  `adresse_parents` varchar(255) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `IDdip` int(11) NOT NULL,
  `diplome` varchar(100) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `date _obtention` date NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE `hebergement` (
  `idhebreg` int(11) NOT NULL,
  `dortoir` varchar(100) NOT NULL,
  `etage` int(11) NOT NULL,
  `chambre` varchar(50) NOT NULL,
  `matricule_eodr` varchar(50) NOT NULL,
  `matriculestagiaire` varchar(50) NOT NULL,
  `num_passport` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `instructions_generales`
--

CREATE TABLE `instructions_generales` (
  `idinstg` int(11) NOT NULL,
  `NIVEAU_SCOLAIRE` varchar(50) NOT NULL,
  `OPTIONinst` varchar(50) NOT NULL,
  `DATE_OBTENTION` date NOT NULL,
  `DIP_MILITAIRE` varchar(50) NOT NULL,
  `DATE_PRISE_EFFET` date NOT NULL,
  `BONIFICATION` int(11) NOT NULL,
  `OBS` varchar(255) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `liste_rouge`
--

CREATE TABLE `liste_rouge` (
  `idlr` int(11) NOT NULL,
  `avislr` varchar(100) NOT NULL,
  `nomlr` varchar(50) NOT NULL,
  `prenomlr` varchar(50) NOT NULL,
  `cinlr` varchar(8) NOT NULL,
  `organelr` varchar(50) NOT NULL,
  `societe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `IDmat` int(50) NOT NULL,
  `avismutation` varchar(100) NOT NULL,
  `categories` int(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qte` int(11) NOT NULL,
  `affectation` varchar(100) NOT NULL,
  `ordreaffectation` int(100) NOT NULL,
  `etat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `materiel_reverse`
--

CREATE TABLE `materiel_reverse` (
  `IDmat_reverse` int(11) NOT NULL,
  `num_ordre_reversement` varchar(100) NOT NULL,
  `obs` varchar(100) NOT NULL,
  `IDmat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `idmission` int(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `tache` varchar(100) NOT NULL,
  `refmission` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `deplacement_regularise` text NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `mutuelle`
--

CREATE TABLE `mutuelle` (
  `idmutuelle` int(11) NOT NULL,
  `mois` varchar(10) NOT NULL,
  `nbmalade` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `idnotification` int(11) NOT NULL,
  `date_notification` date NOT NULL,
  `message _notification` varchar(500) NOT NULL,
  `organe_concerne` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `organique`
--

CREATE TABLE `organique` (
  `num` int(11) DEFAULT NULL,
  `matriculeorg` varchar(50) NOT NULL,
  `num_cin` varchar(50) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `n_e` int(11) DEFAULT NULL,
  `t_i` int(11) DEFAULT NULL,
  `dip_scol` varchar(100) DEFAULT NULL,
  `emploi_tenu` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `promotion` int(11) DEFAULT NULL,
  `situation_familiale` varchar(100) DEFAULT NULL,
  `sexe` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `groupe_sanguin` varchar(100) DEFAULT NULL,
  `date_nais` date NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `stage_demandee` varchar(100) NOT NULL,
  `date_entree_service` date NOT NULL,
  `date_nomination_grade_actuel` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `anciennete_service` date NOT NULL,
  `anciennete_grade_actuel` date NOT NULL,
  `diplome_detenu` varchar(50) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `date_obtention` date NOT NULL,
  `reference` varchar(255) NOT NULL,
  `nom arabe` varchar(50) NOT NULL,
  `prenom arabe` varchar(50) NOT NULL,
  `notes_annuelles` float NOT NULL,
  `ID_stf` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pfa`
--

CREATE TABLE `pfa` (
  `num_passport` int(50) NOT NULL,
  `prenompfa` varchar(50) NOT NULL,
  `nompfa` varchar(50) NOT NULL,
  `payspfa` text NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL,
  `bourse` varchar(50) NOT NULL,
  `IDstage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `punition`
--

CREATE TABLE `punition` (
  `IDpunition` int(11) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `matriculeorg` varchar(50) NOT NULL,
  `num_passport` int(50) NOT NULL,
  `matriculestagiaire` varchar(50) NOT NULL,
  `matricule_eodr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reglage_deplac_detail`
--

CREATE TABLE `reglage_deplac_detail` (
  `iddetail` int(11) NOT NULL,
  `N_somme` int(11) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL,
  `idmission` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `idsalaire` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `num_compte` int(11) NOT NULL,
  `somme` int(11) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sante`
--

CREATE TABLE `sante` (
  `idsante` int(50) NOT NULL,
  `refsante` varchar(50) NOT NULL,
  `type` int(50) NOT NULL,
  `renouvelable` varchar(50) NOT NULL,
  `hopital` varchar(50) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `duree` varchar(50) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL,
  `matricule_eodr` varchar(50) NOT NULL,
  `matriculestagiaire` varchar(50) NOT NULL,
  `num_passport` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_engagement` int(50) NOT NULL,
  `date_engagement` date NOT NULL,
  `ref_engagement` varchar(50) NOT NULL,
  `date_fin_contrat` date NOT NULL,
  `arme` varchar(50) NOT NULL,
  `origine` varchar(50) NOT NULL,
  `ancienne_origine` varchar(50) NOT NULL,
  `date_rdc` date NOT NULL,
  `date_service` date NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `situation_familiale`
--

CREATE TABLE `situation_familiale` (
  `ID_stf` int(50) NOT NULL,
  `conjoint` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `autorisation_mariage` varchar(50) NOT NULL,
  `date_autorisation` date NOT NULL,
  `ref_changement_SF` varchar(50) NOT NULL,
  `prenom_enfant` varchar(50) NOT NULL,
  `sexe_enfant` varchar(50) NOT NULL,
  `date_naiss` date NOT NULL,
  `date_deces` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `spa`
--

CREATE TABLE `spa` (
  `idspa` int(11) NOT NULL,
  `eff_theorique` int(11) NOT NULL,
  `eff_present` int(11) NOT NULL,
  `eff_abs` int(11) NOT NULL,
  `datespa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `IDstage` int(50) NOT NULL,
  `nomstage` varchar(50) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `efftheo` varchar(50) NOT NULL,
  `effnr` varchar(50) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `groupement` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stage_progressive`
--

CREATE TABLE `stage_progressive` (
  `idstgorg` int(50) NOT NULL,
  `nomstgorg` varchar(50) NOT NULL,
  `lieustgorg` varchar(50) NOT NULL,
  `du` date NOT NULL,
  `au` date NOT NULL,
  `referencestgorg` varchar(50) NOT NULL,
  `matriculeorg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `matriculestagiaire` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL,
  `deplacement` varchar(50) NOT NULL,
  `IDstage` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abilitation`
--
ALTER TABLE `abilitation`
  ADD PRIMARY KEY (`id_abili`);

--
-- Index pour la table `bmca`
--
ALTER TABLE `bmca`
  ADD PRIMARY KEY (`idbmca`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID_compte`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `consommationee`
--
ALTER TABLE `consommationee`
  ADD PRIMARY KEY (`numfacture`);

--
-- Index pour la table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`IDdeco`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`iddeplacement`),
  ADD KEY `matriculestagiaire` (`matriculestagiaire`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `detail_reengagement`
--
ALTER TABLE `detail_reengagement`
  ADD PRIMARY KEY (`ID_reengagement`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `eodr`
--
ALTER TABLE `eodr`
  ADD PRIMARY KEY (`matricule_eodr`),
  ADD KEY `IDstage` (`IDstage`);

--
-- Index pour la table `fiche_permission`
--
ALTER TABLE `fiche_permission`
  ADD PRIMARY KEY (`idpermission`),
  ADD KEY `matriculeorg` (`matriculeorg`),
  ADD KEY `matricule_eodr` (`matricule_eodr`),
  ADD KEY `matriculestagiaire` (`matriculestagiaire`),
  ADD KEY `num_passport` (`num_passport`);

--
-- Index pour la table `filiation`
--
ALTER TABLE `filiation`
  ADD PRIMARY KEY (`ID_filiation`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`IDdip`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD PRIMARY KEY (`idhebreg`),
  ADD KEY `matriculestagiaire` (`matriculestagiaire`),
  ADD KEY `num_passport` (`num_passport`),
  ADD KEY `matricule_eodr` (`matricule_eodr`);

--
-- Index pour la table `instructions_generales`
--
ALTER TABLE `instructions_generales`
  ADD PRIMARY KEY (`idinstg`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `liste_rouge`
--
ALTER TABLE `liste_rouge`
  ADD PRIMARY KEY (`idlr`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`IDmat`);

--
-- Index pour la table `materiel_reverse`
--
ALTER TABLE `materiel_reverse`
  ADD PRIMARY KEY (`IDmat_reverse`),
  ADD KEY `IDmat` (`IDmat`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`idmission`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `mutuelle`
--
ALTER TABLE `mutuelle`
  ADD PRIMARY KEY (`idmutuelle`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`idnotification`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `organique`
--
ALTER TABLE `organique`
  ADD PRIMARY KEY (`matriculeorg`),
  ADD KEY `ID_stf` (`ID_stf`);

--
-- Index pour la table `pfa`
--
ALTER TABLE `pfa`
  ADD PRIMARY KEY (`num_passport`),
  ADD KEY `IDstage` (`IDstage`);

--
-- Index pour la table `punition`
--
ALTER TABLE `punition`
  ADD PRIMARY KEY (`IDpunition`),
  ADD KEY `matriculeorg` (`matriculeorg`),
  ADD KEY `num_passport` (`num_passport`),
  ADD KEY `matriculestagiaire` (`matriculestagiaire`),
  ADD KEY `matricule_eodr` (`matricule_eodr`);

--
-- Index pour la table `reglage_deplac_detail`
--
ALTER TABLE `reglage_deplac_detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `matriculeorg` (`matriculeorg`),
  ADD KEY `idmission` (`idmission`);

--
-- Index pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD PRIMARY KEY (`idsalaire`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `sante`
--
ALTER TABLE `sante`
  ADD PRIMARY KEY (`idsante`),
  ADD KEY `matriculeorg` (`matriculeorg`),
  ADD KEY `matricule_eodr` (`matricule_eodr`),
  ADD KEY `matriculestagiaire` (`matriculestagiaire`),
  ADD KEY `num_passport` (`num_passport`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_engagement`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `situation_familiale`
--
ALTER TABLE `situation_familiale`
  ADD PRIMARY KEY (`ID_stf`);

--
-- Index pour la table `spa`
--
ALTER TABLE `spa`
  ADD PRIMARY KEY (`idspa`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`IDstage`);

--
-- Index pour la table `stage_progressive`
--
ALTER TABLE `stage_progressive`
  ADD PRIMARY KEY (`idstgorg`),
  ADD KEY `matriculeorg` (`matriculeorg`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`matriculestagiaire`),
  ADD KEY `IDstage` (`IDstage`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bmca`
--
ALTER TABLE `bmca`
  ADD CONSTRAINT `bmca_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `decoration`
--
ALTER TABLE `decoration`
  ADD CONSTRAINT `decoration_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD CONSTRAINT `deplacement_ibfk_1` FOREIGN KEY (`matriculestagiaire`) REFERENCES `stagiaire` (`matriculestagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deplacement_ibfk_2` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detail_reengagement`
--
ALTER TABLE `detail_reengagement`
  ADD CONSTRAINT `detail_reengagement_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `eodr`
--
ALTER TABLE `eodr`
  ADD CONSTRAINT `eodr_ibfk_1` FOREIGN KEY (`IDstage`) REFERENCES `stage` (`IDstage`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fiche_permission`
--
ALTER TABLE `fiche_permission`
  ADD CONSTRAINT `fiche_permission_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiche_permission_ibfk_2` FOREIGN KEY (`matricule_eodr`) REFERENCES `eodr` (`matricule_eodr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiche_permission_ibfk_3` FOREIGN KEY (`matriculestagiaire`) REFERENCES `stagiaire` (`matriculestagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiche_permission_ibfk_4` FOREIGN KEY (`num_passport`) REFERENCES `pfa` (`num_passport`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `filiation`
--
ALTER TABLE `filiation`
  ADD CONSTRAINT `filiation_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `hebergement_ibfk_2` FOREIGN KEY (`matriculestagiaire`) REFERENCES `stagiaire` (`matriculestagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hebergement_ibfk_3` FOREIGN KEY (`num_passport`) REFERENCES `pfa` (`num_passport`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hebergement_ibfk_4` FOREIGN KEY (`matricule_eodr`) REFERENCES `eodr` (`matricule_eodr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `instructions_generales`
--
ALTER TABLE `instructions_generales`
  ADD CONSTRAINT `instructions_generales_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `materiel_reverse`
--
ALTER TABLE `materiel_reverse`
  ADD CONSTRAINT `materiel_reverse_ibfk_1` FOREIGN KEY (`IDmat`) REFERENCES `materiel` (`IDmat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `organique`
--
ALTER TABLE `organique`
  ADD CONSTRAINT `organique_ibfk_1` FOREIGN KEY (`ID_stf`) REFERENCES `situation_familiale` (`ID_stf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pfa`
--
ALTER TABLE `pfa`
  ADD CONSTRAINT `pfa_ibfk_1` FOREIGN KEY (`IDstage`) REFERENCES `stage` (`IDstage`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `punition`
--
ALTER TABLE `punition`
  ADD CONSTRAINT `punition_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `punition_ibfk_2` FOREIGN KEY (`num_passport`) REFERENCES `pfa` (`num_passport`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `punition_ibfk_3` FOREIGN KEY (`matriculestagiaire`) REFERENCES `stagiaire` (`matriculestagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `punition_ibfk_4` FOREIGN KEY (`matricule_eodr`) REFERENCES `eodr` (`matricule_eodr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglage_deplac_detail`
--
ALTER TABLE `reglage_deplac_detail`
  ADD CONSTRAINT `reglage_deplac_detail_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reglage_deplac_detail_ibfk_2` FOREIGN KEY (`idmission`) REFERENCES `mission` (`idmission`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD CONSTRAINT `salaire_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sante`
--
ALTER TABLE `sante`
  ADD CONSTRAINT `sante_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sante_ibfk_2` FOREIGN KEY (`matricule_eodr`) REFERENCES `eodr` (`matricule_eodr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sante_ibfk_3` FOREIGN KEY (`matriculestagiaire`) REFERENCES `stagiaire` (`matriculestagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sante_ibfk_4` FOREIGN KEY (`num_passport`) REFERENCES `pfa` (`num_passport`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stage_progressive`
--
ALTER TABLE `stage_progressive`
  ADD CONSTRAINT `stage_progressive_ibfk_1` FOREIGN KEY (`matriculeorg`) REFERENCES `organique` (`matriculeorg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD CONSTRAINT `stagiaire_ibfk_1` FOREIGN KEY (`IDstage`) REFERENCES `stage` (`IDstage`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
