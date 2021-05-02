DROP TABLE Actualites;

create table actualites(
    id_actu serial NOT NULL,
    type_actu VARCHAR(30),
    titre_actu varchar(255),
    preview_actu varchar(255),
    paragraphe text,
    auteur varchar(50),
    date_actu timestamp,
    primary key(id_actu)
);
ALTER SEQUENCE actualites_id_actu_seq RESTART WITH 30000 INCREMENT BY 1;

INSERT INTO Actualites(type_actu,titre_actu,preview_actu,paragraphe,auteur,date_actu) 
VALUES('monde','Les 9 pays indemne du covid19','Ces 9 pays ou plutot nations insulaires echappant au covid19',
'Officiellement, il ne reste plus que neuf pays échappant au virus.

Il s''agit surtout de nations insulaires, plutôt isolées et au cœur de l''océan Pacifique : Kiribati, les Îles Marshall, les Etats fédérés de Micronésie, Nauru, Palau, les Samoa, les Tonga, Tuvalu et le Vanuatu. La plupart de ces îles vivent en autarcie depuis le printemps, ayant fermé leurs frontières. Dans certains pays, comme aux îles Marshall, les bateaux de pêche qui ont été dans les pays infectés sont interdits de revenir à leur port d''attache.'
,'Wikipedia Myfriend','2020-05-02 13:10:55');

INSERT INTO Actualites(type_actu,titre_actu,preview_actu,paragraphe,auteur,date_actu) 
VALUES('monde','L''Inde en crise sanitaire !','La situation sanitaire de l''Inde se degrade de plus en plus',
'Son système de santé terrassé, l''Inde est sous le choc d''une vague épidémique hors de contrôle. Le seuil dramatique des 400 000 nouvelles contaminations quotidiennes au coronavirus a été franchi vendredi, marquant un record glaçant à l''échelle de la planète. 3 689 décès sont également à déplorer au cours de ces dernières 24 heures, sur un total de 215 542. Avec 7 millions d''infections répertoriées en avril, l''Inde se trouve à court d''oxygène médical, de médicaments et de lits d''hôpital. Dans une crise rejouée chaque jour, les vies de milliers d''Indiens sont en suspens, quand d''autres succombent, à l''image des bûchers funéraires hindous qui brûlent nuit et jour dans des crématoriums surchargés.'
,'Tonny Andriambololona','2020-05-01 09:10:20');

INSERT INTO Actualites(type_actu,titre_actu,preview_actu,paragraphe,auteur,date_actu) 
VALUES('monde','Vaccins contre le covid19','Plusieurs vaccins contre le covid19 mais sont ils fiables ?',
'Les vaccins AstraZeneca et Johnson & Johsnon sont des vaccins à vecteur viral : ils utilisent un virus modifié, et donc inoffensif, pour transporter une information - ici, comment combattre le Covid-19 - jusqu''aux cellules. Ces deux produits ont choisi comme support un type de virus très courant appelé adénovirus. AstraZeneca a opté pour un adénovirus de chimpanzé, Johnson & Johnson pour un adénovirus humain.

Cette technologie a des avantages : elle rend plus facile la production des vaccins, qui peuvent être conservés dans des réfrigérateurs normaux, contrairement aux produits qui se basent sur l''ARN messager, comme ceux de Moderna et Pfizer.

En revanche, le fait que des problèmes similaires aient été observés avec les produits d''AstraZeneca et Johnson & Johsnon "pourrait suggérer que le problème vient du vecteur adénovirus", a jugé sur Twitter David Fisman, épidémiologiste à l''université de Toronto. Pour cause, comme l''explique Mathieu Molimard, spécialiste français de pharmacologie, sur Twitter : ''ces cas n''existent pas à ce jour avec les vaccins ARN'' messager, à savoir Pfizer et Moderna.'
,'Jean Pierre Caillou','2020-04-28 15:00:00');

INSERT INTO Actualites(type_actu,titre_actu,preview_actu,paragraphe,auteur,date_actu) 
VALUES('monde','Chine, pas de 2è vague de covid19','Comment l''Asie, surtout la chine fait-elle ?',
'Son système de santé terrassé, l''Inde est sous le choc d''une vague épidémique hors de contrôle. Le seuil dramatique des 400 000 nouvelles contaminations quotidiennes au coronavirus a été franchi vendredi, marquant un record glaçant à l''échelle de la planète. 3 689 décès sont également à déplorer au cours de ces dernières 24 heures, sur un total de 215 542. Avec 7 millions d''infections répertoriées en avril, l''Inde se trouve à court d''oxygène médical, de médicaments et de lits d''hôpital. Dans une crise rejouée chaque jour, les vies de milliers d''Indiens sont en suspens, quand d''autres succombent, à l''image des bûchers funéraires hindous qui brûlent nuit et jour dans des crématoriums surchargés.'
,'Tonny Andriambololona','2020-05-02 13:10:55');

------------------------------------------------02/05/2021------------------------------------------------