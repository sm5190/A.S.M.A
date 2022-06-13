create user dbonline identified by dbonline;
grant create session, create table, create view
to dbonline;
alter user dbonline default tablespace users
quota 5m on users;

select p.name,p.blood_group,a.admission_fees
from admission a natural join patient p natural join  admitted_patient 
where a.admission_fees = any (select max ( distinct a.admission_fees) from admission a natural join patient p natural join  admitted_patient  group by p.blood_group);


SELECT P.name || ' is currently admitted under Dr.'|| D.name  as "Patient  Information"
from doctor D ,patient p,treats_the_admitted t, admitted_patient a,doctor c,admission ad
where d.doc_id=t.doc_id and p.patient_id=a.patient_id and t.admission_id=a.admission_id  and ad.admission_id= t.admission_id and a.admission_id= t.admission_id 


SELECT P.name || ' is currently admitted under Dr.'|| D.name  as "Patient  Information"
from doctor D ,patient p,treats_the_admitted t, admitted_patient a,admission ad 
where d.doc_id=t.doc_id and p.patient_id=a.patient_id and t.admission_id=a.admission_id  and ad.admission_id= t.admission_id and a.admission_id= t.admission_id ;

select substr(p.name,1,8),p.blood_group,a.admission_fees
from admission a natural join patient p natural join  admitted_patient 
where a.admission_fees = any (select max ( distinct a.admission_fees) from admission a natural join patient p natural join  admitted_patient  group by p.blood_group);

select p.name , ad.operation_date 
from patient p, operation o,  admitted_patient_operation ad, admission a,admitted_patient ap
where a.admission_id=ad.admission_id and o.operation_id=ad.operation_id and ad.admission_id=ap.admission_id and p.patient_id=ap.patient_id
and  
 p.name!='Mithila Rayhan';
