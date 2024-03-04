CREATE TABLE departments (
  departmentid INT PRIMARY KEY AUTO_INCREMENT,
  departmentname VARCHAR(100) NOT NULL,
  departmentaddress VARCHAR(100) NOT NULL,
  departmentemail VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  logo VARCHAR(255) NULL,
  website VARCHAR(255) NULL,
  parentdepartmentid INT DEFAULT NULL,
  FOREIGN KEY (parentdepartmentid) REFERENCES departments(departmentid)
);

CREATE TABLE employees (
  employeeid INT PRIMARY KEY AUTO_INCREMENT,
  employeename VARCHAR(255) NOT NULL,
  employeeaddress VARCHAR(255) NOT NULL,
  employeeemail VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  position VARCHAR(255) NOT NULL,
  avatar VARCHAR(255) NULL,
  departmentid INT NOT NULL,
  FOREIGN KEY (departmentid) REFERENCES departments(departmentid)
);

CREATE TABLE users (
  username VARCHAR(255) PRIMARY KEY,
  password VARCHAR(255) NOT NULL,  
  userrole VARCHAR(255) NOT NULL,
  employeeid INT NOT NULL,
  FOREIGN KEY (employeeid) REFERENCES employees(employeeid)
);

INSERT INTO departments (departmentname, departmentaddress, departmentemail, phone)
VALUES ('Marketing', '123 Main St', 'marketing@company.com', '555-123-4567'),
       ('Sales', '456 Elm St', 'sales@company.com', '555-789-0123'),
       ('Human Resources', '789 Oak St', 'hr@company.com', '555-456-7890'),
       ('IT', '123 Pine St', 'it@company.com', '555-123-4567'),
       ('Finance', '456 Maple St', 'finance@company.com', '555-789-0123');

INSERT INTO employees (employeename, employeeaddress, employeeemail, phone, position, departmentid)
VALUES ('John Doe', '123 Elm St', 'john.doe@company.com', '555-555-1234', 'Marketing Manager', 1),
       ('Jane Smith', '456 Maple St', 'jane.smith@company.com', '555-555-5678', 'Sales Representative', 2),
       ('Michael Lee', '789 Oak St', 'michael.lee@company.com', '555-555-0123', 'HR Specialist', 3),
       ('Alice Brown', '123 Pine St', 'alice.brown@company.com', '555-555-3456', 'Software Engineer', 4),
       ('David Johnson', '456 Willow St', 'david.johnson@company.com', '555-555-7890', 'Accountant', 5);


INSERT INTO users (username, password, userrole, employeeid)
VALUES ('johndoe', 'password123', 'Admin', 1),  -- Replace with secure password hash!
       ('janesmith', 'password123', 'Sales Rep', 2),  -- Replace with secure password hash!
       ('michaellee', 'password123', 'HR Staff', 3),  -- Replace with secure password hash!
       ('alicebrown', 'password123', 'Developer', 4),  -- Replace with secure password hash!
       ('davidj', 'password123', 'Finance', 5);  -- Replace with secure password hash!
