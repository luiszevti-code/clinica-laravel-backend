-- =========================================================================
-- CASO DE ESTUDIO: Consultas Analíticas (Reporting & BI)
-- =========================================================================

-- 1. Tendencia temporal: Conteo de citas agendadas y realizadas por mes (Último año)
SELECT 
    DATE_FORMAT(date, '%Y-%m') AS anio_mes,
    status,
    COUNT(id) AS total_citas
FROM appointments
WHERE deleted_at IS NULL
GROUP BY anio_mes, status
ORDER BY anio_mes ASC;

-- 2. Carga operativa: Distribución de pacientes activos asignados por psicólogo
SELECT 
    u.name AS psicologo,
    COUNT(p.id) AS total_pacientes_asignados,
    ROUND((COUNT(p.id) / (SELECT COUNT(*) FROM patients WHERE deleted_at IS NULL)) * 100, 2) AS porcentaje_carga
FROM users u
LEFT JOIN patients p ON u.id = p.psychologist_id AND p.deleted_at IS NULL
WHERE u.role_id = 2 -- Rol de Psicólogos
GROUP BY u.id, u.name
ORDER BY total_pacientes_asignados DESC;