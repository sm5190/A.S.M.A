create procedure profit_calcs (profit out NUMBER,em in NUMBER, eq OUTUMBER, p in NUMBER, u in NUMBER, income in NUMBER, ex in NUMBER)
as
em     NUMBER;
  eq     NUMBER;
  p     NUMBER;
  u     NUMBER;
  incom NUMBER; 
  ex INT;

begin
select sum(amount) into em from a_em;
select sum(amount) into eq from a_eq;
select sum(amount) into p from a_p;
select sum(amount) into u from a_u;
select sum(amount) into income from sales;
ex := :em + :eq +:p +:u ;
profit := :income - :ex;
end;