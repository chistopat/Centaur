<?php

namespace App\Components\OpenApiSchema\Serializer;

use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\CustomNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;

class Serializer implements SerializerInterface
{
    public const YAML = 'yaml';
    public const JSON = 'json';

    private function serializer(): SymfonySerializer
    {
        $classMetaDataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $mataDataAwareNameConverter = new MetadataAwareNameConverter($classMetaDataFactory);
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);

        return new SymfonySerializer(
            [
                new ObjectNormalizer($classMetaDataFactory, $mataDataAwareNameConverter, null, $extractor),
                new ArrayDenormalizer()
            ],
            [new JsonEncoder(), new YamlEncoder()]
        );

    }

    /**
     * @param mixed $data
     * @param string $format
     * @param array $context
     * @return string
     */
    public function serialize($data, string $format=Serializer::YAML, array $context = []): string
    {
        return $this->serializer()->serialize($data, $format, $context);
    }

    /**
     * @param mixed $data
     * @param string $type
     * @param string $format
     * @param array $context
     * @return mixed
     */
    public function deserialize($data, string $type, string $format=Serializer::YAML, array $context = []): mixed
    {
        return $this->serializer()->deserialize($data, $type, $format, $context);
    }
}
