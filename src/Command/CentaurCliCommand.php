<?php

namespace App\Command;

use App\Components\OpenApiSchema\Models\OpenApiObject;
use App\Components\OpenApiSchema\Serializer\Serializer;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[AsCommand(
    name: 'centaur-cli',
    description: 'Add a short description for your command',
)]
class CentaurCliCommand extends Command
{
    private SerializerInterface $serializer;
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator, string $name = null)
    {
        parent::__construct($name);
        $this->serializer = new Serializer();
        $this->validator = $validator;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $apiFile = file_get_contents('__DIR__' . '../../doc/openapi.yaml');
        /** @var OpenApiObject $apiSchema */
        $apiSchema = $this->serializer->deserialize($apiFile, OpenApiObject::class, Serializer::YAML);
        $io->writeln($apiSchema->getOpenapi());
        dump($apiSchema);
        return Command::SUCCESS;
    }
}
