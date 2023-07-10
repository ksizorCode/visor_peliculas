# visor_peliculas
Ejemplo para clase de uso de método GET con PHP donde simulamos un pantallazo de Neflix


Necesita una Base de datos llamada "plataforma" y una tabla "peliculas"

'''
INSERT INTO peliculas (titulo, year, descripcion, foto, archivo, director, estrellas)
VALUES
('Pulp Fiction', 1994, 'Una película de Quentin Tarantino que entrelaza varias historias criminales en Los Ángeles. Violencia, humor negro y diálogos memorables se combinan en este clásico moderno.', 'pulpfiction.jpg', 'pulpfiction.mp4', 'Quentin Tarantino', 5),
('El Caballero de la Noche', 2008, 'El enigmático Joker desata el caos en Gotham City mientras Batman se enfrenta a sus propios demonios internos. Una película de superhéroes oscura y magistralmente interpretada.', 'caballeronoche.jpg', 'caballeronoche.mp4', 'Christopher Nolan', 5),
('El Club de la Lucha', 1999, 'Un hombre insomne y un carismático vendedor de jabón crean un club de pelea clandestino que evoluciona hacia algo mucho más peligroso. Una película que desafía las convenciones sociales.', 'clubdelalucha.jpg', 'clubdelalucha.mp4', 'David Fincher', 5),
('Forrest Gump', 1994, 'Forrest Gump, un hombre de inteligencia limitada pero con un corazón puro, atraviesa varias décadas de la historia de Estados Unidos, dejando su huella en cada evento importante.', 'forrestgump.jpg', 'forrestgump.mp4', 'Robert Zemeckis', 5),
('Origen', 2010, 'En un mundo donde se puede entrar en los sueños de las personas, un equipo de expertos en extracción de información se enfrenta a su desafío más peligroso: la implantación de una idea.', 'inception.jpg', 'inception.mp4', 'Christopher Nolan', 5),
('Cadena Perpetua', 1994, 'Basada en la novela de Stephen King, la película sigue la vida de un hombre condenado injustamente por un asesinato y su lucha por la redención en prisión.', 'cadenaperpetua.jpg', 'cadenaperpetua.mp4', 'Frank Darabont', 5),
('El Resplandor', 1980, 'Un escritor y su familia se mudan a un aislado hotel en las montañas para el cuidado del lugar durante el invierno. La soledad y la influencia maligna del hotel desencadenan la locura.', 'elresplandor.jpg', 'elresplandor.mp4', 'Stanley Kubrick', 5),
('V de Vendetta', 2005, 'En una sociedad distópica, un enmascarado revolucionario conocido como "V" busca derrocar al gobierno totalitario e inspirar a la gente a luchar por su libertad.', 'vendetta.jpg', 'vendetta.mp4', 'James McTeigue', 4),
('El Sexto Sentido', 1999, 'Un niño que puede ver y hablar con los muertos se encuentra bajo la tutela de un psicólogo infantil que intenta ayudarlo a superar sus miedos y descubrir la verdad.', 'sexto.jpg', 'sexto.mp4', 'M. Night Shyamalan', 4),
('Blade Runner', 1982, 'En un futuro distópico, un detective llamado Rick Deckard debe perseguir y "retirar" a replicantes rebeldes, androides casi indistinguibles de los humanos.', 'bladerunner.jpg', 'bladerunner.mp4', 'Ridley Scott', 4),
('La Naranja Mecánica', 1971, 'En una sociedad futurista violenta, un joven delincuente es sometido a un programa experimental para controlar su comportamiento antisocial, pero los resultados no son los esperados.', 'naranjamecanica.jpg', 'naranjamecanica.mp4', 'Stanley Kubrick', 4),
('Matrix', 1999, 'Un programador de computadoras descubre que el mundo en el que vive es una simulación creada por máquinas, y se une a un grupo de rebeldes para luchar contra ellas.', 'matrix.jpg', 'matrix.mp4', 'Lana Wachowski, Lilly Wachowski', 5),
('El Silencio de los Corderos', 1991, 'Una joven agente del FBI busca la ayuda de un asesino en serie encarcelado para atrapar a otro asesino en serie que está aterrorizando a la ciudad.', 'silenciocorderos.jpg', 'silenciocorderos.mp4', 'Jonathan Demme', 5),
('El Señor de los Anillos: El Retorno del Rey', 2003, 'La épica conclusión de la trilogía basada en las novelas de J.R.R. Tolkien, en la que un grupo de seres de diferentes razas se unen para destruir un anillo que podría sumir al mundo en la oscuridad.', 'retornorey.jpg', 'retornorey.mp4', 'Peter Jackson', 5),
('Interestelar', 2014, 'Un grupo de exploradores espaciales se embarca en un viaje interestelar para encontrar un nuevo hogar para la humanidad mientras enfrentan peligros desconocidos y desafían las leyes de la física.', 'interestelar.jpg', 'interestelar.mp4', 'Christopher Nolan', 5),
('El Pianista', 2002, 'Basada en la historia real del pianista polaco Władysław Szpilman durante la ocupación nazi en Varsovia, la película retrata su lucha por sobrevivir y mantener su humanidad en medio del horror.', 'pianista.jpg', 'pianista.mp4', 'Roman Polanski', 5);

'''
