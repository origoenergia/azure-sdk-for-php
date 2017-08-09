<?php
namespace Microsoft\Azure\Management\CognitiveServices;
final class CognitiveServicesManagementClient
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_CognitiveServicesAccounts_group = new \Microsoft\Azure\Management\CognitiveServices\CognitiveServicesAccounts($_client);
        $this->_Accounts_group = new \Microsoft\Azure\Management\CognitiveServices\Accounts($_client);
        $this->_Operations_group = new \Microsoft\Azure\Management\CognitiveServices\Operations($_client);
        $this->_CheckSkuAvailability_group = new \Microsoft\Azure\Management\CognitiveServices\CheckSkuAvailability($_client);
    }
    /**
     * @return \Microsoft\Azure\Management\CognitiveServices\CognitiveServicesAccounts
     */
    public function getCognitiveServicesAccounts()
    {
        return $this->_CognitiveServicesAccounts_group;
    }
    /**
     * @return \Microsoft\Azure\Management\CognitiveServices\Accounts
     */
    public function getAccounts()
    {
        return $this->_Accounts_group;
    }
    /**
     * @return \Microsoft\Azure\Management\CognitiveServices\Operations
     */
    public function getOperations()
    {
        return $this->_Operations_group;
    }
    /**
     * @return \Microsoft\Azure\Management\CognitiveServices\CheckSkuAvailability
     */
    public function getCheckSkuAvailability()
    {
        return $this->_CheckSkuAvailability_group;
    }
    /**
     * @var \Microsoft\Azure\Management\CognitiveServices\CognitiveServicesAccounts
     */
    private $_CognitiveServicesAccounts_group;
    /**
     * @var \Microsoft\Azure\Management\CognitiveServices\Accounts
     */
    private $_Accounts_group;
    /**
     * @var \Microsoft\Azure\Management\CognitiveServices\Operations
     */
    private $_Operations_group;
    /**
     * @var \Microsoft\Azure\Management\CognitiveServices\CheckSkuAvailability
     */
    private $_CheckSkuAvailability_group;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'management.azure.com',
        'paths' => [
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.CognitiveServices/accounts/{accountName}' => [
                'put' => [
                    'operationId' => 'CognitiveServicesAccounts_Create',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'accountName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/CognitiveServicesAccountCreateParameters'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-18']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccount']],
                        '201' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccount']]
                    ]
                ],
                'patch' => [
                    'operationId' => 'CognitiveServicesAccounts_Update',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'accountName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'parameters',
                            'in' => 'body',
                            'required' => TRUE,
                            '$ref' => '#/definitions/CognitiveServicesAccountUpdateParameters'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-18']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccount']]]
                ],
                'delete' => [
                    'operationId' => 'CognitiveServicesAccounts_Delete',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'accountName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-18']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => [],
                        '204' => []
                    ]
                ],
                'get' => [
                    'operationId' => 'CognitiveServicesAccounts_GetProperties',
                    'parameters' => [
                        [
                            'name' => 'resourceGroupName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'accountName',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ],
                        [
                            'name' => 'api-version',
                            'in' => 'query',
                            'required' => TRUE,
                            'type' => 'string',
                            'enum' => ['2017-04-18']
                        ],
                        [
                            'name' => 'subscriptionId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccount']]]
                ]
            ],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.CognitiveServices/accounts/{accountName}/listKeys' => ['post' => [
                'operationId' => 'CognitiveServicesAccounts_ListKeys',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'accountName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccountKeys']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.CognitiveServices/accounts/{accountName}/regenerateKey' => ['post' => [
                'operationId' => 'CognitiveServicesAccounts_RegenerateKey',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'accountName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'parameters',
                        'in' => 'body',
                        'required' => TRUE,
                        '$ref' => '#/definitions/RegenerateKeyParameters'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccountKeys']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.CognitiveServices/accounts/{accountName}/skus' => ['get' => [
                'operationId' => 'CognitiveServicesAccounts_ListSkus',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'accountName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccountEnumerateSkusResult']]]
            ]],
            '/subscriptions/{subscriptionId}/resourceGroups/{resourceGroupName}/providers/Microsoft.CognitiveServices/accounts' => ['get' => [
                'operationId' => 'Accounts_ListByResourceGroup',
                'parameters' => [
                    [
                        'name' => 'resourceGroupName',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccountListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.CognitiveServices/accounts' => ['get' => [
                'operationId' => 'Accounts_List',
                'parameters' => [
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ],
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CognitiveServicesAccountListResult']]]
            ]],
            '/providers/Microsoft.CognitiveServices/operations' => ['get' => [
                'operationId' => 'Operations_List',
                'parameters' => [[
                    'name' => 'api-version',
                    'in' => 'query',
                    'required' => TRUE,
                    'type' => 'string',
                    'enum' => ['2017-04-18']
                ]],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/OperationEntityListResult']]]
            ]],
            '/subscriptions/{subscriptionId}/providers/Microsoft.CognitiveServices/locations/{location}/checkSkuAvailability' => ['post' => [
                'operationId' => 'CheckSkuAvailability_List',
                'parameters' => [
                    [
                        'name' => 'subscriptionId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'api-version',
                        'in' => 'query',
                        'required' => TRUE,
                        'type' => 'string',
                        'enum' => ['2017-04-18']
                    ],
                    [
                        'name' => 'location',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ],
                    [
                        'name' => 'parameters',
                        'in' => 'body',
                        'required' => TRUE,
                        '$ref' => '#/definitions/CheckSkuAvailabilityParameter'
                    ]
                ],
                'responses' => ['200' => ['schema' => ['$ref' => '#/definitions/CheckSkuAvailabilityResultList']]]
            ]]
        ],
        'definitions' => [
            'Sku' => [
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'enum' => [
                            'F0',
                            'P0',
                            'P1',
                            'P2',
                            'S0',
                            'S1',
                            'S2',
                            'S3',
                            'S4',
                            'S5',
                            'S6'
                        ]
                    ],
                    'tier' => [
                        'type' => 'string',
                        'enum' => [
                            'Free',
                            'Standard',
                            'Premium'
                        ]
                    ]
                ],
                'required' => ['name']
            ],
            'CognitiveServicesAccountCreateParameters' => [
                'properties' => [
                    'sku' => ['$ref' => '#/definitions/Sku'],
                    'kind' => [
                        'type' => 'string',
                        'enum' => [
                            'Academic',
                            'Bing.Autosuggest',
                            'Bing.Search',
                            'Bing.Speech',
                            'Bing.SpellCheck',
                            'ComputerVision',
                            'ContentModerator',
                            'CustomSpeech',
                            'Emotion',
                            'Face',
                            'LUIS',
                            'Recommendations',
                            'SpeakerRecognition',
                            'Speech',
                            'SpeechTranslation',
                            'TextAnalytics',
                            'TextTranslation',
                            'WebLM'
                        ]
                    ],
                    'location' => ['type' => 'string'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ],
                    'properties' => ['type' => 'object']
                ],
                'required' => [
                    'sku',
                    'kind',
                    'location',
                    'properties'
                ]
            ],
            'CognitiveServicesAccountUpdateParameters' => [
                'properties' => [
                    'sku' => ['$ref' => '#/definitions/Sku'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ]
                ],
                'required' => []
            ],
            'CognitiveServicesAccountProperties' => [
                'properties' => [
                    'provisioningState' => [
                        'type' => 'string',
                        'enum' => [
                            'Creating',
                            'ResolvingDNS',
                            'Succeeded',
                            'Failed'
                        ]
                    ],
                    'endpoint' => ['type' => 'string'],
                    'internalId' => ['type' => 'string']
                ],
                'required' => []
            ],
            'CognitiveServicesAccount' => [
                'properties' => [
                    'etag' => ['type' => 'string'],
                    'id' => ['type' => 'string'],
                    'kind' => ['type' => 'string'],
                    'location' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'properties' => ['$ref' => '#/definitions/CognitiveServicesAccountProperties'],
                    'sku' => ['$ref' => '#/definitions/Sku'],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => ['type' => 'string']
                    ],
                    'type' => ['type' => 'string']
                ],
                'required' => []
            ],
            'CognitiveServicesAccountListResult' => [
                'properties' => [
                    'nextLink' => ['type' => 'string'],
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/CognitiveServicesAccount']
                    ]
                ],
                'required' => []
            ],
            'CognitiveServicesAccountKeys' => [
                'properties' => [
                    'key1' => ['type' => 'string'],
                    'key2' => ['type' => 'string']
                ],
                'required' => []
            ],
            'RegenerateKeyParameters' => [
                'properties' => ['keyName' => [
                    'type' => 'string',
                    'enum' => [
                        'Key1',
                        'Key2'
                    ]
                ]],
                'required' => ['keyName']
            ],
            'CognitiveServicesResourceAndSku' => [
                'properties' => [
                    'resourceType' => ['type' => 'string'],
                    'sku' => ['$ref' => '#/definitions/Sku']
                ],
                'required' => []
            ],
            'CognitiveServicesAccountEnumerateSkusResult' => [
                'properties' => ['value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/CognitiveServicesResourceAndSku']
                ]],
                'required' => []
            ],
            'ErrorBody' => [
                'properties' => [
                    'code' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'required' => [
                    'code',
                    'message'
                ]
            ],
            'Error' => [
                'properties' => ['error' => ['$ref' => '#/definitions/ErrorBody']],
                'required' => []
            ],
            'OperationDisplayInfo' => [
                'properties' => [
                    'description' => ['type' => 'string'],
                    'operation' => ['type' => 'string'],
                    'provider' => ['type' => 'string'],
                    'resource' => ['type' => 'string']
                ],
                'required' => []
            ],
            'OperationEntity' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'display' => ['$ref' => '#/definitions/OperationDisplayInfo'],
                    'origin' => ['type' => 'string'],
                    'properties' => ['type' => 'object']
                ],
                'required' => []
            ],
            'OperationEntityListResult' => [
                'properties' => [
                    'nextLink' => ['type' => 'string'],
                    'value' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/OperationEntity']
                    ]
                ],
                'required' => []
            ],
            'CheckSkuAvailabilityParameter' => [
                'properties' => [
                    'skus' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'F0',
                                'P0',
                                'P1',
                                'P2',
                                'S0',
                                'S1',
                                'S2',
                                'S3',
                                'S4',
                                'S5',
                                'S6'
                            ]
                        ]
                    ],
                    'kind' => [
                        'type' => 'string',
                        'enum' => [
                            'Academic',
                            'Bing.Autosuggest',
                            'Bing.Search',
                            'Bing.Speech',
                            'Bing.SpellCheck',
                            'ComputerVision',
                            'ContentModerator',
                            'CustomSpeech',
                            'Emotion',
                            'Face',
                            'LUIS',
                            'Recommendations',
                            'SpeakerRecognition',
                            'Speech',
                            'SpeechTranslation',
                            'TextAnalytics',
                            'TextTranslation',
                            'WebLM'
                        ]
                    ],
                    'type' => ['type' => 'string']
                ],
                'required' => [
                    'skus',
                    'kind',
                    'type'
                ]
            ],
            'CheckSkuAvailabilityResult' => [
                'properties' => [
                    'kind' => [
                        'type' => 'string',
                        'enum' => [
                            'Academic',
                            'Bing.Autosuggest',
                            'Bing.Search',
                            'Bing.Speech',
                            'Bing.SpellCheck',
                            'ComputerVision',
                            'ContentModerator',
                            'CustomSpeech',
                            'Emotion',
                            'Face',
                            'LUIS',
                            'Recommendations',
                            'SpeakerRecognition',
                            'Speech',
                            'SpeechTranslation',
                            'TextAnalytics',
                            'TextTranslation',
                            'WebLM'
                        ]
                    ],
                    'type' => ['type' => 'string'],
                    'skuName' => [
                        'type' => 'string',
                        'enum' => [
                            'F0',
                            'P0',
                            'P1',
                            'P2',
                            'S0',
                            'S1',
                            'S2',
                            'S3',
                            'S4',
                            'S5',
                            'S6'
                        ]
                    ],
                    'skuAvailable' => ['type' => 'boolean'],
                    'reason' => ['type' => 'string'],
                    'message' => ['type' => 'string']
                ],
                'required' => []
            ],
            'CheckSkuAvailabilityResultList' => [
                'properties' => ['value' => [
                    'type' => 'array',
                    'items' => ['$ref' => '#/definitions/CheckSkuAvailabilityResult']
                ]],
                'required' => []
            ]
        ]
    ];
}
