<?php

class Session
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
    }

    /**
     * Return an instance of class
     *
     * @return Session
     */
    public function session(): Session
    {
        return $this;
    }

    /**
     * Define data in session
     *
     * @param array $data Data to insert in session
     * @return void
     */
    public function set(array $data): void
    {
        foreach ($data as $key => $value)
            $_SESSION[$key] = $value;
    }

    /**
     * Check if key exists in session
     *
     * @param string $key Key to be verified
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Get the key in session
     *
     * @param string $key 
     * @return mixed|null The value associated in key | Null if key does not exist
     */
    public function getKey(string $key): mixed
    {
        return $_SESSION[$key] ?? null;
    }

    /**
     * Remove key
     *
     * @param string $key Key to be removed
     * @return void
     */
    public function remove(string $key): void
    {
        if ($this->has($key))
            unset($_SESSION[$key]);        
    }

    /**
     * Destroy session
     *
     * @return void
     */
    public function destroy(): void
    {
        session_destroy();
    }
}



