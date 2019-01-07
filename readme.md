
## Academico2 

Sistema de Gestión Academica

* Referencias

### Controladores

	- API : Contiene toda la controladores que gestionan el API
		Namespace : 
			Academico2\Http\Controllers\Academico\API
			Academico2\Http\Controllers\API\Academico
			Academico2\Http\Controllers\API\Util
			Academico2\Http\Controllers\API\Negocio
			Academico2\Http\Controllers\API\Common


	- Manage: Contiene los controladores que gestionan el sistema web
		Namespace : Academico2\Http\Controllers
			Academico2\Http\Controllers\Manage
			Academico2\Http\Controllers\Manage\Academico
			Academico2\Http\Controllers\Manage\Common


### Modelos 
		
	Namespace : Academico2\Model
				Academico2\Model\Academico
				Academico2\Model\Common
				Academico2\Model\User
		

### Vistas
	Referencia de nombre de carpetas
	- entidad
	- entidad/entidad-list
	- entidad/entidad-form
	- entidad/entidad-detail
	- entidad/partials/*  // Codigos reutilizables de cada entidad


### Recursos (API)

Cuando el contenido requiere ser anidado, más completo y complejo.
En algunos casos se procedio a utilizar el standard jsonapi.org (sobre todo en especificaciones y detalles)

*JSON API* : Por cada recurso, la estructura es por ejemplo
	

Los recursos v2, aún no se encuentra implementados

### Significados de siglas y estados

Estados : 
- Registros Genéricos	
	- A : Activo
	- I : Inactivo - Registros que no seran tomados en cuenta para nuevas transacciones
	- P : Pendiente 
	- C : Cancelado - Se cancela la operación
	- R : Resuelto - Puede considerarse como Pagado, dependiendo del caso
	- O : Observado - Se observo, pero no se tomo decisión

- Pagos / Cobranzas
	- CO : Contado
	- CR : Credito

Otras siglas
- Género:
	- M : Masculino
	- F : Femenino

- Turnos:
- N : Noche
- T : Tarde
- M : Mañana


### REST
Sigue especificaciones de https://restfulapi.net/resource-naming/