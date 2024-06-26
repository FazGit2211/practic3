<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_alumno_index' => [[], ['_controller' => 'App\\Controller\\AlumnoController::index'], [], [['text', '/alumno/']], [], [], []],
    'app_alumno_new' => [[], ['_controller' => 'App\\Controller\\AlumnoController::new'], [], [['text', '/alumno/new']], [], [], []],
    'app_alumno_show' => [['id'], ['_controller' => 'App\\Controller\\AlumnoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/alumno']], [], [], []],
    'app_alumno_edit' => [['id'], ['_controller' => 'App\\Controller\\AlumnoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/alumno']], [], [], []],
    'app_alumno_delete' => [['id'], ['_controller' => 'App\\Controller\\AlumnoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/alumno']], [], [], []],
    'app_asignatura_index' => [[], ['_controller' => 'App\\Controller\\AsignaturaController::index'], [], [['text', '/asignatura/']], [], [], []],
    'app_asignatura_new' => [[], ['_controller' => 'App\\Controller\\AsignaturaController::new'], [], [['text', '/asignatura/new']], [], [], []],
    'app_asignatura_show' => [['id'], ['_controller' => 'App\\Controller\\AsignaturaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/asignatura']], [], [], []],
    'app_asignatura_edit' => [['id'], ['_controller' => 'App\\Controller\\AsignaturaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/asignatura']], [], [], []],
    'app_asignatura_delete' => [['id'], ['_controller' => 'App\\Controller\\AsignaturaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/asignatura']], [], [], []],
    'app_comision_index' => [[], ['_controller' => 'App\\Controller\\ComisionController::index'], [], [['text', '/comision/']], [], [], []],
    'app_comision_new' => [[], ['_controller' => 'App\\Controller\\ComisionController::new'], [], [['text', '/comision/new']], [], [], []],
    'app_comision_show' => [['id'], ['_controller' => 'App\\Controller\\ComisionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comision']], [], [], []],
    'app_comision_edit' => [['id'], ['_controller' => 'App\\Controller\\ComisionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comision']], [], [], []],
    'app_comision_delete' => [['id'], ['_controller' => 'App\\Controller\\ComisionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comision']], [], [], []],
    'app_correlativa_index' => [[], ['_controller' => 'App\\Controller\\CorrelativaController::index'], [], [['text', '/correlativa/']], [], [], []],
    'app_correlativa_new' => [[], ['_controller' => 'App\\Controller\\CorrelativaController::new'], [], [['text', '/correlativa/new']], [], [], []],
    'app_correlativa_show' => [['id'], ['_controller' => 'App\\Controller\\CorrelativaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/correlativa']], [], [], []],
    'app_correlativa_edit' => [['id'], ['_controller' => 'App\\Controller\\CorrelativaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/correlativa']], [], [], []],
    'app_correlativa_delete' => [['id'], ['_controller' => 'App\\Controller\\CorrelativaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/correlativa']], [], [], []],
    'app_cursada_index' => [[], ['_controller' => 'App\\Controller\\CursadaController::index'], [], [['text', '/cursada/']], [], [], []],
    'app_cursada_new' => [[], ['_controller' => 'App\\Controller\\CursadaController::new'], [], [['text', '/cursada/new']], [], [], []],
    'app_cursada_show' => [['id'], ['_controller' => 'App\\Controller\\CursadaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cursada']], [], [], []],
    'app_cursada_edit' => [['id'], ['_controller' => 'App\\Controller\\CursadaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cursada']], [], [], []],
    'app_cursada_delete' => [['id'], ['_controller' => 'App\\Controller\\CursadaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cursada']], [], [], []],
    'app_cursada_docente_index' => [[], ['_controller' => 'App\\Controller\\CursadaDocenteController::index'], [], [['text', '/cursadadocente/']], [], [], []],
    'app_cursada_docente_new' => [[], ['_controller' => 'App\\Controller\\CursadaDocenteController::new'], [], [['text', '/cursadadocente/new']], [], [], []],
    'app_cursada_docente_show' => [['id'], ['_controller' => 'App\\Controller\\CursadaDocenteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cursadadocente']], [], [], []],
    'app_cursada_docente_edit' => [['id'], ['_controller' => 'App\\Controller\\CursadaDocenteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cursadadocente']], [], [], []],
    'app_cursada_docente_delete' => [['id'], ['_controller' => 'App\\Controller\\CursadaDocenteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cursadadocente']], [], [], []],
    'app_docente_index' => [[], ['_controller' => 'App\\Controller\\DocenteController::index'], [], [['text', '/docente/']], [], [], []],
    'app_docente_new' => [[], ['_controller' => 'App\\Controller\\DocenteController::new'], [], [['text', '/docente/new']], [], [], []],
    'app_docente_show' => [['id'], ['_controller' => 'App\\Controller\\DocenteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/docente']], [], [], []],
    'app_docente_edit' => [['id'], ['_controller' => 'App\\Controller\\DocenteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/docente']], [], [], []],
    'app_docente_delete' => [['id'], ['_controller' => 'App\\Controller\\DocenteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/docente']], [], [], []],
    'app_examen_alumno_index' => [[], ['_controller' => 'App\\Controller\\ExamenAlumnoController::index'], [], [['text', '/examen/alumno/']], [], [], []],
    'app_examen_alumno_new' => [[], ['_controller' => 'App\\Controller\\ExamenAlumnoController::new'], [], [['text', '/examen/alumno/new']], [], [], []],
    'app_examen_alumno_show' => [['id'], ['_controller' => 'App\\Controller\\ExamenAlumnoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/examen/alumno']], [], [], []],
    'app_examen_alumno_edit' => [['id'], ['_controller' => 'App\\Controller\\ExamenAlumnoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/examen/alumno']], [], [], []],
    'app_examen_alumno_delete' => [['id'], ['_controller' => 'App\\Controller\\ExamenAlumnoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/examen/alumno']], [], [], []],
    'app_examen_final_index' => [[], ['_controller' => 'App\\Controller\\ExamenFinalController::index'], [], [['text', '/examen/final/']], [], [], []],
    'app_examen_final_new' => [[], ['_controller' => 'App\\Controller\\ExamenFinalController::new'], [], [['text', '/examen/final/new']], [], [], []],
    'app_examen_final_show' => [['id'], ['_controller' => 'App\\Controller\\ExamenFinalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/examen/final']], [], [], []],
    'app_examen_final_edit' => [['id'], ['_controller' => 'App\\Controller\\ExamenFinalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/examen/final']], [], [], []],
    'app_examen_final_delete' => [['id'], ['_controller' => 'App\\Controller\\ExamenFinalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/examen/final']], [], [], []],
    'app_habilitante_index' => [[], ['_controller' => 'App\\Controller\\HabilitanteController::index'], [], [['text', '/habilitante/']], [], [], []],
    'app_habilitante_new' => [[], ['_controller' => 'App\\Controller\\HabilitanteController::new'], [], [['text', '/habilitante/new']], [], [], []],
    'app_habilitante_show' => [['id'], ['_controller' => 'App\\Controller\\HabilitanteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/habilitante']], [], [], []],
    'app_habilitante_edit' => [['id'], ['_controller' => 'App\\Controller\\HabilitanteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/habilitante']], [], [], []],
    'app_habilitante_delete' => [['id'], ['_controller' => 'App\\Controller\\HabilitanteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/habilitante']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_institucion_index' => [[], ['_controller' => 'App\\Controller\\InstitucionController::index'], [], [['text', '/institucion/']], [], [], []],
    'app_institucion_new' => [[], ['_controller' => 'App\\Controller\\InstitucionController::new'], [], [['text', '/institucion/new']], [], [], []],
    'app_institucion_show' => [['id'], ['_controller' => 'App\\Controller\\InstitucionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/institucion']], [], [], []],
    'app_institucion_edit' => [['id'], ['_controller' => 'App\\Controller\\InstitucionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/institucion']], [], [], []],
    'app_institucion_delete' => [['id'], ['_controller' => 'App\\Controller\\InstitucionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/institucion']], [], [], []],
    'app_instituto_index' => [[], ['_controller' => 'App\\Controller\\InstitutoController::index'], [], [['text', '/instituto/']], [], [], []],
    'app_instituto_new' => [[], ['_controller' => 'App\\Controller\\InstitutoController::new'], [], [['text', '/instituto/new']], [], [], []],
    'app_instituto_show' => [['id'], ['_controller' => 'App\\Controller\\InstitutoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/instituto']], [], [], []],
    'app_instituto_edit' => [['id'], ['_controller' => 'App\\Controller\\InstitutoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/instituto']], [], [], []],
    'app_instituto_delete' => [['id'], ['_controller' => 'App\\Controller\\InstitutoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/instituto']], [], [], []],
    'app_localidad_index' => [[], ['_controller' => 'App\\Controller\\LocalidadController::index'], [], [['text', '/localidad/']], [], [], []],
    'app_localidad_new' => [[], ['_controller' => 'App\\Controller\\LocalidadController::new'], [], [['text', '/localidad/new']], [], [], []],
    'app_localidad_show' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], [], []],
    'app_localidad_edit' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], [], []],
    'app_localidad_delete' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], [], []],
    'app_modalidad_index' => [[], ['_controller' => 'App\\Controller\\ModalidadController::index'], [], [['text', '/modalidad/']], [], [], []],
    'app_modalidad_new' => [[], ['_controller' => 'App\\Controller\\ModalidadController::new'], [], [['text', '/modalidad/new']], [], [], []],
    'app_modalidad_show' => [['id'], ['_controller' => 'App\\Controller\\ModalidadController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modalidad']], [], [], []],
    'app_modalidad_edit' => [['id'], ['_controller' => 'App\\Controller\\ModalidadController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modalidad']], [], [], []],
    'app_modalidad_delete' => [['id'], ['_controller' => 'App\\Controller\\ModalidadController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modalidad']], [], [], []],
    'app_pais_index' => [[], ['_controller' => 'App\\Controller\\PaisController::index'], [], [['text', '/pais/']], [], [], []],
    'app_pais_new' => [[], ['_controller' => 'App\\Controller\\PaisController::new'], [], [['text', '/pais/new']], [], [], []],
    'app_pais_show' => [['id'], ['_controller' => 'App\\Controller\\PaisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pais']], [], [], []],
    'app_pais_edit' => [['id'], ['_controller' => 'App\\Controller\\PaisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pais']], [], [], []],
    'app_pais_delete' => [['id'], ['_controller' => 'App\\Controller\\PaisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pais']], [], [], []],
    'app_persona_index' => [[], ['_controller' => 'App\\Controller\\PersonaController::index'], [], [['text', '/persona/']], [], [], []],
    'app_persona_new' => [[], ['_controller' => 'App\\Controller\\PersonaController::new'], [], [['text', '/persona/new']], [], [], []],
    'app_persona_show' => [['id'], ['_controller' => 'App\\Controller\\PersonaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/persona']], [], [], []],
    'app_persona_edit' => [['id'], ['_controller' => 'App\\Controller\\PersonaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/persona']], [], [], []],
    'app_persona_delete' => [['id'], ['_controller' => 'App\\Controller\\PersonaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/persona']], [], [], []],
    'app_provincia_index' => [[], ['_controller' => 'App\\Controller\\ProvinciaController::index'], [], [['text', '/provincia/']], [], [], []],
    'app_provincia_new' => [[], ['_controller' => 'App\\Controller\\ProvinciaController::new'], [], [['text', '/provincia/new']], [], [], []],
    'app_provincia_show' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], [], []],
    'app_provincia_edit' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], [], []],
    'app_provincia_delete' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], [], []],
    'app_region_index' => [[], ['_controller' => 'App\\Controller\\RegionController::index'], [], [['text', '/region/']], [], [], []],
    'app_region_new' => [[], ['_controller' => 'App\\Controller\\RegionController::new'], [], [['text', '/region/new']], [], [], []],
    'app_region_show' => [['id'], ['_controller' => 'App\\Controller\\RegionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/region']], [], [], []],
    'app_region_edit' => [['id'], ['_controller' => 'App\\Controller\\RegionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/region']], [], [], []],
    'app_region_delete' => [['id'], ['_controller' => 'App\\Controller\\RegionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/region']], [], [], []],
    'app_revista_index' => [[], ['_controller' => 'App\\Controller\\RevistaController::index'], [], [['text', '/revista/']], [], [], []],
    'app_revista_new' => [[], ['_controller' => 'App\\Controller\\RevistaController::new'], [], [['text', '/revista/new']], [], [], []],
    'app_revista_show' => [['id'], ['_controller' => 'App\\Controller\\RevistaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/revista']], [], [], []],
    'app_revista_edit' => [['id'], ['_controller' => 'App\\Controller\\RevistaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/revista']], [], [], []],
    'app_revista_delete' => [['id'], ['_controller' => 'App\\Controller\\RevistaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/revista']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_tecnicatura_index' => [[], ['_controller' => 'App\\Controller\\TecnicaturaController::index'], [], [['text', '/tecnicatura/']], [], [], []],
    'app_tecnicatura_new' => [[], ['_controller' => 'App\\Controller\\TecnicaturaController::new'], [], [['text', '/tecnicatura/new']], [], [], []],
    'app_tecnicatura_show' => [['id'], ['_controller' => 'App\\Controller\\TecnicaturaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tecnicatura']], [], [], []],
    'app_tecnicatura_edit' => [['id'], ['_controller' => 'App\\Controller\\TecnicaturaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tecnicatura']], [], [], []],
    'app_tecnicatura_delete' => [['id'], ['_controller' => 'App\\Controller\\TecnicaturaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tecnicatura']], [], [], []],
    'app_telefono_index' => [[], ['_controller' => 'App\\Controller\\TelefonoController::index'], [], [['text', '/telefono/']], [], [], []],
    'app_telefono_new' => [[], ['_controller' => 'App\\Controller\\TelefonoController::new'], [], [['text', '/telefono/new']], [], [], []],
    'app_telefono_show' => [['id'], ['_controller' => 'App\\Controller\\TelefonoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/telefono']], [], [], []],
    'app_telefono_edit' => [['id'], ['_controller' => 'App\\Controller\\TelefonoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/telefono']], [], [], []],
    'app_telefono_delete' => [['id'], ['_controller' => 'App\\Controller\\TelefonoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/telefono']], [], [], []],
    'app_titulo_index' => [[], ['_controller' => 'App\\Controller\\TituloController::index'], [], [['text', '/titulo/']], [], [], []],
    'app_titulo_new' => [[], ['_controller' => 'App\\Controller\\TituloController::new'], [], [['text', '/titulo/new']], [], [], []],
    'app_titulo_show' => [['id'], ['_controller' => 'App\\Controller\\TituloController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/titulo']], [], [], []],
    'app_titulo_edit' => [['id'], ['_controller' => 'App\\Controller\\TituloController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/titulo']], [], [], []],
    'app_titulo_delete' => [['id'], ['_controller' => 'App\\Controller\\TituloController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/titulo']], [], [], []],
    'app_turno_index' => [[], ['_controller' => 'App\\Controller\\TurnoController::index'], [], [['text', '/turno/']], [], [], []],
    'app_turno_new' => [[], ['_controller' => 'App\\Controller\\TurnoController::new'], [], [['text', '/turno/new']], [], [], []],
    'app_turno_show' => [['id'], ['_controller' => 'App\\Controller\\TurnoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turno']], [], [], []],
    'app_turno_edit' => [['id'], ['_controller' => 'App\\Controller\\TurnoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/turno']], [], [], []],
    'app_turno_delete' => [['id'], ['_controller' => 'App\\Controller\\TurnoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/turno']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'search_alumnos' => [[], ['_controller' => 'App\\Controller\\AlumnoController::search_alumnos'], [], [['text', '/search_alumno']], [], [], []],
    'search_tecnicatura' => [[], ['_controller' => 'App\\Controller\\TecnicaturaController::search_tecnicatura'], [], [['text', '/search_tecnicatura']], [], [], []],
    'search_docente' => [[], ['_controller' => 'App\\Controller\\DocenteController::search_docente'], [], [['text', '/search_docente']], [], [], []],
];
