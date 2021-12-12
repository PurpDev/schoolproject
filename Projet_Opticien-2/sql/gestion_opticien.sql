drop database if exists gestion_opticien;
create database gestion_opticien;
use gestion_opticien;


create table Personne(
    idPersonne int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    primary key(idPersonne)
);

create table Client(
    idPersonne int(3) not null,
    age int(3),
    telephone varchar(50),
    primary key(idPersonne)
    foreign key(idPersonne) references Personne(idPersonne),
);

create table User(
    idPersonne int(3) not null,
    type_role enum("admin", "user"),
    idPersonne int(3) not null,
    primary key(idPersonne)
    foreign key(idPersonne) references Personne(idPersonne)
);

create table Technicien(
    idPersonne int(3) not null,
    diplome varchar(50),
    idPersonne int(3) not null,
    primary key(idPersonne)
    foreign key(idPersonne) references Personne(idPersonne)
);


create table Magasin(
    idMagasin int(3) not null auto_increment,
    nom varchar(50),
    adresse varchar(50),
    telephone varchar(50),
    email varchar(50),
    primary key(idMagasin)
);

create table Monture(
    idMonture int(3) not null auto_increment,
    couleur varchar(50),
    forme varchar(50),
    matiere varchar(50),
    foreign key(idMonture) references Monture(idMonture) 
);

create table Verre(
    idVerre int(3) not null auto_increment,
    vision varchar(50),
    couleur varchar(50),
    matiere varchar(50),
    laboratoire varchar(50),
    primary key(idVerre)
);

create table Lunette(
    idLunette int(3) not null auto_increment,
    libelle varchar(50),
    genre enum('homme', 'femme', 'enfant'),
    marque varchar(50),
    prix float(4),
    quantite int(4),
    disponibilite text(20),
    idTechnicien int(3) not null,
    idVerre int(3) not null,
    idMonture int(3) not null,
    primary key(idLunette),
    foreign key(idTechnicien) references Technicien(idTechnicien),
    foreign key(idVerre) references Verre(idVerre),
    foreign key(idMonture) references Monture(idMonture) 
);


create table RDV(
    idRDV int(3) not null auto_increment,
    dateRDV date not null,
    heuredebut time, 
    heurefin time,
    idTechnicien int(3) not null,
    idClient int(3) not null,
    idMagasin int(3) not null,
    primary key(idRDV),
    foreign key(idTechnicien) references Technicien(idTechnicien),
    foreign key(idClient) references Client(idClient), 
    foreign key(idMagasin) references Magasin(idMagasin)
);

create table Reservation(
    idReservation int(3) not null auto_increment,
    horaire time,
    idClient int(3) not null,
    idLunette int(3) not null,
    primary key(idReservation),
    foreign key(idClient) references Client(idClient),
    foreign key(idLunette) references Lunette(idLunette)

);


