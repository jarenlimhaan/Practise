/*
Table: Customer

+---------------+---------+
| Column Name   | Type    |
+---------------+---------+
| customer_id   | int     |
| name          | varchar |
| visited_on    | date    |
| amount        | int     |
+---------------+---------+
In SQL,(customer_id, visited_on) is the primary key for this table.
This table contains data about customer transactions in a restaurant.
visited_on is the date on which the customer with ID (customer_id) has visited the restaurant.
amount is the total paid by a customer.
 

You are the restaurant owner and you want to analyze a possible expansion (there will be at least one customer every day).

Compute the moving average of how much the customer paid in a seven days window (i.e., current day + 6 days before). average_amount should be rounded to two decimal places.

Return the result table ordered by visited_on in ascending order.

*/

select 
 c1.visited_on, sum(c1.amount) as amount,round(sum(c1.amount)/7  , 2) as average_amount
from
  (select visited_on, sum(amount) as amount from customer group by visited_on) c1,
   (select visited_on, sum(amount) as amount from customer group by visited_on) c2
where c2.visited_on between Date_sub(c1.visited_on , Interval 6 day) and c1.visited_on 
group by c2.visited_on
having count(*)=7
order by c2.visited_on
