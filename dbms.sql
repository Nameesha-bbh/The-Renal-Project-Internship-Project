create database mainDB;
use  mainDB;

/*Table for storing details of doctors */
create table doctorTable(doctor_username varchar(30), doctor_email varchar(20) unique, doctor_password varchar(20) , doctor_phone_no bigint , speciality varchar(20));
insert into doctorTable values("nameesha","@gmail.com","123",8277501000,"opthamologist");
desc doctorTable;
select * from doctorTable;

/*Table for storing details of staff */
create table staffTable(staff_username varchar(30), staff_email varchar(20) primary key, staff_password varchar(20) , staff_phone_no bigint,branch_name varchar(20));
insert into staffTable values("nameesha","@gmail.com","123",8277501000,"rajajinagar");
desc staffTable;
select * from staffTable;

/*Table for storing details of patients */
create table patientTable(id bigint primary key,patient_username varchar(30), patient_phone_no bigint , patient_dob date ,patient_admit_date date, health_issue varchar(20) , blood_group varchar(3),branch_name varchar(20));


insert into patientTable values(125,'Dheeraj',965844648,'2001-06-21','2021-05-17','heart attack','o+','Dasarahalli');
insert into patientTable values(126,'Nikhil',969681535,'2002-05-23','2021-05-17','kidney stone','o+','Rajajinagar');
insert into patientTable values(127,'Nandan',858969656,'2001-03-08','2021-05-17','leg pain','AB+','MG Road');
insert into patientTable values(128,'Karan',968686656,'2003-01-18','2021-05-18','hand pain','B-','Dasarahalli');
insert into patientTable values(129,'Manju',6969656,'1999-02-27','2021-05-19','face allergies','B+','MG Road');
insert into patientTable values(130,'Sumedh',69696648,'2001-07-15','2021-05-20','stomach ache','A-','Rajajinagar');
insert into patientTable values(131,'Sujay',634346648,'2001-05-01','2021-05-20','stomach ache','A+','Rajajinagar');
desc patientTable;
select * from patientTable;

/*Table for storing details of admin */
create table adminTable(admin_username varchar(30), admin_email varchar(20) primary key, admin_password varchar(20) , admin_phone_no bigint);
insert into adminTable values("nameesha","@gmail.com","123",589658);
desc adminTable;
select * from adminTable;

/*Table for storing details of branch */
create table branchTable(branch_name varchar(30) primary key, amount_per_patient bigint);
insert into branchTable values("Rajajinagar",25000);
insert into branchTable values("Dasarahalli",35000);
insert into branchTable values("MG Road",15000);
desc branchTable;
select * from branchTable;