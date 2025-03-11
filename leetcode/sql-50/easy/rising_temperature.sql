/*
    Table: Weather

    +---------------+---------+
    | Column Name   | Type    |
    +---------------+---------+
    | id            | int     |
    | recordDate    | date    |
    | temperature   | int     |
    +---------------+---------+
    id is the column with unique values for this table.
    There are no different rows with the same recordDate.
    This table contains information about the temperature on a certain day.
    

    Write a solution to find all dates' id with higher temperatures compared to its previous dates (yesterday).

    Return the result table in any order.
*/

SELECT t1.id
FROM Weather t1, Weather t2
WHERE DATEDIFF(t1.recordDate, t2.recordDate) = 1 AND t1.temperature > t2.temperature;