<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SpeakCommand extends Command {

    protected function configure()
    {
        /*
        $this->setName('speak')
            ->setDescription('speak a message')
            ->addArgument(
                'message', 
                InputArgument::REQUIRED, 
                "what message should I speak?"
            );
        */

        $this->setName('talk') // 命令名称
            ->setDescription('talk a message') // 命令描述
            ->addArgument(
                'message',  // 命令参数
                InputArgument::OPTIONAL, // 命令参数类型
                "what message should I speak?", // 命令参数描述
                "please support argument I needed" // 命令参数默认值
            )
            ->addOption( // 命令选项
                '--voice',
                '-S',
                InputOption::VALUE_OPTIONAL, // 命令参数类型
                'which voice you want to use',
                "jony"
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $option = $input->getOption('voice');
        $message = $input->getArgument('message');
        exec('say '.$message);

        $output->writeln('All done');
        $output->writeln("<info>All done</info>"); // 成功
        $output->writeln("<error>No done</error>"); // 失败
    }
}
