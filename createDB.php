<?php
    $host = "localhost";
    $root = "root";
    $root_password ='';
    $user = 'newuser';
    $pass = 'newpass';
    $db = "companymangement";
    try{
        // $sbh = new PDO("mysql:host=$host", $root, $root_password);
        $sbh= new PDO("mysql:host=localhost;dbname=companymangement","root","h@numan20");
        $sbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        /* FOR CREATE DATABASE*/
        // $sbh->exec("CREATE DATABASE `$db`;
        //         CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
        //         GRANT ALL ON `$db`.* TO '$user'@'localhost';
        //         FLUSH PRIVILEGES;");
        $sbh->exec("USE companymangement");

        // $sbh->exec("CREATE TABLE IF NOT EXISTS companymangement.Employee(
        //             emp_no INT(6) PRIMARY KEY,
        //             emp_name VARCHAR(255) NOT NULL,
        //             emp_add VARCHAR(255) NOT NULL,
        //             mobile  NUMERIC(10,0) NOT NULL,
        //             dob DATE,
        //             doj DATE NOT NULL
        //           )") and 
        // die("Table is created");

        // $sbh->exec("CREATE TABLE IF NOT EXISTS companymangement.Applicant(
        //             first_name VARCHAR(125),
        //             last_name VARCHAR(125),
        //             email VARCHAR(255),
        //             mobile NUMERIC(10,0),
        //             doa DATE NOT NULL)");

        // $sbh->exec("CREATE TABLE IF NOT EXISTS companymangement.Department(
        //     dept_id INT(3) PRIMARY KEY,
        //     dept_name VARCHAR(255),
        //     no_of_employee INT(4)
        // )");

        // $sbh->exec("CREATE TABLE TechnicalJob(
        //     dept_id INT(3),
        //     available_sheets INT(2),
        //     working_days INT(1),
        //     emp_no INT(6),
        //     CONSTRAINT fk_dept FOREIGN KEY (dept_id) REFERENCES Department(dept_id),
        //     CONSTRAINT fk_emp FOREIGN KEY (emp_no) REFERENCES Employee(emp_no)
        // )");

        // $sbh->exec("CREATE TABLE nontechnicalJob(
        //     dept_id INT(3),
        //     sheets INT(2),
        //     working_days INT(1),
        //     emp_no INT(6),
        //     CONSTRAINT fk_dept_id FOREIGN KEY (dept_id) REFERENCES Department(dept_id),
        //     CONSTRAINT fk_emp_no FOREIGN KEY (emp_no) REFERENCES Employee(emp_no)
        // )");

        // $sbh->exec("CREATE TABLE paymentdetails(
        //     p_id INT(6) PRIMARY KEY,
        //     ammount NUMERIC(9,0),
        //     p_date DATE,
        //     p_time TIME
        // )");
        
        // $sql = "INSERT INTO paymentdetails (p_id, ammount, p_date, p_time) VALUES 
        // (1, 1000, '2023-03-24', '14:30:00'),
        // (2, 2000, '2023-03-25', '15:45:00'),
        // (3, 5000, '2023-03-26', '11:00:00');";
        // $res = $sbh->prepare($sql);
        // $res->execute();

        // $sql = "INSERT INTO companymangement.Department (dept_id, dept_name, no_of_employee)
        // VALUES
        // (101, 'Software Development', 250),
        // (102, 'Quality Assurance', 75),
        // (103, 'Product Management', 50),
        // (104, 'Sales', 100),
        // (105, 'Marketing', 75),
        // (106, 'Human Resources', 25);";
        // $res = $sbh->prepare($sql);
        // $res->execute();

        // $sql = "INSERT INTO companymangement.Employee (emp_no, emp_name, emp_add, mobile, dob, doj)
        // VALUES
        // (1001, 'John Doe', '12A, MG Road, Bangalore, Karnataka, India', 9876543210, '1990-05-12', '2015-01-01'),
        // (1002, 'Jane Smith', '14B, Sector 25, Noida, Uttar Pradesh, India', 9876543211, '1992-08-21', '2016-03-01'),
        // (1003, 'Mike Johnson', '21C, Hinjewadi, Pune, Maharashtra, India', 9876543212, '1988-02-14', '2014-07-01'),
        // (1004, 'Sara Khan', '2B, Parel, Mumbai, Maharashtra, India', 9876543213, '1991-12-08', '2018-05-01'),
        // (1005, 'Rahul Sharma', '17A, Connaught Place, New Delhi, Delhi, India', 9876543214, '1993-11-03', '2017-01-01'),
        // (1006, 'Anjali Patel', '9C, Satellite, Ahmedabad, Gujarat, India', 9876543215, '1990-07-19', '2013-12-01'),
        // (1007, 'Raj Kumar', '3B, Gandhipuram, Coimbatore, Tamil Nadu, India', 9876543216, '1989-04-25', '2014-09-01'),
        // (1008, 'Deepak Singh', '11A, Rajendra Nagar, Patna, Bihar, India', 9876543217, '1994-06-10', '2019-03-01'),
        // (1009, 'Priya Gupta', '27B, Civil Lines, Allahabad, Uttar Pradesh, India', 9876543218, '1991-02-28', '2016-08-01'),
        // (1010, 'Amit Kumar', '19A, Gomti Nagar, Lucknow, Uttar Pradesh, India', 9876543219, '1990-09-17', '2013-04-01'),
        // (1011, 'Nisha Sharma', '7C, Baner, Pune, Maharashtra, India', 9876543220, '1992-04-01', '2018-07-01'),
        // (1012, 'Kunal Mehta', '15B, Satellite, Ahmedabad, Gujarat, India', 9876543221, '1988-12-24', '2015-09-01'),
        // (1013, 'Sanjay Gupta', '5A, Jayanagar, Bangalore, Karnataka, India', 9876543222, '1991-10-02', '2017-06-01'),
        // (1014, 'Rita Singh', '10B, DLF Phase 3, Gurgaon, Haryana, India', 9876543223, '1993-07-15', '2019-01-01'),
        // (1015, 'Varun Sharma', '8A, Indira Nagar, Nashik, Maharashtra, India', 9876543224, '1990-03-29', '2014-11-01');
        // ";
        // $res = $sbh->prepare($sql);
        // $res->execute();

        // $sql = "INSERT INTO companymangement.Applicant (first_name, last_name, email, mobile, doa)
        // VALUES 
        //     ('John', 'Doe', 'johndoe@example.com', 9876543210, '2023-03-24'),
        //     ('Jane', 'Doe', 'janedoe@example.com', 8765432109, '2023-03-24'),
        //     ('Alice', 'Smith', 'alicesmith@example.com', 7654321098, '2023-03-23'),
        //     ('Bob', 'Johnson', 'bobjohnson@example.com', 6543210987, '2023-03-22'),
        //     ('Charlie', 'Williams', 'charliewilliams@example.com', 5432109876, '2023-03-22'),
        //     ('David', 'Brown', 'davidbrown@example.com', 4321098765, '2023-03-21'),
        //     ('Emma', 'Davis', 'emmadavis@example.com', 3210987654, '2023-03-20'),
        //     ('Frank', 'Garcia', 'frankgarcia@example.com', 2109876543, '2023-03-19'),
        //     ('Grace', 'Martinez', 'gracemartinez@example.com', 1098765432, '2023-03-19'),
        //     ('Henry', 'Lopez', 'henrylopez@example.com', 987654321, '2023-03-18');
        // ";
        // $res = $sbh->prepare($sql);
        // $res->execute();
        
        // $sql = "INSERT INTO TechnicalJob (dept_id, available_sheets, working_days, emp_no)
        // VALUES 
        //     (101, 10, 5, 1001),
        //     (102, 8, 4, 1002),
        //     (103, 6, 3, 1003),
        //     (104, 12, 6, 1004),
        //     (105, 14, 7, 1005),
        //     (106, 16, 8, 1006),
        //     (101, 10, 5, 1007),
        //     (102, 8, 4, 1008),
        //     (103, 6, 3, 1009),
        //     (104, 12, 6, 1010),
        //     (105, 14, 7, 1011),
        //     (106, 16, 8, 1012),
        //     (101, 10, 5, 1013),
        //     (102, 8, 4, 1014),
        //     (103, 6, 3, 1015);
        // ";
        // $res = $sbh->prepare($sql);
        // $res->execute();
        
        // $sql = "INSERT INTO companymangement.Employee(emp_no, emp_name, emp_add, mobile, dob, doj)
        // VALUES
        //     (1016, 'John Doe', '123 Main St, Bangalore, India', 9876543210, '1995-01-01', '2020-01-01'),
        //     (1017, 'Jane Smith', '456 Park Ave, Mumbai, India', 9876543211, '1990-01-01', '2020-02-01'),
        //     (1018, 'Bob Johnson', '789 5th St, New Delhi, India', 9876543212, '1991-01-01', '2020-03-01'),
        //     (1019, 'Mary Davis', '111 Beach Rd, Chennai, India', 9876543213, '1992-01-01', '2020-04-01'),
        //     (1020, 'David Lee', '222 High St, Kolkata, India', 9876543214, '1993-01-01', '2020-05-01'),
        //     (1021, 'Sarah Chen', '333 Elm St, Hyderabad, India', 9876543215, '1994-01-01', '2020-06-01'),
        //     (1022, 'Kevin Patel', '444 Maple Ave, Pune, India', 9876543216, '1995-01-01', '2020-07-01'),
        //     (1023, 'Amit Singh', '555 Oak St, Ahmedabad, India', 9876543217, '1996-01-01', '2020-08-01'),
        //     (1024, 'Priya Sharma', '666 Pine St, Jaipur, India', 9876543218, '1997-01-01', '2020-09-01'),
        //     (1025, 'Michael Kim', '777 Cedar St, Bangalore, India', 9876543219, '1998-01-01', '2020-10-01'),
        //     (1026, 'Raj Patel', '888 Maple St, Mumbai, India', 9876543220, '1999-01-01', '2020-11-01'),
        //     (1027, 'Sophia Gupta', '999 Oak St, New Delhi, India', 9876543221, '2000-01-01', '2020-12-01'),
        //     (1028, 'Chris Kumar', '111 Pine Ave, Chennai, India', 9876543222, '2001-01-01', '2021-01-01'),
        //     (1029, 'Ashley Choudhary', '222 Cedar Ave, Kolkata, India', 9876543223, '2002-01-01', '2021-02-01'),
        //     (1030, 'Andrew Singh', '333 High St, Hyderabad, India', 9876543224, '2003-01-01', '2021-03-01');
        // ";
        // $res = $sbh->prepare($sql);
        // $res->execute();

        // $sql = "INSERT INTO companymangement.Employee(emp_no, emp_name, emp_add, mobile, dob, doj)
        //     VALUES
        //     (2020, 'Rutik Parmar', 'Mumbai, India', 6321353210, '1995-01-01', '2020-01-01'),
        //     (2021, 'Ajay Rank', 'New Delhi, India', 6321353256, '1994-02-02', '2020-02-02'),
        //     (2022, 'Meet Butani', 'Bangalore, India', 6321353032, '1993-03-03', '2020-03-03'),
        //     (2023, 'Arpit Agravat', 'Rajkot, India', 6321353025, '1992-04-04', '2020-04-04'),
        //     (2024, 'Parth Trivedi', 'Ahemdabad, India', 6321353250, '1991-05-05', '2020-05-05'),
        //     (2025, 'Arjun Kukadiya ', 'goa, India', 6321353254, '1990-06-06', '2020-06-06'),
        //     (2026, 'Sahil Patel', 'Pune, India', 6321353630, '1989-07-07', '2020-07-07'),
        //     (2027, 'Gopal Kukadiya', 'Jasdan, India', 6321353220, '1988-08-08', '2020-08-08'),
        //     (2028, 'Karan Kukadiya', 'Pipalana, India', 6321351146, '1987-09-09', '2020-09-09'),
        //     (2029, 'Nimesh', 'Gadhada, India', 6321350253, '1986-10-10', '2020-10-10'),
        //     (2030, 'Rowerth Downy', 'Lucknow, India', 6321352560, '1985-11-11', '2020-11-11'),
        //     (2031, 'Vedant Bharad', 'Nagpur, India', 6321353221, '1984-12-12', '2020-12-12'),
        //     (2032, 'Yash Tilala', 'Mumbai, India', 6321353222, '1983-01-01', '2021-01-01'),
        //     (2033, 'Heet Chothani', 'old Delhi, India', 6321353223, '1982-02-02', '2021-02-02'),
        //     (2034, 'Yenish Radadiya', 'Jamnagar, India', 6321353224, '1981-03-03', '2021-03-03'),
        //     (2035, 'Mayur Mer', 'Dwaraka, India', 6321353225, '1980-04-04', '2021-04-04'),
        //     (2036, 'Ashish Mer', 'Chennai, India', 6321353226, '1979-05-05', '2021-05-05'),
        //     (2037, 'Karan Dhodakiya', 'Kolkata, India', 6321353227, '1978-06-06', '2021-06-06'),
        //     (2038, 'Vivek Patel', 'Hydrabad, India', 6321353228, '1977-07-07', '2021-07-07')
        // ";
        // $res = $sbh->prepare($sql);
        // $res->execute();

        // $sql = "INSERT INTO nontechnicalJob (dept_id, sheets, working_days, emp_no)
        // VALUES
        // (101, 5, 6, 1015),
        // (102, 3, 5, 1016),
        // (103, 4, 6, 1017),
        // (104, 6, 4, 1018),
        // (105, 7, 5, 1019),
        // (106, 2, 7, 1020),
        // (101, 4, 6, 1021),
        // (102, 6, 5, 1022),
        // (103, 3, 6, 1023),
        // (104, 5, 4, 1024),
        // (105, 6, 5, 1025)";
        // $res = $sbh->prepare($sql);
        // $res->execute();
    }
    
    catch(PDOException $e)
    {
        echo "Error is Occured ".$e;
    }
?>