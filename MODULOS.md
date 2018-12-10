## Caso práctico ##


- Al inscribirse un alumno se referencia en la tabla a alumno a esa persona
	- Dicho proceso de inscirpción, se asocia a una carrera
	- El alumno debe matricularse a N Materias que haya pasado o que su correlativa (materia padre sea NULL)
	- El alumno puede hacer materias de N, semestre, siempre y cuando haya pasado las correlativas
	- Debe abonar el importe de la matricula, si es que hubiese uno

- Pago de Cuotas
	- El pago de cuotas puede ser por Materia o un importe Fijo Mensual que fue asignado previamente para dicho semestre
		- En el caso de las materias se genera, se cuenta con un trigger que consulta el estado de cuenta de los Alumnos, inserta en el detalle de la factura un campo llamado 'tabla_referencia' = 'por_materia' o 'por_monto_fijo' y esto se asocia a un alumno / socio / funcionario o persona




## Modulos ##

### Academico ###

* Alumno (✔) # Cuando se crea un alumno, equivale a la inscripcion del mismo
* Extensiones 
* AsistenciaExtension (✔)
* Carreras (✔)
* Materias
* Examenes (✔)
* TipoExamen
* AsistenciaExamen (✔)
* Becas (✔)
* AlumnoBeca
* Aulas (no necesario)
* Materias
* MateriaDetalle
* Funcionarios
* Facultades
* Docentes (✔)
* HorarioMateria
* Correlativas (✔)
* AsistenciaClase (✔)
* Matriculaciones
* ProcesoAlumno # Contiene informacion del proceso, promedio de examenes y la nota
* Semestre (✔)
* SemestreCuota (✔)# Contiene monto de cuota mensual del semenstre
* MateriaCuota # No Implementado

### Persona ###
* Persona (✔)
* RazonSocial
* PersonaParentezco
* PersonaProfesion
* Profesion
* PersonaEmail
* Email
* PersonaTelefono
* Telefono
* Usuario
* Permisos
* UsuarioPermiso
* Funcionarios (✔)


### Contable ###
* Factura
* FacturaDetalle
* Servicio

### Sociedades ###
* TipoSocio
* ConfiguracionCuota
* CuotaSocial # Detalle de cada cuota mensual, nro de la cuota
* Factura
* FacturaDetalle
* PeriodoConfiguracion # Refiere a si el periodo es mensual o anual
* PeriodoVencimiento # Fecha de Vencimiento de una Cuota


### Documentos ###
* TipoDocumento (✔) # Contiene un campo tabla_referencia y tabla_valor, que permite la carga de documentos vinculandolos a cualquier tabla
* Documentos (✔) # Sube un documento, sin vincularlo a una persona, esto se realiza en la seccion de persona
* DocumentoPresentado (✔) # Relaciona un Documento con un alumno, el documento tuvo que subirse previamente