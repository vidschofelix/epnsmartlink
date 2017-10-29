#  Ebay Partner Network Smart Links Plugin for DokuWiki

Plugin to integrate EPN SmartLinks

## How it works
EPN Smart Links converts all links to eBay into affiliate links. This plugin lazyloads a Java-Script library provided by 
eBay and initializes the library with the given Campaign ID.


>**Smart Links** \
  To make your job easier, Smart Links saves you an exorbitant amount of time with a simple copy and paste. By recognizing each link to eBay that is placed on your site, the Smart Links code automatically converts every one into a personalized affiliate link for you, in real-time. Regardless of what page you want to share, with Smart Links you will never have to worry about sharing a non-monetized link on your website again.

Source: https://partnernetwork.ebay.com/affiliate-marketing-tools#SmartSuite

## Why
No need to manually add the code and the lazyloading will make your site respond faster.   

## Install

Use the Extension Manager to install this Plugin.

If you install this plugin manually make sure you install it in lib/plugins/epnsmartlink/ - else it wont work

## Settings
 - Enable EbayPartnerNetwork Smart Links: Lets you disable the Plugin from the Config
 - EPN SmartLink JS-URL: The URL for the JavaScript File Provided from eBay. If eBay should ever change the Link you 
 can enter the new one there.
 - Your EPN Campaign ID: Enter your own eBay-Campaign ID here.
 - Support the Developer: 5% of the requests will be donated to the developer.