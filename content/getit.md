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
v 13.5
============================================================
x [UX] Show onboarding page on settings reset
x [l10n] Lowered Transifex merge threshold to 50%
x [L10n] Updated bn, br, ca, da, el, es, fa, ja, lt, ms, nb,
ro, sv_SE
x [UX] Scary styling for restrictions disablement option
x [UX] Turn on restrictions when a behavior is selected
x [UX] Zoom-in site classification behavior transition
x [L10n] Updated de, fi, fr, he, is, it, mk, nl, pl, pt_BR,
pt_PT, ru, sq, tr, uk, zh_CN, zh_TW
x [UX] Improved modifier button styling
x [UX] Colorized site classification behavior options
x [UX] Implement first install onboarding page
x [UX] Further behavior UI synchronization fixes (thanks
fatboy for reporting)
x [UX] Various style tweaks for Android
x Fixed autoAllowTop bug on Chromium
x [UX] Fixed some user-visible messages (thanks Tonnes for
reporting)
x [UX] Fix possible race condition on classification
behavior UI initialization (thanks fatboy for reporting)
x [UX] Classification behavior: improved code formatting and
synchronization
x [UX] Support links
x [UX] Added missing bidirectional UI synchronization step
x [UX] Complete classification behavior wiring
x [UX] Hide classification behavior UI in Tor/Mullvad
browsers
x [L10n] Updated de, fa, fi, fr, it, nl, pl, pt_BR, pt_PT,
ro, ru, sq, tr, zh_CN, zh_TW
x [UX] "Site Classification Behavior" (usability level)
selector
x [UX] Support multiple UI listeners
x [UX] Handle more media placeholder edge cases
x [UX] Localize capabilities in status tooltip
x [UX] Fix DEFAULT wrongly styled as canScript on unsafe
URLs
x [nscl] Fixed DomFreezer regression on first file:// load
due to onbeforescriptexecuted deprecation (thanks Anton K
for reporting)
x [L10n] Updated nl
x `build.sh +` automatically increments current version
x [UX] Always show the stricter top-level site match on top
of the list (thanks fatboy for suggestion)
x [UX] Do not show CASCADED label for DEFAULT entries
matching the top-level site
x [UX] More cascading permissions bug fixes
x [L10n] Multiple localization updates
x [UX] Improved visual feedback for cascaded permissions
(thanks fatboy for bug reporting)
x [UX] Cascading permissions frontend
x [nscl] [UX] Force artificial placeholders creation on
x.com even if no real media object is in the DOM
x [nscl] Cascading permissions support (backend)
x [nscl] Do not let AUTO-TRUSTED override policies other
than DEFAULT
x [L10n] Updated de, fr, ru
x [UX] Fixed theme configuration caching bug
x [UX] Fix AUTO-TRUSTED preset titles
x [UX] Improved UI labeling for automatically trusted
top-level sites
x [L10n] Updated it
x Imported settings version migration support
x Export settings metadata and versioning support
x Mitigate x-load protection affecting file:// documents
load times (issue #455, thanks Meludall for patch)
x [UX] Better handling of clicks on obstructed placeholders
x [UX] More concise and compact placeholders
x [UX] Include all the suppported capability types in the
  tooltip blocked/used report
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
v 13.5.0.902
============================================================
x [UX] Dismiss classification behavior UI when
  tapping/clicking the background (like a popup)
x [nscl] [UX] Start playing click-to-play media elements as
  soon as they get enabled
x Fix infinite recursion in theme CSS cleanup regular
  expression
x [Tor] Fix update_info_url version suffix

v 13.5.0.901
============================================================
x [L10n] Updated sq
x [Tor] Self-hosted builds deployment automation
x Tor self-hosting build support
x 13.5 Tor self-hosting experiment

v 13.4.922
============================================================
x [UX] Show onboarding page on settings reset
x [l10n] Lowered Transifex merge threshold to 50%
x [L10n] Updated bn, br, ca, da, el, es, fa, ja, lt, ms, nb,
  ro, sv_SE
x [UX] Scary styling for restrictions disablement option
x [UX] Turn on restrictions when a behavior is selected

v 13.4.921
============================================================
x [UX] Zoom-in site classification behavior transition

v 13.4.920
============================================================
x [UX] More presentation / styling tweaks
x [L10n] Updated de, fi, fr, he, is, it, mk, nl, pl, pt_BR,
  pt_PT, ru, sq, tr, uk, zh_CN, zh_TW
x [UX] Improved modifier button styling

v 13.4.919
============================================================
x [UX] Colorized site classification behavior options

v 13.4.918
============================================================
x [UX] Implement first install onboarding page

v 13.4.917
============================================================
x [UX] Further behavior UI synchronization fixes (thanks
  fatboy for reporting)
x [UX] Various style tweaks for Android
x Fixed autoAllowTop bug on Chromium

v 13.4.916
============================================================
x [UX] Fixed some user-visible messages (thanks Tonnes for
  reporting)
x [UX] Fix possible race condition on classification
  behavior UI initialization (thanks fatboy for reporting)

v 13.4.915
============================================================
x [UX] Classification behavior: improved code formatting and
  synchronization
x [UX] Support links

v 13.4.914
============================================================
x [UX] Added missing bidirectional UI synchronization step

v 13.4.913
============================================================
x [UX] Complete classification behavior wiring
x [UX] Hide classification behavior UI in Tor/Mullvad
  browsers
x [L10n] Updated de, fa, fi, fr, it, nl, pl, pt_BR, pt_PT,
  ro, ru, sq, tr, zh_CN, zh_TW

v 13.4.912
============================================================
x [UX] "Site Classification Behavior" (usability level)
  selector
x [UX] Support multiple UI listeners

v 13.4.911
============================================================
x [UX] Handle more media placeholder edge cases
x [UX] Localize capabilities in status tooltip

v 13.4.910
============================================================
x [UX] Fix DEFAULT wrongly styled as canScript on unsafe
  URLs
x [nscl] Fixed DomFreezer regression on first file:// load
  due to onbeforescriptexecuted deprecation (thanks Anton K
  for reporting)
x [L10n] Updated nl
x `build.sh +` automatically increments current version

v 13.4.909
============================================================
x [UX] Always show the stricter top-level site match on top
  of the list (thanks fatboy for suggestion)
x [UX] Do not show CASCADED label for DEFAULT entries
  matching the top-level site

v 13.4.908
============================================================
x [UX] More cascading permissions bug fixes

v 13.4.907
============================================================
x [L10n] Multiple localization updates
x [UX] Improved visual feedback for cascaded permissions
  (thanks fatboy for bug reporting)

v 13.4.906
============================================================
x [UX] Cascading permissions frontend
x [nscl] [UX] Force artificial placeholders creation on
  x.com even if no real media object is in the DOM
x [nscl] Cascading permissions support (backend)
x [nscl] Do not let AUTO-TRUSTED override policies other
  than DEFAULT
x [L10n] Updated de, fr, ru

v 13.4.905
============================================================
x [UX] Fixed theme configuration caching bug
x [UX] Fix AUTO-TRUSTED preset titles

v 13.4.904
============================================================
x [UX] Improved UI labeling for automatically trusted
  top-level sites

v 13.4.903
============================================================
x [L10n] Updated it
x Imported settings version migration support
x Export settings metadata and versioning support

v 13.4.902
============================================================
x Mitigate x-load protection affecting file:// documents
  load times (issue #455, thanks Meludall for patch)

v 13.4.901
============================================================
x [UX] Better handling of clicks on obstructed placeholders

````

### Browser compatibility and obsolete versions{#deprecated-obsolete-and-unsupported-classic-versions}

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
