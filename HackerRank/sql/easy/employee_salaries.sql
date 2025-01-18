/*
Write a query that prints a list of employee names (i.e.: the name attribute) for employees in Employee having a salary greater $2,000 than  per month who have been employees for less than  months. Sort your result by ascending employee_id.
*/
SELECT name 
FROM employee
WHERE months < 10 AND salary> 2000
ORDER by employee_id;