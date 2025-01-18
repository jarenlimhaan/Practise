/*
Query the list of CITY names from STATION that do not start with vowels. Your result cannot contain duplicates.
*/
SELECT DISTINCT(city) 
FROM station 
WHERE city NOT LIKE 'A%'
  AND city NOT LIKE 'E%'
  AND city NOT LIKE 'I%'
  AND city NOT LIKE 'O%'
  AND city NOT LIKE 'U%';