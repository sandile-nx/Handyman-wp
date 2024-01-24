

-- Database: `hmend`

--
-- Table structure for table `admin`
--

-- Create the admin table
CREATE TABLE `admin` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `admin_surname` text NOT NULL,
  `admin_email` text NOT NULL,
  `password` text NOT NULL
);

-- Create the appointment table
CREATE TABLE appointment (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL
);

-- Create the free appointment table
CREATE TABLE free_appointment (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `full_name` VARCHAR(50) NOT NULL,
  `email_address` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(100) NOT NULL,
  `zip_code` VARCHAR(100) NOT NULL,
  `message` VARCHAR(100) NOT NULL
);
