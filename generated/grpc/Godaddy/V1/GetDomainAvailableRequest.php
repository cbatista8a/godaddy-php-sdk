<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: godaddy/v1/api.proto

namespace Godaddy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Checks if a domain is available
 * </pre>
 *
 * Protobuf type <code>godaddy.v1.GetDomainAvailableRequest</code>
 */
class GetDomainAvailableRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The domain to check for
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    private $domain = '';

    public function __construct() {
        \GPBMetadata\Godaddy\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The domain to check for
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * <pre>
     * The domain to check for
     * </pre>
     *
     * <code>string domain = 1;</code>
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;
    }

}

