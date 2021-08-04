create database mainDB;
use  mainDB;
create table doctorTable(doctor_username varchar(30), doctor_email varchar(20) unique, doctor_password varchar(20) , doctor_phone_no bigint , speciality varchar(20));
insert into doctorTable values("nameesha","@gmail.com","123",8277501000,"orthology");
select * from doctorTable;

create table staffTable(staff_username varchar(30), staff_email varchar(20) primary key, staff_password varchar(20) , staff_phone_no bigint,branch_name varchar(20));
insert into staffTable values("nameesha","@gmail.com","123",8277501000,"rajajinagar");
select * from staffTable;
drop table patientTable;
create table patientTable(id bigint primary key,patient_username varchar(30), patient_phone_no bigint , patient_dob date ,patient_admit_date date, health_issue varchar(20) , blood_group varchar(3),branch_name varchar(20));
insert into patientTable values(124,'name',48668,'2001-07-28','2021-07-28','','o','dd');
insert into patientTable values(125,'namee',648,'2001-07-28','2001-07-28','','','');
insert into patientTable values(126,'nam',1535,'2021-01-28','2021-01-28','','','');
insert into patientTable values(127,'nameesha',656,'2021-01-28','2021-01-28','','','');
insert into patientTable values(128,'nameesha',656,'2021-01-28','2021-04-02','','','');
insert into patientTable values(129,'nameesha',656,'2021-01-27','2021-04-02','','','');
insert into patientTable values(130,'namee',648,'2001-07-28','2001-07-28','','','');

select * from patientTable;
select  patient_admit_date,count(*) as count from patientTable group by patient_admit_date;


create table adminTable(admin_username varchar(30), admin_email varchar(20) primary key, admin_password varchar(20) , admin_phone_no bigint);
insert into adminTable values("nameesha","@gmail.com","123",589658);
select * from adminTable;



create table branchTable(branch_name varchar(30) primary key, amount_per_patient bigint);
select * from branchTable;



