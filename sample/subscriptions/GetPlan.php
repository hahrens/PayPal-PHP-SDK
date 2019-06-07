<?php

// # Get Plan Sample
//
// This sample code demonstrate how you can get a billing plan, as documented here at:
// https://developer.paypal.com/docs/api/#retrieve-a-plan
// API used: /v1/payments/billing-plans

/** @var \PayPal\Api\Subscription\Product $createdProduct */
$createdProduct = require 'CreateProduct.php';
define('CREATED_PRODUCT_ID', $createdProduct->getId());

// Retrieving the Plan object from Create Plan Sample
/** @var Plan $createdPlan */
$createdPlan = require 'CreatePlan.php';

use PayPal\Api\Subscription\Plan;

try {
	$plan = Plan::get($createdPlan->getId(), $apiContext);
} catch (Exception $ex) {
	// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
	ResultPrinter::printError("Retrieved a Plan", "Plan", $plan->getId(), null, $ex);
	exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
ResultPrinter::printResult("Retrieved a Plan", "Plan", $plan->getId(), null, $plan);

return $plan;
