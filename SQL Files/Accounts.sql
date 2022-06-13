--------------------------------------------------------
--  File created - Friday-January-08-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table ACCOUNTS
--------------------------------------------------------

  CREATE TABLE "ASMADB"."ACCOUNTS" 
   (	"TRANSACTION_ID" VARCHAR2(12 BYTE), 
	"TYPE" VARCHAR2(20 BYTE), 
	"AMOUNT" NUMBER(10,2), 
	"START_DATE" DATE, 
	"END_DATE" DATE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TRANSACTION_ID_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "ASMADB"."TRANSACTION_ID_PK" ON "ASMADB"."ACCOUNTS" ("TRANSACTION_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Trigger ACCOUNT_ID
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "ASMADB"."ACCOUNT_ID" 
BEFORE DELETE OR INSERT OR UPDATE ON accounts
  for each row
begin
  :new.transaction_id := 'Txn' || lpad(accounts_id_seq.nextval,9,'0');
end;
/
ALTER TRIGGER "ASMADB"."ACCOUNT_ID" ENABLE;
--------------------------------------------------------
--  Constraints for Table ACCOUNTS
--------------------------------------------------------

  ALTER TABLE "ASMADB"."ACCOUNTS" ADD CONSTRAINT "TRANSACTION_ID_PK" PRIMARY KEY ("TRANSACTION_ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
