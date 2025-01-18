/*
Euclidean Distance
*/
SELECT ROUND(SQRT(
    POWER(ABS(MAX(long_w) - MIN(long_w)), 2) + 
    POWER(ABS(MAX(lat_n) - MIN(lat_n)), 2)
), 4) AS distance
FROM station;
