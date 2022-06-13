create or replace procedure Loyality_cuustomer
(p_cust_id varchar,p_visit_count In Number, p_discount Out Number, p_type Out Varchar)
As
A_val number :=30;
B_val number :=20;
C_val number :=10;
D_val number :=0;
total_sum number :=0;
CURSOR check_cursor  IS  SELECT Customer_Name FROM customer;
check_val check_cursor%rowtype; 
flag number  :=0;
begin

if p_visit_count >= 5 then
p_type := 'A';
p_discount := A_val ;
elsif p_visit_count < 5 and p_visit_count >= 3 then
p_type := 'B';
p_discount := B_val ;
elsif p_visit_count < 3 and p_visit_count >= 1 then
p_type := 'C';
p_discount := C_val ;
else
p_type := 'D';
p_discount := D_val ;
end if;



OPEN check_cursor ;
LOOP 
FETCH check_cursor INTO check_val; 
if p_cust_id = check_val.Customer_Name then
flag:=1;
end if; 
Exit when check_cursor%notfound;

END LOOP;
CLOSE check_cursor;

if flag = 0 then
insert into customer(Customer_Name,Customer_Type,Discount,Visit_Count)values(p_cust_id,p_type,p_discount,p_visit_count);
else 

update customer set Customer_Type=p_type,Discount=p_discount,Visit_count=p_visit_count where Customer_Name=p_cust_id;
dbms_output.put_line(p_type);

end if;
end;

