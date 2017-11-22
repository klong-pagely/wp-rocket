<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0667ef9b9265640664ae067531ce2727
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'C' => 
        array (
            'Cloudflare\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Cloudflare\\' => 
        array (
            0 => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Cloudflare\\Api' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Api.php',
        'Cloudflare\\Certificates' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Certificates.php',
        'Cloudflare\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Exception/AuthenticationException.php',
        'Cloudflare\\Exception\\UnauthorizedException' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Exception/UnauthorizedException.php',
        'Cloudflare\\IPs' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/IPs.php',
        'Cloudflare\\Organizations' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations.php',
        'Cloudflare\\Organizations\\Firewall\\AccessRules\\Rules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/Firewall/AccessRules/Rules.php',
        'Cloudflare\\Organizations\\Invites' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/Invites.php',
        'Cloudflare\\Organizations\\LoadBalancers\\Monitors' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/LoadBalancers/Monitors.php',
        'Cloudflare\\Organizations\\LoadBalancers\\Pools' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/LoadBalancers/Pools.php',
        'Cloudflare\\Organizations\\Members' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/Members.php',
        'Cloudflare\\Organizations\\Railguns' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/Railguns.php',
        'Cloudflare\\Organizations\\Roles' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/Roles.php',
        'Cloudflare\\Organizations\\Virtual_Dns' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Organizations/VirtualDns.php',
        'Cloudflare\\Railguns' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Railguns.php',
        'Cloudflare\\User' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User.php',
        'Cloudflare\\User\\Billing' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Billing.php',
        'Cloudflare\\User\\Billing\\Subscriptions\\Apps' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Billing/Subscriptions/Apps.php',
        'Cloudflare\\User\\Billing\\Subscriptions\\Zones' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Billing/Subscriptions/Zones.php',
        'Cloudflare\\User\\Firewall\\AccessRules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Firewall/AccessRules.php',
        'Cloudflare\\User\\Invites' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Invites.php',
        'Cloudflare\\User\\LoadBalancers\\GlobalPolicies' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/GlobalPolicies.php',
        'Cloudflare\\User\\LoadBalancers\\Maps' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/Maps.php',
        'Cloudflare\\User\\LoadBalancers\\Monitors' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/Monitors.php',
        'Cloudflare\\User\\LoadBalancers\\Notifiers' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/Notifiers.php',
        'Cloudflare\\User\\LoadBalancers\\Origins' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/Origins.php',
        'Cloudflare\\User\\LoadBalancers\\Pools' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/LoadBalancers/Pools.php',
        'Cloudflare\\User\\Organizations' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/Organizations.php',
        'Cloudflare\\User\\Virtual_Dns' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/User/VirtualDns.php',
        'Cloudflare\\Zone' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone.php',
        'Cloudflare\\Zone\\Aml' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Aml.php',
        'Cloudflare\\Zone\\Analytics' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Analytics.php',
        'Cloudflare\\Zone\\Cache' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Cache.php',
        'Cloudflare\\Zone\\CustomPages' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/CustomPages.php',
        'Cloudflare\\Zone\\CustomSSL' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/CustomSSL.php',
        'Cloudflare\\Zone\\Dns' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Dns.php',
        'Cloudflare\\Zone\\Firewall\\AccessRules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Firewall/AccessRules.php',
        'Cloudflare\\Zone\\KeylessSSL' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/KeylessSSL.php',
        'Cloudflare\\Zone\\LoadBalancers' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/LoadBalancers.php',
        'Cloudflare\\Zone\\Pagerules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Pagerules.php',
        'Cloudflare\\Zone\\Plan' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Plan.php',
        'Cloudflare\\Zone\\Railgun' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Railgun.php',
        'Cloudflare\\Zone\\SSL' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/SSL.php',
        'Cloudflare\\Zone\\SSL\\Analyze' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/SSL/Analyze.php',
        'Cloudflare\\Zone\\SSL\\CertificatePacks' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/SSL/CertificatePacks.php',
        'Cloudflare\\Zone\\Settings' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/Settings.php',
        'Cloudflare\\Zone\\WAF\\Packages' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/WAF/Packages.php',
        'Cloudflare\\Zone\\WAF\\Packages\\Groups' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/WAF/Packages/Groups.php',
        'Cloudflare\\Zone\\WAF\\Packages\\Rules' => __DIR__ . '/..' . '/jamesryanbell/cloudflare/src/CloudFlare/Zone/WAF/Packages/Rules.php',
        'Detection\\MobileDetect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php',
        'MatthiasMullie\\Minify\\CSS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/CSS.php',
        'MatthiasMullie\\Minify\\Exception' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exception.php',
        'MatthiasMullie\\Minify\\Exceptions\\BasicException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/BasicException.php',
        'MatthiasMullie\\Minify\\Exceptions\\FileImportException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/FileImportException.php',
        'MatthiasMullie\\Minify\\Exceptions\\IOException' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Exceptions/IOException.php',
        'MatthiasMullie\\Minify\\JS' => __DIR__ . '/..' . '/matthiasmullie/minify/src/JS.php',
        'MatthiasMullie\\Minify\\Minify' => __DIR__ . '/..' . '/matthiasmullie/minify/src/Minify.php',
        'MatthiasMullie\\PathConverter\\Converter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/Converter.php',
        'MatthiasMullie\\PathConverter\\ConverterInterface' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/ConverterInterface.php',
        'MatthiasMullie\\PathConverter\\NoConverter' => __DIR__ . '/..' . '/matthiasmullie/path-converter/src/NoConverter.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/../..' . '/inc/vendors/classes/class-minify-css-urirewriter.php',
        'Minify_HTML' => __DIR__ . '/../..' . '/inc/vendors/classes/class-minify-html.php',
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
        'Rocket_Background_Critical_CSS_Generation' => __DIR__ . '/../..' . '/inc/classes/class-rocket-background-critical-css-generation.php',
        'Rocket_Background_Database_Optimization' => __DIR__ . '/../..' . '/inc/classes/class-rocket-background-database-optimization.php',
        'Rocket_Critical_CSS' => __DIR__ . '/../..' . '/inc/classes/class-rocket-critical-css.php',
        'Rocket_Database_Optimization' => __DIR__ . '/../..' . '/inc/classes/class-rocket-database-optimization.php',
        'Rocket_Sitemap_Preload_Process' => __DIR__ . '/../..' . '/inc/classes/background-processing.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0667ef9b9265640664ae067531ce2727::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0667ef9b9265640664ae067531ce2727::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0667ef9b9265640664ae067531ce2727::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0667ef9b9265640664ae067531ce2727::$classMap;

        }, null, ClassLoader::class);
    }
}
