<?php
/**
 * @author: Biplob Hossain <biplob.ice@gmail.com>
 */

namespace ${NAMESPACE};

use Concrete\Core\Job\QueueableJob;
use ZendQueue\Message as ZendQueueMessage;
use ZendQueue\Queue as ZendQueue;

class ${CLASS_NAME} extends QueueableJob
{
    public function getJobName(): string
    {
        return t('${name}');
    }

    public function getJobDescription(): string
    {
        return t('${description}');
    }
    
    public function start(ZendQueue \$q): void
    {
        // TODO: Implement start() method.
    }

    public function finish(ZendQueue \$q): string
    {
        return t('All tasks processed');
    }

    public function processQueueItem(ZendQueueMessage \$msg): void
    {
        // TODO: Implement processQueueItem() method.
    }
}
