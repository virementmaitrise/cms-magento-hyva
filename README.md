# Virement Maitrisé Payment module for Magento 2.4 with Hyvä Compatibility

[![Latest Stable Version](http://poser.pugx.org/virement-maitrise/payment-hyva/v)](https://packagist.org/packages/virement-maitrise/payment-hyva) [![Total Downloads](http://poser.pugx.org/virement-maitrise/payment-hyva/downloads)](https://packagist.org/packages/virement-maitrise/payment-hyva) [![Monthly Downloads](http://poser.pugx.org/virement-maitrise/payment-hyva/d/monthly)](https://packagist.org/packages/virement-maitrise/payment-hyva) [![License](http://poser.pugx.org/virement-maitrise/payment-hyva/license)](https://packagist.org/packages/virement-maitrise/payment-hyva) [![PHP Version Require](http://poser.pugx.org/virement-maitrise/payment-hyva/require/php)](https://packagist.org/packages/virement-maitrise/payment-hyva)

Société Générale provide a payment solution via bank transfer available at https://www.virementmaitrise.societegenerale.eu.

You can take a look at our API here: https://docs.virementmaitrise.societegenerale.eu

## Requirements

- Magento 2.4.X
- PHP >= 7.2

More information on [Magento documentation](https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html).

## Installation

You can install our plugin with Composer:

`composer require virement-maitrise/payment-hyva`

### Optional dependencies

#### Payment by QR Code when using "Login as Customer" feature

*Reserved to a Magento 2.4.1+ instance with the magento/module-login-as-customer module already installed*

To enable it, you must install this dependency:

`composer require chillerlan/php-qrcode`

## Activation

- Enable Virement Maitrisé Payment module: `php bin/magento module:enable Virementmaitrise_HyvaPayment`
- Check Module status: `php bin/magento module:status Virementmaitrise_HyvaPayment`
- Apply upgrade: `php bin/magento setup:upgrade`
- Deploy static content: `php bin/magento setup:static-content:deploy -f`
- Compile catalog: `php bin/magento setup:di:compile`
- Clean the cache: `php bin/magento cache:clean` or go to System > Tools > Cache Management and click Flush Static Files Cache.

## Configuration

Go to Stores > Configuration > Sales > Payment methods.

- Select environment (sandbox/production)
- Fill APP ID, APP secret and private key based on the selected environment ()
- Test your connection (if everything is ok you should have a green message)
- Don't forget to enable the payment method unless it won't be displayed in the front end