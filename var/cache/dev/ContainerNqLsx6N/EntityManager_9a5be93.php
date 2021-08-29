<?php

namespace ContainerNqLsx6N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3abf0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05cf9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties83d41 = [
        
    ];

    public function getConnection()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getConnection', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getMetadataFactory', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getExpressionBuilder', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'beginTransaction', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getCache', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'transactional', array('func' => $func), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->transactional($func);
    }

    public function commit()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'commit', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->commit();
    }

    public function rollback()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'rollback', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getClassMetadata', array('className' => $className), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'createQuery', array('dql' => $dql), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'createNamedQuery', array('name' => $name), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'createQueryBuilder', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'flush', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'clear', array('entityName' => $entityName), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->clear($entityName);
    }

    public function close()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'close', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->close();
    }

    public function persist($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'persist', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'remove', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'refresh', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'detach', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'merge', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'contains', array('entity' => $entity), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getEventManager', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getConfiguration', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'isOpen', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getUnitOfWork', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getProxyFactory', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'initializeObject', array('obj' => $obj), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'getFilters', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'isFiltersStateClean', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'hasFilters', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return $this->valueHolder3abf0->hasFilters();
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

        $instance->initializer05cf9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3abf0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3abf0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3abf0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__get', ['name' => $name], $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        if (isset(self::$publicProperties83d41[$name])) {
            return $this->valueHolder3abf0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3abf0;

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

        $targetObject = $this->valueHolder3abf0;
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
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3abf0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3abf0;
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
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__isset', array('name' => $name), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3abf0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3abf0;
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
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__unset', array('name' => $name), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3abf0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3abf0;
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
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__clone', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        $this->valueHolder3abf0 = clone $this->valueHolder3abf0;
    }

    public function __sleep()
    {
        $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, '__sleep', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;

        return array('valueHolder3abf0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer05cf9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer05cf9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05cf9 && ($this->initializer05cf9->__invoke($valueHolder3abf0, $this, 'initializeProxy', array(), $this->initializer05cf9) || 1) && $this->valueHolder3abf0 = $valueHolder3abf0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3abf0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3abf0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
