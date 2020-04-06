CREATE TABLE PostalCodes (
    PostalCode Varchar(10),
    City Varchar(20),
    PRIMARY KEY (PostalCode) );

CREATE TABLE PropertyManagers (
    PropertyManagerID int,
    PhoneNum Varchar(30),
    Name Varchar(30),
    PRIMARY KEY (PropertyManagerID) );

CREATE TABLE Owners (
    OwnerID int,
    PhoneNum Varchar(30),
    Name Varchar(30),
    PRIMARY KEY (OwnerID) );

CREATE TABLE Tenants (
    TenantID int AUTO_INCREMENT,
    PhoneNum Varchar(30),
    Name Varchar(30),
    PRIMARY KEY (TenantID) );

CREATE TABLE BuildingAddresses (
    BuildingID int,
    PostalCode Varchar(10) NOT NULL,
    StreetName Varchar(20) NOT NULL,
    Streetint Varchar(10) NOT NULL,
    PropertyManagerID int,
    PRIMARY KEY (BuildingID),
    FOREIGN KEY (PostalCode) REFERENCES PostalCodes(PostalCode),
    FOREIGN KEY (PropertyManagerID) REFERENCES PropertyManagers(PropertyManagerID) );

CREATE TABLE Units
(   UnitID int,
    UnitNum Varchar(10),
    Bedrooms int,
    Bathrooms int,
    UnitSize int,
    UnitType Varchar(10) CHECK( UnitType IN ('house','apartment')),
    Backyard Varchar(1) CHECK( Backyard IN ('Y','N') ),
    FloorNum int,
    Gym Varchar(1) DEFAULT 'N',
    BuildingID int NOT NULL,
    OwnerID int NOT NULL,
    PRIMARY KEY (UnitID),
    FOREIGN KEY (BuildingID) REFERENCES BuildingAddresses(BuildingID),
    FOREIGN KEY (OwnerID) REFERENCES Owners(OwnerID) );

CREATE TABLE ViewingAppointments (
    ApptID int,
    Time DATETIME,
    UnitID int NOT NULL,
    PropertyManagerID int NOT NULL,
    TenantID int NOT NULL,
    PRIMARY KEY (ApptID),
    FOREIGN KEY (PropertyManagerID) REFERENCES PropertyManagers(PropertyManagerID),
    FOREIGN KEY (UnitID) REFERENCES Units(UnitID) ON DELETE CASCADE,
    FOREIGN KEY (TenantID) REFERENCES Tenants(TenantID) ON DELETE CASCADE);

CREATE TABLE RentPrice (
    RentPrice int,
    Deposit int,
    PRIMARY KEY (RentPrice) );

CREATE TABLE ContractDuration (
    Duration int,
    StartDate DATE,
    EndDate DATE,
    PRIMARY KEY (Duration, StartDate) );

CREATE TABLE Contracts (
    ContractID int,
    RentPrice int NOT NULL,
    Duration int,
    StartDate Date NOT NULL,
    UnitID int NOT NULL,
    TenantID int NOT NULL,
    PRIMARY KEY (ContractID),
    FOREIGN KEY (RentPrice) REFERENCES RentPrice(RentPrice),
    FOREIGN KEY (Duration, StartDate) REFERENCES ContractDuration(Duration, StartDate),
    FOREIGN KEY (UnitID) REFERENCES Units(UnitID) ON DELETE CASCADE,
    FOREIGN KEY (TenantID) REFERENCES Tenants(TenantID) ON DELETE CASCADE);

CREATE TABLE ParkingSpots (
    Spotint int,
    UnitID int,
    PRIMARY KEY (Spotint,UnitID),
    FOREIGN KEY (UnitID) REFERENCES Units(UnitID) ON DELETE CASCADE);
