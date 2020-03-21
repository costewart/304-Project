CREATE TABLE PostalCodes (
    PostalCode Char(10),
    City Char(20),
    PRIMARY KEY (PostalCode) );

CREATE TABLE PropertyManagers (
    PropertyManagerID NUMBER,
    PhoneNum Char(30),
    Name Char(30),
    PRIMARY KEY (PropertyManagerID) );

CREATE TABLE Owners (
    OwnerID NUMBER,
    PhoneNum Char(30),
    Name Char(30),
    PRIMARY KEY (OwnerID) );

CREATE TABLE Tenants (
    TenantID NUMBER,
    PhoneNum Char(30),
    Name Char(30),
    PRIMARY KEY (TenantID) );

CREATE TABLE BuildingAddresses (
    BuildingID NUMBER,
    PostalCode Char(10) NOT NULL,
    StreetName Char(20) NOT NULL,
    StreetNumber Char(10) NOT NULL,
    PropertyManagerID NUMBER,
    PRIMARY KEY (BuildingID),
    FOREIGN KEY (PostalCode) REFERENCES PostalCodes,
    FOREIGN KEY (PropertyManagerID) REFERENCES PropertyManagers );

CREATE TABLE Units
(   UnitID NUMBER,
    UnitNum Char(10),
    Bedrooms NUMBER,
    Bathrooms NUMBER,
    UnitSize NUMBER,
    UnitType Char(10) CHECK( UnitType IN ('house','apartment')),
    Backyard Char(1) CHECK( Backyard IN ('Y','N') ),
    FloorNum NUMBER,
    Gym Char(1) DEFAULT 'N',
    BuildingID NUMBER NOT NULL,
    OwnerID NUMBER NOT NULL,
    PRIMARY KEY (UnitID),
    FOREIGN KEY (BuildingID) REFERENCES BuildingAddresses,
    FOREIGN KEY (OwnerID) REFERENCES Owners );

CREATE TABLE ViewingAppointments (
    ApptID NUMBER,
    Time DATE,
    UnitID NUMBER NOT NULL,
    PropertyManagerID NUMBER NOT NULL,
    TenantID NUMBER NOT NULL,
    PRIMARY KEY (ApptID),
    FOREIGN KEY (PropertyManagerID) REFERENCES PropertyManagers,
    FOREIGN KEY (UnitID) REFERENCES Units,
    FOREIGN KEY (TenantID) REFERENCES Tenants );

CREATE TABLE RentPrice (
    RentPrice NUMBER,
    Deposit NUMBER,
    PRIMARY KEY (RentPrice) );

CREATE TABLE ContractDuration (
    Duration NUMBER,
    StartDate DATE,
    EndDate DATE,
    PRIMARY KEY (Duration, StartDate) );

CREATE TABLE Contracts (
    ContractID NUMBER,
    RentPrice NUMBER NOT NULL,
    Duration NUMBER,
    StartDate Date NOT NULL,
    UnitID NUMBER NOT NULL,
    TenantID NUMBER NOT NULL,
    PRIMARY KEY (ContractID),
    FOREIGN KEY (RentPrice) REFERENCES RentPrice,
    FOREIGN KEY (Duration, StartDate) REFERENCES ContractDuration,
    FOREIGN KEY (UnitID) REFERENCES Units,
    FOREIGN KEY (TenantID) REFERENCES Tenants );

CREATE TABLE ParkingSpots (
    SpotNumber NUMBER,
    UnitID NUMBER,
    PRIMARY KEY (SpotNumber,UnitID),
    FOREIGN KEY (UnitID) REFERENCES Units );
