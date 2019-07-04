-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 04 juil. 2019 à 10:00
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kindle`
--
CREATE DATABASE IF NOT EXISTS kindle;
-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `résumé` text COLLATE utf8_unicode_ci,
  `couverture` text COLLATE utf8_unicode_ci,
  `catégorie` text COLLATE utf8_unicode_ci NOT NULL,
  `genre` text COLLATE utf8_unicode_ci NOT NULL,
  `delai` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_de_parution` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id`, `titre`, `auteur`, `résumé`, `couverture`, `catégorie`, `genre`, `delai`, `prix`, `date_de_parution`) VALUES
(1, 'La princesse des glaces', 'Camilla Lackberg', 'Erica Falck, trente-cinq ans, auteure de biographies installée dans une petite ville paisible de la côte ouest suédoise, découvre le cadavre aux poignets tailladés d\'une amie d\'enfance, Alexandra Wijkner, nue dans une baignoire d\'eau gelée.\r\nImpliquée malgré elle dans l\'enquête (à moins qu\'une certaine tendance naturelle à fouiller la vie des autres ne soit ici à l\'œuvre), Erica se convainc très vite qu\'il ne s\'agit pas d\'un suicide. Sur ce point - et sur beau... ', NULL, 'Livre', 'Policier', 4, 3, '2008-04-30 00:00:00'),
(2, 'L\'enfant Allemand', 'Camilla Lackberg', 'La jeune Erica Falck a déjà une longue expérience du crime. Quant à Patrik Hedström, l\'inspecteur qu\'elle vient d\'épouser, il a échappé de peu à la mort, et tous deux savent que le mal peut surgir n\'importe où, qu\'il se tapit peut-être en chacun de nous, et que la duplicité humaine, loin de représenter l\'exception, constitue sans doute la règle. Tandis qu\'elle entreprend des recherches sur cette mère qu\'elle regrette de ne pas avoir mieux connue et dont elle n\'a jamais vraiment compris la froideur, Erica découvre, en fouillant son grenier, les carnets d\'un journal intime et, enveloppée dans une petite brassière maculée de sang, une ancienne médaille ornée d\'une croix gammée. \r\nPourquoi sa mère, qui avait laissé si peu de choses, avait-elle conservé un tel objet ? Voulant en savoir plus, elle entre en contact avec un vieux professeur d\'histoire à la retraite. L\'homme a un comportement bizarre et se montre élusif. Deux jours plus tard, il est sauvagement assassiné... Dans ce cinquième volet des aventures d\'Erica Falck, Camilla Läckberg mêle avec virtuosité l\'histoire de son héroïne et celle d\'une jeune Suédoise prise dans la tourmente de la Seconde Guerre mondiale. \r\nTandis qu\'Erica fouille le passé de sa famille, le lecteur plonge avec délice dans un nouveau bain de noirceur nordique.', NULL, 'Livre', 'Policier', 4, 3, '2011-01-05 00:00:00'),
(3, 'Millenium Tome 1 : Les hommes qui n\'aimaient pas les femmes', 'Stieg Larsson', 'Après avoir perdu un procès en diffamation, Mikael Blomkvist, brillant journaliste d\'investigation, démissionne de la revue Millénium et ressasse son dépit. Il est contacté par un magnat de l\'industrie qui lui confie une enquête vieille de quarante ans : sur l\'île abritant l\'imposante propriété familiale, sa nièce, Harriet Vanger, a naguère disparu, et il reste persuadé qu\'elle a été assassinée. Si ce n\'est pas exactement le hasard qui réunit Mikael Blomkvist et Lisbeth Salander, réchappée des services sociaux et génie de l\'informatique, c\'est une vraie chance, car la jeune femme va bien vite s\'imposer comme le meilleur atout du journaliste pour élucider l\'affaire. \r\nL\'intolérance, l\'hypocrisie, la violence et le cynisme de notre monde contemporain - aux niveaux politique, économique, social, familial - sont les ressorts de ce polar addictif, au suspense insoutenable, qui a enthousiasmé des millions de lecteurs.', NULL, 'Livre', 'Thriller', 4, 3, '2011-01-30 00:00:00'),
(4, 'Millenium Tome 2 : La fille qui rêvait d\'un bidon d\'essence et d\\\'une allumette', 'Stieg Larrson', 'Une enquête sur un réseau de prostitution dévoile des secrets d\'espionnage et un lourd passé familial. Le deuxième volet de la série culte.', NULL, 'Livre', 'Thriller', 4, 3, '2011-03-30 00:00:00'),
(5, 'Millenium Tome 3 : La reine dans le palais des courants d\'air', 'Stieg Larsson', 'Après avoir échappé de peu à la mort, Lisbeth Salander se remet difficilement de ses blessures dans une chambre d\'hôpital. Incapable physiquement d\'agir, elle a de surcroît été placée en isolement et sous surveillance policière, car elle est encore sous le coup de plusieurs chefs d\'accusation. La voilà coincée, donc, mais pas inactive, d\'autant qu\'un patient soigné dans une chambre voisine a de très sérieux et très anciens comptes à régler avec elle... \r\nDe son côté, Mikael Blomkvist se démène pour innocenter et réhabiliter la jeune femme. Ses recherches lèvent le voile sur les plus inavouables activités de certains services secrets, mais les sombres personnages autour desquels se resserre son enquête ne vont pas se laisser menacer sans réagir. Le troisième volume de Millénium promet poussées d\'adrénaline, insoutenable suspense et scènes terribles, mais la pire épreuve pour le lecteur consistera à se séparer des personnages à la fin de ce dernier volet de l\'irrésistible trilogie.', NULL, 'Livre', 'Thriller', 4, 3, '2011-09-30 00:00:00'),
(6, 'Jeeves', 'P.G Wodehouse', 'Bertie Wooster, jeune aristocrate londonien, s\'est pris de passion pour le banjo. Cette nouvelle lubie est loin de plaire à Jeeves, son fidèle majordome, et encore moins à ses voisins exaspérés. Contraint de déménager, Bertie se retire avec son instrument chéri dans un cottage de la campagne anglaise, chez son ami le baron Chuffnell. Les choses se compliquent quand le jeune homme y retrouve son ex fiancée, Pauline, dont Chuffnell est tombé fou amoureux. \r\nD\'imbroglios en quiproquos, la situation déjà fort embarrassante dégénère. Heureusement, Jeeves veille au grain et sauvera, comme toujours, Wooster de la catastrophe... Humour british et loufoquerie sur fond de vieille Angleterre où la campagne est loin d\'être bucolique : un opus à consommer sans modération. Traduit de l\'anglais par Benoît de Fonscolombe', NULL, 'Livre', 'Comédie', 4, 3, '2007-05-15 00:00:00'),
(7, 'Bonjour Jeeves', 'P.G Wodehouse', '\" Il n\'y a que deux sortes de lecteurs de Wodehouse, affirmait un critique anglais, ceux qui l\'adorent et ceux qui ne l\'ont pas lu. \" Gageons que la France va redécouvrir avec enthousiasme ce monde éternel rempli de filles énergiques, d\'oncles dociles, de tantes redoutables, de pairs excentriques et de baronnets transis que domine la figure inoubliable de Jeeves, le butler irremplaçable, le gentleman des gentlemen, à la puissance cérébrale sans limites... \r\net aux cocktails infaillibles contre les chagrins d\'amour et les gueules de bois. Pelham Grenville Wodehouse (1881-1975) est l\'auteur de 90 livres, d\'un millier d\'articles, de 19 pièces de théâtre, et des chansons de 33 comédies musicales de Jérôme Kern, Cole Porter, Ira Gershwin...', NULL, 'Livre', 'Comédie', 4, 3, '2006-01-25 00:00:00'),
(8, 'Fahrenheit 451', 'Ray Bradbury', '451 degrés Fahrenheit représentent la température à laquelle un livre s\'enflamme et se consume. \r\nDans cette société future où la lecture, source de questionnement et de réflexion, est considérée comme un acte antisocial, un corps spécial de pompiers est chargé de brûler tous les livres dont la détention est interdite pour le bien collectif. Montag, le pompier pyromane, se met pourtant à rêver d\'un monde différent, qui ne bannirait pas la littérature et l\'imaginaire au profit d\'un bonheur immédiatement consommable. Il devient dès lors un dangereux criminel, impitoyablement pourchassé par une société qui désavoue son passé', NULL, 'Livre', 'Science-fiction', 4, 3, '2010-02-06 00:00:00'),
(9, 'Un bonheur insoutenable', 'Ira Levin', 'Sous la gouvernance d\'UniOrd, vous ne connaîtrez plus jamais la guerre, la faim, la pauvreté ou la solitude. De votre naissance jusqu\'à votre soixante-deuxième anniversaire, date à laquelle il vous faudra faire de la place pour les nouvelles générations, vous ne manquerez de rien. En un mot, vous serez heureux. Uniformément heureux. Mais Matou, lui, se pose des questions. Trop, peut-être. Un jour, les traitements hormonaux destinés à le maintenir dans l\'ignorance béate ne suffisent plus...', NULL, 'Livre', 'Science-fiction', 4, 3, '2012-05-08 00:00:00'),
(10, 'Le bébé de Rosemary', 'Ira Levin', 'Guy et Rosemary, qui viennent d\'emménager dans un immeuble bourgeois de l\'Upper West Side new-yorkais, se lient rapidement d\'amitié avec leurs voisins. Ces derniers sont charmants, attentifs aux moindres besoins de Rosemary, surtout depuis qu\'ils ont appris qu\'elle attendait un bébé, et rien ne devrait ternir la douce euphorie des nouveaux arrivants. Pourtant, peu à peu, le trouble gagne le jeune couple ces regards bizarres et ces rêves malsains qui hantent les nuits de Rosemary sont-ils normaux ? L\'atmosphère s\'épaissit, le mystère devient angoissant... \r\nVendu à cinq millions d\'exemplaires dans le monde, salué par la critique, adapté au cinéma par Roman Polanski avec le succès que l\'on sait, Rosemary\'s Baby a laissé une empreinte indélébile sur l\'histoire de la littérature américaine et sur l\'esprit de ses lecteurs. Un chef-d\'oeuvre du genre.', NULL, 'Livre', 'Horreur', 4, 3, '2003-10-09 00:00:00'),
(11, 'Le cauchemar d\'Innsmouth', 'H.P. Lovercraf', 'Howard Phillips Lovecraft est sans nul doute l\'auteur fantastique le plus influent du XXe siècle.?Son imaginaire unique et terrifiant n\'a cessé d\'inspirer des générations d\'écrivains, de cinéastes, d\'artistes ou de créateurs d\'univers de jeux, de Neil Gaiman à Michel Houellebecq en passant par Metallica. Le mythe de Cthulhu est au cour de cette ouvre: un panthéon de dieux et d\'êtres monstrueux venus du cosmos et de la nuit des temps ressurgissent pour reprendre possession de notre monde. \r\nCeux qui en sont témoins sont voués à la folie et à la destruction. Découvrez ou replongez-vous avec un délice coupable dans les récits les plus emblématiques de ce mythe, qui vous sont proposés à l\'unité au sein de la collection Brage... Le mythe de Cthulhu n\'a jamais été aussi réel...', NULL, 'Livre', 'Horreur', 4, 3, '2009-08-14 00:00:00'),
(12, 'A la croisée des mondes : Les royaumes du Nord', 'Philip Pullman', 'Le premier tome de la célèbre et fascinante trilogie, chef-d\'oeuvre que le talent de Philip Pullman rend accessible à tous. Pourquoi la jeune Lyra, élevée dans l\'atmosphère confinée du prestigieux Jordan College, est-elle l\'objet de tant d\'attentions ? De quelle mystérieuse mission est-elle investie ? Lorsque son meilleur ami disparaît, victime des ravisseurs d\'enfants qui opèrent dans le pays, elle se lance sur ses traces. \r\nUn périlleux voyage vers le Grand Nord, qui lui révélera ses extraordinaires pouvoirs et la conduira à la frontière d\'un autre monde.\r\n', '', 'Livre', 'Fantastique', 4, 3, '2013-01-02 00:00:00'),
(13, 'A la croisée des mondes : Le Miroir d\'ambre', 'Philip Pullman', 'Lyra est retenue prisonnière par sa mère, l\'ambitieuse et cruelle Mme Coulter qui, pour mieux s\'assurer de sa docilité, l\'a plongée dans un sommeil artificiel. Will, le compagnon de Lyra, armé du poignard subtil, s\'est lancé à sa recherche, escorté de deux anges, Balthamos et Baruch. Avec leur aide, il parviendra à délivrer son amie. À son réveil, Lyra lui annonce qu\'une mission encore plus périlleuse, presque désespérée, les attend : ils doivent descendre dans le monde des morts.\r\n', '', 'Livre', 'Fantastique', 4, 3, '2001-11-21 00:00:00'),
(14, 'A la croisée des mondes : La Tour des Anges', 'Philip Pullman', 'Le jeune Will, à la recherche de son père disparu depuis de longues années, est persuadé d\'avoir tué un homme. Dans sa fuite, il franchit une brèche presque invisible qui lui permet de passer dans un monde parallèle. Là, à Cittàgazze, la ville au-delà de l\'Aurore, il rencontre Lyra, l\'héroïne des Royaumes du Nord. Elle aussi cherche à rejoindre son père, elle aussi est investie d\'une mission dont elle ne connaît pas encore toute l\'importance. \r\nEnsemble, les deux enfants devront lutter contre les forces obscures du mal et, pour accomplir leur quête, pénétrer dans la mystérieuse tour des Anges.', '', 'Livre', 'Fantastique', 4, 3, '2011-12-13 00:00:00'),
(15, 'Chroniques de l\'oiseau à ressort', 'Haruki Murakami', 'Un chat égaré, une inconnue jouant de ses charmes au téléphone, la disparition de sa femme font basculer la vie d\'un jeune chômeur, Toru Okada, dans un tourbillon d\'aventures. L\'espace limité de son quotidien devient le théâtre de rencontres déroutantes, chacune porteuse d\'un secret, avec un vétéran de la guerre sino-japonaise, une adolescente qui passe ses journées à compter les chauves et un duo de sours excentriques et un peu sorcières. \r\nUn voyage époustouflant dans l\'imaginaire murakamien, où le lecteur est invité une fois de plus à aborder des frontières inédites.', '', 'Livre', 'Onirique', 4, 3, '2002-02-22 00:00:00'),
(16, '1Q84 : tome 1', 'Haruki Murakami', 'Le passé - tel qu\'il était peut-être - fait surgir sur le miroir l\'ombre d\'un présent - différent de ce qu\'il fut. Un événement éditorial sans précédent. Une oeuvre hypnotique et troublante, un roman d\'aventures, une histoire d\'amour, deux êtres unis par un pacte secret. Dans le monde bien réel de 1984 et dans celui dangereusement séduisant de 1Q84 va se nouer le destin de Tengo et d\'Aomamé...', '', 'Livre', 'Onirique', 4, 3, '2015-01-25 00:00:00'),
(17, '1Q84 : tome 2', 'Haruki Murakami', 'Le monde 1Q84 a été révélé. Miroir d\'un univers à la dérive ou promesse d\'un présent recomposé hors des ténèbres, il déploie ses brumes oniriques et ses deux lunes. Autour de lui, Tengo et Aomamé gravitent, voués à leur destin. Best-seller mondial, le chef-d\'oeuvre de Murakami découvre la vérité humaine à la frontière des mirages.\r\n', '', 'Livre', 'Onirique', 4, 3, '2001-09-18 00:00:00'),
(18, '1Q84 : tome 3', 'Haruki Murakami', 'Sous le double scintillement de 1084, le temps s\'accélère et les vérités se confondent. La voix du détective Ushikawa s\'invite, oscillant entre révélation et menace, sur la trace d\'Aomamé et Tengo. D\'un reflet à l\'autre, dans la clairvoyance hypnotique de ce troisième volet, le passé s\'apprête à livrer son chaos au seuil d\'un nouveau rêve...', '', 'Livre', 'Onirique', 4, 3, '2011-11-22 00:00:00'),
(19, 'Handmaid\'s Tale', 'Margaret Atwood', '« The Handmaid\'s Tale » de Margaret Atwood nous rappelle la présence de la voix aux sources de la littérature première. En effet, le texte qu\'elle nous livre se présente comme une transcription de bandes magnétiques enregistrées deux cents ans auparavant. Si Margaret Atwood s\'emploie à rendre à l\'écriture la force communicative du langage parlé, elle met également en avant le processus de recomposition de son histoire. \r\nRécit de vie enregistré sur bandes séparées et non numérotées, le texte est un assemblage de morceaux épars, de pièces rapportées, dont l\'agencement est arbitraire et réversible. II se construit et se déconstruit sans cesse, se délite et se dérobe. Parce que le conte ressortit à une esthétique du fragment, Héliane Ventura s\'est elle-même attachée à mettre en valeur les éclats, les morceaux, les pépites. \r\nElle présente une série de six interprétations de textes (explications linéaires ou commentaires composés) qui, de l\'incipit aux deux clausules, reconstitue la trame de l\'existence de la Servante, livrée à la tyrannie, dans cet univers dystopique qui s\'appelle ironiquement « la République de Galaad » et qui se situe à Boston sur la terre des anciens Puritains de la Nouvelle Angleterre à l\'aube du vingt et unième siècle.\r\n', '', 'Livre', 'Science-fiction', 4, 3, '2003-06-11 00:00:00'),
(20, 'Wicked, la véritable histoire de la méchante sorcière de l\'ouest', 'Gregory Maguire', 'Dans Le Magicien d\'Oz, Dorothée triomphe de la Méchante Sorcière de l\'Ouest. Mais nous n\'avions que cette version de l\'histoire... Qui est vraiment cette mystérieuse sorcière ? Est-elle donc si méchante ? Comment a-t-elle hérité de cette terrible réputation ? Et si c\'était elle, la véritable héroïne du monde d\'Oz ? Ouvrez ce livre et vous découvrirez enfin la merveilleuse et terrible vérité. Quels que soient vos souvenirs de ce chef-d\'oeuvre qu\'est Le Magicien d\'Oz, vous serez passionné et touché par le destin incroyable de cette femme au courage exceptionnel. \r\nEntrez dans un monde fantastique si riche et si vivant que vous ne verrez plus jamais les contes de la même manière... \" Un roman extraordinaire. \" John Updike', '', 'Livre', 'Fantastique', 4, 3, '2004-07-16 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `compte_lecteur`
--

CREATE TABLE `compte_lecteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carte bancaire` int(11) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emprunts`
--

CREATE TABLE `emprunts` (
  `id` int(11) NOT NULL,
  `article-id` int(11) NOT NULL,
  `lecteur-id` int(11) NOT NULL,
  `date_emprunt` date NOT NULL,
  `renouvellement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci,
  `lecteur-id` int(11) NOT NULL,
  `article-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte-lecteur`
--
ALTER TABLE `compte-lecteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emprunts`
--
ALTER TABLE `emprunts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `compte-lecteur`
--
ALTER TABLE `compte-lecteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `emprunts`
--
ALTER TABLE `emprunts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
