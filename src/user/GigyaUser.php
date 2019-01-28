<?php
/**
 * Created by PhpStorm.
 * User: Yaniv Aran-Shamir
 * Date: 4/6/16
 * Time: 1:11 PM
 */

namespace Gigya\CmsStarterKit\user;


use Gigya\CmsStarterKit\sdk\GigyaJsonObject;
use Gigya\CmsStarterKit\user\GigyaProfile;

class GigyaUser extends GigyaJsonObject {
  /**
   * @var string
   */
  private $UID;
  /**
   * @var string
   */
  private $UIDSignature;
  /**
   * @var boolean
   */
  private $isSiteUser;
  /**
   * @var boolean
   */
  private $isTempUser;
  /**
   * @var boolean
   */
  private $isSiteUID;
  /**
   * @var string
   */
  private $loginProvider;
  /**
   * @var string
   */
  private $loginProviderUID;
  /**
   * @var string
   */
  private $oldestDataAge;
  /**
   * @var int
   */
  private $oldestDataUpdatedTimestamp;
  /**
   * @var int
   */
  private $signatureTimestamp;
  /**
   * @var string
   */
  private $statusCode;
  /**
   * @var string
   */
  private $statusReason;
  /**
   * @var int
   */
  private $lastUpdatedTimestamp;
  /**
   * @var string
   */
  private $socialProviders;
  /**
   * @var array
   */
  private $providers;
  /**
   * @var string
   */
  private $isActive;
  /**
   * @var array
   */
  private $loginIDs;

  /**
   * @var GigyaProfile
   */
  private $profile;
  /**
   * @var string
   */
  private $time;
  /**
   * @var array
   */
  private $data;

  /**
   * @return string
   */
  public function getUID() {
    return $this->UID;
  }

  /**
   * @param string $UID
   */
  public function setUID($UID) {
    $this->UID = $UID;
  }

  /**
   * @return string
   */
  public function getUIDSignature() {
    return $this->UIDSignature;
  }

  /**
   * @param string $UIDSignature
   */
  public function setUIDSignature($UIDSignature) {
    $this->UIDSignature = $UIDSignature;
  }

  /**
   * @return boolean
   */
  public function isIsSiteUser() {
    return $this->isSiteUser;
  }

  /**
   * @param boolean $isSiteUser
   */
  public function setIsSiteUser($isSiteUser) {
    $this->isSiteUser = $isSiteUser;
  }

  /**
   * @return boolean
   */
  public function isIsTempUser() {
    return $this->isTempUser;
  }

  /**
   * @param boolean $isTempUser
   */
  public function setIsTempUser($isTempUser) {
    $this->isTempUser = $isTempUser;
  }

  /**
   * @return boolean
   */
  public function isIsSiteUID() {
    return $this->isSiteUID;
  }

  /**
   * @param boolean $isSiteUID
   */
  public function setIsSiteUID($isSiteUID) {
    $this->isSiteUID = $isSiteUID;
  }

  /**
   * @return string
   */
  public function getLoginProvider() {
    return $this->loginProvider;
  }

  /**
   * @param string $loginProvider
   */
  public function setLoginProvider($loginProvider) {
    $this->loginProvider = $loginProvider;
  }

  /**
   * @return string
   */
  public function getLoginProviderUID() {
    return $this->loginProviderUID;
  }

  /**
   * @param string $loginProviderUID
   */
  public function setLoginProviderUID($loginProviderUID) {
    $this->loginProviderUID = $loginProviderUID;
  }

  /**
   * @return string
   */
  public function getOldestDataAge() {
    return $this->oldestDataAge;
  }

  /**
   * @param string $oldestDataAge
   */
  public function setOldestDataAge($oldestDataAge) {
    $this->oldestDataAge = $oldestDataAge;
  }

  /**
   * @return int
   */
  public function getOldestDataUpdatedTimestamp() {
    return $this->oldestDataUpdatedTimestamp;
  }

