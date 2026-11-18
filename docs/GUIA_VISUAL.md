# Guía Visual y Arquitectura de Interfaces

Este documento detalla los módulos clave implementados en el sistema de gestión clínica, asegurando el cumplimiento de flujos administrativos y clínicos bajo estrictas normas de privacidad (datos sanitizados).

| Módulo | Captura | Descripción Técnica |
| :--- | :--- | :--- |
| **1. Autenticación** | `01-login.png`[cite: 14] | Panel de acceso seguro con control de sesiones basado en roles (*Super Admin*, *Admin*, *Psicólogos*)[cite: 15]. |
| **2. Listado de Citas** | `02-citas-listado.png`[cite: 2] | Tabla transaccional con filtros por paciente, fecha y estado, conectada a la papelera lógica[cite: 2, 11]. |
| **3. Ficha de Paciente** | `03-perfil-paciente.png`[cite: 3] | Vista integral con datos demográficos, contactos de emergencia y descripción de evolución clínica[cite: 3]. |
| **4. Historial y Archivos**| `03-perfil-paciente2.png`[cite: 4] | Repositorio documental por paciente (PDFs y reportes) y trazabilidad cronológica de sesiones[cite: 4, 5]. |
| **5. Agenda Clínica** | `04-agenda.png`[cite: 10] | Calendario interactivo con bloques horarios y segmentación de disponibilidad por profesional[cite: 10]. |
| **6. Papelera / Auditoría**| `05-papelera.png`[cite: 11] | Módulo de recuperación (*Soft Delete Restore*) para prevenir pérdidas accidentales de datos críticos[cite: 11]. |
| **7. Analítica y BI** | `06-reportes-bi.png`[cite: 6, 7, 8, 9] | Paneles gráficos de segmentación demográfica (género, país) y tendencias mensuales de citas[cite: 6, 7, 8, 9]. |