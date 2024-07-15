<?php
return [
    'service_manager' => [
        'factories' => [
            \Geral\V1\Rest\Pacientes\PacientesResource::class => \Geral\V1\Rest\Pacientes\PacientesResourceFactory::class,
            \Geral\V1\Rest\Pacientes\PacientesRepository::class => \Geral\V1\Rest\Pacientes\PacientesRepositoryFactory::class,
            \Geral\V1\Rest\Pacientes\PacientesService::class => \Geral\V1\Rest\Pacientes\PacientesServiceFactory::class,
            \Geral\V1\Rest\Pacientes\PacientesTableGateway::class => \Geral\V1\Rest\Pacientes\PacientesTableGateway::class,
            \Geral\V1\Rest\Profissional\ProfissionalResource::class => \Geral\V1\Rest\Profissional\ProfissionalResourceFactory::class,
            \Geral\V1\Rest\Profissional\ProfissionalRepository::class => \Geral\V1\Rest\Profissional\ProfissionalRepositoryFactory::class,
            \Geral\V1\Rest\Profissional\ProfissionalService::class => \Geral\V1\Rest\Profissional\ProfissionalServiceFactory::class,
            \Geral\V1\Rest\Profissional\ProfissionalTableGateway::class => \Geral\V1\Rest\Profissional\ProfissionalTableGateway::class,
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeResource::class => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeResourceFactory::class,
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeRepository::class => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeRepositoryFactory::class,
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeService::class => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeServiceFactory::class,
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeTableGateway::class => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeTableGateway::class,
            \Geral\V1\Rest\Procedimentos\ProcedimentosResource::class => \Geral\V1\Rest\Procedimentos\ProcedimentosResourceFactory::class,
            \Geral\V1\Rest\Procedimentos\ProcedimentosRepository::class => \Geral\V1\Rest\Procedimentos\ProcedimentosRepositoryFactory::class,
            \Geral\V1\Rest\Procedimentos\ProcedimentosService::class => \Geral\V1\Rest\Procedimentos\ProcedimentosServiceFactory::class,
            \Geral\V1\Rest\Procedimentos\ProcedimentosTableGateway::class => \Geral\V1\Rest\Procedimentos\ProcedimentosTableGateway::class,
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoResource::class => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoResourceFactory::class,
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoService::class => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoServiceFactory::class,
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoRepository::class => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoRepositoryFactory::class,
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoTableGateway::class => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoTableGateway::class,
        ],
    ],
    'router' => [
        'routes' => [
            'geral.rest.pacientes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/pacientes[/:pacientes_id]',
                    'defaults' => [
                        'controller' => 'Geral\\V1\\Rest\\Pacientes\\Controller',
                    ],
                ],
            ],
            'geral.rest.profissional' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profissional[/:profissional_id]',
                    'defaults' => [
                        'controller' => 'Geral\\V1\\Rest\\Profissional\\Controller',
                    ],
                ],
            ],
            'geral.rest.profissionalatende' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profissionalatende[/:profissionalatende_id]',
                    'defaults' => [
                        'controller' => 'Geral\\V1\\Rest\\Profissionalatende\\Controller',
                    ],
                ],
            ],
            'geral.rest.procedimentos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/procedimentos[/:procedimentos_id]',
                    'defaults' => [
                        'controller' => 'Geral\\V1\\Rest\\Procedimentos\\Controller',
                    ],
                ],
            ],
            'geral.rest.tiposolicitacao' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tiposolicitacao[/:tiposolicitacao_id]',
                    'defaults' => [
                        'controller' => 'Geral\\V1\\Rest\\Tiposolicitacao\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'geral.rest.pacientes',
            1 => 'geral.rest.profissional',
            2 => 'geral.rest.profissionalatende',
            3 => 'geral.rest.procedimentos',
            4 => 'geral.rest.tiposolicitacao',
        ],
    ],
    'api-tools-rest' => [
        'Geral\\V1\\Rest\\Pacientes\\Controller' => [
            'listener' => \Geral\V1\Rest\Pacientes\PacientesResource::class,
            'route_name' => 'geral.rest.pacientes',
            'route_identifier_name' => 'pacientes_id',
            'collection_name' => 'pacientes',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [
                0 => 'nome',
                1 => 'cpf',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Geral\V1\Rest\Pacientes\PacientesEntity::class,
            'collection_class' => \Geral\V1\Rest\Pacientes\PacientesCollection::class,
            'service_name' => 'Pacientes',
        ],
        'Geral\\V1\\Rest\\Profissional\\Controller' => [
            'listener' => \Geral\V1\Rest\Profissional\ProfissionalResource::class,
            'route_name' => 'geral.rest.profissional',
            'route_identifier_name' => 'profissional_id',
            'collection_name' => 'profissional',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Geral\V1\Rest\Profissional\ProfissionalEntity::class,
            'collection_class' => \Geral\V1\Rest\Profissional\ProfissionalCollection::class,
            'service_name' => 'Profissional',
        ],
        'Geral\\V1\\Rest\\Profissionalatende\\Controller' => [
            'listener' => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeResource::class,
            'route_name' => 'geral.rest.profissionalatende',
            'route_identifier_name' => 'profissionalatende_id',
            'collection_name' => 'profissionalatende',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeEntity::class,
            'collection_class' => \Geral\V1\Rest\Profissionalatende\ProfissionalatendeCollection::class,
            'service_name' => 'Profissionalatende',
        ],
        'Geral\\V1\\Rest\\Procedimentos\\Controller' => [
            'listener' => \Geral\V1\Rest\Procedimentos\ProcedimentosResource::class,
            'route_name' => 'geral.rest.procedimentos',
            'route_identifier_name' => 'procedimentos_id',
            'collection_name' => 'procedimentos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [
                0 => 'tipo',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Geral\V1\Rest\Procedimentos\ProcedimentosEntity::class,
            'collection_class' => \Geral\V1\Rest\Procedimentos\ProcedimentosCollection::class,
            'service_name' => 'Procedimentos',
        ],
        'Geral\\V1\\Rest\\Tiposolicitacao\\Controller' => [
            'listener' => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoResource::class,
            'route_name' => 'geral.rest.tiposolicitacao',
            'route_identifier_name' => 'tiposolicitacao_id',
            'collection_name' => 'tiposolicitacao',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoEntity::class,
            'collection_class' => \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoCollection::class,
            'service_name' => 'Tiposolicitacao',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Geral\\V1\\Rest\\Pacientes\\Controller' => 'HalJson',
            'Geral\\V1\\Rest\\Profissional\\Controller' => 'HalJson',
            'Geral\\V1\\Rest\\Profissionalatende\\Controller' => 'HalJson',
            'Geral\\V1\\Rest\\Procedimentos\\Controller' => 'HalJson',
            'Geral\\V1\\Rest\\Tiposolicitacao\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Geral\\V1\\Rest\\Pacientes\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Profissional\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Profissionalatende\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Procedimentos\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Tiposolicitacao\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Geral\\V1\\Rest\\Pacientes\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Profissional\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Profissionalatende\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Procedimentos\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/json',
            ],
            'Geral\\V1\\Rest\\Tiposolicitacao\\Controller' => [
                0 => 'application/vnd.geral.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Geral\V1\Rest\Pacientes\PacientesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.pacientes',
                'route_identifier_name' => 'pacientes_id',
                'hydrator' => \Laminas\Hydrator\ClassMethodsHydrator::class,
            ],
            \Geral\V1\Rest\Pacientes\PacientesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.pacientes',
                'route_identifier_name' => 'pacientes_id',
                'is_collection' => true,
            ],
            \Geral\V1\Rest\Profissional\ProfissionalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.profissional',
                'route_identifier_name' => 'profissional_id',
                'hydrator' => \Laminas\Hydrator\ClassMethodsHydrator::class,
            ],
            \Geral\V1\Rest\Profissional\ProfissionalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.profissional',
                'route_identifier_name' => 'profissional_id',
                'is_collection' => true,
            ],
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.profissionalatende',
                'route_identifier_name' => 'profissionalatende_id',
                'hydrator' => \Laminas\Hydrator\ClassMethodsHydrator::class,
            ],
            \Geral\V1\Rest\Profissionalatende\ProfissionalatendeCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.profissionalatende',
                'route_identifier_name' => 'profissionalatende_id',
                'is_collection' => true,
            ],
            \Geral\V1\Rest\Procedimentos\ProcedimentosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.procedimentos',
                'route_identifier_name' => 'procedimentos_id',
                'hydrator' => \Laminas\Hydrator\ClassMethodsHydrator::class,
            ],
            \Geral\V1\Rest\Procedimentos\ProcedimentosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.procedimentos',
                'route_identifier_name' => 'procedimentos_id',
                'is_collection' => true,
            ],
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.tiposolicitacao',
                'route_identifier_name' => 'tiposolicitacao_id',
                'hydrator' => \Laminas\Hydrator\ClassMethodsHydrator::class,
            ],
            \Geral\V1\Rest\Tiposolicitacao\TiposolicitacaoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'geral.rest.tiposolicitacao',
                'route_identifier_name' => 'tiposolicitacao_id',
                'is_collection' => true,
            ],
        ],
    ],
];
