<?php
namespace Task\Command\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetVersion extends Command
{
   protected function configure()
   {
       $this->setName('get:version');
       $this->setDescription('Demo command line for magento version');
       
       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
        system("sudo php bin/magento --version");
        system("sudo php -v");
        system("sudo php bin/magento deploy:mode:show");
   }
}