<?php
/**
 * SEOmatic plugin for Craft CMS
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

use nystudio107\seomatic\models\MetaJsonLdContainer;
use nystudio107\seomatic\services\JsonLd as JsonLdService;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    MetaJsonLdContainer::CONTAINER_TYPE . JsonLdService::GENERAL_HANDLE => [
        'name' => 'General',
        'description' => 'JsonLd Tags',
        'handle' => JsonLdService::GENERAL_HANDLE,
        'class' => (string)MetaJsonLdContainer::class,
        'include' => true,
        'dependencies' => [
        ],
        'data' => [
            'mainEntityOfPage' => [
                'type' => '{{ seomatic.meta.mainEntityOfPage }}',
                'name' => '{{ seomatic.meta.seoTitle }}',
                'headline' => '{{ seomatic.meta.seoTitle }}',
                'description' => '{{ seomatic.meta.seoDescription }}',
                'url' => '{{ seomatic.meta.canonicalUrl }}',
                'mainEntityOfPage' => '{{ seomatic.meta.canonicalUrl }}',
                'dateCreated' => '{{ entry.dateCreated |atom }}',
                'dateModified' => '{{ entry.dateUpdated |atom }}',
                'datePublished' => '{{ entry.postDate |atom }}',
                'copyrightYear' => '{{ entry.postDate | date("Y") }}',
                'inLanguage' => '{{ seomatic.meta.language }}',
                'copyrightHolder' => [
                    'id' => '{{ parseEnv(seomatic.site.identity.genericUrl) }}#identity',
                ],
                'author' => [
                    'id' => '{{ parseEnv(seomatic.site.identity.genericUrl) }}#identity',
                ],
                'creator' => [
                    'id' => '{{ parseEnv(seomatic.site.identity.genericUrl) }}#creator',
                ],
                'publisher' => [
                    'id' => '{{ parseEnv(seomatic.site.identity.genericUrl) }}#creator',
                ],
                'image' => [
                    'type' => 'ImageObject',
                    'url' => '{{ seomatic.meta.seoImage }}',
                ],
                'potentialAction' => [
                    'type' => 'SearchAction',
                    'target' => '{{ seomatic.site.siteLinksSearchTarget }}',
                    'query-input' => '{{ seomatic.helper.siteLinksQueryInput() }}',
                ],
            ],
        ],
    ],
];
