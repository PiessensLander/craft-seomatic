<?php

/**
 * SEOmatic plugin for Craft CMS 4
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v15.0-release
 * Trait for SchemaClass.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/SchemaClass
 */
trait SchemaClassTrait
{
    /**
     * Relates a term (i.e. a property, class or enumeration) to one that
     * supersedes it.
     *
     * @var SchemaClass|Property|Enumeration
     */
    public $supersededBy;
}
