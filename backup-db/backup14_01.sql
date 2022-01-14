-- --------------------------------------------------------
-- Host:                         pei17y9c5bpuh987.chr7pe7iynqr.eu-west-1.rds.amazonaws.com
-- Server version:               8.0.23 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table xny9rtikkuvbljbd.angajati: ~27 rows (approximately)
/*!40000 ALTER TABLE `angajati` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `angajati` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.clienti: ~0 rows (approximately)
/*!40000 ALTER TABLE `clienti` DISABLE KEYS */;
/*!40000 ALTER TABLE `clienti` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.comenzi: ~0 rows (approximately)
/*!40000 ALTER TABLE `comenzi` DISABLE KEYS */;
/*!40000 ALTER TABLE `comenzi` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.curieri: ~18 rows (approximately)
/*!40000 ALTER TABLE `curieri` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `curieri` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_08_19_000000_create_failed_jobs_table', 1),
	(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(3, '2022_01_12_154440_create_angajats_table', 1),
	(5, '2022_01_12_155718_create_comandas_table', 2),
	(6, '2022_01_12_161553_create_curiers_table', 3),
	(7, '2022_01_12_164147_create_clients_table', 4),
	(8, '2022_01_12_165818_create_recenzii_table', 5),
	(9, '2022_01_12_170127_recenzii_foreign_clienti', 6),
	(10, '2022_01_12_170650_create_producators_table', 7),
	(11, '2022_01_12_170930_create_produses_table', 8),
	(12, '2022_01_13_235754_manytomany', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.producatori: ~6 rows (approximately)
/*!40000 ALTER TABLE `producatori` DISABLE KEYS */;
INSERT INTO `producatori` (`ID_Producator`, `Nume`, `Locatie`, `Nr_Telefon`, `Email`) VALUES
	(1, 'RONEX', 'Str. Islazului, 5, Pantelimon, Ilfov', '0744538173', 'ronexmobila@gmail.com'),
	(2, 'Mabis', 'Strada Hispania nr. 36, București', '0773371044', 'contact@mabis.ro'),
	(3, 'Koncpet', 'Strada Preciziei 3, București', '0213132631', 'contact@koncept-mobila.ro'),
	(4, 'Pro Design Art', 'Strada Dumitru Slugeru, București', '0726234342', 'pro_design_art_buc@yahoo.com'),
	(5, 'AVANTA Furniture', 'Bulevardul Ghencea 126-132, București', '0753533303', 'informatii@avantafurniture.ro'),
	(6, 'Mobexpert', 'Șoseaua Fabrica de Glucoză 21, București', '0720333405', 'contact@mobexpert.ro');
/*!40000 ALTER TABLE `producatori` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.produse: ~0 rows (approximately)
/*!40000 ALTER TABLE `produse` DISABLE KEYS */;
/*!40000 ALTER TABLE `produse` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.produse_comenzi: ~0 rows (approximately)
/*!40000 ALTER TABLE `produse_comenzi` DISABLE KEYS */;
/*!40000 ALTER TABLE `produse_comenzi` ENABLE KEYS */;

-- Dumping data for table xny9rtikkuvbljbd.recenzii: ~0 rows (approximately)
/*!40000 ALTER TABLE `recenzii` DISABLE KEYS */;
/*!40000 ALTER TABLE `recenzii` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
