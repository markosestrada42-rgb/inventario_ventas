[Inventario Ventas README.md](https://github.com/user-attachments/files/25691582/Inventario.Ventas.README.md)
Inventario Ventas

Este proyecto corresponde al sistema Inventario Ventas, desarrollado como parte de un trabajo académico. El objetivo principal es gestionar productos con una interfaz clara y visual, integrando mejoras progresivas en cada commit.

Novedades implementadas

	Se integró Bootstrap para mejorar la presentación visual de formularios, tablas y botones.
	Se organizaron controladores y modelos para manejar la lógica del sistema.
	Se creó un archivo de configuración de base de datos (config/database.php) para centralizar la conexión.
	Se añadió una vista pública de productos (public/productos.php) con diseño responsivo y moderno.
	Se corrigieron conflictos en la base de datos (inventario_ventas.sql) para asegurar compatibilidad.
	Finalmente, se realizó la subida completa del programa con todas las carpetas (config, controllers, models, 	public) visibles en GitHub.

Elaboración de la base de datos en XAMPP

La base de datos se construyó utilizando MySQL en XAMPP, siguiendo una estructura clara y reproducible:

	Se creó la base de datos inventario_ventas desde phpMyAdmin.
	Se definieron tablas principales como productos, con campos para ID, nombre, descripción, precio y stock.
	Se añadieron claves primarias y restricciones para garantizar integridad en los registros.
	Se exportó el archivo inventario_ventas.sql como respaldo, para que cualquier usuario pueda importar la base y 	reproducir el sistema.
	Durante el proceso se presentaron conflictos al subir el archivo SQL a GitHub, lo que obligó a realizar ajustes y 	resolver diferencias entre ramas.
Este enfoque asegura que el sistema sea portable y fácil de instalar en cualquier entorno con XAMPP.

Problemas encontrados

Durante el proceso de subida a GitHub se presentaron dificultades entre ellas se presentó que al intentar subir los 9 commits mediante consola, algunos no aparecieron reflejados en la rama remota.
Se realizaron varios intentos de sincronización con git push, pero los conflictos entre ramas (main y feature/productos) complicaron la integración.
Finalmente, se optó por un push forzado y una subida completa del programa para garantizar que todos los archivos quedaran visibles en GitHub.

Historial de commits

Aunque no todos quedaron reflejados en GitHub, por este medio documento los 9 commits realizados como evidencia del flujo de trabajo:

	Initial commit: creación inicial del repositorio con configuración básica.
	Primer commit: inclusión de archivos iniciales como. gitignore.
	Segundo commit: ajustes iniciales en la estructura del proyecto.
	Tercer commit: inclusión de controladores básicos para productos.
	Cuarto commit: creación de modelos para la gestión de productos.
	Quinto commit: implementación de vistas iniciales para productos.
	Sexto commit: ajustes en la base de datos y scripts SQL.
	Séptimo commit: corrección de conflictos en inventario_ventas.sql.
	Noveno commit: mejora visual de la aplicación usando Bootstrap (formularios, tablas, botones).
	Subida completa del programa inventario_ventas: inclusión final de todo el sistema (config/, controllers/, 	models/, public/).
		
		
Conclusión

El proyecto Inventario Ventas se encuentra ahora completamente subido en GitHub, con todas las carpetas y archivos necesarios. A pesar de los inconvenientes con la sincronización de commits, se logró mantener un registro transparente del proceso y se anexan aquí los mensajes de commit como evidencia del trabajo realizado.

Como enseñanza personal, este proyecto me permitió aprender a subir commits por consola, entender mejor el manejo de ramas en GitHub y enfrentar problemas reales de sincronización y conflictos. Además, me dejó la experiencia de documentar cada paso con claridad, lo cual refuerza la importancia de la transparencia y la organización en proyectos académicos y profesionales.
