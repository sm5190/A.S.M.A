CREATE OR REPLACE TRIGGER accounts_relational_insert
  AFTER INSERT ON accounts
  FOR EACH ROW
BEGIN
  IF TO_CHAR(:new.paid_on, 'YYYYMM') = TO_CHAR(sysdate, 'YYYYMM') THEN
    IF    :new.type = 'Utility' THEN
      INSERT INTO a_u VALUES(:new.id, :new.transaction_id, :new.amount);
    ELSIF :new.type = 'Equipment' THEN
      INSERT INTO a_eq VALUES(:new.id, :new.transaction_id, :new.amount);    
    ELSIF :new.type = 'Product' THEN
      INSERT INTO a_p VALUES(:new.id, :new.transaction_id, :new.amount);
      ELSIF :new.type = 'Employee' THEN
      INSERT INTO a_em VALUES(:new.id, :new.transaction_id, :new.amount);
     ELSE
      INSERT INTO sales VALUES(:new.id, :new.transaction_id, :new.amount); 
    END IF;
  END IF;
END;

Insert into  accounts(amount,id,paid_on,transaction_id,type) values ( 4000,'S-000000016','1-JAN-2021','','Income');