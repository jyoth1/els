<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/sa/v1alpha/sa.proto

namespace Sugarcrm\Apis\Iam\Sa\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.sa.v1alpha.GetServiceAccountRequest</code>
 */
class GetServiceAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The SRN of the service account to be retrieved.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The SRN of the service account to be retrieved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apis\Iam\Sa\V1Alpha\Sa::initOnce();
        parent::__construct($data);
    }

    /**
     * The SRN of the service account to be retrieved.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The SRN of the service account to be retrieved.
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

}

