<?php

namespace mizbanpaytakht\B2;

class Key
{
    protected $bucketId;
    protected $keyName;
    protected $applicationKeyId;
    protected $applicationKey;
    protected $capabilities;
    protected $expirationTimestamp;
    protected $options;

    /**
     * Bucket constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        foreach ($values as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function getId()
    {
        return $this->applicationKeyId;
    }

    public function getKey()
    {
        return $this->applicationKey;
    }

    public function getName()
    {
        return $this->keyName;
    }

    public function getCapabilities()
    {
        return $this->capabilities;
    }

    public function getExpirationTimestamp()
    {
        return $this->expirationTimestamp;
    }

    public function getBucketId()
    {
        return $this->bucketId;
    }
}
