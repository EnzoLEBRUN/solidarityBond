<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'amphp/amp' => 'v2.4.4@1e58d53e4af390efc7813e36cd215bd82cba4b06',
  'amphp/byte-stream' => 'v1.7.3@b867505edb79dda8f253ca3c3a2bbadae4b16592',
  'amphp/cache' => 'v1.4.0@e7bccc526fc2a555d59e6ee8380eeb39a95c0835',
  'amphp/dns' => 'v1.2.2@8cf2ccc4fa5a97f15b0b11087b22d2b544e45ab2',
  'amphp/hpack' => 'v3.1.0@0dcd35f9a8d9fc04d5fb8af0aeb109d4474cfad8',
  'amphp/http' => 'v1.6.0@8a1a1d6a78e6f432618aea02c6351602cf735cef',
  'amphp/http-client' => 'v4.4.0@fa7925363e6d5a0d0d337e2e6eb1affb93cf226e',
  'amphp/parser' => 'v1.0.0@f83e68f03d5b8e8e0365b8792985a7f341c57ae1',
  'amphp/process' => 'v1.1.0@355b1e561b01c16ab3d78fada1ad47ccc96df70e',
  'amphp/serialization' => 'v1.0.0@693e77b2fb0b266c3c7d622317f881de44ae94a1',
  'amphp/socket' => 'v1.1.2@f78ec36a7743647dba9db37d39df0e412fd73a7b',
  'amphp/sync' => 'v1.4.0@613047ac54c025aa800a9cde5b05c3add7327ed4',
  'amphp/windows-registry' => 'v0.3.2@834af7a30ad7c006b0326ccd2686ddc6e6943366',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'daverandom/libdns' => 'v2.0.2@e8b6d6593d18ac3a6a14666d8a68a4703b2e05f9',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.1.0@0fb513842c78b43770597ef3c487cdf79d944db3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'kelunik/certificate' => 'v1.1.2@56542e62d51533d04d0a9713261fea546bff80f6',
  'knplabs/knp-components' => 'v2.3.6@cf7ae015c1783009e2fd269483cd2b38a57b7033',
  'knplabs/knp-paginator-bundle' => 'v5.2.0@787174799b8de92287865566dce9e0625015f8ff',
  'league/uri' => '6.2.1@6998530902550c6e3fefb5ef98d56fe92ecdb603',
  'league/uri-interfaces' => '2.1.0@0068a469958895ceaf3afcb489c0258adfa1e406',
  'league/uri-parser' => '1.4.1@671548427e4c932352d9b9279fdfa345bf63fa00',
  'monolog/monolog' => '2.1.0@38914429aac460e8e4616c8cb486ecb40ec90bb1',
  'ocramius/package-versions' => '1.4.2@44af6f3a2e2e04f2af46bcb302ad9600cba41c7d',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'rollerworks/password-strength-validator' => 'v1.3.0@8c6441ba98253203964c2ecba53ef007e0324e33',
  'sensio/framework-extra-bundle' => 'v5.5.5@c76bb1c5c67840ecb6d9be8e9d8d7036e375e317',
  'stripe/stripe-php' => 'v7.37.2@da9ae0906966f344dba9530e25ea4e432bcafd64',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v5.1.0@2f07b5993f1607c1c489bac3e15a000c33668b4b',
  'symfony/cache' => 'v5.1.0@653b1d1cefffedb67ed1932db59c0bb344adf088',
  'symfony/cache-contracts' => 'v2.1.2@87c92f62c494626598e9148208aaa6d1716b8e3c',
  'symfony/config' => 'v5.1.0@b8623ef3d99fe62a34baf7a111b576216965f880',
  'symfony/console' => 'v5.1.0@00bed125812716d09b163f0727ef33bb49bf3448',
  'symfony/dependency-injection' => 'v5.1.0@6a6791e9584273b32eeb01790da4c7446d87a621',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/doctrine-bridge' => 'v5.1.0@e88cfe6333eca0afe08965b14598be60f9fc3d53',
  'symfony/dotenv' => 'v5.1.0@42d2a18597f4c7cafc0e25b1ad6a1cbb4f2caf05',
  'symfony/error-handler' => 'v5.1.0@7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
  'symfony/event-dispatcher' => 'v5.1.0@cc0d059e2e997e79ca34125a52f3e33de4424ac7',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/expression-language' => 'v5.1.0@f8344b92f6a19138df4dae4edbabe8e5fda11c7e',
  'symfony/filesystem' => 'v5.1.0@6e4320f06d5f2cce0d96530162491f4465179157',
  'symfony/finder' => 'v5.1.0@4298870062bfc667cb78d2b379be4bf5dec5f187',
  'symfony/flex' => 'v1.7.1@a53056880aae0ce034ac6c38906e162ee5cfd2df',
  'symfony/form' => 'v5.1.0@4d492698887bcf88569ae978362b6ca2c9a7df4a',
  'symfony/framework-bundle' => 'v5.1.0@db39e29cf3a99692390e6d18fdc57d42e9e5a3c9',
  'symfony/http-client' => 'v5.1.0@63342eabdc6fc6c12e6b18506a207d16687aa33f',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/http-foundation' => 'v5.1.0@e0d853bddc2b2cfb0d67b0b4496c03fffe1d37fa',
  'symfony/http-kernel' => 'v5.1.0@75ff5327a7d6ede3ccc2fac3ebca9ed776b3e85c',
  'symfony/inflector' => 'v5.1.0@fddb4262dd136b34db993a2a3488713df91e4856',
  'symfony/intl' => 'v5.1.0@b21d69ebb33adfcb7e6d8b0a0a8799db7090705b',
  'symfony/mailer' => 'v5.1.0@7308b053e16a4f43e2aaf32dc11f72174f59247e',
  'symfony/mime' => 'v5.1.0@56261f89385f9d13cf843a5101ac72131190bc91',
  'symfony/monolog-bridge' => 'v5.1.0@b275d752c7e999a77e1bddca117e575030a23058',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.1.0@ca756a1627c02b7b1b0c643f0b1c1d6cb5d792fb',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-grapheme' => 'v1.17.0@e094b0770f7833fdf257e6ba4775be4e258230b2',
  'symfony/polyfill-intl-icu' => 'v1.17.0@4ef3923e4a86e1b6ef72d42be59dbf7d33a685e3',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-intl-normalizer' => 'v1.17.0@1357b1d168eb7f68ad6a134838e46b0b159444a9',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/process' => 'v5.1.0@7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
  'symfony/property-access' => 'v5.1.0@776bf85b9ed5a9ba99496d5e5457a50de63cd997',
  'symfony/property-info' => 'v5.1.0@b644923132bdd92c2664f0c7955f77a9a2b8e919',
  'symfony/routing' => 'v5.1.0@95cf30145b26c758d6d832aa2d0de3128978d556',
  'symfony/security-bundle' => 'v5.1.0@410ce6220f458a3ac1347a3bb98383629223b8ce',
  'symfony/security-core' => 'v5.1.0@7414e45f720dd81879bd9a74f152ec92e91d36b6',
  'symfony/security-csrf' => 'v5.1.0@962323e4db4458d731d5006f14019a22a2f84b06',
  'symfony/security-guard' => 'v5.1.0@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.0@6a785d9a0deeb401d7ae540fd0492aca4e6b894e',
  'symfony/serializer' => 'v5.1.0@f3ea48ec7fea41397dea61f74ff86dba1d29560a',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v5.1.0@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.2@ac70459db781108db7c6d8981dd31ce0e29e3298',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v5.1.0@d387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/twig-bridge' => 'v5.1.0@04f57638e591b23d06f72dca2f123605dbbe3a75',
  'symfony/twig-bundle' => 'v5.1.0@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.1.0@7a012b935dffe51d37ce001f62fbc6cb307d96df',
  'symfony/var-dumper' => 'v5.1.0@46a942903059b0b05e601f00eb64179e05578c0f',
  'symfony/var-exporter' => 'v5.1.0@76cf21551652b14d80abf13243159fbdf4bbef22',
  'symfony/web-link' => 'v5.1.0@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.0@ea342353a3ef4f453809acc4ebc55382231d4d23',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'symfony/browser-kit' => 'v5.1.0@b9adef763c4f98660d1f8b924f6d61718f8ae0bc',
  'symfony/css-selector' => 'v5.1.0@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug-bundle' => 'v5.1.0@3f4bcea52678eedf19260973217f5ae7b835edf5',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v5.1.0@907187782c465a564f9030a0c6ace59e8821106f',
  'symfony/maker-bundle' => 'v1.19.0@bea8c3c959e48a2c952cc7c4f4f32964be8b8874',
  'symfony/phpunit-bridge' => 'v5.1.0@7a05a59154053d62674def66a5c99896113632f2',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.1.0@4d7bdd83fc92d10f005d99d04f80cc0c79c29ef9',
  'symfony/web-server-bundle' => 'v4.4.2@301dad4563b21a791a796da9a736408215b9e9fc',
  'paragonie/random_compat' => '2.*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-ctype' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-iconv' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-php72' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-php71' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-php70' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  'symfony/polyfill-php56' => '*@c8eeed99624f59a678a19bb6186f34646a8b3f63',
  '__root__' => 'dev-master@c8eeed99624f59a678a19bb6186f34646a8b3f63',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
