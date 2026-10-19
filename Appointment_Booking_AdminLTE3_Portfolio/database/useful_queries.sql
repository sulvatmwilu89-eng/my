USE appointment_booking;

-- Today's appointments with human-readable names
SELECT a.appointment_id,
       CONCAT(c.first_name, ' ', c.last_name) AS customer,
       s.service_name,
       CONCAT(st.first_name, ' ', st.last_name) AS staff_member,
       a.start_at, a.end_at, a.status
FROM appointments a
JOIN customers c ON c.customer_id = a.customer_id
JOIN services s ON s.service_id = a.service_id
JOIN staff st ON st.staff_id = a.staff_id
WHERE DATE(a.start_at) = CURDATE()
ORDER BY a.start_at;

-- Example overlap check for a selected staff member and proposed time.
-- Replace the sample values with validated application parameters.
SELECT COUNT(*) AS conflicts
FROM appointments
WHERE staff_id = 1
  AND status <> 'Cancelled'
  AND start_at < '2026-10-20 10:30:00'
  AND end_at > '2026-10-20 10:00:00';
