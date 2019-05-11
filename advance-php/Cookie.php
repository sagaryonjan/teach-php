<?php

class Cookie
{
    /**
     * Set Cookie
     */
    public function set($key, $value)
    {
        setcookie($key, $value);
    }

    /**
     * Get
     */
    public function get($key)
    {
        return $_COOKIE[$key];
    }

    public function update($key, $value)
    {
        setcookie($key, $value);
    }

    /**
     * Delete
     */
    public function delete($key)
    {
        setcookie($key, '');
    }
}
