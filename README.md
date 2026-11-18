# Sistema de Gestión Clínica y Analítica (ERP Salud Mental)

Plataforma web desarrollada en **PHP (Laravel)** y desplegada en **producción en Hostinger**, diseñada para la gestión clínica integral, agendamiento de sesiones, control financiero y seguimiento psicométrico (escalas YBOCS) para una institución de salud mental.

> **Nota de Confidencialidad:** Tratándose de un sistema activo en producción que maneja información clínica sensible, este repositorio funciona como un **caso de estudio arquitectónico**. Se han omitido credenciales, datos reales de usuarios y el código fuente propietario; las capturas de pantalla utilizan entornos de prueba sanitizados.

---

## 👥 Arquitectura de Control de Acceso y Roles (RBAC)
El sistema implementa una jerarquía estricta de permisos adaptada a la operación real de la clínica:
* **Psicólogos:** Acceso enfocado a la gestión de sus propios pacientes asignados, control de agendas y registro cronológico de historias clínicas/sesiones.
* **Administradores:** Supervisión de la asignación de citas, reportes gerenciales de analítica y control general del personal clínico.
* **Super Administrador:** Acceso total al sistema, control de roles y administración exclusiva del módulo de auditoría y **papelera (elementos eliminados)** para la recuperación segura de información crítica.

---

* **Entidades Principales:** `users` (Gestión de roles y permisos para administradores y psicólogos), `patients` (Ficha clínica integral con segmentación geográfica normalizada mediante `countries` y `cities`)[cite: 15], y `appointments` (Núcleo operativo con control de modalidades, estados y notas de evolución TCC/EPR).
* **Módulos Especializados:** 
  * Sistema de evaluación psicométrica automatizada (`ybocs` y `ybocs_answers`).
  * Repositorio seguro de documentos clínicos por paciente (`patient_documents`).
  * Módulo de auditoría y recuperación mediante borrado lógico (`deleted_at` / Papelera).

*(Ver diagrama completo en `/database/erd-schema.md`)*

---

## 🛠️ Stack Tecnológico
* **Backend:** PHP 8.x, Laravel Framework, Eloquent ORM.
* **Base de Datos:** MySQL / MariaDB (Optimización con índices en claves foráneas y consultas analíticas).
* **Frontend / UI:** Blade Templates, HTML5, CSS3, JavaScript.
* **Infraestructura:** Despliegue en entorno de producción (Hostinger) con gestión segura de almacenamiento y variables de entorno.

---

## 📸 Módulos Principales (Entorno Sanitizado)

1. **Autenticación Segura (Login):** Acceso por roles restringido (`Super Admin`, `Administrador`, `Psicólogos`).
2. **Gestión Integral de Citas y Pacientes:** Filtros avanzados multi-variable (por nombre, país, ciudad, género, modalidad y especialista).
3. **Agenda y Disponibilidad:** Visualización interactiva de bloques horarios por profesional.
4. **Módulo de Analítica y Reportes (BI):** Paneles nativos que transforman registros transaccionales en métricas gerenciales (distribución demográfica por género, país, cargas de trabajo por psicólogo y líneas de tiempo mensuales).
5. **Papelera / Elementos Eliminados:** Prevención de pérdida de datos con restauración independiente por entidad (*Soft Delete Restore*).

---

## 📊 Enfoque Híbrido: Software + Datos
Este proyecto refleja mi capacidad de tender un puente natural entre el **desarrollo de software robusto** y la **ingeniería de datos**: un sistema transaccional bien estructurado garantiza que la ingesta, limpieza y consulta posterior de datos para análisis o machine learning sea limpia, estructurada y confiable desde la raíz.

---
> **Diseño y desarrollo:** Luis Zevallos · [MentDev](https://www.facebook.com/profile.php?id=61582344438020)
