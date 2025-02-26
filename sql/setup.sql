--
-- Crée la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS `ma-database`;

-- Sélectionne la base de données à utiliser
USE `ma-database`;

GRANT ALL PRIVILEGES ON `ma-database`.* TO 'root'@'%' IDENTIFIED BY 'rootmariadb';
FLUSH PRIVILEGES;


-- Table structure for table `users`
CREATE TABLE `users` (
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
);

-- Dumping data for table `users`
INSERT INTO `users` (`login`, `mdp`, `mail`, `id`) VALUES
('mon_login', 'mon_mdp', 'mail@mail.com', 1),
('nans', 'mdp_nans', 'nans.mail@mail.com', 2),
('nico bellek', 'mdp_de_nico', 'nico.mail@mail.com', 3),
('jean', 'mdp_de_jean', 'jean@gmail.com', 4),
('jean', 'mdp_de_jean', 'jean@gmail.com', 5),
('jean', 'mdpdejean', 'jean@gmail.com', 6),
('yves', 'mdpdeyves', 'yves@gmail.com', 7),
('johan', 'johanmdp', 'johan@grossefolle.com', 8),
('adam', 'adamlamenace', 'adam@gmail.com', 9),
('jean pierre', 'mdpjean', 'jean.pierre@gmail.com', 10),
('julian', 'aaaalo', 'julian@gmail.com', 11),
('user3', 'mdp87', 'user3@gmail.com', 12),
('un_autre_login', 'un_mdp', 'un_email', 13),
('atfstufazafzdstazftuzdfutf', 'dazeazedezead', 'qzdqzedqzdzqe', 26),
('momo', 'mdpmomo', 'momo@momo.momo', 27),
('silvio', 'mdp', 'lasivioterie@gmail.com', 28);

-- Indexes for dumped tables
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

COMMIT;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL
) ;

INSERT INTO `contact` (`id`, `user_id`, `nom`, `prenom`, `mail`) VALUES
(1, 2, 'csqcdqs', 'dsCDSQ', 'SCdq'),
(2, 27, 'henni', 'alo', 'alo@gmail.com'),
(3, 27, 'reafre', 'fzafaz\"', 'freaeaffe'),
(4, 27, 'utils', 'sazz', 'saaaaa'),
(5, 2, 'sGFZQF', 'SQRFQEFRQE', 'QSFQE'),
(6, 2, 'S<FQZEQZF', 'QSFESQ', 'QSFEQQE'),
(7, 2, 'sqfcsz', 'SCFSZE', 'EQAFCZ'),
(8, 2, 'NANS', 'SSS', 'SS'),
(9, 2, '<sqq', 'sqfq', 'zqFFQ'),
(10, 28, 'camille', 'ddd', 'ddd'),
(11, 28, 'qqd', 'qqqd', 'qdqd'),
(12, 28, 'qdqq', 'dd', 'qqq');

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

