<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/4/17
 * Time: 14:05
 */

namespace Acme\Command\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    public function configure()
    {
        $this->setName('example:sayHello');
        $this->setDescription('Demo Command Line');
    }

    public function execute(InputInterface $input, OutputInterface $output){
        $output->writeln('Hello World');
    }
}