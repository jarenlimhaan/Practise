/*
Table: Products

+---------------+---------+
| Column Name   | Type    |
+---------------+---------+
| product_id    | int     |
| new_price     | int     |
| change_date   | date    |
+---------------+---------+
(product_id, change_date) is the primary key (combination of columns with unique values) of this table.
Each row of this table indicates that the price of some product was changed to a new price at some date.

 

Write a solution to find the prices of all products on 2019-08-16. Assume the price of all products before any change is 10.

Return the result table in any order.
*/

SELECT distinct a.product_id,ifnull(temp.new_price,10) as price 
FROM products as a
LEFT JOIN
(SELECT * 
FROM products 
WHERE (product_id, change_date) in (select product_id,max(change_date) from products where change_date<="2019-08-16" group by product_id)) as temp
on a.product_id = temp.product_id;
     