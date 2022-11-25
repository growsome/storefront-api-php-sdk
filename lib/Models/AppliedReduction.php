<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property array $amount 
 * @property string $category 
 * @property string $type 
 */
class AppliedReduction extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'amount' => \Scayle\StorefrontApi\Models\AppliedReductionAmount::class,
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}