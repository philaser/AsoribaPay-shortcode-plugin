=== AsoribaPay shortcode plugin ===
Tags: asoriba, asoribapay, payment, paypal, shortcode
Requires at least: 4.6
Tested up to: 4.9
Stable tag: trunk
Requires PHP: 5.6.35
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

AsoribaPay shortcode plugin allows you to use the standard AsoribaPay widget with the convenience of wordpress shortcodes

== Description ==

AsoribaPay is an  innovative payment gateway designed with the developer in mind.
A comprehensive API has been provided to make payment integration in your Wordpress site.
This plugin allows you to accept payments to your AsoribaPay merchant account through a wordpress shortcode without coding a single thing on your site.

Major features of AsoribaPay include:

    *   Accept Visa and mastercard payments, on both local(Ghana) and international cards.
    *   Accept mobile payments including MTN mobile Money, Vodafone Cash, Tigo cash and Airtel money.
    *   Seamless and well documented API to get you started on recieving payments.

PS: You'll need an [AsoribaPay API Key](https://payment.asoriba.com/) to use this plugin.
== Installation ==

This section describes how to install the plugin and get it working.


1. Get your API Key from your merchant Dashboard
1. Upload the plugin files to the `/wp-content/plugins/AsoribaPay-shortcode-plugin` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the 'AsoribaPay shortcode plugin' plugin through the 'Plugins' screen in WordPress
1. Use this shortcode on any page or post**[asoribapay button_text="<your buttontext goes here" pub_key="your unique API key goes here" amount="<set this only if you are using a defined amount>" tokenize="true" order_id="<this metadata is used for single items only>" product_name="<this metadata is used for single items only>" product_description="<this metadata is used for single items only>" 
	callback="leave empty for the standard payment reciept callback" order_image_url="" sharable="false" first_name="" last_name="" email="" phone_number=""]**


== Frequently Asked Questions ==

= How do i get my API Key? =

You will first need a Merchant account on [AsoribaPay](https://payment.asoriba.com/user/sign_up).
You will then find your API Key in your Dashboard

= I keep getting errors when making payments! =

please contact us on support.asoriba.com(http://support.asoriba.com).

= The widget does not load! =

most likely has to do with an incorrect API key. check your API key and try again

== Changelog ==
= 0.1 =
* Welcome to the AsoribaPay shortcode plugin.
* Changes will be posted her after every update.
