<?php
declare(strict_types=1);
namespace middlewares;

class SessionHandlerMiddleware
{
    protected const FLASH_KEY = 'flash_messages';

    public function __construct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach ($flashMessages as $key => &$flashMessage) {
            $flashMessage['remove'] = true;
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;

    }

    public function setFlash($key, $message): void
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'remove' => false,
            'value' => $message
        ];
    }

    public function getFlash($key) {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? null;
    }

    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach ($flashMessages as $key => &$flashMessage) {
            if ($flashMessage['remove']) {
                unset($flashMessages[$key]);
            }
        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}