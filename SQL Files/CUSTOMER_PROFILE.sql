--------------------------------------------------------
--  File created - Thursday-January-07-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View CUSTOMER_PROFILE
--------------------------------------------------------

  CREATE OR REPLACE FORCE VIEW "ASMADB"."CUSTOMER_PROFILE" ("CUSTOMER_NAME", "CUSTOMER_TYPE", "DISCOUNT", "SKIN_TYPE", "HAIR_TYPE", "ALLERGY", "PHONE_NUMBER", "ADDRESS", "VISIT_COUNT", "RATING") AS 
  SELECT  c.CUSTOMER_NAME,
c.CUSTOMER_TYPE,
c.DISCOUNT,
c.SKIN_TYPE,
c.HAIR_TYPE,
c.ALLERGY,
c.PHONE_NUMBER,
c.ADDRESS,
c.VISIT_COUNT,
c.RATING

FROM customer c, login_customer lc 
where c.phone_number=lc.loggedin_phn
;
