-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2025 at 05:21 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogart25`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `numArt` int NOT NULL AUTO_INCREMENT,
  `dtCreaArt` datetime DEFAULT CURRENT_TIMESTAMP,
  `dtMajArt` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `libChapoArt` text COLLATE utf8mb3_unicode_ci,
  `libAccrochArt` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag1Art` text COLLATE utf8mb3_unicode_ci,
  `libSsTitr1Art` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag2Art` text COLLATE utf8mb3_unicode_ci,
  `libSsTitr2Art` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parag3Art` text COLLATE utf8mb3_unicode_ci,
  `libConclArt` text COLLATE utf8mb3_unicode_ci,
  `urlPhotArt` varchar(70) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `numThem` int NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`numArt`, `dtCreaArt`, `dtMajArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(1, '2019-02-24 16:08:30', '2025-02-07 14:31:57', 'BUZZ BOOSTER: UN TREMPLIN RAP &Agrave; BORDEAUX ?', 'La Rock School Barbey et le Rocher de Palmer lancent le Buzz Booster Nouvelle-Aquitaine, un concours musical pour artistes &eacute;mergents. Les inscriptions ouvrent le 2 janvier 2025, avec des s&eacute;lections en live &agrave; Bordeaux. Ce tremplin national vise &agrave; rep&eacute;rer et accompagner de nouveaux talents.', 'Le Buzz Booster, ce n&rsquo;est pas juste un concours, c&rsquo;est une porte d&rsquo;entr&eacute;e v', 'Monter sur sc&egrave;ne, sentir la chaleur des projecteurs, entendre le public pr&ecirc;t &agrave; vibrer au premier kick. Ce n&rsquo;est pas juste rapper, c&rsquo;est prouver que tu as ta place, partager ta vision, et rencontrer ceux qui vibrent pour la m&ecirc;me passion.\r\n L&rsquo;&eacute;nergie est dingue : les backs r&eacute;sonnent, les t&ecirc;tes hochent en rythme, chaque phase devient une carte &agrave; jouer. Ici, il n&rsquo;y a pas de place pour le hasard. Si tu es l&agrave;, c&rsquo;est que tu as quelque chose &agrave; dire. \r\nChaque ann&eacute;e &agrave; Bordeaux, cette chance, des centaines d&rsquo;artistes veulent la saisir.\r\n\r\nLe Buzz Booster, c&rsquo;est bien plus qu&rsquo;une sc&egrave;ne. C&rsquo;est un espace o&ugrave; tu cr&eacute;es une connexion avec le public, o&ugrave; tu suscites des &eacute;motions. Chaque performance, chaque geste compte. Ce concours, c&rsquo;est une rampe de lancement. C&rsquo;est une occasion unique de te faire rep&eacute;rer par des acteurs cl&eacute;s de l&rsquo;industrie musicale, et de rejoindre un r&eacute;seau qui pourrait faire d&eacute;coller ta carri&egrave;re. \r\n\r\nNe laisse pas passer ta chance, les inscriptions sont ouvertes du 2 au 31 janvier.  &Agrave; toi de devenir le rappeur de demain !', 'Ne laisse pas passer ta chance, les inscriptions sont ouvertes du 2 au 31 janvier.  &Agrave; toi de', 'Gagner le Buzz Booster, ce n&rsquo;est pas juste repartir avec un troph&eacute;e. C&rsquo;est bien plus que &ccedil;a : c&rsquo;est l&rsquo;opportunit&eacute; d&rsquo;obtenir 15 000 euros pour produire ton projet, un contrat de distribution, et surtout, de te produire sur de grandes sc&egrave;nes. Mais avant tout, c&rsquo;est l&rsquo;occasion de prouver ce que tu vaux, de marquer les esprits, et de te faire un nom dans le milieu. L&rsquo;impact va bien au-del&agrave; des r&eacute;compenses mat&eacute;rielles : c&rsquo;est une chance de passer &agrave; l&rsquo;&eacute;tape sup&eacute;rieure, de sortir de l&rsquo;ombre et de faire entendre ta voix.\r\nRegarde Kagome. Il y a un an, elle &eacute;tait exactement l&agrave; o&ugrave; tu es, pr&ecirc;te &agrave; tout donner sur sc&egrave;ne. Aujourd&rsquo;hui, elle a fait un bond &eacute;norme : elle a assur&eacute; la premi&egrave;re partie du concert de Dali &agrave; la Rock School Barbey. Son succ&egrave;s est celui de nombreux artistes bordelais qui ont vu leurs projets prendre un tournant gr&acirc;ce au Buzz Booster.\r\n&Agrave; Bordeaux, le rap ne cesse de grandir, de nouveaux talents &eacute;mergent et font vibrer la sc&egrave;ne. Les artistes s&rsquo;entraident et se soutiennent, cr&eacute;ant une communaut&eacute; soud&eacute;e. Si tu veux faire partie de cette aventure et passer de l&rsquo;ombre &agrave; la lumi&egrave;re, c&rsquo;est le moment de monter sur sc&egrave;ne.', 'Les artistes s&rsquo;entraident et se soutiennent, cr&eacute;ant une communaut&eacute; soud&eacute;e', 'Le Buzz Booster, c&rsquo;est un ascenseur &eacute;motionnel. L&rsquo;attente en coulisses, le c&oelig;ur qui bat &agrave; cent &agrave; l&rsquo;heure, la derni&egrave;re inspiration avant d&rsquo;attraper le micro&hellip;..', 'La sc&egrave;ne rap bordelaise est loin d&rsquo;&ecirc;tre fig&eacute;e, elle bouge, &eacute;volue, et chaque ann&eacute;e, de nouveaux talents s&rsquo;y imposent. Et franchement, c&rsquo;est pas surprenant : Bordeaux, c&rsquo;est une ville qui respire le rap, avec un public toujours l&agrave;, fid&egrave;le, avide de nouvelles sonorit&eacute;s, de nouvelles voix. Mais tout &ccedil;a, &ccedil;a ne serait pas possible sans ceux qui bossent dans l&rsquo;ombre. Ces personnes qui, comme les organisateurs du Buzz Booster, cr&eacute;ent des espaces o&ugrave; les artistes peuvent r&eacute;ellement briller, se faire rema', '1738938717_Photo concert blog (1).jpg', 1),
(2, '2019-03-13 20:14:10', '2025-02-07 12:35:26', 'Le CHU de bordeaux se met-il au bleu ?', 'Le bleu, une couleur si commune, qui provoque tranquillit&eacute;, s&eacute;curit&eacute; et confiance. Toutes ces raisons pourraient d&eacute;j&agrave; expliquer ce que Gav&eacute; bleu a remarqu&eacute;&hellip; Mais regardons plus loin ! Pourquoi le CHU, lieu d&rsquo;urgence, d&rsquo;anxi&eacute;t&eacute;, parfois lier aux d&eacute;funts, se pare d&rsquo;une couleur si compl&eacute;mentaire, le bleu ?', 'Le CHU de Bordeaux, lieu au service de tous, tient un r&ocirc;le important dans la vie des Bordelais', 'Tout d&rsquo;abord, un logo, que vous avez vu et revu, mais auquel vous n&amp;amp;amp;amp;amp;amp;amp;#039;avez jamais, vraiment pr&ecirc;t&eacute; attention. Ce logo est le m&ecirc;me depuis 20 ans, exprimant les valeurs de l&rsquo;h&ocirc;pital, l&rsquo;accueil, l&rsquo;ouverture et l&rsquo;&eacute;change. Il v&eacute;hicule une image forte et symbolique. De plus, sa couleur est bleue ciel, tel les casques bleus de l&rsquo;ONU, &eacute;voque donc la paix, l&rsquo;assurance, la bienveillance et l&rsquo;expertise. On peut remarquer que, c&rsquo;est aussi la couleur phare de grands groupes, et d&rsquo;entreprises pharmaceutiques, tel que La Roche-Posay, Bayer, Vichy ou encore Nivea. Pourquoi un tel int&eacute;r&ecirc;t ? Vous ne le savez peut-&ecirc;tre pas, mais &agrave; une &eacute;poque, on parlait de &laquo; Sang Bleu &raquo;, ce qui correspondait aux personnes de la noblesse ou de sang royal, donc historiquement le bleu &eacute;voque aussi, le prestige ! Pour finir, le bleu est aussi une des 3 couleurs primaires, donc essentiel pour pouvoir construire les autres couleurs. Ce qui fait &eacute;cho avec le fait que l&amp;amp;amp;amp;amp;amp;amp;#039;h&ocirc;pital est en lieu n&eacute;cessaire et primordial &agrave; la soci&eacute;t&eacute; !', 'Savez-vous pourquoi les blouses des chirurgiens sont-elles bleues ?', 'Voici une question que vous ne vous &ecirc;tes peut-&ecirc;tre jamais pos&eacute;e. Pourquoi les diff&eacute;rents h&ocirc;pitaux, ont-ils choisi, pour leurs op&eacute;rations la couleur bleue, ou m&ecirc;me vert clair ? La couleur actuelle des blouses des chirurgiens, n&amp;amp;amp;amp;amp;amp;amp;#039;a pas &eacute;t&eacute; choisie au hasard. Avant, les blouses &eacute;taient blanches, symbole de propret&eacute;. Mais le blanc s&rsquo;est r&eacute;v&eacute;l&eacute; &ecirc;tre source d&rsquo;illusion d&rsquo;optique. Comme nous le savons, les chirurgiens passent souvent de tr&egrave;s longues heures, concentr&eacute;s sur des organes ou du sang humain&hellip; Le cerveau est donc concentr&eacute; sur ces tons rouges, si le chirurgien fixe soudainement sa blouse, ou la blouse de ses coll&egrave;gues, il verra des t&acirc;ches noires, ce ph&eacute;nom&egrave;ne peut le d&eacute;concentrer pendant quelques minutes. Ce qui n&rsquo;arrive pas si les blouses et les murs sont verts ou bleus, car ces couleurs sont des couleurs compl&eacute;mentaires aux teintes rouges ! Ce sont donc, les couleurs qui g&ecirc;nent le moins les professionnels de sant&eacute;. De plus, elles permettent de rendre les yeux plus sensibles aux diff&eacute;rentes couleurs de l&amp;amp;amp;amp;amp;amp;amp;#039;anatomie humaine et les aident &agrave; &ecirc;tre plus attentifs aux &eacute;ventuelles erreurs durant l&amp;amp;amp;amp;amp;amp;amp;#039;op&eacute;ration. Bluffant non ?', 'Connaissez vous les f&eacute;es du CHU de Bordeaux ?ff', 'Les F&eacute;es Bleues sont une association cr&eacute;&eacute;e par le personnel soignant du CHU, qui a pour but d&rsquo;apporter de la couleur et du confort, dans le monde aseptis&eacute; du soin des pr&eacute;matur&eacute;s ou bien pour les enfants en r&eacute;animation. Ces b&eacute;n&eacute;voles sont des aides-soignantes ou infirmi&egrave;res qui y consacrent leurs temps libre. Ces f&eacute;es bleues, cr&eacute;ent ainsi, des parures color&eacute;es pour les incubateurs, confectionnent des jeux pour occuper les enfants, ou cr&eacute;e des tuniques color&eacute;es pour remplacer les tuniques de soins&hellip; Le CHU soutient l&amp;amp;amp;amp;amp;amp;amp;#039;initiative de son personnel soignant, et a m&ecirc;me accueilli r&eacute;cemment un nouveau pensionnaire au service p&eacute;diatrique. Il s&rsquo;appelle Nao, il est bleu et blanc, et il mesure 58 cm ! Sa mission est d&rsquo;aider les enfants qui ne peuvent pas sortir de l&amp;amp;amp;amp;amp;amp;amp;#039;h&ocirc;pital &agrave; cause de leur d&eacute;ficience immunitaire. Ce robot joue, danse et parle&hellip; Il a &eacute;t&eacute; programm&eacute; &agrave; destination des personnes autistes, handicap&eacute;es, ou &acirc;g&eacute;es. Gr&acirc;ce &agrave; son intelligence artificielle, le robot rompt l&amp;amp;amp;amp;amp;amp;amp;#039;isolement, et recr&eacute;e du lien avec l&amp;amp;amp;amp;amp;amp;amp;#039;ext&eacute;rieur. Ce beau cadeau fait aux enfants du CHU de Bordeaux, a &eacute;t&eacute; offert par le Lion Club Bordeaux Graves, un cadeaux d&rsquo;une valeur de 12 000 &euro; !', 'Et voil&agrave; vous savez maintenant tout sur le CHU de Bordeaux ! Quoi que&hellip; Savez-vous qu&rsquo;il participe &agrave; l&amp;amp;amp;amp;amp;amp;amp;#039;op&eacute;ration de sensibilisation Mars Bleu ? Notre h&ocirc;pital se met donc au bleu pour am&eacute;liorer son quotidien et pour le plus grand plaisir de Gav&eacute; Bleu !', '1738931726_IMG_6136 (1).jpg', 1),
(3, '2019-11-09 10:34:20', '2025-02-07 12:13:30', 'Le Rap chez les bourgeois : une musique de plus en plus pr&eacute;sente', 'Surplombant la place Stalingrad, anciennement place du Pont, et faisant fi&egrave;rement face au pont de Pierre, le Lion bleu de Xavier Veilhan fait depuis 2005 l&rsquo;objet de toutes les convoitises.', 'En France, toute construction d&rsquo;un b&acirc;timent public a peour but d&rsquo;accueillir du mon', 'En France, depuis 1951 et l&rsquo;arr&ecirc;t&eacute; des &laquo; 1% artistique &raquo;, toute construction d&rsquo;un b&acirc;timent public ayant pour but d&rsquo;accueillir du monde doit pr&eacute;voir 1% de son budget total pour financer des &oelig;uvres d&rsquo;art aux abords du b&acirc;timent. En construisant les lignes de tramway, la ville de Bordeaux et sa m&eacute;tropole ont donc mis en place le programme &laquo; L&rsquo;art dans la ville &raquo;. Supervis&eacute; par le directeur du Centre Georges-Pompidou, cette initiative a pu d&eacute;bloquer plusieurs millions d&rsquo;euros depuis 2000 pour la r&eacute;alisation d&rsquo;une quinzaine d&rsquo;&oelig;uvres. Parmi ces &oelig;uvres, nous pouvons noter &laquo; La maison aux personnages &raquo; place Am&eacute;lie Raba L&eacute;on, les affiches &laquo; Aux bord&rsquo;eaux &raquo; pr&eacute;sentes dans toutes les stations ou bien le fameux Lion bleu bordelais. Mise en place et viss&eacute;e sur les pav&eacute;s de la rive droite le 30 juin 2005, cette sculpture en plastique mesure 6 m&egrave;tres de haut. Elle va de pair avec la mise en service de la premi&egrave;re ligne de tramway dans Bordeaux, la ligne A, qui traverse le pont de Pierre et la place Stalingrad. En d&eacute;calage total par rapport au style architectural tr&egrave;s XVIII&egrave;me de la ville, cette &oelig;uvre a d&rsquo;abord &eacute;t&eacute; massivement rejet&eacute;e par les habitants du quartier, mais ils l&rsquo;ont d&eacute;sormais adopt&eacute;e.', 'Un symbole de la rive droite', 'On n&rsquo;imagine pas la place Stalingrad sans cet imposant f&eacute;lin color&eacute;. Ce lion bleu est devenu l&amp;amp;amp;amp;amp;amp;#039;embl&egrave;me de cette place et, pour les habitants de la rive gauche, c&rsquo;est le symbole de &laquo; l&rsquo;autre rive &raquo;, c&rsquo;est la premi&egrave;re chose que l&rsquo;on voit en traversant la Garonne depuis le quartier de Saint-Michel. Ce lion bleu, on s&rsquo;y abrite, on s&rsquo;y donne rendez-vous, on s&rsquo;en sert de rep&egrave;re et les &eacute;coliers y prennent souvent leur premier cours d&rsquo;art contemporain. Ce lion bleu n&rsquo;est pour certain qu&rsquo;un gros point azur pixelis&eacute; &agrave; l&rsquo;horizon, mais pour d&rsquo;autres c&rsquo;est un symbole, un mirage, comme un gros jouet qu&amp;amp;amp;amp;amp;amp;#039;on ne perd jamais. Et ce gros jouet, des centaines d&rsquo;internautes se le sont attribu&eacute; et en parlent sur Instagram via le #lionbleu. Ils postent r&eacute;guli&egrave;rement des photos de lui, toujours dans la m&ecirc;me posture, veillant sur la ville de Bordeaux. D&rsquo;objet d&rsquo;art &agrave; star du net, il n&rsquo;y a qu&rsquo;un pas. Et ce pas, le Lion de Veilhan l&rsquo;a franchi comme il franchirait la Garonne pour rejoindre le centre-ville bordelais. En plus de son esth&eacute;tique remarquable, son cr&eacute;ateur n&rsquo;a pas omis de lui donner un sens propre en prenant en compte l&rsquo;environnement qui entoure cette statue bestiale.', 'Un tremplin pour Xavier Veilhan', 'L&amp;amp;amp;amp;amp;amp;#039;artiste plasticien &agrave; l&rsquo;origine du Lion bleu, dipl&ocirc;m&eacute; de l&amp;amp;amp;amp;amp;amp;#039;EnsAD-Paris (&Eacute;cole Nationale Sup&eacute;rieure des Arts D&eacute;coratifs) et officier de l&rsquo;Ordre des Arts et des Lettres, n&rsquo;a pas choisi une figure animali&egrave;re pour rien. La place Stalingrad est un hommage &agrave; la victoire de l&rsquo;arm&eacute;e sovi&eacute;tique durant la Seconde Guerre Mondiale. Xavier Veilhan souhaitait donc offrir &agrave; ce lieu une &oelig;uvre monumentale qui renforce son identit&eacute;. &Agrave; l&rsquo;instar du Lion de Belfort de Bartholdi, il a donc choisi cet animal pour ses valeurs de force tranquille, se battant pour la justice avec puissance mais intelligence. Il d&eacute;clarait, avant sa construction, vouloir quelque chose de tot&eacute;mique, &agrave; la fois dominant et protecteur. Il ne reste plus qu&rsquo;&agrave; esp&eacute;rer qu&rsquo;il seconde Bordeaux et ses habitants dans leur quotidien futur. Le sculpteur du Lion a vu sa c&ocirc;te mondiale grimper suite &agrave; la r&eacute;alisation de cette &oelig;uvre. Il a, depuis, pu exposer un Carrosse violet &agrave; Versailles en 2009, un Skateur bleu en Cor&eacute;e du Sud en 2014, ou encore Romy, une femme jaune, devant la gare de Lille en 2019.', 'Esp&eacute;rons que cet &eacute;lan de cr&eacute;ativit&eacute; se poursuive et que, par la suite, Xavier Veilhan r&eacute;utilise cette couleur qui nous est si ch&egrave;re, le bleu.', '1738930410_rap-bourgeois.webp', 1),
(4, '2020-01-12 18:21:21', '2025-02-07 12:35:38', 'Quand Mamie Monique d&eacute;couvre Stuntmen de Laylow', 'Un samedi apr&egrave;s-midi au Jardin Public de Bordeaux, Mamie Monique d&eacute;couvre le rap avec &amp;amp;quot;Stuntmen&amp;amp;quot; de Laylow. Entre incompr&eacute;hension et &eacute;clats de rire, elle tente de d&eacute;crypter les paroles et de saisir l&rsquo;&eacute;nergie de ce style musical. Une rencontre improbable qui prouve que le rap, m&ecirc;me quand on ne le comprend pas toujours, peut surprendre et intriguer.', 'Quand Mamie Monique d&eacute;couvre &ldquo;Stuntmen&rdquo; de Laylow : un grand moment de malaise.', 'Le rap, c&rsquo;est un langage qui change constamment. Avant, tout le monde comprenait facilement les paroles, m&ecirc;me si les styles diff&eacute;raient. Mais aujourd&rsquo;hui, avec les expressions de la rue, les r&eacute;f&eacute;rences &agrave; la pop culture, les jeux de mots et les m&eacute;taphores, &ccedil;a devient un vrai casse-t&ecirc;te, surtout pour ceux qui n&rsquo;ont pas grandi avec. Et pourtant, ce langage a une puissance incroyable, une mani&egrave;re unique de raconter des histoires et de transmettre des &eacute;motions. Le rap, c&rsquo;est aussi l&rsquo;identit&eacute; des villes, et &agrave; Bordeaux, par exemple, le rap a sa propre couleur. Il m&eacute;lange parfois la douceur et la force, entre la rue et l&rsquo;art. C&rsquo;est pourquoi on a eu l&rsquo;id&eacute;e de tenter quelque chose d&rsquo;original : faire d&eacute;couvrir les paroles de Stuntmen de Laylow &agrave; une personne totalement &eacute;trang&egrave;re &agrave; cet univers. Et qui de mieux qu&rsquo;une grand-m&egrave;re pour relever le d&eacute;fi ?\r\nLe hasard nous a men&eacute;s &agrave; Mamie Monique, assise sur un banc, visiblement ravie de discuter. D&egrave;s qu&rsquo;on lui a propos&eacute; l&rsquo;exp&eacute;rience, elle a ri : &ldquo;Oh l&agrave; l&agrave;, du rap ? Je ne comprends rien &agrave; ce qu&rsquo;ils racontent !&rdquo;\r\n Justement, c&rsquo;&eacute;tait parfait. Elle a ajust&eacute; ses lunettes, pris mon t&eacute;l&eacute;phone avec pr&eacute;caution et ouvert les yeux en grand en voyant le texte s&rsquo;a', '&ldquo;Mais c&rsquo;est quelle langue, &ccedil;a ?&rdquo;', 'Elle commence &agrave; lire &agrave; voix haute, articulant chaque mot comme si elle d&eacute;chiffrait une langue &eacute;trang&egrave;re :\r\n&ldquo;T&rsquo;inqui&egrave;te, on se capte &agrave; l&rsquo;heure, mais toi-m&ecirc;me tu sais, j&rsquo;suis grave fucked up&hellip;&rdquo;\r\nElle fronce les sourcils. &ldquo;Il est malade ? Pourquoi il dit qu&rsquo;il est &lsquo;fucked up&rsquo; ?&rdquo;\r\nOn lui explique calmement que cela veut dire qu&rsquo;il est fatigu&eacute;, un peu perdu. \r\nElle souffle, un brin d&eacute;sabus&eacute;e : &ldquo;&Agrave; mon &eacute;poque, on disait simplement &lsquo;je suis crev&eacute;&rsquo;. Pourquoi tout compliquer ?&rdquo;\r\nElle fait d&eacute;filer l&rsquo;&eacute;cran d&rsquo;un geste h&eacute;sitant et poursuit :\r\n&ldquo;J&rsquo;ai toujours le seum et j&rsquo;le garde comme un porte-bonheur.&rdquo;\r\nL&agrave;, c&rsquo;est le moment o&ugrave; elle se bloque. &ldquo;Le seum&hellip; c&rsquo;est une maladie ?&rdquo;\r\nCette fois, on &eacute;clate de rire. Elle attend patiemment qu&rsquo;on se calme avant de croiser les bras : &ldquo;Eh bien, expliquez-moi, au lieu de rigoler.&rdquo;\r\nOn lui explique que le seum, c&rsquo;est quand on est frustr&eacute;, &eacute;nerv&eacute;, d&eacute;go&ucirc;t&eacute; par une situation. Elle r&eacute;fl&eacute;chit un instant, puis l&acirc;che : &ldquo;Donc, en gros, il garde sa col&egrave;re comme une motivation ?&rdquo;\r\nOn acquiesce, un peu surpris de sa compr&eacute;hension rapide. Elle commence &agrave; saisir peu &agrave; peu l&rsquo;esprit du rap, m&ecirc;me si c&rsquo;est encore flou pour elle.\r\nMais la suite va la d&eacute;stabiliser encore plus. Elle arrive sur', '&ldquo;Bruce Lee arrache les poils de Chuck Norris&hellip; QUOI ?&rdquo;', 'Dans &amp;amp;amp;quot;Stuntmen&amp;amp;amp;quot;, Laylow l&acirc;che des refs de partout. Mais pour Mamie, c&rsquo;est un vrai casse-t&ecirc;te.\r\n&ldquo;Ouh, kung-fu, Bruce Lee dans l&rsquo;film o&ugrave; il arrache tous les poils &agrave; Chuck Norris.&rdquo;\r\nElle bloque. &ldquo;Mais pourquoi il arrache ses poils ? Il a un probl&egrave;me de rasoir ?&rdquo;\r\nOn pleure de rire. On lui explique que c&rsquo;est un clin d&rsquo;&oelig;il au combat mythique entre Bruce Lee et Chuck Norris dans un vieux film. Elle souffle : &ldquo;Ah bah moi, &agrave; mon &eacute;poque, on &eacute;coutait Edith Piaf, c&rsquo;&eacute;tait plus clair.&rdquo;\r\nPuis, elle tombe sur une autre phrase qui la laisse perplexe :\r\n&ldquo;Y&rsquo;a 100 000 euros dans l&rsquo;clip mais j&rsquo;crois qu&rsquo;j&rsquo;m&rsquo;en bats les couilles.&rdquo;\r\nElle repose le t&eacute;l&eacute;phone et nous regarde, bras crois&eacute;s. &ldquo;Mais pourquoi montrer autant d&rsquo;argent si c&rsquo;est pour dire qu&rsquo;on s&rsquo;en fiche ?&rdquo;\r\nExcellente question, Mamie.\r\nMais la phrase qui la fait d&eacute;finitivement d&eacute;crocher, c&rsquo;est celle-ci :\r\n&ldquo;Le public manque de go&ucirc;t comme l&rsquo;eau plate.&rdquo;\r\nElle secoue la t&ecirc;te. &ldquo;Mais qu&rsquo;est-ce qu&rsquo;elle a fait, l&rsquo;eau plate ? Elle est tr&egrave;s bien, l&rsquo;eau plate !&rdquo;\r\nVoil&agrave;. Mamie Monique, nouvelle ambassadrice officielle de l&rsquo;eau du robinet.\r\nElle nous rend le t&eacute;l&eacute;phone, souffle un coup et d&eacute;clare : &ldquo;C&rsquo;est plus compliqu&eacute; qu&rsquo;un roman policier, votre affaire.&rdquo;', 'Mamie n&rsquo;a rien capt&eacute;&hellip; mais elle valide\r\nCette exp&eacute;rience nous a appris un truc : le rap et la musique d&rsquo;avant, c&rsquo;est la m&ecirc;me histoire, juste racont&eacute;e autrement. Mamie ne capte pas tout, mais elle capte l&rsquo;&eacute;nergie, le style, le flow.\r\nEst-ce qu&rsquo;elle va &eacute;couter Laylow en boucle ? Non.\r\nEst-ce qu&rsquo;on lui a montr&eacute; que le rap, c&rsquo;est un vrai art ? Oui.\r\nEt qui sait&hellip; peut-&ecirc;tre qu&rsquo;un jour, Mamie sortira son propre freestyle, avec une touche bordelaise, bien s&ucirc;r.', '1738931738_photo_mamie_monique.jpg', 1),
(5, '2022-03-04 12:28:00', '2025-02-07 10:40:22', 'La sculpture Sanna va-t-elle nous quitter ?', 'Depuis presque dix ans, la sculpture Sanna tr&ocirc;ne sur la place de la com&eacute;die. Visage embl&eacute;matique et intriguant que l&rsquo;on appr&eacute;cie contempler. Aujourd&rsquo;hui, il est possible qu&rsquo;elle ne devienne plus qu&rsquo;un souvenir&hellip; La ville de Bordeaux a toujours &eacute;t&eacute; investie dans la culture et l&amp;amp;amp;#039;acc&egrave;s &agrave; l&rsquo;art, c&rsquo;est pourquoi le sujet de la sculpture Sanna fait pol&eacute;mique au sein de la ville.', 'Quelle histoire se cache derri&egrave;re ce visage ?', 'La demoiselle de fonte a &eacute;t&eacute; &eacute;rig&eacute;e en 2013 par Jaume Plensa dans le cadre d&rsquo;une exposition bordelaise, Sanna &eacute;tait accompagn&eacute;e de sa &laquo; s&oelig;ur &raquo; Paula, qui elle, &eacute;tait plac&eacute;e devant la cath&eacute;drale de Bordeaux. Jaume Plensa est un artiste Catalan qui a r&eacute;alis&eacute; onze autres &oelig;uvres, expos&eacute;es &agrave; travers la ville. Mais, celles-ci ont &eacute;t&eacute; retir&eacute;es. Actuellement, c&rsquo;est un particulier anonyme qui poss&egrave;de la sculpture Sanna, il laisse &agrave; la municipalit&eacute; de Bordeaux un d&eacute;lai de 5 ans pour la conserver sur la place de la Com&eacute;die. Elle partirait &agrave; priori en 2027. Ce serait donc le d&eacute;part d&rsquo;une &oelig;uvre extravagante et surtout embl&eacute;matique de la ville de Bordeaux.', 'Une demoiselle de fonte, d&rsquo;&acirc;me et d&rsquo;or', 'Sanna est une sculpture figurative monumentale faite enti&egrave;rement de fonte, il s&rsquo;agit du visage d&rsquo;une jeune fille qui para&icirc;t particuli&egrave;rement apais&eacute;e, comme si elle &eacute;tait endormie. Cette impression de pl&eacute;nitude est due aux yeux ferm&eacute;s de la jeune fille et &agrave; son expression imperturbable, comme si elle n&rsquo;allait jamais les rouvrir. Sous certaines perspectives, Sanna peut adopter diff&eacute;rents styles : de face son visage est parfaitement droit et bien proportionn&eacute; mais de c&ocirc;t&eacute; son visage semble difforme. Aussi, nous pouvons voir &eacute;voluer les couleurs de la demoiselle de fonte au fur et &agrave; mesure des ann&eacute;es. En effet, la sculpture rouille et sa teinte varie en fonction du temps. Sanna se situe devant le grand th&eacute;&acirc;tre sur la place de la Com&eacute;die, son style particulier qui marie la grossi&egrave;ret&eacute; du fer et la finesse des traits, se combine parfaitement avec l&rsquo;op&eacute;ra par ses formes imposantes et travaill&eacute;es. Pour l&rsquo;artiste, Jaume Plensa, le visage est &laquo; le miroir de l&rsquo;&acirc;me &raquo;. Par cons&eacute;quent, l&amp;amp;amp;#039;&oelig;uvre permet aux bordelais d&rsquo;acqu&eacute;rir un instant de paix de l&rsquo;esprit en plein c&oelig;ur de la ville.', 'L&amp;amp;amp;#039;achat de la statue', 'En plus de son aspect artistique, la sculpture de Sanna g&eacute;n&egrave;re &eacute;videmment aussi un certain engouement affectant son aspect &eacute;conomique. En effet, en 2014 apr&egrave;s l&rsquo;exposition de Jaume Plensa, Bordeauxbfb fait une lev&eacute;e de fond pour racheter la sculpture. La ville a besoin de r&eacute;colter 150 000 &euro; aupr&egrave;s des habitants et pr&eacute;voit ensuite de compl&eacute;ter cette r&eacute;colte en sortant &eacute;galement un minimum de 150 000 &euro; de sa poche. Effectivement, la valeur financi&egrave;re de l&amp;amp;amp;#039;&oelig;uvre varie entre 300 000 &euro; et 500 000 &euro;. Malheureusement, les dons &eacute;tant trop faibles, la r&eacute;colte n&amp;amp;amp;#039;aboutit pas &agrave; un r&eacute;sultat concluant. Seulement 44 000 &euro; ont &eacute;t&eacute; r&eacute;colt&eacute;s ce qui n&rsquo;a absolument pas &eacute;t&eacute; suffisant pour que la municipalit&eacute; prenne en charge le reste de l&rsquo;achat. Fort heureusement en 2015, un particulier anonyme ach&egrave;te la statue et signe un contrat avec la municipalit&eacute; de Bordeaux pour la laisser 6 ans de plus sur la place de la Com&eacute;die. Plus r&eacute;cemment encore, le 8 f&eacute;vrier 2022, la ville de Bordeaux a annonc&eacute; officiellement qu&rsquo;un autre accord avait &eacute;t&eacute; approuv&eacute;, permettant &agrave; la sculpture de rester sur la place et surtout dans nos c&oelig;urs jusqu&rsquo;en 2027.', 'Finalement, cette sculpture reste encore parmi nous pendant un bon moment. Cette demoiselle de fonte au v&eacute;cu po&eacute;tique ayant rythm&eacute; la vie de beaucoup de bordelais continuera donc de le faire ces cinq prochaines ann&eacute;es. Et cette affaire d&rsquo;argent plut&ocirc;t compliqu&eacute;e pour la mairie de Bordeaux lui a tout de m&ecirc;me permis de conserver ce bien gr&acirc;ce &agrave; l&rsquo;aide de ce fameux acheteur anonyme. Nous vous sugg&eacute;rons donc d&rsquo;aller une fois encore appr&eacute;cier sa pr&eacute;sence avant son d&eacute;part imminent ! Avec l&rsquo;&eacute;quipe de r&eacute;daction, nous nous demandions si vous aussi vous aviez des anecdotes croustillantes &agrave; raconter sur ce visage fait de m&eacute;taux. Qu&rsquo;est-ce qu&rsquo;elle vous fait ressentir ? &Ecirc;tes-vous heureux d&rsquo;apprendre qu&rsquo;elle reste &agrave; nos c&ocirc;t&eacute;s encore longtemps vous aussi ? Nous avons h&acirc;te de lire vos r&eacute;ponses en commentaire !', '1738924822_JEFLEO-BUZZBOOSTER-J2-030-scaled.jpg', 1),
(6, '2023-12-04 10:08:30', '2025-02-07 13:03:15', 'Comment le sang bleu a domin&eacute; le symbole de Bordeaux ?n', 'Tout au long de son histoire Bordeaux a connu de nombreuses fa&ccedil;on d&rsquo;&ecirc;tre repr&eacute;sent&eacute;e, ou comment ses armoiries ont &eacute;t&eacute; les images de son occupation anglaise, de sa domination royale et de la prosp&eacute;rit&eacute; moderne qu&rsquo;elle conna&icirc;t au 21&egrave;me si&egrave;cle.', 'Avez-vous d&eacute;j&agrave; vu l&rsquo;embl&eacute;matique blason de Bordeaux ?', 'Ce symbole qui &agrave; plusieurs reprises, s&rsquo;est vu transformer par la noblesse anglaise. Celui provenant du Moyen &acirc;ge tardif sous la conqu&ecirc;te fran&ccedil;aise est le plus connu puisque c&rsquo;est une repr&eacute;sentation symbolique et figur&eacute;e gr&acirc;ce auquelle on peut deviner l&rsquo;histoire entrem&ecirc;l&eacute;e de la ville. Trois couleurs dominent cet &eacute;cusson : le jaune, le rouge et le bleu. Dessus on peut y reconna&icirc;tre diff&eacute;rentes formes dont des &laquo; meubles &raquo; qui repr&eacute;sentent des &eacute;l&eacute;ments pr&eacute;cis. Situ&eacute; au sommet de l&rsquo;&eacute;cu bordelais, semblable &agrave; un ciel bleu nuit, &eacute;toil&eacute; de fleurs de lys, se trouve le Chef d&rsquo;azur sem&eacute; de France symbole des rois de France. Au-dessous, sur un fond rouge sang, un L&eacute;opard d&rsquo;or et non un Lion, repr&eacute;sentant la province de la Guyenne, survole une forteresse. Ce n&rsquo;est pas une simple forteresse id&eacute;ale mais l&amp;amp;amp;amp;amp;#039;un des monuments phare de Bordeaux : la Grosse-Cloche, reproduite sous des traits stylis&eacute;s. Elle est fortifi&eacute;e de deux tours aujourd&rsquo;hui disparus. Comme d&eacute;bordant &agrave; flot, la mer d&rsquo;azur ondoy&eacute; de sable d&rsquo;argent incarnant la Garonne se voit surmont&eacute; d&rsquo;un croissant d&rsquo;argent qui fait &eacute;videmment allusion &agrave; la forme semi-circulaire du port de la Lune.', 'Un blason malmen&eacute; aux bleus visibles', 'Si la premi&egrave;re repr&eacute;sentation connue du blason fran&ccedil;ais de Bordeaux se trouve dans l&rsquo;ouvrage de Gabriel de Tareda nomm&eacute; Tract&eacute; contre la peste de 1519. Ce ne fut pas la premi&egrave;re version &agrave; voir le jour. La ville fut influenc&eacute;e par le sang bleu anglais, la monarchie provenant d&rsquo;Angleterre, pendant 300 ans, cette situation impactant le reflet de Bordeaux : son Blason. Richard C&oelig;ur de Lion a fa&ccedil;onn&eacute; un &eacute;cu &agrave; son image afin d&amp;amp;amp;amp;amp;#039;asseoir sa domination, ainsi se fut trois L&eacute;opards d&rsquo;or qui logeaient au sommet du blason. Ce n&rsquo;est qu&rsquo;en 1453 gr&acirc;ce &agrave; la reconqu&ecirc;te fran&ccedil;aise, que le blason pris sa forme d&eacute;finitive, celle qu&rsquo;on conna&icirc;t, arborant finalement le symbole des rois fran&ccedil;ais &agrave; la place. Plus tard une derni&egrave;re version apparu : deux antilopes encha&icirc;n&eacute;es et &agrave; collier fleurdelis&eacute;, ainsi qu&rsquo;une couronne murale repr&eacute;sentant une muraille encadre le blason fran&ccedil;ais. Ce sont des supports d&rsquo;armoiries inusit&eacute;es en France, au Moyen-&Acirc;ge. Une devise y est aussi inscrite &laquo; Lilia sola regunt lunam unda castra leonem &raquo; retranscrit &laquo; les lys r&egrave;gnent seuls sur la lune, les ondes, la forteresse et le lion &raquo; faisant allusion &agrave; la domination du roi de France sur Bordeaux, apr&egrave;s la p&eacute;riode d&rsquo;occupation anglaise.', 'Le bleu roi toujours au devant du tableau bordelais', 'Malgr&eacute; la confuse histoire ce blason des plus symboliques, la grande ville qu&rsquo;est Bordeaux ne peut se d&eacute;cider &agrave; l&rsquo;utiliser pour se repr&eacute;senter en ces temps modernes. Pour r&eacute;soudre cette affaire de grande envergure la mairie a choisi un logo neutre tout en gardant un symbole repr&eacute;sentatif : le port de la lune. En effet le logo-type de la ville est constitu&eacute; de trois croissants entrelac&eacute;s qu&rsquo;on appelle aussi le chiffre de Bordeaux, de couleur blanc nacr&eacute; sur fond rouge bordeaux. Il n&rsquo;est pas impossible qu&rsquo;elles figurent sur certaines reliure de livre et sur la fontaine Saint-Projet de la rue Sainte-Catherine. Grav&eacute; dans la pierre, fondue dans le m&eacute;tal ou sur le verre des bouteilles &laquo; bordelaises &raquo; on retrouve ce symbole sur tous les produits provenant de la ville. Le trio lunaire est &eacute;galement surmont&eacute; du nom de la ville sur fond bleu roi. Cette couleur qui a su se faire une place dans l&rsquo;histoire de Bordeaux, repr&eacute;sente autant la royaut&eacute; que le fleuve bordelais. Et aujourd&rsquo;hui &agrave; l&rsquo;&eacute;poque o&ugrave; l&rsquo;homme s&rsquo;&eacute;l&egrave;ve gr&acirc;ce aux nouvelles technologies qui nous permettent de nombreux exploits,', 'Si la ville de Bordeaux a sa charte graphique et son propre logo elle n&rsquo;est pas la seule, on retrouve nombreux logo tout aussi caract&eacute;ristique s&rsquo;inspirant de l&rsquo;histoire, comme les logos d&rsquo;Aquitaine, de l&rsquo;Union Bordeaux-B&egrave;gles ou des bleus de Bordeaux : les Girondins !', '1738933395_JEFLEO-BUZZBOOSTER-J2-030-scaled.jpg', 1),
(42, '2004-02-12 12:12:00', '2025-02-07 13:14:29', 'ggg', 'hvv', 'vv', 'vv', 'vvvvb', 'vh', 'vv', 'v', 'v', '1738934069_JEFLEO-BUZZBOOSTER-J2-030-scaled.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `numCom` int NOT NULL AUTO_INCREMENT,
  `dtCreaCom` datetime DEFAULT CURRENT_TIMESTAMP,
  `libCom` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtModCom` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `attModOK` tinyint(1) DEFAULT '0',
  `notifComKOAff` text COLLATE utf8mb3_unicode_ci,
  `dtDelLogCom` datetime DEFAULT NULL,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int NOT NULL,
  `numMemb` int NOT NULL,
  PRIMARY KEY (`numCom`),
  KEY `COMMENT_FK` (`numCom`),
  KEY `FK_ASSOCIATION_2` (`numArt`),
  KEY `FK_ASSOCIATION_3` (`numMemb`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`numCom`, `dtCreaCom`, `libCom`, `dtModCom`, `attModOK`, `notifComKOAff`, `dtDelLogCom`, `delLogiq`, `numArt`, `numMemb`) VALUES
