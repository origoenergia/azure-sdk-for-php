<?php

/**
 * Unit tests for the SDK
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Tests\Unit\WindowsAzure\ServiceBus\Internal
 * @author     Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright  2012 Microsoft Corporation
 * @license    http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link       http://pear.php.net/package/azure-sdk-for-php
 */

namespace Tests\Unit\WindowsAzure\ServiceBus\Internal;

use WindowsAzure\Common\Models\ServiceProperties;
use Tests\Framework\TestResources;
use Tests\Framework\WrapRestProxyTestBase;
use WindowsAzure\Common\Configuration;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\Common\Internal\Utilities;
use WindowsAzure\ServiceBus\Internal\WrapRestProxy;
use WindowsAzure\ServiceBus\ServiceBusSettings;
use WindowsAzure\Common\Internal\Resources;

/**
 * Unit tests for WrapRestProxy class
 *
 * @package    Tests\Unit\WindowsAzure\ServiceBus\Internal
 * @author     Azure PHP SDK <azurephpsdk@microsoft.com>
 * @copyright  2012 Microsoft Corporation
 * @license    http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/azure-sdk-for-php
 */
class WrapRestProxyTest extends WrapRestProxyTestBase
{
    /**
     * @covers WindowsAzure\ServiceBus\Internal\WrapRestProxy::__construct
     * @covers WindowsAzure\ServiceBus\Internal\WrapRestProxy::wrapAccessToken
     */
    public function testWrapAccessToken() 
    {
        $wrapUri = 'https://'
            .TestResources::serviceBusNamespace()
            .'-sb.accesscontrol.windows.net/WRAPv0.9';
        $wrapUserName = TestResources::wrapAuthenticationName();
        $wrapPassword = TestResources::wrapPassword();
        $scope = 'http://'
            .TestResources::serviceBusNameSpace()
            .'.servicebus.windows.net';
        
        $wrapAccessTokenResult = $this->restProxy->wrapAccessToken(
            $wrapUri, 
            $wrapUserName, 
            $wrapPassword, 
            $scope
        );
        
        $this->assertNotNull($wrapAccessTokenResult);
        $this->assertNotNull($wrapAccessTokenResult->getAccessToken());
    }
    
}

?>
