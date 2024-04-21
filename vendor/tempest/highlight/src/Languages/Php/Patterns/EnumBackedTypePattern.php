<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenTypeEnum;

#[PatternTest(input: 'enum Foo: string', output: 'string')]
#[PatternTest(input: 'enum Foo: int', output: 'int')]
final readonly class EnumBackedTypePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return 'enum [\w]+\:(\s)*(?<match>int|string)';
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::TYPE;
    }
}
