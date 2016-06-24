<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2016 Artem Rodygin
//
//  You should have received a copy of the MIT License along with
//  this file. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace Tests\Linode;

use Linode\AbstractImmutableObject;
use Linode\ValidatedObjectInterface;
use Symfony\Component\Validator\Constraints;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @property    bool $flag
 */
class TestImmutableObject extends AbstractImmutableObject implements ValidatedObjectInterface
{
    protected $flag;

    /**
     * {@inheritdoc}
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraints('flag', [
            new Constraints\Type(['type' => 'bool']),
            new Constraints\NotNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function refresh()
    {
    }
}