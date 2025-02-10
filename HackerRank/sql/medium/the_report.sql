/*
Ketty gives Eve a task to generate a report containing three columns: Name, Grade and Mark. Ketty doesn't want the NAMES of those students who received a grade lower than 8. The report must be in descending order by grade -- i.e. higher grades are entered first. 

If there is more than one student with the same grade (8-10) assigned to them, order those particular students by their name alphabetically. Finally, if the grade is lower than 8, use "NULL" as their name and list them by their grades in descending order. 

If there is more than one student with the same grade (1-7) assigned to them, order those particular students by their marks in ascending order.
*/

SELECT 
    CASE 
        WHEN gr.grade < 8 THEN "NULL"
        ELSE st.name
    END AS student_name,
    gr.grade, 
    st.marks 
FROM Students st
INNER JOIN Grades gr
ON st.Marks BETWEEN gr.min_mark AND gr.max_mark
ORDER BY gr.Grade DESC, 
         (CASE WHEN gr.Grade >= 8 THEN st.Name END) ASC, 
         (CASE WHEN gr.Grade < 8 THEN st.Marks END) ASC;