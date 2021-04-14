<?php
declare(strict_types=1);

namespace JCIT\jobqueue\interfaces;

use JCIT\jobqueue\models\activeRecord\JobExecution;

interface JobStoreExecutionInterface extends JobInterface
{
    public function getJobExecution(): JobExecution;
    public function setJobExecution(JobExecution $jobExecution): self;
}
