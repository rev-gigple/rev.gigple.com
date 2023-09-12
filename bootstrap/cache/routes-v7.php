<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
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
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
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
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aoQ9ephiJ3sujHCr',
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
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EJJsJ7qJm3PLy1Vb',
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
      '/inbox' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inbox',
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
      '/inbox/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gB9XrkP2YQpuwr4x',
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
      '/inbox/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.message',
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
      '/inbox/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.messages',
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
      '/inbox/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pusher.auth',
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
      '/inbox/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.seen',
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
      '/inbox/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.get',
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
      '/inbox/updateContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
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
      '/inbox/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'star',
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
      '/inbox/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favorites',
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
      '/inbox/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
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
      '/inbox/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shared',
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
      '/inbox/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'conversation.delete',
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
      '/inbox/deleteMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message.delete',
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
      '/inbox/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar.update',
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
      '/inbox/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activeStatus.set',
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
      '/inbox/api/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.pusher.auth',
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
      '/inbox/api/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.idInfo',
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
      '/inbox/api/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send.message',
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
      '/inbox/api/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fetch.messages',
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
      '/inbox/api/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.messages.seen',
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
      '/inbox/api/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contacts.get',
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
      '/inbox/api/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.star',
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
      '/inbox/api/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.favorites',
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
      '/inbox/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
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
      '/inbox/api/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shared',
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
      '/inbox/api/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.conversation.delete',
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
      '/inbox/api/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.avatar.update',
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
      '/inbox/api/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.activeStatus.set',
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
      '/dashboard/system/logs/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
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
      '/dashboard/system/logs/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
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
      '/dashboard/system/logs/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
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
      '/dashboard/system/logs/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
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
      '/dashboard/system/logs/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
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
      '/dashboard/system/logs/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
      '/wireui/button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.render.button',
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
      '/wireui/assets/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.scripts',
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
      '/wireui/assets/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.styles',
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
      '/paymentIPN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_ipn',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EN67KAO8igFK24eY',
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
      '/tasks/queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OWWDSgMoZh1d2tOP',
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
      '/tasks/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TGeTW3IgnhadVOkh',
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
            '_route' => 'generated::cPwJY7eda0945ECz',
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
      '/lets-started' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AiTKhZIOBzLLwhqt',
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
      '/explore/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6UmThOSCI0lbuzZH',
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
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nLPX7avzFT5K8ZXy',
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
      '/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vkdNtugYuucKNIQF',
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
      '/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2gCInu92kwyEVVw',
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
      '/newsletter/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vGXWXTghwlLjd2gF',
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
      '/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6YZpar8DCgu3un9Q',
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
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
      '/auth/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSDdq3jMSv6F12sP',
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
      '/auth/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OG8SToRGiFGv9hxI',
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
      '/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0E09uWwfgEJ6UhdA',
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
      '/auth/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B27j9hVqH740LbYM',
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
      '/auth/github' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kyBjal9kzyBQGYfE',
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
      '/auth/github/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNoPyD9HJOoulOlJ',
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
      '/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6PR6m3BFT7xuyIN8',
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
      '/auth/linkedin/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SaISShhwxQ73YtSW',
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
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ACEeKlfe1nlzo2FX',
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
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::94YmyAy0xUTP0nwm',
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
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sb5cNcg5Kbi1qbqz',
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
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bOEPN3yGGGOkSiW0',
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
      '/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x23Pt1274gkrberW',
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
      '/auth/twitter/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gbzCmcBQQtXGdUX9',
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
      '/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YNufECl0TzPFRrD1',
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
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2SXWmXWHWEYTOBxl',
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
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9zXViXCiIyqRhYs9',
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
      '/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9S75Y1GKmXhKrtrT',
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
      '/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJuZrjXL2RiZOVGx',
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
      '/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FCxo7L7HyFjCooGh',
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
      '/account/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b4z9LtcWzJ40V5Ru',
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
      '/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dL1VDmPjQ4VVNNnq',
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
      '/account/orders/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bPbl2sYZQG5CRTbg',
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
      '/account/orders/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5pXZc0tdwOhmPRdt',
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
      '/account/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M2daq3JrarsFFvZl',
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
      '/account/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nITYoLORuguQpTZG',
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
      '/account/billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QMUAdDeaMn3iFne4',
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
      '/account/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::boGn15kOWTUEBOlp',
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
      '/account/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jG1jS3wQ4xDzhFEY',
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
      '/account/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LnbC0nKCr0kqvMYE',
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
      '/account/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m3GQ8W5z6DeQTBN0',
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
      '/account/sessions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SZYuoLi3guWvsh1N',
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
      '/account/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bM7YyVQFOjtE4Y7U',
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
      '/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hN8FQP5hdOTMLLj8',
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
      '/start_selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uXHySADzEJppENEU',
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
      '/seller/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QXWHWG7gz82xLyOS',
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
      '/seller/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vn6DoVPneQqqjq93',
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
      '/seller/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mBik2KM1Ge0a13GX',
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
      '/seller/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3uU1ATNQ0A7RoM4h',
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
      '/seller/portfolio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nDdbhE28qjt6pYbX',
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
      '/seller/portfolio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KIBVHCur1Lt8uoU5',
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
      '/seller/earnings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EeTcHD104wdJ88D5',
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
      '/seller/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALI9KpNB5EplyYpM',
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
      '/seller/withdrawals/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zmbxrky8qO5p4aR7',
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
      '/seller/withdrawals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SKOkXB0xztCBBz8Z',
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
      '/seller/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X2nAUcfYEHLKC8O4',
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
      '/seller/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JrLL88YtxOe25MXb',
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
      '/seller/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dzX2KOU9IAyoIeGh',
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
      '/seller/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q537NwcaIS8YE9Jp',
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
      '/help/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZJa7q8lvkzLoG5JQ',
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
      '/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D33sX9l34gmtzfq3',
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
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ckCAkJd7VNxZNLFD',
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
      '/post/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MelDy2cGko1crAOU',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uvzJwXTzeQjoWdol',
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
      '/post/project/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rKhCzP2BjlWshPzm',
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
      '/callback/asaas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SaisB925BUvMSNJd',
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
      '/callback/campay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ceqJYbRQzOn6xxE5',
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
      '/callback/campay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LH4QnE5zxSoiwNvN',
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
      '/callback/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P8qEUt925UhqFBrb',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p9AeQg8m2mJeTALG',
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
      '/callback/cpay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UY9StU4JEYP6W9ko',
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
      '/callback/cpay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P1x9lyi40EcVKh5L',
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
      '/callback/duitku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iBM82Bxxz2NJcJjG',
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
      '/callback/ecpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rBJ4JDF8oe40KOcR',
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
      '/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hr8cqGKDNvmDKGaO',
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
      '/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gHRQjapoTwKgckPM',
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
      '/callback/fastpay/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzVqZbnDFUy5H2Jn',
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
      '/callback/fastpay/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g3ulvoWcI4VeqX36',
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
      '/callback/fastpay/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XAbuztCyT4W72crr',
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
      '/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rRmpwLgZ5UpNZVST',
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
      '/callback/freekassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D9vbw0pnD1R2BJyj',
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
      '/callback/genie-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zKFpn8XjxBcNmCeB',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OFoXud8qUi4iDyXE',
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
      '/callback/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HOuT7YIMFHQMQbDL',
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
      '/callback/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0WAQ8e2omL5qbPIl',
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
      '/callback/mercadopago/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gEO22gmX5dsNGL2M',
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
      '/callback/mercadopago/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mBPWuEeSaGxgLAOX',
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
      '/callback/mercadopago/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mzO4z8vi7MfUvl9X',
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
      '/callback/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CGhd8z9HDPZWcfFd',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1X8TZjiVjmPMmOA3',
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
      '/callback/nowpayments/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bCGa5QgZZkXpoAMA',
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
      '/callback/nowpayments/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SlzNXZrCcTg4EgzI',
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
      '/callback/nowpayments/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HSaUb2l8Rdy5exx',
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
      '/callback/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SXLc9cZhG03WAEAY',
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
      '/callback/paymob-pk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fKVU7Npy2gxi0Yq1',
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
      '/callback/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::thKvNjfcRO5pd0mp',
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
      '/callback/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nCP9asBdEYuQjJEt',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Th3Xxp8dFU39Suey',
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
      '/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6CGKIopMVTav5lzO',
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
      '/callback/paytr/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D5BgZvlanPTX4JkF',
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
      '/callback/paytr/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IddYVjvHPgTbL5Gx',
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
      '/callback/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Ce4rqJip9SsA8eQ',
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
      '/callback/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RKFoVICPSUMQDS01',
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
      '/callback/robokassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGGMBI4dgHUnmj0V',
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
      '/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9WAxuPHg2GEqjrv8',
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
      '/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1Bums5AEBIVSAGA',
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
      '/callback/xendit/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e9MXfhWdibVJgqcr',
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
      '/callback/xendit/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z0KoTvYKjOJ9L1j7',
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
      '/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rYaHppS44d52Rw5T',
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
      '/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NxPpcxcs6LckAShZ',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J962dJmw4Wh0dHGS',
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
      '/dashboard/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kWTZOc8fgypCnBC0',
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
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y3cPVJDqiyGEVGq4',
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
      '/dashboard/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XR6GNu3MlIcT8kzx',
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
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OmyJgfDpU0qESjz4',
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
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mwbz1132J9odtotR',
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
      '/dashboard/users/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9v4GDHeTW7wNpfyM',
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
      '/dashboard/users/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t9QjLjYeUbcz5VRx',
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
      '/dashboard/levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6eDJHEPavWzQ08zF',
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
      '/dashboard/levels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cmgqW7AlSxVD0Ibp',
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
      '/dashboard/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L4ca5qSG7sCDp7JL',
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
      '/dashboard/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPQEnupvukxrFL23',
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
      '/dashboard/gigs/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nYaOqD4alluXwKCS',
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
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6l7enVx5Im4ebY3g',
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
      '/dashboard/portfolios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kG5769OsUgJh7zMC',
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
      '/dashboard/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pU2elhgkKKvtkOcD',
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
      '/dashboard/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qH40Js9IiGkWg3rH',
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
      '/dashboard/projects/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Uc2DsQE7F35HoWt',
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
      '/dashboard/projects/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5jGnveth6UX2VJni',
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
      '/dashboard/projects/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iOKvZYquXr0x6tYO',
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
      '/dashboard/projects/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y21HgclRj8U6Ntuo',
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
      '/dashboard/projects/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HoTrriSTaa2Ne0A4',
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
      '/dashboard/projects/skills/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q54ERe8XGgV97DW5',
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
      '/dashboard/projects/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qnvEJ2RHfO3Z1wMj',
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
      '/dashboard/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jmhft27Tsq1mDGka',
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
      '/dashboard/projects/bids/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7CJBMnGCUtyv5IFn',
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
      '/dashboard/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qc4bQgoKcqd428H4',
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
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQDYPljhpCkqMkDa',
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
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LmNSlH4WJLzFWt3T',
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
      '/dashboard/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fHMZCw7WmXzzPRHB',
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
      '/dashboard/subcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TLWnon52mAVXwUzM',
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
      '/dashboard/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kKbupzQRvQiHGOZg',
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
      '/dashboard/reports/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kNjLmOFZlCecUs9U',
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
      '/dashboard/reports/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ihBvXdtKQoO7wk4I',
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
      '/dashboard/reports/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k3KJcfPLqVO1llj1',
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
      '/dashboard/reports/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0P4195fTLlf9v4HZ',
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
      '/dashboard/conversations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kT7pkasW68P0iADK',
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
      '/dashboard/advertisements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pdpj4cHfUBe6dmDM',
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
      '/dashboard/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZlpJgGExOel2mPOO',
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
      '/dashboard/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::puxMlAq6allyokoW',
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
      '/dashboard/newsletter/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SiBOg0hFltxy213L',
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
      '/dashboard/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I1Lr7Qcvy8Sa8KTL',
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
      '/dashboard/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::khbvxR6Tqslsy5RL',
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
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLmi4frOe8kcNp9M',
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
      '/dashboard/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ewOz5czglCwZ8BWC',
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
      '/dashboard/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mrg5GGjGxTqWpvy5',
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
      '/dashboard/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9GZoPUKrGtbZO83K',
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
      '/dashboard/services/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OukiiMoLyyxQ1Xkc',
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
      '/dashboard/services/payment/edit/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LMRPPLKvXdzyT59b',
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
      '/dashboard/services/payment/edit/duitku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AVA4tYVkKrqExJfU',
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
      '/dashboard/services/payment/edit/genie-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0SR1tLtus9zMdZjV',
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
      '/dashboard/services/payment/edit/asaas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lQlyhHMkVsDEjIGk',
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
      '/dashboard/services/payment/edit/ecpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4OvNzIycBdvtppEW',
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
      '/dashboard/services/payment/edit/fastpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTOM39eSSj1s2ujE',
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
      '/dashboard/services/payment/edit/freekassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FA5XGbz899lwdcSZ',
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
      '/dashboard/services/payment/edit/paymob-pk' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jYpC5l1Tz6wEnz28',
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
      '/dashboard/services/payment/edit/cpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OpOtGg4082dbMmJG',
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
      '/dashboard/services/payment/edit/nowpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::knFDLrOKtxJi8xU1',
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
      '/dashboard/services/payment/edit/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IjyoBnzS0tp3lDxk',
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
      '/dashboard/services/payment/edit/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y9yvxBPKHS3WxAyX',
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
      '/dashboard/services/payment/edit/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k4kauh4r4G0u6Umv',
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
      '/dashboard/services/payment/edit/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJCopFuZ8IzRSboL',
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
      '/dashboard/services/payment/edit/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I8581YUes1TiZoRd',
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
      '/dashboard/services/payment/edit/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6cwk5HAW0YeMvCJd',
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
      '/dashboard/services/payment/edit/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gQP97dwkqwGzEvyO',
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
      '/dashboard/services/payment/edit/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3cUF9fgXaIs4ruUi',
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
      '/dashboard/services/payment/edit/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uENp5Kw4Cj8BLv6R',
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
      '/dashboard/services/payment/edit/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gulhCgalT9InN835',
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
      '/dashboard/services/payment/edit/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pOPgQ5QVzhCEtseT',
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
      '/dashboard/services/payment/edit/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWs6km7xPHYlcsbq',
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
      '/dashboard/services/payment/edit/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ngAOZrfPQmqznD88',
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
      '/dashboard/services/payment/edit/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GVXyHHsAMvcxYAiB',
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
      '/dashboard/services/payment/edit/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XJzkNfSNfutKtFej',
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
      '/dashboard/services/payment/edit/epoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Ci9Quj4uBjKuwsx',
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
      '/dashboard/services/payment/edit/campay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::40naaiikJ5zEbZcH',
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
      '/dashboard/services/payment/edit/robokassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b5UGkdy8gEXm3UGV',
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
      '/dashboard/services/payment/edit/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L6NVcuvLjW4qwtrb',
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
      '/dashboard/services/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MBWCu9NiUZFTbTWt',
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
      '/dashboard/services/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A0y0W9Wl3WfYIuB8',
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
      '/dashboard/services/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SQHi3u0NSKRUqG7D',
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
      '/dashboard/services/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UR5VHLjoFGNUO7t6',
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
      '/dashboard/services/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9skA7NkX5QW5GsFP',
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
      '/dashboard/services/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::biyPoUqoPUr9JXnt',
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
      '/dashboard/services/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v1etLwyCSAMlYWGe',
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
      '/dashboard/services/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5EfQctMZv27ECEmI',
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
      '/dashboard/services/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tvhRNScCkMlTq1SM',
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
      '/dashboard/services/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2nvcZDzH1emWbQgx',
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
      '/dashboard/services/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OqAZph6KcOLfk58Y',
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
      '/dashboard/services/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rtV1rY3lO8g5VKxR',
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
      '/dashboard/services/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5XNvl7al19gVkhX1',
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
      '/dashboard/services/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IE5OxHsxNvmSvMsI',
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
      '/dashboard/services/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xPWsehjybGlrtNfU',
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
      '/dashboard/services/recaptcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1E3FnwpQ9wopFRCT',
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
      '/dashboard/services/cloudinary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8dkPsrSYV1AnCwEc',
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
      '/dashboard/services/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tkbwk9cfa9m0qtv3',
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
      '/dashboard/services/nowpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KzlyAXDZMLjKySgn',
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
      '/dashboard/services/epoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bbIs8CXjUmyvtadg',
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
      '/dashboard/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bpozwe47MUFUGUIw',
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
      '/dashboard/settings/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RHIigwlwQ2G6SJyJ',
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
      '/dashboard/settings/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CFEZa53b6TPDsHXH',
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
      '/dashboard/settings/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZlmyTaz2FpDoTjks',
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
      '/dashboard/settings/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::03jlr3KqYgkRN4kV',
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
      '/dashboard/settings/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DueVusO7SlXG7mbl',
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
      '/dashboard/settings/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMugSHm6vR0o9LLP',
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
      '/dashboard/settings/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJBln7vWkVn0WVfh',
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
      '/dashboard/settings/seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N8GmOpj5BNFNvDR9',
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
      '/dashboard/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74WxU4WlgG4xTk2o',
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
      '/dashboard/settings/withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h3P4EGWFliRY9cH3',
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
      '/dashboard/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mCqt5Aet5N942GMm',
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
      '/dashboard/settings/hero' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iKA7M4AlCrIqC3Bo',
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
      '/dashboard/settings/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3AZ4XWaz8vaRrXMZ',
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
      '/dashboard/verifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fXxbqN3so2gFYB3L',
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
      '/dashboard/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::73cEf4sK06bP5tAc',
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
      '/dashboard/blog/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x5k56unNLOe0QcGZ',
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
      '/dashboard/blog/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nYimXz7yNC8aP0Wt',
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
      '/dashboard/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3KrgTpkKsU05504',
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
      '/dashboard/system/crontab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ENUTJbbxG1JUfbQ6',
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
      '/dashboard/system/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rqtVAloy6gegKPUX',
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
      '/dashboard/system/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pCc6QnhytikkVoH2',
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
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HG9BESPBkGTq1bJq',
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
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/message/([^/]++)(*:107)|/([^/]++)/livewire/message/([^/]++)(*:150)|/livewire/preview\\-file/([^/]++)(*:190)|/inbox/(?|download/([^/]++)(*:225)|group/([^/]++)(*:247)|([^/]++)(*:263)|api/download/([^/]++)(*:292))|/dashboard/(?|s(?|ystem/logs(?|/api/f(?|olders/([^/]++)(?|/(?|download(*:371)|clear\\-cache(*:391))|(*:400))|iles/([^/]++)(?|/(?|download(*:437)|clear\\-cache(*:457))|(*:466)))|(?:/((?:.*)))?(*:490))|ubcategories/edit/([^/]++)(*:525))|users/(?|edit/([^/]++)(*:556)|details/([^/]++)(*:580)|balance/([^/]++)(*:604))|l(?|evels/edit/([^/]++)(*:636)|anguages/(?|edit/([^/]++)(*:669)|translate/([^/]++)(*:695)))|gigs/(?|edit/([^/]++)(*:726)|analytics/([^/]++)(*:752))|orders/details/([^/]++)(*:784)|refunds/details/([^/]++)(*:816)|p(?|rojects/(?|milestones/([^/]++)(*:858)|plans/(?|edit/([^/]++)(*:888)|bidding/edit/([^/]++)(*:917))|categories/edit/([^/]++)(*:950)|skills/edit/([^/]++)(*:978))|ages/edit/([^/]++)(*:1005))|c(?|ategories/edit/([^/]++)(*:1042)|ountries/edit/([^/]++)(*:1073))|blog/(?|comments/edit/([^/]++)(*:1113)|edit/([^/]++)(*:1135)))|/wireui/icons/((?:outline|solid))/([^/]++)(*:1188)|/explore/projects/([^/]++)(?|(*:1226)|/([^/]++)(*:1244))|/p(?|ro(?|ject/([^/]++)/([^/]++)(*:1286)|file/([^/]++)(?|(*:1311)|/portfolio(?|(*:1333)|/([^/]++)(*:1351))))|age/([^/]++)(*:1375))|/blog/([^/]++)(*:1399)|/se(?|rvice/([^/]++)(*:1428)|ller/(?|gigs/(?|analytics/([^/]++)(*:1471)|edit/([^/]++)(*:1493))|re(?|views/details/([^/]++)(*:1530)|funds/details/([^/]++)(*:1561))|orders/(?|de(?|tails/([^/]++)(*:1600)|liver/([^/]++)(*:1623))|requirements/([^/]++)(*:1654))|p(?|ortfolio/edit/([^/]++)(*:1690)|rojects/(?|milestones/([^/]++)(*:1729)|bids/(?|checkout/([^/]++)(*:1763)|edit/([^/]++)(*:1785))))))|/account/(?|re(?|views/(?|create/([^/]++)(*:1840)|preview/([^/]++)(*:1865)|edit/([^/]++)(*:1887))|funds/(?|request/([^/]++)(*:1922)|details/([^/]++)(*:1947)))|projects/(?|checkout/([^/]++)(*:1987)|milestones/([^/]++)(*:2015)|edit/([^/]++)(?|(*:2040))))|/categories/([^/]++)(?|(*:2075)|/([^/]++)(*:2093))|/hire/([^/]++)(*:2117)|/messages/(?|new/([^/]++)(*:2151)|([^/]++)(*:2168))|/reviews/([^/]++)(*:2195)|/uploads/(?|d(?|ocuments/([^/]++)(*:2237)|elivered/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2290))|requirements/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2348)|verifications/([^/]++)/([^/]++)/([^/]++)(*:2397)|offers/(?|([^/]++)(*:2424)|work/([^/]++)(*:2446))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
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
      150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
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
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
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
      225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
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
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group',
          ),
          1 => 
          array (
            0 => 'id',
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
      263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => 
          array (
            0 => 'id',
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
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
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
      371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
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
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
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
      400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
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
      437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
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
      457 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
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
      466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
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
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
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
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mh3EEUzf2ZsnTMoK',
          ),
          1 => 
          array (
            0 => 'id',
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
      556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Er84PJ77I5rTKRea',
          ),
          1 => 
          array (
            0 => 'id',
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
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wDBPvkbmCVCFbO4a',
          ),
          1 => 
          array (
            0 => 'id',
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
      604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcDZz80NJ602FRSp',
          ),
          1 => 
          array (
            0 => 'id',
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
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQ0UBn8W7voQ7ia1',
          ),
          1 => 
          array (
            0 => 'id',
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
      669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SHKAX62Qqc1FS8SU',
          ),
          1 => 
          array (
            0 => 'id',
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
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1oUr9I7SiptM4OzR',
          ),
          1 => 
          array (
            0 => 'id',
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
      726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QOoV0MYjhsLoVA87',
          ),
          1 => 
          array (
            0 => 'id',
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
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NhpXocVlegXGZVFO',
          ),
          1 => 
          array (
            0 => 'id',
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
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TNfauhX5T8kr5bvu',
          ),
          1 => 
          array (
            0 => 'id',
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
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YSYWXlxkQXwHRidx',
          ),
          1 => 
          array (
            0 => 'id',
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
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JuSmRdoMSEpWAlsK',
          ),
          1 => 
          array (
            0 => 'id',
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
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UaF3apyJ1o87LUUW',
          ),
          1 => 
          array (
            0 => 'id',
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
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e6qzQFAYwBP8odfA',
          ),
          1 => 
          array (
            0 => 'id',
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
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WJhxyArsGZYHkgqC',
          ),
          1 => 
          array (
            0 => 'id',
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
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P6J1Me9qiIEMjJPF',
          ),
          1 => 
          array (
            0 => 'id',
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
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fmwnR0Co4lIgQbBh',
          ),
          1 => 
          array (
            0 => 'id',
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEMPhNSa7usTskTn',
          ),
          1 => 
          array (
            0 => 'id',
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
      1073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m2NimTj85IuwJzij',
          ),
          1 => 
          array (
            0 => 'id',
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
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aemjyKsYY3VdTWah',
          ),
          1 => 
          array (
            0 => 'id',
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
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K9OWdBqGkDZvFV7s',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.icons',
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'icon',
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
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FXhxGqiSE6TT5a64',
          ),
          1 => 
          array (
            0 => 'category_slug',
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
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LAWEQHlCDSTEcRIl',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'skill_slug',
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
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y4BquOy2pF76dXy9',
          ),
          1 => 
          array (
            0 => 'pid',
            1 => 'slug',
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
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tj1KcPdFgNy5rpMB',
          ),
          1 => 
          array (
            0 => 'username',
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
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gaaOz98Eyf90Z0S1',
          ),
          1 => 
          array (
            0 => 'username',
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
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mMD0axgieX0eRfnk',
          ),
          1 => 
          array (
            0 => 'username',
            1 => 'slug',
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
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4OtnRybP3vRGUyqS',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iX4xlZI4vjN1jIk7',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E4ElwivdRTji7sFu',
          ),
          1 => 
          array (
            0 => 'id',
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
      1493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cjURJHmfpwwGqRoJ',
          ),
          1 => 
          array (
            0 => 'id',
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
      1530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Unj3Hb4J053NZono',
          ),
          1 => 
          array (
            0 => 'id',
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
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZZzw0BqBBYt2NyCu',
          ),
          1 => 
          array (
            0 => 'id',
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
      1600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::klaxIvKyIRHFxq23',
          ),
          1 => 
          array (
            0 => 'id',
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
      1623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sm6I90cboNcMTyFj',
          ),
          1 => 
          array (
            0 => 'id',
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
      1654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::phwiUmeGm36BqHJZ',
          ),
          1 => 
          array (
            0 => 'id',
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
      1690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gYOQQHMM3qHEkHnQ',
          ),
          1 => 
          array (
            0 => 'id',
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
      1729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LD6w9oDm7GSXUvq3',
          ),
          1 => 
          array (
            0 => 'id',
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
      1763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xrp3sbMHvUQM5Guj',
          ),
          1 => 
          array (
            0 => 'id',
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
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e48Ux5mJlLv1HYpD',
          ),
          1 => 
          array (
            0 => 'id',
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
      1840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w6knWY3XTMWK5yuX',
          ),
          1 => 
          array (
            0 => 'itemId',
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
      1865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3FIGkcAZWjMqFZE2',
          ),
          1 => 
          array (
            0 => 'id',
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
      1887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XBTwsGn8cyvXDBZR',
          ),
          1 => 
          array (
            0 => 'id',
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
      1922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L4INaHlmPr21fAJl',
          ),
          1 => 
          array (
            0 => 'id',
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
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZHFx06HBO0hz4Xvm',
          ),
          1 => 
          array (
            0 => 'id',
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
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3W7vA4IbEeoi5QA2',
          ),
          1 => 
          array (
            0 => 'id',
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
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PikfboQNMt8Q4BKZ',
          ),
          1 => 
          array (
            0 => 'id',
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
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AeeWd2Efm0o7ZMj5',
          ),
          1 => 
          array (
            0 => 'id',
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
          0 => 
          array (
            '_route' => 'generated::rMC3gq52BcG1UwjI',
          ),
          1 => 
          array (
            0 => 'id',
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
      2075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XwCKWW1sO3d8sY4q',
          ),
          1 => 
          array (
            0 => 'parent',
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
      2093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RY9SYeOZrZYHg4mT',
          ),
          1 => 
          array (
            0 => 'parent',
            1 => 'subcategory',
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
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dzavIJ2ddh2HFjrG',
          ),
          1 => 
          array (
            0 => 'keyword',
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
      2151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KI2L4CNoFb7Tlb4b',
          ),
          1 => 
          array (
            0 => 'username',
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
      2168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YaLHFzw8ukyrHEL3',
          ),
          1 => 
          array (
            0 => 'conversationId',
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
      2195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8GGjmz6NLJrKMihF',
          ),
          1 => 
          array (
            0 => 'id',
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
      2237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z0Yaxpfjm43FN4xB',
          ),
          1 => 
          array (
            0 => 'uid',
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
      2290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fcryQeZwlIKNgXQ2',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'workId',
            3 => 'fileId',
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
      2348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nCkCoxGOOTkTJOXY',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'reqId',
            3 => 'fileId',
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
      2397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8BTfNUtXiR6WPh0K',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'fileId',
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
      2424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HAyjxUUXlCQCT1w2',
          ),
          1 => 
          array (
            0 => 'file',
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
      2446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m6G1GaYcsd1t1ZwJ',
          ),
          1 => 
          array (
            0 => 'file',
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
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
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
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
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
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
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
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
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
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
    'generated::aoQ9ephiJ3sujHCr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::aoQ9ephiJ3sujHCr',
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
    'generated::EJJsJ7qJm3PLy1Vb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::EJJsJ7qJm3PLy1Vb',
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
    'inbox' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'inbox',
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
    'generated::gB9XrkP2YQpuwr4x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'generated::gB9XrkP2YQpuwr4x',
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
    'send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'send.message',
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
    'fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'fetch.messages',
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
    'attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'attachments.download',
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
    'pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'pusher.auth',
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
    'messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'messages.seen',
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
    'contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.get',
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
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.update',
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
    'star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'star',
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
    'favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'favorites',
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
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'search',
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
    'shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'shared',
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
    'conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'conversation.delete',
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
    'message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'message.delete',
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
    'avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'avatar.update',
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
    'activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'activeStatus.set',
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
    'group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'group',
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
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'user',
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
    'api.pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.pusher.auth',
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
    'api.idInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.idInfo',
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
    'api.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.send.message',
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
    'api.fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.fetch.messages',
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
    'api.attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.attachments.download',
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
    'api.messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.messages.seen',
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
    'api.contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.contacts.get',
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
    'api.star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.star',
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
    'api.favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.favorites',
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
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.search',
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
    'api.shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.shared',
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
    'api.conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.conversation.delete',
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
    'api.avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.avatar.update',
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
    'api.activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.activeStatus.set',
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
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
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
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
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
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
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
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
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
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
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
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
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
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
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
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
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
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
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
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
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
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
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
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
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
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
    'wireui.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/icons/{style}/{icon}',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\IconsController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\IconsController',
        'as' => 'wireui.icons',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
        'style' => '(outline|solid)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.render.button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/button',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\ButtonController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\ButtonController',
        'as' => 'wireui.render.button',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
    'wireui.assets.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/scripts',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'as' => 'wireui.assets.scripts',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
    'wireui.assets.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/styles',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'as' => 'wireui.assets.styles',
        'namespace' => NULL,
        'prefix' => '/wireui',
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
    'payment_ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paymentIPN',
      'action' => 
      array (
        'uses' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'controller' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'as' => 'payment_ipn',
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
    'generated::EN67KAO8igFK24eY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000079d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EN67KAO8igFK24eY',
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
    'generated::OWWDSgMoZh1d2tOP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:108:"function() {

        \\Artisan::call(\'queue:work\', [\'--stop-when-empty\' => true, \'--force\' => true]);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::OWWDSgMoZh1d2tOP',
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
    'generated::TGeTW3IgnhadVOkh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:60:"function() {

        \\Artisan::call(\'schedule:run\');

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::TGeTW3IgnhadVOkh',
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
    'generated::cPwJY7eda0945ECz' => 
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
        'uses' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cPwJY7eda0945ECz',
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
    'generated::AiTKhZIOBzLLwhqt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lets-started',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\LetStarted\\LetsStartedComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\LetStarted\\LetsStartedComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\LetStarted',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AiTKhZIOBzLLwhqt',
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
    'generated::6UmThOSCI0lbuzZH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::6UmThOSCI0lbuzZH',
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
    'generated::FXhxGqiSE6TT5a64' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::FXhxGqiSE6TT5a64',
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
    'generated::LAWEQHlCDSTEcRIl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}/{skill_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::LAWEQHlCDSTEcRIl',
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
    'generated::Y4BquOy2pF76dXy9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/{pid}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Project',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::Y4BquOy2pF76dXy9',
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
    'generated::nLPX7avzFT5K8ZXy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::nLPX7avzFT5K8ZXy',
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
    'generated::iX4xlZI4vjN1jIk7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::iX4xlZI4vjN1jIk7',
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
    'generated::vkdNtugYuucKNIQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Sellers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::vkdNtugYuucKNIQF',
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
    'generated::v2gCInu92kwyEVVw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Redirect',
        'prefix' => '/redirect',
        'where' => 
        array (
        ),
        'as' => 'generated::v2gCInu92kwyEVVw',
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
    'generated::vGXWXTghwlLjd2gF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Newsletter',
        'prefix' => '/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::vGXWXTghwlLjd2gF',
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
    'generated::6YZpar8DCgu3un9Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::6YZpar8DCgu3un9Q',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'generated::gSDdq3jMSv6F12sP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::gSDdq3jMSv6F12sP',
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
    'generated::OG8SToRGiFGv9hxI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::OG8SToRGiFGv9hxI',
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
    'generated::0E09uWwfgEJ6UhdA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::0E09uWwfgEJ6UhdA',
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
    'generated::B27j9hVqH740LbYM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::B27j9hVqH740LbYM',
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
    'generated::kyBjal9kzyBQGYfE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::kyBjal9kzyBQGYfE',
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
    'generated::CNoPyD9HJOoulOlJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::CNoPyD9HJOoulOlJ',
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
    'generated::6PR6m3BFT7xuyIN8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::6PR6m3BFT7xuyIN8',
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
    'generated::SaISShhwxQ73YtSW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::SaISShhwxQ73YtSW',
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
    'generated::ACEeKlfe1nlzo2FX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::ACEeKlfe1nlzo2FX',
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
    'generated::94YmyAy0xUTP0nwm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::94YmyAy0xUTP0nwm',
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
    'generated::sb5cNcg5Kbi1qbqz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::sb5cNcg5Kbi1qbqz',
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
    'generated::bOEPN3yGGGOkSiW0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::bOEPN3yGGGOkSiW0',
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
    'generated::x23Pt1274gkrberW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::x23Pt1274gkrberW',
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
    'generated::gbzCmcBQQtXGdUX9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::gbzCmcBQQtXGdUX9',
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
    'generated::YNufECl0TzPFRrD1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::YNufECl0TzPFRrD1',
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
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Service',
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'service',
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
    'generated::2SXWmXWHWEYTOBxl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Cart',
        'prefix' => '/cart',
        'where' => 
        array (
        ),
        'as' => 'generated::2SXWmXWHWEYTOBxl',
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
    'generated::9zXViXCiIyqRhYs9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout',
        'prefix' => '/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::9zXViXCiIyqRhYs9',
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
    'generated::9S75Y1GKmXhKrtrT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Settings',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::9S75Y1GKmXhKrtrT',
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
    'generated::cJuZrjXL2RiZOVGx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Password',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::cJuZrjXL2RiZOVGx',
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
    'generated::FCxo7L7HyFjCooGh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Profile',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::FCxo7L7HyFjCooGh',
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
    'generated::b4z9LtcWzJ40V5Ru' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Verification',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::b4z9LtcWzJ40V5Ru',
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
    'generated::dL1VDmPjQ4VVNNnq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::dL1VDmPjQ4VVNNnq',
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
    'generated::bPbl2sYZQG5CRTbg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::bPbl2sYZQG5CRTbg',
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
    'generated::5pXZc0tdwOhmPRdt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::5pXZc0tdwOhmPRdt',
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
    'generated::M2daq3JrarsFFvZl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::M2daq3JrarsFFvZl',
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
    'generated::w6knWY3XTMWK5yuX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/create/{itemId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::w6knWY3XTMWK5yuX',
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
    'generated::3FIGkcAZWjMqFZE2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::3FIGkcAZWjMqFZE2',
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
    'generated::XBTwsGn8cyvXDBZR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::XBTwsGn8cyvXDBZR',
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
    'generated::nITYoLORuguQpTZG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Favorite',
        'prefix' => 'account/favorite',
        'where' => 
        array (
        ),
        'as' => 'generated::nITYoLORuguQpTZG',
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
    'generated::QMUAdDeaMn3iFne4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Billing',
        'prefix' => 'account/billing',
        'where' => 
        array (
        ),
        'as' => 'generated::QMUAdDeaMn3iFne4',
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
    'generated::boGn15kOWTUEBOlp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::boGn15kOWTUEBOlp',
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
    'generated::L4INaHlmPr21fAJl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::L4INaHlmPr21fAJl',
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
    'generated::ZHFx06HBO0hz4Xvm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::ZHFx06HBO0hz4Xvm',
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
    'generated::jG1jS3wQ4xDzhFEY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::jG1jS3wQ4xDzhFEY',
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
    'generated::LnbC0nKCr0kqvMYE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::LnbC0nKCr0kqvMYE',
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
    'generated::m3GQ8W5z6DeQTBN0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::m3GQ8W5z6DeQTBN0',
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
    'generated::3W7vA4IbEeoi5QA2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::3W7vA4IbEeoi5QA2',
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
    'generated::PikfboQNMt8Q4BKZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::PikfboQNMt8Q4BKZ',
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
    'generated::SZYuoLi3guWvsh1N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/sessions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Sessions\\SessionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Sessions\\SessionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Sessions',
        'prefix' => 'account/sessions',
        'where' => 
        array (
        ),
        'as' => 'generated::SZYuoLi3guWvsh1N',
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
    'generated::bM7YyVQFOjtE4Y7U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Offers',
        'prefix' => 'account/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::bM7YyVQFOjtE4Y7U',
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
    'generated::hN8FQP5hdOTMLLj8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Create',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hN8FQP5hdOTMLLj8',
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
    'generated::uXHySADzEJppENEU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'start_selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Become',
        'prefix' => '/start_selling',
        'where' => 
        array (
        ),
        'as' => 'generated::uXHySADzEJppENEU',
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
    'generated::QXWHWG7gz82xLyOS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Home',
        'prefix' => 'seller/home',
        'where' => 
        array (
        ),
        'as' => 'generated::QXWHWG7gz82xLyOS',
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
    'generated::vn6DoVPneQqqjq93' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::vn6DoVPneQqqjq93',
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
    'generated::E4ElwivdRTji7sFu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::E4ElwivdRTji7sFu',
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
    'generated::cjURJHmfpwwGqRoJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::cjURJHmfpwwGqRoJ',
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
    'generated::mBik2KM1Ge0a13GX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::mBik2KM1Ge0a13GX',
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
    'generated::Unj3Hb4J053NZono' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::Unj3Hb4J053NZono',
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
    'generated::3uU1ATNQ0A7RoM4h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::3uU1ATNQ0A7RoM4h',
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
    'generated::klaxIvKyIRHFxq23' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::klaxIvKyIRHFxq23',
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
    'generated::Sm6I90cboNcMTyFj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/deliver/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::Sm6I90cboNcMTyFj',
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
    'generated::phwiUmeGm36BqHJZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/requirements/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::phwiUmeGm36BqHJZ',
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
    'generated::nDdbhE28qjt6pYbX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::nDdbhE28qjt6pYbX',
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
    'generated::KIBVHCur1Lt8uoU5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::KIBVHCur1Lt8uoU5',
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
    'generated::gYOQQHMM3qHEkHnQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::gYOQQHMM3qHEkHnQ',
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
    'generated::EeTcHD104wdJ88D5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/earnings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings',
        'prefix' => 'seller/earnings',
        'where' => 
        array (
        ),
        'as' => 'generated::EeTcHD104wdJ88D5',
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
    'generated::ALI9KpNB5EplyYpM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::ALI9KpNB5EplyYpM',
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
    'generated::Zmbxrky8qO5p4aR7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::Zmbxrky8qO5p4aR7',
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
    'generated::SKOkXB0xztCBBz8Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::SKOkXB0xztCBBz8Z',
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
    'generated::X2nAUcfYEHLKC8O4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::X2nAUcfYEHLKC8O4',
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
    'generated::ZZzw0BqBBYt2NyCu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::ZZzw0BqBBYt2NyCu',
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
    'generated::JrLL88YtxOe25MXb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects',
        'prefix' => 'seller/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::JrLL88YtxOe25MXb',
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
    'generated::LD6w9oDm7GSXUvq3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones',
        'prefix' => 'seller/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::LD6w9oDm7GSXUvq3',
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
    'generated::dzX2KOU9IAyoIeGh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::dzX2KOU9IAyoIeGh',
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
    'generated::xrp3sbMHvUQM5Guj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::xrp3sbMHvUQM5Guj',
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
    'generated::e48Ux5mJlLv1HYpD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::e48Ux5mJlLv1HYpD',
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
    'generated::q537NwcaIS8YE9Jp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Offers',
        'prefix' => 'seller/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::q537NwcaIS8YE9Jp',
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
    'generated::ZJa7q8lvkzLoG5JQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Help\\Contact',
        'prefix' => '/help',
        'where' => 
        array (
        ),
        'as' => 'generated::ZJa7q8lvkzLoG5JQ',
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
    'generated::XwCKWW1sO3d8sY4q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::XwCKWW1sO3d8sY4q',
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
    'generated::RY9SYeOZrZYHg4mT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}/{subcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::RY9SYeOZrZYHg4mT',
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
    'generated::Tj1KcPdFgNy5rpMB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::Tj1KcPdFgNy5rpMB',
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
    'generated::gaaOz98Eyf90Z0S1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::gaaOz98Eyf90Z0S1',
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
    'generated::mMD0axgieX0eRfnk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::mMD0axgieX0eRfnk',
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
    'generated::dzavIJ2ddh2HFjrG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hire/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Hire',
        'prefix' => '/hire',
        'where' => 
        array (
        ),
        'as' => 'generated::dzavIJ2ddh2HFjrG',
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
    'generated::D33sX9l34gmtzfq3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::D33sX9l34gmtzfq3',
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
    'generated::KI2L4CNoFb7Tlb4b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/new/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::KI2L4CNoFb7Tlb4b',
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
    'generated::YaLHFzw8ukyrHEL3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/{conversationId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::YaLHFzw8ukyrHEL3',
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
    'generated::ckCAkJd7VNxZNLFD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Search',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'generated::ckCAkJd7VNxZNLFD',
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
    'generated::4OtnRybP3vRGUyqS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Page',
        'prefix' => '/page',
        'where' => 
        array (
        ),
        'as' => 'generated::4OtnRybP3vRGUyqS',
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
    'generated::8GGjmz6NLJrKMihF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Reviews',
        'prefix' => '/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::8GGjmz6NLJrKMihF',
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
    'generated::MelDy2cGko1crAOU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::MelDy2cGko1crAOU',
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
    'generated::uvzJwXTzeQjoWdol' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::uvzJwXTzeQjoWdol',
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
    'generated::rKhCzP2BjlWshPzm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::rKhCzP2BjlWshPzm',
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
    'generated::AeeWd2Efm0o7ZMj5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::AeeWd2Efm0o7ZMj5',
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
    'generated::rMC3gq52BcG1UwjI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::rMC3gq52BcG1UwjI',
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
    'generated::Z0Yaxpfjm43FN4xB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/documents/{uid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Documents',
        'prefix' => 'uploads/documents',
        'where' => 
        array (
        ),
        'as' => 'generated::Z0Yaxpfjm43FN4xB',
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
    'generated::nCkCoxGOOTkTJOXY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/requirements/{orderId}/{itemId}/{reqId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Requirements',
        'prefix' => 'uploads/requirements',
        'where' => 
        array (
        ),
        'as' => 'generated::nCkCoxGOOTkTJOXY',
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
    'generated::fcryQeZwlIKNgXQ2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/delivered/{orderId}/{itemId}/{workId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Delivered',
        'prefix' => 'uploads/delivered',
        'where' => 
        array (
        ),
        'as' => 'generated::fcryQeZwlIKNgXQ2',
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
    'generated::8BTfNUtXiR6WPh0K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/verifications/{id}/{type}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Verifications',
        'prefix' => 'uploads/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::8BTfNUtXiR6WPh0K',
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
    'generated::HAyjxUUXlCQCT1w2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@attachment',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::HAyjxUUXlCQCT1w2',
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
    'generated::m6G1GaYcsd1t1ZwJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/offers/work/{file}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Offers\\OffersController@work',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Offers',
        'prefix' => 'uploads/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::m6G1GaYcsd1t1ZwJ',
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
    'generated::SaisB925BUvMSNJd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/asaas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\AsaasController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\AsaasController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::SaisB925BUvMSNJd',
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
    'generated::ceqJYbRQzOn6xxE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/campay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CampayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\CampayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::ceqJYbRQzOn6xxE5',
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
    'generated::LH4QnE5zxSoiwNvN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/campay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CampayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\CampayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::LH4QnE5zxSoiwNvN',
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
    'generated::P8qEUt925UhqFBrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CashfreeController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\CashfreeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::P8qEUt925UhqFBrb',
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
    'generated::p9AeQg8m2mJeTALG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CashfreeController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\CashfreeController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::p9AeQg8m2mJeTALG',
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
    'generated::UY9StU4JEYP6W9ko' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cpay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CpayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\CpayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::UY9StU4JEYP6W9ko',
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
    'generated::P1x9lyi40EcVKh5L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/cpay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\CpayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\CpayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::P1x9lyi40EcVKh5L',
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
    'generated::iBM82Bxxz2NJcJjG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/duitku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\DuitkuController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\DuitkuController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::iBM82Bxxz2NJcJjG',
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
    'generated::rBJ4JDF8oe40KOcR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/ecpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EcpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\EcpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rBJ4JDF8oe40KOcR',
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
    'generated::hr8cqGKDNvmDKGaO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EpointController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\EpointController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::hr8cqGKDNvmDKGaO',
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
    'generated::gHRQjapoTwKgckPM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\EpointController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\EpointController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::gHRQjapoTwKgckPM',
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
    'generated::tzVqZbnDFUy5H2Jn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::tzVqZbnDFUy5H2Jn',
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
    'generated::g3ulvoWcI4VeqX36' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::g3ulvoWcI4VeqX36',
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
    'generated::XAbuztCyT4W72crr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/fastpay/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FastpayController@cancel',
        'controller' => 'App\\Http\\Controllers\\Callback\\FastpayController@cancel',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::XAbuztCyT4W72crr',
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
    'generated::rRmpwLgZ5UpNZVST' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FlutterwaveController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\FlutterwaveController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rRmpwLgZ5UpNZVST',
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
    'generated::D9vbw0pnD1R2BJyj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/freekassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\FreekassaController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\FreekassaController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::D9vbw0pnD1R2BJyj',
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
    'generated::zKFpn8XjxBcNmCeB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\GenieController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\GenieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::zKFpn8XjxBcNmCeB',
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
    'generated::OFoXud8qUi4iDyXE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\GenieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\GenieController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::OFoXud8qUi4iDyXE',
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
    'generated::HOuT7YIMFHQMQbDL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\IyzicoController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\IyzicoController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::HOuT7YIMFHQMQbDL',
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
    'generated::0WAQ8e2omL5qbPIl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\JazzcashController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\JazzcashController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::0WAQ8e2omL5qbPIl',
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
    'generated::gEO22gmX5dsNGL2M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::gEO22gmX5dsNGL2M',
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
    'generated::mBPWuEeSaGxgLAOX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@pending',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@pending',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::mBPWuEeSaGxgLAOX',
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
    'generated::mzO4z8vi7MfUvl9X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mercadopago/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\MercadopagoController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::mzO4z8vi7MfUvl9X',
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
    'generated::CGhd8z9HDPZWcfFd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MollieController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\MollieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::CGhd8z9HDPZWcfFd',
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
    'generated::1X8TZjiVjmPMmOA3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\MollieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\MollieController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::1X8TZjiVjmPMmOA3',
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
    'generated::bCGa5QgZZkXpoAMA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/nowpayments/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@ipn',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@ipn',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::bCGa5QgZZkXpoAMA',
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
    'generated::SlzNXZrCcTg4EgzI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/nowpayments/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::SlzNXZrCcTg4EgzI',
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
    'generated::8HSaUb2l8Rdy5exx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/nowpayments/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@cancel',
        'controller' => 'App\\Http\\Controllers\\Callback\\NowpaymentsController@cancel',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::8HSaUb2l8Rdy5exx',
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
    'generated::SXLc9cZhG03WAEAY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaymobController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaymobController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::SXLc9cZhG03WAEAY',
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
    'generated::fKVU7Npy2gxi0Yq1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob-pk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaymobPkController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaymobPkController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::fKVU7Npy2gxi0Yq1',
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
    'generated::thKvNjfcRO5pd0mp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaypalController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaypalController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::thKvNjfcRO5pd0mp',
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
    'generated::nCP9asBdEYuQjJEt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaystackController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaystackController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::nCP9asBdEYuQjJEt',
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
    'generated::Th3Xxp8dFU39Suey' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaystackController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaystackController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Th3Xxp8dFU39Suey',
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
    'generated::6CGKIopMVTav5lzO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytabsController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytabsController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::6CGKIopMVTav5lzO',
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
    'generated::D5BgZvlanPTX4JkF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::D5BgZvlanPTX4JkF',
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
    'generated::IddYVjvHPgTbL5Gx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::IddYVjvHPgTbL5Gx',
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
    'generated::7Ce4rqJip9SsA8eQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\PaytrController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\PaytrController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::7Ce4rqJip9SsA8eQ',
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
    'generated::RKFoVICPSUMQDS01' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\RazorpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\RazorpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::RKFoVICPSUMQDS01',
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
    'generated::uGGMBI4dgHUnmj0V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/robokassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\RobokassaController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\RobokassaController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::uGGMBI4dgHUnmj0V',
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
    'generated::9WAxuPHg2GEqjrv8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\StripeController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\StripeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::9WAxuPHg2GEqjrv8',
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
    'generated::o1Bums5AEBIVSAGA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\VnpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\VnpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::o1Bums5AEBIVSAGA',
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
    'generated::e9MXfhWdibVJgqcr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/xendit/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@success',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@success',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::e9MXfhWdibVJgqcr',
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
    'generated::Z0KoTvYKjOJ9L1j7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/xendit/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@failed',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@failed',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Z0KoTvYKjOJ9L1j7',
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
    'generated::rYaHppS44d52Rw5T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\XenditController@webhook',
        'controller' => 'App\\Http\\Controllers\\Callback\\XenditController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::rYaHppS44d52Rw5T',
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
    'generated::NxPpcxcs6LckAShZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Callback\\YoucanpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Callback\\YoucanpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::NxPpcxcs6LckAShZ',
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
    'generated::J962dJmw4Wh0dHGS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Home',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::J962dJmw4Wh0dHGS',
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
    'generated::kWTZOc8fgypCnBC0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Profile',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::kWTZOc8fgypCnBC0',
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
    'generated::Y3cPVJDqiyGEVGq4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::Y3cPVJDqiyGEVGq4',
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
    'generated::XR6GNu3MlIcT8kzx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Invoices',
        'prefix' => 'dashboard/invoices',
        'where' => 
        array (
        ),
        'as' => 'generated::XR6GNu3MlIcT8kzx',
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
    'generated::OmyJgfDpU0qESjz4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::OmyJgfDpU0qESjz4',
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
    'generated::Mwbz1132J9odtotR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Mwbz1132J9odtotR',
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
    'generated::Er84PJ77I5rTKRea' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Er84PJ77I5rTKRea',
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
    'generated::wDBPvkbmCVCFbO4a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::wDBPvkbmCVCFbO4a',
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
    'generated::mcDZz80NJ602FRSp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/balance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::mcDZz80NJ602FRSp',
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
    'generated::9v4GDHeTW7wNpfyM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions',
        'prefix' => 'dashboard/users/transactions',
        'where' => 
        array (
        ),
        'as' => 'generated::9v4GDHeTW7wNpfyM',
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
    'generated::t9QjLjYeUbcz5VRx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Trash',
        'prefix' => 'dashboard/users/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::t9QjLjYeUbcz5VRx',
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
    'generated::6eDJHEPavWzQ08zF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::6eDJHEPavWzQ08zF',
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
    'generated::cmgqW7AlSxVD0Ibp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::cmgqW7AlSxVD0Ibp',
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
    'generated::wQ0UBn8W7voQ7ia1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::wQ0UBn8W7voQ7ia1',
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
    'generated::L4ca5qSG7sCDp7JL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Withdrawals',
        'prefix' => 'dashboard/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::L4ca5qSG7sCDp7JL',
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
    'generated::vPQEnupvukxrFL23' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::vPQEnupvukxrFL23',
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
    'generated::QOoV0MYjhsLoVA87' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::QOoV0MYjhsLoVA87',
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
    'generated::NhpXocVlegXGZVFO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::NhpXocVlegXGZVFO',
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
    'generated::nYaOqD4alluXwKCS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash',
        'prefix' => 'dashboard/gigs/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::nYaOqD4alluXwKCS',
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
    'generated::6l7enVx5Im4ebY3g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::6l7enVx5Im4ebY3g',
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
    'generated::TNfauhX5T8kr5bvu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders\\Options',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::TNfauhX5T8kr5bvu',
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
    'generated::kG5769OsUgJh7zMC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/portfolios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Portfolios',
        'prefix' => 'dashboard/portfolios',
        'where' => 
        array (
        ),
        'as' => 'generated::kG5769OsUgJh7zMC',
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
    'generated::pU2elhgkKKvtkOcD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::pU2elhgkKKvtkOcD',
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
    'generated::YSYWXlxkQXwHRidx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::YSYWXlxkQXwHRidx',
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
    'generated::qH40Js9IiGkWg3rH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::qH40Js9IiGkWg3rH',
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
    'generated::2Uc2DsQE7F35HoWt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::2Uc2DsQE7F35HoWt',
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
    'generated::JuSmRdoMSEpWAlsK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones',
        'prefix' => 'dashboard/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::JuSmRdoMSEpWAlsK',
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
    'generated::5jGnveth6UX2VJni' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::5jGnveth6UX2VJni',
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
    'generated::UaF3apyJ1o87LUUW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::UaF3apyJ1o87LUUW',
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
    'generated::e6qzQFAYwBP8odfA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/bidding/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding',
        'prefix' => 'dashboard/projects/plans/bidding',
        'where' => 
        array (
        ),
        'as' => 'generated::e6qzQFAYwBP8odfA',
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
    'generated::iOKvZYquXr0x6tYO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::iOKvZYquXr0x6tYO',
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
    'generated::Y21HgclRj8U6Ntuo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::Y21HgclRj8U6Ntuo',
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
    'generated::WJhxyArsGZYHkgqC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::WJhxyArsGZYHkgqC',
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
    'generated::HoTrriSTaa2Ne0A4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::HoTrriSTaa2Ne0A4',
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
    'generated::q54ERe8XGgV97DW5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::q54ERe8XGgV97DW5',
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
    'generated::P6J1Me9qiIEMjJPF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::P6J1Me9qiIEMjJPF',
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
    'generated::qnvEJ2RHfO3Z1wMj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions',
        'prefix' => 'dashboard/projects/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::qnvEJ2RHfO3Z1wMj',
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
    'generated::Jmhft27Tsq1mDGka' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids',
        'prefix' => 'dashboard/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::Jmhft27Tsq1mDGka',
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
    'generated::7CJBMnGCUtyv5IFn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions',
        'prefix' => 'dashboard/projects/bids/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::7CJBMnGCUtyv5IFn',
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
    'generated::Qc4bQgoKcqd428H4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Offers\\OffersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Offers\\OffersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Offers',
        'prefix' => 'dashboard/offers',
        'where' => 
        array (
        ),
        'as' => 'generated::Qc4bQgoKcqd428H4',
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
    'generated::sQDYPljhpCkqMkDa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::sQDYPljhpCkqMkDa',
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
    'generated::LmNSlH4WJLzFWt3T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::LmNSlH4WJLzFWt3T',
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
    'generated::WEMPhNSa7usTskTn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::WEMPhNSa7usTskTn',
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
    'generated::fHMZCw7WmXzzPRHB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::fHMZCw7WmXzzPRHB',
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
    'generated::TLWnon52mAVXwUzM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::TLWnon52mAVXwUzM',
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
    'generated::Mh3EEUzf2ZsnTMoK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::Mh3EEUzf2ZsnTMoK',
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
    'generated::kKbupzQRvQiHGOZg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reviews',
        'prefix' => 'dashboard/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::kKbupzQRvQiHGOZg',
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
    'generated::kNjLmOFZlCecUs9U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::kNjLmOFZlCecUs9U',
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
    'generated::ihBvXdtKQoO7wk4I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::ihBvXdtKQoO7wk4I',
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
    'generated::k3KJcfPLqVO1llj1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::k3KJcfPLqVO1llj1',
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
    'generated::0P4195fTLlf9v4HZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::0P4195fTLlf9v4HZ',
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
    'generated::kT7pkasW68P0iADK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/conversations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Conversations',
        'prefix' => 'dashboard/conversations',
        'where' => 
        array (
        ),
        'as' => 'generated::kT7pkasW68P0iADK',
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
    'generated::pdpj4cHfUBe6dmDM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Advertisements',
        'prefix' => 'dashboard/advertisements',
        'where' => 
        array (
        ),
        'as' => 'generated::pdpj4cHfUBe6dmDM',
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
    'generated::ZlpJgGExOel2mPOO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Support',
        'prefix' => 'dashboard/support',
        'where' => 
        array (
        ),
        'as' => 'generated::ZlpJgGExOel2mPOO',
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
    'generated::puxMlAq6allyokoW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::puxMlAq6allyokoW',
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
    'generated::SiBOg0hFltxy213L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::SiBOg0hFltxy213L',
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
    'generated::I1Lr7Qcvy8Sa8KTL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::I1Lr7Qcvy8Sa8KTL',
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
    'generated::khbvxR6Tqslsy5RL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::khbvxR6Tqslsy5RL',
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
    'generated::SHKAX62Qqc1FS8SU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::SHKAX62Qqc1FS8SU',
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
    'generated::1oUr9I7SiptM4OzR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/translate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::1oUr9I7SiptM4OzR',
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
    'generated::KLmi4frOe8kcNp9M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::KLmi4frOe8kcNp9M',
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
    'generated::ewOz5czglCwZ8BWC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::ewOz5czglCwZ8BWC',
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
    'generated::fmwnR0Co4lIgQbBh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::fmwnR0Co4lIgQbBh',
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
    'generated::Mrg5GGjGxTqWpvy5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::Mrg5GGjGxTqWpvy5',
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
    'generated::9GZoPUKrGtbZO83K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::9GZoPUKrGtbZO83K',
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
    'generated::m2NimTj85IuwJzij' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::m2NimTj85IuwJzij',
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
    'generated::OukiiMoLyyxQ1Xkc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\PaymentComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\PaymentComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::OukiiMoLyyxQ1Xkc',
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
    'generated::LMRPPLKvXdzyT59b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\IyzicoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::LMRPPLKvXdzyT59b',
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
    'generated::AVA4tYVkKrqExJfU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/duitku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\DuitkuComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::AVA4tYVkKrqExJfU',
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
    'generated::0SR1tLtus9zMdZjV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/genie-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\GenieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::0SR1tLtus9zMdZjV',
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
    'generated::lQlyhHMkVsDEjIGk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/asaas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\AsaasComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::lQlyhHMkVsDEjIGk',
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
    'generated::4OvNzIycBdvtppEW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/ecpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EcpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::4OvNzIycBdvtppEW',
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
    'generated::LTOM39eSSj1s2ujE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/fastpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FastpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::LTOM39eSSj1s2ujE',
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
    'generated::FA5XGbz899lwdcSZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/freekassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FreekassaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::FA5XGbz899lwdcSZ',
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
    'generated::jYpC5l1Tz6wEnz28' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paymob-pk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobPkComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::jYpC5l1Tz6wEnz28',
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
    'generated::OpOtGg4082dbMmJG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/cpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::OpOtGg4082dbMmJG',
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
    'generated::knFDLrOKtxJi8xU1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/nowpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\NowpaymentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\NowpaymentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::knFDLrOKtxJi8xU1',
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
    'generated::IjyoBnzS0tp3lDxk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaypalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaypalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::IjyoBnzS0tp3lDxk',
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
    'generated::y9yvxBPKHS3WxAyX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::y9yvxBPKHS3WxAyX',
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
    'generated::k4kauh4r4G0u6Umv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaystackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaystackComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::k4kauh4r4G0u6Umv',
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
    'generated::UJCopFuZ8IzRSboL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CashfreeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CashfreeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::UJCopFuZ8IzRSboL',
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
    'generated::I8581YUes1TiZoRd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::I8581YUes1TiZoRd',
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
    'generated::6cwk5HAW0YeMvCJd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::6cwk5HAW0YeMvCJd',
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
    'generated::gQP97dwkqwGzEvyO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\VnpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\VnpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::gQP97dwkqwGzEvyO',
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
    'generated::3cUF9fgXaIs4ruUi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaymobComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::3cUF9fgXaIs4ruUi',
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
    'generated::uENp5Kw4Cj8BLv6R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::uENp5Kw4Cj8BLv6R',
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
    'generated::gulhCgalT9InN835' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::gulhCgalT9InN835',
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
    'generated::pOPgQ5QVzhCEtseT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\RazorpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\RazorpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::pOPgQ5QVzhCEtseT',
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
    'generated::NWs6km7xPHYlcsbq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::NWs6km7xPHYlcsbq',
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
    'generated::ngAOZrfPQmqznD88' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytrComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\PaytrComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::ngAOZrfPQmqznD88',
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
    'generated::GVXyHHsAMvcxYAiB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\JazzcashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\JazzcashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::GVXyHHsAMvcxYAiB',
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
    'generated::XJzkNfSNfutKtFej' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::XJzkNfSNfutKtFej',
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
    'generated::5Ci9Quj4uBjKuwsx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/epoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::5Ci9Quj4uBjKuwsx',
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
    'generated::40naaiikJ5zEbZcH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/campay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CampayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\CampayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::40naaiikJ5zEbZcH',
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
    'generated::b5UGkdy8gEXm3UGV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/robokassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\RobokassaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\RobokassaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::b5UGkdy8gEXm3UGV',
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
    'generated::L6NVcuvLjW4qwtrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/payment/edit/offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\OfflineComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways\\OfflineComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services\\Payment\\Gateways',
        'prefix' => 'dashboard/services/payment',
        'where' => 
        array (
        ),
        'as' => 'generated::L6NVcuvLjW4qwtrb',
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
    'generated::MBWCu9NiUZFTbTWt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::MBWCu9NiUZFTbTWt',
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
    'generated::A0y0W9Wl3WfYIuB8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::A0y0W9Wl3WfYIuB8',
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
    'generated::SQHi3u0NSKRUqG7D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::SQHi3u0NSKRUqG7D',
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
    'generated::UR5VHLjoFGNUO7t6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::UR5VHLjoFGNUO7t6',
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
    'generated::9skA7NkX5QW5GsFP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::9skA7NkX5QW5GsFP',
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
    'generated::biyPoUqoPUr9JXnt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::biyPoUqoPUr9JXnt',
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
    'generated::v1etLwyCSAMlYWGe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::v1etLwyCSAMlYWGe',
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
    'generated::5EfQctMZv27ECEmI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::5EfQctMZv27ECEmI',
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
    'generated::tvhRNScCkMlTq1SM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::tvhRNScCkMlTq1SM',
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
    'generated::2nvcZDzH1emWbQgx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::2nvcZDzH1emWbQgx',
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
    'generated::OqAZph6KcOLfk58Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::OqAZph6KcOLfk58Y',
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
    'generated::rtV1rY3lO8g5VKxR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::rtV1rY3lO8g5VKxR',
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
    'generated::5XNvl7al19gVkhX1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::5XNvl7al19gVkhX1',
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
    'generated::IE5OxHsxNvmSvMsI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::IE5OxHsxNvmSvMsI',
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
    'generated::xPWsehjybGlrtNfU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::xPWsehjybGlrtNfU',
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
    'generated::1E3FnwpQ9wopFRCT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::1E3FnwpQ9wopFRCT',
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
    'generated::8dkPsrSYV1AnCwEc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloudinary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::8dkPsrSYV1AnCwEc',
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
    'generated::Tkbwk9cfa9m0qtv3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::Tkbwk9cfa9m0qtv3',
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
    'generated::KzlyAXDZMLjKySgn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/nowpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::KzlyAXDZMLjKySgn',
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
    'generated::bbIs8CXjUmyvtadg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/epoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::bbIs8CXjUmyvtadg',
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
    'generated::Bpozwe47MUFUGUIw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Bpozwe47MUFUGUIw',
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
    'generated::RHIigwlwQ2G6SJyJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::RHIigwlwQ2G6SJyJ',
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
    'generated::CFEZa53b6TPDsHXH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::CFEZa53b6TPDsHXH',
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
    'generated::ZlmyTaz2FpDoTjks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ZlmyTaz2FpDoTjks',
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
    'generated::03jlr3KqYgkRN4kV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::03jlr3KqYgkRN4kV',
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
    'generated::DueVusO7SlXG7mbl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::DueVusO7SlXG7mbl',
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
    'generated::aMugSHm6vR0o9LLP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::aMugSHm6vR0o9LLP',
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
    'generated::xJBln7vWkVn0WVfh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::xJBln7vWkVn0WVfh',
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
    'generated::N8GmOpj5BNFNvDR9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::N8GmOpj5BNFNvDR9',
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
    'generated::74WxU4WlgG4xTk2o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::74WxU4WlgG4xTk2o',
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
    'generated::h3P4EGWFliRY9cH3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::h3P4EGWFliRY9cH3',
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
    'generated::mCqt5Aet5N942GMm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::mCqt5Aet5N942GMm',
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
    'generated::iKA7M4AlCrIqC3Bo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/hero',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::iKA7M4AlCrIqC3Bo',
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
    'generated::3AZ4XWaz8vaRrXMZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::3AZ4XWaz8vaRrXMZ',
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
    'generated::fXxbqN3so2gFYB3L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/verifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Verifications',
        'prefix' => 'dashboard/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::fXxbqN3so2gFYB3L',
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
    'generated::73cEf4sK06bP5tAc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::73cEf4sK06bP5tAc',
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
    'generated::x5k56unNLOe0QcGZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::x5k56unNLOe0QcGZ',
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
    'generated::nYimXz7yNC8aP0Wt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::nYimXz7yNC8aP0Wt',
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
    'generated::aemjyKsYY3VdTWah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::aemjyKsYY3VdTWah',
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
    'generated::Z3KrgTpkKsU05504' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3KrgTpkKsU05504',
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
    'generated::K9OWdBqGkDZvFV7s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::K9OWdBqGkDZvFV7s',
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
    'generated::ENUTJbbxG1JUfbQ6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/crontab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::ENUTJbbxG1JUfbQ6',
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
    'generated::rqtVAloy6gegKPUX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::rqtVAloy6gegKPUX',
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
    'generated::pCc6QnhytikkVoH2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::pCc6QnhytikkVoH2',
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
    'generated::HG9BESPBkGTq1bJq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'banned.ip',
          2 => 'guest:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::HG9BESPBkGTq1bJq',
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
  ),
)
);
