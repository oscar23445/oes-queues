<?php

namespace OesData\Queues;

//namespace Oes\Queues;

use CodeIgniter\Config\BaseConfig;

/**
 * Setup how the exception handler works.
 */
class Queues extends BaseConfig
{

   public $defaultConnection = 'default';
   public $connection = [
        'database' => [
            'driver' => 'database',
            // Database-specific configuration
        ],
        'redis' => [
            'driver' => 'redis',
            // Redis-specific configuration
        ],
    ];
   public $archiving = [
        'enabled' => true, // Enable or disable archiving
        'archive_completed' => true, // Archive completed jobs
        'archive_failed' => true, // Archive failed jobs
        'archive_table' => 'queue_archives', // Table to store archived jobs
        'failed_jobs_table' => 'failed_jobs', // Optional table for failed jobs
        'retention_period' => 30, // Days to keep the archived jobs
    ];



}