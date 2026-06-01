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

* [Github / Tor release](https://github.com/hackademix/noscript/releases/tag/{{ ver.stable }})
* [Source code]({{ links.source }})
* [Full changelog]({{ "/changelog" | url }})

### __Direct download__{#direct} for Firefox

You can get the latest stable version __for Firefox desktop only__ also using this

[__direct NoScript {{ ver.stable }} download link (updated from torproject.org)__](https://dist.torproject.org/torbrowser/noscript/noscript-{{ ver.stable }}.1984.xpi).

To install, just drag and drop it onto your address bar.

````{.changelog}
v 13.6.19
============================================================
x [UX][Android] Auto-size gesture label
x [UX][Android] Adapt automatically to bigger font sizes
  (issue #503)
x [L10n] Updated it from Localization Lab
x [UX] Fix wss: URLs being styled as unsafe (issue #551)
x Fixed race condition causing intermittent Cloudflare
  challenges failures (issue #549)
x [nscl] Handle RFC 4291 (thanks Security Research Labs for
  report)
x [TabGuard] Avoid function serialization pitfalls (thanks
  Security Research Labs for report)
x [TabGuard] Fix wrong key used in redundancy optimization

v 13.6.18
============================================================
x [nscl] [Chromium] Work-around for restrictive CSP breaking
  inline blob:/data: worker patches
x Short-circuit on internal URIs

v 13.6.17
============================================================
x [XSS] Updated IC_EVENT_PATTERN
x Improve compatibility across extensions reusing
  SyncMessage (issue #548)

v 13.6.16
============================================================
x Remove sync fetching exception for network-served
  embedding documents (thanks Security Research Labs for
  report)
x [UX] Improved gesture calibration
x Prevent horizontal scrolling caused by options tab panels
x Reduce console spam on startup
x [A11y] Fix aria-expanded management for customizable
  presets
x [L10n] Updated bn, fi, fr, ja, ru, tr, zh_Hans from
  Localization Lab
x [XSS] Updated IC_EVENT_PATTERN
x [UX] Improved rendering and tab-switching performance for
  very large site lists
x Fix container options still shown if "Enable support for
  containers tabs" is unchecked=
x [Containers] Make Default policy label in options
  localizable (thanks fatboy for report)
x Restore README.md logo image lost during webp migration
  (73d6ed0) (#545)
x [L10n] Updated bn, de, ru from Localization Lab
x Translations update from Localization Lab (#542)
x [Containers] Gracefully degrade when containers are
  disabled by browser options
x [UX][Containers] UI integration
x Enable container support (Firefox pre-releases only)
x Add support for container tabs (#218, thanks to
  @aaronkollasch for this huge contribution)
x Slight policy fetching optimization in edge cases
x [nscl] Fix frozen srcdoc frames having "null" as their
  content
x [nscl] Improved attributes freezing (thanks Security
  Research Labs for report)
x [build] Local github release automation script
x Better changelog formatting in release management action
x Fix release management action always using HEAD
x Consider wss: in secure protocol checks (thanks barbaz for
  reporting)
x [Android] Fireproof UI tab closing
x [nscl] Fix dead objects interfering with window.event
  patch
x [nscl] Consider wss: in SecureDomainKey checks
x Add missing license information
x Remove "fetch" capability from DEFAULT preset unless
  "script" is there too (thanks Security Research Labs for
  suggestion)
x Block websocket connections where the fetch capability is
  disabled (thanks Security Research Labs for report)
x Improved origin normalization for sandboxed content
  (thanks Security Research Labs for report)

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
v 13.6.19.903
============================================================
x new translations from weblate (#561)
x Improved policy fetching

v 13.6.19.902
============================================================
x Avoid contentScript.register() (see JShelter issue #175)
x [A11y] Honor prefers-reduce-motion (issue #560)
x [XSS] Updated IC_EVENT_PATTERN
x [L10n] Updated ko from Localization Lab
x [l10n] Created empty ko localization
x [XSS] Updated IC_EVENT_PATTERN
x [UX][Android] Prevent site label truncation (issue #503)

v 13.6.19.901
============================================================
x Reduce page layout disruption from placeholders

v 13.6.18.902
============================================================
x [UX][Android] Auto-size gesture label
x [UX][Android] Adapt automatically to bigger font sizes
  (issue #503)
x [L10n] Updated it from Localization Lab
x [UX] Fix wss: URLs being styled as unsafe (issue #551)
x Fixed race condition causing intermittent Cloudflare
  challenges failures (issue #549)

v 13.6.18.901
============================================================
x [nscl] Handle RFC 4291 (thanks Security Research Labs for
  report)
x [TabGuard] Avoid function serialization pitfalls (thanks
  Security Research Labs for report)
x [TabGuard] Fix wrong key used in redundancy optimization

v 13.6.17.901
============================================================
x [nscl] [Chromium] Work-around for restrictive CSP breaking
  inline blob:/data: worker patches
x Short-circuit on internal URIs

v 13.6.16.901
============================================================
x [XSS] Updated IC_EVENT_PATTERN
x Improve compatibility across extensions reusing
  SyncMessage (issue #548)

v 13.6.15.913
============================================================
x Remove sync fetching exception for network-served
  embedding documents (thanks Security Research Labs for
  report)

v 13.6.15.912
============================================================
x [UX] Improved gesture calibration

v 13.6.15.911
============================================================
x [UX] Further rendering and tab-switching performance
  improvement for very large site lists
x Prevent horizontal scrolling caused by options tab panels
x Reduce console spam on startup

v 13.6.15.910
============================================================
x [A11y] Fix aria-expanded management for customizable
  presets

v 13.6.15.909
============================================================
x [L10n] Updated bn, fi, fr, ja, ru, tr, zh_Hans from
  Localization Lab
x [XSS] Updated IC_EVENT_PATTERN
x [UX] Improved rendering and tab-switching performance for
  very large site lists

v 13.6.15.908
============================================================
x Fix container options still shown if "Enable support for
  containers tabs" is unchecked

v 13.6.15.907
============================================================
x [Containers] Make Default policy label in options
  localizable (thanks fatboy for report)
x Restore README.md logo image lost during webp migration
  (73d6ed0) (#545)
x [L10n] Updated bn, de, ru from Localization Lab

v 13.6.15.906
============================================================
x Translations update from Localization Lab (#542)
x [Containers] Gracefully degrade when containers are
  disabled by browser options
x [UX][Containers] UI integration
x Enable container support in Firefox pre-releases only for
  now
x Add support for container tabs (#218, thanks to
  @aaronkollasch for this huge contribution)

v 13.6.15.905
============================================================
x Slight policy fetching optimization in edge cases
x [nscl] Fix frozen srcdoc frames having "null" as their
  content

v 13.6.15.904
============================================================
x [nscl] Improved attributes freezing (thanks Security
  Research Labs for report)
x [build] Local github release automation script
x Better changelog formatting in release management action
x Fix release management action always using HEAD

v 13.6.15.903
============================================================
x Consider wss: in secure protocol checks (thanks barbaz for
  reporting)
x [Android] Fireproof UI tab closing
x Extract stable release notes from
  https://noscript.net/changelog
x Fix indentation pt. 2
x Fix indentation
x Make the manage release action triggerable on demand

v 13.6.15.902
============================================================
x [nscl] Fix dead objects interfering with window.event
  patch
x [nscl] Consider wss: in SecureDomainKey checks
x Add missing license information
x [build] Workflow to automate GitHub releases when a
  version tag is pushed

v 13.6.15.901
============================================================
x Remove "fetch" capability from DEFAULT preset unless
  "script" is there too (thanks Security Research Labs for
  suggestion)
x Block websocket connections where the fetch capability is
  disabled (thanks Security Research Labs for report)
x Improved origin normalization for sandboxed content
  (thanks Security Research Labs for report)

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
