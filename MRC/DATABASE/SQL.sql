CREATE DATABASE MRC;
USE MRC;
CREATE TABLE signup ( UserName VARCHAR(100),DOB VARCHAR(20),Gmail VARCHAR(50), Password VARCHAR(20) );
CREATE TABLE Admission_Details( Name VARCHAR(50) , Father_Name VARCHAR(50), Gender VARCHAR(10),DOB VARCHAR(10), Course VARCHAR(50), MobileNumber int(10),GMailID VARCHAR(40), Address VARCHAR(100));
CREATE TABLE Transport( Bus_Number int(5), Driver_Name VARCHAR(50), Destination VARCHAR(40) );