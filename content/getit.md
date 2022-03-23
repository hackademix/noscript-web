---
title: Get it!
nav: 2
---

[[toc]]

### Latest stable

* [Get NoScript for Firefox][mozlink]{.firefox}
  NoScript for __Firefox__ (desktop and __mobile__!), __Tor Browser__ and other __Mozilla__-based browsers from [Mozilla Add-ons][mozlink]
* [Get NoScript for Chromium][chromelink]{.chromium}
  NoScript for __Chrome__ and other __Chromium__-based browsers (eg. __Edge__, __Brave__, __Vivaldi__...) from the [Chrome Web Store][chromelink]
{.getfor}

[mozlink]: {{ links.moz }} "Get NoScript for Firefox"

[chromelink]: {{ links.chrome }}} "Get NoScript for Chromium"

* [Source code]({{ links.source }})
* [Full changelog]({{ "/changelog" | url }})

### __Direct download__{#direct} for Firefox

You can get the latest stable version __for Firefox desktop only__ also using this [__direct NoScript {{ ver.stable }} download link__](https://secure.informaction.com/download/releases/noscript-{{ ver.stable }}.xpi).
To install, just drag and drop it onto your address bar.
````{.changelog}
v 11.4.1
============================================================
x Support for reverting to the "Vintage Blue" style
  (NoScript Options/Appearance)
x Various tweaks to the "Moder Red" dark and light themes

v 11.4
============================================================
x Visual refresh based on Simply Secure concept artwork
x Full Dark/Light color schemes support
x [l10n] Many languages updates
x Include ServiceWorker-initiated fetch requests in UI
  reporting (thanks 0_o for report)
x Remove redundant style patching
x Prompts can be closed by keyboard: Enter emulates the
  default button click, Escape the cancel action
x Ensure better visibility for in-popup message box
x Sticky toolbar and scrollable fixed-height content in
  browserAction popups
x [XSS] Automatically reload page when clearing XSS choice
  from popup
x [XSS] Enable "Clear XSS Choices" button only if some item
  is selected
x Remember last active tab when opening the option window
x Avoid useless reload if no actual change has happened in
  enforcement status
x Fix for regression: request and execution attempts not
  being reported anymore in the UI if restrictions are
  disabled (thanks Stefan Mey for report)
x Dark mode support
x Improved high contrast layout
x Fixed automatic reload not always triggered for CUSTOM
  tweakings
x More consistent cross-browser widgets
x Partial status indicator on the left of the icon, to
  accommodate Chromium's badge position
x Make focus hint less elusive for needed capability widgets
x More accurate blocking stats

````
### __Development build__{#devel}

If you're brave enough and you need a specific feature or fix not released yet, or you simply want to provide feedback before official release, you may want try this [__NoScript {{ ver.dev }} release candidate__]( https://github.com/hackademix/noscript/releases/tag/{{ ver.dev }}).

On Firefox only, you can [__install NoScript {{ ver.dev }} by simply clicking here__](https://secure.informaction.com/download/betas/noscript-{{ ver.dev }}.xpi).

Recent development history:
````{.changelog}
v 11.4.1rc5
============================================================
x Higher fidelity "Vintage Blue" theme
x Removed missing stylesheet reference
x More resilient CSS patching
x Further tone down vintage icon brightness in dark mode
x [L10n] Updated ru

v 11.4.1rc4
============================================================
x Open the appearance page for users to configure their
  preferred visual theme on upgrade from 11.4.1rc3 and below
x Support for focusing and/or highlighting elements when
  opening the options page
x Fixed confusing theme application until a choice is made
x Dynamic size adjustments on theme changes
x Focus indicator for on/off switches
x Icon sizes adjustments (thanks barbaz)
x Fixed UI in private windows always inheriting the fallback
  browser color scheme until explicitly set (thanks
  @mumboking for report)
x More explanatory text for the Modern Red / Vintage Blue
  switch

v 11.4.1rc3
============================================================
x Cross-theme visual tweaks
x More robust fallback for private windows (thanks
  @mumboking for reporting)

v 11.4.1rc2
============================================================
x Fix status icon not always synchronized with
  vintage/modern setting

v 11.4.1rc1
============================================================
x Support for reverting to the "Vintage Blue" style
  (NoScript Options/Appearance)
````

### Deprecated, obsolete and unsupported "Classic" versions

[![NoScript Classic Logo](https://classic.noscript.net/noscript/logo.png){.left}](https://classic.noscript.net/)

You can still download [**NoScript "Classic"** (5.1.9)](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi) ([SHA256](releases/noscript-5.1.9.xpi.sha256)) for Seamonkey, Palemoon, Waterfox Classic and possibly other "vintage" (pre-Gecko 57) Firefox forks [here](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi).

**Notice:** _you may need to open about:config and set your **xpinstall.signatures.required** preference to **false** in order to install NoScript 5.x, since Mozilla doesn't support signatures for legacy add-ons anymore. If you're [using a non ESR Firefox, you may also need this hack](https://forums.informaction.com/viewtopic.php?p=98662#p98662)._


Users of Firefox 58 and below are urged to upgrade their very unsafe browser. For those few who can't,

*   [latest NoScript version compatible with Gecko 57 - Gecko 58 is 10.1.7.3](https://secure.informaction.com/download/releases/noscript-10.1.7.3.xpi);
*   [latest NoScript version compatible with Gecko 46 - Gecko 56 is 5.1.9](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi) ([SHA256](releases/noscript-5.1.9.xpi.sha256));
*   [latest NoScript version compatible with Gecko 13 - Gecko 45 is 2.9.0.14](https://secure.informaction.com/download/releases/noscript-2.9.0.14.xpi) ([SHA256](releases/noscript-2.9.0.14.xpi.sha256));
*   [latest NoScript version compatible with Gecko 1.9 - Gecko 12 is 2.9.0.1rc1](https://secure.informaction.com/download/betas/noscript-2.9.0.1rc1.xpi) ([SHA256](betas/noscript-2.9.0.1rc1.xpi.sha256));
*   [latest NoScript version compatible with Gecko < 1.9 is 1.10](https://secure.informaction.com/download/releases/noscript-1.10.xpi) ([SHA256](releases/noscript-1.10.xpi.sha256)).

#### Disclaimer
We cannot update nor support NoScript 5.x and below anymore, because it was based on a completely different and now obsolete technology. However you can still find usage information and a FAQ section for those ancient versions in the [NoScript Classic archived website](https://classic.noscript.net/).
