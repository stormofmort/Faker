<?php

namespace Faker\Provider\dv_MV;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###');

    protected static $buildingNames = array('ކަރަންކާ', 'ސިނަމާލެ', 'މާވަޑިގެ', 'އުޖާލާގެ', 'ހިތަށްފިނިވާގެ', 'ލޭކޮކާ', 'މަބުސްތާނު', 'ސެންޓޯސާ', 'ދީބުގެ', 'ސޯސަންގެ');

    protected static $streetNames = array('މަޖީދީ', 'އަމީނީ', 'އޯކިޑު', 'ރަށްދެބައި', 'ބޮޑުތަކުރުފާނު', 'އަލިކިލެގެފާނު', 'ކަސްތޫރި', 'ސޯސަން');

    protected static $wardLongNames = array('ވިލިގިލި', 'ހެންވޭރު', 'ގަލޮޅު', 'މާފަންނު', 'ހުޅުމާލެ', 'މައްޗަންގޯޅި');

    protected static $wardShortNames = array('ވ', 'މ', 'މއ' , 'ހމ', 'ގ', 'ހ');

    protected static $streetSuffix = array('މަގު', 'ހިނގުން', 'ގޯޅި');

    protected static $postcode = array('#####');

    protected static $islandNames = array('މާލެ', 'ތުލުސްދޫ', 'އިހަވަންދޫ', 'ދިއްދޫ', 'މާމިގިލި', 'ރަސްދޫ', 'އައްޑޫ', 'ފުވައްމުލަކު', 'ރަތަފަންދޫ', 'ފުނަދޫ', 'ވިލިގިލި', 'ތިނަދޫ', 'ފުޅަދޫ');
    protected static $stateShortNames = array('ހއ', 'ހދ' , 'ށ', 'ނ', 'ރ', 'ބ', 'ޅ', 'ކ', 'އއ', 'އދ', 'ވ', 'މ', 'ފ', 'ދ', 'ތ', 'ލ', 'ގއ', 'ގދ', 'ޏ', 'ސ');
    protected static $stateLongNames = array('ހާއަލިފު', 'ހާދާލު' ,'ށަވިޏަނި' , 'ނޫނު' , 'ރާ', 'ބާ', 'ޅަވިޏަނި', 'ކާފު', 'އަލިފުއަލިފު', 'އަލިފުދާލު', 'ވާވު', 'މީމު', 'ނޫނު', 'ފާފު' , 'ދާލު' , 'ތާ', 'ލާމު' , 'ގާފުއަލިފު' ,' ގާފުދާލު', 'ޏަވިޔަނި' ,'ސީނު');

    protected static $country = array('އިންޑިޔަ', 'ދިވެހިރާއްޖެ', 'ސްރީލަންކާ', 'ޕާކިސްތާނު', 'ނޭޕާލް', 'ބޫޓާން', 'ބަންގްލަދޭޝް', 'ކޮރެއާ', 'އަފްގަނިސްތާނު', 'ޖަޕާން', 'މެލޭޝީއާ', 'ސިންގަޕޯރ', 'އިންދޮނޭޝިޔާ' , 'އޮސްޓްރޭލިޔާ', 'ކިރިގިސްތާން', 'ތުރުކެމިނިސްތާނު', 'އިޓަލީ', 'ފްރާންސް', 'ޖާމަނީ' , 'ސްޕެއިން', 'ކޮންގޯ' , 'ސައުތް އެފްރިކާް');



    protected static $cityFormats = array(
        '{{stateShort}}.{{islandName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetNameShort}}{{streetSuffixShort}}',
    );

    protected static $streetAddressFormats = array(
        "{{wardShortName}}.{{buildingName}}-{{buildingNumber}}\n{{secondaryAddress}}\n{{streetNameLong}}",
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}}\n{{city}}",
    );


    protected static $secondaryAddressFormats = array('ވަނަ ކޮޓަރި #');

    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    public function cityName()
    {
        return $this->generator->parse(static::randomElement(static::$cityFormats));
    }

    public static function stateShort()
    {
        return static::randomElement(static::$stateShortNames);
    }

    public static function islandName()
    {
        return static::randomElement(static::$islandNames);
    }

    public static function streetNameShort()
    {
      return static::randomElement(static::$streetNames);
    }

    public static function streetSuffixShort()
    {
      return static::randomElement(static::$streetSuffix);
    }

    public function streetNameLong()
    {
      return $this->generator->parse(static::randomElement(static::$streetNameFormats));
    }
    public static function buildingName()
    {
      return static::randomElement(static::$buildingNames);
    }
    public function streetAddress()
    {
      return $this->generator->parse(static::randomElement(static::$streetAddressFormats));
    }
    public static function wardShortName()
    {
      return static::randomElement(static::$wardShortNames);
    }

    public static function cityPrefix()
    {
        return static::stateShort();
    }

    public static function stateAbbr()
    {
        return static::stateShort();
    }

    public static function state()
    {
        return static::randomElement(static::$stateLongNames).' އަތޮޅު';
    }

    public static function citySuffix()
    {
        return static::islandName();
    }

    public static function streetSuffix()
    {
        return static::streetSuffixShort();
    }
}
