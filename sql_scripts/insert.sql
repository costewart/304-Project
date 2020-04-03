INSERT INTO PostalCodes VALUES ('V6G 0X2', 'Vancouver');
INSERT INTO PostalCodes VALUES ('V7G 0X9', 'Vancouver');
INSERT INTO PostalCodes VALUES ('V8G 8X9', 'Burnaby');
INSERT INTO PostalCodes VALUES ('V9G 0X9', 'New Westminster' );
INSERT INTO PostalCodes VALUES ('V1G 4X9', 'Surrey');
INSERT INTO PostalCodes VALUES ('V1G 4Y6', 'Surrey');
INSERT INTO PostalCodes VALUES ('V1G 4Z8', 'Surrey');

INSERT INTO PropertyManagers VALUES ( 1, '6047897234', 'Tom Salida');
INSERT INTO PropertyManagers VALUES ( 2, '6047896567', 'Sim Card');
INSERT INTO PropertyManagers VALUES ( 3, '6043455235', 'Nic Pek');
INSERT INTO PropertyManagers VALUES ( 4, '6042484734', 'Ios Aber');
INSERT INTO PropertyManagers VALUES ( 5, '6042123900', 'Abel Le');

INSERT INTO Owners VALUES ( 6, '6047891234', 'Peter Tom');
INSERT INTO Owners VALUES ( 7, '6047891567', 'Amy Sue');
INSERT INTO Owners VALUES ( 8, '6043451235', 'Danny Scott');
INSERT INTO Owners VALUES ( 9, '6042481734', 'Sam Alora');
INSERT INTO Owners VALUES ( 10, '6042121900', 'Patrick Lee');

INSERT INTO Tenants VALUES ( 11, '6047811234', 'Peter Victor');
INSERT INTO Tenants VALUES ( 12, '6047881567', 'Michelle Ho');
INSERT INTO Tenants VALUES ( 13, '6043151235', 'Scott Wang');
INSERT INTO Tenants VALUES ( 14, '3042481734', 'Alora Sadi');
INSERT INTO Tenants VALUES ( 15, '8892121900', 'Lim Kim');
INSERT INTO Tenants VALUES ( 1, '6049990000', 'Andy Bing');
INSERT INTO Tenants VALUES ( 2, '6049990001', 'Carl Drove');
INSERT INTO Tenants VALUES ( 3, '6049990002', 'Esther Freiss');
INSERT INTO Tenants VALUES ( 4, '6049990003', 'Gertie Henderson');
INSERT INTO Tenants VALUES ( 5, '6049990004', 'Iris Johnson');
INSERT INTO Tenants VALUES ( 6, '6049990005', 'Kelly Lin');
INSERT INTO Tenants VALUES ( 7, '6049990006', 'Mark Newman');
INSERT INTO Tenants VALUES ( 8, '6049990007', 'Owen Peters');
INSERT INTO Tenants VALUES ( 9, '6049990008', 'Quincy Rutherford');
INSERT INTO Tenants VALUES (10, '6049990009', 'Said Thompson');

INSERT INTO BuildingAddresses VALUES (1, 'V6G 0X2', 'Broadway Ave', '1771', 1 );
INSERT INTO BuildingAddresses VALUES (2, 'V7G 0X9', 'Wesbrook Mall', '1301', 3 );
INSERT INTO BuildingAddresses VALUES (3, 'V8G 8X9', 'Boundary Road', '7888', 2 );
INSERT INTO BuildingAddresses VALUES (4, 'V9G 0X9', 'Hamilton Street', '101', 5 );
INSERT INTO BuildingAddresses VALUES (5, 'V1G 4X9', 'Grosvenor Road', '405', 4 );
INSERT INTO BuildingAddresses VALUES (6, 'V1G 4Y6', 'Hansen Road', '407', 4 );
INSERT INTO BuildingAddresses VALUES (7, 'V1G 4Z8', '112th Avenue', '609', 4 );

INSERT INTO Units VALUES (1, '201', 2,1,900, 'apartment', 'N',   2,      'Y',    5, 6);
INSERT INTO Units VALUES (2, '1',   5,3,3400,'house',     'Y',   NULL,   'N',    4, 7);
INSERT INTO Units VALUES (3, '701', 1,1,600, 'apartment', 'N',   7,      'Y',    3, 8);
INSERT INTO Units VALUES (4, '101', 5,3,5400,'house',     'Y',   NULL,   'N',   2, 9);
INSERT INTO Units VALUES (5, '3',   2,2,1000,'apartment', 'N',   1,      'N',   1, 10);
INSERT INTO Units VALUES (6, '101', 1,1,500, 'apartment', 'N',   20,     'Y',    5, 6);
INSERT INTO Units VALUES (7, '1',   4,2,2400,'house',     'N',   NULL,   'N',    6, 7);
INSERT INTO Units VALUES (8, '300', 1,1,600, 'apartment', 'N',   7,      'Y',    3, 8);
INSERT INTO Units VALUES (9, '4',   2,1,750, 'apartment', 'N',   12,     'Y',    5, 9);
INSERT INTO Units VALUES (10,'1',   2,2,800, 'apartment', 'N',   1,      'N',    3, 8);
INSERT INTO Units VALUES (11, '101', 1,1,550, 'apartment', 'N',   1,      'N',    5, 6);
INSERT INTO Units VALUES (12, '102', 3,2,950,'apartment', 'N',    1,      'N',    5, 6);
INSERT INTO Units VALUES (13, '103', 2,1,700, 'apartment', 'N',   1,      'N',    5, 6);
INSERT INTO Units VALUES (14, '300', 2,1,800, 'apartment', 'N',   3,      'Y',    3, 8);
INSERT INTO Units VALUES (15, '308', 1,1,450, 'apartment', 'N', 3,        'Y',   3, 9);
INSERT INTO Units VALUES (16, '104', 2,1,750, 'apartment', 'N',   20,     'Y',    5, 7);
INSERT INTO Units VALUES (17, '1',   3,1,1600,'house',     'Y',   NULL,   'N',    7, 6);
INSERT INTO Units VALUES (18, '301', 1,1,675, 'apartment', 'N',   3,      'Y',    3, 8);
INSERT INTO Units VALUES (19, '4' ,  2,1,750, 'apartment', 'N',   12,     'Y',    1, 9);
INSERT INTO Units VALUES (20, '1',   2,2,800, 'apartment', 'N',   1,      'Y',    3, 9);

