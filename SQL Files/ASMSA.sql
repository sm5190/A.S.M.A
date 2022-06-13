

create table sale_Item(

bill_no number(4) Not null ,
item_id number(4) Not null ,
constraint si_bill_no_fk foreign key(bill_no) references sale(bill_no) on delete cascade,
constraint si_item_id_fk foreign key(item_id) references item(item_id) on delete cascade

);