<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 27.04.17
 * Time: 11:41
 */

namespace Larakit\Pusher;

/**
 * @method static string version()
 * @method static string basePath()
 * @method static string environment()
 * @method static bool isDownForMaintenance()
 * @method static void registerConfiguredProviders()
 * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, array $options = [], bool $force = false)
 * @method static void registerDeferredProvider(string $provider, string $service = null)
 * @method static void boot()
 * @method static void booting(mixed $callback)
 * @method static void booted(mixed $callback)
 * @method static string getCachedServicesPath()
 *
 * @see \Illuminate\Foundation\Application
 */
class LarakitPusherFacade extends \Illuminate\Support\Facades\Facade {
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return new \Larakit\Pusher\LarakitPusher();
    }
}