INSERT INTO ViewingAppointments VALUES ( 2,  STR_TO_DATE('12:30 02-01-2020', '%H:%i %m-%d-%Y'), 1, 1, 12);
INSERT INTO ViewingAppointments VALUES ( 20, STR_TO_DATE('10:00 03-01-2020', '%H:%i %m-%d-%Y'), 4, 2, 11);
INSERT INTO ViewingAppointments VALUES ( 12, STR_TO_DATE('14:00 04-01-2020', '%H:%i %m-%d-%Y'), 3, 3, 11);
INSERT INTO ViewingAppointments VALUES ( 29, STR_TO_DATE('17:00 05-11-2020', '%H:%i %m-%d-%Y'), 5, 4, 12);
INSERT INTO ViewingAppointments VALUES ( 99, STR_TO_DATE('14:10 05-01-2020', '%H:%i %m-%d-%Y'), 1, 5, 13);

INSERT INTO RentPrice VALUES (1200, 600);
INSERT INTO RentPrice VALUES (1500, 750);
INSERT INTO RentPrice VALUES (3600, 1800);
INSERT INTO RentPrice VALUES (1700, 850);
INSERT INTO RentPrice VALUES (1900, 950);
INSERT INTO RentPrice VALUES (2600, 1300);
INSERT INTO RentPrice VALUES (1800, 1900);
INSERT INTO RentPrice VALUES (1600, 800);

INSERT INTO ContractDuration VALUES (24, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), STR_TO_DATE('11-30-2022', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), STR_TO_DATE('11-30-2021', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (12, STR_TO_DATE('11-01-2021', '%m-%d-%Y'), STR_TO_DATE('10-31-2022', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (12, STR_TO_DATE('04-01-2021', '%m-%d-%Y'), STR_TO_DATE('03-30-2022', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (12, STR_TO_DATE('05-01-2020', '%m-%d-%Y'), STR_TO_DATE('04-30-2021', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (6,  STR_TO_DATE('05-01-2020', '%m-%d-%Y'), STR_TO_DATE('10-30-2021', '%m-%d-%Y'));
INSERT INTO ContractDuration VALUES (8,  STR_TO_DATE('05-01-2020', '%m-%d-%Y'), STR_TO_DATE('01-31-2021', '%m-%d-%Y'));


INSERT INTO Contracts VALUES ( 1, 1200, 24, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 1, 11);
INSERT INTO Contracts VALUES ( 2, 1500, 12, STR_TO_DATE('11-01-2021', '%m-%d-%Y'), 2, 12);
INSERT INTO Contracts VALUES ( 3, 3600, 12, STR_TO_DATE('04-01-2021', '%m-%d-%Y'), 3, 13);
INSERT INTO Contracts VALUES ( 4, 1700, 12, STR_TO_DATE('05-01-2020', '%m-%d-%Y'), 4, 14);
INSERT INTO Contracts VALUES ( 5, 1900, 6,  STR_TO_DATE('05-01-2020', '%m-%d-%Y'), 5, 15);

INSERT INTO Contracts VALUES ( 6, 3600, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 11, 1);
INSERT INTO Contracts VALUES ( 7, 1200, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 12, 2);
INSERT INTO Contracts VALUES ( 8, 2600, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 13, 3);
INSERT INTO Contracts VALUES ( 9, 1900, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 14, 4);
INSERT INTO Contracts VALUES (10, 1800, 8,  STR_TO_DATE('05-01-2020', '%m-%d-%Y'), 15, 5);

INSERT INTO Contracts VALUES (11, 1600, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 16, 6);
INSERT INTO Contracts VALUES (12, 1200, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 17, 7);
INSERT INTO Contracts VALUES (13, 2600, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 18, 8);
INSERT INTO Contracts VALUES (14, 1900, 12, STR_TO_DATE('12-01-2020', '%m-%d-%Y'), 19, 9);
INSERT INTO Contracts VALUES (15, 1800, 8,  STR_TO_DATE('05-01-2020', '%m-%d-%Y'), 20, 10);

INSERT INTO ParkingSpots VALUES (1,  2);
INSERT INTO ParkingSpots VALUES (3,  5);
INSERT INTO ParkingSpots VALUES (2,  1);
INSERT INTO ParkingSpots VALUES (1,  4);
INSERT INTO ParkingSpots VALUES (10, 3);

