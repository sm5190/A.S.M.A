CREATE OR REPLACE FORCE VIEW "ASMADB"."APPOINTMENT_VIEW_ADMIN" ("AP_TIME", "AP_DATE", "SERVICE_NAME", "CUSTOMER_NAME", "EMPLOYEE_NAME") AS 
  SELECT  a.ap_time,a.ap_date, s.name as service_name  ,c.customer_name as customer_name,e.e_name as employee_name

FROM appointment a, services s, customer c, employee e
WHERE a.customer_id=c.customer_id and s.s_code=a.s_code and a.e_id=e.e_id
;
