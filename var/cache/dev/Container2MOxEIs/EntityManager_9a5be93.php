<?php

namespace Container2MOxEIs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86f26 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerff846 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesacae7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getConnection', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getMetadataFactory', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getExpressionBuilder', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'beginTransaction', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getCache', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getCache();
    }

    public function transactional($func)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'transactional', array('func' => $func), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'wrapInTransaction', array('func' => $func), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'commit', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->commit();
    }

    public function rollback()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'rollback', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getClassMetadata', array('className' => $className), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'createQuery', array('dql' => $dql), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'createNamedQuery', array('name' => $name), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'createQueryBuilder', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'flush', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'clear', array('entityName' => $entityName), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->clear($entityName);
    }

    public function close()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'close', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->close();
    }

    public function persist($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'persist', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'remove', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'refresh', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'detach', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'merge', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'contains', array('entity' => $entity), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getEventManager', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getConfiguration', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'isOpen', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getUnitOfWork', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getProxyFactory', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'initializeObject', array('obj' => $obj), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'getFilters', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'isFiltersStateClean', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'hasFilters', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return $this->valueHolder86f26->hasFilters();
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

        $instance->initializerff846 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86f26) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86f26 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86f26->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__get', ['name' => $name], $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        if (isset(self::$publicPropertiesacae7[$name])) {
            return $this->valueHolder86f26->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86f26;

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

        $targetObject = $this->valueHolder86f26;
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
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86f26;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86f26;
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
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__isset', array('name' => $name), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86f26;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86f26;
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
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__unset', array('name' => $name), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86f26;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86f26;
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
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__clone', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        $this->valueHolder86f26 = clone $this->valueHolder86f26;
    }

    public function __sleep()
    {
        $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, '__sleep', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;

        return array('valueHolder86f26');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerff846 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerff846;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerff846 && ($this->initializerff846->__invoke($valueHolder86f26, $this, 'initializeProxy', array(), $this->initializerff846) || 1) && $this->valueHolder86f26 = $valueHolder86f26;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86f26;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86f26;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
