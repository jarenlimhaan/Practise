/*
Query the difference between the maximum and minimum populations in CITY.
*/
SELECT MAX(population) - MIN(population) AS minmax_difference 
FROM CITY;