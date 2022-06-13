--------------------------------------------------------
--  File created - Thursday-January-07-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for View APPOINTMENT_VIEW_EMPLOYEE
--------------------------------------------------------

  CREATE OR REPLACE FORCE VIEW "ASMADB"."APPOINTMENT_VIEW_EMPLOYEE" ("AP_TIME", "AP_DATE", "SERVICE_NAME", "CUSTOMER_NAME", "E_ID") AS 
  SELECT  a.ap_time,a.ap_date, s.name as service_name  ,c.customer_name as customer_name,e.e_id

FROM appointment a, services s, customer c, employee e
WHERE a.customer_id=c.customer_id and s.s_code=a.s_code and a.e_id=e.e_id
;
