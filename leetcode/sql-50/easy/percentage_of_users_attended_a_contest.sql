/*
    Table: Users

    +-------------+---------+
    | Column Name | Type    |
    +-------------+---------+
    | user_id     | int     |
    | user_name   | varchar |
    +-------------+---------+
    user_id is the primary key (column with unique values) for this table.
    Each row of this table contains the name and the id of a user.
    

    Table: Register

    +-------------+---------+
    | Column Name | Type    |
    +-------------+---------+
    | contest_id  | int     |
    | user_id     | int     |
    +-------------+---------+
    (contest_id, user_id) is the primary key (combination of columns with unique values) for this table.
    Each row of this table contains the id of a user and the contest they registered into.
    

    Write a solution to find the percentage of the users registered in each contest rounded to two decimals.
*/

SELECT 
    contest_id,
    ROUND(COUNT(user_id)/(SELECT COUNT(*) FROM Users) * 100, 2) AS percentage
FROM register 
GROUP BY contest_id
ORDER BY percentage DESC, contest_id ASC;