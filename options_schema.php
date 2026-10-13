<?php
declare(strict_types=1);

use Beeralex\Core\Config\Module\Schema\Schema;
use Beeralex\Core\Config\Module\Schema\SchemaTab;

return Schema::make()
    ->tab(
        'edit2',
        'JWT',
        'Токеновая авторизация (JWT)',
        function (SchemaTab $tab) {
            $tab->checkbox(
                'beeralex_user_enable_jwt_auth',
                'Включить авторизацию по JWT токенам',
                null,
                false,
                true
            );

            $tab->input(
                'beeralex_user_jwt_secret_key',
                'Секретный ключ для JWT',
                null,
                null,
                false,
                ''
            );

            $tab->input(
                'beeralex_user_jwt_ttl',
                'Время жизни JWT токена (в секундах)',
                null,
                null,
                false,
                '1200' // 20 минут, этого достаточно для большинства случаев. Если нужно больше - всегда можно обновить токен через refresh токен
            );

            $tab->input(
                'beeralex_user_jwt_refresh_ttl',
                'Время жизни refresh токена (в секундах)',
                null,
                null,
                false,
                '2592000'
            );

            $tab->input(
                'beeralex_user_jwt_algorithm',
                'Алгоритм шифрования JWT',
                null,
                null,
                false,
                'HS256'
            );

            $tab->input(
                'beeralex_user_jwt_issuer',
                'Издатель JWT токена (issuer)',
                null,
                null,
                false,
                'beeralex.user'
            );
        }
    );