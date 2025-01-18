/*
Write a query to print all prime numbers less than or equal to 1000. Print your result on a single line, and use the ampersand (&) character as your separator (instead of a space).
*/
DELIMITER **

CREATE PROCEDURE primeNumbers()
BEGIN
    DECLARE n INT DEFAULT 3;
    DECLARE result VARCHAR(2000) DEFAULT "2";
    
    loop1: WHILE n<=1000 DO
        SET @i = 2;
        SET @isPrime = 1;
        
        loop2: WHILE @i<=SQRT(n) DO
            IF n % @i = 0 THEN
                SET @isPrime = 0;
                LEAVE loop2;
            END IF;
            
            SET @i = @i + 1;
        END WHILE loop2;
        
        IF @isPrime = 1 THEN
            SET result = CONCAT(result, "&", n);
        END IF;
        
        SET n = n + 1;
    END WHILE loop1;
    
    SELECT result;
END**

DELIMITER ;

CALL primeNumbers();