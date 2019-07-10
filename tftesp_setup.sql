drop table if exists bufos cascade;
drop table if exists campeones_clases cascade;
drop table if exists clases cascade;
drop table if exists campeones cascade;

create table campeones(
    id int unsigned not null auto_increment,
    nombre varchar(30) not null unique,
    precio tinyint unsigned not null,
    vida smallint unsigned not null,
    armadura smallint unsigned not null,
    rm smallint unsigned not null,
    dano smallint unsigned not null,
    vda decimal(3,2) not null,
    dps smallint unsigned not null,
    rango tinyint unsigned not null,
    tier tinyint unsigned not null,
    primary key(id)
    );
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Aurelion Sol', 4, 600, 20, 20, 40, 0.6, 24, 3, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Cho\'gath', 4, 1100, 20, 20, 70, 0.55, 39, 1, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Draven', 4, 700, 25, 20, 75, 0.65, 75, 3, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Gnar', 4, 850, 35, 20, 45, 0.7, 31, 2, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Sejuani', 4, 850, 35, 25, 45, 0.55, 25, 1, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Swain', 5, 850, 25, 20, 65, 0.65, 42, 2, 1);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Akali', 4, 700, 20, 20, 70, 0.75, 53, 3, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Anivia', 5, 650, 20, 20, 40, 0.6, 24, 4, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Brand', 4, 700, 25, 20, 60, 0.6, 36, 3, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Leona', 4, 750, 55, 20, 45, 0.55, 25, 1, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Miss Fortune', 5, 650, 20, 20, 75, 0.85, 64, 3, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Nidalee', 1, 500, 20, 20, 50, 0.65, 33, 3, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Pyke', 2, 600, 25, 20, 60, 0.6, 36, 1, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Yasuo', 2, 700, 35, 20, 65, 1, 65, 1, 2);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Ashe', 3, 550, 20, 20, 60, 0.7, 42, 5, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Ahri', 2, 450, 20, 20, 50, 0.55, 28, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Darius', 1, 600, 25, 20, 50, 0.5, 25, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Elise', 2, 500, 20, 20, 40, 0.6, 24, 2, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Garen', 1, 600, 35, 20, 55, 0.55, 30, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Graves', 1, 500, 20, 20, 55, 0.5, 28, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Karthus', 5, 850, 25, 20, 65, 0.65, 42, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Kassadin', 1, 550, 25, 20, 45, 0.65, 29, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Kayle', 5, 800, 35, 20, 60, 1.1, 66, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Kennen', 3, 550, 20, 20, 70, 0.65, 36, 2, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Kha\'Zix', 1, 500, 20, 20, 50, 0.6, 30, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Kindred', 4, 600, 20, 20, 55, 0.65, 36, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Lissandra', 2, 450, 20, 20, 40, 0.6, 24, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Lulu', 2, 500, 25, 20, 50, 0.6, 30, 2, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Morgana', 3, 650, 20, 20, 50, 0.6, 30, 2, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Shyvana', 3, 550, 20, 20, 50, 0.65, 33, 4, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Tristana', 1, 500, 20, 20, 50, 0.7, 35, 4, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Vayne', 1, 550, 25, 20, 45, 0.6, 27, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Veigar', 3, 450, 20, 20, 45, 0.55, 25, 3, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Volibear', 3, 650, 35, 20, 75, 0.55, 38, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Warwick', 1, 600, 30, 20, 50, 0.6, 30, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Zed', 2, 500, 25, 20, 60, 0.65, 39, 1, 3);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Aatrox', 3, 750, 25, 20, 65, 0.65, 42, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Blitzcrank', 2, 600, 35, 20, 50, 0.5, 25, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Braum', 2, 750, 25, 20, 40, 0.6, 24, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Katarina', 3, 450, 20, 20, 50, 0.6, 30, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Lucian', 2, 600, 25, 20, 65, 0.65, 42, 3, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Rengar', 3, 550, 20, 20, 55, 0.55, 30, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Shen', 2, 650, 30, 20, 65, 0.6, 39, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Varus', 2, 500, 25, 20, 50, 0.7, 35, 1, 4);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Evelynn', 3, 550, 20, 20, 50, 0.6, 50, 1, 5);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Fiora', 1, 400, 25, 20, 40, 0.7, 28, 1, 5);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Gangplank', 3, 600, 20, 20, 55, 0.6, 33, 1, 5);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Mordekaiser', 1, 500, 35, 20, 50, 0.5, 25, 1, 5);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Poppy', 3, 800, 30, 20, 50, 0.5, 25, 1, 5);
insert into campeones(nombre, precio, vida, armadura, rm, dano, vda, dps, rango, tier) values ('Rek\'Sai', 2, 650, 25, 20, 40, 0.65, 26, 1, 5);

