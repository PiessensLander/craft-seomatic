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

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    'sitemapUrls' => true,
    'sitemapAssets' => true,
    'sitemapFiles' => true,
    'sitemapAltLinks' => true,
    'sitemapChangeFreq' => 'weekly',
    'sitemapPriority' => 0.5,
    'sitemapLimit' => null,
    'structureDepth' => null,
    'sitemapImageFieldMap' => [
        ['property' => 'title', 'field' => 'title'],
        ['property' => 'caption', 'field' => ''],
        ['property' => 'geo_location', 'field' => ''],
        ['property' => 'license', 'field' => ''],
    ],
    'sitemapVideoFieldMap' => [
        ['property' => 'title', 'field' => 'title'],
        ['property' => 'description', 'field' => ''],
        ['property' => 'thumbnailLoc', 'field' => ''],
        ['property' => 'duration', 'field' => ''],
        ['property' => 'category', 'field' => ''],
    ],
];
