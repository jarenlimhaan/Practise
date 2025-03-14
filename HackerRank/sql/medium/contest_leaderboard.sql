/*
You did such a great job helping Julia with her last coding contest challenge that she wants you to work on this one, too!

The total score of a hacker is the sum of their maximum scores for all of the challenges. Write a query to print the hacker_id, name, and total score of the hackers ordered by the descending score. If more than one hacker achieved the same total score, then sort the result by ascending hacker_id. Exclude all hackers with a total score of  from your result.
*/
SELECT X.HACKER_ID, X.NAME, SUM(X.SCORE) AS TOTAL_SCORE
FROM (
    SELECT H.HACKER_ID, H.NAME, MAX(SCORE) AS SCORE
    FROM HACKERS H
    LEFT JOIN SUBMISSIONS S ON H.HACKER_ID = S.HACKER_ID
    GROUP BY H.HACKER_ID, H.NAME, S.CHALLENGE_ID
) X
GROUP BY X.HACKER_ID, X.NAME
HAVING SUM(X.SCORE) > 0
ORDER BY TOTAL_SCORE DESC, X.HACKER_ID ASC;