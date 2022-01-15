
CREATE TABLE IF NOT EXISTS `angajati` (
  `ID_Angajat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Functie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Departament` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_Angajare` date NOT NULL,
  `Lucreaza_Pentru` bigint unsigned NOT NULL DEFAULT '0',
  `Salariu` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Angajat`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `angajati` (`ID_Angajat`, `Nume`, `Email`, `Functie`, `Telefon`, `Departament`, `Data_Angajare`, `Lucreaza_Pentru`, `Salariu`) VALUES
	(1, 'Stancu Ion', 'stancu_ion@yahoo.com', 'Mester Specialist', '0753702848', 'Atelier', '2020-08-11', 6, 2500),
	(2, 'Copolovici Lucian', 'lucy99@yahoo.com', 'Mester', '0715849365', 'Atelier', '2020-12-04', 6, 2200),
	(3, 'Munteanu Florentina-Daniela', 'flory_mnt@gmail.com', 'Agent vanzari', '0764902064', 'Vanzari', '2021-03-18', 11, 2700),
	(4, 'Bujoreanu Gheorghe', 'gheorghebujy@yahoo.com', 'Mester', '0764937555', 'Atelier', '2020-11-17', 6, 2250),
	(5, 'Onu Mihaela', 'onu_miky@hotmail.com', 'Agent vanzari', '0785293756', 'Vanzari', '2021-02-12', 11, 2800),
	(6, 'Parvulescu Vasile', 'vasilevasip2008@yahoo.com', 'Mester Sef', '0738265078', 'Atelier', '2020-01-14', 0, 3500),
	(7, 'Sirbu Andrei', 'andyysirbu@gmail.com', 'Mester', '0750483755', 'Atelier', '2021-09-30', 6, 2100),
	(8, 'Cristofor Sergiu', 'krystofor_sergiu95@hotmail.com', 'Mester', '0726946276', 'Atelier', '2021-06-15', 6, 2150),
	(9, 'Iovan Stefan', 'stefaniovan@gmail.com', 'Mester Specialist', '0776497584', 'Atelier', '2020-10-24', 6, 2510),
	(10, 'Radu Andrei', 'andrei_raduuu@gmail.com', 'Agent vanzari', '0784365875', 'Vanzari', '2021-11-08', 11, 2600),
	(11, 'Lica Nicolae', 'nicolae_nica2018@yahoo.com', 'Specialist vanzari', '0757395040', 'Vanzari', '2020-09-13', 0, 3500),
	(12, 'Alexandru Adriana', 'ady_adytza97@outlook.com', 'Manager vanzari', '0747397058', 'Administrativ', '2020-03-12', 19, 6000),
	(13, 'Mesaros Claudiu-Marius', 'mes_claudiu@yahoo.com', 'Sofer', '0765384861', 'Transport', '2022-01-10', 0, 2100),
	(14, 'Lungu Magdalena', 'magda_lungu@gmail.com', 'Manager resurse umane', '0737017319', 'Administrativ', '2020-07-11', 19, 5500),
	(15, 'Stanciu Silviu', 'stanciusilvy@yahoo.com', 'Sofer', '0757210324', 'Transport', '2021-11-30', 0, 2120),
	(16, 'Patroi Alexandru', 'alex_alexandru88@outlook.com', 'Agent depozit', '0760375894', 'Logistica', '2022-01-08', 0, 2200),
	(17, 'Bratescu Tatiana', 'tatianabrate2015@hotmail.com', 'Contabil', '0758302171', 'Administrativ', '2020-09-20', 19, 4300),
	(18, 'Lazaroiu Gheorghe', 'gheogheorghe@yahoo.com', 'Sofer', '0743752018', 'Transport', '2020-12-30', 0, 2500),
	(19, 'Ionescu Mihnea', 'mihnea_ionescu92@gmail.com', 'Manager general', '0730814353', 'Administrativ', '2020-02-12', 0, 9500),
	(20, 'Pamfil Virgil', 'virgyl86_2009@yahoo.com', 'Mester', '0785738750', 'Atelier', '2021-12-05', 6, 2250),
	(21, 'Dobrea Razvan-Catalin', 'catarazvyyy@outlook.com', 'Agent depozit', '0764839203', 'Logistica', '2021-03-15', 0, 2150),
	(22, 'Ciuca Raluca-Catrinel', 'raluk_ciuca@yahoo.ro', 'Specialist vanzari', '0765839405', 'Vanzari', '2021-07-29', 12, 2580),
	(23, 'Ionita Paul', 'paulionita73@gmail.com', 'Sofer', '0742512562', 'Transport', '2021-05-10', 0, 2400),
	(24, 'Alexandru Dragos', 'dragosel_alex@gmail.com', 'Agent depozit', '0758382404', 'Logistica', '2021-10-30', 0, 2320),
	(25, 'Grosu Matei-Alexandru', 'mateialex_gr78@hotmail.com', 'Manager logistica', '0786575102', 'Administrativ', '2020-01-12', 19, 4100),
	(26, 'Tugui Vasilica', 'vasilicavasy2018@yahoo.com', 'Agent vanzari', '0723424852', 'Vanzari', '2021-05-18', 12, 2620),
	(27, 'Beldiman Dumitru', 'dumitrubeld1969@yahoo.com', 'Manager livrari', '0747582951', 'Administrativ', '2020-02-20', 19, 5200);

CREATE TABLE IF NOT EXISTS `clienti` (
  `ID_Client` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresa_Default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Inregistrat_La` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nr_Telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accepta_Marketing` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Client`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clienti` (`ID_Client`, `Nume`, `Adresa_Default`, `Inregistrat_La`, `Email`, `Nr_Telefon`, `Accepta_Marketing`) VALUES
	(1, 'Stoica Narcis', 'Str. Poiana Narciselor, Nr.7, Bl.1, Sc.1, Et.2, Ap.6, Sector 1 București', '2021-02-14 20:00:23', 'narcissstoica@yahoo.com', '0787284720', 0),
	(2, 'Dănulescu Răzvan', 'Strada Louis Blanc Nr.2, Bl I1, Sc.1, Et.1, Ap.4, Sector 1, București', '2021-03-30 18:30:29', 'rzv_danulescu@gmail.com', '0746837821', 1),
	(3, 'Jurcă Traian', 'Str. Zorilor 8, Pitești, Argeș', '2021-05-18 23:29:21', 'traianjurca@yahoo.com', '0754255216', 0),
	(4, 'Lascu Dan', 'Strada Vasile Adam 6, Sector 6, București', '2021-05-23 20:02:12', 'dan_lascu@hotmail.com', '0774251252', 1),
	(5, 'Morega Mihaela', 'Str. Ciocârliei, Nr.7, Bragadiru, Ilfov', '2021-06-26 09:22:54', 'miha_morega@outlook.com', '0783690123', 1),
	(6, 'Nicoară Tania', 'Strada Cazărmii 3, Slatina, Olt', '2021-08-30 13:42:45', 'tanya_nicoara@yahoo.com', '0748749021', 1),
	(7, 'Păcurar Claudia', 'Strada Tudor Vladimirescu 120, Buzescu, Teleorman', '2021-09-15 12:02:12', 'clau_claudya97@yahoo.com', '0730781454', 0),
	(8, 'Robu Octavian', 'Strada Căpitan Tudorică Popescu 78, Târgoviște, Dâmbovița', '2021-09-22 13:20:32', 'robuoctaoctavian@gmail.com', '0756284011', 1),
	(9, 'Scornea Aurelia', 'Strada Erou Iancu Nicolae 109, Voluntari, Ilfov', '2021-10-01 09:12:28', 'aurelia_scornea@yahoo.com', '0767421521', 0),
	(10, 'Stoia Dan', 'Strada Avram Iancu 43, Vălenii de Munte, Prahova', '2022-01-15 23:49:45', 'stoiadan@gmail.com', '0745525126', 1);

CREATE TABLE IF NOT EXISTS `comenzi` (
  `ID_Comanda` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Plasata_De` bigint unsigned NOT NULL DEFAULT '0',
  `Nr_Telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Confirmata_De` bigint unsigned NOT NULL DEFAULT '0',
  `Data_Plasare` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Data_Confirmare` datetime NOT NULL,
  `ID_Curier` bigint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Comanda`),
  KEY `comenzi_confirmata_de_foreign` (`Confirmata_De`),
  KEY `comenzi_id_curier_foreign` (`ID_Curier`),
  KEY `comenzi_plasata_de_foreign` (`Plasata_De`),
  CONSTRAINT `comenzi_confirmata_de_foreign` FOREIGN KEY (`Confirmata_De`) REFERENCES `angajati` (`ID_Angajat`),
  CONSTRAINT `comenzi_id_curier_foreign` FOREIGN KEY (`ID_Curier`) REFERENCES `curieri` (`ID_Curier`),
  CONSTRAINT `comenzi_plasata_de_foreign` FOREIGN KEY (`Plasata_De`) REFERENCES `clienti` (`ID_Client`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `comenzi` (`ID_Comanda`, `Plasata_De`, `Nr_Telefon`, `Adresa`, `Confirmata_De`, `Data_Plasare`, `Data_Confirmare`, `ID_Curier`) VALUES
	(1, 1, '0787284720', 'Strada Poiana Narciselor 7, Bl.1, Sc.1, Et.2, Ap.6, Sector 1 Bucuresti', 26, '2021-02-23 17:40:32', '2021-02-24 09:40:30', 2),
	(2, 1, '0756801201', 'strada poiana narciselor n7 bl1 sc1 et2 ap6 sector1 bucuresti', 17, '2021-03-15 18:40:23', '2021-03-17 10:23:44', 2),
	(3, 2, '0745255216', 'strada ioan nicolae 7, pitești, argeș', 2, '2021-04-29 08:20:30', '2021-04-29 15:30:22', 11),
	(4, 3, '0783690123', 'strada nicolae titulescu 43, valenii de munte, prahova', 3, '2021-05-30 13:24:42', '2021-06-01 12:15:32', 14),
	(5, 5, '0756284011', 'strada tudor vladimirescu 120, loc buzescu, teleorman', 22, '2021-07-20 21:48:44', '2021-07-22 09:12:54', 9),
	(6, 6, '0748749021', 'Str. Cazărmii, Nr.3, Loc. Slatina, Jud. Olt', 5, '2021-09-14 23:53:12', '2021-09-15 12:30:24', 6),
	(7, 10, '0730781454', 'Strada Zorilor Nr.8, Loc. Pitești, Județ Argeș', 22, '2021-10-30 12:32:42', '2021-11-02 08:40:58', 13),
	(8, 9, '0767421521', 'Strada Căpitan Tudorică Popescu Nr.78, Loc. Târgoviște, Județul Dâmbovița', 26, '2021-12-10 00:56:41', '2021-12-10 09:00:51', 17);

CREATE TABLE IF NOT EXISTS `curieri` (
  `ID_Curier` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Locatie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Taxa` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_Curier`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `curieri` (`ID_Curier`, `Nume`, `Locatie`, `Taxa`) VALUES
	(1, 'Fan Curier', 'Sector 1, Bucuresti', 12),
	(2, 'Cargus', 'Sector 2, Bucuresti', 11),
	(3, 'Fan Curier', 'Sector 3, Bucuresti', 12),
	(4, 'Nemo Express', 'Ilfov', 14),
	(5, 'Cargus', 'Dambovita', 15),
	(6, 'Nemo Express', 'Teleorman', 14),
	(7, 'Fan Curier', 'Prahova', 13),
	(8, 'Cargus', 'Sector 4, Bucuresti', 10),
	(9, 'Cargus', 'Sector 1, Bucuresti', 12),
	(10, 'Nemo Express', 'Sector 3, Bucuresti', 13),
	(11, 'Fan Curier', 'Olt', 14),
	(12, 'Nemo Express', 'Sector 5, Bucuresti', 12),
	(13, 'Cargus', 'Sector 6, Bucuresti', 12),
	(14, 'Sameday', 'Arges', 16),
	(15, 'Nemo Express', 'Arges', 15),
	(16, 'Cargus', 'Olt', 14),
	(17, 'Fan Curier', 'Dolj', 14),
	(18, 'Fan Curier', 'Sector 6, Bucuresti', 11);


CREATE TABLE IF NOT EXISTS `producatori` (
  `ID_Producator` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Locatie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nr_Telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Producator`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `producatori` (`ID_Producator`, `Nume`, `Locatie`, `Nr_Telefon`, `Email`) VALUES
	(1, 'RONEX', 'Str. Islazului, 5, Pantelimon, Ilfov', '0744538173', 'ronexmobila@gmail.com'),
	(2, 'Mabis', 'Strada Hispania nr. 36, București', '0773371044', 'contact@mabis.ro'),
	(3, 'Koncpet', 'Strada Preciziei 3, București', '0213132631', 'contact@koncept-mobila.ro'),
	(4, 'Pro Design Art', 'Strada Dumitru Slugeru, București', '0726234342', 'pro_design_art_buc@yahoo.com'),
	(5, 'AVANTA Furniture', 'Bulevardul Ghencea 126-132, București', '0753533303', 'informatii@avantafurniture.ro'),
	(6, 'Mobexpert', 'Șoseaua Fabrica de Glucoză 21, București', '0720333405', 'contact@mobexpert.ro');

CREATE TABLE IF NOT EXISTS `produse` (
  `ID_Produs` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Nume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pret` double unsigned NOT NULL,
  `Pret_Redus` double unsigned NOT NULL,
  `Categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data_Adaugare` timestamp NOT NULL,
  `Data_Modificare` timestamp NOT NULL,
  `ID_Producator` bigint unsigned NOT NULL,
  PRIMARY KEY (`ID_Produs`),
  KEY `produse_id_producator_foreign` (`ID_Producator`),
  CONSTRAINT `produse_id_producator_foreign` FOREIGN KEY (`ID_Producator`) REFERENCES `producatori` (`ID_Producator`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `produse` (`ID_Produs`, `Nume`, `Pret`, `Pret_Redus`, `Categorie`, `Data_Adaugare`, `Data_Modificare`, `ID_Producator`) VALUES
	(1, 'Pat cu tăblie tapițată 180x200cm', 4995, 4496, 'Pat', '2020-12-15 08:23:57', '2022-01-12 00:24:09', 6),
	(2, 'Noptieră 1 sertar pentru copii', 257, 257, 'Noptiera', '2021-01-15 09:33:24', '2021-09-30 12:44:23', 5),
	(3, 'Canapea stofă, 4 perne decorative incluse', 7586, 5690, 'Canapea', '2021-01-18 18:56:17', '2022-01-10 13:27:29', 1),
	(4, 'Saltea Cloud Elite 25 Comfort 80x200cm', 8430, 8430, 'Saltea', '2021-04-30 09:23:44', '2022-01-05 09:30:08', 5),
	(5, 'Canapea extensibila, 3 locuri,piele', 8680, 8680, 'Canapea', '2021-05-02 14:24:33', '2021-12-12 14:23:55', 4),
	(6, 'Pat 160x200cm și 2 noptiere', 887, 798, 'Pat', '2021-05-30 12:54:21', '2022-01-07 15:23:32', 3),
	(7, 'Saltea Diamond Soft 90x200cm', 1195, 1195, 'Saltea', '2021-06-12 17:23:44', '2021-07-12 14:30:46', 6);

CREATE TABLE IF NOT EXISTS `produse_comenzi` (
  `ID_Comanda` bigint unsigned NOT NULL,
  `ID_Produs` bigint unsigned NOT NULL,
  KEY `produse_comenzi_id_comanda_foreign` (`ID_Comanda`),
  KEY `produse_comenzi_id_produs_foreign` (`ID_Produs`),
  CONSTRAINT `produse_comenzi_id_comanda_foreign` FOREIGN KEY (`ID_Comanda`) REFERENCES `comenzi` (`ID_Comanda`) ON DELETE CASCADE,
  CONSTRAINT `produse_comenzi_id_produs_foreign` FOREIGN KEY (`ID_Produs`) REFERENCES `produse` (`ID_Produs`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `produse_comenzi` (`ID_Comanda`, `ID_Produs`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(2, 3),
	(3, 5),
	(4, 2),
	(4, 7),
	(5, 6),
	(6, 7),
	(7, 1),
	(7, 2),
	(7, 5),
	(7, 6),
	(8, 3);

CREATE TABLE IF NOT EXISTS `recenzii` (
  `ID_Recenzie` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Scris_De` bigint unsigned NOT NULL,
  `Nota` int unsigned NOT NULL,
  `Titlu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Continut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Produs` bigint unsigned NOT NULL,
  PRIMARY KEY (`ID_Recenzie`),
  KEY `recenzii_scris_de_foreign` (`Scris_De`),
  KEY `recenzii_id_produs_foreign` (`ID_Produs`),
  CONSTRAINT `recenzii_id_produs_foreign` FOREIGN KEY (`ID_Produs`) REFERENCES `produse` (`ID_Produs`) ON DELETE CASCADE,
  CONSTRAINT `recenzii_scris_de_foreign` FOREIGN KEY (`Scris_De`) REFERENCES `clienti` (`ID_Client`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `recenzii` (`ID_Recenzie`, `Scris_De`, `Nota`, `Titlu`, `Continut`, `ID_Produs`) VALUES
	(1, 1, 9, 'Foarte bun', 'Sunt foarte mulțumit de acest pat!', 1),
	(2, 2, 4, 'S-a stricat dupa 2 zile', 'Dupa 2 zile, a început să cadă tăblia din el... nu recomand!', 6),
	(3, 2, 10, 'Excelent!', 'Calitatea este foarte bună!', 7),
	(4, 5, 7, 'Decent', 'Mă așteptam la o calitate mai bună... dar nu a fost cazul.', 2),
	(5, 9, 8, 'Bun', 'Raport calitate-preț foarte bun! Este exact ca în poze și descriere. Livrarea rapidă și fără probleme. Asamblare ușoară. Canapeaua este foarte frumoasă, spațioasă și confortabilă. Nu regret deloc alegerea făcută, dimpotrivă. M-am bazat pe review-uri și, t', 3),
	(6, 10, 9, 'Foarte multumit', 'Este comodă, spațiul pentru somn este generos. Are o chichiță la montare, dar a fost depășită.', 3);

