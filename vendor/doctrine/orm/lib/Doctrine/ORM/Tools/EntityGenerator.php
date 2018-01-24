<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\ORM\Tools;

<<<<<<< HEAD
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Util\Inflector;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
=======
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\Common\Util\Inflector;
use Doctrine\DBAL\Types\Type;
>>>>>>> contactmanager

/**
 * Generic class used to generate PHP5 entity classes from ClassMetadataInfo instances.
 *
 *     [php]
 *     $classes = $em->getClassMetadataFactory()->getAllMetadata();
 *
 *     $generator = new \Doctrine\ORM\Tools\EntityGenerator();
 *     $generator->setGenerateAnnotations(true);
 *     $generator->setGenerateStubMethods(true);
 *     $generator->setRegenerateEntityIfExists(false);
 *     $generator->setUpdateEntityIfExists(true);
 *     $generator->generate($classes, '/path/to/generate/entities');
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class EntityGenerator
{
    /**
     * Specifies class fields should be protected.
     */
    const FIELD_VISIBLE_PROTECTED = 'protected';

    /**
     * Specifies class fields should be private.
     */
    const FIELD_VISIBLE_PRIVATE = 'private';

    /**
     * @var bool
     */
    protected $backupExisting = true;

    /**
     * The extension to use for written php files.
     *
     * @var string
     */
    protected $extension = '.php';

    /**
     * Whether or not the current ClassMetadataInfo instance is new or old.
     *
     * @var boolean
     */
    protected $isNew = true;

    /**
     * @var array
     */
<<<<<<< HEAD
    protected $staticReflection = [];
=======
    protected $staticReflection = array();
>>>>>>> contactmanager

    /**
     * Number of spaces to use for indention in generated code.
     */
    protected $numSpaces = 4;

    /**
     * The actual spaces to use for indention.
     *
     * @var string
     */
    protected $spaces = '    ';

    /**
     * The class all generated entities should extend.
     *
     * @var string
     */
    protected $classToExtend;

    /**
     * Whether or not to generation annotations.
     *
     * @var boolean
     */
    protected $generateAnnotations = false;

    /**
     * @var string
     */
    protected $annotationsPrefix = '';

    /**
     * Whether or not to generate sub methods.
     *
     * @var boolean
     */
    protected $generateEntityStubMethods = false;

    /**
     * Whether or not to update the entity class if it exists already.
     *
     * @var boolean
     */
    protected $updateEntityIfExists = false;

    /**
     * Whether or not to re-generate entity class if it exists already.
     *
     * @var boolean
     */
    protected $regenerateEntityIfExists = false;

    /**
     * Visibility of the field
     *
     * @var string
     */
    protected $fieldVisibility = 'private';

    /**
     * Whether or not to make generated embeddables immutable.
     *
     * @var boolean.
     */
    protected $embeddablesImmutable = false;

    /**
     * Hash-map for handle types.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $typeAlias = [
=======
    protected $typeAlias = array(
>>>>>>> contactmanager
        Type::DATETIMETZ    => '\DateTime',
        Type::DATETIME      => '\DateTime',
        Type::DATE          => '\DateTime',
        Type::TIME          => '\DateTime',
        Type::OBJECT        => '\stdClass',
<<<<<<< HEAD
        Type::INTEGER       => 'int',
        Type::BIGINT        => 'int',
        Type::SMALLINT      => 'int',
        Type::TEXT          => 'string',
        Type::BLOB          => 'string',
        Type::DECIMAL       => 'string',
        Type::GUID          => 'string',
        Type::JSON_ARRAY    => 'array',
        Type::SIMPLE_ARRAY  => 'array',
        Type::BOOLEAN       => 'bool',
    ];
=======
        Type::BIGINT        => 'integer',
        Type::SMALLINT      => 'integer',
        Type::TEXT          => 'string',
        Type::BLOB          => 'string',
        Type::DECIMAL       => 'string',
        Type::JSON_ARRAY    => 'array',
        Type::SIMPLE_ARRAY  => 'array',
    );
>>>>>>> contactmanager

    /**
     * Hash-map to handle generator types string.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $generatorStrategyMap = [
=======
    protected static $generatorStrategyMap = array(
>>>>>>> contactmanager
        ClassMetadataInfo::GENERATOR_TYPE_AUTO      => 'AUTO',
        ClassMetadataInfo::GENERATOR_TYPE_SEQUENCE  => 'SEQUENCE',
        ClassMetadataInfo::GENERATOR_TYPE_TABLE     => 'TABLE',
        ClassMetadataInfo::GENERATOR_TYPE_IDENTITY  => 'IDENTITY',
        ClassMetadataInfo::GENERATOR_TYPE_NONE      => 'NONE',
        ClassMetadataInfo::GENERATOR_TYPE_UUID      => 'UUID',
        ClassMetadataInfo::GENERATOR_TYPE_CUSTOM    => 'CUSTOM'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> contactmanager

    /**
     * Hash-map to handle the change tracking policy string.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $changeTrackingPolicyMap = [
        ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT  => 'DEFERRED_IMPLICIT',
        ClassMetadataInfo::CHANGETRACKING_DEFERRED_EXPLICIT  => 'DEFERRED_EXPLICIT',
        ClassMetadataInfo::CHANGETRACKING_NOTIFY             => 'NOTIFY',
    ];
=======
    protected static $changeTrackingPolicyMap = array(
        ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT  => 'DEFERRED_IMPLICIT',
        ClassMetadataInfo::CHANGETRACKING_DEFERRED_EXPLICIT  => 'DEFERRED_EXPLICIT',
        ClassMetadataInfo::CHANGETRACKING_NOTIFY             => 'NOTIFY',
    );
>>>>>>> contactmanager

    /**
     * Hash-map to handle the inheritance type string.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $inheritanceTypeMap = [
=======
    protected static $inheritanceTypeMap = array(
>>>>>>> contactmanager
        ClassMetadataInfo::INHERITANCE_TYPE_NONE            => 'NONE',
        ClassMetadataInfo::INHERITANCE_TYPE_JOINED          => 'JOINED',
        ClassMetadataInfo::INHERITANCE_TYPE_SINGLE_TABLE    => 'SINGLE_TABLE',
        ClassMetadataInfo::INHERITANCE_TYPE_TABLE_PER_CLASS => 'TABLE_PER_CLASS',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> contactmanager

    /**
     * @var string
     */
    protected static $classTemplate =
'<?php

<namespace>
<useStatement>
<entityAnnotation>
<entityClassName>
{
<entityBody>
}
';

    /**
     * @var string
     */
    protected static $getMethodTemplate =
'/**
 * <description>
 *
 * @return <variableType>
 */
public function <methodName>()
{
<spaces>return $this-><fieldName>;
}';

    /**
     * @var string
     */
    protected static $setMethodTemplate =
'/**
 * <description>
 *
 * @param <variableType> $<variableName>
 *
 * @return <entity>
 */
public function <methodName>(<methodTypeHint>$<variableName><variableDefault>)
{
<spaces>$this-><fieldName> = $<variableName>;

<spaces>return $this;
}';

    /**
     * @var string
     */
    protected static $addMethodTemplate =
'/**
 * <description>
 *
 * @param <variableType> $<variableName>
 *
 * @return <entity>
 */
public function <methodName>(<methodTypeHint>$<variableName>)
{
<spaces>$this-><fieldName>[] = $<variableName>;

<spaces>return $this;
}';

    /**
     * @var string
     */
    protected static $removeMethodTemplate =
'/**
 * <description>
 *
 * @param <variableType> $<variableName>
<<<<<<< HEAD
 *
 * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
 */
