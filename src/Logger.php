<?php

declare(strict_types = 1);
/**
 * @author Alessio Ferri
 * @copyright Alessio Ferri
 * @license Apache-2.0
 */

namespace plog;

/**
 * LoggerInterface-like interface, except it doesn't require an additional useless class LogLevel and has a shorter name
 * LogLevel description is provided by independent constants by PHP
 */
interface Logger {

    public const LEVEL_EMERGENCY = 0;
    public const LEVEL_ALERT = 1;
    public const LEVEL_CRITICAL = 2;
    public const LEVEL_ERROR = 3;
    public const LEVEL_WARNING = 4;
    public const LEVEL_NOTICE = 5;
    public const LEVEL_INFO = 6;
    public const LEVEL_DEBUG = 7;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function emergency( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function alert( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function critical( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function error( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function warning( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function notice( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function info( string $message, array $info = [] ): void;

    /**
     *
     * @param string $message
     * @param array $info
     * @return void
     */
    public function debug( string $message, array $info = [] ): void;

    /**
     *
     * @param int $level
     * @param string $message
     * @param array $info
     * @return void
     */
    public function log( int $level, string $message, array $info = [] ): void;

    /**
     *
     * @return void
     */
    public function flush(): void;
}
