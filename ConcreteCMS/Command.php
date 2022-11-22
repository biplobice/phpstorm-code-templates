<?php
#parse("PHP File Header.php")
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Concrete\Core\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ${CLASS_NAME} extends Command
{
    protected function configure(): void
    {
        \$this->setName('${name}')
            ->setDescription('${description}')
            ->setAliases(['${alias}'])
            ->addEnvOption()
        ;
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
       \$this->input = \$input;
        \$this->output = \$output;

        // TODO: Implement execute() method

        return 0;
    }
}
