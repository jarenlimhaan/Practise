/*
Given the table schemas below, write a query to print the company_code, founder name, total number of lead managers, total number of senior managers, total number of managers, and total number of employees. Order your output by ascending company_code.

Note:
    The tables may contain duplicate records.
    The company_code is string, so the sorting should not be numeric. For example, if the company_codes are C_1, C_2, and C_10, then the ascending company_codes will be C_1, C_10, and C_2.
*/
SELECT 
    t1.company_code, 
    t1.founder, 
    COUNT(DISTINCT t2.lead_manager_code), 
    COUNT(DISTINCT t3.senior_manager_code), 
    COUNT(DISTINCT t4.manager_code), 
    COUNT(DISTINCT t5.employee_code) 
FROM company t1
LEFT JOIN lead_manager t2 ON t2.company_code = t1.company_code
LEFT JOIN senior_manager t3 ON t3.company_code = t1.company_code
LEFT JOIN manager t4 ON t4.company_code = t1.company_code
LEFT JOIN employee t5 ON t5.company_code = t1.company_code
GROUP BY t1.company_code, t1.founder;