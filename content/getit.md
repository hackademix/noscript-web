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

[chromelink]: {{ links.chrome }} "Get NoScript for Chromium"

* [Source code]({{ links.source }})
* [Full changelog]({{ "/changelog" | url }})

### __Direct download__{#direct} for Firefox

You can get the latest stable version __for Firefox desktop only__ also using this [__direct NoScript {{ ver.stable }} download link__]({{ links.download }}/releases/noscript-{{ ver.stable }}.xpi).
To install, just drag and drop it onto your address bar.

_Special thanks to Adithya Suresh Kumar for extensively reporting about a new browser fingerprinting risk, allowing NoScript 12.6 to deploy a mitigation technique for it._
````{.changelog}
v 13.5.5
============================================================
x [nscl] DocumentFreezer bug fixes and improvements (fixes
  #496)
x [nscl] Improved DocRewriter web compatibility (see
  tor-browser#44450)
v 13.5.4
============================================================
x [UX] Fix regression in sites UI live reload (issue #500)

v 13.5.3
============================================================
x Wakeup TabCache from DNRPolicy (issue #497)
x More logging and belt+suspenders for #497
x [Chromium] Better fix for startup MV3 DNR tab-bound rules
  race condition (issue #497)
x [UX] Improve prompt labels (thanks fatboy for suggestion)
x Refactor toLabel() into Sites
x [Chromium] Fixed race conditions with MV3 DNR tab-specific
  rules (issues #495 and #497)
x [L10n] Updated tr

````

[Go to full changelog &raquo;]({{ "/changelog" | url }})

### __Development build__{#devel}

NoScript development happens very fast to keep up with emerging web threats.
If you're brave enough and you need a specific feature or fix not released yet, or you simply want to provide feedback before official release, you may want to try the latest release candidate.

#### RC for Firefox

[__Install NoScript {{ ver.dev }} on Firefox Desktop by simply clicking here__]({{ links.download }}/betas/noscript-{{ ver.dev }}.xpi).

On Firefox for Android, unfortunately, a pre-release can only be downloaded (same link as above) and temporarily installed on Nightly by using the [web-ext tool](https://github.com/mozilla/web-ext), which is only suitable for hardcore developers and contributors.

#### Non-store versions for Chromium

On Chromium based browsers you can download either:

- [__NoScript {{ ver.dev }} (MV3)__]({{ links.download }}/betas/noscript-{{ ver.dev }}-chrome.zip) - experimental, supporting the Google-mandated but limiting, unproven and unstable latest extensions technology. __Requires Chromium version 128 or above__ (latest stable version recommended).
- [__NoScript {{ ver.mv2 }} (MV2)__]({{ links.download }}/releases/noscript-{{ ver.mv2 }}-chrome.zip) - legacy, unsupported by Google but proven and stable. Best option for browsers based on Chromium 127 and below.

In order to install next MV3 version until it reaches the Chrome Store, or the MV2 version if you're affected by some MV3-caused bug which could not have been fixed yet, you need to unzip the downloaded `noscript-$VERSION-chrome.zip` file and load its content as an [unpacked extension](https://developer.chrome.com/docs/extensions/mv3/getstarted/#unpacked) in developer mode.

Please follow these steps:

1. Open the Extension Management page by navigating to chrome://extensions.
   Alternatively, open this page by clicking on the Extensions menu button and selecting Manage Extensions at the bottom of the menu.
   Alternatively, open this page by clicking on the Chrome menu, hovering over More Tools then selecting Extensions
2. Enable _Developer Mode_ by clicking the toggle switch next to Developer mode.
3. Unzip the zipped "noscript-{{ver.dev}}-chrome.zip" package to a directory of your choice.
4. Click the [Load unpacked] button and select the extension directory you've unzipped the extension to (the one containing the "manifest.json" file)

You're done. Happy testing!

#### Recent development history
````{.changelog}
v 13.5.5.901
============================================================
x Add option to disable automatic page reloading on
  permissions change (fixes issue #42)

v 13.5.4.902
============================================================
x [nscl] DocumentFreezer bug fixes and improvements (fixes
  #496)

v 13.5.4.901
============================================================
x [nscl] Improved DocRewriter web compatibility (see
  tor-browser#44450)

v 13.5.3.901
============================================================
x [UX] Fix regression in sites UI live reload (issue #500)

v 13.5.2.905
============================================================
x Wakeup TabCache from DNRPolicy (issue #497)

v 13.5.2.904
============================================================
x More logging and belt+suspenders for #497

v 13.5.2.903
============================================================
x [Chromium] Better fix for startup MV3 DNR tab-bound rules
  race condition (issue #497)

v 13.5.2.902
============================================================
x [UX] Improve prompt labels (thanks fatboy for suggestion)
x Refactor toLabel() into Sites

v 13.5.2.901
============================================================
x [Chromium] Fixed race conditions with MV3 DNR tab-specific
  rules (issues #495 and #497)
x [L10n] Updated tr

````

### Browser compatibility and obsolete versions

[NoScript {{ ver.stable }}](#latest-stable) is compatible with browsers based on Gecko versions 115 and above (e.g. Firefox and Tor Browser, on desktop and Android) and on Chromium versions 128 and above (Chrome, Edge, Vivaldi, Brave...)

[NoScript {{ ver.legacy }}]({{ links.download }}/betas/noscript-{{ ver.legacy }}.xpi) is compatible with Gecko versions 59-114.

[![NoScript Classic Logo](https://classic.noscript.net/noscript/logo.png){.left}](https://classic.noscript.net/)

You can still download [**NoScript "Classic"** (5.1.9)]({{ links.download }}/releases/noscript-5.1.9.xpi) ([SHA256]({{ links.download }}/releases/noscript-5.1.9.xpi.sha256)) for Seamonkey, Palemoon, Waterfox Classic and possibly other "vintage" (pre-Gecko 57) Firefox forks [here]({{ links.download }}/releases/noscript-5.1.9.xpi).

**Notice:** _you may need to open about:config and set your **xpinstall.signatures.required** preference to **false** in order to install NoScript 5.x, since Mozilla doesn't support signatures for legacy add-ons anymore. If you're [using a non ESR Firefox, you may also need this hack](https://forums.informaction.com/viewtopic.php?p=98662#p98662)._


Users of Firefox 58 and below are urged to upgrade their very unsafe browser. For those few who can't,

*   [latest NoScript version compatible with Gecko 57 - Gecko 58 is 10.1.7.3]({{ links.download }}/releases/noscript-10.1.7.3.xpi);
*   [latest NoScript version compatible with Gecko 46 - Gecko 56 is 5.1.9]({{ links.download }}/releases/noscript-5.1.9.xpi) ([SHA256]({{ links.download }}/releases/noscript-5.1.9.xpi.sha256));
*   [latest NoScript version compatible with Gecko 13 - Gecko 45 is 2.9.0.14]({{ links.download }}/releases/noscript-2.9.0.14.xpi) ([SHA256]({{ links.download }}/releases/noscript-2.9.0.14.xpi.sha256));
*   [latest NoScript version compatible with Gecko 1.9 - Gecko 12 is 2.9.0.1rc1]({{ links.download }}/betas/noscript-2.9.0.1rc1.xpi) ([SHA256]({{ links.download }}/betas/noscript-2.9.0.1rc1.xpi.sha256));
*   [latest NoScript version compatible with Gecko < 1.9 is 1.10]({{ links.download }}/releases/noscript-1.10.xpi) ([SHA256]({{ links.download }}/releases/noscript-1.10.xpi.sha256)).

#### Disclaimer
We cannot update nor support NoScript 5.x and below anymore, because it was based on a completely different and now obsolete technology. However you can still find usage information and a FAQ section for those ancient versions in the [NoScript Classic archived website](https://classic.noscript.net/).
