# MandoLog API

Paquete para conectar el API MandoLog.

## Instalación

```bash
composer require dazza-dev/mandolog
```

## Autenticación (Obtener Bearer Token)

```php
use DazzaDev\Mandolog\Auth;

$client = new Auth();
$client->isTesting(true);
$client->setCredentials([
    'email' => 'email@email.com',
    'password' => 'contraseña'
]);

$auth = $client->authenticate();

$accessToken = $auth['token'];
```

## Instanciar el cliente

```php
use DazzaDev\Mandolog\Mandolog;

$client = new Mandolog($accessToken);
$client->isTesting(true);
```

## Consultar estado de un ticket

```php
$ticketNumber = '12345';
$ticket = $client->getTicket($ticketNumber);
```

## Enviar Manifiesto

```php
$manifest = $client->sendManifest([
  'N_ORDEN' => 'SHP000343639',
  'MBL' => 'PRUMBL6MAY',
  'REGIMEN' => '10',
  'COD_ADU' => '118',
  'VIA' => '1',
  'PTO_ORIGEN' => 'AEDXB',
  'PTO_DESTINO' => 'PECLL',
  'NOM_MN' => 'EVER LOYAL',
  'VIAJE' => '0632-059E',
  'ETA' => '2024-05-08',
  'ETD' => '2023-06-30',
  'FCH_MASTER' => '2024-05-06',
  'FCH_EMBAR' => '2023-06-30',
  'NUM_MANIF' => null,
  'ANO_MANIF' => null,
  'NRO_OMI' => '123456',
  'MDD' => [
    [
      'HBL' => 'PRUHBL6MAY',
      'TIPO_CARGA' => '12',
      'PTO_FINAL' => 'PECLL',
      'TIPO_BULTO' => 'CT',
      'MER_PELIG' => '9999',
      'A_ORDEN' => 0,
      'CNN' => [
        'CODIGO' => 'LIM1',
        'NOMBRE' => 'TOHERS SAC',
        'DIRECCION' => 'CALLE LOS TAPICEROS N° 2180, URB. EL ARTESANO',
        'TIPO_DOC' => '6',
        'N_DOC' => '20604848922',
        'COD_PAIS' => 'PE'
      ],
      'SHH' => [
        'CODIGO' => ':XJU1',
        'NOMBRE' => 'ZHEJIANG KINGSUN ECO-PACK CO., LTD',
        'DIRECCION' => 'NO.28, YICHENGER ROAD, ANZHOU STREET',
        'COD_PAIS' => 'CN'
      ],
      'NOT' => [
        'CODIGO' => 'LIM1',
        'NOMBRE' => 'TOHERS SAC',
        'DIRECCION' => 'CALLE LOS TAPICEROS N° 2180, URB. EL ARTESANO',
        'TIPO_DOC' => '6',
        'N_DOC' => '20604848922',
        'COD_PAIS' => 'PE'
      ],
      'CNO' => [
        [
          'N_CNT' => 'TYRE4532980'
        ]
      ],
      'HBD' => [
        [
          'MARCA' => 'EMCQLV1352',
          'DESCRIP' => 'DISPOSABLE TABLE WARE WITH PULPMOULD',
          'PESO' => 3923.29,
          'VIN' => 'VIN',
          'BULTOS' => 1
        ]
      ]
    ]
  ]
]);
```

## Contribuciones

Contribuciones son bienvenidas. Si encuentras algún error o tienes ideas para mejoras, por favor abre un issue o envía un pull request. Asegúrate de seguir las guías de contribución.

## Autor

MandoLog API Client fue creado por [DAZZA](https://github.com/dazza-dev).

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
