# Appointment Booking System — AdminLTE 3 Design Portfolio

This project is prepared for the Independent Project Brief: AdminLTE Interface and Relational Database Design.
Selected option: **C. Appointment Booking**.

## What's included
- `docs/Appointment_Booking_Design_Portfolio.docx` — submission-ready design portfolio.
- `database/schema.sql` — MySQL relational schema, keys, constraints, sample data.
- `database/ERD.svg` — readable entity relationship diagram.
- `index.php` — AdminLTE 3 dashboard.
- `pages/appointments.php` — appointment list and booking form (prototype interface).
- `pages/customers.php`, `pages/services.php`, `pages/staff.php` — planned management screens.
- `includes/header.php`, `sidebar.php`, `footer.php` — shared layout.
- `assets/css/custom.css` — small custom styling layer.

## Requirements
- XAMPP (Apache + MySQL/MariaDB) or another PHP/MySQL environment.
- PHP 7.4+ recommended; PHP 8.x is fine.
- Internet access for the AdminLTE 3, Bootstrap, Font Awesome, jQuery and DataTables CDN assets used by the interface.

> AdminLTE is referenced using its official AdminLTE 3 CDN example paths. For a fully offline setup, download the AdminLTE 3 distribution and replace the CDN references in `includes/header.php` and `includes/footer.php` with local asset paths. This package contains the project integration and design files, not the third-party AdminLTE distribution itself.

## Setup in XAMPP
1. Extract the folder into `C:\xampp\htdocs\Appointment_Booking_AdminLTE3_Portfolio`.
2. Start **Apache** and **MySQL** in XAMPP.
3. Open `http://localhost/phpmyadmin`.
4. Import `database/schema.sql` (it creates the `appointment_booking` database and tables).
5. Open `http://localhost/Appointment_Booking_AdminLTE3_Portfolio/`.

Database defaults in `includes/db.php`:
- Host: `localhost`
- User: `root`
- Password: empty (standard local XAMPP default)
- Database: `appointment_booking`

Change these credentials for your environment. Do not use an empty database password in production.

## Design scope
This is an educational prototype focused on scope, relational data design, ERD, and AdminLTE screen planning. The dashboard uses sample summary counts. The appointments screen presents the planned form/table; database schema is supplied so CRUD processing can be implemented as a next development phase. No real appointment is booked by this prototype.

## Submission checklist
- [x] Project option and scope
- [x] Intended users and assumptions
- [x] Entities, attributes, PKs, FKs, and rules
- [x] ERD
- [x] AdminLTE interface and component mapping
- [x] Interface-to-data consistency
- [x] SQL schema and sample records
