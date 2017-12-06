<?php

namespace Application\Command;

use Application\Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PostCodeCommand
 * @package Application\Command
 */
class PostCodeCommand extends Command
{
    protected function configure()
    {
        $this->setName('postcode')
            ->setDescription('Get UK postcodes by entering their names.')
            ->setHelp('This command allows you to get UK postcodes by entering their names.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        try {
            throw new Exception\ServiceDownException('Service is down');
        } catch (Exception\ServiceDownException $e) {
            $output->writeln([
                $e->getMessage()
            ]);
        } catch (\Exception $e) {
            $output->writeln([
                $e->getMessage()
            ]);
        }
    }

}