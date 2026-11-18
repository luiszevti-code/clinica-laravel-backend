# Guía Visual y Arquitectura de Interfaces

Este documento detalla los módulos clave implementados en el sistema de gestión clínica, asegurando el cumplimiento de flujos administrativos y clínicos bajo estrictas normas de privacidad (datos sanitizados).

| Módulo | Captura | Descripción Técnica |
| :--- | :--- | :--- |
| **1. Autenticación** | `01-login.png` | Panel de acceso seguro con control de sesiones basado en roles (*Super Admin*, *Admin*, *Psicólogos*). |
| **2. Listado de Citas** | `02-citas-listado.png` | Tabla transaccional con filtros por paciente, fecha y estado, conectada a la papelera lógica. |
| **3. Ficha de Paciente** | `03-perfil-paciente.png` | Vista integral con datos demográficos, contactos de emergencia y descripción de evolución clínica. |
| **4. Historial y Archivos**| `03-perfil-paciente2.png` | Repositorio documental por paciente (PDFs y reportes) y trazabilidad cronológica de sesiones. |
| **5. Agenda Clínica** | `04-agenda.png` | Calendario interactivo con bloques horarios y segmentación de disponibilidad por profesional. |
| **6. Papelera / Auditoría**| `05-papelera.png` | Módulo de recuperación (*Soft Delete Restore*) para prevenir pérdidas accidentales de datos críticos. |
| **7. Analítica y BI** | `06-reportes-bi.png` | Paneles gráficos de segmentación demográfica (género, país) y tendencias mensuales de citas. |
