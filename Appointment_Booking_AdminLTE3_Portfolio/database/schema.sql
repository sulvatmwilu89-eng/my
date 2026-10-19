-- Appointment Booking System relational database
-- Compatible with MySQL 8+ / current MariaDB releases.
CREATE DATABASE IF NOT EXISTS appointment_booking
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE appointment_booking;

CREATE TABLE IF NOT EXISTS customers (
  customer_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(60) NOT NULL,
  last_name VARCHAR(60) NOT NULL,
  phone VARCHAR(25) NOT NULL,
  email VARCHAR(120) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY uq_customers_phone (phone),
  UNIQUE KEY uq_customers_email (email)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS services (
  service_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  service_name VARCHAR(100) NOT NULL,
  description VARCHAR(500) NULL,
  duration_minutes SMALLINT UNSIGNED NOT NULL,
  price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  CONSTRAINT chk_service_duration CHECK (duration_minutes > 0),
  CONSTRAINT chk_service_price CHECK (price >= 0),
  UNIQUE KEY uq_services_name (service_name)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS staff (
  staff_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(60) NOT NULL,
  last_name VARCHAR(60) NOT NULL,
  phone VARCHAR(25) NOT NULL,
  email VARCHAR(120) NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  UNIQUE KEY uq_staff_phone (phone),
  UNIQUE KEY uq_staff_email (email)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS appointments (
  appointment_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  customer_id INT UNSIGNED NOT NULL,
  service_id INT UNSIGNED NOT NULL,
  staff_id INT UNSIGNED NOT NULL,
  start_at DATETIME NOT NULL,
  end_at DATETIME NOT NULL,
  status ENUM('Pending','Confirmed','Completed','Cancelled','No-show') NOT NULL DEFAULT 'Pending',
  notes VARCHAR(1000) NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  CONSTRAINT fk_appointments_customer FOREIGN KEY (customer_id)
    REFERENCES customers(customer_id) ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT fk_appointments_service FOREIGN KEY (service_id)
    REFERENCES services(service_id) ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT fk_appointments_staff FOREIGN KEY (staff_id)
    REFERENCES staff(staff_id) ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT chk_appointment_time CHECK (end_at > start_at),
  INDEX idx_appointments_start (start_at),
  INDEX idx_appointments_status (status),
  INDEX idx_appointments_staff_time (staff_id, start_at, end_at),
  INDEX idx_appointments_customer (customer_id)
) ENGINE=InnoDB;

-- Example records for testing the schema (change/remove as required).
INSERT IGNORE INTO customers (customer_id, first_name, last_name, phone, email) VALUES
(1, 'Asha', 'Mushi', '+255700000001', 'asha.example@example.com'),
(2, 'Baraka', 'John', '+255700000002', 'baraka.example@example.com');

INSERT IGNORE INTO services (service_id, service_name, description, duration_minutes, price, is_active) VALUES
(1, 'General Consultation', 'Initial consultation service', 30, 15000.00, 1),
(2, 'Follow-up Session', 'Follow-up appointment', 20, 10000.00, 1);

INSERT IGNORE INTO staff (staff_id, first_name, last_name, phone, email, is_active) VALUES
(1, 'Neema', 'Joseph', '+255710000001', 'neema.example@example.com', 1),
(2, 'Daniel', 'Peter', '+255710000002', 'daniel.example@example.com', 1);

INSERT IGNORE INTO appointments
(appointment_id, customer_id, service_id, staff_id, start_at, end_at, status, notes) VALUES
(1, 1, 1, 1, '2026-10-20 10:00:00', '2026-10-20 10:30:00', 'Confirmed', 'Sample record for demonstration');
