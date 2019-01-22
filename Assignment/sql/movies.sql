#File: movies.sql

#Create table name movies

CREATE TABLE if not exists movies
(
	Id INT NOT NULL AUTO_INCREMENT, 
	Title VARCHAR(30) NOT NULL,	
	Director VARCHAR(30),
	Stars VARCHAR(100),
	Genres VARCHAR(50) NOT NULL,
	Release_Date VARCHAR(30),
	Runtime	VARCHAR(10),
	Country	VARCHAR(20),
	Language VARCHAR(20),
	Filming_Locations VARCHAR(50),
	IMDB_Rating	VARCHAR(10),
	Storyline TEXT,
	Poster VARCHAR(50) NOT NULL,	
	PRIMARY KEY(Id)
);


#Add a number of records
INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUE('Alita: Battle Angel (2019)', 'Robert Rodriguez', 'Jennifer Connelly, Eiza González, Rosa Salazar', 'Action, Adventure, Sci-Fi', '14 February 2019 (USA)', '122 min', 'USA, Canada', 'English', 'Austin, Texas, USA', '', "Alita is a creation from an age of despair. Found by the mysterious Dr. Ido while trolling for cyborg parts, Alita becomes a lethal, dangerous being. She cannot remember who she is, or where she came from. But to Dr. Ido, the truth is all too clear. She is the one being who can break the cycle of death and destruction left behind from Tiphares. But to accomplish her true purpose, she must fight and kill. And that is where Alita's true significance comes to bear. She is an angel from heaven. She is an angel of death.", 'img/movie/Alita-Battle-Angel-2019.jpeg');

INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUE('A Star Is Born (2018)', 'Bradley Cooper', 'Lady Gaga, Bradley Cooper, Sam Elliott', 'Drama, Music, Romance', '5 October 2018 (USA)', '137 min', 'USA', 'English', 'Los Angeles, California, USA', '8.5', "Seasoned musician Jackson Maine (Bradley Cooper) discovers-and falls in love with-struggling artist Ally (Gaga). She has just about given up on her dream to make it big as a singer - until Jack coaxes her into the spotlight. But even as Ally's career takes off, the personal side of their relationship is breaking down, as Jack fights an ongoing battle with his own internal demons.", 'img/movie/A-Star-Is-Born-2018.jpg');

INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUE('Aquaman (2018)', 'James Wan', 'Jason Momoa, Amber Heard, Willem Dafoe', 'Action, Adventure, Fantasy, Sci-Fi', '21 December 2018 (USA)', '143 min', 'Australia, USA', 'English', 'Village Roadshow Studios, Oxenford, Queensland, Australia', '8.3', "Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.", 'img/movie/Aquaman-2018.jpeg');

INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUE('Avengers: Infinity War (2018)', 'Anthony Russo, Joe Russo', 'Scarlett Johansson, Robert Downey Jr., Tom Holland, Paul Rudd, Benedict Cumberbatch, Vin Diesel , Jeremy Renner, Mark Ruffalo, Chris Evans', 'Action, Adventure, Fantasy, Sci-Fi', '27 April 2018 (USA)', 'Comming', 'USA', 'English', 'Pinewood Atlanta Studios, 461 Sandy Creek Road, Fayetteville, Georgia, USA', '8.3', "As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.", 'img/movie/Avengers-Infinity-War-2018.jpg');

INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUE('Bohemian Rhapsody (2018)', 'Bryan Singer', 'Rami Malek, Lucy Boynton, Gwilym Lee', 'Biography, Drama, Music', '2 November 2018 (USA)', '134 min', 'USA', 'English', 'Weybridge, Surrey, England, UK', '	8.4', "Bohemian Rhapsody is a foot-stomping celebration of Queen, their music and their extraordinary lead singer Freddie Mercury. Freddie defied stereotypes and shattered convention to become one of the most beloved entertainers on the planet. The film traces the meteoric rise of the band through their iconic songs and revolutionary sound. They reach unparalleled success, but in an unexpected turn Freddie, surrounded by darker influences, shuns Queen in pursuit of his solo career. Having suffered greatly without the collaboration of Queen, Freddie manages to reunite with his bandmates just in time for Live Aid. While bravely facing a recent AIDS diagnosis, Freddie leads the band in one of the greatest performances in the history of rock music. Queen cements a legacy that continues to inspire outsiders, dreamers and music lovers to this day.", 'img/movie/Bohemian-Rhapsody.jpeg');

INSERT INTO movies(Title, Director, Stars, Genres, Release_Date, Runtime, Country, Language, Filming_Locations, IMDB_Rating, Storyline, Poster)
VALUES('Captain Marvel (2019)', 'Anna Boden, Ryan Fleck', 'Brie Larson, Gemma Chan, Jude Law', 'Action, Adventure, Sci-Fi', '8 March 2019 (USA)', '150 min', 'USA', 'English', 'Los Angeles, California, USA', '', "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.", 'img/movie/Captain-Marvel-2019.jpeg');



#End movies.sql