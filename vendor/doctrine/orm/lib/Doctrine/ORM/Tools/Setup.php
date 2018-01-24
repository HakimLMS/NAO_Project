<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\ORM\Tools;

use Doctrine\Common\ClassLoader;
use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\CacheProvider;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Mapping\Driver\YamlDriver;

/**
 * Convenience class for setting up Doctrine from different installations and configurations.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class Setup
{
    /**
     * Use this method to register all autoloads for a downloaded Doctrine library.
     * Pick the directory the library was uncompressed into.
     *
     * @param string $directory
     *
     * @return void
     */
    public static function registerAutoloadDirectory($directory)
    {
        if (!class_exists('Doctrine\Common\ClassLoader', false)) {
            require_once $directory . "/Doctrine/Common/ClassLoader.php";
        }

        $loader = new ClassLoader("Doctrine", $directory);
        $loader->register();

        $loader = new ClassLoader("Symfony\Component", $directory . "/Doctrine");
        $loader->register();
    }

    /**
     * Creates a configuration with an annotation metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     * @param bool    $useSimpleAnnotationReader
     *
     * @return Configuration
     */
    public static function createAnnotationMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null, $useSimpleAnnotationReader = true)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($paths, $useSimpleAnnotationReader));

        return $config;
    }

    /**
     * Creates a configuration with a xml metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     *
     * @return Configuration
     */
    public static function createXMLMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl(new XmlDriver($paths));

        return $config;
    }

    /**
     * Creates a configuration with a yaml metadata driver.
     *
     * @param array   $paths
     * @param boolean $isDevMode
     * @param string  $proxyDir
     * @param Cache   $cache
     *
     * @return Configuration
     */
    public static function createYAMLMetadataConfiguration(array $paths, $isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $config = self::createConfiguration($isDevMode, $proxyDir, $cache);
        $config->setMetadataDriverImpl(new YamlDriver($paths));

        return $config;
    }

    /**
     * Creates a configuration without a metadata driver.
     *
     * @param bool   $isDevMode
     * @param string $proxyDir
     * @param Cache  $cache
     *
     * @return Configuration
     */
    public static function createConfiguration($isDevMode = false, $proxyDir = null, Cache $cache = null)
    {
        $proxyDir = $proxyDir ?: sys_get_temp_dir();
<<<<<<< HEAD
<<<<<<< HEAD

        $cache = self::createCacheConfiguration($isDevMode, $proxyDir, $cache);
=======
        $cache    = self::createCacheConfiguration($isDevMode, $proxyDir, $cache);
>>>>>>> contactmanager
=======

        $cache = self::createCacheConfiguration($isDevMode, $proxyDir, $cache);
>>>>>>> donmanager

        $config = new Configuration();
        $config->setMetadataCacheImpl($cache);
        $config->setQueryCacheImpl($cache);
        $config->setResultCacheImpl($cache);
        $config->setProxyDir($proxyDir);
        $config->setProxyNamespace('DoctrineProxies');
        $config->setAutoGenerateProxyClasses($isDevMode);

        return $config;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private static function createCacheConfiguration(bool $isDevMode, string $proxyDir, ?Cache $cache) :  Cache
=======
    /**
     * @param bool       $isDevMode
     * @param string     $proxyDir
     * @param Cache|null $cache
     *
     * @return Cache
     */
    private static function createCacheConfiguration($isDevMode, $proxyDir, Cache $cache = null)
>>>>>>> contactmanager
=======
    private static function createCacheConfiguration(bool $isDevMode, string $proxyDir, ?Cache $cache) :  Cache
>>>>>>> donmanager
    {
        $cache = self::createCacheInstance($isDevMode, $cache);

        if ( ! $cache instanceof CacheProvider) {
            return $cache;
        }

        $namespace = $cache->getNamespace();

        if ($namespace !== '') {
            $namespace .= ':';
        }

        $cache->setNamespace($namespace . 'dc2_' . md5($proxyDir) . '_'); // to avoid collisions

        return $cache;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private static function createCacheInstance(bool $isDevMode, ?Cache $cache) : Cache
=======
    /**
     * @param bool       $isDevMode
     * @param Cache|null $cache
     *
     * @return Cache
     */
    private static function createCacheInstance($isDevMode, Cache $cache = null)
>>>>>>> contactmanager
=======
    private static function createCacheInstance(bool $isDevMode, ?Cache $cache) : Cache
>>>>>>> donmanager
    {
        if ($cache !== null) {
            return $cache;
        }

        if ($isDevMode === true) {
            return new ArrayCache();
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (extension_loaded('apcu')) {
            return new \Doctrine\Common\Cache\ApcuCache();
        }


        if (extension_loaded('memcached')) {
            $memcache = new \Memcached();
            $memcache->addServer('127.0.0.1', 11211);

            $cache = new \Doctrine\Common\Cache\MemcachedCache();
=======
        if (extension_loaded('apc')) {
            return new \Doctrine\Common\Cache\ApcCache();
=======
        if (extension_loaded('apcu')) {
            return new \Doctrine\Common\Cache\ApcuCache();
>>>>>>> donmanager
        }


        if (extension_loaded('memcached')) {
            $memcache = new \Memcached();
            $memcache->addServer('127.0.0.1', 11211);

<<<<<<< HEAD
            $cache = new \Doctrine\Common\Cache\MemcacheCache();
>>>>>>> contactmanager
=======
            $cache = new \Doctrine\Common\Cache\MemcachedCache();
>>>>>>> donmanager
            $cache->setMemcache($memcache);

            return $cache;
        }

        if (extension_loaded('redis')) {
            $redis = new \Redis();
            $redis->connect('127.0.0.1');

            $cache = new \Doctrine\Common\Cache\RedisCache();
            $cache->setRedis($redis);

            return $cache;
        }

        return new ArrayCache();
    }
}
