#File: movies.sql

#Create table name movies

CREATE TABLE if not exists movies
(
	Id INT NOT NULL AUTO_INCREMENT, 
	Title VARCHAR(20) NOT NULL,	
	Director VARCHAR(30),
	Genres VARCHAR(50) NOT NULL,
	Release_Date VARCHAR(30),
	Runtime	VARCHAR(10),
	Country	VARCHAR(20),
	Language VARCHAR(20),
	IMDB_Rating	VARCHAR(10),
	Storyline TEXT,
	Poster VARCHAR(50) NOT NULL,	
	PRIMARY KEY(Id)
);


#Add a number of records
INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('John Wick: Chapter 3 – Parabellum', 'Chad Stahelski', 'Action', '16 May 2019', '1hr 30min', 'US','English','6.8', 'Legendary hit man John Wick must fight his way out of New York when a $14 million contract on his life makes him the target of the world's top assassins.', 'img/movie/johnwick.jfif');

INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('The Girl in the Spider's Web', 'Fede Alvarez', 'Action, Crime, Drama', '9 November 2018 (USA)', ' 1h 57min', 'UK | Germany | Sweden | Canada | USA', 'Englsih','6.1', 'In Stockholm, Sweden, vigilante hacker Lisbeth Salander is hired by computer programmer Frans Balder to retrieve Firefall, a program capable of accessing the world's nuclear codes that he developed for the National Security Agency, as Balder believes it is too dangerous to exist. Lisbeth successfully retrieves Firefall from the NSA's servers, attracting the attention of agent Edwin Needham, but is unable to unlock it, and the program is later stolen from her by mercenaries led by Jan Holtser, who also attempt to kill Lisbeth.', 'img/movie/thegirl.jpg');

INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('Joker (2019)', ' Todd Phillips', 'Crime, Drama, Thriller', '4 October 2019 (USA)', ' 1h 40min', 'USA', 'English','6.8', 'A failed stand-up comedian is driven insane and becomes a psychopathic murderer.', 'img/movie/joker.png');

INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('Spider-Man: Far From Home', ' Jon Watts', 'Action, Adventure, Comedy ', '5 July 2019 (USA)', ' 1h 58min', 'USA', 'English','7.2', 'Our friendly neighborhood Super Hero decides to join his best friends Ned, MJ, and the rest of the gang on a European vacation. However, Peter's plan to leave super heroics behind for a few weeks are quickly scrapped when he begrudgingly agrees to help Nick Fury uncover the mystery of several elemental creature attacks, creating havoc across the continent.', 'img/movie/spiderman.jpg');

INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('Avatar', 'James Cameron', 'Action, Adventure, Fantasy', ' 18 December 2009 (USA)', ' 2h 42min', 'UK | USA', 'English | Spanish','7.8', 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge's intentions of driving off the native humanoid "Na'vi" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers intel for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na'vi people with the use of an "avatar" identity.', 'img/movie/Avatar.png');

INSERT INTO movies(Title, Director, Genres, Release_Date, Runtime, Country, Language, IMDB_Rating, Storyline, Poster)
VALUE('Race to Witch Mountain', 'Andy Fickman', 'Action, Adventure, Family', '  13 March 2009 (USA)', '  1h 38min ', 'USA', 'English','5.7', 'In Las Vegas, the regenerated ex-con Jack Bruno works as taxi driver. During an UFO Convention at Planet Hollywood, the skeptical Jack picks up Dr. Alex Friedman, who will present a scientific lecture in the event. Then he is pressed by two henchmen of his former boss, the criminal Wolff, that wants to talk to him, but Jack does not want to return to the crime life. Jack fights and gets rid of them; out of the blue, he finds two teenagers on the backseat of his cab. They tell that they are siblings, Sara and Seth, and they need to travel to a location outside Las Vegas in the middle of nowhere.', 'img/movie/Montanhr.png');






#End movies.sql