(1, '2020-11-09 10:13:43', 'Trop cool comme article', '2025-02-06 14:11:39', 1, NULL, NULL, 0, 1, 1),
(2, '2023-11-02 13:18:42', 'Trop pourri', '2023-11-03 18:43:19', 0, 'Message trop provocateur', '2023-11-04 08:23:19', 1, 1, 2),
(3, '2020-11-04 16:21:12', 'Trop cool comme article', '2021-01-12 13:36:48', 1, NULL, NULL, 0, 4, 3),
(4, '2020-11-05 03:15:38', 'Trop cool comme article', '2025-02-06 14:25:58', 1, NULL, NULL, 0, 1, 1),
(5, '2020-11-06 21:16:36', 'Trop cool comme article', '2023-01-12 09:03:48', 1, NULL, NULL, 0, 1, 2),
(6, '2020-11-06 11:20:31', 'Trop cool comme article', NULL, 0, NULL, NULL, 0, 1, 3),
(7, '2020-11-08 08:41:12', 'Trop cool comme article', NULL, 0, NULL, NULL, 0, 1, 3),
(9, '2022-10-09 12:07:09', 'Un super article', '2024-01-09 21:03:48', 0, '', NULL, 0, 4, 2),
(16, '2025-02-06 15:22:23', 'ecc', NULL, 0, NULL, NULL, 0, 2, 1),
(17, '2025-02-06 15:24:13', 'trop cooollllll', NULL, 0, NULL, NULL, 0, 1, 1),
(18, '2025-02-06 16:05:39', 'lache pas l&amp;#039;ecole', '2025-02-06 16:31:26', 0, 'CRCRCRC', NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likeart`
--

DROP TABLE IF EXISTS `likeart`;
CREATE TABLE IF NOT EXISTS `likeart` (
  `numMemb` int NOT NULL,
  `numArt` int NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART1` (`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `likeart`
--

INSERT INTO `likeart` (`numMemb`, `numArt`, `likeA`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 5, 1),
(2, 1, 0),
(2, 3, 1),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `numMemb` int NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nomMemb` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `pseudoMemb` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `passMemb` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `eMailMemb` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtCreaMemb` datetime DEFAULT CURRENT_TIMESTAMP,
  `dtMajMemb` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `accordMemb` tinyint(1) DEFAULT '1',
  `cookieMemb` varchar(70) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `numStat` int NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_4` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `dtMajMemb`, `accordMemb`, `cookieMemb`, `numStat`) VALUES
(1, 'Freddie', 'Mercury', 'Admin99', '$2y$10$5zlP5iH7laVLkbASXw0RBurNQKQiqryw96OmA9XA.1XjAK5wx.kx2', 'freddie.mercury@gmail.com', '2019-05-29 10:13:43', '2025-02-07 09:22:27', 1, NULL, 1),
(2, 'Phil', 'Collins', 'Phil09', '$2y$10$/0l9UEAPIRBKxKGzR1zLpuZtGX3NOTsayX8m2VQt.3A/nykcrDXXS', 'phil.collins@gmail.com', '2020-01-09 10:13:43', '2025-02-07 09:20:53', 1, NULL, 2),
(3, 'Julie', 'La Rousse', 'juju1989', '12345678', 'julie.larousse@gmail.com', '2020-03-15 14:33:23', '2024-01-12 14:36:48', 1, NULL, 3),
(4, 'David', 'Bowie', 'dav33B', '12345678', 'david.bowie@gmail.com', '2020-07-19 13:13:13', NULL, 1, NULL, 3),
(7, 'Taombe', 'Yanis', 'yanissssss', '$2y$10$BMTSVh1PZSAXOd4fjpGQfuRrq3Unasj5hVjZixUowHEDG7awy0zQi', 'taombeyanis@gmail.com', '2025-02-06 11:15:50', NULL, 1, NULL, 1),
(9, 'yanis', 'taombe', 'migossss', '$2y$10$WlKFWRYXGX8exfgP9qtU/Om9v0VZGHtZ9PwQr/XyawvuTKRY10ezm', 'migos@gmail.com', '2025-02-07 09:34:53', NULL, 1, NULL, 3),
(10, 'yaniss', 'taombe', 'migosssss', '$2y$10$DKhNb1T6KgNFOOWu9.Xmc.8QAu8bUbOSCZ77kxgDhxJ4TrXPNC30.', 'migos@gmail.com', '2025-02-07 09:36:16', '2025-02-07 16:58:40', 1, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numMotCle` int NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `motcle`
--

INSERT INTO `motcle` (`numMotCle`, `libMotCle`) VALUES
(1, 'Bordeaux'),
(6, 'bleu'),
(12, 'Buzz Booster'),
(13, 'Sc&egrave;ne'),
(14, 'Public'),
(15, 'Carri&egrave;re'),
(16, 'Opportunit&eacute;'),
(17, 'rap');

-- --------------------------------------------------------

--
-- Table structure for table `motclearticle`
--

DROP TABLE IF EXISTS `motclearticle`;
CREATE TABLE IF NOT EXISTS `motclearticle` (
  `numArt` int NOT NULL,
  `numMotCle` int NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `motclearticle`
--

INSERT INTO `motclearticle` (`numArt`, `numMotCle`) VALUES
(42, 12),
(42, 13);

-- --------------------------------------------------------

--
-- Table structure for table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `numStat` int NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `dtCreaStat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`numStat`),
  KEY `STATUT_FK` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `statut`
--

INSERT INTO `statut` (`numStat`, `libStat`, `dtCreaStat`) VALUES
(1, 'Administrateur', '2023-02-19 15:15:59'),
(2, 'Modérateur', '2023-02-19 15:19:12'),
(3, 'Membre', '2023-02-20 08:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `numThem` int NOT NULL AUTO_INCREMENT,
  `libThem` varchar(60) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé'),
(3, 'Le mouvement émergeant'),
(4, 'L\'insolite / le clin d\'œil'),
(5, 'hhhh'),
(8, 'ezcec');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `statut` (`numStat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
