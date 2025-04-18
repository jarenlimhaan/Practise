/*
Table: Employees

+-------------+----------+
| Column Name | Type     |
+-------------+----------+
| employee_id | int      |
| name        | varchar  |
| reports_to  | int      |
| age         | int      |
+-------------+----------+
employee_id is the column with unique values for this table.
This table contains information about the employees and the id of the manager they report to. Some employees do not report to anyone (reports_to is null). 

 

For this problem, we will consider a manager an employee who has at least 1 other employee reporting to them.

Write a solution to report the ids and the names of all managers, the number of employees who report directly to them, and the average age of the reports rounded to the nearest integer.

Return the result table ordered by employee_id.
*/

SELECT 
    e1.employee_id, e1.name, e2.reports_count, e2.average_age
    FROM employees e1, (SELECT
        reports_to, 
        COUNT(*) AS reports_count,
        ROUND(AVG(age)) AS average_age
    FROM employees
    GROUP BY reports_to 
    HAVING reports_to IS NOT NULL) as e2
WHERE e1.employee_id = e2.reports_to
ORDER BY e1.employee_id;;