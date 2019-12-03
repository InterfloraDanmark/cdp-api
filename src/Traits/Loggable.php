<?php

namespace Interflora\CdpApi\Traits;

use Interflora\CdpApi\Service\Logger;
use Psr\Log\LoggerInterface;

trait Loggable
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @todo proper initialization from config and whatnot
     * @todo setLogger might be an option (it does expose a lot though)
     *
     * @return LoggerInterface
     */
    public function getLogger()
    {
        if (null === $this->logger) {
            $this->logger = new Logger();
        }
        return $this->logger;
    }

    /**
     * Set logger instance
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
