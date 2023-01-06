-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Инга', 23, 'Москва');
INSERT INTO classmates VALUES (0002, 'Петр', 44, 'Гомель');
INSERT INTO classmates VALUES (0003, 'Иван', 15, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0004, 'Жанна', 36, 'Уфа');
INSERT INTO classmates VALUES (0005, 'Илья', 21, 'Ростов');
INSERT INTO classmates VALUES (0006, 'Наталья', 36, 'Москва');
INSERT INTO classmates VALUES (0007, 'Александр', 37, 'Тула');
INSERT INTO classmates VALUES (0008, 'Андрей', 43, 'Ярославль');
INSERT INTO classmates VALUES (0009, 'Алексей', 41, 'Владивосток');
INSERT INTO classmates VALUES (0010, 'Ольга', 27, 'Москва');
INSERT INTO classmates VALUES (0011, 'Ильнур', 50, 'Биробиджан');

-- fetch 
SELECT name FROM classmates WHERE address = 'Москва' AND age >= 18 AND age < 45;