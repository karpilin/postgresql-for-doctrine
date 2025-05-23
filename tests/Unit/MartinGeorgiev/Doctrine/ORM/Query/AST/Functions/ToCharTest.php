<?php

declare(strict_types=1);

namespace Tests\Unit\MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

use Fixtures\MartinGeorgiev\Doctrine\Entity\ContainsTexts;
use MartinGeorgiev\Doctrine\ORM\Query\AST\Functions\ToChar;

class ToCharTest extends TestCase
{
    protected function getStringFunctions(): array
    {
        return [
            'TO_CHAR' => ToChar::class,
        ];
    }

    protected function getExpectedSqlStatements(): array
    {
        return [
            "SELECT to_char(c0_.text1, '999D99S') AS sclr_0 FROM ContainsTexts c0_",
        ];
    }

    protected function getDqlStatements(): array
    {
        return [
            \sprintf("SELECT TO_CHAR(e.text1, '999D99S') FROM %s e", ContainsTexts::class),
        ];
    }
}
