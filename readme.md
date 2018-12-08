
## Academico2 

Referencias

Controladores

	- API : Contiene toda la informacion referente a los web service
		Namespace : KuaaSys\Http\Controllers\Academico\API
			Modificarlo por: KuaaSys\Http\Controllers\API\Academico
							 KuaaSys\Http\Controllers\API\Util
							 KuaaSys\Http\Controllers\API\Negocio
							 KuaaSys\Http\Controllers\API\Usuario


	- System: Contiene los controladores que manejan el sistema y vistas 
		Namespace : KuaaSys\Http\Controllers
			Modificarlo por KuaaSys\Http\Controllers\System
							KuaaSys\Http\Controllers\System\Academico
							KuaaSys\Http\Controllers\System\Usuario


### Modelos 
		
	Namespace : KuaaSys\Model
				KuaaSys\Model\Academico
				KuaaSys\Model\Common
				KuaaSys\Model\User
		

### Vistas
	Referencia de nombre de carpetas
	- entidad
	- entidad/entidad-list
	- entidad/entidad-detail
	- entidad/partials/*