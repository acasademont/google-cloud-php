<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `GetNotificationChannelDescriptor` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.GetNotificationChannelDescriptorRequest</code>
 */
class GetNotificationChannelDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The channel type for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannelDescriptors/{channel_type}`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The channel type for which to execute the request. The format is
     *           `projects/[PROJECT_ID]/notificationChannelDescriptors/{channel_type}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The channel type for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannelDescriptors/{channel_type}`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The channel type for which to execute the request. The format is
     * `projects/[PROJECT_ID]/notificationChannelDescriptors/{channel_type}`.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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

