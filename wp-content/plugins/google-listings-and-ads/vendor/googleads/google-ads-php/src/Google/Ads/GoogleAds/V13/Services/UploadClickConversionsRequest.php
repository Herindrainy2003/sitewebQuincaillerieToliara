<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ConversionUploadService.UploadClickConversions][google.ads.googleads.v13.services.ConversionUploadService.UploadClickConversions].
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.UploadClickConversionsRequest</code>
 */
class UploadClickConversionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer performing the upload.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The conversions that are being uploaded.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.services.ClickConversion conversions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $conversions;
    /**
     * Required. If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * This should always be set to true.
     * See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>bool partial_failure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $partial_failure = false;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    protected $validate_only = false;
    /**
     * If true, the API will perform all upload checks and return errors if
     * any are found. If false, it will perform only basic input validation,
     * skip subsequent upload checks, and return success even if no click
     * was found for the provided `user_identifiers`.
     * This setting only affects Enhanced conversions for leads uploads that use
     * `user_identifiers` instead of `GCLID`, `GBRAID`, or `WBRAID`. When
     * uploading enhanced conversions for leads, you should upload all conversion
     * events to the API, including those that may not come from Google Ads
     * campaigns. The upload of an event that is not from a Google Ads campaign
     * will result in a `CLICK_NOT_FOUND` error if this field is set to `true`.
     * Since these errors are expected for such events, set this field to `false`
     * so you can confirm your uploads are properly formatted but ignore
     * `CLICK_NOT_FOUND` errors from all of the conversions that are not from a
     * Google Ads campaign. This will allow you to focus only on errors that you
     * can address.
     * Default is false.
     *
     * Generated from protobuf field <code>bool debug_enabled = 5;</code>
     */
    protected $debug_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer performing the upload.
     *     @type array<\Google\Ads\GoogleAds\V13\Services\ClickConversion>|\Google\Protobuf\Internal\RepeatedField $conversions
     *           Required. The conversions that are being uploaded.
     *     @type bool $partial_failure
     *           Required. If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, all operations will be carried
     *           out in one transaction if and only if they are all valid.
     *           This should always be set to true.
     *           See
     *           https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     *           for more information about partial failure.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type bool $debug_enabled
     *           If true, the API will perform all upload checks and return errors if
     *           any are found. If false, it will perform only basic input validation,
     *           skip subsequent upload checks, and return success even if no click
     *           was found for the provided `user_identifiers`.
     *           This setting only affects Enhanced conversions for leads uploads that use
     *           `user_identifiers` instead of `GCLID`, `GBRAID`, or `WBRAID`. When
     *           uploading enhanced conversions for leads, you should upload all conversion
     *           events to the API, including those that may not come from Google Ads
     *           campaigns. The upload of an event that is not from a Google Ads campaign
     *           will result in a `CLICK_NOT_FOUND` error if this field is set to `true`.
     *           Since these errors are expected for such events, set this field to `false`
     *           so you can confirm your uploads are properly formatted but ignore
     *           `CLICK_NOT_FOUND` errors from all of the conversions that are not from a
     *           Google Ads campaign. This will allow you to focus only on errors that you
     *           can address.
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer performing the upload.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer performing the upload.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The conversions that are being uploaded.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.services.ClickConversion conversions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Required. The conversions that are being uploaded.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.services.ClickConversion conversions = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V13\Services\ClickConversion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V13\Services\ClickConversion::class);
        $this->conversions = $arr;

        return $this;
    }

    /**
     * Required. If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * This should always be set to true.
     * See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>bool partial_failure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getPartialFailure()
    {
        return $this->partial_failure;
    }

    /**
     * Required. If true, successful operations will be carried out and invalid
     * operations will return errors. If false, all operations will be carried
     * out in one transaction if and only if they are all valid.
     * This should always be set to true.
     * See
     * https://developers.google.com/google-ads/api/docs/best-practices/partial-failures
     * for more information about partial failure.
     *
     * Generated from protobuf field <code>bool partial_failure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setPartialFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->partial_failure = $var;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If true, the API will perform all upload checks and return errors if
     * any are found. If false, it will perform only basic input validation,
     * skip subsequent upload checks, and return success even if no click
     * was found for the provided `user_identifiers`.
     * This setting only affects Enhanced conversions for leads uploads that use
     * `user_identifiers` instead of `GCLID`, `GBRAID`, or `WBRAID`. When
     * uploading enhanced conversions for leads, you should upload all conversion
     * events to the API, including those that may not come from Google Ads
     * campaigns. The upload of an event that is not from a Google Ads campaign
     * will result in a `CLICK_NOT_FOUND` error if this field is set to `true`.
     * Since these errors are expected for such events, set this field to `false`
     * so you can confirm your uploads are properly formatted but ignore
     * `CLICK_NOT_FOUND` errors from all of the conversions that are not from a
     * Google Ads campaign. This will allow you to focus only on errors that you
     * can address.
     * Default is false.
     *
     * Generated from protobuf field <code>bool debug_enabled = 5;</code>
     * @return bool
     */
    public function getDebugEnabled()
    {
        return $this->debug_enabled;
    }

    /**
     * If true, the API will perform all upload checks and return errors if
     * any are found. If false, it will perform only basic input validation,
     * skip subsequent upload checks, and return success even if no click
     * was found for the provided `user_identifiers`.
     * This setting only affects Enhanced conversions for leads uploads that use
     * `user_identifiers` instead of `GCLID`, `GBRAID`, or `WBRAID`. When
     * uploading enhanced conversions for leads, you should upload all conversion
     * events to the API, including those that may not come from Google Ads
     * campaigns. The upload of an event that is not from a Google Ads campaign
     * will result in a `CLICK_NOT_FOUND` error if this field is set to `true`.
     * Since these errors are expected for such events, set this field to `false`
     * so you can confirm your uploads are properly formatted but ignore
     * `CLICK_NOT_FOUND` errors from all of the conversions that are not from a
     * Google Ads campaign. This will allow you to focus only on errors that you
     * can address.
     * Default is false.
     *
     * Generated from protobuf field <code>bool debug_enabled = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDebugEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->debug_enabled = $var;

        return $this;
    }

}