create table clases(
    id int unsigned not null auto_increment,
    nombre varchar(30) not null unique,
	descripcion varchar (300),
    primary key (id)
);

insert into clases (nombre, descripcion) values ("Luchador","Los luchadores reciben un bonus de vida máxima");
insert into clases (nombre, descripcion) values ("Espadachín","Los espadachines tienen un 35% de probabilidad de realizar golpes adicionales en cada ataque");
insert into clases (nombre, descripcion) values ("Asesino","Los asesinos saltan al enemigo más lejano al comienzo del combate y hacen daño crítico adicional");
insert into clases (nombre, descripcion) values ("Cazador","Los cazadores tienen cierta probabilidad de doblar su velocidad de ataque durante 3 segundos");
insert into clases (nombre, descripcion) values ("Elementalista","Los elementalistas ganan el doble de maná por ataques");
insert into clases (nombre, descripcion) values ("Caballero","Los caballeros bloquean daño de ataques básicos");
insert into clases (nombre, descripcion) values ("Cambiaformas","Los cambiaformas ganan un bonus de vida máxima cuando se transforman");
insert into clases (nombre, descripcion) values ("Hechicero","Los hechiceros ganan el doble de maná con ataques básicos y los aliados tienen poder de habilidad incrementado");
insert into clases (nombre, descripcion) values ("Protector",null);
insert into clases (nombre, descripcion) values ("Pistolero","Después de atacar, los pistoleros tienen 50% de probabilidad de realizar ataques adicionales");
insert into clases (nombre, descripcion) values ("Noble","Los nobles ganan + 100 de armadura y se curan 35 con cada golpe.");
insert into clases (nombre, descripcion) values ("Demonio","Los ataques de demonios tienen probabilidad de quemar el maná del enemigo y hacer ese daño real");
insert into clases (nombre, descripcion) values ("Imperial","Los imperiales inflingen el doble de daño");
insert into clases (nombre, descripcion) values ("Glacial","Con cada ataque, los glaciales tienen una probabilidad de aturdir durante 2 segundos");
insert into clases (nombre, descripcion) values ("Ninja","Los ninjas ganan un porcentaje de daño de ataque");
insert into clases (nombre, descripcion) values ("Pirata",null);
insert into clases (nombre, descripcion) values ("Yordle","Los ataques contra los yordles aliados tienen probabilidad de fallar");
insert into clases (nombre, descripcion) values ("Salvaje","Los ataques generan cargas de Furia(hasta 5). Cada carga de Furia otorga 7% velocidad de ataque");
insert into clases (nombre, descripcion) values ("Del Vacío",null);
insert into clases (nombre, descripcion) values ("Fantasma",null);
insert into clases (nombre, descripcion) values ("Robot",null);
insert into clases (nombre, descripcion) values ("Dragón",null);
insert into clases (nombre, descripcion) values ("Exiliado",null);

create table campeones_clases (
    id_campeon int unsigned not null,
    id_clase int unsigned not null,
    foreign key (id_campeon) references campeones(id),
    foreign key (id_clase) references clases(id),
    primary key (id_campeon, id_clase)
);

insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Aurelion Sol"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Aurelion Sol"), (select id from clases where nombre = "Dragón"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Cho\'gath"), (select id from clases where nombre = "Luchador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Cho\'gath"), (select id from clases where nombre = "Del Vacío"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Draven"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Draven"), (select id from clases where nombre = "Imperial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gnar"), (select id from clases where nombre = "Cambiaformas"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gnar"), (select id from clases where nombre = "Salvaje"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gnar"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Sejuani"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Sejuani"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Swain"), (select id from clases where nombre = "Cambiaformas"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Swain"), (select id from clases where nombre = "Imperial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Swain"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Akali"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Akali"), (select id from clases where nombre = "Ninja"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Anivia"), (select id from clases where nombre = "Elementalista"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Anivia"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Brand"), (select id from clases where nombre = "Elementalista"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Brand"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Leona"), (select id from clases where nombre = "Protector"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Leona"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Miss Fortune"), (select id from clases where nombre = "Pistolero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Miss Fortune"), (select id from clases where nombre = "Pirata"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Nidalee"), (select id from clases where nombre = "Cambiaformas"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Nidalee"), (select id from clases where nombre = "Salvaje"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Pyke"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Pyke"), (select id from clases where nombre = "Pirata"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Yasuo"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Yasuo"), (select id from clases where nombre = "Exiliado"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Ashe"), (select id from clases where nombre = "Cazador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Ashe"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Ahri"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Ahri"), (select id from clases where nombre = "Salvaje"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Darius"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Darius"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Elise"), (select id from clases where nombre = "Cambiaformas"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Elise"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Garen"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Garen"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Graves"), (select id from clases where nombre = "Pistolero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Graves"), (select id from clases where nombre = "Pirata"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Karthus"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Karthus"), (select id from clases where nombre = "Fantasma"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kassadin"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kassadin"), (select id from clases where nombre = "Del Vacío"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kayle"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kayle"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kennen"), (select id from clases where nombre = "Elementalista"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kennen"), (select id from clases where nombre = "Ninja"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kennen"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kha\'Zix"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kha\'Zix"), (select id from clases where nombre = "Del Vacío"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kindred"), (select id from clases where nombre = "Cazador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Kindred"), (select id from clases where nombre = "Fantasma"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lissandra"), (select id from clases where nombre = "Elementalista"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lissandra"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lulu"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lulu"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Morgana"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Morgana"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Shyvana"), (select id from clases where nombre = "Cambiaformas"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Shyvana"), (select id from clases where nombre = "Dragón"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Tristana"), (select id from clases where nombre = "Pistolero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Tristana"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Vayne"), (select id from clases where nombre = "Cazador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Vayne"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Veigar"), (select id from clases where nombre = "Hechicero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Veigar"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Volibear"), (select id from clases where nombre = "Luchador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Volibear"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Warwick"), (select id from clases where nombre = "Luchador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Warwick"), (select id from clases where nombre = "Salvaje"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Zed"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Zed"), (select id from clases where nombre = "Ninja"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Aatrox"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Aatrox"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Blitzcrank"), (select id from clases where nombre = "Luchador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Blitzcrank"), (select id from clases where nombre = "Robot"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Braum"), (select id from clases where nombre = "Protector"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Braum"), (select id from clases where nombre = "Glacial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Katarina"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Katarina"), (select id from clases where nombre = "Imperial"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lucian"), (select id from clases where nombre = "Pistolero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Lucian"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Rengar"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Rengar"), (select id from clases where nombre = "Salvaje"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Shen"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Shen"), (select id from clases where nombre = "Ninja"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Varus"), (select id from clases where nombre = "Cazador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Varus"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Evelynn"), (select id from clases where nombre = "Asesino"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Evelynn"), (select id from clases where nombre = "Demonio"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Fiora"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Fiora"), (select id from clases where nombre = "Noble"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gangplank"), (select id from clases where nombre = "Espadachín"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gangplank"), (select id from clases where nombre = "Pistolero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Gangplank"), (select id from clases where nombre = "Pirata"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Mordekaiser"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Mordekaiser"), (select id from clases where nombre = "Fantasma"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Poppy"), (select id from clases where nombre = "Caballero"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Poppy"), (select id from clases where nombre = "Yordle"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Rek\'Sai"), (select id from clases where nombre = "Luchador"));
insert into campeones_clases (id_campeon, id_clase) values ((select id from campeones where nombre = "Rek\'Sai"), (select id from clases where nombre = "Del Vacío"));

create table bufos (
    id int unsigned not null auto_increment,
    id_clase int unsigned not null,
    num_campeones tinyint unsigned not null,
    descripcion varchar(100) not null,
    foreign key (id_clase) references clases(id),
    primary key (id)
);
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Luchador"),2,"+300 hp");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Luchador"),4,"+700 hp");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Espadachín"),3,"Un golpe adicional");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Espadachín"),6,"Dos golpes adicionales");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Asesino"),3,"+150% de daño en golpes críticos");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Asesino"),6,"+350% de daño en golpes críticos");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Cazador"),2,"25% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Cazador"),4,"65% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Elementalista"),3,"Al comienzo del combate, invoca un elementalista");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Caballero"),2,"20 de daño básico bloqueado");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Caballero"),4,"40 de daño básico bloqueado");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Caballero"),6,"80 de daño básico bloqueado");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Cambiaformas"),3,"+100% bonus de vida máxima");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Hechicero"),3,"+35% poder de habilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Hechicero"),6,"+100% poder de habilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Protector"),2,"Al comienzo del combate, todos los protectores y aliados cercanos reciben +30 de armadura");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Pistolero"),2,"Ataca a un enemigo aleatorio");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Pistolero"),6,"Ataca a todos los enemigos en rango");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Noble"),3,"Un aliado aleatorio");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Noble"),6,"Todos los aliados");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Demonio"),2,"40% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Demonio"),4,"60% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Demonio"),6,"80% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Imperial"),2,"Un imperial aleatorio");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Imperial"),4,"Todos los imperiales");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Glacial"),2,"20% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Glacial"),4,"30% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Glacial"),6,"45% de probabilidad");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Ninja"),1,"Un ninja obtiene +40% de daño");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Ninja"),4,"Todos los ninjas obtienes  +60% de daño");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Pirata"),3,"Gana hasta 4 de oro adicional despues de un combate contra otro jugador");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Yordle"),3,"25% de probabilidad de fallar");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Yordle"),6,"60% de probabilidad de fallar");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Salvaje"),2,"Solo los salvajes aliados");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Salvaje"),4,"Todos los aliados");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Del Vacío"),3,"Los ataques básicos de tu equipo ignoran el 50% de la armadura enemiga");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Fantasma"),2,"Maldice a un enemigo aleatorio al principio del combate dejando su vida a 100");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Robot"),1,"Los robots comienzan el combate con todo el maná");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Dragón"),2,"Los dragones son inmunes al daño mágico");
insert into bufos (id_clase, num_campeones, descripcion) values ((select id from clases where nombre = "Exiliado"),1,"Si no tiene aliados adyacentes, gana un escudo igual al 100% de su vida");



