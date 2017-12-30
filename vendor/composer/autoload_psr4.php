<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir   = dirname($vendorDir);

return array(
    'system\\'                          => array($baseDir . '/core'),
    'phpDocumentor\\Reflection\\'       => array(
        $vendorDir . '/phpdocumentor/reflection-common/src',
        $vendorDir . '/phpdocumentor/type-resolver/src',
        $vendorDir . '/phpdocumentor/reflection-docblock/src',
    ),
    'lib\\'                             => array($baseDir . '/lib'),
    'app\\'                             => array($baseDir . '/app'),
    'admin\\'                           => array($baseDir . '/admin'),
    'Webmozart\\Assert\\'               => array($vendorDir . '/webmozart/assert/src'),
    'Symfony\\Polyfill\\Mbstring\\'     => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
    'Symfony\\Component\\Finder\\'      => array($vendorDir . '/symfony/finder'),
    'Symfony\\Component\\Debug\\'       => array($vendorDir . '/symfony/debug'),
    'Symfony\\Bridge\\PhpUnit\\'        => array($vendorDir . '/symfony/phpunit-bridge'),
    'Psr\\Log\\'                        => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Container\\'                  => array($vendorDir . '/psr/container/src'),
    'PHPMailer\\PHPMailer\\'            => array($vendorDir . '/phpmailer/phpmailer/src'),
    'Monolog\\'                         => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Illuminate\\Support\\'             => array($vendorDir . '/illuminate/support'),
    'Illuminate\\Pagination\\'          => array($vendorDir . '/illuminate/pagination'),
    'Illuminate\\Filesystem\\'          => array($vendorDir . '/illuminate/filesystem'),
    'Illuminate\\Events\\'              => array($vendorDir . '/illuminate/events'),
    'Illuminate\\Database\\'            => array($vendorDir . '/illuminate/database'),
    'Illuminate\\Contracts\\'           => array($vendorDir . '/illuminate/contracts'),
    'Illuminate\\Container\\'           => array($vendorDir . '/illuminate/container'),
    'Doctrine\\Instantiator\\'          => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'Doctrine\\Common\\Inflector\\'     => array($vendorDir . '/doctrine/inflector/lib/Doctrine/Common/Inflector'),
    'DeepCopy\\'                        => array($vendorDir . '/myclabs/deep-copy/src/DeepCopy'),
    'Carbon\\'                          => array($vendorDir . '/nesbot/carbon/src/Carbon'),
);