delimiter $
create procedure insertTech(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_diplome varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email;

    insert into Technicien values(p_idPersonne, p_diplome);
end $
delimiter;

call insertTech("OPPS", "John","12 rue de la Roserais", "op@gmail.com", "licence");
call insertTech("WIND", "Stella","10 rue Montrouge", "ws@gmail.com", "bts");
call insertTech("YOSHIDA", "Sabrina","53 RUE Ferrerol", "ys@gmail.com", "master");
call insertTech("JAGGERJACK", "Bruno","63 rue des Tuileries" , "jb@gmail.com", "bac pro");
call insertTech("KONTE", "Anis","10 rue Mo", "ka@gmail.com", "licence");


delimiter $
create procedure insertClient(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), IN p_email varchar(50), IN p_age int(3), IN p_telephone varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email;

    insert into Client values(p_idPersonne, p_age, p_telephone);
end $
delimiter;

call insertClient('DEMBELE', 'Fabrice', '80 Faubourg Saint Honore', 'df@yahoo.fr', 24, '0105983905');
call insertClient('ZINDAYA', 'Claire', '80 Place de la Madelaine', 'zc@yahoo.fr', 20, '0139734728');
call insertClient('NEWGATE', 'Edouard', '3 Rue Edouard Branly', 'ne@yahoo.fr', 35, '0750628307');
call insertClient('MARIA', 'Bethany', '43 Place de Miremont', 'mb@hotmail.com', 29, '0158884621');
call insertClient('BOEDER', 'Alex', '24 Avenue Voltaire', 'ba@hotmail.com', 23, '0722223669');
call insertClient('HERCULES', 'Zack', '65 Rue du Palais', 'hz@hotmail.com', 50, '0749852063');



delimiter $
create procedure insertUser(IN p_nom varchar(50), IN p_prenom varchar(50),
IN p_adresse varchar(50), p_email varchar(50), p_role enum('admin', 'user') varchar(50))
begin
    declare p_idPersonne int(3);
    insert into Personne values (null, p_nom, p_prenom, p_adresse, p_email);

    select idPersonne into p_idPersonne from Personne
    where nom = p_nom and prenom = p_prenom and email = p_email;

    insert into User values(p_idPersonne, p_role);
end $
delimiter;
call insertUser("JOJO", "Giorno", "92 Rue de Villmonble", "jg@yahoo.fr", "admin");
call insertUser("BOLT", "Chochise", "70 Rue de Lyon", "bc@yahoo.fr", "user");
call insertClient("SOULANEY", "Julia", " 41 Rue de Strasbourg", "sj@hotmail.com", "27", "0741256987", "user");
call insertClient("OUNOLU", "Thiago", "59 Rue des Coudriers ", "ot@hotmail.com", "15", "0147855521", "user");


insert into Verre values(null, 'myopie', 'transparent', 'mineral', 'varilux');
insert into Verre values(null, 'hypermetropie', 'noir', 'mineral', 'transition');
insert into Verre values(null, 'astigmatisme', 'transparent', 'mineral', 'eyezn');
insert into Verre values(null, 'presbytie', 'bleu uv', 'organique', 'varilux');
insert into Verre values(null, 'anti-reflet', 'bleu uv', 'mineral', 'varilux');

insert into Monture values(null, 'bleu metal', 'arrondi', 'acier inox'),
(null, 'marron', 'carre', 'corne'), (null, 'bleu azur', 'ronde', 'optyl')
(null, 'gris', 'rond', 'titane'), (null,'noir', 'rond', 'bois'), (null,'noir','carre', 'optyl');


insert into Lunette values(null, 'lunette de vue', 'femme', 'gucci', 255, 15, 'magasin', 1, 1, 1);
insert into Lunette values(null, 'lunette de vue', 'homme', 'rayban', 100, 10, 'magasin', 1, 2, 2);
insert into Lunette values(null, 'lunette de soleil', 'homme', 'prada', 120, 8, 'magasin', 1, 3, 3);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 50, 10, 'magasin', 2, 4, 4);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 40, 22, 'ligne', 2, 5, 5);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 60, 5, 'magasin', 2, 1, 3);
insert into Lunette values(null, 'lunette de vue', 'enfant', 'afflelou', 55, 20, 'magasin', 2, 4, 5);

insert into Magasin values(null, 'Optic2000', '135 avenue du General de Gaule','opticien.optic2000.com','0143242113');
insert into Magasin values(null, 'GrandOptical', 'Rosny sous bois','grand.optical.com','0148942154');
insert into Magasin values(null, 'Alain Afflelou', 'Champigny-sur-Marne','afflelou.com','0148812676');
insert into Magasin values(null, 'Alain Afflelou', 'Saint-Mende avenu General de Gaule','afflelou.com','0143983956');
insert into Magasin values(null, 'Optic2000', '48 avenue George Clemenceau ','opticien.optic2000.com','0143767490');


insert into RDV values(null, '2022-01-05', '15:30', '16:00', 1, 1, 1);
insert into RDV values(null, '2022-01-06', '14:30', '15:00', 2, 2, 2);
insert into RDV values(null, '2022-01-08', '12:30', '13:00', 3, 3, 3);
insert into RDV values(null, '2022-01-10', '13:30', '14:30', 4, 4, 4);
insert into RDV values(null, '2022-01-11', '16:30', '18:00', 5, 5, 5);