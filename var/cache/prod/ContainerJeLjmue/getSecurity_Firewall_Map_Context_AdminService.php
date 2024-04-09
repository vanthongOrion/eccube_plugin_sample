<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_AdminService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->privates['security.authenticator.form_login.admin'] ?? $container->load('getSecurity_Authenticator_FormLogin_AdminService'));

        if (isset($container->privates['security.firewall.map.context.admin'])) {
            return $container->privates['security.firewall.map.context.admin'];
        }
        $b = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $c = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->getSecurity_ContextListener_0Service());
            yield 2 => ($container->privates['security.firewall.authenticator.admin'] ?? $container->load('getSecurity_Firewall_Authenticator_AdminService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $c, 'admin', $a, NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $c, ($container->privates['security.event_dispatcher.admin'] ?? $container->getSecurity_EventDispatcher_AdminService()), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'admin_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.rYcIECW', true, false, 'Eccube\\Security\\Core\\User\\MemberProvider', 'admin', 'security.authenticator.form_login.admin', NULL, NULL, [0 => 'login_throttling', 1 => 'form_login'], NULL));
    }
}