drop table if exists objetos_fusion cascade;
drop table if exists objetos cascade;

create table objetos (
    id int unsigned not null auto_increment,
    nombre varchar(40) not null unique,
	descripcion varchar(100),
    primary key (id)
);

insert into objetos (nombre,descripcion) values('Espadón','+20 daño de ataque');
insert into objetos (nombre,descripcion) values('Cinturón de gigante','+200 puntos de vida');
insert into objetos (nombre,descripcion) values('Cota de malla','+20 armadura');
insert into objetos (nombre,descripcion) values('Capa de negatrones','+20 resistencia mágica');
insert into objetos (nombre,descripcion) values('Arco curvo','+15% velocidad de ataque');
insert into objetos (nombre,descripcion) values('Vara innecesariamente grande','+20% daño de habilidad');
insert into objetos (nombre,descripcion) values('Lágrima de la diosa','+20 maná inicial');
insert into objetos (nombre,descripcion) values('Espátula','Debe hacer algo...');
insert into objetos (nombre,descripcion) values('Filo infinito','+100% de daño de golpe crítico');
insert into objetos (nombre,descripcion) values('Sable-pistola hextech','Cura un 25% del daño inflingido');
insert into objetos (nombre,descripcion) values('Ángel de la guarda','Al morir, revive con 500 puntos de vida');
insert into objetos (nombre,descripcion) values('Shojin','Tras realizar una habilidad, +15% de maná por ataque');
insert into objetos (nombre,descripcion) values('Espada de los dioses','+5% cada segundo de obtener 100% de crítico');
insert into objetos (nombre,descripcion) values('Filo fantasmal de Yoummuu','El portador también es asesino');
insert into objetos (nombre,descripcion) values('Yuumi','El portador también es hechizero');
insert into objetos (nombre,descripcion) values('Oscuro','El portador también es demonio');
insert into objetos (nombre,descripcion) values('Hoja de pupilo','Los ataque básicos tienen probabilidad de encoger al objetivo(-1 estrella)');
insert into objetos (nombre,descripcion) values('Garra de dragón','+83% de resistencia al daño mágico');
insert into objetos (nombre,descripcion) values('Sanguinaria','Cura un 50% del daño infligido por ataques básicos');
insert into objetos (nombre,descripcion) values('Fuerza de la naturaleza','El portador no cuenta para el recuento de unidades(+1 hueco unidad)');
insert into objetos (nombre,descripcion) values('Corazón de hielo','-20% velocidad de ataque a enemigos adyacentes');
insert into objetos (nombre,descripcion) values('Hoja de furia de Guinsoo','Otorga +5% velocidad de ataque con cada ataque básico');
insert into objetos (nombre,descripcion) values('Silencio','Los ataque básicos tienen alta probabilidad de silenciar al objetivo');
insert into objetos (nombre,descripcion) values('Chispa iónica','Los enemigos reciben 200 de daño mágico cada vez que lanzan una habilidad');
insert into objetos (nombre,descripcion) values('Promesa del caballero','El portador también es caballero');
insert into objetos (nombre,descripcion) values('Medallón de los Solari de hierro','Al comiezo del combate, los aliados adyacentes obtienes un escudo de 200');
insert into objetos (nombre,descripcion) values('Eco de Luden','La habilidad especial inflige 200 de daño mágico a todos los enemigos adyacentes');
insert into objetos (nombre,descripcion) values('Morellonomicon','Los hechizos infligen heridas graves e impiden la cura');
insert into objetos (nombre,descripcion) values('Bailarín espectral','Evade todos los golpes críticos');
insert into objetos (nombre,descripcion) values('Sombrero mortal de Rabadón','Aumenta el poder de habilidad en un 50%');
insert into objetos (nombre,descripcion) values('Cañon de fuego rápido','Duplica el alcance de los ataques básicos y éstos no pueden fallar');
insert into objetos (nombre,descripcion) values('Bufo rojo','Los ataque queman al objetivo inflinguiendo 2,5% de la vida máxima y éste no se pueden curar');
insert into objetos (nombre,descripcion) values('Redención','Al morir, cura 1000 puntos de vida a los aliados');
insert into objetos (nombre,descripcion) values('Huracan de Runaan','Los ataques básicos golpean a dos objetivos adicionales inflingiendo un 50% de daño');
insert into objetos (nombre,descripcion) values('Abrazo del serafín','Otorga 20 de maná tras lanzar la habilidad');
insert into objetos (nombre,descripcion) values('Puñal de Statikk','Cada tercer ataque inflinge 100 de daño mágico al objetivo');
insert into objetos (nombre,descripcion) values('Rompeespadas','Los ataque básicos tienen probabilidad de desarmar al enemigo');
insert into objetos (nombre,descripcion) values('Malla de espinas','Refleja un 35% del daño recibido por ataque básicos');
insert into objetos (nombre,descripcion) values('Hidra titánica','Daño adicional por salpicadura del 10% de la vida máxima');
insert into objetos (nombre,descripcion) values('Armadura de Warmog','Regenera un 5% de vida por segundo');
insert into objetos (nombre,descripcion) values('Heraldo de Zeke','Los aliados de alrededor ganar un 10% de velocidad de ataque');
insert into objetos (nombre,descripcion) values('Céfiro','Al incio del combate levanta a un enemigo 5 segundos');
insert into objetos (nombre,descripcion) values('Hoja del rey','El portator también es espadachín');
insert into objetos (nombre,descripcion) values('Mazo helado','El portator también es glacial');


