<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \App\Entity\Client implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'cp' => [parent::class, 'cp', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nbhbur' => [parent::class, 'nbhbur', null],
        "\0".parent::class."\0".'nbhcompta' => [parent::class, 'nbhcompta', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'statut' => [parent::class, 'statut', null],
        "\0".parent::class."\0".'tel' => [parent::class, 'tel', null],
        "\0".parent::class."\0".'username' => [parent::class, 'username', null],
        "\0".parent::class."\0".'ville' => [parent::class, 'ville', null],
        'adresse' => [parent::class, 'adresse', null],
        'cp' => [parent::class, 'cp', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'nbhbur' => [parent::class, 'nbhbur', null],
        'nbhcompta' => [parent::class, 'nbhcompta', null],
        'password' => [parent::class, 'password', null],
        'roles' => [parent::class, 'roles', null],
        'statut' => [parent::class, 'statut', null],
        'tel' => [parent::class, 'tel', null],
        'username' => [parent::class, 'username', null],
        'ville' => [parent::class, 'ville', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
