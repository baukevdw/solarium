<?php

/*
 * This file is part of the Solarium package.
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code.
 */

namespace Solarium\Component\QueryTraits;

use Solarium\Component\ComponentAwareQueryInterface;
use Solarium\Component\Spellcheck;

/**
 * Trait query types supporting components.
 */
trait SpellcheckTrait
{
    /**
     * Get a spellcheck component instance.
     *
     * This is a convenience method that maps presets to getComponent
     *
     * @return \Solarium\Component\Spellcheck
     */
    public function getSpellcheck(): Spellcheck
    {
        return $this->getComponent(ComponentAwareQueryInterface::COMPONENT_SPELLCHECK, true);
    }
}