create table objetos_fusion (
	id_objeto_final int unsigned not null,
    id_objeto_1 int unsigned not null,
    id_objeto_2 int unsigned not null,
    foreign key (id_objeto_final) references objetos(id),
    foreign key (id_objeto_1) references objetos(id),
    foreign key (id_objeto_2) references objetos(id),
    primary key (id_objeto_final,id_objeto_1, id_objeto_2)
);

insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Filo infinito"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Sable-pistola hextech"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Ángel de la guarda"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Shojin"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Espada de los dioses"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Filo fantasmal de Yoummuu"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Sanguinaria"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Heraldo de Zeke"),(select id from objetos where nombre = "Espadón"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Heraldo de Zeke"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Morellonomicon"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Bufo rojo"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Redención"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hidra titánica"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Mazo helado"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Céfiro"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Armadura de Warmog"),(select id from objetos where nombre = "Cinturón de gigante"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Ángel de la guarda"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Medallón de los Solari de hierro"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Malla de espinas"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Corazón de hielo"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Bailarín espectral"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Promesa del caballero"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Rompeespadas"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Bufo rojo"),(select id from objetos where nombre = "Cota de malla"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Sanguinaria"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Chispa iónica"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Rompeespadas"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Silencio"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja de pupilo"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Huracán de Runaan"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Garra de dragón"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Céfiro"),(select id from objetos where nombre = "Capa de negatrones"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Espada de los dioses"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja de furia de Guinsoo"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Bailarín espectral"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Puñal de Statikk"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Cañon de fuego rápido"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja del rey"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja de pupilo"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hidra titánica"),(select id from objetos where nombre = "Arco curvo"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Sable-pistola hextech"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Sombrero mortal de Rabadon"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Medallón de los Solari de hierro"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Eco de Luden"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja de furia de Guinsoo"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Yuumi"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Chispa iónica"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Morellonomicon"),(select id from objetos where nombre = "Vara innecesariamente grande"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Shojin"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Eco de Luden"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Corazón de hielo"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Abrazo del serafín"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Puñal de Statikk"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Oscuro"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Silencio"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Redención"),(select id from objetos where nombre = "Lágrima de la diosa"),(select id from objetos where nombre = "Cinturón de gigante"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Filo fantasmal de Yoummuu"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Espadón"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Yuumi"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Vara innecesariamente grande"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Promesa del caballero"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Cota de malla"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Oscuro"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Lágrima de la diosa"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Hoja del rey"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Arco curvo"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Fuerza de la naturaleza"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Espátula"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Huracán de Runaan"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Capa de negatrones"));
insert into objetos_fusion (id_objeto_final, id_objeto_1,id_objeto_2) values ((select id from objetos where nombre = "Mazo helado"),(select id from objetos where nombre = "Espátula"),(select id from objetos where nombre = "Cinturón de gigante"));

drop table if exists noticias cascade;
create table noticias (
	id int unsigned not null auto_increment,
    slug varchar (20) not null unique,
    foto varchar(20) not null,
    tipo varchar (30) not null,
    titular varchar(30) not null,
    noticia varchar(1000) not null,
    fecha date,
    primary key (id)
);
