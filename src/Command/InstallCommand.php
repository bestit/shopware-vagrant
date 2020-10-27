<?php

declare(strict_types=1);

namespace BestIt\ShopwareVagrant\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class InstallCommand
 *
 * @author André Varelmann <andre.varelmann@bestit-online.de>
 * @package BestIt\ShopwareVagrant\Command
 */
class InstallCommand extends Command
{
    /**
     * Configure the install command
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('install');
    }

    /**
     * Execute the installation
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $basePath = getcwd();
        copy(__DIR__.'/../resources/Vagrantfile', "{$basePath}/Vagrantfile");
        copy(__DIR__.'/../resources/playbook.yml', "{$basePath}/playbook.yml");
    }
}
