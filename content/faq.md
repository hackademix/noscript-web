---
nav: 8
title: FAQ
---

[issues]: {{ links.source }}issues "NoScript bugs"
[nscl]: {{links.nscl_source}} "The NoScript Commons Library"

[[toc]]

### Installation / Usage

#### __Why__{ #faq-no-icon } can't I see the NoScript icon anywhere in the browser?

__On Chrome/Chromium__, you most likely still need to pin NoScript to the browser toolbar. You can do it by clicking the generic extension icon there and select the NoScript entry for pinning.

The same goes for a fresh install of the __Tor Browser__, where the developers decided to hide NoScript's icon and let you rely on the "Security Level" widget (the shield icon): if you need finer control through NoScript interface, just use either the [keyboard shortcuts]({{ "/usage#keyboard-shortcuts" | url }}) or the contextual menu on any page, or add the icon by right-clicking the toolbar and selecting the _Customize Toolbar_ menu item.

Otherwise, if you're browsing in a Private/Incognito window (or you've set your browser to do it by default), please open the _Extensions Manager_ and double check you've allowed NoScript to run in Private/Incognito mode.

### Troubleshooting

#### __Why does NoScript forget my settings whenever I restart the browser?__{ #faq-forgot-settings }

This is expected __only for per-site customizations__ and only if you're browsing in a __Private/Incognito__ window (or you've set your browser to do it by default), or if you're using the __Tor Browser__. In those cases, NoScript only allows temporary per-site customizations, kept in volatile memory and "forgot" when you quit the browser, in order to preserve your privacy by never saving your site-specific preferences permanently.

Another reason why NoScript's and other extensions' settings may get wiped off is __some "privacy" software messing with the browser's storage__, like already [happened in the past with CCleaner](https://hackademix.net/2020/08/05/ccleaner-wiping-out-firefox-extensions-data-expected-fix-work-around/) and others: if you find that's the case, please let [us]({{ "/forum" | url }}) and the software's maker know.

### Usage
#### __Why does "Set all on this page to temporarily TRUSTED" need to be repeated sometimes?__{ #faq-temp-all-repeated }
The {% ui-icon "temp-all", "__Set all on this page to temporarily TRUSTED__" %} command affects all the active content sources which are _currently_ present in the page. If some of the scripts that you've just allowed in the first pass loads new active content resources from different sites not seen yet, you will need to issue the command again for those items which are still set to DEFAULT.

### Contributing

#### Is there any way to __donate__{ #faq-donate } different than Paypal?

Yes, definitely. If you prefer not to [donate via Paypal](https://noscript.net/donate) ([USD]({{links.donate}}?c=USD) / [EUR]({{links.donate}}?c=EUR)), you can  [email Giorgio Maone](https://maone.net) to arrange for a __Bitcoin__ transaction or a EUR/USD __wire transfer__.