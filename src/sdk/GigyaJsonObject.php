<?php
/**
 * Created by PhpStorm.
 * User: Yaniv Aran-Shamir
 * Date: 4/6/16
 * Time: 11:24 AM
 */

namespace Gigya\CmsStarterKit\sdk;


abstract class GigyaJsonObject
{


    /**
     * GigyaJsonObject constructor.
     */
    public function __construct($json)
    {
        if (null != $json) {
            $jsonArray = json_decode($json, true);
            foreach ($jsonArray as $key => $value) {
                $this->__set($key, $value);
            }
        }
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'get') === 0) {
            $property = strtolower(substr($name, 3, 1)) . substr($name, 4);

            return $this->$property;
        } elseif (strpos($name, 'set') === 0) {
            $property = strtolower(substr($name, 3, 1)) . substr($name, 4);

            return $this->$property = $arguments[0];
        } else {
            throw new \Exception("Method $name does not exist");
        }
    }


    public function __get($name)
    {
        $getter = $name;
        $prop = lcfirst(substr($name, 3));
        if (method_exists($this, $getter)) {
            return call_user_func(array($this, $getter));
        }
        return property_exists($this, $prop) ? $this->$prop : null;
    }

    public function __set($name, $value)
    {
        $setter = 'set' . ucfirst($name);
        if (method_exists($this, $setter)) {
            call_user_func(array($this, $setter), $value);
        } else {
            $this->$name = $value;
        }
    }

}