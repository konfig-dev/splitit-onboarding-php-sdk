<?php
/**
 * CreateMerchantRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Splitit
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * Splitit.OnBoarding.Api.V2
 *
 * Splitit's Onboarding API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Splitit\Model;

use \ArrayAccess;
use \Splitit\ObjectSerializer;

/**
 * CreateMerchantRequest Class Doc Comment
 *
 * @category Class
 * @package  Splitit
 * @implements \ArrayAccess<string, mixed>
 */
class CreateMerchantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateMerchantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'public_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'country_iso2' => 'string',
        'legal_name' => 'string',
        'currency_code' => 'string',
        'tier' => 'string',
        'business_street_address' => 'string',
        'business_city' => 'string',
        'business_postal_code' => 'string',
        'business_country' => 'string',
        'business_state' => 'string',
        'vertical' => 'string',
        'sub_vertical' => 'string',
        'name_on_bank_account' => 'string',
        'incorporation_country' => 'string',
        'account_number' => 'string',
        'routing_number' => 'string',
        'tax_id_number' => 'string',
        'total_annual_sales' => 'string',
        'platform_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'public_name' => null,
        'email' => null,
        'phone_number' => null,
        'country_iso2' => null,
        'legal_name' => null,
        'currency_code' => null,
        'tier' => null,
        'business_street_address' => null,
        'business_city' => null,
        'business_postal_code' => null,
        'business_country' => null,
        'business_state' => null,
        'vertical' => null,
        'sub_vertical' => null,
        'name_on_bank_account' => null,
        'incorporation_country' => null,
        'account_number' => null,
        'routing_number' => null,
        'tax_id_number' => null,
        'total_annual_sales' => null,
        'platform_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'public_name' => false,
		'email' => false,
		'phone_number' => false,
		'country_iso2' => false,
		'legal_name' => false,
		'currency_code' => false,
		'tier' => false,
		'business_street_address' => false,
		'business_city' => false,
		'business_postal_code' => false,
		'business_country' => false,
		'business_state' => false,
		'vertical' => false,
		'sub_vertical' => false,
		'name_on_bank_account' => false,
		'incorporation_country' => false,
		'account_number' => false,
		'routing_number' => false,
		'tax_id_number' => false,
		'total_annual_sales' => false,
		'platform_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'public_name' => 'publicName',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'country_iso2' => 'countryIso2',
        'legal_name' => 'legalName',
        'currency_code' => 'currencyCode',
        'tier' => 'tier',
        'business_street_address' => 'businessStreetAddress',
        'business_city' => 'businessCity',
        'business_postal_code' => 'businessPostalCode',
        'business_country' => 'businessCountry',
        'business_state' => 'businessState',
        'vertical' => 'vertical',
        'sub_vertical' => 'subVertical',
        'name_on_bank_account' => 'nameOnBankAccount',
        'incorporation_country' => 'incorporationCountry',
        'account_number' => 'accountNumber',
        'routing_number' => 'routingNumber',
        'tax_id_number' => 'taxIdNumber',
        'total_annual_sales' => 'totalAnnualSales',
        'platform_name' => 'platformName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_name' => 'setPublicName',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'country_iso2' => 'setCountryIso2',
        'legal_name' => 'setLegalName',
        'currency_code' => 'setCurrencyCode',
        'tier' => 'setTier',
        'business_street_address' => 'setBusinessStreetAddress',
        'business_city' => 'setBusinessCity',
        'business_postal_code' => 'setBusinessPostalCode',
        'business_country' => 'setBusinessCountry',
        'business_state' => 'setBusinessState',
        'vertical' => 'setVertical',
        'sub_vertical' => 'setSubVertical',
        'name_on_bank_account' => 'setNameOnBankAccount',
        'incorporation_country' => 'setIncorporationCountry',
        'account_number' => 'setAccountNumber',
        'routing_number' => 'setRoutingNumber',
        'tax_id_number' => 'setTaxIdNumber',
        'total_annual_sales' => 'setTotalAnnualSales',
        'platform_name' => 'setPlatformName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_name' => 'getPublicName',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'country_iso2' => 'getCountryIso2',
        'legal_name' => 'getLegalName',
        'currency_code' => 'getCurrencyCode',
        'tier' => 'getTier',
        'business_street_address' => 'getBusinessStreetAddress',
        'business_city' => 'getBusinessCity',
        'business_postal_code' => 'getBusinessPostalCode',
        'business_country' => 'getBusinessCountry',
        'business_state' => 'getBusinessState',
        'vertical' => 'getVertical',
        'sub_vertical' => 'getSubVertical',
        'name_on_bank_account' => 'getNameOnBankAccount',
        'incorporation_country' => 'getIncorporationCountry',
        'account_number' => 'getAccountNumber',
        'routing_number' => 'getRoutingNumber',
        'tax_id_number' => 'getTaxIdNumber',
        'total_annual_sales' => 'getTotalAnnualSales',
        'platform_name' => 'getPlatformName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('public_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('country_iso2', $data ?? [], null);
        $this->setIfExists('legal_name', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('tier', $data ?? [], null);
        $this->setIfExists('business_street_address', $data ?? [], null);
        $this->setIfExists('business_city', $data ?? [], null);
        $this->setIfExists('business_postal_code', $data ?? [], null);
        $this->setIfExists('business_country', $data ?? [], null);
        $this->setIfExists('business_state', $data ?? [], null);
        $this->setIfExists('vertical', $data ?? [], null);
        $this->setIfExists('sub_vertical', $data ?? [], null);
        $this->setIfExists('name_on_bank_account', $data ?? [], null);
        $this->setIfExists('incorporation_country', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('routing_number', $data ?? [], null);
        $this->setIfExists('tax_id_number', $data ?? [], null);
        $this->setIfExists('total_annual_sales', $data ?? [], null);
        $this->setIfExists('platform_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['public_name'] === null) {
            $invalidProperties[] = "'public_name' can't be null";
        }
        if ((mb_strlen($this->container['public_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'public_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ((mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_iso2'] === null) {
            $invalidProperties[] = "'country_iso2' can't be null";
        }
        if ((mb_strlen($this->container['country_iso2']) < 1)) {
            $invalidProperties[] = "invalid value for 'country_iso2', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['legal_name'] === null) {
            $invalidProperties[] = "'legal_name' can't be null";
        }
        if ((mb_strlen($this->container['legal_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'legal_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ((mb_strlen($this->container['currency_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets public_name
     *
     * @return string
     */
    public function getPublicName()
    {
        return $this->container['public_name'];
    }

    /**
     * Sets public_name
     *
     * @param string $public_name public_name
     *
     * @return self
     */
    public function setPublicName($public_name)
    {

        if ((mb_strlen($public_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $public_name when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($public_name)) {
            throw new \InvalidArgumentException('non-nullable public_name cannot be null');
        }

        $this->container['public_name'] = $public_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if ((mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {

        if ((mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets country_iso2
     *
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     *
     * @param string $country_iso2 country_iso2
     *
     * @return self
     */
    public function setCountryIso2($country_iso2)
    {

        if ((mb_strlen($country_iso2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country_iso2 when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($country_iso2)) {
            throw new \InvalidArgumentException('non-nullable country_iso2 cannot be null');
        }

        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string $legal_name legal_name
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {

        if ((mb_strlen($legal_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $legal_name when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($legal_name)) {
            throw new \InvalidArgumentException('non-nullable legal_name cannot be null');
        }

        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {

        if ((mb_strlen($currency_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling CreateMerchantRequest., must be bigger than or equal to 1.');
        }


        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return string|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string|null $tier tier
     *
     * @return self
     */
    public function setTier($tier)
    {

        if (is_null($tier)) {
            throw new \InvalidArgumentException('non-nullable tier cannot be null');
        }

        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets business_street_address
     *
     * @return string|null
     */
    public function getBusinessStreetAddress()
    {
        return $this->container['business_street_address'];
    }

    /**
     * Sets business_street_address
     *
     * @param string|null $business_street_address business_street_address
     *
     * @return self
     */
    public function setBusinessStreetAddress($business_street_address)
    {

        if (is_null($business_street_address)) {
            throw new \InvalidArgumentException('non-nullable business_street_address cannot be null');
        }

        $this->container['business_street_address'] = $business_street_address;

        return $this;
    }

    /**
     * Gets business_city
     *
     * @return string|null
     */
    public function getBusinessCity()
    {
        return $this->container['business_city'];
    }

    /**
     * Sets business_city
     *
     * @param string|null $business_city business_city
     *
     * @return self
     */
    public function setBusinessCity($business_city)
    {

        if (is_null($business_city)) {
            throw new \InvalidArgumentException('non-nullable business_city cannot be null');
        }

        $this->container['business_city'] = $business_city;

        return $this;
    }

    /**
     * Gets business_postal_code
     *
     * @return string|null
     */
    public function getBusinessPostalCode()
    {
        return $this->container['business_postal_code'];
    }

    /**
     * Sets business_postal_code
     *
     * @param string|null $business_postal_code business_postal_code
     *
     * @return self
     */
    public function setBusinessPostalCode($business_postal_code)
    {

        if (is_null($business_postal_code)) {
            throw new \InvalidArgumentException('non-nullable business_postal_code cannot be null');
        }

        $this->container['business_postal_code'] = $business_postal_code;

        return $this;
    }

    /**
     * Gets business_country
     *
     * @return string|null
     */
    public function getBusinessCountry()
    {
        return $this->container['business_country'];
    }

    /**
     * Sets business_country
     *
     * @param string|null $business_country business_country
     *
     * @return self
     */
    public function setBusinessCountry($business_country)
    {

        if (is_null($business_country)) {
            throw new \InvalidArgumentException('non-nullable business_country cannot be null');
        }

        $this->container['business_country'] = $business_country;

        return $this;
    }

    /**
     * Gets business_state
     *
     * @return string|null
     */
    public function getBusinessState()
    {
        return $this->container['business_state'];
    }

    /**
     * Sets business_state
     *
     * @param string|null $business_state business_state
     *
     * @return self
     */
    public function setBusinessState($business_state)
    {

        if (is_null($business_state)) {
            throw new \InvalidArgumentException('non-nullable business_state cannot be null');
        }

        $this->container['business_state'] = $business_state;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return string|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param string|null $vertical vertical
     *
     * @return self
     */
    public function setVertical($vertical)
    {

        if (is_null($vertical)) {
            throw new \InvalidArgumentException('non-nullable vertical cannot be null');
        }

        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets sub_vertical
     *
     * @return string|null
     */
    public function getSubVertical()
    {
        return $this->container['sub_vertical'];
    }

    /**
     * Sets sub_vertical
     *
     * @param string|null $sub_vertical sub_vertical
     *
     * @return self
     */
    public function setSubVertical($sub_vertical)
    {

        if (is_null($sub_vertical)) {
            throw new \InvalidArgumentException('non-nullable sub_vertical cannot be null');
        }

        $this->container['sub_vertical'] = $sub_vertical;

        return $this;
    }

    /**
     * Gets name_on_bank_account
     *
     * @return string|null
     */
    public function getNameOnBankAccount()
    {
        return $this->container['name_on_bank_account'];
    }

    /**
     * Sets name_on_bank_account
     *
     * @param string|null $name_on_bank_account name_on_bank_account
     *
     * @return self
     */
    public function setNameOnBankAccount($name_on_bank_account)
    {

        if (is_null($name_on_bank_account)) {
            throw new \InvalidArgumentException('non-nullable name_on_bank_account cannot be null');
        }

        $this->container['name_on_bank_account'] = $name_on_bank_account;

        return $this;
    }

    /**
     * Gets incorporation_country
     *
     * @return string|null
     */
    public function getIncorporationCountry()
    {
        return $this->container['incorporation_country'];
    }

    /**
     * Sets incorporation_country
     *
     * @param string|null $incorporation_country incorporation_country
     *
     * @return self
     */
    public function setIncorporationCountry($incorporation_country)
    {

        if (is_null($incorporation_country)) {
            throw new \InvalidArgumentException('non-nullable incorporation_country cannot be null');
        }

        $this->container['incorporation_country'] = $incorporation_country;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {

        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets routing_number
     *
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string|null $routing_number routing_number
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {

        if (is_null($routing_number)) {
            throw new \InvalidArgumentException('non-nullable routing_number cannot be null');
        }

        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets tax_id_number
     *
     * @return string|null
     */
    public function getTaxIdNumber()
    {
        return $this->container['tax_id_number'];
    }

    /**
     * Sets tax_id_number
     *
     * @param string|null $tax_id_number tax_id_number
     *
     * @return self
     */
    public function setTaxIdNumber($tax_id_number)
    {

        if (is_null($tax_id_number)) {
            throw new \InvalidArgumentException('non-nullable tax_id_number cannot be null');
        }

        $this->container['tax_id_number'] = $tax_id_number;

        return $this;
    }

    /**
     * Gets total_annual_sales
     *
     * @return string|null
     */
    public function getTotalAnnualSales()
    {
        return $this->container['total_annual_sales'];
    }

    /**
     * Sets total_annual_sales
     *
     * @param string|null $total_annual_sales total_annual_sales
     *
     * @return self
     */
    public function setTotalAnnualSales($total_annual_sales)
    {

        if (is_null($total_annual_sales)) {
            throw new \InvalidArgumentException('non-nullable total_annual_sales cannot be null');
        }

        $this->container['total_annual_sales'] = $total_annual_sales;

        return $this;
    }

    /**
     * Gets platform_name
     *
     * @return string|null
     */
    public function getPlatformName()
    {
        return $this->container['platform_name'];
    }

    /**
     * Sets platform_name
     *
     * @param string|null $platform_name platform_name
     *
     * @return self
     */
    public function setPlatformName($platform_name)
    {

        if (is_null($platform_name)) {
            throw new \InvalidArgumentException('non-nullable platform_name cannot be null');
        }

        $this->container['platform_name'] = $platform_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


