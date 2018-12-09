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

* Alumno # Cuando se crea un alumno, equivale a la inscripcion del mismo

* Extensiones
* AlumnoExtension
* Carreras
* Materias
* Examenes
* TipoExamen
* AsistenciaExamen
* Becas
* AlumnoBeca
* Aulas (no necesario)
* Materias
* MateriaDetalle
* Funcionarios
* Docentes
* HorarioMateria
* Correlativas
* AsistenciaAlumno
* Matriculaciones
* ProcesoAlumno # Contiene informacion del proceso, promedio de examenes y la nota
* Semestre
* SemestreCuota # Contiene monto de cuota mensual del semenstre
* MateriaCuota # No Implementado

### Persona ###
* Persona
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
* Documentos # Contiene un campo tabla_referencia para volverlo generico
* DocumentoDetalle # Sube un documento, sin vincularlo a una persona, esto se realiza en la seccion de persona