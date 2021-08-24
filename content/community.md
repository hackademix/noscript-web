---
nav: 6
title: Community
---

[issues]: {{ links.source }}issues "NoScript bugs"
[nscl]: {{links.nscl_source}} "The NoScript Commons Library"

[[toc]]

### Getting help

If something about NoScript puzzles you, please read the [FAQ](#faq) first.

You can always discuss about NoScript or seek help on this __[support forum](https://noscript.net/forum)__, where you will be welcomed by an amazing volunteer staff of very knowledgeable and friendly NoScript power users.

### Reporting issues

If you've found a bug, please [report it in the source code repository][issues] or (especially if you believe it's a __security sensitive issue__) [let the lead developer know](https://maone.net) privately: we'll try to fix it as soon as I can.

### __Contributing and reusing__{#devs} NoScript code

[![NoScript Commons Library](https://noscript.net/common-library/nscl-logo.png){.nscl-logo}][nscl]

Most of NoScript's back-end code has been refactored out into the __[NoScript Commons Library (NSCL)][nscl]__, thanks to the [National Democratic Institute](https://www.ndi.org/)'s precious support, with the goal of improving its reusability by other privacy/security-focused browser extensions.

If you are a developer wishing to [fix an issue][issues], to contribute new code or to reuse existing NoScript (Commons Library) code, the relevant repositories are:

1. [__NoScript__ (front-end) source code repository]({{links.source}})
2. [__NoScript Commons Library__ source code repository][nscl]

### Funding

Specific  NoScript development efforts have been generously supported by the [__Open Technology Fund__](https://opentech.fund), the [__National Democratic Institute__](https://www.ndi.org/), the [__NLNet Foundation__](https://nlnet.nl/) and other institutions which value privacy, security and digital rights for everyone.

Nevertheless NoScript couldn't keep up with its continuous and strenuous fight against emerging web threats with no help from you, dear user. So, if you find NoScript useful, __please consider a donation__, either [via Paypal](https://noscript.net/donate) or [by other means](#faq-donate).

### FAQ

##### __Why__{ #faq-no-icon } can't I see the NoScript icon anywhere in the browser?

__On Chrome/Chromium__, you most likely still need to pin NoScript to the browser toolbar. You can do it by clicking the generic extension icon there and select the NoScript entry for pinning.

Otherwise, if you're browsing in a Private/Incognito window (or you've set your browser to do it by default), please open the _Extensions Manager_ and double check you've allowed NoScript to run in Private/Incognito mode.

##### __Why__{ #faq-forgot-settings } does NoScript forget my per-site customizations whenever I restart the browser?

This should happen only if you're browsing in a Private/Incognito window (or you've set your browser to do it by default), or if you're using the Tor Browser. In those cases, NoScript only allows temporary per-site customizations, kept in volatile memory and "forgot" when you quit the browser, in order to preserve your privacy by never saving your site-specific preferences permanently.

##### Is there any way to __donate__{ #faq-donate } different than Paypal?

Yes. If you prefer not to [donate via Paypal](https://noscript.net/donate), you can [send bitcoins](bitcoin:1Kupnx5isBdAJ5ki2BEVF6sBuYmkYigWPU) or [write the author](https://maone.net) to arrange for a wire transfer.