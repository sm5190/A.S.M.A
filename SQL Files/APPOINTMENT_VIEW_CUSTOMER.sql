--------------------------------------------------------
--  File created - Thursday-January-07-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View APPOINTMENT_VIEW_CUSTOMER
--------------------------------------------------------

  CREATE OR REPLACE FORCE VIEW "ASMADB"."APPOINTMENT_VIEW_CUSTOMER" ("CUSTOMER_ID", "AP_TIME", "AP_DATE", "SERVICE_NAME", "EMPLOYEE_NAME", "PRICE") AS 
  SELECT a.customer_id, a.ap_time,a.ap_date, s.name as service_name  ,e.e_name as employee_name ,s.price

FROM appointment a, services s, employee e, customer c
WHERE a.e_id=e.e_id and s.s_code=a.s_code and a.customer_id=c.customer_id
;
