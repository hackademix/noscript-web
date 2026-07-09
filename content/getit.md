---
title: Get it!
nav: 2
---

[[toc]]

### Latest stable

* [Get NoScript for Firefox][mozlink]{.firefox}
  NoScript for __Firefox__ (desktop and __mobile__!), __Tor Browser__ and other __Mozilla__-based brows
ers from [Mozilla Add-ons][mozlink]
* [Get NoScript for Chromium][chromelink]{.chromium}
  NoScript for __Chrome__ and other __Chromium__-based browsers (eg. __Edge__, __Brave__, __Vivaldi__..
.) from the [Chrome Web Store][chromelink]
{.getfor}

[mozlink]: {{ links.moz }} "Get NoScript for Firefox"

[chromelink]: {{ links.chrome }} "Get NoScript for Chromium"

* [Github / Tor release](https://github.com/hackademix/noscript/releases/tag/{{ ver.stable }})
* [Source code]({{ links.source }})
* [Full changelog]({{ "/changelog" | url }})

### __Direct download__{#direct} for Firefox

You can get the latest stable version __for Firefox desktop only__ also using this

[__direct NoScript {{ ver.stable }} download link (updated from torproject.org)__](https://dist.torproj
ect.org/torbrowser/noscript/noscript-{{ ver.stable }}.1984.xpi).

To install, just drag and drop it onto your address bar.

````{.changelog}
v 13.6.29
============================================================
x [nscl] Generalize prototype.constructor proxying
x [nscl] Prevent unproxied MutationObserver leaking via
  prototype.constructor
x [nscl] Invoke MutationObserver callback using the observer
  as `this` (fixes issue #573)

v 13.6.28
============================================================
x [nscl] Minor fixes
x [nscl] Better xray argument handling and reduced console
  noise
x [nscl] Updated with several xray-related fixes
x [L10n] Updated fi from Localization Lab

````

[Go to full changelog &raquo;]({{ "/changelog" | url }})

### __Development build__{#devel}

NoScript development happens very fast to keep up with emerging web threats. Each published development build in-between stable releases is considered a release candidate and is marked by a version number ending with `90x`, e.g. {{ver.dev}}.

If you're brave enough and you need a specific feature or fix not released yet, or you simply want to provide feedback before official release, you may want to try the latest release as listed below.

#### RC for Firefox

[__Install NoScript {{ ver.dev }} on Firefox Desktop by simply clicking here__]({{ links.download }}/betas/noscript-{{ ver.dev }}.xpi).

On Firefox for Android, unfortunately, a pre-release can only be downloaded (same link as above) and temporarily installed on Nightly by using the [web-ext tool](https://github.com/mozilla/web-ext), which is only suitable for hardcore developers and contributors.

#### RC for Chromium

[Download __NoScript {{ ver.dev }} (MV3 for browsers based on Chromium 128 or above)__]({{ links.download }}/betas/noscript-{{ ver.dev }}-chrome.zip). 

In order to install non-store extensions like NoScript {{ ver.dev }} on Chromium-based browsers you need to unzip the downloaded `noscript-$VERSION-chrome.zip` file and load its content as an [unpacked extension](#unpacked-extensions) in developer mode.

You can install an **unpacked extension on Chromium**{#unpacked-extensions} by following these steps:

1. Open the Extension Management page by navigating to chrome://extensions.
   Alternatively, open this page by clicking on the Extensions menu button and selecting Manage Extensions at the bottom of the menu.
   Alternatively, open this page by clicking on the Chrome menu, hovering over More Tools then selecting Extensions
2. Enable _Developer Mode_ by clicking the toggle switch next to Developer mode.
3. Unzip the zipped "noscript-{{ver.dev}}-chrome.zip" package to a directory of your choice.
4. Click the [Load unpacked] button and select the extension directory you've unzipped the extension to (the one containing the "manifest.json" file)

You're done. Happy testing!

#### Recent development history
````{.changelog}

v 13.6.29.901
============================================================
x Fix placeholders regression (thanks barbaz/laniakea64 for
  patch)
x Automate AMO submission of stable releases
x [L10n] Updated bn, fi from Localization Lab

v 13.6.28.903
============================================================
x [nscl] Generalize prototype.constructor proxying

v 13.6.28.902
============================================================
x [nscl] Prevent unproxied MutationObserver leaking via
  prototype.constructor

v 13.6.28.901
============================================================
x [nscl] Invoke MutationObserver callback using the observer
  as `this` (fixes issue #573)

v 13.6.27.903
============================================================
x [nscl] Minor fixes

v 13.6.27.902
============================================================
x [nscl] Better xray argument handling and reduced console
  noise

v 13.6.27.901
============================================================
x [nscl] Updated with several xray-related fixes
x [L10n] Updated fi from Localization Lab

v 13.6.26.901
============================================================
x [nscl] Fix xray issues with MutationObserver patching
  (#572)

v 13.6.25.903
============================================================
x Earlier DOM freezing on file:// URLs (fixes
  tor-browser#45089)

v 13.6.25.902
============================================================
x Fix sandboxed blob: frames permissions inheritance
x Fix data: and blob: request not properly garbage collected
x [L10n] Updated fi from Localization Lab

v 13.6.25.901
============================================================
x [nscl] Higher fidelity naming for patched properties
x [nscl] Work-around for Gecko MutationObserver recursion
  (thanks Libor Polčák for reporting)

````

### Browser compatibility and obsolete versions

* [NoScript {{ ver.stable }}](#latest-stable) is compatible with browsers based on Gecko versions 115 and above (e.g. Firefox and Tor Browser, on desktop and Android) and on Chromium versions 128 and above (Chrome, Edge, Vivaldi, Brave...)
* [NoScript {{ ver.legacy }}]({{ links.download }}/betas/noscript-{{ ver.legacy }}.xpi) is compatible with Gecko versions 59-114.
* [__NoScript {{ ver.mv2 }} (MV2)__]({{ links.download }}/releases/noscript-{{ ver.mv2 }}-chrome.zip) is comparible with Chromium 127 and below. In order to install it, you need to unzip the downloaded `noscript-{ ver.mv2 }}-chrome.zip` file and load its content as an [unpacked extension](#unpacked-extensions) in developer mode.


[![NoScript Classic Logo](https://classic.noscript.net/noscript/logo.png){.left}](https://classic.noscript.net/){#classic}

You can still download [**NoScript "Classic"** (5.1.9)]({{ links.download }}/releases/noscript-5.1.9.xpi) ([SHA256]({{ links.download }}/releases/noscript-5.1.9.xpi.sha256)) for Seamonkey, Palemoon, Waterfox Classic and possibly other "vintage" (pre-Gecko 57) Firefox forks [here]({{ links.download }}/releases/noscript-5.1.9.xpi).

**Notice:** _you may need to open about:config and set your **xpinstall.signatures.required** preference to **false** in order to install NoScript 5.x, since Mozilla doesn't support signatures for legacy add-ons anymore. If you're [using a non ESR Firefox, you may also need this hack](https://forums.informaction.com/viewtopic.php?p=98662#p98662)._

Users of Firefox 58 and below are urged to upgrade their very unsafe browser. For those few who can't,

*   [latest NoScript version compatible with Gecko 57 - Gecko 58 is 10.1.7.3]({{ links.download }}/releases/noscript-10.1.7.3.xpi);
*   [latest NoScript version compatible with Gecko 46 - Gecko 56 is 5.1.9]({{ links.download }}/releases/noscript-5.1.9.xpi) ([SHA256]({{ links.download }}/releases/noscript-5.1.9.xpi.sha256));
*   [latest NoScript version compatible with Gecko 13 - Gecko 45 is 2.9.0.14]({{ links.download }}/releases/noscript-2.9.0.14.xpi) ([SHA256]({{ links.download }}/releases/noscript-2.9.0.14.xpi.sha256));
*   [latest NoScript version compatible with Gecko 1.9 - Gecko 12 is 2.9.0.1rc1]({{ links.download }}/betas/noscript-2.9.0.1rc1.xpi) ([SHA256]({{ links.download }}/betas/noscript-2.9.0.1rc1.xpi.sha256));
*   [latest NoScript version compatible with Gecko < 1.9 is 1.10]({{ links.download }}/releases/noscript-1.10.xpi) ([SHA256]({{ links.download }}/releases/noscript-1.10.xpi.sha256)).

**Disclaimer**
We cannot update nor support NoScript 5.x and below anymore, because it was based on a completely different and now obsolete technology. However you can still find usage information and a FAQ section for those ancient versions in the [NoScript Classic archived website](https://classic.noscript.net/).
