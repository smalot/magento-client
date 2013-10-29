<?php

/**
 * @file
 *          Magento API Client (SOAP v2 - standard).
 *          Allows wrappers for each call, dependencies injections
 *          and code completion.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @license GPL-2.0
 * @url     <https://github.com/smalot/magento-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\Magento\Directory;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class Directory
 *
 * @package Smalot\Magento\Directory
 */
class Directory extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of countries from Magento.
     *
     * @return array
     */
    public function getCountryList()
    {
        return $this->remoteAdapter->directoryCountryList();
    }

    /**
     * Retrieve the list of regions in the specified country.
     *
     * @param string $country
     *
     * @return array
     */
    public function getRegionList($country)
    {
        return $this->remoteAdapter->directoryRegionList($country);
    }
}
