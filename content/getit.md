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
v 11.2.11
============================================================
x [nscl] Fixed JavaScript access to CSS rules broken on
  Chromium when unrestricted CSS is disabled - issue #204
x Prevent Chromium builds from being sent to AMO for signing
x [nscl] Fixed CPU/RAM overload on some pages with
  unrestricted CSS disabled but scripting enabled (not
  recommended setting) - issue #194, issue #199
x [nscl] Fixed CPU spikes on Chromium triggered by automatic
  file downloads (thanks ptheborg for report)
````
You can still download [**NoScript "Classic"** (5.1.9)](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi) ([SHA256](releases/noscript-5.1.9.xpi.sha256)) for Seamonkey, Palemoon, Waterfox Classic and possibly other "vintage" (pre-Gecko 57) Firefox forks [here](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi): we'll do our best to provide security fixes as long as supporting browser still guarantee their own security updates.

**Notice:** _you may need to open about:config and set your **xpinstall.signatures.required** preference to **false** in order to install NoScript 5.x, since Mozilla doesn't support signatures for legacy add-ons anymore. If you're [using a non ESR Firefox, you may also need this hack](https://forums.informaction.com/viewtopic.php?p=98662#p98662)._


Users of Firefox 58 and below are urged to upgrade their very unsafe browser. For those few who can't,

*   [latest NoScript version compatible with Gecko 57 - Gecko 58 is 10.1.7.3](https://secure.informaction.com/download/releases/noscript-10.1.7.3.xpi);
*   [latest NoScript version compatible with Gecko 46 - Gecko 56 is 5.1.9](https://secure.informaction.com/download/releases/noscript-5.1.9.xpi) ([SHA256](releases/noscript-5.1.9.xpi.sha256));
*   [latest NoScript version compatible with Gecko 13 - Gecko 45 is 2.9.0.14](https://secure.informaction.com/download/releases/noscript-2.9.0.14.xpi) ([SHA256](releases/noscript-2.9.0.14.xpi.sha256));
*   [latest NoScript version compatible with Gecko 1.9 - Gecko 12 is 2.9.0.1rc1](https://secure.informaction.com/download/betas/noscript-2.9.0.1rc1.xpi) ([SHA256](betas/noscript-2.9.0.1rc1.xpi.sha256));
*   [latest NoScript version compatible with Gecko < 1.9 is 1.10](https://secure.informaction.com/download/releases/noscript-1.10.xpi) ([SHA256](releases/noscript-1.10.xpi.sha256)).

### __Development build__{#dev}

If you're brave enough and you need a specific feature or fix not released yet, or you simply want to provide feedback before official release, you may want try this [NoScript {{ ver.dev }} development build](https://secure.informaction.com/download/betas/noscript-{{ ver.dev }}.xpi)

Recent development history:
````{.changelog}
v 11.2.12rc1
============================================================
x [nscl] Reduce the risk to interfere with scripts messing
  with the media attribute (issue #207)

v 11.2.11rc4
============================================================
x [nscl] Fixed JavaScript access to CSS rules broken on
  Chromium when unrestricted CSS is disabled - issue #204

v 11.2.11rc3
============================================================
x Prevent Chromium builds from being sent to AMO for signing
x [nscl] More granular fix for CSS prefetch-related CPU
  spikes with scripts enabled

v 11.2.11rc2
============================================================
x [nscl] Fixed CPU/RAM overload on some pages with
  unrestricted CSS disabled but scripting enabled (not
  recommended setting) - issue #194, issue #199

v 11.2.11rc1
============================================================
x [nscl] Fixed CPU spikes on Chromium triggered by automatic
  file downloads (thanks ptheborg for report)
x [L10n] Updated tr

v 11.2.10rc1
============================================================
x Cross-browser file naming consistency, in spite of version
  numbering incompatibilities
x [nscl] Fix for potential race conditions on certain page
  transitions (issue #205)
x Handle exception when accessing navigator.serviceWorker on
  sandboxed frames
x MS Edge support
````