public function <methodName>(<methodTypeHint>$<variableName>)
{
<spaces>return $this-><fieldName>->removeElement($<variableName>);
=======
 */
public function <methodName>(<methodTypeHint>$<variableName>)
{
<spaces>$this-><fieldName>->removeElement($<variableName>);
>>>>>>> contactmanager
}';

    /**
     * @var string
     */
    protected static $lifecycleCallbackMethodTemplate =
'/**
 * @<name>
 */
public function <methodName>()
{
<spaces>// Add your code here
}';

    /**
     * @var string
     */
    protected static $constructorMethodTemplate =
'/**
 * Constructor
 */
public function __construct()
{
<spaces><collections>
}
';

    /**
     * @var string
     */
    protected static $embeddableConstructorMethodTemplate =
'/**
 * Constructor
 *
 * <paramTags>
 */
public function __construct(<params>)
{
<spaces><fields>
}
';

    /**
     * Constructor.
     */
    public function __construct()
    {
        if (version_compare(\Doctrine\Common\Version::VERSION, '2.2.0-DEV', '>=')) {
            $this->annotationsPrefix = 'ORM\\';
        }
    }

    /**
     * Generates and writes entity classes for the given array of ClassMetadataInfo instances.
     *
     * @param array  $metadatas
     * @param string $outputDirectory
     *
     * @return void
     */
    public function generate(array $metadatas, $outputDirectory)
    {
        foreach ($metadatas as $metadata) {
            $this->writeEntityClass($metadata, $outputDirectory);
        }
    }

    /**
     * Generates and writes entity class to disk for the given ClassMetadataInfo instance.
     *
     * @param ClassMetadataInfo $metadata
     * @param string            $outputDirectory
     *
     * @return void
     *
     * @throws \RuntimeException
     */
    public function writeEntityClass(ClassMetadataInfo $metadata, $outputDirectory)
    {
        $path = $outputDirectory . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $metadata->name) . $this->extension;
        $dir = dirname($path);

        if ( ! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

<<<<<<< HEAD
        $this->isNew = ! file_exists($path) || $this->regenerateEntityIfExists;
=======
        $this->isNew = !file_exists($path) || (file_exists($path) && $this->regenerateEntityIfExists);
>>>>>>> contactmanager

        if ( ! $this->isNew) {
            $this->parseTokensInEntityFile(file_get_contents($path));
        } else {
<<<<<<< HEAD
            $this->staticReflection[$metadata->name] = ['properties' => [], 'methods' => []];
=======
            $this->staticReflection[$metadata->name] = array('properties' => array(), 'methods' => array());
>>>>>>> contactmanager
        }

        if ($this->backupExisting && file_exists($path)) {
            $backupPath = dirname($path) . DIRECTORY_SEPARATOR . basename($path) . "~";
            if (!copy($path, $backupPath)) {
                throw new \RuntimeException("Attempt to backup overwritten entity file but copy operation failed.");
            }
        }

        // If entity doesn't exist or we're re-generating the entities entirely
        if ($this->isNew) {
            file_put_contents($path, $this->generateEntityClass($metadata));
        // If entity exists and we're allowed to update the entity class
<<<<<<< HEAD
        } elseif ($this->updateEntityIfExists) {
=======
        } elseif ( ! $this->isNew && $this->updateEntityIfExists) {
>>>>>>> contactmanager
            file_put_contents($path, $this->generateUpdatedEntityClass($metadata, $path));
        }
        chmod($path, 0664);
    }

    /**
     * Generates a PHP5 Doctrine 2 entity class from the given ClassMetadataInfo instance.
     *
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    public function generateEntityClass(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $placeHolders = [
=======
        $placeHolders = array(
>>>>>>> contactmanager
            '<namespace>',
            '<useStatement>',
            '<entityAnnotation>',
            '<entityClassName>',
            '<entityBody>'
<<<<<<< HEAD
        ];

        $replacements = [
=======
        );

        $replacements = array(
>>>>>>> contactmanager
            $this->generateEntityNamespace($metadata),
            $this->generateEntityUse(),
            $this->generateEntityDocBlock($metadata),
            $this->generateEntityClassName($metadata),
            $this->generateEntityBody($metadata)
<<<<<<< HEAD
        ];

        $code = str_replace($placeHolders, $replacements, static::$classTemplate);
=======
        );

        $code = str_replace($placeHolders, $replacements, static::$classTemplate) . "\n";
>>>>>>> contactmanager

        return str_replace('<spaces>', $this->spaces, $code);
    }

    /**
     * Generates the updated code for the given ClassMetadataInfo and entity at path.
     *
     * @param ClassMetadataInfo $metadata
     * @param string            $path
     *
     * @return string
     */
    public function generateUpdatedEntityClass(ClassMetadataInfo $metadata, $path)
    {
        $currentCode = file_get_contents($path);

        $body = $this->generateEntityBody($metadata);
        $body = str_replace('<spaces>', $this->spaces, $body);
        $last = strrpos($currentCode, '}');

<<<<<<< HEAD
        return substr($currentCode, 0, $last) . $body . ($body ? "\n" : '') . "}\n";
=======
        return substr($currentCode, 0, $last) . $body . (strlen($body) > 0 ? "\n" : '') . "}\n";
>>>>>>> contactmanager
    }

    /**
     * Sets the number of spaces the exported class should have.
     *
     * @param integer $numSpaces
     *
     * @return void
     */
    public function setNumSpaces($numSpaces)
    {
        $this->spaces = str_repeat(' ', $numSpaces);
        $this->numSpaces = $numSpaces;
    }

    /**
     * Sets the extension to use when writing php files to disk.
     *
     * @param string $extension
     *
     * @return void
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    }

    /**
     * Sets the name of the class the generated classes should extend from.
     *
     * @param string $classToExtend
     *
     * @return void
     */
    public function setClassToExtend($classToExtend)
    {
        $this->classToExtend = $classToExtend;
    }

    /**
     * Sets whether or not to generate annotations for the entity.
     *
     * @param bool $bool
     *
     * @return void
     */
    public function setGenerateAnnotations($bool)
    {
        $this->generateAnnotations = $bool;
    }

    /**
     * Sets the class fields visibility for the entity (can either be private or protected).
     *
     * @param bool $visibility
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function setFieldVisibility($visibility)
    {
        if ($visibility !== static::FIELD_VISIBLE_PRIVATE && $visibility !== static::FIELD_VISIBLE_PROTECTED) {
            throw new \InvalidArgumentException('Invalid provided visibility (only private and protected are allowed): ' . $visibility);
        }

        $this->fieldVisibility = $visibility;
    }

    /**
     * Sets whether or not to generate immutable embeddables.
     *
     * @param boolean $embeddablesImmutable
     */
    public function setEmbeddablesImmutable($embeddablesImmutable)
    {
        $this->embeddablesImmutable = (boolean) $embeddablesImmutable;
    }

    /**
     * Sets an annotation prefix.
     *
     * @param string $prefix
     *
     * @return void
     */
    public function setAnnotationPrefix($prefix)
    {
        $this->annotationsPrefix = $prefix;
    }

    /**
     * Sets whether or not to try and update the entity if it already exists.
     *
     * @param bool $bool
     *
     * @return void
     */
    public function setUpdateEntityIfExists($bool)
    {
        $this->updateEntityIfExists = $bool;
    }

    /**
     * Sets whether or not to regenerate the entity if it exists.
     *
     * @param bool $bool
     *
     * @return void
     */
    public function setRegenerateEntityIfExists($bool)
    {
        $this->regenerateEntityIfExists = $bool;
    }

    /**
     * Sets whether or not to generate stub methods for the entity.
     *
     * @param bool $bool
     *
     * @return void
     */
    public function setGenerateStubMethods($bool)
    {
        $this->generateEntityStubMethods = $bool;
    }

    /**
     * Should an existing entity be backed up if it already exists?
     *
     * @param bool $bool
     *
     * @return void
     */
    public function setBackupExisting($bool)
    {
        $this->backupExisting = $bool;
    }

    /**
     * @param string $type
     *
     * @return string
     */
    protected function getType($type)
    {
        if (isset($this->typeAlias[$type])) {
            return $this->typeAlias[$type];
        }

        return $type;
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityNamespace(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        if (! $this->hasNamespace($metadata)) {
            return '';
        }

        return 'namespace ' . $this->getNamespace($metadata) .';';
    }

    /**
     * @return string
     */
    protected function generateEntityUse()
    {
        if (! $this->generateAnnotations) {
            return '';
        }

        return "\n".'use Doctrine\ORM\Mapping as ORM;'."\n";
=======
        if ($this->hasNamespace($metadata)) {
            return 'namespace ' . $this->getNamespace($metadata) .';';
        }
    }

    protected function generateEntityUse()
    {
        if ($this->generateAnnotations) {
            return "\n".'use Doctrine\ORM\Mapping as ORM;'."\n";
        } else {
            return "";
        }
>>>>>>> contactmanager
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityClassName(ClassMetadataInfo $metadata)
    {
        return 'class ' . $this->getClassName($metadata) .
            ($this->extendsClass() ? ' extends ' . $this->getClassToExtendName() : null);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityBody(ClassMetadataInfo $metadata)
    {
        $fieldMappingProperties = $this->generateEntityFieldMappingProperties($metadata);
        $embeddedProperties = $this->generateEntityEmbeddedProperties($metadata);
        $associationMappingProperties = $this->generateEntityAssociationMappingProperties($metadata);
        $stubMethods = $this->generateEntityStubMethods ? $this->generateEntityStubMethods($metadata) : null;
        $lifecycleCallbackMethods = $this->generateEntityLifecycleCallbackMethods($metadata);

<<<<<<< HEAD
        $code = [];
=======
        $code = array();
>>>>>>> contactmanager

        if ($fieldMappingProperties) {
            $code[] = $fieldMappingProperties;
        }

        if ($embeddedProperties) {
            $code[] = $embeddedProperties;
        }

        if ($associationMappingProperties) {
            $code[] = $associationMappingProperties;
        }

        $code[] = $this->generateEntityConstructor($metadata);

        if ($stubMethods) {
            $code[] = $stubMethods;
        }

        if ($lifecycleCallbackMethods) {
            $code[] = $lifecycleCallbackMethods;
        }

        return implode("\n", $code);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityConstructor(ClassMetadataInfo $metadata)
    {
        if ($this->hasMethod('__construct', $metadata)) {
            return '';
        }

        if ($metadata->isEmbeddedClass && $this->embeddablesImmutable) {
            return $this->generateEmbeddableConstructor($metadata);
        }

<<<<<<< HEAD
        $collections = [];
=======
        $collections = array();
>>>>>>> contactmanager

        foreach ($metadata->associationMappings as $mapping) {
            if ($mapping['type'] & ClassMetadataInfo::TO_MANY) {
                $collections[] = '$this->'.$mapping['fieldName'].' = new \Doctrine\Common\Collections\ArrayCollection();';
            }
        }

        if ($collections) {
            return $this->prefixCodeWithSpaces(str_replace("<collections>", implode("\n".$this->spaces, $collections), static::$constructorMethodTemplate));
        }

        return '';
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    private function generateEmbeddableConstructor(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $paramTypes = [];
        $paramVariables = [];
        $params = [];
        $fields = [];

        // Resort fields to put optional fields at the end of the method signature.
        $requiredFields = [];
        $optionalFields = [];
=======
        $paramTypes = array();
        $paramVariables = array();
        $params = array();
        $fields = array();

        // Resort fields to put optional fields at the end of the method signature.
        $requiredFields = array();
        $optionalFields = array();
>>>>>>> contactmanager

        foreach ($metadata->fieldMappings as $fieldMapping) {
            if (empty($fieldMapping['nullable'])) {
                $requiredFields[] = $fieldMapping;

                continue;
            }

            $optionalFields[] = $fieldMapping;
        }

        $fieldMappings = array_merge($requiredFields, $optionalFields);

        foreach ($metadata->embeddedClasses as $fieldName => $embeddedClass) {
            $paramType = '\\' . ltrim($embeddedClass['class'], '\\');
            $paramVariable = '$' . $fieldName;

            $paramTypes[] = $paramType;
            $paramVariables[] = $paramVariable;
            $params[] = $paramType . ' ' . $paramVariable;
            $fields[] = '$this->' . $fieldName . ' = ' . $paramVariable . ';';
        }

        foreach ($fieldMappings as $fieldMapping) {
<<<<<<< HEAD
            if (isset($fieldMapping['declaredField'], $metadata->embeddedClasses[$fieldMapping['declaredField']])) {
=======
            if (isset($fieldMapping['declaredField']) &&
                isset($metadata->embeddedClasses[$fieldMapping['declaredField']])
            ) {
>>>>>>> contactmanager
                continue;
            }

            $paramTypes[] = $this->getType($fieldMapping['type']) . (!empty($fieldMapping['nullable']) ? '|null' : '');
            $param = '$' . $fieldMapping['fieldName'];
            $paramVariables[] = $param;

            if ($fieldMapping['type'] === 'datetime') {
                $param = $this->getType($fieldMapping['type']) . ' ' . $param;
            }

            if (!empty($fieldMapping['nullable'])) {
                $param .= ' = null';
            }

            $params[] = $param;

            $fields[] = '$this->' . $fieldMapping['fieldName'] . ' = $' . $fieldMapping['fieldName'] . ';';
        }

        $maxParamTypeLength = max(array_map('strlen', $paramTypes));
        $paramTags = array_map(
            function ($type, $variable) use ($maxParamTypeLength) {
                return '@param ' . $type . str_repeat(' ', $maxParamTypeLength - strlen($type) + 1) . $variable;
            },
            $paramTypes,
            $paramVariables
        );

        // Generate multi line constructor if the signature exceeds 120 characters.
        if (array_sum(array_map('strlen', $params)) + count($params) * 2 + 29 > 120) {
            $delimiter = "\n" . $this->spaces;
            $params = $delimiter . implode(',' . $delimiter, $params) . "\n";
        } else {
            $params = implode(', ', $params);
        }

<<<<<<< HEAD
        $replacements = [
            '<paramTags>' => implode("\n * ", $paramTags),
            '<params>'    => $params,
            '<fields>'    => implode("\n" . $this->spaces, $fields),
        ];
=======
        $replacements = array(
            '<paramTags>' => implode("\n * ", $paramTags),
            '<params>'    => $params,
            '<fields>'    => implode("\n" . $this->spaces, $fields),
        );
>>>>>>> contactmanager

        $constructor = str_replace(
            array_keys($replacements),
            array_values($replacements),
            static::$embeddableConstructorMethodTemplate
        );

        return $this->prefixCodeWithSpaces($constructor);
    }

    /**
     * @todo this won't work if there is a namespace in brackets and a class outside of it.
     *
     * @param string $src
     *
     * @return void
     */
    protected function parseTokensInEntityFile($src)
    {
        $tokens = token_get_all($src);
<<<<<<< HEAD
        $tokensCount = count($tokens);
        $lastSeenNamespace = '';
=======
        $lastSeenNamespace = "";
>>>>>>> contactmanager
        $lastSeenClass = false;

        $inNamespace = false;
        $inClass = false;

<<<<<<< HEAD
        for ($i = 0; $i < $tokensCount; $i++) {
            $token = $tokens[$i];
            if (in_array($token[0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT], true)) {
=======
        for ($i = 0; $i < count($tokens); $i++) {
            $token = $tokens[$i];
            if (in_array($token[0], array(T_WHITESPACE, T_COMMENT, T_DOC_COMMENT))) {
>>>>>>> contactmanager
                continue;
            }

            if ($inNamespace) {
<<<<<<< HEAD
                if (in_array($token[0], [T_NS_SEPARATOR, T_STRING], true)) {
                    $lastSeenNamespace .= $token[1];
                } elseif (is_string($token) && in_array($token, [';', '{'], true)) {
=======
                if ($token[0] == T_NS_SEPARATOR || $token[0] == T_STRING) {
                    $lastSeenNamespace .= $token[1];
                } elseif (is_string($token) && in_array($token, array(';', '{'))) {
>>>>>>> contactmanager
                    $inNamespace = false;
                }
            }

            if ($inClass) {
                $inClass = false;
                $lastSeenClass = $lastSeenNamespace . ($lastSeenNamespace ? '\\' : '') . $token[1];
<<<<<<< HEAD
                $this->staticReflection[$lastSeenClass]['properties'] = [];
                $this->staticReflection[$lastSeenClass]['methods'] = [];
            }

            if (T_NAMESPACE === $token[0]) {
                $lastSeenNamespace = '';
                $inNamespace = true;
            } elseif (T_CLASS === $token[0] && T_DOUBLE_COLON !== $tokens[$i-1][0]) {
                $inClass = true;
            } elseif (T_FUNCTION === $token[0]) {
                if (T_STRING === $tokens[$i+2][0]) {
                    $this->staticReflection[$lastSeenClass]['methods'][] = strtolower($tokens[$i+2][1]);
                } elseif ($tokens[$i+2] == '&' && T_STRING === $tokens[$i+3][0]) {
                    $this->staticReflection[$lastSeenClass]['methods'][] = strtolower($tokens[$i+3][1]);
                }
            } elseif (in_array($token[0], [T_VAR, T_PUBLIC, T_PRIVATE, T_PROTECTED], true) && T_FUNCTION !== $tokens[$i+2][0]) {
=======
                $this->staticReflection[$lastSeenClass]['properties'] = array();
                $this->staticReflection[$lastSeenClass]['methods'] = array();
            }

            if ($token[0] == T_NAMESPACE) {
                $lastSeenNamespace = "";
                $inNamespace = true;
            } elseif ($token[0] == T_CLASS && $tokens[$i-1][0] != T_DOUBLE_COLON) {
                $inClass = true;
            } elseif ($token[0] == T_FUNCTION) {
                if ($tokens[$i+2][0] == T_STRING) {
                    $this->staticReflection[$lastSeenClass]['methods'][] = strtolower($tokens[$i+2][1]);
                } elseif ($tokens[$i+2] == "&" && $tokens[$i+3][0] == T_STRING) {
                    $this->staticReflection[$lastSeenClass]['methods'][] = strtolower($tokens[$i+3][1]);
                }
            } elseif (in_array($token[0], array(T_VAR, T_PUBLIC, T_PRIVATE, T_PROTECTED)) && $tokens[$i+2][0] != T_FUNCTION) {
>>>>>>> contactmanager
                $this->staticReflection[$lastSeenClass]['properties'][] = substr($tokens[$i+2][1], 1);
            }
        }
    }

    /**
     * @param string            $property
     * @param ClassMetadataInfo $metadata
     *
     * @return bool
     */
    protected function hasProperty($property, ClassMetadataInfo $metadata)
    {
        if ($this->extendsClass() || (!$this->isNew && class_exists($metadata->name))) {
            // don't generate property if its already on the base class.
            $reflClass = new \ReflectionClass($this->getClassToExtend() ?: $metadata->name);
            if ($reflClass->hasProperty($property)) {
                return true;
            }
        }

        // check traits for existing property
        foreach ($this->getTraits($metadata) as $trait) {
            if ($trait->hasProperty($property)) {
                return true;
            }
        }

        return (
            isset($this->staticReflection[$metadata->name]) &&
<<<<<<< HEAD
            in_array($property, $this->staticReflection[$metadata->name]['properties'], true)
=======
            in_array($property, $this->staticReflection[$metadata->name]['properties'])
>>>>>>> contactmanager
        );
    }

    /**
     * @param string            $method
     * @param ClassMetadataInfo $metadata
     *
     * @return bool
     */
    protected function hasMethod($method, ClassMetadataInfo $metadata)
    {
        if ($this->extendsClass() || (!$this->isNew && class_exists($metadata->name))) {
            // don't generate method if its already on the base class.
            $reflClass = new \ReflectionClass($this->getClassToExtend() ?: $metadata->name);

            if ($reflClass->hasMethod($method)) {
                return true;
            }
        }

        // check traits for existing method
        foreach ($this->getTraits($metadata) as $trait) {
            if ($trait->hasMethod($method)) {
                return true;
            }
        }

        return (
            isset($this->staticReflection[$metadata->name]) &&
<<<<<<< HEAD
            in_array(strtolower($method), $this->staticReflection[$metadata->name]['methods'], true)
=======
            in_array(strtolower($method), $this->staticReflection[$metadata->name]['methods'])
>>>>>>> contactmanager
        );
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return array
<<<<<<< HEAD
     *
     * @throws \ReflectionException
=======
>>>>>>> contactmanager
     */
    protected function getTraits(ClassMetadataInfo $metadata)
    {
        if (! ($metadata->reflClass !== null || class_exists($metadata->name))) {
            return [];
        }

<<<<<<< HEAD
        $reflClass = $metadata->reflClass ?? new \ReflectionClass($metadata->name);

        $traits = [];
=======
        $reflClass = $metadata->reflClass === null
            ? new \ReflectionClass($metadata->name)
            : $metadata->reflClass;

        $traits = array();
>>>>>>> contactmanager

        while ($reflClass !== false) {
            $traits = array_merge($traits, $reflClass->getTraits());

            $reflClass = $reflClass->getParentClass();
        }

        return $traits;
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return bool
     */
    protected function hasNamespace(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        return (bool) strpos($metadata->name, '\\');
=======
        return strpos($metadata->name, '\\') ? true : false;
>>>>>>> contactmanager
    }

    /**
     * @return bool
     */
    protected function extendsClass()
    {
<<<<<<< HEAD
        return (bool) $this->classToExtend;
=======
        return $this->classToExtend ? true : false;
>>>>>>> contactmanager
    }

    /**
     * @return string
     */
    protected function getClassToExtend()
    {
        return $this->classToExtend;
    }

    /**
     * @return string
     */
    protected function getClassToExtendName()
    {
        $refl = new \ReflectionClass($this->getClassToExtend());

        return '\\' . $refl->getName();
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function getClassName(ClassMetadataInfo $metadata)
    {
        return ($pos = strrpos($metadata->name, '\\'))
            ? substr($metadata->name, $pos + 1, strlen($metadata->name)) : $metadata->name;
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function getNamespace(ClassMetadataInfo $metadata)
    {
        return substr($metadata->name, 0, strrpos($metadata->name, '\\'));
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityDocBlock(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];
=======
        $lines = array();
>>>>>>> contactmanager
        $lines[] = '/**';
        $lines[] = ' * ' . $this->getClassName($metadata);

        if ($this->generateAnnotations) {
            $lines[] = ' *';

<<<<<<< HEAD
            $methods = [
=======
            $methods = array(
>>>>>>> contactmanager
                'generateTableAnnotation',
                'generateInheritanceAnnotation',
                'generateDiscriminatorColumnAnnotation',
                'generateDiscriminatorMapAnnotation',
                'generateEntityAnnotation',
<<<<<<< HEAD
                'generateEntityListenerAnnotation',
            ];
=======
            );
>>>>>>> contactmanager

            foreach ($methods as $method) {
                if ($code = $this->$method($metadata)) {
                    $lines[] = ' * ' . $code;
                }
            }

            if (isset($metadata->lifecycleCallbacks) && $metadata->lifecycleCallbacks) {
                $lines[] = ' * @' . $this->annotationsPrefix . 'HasLifecycleCallbacks';
            }
        }

        $lines[] = ' */';

        return implode("\n", $lines);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityAnnotation(ClassMetadataInfo $metadata)
    {
        $prefix = '@' . $this->annotationsPrefix;

        if ($metadata->isEmbeddedClass) {
            return $prefix . 'Embeddable';
        }

        $customRepository = $metadata->customRepositoryClassName
            ? '(repositoryClass="' . $metadata->customRepositoryClassName . '")'
            : '';

        return $prefix . ($metadata->isMappedSuperclass ? 'MappedSuperclass' : 'Entity') . $customRepository;
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateTableAnnotation(ClassMetadataInfo $metadata)
=======
    protected function generateTableAnnotation($metadata)
>>>>>>> contactmanager
    {
        if ($metadata->isEmbeddedClass) {
            return '';
        }

<<<<<<< HEAD
        $table = [];
=======
        $table = array();
>>>>>>> contactmanager

        if (isset($metadata->table['schema'])) {
            $table[] = 'schema="' . $metadata->table['schema'] . '"';
        }

        if (isset($metadata->table['name'])) {
            $table[] = 'name="' . $metadata->table['name'] . '"';
        }

        if (isset($metadata->table['options']) && $metadata->table['options']) {
            $table[] = 'options={' . $this->exportTableOptions((array) $metadata->table['options']) . '}';
        }

        if (isset($metadata->table['uniqueConstraints']) && $metadata->table['uniqueConstraints']) {
            $constraints = $this->generateTableConstraints('UniqueConstraint', $metadata->table['uniqueConstraints']);
            $table[] = 'uniqueConstraints={' . $constraints . '}';
        }

        if (isset($metadata->table['indexes']) && $metadata->table['indexes']) {
            $constraints = $this->generateTableConstraints('Index', $metadata->table['indexes']);
            $table[] = 'indexes={' . $constraints . '}';
        }

        return '@' . $this->annotationsPrefix . 'Table(' . implode(', ', $table) . ')';
    }

    /**
     * @param string $constraintName
     * @param array  $constraints
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateTableConstraints($constraintName, array $constraints)
    {
        $annotations = [];
        foreach ($constraints as $name => $constraint) {
            $columns = [];
=======
    protected function generateTableConstraints($constraintName, $constraints)
    {
        $annotations = array();
        foreach ($constraints as $name => $constraint) {
            $columns = array();
>>>>>>> contactmanager
            foreach ($constraint['columns'] as $column) {
                $columns[] = '"' . $column . '"';
            }
            $annotations[] = '@' . $this->annotationsPrefix . $constraintName . '(name="' . $name . '", columns={' . implode(', ', $columns) . '})';
        }
<<<<<<< HEAD

=======
>>>>>>> contactmanager
        return implode(', ', $annotations);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateInheritanceAnnotation(ClassMetadataInfo $metadata)
    {
        if ($metadata->inheritanceType === ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            return '';
        }

        return '@' . $this->annotationsPrefix . 'InheritanceType("'.$this->getInheritanceTypeString($metadata->inheritanceType).'")';
=======
    protected function generateInheritanceAnnotation($metadata)
    {
        if ($metadata->inheritanceType != ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            return '@' . $this->annotationsPrefix . 'InheritanceType("'.$this->getInheritanceTypeString($metadata->inheritanceType).'")';
        }
>>>>>>> contactmanager
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateDiscriminatorColumnAnnotation(ClassMetadataInfo $metadata)
    {
        if ($metadata->inheritanceType === ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            return '';
        }

        $discrColumn = $metadata->discriminatorColumn;
        $columnDefinition = 'name="' . $discrColumn['name']
            . '", type="' . $discrColumn['type']
            . '", length=' . $discrColumn['length'];

        return '@' . $this->annotationsPrefix . 'DiscriminatorColumn(' . $columnDefinition . ')';
=======
    protected function generateDiscriminatorColumnAnnotation($metadata)
    {
        if ($metadata->inheritanceType != ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            $discrColumn = $metadata->discriminatorColumn;
            $columnDefinition = 'name="' . $discrColumn['name']
                . '", type="' . $discrColumn['type']
                . '", length=' . $discrColumn['length'];

            return '@' . $this->annotationsPrefix . 'DiscriminatorColumn(' . $columnDefinition . ')';
        }
>>>>>>> contactmanager
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateDiscriminatorMapAnnotation(ClassMetadataInfo $metadata)
    {
        if ($metadata->inheritanceType === ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            return null;
        }

        $inheritanceClassMap = [];

        foreach ($metadata->discriminatorMap as $type => $class) {
            $inheritanceClassMap[] .= '"' . $type . '" = "' . $class . '"';
        }

        return '@' . $this->annotationsPrefix . 'DiscriminatorMap({' . implode(', ', $inheritanceClassMap) . '})';
=======
    protected function generateDiscriminatorMapAnnotation($metadata)
    {
        if ($metadata->inheritanceType != ClassMetadataInfo::INHERITANCE_TYPE_NONE) {
            $inheritanceClassMap = array();

            foreach ($metadata->discriminatorMap as $type => $class) {
                $inheritanceClassMap[] .= '"' . $type . '" = "' . $class . '"';
            }

            return '@' . $this->annotationsPrefix . 'DiscriminatorMap({' . implode(', ', $inheritanceClassMap) . '})';
        }
>>>>>>> contactmanager
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityStubMethods(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $methods = [];

        foreach ($metadata->fieldMappings as $fieldMapping) {
            if (isset($fieldMapping['declaredField'], $metadata->embeddedClasses[$fieldMapping['declaredField']])) {
                continue;
            }

            $nullableField = $this->nullableFieldExpression($fieldMapping);

            if ((!$metadata->isEmbeddedClass || !$this->embeddablesImmutable)
                && (!isset($fieldMapping['id']) || ! $fieldMapping['id'] || $metadata->generatorType === ClassMetadataInfo::GENERATOR_TYPE_NONE)
                && $code = $this->generateEntityStubMethod($metadata, 'set', $fieldMapping['fieldName'], $fieldMapping['type'], $nullableField)
            ) {
                $methods[] = $code;
            }

            if ($code = $this->generateEntityStubMethod($metadata, 'get', $fieldMapping['fieldName'], $fieldMapping['type'], $nullableField)) {
=======
        $methods = array();

        foreach ($metadata->fieldMappings as $fieldMapping) {
            if (isset($fieldMapping['declaredField']) &&
                isset($metadata->embeddedClasses[$fieldMapping['declaredField']])
            ) {
                continue;
            }

            if (( ! isset($fieldMapping['id']) ||
                    ! $fieldMapping['id'] ||
                    $metadata->generatorType == ClassMetadataInfo::GENERATOR_TYPE_NONE
                ) && (! $metadata->isEmbeddedClass || ! $this->embeddablesImmutable)
            ) {
                if ($code = $this->generateEntityStubMethod($metadata, 'set', $fieldMapping['fieldName'], $fieldMapping['type'])) {
                    $methods[] = $code;
                }
            }

            if ($code = $this->generateEntityStubMethod($metadata, 'get', $fieldMapping['fieldName'], $fieldMapping['type'])) {
>>>>>>> contactmanager
                $methods[] = $code;
            }
        }

        foreach ($metadata->embeddedClasses as $fieldName => $embeddedClass) {
            if (isset($embeddedClass['declaredField'])) {
                continue;
            }

            if ( ! $metadata->isEmbeddedClass || ! $this->embeddablesImmutable) {
                if ($code = $this->generateEntityStubMethod($metadata, 'set', $fieldName, $embeddedClass['class'])) {
                    $methods[] = $code;
                }
            }

            if ($code = $this->generateEntityStubMethod($metadata, 'get', $fieldName, $embeddedClass['class'])) {
                $methods[] = $code;
            }
        }

        foreach ($metadata->associationMappings as $associationMapping) {
            if ($associationMapping['type'] & ClassMetadataInfo::TO_ONE) {
                $nullable = $this->isAssociationIsNullable($associationMapping) ? 'null' : null;
                if ($code = $this->generateEntityStubMethod($metadata, 'set', $associationMapping['fieldName'], $associationMapping['targetEntity'], $nullable)) {
                    $methods[] = $code;
                }
<<<<<<< HEAD
                if ($code = $this->generateEntityStubMethod($metadata, 'get', $associationMapping['fieldName'], $associationMapping['targetEntity'], $nullable)) {
=======
                if ($code = $this->generateEntityStubMethod($metadata, 'get', $associationMapping['fieldName'], $associationMapping['targetEntity'])) {
>>>>>>> contactmanager
                    $methods[] = $code;
                }
            } elseif ($associationMapping['type'] & ClassMetadataInfo::TO_MANY) {
                if ($code = $this->generateEntityStubMethod($metadata, 'add', $associationMapping['fieldName'], $associationMapping['targetEntity'])) {
                    $methods[] = $code;
                }
                if ($code = $this->generateEntityStubMethod($metadata, 'remove', $associationMapping['fieldName'], $associationMapping['targetEntity'])) {
                    $methods[] = $code;
                }
<<<<<<< HEAD
                if ($code = $this->generateEntityStubMethod($metadata, 'get', $associationMapping['fieldName'], Collection::class)) {
=======
                if ($code = $this->generateEntityStubMethod($metadata, 'get', $associationMapping['fieldName'], 'Doctrine\Common\Collections\Collection')) {
>>>>>>> contactmanager
                    $methods[] = $code;
                }
            }
        }

        return implode("\n\n", $methods);
    }

    /**
     * @param array $associationMapping
     *
     * @return bool
     */
<<<<<<< HEAD
    protected function isAssociationIsNullable(array $associationMapping)
=======
    protected function isAssociationIsNullable($associationMapping)
>>>>>>> contactmanager
    {
        if (isset($associationMapping['id']) && $associationMapping['id']) {
            return false;
        }

        if (isset($associationMapping['joinColumns'])) {
            $joinColumns = $associationMapping['joinColumns'];
        } else {
            //@todo there is no way to retrieve targetEntity metadata
<<<<<<< HEAD
            $joinColumns = [];
        }

        foreach ($joinColumns as $joinColumn) {
            if (isset($joinColumn['nullable']) && !$joinColumn['nullable']) {
=======
            $joinColumns = array();
        }

        foreach ($joinColumns as $joinColumn) {
            if(isset($joinColumn['nullable']) && !$joinColumn['nullable']) {
>>>>>>> contactmanager
                return false;
            }
        }

        return true;
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityLifecycleCallbackMethods(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        if (empty($metadata->lifecycleCallbacks)) {
            return '';
        }

        $methods = [];

        foreach ($metadata->lifecycleCallbacks as $name => $callbacks) {
            foreach ($callbacks as $callback) {
                $methods[] = $this->generateLifecycleCallbackMethod($name, $callback, $metadata);
            }
        }

        return implode("\n\n", array_filter($methods));
=======
        if (isset($metadata->lifecycleCallbacks) && $metadata->lifecycleCallbacks) {
            $methods = array();

            foreach ($metadata->lifecycleCallbacks as $name => $callbacks) {
                foreach ($callbacks as $callback) {
                    if ($code = $this->generateLifecycleCallbackMethod($name, $callback, $metadata)) {
                        $methods[] = $code;
                    }
                }
            }

            return implode("\n\n", $methods);
        }

        return "";
>>>>>>> contactmanager
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityAssociationMappingProperties(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];
=======
        $lines = array();
>>>>>>> contactmanager

        foreach ($metadata->associationMappings as $associationMapping) {
            if ($this->hasProperty($associationMapping['fieldName'], $metadata)) {
                continue;
            }

            $lines[] = $this->generateAssociationMappingPropertyDocBlock($associationMapping, $metadata);
            $lines[] = $this->spaces . $this->fieldVisibility . ' $' . $associationMapping['fieldName']
                     . ($associationMapping['type'] == 'manyToMany' ? ' = array()' : null) . ";\n";
        }

        return implode("\n", $lines);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityFieldMappingProperties(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];

        foreach ($metadata->fieldMappings as $fieldMapping) {
            if (isset($fieldMapping['declaredField'], $metadata->embeddedClasses[$fieldMapping['declaredField']]) ||
                $this->hasProperty($fieldMapping['fieldName'], $metadata) ||
                $metadata->isInheritedField($fieldMapping['fieldName'])
=======
        $lines = array();

        foreach ($metadata->fieldMappings as $fieldMapping) {
            if ($this->hasProperty($fieldMapping['fieldName'], $metadata) ||
                $metadata->isInheritedField($fieldMapping['fieldName']) ||
                (
                    isset($fieldMapping['declaredField']) &&
                    isset($metadata->embeddedClasses[$fieldMapping['declaredField']])
                )
>>>>>>> contactmanager
            ) {
                continue;
            }

            $lines[] = $this->generateFieldMappingPropertyDocBlock($fieldMapping, $metadata);
            $lines[] = $this->spaces . $this->fieldVisibility . ' $' . $fieldMapping['fieldName']
                     . (isset($fieldMapping['options']['default']) ? ' = ' . var_export($fieldMapping['options']['default'], true) : null) . ";\n";
        }

        return implode("\n", $lines);
    }

    /**
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateEntityEmbeddedProperties(ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];
=======
        $lines = array();
>>>>>>> contactmanager

        foreach ($metadata->embeddedClasses as $fieldName => $embeddedClass) {
            if (isset($embeddedClass['declaredField']) || $this->hasProperty($fieldName, $metadata)) {
                continue;
            }

            $lines[] = $this->generateEmbeddedPropertyDocBlock($embeddedClass);
            $lines[] = $this->spaces . $this->fieldVisibility . ' $' . $fieldName . ";\n";
        }

        return implode("\n", $lines);
    }

    /**
     * @param ClassMetadataInfo $metadata
     * @param string            $type
     * @param string            $fieldName
     * @param string|null       $typeHint
     * @param string|null       $defaultValue
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateEntityStubMethod(ClassMetadataInfo $metadata, $type, $fieldName, $typeHint = null, $defaultValue = null)
    {
        $methodName = $type . Inflector::classify($fieldName);
        $variableName = Inflector::camelize($fieldName);
        if (in_array($type, ["add", "remove"])) {
=======
    protected function generateEntityStubMethod(ClassMetadataInfo $metadata, $type, $fieldName, $typeHint = null,  $defaultValue = null)
    {
        $methodName = $type . Inflector::classify($fieldName);
        $variableName = Inflector::camelize($fieldName);
        if (in_array($type, array("add", "remove"))) {
>>>>>>> contactmanager
            $methodName = Inflector::singularize($methodName);
            $variableName = Inflector::singularize($variableName);
        }

        if ($this->hasMethod($methodName, $metadata)) {
            return '';
        }
        $this->staticReflection[$metadata->name]['methods'][] = strtolower($methodName);

        $var = sprintf('%sMethodTemplate', $type);
        $template = static::$$var;

        $methodTypeHint = null;
        $types          = Type::getTypesMap();
        $variableType   = $typeHint ? $this->getType($typeHint) : null;

        if ($typeHint && ! isset($types[$typeHint])) {
            $variableType   =  '\\' . ltrim($variableType, '\\');
            $methodTypeHint =  '\\' . $typeHint . ' ';
        }

<<<<<<< HEAD
        $replacements = [
          '<description>'       => ucfirst($type) . ' ' . $variableName . '.',
          '<methodTypeHint>'    => $methodTypeHint,
          '<variableType>'      => $variableType . (null !== $defaultValue ? ('|' . $defaultValue) : ''),
          '<variableName>'      => $variableName,
          '<methodName>'        => $methodName,
          '<fieldName>'         => $fieldName,
          '<variableDefault>'   => ($defaultValue !== null ) ? (' = ' . $defaultValue) : '',
          '<entity>'            => $this->getClassName($metadata)
        ];
=======
        $replacements = array(
          '<description>'       => ucfirst($type) . ' ' . $variableName,
          '<methodTypeHint>'    => $methodTypeHint,
          '<variableType>'      => $variableType,
          '<variableName>'      => $variableName,
          '<methodName>'        => $methodName,
          '<fieldName>'         => $fieldName,
          '<variableDefault>'   => ($defaultValue !== null ) ? (' = '.$defaultValue) : '',
          '<entity>'            => $this->getClassName($metadata)
        );
>>>>>>> contactmanager

        $method = str_replace(
            array_keys($replacements),
            array_values($replacements),
            $template
        );

        return $this->prefixCodeWithSpaces($method);
    }

    /**
     * @param string            $name
     * @param string            $methodName
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
<<<<<<< HEAD
    protected function generateLifecycleCallbackMethod($name, $methodName, ClassMetadataInfo $metadata)
=======
    protected function generateLifecycleCallbackMethod($name, $methodName, $metadata)
>>>>>>> contactmanager
    {
        if ($this->hasMethod($methodName, $metadata)) {
            return '';
        }
<<<<<<< HEAD

        $this->staticReflection[$metadata->name]['methods'][] = $methodName;

        $replacements = [
            '<name>'        => $this->annotationsPrefix . ucfirst($name),
            '<methodName>'  => $methodName,
        ];
=======
        $this->staticReflection[$metadata->name]['methods'][] = $methodName;

        $replacements = array(
            '<name>'        => $this->annotationsPrefix . ucfirst($name),
            '<methodName>'  => $methodName,
        );
>>>>>>> contactmanager

        $method = str_replace(
            array_keys($replacements),
            array_values($replacements),
            static::$lifecycleCallbackMethodTemplate
        );

        return $this->prefixCodeWithSpaces($method);
    }

    /**
     * @param array $joinColumn
     *
     * @return string
     */
    protected function generateJoinColumnAnnotation(array $joinColumn)
    {
<<<<<<< HEAD
        $joinColumnAnnot = [];
=======
        $joinColumnAnnot = array();
>>>>>>> contactmanager

        if (isset($joinColumn['name'])) {
            $joinColumnAnnot[] = 'name="' . $joinColumn['name'] . '"';
        }

        if (isset($joinColumn['referencedColumnName'])) {
            $joinColumnAnnot[] = 'referencedColumnName="' . $joinColumn['referencedColumnName'] . '"';
        }

        if (isset($joinColumn['unique']) && $joinColumn['unique']) {
            $joinColumnAnnot[] = 'unique=' . ($joinColumn['unique'] ? 'true' : 'false');
        }

        if (isset($joinColumn['nullable'])) {
            $joinColumnAnnot[] = 'nullable=' . ($joinColumn['nullable'] ? 'true' : 'false');
        }

        if (isset($joinColumn['onDelete'])) {
            $joinColumnAnnot[] = 'onDelete="' . ($joinColumn['onDelete'] . '"');
        }

        if (isset($joinColumn['columnDefinition'])) {
            $joinColumnAnnot[] = 'columnDefinition="' . $joinColumn['columnDefinition'] . '"';
        }

        return '@' . $this->annotationsPrefix . 'JoinColumn(' . implode(', ', $joinColumnAnnot) . ')';
    }

    /**
     * @param array             $associationMapping
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateAssociationMappingPropertyDocBlock(array $associationMapping, ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];
=======
        $lines = array();
>>>>>>> contactmanager
        $lines[] = $this->spaces . '/**';

        if ($associationMapping['type'] & ClassMetadataInfo::TO_MANY) {
            $lines[] = $this->spaces . ' * @var \Doctrine\Common\Collections\Collection';
        } else {
            $lines[] = $this->spaces . ' * @var \\' . ltrim($associationMapping['targetEntity'], '\\');
        }

        if ($this->generateAnnotations) {
            $lines[] = $this->spaces . ' *';

            if (isset($associationMapping['id']) && $associationMapping['id']) {
                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'Id';

                if ($generatorType = $this->getIdGeneratorTypeString($metadata->generatorType)) {
                    $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'GeneratedValue(strategy="' . $generatorType . '")';
                }
            }

            $type = null;
            switch ($associationMapping['type']) {
                case ClassMetadataInfo::ONE_TO_ONE:
                    $type = 'OneToOne';
                    break;
                case ClassMetadataInfo::MANY_TO_ONE:
                    $type = 'ManyToOne';
                    break;
                case ClassMetadataInfo::ONE_TO_MANY:
                    $type = 'OneToMany';
                    break;
                case ClassMetadataInfo::MANY_TO_MANY:
                    $type = 'ManyToMany';
                    break;
            }
<<<<<<< HEAD
            $typeOptions = [];
=======
            $typeOptions = array();
>>>>>>> contactmanager

            if (isset($associationMapping['targetEntity'])) {
                $typeOptions[] = 'targetEntity="' . $associationMapping['targetEntity'] . '"';
            }

            if (isset($associationMapping['inversedBy'])) {
                $typeOptions[] = 'inversedBy="' . $associationMapping['inversedBy'] . '"';
            }

            if (isset($associationMapping['mappedBy'])) {
                $typeOptions[] = 'mappedBy="' . $associationMapping['mappedBy'] . '"';
            }

            if ($associationMapping['cascade']) {
<<<<<<< HEAD
                $cascades = [];
=======
                $cascades = array();
>>>>>>> contactmanager

                if ($associationMapping['isCascadePersist']) $cascades[] = '"persist"';
                if ($associationMapping['isCascadeRemove']) $cascades[] = '"remove"';
                if ($associationMapping['isCascadeDetach']) $cascades[] = '"detach"';
                if ($associationMapping['isCascadeMerge']) $cascades[] = '"merge"';
                if ($associationMapping['isCascadeRefresh']) $cascades[] = '"refresh"';

                if (count($cascades) === 5) {
<<<<<<< HEAD
                    $cascades = ['"all"'];
=======
                    $cascades = array('"all"');
>>>>>>> contactmanager
                }

                $typeOptions[] = 'cascade={' . implode(',', $cascades) . '}';
            }

            if (isset($associationMapping['orphanRemoval']) && $associationMapping['orphanRemoval']) {
                $typeOptions[] = 'orphanRemoval=' . ($associationMapping['orphanRemoval'] ? 'true' : 'false');
            }

            if (isset($associationMapping['fetch']) && $associationMapping['fetch'] !== ClassMetadataInfo::FETCH_LAZY) {
<<<<<<< HEAD
                $fetchMap = [
                    ClassMetadataInfo::FETCH_EXTRA_LAZY => 'EXTRA_LAZY',
                    ClassMetadataInfo::FETCH_EAGER      => 'EAGER',
                ];
=======
                $fetchMap = array(
                    ClassMetadataInfo::FETCH_EXTRA_LAZY => 'EXTRA_LAZY',
                    ClassMetadataInfo::FETCH_EAGER      => 'EAGER',
                );
>>>>>>> contactmanager

                $typeOptions[] = 'fetch="' . $fetchMap[$associationMapping['fetch']] . '"';
            }

            $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . '' . $type . '(' . implode(', ', $typeOptions) . ')';

            if (isset($associationMapping['joinColumns']) && $associationMapping['joinColumns']) {
                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'JoinColumns({';

<<<<<<< HEAD
                $joinColumnsLines = [];
=======
                $joinColumnsLines = array();
>>>>>>> contactmanager

                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    if ($joinColumnAnnot = $this->generateJoinColumnAnnotation($joinColumn)) {
                        $joinColumnsLines[] = $this->spaces . ' *   ' . $joinColumnAnnot;
                    }
                }

                $lines[] = implode(",\n", $joinColumnsLines);
                $lines[] = $this->spaces . ' * })';
            }

            if (isset($associationMapping['joinTable']) && $associationMapping['joinTable']) {
<<<<<<< HEAD
                $joinTable = [];
=======
                $joinTable = array();
>>>>>>> contactmanager
                $joinTable[] = 'name="' . $associationMapping['joinTable']['name'] . '"';

                if (isset($associationMapping['joinTable']['schema'])) {
                    $joinTable[] = 'schema="' . $associationMapping['joinTable']['schema'] . '"';
                }

                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'JoinTable(' . implode(', ', $joinTable) . ',';
                $lines[] = $this->spaces . ' *   joinColumns={';

<<<<<<< HEAD
                $joinColumnsLines = [];
=======
                $joinColumnsLines = array();
>>>>>>> contactmanager

                foreach ($associationMapping['joinTable']['joinColumns'] as $joinColumn) {
                    $joinColumnsLines[] = $this->spaces . ' *     ' . $this->generateJoinColumnAnnotation($joinColumn);
                }

                $lines[] = implode(",". PHP_EOL, $joinColumnsLines);
                $lines[] = $this->spaces . ' *   },';
                $lines[] = $this->spaces . ' *   inverseJoinColumns={';

<<<<<<< HEAD
                $inverseJoinColumnsLines = [];
=======
                $inverseJoinColumnsLines = array();
>>>>>>> contactmanager

                foreach ($associationMapping['joinTable']['inverseJoinColumns'] as $joinColumn) {
                    $inverseJoinColumnsLines[] = $this->spaces . ' *     ' . $this->generateJoinColumnAnnotation($joinColumn);
                }

                $lines[] = implode(",". PHP_EOL, $inverseJoinColumnsLines);
                $lines[] = $this->spaces . ' *   }';
                $lines[] = $this->spaces . ' * )';
            }

            if (isset($associationMapping['orderBy'])) {
                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'OrderBy({';

                foreach ($associationMapping['orderBy'] as $name => $direction) {
                    $lines[] = $this->spaces . ' *     "' . $name . '"="' . $direction . '",';
                }

                $lines[count($lines) - 1] = substr($lines[count($lines) - 1], 0, strlen($lines[count($lines) - 1]) - 1);
                $lines[] = $this->spaces . ' * })';
            }
        }

        $lines[] = $this->spaces . ' */';

        return implode("\n", $lines);
    }

    /**
     * @param array             $fieldMapping
     * @param ClassMetadataInfo $metadata
     *
     * @return string
     */
    protected function generateFieldMappingPropertyDocBlock(array $fieldMapping, ClassMetadataInfo $metadata)
    {
<<<<<<< HEAD
        $lines = [];
        $lines[] = $this->spaces . '/**';
        $lines[] = $this->spaces . ' * @var '
            . $this->getType($fieldMapping['type'])
            . ($this->nullableFieldExpression($fieldMapping) ? '|null' : '');
=======
        $lines = array();
        $lines[] = $this->spaces . '/**';
        $lines[] = $this->spaces . ' * @var ' . $this->getType($fieldMapping['type']);
>>>>>>> contactmanager

        if ($this->generateAnnotations) {
            $lines[] = $this->spaces . ' *';

<<<<<<< HEAD
            $column = [];
=======
            $column = array();
>>>>>>> contactmanager
            if (isset($fieldMapping['columnName'])) {
                $column[] = 'name="' . $fieldMapping['columnName'] . '"';
            }

            if (isset($fieldMapping['type'])) {
                $column[] = 'type="' . $fieldMapping['type'] . '"';
            }

            if (isset($fieldMapping['length'])) {
                $column[] = 'length=' . $fieldMapping['length'];
            }

            if (isset($fieldMapping['precision'])) {
                $column[] = 'precision=' .  $fieldMapping['precision'];
            }

            if (isset($fieldMapping['scale'])) {
                $column[] = 'scale=' . $fieldMapping['scale'];
            }

            if (isset($fieldMapping['nullable'])) {
                $column[] = 'nullable=' .  var_export($fieldMapping['nullable'], true);
            }

<<<<<<< HEAD
            $options = [];

            if (isset($fieldMapping['options']['default']) && $fieldMapping['options']['default']) {
                $options[] = '"default"="' . $fieldMapping['options']['default'] .'"';
            }

            if (isset($fieldMapping['options']['unsigned']) && $fieldMapping['options']['unsigned']) {
                $options[] = '"unsigned"=true';
            }

            if (isset($fieldMapping['options']['fixed']) && $fieldMapping['options']['fixed']) {
                $options[] = '"fixed"=true';
            }

            if (isset($fieldMapping['options']['comment']) && $fieldMapping['options']['comment']) {
                $options[] = '"comment"="' . $fieldMapping['options']['comment'] .'"';
            }

            if (isset($fieldMapping['options']['collation']) && $fieldMapping['options']['collation']) {
                $options[] = '"collation"="' . $fieldMapping['options']['collation'] .'"';
            }

            if (isset($fieldMapping['options']['check']) && $fieldMapping['options']['check']) {
                $options[] = '"check"="' . $fieldMapping['options']['check'] .'"';
            }

            if ($options) {
                $column[] = 'options={'.implode(',', $options).'}';
=======
            if (isset($fieldMapping['unsigned']) && $fieldMapping['unsigned']) {
                $column[] = 'options={"unsigned"=true}';
>>>>>>> contactmanager
            }

            if (isset($fieldMapping['columnDefinition'])) {
                $column[] = 'columnDefinition="' . $fieldMapping['columnDefinition'] . '"';
            }

            if (isset($fieldMapping['unique'])) {
                $column[] = 'unique=' . var_export($fieldMapping['unique'], true);
            }

            $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'Column(' . implode(', ', $column) . ')';

            if (isset($fieldMapping['id']) && $fieldMapping['id']) {
                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'Id';

                if ($generatorType = $this->getIdGeneratorTypeString($metadata->generatorType)) {
                    $lines[] = $this->spaces.' * @' . $this->annotationsPrefix . 'GeneratedValue(strategy="' . $generatorType . '")';
                }

                if ($metadata->sequenceGeneratorDefinition) {
<<<<<<< HEAD
                    $sequenceGenerator = [];
=======
                    $sequenceGenerator = array();
>>>>>>> contactmanager

                    if (isset($metadata->sequenceGeneratorDefinition['sequenceName'])) {
                        $sequenceGenerator[] = 'sequenceName="' . $metadata->sequenceGeneratorDefinition['sequenceName'] . '"';
                    }

                    if (isset($metadata->sequenceGeneratorDefinition['allocationSize'])) {
                        $sequenceGenerator[] = 'allocationSize=' . $metadata->sequenceGeneratorDefinition['allocationSize'];
                    }

                    if (isset($metadata->sequenceGeneratorDefinition['initialValue'])) {
                        $sequenceGenerator[] = 'initialValue=' . $metadata->sequenceGeneratorDefinition['initialValue'];
                    }

                    $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'SequenceGenerator(' . implode(', ', $sequenceGenerator) . ')';
                }
            }

            if (isset($fieldMapping['version']) && $fieldMapping['version']) {
                $lines[] = $this->spaces . ' * @' . $this->annotationsPrefix . 'Version';
            }
        }

        $lines[] = $this->spaces . ' */';

        return implode("\n", $lines);
    }

    /**
     * @param array $embeddedClass
     *
     * @return string
     */
    protected function generateEmbeddedPropertyDocBlock(array $embeddedClass)
    {
<<<<<<< HEAD
        $lines = [];
=======
        $lines = array();
>>>>>>> contactmanager
        $lines[] = $this->spaces . '/**';
        $lines[] = $this->spaces . ' * @var \\' . ltrim($embeddedClass['class'], '\\');

        if ($this->generateAnnotations) {
            $lines[] = $this->spaces . ' *';

<<<<<<< HEAD
            $embedded = ['class="' . $embeddedClass['class'] . '"'];

            if (isset($embeddedClass['columnPrefix'])) {
                if (is_string($embeddedClass['columnPrefix'])) {
                    $embedded[] = 'columnPrefix="' . $embeddedClass['columnPrefix'] . '"';
                } else {
                    $embedded[] = 'columnPrefix=' . var_export($embeddedClass['columnPrefix'], true);
                }
=======
            $embedded = array('class="' . $embeddedClass['class'] . '"');

            if (isset($fieldMapping['columnPrefix'])) {
                $embedded[] = 'columnPrefix=' . var_export($embeddedClass['columnPrefix'], true);
>>>>>>> contactmanager
            }

            $lines[] = $this->spaces . ' * @' .
                $this->annotationsPrefix . 'Embedded(' . implode(', ', $embedded) . ')';
        }

        $lines[] = $this->spaces . ' */';

        return implode("\n", $lines);
    }

<<<<<<< HEAD
    private function generateEntityListenerAnnotation(ClassMetadataInfo $metadata): string
    {
        if (0 === \count($metadata->entityListeners)) {
            return '';
        }

        $processedClasses = [];
        foreach ($metadata->entityListeners as $event => $eventListeners) {
            foreach ($eventListeners as $eventListener) {
                $processedClasses[] = '"' . $eventListener['class'] . '"';
            }
        }

        return \sprintf(
            '%s%s({%s})',
            '@' . $this->annotationsPrefix,
            'EntityListeners',
            \implode(',', \array_unique($processedClasses))
        );
    }

=======
>>>>>>> contactmanager
    /**
     * @param string $code
     * @param int    $num
     *
     * @return string
     */
    protected function prefixCodeWithSpaces($code, $num = 1)
    {
        $lines = explode("\n", $code);

        foreach ($lines as $key => $value) {
            if ( ! empty($value)) {
                $lines[$key] = str_repeat($this->spaces, $num) . $lines[$key];
            }
        }

        return implode("\n", $lines);
    }

    /**
     * @param integer $type The inheritance type used by the class and its subclasses.
     *
     * @return string The literal string for the inheritance type.
     *
     * @throws \InvalidArgumentException When the inheritance type does not exist.
     */
    protected function getInheritanceTypeString($type)
    {
        if ( ! isset(static::$inheritanceTypeMap[$type])) {
            throw new \InvalidArgumentException(sprintf('Invalid provided InheritanceType: %s', $type));
        }

        return static::$inheritanceTypeMap[$type];
    }

    /**
     * @param integer $type The policy used for change-tracking for the mapped class.
     *
     * @return string The literal string for the change-tracking type.
     *
     * @throws \InvalidArgumentException When the change-tracking type does not exist.
     */
    protected function getChangeTrackingPolicyString($type)
    {
        if ( ! isset(static::$changeTrackingPolicyMap[$type])) {
            throw new \InvalidArgumentException(sprintf('Invalid provided ChangeTrackingPolicy: %s', $type));
        }

        return static::$changeTrackingPolicyMap[$type];
    }

    /**
     * @param integer $type The generator to use for the mapped class.
     *
     * @return string The literal string for the generator type.
     *
     * @throws \InvalidArgumentException    When the generator type does not exist.
     */
    protected function getIdGeneratorTypeString($type)
    {
        if ( ! isset(static::$generatorStrategyMap[$type])) {
            throw new \InvalidArgumentException(sprintf('Invalid provided IdGeneratorType: %s', $type));
        }

        return static::$generatorStrategyMap[$type];
    }

    /**
<<<<<<< HEAD
     * @param array $fieldMapping
     *
     * @return string|null
     */
    private function nullableFieldExpression(array $fieldMapping)
    {
        if (isset($fieldMapping['nullable']) && true === $fieldMapping['nullable']) {
            return 'null';
        }

        return null;
    }

    /**
     * Exports (nested) option elements.
     *
     * @param array $options
     *
     * @return string
     */
    private function exportTableOptions(array $options)
    {
        $optionsStr = [];

        foreach ($options as $name => $option) {
=======
     * Exports (nested) option elements.
     *
     * @param array $options
     */
    private function exportTableOptions(array $options)
    {
        $optionsStr = array();

        foreach($options as $name => $option) {
>>>>>>> contactmanager
            if (is_array($option)) {
                $optionsStr[] = '"' . $name . '"={' . $this->exportTableOptions($option) . '}';
            } else {
                $optionsStr[] = '"' . $name . '"="' . (string) $option . '"';
            }
        }

        return implode(',', $optionsStr);
    }
}
