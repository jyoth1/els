<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/policy/v1alpha/policy.proto

namespace Sugarcrm\Apis\Iam\Policy\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.policy.v1alpha.Policy</code>
 */
class Policy extends \Google\Protobuf\Internal\Message
{
    /**
     * Policy SRN
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Policy bindings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.policy.v1alpha.Binding bindings = 2;</code>
     */
    private $bindings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Policy SRN
     *     @type \Sugarcrm\Apis\Iam\Policy\V1alpha\Binding[]|\Google\Protobuf\Internal\RepeatedField $bindings
     *           Policy bindings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apis\Iam\Policy\V1Alpha\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Policy SRN
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Policy SRN
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Policy bindings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.policy.v1alpha.Binding bindings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBindings()
    {
        return $this->bindings;
    }

    /**
     * Policy bindings
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.policy.v1alpha.Binding bindings = 2;</code>
     * @param \Sugarcrm\Apis\Iam\Policy\V1alpha\Binding[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sugarcrm\Apis\Iam\Policy\V1alpha\Binding::class);
        $this->bindings = $arr;

        return $this;
    }

}

