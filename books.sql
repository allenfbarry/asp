CREATE DATABASE IF NOT EXISTS `mybooks` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mybooks`;

 CREATE TABLE IF NOT EXISTS authors(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
 );


CREATE TABLE IF NOT EXISTS books(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    author_id INT NOT NULL,
    year_published INT NOT NULL,
    preface VARCHAR(255),
    cover_image VARCHAR(255),
    FOREIGN KEY (author_id) REFERENCES authors(id)
 );

INSERT INTO authors(name) VALUES
('Frank Herbert'),      
('J.K.Rowling'),        
('George R.R. Martin'),  
('Anthony Doerr'),       
('George Orwell'),       
('Arthur Hailey'),       
('Ernest Cline'),        
('Gillian Flynn'),       
('Dan Brown'),           
('Mary Shelley'),        
('Shirley Jackson'),     
('Stephen King');        



INSERT INTO books(id,name, genre, author_id, year_published,preface,cover_image) VALUES
(1,'Dune','Science Fiction',1,1965,"Set in the distant future amidst a feudal interstellar society, the novel tells the story of young Paul Atreides, whose noble family accepts the stewardship of the desert planet Arrakis.",'dune'),
(2,"Harry Potter and The Philosopher's Stone",'Fantasy',2,1997,'It follows the story of a young orphan boy named Harry Potter who discovers on his eleventh birthday that he is a wizard and has been accepted into Hogwarts School of Witchcraft and Wizardry.','harrypotter'),
(3,'A Game of Thrones','Fantasy',3,1996,'The story of multiple houses in war for the Iron Throne of the Seven Kingdoms.','agameofthrones'),
(4,'Cloud Cuckoo Land','Fantasy',4,2020,'The novel tells us the the stories of five people, from five different time periods whose lives are connected by an ancient manuscript.', 'cloudcuckooland'),
(5,'1984','Science Fiction',5,1949,'A dystopian novel that explores several themes like totalitarianism, government surveilance and psychological manipulation.','1984'),
(6,'The Evening News','Thriller',6,1990,'The book follows the story of an evening news journalist.','theeveningnews'),
(7,'Ready Player One','Science Fiction',7,2011,'The story is set in a dystopian future where people spend their lives in a virtual reality game world called the OASIS.','readyplayerone'),
(8,'Gone Girl','Thriller',8,2012,'A psychological thriller that explores the themes of marriage, deceit and betrayal.','gonegirl'),
(9,'Angels and Demons','Thriller',9,2000,'A thriller that follows symbologist Robert Langdon as he uncovers a plot by the Illuminati to destroy the Catholic Church.','angelsdemons'),
(10,'Frankenstein','Horror',10,1818,'A horror novel about a young scientist named Victor Frankenstein who creates a sapient creature in an unorthodox scientific experiment.','frankenstein'),
(11,'The Haunting of Hill House','Horror',11,1959,'A horror novel that follows four strangers who arrive at a mansion called Hill House to investigate its paranormal activity.','hauntingofhill'),
(12,'The Shining','Horror',12,1977,'A horror novel that follows Jack Torrance, an aspiring writer who takes a job as a winter caretaker of the Overlook Hotel, where he experiences supernatural occurrences.','shining'),
(13,'Dune Messiah','Science Fiction',1,1969,"A sequel to Dune that explores the consequences of Paul Atreides' rise to power as the Emperor of the known universe",'messiah'),
(14,'Children of Dune','Science Fiction',1,1976,'The third novel in the Dune series that follows the children of Paul Atreides as they fight for control of the empire.','childrenofdune'),
(15,'Fantastic Beasts and Where to Find Them','Fantasy',2,2001,'A companion book to the Harry Potter series that catalogs magical creatures in the wizarding world.','fantasticbeasts'),
(16,'Quidditch Through the Ages','Fantasy',2,2001,'Another companion book to the Harry Potter series that provides information about the history and rules of Quidditch.','quidditch'), 
(17,'A Clash of Kings','Fantasy',3,1998,'The second novel in the A Song of Ice and Fire series that follows the wars between the various houses of Westeros.','clashofkings'),
(18,'A Storm of Swords','Fantasy',3,2000,'The third novel in the A Song of Ice and Fire series that continues the story of the wars for the Iron Throne.','stormofswords'),
(19,'All the Light We Cannot See','Historical Fiction',4,2014,'The story of a blind French girl and a Germany boy during World War-II and how their paths eventually cross.','allthelight'),
(20,'About Grace','Fiction',4,2004,'A novel about a man named David Winkler who has a recurring dream about drowning and leaves his family in order to escape the fate he believes his dreams foretell.','aboutgrace'),
(21,'Animal Farm','Fiction',5,1945,'A political satire that tells the story of a group of farm animals who rebel against their human farmer and attempt to create a utopian society of their own.','animalfarm'),
(22,"A Clergyman's Daughter",'Fiction',5,1935,' A novel about a young woman named Dorothy Hare who falls into a fugue state and travels through various parts of England, experiencing different lives and identities.
','clergyman'),
(23,"Hotel",'Thriller',6,1968,'A thriller that follows a group of people who are trapped in a hotel during a severe snowstorm and are forced to confront their own fears and secrets.','hotel'),
(24,'Airport','Thriller',6,1971,"The story follows Mel Bakersfeld, the airport's general manager, as he deals with various issues such as a snowstorm, a bomb threat, a runway collision, and a passenger with a serious illness.",'airport'),
(25,'Ready Player Two','Science Fiction',7,2020,'The sequel to the popular science fiction novel Ready Player One, the book follows the protagonist Wade Watts as he faces a new challenge in the virtual world of the OASIS.','readyplayertwo'),
(26,'Armada','Science Fiction',7,2015,'Another science fiction novel by Ernest Cline, Armada tells the story of teenager Zack Lightman who discovers that the science fiction video games he loves may be a training program for defending Earth against an alien invasion.','armada'),
(27,'Sharp Objects','Thriller',8,2006,' A psychological thriller novel about a reporter named Camille Preaker who returns to her hometown to investigate the murder of two young girls.','sharpobjects'),
(28,'Dark Places','Thriller',8,2009,' Another psychological thriller by Gillian Flynn, the book follows Libby Day, the sole survivor of a brutal family massacre, as she tries to uncover the truth about what really happened that night.','darkplaces'),
(29,'The Da Vinci Code','Thriller',9,2003,'A thriller novel that centers around symbologist Robert Langdon, who becomes entangled in a conspiracy involving a secret society and the Holy Grail.','davinci'),
(30,'The Lost Symbol','Thriller',9,2009,'Another thriller novel featuring Robert Langdon, the book revolves around the search for a mysterious Masonic pyramid that holds a powerful secret.','thelostsymbol'),
(31,'The Last Man','Fiction',10,1826,'A post-apocalyptic science fiction novel that explores the aftermath of a global pandemic that wipes out most of humanity.','lastman'),
(32,'Mathilda','Fiction',10,1819,'A novella about a young woman named Mathilda who falls in love with her father and the devastating consequences that follow.','mathilda'),
(33,'The Sundial','Fiction',11,1958,'A Gothic novel about a dysfunctional family who gather in their ancestral home to await the end of the world, as predicted by the family matriarch.','sundial'),
(34,'We Have Always Lived in the Castle','Fiction',11,1962,'A suspenseful novel about two sisters, Merricat and Constance, who live in a secluded mansion with their uncle, and the arrival of a cousin who threatens to disrupt their peaceful existence.','castle'),
(35,'Carrie','Horror',12,1974,'A horror novel about a teenage girl named Carrie White who discovers she has telekinetic powers and uses them to seek revenge against those who have wronged her.','carrie'),
(36,'It','Horror',12,1986,'A horror novel about a group of friends who band together to defeat a supernatural entity that preys on children in their town. The story alternates between their childhood and adulthood.','it');