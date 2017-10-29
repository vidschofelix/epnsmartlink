#  Ebay Partner Network Smart Links Plugin for DokuWiki

Plugin to integrate EPN SmartLinks

## How it works
EPN SmartLinks converts all links to eBay into affiliate links. This plugin lazyloads a Java-Script library provided by 
eBay and initializes the library with the given Campaign ID.

## Why
No need to manually edit files and the lazyloading will make your site respond faster.   

## Install

Use the Extension Manager to install this Plugin.

If you install this plugin manually make sure you install it in lib/plugins/epnsmartlink/ - else it wont work

## Settings
 - Enable EbayPartnerNetwork Smart Links: Lets you disable the Plugin from the Config
 - EPN SmartLink JS-URL: The URL for the JavaScript File Provided from eBay. If eBay should ever change the Link you 
 can enter the new one there.
 - Your EPN Campaign ID: Enter your own eBay-Campaign ID here.
 - Support the Developer: 5% of the requests will be donated to the developer.