  /**
   * @param int $oldestDataUpdatedTimestamp
   */
  public function setOldestDataUpdatedTimestamp($oldestDataUpdatedTimestamp) {
    $this->oldestDataUpdatedTimestamp = $oldestDataUpdatedTimestamp;
  }

  /**
   * @return int
   */
  public function getSignatureTimestamp() {
    return $this->signatureTimestamp;
  }

  /**
   * @param int $signatureTimestamp
   */
  public function setSignatureTimestamp($signatureTimestamp) {
    $this->signatureTimestamp = $signatureTimestamp;
  }

  /**
   * @return string
   */
  public function getStatusCode() {
    return $this->statusCode;
  }

  /**
   * @param string $statusCode
   */
  public function setStatusCode($statusCode) {
    $this->statusCode = $statusCode;
  }

  /**
   * @return string
   */
  public function getStatusReason() {
    return $this->statusReason;
  }

  /**
   * @param string $statusReason
   */
  public function setStatusReason($statusReason) {
    $this->statusReason = $statusReason;
  }

  /**
   * @return int
   */
  public function getLastUpdatedTimestamp() {
    return $this->lastUpdatedTimestamp;
  }

  /**
   * @param int $lastUpdatedTimestamp
   */
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp) {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  /**
   * @return string
   */
  public function getSocialProviders() {
    return $this->socialProviders;
  }

  /**
   * @param string $socialProviders
   */
  public function setSocialProviders($socialProviders) {
    $this->socialProviders = $socialProviders;
  }

  /**
   * @return array
   */
  public function getProviders() {
    return $this->providers;
  }

  /**
   * @param array $providers
   */
  public function setProviders($providers) {
    $this->providers = $providers;
  }

  /**
   * @return string
   */
  public function getIsActive() {
    return $this->isActive;
  }

  /**
   * @param string $isActive
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
  }

  /**
   * @return array
   */
  public function getLoginIDs() {
    return $this->loginIDs;
  }

  /**
   * @param array $loginIDs
   */
  public function setLoginIDs($loginIDs) {
    $this->loginIDs = $loginIDs;
  }

  /**
   * @return GigyaProfile
   */
  public function getProfile() {
    return $this->profile;
  }

  /**
   * @param GigyaProfile $profile
   */
  public function setProfile($profile) {
      if (is_array($profile)) {
          $profile = GigyaUserFactory::createGigyaProfileFromArray($profile);
      }
      $this->profile = $profile;
  }

  /**
   * @return string
   */
  public function getTime() {
    return $this->time;
  }

  /**
   * @param string $time
   */
  public function setTime($time) {
    $this->time = $time;
  }

  /**
   * @return array
   */
  public function getData() {
    return $this->data;
  }

  /**
   * @param array $data
   */
  public function setData($data) {
    $this->data = $data;
  }

  /**
   * @return string emailLoginId / null
   */
  public function getGigyaLoginId() {
    $loginIds = $this->getLoginIDs();
    if (!empty($loginIds['emails'][0])) {
      $emailLoginId = $loginIds['emails'][0];
    }
    else {
      $emailLoginId = $this->getProfile()->getEmail();
    }
    return $emailLoginId;
  }

    /**
     * @param $path : . (dot) separated string
     * @return GigyaUser|string
     */
    public function getNestedValue($path)
    {
        $keys     = explode(".", $path);
        $accData = $this;
        foreach ($keys as $key) {
            if (is_object($accData)) {
                $accData = $accData->__get('get' . ucfirst($key));
            }
            elseif (is_array($accData)) {
                $accData = $accData[$key];
            }
            elseif (is_null($accData)) { // there is no such key
                return null;
            }
        }
        if (is_array($accData) || is_object($accData)) {
            $accData = json_encode($accData, JSON_UNESCAPED_SLASHES);
        }
        return $accData;
    }

}
