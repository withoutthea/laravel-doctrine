<?php namespace Mitch\LaravelDoctrine;

use Doctrine\Common\Persistence\AbstractManagerRegistry;

final class IlluminateRegistry extends AbstractManagerRegistry
{

    /**
     * Fetches/creates the given services.
     * A service in this context is connection or a manager instance.
     * @param string $name The name of the service.
     * @return object The instance of the given service.
     */
    protected function getService($name)
    {
        // TODO: Implement getService() method.
    }

    /**
     * Resets the given services.
     * A service in this context is connection or a manager instance.
     * @param string $name The name of the service.
     * @return void
     */
    protected function resetService($name)
    {
        // TODO: Implement resetService() method.
    }

    /**
     * Resolves a registered namespace alias to the full namespace.
     * This method looks for the alias in all registered object managers.
     * @param string $alias The alias.
     * @return string The full namespace.
     */
    public function getAliasNamespace($alias)
    {
        // TODO: Implement getAliasNamespace() method.
    }
}