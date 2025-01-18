/*
P(R) represents a pattern drawn by Julia in R rows. The following pattern represents P(5):

* * * * * 
* * * * 
* * * 
* * 
*
*/
DELIMITER $$

CREATE PROCEDURE PrintNumbers()
BEGIN
    DECLARE counter INT DEFAULT 20;
    DECLARE triangle_row VARCHAR(255);
     WHILE counter > 0 DO
        SET triangle_row = REPEAT('* ', counter);
        SELECT triangle_row;
        SET counter = counter - 1;
    END WHILE;
END$$

DELIMITER ;

CALL PrintNumbers();