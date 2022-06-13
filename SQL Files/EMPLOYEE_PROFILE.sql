--------------------------------------------------------
--  File created - Thursday-January-07-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View EMPLOYEE_PROFILE
--------------------------------------------------------

  CREATE OR REPLACE FORCE VIEW "ASMADB"."EMPLOYEE_PROFILE" ("E_NAME", "CONTACT_NUMBER", "CURRENT_ADDRESS", "PERMANENT_ADDRESS", "BONUS") AS 
  SELECT e.e_name,e.contact_number,e.current_address,e.permanent_address,e.bonus
    
FROM employee e, login_employee le
where e.contact_number=le.loggedin_phn
;
