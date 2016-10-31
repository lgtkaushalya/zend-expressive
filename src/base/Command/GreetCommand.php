<?php

namespace Application\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Monolog\Logger;
use Application\Employee;

class GreetCommand extends Command
{
    private $logger;

    /**
     * Constructor
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;

        parent::__construct();
    }

    /**
     * Configures the command
     */
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            );
    }

    /**
     * Executes the current command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello ' . $name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }
        
        $employee = new Employee();
        $employeeList = $employee->getEmployee();
        
        $this->logger->info('There are '.count($employeeList).' employees avaiable in the system', $employeeList);
    }
}
