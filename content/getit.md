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

You can get the latest stable version __for Firefox desktop only__ also using this [__direct NoScript {{ ver.stable }} download link__](https://noscript.net/download/releases/noscript-{{ ver.stable }}.xpi).
To install, just drag and drop it onto your address bar.
````{.changelog}
v 11.4.37
============================================================
x [nscl] Do not patch windows with WebGLHook if webgl is
  globally disabled
x [nscl] Do not patch workers if webgl is globally disabled
x [L10n] Updated uk
x [nscl] Workers-aware WebGL Hook

v 11.4.36
============================================================
x [nscl] Merged MV3-compatible branch
x [XSS] Take in account the whole redirection chain (thanks
  NDevTK for reporting)
````
### __Development build__{#devel}

NoScript development happens very fast to keep up with emerging web threats.
If you're brave enough and you need a specific feature or fix not released yet, or you simply want to provide feedback before official release, you may want to try the latest release candidate.

#### RC for Firefox

[__Install NoScript {{ ver.dev }} on Firefox Desktop by simply clicking here__](https://noscript.net/download/betas/noscript-{{ ver.dev }}.xpi).

On Firefox for Android, unfortunately, a pre-release can only be downloaded (same link as above) and temporarily installed on Nightly by using the [web-ext tool](https://github.com/mozilla/web-ext), which is only suitable for hardcore developers and contributors.

#### RC for Chromium

You can [__Download NoScript {{ ver.dev }} for Chromium-based browsers here__](https://noscript.net/download/betas/noscript-{{ ver.dev }}-chrome.zip).

In order to install this pre-release until the next stable version reaches the Chrome Store, you need to unzip it and load it as an [unpacked extension](https://developer.chrome.com/docs/extensions/mv3/getstarted/#unpacked) in developer mode.

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
v 11.4.39rc2
============================================================
x [nscl] Prevent patchWindow from throwing on SOP violations

v 11.4.39rc1
============================================================
x [nscl] Correctly propagate extra arguments to shadowed
  worker constructors

v 11.4.38rc2
============================================================
x [nscl] Reuse uuid() in SyncMessage

v 11.4.38rc1
============================================================
x Updated file exclusions on packaging
x [nscl] Simpler and safer SyncMessage logic on
  Chromium-based browsers (thanks NDevTK for reporting)
x Fixed missing frameId on interception reporting

v 11.4.37rc3
============================================================
x [nscl] Do not patch windows with WebGLHook if webgl is
  globally disabled

v 11.4.37rc2
============================================================
x [nscl] Do not patch workers if webgl is globally disabled

v 11.4.37rc1
============================================================
x [L10n] Updated uk
x [nscl] Workers-aware WebGL Hook

v 11.4.36rc1
============================================================
x [nscl] Merged MV3-compatible branch
x [XSS] Take in account the whole redirection chain (thanks
  NDevTK for reporting)

v 11.4.35rc4
============================================================
x Improved lazy_load capability (optimization and
  notification)
x [nscl] Slight optimization of NOSCRIPT element emulation
  loop
x Automatically add extra capabilities to policyTypesMap
x [L10n] Updated de, fr, tr, ru, zh_CN

v 11.4.35rc3
============================================================
x Gracefully handle new capabilities still unknown to the
  settings host (e.g. Tor/Mullvad browser), if any
x Configurable "lazy_load" capability (see
  https://github.com/whatwg/html/issues/5250)
x [L10n] Updated fr

v 11.4.35rc2
============================================================
x Prefetch all CSS subresources (1st party included) in
  private contexts where both unchecked_css and scripting
  capabilities are disabled
x Forcibly neutralize lazy loading attributes when scripting
  is disabled

v 11.4.35rc1
============================================================
x [nscl] Restored SyncMessage compatibility with Firefox 78
  and below
x [L10n] Updated uk
x Lock nscl version on stable releases
````

### Deprecated, obsolete and unsupported "Classic" versions

[![NoScript Classic Logo](https://classic.noscript.net/noscript/logo.png){.left}](https://classic.noscript.net/)

You can still download [**NoScript "Classic"** (5.1.9)](https://noscript.net/download/releases/noscript-5.1.9.xpi) ([SHA256](https://noscript.net/download/releases/noscript-5.1.9.xpi.sha256)) for Seamonkey, Palemoon, Waterfox Classic and possibly other "vintage" (pre-Gecko 57) Firefox forks [here](https://noscript.net/download/releases/noscript-5.1.9.xpi).

**Notice:** _you may need to open about:config and set your **xpinstall.signatures.required** preference to **false** in order to install NoScript 5.x, since Mozilla doesn't support signatures for legacy add-ons anymore. If you're [using a non ESR Firefox, you may also need this hack](https://forums.informaction.com/viewtopic.php?p=98662#p98662)._


Users of Firefox 58 and below are urged to upgrade their very unsafe browser. For those few who can't,

*   [latest NoScript version compatible with Gecko 57 - Gecko 58 is 10.1.7.3](https://noscript.net/download/releases/noscript-10.1.7.3.xpi);
*   [latest NoScript version compatible with Gecko 46 - Gecko 56 is 5.1.9](https://noscript.net/download/releases/noscript-5.1.9.xpi) ([SHA256](https://noscript.net/download/releases/noscript-5.1.9.xpi.sha256));
*   [latest NoScript version compatible with Gecko 13 - Gecko 45 is 2.9.0.14](https://noscript.net/download/releases/noscript-2.9.0.14.xpi) ([SHA256](https://noscript.net/download/releases/noscript-2.9.0.14.xpi.sha256));
*   [latest NoScript version compatible with Gecko 1.9 - Gecko 12 is 2.9.0.1rc1](https://noscript.net/download/betas/noscript-2.9.0.1rc1.xpi) ([SHA256](https://noscript.net/download/betas/noscript-2.9.0.1rc1.xpi.sha256));
*   [latest NoScript version compatible with Gecko < 1.9 is 1.10](https://noscript.net/download/releases/noscript-1.10.xpi) ([SHA256](https://noscript.net/download/releases/noscript-1.10.xpi.sha256)).

#### Disclaimer
We cannot update nor support NoScript 5.x and below anymore, because it was based on a completely different and now obsolete technology. However you can still find usage information and a FAQ section for those ancient versions in the [NoScript Classic archived website](https://classic.noscript.net/).
