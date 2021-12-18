<?php

namespace ContainerH9Xxq6s;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder09724 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde924 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2ffe1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getConnection', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getMetadataFactory', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getExpressionBuilder', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'beginTransaction', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getCache', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getCache();
    }

    public function transactional($func)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'transactional', array('func' => $func), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'wrapInTransaction', array('func' => $func), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'commit', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->commit();
    }

    public function rollback()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'rollback', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getClassMetadata', array('className' => $className), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'createQuery', array('dql' => $dql), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'createNamedQuery', array('name' => $name), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'createQueryBuilder', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'flush', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'clear', array('entityName' => $entityName), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->clear($entityName);
    }

    public function close()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'close', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->close();
    }

    public function persist($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'persist', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'remove', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'refresh', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'detach', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'merge', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getRepository', array('entityName' => $entityName), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'contains', array('entity' => $entity), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getEventManager', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getConfiguration', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'isOpen', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getUnitOfWork', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getProxyFactory', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'initializeObject', array('obj' => $obj), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'getFilters', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'isFiltersStateClean', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'hasFilters', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return $this->valueHolder09724->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerde924 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder09724) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder09724 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder09724->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__get', ['name' => $name], $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        if (isset(self::$publicProperties2ffe1[$name])) {
            return $this->valueHolder09724->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09724;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder09724;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09724;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder09724;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__isset', array('name' => $name), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09724;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder09724;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__unset', array('name' => $name), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09724;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder09724;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__clone', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        $this->valueHolder09724 = clone $this->valueHolder09724;
    }

    public function __sleep()
    {
        $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, '__sleep', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;

        return array('valueHolder09724');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde924 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde924;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde924 && ($this->initializerde924->__invoke($valueHolder09724, $this, 'initializeProxy', array(), $this->initializerde924) || 1) && $this->valueHolder09724 = $valueHolder09724;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder09724;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder09724;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
