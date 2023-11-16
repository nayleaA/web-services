# web-services
An API endpoint is a digital location where an API receives requests about a specific resource on its server. In APIs, an endpoint is typically a uniform resource locator (URL) that provides the location of a resource on the server.

# endPoints
Es necesario definir cada endpoint para cada tabla (todas las que tengas que consumas una api).

Los endpoins llevan una estrcutuctura definida de ulr por 2 palabras:
- [api](#api).
- [version (v-1, v-2, etc)](#version (v-1, v-2, etc)).

Es importante que las url que consuman api esten conformadas por estas premisas, como parte de la estructura para consumir apis de forma correcta.

```plain
                  http://www.myapi.com/api/v-1/<endopoint>
```

<!--EndPoint para Tareas-->
En este caso para la tabla de tareas quedaria algo asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/tareas (obtener todas las tareas)
-GET    - > http://www.myapi.com/api/v-1/tareas/byid/{id} (obtener tareas por id)
-GET    - > http://www.myapi.com/api/v-1/tareas/byuser/{idUser} (obtener tareas por usuario)
-POST   - > http://www.myapi.com/api/v-1/tareas (registrar tareas)
-PUT    - > http://www.myapi.com/api/v-1/tareas/{id} (modificar una tarea espeficica)
-DELETE - > http://www.myapi.com/api/v-1/tareas/{id} (eliminar una tarea especifica)
```
Otra de las formas que tenemos para enviar parámetros al API REST son los Query Params, los cuales son una serie de clave-valor que se agregan al final de la URL, justo después del signo de interrogación (?).
```plain
http://myapi.com/customers?name=oscar
```

El query param es la clave valor name=oscar que vemos al final de la URL, y como regla, siempre deberán estar después del símbolo de interrogación. Además, una URL puede tener N query params, cómo el siguiente ejemplo:

```plain
http://myapi.com/customers?firstname=oscar&lastname=blancarte&status=active
```

<!--EndPoint para Usuarios-->
Para la tabla de usuarios quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/usuarios (obtener todas los usuarios)
-GET    - > http://www.myapi.com/api/v-1/usuarios?email=ejemplo@gmail.com (con parametros)
-GET    - > http://www.myapi.com/api/v-1/usuarios?fields=nombre&searchby=email&value=ejemplo@gmail.com (con fields, search and value)
-GET    - > http://www.myapi.com/api/v-1/usuarios/byid/{id} (obtener usuarios por id)
-POST   - > http://www.myapi.com/api/v-1/usuarios (registrar usuarios)
-PUT    - > http://www.myapi.com/api/v-1/usuarios/{id} (modificar una usuario espeficico)
-DELETE - > http://www.myapi.com/api/v-1/usuarios/{id} (eliminar una usuario especifico)
```
<!--EndPoint para categoria-->
Para la tabla de  quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/categorias (obtener todas las categorias )
-GET    - > http://www.myapi.com/api/v-1/categorias/byid/{id} (obtener categorias  por id)
-POST   - > http://www.myapi.com/api/v-1/categorias (registrar categorias)
-PUT    - > http://www.myapi.com/api/v-1/categorias/{id} (modificar una categoria espeficica)
-DELETE - > http://www.myapi.com/api/v-1/categorias/{id} (eliminar una categoria especifica)
```

<!--EndPoint para  proyecto-->
Para la tabla de  quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/proyectos (obtener todas los proyectos)
-GET    - > http://www.myapi.com/api/v-1/proyectos/byid/{id} (obtener proyectos por id)
-GET    - > http://www.myapi.com/api/v-1/proyectos/byEquipo/{idEquipo} (obtener proyectos por equipo)
-POST   - > http://www.myapi.com/api/v-1/proyectos (registrar proyectos)
-PUT    - > http://www.myapi.com/api/v-1/proyectos/{id} (modificar proyectos espeficica)
-DELETE - > http://www.myapi.com/api/v-1/proyectos/{id} (eliminar proyectos especifica)

//con fields, search y value
-GET    - > http://www.myapi.com/api/v-1/proyectos?fields=nombre&searchby=idEquipo&value=EquipoDinamita (con fields, search and value para cosnultar por equipo)
-GET    - > http://www.myapi.com/api/v-1/proyectos?fields=nombre&searchby=idCategoriao&value=Escolares (con fields, search and value para consultar por categoria)
```

<!--EndPoint para lista comprobacion -->
Para la tabla de  quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/listac (obtener todas las listac)
-GET    - > http://www.myapi.com/api/v-1/listac/byid/{id} (obtener listac por id)
-GET    - > http://www.myapi.com/api/v-1/listac/byuser/{idUser} (obtener listac por usuario)
-POST   - > http://www.myapi.com/api/v-1/listac (registrar listac)
-PUT    - > http://www.myapi.com/api/v-1/listac/{id} (modificar una listac espeficica)
-DELETE - > http://www.myapi.com/api/v-1/listac/{id} (eliminar una listac especlistac

//con fields, search y value
-GET    - > http://www.myapi.com/api/v-1/listac?fields=titulo&searchby=idProyecto&value=1 (con fields, search and value para consultar por proyecto)
-GET    - > http://www.myapi.com/api/v-1/listac?fields=titulo&searchby=fechaV&value=16-11-2023 (con fields, search and value para consultar por fecha)
```

<!--EndPoint para equipo -->
Para la tabla de  quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/equipos (obtener todas las equipos)
-GET    - > http://www.myapi.com/api/v-1/equipos/byid/{id} (obtener equipos por id)
-GET    - > http://www.myapi.com/api/v-1/equipos/byLider/{idLider} (obtener equipos por Lider)
-POST   - > http://www.myapi.com/api/v-1/equipos (registrar equipos)
-PUT    - > http://www.myapi.com/api/v-1/equipos/{id} (modificar un equipo espeficica)
-DELETE - > http://www.myapi.com/api/v-1/equipos/{id} (eliminar un equipo especifica)
```

<!--EndPoint para  detalle del equipo-->
Para la tabla de  quedaria  asi:
```plain
-GET    - > http://www.myapi.com/api/v-1/tareas (obtener todas las tareas)
-GET    - > http://www.myapi.com/api/v-1/tareas/byid/{id} (obtener tareas por id)
-GET    - > http://www.myapi.com/api/v-1/tareas/byuser/{idUser} (obtener tareas por usuario)
-POST   - > http://www.myapi.com/api/v-1/tareas (registrar tareas)
-PUT    - > http://www.myapi.com/api/v-1/tareas/{id} (modificar una tarea espeficica)
-DELETE - > http://www.myapi.com/api/v-1/tareas/{id} (eliminar una tarea especifica)

//con fields, search y value
-GET    - > http://www.myapi.com/api/v-1/listac?fields=nombre&searchby=idEquipo&value=1 (con fields, search and value para consultar por proyecto)
-GET    - > http://www.myapi.com/api/v-1/listac?fields=roles&searchby=rol&value=lider (con fields, search and value para consultar por fecha)
```