<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.global-search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/attachments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.attachments',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.notifications.readAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/authenticate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.authenticate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B3VK19x3MVvzcJLV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mNdGWJY2j6SJCFpO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|re(?|source/([^/]++)/(?|crud(?|(*:48)|/([^/]++)(?|(*:67)))|handler/([^/]++)(*:92)|([^/]++)(*:107))|lation(?|/([^/]++)(?|/([^/]++)/([^/]++)/has\\-many\\-form(*:171)|(?:/([^/]++)(?:/([^/]++))?)?(*:207))|s/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:254)))|column/re(?|source/([^/]++)/([^/]++)(*:300)|lation/([^/]++)/([^/]++)/([^/]++)(*:341))|page/([^/]++)(*:363)|notifications/([^/]++)(*:393)|async/(?|table/([^/]++)(?:/([^/]++))?(*:438)|component/([^/]++)(?:/([^/]++))?(*:478)|method/([^/]++)(?:/([^/]++))?(*:515)|reactive/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:568))|socialite/([^/]++)/(?|redirect(*:607)|callback(*:623))|(.*)(*:636))|/storage/(.*)(*:658))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.crud.massDelete',
          ),
          1 => 
          array (
            0 => 'resourceUri',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.crud.store',
          ),
          1 => 
          array (
            0 => 'resourceUri',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      67 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.crud.update',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'resourceItem',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.crud.destroy',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'resourceItem',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      92 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.handler',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'handlerUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.resource.page',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'pageUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.relation.has-many-form',
            'resourceUri' => NULL,
            'resourceItem' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
            2 => 'resourceItem',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.relation.search',
            'resourceUri' => NULL,
            'resourceItem' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
            2 => 'resourceItem',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.relation.search-relations',
            'resourceUri' => NULL,
            'resourceItem' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
            2 => 'resourceItem',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.column.resource.update-column',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'resourceItem',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.column.relation.update-column',
          ),
          1 => 
          array (
            0 => 'resourceUri',
            1 => 'pageUri',
            2 => 'resourceItem',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.page',
          ),
          1 => 
          array (
            0 => 'pageUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.notifications.read',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.async.table',
            'resourceUri' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.async.component',
            'resourceUri' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.async.method',
            'resourceUri' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.async.reactive',
            'resourceUri' => NULL,
            'resourceItem' => NULL,
          ),
          1 => 
          array (
            0 => 'pageUri',
            1 => 'resourceUri',
            2 => 'resourceItem',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.socialite.redirect',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.socialite.callback',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'moonshine.',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'moonshine.crud.massDelete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/resource/{resourceUri}/crud',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\CrudController@massDelete',
        'controller' => 'MoonShine\\Http\\Controllers\\CrudController@massDelete',
        'as' => 'moonshine.crud.massDelete',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.crud.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/resource/{resourceUri}/crud',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'as' => 'moonshine.crud.store',
        'uses' => 'MoonShine\\Http\\Controllers\\CrudController@store',
        'controller' => 'MoonShine\\Http\\Controllers\\CrudController@store',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.crud.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/resource/{resourceUri}/crud/{resourceItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'as' => 'moonshine.crud.update',
        'uses' => 'MoonShine\\Http\\Controllers\\CrudController@update',
        'controller' => 'MoonShine\\Http\\Controllers\\CrudController@update',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.crud.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/resource/{resourceUri}/crud/{resourceItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'as' => 'moonshine.crud.destroy',
        'uses' => 'MoonShine\\Http\\Controllers\\CrudController@destroy',
        'controller' => 'MoonShine\\Http\\Controllers\\CrudController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.handler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/resource/{resourceUri}/handler/{handlerUri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\HandlerController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\HandlerController',
        'as' => 'moonshine.handler',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.resource.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resource/{resourceUri}/{pageUri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\PageController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\PageController',
        'as' => 'moonshine.resource.page',
        'namespace' => NULL,
        'prefix' => 'admin/resource/{resourceUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.column.resource.update-column' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/column/resource/{resourceUri}/{resourceItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\UpdateFieldController@column',
        'controller' => 'MoonShine\\Http\\Controllers\\UpdateFieldController@column',
        'as' => 'moonshine.column.resource.update-column',
        'namespace' => NULL,
        'prefix' => 'admin/column',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.column.relation.update-column' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/column/relation/{resourceUri}/{pageUri}/{resourceItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\UpdateFieldController@relation',
        'controller' => 'MoonShine\\Http\\Controllers\\UpdateFieldController@relation',
        'as' => 'moonshine.column.relation.update-column',
        'namespace' => NULL,
        'prefix' => 'admin/column',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/page/{pageUri}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\PageController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\PageController',
        'as' => 'moonshine.page',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.global-search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\GlobalSearchController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\GlobalSearchController',
        'as' => 'moonshine.global-search',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.relation.has-many-form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/relation/{pageUri}/{resourceUri?}/{resourceItem?}/has-many-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@hasManyForm',
        'controller' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@hasManyForm',
        'as' => 'moonshine.relation.has-many-form',
        'namespace' => NULL,
        'prefix' => 'admin/relation/{pageUri}/{resourceUri?}/{resourceItem?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.relation.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/relation/{pageUri}/{resourceUri?}/{resourceItem?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@search',
        'controller' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@search',
        'as' => 'moonshine.relation.search',
        'namespace' => NULL,
        'prefix' => 'admin/relation/{pageUri}/{resourceUri?}/{resourceItem?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.relation.search-relations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/relations/{pageUri}/{resourceUri?}/{resourceItem?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@searchRelations',
        'controller' => 'MoonShine\\Http\\Controllers\\RelationModelFieldController@searchRelations',
        'as' => 'moonshine.relation.search-relations',
        'namespace' => NULL,
        'prefix' => 'admin/relations/{pageUri}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\HomeController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\HomeController',
        'as' => 'moonshine.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.attachments' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\AttachmentController@__invoke',
        'controller' => 'MoonShine\\Http\\Controllers\\AttachmentController',
        'as' => 'moonshine.attachments',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.notifications.readAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\NotificationController@readAll',
        'controller' => 'MoonShine\\Http\\Controllers\\NotificationController@readAll',
        'as' => 'moonshine.notifications.readAll',
        'namespace' => NULL,
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.notifications.read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\NotificationController@read',
        'controller' => 'MoonShine\\Http\\Controllers\\NotificationController@read',
        'as' => 'moonshine.notifications.read',
        'namespace' => NULL,
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.async.table' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/async/table/{pageUri}/{resourceUri?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\AsyncController@table',
        'controller' => 'MoonShine\\Http\\Controllers\\AsyncController@table',
        'as' => 'moonshine.async.table',
        'namespace' => NULL,
        'prefix' => 'admin/async',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.async.component' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/async/component/{pageUri}/{resourceUri?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\AsyncController@component',
        'controller' => 'MoonShine\\Http\\Controllers\\AsyncController@component',
        'as' => 'moonshine.async.component',
        'namespace' => NULL,
        'prefix' => 'admin/async',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.async.method' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/async/method/{pageUri}/{resourceUri?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\AsyncController@method',
        'controller' => 'MoonShine\\Http\\Controllers\\AsyncController@method',
        'as' => 'moonshine.async.method',
        'namespace' => NULL,
        'prefix' => 'admin/async',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.async.reactive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/async/reactive/{pageUri}/{resourceUri?}/{resourceItem?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\AsyncController@reactive',
        'controller' => 'MoonShine\\Http\\Controllers\\AsyncController@reactive',
        'as' => 'moonshine.async.reactive',
        'namespace' => NULL,
        'prefix' => 'admin/async',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'MoonShine\\Http\\Controllers\\AuthenticateController@login',
        'controller' => 'MoonShine\\Http\\Controllers\\AuthenticateController@login',
        'as' => 'moonshine.login',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.authenticate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/authenticate',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'MoonShine\\Http\\Controllers\\AuthenticateController@authenticate',
        'controller' => 'MoonShine\\Http\\Controllers\\AuthenticateController@authenticate',
        'as' => 'moonshine.authenticate',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'MoonShine\\Http\\Controllers\\AuthenticateController@logout',
        'controller' => 'MoonShine\\Http\\Controllers\\AuthenticateController@logout',
        'as' => 'moonshine.logout',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.socialite.redirect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/socialite/{driver}/redirect',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'MoonShine\\Http\\Controllers\\SocialiteController@redirect',
        'controller' => 'MoonShine\\Http\\Controllers\\SocialiteController@redirect',
        'as' => 'moonshine.socialite.redirect',
        'namespace' => NULL,
        'prefix' => 'admin/socialite',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.socialite.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/socialite/{driver}/callback',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'MoonShine\\Http\\Controllers\\SocialiteController@callback',
        'controller' => 'MoonShine\\Http\\Controllers\\SocialiteController@callback',
        'as' => 'moonshine.socialite.callback',
        'namespace' => NULL,
        'prefix' => 'admin/socialite',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'moonshine',
          1 => 'MoonShine\\Http\\Middleware\\Authenticate',
        ),
        'uses' => 'MoonShine\\Http\\Controllers\\ProfileController@store',
        'controller' => 'MoonShine\\Http\\Controllers\\ProfileController@store',
        'as' => 'moonshine.profile.store',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'moonshine.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 'moonshine',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:61:"static function (): never {
            \\oops404();
        }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000050d0000000000000000";}}',
        'as' => 'moonshine.',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B3VK19x3MVvzcJLV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:329:"function () {
                    \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);

                    return \\Illuminate\\Support\\Facades\\View::file(\'/var/www/vendor/laravel/framework/src/Illuminate/Foundation/Configuration\'.\'/../resources/health-up.blade.php\');
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000005470000000000000000";}}',
        'as' => 'generated::B3VK19x3MVvzcJLV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mNdGWJY2j6SJCFpO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000054b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mNdGWJY2j6SJCFpO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:4:{s:6:"driver";s:5:"local";s:4:"root";s:28:"/var/www/storage/app/private";s:5:"serve";b:1;s:5:"throw";b:0;}s:12:"isProduction";b:0;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000054d0000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
