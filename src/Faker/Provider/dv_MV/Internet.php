<?php
namespace Faker\Provider\dv_MV;

class Internet extends \Faker\Provider\Internet
{

  protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
  protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org');

  protected static $userNameFormats = array(
      '{{lastName}}.{{firstName}}',
      '{{firstName}}.{{lastName}}',
      '{{firstName}}##',
      '?{{lastName}}',
  );

  protected static $userNameEnglishFormats = array(
      '{{lastNameEnglish}}.{{firstNameEnglish}}',
      '{{firstNameEnglish}}.{{lastNameEnglish}}',
      '{{firstNameEnglish}}##',
      '?{{lastNameEnglish}}',
  );

  protected static $emailFormats = array(
      '{{userNameEnglish}}@{{domainName}}',
      '{{userNameEnglish}}@{{freeEmailDomain}}',
  );
  protected static $urlFormats = array(
      'http://www.{{domainName}}/',
      'http://{{domainName}}/',
      'http://www.{{domainName}}/{{slug}}',
      'http://www.{{domainName}}/{{slug}}',
      'https://www.{{domainName}}/{{slug}}',
      'http://www.{{domainName}}/{{slug}}.html',
      'http://{{domainName}}/{{slug}}',
      'http://{{domainName}}/{{slug}}',
      'http://{{domainName}}/{{slug}}.html',
      'https://{{domainName}}/{{slug}}.html',
  );

  protected static function transliterate($string)
  {
      $transId = 'Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC; Lower();';
      if (function_exists('transliterator_transliterate') && $transliterator = \Transliterator::create($transId)) {
          $transString = $transliterator->transliterate($string);
      } else {
          $transString = static::toAscii($string);
      }

      return preg_replace('/[^A-Za-z0-9_.]/u', '', $transString);
  }

  public function domainWord()
  {
    $lastName = $this->generator->format('lastNameEnglish');

    return static::transliterate($lastName);
  }

  public function email()
  {
      $format = static::randomElement(static::$emailFormats);
      return $this->generator->parse($format);
  }


  /**
   * @example 'jdoe@gmail.com'
   */
  public function freeEmail()
  {
      return preg_replace('/\s/u', '', $this->userNameEnglish() . '@' . static::freeEmailDomain());
  }

  /**
   * @example 'jdoe@dawson.com'
   */
  public function companyEmail()
  {
      return preg_replace('/\s/u', '', $this->userNameEnglish() . '@' . $this->domainName());
  }

  /**
   * @example 'gmail.com'
   */
  public static function freeEmailDomain()
  {
      return static::randomElement(static::$freeEmailDomain);
  }


  /**
   * @example 'jdoe'
   */
  public function userName()
  {
      $format = static::randomElement(static::$userNameFormats);
      $username = static::bothify($this->generator->parse($format));

      return $username;
  }

  public function userNameEnglish()
  {
      $format = static::randomElement(static::$userNameEnglishFormats);
      $username = static::bothify($this->generator->parse($format));

      return static::transliterate($username);
  }

  /**
   * @example 'tiramisu.com'
   */
  public function domainName()
  {
      return $this->domainWord() . '.' . $this->tld();
  }

  /**
   * @example 'com'
   */
  public function tld()
  {
      return static::randomElement(static::$tld);
  }

  /**
   * @example 'http://www.runolfsdottir.com/'
   */
  public function url()
  {
      $format = static::randomElement(static::$urlFormats);

      return $this->generator->parse($format);
  }

  /**
   * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
   */
  public function slug($nbWords = 6, $variableNbWords = true)
  {
      if ($nbWords <= 0) {
          return '';
      }
      if ($variableNbWords) {
          $nbWords = (int) ($nbWords * mt_rand(60, 140) / 100) + 1;
      }
      $words = $this->generator->wordsEnglish($nbWords);

      return join($words, '-');
  }
}
