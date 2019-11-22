<?php

namespace Interfloa\CdpApi\Service;

use Psr\Log\LoggerInterface;

/**
 * Class Logger
 *
 * Logs using error_log for all the messages
 * @codeCoverageIgnore
 */
class Logger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function emergency($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function alert($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function critical($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function error($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function warning($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function notice($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function info($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function debug($message, array $context = array())
    {
        error_log($message);
    }

    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = array())
    {
        error_log($message);
    }
}
