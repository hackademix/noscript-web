---
title: Changelog
---
[+] new feature, [x] bug fix/maintenance, [-] removed feature, [=] repackaging or cosmetic change
```{.changelog}
v 13.5.5
============================================================
x [nscl] DocumentFreezer bug fixes and improvements (fixes
  #496)
x [nscl] Improved DocRewriter web compatibility (see
  tor-browser#44450)

v 13.5.4.902
============================================================
x [nscl] DocumentFreezer bug fixes and improvements (fixes
  #496)

v 13.5.4.901
============================================================
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

v 13.5.2
============================================================
x [L10n] Updated zh_CN
x [UX] Fix minor issues with UI titles
x [nscl] Fix cascade restrictions causing empty capabilities
  (issue #492)

v 13.5.1
============================================================
x Soft-reload must be performed off-document if scripts had
  been suppressed by document freezing (fixes #489)
x [UX] Dismiss classification behavior UI when
  tapping/clicking the background (like a popup)
x [nscl] [UX] Start playing click-to-play media elements as
  soon as they get enabled
x Fix infinite recursion in theme CSS cleanup regular
  expression
x [L10n] Updated sq
x [Tor] Self-hosted builds deployment automation
x Tor self-hosting build support

v 13.5.0.903
============================================================
x Soft-reload must be performed off-document if scripts had
  been suppressed by document freezing (fixes #489)

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

v 13.3
============================================================
x [UX] [nscl] In-content placeholders for Wasm
  (tor-browser#44278)
x [nscl] Fixed race condition potentially breaking
  placeholders in edge cases
x [nscl] Detect asynchronous failed WebAssembly access
  attempts (tor-browser#44278)

v 13.2.903
============================================================
x [UX] [nscl] In-content placeholders for Wasm
  (tor-browser#44278)

v 13.2.902
============================================================
x [nscl] Fixed race condition potentially breaking
  placeholders in edge cases

v 13.2.901
============================================================
x [nscl] Detect asynchronous failed WebAssembly access
  attempts (tor-browser#44278)

v 13.2.2
============================================================
x Work-around for issue #462
x [L10n] Updated fr, pl, zh_CN
x Resolve implicit dependencies from createHTMLElement()
x [Android] Erase temporary permissions when all the tabs
  closed (issue #464)
x [Android] Make NoScript Options' top buttons fit in one
  row
x Typo in comment in LifeCycle.js

v 13.2.1
============================================================
x Fix bugs with Tor Browser unknown capabilities handling
x Work-around for Tor Browser Security Levels not being
  aware yet of the wasm capability
x [nscl] Make wasm usage attempt notification
  Chromium-compatible
x [L10n] Updated de, ru, tr

v 13.1.903
============================================================
x Fix bugs with Tor Browser unknown capabilities handling

v 13.1.902
============================================================
x Work-around for Tor Browser Security Levels not being
  aware yet of the wasm capability

v 13.1.901
============================================================
x [nscl] Make wasm usage attempt notification
  Chromium-compatible
x [L10n] Updated de, ru, tr

v 13.1
============================================================
x New wasm capability to control WebAssembly per site
x [L10n] Updated is, pt_BR
x Adopt the Chromium prefetch CSS CORS work-around on Gecko
  (torbrowser#44239 fix)
x Best effort to avoid extra temporary tabs for sidebar
  detection

v 13.0.904
============================================================
x [nscl] Fix bug causing wasm to be unconditionally disabled

v 13.0.903
============================================================
x New wasm capability to control WebAssembly per site

v 13.0.902
============================================================
x [L10n] Updated is, pt_BR
x Adopt the Chromium prefetch CSS CORS work-around on Gecko
  (torbrowser#44239 fix)

v 13.0.901
============================================================
x Best effort to avoid extra temporary tabs for sidebar
  detection

v 13.0.9
============================================================
x [UX] Increase contrast for non-HTTPS site labels in dark
  mode (thanks Soothsayer for reporting)
x [L10n] Updated he, pl, tr, uk
x [Tor] Align Tor/Mullvad Browser integration logic and UI
  with "persistent mode" (mullvad-browser#455)
x Switch to ?. operator and tidy up surrounding code

v 13.0.8.903
============================================================
x [UX] Increase contrast for non-HTTPS site labels in dark
  mode (thanks Soothsayer for reporting)

v 13.0.8.902
============================================================
x Fix CSS error causing permanent permissions switch to be
  shown in every context (thanks barbaz for reporting)

v 13.0.8.901
============================================================
x [L10n] Updated he, pl, tr, uk
x [Tor] Align Tor/Mullvad Browser integration logic and UI
  with "persistent mode" (mullvad-browser#455)
x Switch to ?. operator and tidy up surrounding code

v 13.0.8
============================================================
x Reduce annoyances and false positives from sidebar content
  detection (issue #444)
x Fix automatic top level trust conflict with existing
  contextual policies (issue #441)

v 13.0.6.902
============================================================
x Reduce annoyances and false positives from sidebar content
  detection (issue #444)

v 13.0.6.901
============================================================
x Fix automatic top level trust conflict with existing
  contextual policies (issue #441)

v 13.0.6
============================================================
x Use frameAncestors whenever possible for top URL
  retrieving
x Automatic reload on permissions change for promiscuous
  tabbed/tab-less sites
x [UX] Avoid creating extra tabs for sidebar measurement
  when possible
x [L10n] Updated ru
x [UX] Best effort to hide/show tab-less sites depending on
  the statusbar visibility
x Fix always set parent entry of temporary contextual
  policies created from DEFAULT to temporary (issue #440,
  thanks SandboxerX86 for reporting)
x [UX] Permissions UI support for tab-less (e.g. sidebar)
  content (issue #429)
x [Chromium] Prerendered frame support in context policies
  enforcing
x Fix some automatic top-level TRUST bugs (issue #437)
x Discard "zombie" prompts from the backlog
x Honor restrictions disablement for x-load checks
x [UX] Improved UX for file:// contextual permissions
  (issue#435)
x [nscl] Harmonize file:// URLs parsing and matching across
  Gecko and Chromium
x [XSS] Prevent false positives from the uptain.de
  e-commerce back-end
x More consistent contextual permission checks
x Fixed click to play sometimes broken for file:/// URLs
x Fixed automatic temporary permissions require reload
  (thanks scottg for reporting)

v 13.0.5.901
============================================================
x Use frameAncestors whenever possible for top URL
  retrieving

v 13.0.4.901
============================================================
x Automatic reload on permissions change for promiscuous
  tabbed/tab-less sites

v 13.0.3.901
============================================================
x [UX] Avoid creating extra tabs for sidebar measurement
  when possible
x [L10n] Updated ru

v 13.0.2.901
============================================================
x [UX] Best effort to hide/show tab-less sites depending on
  the statusbar visibility

v 13.0.1.901
============================================================
x Fix always set parent entry of temporary contextual
  policies created from DEFAULT to temporary (issue #440,
  thanks SandboxerX86 for reporting)

v 12.9.909
============================================================
x Disable tab-less support on Chromium

v 12.9.908
============================================================
x Fix options page bustage regression from issue #429

v 12.9.907
============================================================
x [UX] Permissions UI support for tab-less (e.g. sidebar)
  content (issue #429)

v 12.9.906
============================================================
x [Chromium] Prerendered frame support in context policies
  enforcing

v 12.9.905
============================================================
x Fixed webRequest header patching regression from
  contextual overrides (addresses issue #436)

v 12.9.904
============================================================
x Fix some automatic top-level TRUST bugs (issue #437)

v 12.9.903
============================================================
x Discard "zombie" prompts from the backlog
x Honor restrictions diablement for x-load checks
x [UX] Improved UX for file:// contextual permissions
  (issue#435)
x [nscl] Harmonize file:// URLs parsing and matching across
  Gecko and Chromium
x [XSS] Prevent false positives from the uptain.de
  e-commerce back-end
x More consistent contextual permission checks

v 12.9.902
============================================================
x Fixed click to play sometimes broken for file:/// URLs

v 12.9.901
============================================================
x Fixed automatic temporary permissions require reload
  (thanks scottg for reporting)

v 12.6
============================================================
x Make contextual policies override restriction cascading
  (tor-browser#43397)
x [Chromium] Fix 12.5.9xx prompt closure regression
x [Chromium] Full x-load checks Chromium support
x Better offscreen placeholders for x-load
x [l10n] [Chromium] Make x-load capability localization
  Chromium-compatible
x [L10n] Updated de, fr, he, ru, tr zh_CN
x [UX] Honor non-contextual x-load capability granted from
  NoScript Options (thanks barbaz for RFE)
x Prevent data: URIs from messing with srcset parsing
  (thanks fatboy for reporting)
x Regard as "mutually safe" for x-load directories sharing a
  common ancestor
x [UX] Make x-load capability visible for CUSTOM file:
  entries in NoScript Options (thanks barbaz for RFE)
x [UX] Fixed prompt window leaks (tor-browser#43281)
x [UX] Make object unblocking temporary and contextual by
  default, with choices in the prompt
x [nscl] Option to clone Permissions without context
x Always honor the "Collapse blocked objects" option
x Refactor top-level auto-trust and make it contextual
  (issue #417)
x [nscl] Remove noisy debug statement
x [UX] UI support for extra floating capabilities (x-load)
x Integrate event handlers suppression with blocking if
  needed (thanks Adithya Suresh Kumar for reporting)
x [nscl] Refactor xray proxification
x Fix incorrect assumptions about some DOM element
  properties reflecting URLs (thanks Adithya Suresh Kumar
  for reporting)
x [nscl] Fix race condition between multiple extensions
  using MV3/DNR SyncMessage (JShelter#146, thanks polcak for
  reporting)
x Suppress some event handlers (tor-browser#43491, thanks
  Adithya Suresh Kumar for reporting)
x [build] Publish XPIs only after their signed
x [build] Improved version bump commit logic

v 12.5.906
============================================================
x Make contextual policies override restriction cascading
  (tor-browser#43397)
x [Chromium] Fix 12.5.9xx prompt closure regression
x Full x-load checks Chromium support
x Better offscreen placeholders for x-load
x [l10n] Make x-load capability localization
  Chromium-compatible
x [L10n] Updated tr

v 12.5.905
============================================================
x [UX] Honor non-contextual x-load capability granted from
  NoScript Options (thanks barbaz for RFE)
x Prevent data: URIs from messing with srcset parsing
  (thanks fatboy for reporting)
x Regard as "mutually safe" for x-load directories sharing a
  common ancestor

v 12.5.904
============================================================
x [L10n] Updated de, fr, ru
x Make x-load capability visible for CUSTOM file: entries in
  NoScript Options (thanks barbaz for RFE)
x [UX] Fixed prompt window leaks (tor-browser#43281)
x [UX] Make object unblocking temporary and contextual by
  default, with choices in the prompt
x [nscl] Option to clone Permissions without context

v 12.5.903
============================================================
x Fixed infinite x-load blocking loops (thanks barbaz for
  reporting)
x Always honor the "Collapse blocked objects" option

v 12.5.902
============================================================
x Refactor top-level auto-trust and make it contextual
  (issue #417)
x [L10n] Updated zh_CN

v 12.5.901
============================================================
x Make the x-load capability localizable (tor-browser#43635)
x Earlier x-load interception  (thanks Adithya Suresh Kumar
  for reporting)

v 12.1.1.905
============================================================
x Improved x-load capability support (thanks Adithya Suresh
  Kumar for reporting)
x [nscl] Remove noisy debug statement

v 12.1.1.904
============================================================
x UI support for extra floating capabilities (x-load)
x Integrate event handlers suppression with blocking if
  needed (thanks Adithya Suresh Kumar for reporting)
x [nscl] Refactor xray proxification

v 12.1.1.903
============================================================
x Broader event handlers suppression (thanks Adithya Suresh
  Kumar for reporting)

v 12.1.1.902
============================================================
x Fix incorrect assumptions about some DOM element
  properties reflecting URLs (thanks Adithya Suresh Kumar
  for reporting)

v 12.1.1.901
============================================================
x [nscl] Fix race condition between multiple extensions
  using MV3/DNR SyncMessage (JShelter#146, thanks polcak for
  reporting)
x Suppress some event handlers (tor-browser#43491, thanks
  Adithya Suresh Kumar for reporting)
x [build] Publish XPIs only after their signed
x [nscl] Updated to latest NoScript Commons Library
x [L10n] Updated he
x [build] Improved version bump commit logic

v 12.1.1
============================================================
x Fix automatic reloading broken if the background script /
  service worker is not already initialized on UI load
x Re-enable signing logging

v 12.1
============================================================
x [nscl] Improved work-around for Youtube placeholder
  displacement (tor-browser#43296)
x [L10n] Updated pl
x Avoid synchronous policy fetching if document is already
  complete (e.g. on extension updates)
x Remove more MV3-only entries from MV2 manifest
x Remove pre-release version check on signing
x More informative debug logging
x Fixed misplaced update_url in development builds (thanks
  DJ-Leith for reporting)
x Switch Firefox development build version format to *.9xx
  (like Chromium)
x Cross-browser and cross-manifest compatibility down to
  Gecko 115
x Improved cross-browser and cross-manifest development and
  build ergonomics
x Fixed RequestGuard on Firefox still using CSP.blocks() as
  an instance method
x Improved cross-browser and cross-manifest support
x Do not reload affected tabs before saving XSS user
  choices, if any
x [nscl] Several performance and reliability enhancements
  from NSCL
x [nscl] Updated to latest NoScript Commons Library
x Fixed offscreen placeholder container preventing user
  interaction on the left of placeholders
  (tor-browser#43282)
x Fix localization-related console spam when opening options
  panel (tor-browser#43269)
x Fixed offscreen placeholder container preventing user
  interaction on the left of placeholders
  (tor-browser#43282)
x Fix localization-related console spam when opening options
  panel (tor-browser#43269)

v 12.0.904
============================================================
x [nscl] Improved work-around for Youtube placeholder
  displacement (tor-browser#43296)
x [L10n] Updated pl

v 12.0.903
============================================================
x Avoid synchronous policy fetching if document is already
  complete (e.g. on extension updates)
x Remove more MV3-only entries from MV2 manifest
x Remove pre-release version check on signing

v 12.0.902
============================================================
x More informative debug logging
x Fixed misplaced update_url in development builds (thanks
  DJ-Leith for reporting)

v 12.0.901
============================================================
x Switch Firefox development build version format to *.9xx
  (like Chromium)
x Cross-browser and cross-manifest compatibility down to
  Gecko 115
x Improved cross-browser and cross-manifest development and
  build ergonomics
x Fixed RequestGuard on Firefox still using CSP.blocks() as
  an instance method
x Improved cross-browser and cross-manifest support
x Do not reload affected tabs before saving XSS user
  choices, if any

v 12.0.0 (MV3 / Chromium only)
============================================================
x [nscl] Switch all the Chromium usages of patchWindow() to
  the new Worlds API
x [nscl] Switch patchWorkers.js implementation from
  patchWindow.js to Worlds.js
x [nscl] Switch WebGLHook implementation from patchWindow.js
  to Worlds.js
x Optimized fall-back reporting for non-HTTP documents and
  included script type
x Remove uuid from DNR reporting CSP to prevent it from
  being abused for tracking
x Import versioning module just once
x Infrastructure to replace patchWindow.js with MAIN world
  content scripts
x MV3 compatibility
x DeclarativeNetRequest-backed policy enforcement
x Fixed theming race condition and other bugs
x Require explicit call to run tests
x Gecko strict compatibility versioning to prevent
  Chromium-only NoScript 12.x from being accidentally
  installed on Firefox
x Simplified Wakening

v 11.5.3rc2
============================================================
x [nscl] Several performance and reliability enhancements
  from NSCL
x [nscl] Updated to latest NoScript Commons Library
x Fixed offscreen placeholder container preventing user
  interaction on the left of placeholders
  (tor-browser#43282)
x Fix localization-related console spam when opening options
  panel (tor-browser#43269)

v 11.5.3rc1
============================================================
x Fixed offscreen placeholder container preventing user
  interaction on the left of placeholders
  (tor-browser#43282)
x Fix localization-related console spam when opening options
  panel (tor-browser#43269)

v 11.5.2
============================================================
x [tor-browser#43257] More efficient, flexible and
  race-resistant placeholder styling

v 11.5.1
============================================================
x [nscl] Panic abort on buggy pages (like
  https://github.com/) going in infinite loops when webgl is
  disabled
x Refactoring to use DocRewriter
x [tor-browser#43258] Remove content script crypto.subtle
  dependency
x Synchronize Sites.onionSecure on any settings update
x [tor-browser#32668] More reliable Security Level Reset on
  Tor / Mullvad Browser

v 11.5.1rc4
============================================================
x [tor-browser#43258] Fixed LifeCycle error on update

v 11.5.1rc3
============================================================
x [nscl] Panic abort on buggy pages (like
  https://github.com/) going in infinite loops when webgl is
  disabled
x Refactoring to use DocRewriter

v 11.5.1rc2
============================================================
x [tor-browser#43258] Remove content script crypto.subtle
  dependency
x Synchronize Sites.onionSecure on any settings update

v 11.5.1rc1
============================================================
x [tor-browser#32668] More reliable Security Level Reset on
  Tor / Mullvad Browser

v 11.5.0
============================================================
x [tor-browser#32668] Use the Security Level as the default
  policy for Options Reset on Tor Browser
x [tor] Stateless-compatible Tor Browser integration
x [L10n] Updated pt_BR
x Stateless-compatible temporary permissions
x Switch from deferWebTraffic to Wakening
x Stateless-compatibile TabGuard
x Switch to non-persistent background page
x [xss] Refactor for non-persistence
x Removed Fennec-specific code
x Bump min Gecko compatibility to 115.0 (stateless
  background script support)

v 11.4.44
============================================================
x [L10n] Updated pt_BR
x Wait for (re)wakening before dispatching messages (fixes
  occasional blank UI on Android)
x Fix broken settings persistence when options opened from
  privileged page and reload required
x Fixed computedChildPolicy() regression on missing tab url
x Minor code cleanup
x Remove 6 years old legacy code handling migrations from
  NoScript 5.x "Classic"
x [xss] Removed legacy/obsolete exceptions
x [build] Support for quiet tagging without editing the
  message

v 11.4.44rc2
============================================================
x [L10n] Updated pt_BR

v 11.4.44rc1
============================================================
x Wait for (re)wakening before dispatching messages (fixes
  occasional blank UI on Android)
x Fix broken settings persistence when options opened from
  privileged page and reload required
x Fixed computedChildPolicy() regression on missing tab url
x Minor code cleanup
x Remove 6 years old legacy code handling migrations from
  NoScript 5.x "Classic"
x [xss] Removed legacy/obsolete exceptions
x [build] Support for quiet tagging without editing the
  message

v 11.4.43
============================================================
x Improved prompts factory
x Refactor browser-dependent UI CSS
x [build] accept "signed" as a "sign" synonym.
x [nscl]  Fixed SyncMessage regression in the MV2 code paths
x [nscl] Block file: media sources independently from CSP
x Update copyright dates
x [nscl] MV3-compatible SyncMessage implementation
x Add match_origin_as_fallback to manifest content scripts
x Fix Tor Browser / Mullvad Browser falling back to a serif
  font for NoScript UI

v 11.4.43rc5
============================================================
x Fixed prompts factory regression on Android

v 11.4.43rc4
============================================================
x Improved prompts factory

v 11.4.43rc3
============================================================
x Refactor browser-dependent UI CSS

v 11.4.43rc2
============================================================
x [build] accept "signed" as a "sign" synonym.
x [nscl]  Fixed SyncMessage regression in the MV2 code paths

v 11.4.43rc1
============================================================
x [nscl] Block file: media sources independently from CSP
x Update copyright dates
x [nscl] MV3-compatible SyncMessage implementation
x Add match_origin_as_fallback to manifest content scripts
x Fix Tor Browser falling back to a serif font for NoScript
  UI

v 11.4.42
============================================================
x [nscl] Further SyncMessage simplification
x Mitigate race conditions on startup

v 11.4.42rc2
============================================================
x [nscl] Further SyncMessage simplification

v 11.4.42rc1
============================================================
x Mitigate race conditions on startup

v 11.4.41
============================================================
x [nscl] Fixed Chromium worker patching regression caused by
  failSafe scope
x [nscl] Force service workers to be patched bypassing cache
x [nscl] More robust SyncMessage implementation
x [nscl] Enhanced remote worker patching
x [nscl] Remove missing source map warning for
  browser-polyfill.js
x [nscl] Better console handling in execution context
  patches
x Reduce console spam on non-debugging instances
x [nscl] Avoid patched workers breakage if console API is
  disabled (thanks ayi for reporting)

v 11.4.41rc4
============================================================
x [nscl] Fixed Chromium worker patching regression caused by
  failSafe scope

v 11.4.41rc3
============================================================
x [nscl] Force service workers to be patched bypassing cache

v 11.4.41rc2
============================================================
x [nscl] More robust SyncMessage implementation
x [nscl] Enhanced remote worker patching
x [nscl] Remove missing source map warning for
  browser-polyfill.js
x [nscl] Better console handling in execution context
  patches

v 11.4.41rc1
============================================================
x Reduce console spam on non-debugging instances
x [nscl] Avoid patched workers breakage if console API is
  disabled (thanks ayi for reporting)

v 11.4.40
============================================================
x [nscl] Fix patched workers failures caused by Firefox
  webRequest filters disconnect() breaking on large files
  (thanks barbaz for reporting)

v 11.4.39
============================================================
x [nscl] Improved WebGL-hooking and worker patching
  stability
x [L10n] Lower to 90% the threshold for including a new
  translation
x [L10n] Updated he, pt_PT
x [nscl] Prevent patchWindow from throwing on SOP violations
x [nscl] Correctly propagate extra arguments to shadowed
  worker constructors

v 11.4.39rc4
============================================================
x [nscl] Fixed regression in replaying property interactions
  with shadowed/patched workers

v 11.4.39rc3
============================================================
x [nscl] Improved WebGL-hooking and worker patching
  stability
x [L10n] Lower to 90% the threshold for including a new
  translation
x [L10n] Updated he, pt_PT

v 11.4.39rc2
============================================================
x [nscl] Prevent patchWindow from throwing on SOP violations

v 11.4.39rc1
============================================================
x [nscl] Correctly propagate extra arguments to shadowed
  worker constructors

v 11.4.38
============================================================
x [nscl] Reuse uuid() in SyncMessage
x [nscl] Simpler and safer SyncMessage logic on
  Chromium-based browsers (thanks NDevTK for reporting)
x Fixed missing frameId on interception reporting
x Updated file exclusions on packaging

v 11.4.38rc2
============================================================
x [nscl] Reuse uuid() in SyncMessage

v 11.4.38rc1
============================================================
x Updated file exclusions on packaging
x [nscl] Simpler and safer SyncMessage logic on
  Chromium-based browsers (thanks NDevTK for reporting)
x Fixed missing frameId on interception reporting

v 11.4.37
============================================================
x [nscl] Do not patch windows with WebGLHook if webgl is
  globally disabled
x [nscl] Do not patch workers if webgl is globally disabled
x [L10n] Updated uk
x [nscl] Workers-aware WebGL Hook

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

v 11.4.36
============================================================
x [nscl] Merged MV3-compatible branch
x [XSS] Take in account the whole redirection chain (thanks
  NDevTK for reporting)

v 11.4.35
============================================================
x Improved lazy_load capability (optimization and
  notification)
x [nscl] Slight optimization of NOSCRIPT element emulation
  loop
x Automatically add extra capabilities to policyTypesMap
x Gracefully handle new capabilities still unknown to the
  settings host (e.g. Tor/Mullvad browser), if any
x Configurable "lazy_load" capability (see
  https://github.com/whatwg/html/issues/5250)
x Prefetch all CSS subresources (1st party included) in
  private contexts where both unchecked_css and scripting
  capabilities are disabled
x Forcibly neutralize lazy loading attributes when scripting
  is disabled
x [nscl] Restored SyncMessage compatibility with Firefox 78
  and below
x Lock nscl version on stable releases
x [L10n] Updated de, fr, tr, ru, uk, zh_CN

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

v 11.4.34
============================================================
x [nscl] Work around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=1899786
  (issue #372)
x [L10n] Updated de, ru, tr
x Synchronize nscl git commits as needed before tagging new
  versions

v 11.4.34rc2
============================================================
x [L10n] Updated ru, tr
x [nscl] Work around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=1899786
  (issue #372)

v 11.4.34rc1
============================================================
x Fix fallback noscript meta-refresh broken by sandbox CSP
  directive

v 11.4.33
============================================================
= (placeholder Chrome Store version for 11.4.31 rollback)

v 11.4.32
============================================================
x [L10n] Updated de
x [nscl] Use the sandbox directive in addition to script-src
  for CSP-based script blocking
x Syncrhonize nscl git commits as needed before tagging new
  versions

v 11.4.31
============================================================
x [L10n] Updated fr, is, ru, zh_CN
x Improved release tooling
x [nscl] Updated to latest NoScript Commons Library
x NoScript Options/Appearance/Show synthetic placeholders
  for invisible capability probes (issue #369)
x [nscl] Make placeholders easier to style per type
x Prevent duplicate synthetic placeholders for invisible
  capability probes (issue #369)

v 11.4.31rc3
============================================================
x [L10n] Updated zh_CN
x Improved release tooling
x [nscl] Updated to latest NoScript Commons Library
x [L10n] Updated ru
x [L10n] Updated fr, is

v 11.4.31rc2
============================================================
x NoScript Options/Appearance/Show synthetic placeholders
  for invisible capability probes (issue #369)
x [nscl] Make placeholders easier to style per type

v 11.4.31rc1
============================================================
x Prevent duplicate synthetic placeholders for invisible
  capability probes (issue #369)

v 11.4.30
============================================================
x [nscl] Best effort WebGL placeholders for offscreen
  capability detection
x Improved blocked but required capability reporting from
  subframes (issue #367)
x [nscl] Include SVG among embedding document types (fixes
  issue #366)
x Removed obsolete "applications" manifest.json key

v 11.4.30rc2
============================================================
x [nscl] Best effort WebGL placeholders for offscreen
  capability detection
x Improved blocked but required capability reporting from
  subframes (issue #367)
x [nscl] Include SVG among embedding document types (fixes
  issue #366)

v 11.4.30rc1
============================================================
x Removed obsolete "applications" manifest.json key

v 11.4.29
============================================================
x [nscl] Updated TLDs
x [nscl] Improved reliability of TLD updater
x Removed theme.js console noise
x Fix beta channel updates breakage due to
  browser_specific_settings override
x [nscl] Several content-side performance improvements
x Reduce synchronous policy retrieval impact on file: and
  ftp: document loading performance
x More commands for which a keyboard shortcut can be
  configured
x [L10n] Updated de, fi, mk, nl, pl, ru, sq, tr, uk,
  pt_BR, zh_CN, zh_TW
x Explicit Android compatibility declaration

v 11.4.29rc5
============================================================
x [nscl] Improved reliability of TLD updater

v 11.4.29rc4
============================================================
x [nscl] Updated TLDs
x Removed theme.js console noise

v 11.4.29rc3
============================================================
x Fix beta channel updates breakage due to
  browser_specific_settings override

v 11.4.29rc2
============================================================
x [L10n] Updated fi, pt_BR
x [nscl] Several content-side performance improvements
x Reduce synchronous policy retrieval impact on file: and
  ftp: document loading performance
x More commands for which a keyboard shortcut can be
  configured

v 11.4.29rc1
============================================================
x [nscl] Updated TLDs
x [L10n] Updated de, mk, nl, pl, ru, sq, tr, uk, zh_CN,
  zh_TW
x Explicit Android compatibility declaration

v 11.4.28
============================================================
x Prevent URL leaks from media placeholders (thanks NDevTK
  for report)
x [nscl] Support for in-tree TLDs updates

v 11.4.28rc2
============================================================
x Remove replaceAsync() dependency on
  String.prototype.matchAll()

v 11.4.28rc1
============================================================
x Prevent URL leaks from media placeholders (thanks NDevTK
  for report)
x [nscl] Support for in-tree TLDs updates

v 11.4.27
============================================================
x [XSS] Better specificity of HTML elements preliminary
  checks
x [XSS] Better specificity of potential fragmented injection
  through framework syntax detection (thanks Rom623, barbaz
  et al)
x [nscl] RegExp.combo(): RegExp creation by combination for
  better readability and comments
x [nscl] Replaced lib/sha256.js with web platform native
  implementation (thanks Martin for suggested patch)
x [nscl] Fixed property/function mismatch (thanks Alex)
x Fixed operators precedence issue #312 (thanks Alex)
x [nscl] Prevent dead object access on BF cache (thanks
  jamhubub and mriehm)

v 11.4.27rc3
============================================================
x [XSS] Better specificity of HTML elements preliminary
  checks

v 11.4.27rc2
============================================================
x [XSS] Better specificity of potential fragmented injection
  through framework syntax detection (thanks Rom623, barbaz
  et al)
x [nscl] RegExp.combo(): RegExp creation by combination for
  better readability and comments

v 11.4.27rc1
============================================================
x [nscl] Replaced lib/sha256.js with web platform native
  implementation (thanks Martin for suggested patch)
x [nscl] Fixed property/function mismatch (thanks Alex)
x Fixed operators precedence issue #312 (thanks Alex)
x [nscl] Prevent dead object access on BF cache (thanks
  jamhubub and mriehm)

v 11.4.26
============================================================
x [Android] Fixed regression preventing NoScript prompts
  from being shown
x [XSS] Fallback to execute most demanding regular
  expressions asynchronously
x [XSS] Removed obsolete Flash-related checks
x [XSS] Make InjectionChecker's regular expressions easier
  to debug
x [XSS] Updated OpenID regexp

v 11.4.26rc2
============================================================
x [Android] Fixed regression preventing NoScript prompts
  from being shown

v 11.4.26rc1
============================================================
x [XSS] Fallback to execute most demanding regular
  expressions asynchronously
x [XSS] Removed obsolete Flash-related checks
x [XSS] Make InjectionChecker's regular expressions easier
  to debug
x [XSS] Updated OpenID regexp

v 11.4.25
============================================================
x Reload extension on fatal failures
x [Android] Fixed UI styling regression
x Fixed UI inconsistencies when finer-grained contextual
  policies are created/imported by other means (thanks
  barbaz for reporting)

v 11.4.25rc2
============================================================
x Reload extension on fatal failures
x [Android] Fixed UI styling regression

v 11.4.25rc1
============================================================
x Fixed UI inconsistencies when finer-grained contextual
  policies are created/imported by other means (thanks
  barbaz for reporting)

v 11.4.24
============================================================
x [XSS] Fix Base64 hash checks interfering with query string
  checks (thanks barbaz for reporting)
x [TabGuard] Stop exempting domains bidirectionally by
  default
x [TabGuard] Fix destination domain being reported as the
  trigger of a warning prompt when all the other tab-tied
  domains have been exempted (thanks barbaz for report)

v 11.4.24rc2
============================================================
x [XSS] Fix Base64 hash checks interfering with query string
  checks (thanks barbaz for reporting)

v 11.4.24rc1
============================================================
x [TabGuard] Stop exempting domains bidirectionally by
  default
x [TabGuard] Fix destination domain being reported as the
  trigger of a warning prompt when all the other tab-tied
  domains have been exempted (thanks barbaz for report)

v 11.4.23
============================================================
x [TabGuard] Exclude non-scriptable content types from
  suspects
x [TabGuard] Check for chains of about:blank puppet tabs
x Mirror NoScript's badge content in the context menu to
  provide more info (e.g. on XSS or TG status) whenever the
  toolbar icon is hidden
x [TabGuard] Short circuit requests in non-anonymized tabs
x [TabGuard] Decouple tab ties cutting from one-shot
  authorized loads cases for same-site navigation
x [TabGuard] Load with credentials when reloading from
  NoScript's UI
x [TabGuard] "TG" badge on the NoScript icon when the
  selected tab is anonymized
x [TabGuard] Cut ties and restore authorization info on
  manual reloads
x [TabGuard] Remove Set-Cookie headers from anonymized
  requests to prevent unreversible authorization loss
x [TabGuard] Keep track of anonymized requests
x [TabGuard] Keep track of anonymized tabs
x [TabGuard] Fix "never prompt" option's label not being
  clickable
x [TabGuard] Introduce prompt granularity options (default:
  prompt only on POST requests)
x Removed invalid CSS
x Avoid unnecessary prompt resizing
x Prevent focus-related console warning when opening prompts

v 11.4.23rc5
============================================================
x [TabGuard] Exclude non-scriptable content types from
  suspects
x [TabGuard] Check for chains of about:blank puppet tabs

v 11.4.23rc4
============================================================
x Mirror NoScript's badge content in the context menu to
  provide more info (e.g. on XSS or TG status) whenever the
  toolbar icon is hidden

v 11.4.23rc3
============================================================
x [TabGuard] Short circuit requests in non-anonymized tabs
x [TabGuard] Decouple tab ties cutting from one-shot
  authorized loads cases for same-site navigation

v 11.4.23rc2
============================================================
x [TabGuard] Load with credentials when reloading from
  NoScript's UI
x [TabGuard] "TG" badge on the NoScript icon when the
  selected tab is anonymized
x [TabGuard] Cut ties and restore authorization info on
  manual reloads
x [TabGuard] Remove Set-Cookie headers from anonymized
  requests to prevent unreversible authorization loss
x [TabGuard] Keep track of anonymized requests
x [TabGuard] Keep track of anonymized tabs
x [TabGuard] Fix "never prompt" option's label not being
  clickable

v 11.4.23rc1
============================================================
x [TabGuard] Introduce prompt granularity options (default:
  prompt only on POST requests)
x Removed invalid CSS
x Avoid unnecessary prompt resizing
x Prevent focus-related console warning when opening prompts


v 11.4.22
============================================================
x [L10n] Updated uk
x Consistently apply DEFAULT policy to top-level data: URLs

v 11.4.21
============================================================
x Fixed mislabeled Tor Browser settings override option
x [L10n] Updated mk

v 11.4.21rc2
============================================================
x Better label formatting for Tor Browser overriding options

v 11.4.21rc1
============================================================
x Fixed mislabeled Tor Browser settings override option
x [L10n] Updated mk

v 11.4.20
============================================================
x Generalized prompt safety hooks
x Better blob: URL support

v 11.4.19
============================================================
x [nscl] Improved cross-window patch cascading
x [nscl] Avoid unneeded side effects when checking for
  zombie patched objects
x [nscl] Prompt safety hooks
x [L10n] Updated fr, fi
x Fix font family typo (!283, thanks alex-kinokon)

v 11.4.19rc3
============================================================
x [nscl] Improved cross-window patch cascading

v 11.4.19rc2
============================================================
x [nscl] Avoid unneeded side effects when checking for
  zombie patched objects

v 11.4.19rc1
============================================================
x [nscl] Prompt safety hooks
x [L10n] Updated fi
x [L10n] Updated fr
x Fix font family typo (!283, thanks alex-kinokon)

v 11.4.18
============================================================
x [Firefox on Linux] Fixed detached window UI gets closed
  when its decoration is clicked (thanks richard for
  reporting)

v 11.4.17
============================================================
x [nscl] Settings persistence made more reliable and
  resilient against sync storage unavailability
x [Windows] Changed the tab enforcement toggling shortcut to
  "Alt+Shift+Comma" (still "Alt+Shift+Space" on desktop OSes
  other than Windows) - issue #281
x Updated copyright year
x Removed unused files from the source tree
x Fixed "Firefox" being shown instead of "Tor Browser" in
  the Security Level override option label
x [L10n] Updated pl, tr

v 11.4.17rc2
============================================================
x [nscl] Fixed rc1 regression erasing big policies from sync
  storage (thanks Dwedit and mkupper for reporting)

v 11.4.17rc1
============================================================
x [Windows] Changed the tab enforcement toggling shortcut to
  "Alt+Shift+Comma" (still "Alt+Shift+Space" on desktop OSes
  other than Windows) - issue #281
x Updated copyright year
x Settings persistence made more reliable and resilient
  against sync storage unavailability
x Removed unused files from the source tree
x Fixed "Firefox" being shown instead of "Tor Browser" in
  the Security Level override option label
x [L10n] Updated pl, tr

v 11.4.16
============================================================
x [L10n] Updated de, nl, pl, ru, sq, zh_CN
x Always open the windowed standalone UI when invoked from
  the Alt+Shift+N shortcut
x Alt+Shift+Space shortcut to toggle restrictions
  enforcement for current tab (issue #129, thanks PF4Public
  for RFE)

v 11.4.16rc2
============================================================
x [L10n] Updated de, nl, pl, ru, sq, zh_CN

v 11.4.16rc1
============================================================
x Always open the windowed standalone UI when invoked from
  the Alt+Shift+N shortcut
x Alt+Shift+Space shortcut to toggle restrictions
  enforcement for current tab (issue #129, thanks PF4Public
  for RFE)

v 11.4.15
============================================================
x Use the actual browser's brand name for Tor Browser
  derivatives
x Always open the windowed standalone UI when invoked from
  the contextual menu (thanks ZeroUnderscoreOu for
  reporting)

v 11.4.15rc2
============================================================
x Use the actual browser's brand name for Tor Browser
  derivatives

v 11.4.15rc1
============================================================
x Always open the windowed standalone UI when invoked from
  the contextual menu (thanks ZeroUnderscoreOu for
  reporting)

v 11.4.14
============================================================
x Updated HTML event attributes list
x Uniformed indexed directory Firefox UI emulation to
  prevent a script blocking bypass on file:// resources
  (thanks RyotaK for reporting)
x Fixed error being logged in the console on scriptless
  pages when hitting [Delete] or [Backspace] (thanks barbaz
  for reporting)
x Work-around for background page misteriously being
  unloaded sometimes by Firefox
x [L10n] Updated Transifex configuration

v 11.4.14rc2
============================================================
x Updated HTML event attributes list
x Uniformed indexed directory Firefox UI emulation to
  prevent a script blocking bypass on file:// resources
  (thanks RyotaK for reporting)
x Fixed error being logged in the console on scriptless
  pages when hitting [Delete] or [Backspace] (thanks barbaz
  for reporting)

v 11.4.14rc1
============================================================
x Work-around for background page misteriously being
  unloaded sometimes by Firefox
x [L10n] Updated Transifex configuration

v 11.4.13
============================================================
x Ensure theme changes are synchronized across windows,
  including private ones (thanks barbaz for reporting)
x [UI] Ensure prompts are always centered relative to the
  parent window in multi-monitors setups
x Switch to "Modern Red Evil" icon contributed by fatboy
x Work-around for Chromium unable to load the placeholder
  icon
x Themed placeholders
x [nscl] Fixed placeholder fallback styles on Gecko
  embedding documents
x [L10n] New Romanian (ro) locale (thanks Simona Iacob and
  Inpresentia I.)

v 11.4.13rc4
============================================================
x Ensure theme changes are synchronized across windows,
  including private ones (thanks barbaz for reporting)
x Work-around for window position not always changing on
  first update() call

v 11.4.13rc3
============================================================
x Fixed private windows always falling back to Vintage Blue
  theme (thanks barbaz for report)
x Fixed prompts's vertical centering altered by
  fit-to-content algorithm error (thanks barbaz for report)

v 11.4.13rc2
============================================================
x [UI] Ensure prompts are always centered relative to the
  parent window in multi-monitors setups
x Improved Chromium placeholder icon work-around

v 11.4.13rc1
============================================================
x Switch to "Modern Red Evil" icon contributed by fatboy
x Work-around for Chromium unable to load the placeholder
  icon
x Themed placeholders
x [nscl] Fixed placeholder fallback styles on Gecko
  embedding documents
x [L10n] New Romanian (ro) locale (thanks Simona Iacob and
  Inpresentia I.)
v 11.4.12
============================================================
x [L10n] Updated is, mk
x [L10n] New Finnish (fi) locale (thanks RJuho, olavinto and
  ricky.tigg)
x [L10n] New Ukrainian (uk) locale (thanks Kataphan, MuS and
  uniss)
x [L10n] New Persian (fa) locale (thanks voxp and magnifico)

v 11.4.11
============================================================
x Fix broken NoScript dialogs when
  browser.privatebrowsing.autostart = true (issue#259,
  thanks foenix for reporting)
x Avoid using fallback origins for main_frame loads

v 11.4.11rc2
============================================================
x Fix broken NoScript dialogs when
  browser.privatebrowsing.autostart = true (issue#259,
  thanks foenix for reporting)

v 11.4.11rc1
============================================================
x Avoid using fallback origins for main_frame loads

v 11.4.10
============================================================
x [TabTies] Cascade and merge ties in a shared pool, to
  prevent them from being cut by closing a middle tab
  (thanks NDevTK for reporting)
x Extended origin normalization to top-level documents
  (thanks NDevTK for reporting)
x [TabGuard] Fixed regression in about:blank handling
  (thanks NDevTK for reporting)
x Better origin guess for requests from sandboxed iframes
  (thanks NDevTK for reporting)
x More precise tracking of implicit origins in tab URLs
x [nscl] Stricter criteria for cutting tab relations (thanks
  NDevTK for reporting)
x Use window.origin when fetching policies for inheriting
  special URLs (thanks NDevTK for reporting)
x Better build script compatibility

v 11.4.10rc3
============================================================
x [TabTies] Cascade and merge ties in a shared pool, to
  prevent them from being cut by closing a middle tab
  (thanks NDevTK for reporting)

v 11.4.10rc2
============================================================
x Extended origin normalization to top-level documents
  (thanks NDevTK for reporting)
x [TabGuard] Fixed regression in about:blank handling
  (thanks NDevTK for reporting)

v 11.4.10rc1
============================================================
x Better origin guess for requests from sandboxed iframes
  (thanks NDevTK for reporting)
x More precise tracking of implicit origins in tab URLs
x [nscl] Stricter criteria for cutting tab relations (thanks
  NDevTK for reporting)
x Use window.origin when fetching policies for inheriting
  special URLs (thanks NDevTK for reporting)
x Better build script compatibility
v 11.4.9
============================================================
x [L10n] Updated pl, tr, zh_CN
x [TabGuard] Abort the load when the warning dialog is
  closed by any mean except the OK button
x [TabGuard] Stricter criteria for cutting tab relations
  (thanks fatboy for reporting)

v 11.4.8
============================================================
x Cross-tab identity leak protection ("TabGuard", see
  tor-browser#41071, thanks barbaz and fatboy for testing)
x [TabGuard] Better request lifecycle management
x [L10n] Updated de, it, nl, ru, sq
x [l10n] Automatic pull for 100% completed translations only

v 11.4.8rc5
============================================================
x [TabGuard] Avoid infinite redirection loops

v 11.4.8rc4
============================================================
x [TabGuard] Better request lifecycle management
x [L10n] Updated it

v 11.4.8rc3
============================================================
x [TabGuard] Improved specificity + some bug fixes (thanks
  barbaz and fatboy)
x [TabGuard] Move "forget" button in its own line
x [L10n] Updated de, nl, ru, sq
x [l10n] Automatic pull for 100% completed translations only

v 11.4.8rc2
============================================================
x [TabGuard] Better management of subrequests in undecided
  tabs

v 11.4.8rc1
============================================================
x Cross-tab identity leak protection (tor-browser#41071)

v 11.4.7
============================================================
x [XSS] Fixed regression in invalid characters optimization
  causing false negatives (thanks Tsubasa for reporting)
x Minor build script enhancement

v 11.4.6
============================================================
x [nscl] Copy NOSCRIPT elements' attribute in emulated
  replacements (issue #238)
x [XSS] Correct for concurrency in timeout checks
x [UI] Flatter preset appearance
x [UI] Focus visual feedback adjustments
x Inclusion-time TLD updates
x Updated HTML events
x [L10n] Updated pl
x Opaque white for vintage lock icons
x [L10n] Updated is

v 11.4.6rc2
============================================================
x [nscl] Copy NOSCRIPT elements' attribute in emulated
  replacements (issue #238)

v 11.4.6rc1
============================================================
x [XSS] Correct for concurrency in timeout checks
x [UI] Flatter preset appearance
x [UI] Focus visual feedback adjustments
x Inclusion-time TLD updates
x Updated HTML events
x [L10n] Updated pl
x Opaque white for vintage lock icons
x [L10n] Updated is

v 11.4.5
============================================================
x Improved preset sizing
x Reduce toolbar bottom shaded line tickness
x [L10n] Updated he
x Various user-driven visual tweaks
x Fixed vintage icon brightness in automatic light mode
x Minor icon tweaks

v 11.4.4
============================================================
x [L10n] Updated mk
x Removed "clearclick" item from default settings
x Better layout for mixed status icons

v 11.4.3
============================================================
x Reversed colors in Modern Red permissive icons for better
  contrast
x Fixed regression causing only signed builds to complete

v 11.4.2
============================================================
x Dark scheme for high contrast toolbar buttons (issue #142)
x Reduce toolbar unused space
x Better contrast for "unsafe" URL labels
x Cleaner and more definite checked preset layout
x Less blurry focus halo
x [l10n] Updated pt_BR (thanks @DavidBrazSan)
x Removed eyes from default disabled and unrestricted small
  icons
x Improved preset label positioning
x Improved visual cues for selected presets (issue #235,
  thanks @unsungNovelty for report)
x Fixed regression removing hover effect from toolbar
  buttons
x More balanced Modern Red icon set
x [L10n] Updated de, es, fr is, nl, ru, sq, tr, zh_CN
x Move XSS options down one line
x New "Enable restrictions on browser restart" option
x Localizable Modern Red / Vintage Blue switch.
x Minor cross-theme visual tweakings
x Override dark vintage theme brightness filter on images
  for important UX cues
x Fix too wide CSS scope bleeding into page style (thanks
  SuperPat45 for report)

v 11.4.1
============================================================
x Support for reverting to the "Vintage Blue" style
  (NoScript Options/Appearance)
x Various tweaks to the "Moder Red" dark and light themes

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

v 11.4rc5
============================================================
x Fix breakage when dom.storage.enabled is set to false
  (thanks DJ-Leith for report)
x [l10n] Many languages updates

v 11.4rc3
============================================================
x Include ServiceWorker-initiated fetch requests in UI
  reporting (thanks 0_o for report)
x Remove redundant style patching

v 11.4rc2
============================================================
x Prompts can be closed by keyboard: Enter emulates the
  default button click, Escape the cancel action
x Improved light/dark schemes support

v 11.4rc1
============================================================
x Dark/Light/Auto theme switcher in Appearance options panel
x Ensure better visibility for in-popup message box

v 11.3.8rc6
============================================================
x Sticky toolbar and scrollable fixed-height content in
  browserAction popups
x Remove debug statements
x Use currentWindow instead of lastFocusedWindow to
  initialize browserAction and its surrogate windows
x [XSS] Automatically reload page when clearing XSS choice
  from popup
x [XSS] Enable "Clear XSS Choices" button only if some item
  is selected
x More visual tweaks

v 11.3.8rc5
============================================================
x Remember last active tab when opening the option window
x More visual/theming tweaks
x Avoid useless reload if no actual change has happened in
  enforcement status

v 11.3.8rc4
============================================================
x Apply preferred theme to media placeholders
x Fix for regression: request and execution attempts not
  being reported anymore in the UI if restrictions are
  disabled (thanks Stefan Mey for report)
x Dark and light themes refinements

v 11.3.8rc3
============================================================
x Dark mode support
x Improved high contrast layout
x Fixed undefined lastInput on tab key
x Fixed automatic reload not always triggered for CUSTOM
  tweakings

v 11.3.8rc2
============================================================
x [L10n] Updated zh_TW
x More consistent cross-browser widgets
x Fix placeholder close button shadow
x Fix blurry icons on Chromium
x Partial status indicator on the left of the icon, to
  accommodate Chromium's badge position

v 11.3.8rc1
============================================================
x Make focus hint less elusive for needed capability widgets
x Align capabilities on the vertical center
x Improve buttons and tabs appearance
x Visual refresh based on Simply Secure concept artwork
x More accurate blocking stats

v 11.3.7
============================================================
x Always avoid DNS resolution when a HTTP(S) proxy is used
  (thanks nojake for reporting)

v 11.3.6
============================================================
x Make high contrast and draggable toolbar items mutually
  exclusive
x [Chromium] Fix high contrast option not working
x Avoid flashing empty graveyard on popup opening
x More deterministic DnD placeholder creation
x [L10n] Updated fr, es, nl, zh_CN
x Make disabled buttons draggable and hidden enabled buttons
  interactive when the "graveyard" is open
x Close UI and reload immediately when enabling global/tab
  restrictions or disabling them for the tab only

v 11.3.6rc5
============================================================
x Make high contrast and draggable toolbar items mutually
  exclusive
x [Chromium] Fix high contrast option not working

v 11.3.6rc4
============================================================
x Avoid flashing empty graveyard on popup opening

v 11.3.6rc3
============================================================
x More deterministic DnD placeholder creation
x [L10n] Updated fr

v 11.3.6rc2
============================================================
x [L10n] Updated es
x Make disabled buttons draggable and hidden enabled buttons
  interactive when the "graveyard" is open

v 11.3.6rc1
============================================================
x Close UI and reload immediately when enabling global/tab
  restrictions or disabling them for the tab only
x [L10n] Updated nl, zh_CN

v 11.3.5
============================================================
x [L10n] Updated de, mk, ru, sq, tr
x Fix regressions in draggable toolbar buttons
x [Android] Better styling for icon buttons in message box

v 11.3.5rc2
============================================================
x [L10n] Updated de, mk, ru, sq, tr

v 11.3.5rc1
============================================================
x Fix regressions in draggable toolbar buttons
x [Android] Better styling for icon buttons in message box

v 11.3.4
============================================================
x Avoid closing the customizer on arrow up key context
  selection change (thanks barbaz for reporting)
x Prominently warn user whenever restrictions are disabled
x Better accessibility and styling for popup global buttons
x [L10n] Updated de
x Fix for contextual permissions display inconsistencies in
  options panel (thanks barbaz for reporting)

v 11.3.4rc2
============================================================
x Avoid closing the customizer on arrow up key context
  selection change (thanks barbaz for reporting)
x Prominently warn user whenever restrictions are disabled
x Support icon buttons elsewhere in the UI (e.g. in the
  messagebox)
x Support for selectively hiding messages
x Support for extra UI in the popup's message box
x Prevent popup closure and automatic reload when
  restrictions are disabled for the tab or globally
x Use a 5 seconds timeout to remotely fetch HTML events
  source
x Better accessibility and styling for popup global buttons

v 11.3.4rc1
============================================================
x [L10n] Updated de
x Fix for contextual permissions display inconsistencies in
  options panel (thanks barbaz for reporting)

v 11.3.3
============================================================
x [Android] Improved CUSTOM panel portrait layout
x Play nice with  the Viewhance extension
x Avoid synchronous fetching for remote embedding documents
x Fixed typo in UI context dropdown initial selection
x Fixed wrong label for http: sites in contextual policy UI
  (thanks barbaz for reporting)
x Fix for first party context policy ignored on first load
  in new tabs (thanks ayi for reporting)
x Consolidate best effort policy fetching
x Use correct context for all subresources checks (thanks
  user72 for reporting)
  queries on Firefox (thanks vexity for reporting)
x [L10n] Updated de, es, he

v 11.3.3rc6
============================================================
x [Android] Improved CUSTOM panel portrait layout
x [L10n] Updated de, he

v 11.3.3rc5
============================================================
x Play nice with  the Viewhance extension
x Avoid synchronous fetching for remote embedding documents
x Fixed typo in UI context dropdown initial selection

v 11.3.3rc4
============================================================
x Fixed wrong label for http: sites in contextual policy UI
  (thanks barbaz for reporting)
x Fix for first party context policy ignored on first load
  in new tabs (thanks ayi for reporting)

v 11.3.3rc3
============================================================
x Consolidate best effort policy fetching

v 11.3.3rc2
============================================================
x Use correct context for all subresources checks (thanks
  user72 for reporting)

v 11.3.3rc1
============================================================
x Prevent LAN protection from performing unnecessary DNS
  queries on Firefox (thanks vexity for reporting)
x [L10n] Updated de, es

v 11.3.2
============================================================
x Prevent LAN protection from breaking webRequest blocking
  on the Tor Browser (thanks TorBrowserUser for reporting)

v 11.3.1
============================================================
x Ensure onBeforeRequest is always synchronous on Chromium
x Remove dns permission for Chromium, since the asynchronous
  API is useless in synchronous webRequest
x Fix regression: CUSTOM UI broken on Gecko 77 and below
x Localized reset button
x [nscl] Fix for null origin URL objects breaking Sites
  parser (thanks kinet1k for reporting)
x [L10n] Updated translations

v 11.3.1rc3
============================================================
x Ensure onBeforeRequest is always synchronous on Chromium
x Remove dns permission for Chromium, since the asynchronous
  API is useless in synchronous webRequest

v 11.3.1rc2
============================================================
x Fix regression: CUSTOM UI broken on Gecko 77 and below

v 11.3.1rc1
============================================================
x Localized reset button
x [nscl] Fix for null origin URL objects breaking Sites
  parser (thanks kinet1k for reporting)
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW

v 11.3
============================================================
+ LAN capability to check for cross-zone WAN to LAN requests
  (thanks barbaz for ABE webext contributions)
+ Contextual policies (different capabilities for the same
  origin, depending on the top-level domain) configurable in
  the CUSTOM panel (thanks NLnet for financial support)

v 11.3rc4
============================================================
x Automatically persist contextual policy on creation and
  use animation to convey it being a new instance
x [L10n] Updated de, fr, it, nb_NO, nl, ru, sq, tr, zh_CN

v 11.3rc3
============================================================
x [LAN] check origin for all the DNS records to be local in
  order to mitigate DNS rebinding attacks
x [nscl] SyncMessage, fix for about:blank being reported as
  the tab URL sometimes on Chromium

v 11.3rc2
============================================================
x LAN capability to check for cross-zone WAN to LAN requests
  (thanks barbaz for ABE webext contributions)
x Support contextual policies in permission updates

v 11.3rc1
============================================================
+ Contextual policies (different capabilities for the same
  origin, depending on the top-level domain) configurable in
  the CUSTOM panel (thanks NLnet for financial support)

v 11.2.25
============================================================
x More robust policy fetching
x [Firefox] Fix regression causing file:// policy not to be
  correctly enforced sometimes

v 11.2.25rc2
============================================================
x More robust policy fetching

v 11.2.25rc1
============================================================
x [Firefox] Fix regression causing file:// policy not to be
  correctly enforced sometimes

v 11.2.24
============================================================
x [nscl] Avoid unnecessary window patching

v 11.2.23
============================================================
x [nscl] Fix rare breakages due to xray cloning

v 11.2.22
============================================================
x Parallel sync/async for best effort policy fetching under
  any circumstance

v 11.2.21
============================================================
x Better fallback for failing syncMessage
x [XSS] Simplified preemptive name sanitization

v 11.2.20
============================================================
x [L10n] Updated de
x [XSS] Fix false positive warning when "name" is in the
  query string (thanks John Shield / DuckDuckGo for
  reporting)

v 11.2.19
============================================================
x [XSS] Faster invalidCharsRx initialization on Gecko 78 and
  above
x [XSS] More resilient name handling
x [nscl] Use HTTPS SyncMessage endpoint for Chromium too
  (works around lack of file access by default on packed
  extensions breaking NoScript)

v 11.2.16
============================================================
x Fallback to synchronous policy fetching if the document is
  already loaded (e.g. on updates)
x [XSS] Interactive testing made a bit easier
x [nscl] Mitigate side effects of dead objects on patched
  windows during extension updates
x [XSS] Fix false positive on Microsoft authentication
  (thanks GrK and Hanna_Payne for reporting)
x [nscl] Work-around for object element initialization
  inconsistencies on Firefox (thanks skriptimaahinen for
  reporting)
x [L10n] Updated fr
x Better support for service workers in unrestricted modes
  (thanks Mark McVeigh for reporting)

v 11.2.16rc5
============================================================
x Fallback to syncrhonous policy fetching if the document is
  already loaded (e.g. on updates)
x [XSS] Interactive testing made a bit easier

v 11.2.16rc4
============================================================
x [nscl] Mitigate side effects of dead objects on patched
  windows during extension updates

v 11.2.16rc3
============================================================
x [XSS] Fix false positive on Microsoft authentication
  (thanks GrK and Hanna_Payne for reporting)

v 11.2.16rc2
============================================================
x [nscl] Work-around for object element initialization
  inconsistencies on Firefox (thanks skriptimaahinen for
  reporting)

v 11.2.16rc1
============================================================
x [L10n] Updated fr
x Better support for service workers in unrestricted modes
  (thanks Mark McVeigh for reporting)

v 11.2.15
============================================================
x [Android] Work-around for Firefox "forgetting" tabs
x [nscl] Improved cross-frame auto-patching

v 11.2.14
============================================================
x [nscl] Updated SyncMessage fixes conflict with other
  content blockers (thanks gwarser, barbaz and Baraoic)
x [XSS] Tweaked risky operator check prevents false positive
  on outbound Twitter navigation (thanks @muchtypo for
  reporting)
x [XSS] Better logging for JS fragment detection
x [XSS] Fixed performance regression in invalid character
  ranges generation causing random XSS "DOS" false positives
x Fetch policy for baseURI if document.domain is empty
x [L10n] Updated ja, lt, pl, ru, zh_CN
x Always fetch policy synchronously, if missing
x Fixed undetermined status icon on BF cache page loads
x [nscl] Fix webgl blocking regression due to xray wrappers
  confusion (thanks skriptimaahinen)
x [nscl] Prevent unnecessary breakages on pages inspecting
  canvas.getContext when webgl is disabled
x [nscl] Reduce the risk to interfere with scripts messing
  with the media attribute (issue #207)

v 11.2.12rc6
============================================================
x [XSS] Fixed regression causing "too much recursion" false
  positives (thanks barbaz for report)
x [XSS] Precomputed invalid identifier chars regular
  expression

v 11.2.12rc5
============================================================
x [XSS] Tweaked risky operator check prevents false positive
  on outbound Twitter navigation (thanks @muchtypo for
  reporting)
x [XSS] Better logging for JS fragment detection
x [XSS] Fixed performance regression in invalid character
  ranges generation causing random XSS "DOS" false positives
x Fetch policy for baseURI if document.domain is empty

v 11.2.12rc4
============================================================
x [L10n] Updated ja, lt, pl, ru, zh_CN
x Always fetch policy synchronously, if missing
x Fixed undetermined status icon on BF cache page loads

v 11.2.12rc3
============================================================
x [nscl] Fix webgl blocking regression due to xray wrappers
  confusion (thanks skriptimaahinen)

v 11.2.12rc2
============================================================
x [nscl] Prevent unnecessary breakages on pages inspecting
  canvas.getContext when webgl is disabled

v 11.2.12rc1
============================================================
x [nscl] Reduce the risk to interfere with scripts messing
  with the media attribute (issue #207)

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

v 11.2.10
============================================================
x Cross-browser file naming consistency, in spite of version
  numbering incompatibilities
x [nscl] Fix for potential race conditions on certain page
  transitions (issue #205)
x Handle exception when accessing navigator.serviceWorker on
  sandboxed frames
x MS Edge support

v 11.2.9
============================================================
x [L10n] Updated de, mk
x Replace deprecated extension.getURL() with
  runtime.getURL()
x REUSE-compliant licensing boilerplate
x Remove unused/refactored-out files
x Relicensing as GPL3+
x [nscl] Fixed infinite recursion issue on window.open
  wrappers
x Avoid treating JavaScript files as embeddings when opened
  as top-level documents

v 11.2.9rc3
============================================================
x [L10n] Updated de, mk

v 11.2.9rc2
============================================================
x Replace deprecated extension.getURL() with
  runtime.getURL()
x REUSE-compliant licensing boilerplate
x Remove unused/refactored-out files
x Relicensing as GPL3+
x [nscl] Fixed infinite recursion issue on window.open
  wrappers

v 11.2.9rc1
============================================================
x Avoid treating JavaScript files as embeddings when opened
  as top-level documents
x [L10n] Updated de

v 11.2.8
============================================================
x Quiet down unnecessary debug logging (issue #191)
x [L10n] Updated he, de
x Fix meta refresh sometimes ignored on Firefox 78 ESR
  (issue #192, thanks hackerncoder for report)
x Chromium-specific build-time customizations

v 11.2.8rc2
============================================================
x Quiet down unnecessary debug logging (issue #191)
x [L10n] Updated he

v 11.2.8rc1
============================================================
x Fix meta refresh sometimes ignored on Firefox 78 ESR
  (issue #192, thanks hackerncoder for report)
x [l10n] Updated de
x Chromium-specific build-time customizations

v 11.2.7
============================================================
x Better prompt layout (no accidental scrollbar)
x [nscl] Fix regression causing media patches to break some
  pages (thanks l0drex for report, issue #189)

v 11.2.6
============================================================
x [nscl] Various webgl blocking enhancements
x Remove also sticky-positioned elements with click+DEL on
  scriptless pages (thanks skriptimaahinen for RFE)
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Fixed race condition causing external CSS not to be
  rendered sometimes when unrestricted CSS is disabled
x Avoid document rewriting for noscript meta refresh
  emulation in most cases
x [nscl] Fixed XHTML pages broken when served with
  application/xml MIME type and no "object" capability
x [nscl] Switch early content script configuration to use
  /nscl/service/DocStartInjection.js
x Configurable "unrestricted CSS" capability to for sites
  where the CSS PP0 mitigation should be disabled
  (e.g TRUSTED)
x [nscl] Fix CSS PP0 mitigation still interfering with some
  WebExtensions (thanks barbaz for report)
x [XSS] Increased sensitivity and specificity of risky
  operator pre-checks

v 11.2.6rc1
============================================================
x [nscl] Various webgl blocking enhancements
x Remove also sticky-positioned elements with click+DEL on
  scriptless pages (thanks skriptimaahinen for RFE)

v 11.2.5rc6
============================================================
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Policy retrieval origin fine tuning

v 11.2.5rc5
============================================================
x Fixed hook not taking in account experimental webgl
  contexts (issue #187, thanks roman567e45 for report)

v 11.2.5rc4
============================================================
x Fixed regression in NOSCRIPT emulation (thanks barbaz for
  reporting)

v 11.2.5rc3
============================================================
x Fixed race condition causing external CSS not to be
  rendered sometimes when unrestricted CSS is disabled
x Rename "unchecked CSS" capability to "unrestricted CSS"
x Avoid document rewriting for noscript meta refresh
  emulation in most cases

v 11.2.5rc2
============================================================
x [nscl] Minor fixes from the library
x [nscl] Fixed XHTML pages broken when served with
  application/xml MIME type and no "object" capability
x [nscl] Switch early content script configuration to use
  /nscl/service/DocStartInjection.js
x [nscl] Refactored ContentScriptOnce.js to the library
x Rename the "csspp0" capability to "unchecked_css"

v 11.2.5rc1
============================================================
x Configurable "csspp0" capability to for sites where the
  CSS PP0 mitigation should be disabled (e.g TRUSTED)
x [nscl] Fix CSS PP0 mitigation still interfering with some
  WebExtensions (thanks barbaz for report)
x [XSS] Increased sensitivity and specificity of risky
  operator pre-checks

v 11.2.4
============================================================
x CSS resources prefetching as a mitigation against CSS PP0
  (https://github.com/Yossioren/pp0)
x [L10n] Updated br, de, el, es, fr, he, is, nl, pl, pt_BR,
  ru, sq, tr, zh_CN
x [nscl] Inteception of webgl context creation in
  OffscreenCanvas too
x Fixed configuration upgrades not applied on manual updates
  (thanks Nan for reporting)
x Mitigation for misbehaving pages repeating failed requests
  in a tight loop
x [UI] More understandable label for the cascading
  restrictions option
x [nscl] More refactoring out in NoScript Commons Library
x [nscl] patchWindow improvements

v 11.2.4rc5
============================================================
x [nscl] Inteception of webgl context creation in
  OffscreenCanvas too
x Fixed regression: Site Info broken by NSCL refactoring

v 11.2.4rc4
============================================================
x [nscl] Fixed unmerged NetCSP "extra" headers always
  undefined
x HTML event atoms reorder in Mozilla sources

v 11.2.4rc3
============================================================
x Avoid stack trace generation for debugging purposes on
  release builds
x More selective CSS PP0 protection, excluded on the Tor
  Browser where it's unneeded and easier to test/debug on
  dev builds
x Make isTorBrowser information available in child policy
x Prevent console noise on startup with privileged tabs
x [nscl] More refactoring out in NoScript Commons Library

v 11.2.4rc2
============================================================
x [nscl] Switch to NSCL for messaging
x [nscl] Rollback unneded window.opener patching (thanks
  skriptimaahinen for insight)
x CSS PP0 mitigation: cross-site stylesheets on scriptless
  pages, one resource per host
x Limit CSS PP0 mitigation to scriptless pages and prefetch
  only cross-site resources

v 11.2.4rc1
============================================================
x CSS resources prefetching as a mitigation against CSS PP0
  (https://github.com/Yossioren/pp0)
x [L10n] Updated br, de, el, es, fr, he, is, nl, pl, pt_BR,
  ru, sq, tr, zh_CN
x Fixed configuration upgrades not applied on manual updates
  (thanks Nan for reporting)
x Mitigation for misbehaving pages repeating failed requests
  in a tight loop
x [UI] More understandable label for the cascading
  restrictions option
x [nscl] patchWindow improvements
x [nscl] Switch to NSCL's generic inclusion shell script

v 11.2.3
============================================================
x [L10n] Purged non-inclusive terms from obsolete messages
x Added red halo feedback in CUSTOM preset for noscript
  element capability
x Fixed missing red halo feedback in CUSTOM preset for
  inline scripts and other capabilities sometimes
x Fixed race condition causing noscript elements not to be
  rendered sometimes

v 11.2.2
  ============================================================
x Fixed typo in version checked on noscript capability update.
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pt_BR, ru, sq, sv_SE, tr, zh_CN,
  zh_TW.

v 11.2.1
============================================================
x Configurable capability to show noscript elements on
  script-disabled pages
x [UI] Minor CSS Chromium compatibility fix
x [nscl] Refactoring to use Policy and its dependencies from
  the NoScript Commons Library
x Switch to faster and easier to maintain tld.js from nscl
x [UI] Fix punycode inconsistencies
x [UI] Improve preset and site controls alignment
x Provide feedback in the CUSTOM tab for WebGL usage
  attempts even if the canvas element is not attached to the
  DOM
x [L10n] Updated de, ja
x Updated HTML events
x Prevent double script on trusted file:// pages in some
  edge cases
x Prevent detection of wrapped functions (e.g. in WebGL
  interception) on Chromium

v 11.2.1rc4
============================================================
x [UI] Minor CSS Chromium compatibility fix
x Configurable capability to show noscript elements on
  script-disabled pages
x [L10n] Updated de

v 11.2.1rc3
============================================================
x [nscl] Improved integration of the NoScript Commons
  Library
x Moved nscl submodule into src
x [nscl] Update (restructured tree)
x Removed nscl cache directory from src
x [nscl] Refactoring to use Policy and its dependencies from
  the NoScript Commons Library

v 11.2.1rc2
============================================================
x Remove ||= operator which makes AMO's validator explode
x Switch to faster and easier to maintain tld.js from nscl
x [nscl] Updated with TLD_CACHE removal after usage
x [nscl] Updated NoScript Common Library inclusions
x Added the NoScript Commons Library (nscl) as a submodule
x [UI] Fix punycode inconsistencies
x [UI] improve preset and site controls alignment
x Updated TLDs
x Provide feedback in the CUSTOM tab for WebGL usage
  attempts even if the canvas element is not attached to the
  DOM
x [L10n] Updated de, ja
x Updated HTML events

v 11.2.1rc1
============================================================
x Prevent double script on trusted file:// pages in some
  edge cases
x Updated events archive
x Prevent detection of wrapped functions (e.g. in WebGL
  interception) on Chromium
x Updated TLDs
x Merge German language update

v 11.2
============================================================
x [XSS] New UI to reveal and selectively remove permanent
  user choices
x [L10n] Updated de
x Webgl hook refactored on nscl/content/patchWindow.js and
  made Chromium-compatibile
x Updated TLDs

v 11.2rc3
============================================================
x [XSS] Fixed choice manager UI bug (thanks barbaz for
  report)

v 11.2rc2
============================================================
x Updated TLDs
x [XSS] New UI to reveal and selectively remove permanent
  user choices

v 11.2rc1
============================================================
x [L10n] Updated de
x Webgl hook refactored on nscl/content/patchWindow.js and
  made Chromium-compatibile
x Updated TLDs

v 11.1.9
============================================================
x Return null when webgl is not allowed (thanks Matthew
  Finkel for patch)
x [XSS] Fixed memoization bug resulting in performance
  degradation on some payloads
x [XSS] Include call stack in debugging log output
x [XSS] Skip naps when InjectionChecker runs in its own
  worker
x Shortcut for easier XSS filter testing
x More lenient filter to add a new entry to per-site
  permissions
x [L10n] Updated de
x Replace script-embedded bitmap with css-embedded SVG as
  the placeholder logo
x Updated TLDs
x Remove source map reference causing console noise
x Fix per-site permissions UI glitches when base domain is
  added to existing subdomain (thanks barbaz for reporting)

v 11.1.9rc5
============================================================
x Return null when webgl is not allowed (thanks Matthew
  Finkel for patch)

v 11.1.9rc4
============================================================
x Updated TLDs
x [XSS] Fixed memoization bug resulting in performance
  degradation on some payloads
x [XSS] Include call stack in debugging log output
x [XSS] Skip naps when InjectionChecker runs in its own
  worker
x Shortcut for easier XSS filter testing

v 11.1.9rc3
============================================================
x More lenient filter to add a new entry to per-site
  permissions

v 11.1.9rc2
============================================================
x [L10n] Updated de
x Better fix for per-site permissions UI glitches (thanks
  barbaz for reporting)

v 11.1.9rc1
============================================================
x Replace script-embedded bitmap with css-embedded SVG as
  the placeholder logo
x Updated TLDs
x Remove source map reference causing console noise
x Fix per-site permissions UI glitches when base domain is
  added to existing subdomain (thanks barbaz for reporting)

v 11.1.8
============================================================
x [XSS] Fix for old pre-screening optimization exploitable
to bypass the filter in recent browsers - thanks Tsubasa
FUJII (@reinforchu) for reporting
x Replace DOM-based entity decoding with the he.js pure JS
library
x Updated copyright statement
x Updated browser-polyfill.js
x Removed obsolete fastclick.js dependency
x [l10n] Updated de (thanks ib and Musonius)
x Updated TLDs

v 11.1.7
============================================================
x Optimize serviceWorker tracking for heavy tabs usage
  (thanks vadimm and barbaz for investigation)
x Force placeholder visibility on Youtube embeddings
x Fixed popup opening being slowed down if options UI is
  opened (thanks Sirus for report)
x Explicit failure for wrong settings importation formats
x Updated TLDs

v 11.1.7rc3
============================================================
x Updated TLDs
x Optimize serviceWorker tracking for heavy tabs usage
  (thanks vadimm and barbaz for investigation)
x Force placeholder visibility on Youtube embeddings

v 11.1.7rc2
============================================================
x Fixed popup opening being slowed down if options UI is
  opened (thanks Sirus for report)

v 11.1.7rc1
============================================================
x Explicit failure for wrong settings importation formats

v 11.1.6
============================================================
x Better handling of concurrent prompts issues (thanks
  billarbor for reporting)
x Remove z-index boosting from ancestors when placeholder is
  collapsed or replaced (issue #162)
x Fixed permission keyboard shortcuts being triggered with
  modifiers like CTRL (thanks barbaz for report)
x More accurate blockage reporting, with better filtering of
  page's own CSP effects
x [UI] Fixed bug in CUSTOM sites filtering (thanks barbaz
  for reporting)
x Fixed bug in automatic HTML events build-time updates
x Updated HTML events
x Updated TLDs
x [L10n] Updated sv_SE
x Better handling 0 width / 0 height media placeholders

v 11.1.6rc6
============================================================
x Better handling of concurrent prompts issues (thanks
  billarbor for reporting)

v 11.1.6rc5
============================================================
x Remove z-index boosting from ancestors when placeholder is
  collapsed or replaced (issue #162)

v 11.1.6rc4
============================================================
x Fixed permission keyboard shortcuts being triggered with
  modifiers like CTRL (thanks barbaz for report)

v 11.1.6rc3
============================================================
x More accurate blockage reporting, with better filtering of
  page's own CSP effects

v 11.1.6rc2
============================================================
x [UI] Fixed bug in CUSTOM sites filtering (thanks barbaz
  for reporting)
x Fixed bug in automatic HTML events build-time updates
x Updated HTML events
x Updated TLDs

v 11.1.6rc1
============================================================
x Updated TLDs
x [L10n] Updated sv_SE
x Better handling 0 width / 0 height media placeholders

v 11.1.5
============================================================
x Updated TLD
x Fixed potential infinite loop via DOMContentLoaded
x Work-around for Firefox 82 media redirection bug (thanks
  ppxxbu and skriptimaahinen)
x Updated TLDs

v 11.1.5rc2
============================================================
x Updated TLD
x Fixed potential infinite loop via DOMContentLoaded

v 11.1.5rc1
============================================================
x Work-around for Firefox 82 media redirection bug (thanks
  ppxxbu and skriptimaahinen)
x Updated TLDs

v 11.1.4
============================================================
x Fixed sloppy CSP media blocker detection breaking MSE
  blob: media placeholders on Chromium
x Fixed race condition causing temporary settings not to
  survive updates sometimes
x Updated TLDs
x [Mobile] Improved prompts appearance on Android

v 11.1.4rc3
============================================================
x Fixed sloppy CSP media blocker detection breaking MSE
  blob: media placeholders on Chromium

v 11.1.4rc2
============================================================
x Fixed race condition causing temporary settings not to
  survive updates sometimes

v 11.1.4rc1
============================================================
x Updated TLDs
x [Mobile] Improved prompts appearance on Android

v 11.1.3
============================================================
x Fixed regression: document media and font restrictions
  always cascaded (thanks BrainDedd for report)
x Remove domPolicy logging when debugging is off
x Trivial reordering from Mozilla source
x Updated TLDs

v 11.1.1
============================================================
x Updated TLDs
x Better heuristic to figure out missing data while
  computing contextual policies
x Fixed regression breaking per-tab restrictions disablement
  (thanks Horsefly for report)

v 11.1.0
============================================================
x Improved blocking of media documents unaffected by
  webRequest
x Automatically init tag message with last changelog
x Improved NOSCRIPT element emulation compatibility with XML
  documents
x webNavigation.onCommitted + tabs.executeScript to deliver
  DOM policies earlier whenever possible
x Partial work-around for Fx 80 file:// documents parsing
  inconsistencies (further fix for issue #156)
x Cache policy on top document for file:// subdocuments
  (fixes issue #156)
x Enforce more restrictive CSP on media/object documents
x Better cross-browser media handling
x [Mobile] Use tabs as prompts if the browser.windows API is
  missing
x Fix browser UI for image, audio and video content being
  partially broken on file:// URLs
x Normalize file:// directory paths on Firefox
x Allow browser UI scripts for file:// directory navigation
x Updated TLDs
x [L10n] Updated mk

v 11.1.0rc2
============================================================
x Improved blocking of media documents unaffected by
  webRequest
x Automatically init tag message with last changelog

v 11.1.0rc1
============================================================
x Improved NOSCRIPT element emulation compatibility with XML
  documents

v 11.0.47rc6
============================================================
x webNavigation.onCommitted + tabs.executeScript to deliver
  DOM policies earlier whenever possible
x Fixed typo causing CSP-based media blocking to skip
  requests with no content-type header

v 11.0.47rc5
============================================================
x Partial work-around for Fx 80 file:// documents parsing
  inconsistencies (further fix for issue #156)

v 11.0.47rc4
============================================================
x Cache policy on top document for file:// subdocuments
  (fixes issue #156)
x Updated TLDs
x Enforce more restrictive CSP on media/object documents

v 11.0.47rc3
============================================================
x Better cross-browser media handling
x Improved file: directory path normalization

v 11.0.47rc2
============================================================
x [Mobile] Use tabs as prompts if the browser.windows API is
  missing

v 11.0.47rc1
============================================================
x Fix browser UI for image, audio and video content being
  partially broken on file:// URLs
x Normalize file:// directory paths on Firefox
x Allow browser UI scripts for file:// directory navigation
x Updated TLDs
x [L10n] Updated mk

v 11.0.46
============================================================
x Updated TLDs
x [L10n] Updated is
x Fixed file:// and ftp:// specific content scripts not
  runnning in subdocuments
x Fixed deferred scripts in file:// pages may run twice
  (issue #155)
x Fixed rendering bug with scrolled file:// pages on soft
  reload (thanks Iouri for report)
x Fixed 11.0.44 regression: ghost media item reported on
  every page
x Better emulation of SVG events

v 11.0.45rc5
============================================================
x Updated TLDs
x [L10n] Updated is
x Fixed file:// and ftp:// specific content scripts not
  runnning in subdocuments

v 11.0.45rc4
============================================================
x Fixed deferred scripts in file:// pages may run twice
  (issue #155)

v 11.0.45rc3
============================================================
x Fixed rendering bug with scrolled file:// pages on soft
  reload (thanks Iouri for report)

v 11.0.45rc2
============================================================
x Fixed 11.0.44 regression: ghost media item reported on
  every page

v 11.0.45rc1
============================================================
x Better emulation of SVG events

v 11.0.44
============================================================
x Dispatch synthetic SVGLoad event in soft load when needed
x [L10n] Updated da, es
x Fixed namespacing issues with script replacements
x Fixed media placeholder not shown when blocking Youtube
  movies
x Work around for unpredictable content script execution
  order
x Ensure content of NoScript prompts is always visible
x Fixed soft reload messing with non UTF-8 encodings (thanks
  "Quest" for reporting)
x Updated TLDs
x [XSS] Fixed escape detection bug causing strage false
  positives (thanks Dave Howorth for report)

v 11.0.44rc7
============================================================
x Better reflect event firing order in soft reload emulation

v 11.0.44rc6
============================================================
x [L10n] Updated da
x Dispatch synthetic SVGLoad event in soft load when needed

v 11.0.44rc5
============================================================
x Fixed typo

v 11.0.44rc4
============================================================
x Fixed namespacing issues with script replacements
x Fixed typo in content script ordering work-around

v 11.0.44rc3
============================================================
x Fixed media placeholder not shown when blocking Youtube
  movies
x Work around for unpredictable content script execution
  order
x Ensure content of NoScript prompts is always visible

v 11.0.44rc2
============================================================
x Fixed soft reload messing with non UTF-8 encodings (thanks
  "Quest" for reporting)

v 11.0.44rc1
============================================================
x Updated TLDs
x [L10n] Updated es
x [XSS] Fixed escape detection bug causing strage false
  positives (thanks Dave Howorth for report)
x Fixed markup typo

v 11.0.43
============================================================
x Fix for some race conditions causing corruptions in
  non-HTML non-XML documents

v 11.0.42
============================================================
x Avoid useless "seen" reports from onBeforeRequest()
x Catch broadcast messaging errors
x Make build.sh tag push even already created tags
x Updated TLDsm
x Work-around for applying DOM CSP to non-HTML XML documents
  (thanks skriptimaahinen)
x Document freezing to handle SVG and other XML documents
  as a fallback before CSP insertion
x Refactored and improved syncFetchPolicy fallback for file:
  and ftp: special cases

v 11.0.42rc8
============================================================
x Avoid useless "seen" reports from onBeforeRequest()
x Catch broadcast messaging errors
x Make build.sh tag push even already created tags

v 11.0.42rc7
============================================================
x Updated TLDs
x Let injected CSP prevent onload events from firing on
  unfrozen embedded elements
x Work-around for applying DOM CSP to non-HTML XML documents
  (thanks skriptimaahinen)

v 11.0.42rc6
============================================================
x Document freezing to handle SVG and other XML documents
  impervious to CSP on Mozilla

v 11.0.42rc5
============================================================
x Skip soft reload if not needed

v 11.0.42rc4
============================================================
x XML-compatible soft reload

v 11.0.42rc3
============================================================
x "Soft reload" approach to fix file: and ftp: issues

v 11.0.42rc2
============================================================
x SyncMessage suspending on DOMContentLoaded
x Updated TLDs

v 11.0.42rc1
============================================================
x Refactored and improved syncFetchPolicy fallback for file:
  and ftp: special cases

v 11.0.41
============================================================
x More precise event suppression mechanism
x Fixed regression: events suppressed on file:// pages
  unless scripts are allowed
x Updated TLDs

v 11.0.41rc2
============================================================
x More precise event suppression mechanism

v 11.0.41rc1
============================================================
x Fixed regression: events suppressed on file:// pages
  unless scripts are allowed
x Updated TLDs

v 11.0.40
============================================================
x Avoid synchronous policy fetching whenever possible
  (fixes multiple issues)

v 11.0.40rc2
============================================================
x Avoid synchronous policy fetching whenever possible

v 11.0.40rc1
============================================================
x Handle edge case in file:// pages: policy change and
  reload before DOMContentLoaded

v 11.0.39
============================================================
x Fix reload loops on broken file: HTML documents (thanks
  bernie for report)
x [XSS] Updated HTML event attributes
x Local policy fallback for file: and ftp: URLs using
  window.name rather than sessionStorage
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Added "Revoke temporary permissions on NoScript updates,
   even if the browser is not restarted" advanced option
x Let temporary permissions survive NoScript updates
  (shameless hack)
x Fixed some traps around Messages abstraction
x Ignore search / hash on policy matching of domain-less
  URLs (e.g. file:///...)
x Updated TLDs
x Fixed automatic scrolling hampers usability on long sites
  lists in popup
x Better timing for event attributes removal/restore
x Work-arounds for edge cases in synchronous page loads
  bypassing webRequest (thanks skriptimaahinen)

v 11.0.39rc8
============================================================
x Several hacks to make non-distruptive updates compatible
  with Chromium
x Tighten localPolicy persistence mechanism during reloads

v 11.0.39rc7
============================================================
x Temporary settings survival more resilient and compatible
  with Fenix
x [L10n] Updated es

v 11.0.39rc6
============================================================
x Fix reload loops on broken file: HTML documents (thanks
  bernie for report)
x [XSS] Updated HTML event attributes

v 11.0.39rc5
============================================================
x Local policy fallback for file: and ftp: URLs using
  window.name rather than sessionStorage
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Renamed option to "Revoke temporary permissions on
  NoScript updates, even if the browser is not restarted"

v 11.0.39rc4
============================================================
x Added option to forget temporary settings immediately
  whenever NoScript gets updated
x Fixed regression: file:/// URLs reloaded whenever NoScript
  gets reinstalled / enabled / reloaded
x More resilient and easy to debug survival data retrieving

v 11.0.39rc3
============================================================
x Fixed regression causing manual NoScript downgrades to be
  delayed until manual restart

v 11.0.39rc2
============================================================
x Let temporary permissions survive NoScript updates
  (shameless hack)
x Fixed some traps around Messages abstraction
x Ignore search / hash on policy matching of domain-less
  URLs (e.g. file:///...)
x Removed useless CSS property
x Updated TLDs

v 11.0.39rc1
============================================================
x Updated TLDs
x Fixed automatic scrolling hampers usability on long sites
  lists in popup
x Fixed typo in vendor-prefixed CSS

v 11.0.38rc2
============================================================
x Better timing for event attributes removal/restore

v 11.0.38rc1
============================================================
x Work-arounds for edge cases in synchronous page loads
  bypassing webRequest (thanks skriptimaahinen)
x [L10n] Updated bn

v 11.0.38
============================================================
x Better timing for event attributes removal/restore
x Work-arounds for edge cases in synchronous page loads
  bypassing webRequest (thanks skriptimaahinen)
x [L10n] Updated bn

v 11.0.38rc2
============================================================
x Better timing for event attributes removal/restore

v 11.0.38rc1
============================================================
x Work-arounds for edge cases in synchronous page loads
  bypassing webRequest (thanks skriptimaahinen)
x [L10n] Updated bn

v 11.0.37
============================================================
x Simpler and more reliable sendSyncMessage implementation
  and usage
x sendSyncMessage support for multiple suspension requests
  (should fix extension script injection issues)
x Updated TLDs

v 11.0.37rc3
============================================================
x Simpler and more reliable sendSyncMessage implementation
  and usage
x Updated TLDs

v 11.0.37rc2
============================================================
x SyncMessage suspending on DOM modification as well
x Updated TLDs

v 11.0.37rc1
============================================================
x Updated TLDs
x sendSyncMessage support for multiple suspension requests
  (should fix extension script injection issues)

v 11.0.36
============================================================
x Fixed regression: temporary permissions revocation not
  working anymore on privileged pages
x SendSyncMessage script execution safety net more
  compatible with other extensions (e.g. BlockTube)

v 11.0.35
============================================================
x Avoid unnecessary reloads on temporary permissions
  revocation
x [UI] Removed accidental cyan background for site labels
x [L10n] Updated es
x Work-around for conflict with extensions inserting
  elements into content pages' DOM early
x [XSS] Updated HTML events
x Updated TLDs
x Fixed buggy policy references in the Options dialog
x More accurate NOSCRIPT element emulation
x Anticipate onScriptDisabled surrogates to first script-src
  'none' CSP violation
x isTrusted checks for all the content events
x Improved look in mobile portrait mode
x Let SyncMessage prevent undesired script execution
  scheduled during suspension

v 11.0.35rc4
============================================================
x Avoid unnecessary reloads on temporary permissions
  revocation
x Fixed potentially infinite loop in SyncMessage Firefox
  implementation
x [UI] Removed accidental cyan background for site labels
x [L10n] Updated es

v 11.0.35rc3
============================================================
x Work-around for conflict with extensions inserting
  elements into content pages' DOM early
x [XSS] Updated HTML events

v 11.0.35rc2
============================================================
x Updated TLDs
x Fixed buggy policy references in the Options dialog
x More accurate NOSCRIPT element emulation
x Anticipate onScriptDisabled surrogates to first script-src
  'none' CSP violation
x isTrusted checks for all the content events
x Improved look in mobile portrait mode

v 11.0.35rc1
============================================================
x Let SyncMessage prevent undesired script execution
  scheduled during suspension

v 11.0.34
============================================================
x Fixed regression breaking network-based CSP injection

v 11.0.33
============================================================
x Switch from HTTP to DOM event based CSP reporting in
  compatible browsers
x [XSS] Updated HTML event attributes
x Updated TLDs

v 11.0.32
============================================================
x [L10n] Updated it, mk, sv_SE
x Fixed setting CUSTOM permissions in private mode may cause
  the TRUSTED preset to become temporary
x Updated TLDs
x [XSS] Updated HTML 5 events support
x More compact high contrast appearance

v 11.0.31
============================================================
x Focus "OK" button on dialog-mode UI
x Fixed various toolbar buttons DnD issues
x Updated TLDs
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Fixed very low contrast HTTPS-only label in High Contrast
  mode

v 11.0.31rc2
============================================================
x Focus "OK" button on dialog-mode UI
x [L10n] Updated da
x Fixed various toolbar buttons DnD graphic issues
x Updated TLDs

v 11.0.31rc1
============================================================
x [L10n] Updated bn, br, ca, da, de, el, es, fr, he, is, it,
  ja, lt, mk, ms, nb, nl, pl, pt_BR, ru, sq, sv_SE, tr,
  zh_CN, zh_TW
x Fixed very low contrast HTTPS-only label in High Contrast
  mode
x More precise DnD of toolbar buttons + work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=568313

v 11.0.30
============================================================
x Discoverable option to force site-leaking UI in
  PBM/Incognito
x [L10n] Updated he
x Easier keyboard navigation of preset configuration
x Yellow-less UI palette

v 11.0.29
============================================================
x Consistent focus appearance across desktop and mobile
x Fixed regression on Firefox 68 for Android: UI cannot be
  closed (thanks swalchko for report)

v 11.0.28
============================================================
x Don't enforce Incognito UI restrictions if the "Override
  Tor Browser Security Level preset" option is checked
x Incognito-aware permissions persistence and UI
  (https://trac.torproject.org/projects/tor/ticket/29957)
x Removed inline preset options relics
x Reset non-secure site matches to DEFAULT unless setting
  UNTRUSTED to avoid confusion on preset changes
x [A11y] Keyboard-based UI navigation
x Updated TLDs
x Work-around Gecko 77 cached CSP issues (thanks acat for
  https://trac.torproject.org/projects/tor/ticket/34305)

v 11.0.27rc6
============================================================
x Don't enforce Incognito UI restrictions if the "Override
  Tor Browser Security Level preset" option is checked

v 11.0.27rc5
============================================================
x Enter key closes the popup also while editing the CUSTOM
  preset
x Incognito-aware permissions persistence and UI
  (https://trac.torproject.org/projects/tor/ticket/29957)
x Removed inline preset options relics

v 11.0.27rc4
============================================================
x Fixed first capability checkbox accidentally "clicked"
  when opening CUSTOM by space bar
x [A11y] Keyboard accelerators for toolbar buttons

v 11.0.27rc3
============================================================
x Further keyboard UI accelerators
x Reset non-secure site matches to DEFAULT unless setting
  UNTRUSTED to avoid confusion on preset changes

v 11.0.27rc2
============================================================
x [A11y] Keyboard-based UI navigation
x Updated TLDs
x Unspoofable browser version detection

v 11.0.27rc1
============================================================
x Updated TLDs
x Work-around Gecko 77 cached CSP issues (thanks acat for
  reporting https://trac.torproject.org/projects/tor/ticket/34305)
x Remove active preset hilight at least until keyboard
  navigation is fixed

v 11.0.26
============================================================
x UI adjustments for better mobile experience (thanks Bram
  Pitoyo for suggestions)
x Updated HTML 5 events archive
x Updated TLDs
x Fixed hard reload needed after releasing restrictions
  (regression on Firefox Beta)
x Fixed 3rd party scripts blocking regression on Firefox
  Trunk due to XBL removal (thanks guardao for reporting)
x Fixed typo in unused yet code

v 11.0.26rc2
============================================================
x UI adjustments for better mobile experience (thanks Bram
  Pitoyo for suggestions)

v 11.0.26rc1
============================================================
x Updated HTML 5 events archive
x Updated TLDs
x Fixed hard reload needed after releasing restrictions
  (regression on Firefox Beta)
x Fixed 3rd party scripts blocking regression on Firefox
  Trunk due to XBL removal (thanks guardao for reporting)
x Fixed typo in unused yet code

v 11.0.25
============================================================
x [XSS] Fixed false positives and timeouts (thanks riaggren
  for report)

v 11.0.24
============================================================
x Fixed SoundCloud login broken by NoScript being enabled
x [XSS] Updated HTML5 events
x Updated TLDs

v 11.0.23
============================================================
x Updated TLDs
x Further refresh syntax parsing leniency (thanks
  insertscript)

v 11.0.22
============================================================
x Updated TLDs
x [L10n] Updated he
x Uniform refresh url matching across HTTP and DOM checks
  (thanks insertscript)

v 11.0.21
============================================================
x Fixed URL matching regexp (thanks insertscript)

v 11.0.20
============================================================
x More aggressive blocking for data: refresh attempts
  (thanks insertscript)

v 11.0.19
============================================================
x Prevent ANY redirection to data: URIs in (thanks
  insertscript for reporting)

v 11.0.18
============================================================
x Automated "Updated TLDs" commit
x Updated TLDs
x Apply "font-family: Inter" to the mobile stylesheet only
x Support synonims for "release"

v 11.0.17
============================================================
x Updated TLDs
x Force CSP inheritance for redirections to data: URIs on
  Gecko pre-69
x Added CSS reference to Inter font to improve UI look on
  Fenix

v 11.0.15
============================================================
x Fixed CapsCSP bug allowing data: URLs to bypass font
  blocking (thanks dcent and skriptimaahinen)
x [XSS] Prevent DOS detection from being triggered for
  already aborted requests (thanks barbaz)
x [L10n] Updated es and added bn
x [XSS] More accurate base64 checks on hash
x Updated TLDs
x Minor adjustments for Firefox Preview (Fenix)
  compatibility
x Refactored XSS filter into an asynchronous worker to
  better handle DOS attempts
x [XSS] Abort on InjectionChecker timeouts
x [XSS] Updated recognized HTML events
x Fixed autoreload after popup closing broken on Vivaldi

v 11.0.15rc1
============================================================
x Fixed CapsCSP bug allowing data: URLs to bypass font
  blocking (thanks dcent and skriptimaahinen)
x [XSS] Prevent DOS detection from being triggered for
  already aborted requests (thanks barbaz)

v 11.0.14rc1
============================================================
x [L10n] Updated es and added bn
x [XSS] More accurate base64 checks on hash
x Updated TLDs
x Minor adjustments for Firefox Preview (Fenix)
  compatibility
x Refactored XSS filter into an asynchronous worker to
  better handle DOS attempts
x [XSS] Abort on InjectionChecker timeouts
x [XSS] Updated recognized HTML events
x Fixed autoreload after popup closing broken on Vivaldi

v 11.0.13
============================================================
x [Chromium] Fix SyncMessage broken by feature-policy
  headers
x Remove "application" manifest.json key from Chromium
  packages

v 11.0.12
============================================================
x [L10n] Updated ru
x Unrestricted tab support for service workers and their
  included 3rd party scripts
x Record document origins in TabStatus
x Support for reporting service workers and their imported
  scripts in UI
x Cross-browser request properties normalization
x Updated TLDs
x Fixed initial requst URL lost across redirections
x Updated copyright statement
x Fixed settings export button broken on Vivaldi (issue
  #124)
x Fixed UNTRUSTED domains accidentally set in "match HTTPS
  only" mode (issue #126)

v 11.0.12rc2
============================================================
x [L10n] Updated ru
x Unrestricted tab support for service workers and their
  included 3rd party scripts
x Record document origins in TabStatus
x Support for reporting service workers and their imported
  scripts in UI
x Cross-browser request properties normalization
x Updated TLDs
x Fixed initial requst URL lost across redirections
x Updated copyright statement
x Fixed settings export button broken on Vivaldi (issue
  #124)

v 11.0.12rc1
============================================================
x Fixed UNTRUSTED domains accidentally set in "match HTTPS
  only" mode (issue #126)

v 11.0.11
============================================================
x [L10n] Updated da, de, fr, he, it, mk, nl, ru, sq, tr,
  zh_TW
x Fixed UI not working on pages were sessionStorage
  is disabled
x Updated TLDs
x Added "ping" (beacon/ping) capability control

v 11.0.11rc2
============================================================
x [L10n] Updated da, de, fr, he, it, mk, nl, ru, sq, tr,
  zh_TW
x Fixed UI not working on pages were sessionStorage is
  disabled

v 11.0.11rc1
============================================================
x Updated TLDs
x Added "ping" (beacon/ping) capability control
v 11.0.10
============================================================
x [Chromium] Fixed no permissions given on first page load
  in a session
x Order change in html5 events source
x Updated TLDs
x Removed unused "privacy" permission
x Fixed shortcut and context menu doing nothing unless
  browserAction icon is visible on Firefox (issue 58)
x [L10n] Updated de, fr, he, nl, tr
x Updated TLDs
x Fix minor typo regarding appearance redundancy (issue 61)
x Fixed scripts could not be enabled on file: SVG documents

v 11.0.10rc3
============================================================
x [Chromium] Fixed no permissions given on first page load
  in a session
x Order change in html5 events source
x Updated TLDs
x Removed unused "privacy" permission

v 11.0.10rc2
============================================================
x Fixed shortcut and context menu doing nothing unless
  browserAction icon is visible on Firefox (issue 58)
x [L10n] Updated de, fr, he, nl, tr
x Updated TLDs
x Fix minor typo regarding appearance redundancy (issue 61)

v 11.0.10rc1
============================================================
x Updated TLDs
x Fixed scripts could not be enabled on file: SVG documents

v 11.0.9
============================================================
x [Chromium] Prevent duplicated MSE placeholders (e.g. on
  Youtube)
x Fixed external scripts included in HEAD of file:// pages
  failing (issue #115)
x [XSS] Updated HTML 5 events inventory
x Best effort to make media placeholders visible and
  clickable
x Placeholders for MSE on Chromium too
x Use invalid IP rather than domain name to prevent offline
  status from breaking sync messaging in Chromium
x Removed empty exportFunction() Chromium shim
x Updated TLDs

v 11.0.9rc2
============================================================
x [Chromium] Prevent duplicated MSE placeholders (e.g. on
  Youtube)
x Updated TLDs
x Fixed external scripts included in HEAD of file:// pages
  failing (issue #115)

v 11.0.9rc1
============================================================
x [XSS] Updated HTML 5 events inventory
x Best effort to make media placeholders visible and
  clickable
x Placeholders for MSE on Chromium too
x Use invalid IP rather than domain name to prevent offline
  status from breaking sync messaging in Chromium
x Removed empty exportFunction() Chromium shim
x Updated TLDs

v 11.0.8
============================================================
x [L10n] Updated da, ja, lt, mk, nl
x Fixed onionSecure setting persistence issue (Tor ticket
  #32362)
x Fixed CSP DOM injection breaking XML documents rendering

v 11.0.7
============================================================
x Use fragments to reinsert and run previously blocked
  scripts
x Fetch policies asynchronously for about: and javascript:
  URLs
x Remove loop around XHR

v 11.0.6
============================================================
x Compute the correct origin for the policy to be fetched
  from about:blank and javascript: URLs
x Work-around for Youtube video elements positioned
  off-display at replacement time
x Version numbers for Chromium dev builds compatible with
  Chromestore requirements
x Script blocking before policy is fetched only for
  synchronous loads
x Make tests not to run automatically on dev mode startup
  anymore

v 11.0.6rc3
============================================================
x Compute the correct origin for the policy to be fetched
  from about:blank and javascript: URLs
x Work-around for Youtube video elements positioned
  off-display at replacement time
x Version numbers for Chromium dev builds compatible with
  Chromestore requirements

v 11.0.6rc2
============================================================
x Script blocking before policy is fetched only for
  synchronous loads

v 11.0.6rc1
============================================================
x Fixed bug in policy fetching
x Make tests not to run automatically on dev mode startup
  anymore

v 11.0.5
============================================================
x Use pseudo-sync messaging to fetch policies for non-HTTP
  page loads only
x Updated TLDs

v 11.0.5rc3
============================================================
x Use pseudo-sync messaging to fetch policies for non-HTTP
  page loads only

v 11.0.5rc2
============================================================
x On Chrome limit SyncMessage usage to non-HTTP urls
x Updated TLDs

v 11.0.5rc1
============================================================
x Use semi-synchronous mode to fetch policies
x Semi-synchronous mode to avoid HEAD element insertion
  issues causing some userscripts to fail
x Updated public suffix list

v 11.0.4
============================================================
x [Tor] Treat .onion sites whose protocol is HTTP as if it
  was HTTPS
x [Mobile] Blocked scripts count displayed in the browser
  action menu item
x Consolidated missing endpoint error detection in Messages
x More compatible Messages abstraction
x Progressive count of debug messages to better trace
  asynchronous execution
x [XSS] Fixed false positive (property assignment)
x Fixed typo causing initializing promise not being cached
x Avoid unnecessary page reloads on extension updates
x Fixed undefined variable error when in debugging mode
x [Tor] Display .onion sites as "secure" in the UI (tickets
  #27313 and #27307)
x Support for splitting sync storage items into chunks, to
  allow synchronization of big policies across devices
x IPv4 subnet shortcut matching
x Fallback to local storage for any item exceeding limits
  (fixes persistence problems on Chromium)
x Alternate version numbering for Chromium pre-releases
x Simplified, less noisy and more resilient Messages
  abstraction implementation (thanks barbaz for reporting)
x Handle edge-case policy retrieval for file:// pages loaded
  by session restore on startup and alike
x Improved Chromium development-build workflow
x Fix CSP violation reporting management of "fake"
  blocked-uri like "eval"
x Recursive webgl context monkeypatching across same origin
  windows (thanks skriptimaahinen for concept and patch)
x Replaced cookie-based hacks with synchronous messaging
  (currently shimmed) to retrieve fallback and
  per-tab restriction policies
x Work-around for Chromium not supporting frameAncestors
  in webRequest
x [L10n] Updated Transifex-managed ca, da, it, nl, ru, sv_SE
x [XSS] Updated HTML5 events
x Updated TLDs
x Fixed "Cascade top document restrictions" option not always
  applied to embedded elements (thanks barbaz for reporting)
x Removed XSS prompt for timeouts

v 11.0.4rc15
============================================================
x [Tor] Treat .onion sites whose protocol is HTTP as if it
  was HTTPS

v 11.0.4rc14
============================================================
x More precise and verbose fallbacks for policy retrieval
  timing issues
x [Mobile] Blocked scripts count displayed in the browser
  action menu item
x Consolidated missing endpoint error detection in Messages
x Cleaner and tighter usage of SyncMessage to fetch policies
x Fixed bug in chunked storage causing shrunk items not to
  be retrieved correctly
x Use asyncrhonous messages to deliver SyncMessage payloads
  on Firefox
x More compatible Messages abstraction
x Progressive count of debug messages to better trace
  asynchronous execution
x [XSS] Fixed false positive (property assignment)

v 11.0.4rc13
============================================================
x More robust SyncMessage implementation coping with XHR
  suspension inconsistencies on Firefox

v 11.0.4rc12
============================================================
x [L10n] Updated nl
x Policy fetching asynchronous only before initialization
x Support for safe asynchronous page loading without
  fallback reloads
x Fixed asynchronous onSyncMessage listeners support, on
  Chromium too
x Fixed typo causing initializing promise not being cached
x Avoid unnecessary page reloads on extension updates
x Fixed undefined variable error when in debugging mode

v 11.0.4rc11
============================================================
x [Tor] Display .onion sites as "secure" in the UI (tickets
  #27313 and #27307)
x Fixed typo causing Chromium builds not to be created in
  the XPI directory

v 11.0.4rc10
============================================================
x Support for splitting sync storage items into chunks, to
  allow synchronization of big policies across devices
x [L10n] Updated ca, nl
x Overwrite Chromium zip on reiterated builds

v 11.0.4rc9
============================================================
x IPv4 subnet shortcut matching

v 11.0.4rc8
============================================================
x Fallback to local storage for any item exceeding limits
  (fixes persistence problems on Chromium)
x Alternate version numbering for Chromium pre-releases
x [L10n] Updated nl

v 11.0.4rc7
============================================================
x Prevent startup tabs from remaining stuck with about:blank

v 11.0.4rc6
============================================================
x Fix Chromium dev builds failing when signing Firefox
  extension
x Prevent startup race conditions breaking pinned tabs
  sometimes

v 11.0.4rc5
============================================================
x Make extra efforts to ensure safety net reloads happen
  only once on startup

v 11.0.4rc4
============================================================
x SyncMessage support for asynchronous listeners
x Simplified, less noisy and more resilient Messages
  abstraction implementation (thanks barbaz for reporting)
x Handle edge-case policy retrieval for file:// pages loaded
  by session restore on startup and alike
x Improved Chromium development-build workflow

v 11.0.4rc3
============================================================
x Make policy fetching resilient to missing tab information
x More verbose error logging while processing syncMessage
  listeners
x Fix CSP violation reporting management of "fake"
  blocked-uri like "eval"
x Leaner and faster SyncMessage shim tab id tracking hack
  for Firefox

v 11.0.4rc2
=============================================================
x Recursive webgl context monkeypatching across same origin
  windows (thanks skriptimaahinen for concept and patch)
x Replaced cookie-based hacks with synchronous messaging
  (currently shimmed) to retrieve fallback and
  per-tab restriction policies
x Work-around for Chromium not supporting frameAncestors
  in webRequest
x Block CSP violation reports requests synchronously,
x  before they fail on .invalid DNS resolution, on Chromium

v 11.0.4rc1
=============================================================
x [L10n] Updated Transifex-managed da, it, nl, ru, sv_SE
x [XSS] Updated HTML5 events
x Updated TLDs
x Fixed "Cascade top document restrictions" option not always
  applied to embedded elements (thanks barbaz for reporting)
x Removed XSS prompt for timeouts

v 11.0.3
=============================================================
x [Tor] Work-around for prompts being huge when
  resistFingerprinting is enabled
x [XSS] Fixed false positives due to overzealous HTML
  attribute checking
x [XSS] Enabled InjectionChecker logging when debugging mode
  is on
x Work-around for browser.i18n.getMessage() API in content
  scripts giving away browser's real locale (Tor issue #31287)
x Updated TLDs
x [L10n] Updated Transifex-managed he, is, nb, ru, sq, zh_TW

v 11.0.3rc3
=============================================================
x Updated TLDs
x [L10n] Updated Transifex-managed he, is, nb, ru, sq, zh_TW

v 11.0.3rc2
=============================================================
x [Tor] Work-around for prompts being huge when
  resistFingerprinting is enabled
x [XSS] Fixed false positives due to overzealous HTML
  attribute checking
x [XSS] Enabled InjectionChecker logging when debugging mode
  is on

v 11.0.3rc1
=============================================================
x Updated TLDs
x Work-around for browser.i18n.getMessage() API in content
  scripts giving away browser's real locale (Tor issue #31287)

v 11.0.2
=============================================================
+ Restored "classic" pasted HTML sanitization feature, Now
  triggered by drag'n'drop too (thanks barbaz for patch)
x Fixed bug in browser type detection by content scripts (
  thanks barbaz)
+ Added "Collapse blocked objects" option in Blocked Objects
  prompt
x Fixed corner case when application/* content types should
  match "media" rather than "object" (thanks skriptimaahinen
  for reporting)
x Replacement clicks are now intercepted even if a content
  placeholder is obstructed by an overlay
x More graceful handling of chrome: origins (thanks
  skriptimaahinen for reporting)
x CSP building optimizations
x Updated TLDs.
x [L10n] Updated Transifex-managed locales br, de, it, ms,
  nl, ru, tr, nb, sv_SE and zh_CN

v 11.0.2rc2
=============================================================
x Updated TLDs.
x [L10n] Updated Transifex-managed locales br, de, it, ms,
  nl, ru, tr
x Fixed bug in browser type detection by content scripts (
  thanks barbaz)
x Fixed paste sanitization bugs and make it work on drag and
  drop too (thanks barbaz)

v 11.0.2rc1
=============================================================
+ Restored "classic" pasted HTML sanitization feature (thanks
  barbaz for patch)
+ Added "Collapse blocked objects" option in Blocked Objects
  prompt
x Fixed corner case when application/* content types should
  match "media" rather than "object" (thanks skriptimaahinen
  for reporting)
x Replacement clicks are now intercepted even if a content
  placeholder is obstructed by an overlay
x More graceful handling of chrome: origins (thanks
  skriptimaahinen for reporting)
x CSP building optimizations
x [L10n] Updated Transifex-managed nb, sv_SE and zh_CN
  x Updated TLDs

v 11.0
=============================================================
x [XSS] Fixed false positives with parameters named "src"
x Static click-to-play placeholders
+ [L10n] New da, is, pl, sq, zh_TW Transifex-managed locales
x [L10n] Updated sv_SE Transifex-managed locale

v 10.6.3
=============================================================
x Multiple fixes in embeddings replacement (thanks barbaz
  for reporting)
x Fixed [Import] settings button on Android
x [XSS] JSON reduction optimizations
x [XSS] XSS checks performance improvements play nicer with
  resistFingerprinting
x [XSS] Fully asynchronous InjectionChecker, prevents freezes
  on heavy payloads
x Skip page autoreloads on transitions between temporary and
  permanent presets of the same kind
x Updated TLDs

v 10.6.3rc8
=============================================================
x Multiple fixes in embeddings replacement (thanks barbaz
  for reporting)
x Updated TLDs

v 10.6.3rc7
=============================================================
x Further work-around for [Import] settings button
  inconsistencies on Android
x Updated TLDs

v 10.6.3rc6
=============================================================
x Fixed [Import] settings button on Android

v 10.6.3rc5
=============================================================
x [XSS] JSON reduction optimizations

v 10.6.3rc4
=============================================================
x [XSS] XSS checks performance improvements play nicer with
  resistFingerprinting

v 10.6.3rc3
=============================================================
x [XSS] Fully asynchronous InjectionChecker, prevents freezes
  on heavy payloads

v 10.6.3rc2
=============================================================
x More accurate algorithm to account for permissions changes
  in the UI triggering automatic reloads.

v 10.6.3rc1
=============================================================
x Skip page autoreloads on transitions between temporary and
  permanent presets of the same kind
x Updated TLDs

v 10.6.2
=============================================================
x Removed work-around for https://bugzil.la/1532530 (now
  fixed and backported to the Tor Browser too)
x Fixed media.mediasource.enabled breakage (thanks
  skriptimaahinen for patch)
x Reference internal pages as absolute URLs for Chromium
  compatibility
x Updated TLDs
x [Locale] Updated Transifex-managed locales (es, ms, tr)

v 10.6.2rc2
=============================================================
x Removed work-around for https://bugzil.la/1532530 (now
  fixed and backported to the Tor Browser too)

v 10.6.2rc1
=============================================================
x Fixed media.mediasource.enabled breakage (thanks
  skriptimaahinen for patch)
x Reference internal pages as absolute URLs for Chromium
  compatibility
x Updated TLDs
x [Locale] Updated Transifex-managed locales (es, ms, tr)

v 10.6.1
=============================================================
x Make RequestGuard's header processing synchronous as needed
x Fixed inconsistencies handling browser-internal URLs
x Fixed resetting options works just once per session
  (defaults reference current settings) - issue #69
x [Locale] Updated Transifex-managed locales (de, fr, it, tr,
  nl)

v 10.6
=============================================================
x Limit wrappedJSObject usages to compatible browsers
x [Chromium] Merged chromium branch (unified code base)
x [Locale] Updated Transifex-managed locales
x Updated TLDs

v 10.6rc2
=============================================================
x Limit wrappedJSObject usages to compatible browsers

v 10.6rc1
=============================================================
x [Chromium] Merged chromium branch (unified code base)
x [Locale] Updated Transifex-managed locales
x Updated TLDs

v 10.2.5
=============================================================
x [XSS] Improved detection of privileged origins (fixes an
  about:tor to DuckDuckGo false positive)

v 10.2.4
=============================================================
x Improved prompts layout (thanks Ton for suggestion)
x Improved unscanned POST blocking

v 10.2.3
=============================================================
x [l10n] Updated Transifex-managed locales
x Fixed POST searches from the url bar causing XSS warnings
x Fixed popup top buttons not visible in high contrast
  appearance mode (thanks pjaworski for reporting)
x Optimized popup layout initialization

v 10.2.3rc3
=============================================================
x [l10n] Updated Transifex-managed locales

v 10.2.3rc2
=============================================================
x Fixed POST searches from the url bar causing XSS warnings

v 10.2.3rc1
=============================================================
x Fixed popup top buttons not visible in high contrast
  appearance mode (thanks pjaworski for reporting)
x Optimized popup layout initialization

v 10.2.2
=============================================================
x [L10n] Updated Transifex-managed locales
+ Cascading top document's restrictions to subdocuments is now
  an option in the General section and defaults to true on
  the Tor Browser only
+ "Scan uploads for potential cross-site attacks" and "Ask
  confirmation for cross-site POST requests which could not
  be scanned" options: in Tor Browser default false and true,
  respectively, as a work-around for mozbug 1532530
+ [Tor] "Override Tor Browser Security Level preset" option
+ [Tor] Selective handling of Tor Browser specific settings
x Updated TLDs
x [XSS] Updated event names
x Safer cookie-less check for unrestricted tabs from subdocs
x [Build] Easier version bumps to next rc (build.sh bump rcX)
x Fixed unrestricted tabs not affecting about:blank subframes
  (issue #48, thanks musonius for reporting)
x [XSS] Updated known HTML events lists
+ [Locale] Added sv_SE (by Jonatan Nyberg)

v 10.2.2rc5
=============================================================
x [L10n] Updated Transifex-managed locales

v 10.2.2rc4
=============================================================
+ Cascading top document's restrictions to subdocuments is now
  an option in the General section and defaults to true on
  the Tor Browser only

v 10.2.2rc3
=============================================================
+ "Scan uploads for potential cross-site attacks" and "Ask
  confirmation for cross-site POST requests which could not
  be scanned" options: in Tor Browser default false and true,
  respectively, as a work-around for mozbug 1532530
+ [Tor] "Override Tor Browser Security Level preset" option
+ [Tor] Selective handling of Tor Browser specific settings
x Updated TLDs
x [XSS] Updated event names

v 10.2.2rc2
=============================================================
x Safer cookie-less check for unrestricted tabs from subdocs
x [Build] Easier version bumps to next rc (build.sh bump rcX)

v 10.2.2rc1
=============================================================
x Fixed unrestricted tabs not affecting about:blank subframes
  (issue #48, thanks musonius for reporting)
x [XSS] Updated known HTML events lists
+ [Locale] Added sv_SE (by Jonatan Nyberg)

v 10.2.1
=============================================================
x Cascade top document's restrictions to subframes (Tor
  issue #28873)
x Fixed restored media element from placeholder not loading
  previously blocked content automatically
x Fixed placeholders missing for some blocked embeddings
  (Tor ticket #28720)

v 10.2.1rc3
=============================================================
x Cascade top document's restrictions to subframes (Tor
  issue #28873)

v 10.2.1rc2
=============================================================
x Fixed restored media element from placeholder not loading
  previously blocked content automatically

v 10.2.1rc1
=============================================================
x Fixed placeholders missing for some blocked embeddings
  (Tor ticket #28720)

v 10.2.0
============================================================
x [L10n] Updated fr, he
x Allow origin-less fetch for extensions (issue #41)
x Fixed meta refresh inside NOSCRIPT emulation breaking
  Firefox's built-in refresh blocking
x Fixed issue #35 "tabId is not defined" on startup
x Darker red badge background to ensure text is kept white
  across browsers

v 10.2rc2
============================================================
x Limit fix for issue #41 to origin-less fetch (excluding
  frames)
x [L10n] Updated fr, he

v 10.2rc1
=============================================================
x Allow extensions to perform origin-less fetching and
  framing (issue #41)
x Fixed meta refresh inside NOSCRIPT emulation breaking
  Firefox's built-in refresh blocking
x Fixed issue #35 "tabId is not defined" on startup
x Darker red badge background to ensure text is kept white
  across browsers

v 10.1.9.9
=============================================================
x Prevention of potential race condition in the new  per-tab
  configuration cookie-based hack
x Better cross-platfrom build script compatibility
x Per-tab configuration cookie-based hack, leaves window.name
  alone
x Various build scripts fixes

v 10.1.9.9rc2
=============================================================
x Prevention of potential race condition in the new  per-tab
  configuration cookie-based hack
x Better cross-platfrom build script compatibility

v 10.1.9.9rc1
=============================================================
x Per-tab configuration cookie-based hack, leaves window.name
  alone
x Various build scripts fixes

v 10.1.9.8
=============================================================
x Fixed preset customization UI showing inherited DEFAULT
  permissions if a protocol-level preset exists
x Simplified CSP HTTP header injection, avoiding report-to
  until actually supported by browsers
x [L10n] Updated ru (thanks fatboy)
+ [Tor] Better UX for overriding protocol-level permissions
+ [Build] Option to force TLD updates
+ [L10n] Updated (es, ru) and new (el, he, ms, nb) locales
  from OTF's Localization Lab Transifex project
+ [L10n] no_BO translation by comradekingu
+ FTP directory UI emulation on script-disabled domains
x Include ftp:// URLs in non-secure domain matching (thanks
  Rassilon for RFE)

v 10.1.9.7rc3
=============================================================
x Fixed preset customization UI showing inherited DEFAULT
  permissions if a protocol-level preset exists
x Simplified CSP HTTP header injection, avoiding report-to
  until actually supported by browsers
x [L10n] Updated ru (thanks fatboy)

v 10.1.9.7rc2
=============================================================
+ [Tor] Better UX for overriding protocol-level permissions
+ [Build] Option to force TLD updates
+ [L10n] Updated (es, ru) and new (el, he, ms, nb) locales
  from OTF's Localization Lab Transifex project
+ [L10n] no_BO translation by comradekingu

v 10.1.9.7rc1
=============================================================
+ FTP directory UI emulation on script-disabled domains
x Include ftp:// URLs in non-secure domain matching (thanks
  Rassilon for RFE)

v 10.1.9.6
=============================================================
x [TB] Gracefully handle legacy external message recipients
x [XSS] Updated known HTML5 events
x Better IPV6 support
x UI support for protocol-only entries

v 10.1.9.6rc3
=============================================================
x [TB] Gracefully handle legacy external message recipients
x [XSS] Updated known HTML5 events

v 10.1.9.6rc2
=============================================================
x Better IPV6 support

v 10.1.9.6rc1
=============================================================
x UI support for protocol-only entries

v 10.1.9.5
=============================================================
x Fix for various content script timing related issues
  (thanks therube for reporting)

v 10.1.9.4
=============================================================
x Prevent total breakages when policies accidentally map
  to invalid match patterns
x Internal messaging dispatch better coping with multiple
  option windows
x Avoid multiple CSP DOM insertions

v 10.1.9.3
=============================================================
x Fixed message handling regression breaking embedders and
  causing potential internal message loops

v 10.1.9.2
=============================================================
x More efficient window.name-based tab-scoped permissions
  persistence
x Fixed URL parsing bugs
x Fixed bug in requestKey generation
x [Build] Enhanced TLD data update subsystem
+ [UI] CUSTOM presets gets initialized with currently applied
  preset, including temporary/permanent status
x Improved internal message dispatching, avoiding potential
  race conditions
+ [L10n] Transifex integration
x Work-around for DOM-injected CSP not being honored when
  appended to the root element, rather than HEAD
+ Transparent support for FQDNs
x Better file: protocol support
x Full-page placeholders for media/plugin documents

v 10.1.9.2rc4
=============================================================
x More efficient window.name-based tab-scoped permissions
  persistence
x Fixed URL parsing bugs

v 10.1.9.2rc3
=============================================================
x [L10n] Restored it (accidentally overwritten by fr)
x Fixed bug in requestKey generation
x [Build] Enhanced TLD data update subsystem
+ [UI] CUSTOM presets gets initialized with currently applied
  preset, including temporary/permanent status
x Improved internal message dispatching, avoiding potential
  race conditions

v 10.1.9.2rc2
=============================================================
+ [L10n] Transifex integration
x Work-around for DOM-injected CSP not being honored when
  appended to the root element, rather than HEAD
+ Transparent support for FQDNs
+ Better UI support for file:// URLs

v 10.1.9.2rc1
=============================================================
x Better file: protocol support
x Full-page placeholders for media/plugin documents

v 10.1.9.1
=============================================================
x Fixed NOSCRIPT emulation not running in contexts where
  service workers are disabled, such as private windows
  (thanks Peter Wu for patch)
x [Build] Fixed TLD regexp generation broken by CRLF
  characters in input public suffix list

v 10.1.9
=============================================================
+ Completely revamped CSP backend, enforcing policies both in
  webRequest and in the DOM
+ Reload-less service worker busting
- removed obsoleted failsafes, including forced reloads
x Better timing for popup UI feedback on permissions changes
x [Tor] Reordered startup sequence to better cooperate with
  embedders like the Tor Browser
x Send out a "started" message after initialization to help
  embedders (like the Tor browser) interact with NoScript
x [Build] Better support for versions bumps
x Updated TLDs
x [Build] Improved TLD auto-updater

v 10.1.9rc6
=============================================================
x Fixed typo in restricted.js inclusion

v 10.1.9rc5
=============================================================
x Better timing for popup UI feedback on permissions changes

v 10.1.9rc4
=============================================================
+ Reload-less service worker busting

v 10.1.9rc3
=============================================================
x [Tor] Reordered startup sequence to better cooperate with
  embedders like the Tor Browser

v 10.1.9rc2
=============================================================
x Send out a "started" message after initialization to help
  embedders (like the Tor browser) interact with NoScript

v 10.1.9rc1
=============================================================
+ Completely revamped CSP backend, enforcing policies both in
  webRequest and in the DOM
- removed obsoleted failsafes, including forced reloads
x [Build] Better support for versions bumps
x Updated TLDs
x [Build] Improved TLD auto-updater

v 10.1.8.23
=============================================================
x Hotfix for reload loops before CSP management refactoring

v 10.1.8.22
=============================================================
x Fixed reload loop on unrestricted tabs (thanks random for
  reporting)

v 10.1.8.21rc1
=============================================================
x Fixed reload loop on unrestricted tabs (thanks random for
  reporting)

v 10.1.8.20
=============================================================
x Fixed Sites.domainImplies() misplaced optimization.
x build.sh support for quick stable release
x [L10n] Added Catalan (ca)

v 10.1.8.19
=============================================================
x Fixed onResponseHeader failing on session restore because
  of onBeforeRequest not having being called.
x Fixed regression: framed documents' URLs not being reported
  in the UI (thanks xaex for report)

v 10.1.8.19rc2
=============================================================
x Fixed onResponseHeader failing on session restore because
  of onBeforeRequest not having being called.

v 10.1.8.19rc1
=============================================================
x Fixed regression: framed documents' URLs not being reported
  in the UI (thanks xaex for report)

v 10.1.8.18
=============================================================
x More resilient and optimized Sites.domainImplies()
x Update ChildPolicies when automatic temp TRUST for
  top-level documents is enabled
x Fixed messages from content scripts being "eaten" by the
  wrong dispatcher when UI is open (thanks  skriptimaahinen)
x Fixed typo causing accidental permissions/status mismatches
  being checked only while pages are still loading (thanks
  skriptimaahinen)
x Fixed typo in XSS name sanitization script injection
  (thanks skriptimaahinen)

v 10.1.8.17
=============================================================
x Fix: Sites.domainImplies() should match subdomains
x More coherent wrapper around the webex messaging API
x Fixed inconsistencies affecting ChildPolicies content
  script auto-generated matching rules.
x Fixed potential issues with cross-process messages
x Simpler and more reliable safety net to ensure CSP headers
  are injected last among WebExtensions
x Fixed regression causing refresh loops on pages which use
  type="object" requests to load images, css and other types
x [L10n] ru and de translations
+ [XSS] Updated HTML events auto-generate matching code to
  use both latest Mozilla source code and archived data since
  Firefox ESR 52
+ New dynamic scripts management strategy based on the
  browser.contentScripts API, should fix some elusive, likely
  requestFilter-induced, bugs
x Fixed no-dot domains threated as empty TLDs (thanks
  Peter Wu for patch)
- Removed requestFilter hack for dynamic scripts management
+ [L10n] br and tr translations (thanks Transifex/OTF,
  https://www.transifex.com/otf/noscript/)
x Best effort to have webRequest.onHeaderReceived listener
  run last (issue #6, thanks kkapsner)
x [L10n] Localized "NoScript Options" title (thanks Diklabyte)
x Fixed inline scripts not being reported to UI (thanks
  skriptimaahinen for patch)
x Skip non-content windows when deferring startup page loads
  (thanks Rob Wu for reporting)
x Broader detection of UTF-8 encoding in responses (thanks
  Rob Wu for reporting)
x Improved support for debugging code removal in releases
x Fixed startup race condition with pending request tracking
x Fixed updating NoScript reloads tabs with revoked temporary
  permissions.

v 10.1.8.17rc8
=============================================================
x Fix: Sites.domainImplies() should match subdomains
x More coherent wrapper around the webex messaging API

v 10.1.8.17rc7
=============================================================
x Fixed inconsistencies affecting ChildPolicies content
  script auto-generated matching rules.
x Fixed potential issues with cross-process messages

v 10.1.8.17rc6
=============================================================
x Simpler and more reliable safety net to ensure CSP headers
  are injected last among WebExtensions

v 10.1.8.17rc5
=============================================================
x Fixed regression causing refresh loops on pages which use
  type="object" requests to load images, css and other types

v 10.1.8.17rc4
=============================================================
x More reliable attempt to have webRequest.onHeaderReceived
  listener run last (issue #6, thanks kkapsner)
x [L10n] ru and de translations
+ [XSS] Updated HTML events auto-generate matching code to
  use both latest Mozilla source code and archived data since
  Firefox ESR 52

v 10.1.8.17rc3
=============================================================
+ New dynamic scripts management strategy based on the
  browser.contentScripts API, should fix some elusive, likely
  requestFilter-induced, bugs
x Fixed no-dot domains threated as empty TLDs (thanks
  Peter Wu for patch)
- Removed requestFilter hack for dynamic scripts management
+ [L10n] br and tr translations (thanks Transifex/OTF,
  https://www.transifex.com/otf/noscript/)

v 10.1.8.17rc2
=============================================================
x Best effort to have webRequest.onHeaderReceived listener
  run last (issue #6, thanks kkapsner)
x [L10n] Localized "NoScript Options" title (thanks Diklabyte)

v 10.1.8.17rc1
=============================================================
x Fixed inline scripts not being reported to UI (thanks
  skriptimaahinen for patch)
x Skip non-content windows when deferring startup page loads
  (thanks Rob Wu for reporting)
x Broader detection of UTF-8 encoding in responses (thanks
  Rob Wu for reporting)
x Improved support for debugging code removal in releases
x Fixed startup race condition with pending request tracking
x Fixed updating NoScript reloads tabs with revoked temporary
  permissions.

v 10.1.8.16
=============================================================
x Fixed random stallings on page transitions (thanks sage11,
  Brush and pbelleisle for reporting)

v 10.1.8.15
=============================================================
x Fixed browser action icon not bein  updated on BF cache
  navigation (thanks therube for reporting)

v 10.1.8.14
=============================================================
x Fixed regression in NOSCRIPT elements emulation

v 10.1.8.12
=============================================================
x Fixed some video streams not playing anymore

v 10.1.8.10
=============================================================
x Fixed window.stop() being called on empty frames, causing
  WYSIWYG editors to break (thanks Dave Allen for reporting)

v 10.1.8.9
=============================================================
x Fixed externally handled resources opened in popups broken
  by dynamic script injection (thanks rpr and paulmcg for
  reporting)
x More edge case covered in dynamic script injection (thanks
  skriptimaahinen for reporting)
x Fixed some resource loading feedback glitches
x [XSS] Updated HTML event attributes matching
x Updated TLDs
x Fixed stalling embedded objects load on dynamic script
  injection (thanks therube for reporting)
x [L10n] Updated it (thanks Sebastiano Pistore)
x Work-around for serviceWorker loads bypassing webRequest
  (thanks therube for reporting)
x More flexible CSS layout for preset buttons (thanks fatboy)
x Improved edge case script disablement detection
x More reliable handling of edge cases on startup (thanks
  therube for reporting)
x Fixed dynamic script injection failing sometimes with
  "No matching message handler" error (thanks skriptimaahinen
  for reporting)
x [Tor Browser, Linux] Replaced unicode glyphs not being
  rendered on some browsers / platforms
x Prevent multiple canScript content messages during the same
  page load
x [Tor/ESR60] Removed useless work-around suggested in moz bug
  1410755, which caused Tor Browser content process crashes

v 10.1.8.9rc9
=============================================================
x Simpler and more solid handling of webgl inside documents
  embedded through object elements

v 10.1.8.9rc8
=============================================================
x More edge case covered in dynamic script injection (thanks
  skriptimaahinen for reporting)

v 10.1.8.9rc7
=============================================================
x Fixed some resource loading feedback glitches
x [XSS] Updated HTML event attributes matching
x Updated TLDs

v 10.1.8.9rc6
=============================================================
x Fixed stalling embedded objects load on dynamic script
  injection (thanks therube for reporting)
x [L10n] Updated it (thanks Sebastiano Pistore)

v 10.1.8.9rc5
=============================================================
x Fixed infinite reload loops on scripting permissions
  mismatches.

v 10.1.8.9rc4
=============================================================
x Work-around for serviceWorker loads bypassing webRequest
  (thanks therube for reporting)
x More flexible CSS layout for preset buttons (thanks fatboy)
x Improved edge case script disablement detection

v 10.1.8.9rc3
=============================================================
x More reliable handling of edge cases on startup (thanks
  therube for reporting)
x Fixed dynamic script injection failing sometimes with
  "No matching message handler" error (thanks skriptimaahinen
  for reporting)

v 10.1.8.9rc2
=============================================================
x Fixed externally handled resources opened in popups broken
  by dynamic script injection (thanks rpr and paulmcg for
  reporting)
x [Tor Browser, Linux] Replaced unicode glyphs not being
  rendered on some browsers / platforms
x Prevent multiple canScript content messages during the same
  page load

v 10.1.8.9rc1
=============================================================
x [TB64] Removed useless work-around suggested in moz bug
  1410755, which caused Tor Browser content process crashes

v 10.1.8.8
=============================================================
x Prevent script injection from messing with
  content-disposition=attachment responses.

v 10.1.8.7
=============================================================
x Fixed regression breaking meta refresh with relative URLs

v 10.1.8.5
=============================================================
x Completed fix for quoted URLs in meta refresh (thanks
  Juozas for reporting)
x [L10n] Fixed es translation (thanks Deckan)
x Cosmetic bug fixes
x Updated TLDs

v 10.1.8.4
=============================================================
x [L10n] Fixed es translation (thanks Deckan)
x Cosmetic bug fixes
x Updated TLDs

v 10.1.8.3
=============================================================
x [XSS] Fixed InjectionChecker choking at some big JSON
  payloads sents as POST form data
x Fixed meta-refresh emulation confused by quoted URLs
x [ESR60] Fixed dynamic script injection issues with XML
  feeds (thanks skriptimaahinen for report)
x [ESR60] Work-around for Moz Bug 1410755
x Autosize preset buttons to accomodater bigger localized
  labels
x [L10n] Shortened de labels (thanks musonius)
x More graceful handling of internal and restricted URLs
  (thanks skriptimaahinen for report)
+ [L10n] Added de, es, fr, it, nl, pt_BR and zh_CN locales
  (courtesy of Mozilla's localization campaign)
x Switch to inline elements as "NOSCRIPT" HTML replacements
x Fixed subframe content changes producing ambiguous NoScript
  icon feedback
x More meaningful/useful popup on (semi)privileged documents
x [Tor Browser] Work-around for crypto-based uiid function
  failing on startup
x [Tor Browser] Backported new dynamic script injection to
  ESR60
+ Included license files in the XPI
+ [XSS] In-depth protection against native ES6 modules abuse
x Fixed dynamic script injection issues (thanks
  skriptimaahinen for help)
+ MSE media reporting and blocking (e.g. on Youtube)

v 10.1.8.3rc11
=============================================================
x [XSS] Fixed InjectionChecker choking at some big JSON
  payloads sents as POST form data
x Fixed meta-refresh emulation confused by quoted URLs
x Fixed regression - popup first row not showing the active
  preset initially
x [ESR60] Fixed some edge cases still breaking feeds

v 10.1.8.3rc10
=============================================================
x Fixed dynamic script injection issues with XML feeds
  (thanks skriptimaahinen for report)
x [ESR60] Work-around for Moz Bug 1410755
x Autosize preset buttons to accomodater bigger localized
  labels
x [L10n] Shortened de labels (thanks musonius)

v 10.1.8.3rc9
=============================================================
x More specific exceptions for dynamic script injection
  (thanks skriptimaahinen for report)
x [L10n] Shortened de labels (thanks musonius)

v 10.1.8.3rc8
=============================================================
x More specific exceptions for dynamic script injection
  (thanks skriptimaahinen for report)
x More graceful handling of internal and restricted URLs
  (thanks skriptimaahinen for report)
+ [L10n] Added de, es, fr, it, nl, pt_BR and zh_CN locales
  (courtesy of Mozilla's localization campaign)
x Custom "no-script" element as "NOSCRIPT" HTML replacement
x Fixed console.log breakage in content pages
  (thanks skriptimaahinen for report)

v 10.1.8.3rc7
=============================================================
x Fixed various issues with dynamic script injection
x Fixed subframe content changes producing ambiguous NoScript
  icon feedback
x More meaningful/useful popup on (semi)privileged documents

v 10.1.8.3rc6
=============================================================
x [Tor Browser] Work-around for crypto-based uiid function
  failing on startup
x [Tor Browser] Backported new dynamic script injection to
  ESR60

v 10.1.8.3rc5
=============================================================
x Fixed dynamic script injection regression breaking images
  loaded as frame content (thanks Quest for report)
+ Included license files in the XPI

v 10.1.8.3rc4
=============================================================
x Tentative fix for content scripts asynchronous registration
  issues, take 3 (thanks skriptimaahinen for report)

v 10.1.8.3rc3
=============================================================
+ [XSS] In-depth protection against native ES6 modules abuse

v 10.1.8.3rc3
=============================================================
x Tentative fix for content scripts asynchronous registration
  issues, take 2 (thanks skriptimaahinen for report)

v 10.1.8.3rc2
=============================================================
x Tentative fix for content scripts asynchronous registration
  issues (thanks skriptimaahinen for report)

v 10.1.8.3rc1
=============================================================
+ MSE media reporting and blocking (e.g. on Youtube)

v 10.1.8.2
=============================================================
+ Popup toolbar buttons fully configurable via Drag'n'Drop
x Removed redundant leading "NoScript" in window titles
x Work-around for Firefox 60 bug breaking about:blank pages
  when a WebExtension declares a "document_start" CSS (thanks
  skriptimaahinen for report and fix)
x Fixed buttons in the "hide area" still responsive to clicks

v 10.1.8.2rc4
=============================================================
x Removed redundant leading "NoScript" in window titles

v 10.1.8.2rc3
=============================================================
x Work-around for Firefox 60 bug breaking about:blank pages
  when a WebExtension declares a "document_start" CSS (thanks
  skriptimaahinen for report and fix)

v 10.1.8.2rc2
=============================================================
+ More discoverable toolbar customization UI
x Fixed hidden buttons being persisted in reversed order
x Fixed buttons in the "hide area" still responsive to clicks

v 10.1.8.2rc1
=============================================================
+ Popup toolbar buttons fully configurable via Drag'n'Drop

v 10.1.8.1
=============================================================
+ [UI] "Disable restrictions for this tab" button in popup
+ [UI] "Disable restrictions globally" button in popup
x Fixed some content blocking stats collection bugs (Thanks
  Rob Wu and skriptimaahinen for reports)
x Fixed data: and blob: URIs could be loaded as object and
  media sources independently from the parent page's
  permissions (thanks skriptimaahinen for report)
x Several performance improvements in inter-process content
  blocking stats synchronization (thanks Rob Wu for report)
x [UI] Improved in-popup messages
x [UI] Simplified URL management in "Allow object" prompt
x Fixed dynamic scripts URL matching inconsistencies

v 10.1.8.1rc4
=============================================================
x Fixed some content blocking stats collection bugs (Thanks
  Rob Wu and skriptimaahinen for reports)

v 10.1.8.1rc3
=============================================================
x Fixed data: and blob: URIs could be loaded as object and
  media sources independently from the parent page's
  permissions (thanks skriptimaahinen for report)
x Several performance improvements in inter-process content
  blocking stats synchronization (thanks Rob Wu for report)

v 10.1.8.1rc2
=============================================================
x [UI] Improved in-popup messages
x [UI] More consistent interactions between the bulk
  restrictions disablement features

v 10.1.8.1rc1
=============================================================
+ [UI] "Disable restrictions for this tab" button in popup
+ [UI] "Disable restrictions globally" button in popup
x [UI] Simplified URL management in "Allow object" prompt
x Fixed dynamic scripts URL matching inconsistencies

v 10.1.7.5
=============================================================
x Fixed edge case CSP injection bug (thanks Rob Wu)
x Optimized dynamic script injection (thanks Rob Wu)
x Fixed potential leak on dynamic script injection (thanks
  Rob Wu for report)
x Now NoScript's UI on privileged pages explains permissions
  cannot be configured there, rather than bluntly opening the
  Options page (thanks Rob Wu for suggestion)

v 10.1.7.4
=============================================================
x Fixed script enablement status not correctly detected on
  some pages rolling their own CSP (causing NOSCRIPT element
  and META refresh emulation not to be triggered)
x Fixed "Appearance" NoScript Options tab missing on Android
x [XSS] Fixed semicolon-separated JSON payloads DDOSing the
  JSON-optimizer, e.g. with syndication.twitter.com subframes
  (thanks KonomiKitten and pal1000 for reports)
x [UI] Renamed "Scripts globally allowed (dangerous)" option
  to "No permissions enforcement (dangerous)" to better
  reflect its actual effect
x [UI] Better feedback about "No permission enforcement" by
  disabling the "Preset customization" section and and the
  "Per-site Permissions" tab
x [UI] Moved XSS-related options to the "Advanced" tab
x Fixed disabled webgl breaking feeds on script-enabled sites
  (thanks pal1000 for reporting)
x Enhanced dynamic script injection if browser.contentScripts
  API is available
x Expanded support for webgl canvas placeholders

v 10.1.7.4rc3
=============================================================
x Fixed script enablement status not correctly detected on
  some pages rolling their own CSP (causing NOSCRIPT element
  and META refresh emulation not to be triggered)

v 10.1.7.4rc2
=============================================================
x Fixed "Appearance" NoScript Options tab missing on Android
x [XSS] Fixed semicolon-separated JSON payloads DDOSing the
  JSON-optimizer, e.g. with syndication.twitter.com subframes
  (thanks KonomiKitten and pal1000 for reports)
x [UI] Renamed "Scripts globally allowed (dangerous)" option
  to "No permissions enforcement (dangerous)" to better
  reflect its actual effect
x [UI] Better feedback about "No permission enforcement" by
  disabling the "Preset customization" section and and the
  "Per-site Permissions" tab
x [UI] Moved XSS-related options to the "Advanced" tab

v 10.1.7.4rc1
=============================================================
x Fixed disabled webgl breaking feeds on script-enabled sites
  (thanks pal1000 for reporting)
x Enhanced dynamic script injection if browser.contentScripts
  API is available
x Expanded support for webgl canvas placeholders

v 10.1.7.3
=============================================================
x Fixed infinite script count report loops on some sites
  (thanks AuntyJack, @ALoss2 and others for reporting)
x Fixed localhost not being recognized as a domain (thanks
  skriptimaahinen for patch)
x Fixed regression causing NOSCRIPT element and META refreshes
  not to be emulated anymore on script-disabled pages (thanks
  barbaz and fatboy for reporting)

v 10.1.7.3rc1
=============================================================
x Fixed infinite script count report loops on some sites
  (thanks AuntyJack, @ALoss2 and others for reporting)
x Fixed localhost not being recognized as a domain (thanks
  skriptimaahinen for patch)
x Fixed regression causing NOSCRIPT element and META refreshes
  not to be emulated anymore on script-disabled pages (thanks
  barbaz and fatboy for reporting)

v 10.1.7.2
=============================================================
x Fixed bug causing some pages and RSS feeds to fail without
  access to NoScript UI

v 10.1.7.2rc1
=============================================================
x Fixed bug causing some pages and RSS feeds to fail without
  access to NoScript UI

v 10.1.7
=============================================================
x "Needed type" feedback in Custom preset for data: and blob:
  fonts (thanks skriptimaahinen for report)
+ Pressing DEL while left-mousing down on a fixed/absolutely
  positioned element of a script-disabled page removes it,
  allowing users to dismiss in-content popup "windows" and
  blocking overlays
x Fixed changing sites permission resets local preferences
  regression from 10.1.7rc1 (thanks pal1000 for report)
x Fixed data: and blob: fonts not blocked even if the "font"
  permission is not given to the main document (thanks
  skriptimaahinen for report and preliminary patch)
+ "Appearance|List full addresses in the permissions popup"
  option, off by default, to simplify the popup UI
+ "webgl" requirement feedback in CUSTOM permissions
+ "webgl" placeholder wherever possible
+ Activated beta channel updates from secure.informaction.com
+ WebGL blocking now honored on scripted pages
x Quantum RC versions are hosted on secure.informaction.com
  from now on due to beta channel deprecation on AMO

v 10.1.7rc4
=============================================================
x "Needed type" feedback in Custom preset for data: and blob:
  fonts (thanks skriptimaahinen for report)

v 10.1.7rc3
=============================================================
+ Pressing DEL while left-mousing down on a fixed/absolutely
  positioned element of a script-disabled page removes it,
  allowing users to dismiss in-content popup "windows" and
  blocking overlays
x Fixed changing sites permission resets local preferences
  regression from 10.1.7rc1 (thanks pal1000 for report)
x Fixed data: and blob: fonts not blocked even if the "font"
  permission is not given to the main document (thanks
  skriptimaahinen for report and preliminary patch)

v 10.1.7rc2
=============================================================
+ "Appearance|List full addresses in the permissions popup"
  option, off by default, to simplify the popup UI
+ "webgl" requirement feedback in CUSTOM permissions
+ "webgl" placeholder wherever possible
+ Activated beta channel updates from secure.informaction.com

v 10.1.7rc1
=============================================================
+ WebGL blocking now honored on scripted pages
x Quantum RC versions are hosted on secure.informaction.com
  from now on due to beta channel deprecation on AMO

v 10.1.6.6rc2
=============================================================
+ Tab selection persistence on Options Page reloads
+ Automatically close Options Page on popup UI permissions
  changes to avoid inconsistencies / unresponsiveness
x Fixed regression: per-sites permissions list not updated
  after addition (thanks bo elam for report)

v 10.1.6.6rc1
=============================================================
+ Tabbed options sections
+ Appearance option to turn off script count badge
+ Appearance option to hide context menu item
x Fixed legacy import bug creating too permissive DEFAULT
  presets (thanks Grumpy Old Lady for reporting)
x Fixed 10.1.6.2 regression: enabling object placeholders
  affected DEFAULT permissions (thanks Pansa for reporting)

v 10.1.6.5
=============================================================
+ Context menu on web pages to access main UI
x Fixed UI regression showing only the two rightmost
  components of IPv4 addresses
x [XSS] More specific and unobtrusive handling of window.name
  sanitization
x Fixed "XSS User Choices" not being included in Export files

v 10.1.6.5rc4
=============================================================
+ Context menu on web pages to access main UI
x Fixed UI regression showing only the two rightmost
  components of IPv4 addresses

v 10.1.6.5rc3
=============================================================
x [XSS] Better ordering of window.name sanitization

v 10.1.6.5rc2
=============================================================
x [XSS] More specific and unobtrusive handling of window.name
  sanitization

v 10.1.6.5rc1
=============================================================
x Fixed "XSS User Choices" not being included in Export files

v 10.1.6.4
=============================================================
x Fixed race condition on XSS filter first load
x Fixed duplicate entries in UI on page reloads (thanks 8-bit
  for reporting)
+ Spinner for long sites lists in Options page
- Removed obsolete work-around for accidental TRUSTED preset
  wiping
x [UI] Fixed clicking on capability's label doesn't toggle
  the related checkbox (thanks dhouwn and olf for reporting)
x [XSS] Fixed false positives on badly encoded URLs (thanks
  sage11 for reporting)

v 10.1.6.4rc5
=============================================================
x Fixed race condition on XSS filter first load

v 10.1.6.4rc4
=============================================================
x Fixed duplicate entries in UI on page reloads (thanks 8-bit
  for reporting)
+ Spinner for long sites lists in Options page

v 10.1.6.4rc3
=============================================================
- Removed obsolete work-around for accidental TRUSTED preset
  wiping

v 10.1.6.4rc2
=============================================================
x [UI] Fixed clicking on capability's label doesn't toggle
  the related checkbox (thanks dhouwn and olf for reporting)

v 10.1.6.4rc1
=============================================================
x [XSS] Fixed false positives on badly encoded URLs (thanks
  sage11 for reporting)

v 10.1.6.3
=============================================================
x Improved tooltip clarity
x Added version number to the browser action tooltip (thanks
  therube for RFE)
x More restrictive domain matching in the main UI for "fake"
  TLDs, showing pseudo 2nd level domains containing one dot
x Domain matching now treats unknown no-dot domains (not in
  the public suffixes list) as TLDs everywhere (fix finally
  not overwritten by auto-generated tld.js)
x Fixed rc4 regression causing synchronized changes not to be
  persisted
x Smarter XSS popup behavior when reporting concurrent events
  from/to the same origins
x Fixed full breakage when sync storage is disabled
x Improved layout on small screens (less than 10cm wide)
x Moved preset customization into its own (more discoverable)
  global Options section, rather than embedded in assignment
x Improved validation of manual entries
x Needed capabilities highlighted also on short-hand domain
  matched entries inside the CUSTOM preset
x Domain matching now works also for manually entered TLDs
  and pseudo-TLDs, such as "gov.us" or "cloudflare.net"

v 10.1.6.3rc8
=============================================================
x Improved tooltip clarity

v 10.1.6.3rc7
=============================================================
x Added version number to the browser action tooltip (thanks
  therube for RFE)

v 10.1.6.3rc6
=============================================================
x More restrictive domain matching in the main UI for "fake"
  TLDs, showing pseudo 2nd level domains containing one dot

v 10.1.6.3rc5
=============================================================
x Domain matching now treats unknown no-dot domains (not in
  the public suffixes list) as TLDs everywhere (fix finally
  not overwritten by auto-generated tld.js)
x Fixed rc4 regression causing synchronized changes not to be
  persisted
x Smarter XSS popup behavior when reporting concurrent events
  from/to the same origins

v 10.1.6.3rc4
=============================================================
x Fixed full breakage when sync storage is disabled

v 10.1.6.3rc3
=============================================================
x Improved layout on small screens (less than 10cm wide)

v 10.1.6.3rc2
=============================================================
x Moved preset customization into its own (more discoverable)
  global Options section, rather than embedded in assignment
x Improved validation of manual entries
x Needed capabilities highlighted also on short-hand domain
  matched entries inside the CUSTOM preset

v 10.1.6.3rc1
=============================================================
x Domain matching now works also for manually entered TLDs
  and pseudo-TLDs, such as "gov.us" or "cloudflare.net"

v 10.1.6.2
=============================================================
+ Individual temporary / permanent TRUSTED preset buttons
- Removed customizability of DEFAULT, TRUSTED and UNTRUSTED
  preset from the popup (reported as a major source of
  confusion) while keeping it in the Options tab
x Better display on mobile devices in portrait mode
x Fixed focus bug on mobile devices
x Fixed confirmation prompt when loading Site Info for the
  first time being ignored
x Fixed import feature failing on some full JSON "Classic"
  export files (thanks Floe for reporting)
x Fixed policy serialization bug causing temporary TRUSTED
  sites to be listed in the UNTRUSTED array as well (thanks
  pal1000 for reporting)
x Fixed action icon being disabled on Options tabs and not
  re-enabled when navigating away in the same tab (thanks
  geek99 for reporting)

v 10.1.6.2rc2
=============================================================
x Better display on mobile devices in portrait mode
x Fixed focus bug on mobile devices
x Fixed confirmation prompt when loading Site Info for the
  first time being ignored
x Fixed import feature failing on some full JSON "Classic"
  export files (thanks Floe for reporting)

v 10.1.6.2rc1
=============================================================
+ Individual temporary / permanent TRUSTED preset buttons
- Removed customizability of DEFAULT, TRUSTED and UNTRUSTED
  preset from the popup (reported as a major source of
  confusion) while keeping it in the Options tab
x Fixed policy serialization bug causing temporary TRUSTED
  sites to be listed in the UNTRUSTED array as well (thanks
  pal1000 for reporting)
x Fixed action icon being disabled on Options tabs and not
  re-enabled when navigating away in the same tab (thanks
  geek99 for reporting)

v 10.1.6.1
=============================================================
x Reduced UI sizes in desktop version
x Work-around for Firefox bug preventing the Export button
  from working on non-Windows platforms

v 10.1.6
=============================================================
x [XSS] Improved sensitivity of JSON whitelisting (thanks
  @SamuraiFoochs for reporting)
x [XSS] Improved specificity of nested URL checks (thanks
  @SamuraiFoochs for reporting)
x New configuration export implementation, more convoluted
  but not requiring the "downloads" permission

v 10.1.5.9
=============================================================
x Fixed some XSS false positives
x Fixed out of scale rendering regression on high DPI screens

v 10.1.5.9rc2
=============================================================
x Fixed some XSS false positives
v 10.1.5.9rc1
=============================================================
x Fixed out of scale rendering regression on high DPI screens

v 10.1.5.8
=============================================================
+ Fix for Linux rendering performance issues
+ First "Quantum" Android support
x Inverted order of domains vs full sites in popup

v 10.1.5.8rc3
=============================================================
+ Fix for linux rendering performance issues

v 10.1.5.8rc2
=============================================================
+ First "Quantum" release candidate with Android support

v 10.1.5.8rc1
=============================================================
x Tentative fix for rendering and performance issues on Linux
x Inverted order of domains vs full sites in popup

v 10.1.5.7
=============================================================
+ Settings import functionality, backward compatible with
  NoScript 5 formats
+ Settings export functionality
+ [XSS] The filter now automatically skips embedded documents
  which would normally be blocked
x Base domain matching now uses a single dot rule for unknown,
  private or "fake" TLDs (e.g. www.acme.corp → acme.corp)
x [XSS] Fixed regression from 10.1.5.6rc2 (thanks Masato
  Kinugava for reporting)
x Better feedback for errors in the policy's debug JSON view
  (thanks E-Raser for RFE)

v 10.1.5.6
=============================================================
- removed yandex.st from default whitelist (see
  https://forums.informaction.com/viewtopic.php?t=23655)
x [XSS] Streamlined multiple unescaping standards handling
x [XSS] Generalized work-around for browser's URL parsing
  oddities (thanks Masato Kinugava for reporting)
+ "Temporarily set top-level sites to TRUSTED" option
x [XSS] Fixed user choices forgot across browser sessions

v 10.1.5.5
=============================================================
+ [UI] Clicking on the domain label now opens the "Security
  and privacy info" webpage (like middle click on "Classic").
+ "Reset to Defaults" button in the options window
x Improved content script initialization logic (thanks Rob Wu
  for suggestions)
x [XSS] Fixed 2nd level interactive bypass (thanks Masato
  Kinugava for reporting)
x Fixed sites manually added from the Options textbox don't
  stick (thanks Just_Golem for reporting)

v 10.1.5.3
=============================================================
x Fixed regression causing NoScript to ask to reload pages in
  order to show permissions more than once upon installation
- Removed most animations causing older system to lag when
  large permissions lists are displayed in Options

v 10.1.5.2
=============================================================
x Improved work-around for blank windows on Linux Firefox bug
x Fixed XSS false positives on POST requests without data

v 10.1.5.1
=============================================================
x Fixed regression from new "fail fast" XSS filter main loop,
  causing cross-site requests to Google to trigger false
  positives (thanks Steve M for reporting)

v 10.1.5
=============================================================
+ [XSS] Added "Always block requests from ... to ..." in XSS
  warning prompt
x [XSS] Fixed url decoding bug (thanks Masato Kinugawa for
  reporting)
x Fixed some blocked items not reported in the UI (thanks Bo
  Elam for reporting)
x Changed the CSP internal report URI to noscript-csp.invalid
  (thanks Tom Schuster  Mario Heiderich for RFE)
- Removed unused MSE detection code (thanks Rob Wu for
  reporting)

v 10.1.4
=============================================================
x Fixed script enablement feedback dependant on page's own
  CSP (thanks Rob Wu for reporting)
x Fixed MSE detection injection using window.eval (thanks
  Rob Wu for reporting)
x Fixed window being resized and NoScript UI shown in a
  separate popup when triggered on a maximized window
x General performance improvement by removing unnecessary
  asynchronous webRequest listeners

v 10.1.3
=============================================================
x Hotfix for wiped TRUSTED permissions
x Hotfix for NoScript failing to load if XSS was disabled in
  previous session

v 10.1.3rc3
=============================================================
x Fixed immutable permissions for TRUSTED and UNTRUSTED
  presets negating all the others (thanks Stefan Scholl for
  reporting)
x Work-around for Moz Bug #1402110 (thanks David Ross for
  reporting)
x Fixed XSS whitelist not being cleared from Options
x Fixed XSS whitelist trying to using sync even if disabled (
  thanks Rob Wu for reporting)

v 10.1.3rc2
=============================================================
+ Emulated META refreshes inside NOSCRIPT elements
x Fixed close button garbled on Mac OS X and Linux
x Fixed XSS checks couldn't be disabled from Options
x More reliable auto-reload logic

v 10.1.3rc1
=============================================================
+ Work-around for Firefox not displaying NOSCRIPT elements on
  pages where scripts are blocked by CSP
+ The Alt+Shift+N shortcut now opens the NoScript UI also on
  windows with no toolbars containing NoScript's icon
x "unsafe" (non-HTTPS) matching is now automatically selected
   on non-HTTPS pages (fixes the perception that you set a
   site to TRUSTED and it reverted to DEFAULT)
x Full addresses are shown again to be choosen in UI, together
  with base domains
x Better auto-reload logic
x Fixed NoScript back-end to work also if sync storage is
  disabled (thanks Rob Wu for reporting)
x Fixed potential fingerprinting through placeholder icon
  (thanks Rob Wu for reporting)

v 10.1.2
=============================================================
+ Added "Revoke temporary permissions" button
+ Added "Temporarily allow all this page" button
x Simplified popup listing, showing base domains only (full
  origin URLs can still be entered in the Options window to
  further tweak permissions)
x Fixed UI not launching in Incognito mode
x Fixed changing permissions in the CUSTOM preset affecting
  the DEFAULT permissions sometimes
x Fixed UI almost unusable in High Contrast mode
x Fixed live bookmark feeds blocked if "fetch" permissions
  were not given
x Fixed background requests from other WebExtensions being
  blocked

v 10.1.1
=============================================================
+ First pure WebExtension release
+ CSP-based first-party script script blocking
+ Active content blocking with DEFAULT, TRUSTED, UNTRUSTED
  and CUSTOM (per site) presets
+ Extremely responsive XSS filter leveraging the asynchronous
  webRequest  API
+ On-the-fly cross-site requests whitelisting

v 5.1.9
=============================================================
x Fixed automatic reload bug (thanks ThomasW and barbaz for
  reporting)

v 5.1.8.7
=============================================================
x [Security] Fixed script blocking bypass zero-day (thanks
  Zerodium for unresponsible disclosure,
  https://twitter.com/Zerodium/status/1039127214602641409)
x [Surrogate] Fixed typo in 2mdn replacement (thansk barbaz)
x [XSS] Fixed InjectionChecker choking at some big JSON
  payloads sents as POST form data
+ [XSS] In-depth protection against native ES6 modules abuse
x Fixed classic beta channel users being accidentally
  migrated to stable (thanks barbaz)

v 5.1.8.7rc4
=============================================================
x [Security] Fixed script blocking bypass zero-day (thanks
  Zerodium for unresponsible disclosure,
  https://twitter.com/Zerodium/status/1039127214602641409)
x [Surrogate] Fixed typo in 2mdn replacement (thansk barbaz)

v 5.1.8.7rc3
=============================================================
x [XSS] Fixed InjectionChecker choking at some big JSON
  payloads sents as POST form data

v 5.1.8.7rc2
=============================================================
+ [XSS] In-depth protection against native ES6 modules abuse

v 5.1.8.7rc1
=============================================================
x Fixed classic beta channel users being accidentally
  migrated to stable (thanks barbaz)

v 5.1.8.6
=============================================================
x [Surrogate] Fixed 2mdn surrogate compatibility issues
  (thanks barbaz)

v 5.1.8.5
=============================================================
x Switched to unified update URL for Quantum beta and Classic
x Automatic updates test
+ Updates for NoScript Classic are now served directly from
  secure.informaction.com due to beta channel deprecation and
  other problems with dual branches on AMO
x Fixed edge case ABE Anon action loop with e10s enabled on
  reload after new rule (thanks barbaz for reporting)
x Fixed JSON interactive view disabled by cascading
  restrictions (thanks jester for reporting)
x Fixed ABE Anon action loop with e10s enabled (thanks barbaz
  for reporting)

v 5.1.8.5rc3
=============================================================
x Switched to unified update URL for Quantum beta and Classic
x Automatic updates test

v 5.1.8.5rc2
=============================================================
+ Updates for NoScript Classic are now served directly from
  secure.informaction.com due to beta channel deprecation and
  other problems with dual branches on AMO
x Fixed edge case ABE Anon action loop with e10s enabled on
  reload after new rule (thanks barbaz for reporting)

v 5.1.8.5rc1
=============================================================
x Fixed JSON interactive view disabled by cascading
  restrictions (thanks jester for reporting)
x Fixed ABE Anon action loop with e10s enabled (thanks barbaz
  for reporting)

v 5.1.8.4
=============================================================
x Fixed XSS false positive on some Facebook embeddings
  (thanks barbaz for reporting)
x Fixed edge case origin checks for WebExtensions embedded in
  privileged documents
x Fixed DNT support initialization regression (thanks barbaz
  for reporting)
x [XSS] Fixed false positives on badly encoded URLs (thanks
  sage11 for reporting)
x Script Surrogates don't affect privileged URLs anymore,
  unless the noscript.surrogate.matchPrivileged about:config
  preference is set to true (thanks barbaz for RFE)
x [e10s] Fixed temporary permissions inter-process sync issue
  (thanks to the TorBrowser team for solution)

v 5.1.8.4rc3
=============================================================
x Fixed XSS false positive on some Facebook embeddings
  (thanks barbaz for reporting)
x Fixed edge case origin checks for WebExtensions embedded in
  privileged documents

v 5.1.8.4rc2
=============================================================
x Fixed DNT support initialization regression (thanks barbaz
  for reporting)

v 5.1.8.4rc1
=============================================================
x [XSS] Fixed false positives on badly encoded URLs (thanks
  sage11 for reporting)
x Script Surrogates don't affect privileged URLs anymore,
  unless the noscript.surrogate.matchPrivileged about:config
  preference is set to true (thanks barbaz for RFE)
x [e10s] Fixed temporary permissions inter-process sync issue
  (thanks to the TorBrowser team for solution)

v 5.1.8.3
=============================================================
x [XSS] Fixed regression (thanks Masato Kinugava for report)

v 5.1.8.2
=============================================================
x [ABE] Restored Palemoon compatibility (thanks barbaz for
  patch)
x [ABE] Fixed ruleset persistence (thanks barbaz for patch)
- removed yandex.st from default whitelist (see
  https://forums.informaction.com/viewtopic.php?t=23655)
x [XSS] Streamlined multiple unescaping standards handling

v 5.1.8.1
=============================================================
x [XSS] Fixed 2nd level interactive bypass (thanks Masato
  Kinugava for reporting)

v 5.1.7
=============================================================
x [Surrogate] Fixed regression breaking source matching in
  5.1.6 (thanks astian for reporting)

v 5.1.6
=============================================================
x [Fx58] Fixed complete breakage due to nsIPrefBranch changes
  in 58 (for Firefox Developer Edition users)

v 5.1.5
=============================================================
x Fixed content process cross-framescript leak (thanks
  dorando for patch)
x [ESR] Fixed bookmarklets not being executed (thanks Jim
  Thompson for reporting)

v 5.1.5rc2
=============================================================
x Fixed content process cross-framescript leak (thanks
  dorando for patch)

v 5.1.5rc1
=============================================================
x [ESR] Fixed bookmarklets not being executed (thanks Jim
  Thompson for reporting)

v 5.1.4
=============================================================
x [Nightly] Fixed Import/Export Options button
x Fixed bookmarlets broken when scripts globally allowed
  (thanks filip for reporting)
x [Tor Browser] Fixed jumping icon on updates (ticket #23968)
x [Surrogate] Better sandbox memory management
- Removed special Add-ons manager uninstall warning hooks

v 5.1.4rc2
=============================================================
x [Nightly] Fixed Import/Export Options button

v 5.1.4rc1
=============================================================
x Fixed bookmarlets broken when scripts globally allowed
  (thanks filip for reporting)
x [Tor Browser] Fixed jumping icon on updates (ticket #23968)
x [Surrogate] Better sandbox memory management
- Removed special Add-ons manager uninstall warning hooks

v 5.1.3
=============================================================
x [e10s] Fixed some bookmarklet / URL bar JavaScript emulation
  multi-process regressions
x [Palemoon] Fixed NoScript button position not customizable
  on the first window (thanks yes_noscript for reporting)
x Fixed bookmarklet execution subject to AllowURLBarJS too
x Fixed Palemoon urlbar breakage on browser restart
x [Whitelist] about:tabcrashed made mandatory (internal)

v 5.1.3rc3
=============================================================
x [e10s] Fixed some bookmarklet / URL bar JavaScript emulation
  multi-process regressions
x [Palemoon] Fixed NoScript button position not customizable
  on the first window (thanks yes_noscript for reporting)

v 5.1.3rc2
=============================================================
x Fixed bookmarklet execution subject to AllowURLBarJS too

v 5.1.3rc1
=============================================================
x Fixed Palemoon urlbar breakage on browser restart
x [Whitelist] about:tabcrashed made mandatory (internal)

v 5.1.2
=============================================================
x Fixed allowing scripts on one tab blocking them in other (
  torproject.org issue #23747, thanks cypherpunks for report)
x Fixed startup sequence
+ [Whitelist] about:tabcrashed added to default whitelist
x Added unlimitedStorage WebExtensions permissions for safer
  preferences migration
x Fixed some restartless lifecycle quirks
x Fixed toolbar button position changes across upgrades
x Fixed NoScript release notes page shown upon restartless
  updates, rather than on next restart
x Fixed Tor Browser's extension preference overrides ignored
  by NoScript
x Fixed status bar not recognized on some browsers still
  supporting it
x Work-around for the Tor Browser preventing NoScript from
  resolving its own UI's XML entities

v 5.1.2rc8
=============================================================
x Fixed residual restartless lifecycle issues

v 5.1.2rc7
=============================================================
x Fixed allowing scripts on one tab blocking them in other (
  torproject.org issue #23747, thanks cypherpunks for report)

v 5.1.2rc6
=============================================================
x Fixed startup sequence
+ [Whitelist] about:tabcrashed added to default whitelist

v 5.1.2rc5
=============================================================
x Added unlimitedStorage WebExtensions permissions for safer
  preferences migration
x Fixed some residual restartless lifecycle quirks

v 5.1.2rc4
=============================================================
x Fixed some some more restartless lifecycle quirks

v 5.1.2rc3
=============================================================
x Fixed some quirks upon restartless lifecycle events
x Fixed toolbar button position changes across upgrades

v 5.1.2rc2
=============================================================
x Fixed NoScript release notes page shown upon restartless
  updates, rather than on next restart
x Fixed Tor Browser's extension preference overrides ignored
  by NoScript
x Fixed status bar not recognized on some browsers still
  supporting it

v 5.1.2rc1
=============================================================
x Work-around for the Tor Browser preventing NoScript from
  resolving its own UI's XML entities

v 5.1.1
=============================================================
x Fixed regression breaking webworkers (e.g. on Protonmail)

v 5.1.0
=============================================================
x Fixed placeholders not shown in Fx 57 and above
x [WebExtension] Reduced legacy settings backup size
x [Nightly] Work-around for nsIDOMHTML* interfaces removal
+ Restartless (bootstrapped) desktop version, and most likely
  the last hybrid (embedded WebExtension) before the pure
  WebExtension release

v 5.1.0rc3
=============================================================
x [Seamonkey] Fixed status icon regression
x Fixed placeholders not shown in Fx 57 and above
x Fixed various restartless lifecycle issues
x [WebExtension] Reduced legacy settings backup size

v 5.1.0rc2
=============================================================
x [Nightly] Work-around for nsIDOMHTML* interfaces removal

v 5.1.0rc1
=============================================================
+ Restartless (bootstrapped) desktop version, and most likely
  the last hybrid (embedded WebExtension) before the pure
  WebExtension release

v 5.0.10
=============================================================
x Fixed some moz-webextension: subrequests blocked in content
  blocking mode
- Removed whitelist and surrogate references to persona.org
x [Seamonkey] Fixed status bar visibility regression (thanks
  Mc for reporting)
x [Nightly] Fixed various XSS filter UI breakages
x [Nightly] Patched deprecated usages of nsIURI.path
x [XSS] Fixed false positive on amazonaws.com (thanks Robby
  Stokoe for reporting)
x [Surrogate] New ampush.io tracker surrogate (thanks barbaz)

v 5.0.10rc4
=============================================================
x [Regression] Fixed infinite redirect loops on some sites as
  soon as allowed
x [Regression] Restored accidentally erased default whitelist

v 5.0.10rc3
=============================================================
x Fixed some moz-webextension: subrequests blocked in content
  blocking mode
- Removed whitelist and surrogate references to persona.org

v 5.0.10rc2
=============================================================
x [Seamonkey] Fixed status bar visibility regression (thanks
  Mc for reporting)

v 5.0.10rc1
=============================================================
x [Nightly] Fixed various XSS filter UI breakages
x [Nightly] Patched deprecated usages of nsIURI.path
x [XSS] Fixed false positive on amazonaws.com (thanks Robby
  Stokoe for reporting)
x [Surrogate] New ampush.io tracker surrogate (thanks barbaz)

v 5.0.9
=============================================================
x [WebExt] Make sure the embedded WebExtension cannot
  interfere with the legacy side beside preference migration
x [Nightly] Fixed breakage from bug 1390106
x [Nightly] Work-around for HTMLEmbedElement removal
x [Nightly] Fixed first run UI visibility check
x [XSS] Work-around for Google notifications false positive
x [Nightly] Fixed startup breakage
x [Surrogates] Fixed noisy google-analytics replacement
x [Nightly] Fixed view-source: breakage

v 5.0.9rc4
=============================================================
x [WebExt] Make sure the embedded WebExtension cannot
  interfere with the legacy side beside preference migration

v 5.0.9rc3
=============================================================
x [Nightly] Fixed breakage from bug 1390106
x [Nightly] Work-around for HTMLEmbedElement removal
x [Nightly] Fixed first run UI visibility check

v 5.0.9rc2
=============================================================
x [XSS] Work-around for Google notifications false positive

v 5.0.9rc1
=============================================================
x [Nightly] Fixed startup breakage
x [Surrogates] Fixed noisy google-analytics replacement
x [Nightly] Fixed view-source: breakage

v 5.0.8.1
=============================================================
x [ABE] XHR matches both TYPE_XMLHTTPREQUEST and TYPE_FETCH
x [ABE] Updated INCLUSION types to match newest specific
  types from nsIContentType constants. OTHER still matches
  any type except "historically supported" ones (SCRIPT, CSS,
  IMAGE, OBJ, OBJSUB, MEDIA, FONT, SUBDOC, XBL, PING, XHR,
  DTD) for backward compatibility: please use
  UNKNOWN to match just TYPE_OTHER (i.e. request whose type
  is not specifically mapped yet by the nsIContentType API).
x [e10s] Fixed INCLUSION type marked as OTHER for any request
  when Electrolysis is enabled (thanks barbaz for reporting)
x [XSS] Fixed excessive recursion causing GC-related hangs on
  some ads-intensive websites (like der-postillion.de)

v 5.0.8.1rc1
=============================================================
x [Surrogate] Fixed google-analytics replacement regression
  (thanks barbaz)

v 5.0.8rc6
=============================================================
x [ABE] Fixed regression: OTHER should not match MEDIA and
  FONT (thanks barbaz for reporting)

v 5.0.8rc5
=============================================================
x [ABE] Fixed regression: OTHER hould not match SCRIPT
  (thanks barbaz for reporting)

v 5.0.8rc4
=============================================================
x [ABE] Fixed regression: HTTP methods HEAD, OPTIONS and
  TRACE were not matched by ABE's parser grammar anymore
x [ABE] OTHER now matches any type not mapped by the "static"
  ABE request types (including newest nsIContentPolicy.TYPE_*
  constants), while UNKNOWN matches just TYPE_OTHER
x [ABE] XHR matches both TYPE_XMLHTTPREQUEST and TYPE_FETCH

v 5.0.8rc3
=============================================================
x [ABE] Updated INCLUSION types to match newest specific
  types from nsIContentType constants. OTHER still matches
  TYPE_WEBSOCKET for backward compatibility, please use
  UNKNOWN for anything not specifically mapped yet by the
  nsIContentType API. Thanks barbaz for reporting.

v 5.0.8rc2
=============================================================
x [e10s] Fixed INCLUSION type marked as OTHER for any request
  when Electrolysis is enabled (thanks barbaz for reporting)

v 5.0.8rc1
=============================================================
x [XSS] Fixed excessive recursion causing GC-related hangs on
  some ads-intensive websites (like der-postillion.de)

v 5.0.7.1
=============================================================
x [WebExt] Fixed incompatibility with Firefox 54
x [WebExt] Initiated preference migration via embedded
WebExtension
x [e10s] Fixed HTTP redirection issues with e10s enabled
(thanks PLD for reporting)
x [Surrogate] Updated googletag replacement (thanks barbaz)
x Fixed HTML5 Media documents blockage delay if no other
embedded content is forbidden (thanks Georg Koppen for
reporting)
x [XSS] Fixed bug causing false positives (thanks Georg
Koppen for reporting)

v 5.0.7.1rc1
=============================================================
x [WebExt] Fixed incompatibility with Firefox 54

v 5.0.7rc3
=============================================================
x [WebExt] Initiated preference migration via embedded
  WebExtension

v 5.0.7rc2
=============================================================
x [e10s] Fixed HTTP redirection issues with e10s enabled
  (thanks PLD for reporting)
x [Surrogate] Updated googletag replacement (thanks barbaz)
x Fixed HTML5 Media documents blockage delay if no other
  embedded content is forbidden (thanks Georg Koppen for
  reporting)

v 5.0.7rc1
=============================================================
x [XSS] Fixed bug causing false positives (thanks Georg
  Koppen for reporting)

v 5.0.6
=============================================================
x [XSS] Fixed performance regression in handling of big JSON
  payloads causing the browser to freeze on loading pages
  with Facebook tracking subframes
x [Surrogates] Updated ga replacement (thanks barbaz)
x [L10n] Updated tr (thanks Volkan Gezer)
x [L10n] Updated de (thanks milupo
x [XSS] Fixed regression in window.name sanitization
  (thanks Gareth Heyes for reporting)
x [XSS] Work-around for Mavo-script operator translation side
  effects (thanks Gareth Heyes for reporting)

v 5.0.6rc6
=============================================================
x [Surrogates] Updated ga replacement (thanks barbaz)

v 5.0.6rc5
=============================================================
x [XSS] Fixed performance regression in handling of big JSON
  payloads causing the browser to freeze on loading pages
  with Facebook tracking subframes
x [Surrogates] Updated ga replacement (thanks barbaz)
x [L10n] Updated tr (thanks Volkan Gezer)
x [L10n] Updated de (thanks milupo)

v 5.0.6rc4
=============================================================
x [XSS] Fixed regression in Mavo expression detection (the
  fix didn't actually ship in RC3, thanks Gareth Heyes for
  reporting)

v 5.0.6rc3
=============================================================
x [XSS] Fixed regression in Mavo expression detection
  (thanks Gareth Heyes for reporting)

v 5.0.6rc2
=============================================================
x [XSS] Fixed regression in window.name sanitization
  (thanks Gareth Heyes for reporting)

v 5.0.6rc1
=============================================================
x [XSS] Work-around for Mavo-script operator translation side
  effects (thanks Gareth Heyes for reporting)

v 5.0.5
=============================================================
x [XSS] Updated XSS filter with latest Gecko Atoms and ES
  features (thanks Maxim Rupp for reporting)
+ [XSS] Added countermeasures against XSS vectors exploiting
  Mavo-script template expressions (thanks Krzysztof Kotowicz
  and Gareth Heyes for reporting)

v 5.0.5rc12
=============================================================
x Fixed reported origins ordering glitch

v 5.0.5rc11
=============================================================
x [XSS] Fixed regression in Mavo-script detection (thanks
  Gareth Heyes for reporting)

v 5.0.5rc10
=============================================================
x [XSS] Brutal crackdown on Mavo-script expressions (thanks
  Gareth Heyes for reporting)

v 5.0.5rc9
=============================================================
x [XSS] Improved handling of Mavo-script translation edge
  cases (thanks Gareth Heyes for reporting)

v 5.0.5rc8
=============================================================
x [XSS] More aggressive filter against Mavo-script madness
  (thanks Gareth Heyes for reporting)

v 5.0.5rc7
=============================================================
x [XSS] Fixed bug in Mavo-script countermeasures (thanks
  Gareth Heyes for reporting)

v 5.0.5rc6
=============================================================
x [XSS] Further countermeasures against Mavo-script madness
  (thanks Gareth Heyes for reporting)

v 5.0.5rc5
=============================================================
x Fixed UI synchronization regression take 2

v 5.0.5rc4
=============================================================
x Fixed UI synchronization regression

v 5.0.5rc3
=============================================================
x [XSS] Further countermeasures against Mavo-script madness
  (thanks Gareth Heyes for reporting)

v 5.0.5rc2
=============================================================
x [XSS] Updated XSS filter with latest Gecko Atoms and ES
  features (thanks Maxim Rupp for reporting)

v 5.0.5rc1
=============================================================
+ [XSS] Added countermeasures against XSS vectors exploiting
  Mavo-script template expressions (thanks Krzysztof Kotowicz
  for reporting)

v 5.0.4
=============================================================
+ [XSS] Added countermeasures against several vectors
  exploiting client-side JavaScript templating frameworks
  (thanks Krzysztof Kotowicz and Sebastian Lekies for their
  research)
x [XSS] Fixed e10s-related regression in window.name
  sanitization (thanks Krzysztof Kotowicz for reporting)
x Fixed "Allow local links" breaking file:/// URL loading in
  Gecko 53 and above
x Fixed JSON viewer working only on JavaScript-enabled URLs

v 5.0.4rc3
=============================================================
+ [XSS] Added countermeasures against several vectors
  exploiting client-side JavaScript templating frameworks
  (thanks Krzysztof Kotowicz and Sebastian Lekies for their
  research)

v 5.0.4rc2
=============================================================
x [XSS] Fixed e10s-related regression in window.name
  sanitization (thanks Krzysztof Kotowicz for reporting)

v 5.0.4rc1
=============================================================
x Fixed "Allow local links" breaking file:/// URL loading in
  Gecko 53 and above
x Fixed JSON viewer working only on JavaScript-enabled URLs

v 5.0.3
=============================================================
x Fixed global JavaScript enablement for HTTPS sites breaking
  the UI (Tor ticket #21923)
+ noscript.webext.enabled preference to control embedded
  WebExtension startup
x Fixed XHR regression (thanks Oleksandr Popov for reporting)
x Fixed compatibility issues with some WebExtensions (thanks
  Oleksandr Popov for reporting)

v 5.0.3rc5
=============================================================
x Fixed global JavaScript enablement for HTTPS sites breaking
  the UI (Tor ticket #21923)

v 5.0.3rc4
=============================================================
x Adjusted the embedded WebExtension's manifest to reflect
  the target version upon whole userbase migration

v 5.0.3rc3
=============================================================
+ noscript.webext.enabled preference to control embedded
  WebExtension startup

v 5.0.3rc2
=============================================================
x Fixed XHR regression (thanks Oleksandr Popov for reporting)

v 5.0.3rc1
=============================================================
x Fixed compatibility issues with some WebExtensions (thanks
  Oleksandr Popov for reporting)

v 5.0.2
=============================================================
x Fixed thumbnails broken even if noscript.bgThumbs.allowed
  is true (thanks rick for reporting)
x [e10s] Restored absolutely positioned elements removal by
  mousedown + DEL key (broken by e10s)
x Absolutely positioned elements removal by mousedown + DEL
  key now working also on whitelisted pages (controlled by
  noscript.eraseFloatingElements about:config preference,
  thanks MegaWolf for RFE)
x Fixed blocked XHR requests in frames not reflected in the
  menu UI (thanks aocab and barbaz for reporting)
x [Locale] Improved nl translation (thanks Kris)

v 5.0.2rc3
=============================================================
x Fixed thumbnails broken even if noscript.bgThumbs.allowed
  is true (thanks rick for reporting)

v 5.0.2rc2
=============================================================
x [e10s] Restored absolutely positioned elements removal by
  mousedown + DEL key (broken by e10s)
x Absolutely positioned elements removal by mousedown + DEL
  key now working also on whitelisted pages (controlled by
  noscript.eraseFloatingElements about:config preference,
  thanks MegaWolf for RFE)

v 5.0.2rc1
=============================================================
x Fixed blocked XHR requests in frames not reflected in the
  menu UI (thanks aocab and barbaz for reporting)
x [Locale] Improved nl translation (thanks Kris)

v 5.0.1
=============================================================
x Fixed regression, some sites not being shown in UI
x Fixed recently blocked menu not working on e10s

v 5.0
=============================================================
+ Embedded WebExtension
x Dramatically Improved UI synchronization performance impact
  on load-intensive web pages (thanks Rob Wu)
x [e10s] Fixed permissions out of sync when content processes
  are more than one (thanks Ian Fennel for report)
x [Surrogates] Update google-analytics replacement (thanks
  ng4never for reporting and barbaz for implementation)

v 5.0rc2
=============================================================
x Dramatically Improved UI synchronization performance impact
  on load-intensive web pages (thanks Rob Wu)

v 5.0rc1
=============================================================
+ Embedded WebExtension
x [e10s] Fixed permissions out of sync when content processes
  are more than one (thanks Ian Fennel for report)
x [Surrogates] Update google-analytics replacement (thanks
  ng4never for reporting and barbaz for implementation)

v 2.9.5.3
=============================================================
x Fixed https://trac.torproject.org/projects/tor/ticket/20471
x Fixed FRAME blocking issue on non-e10s browsers
x Fixed incompatibility with LastPass non-AMO version 4.x
x Fixed cross-domain HTTPS requests in the same subdomain
  triggering XSS false positives (thanks Robert Aldridge for
  reporting)
x ABE sandbox now enforced by CSP sandbox directive (thanks
  barbaz for report)
x Fixed sites marked as untrusted could not be reallowed on
  the same tab
- removed obsolete noscript.docShellJSBlocking preference

v 2.9.5.3rc6
=============================================================
x Fixed https://trac.torproject.org/projects/tor/ticket/20471
x Fixed FRAME blocking issue on non-e10s browsers

v 2.9.5.3rc5
=============================================================
x Fixed incompatibility with LastPass non-AMO version 4.x

v 2.9.5.3rc4
=============================================================
x Fixed ABE sandbox overly restrictive on Gecko 50 and above
  (thanks fatboy and barbaz for report)

v 2.9.5.3rc3
=============================================================
x Fixed UI synchronization issue (thanks Klayton for report)

v 2.9.5.3rc2
=============================================================
x Fixed browsers older than Gecko 50 unaffected by ABE's
  sandbox action (thanks barbaz for reporting)
x Fixed cross-domain HTTPS requests in the same subdomain
  triggering XSS false positives (thanks Robert Aldridge for
  reporting)

v 2.9.5.3rc1
=============================================================
x ABE sandbox now enforced by CSP sandbox directive (thanks
  barbaz for report)
x Fixed sites marked as untrusted could not be reallowed on
  the same tab
- removed obsolete noscript.docShellJSBlocking preference

v 2.9.5.2
=============================================================
x Fixed Stylish editor breakage (thanks JustAnotherGuy for
  reporting
x Fixed media blocking delayed with Tor Browser's "Medium"
  Security Sider preset
x Fixed frame blocking issues
x Fixed top-level media loads issues
x Fixed apparent delay in menu UI feedback (thanks mechadon
  for reporting)
x Fixed some XSS filter over-sensitivity regressions
x Fixed "Allow local links" causing file:// URLs to fail
x [Locale] Updated nl (thanks Ton)

v 2.9.5.2rc5
=============================================================
x Fixed Stylish editor breakage (thanks JustAnotherGuy for
  reporting

v 2.9.5.2rc4
=============================================================
x Fixed media blocking delayed with Tor Browser's "Medium"
  Security Sider preset

v 2.9.5.2rc3
=============================================================
x Fixed frame blocking issues
x Fixed top-level media loads issues

v 2.9.5.2rc2
=============================================================
x Fixed apparent delay in menu UI feedback (thanks mechadon
  for reporting)
x Further XSS positives tweakings

v 2.9.5.2rc1
=============================================================
x Fixed some XSS filter over-sensitivity regressions
x Fixed "Allow local links" causing file:// URLs to fail
x [Locale] Updated nl (thanks Ton)

v 2.9.5.1
=============================================================
x Fixed some pages not loading on 1st attempt when e10s is
  enabled (thanks Semtex for reporting)

v 2.9.5
=============================================================
+ Full e10s compatibility
x Fixed big whitelists being reset to default permissions on
  e10s-enabled browsers (thanks sabret00the and Internet User
  for reporting)
x Better fix for some embedding permissions issues (thanks
  barbaz for reporting)
x MediaSource blocking support (Tor Project)
x Better handling of media types loaded as top-level
  documents
x Declared (but untested) Palemoon support (thanks barbaz)
x [System Principal] included in the mandatory allowed list
x Fixed allow scripts globally requiring a restart (thanks
  FFreestyleRR for reporting
x Fixed embeddings autoreload on e10s-disabled browsers
x Improved autoreload responsiveness and precision
x Fixed IFrame over-blocking bug (thanks G113 for report)
x Fixed sites involved in background requests being not
  reported in the UI, even if intercepted and/or blocked (
  thanks GH113 for reporting)
x Fixed typo in PasteHandler (thanks barbaz for reporting)
x Fixed embedding-related automatic reload issues (thanks
  barbaz and tmeader for reporting)
x Fixed compatibility regression with Firefox 45
x [Surrogate] Fixed file:// replacements broken (thanks
  barbaz for reporting)
x Fixed typo in XSS filter breaking JSON cross-site requests
x Fixed automatic reload issues (thanks GH113 for reporting)
x Fixed UI not always synchronized on startup (thanks GH113
  for reporting)
x Fixed incompatibilities with older Firefox down to 45
  (thanks barbaz for reporting)
x Fixed automatic reload impossible to be disabled (thanks
  GH113 for reporting)
x Fixed UI initially not synced on new windows (thanks GH113
  for reporting)
x Fixed bug in secure cookie enforcement upgrading all the
  unsecure cookies on secure connections even if a secure
  cookie for the domain existed, increasing chances of
  incompatibilities (thanks PDL for reporting)
x Fixed escaping issues in the noscript.js preference file
  (thanks PDL for reporting)

v 2.9.5rc36
=============================================================
x Fixed big whitelists being reset to default permissions on
  e10s-enabled browsers (thanks sabret00the and Internet User
  for reporting)

v 2.9.5rc35
=============================================================
x Better fix for some embedding permissions issues (thanks
  barbaz for reporting)
x MediaSource blocking support (Tor Project)
x Better handling of media types loaded as top-level
  documents
x Declared (but untested) Palemoon support (thanks barbaz)

v 2.9.5rc33
=============================================================
x [System Principal] included in the mandatory allowed list
^ Partial fix for some embedding permissions issues (barbaz)

v 2.9.5rc32
=============================================================
x Fixed allow scripts globally requiring a restart (thanks
  FFreestyleRR for reporting

v 2.9.5rc31
=============================================================
x Fixed embeddings autoreload on e10s-disabled browsers

v 2.9.5rc30
=============================================================
x Improved autoreload responsiveness and precision
x Fixed IFrame over-blocking bug (thanks G113 for report)

v 2.9.5rc29
=============================================================
x Fixed sites involved in background requests being not
  reported in the UI, even if intercepted and/or blocked (
  thanks GH113 for reporting)
x Fixed typo in PasteHandler (thanks barbaz for reporting)

v 2.9.5rc28
=============================================================
x Fixed embedding-related automatic reload issues (thanks
  barbaz and tmeader for reporting)

v 2.9.5rc27
=============================================================
x Fixed compatibility regression with Firefox 45

v 2.9.5rc26
=============================================================
x [Surrogate] Fixed file:// replacements broken (thanks
  barbaz for reporting)

v 2.9.5rc25
=============================================================
x Fixed typo in XSS filter breaking JSON cross-site requests

v 2.9.5rc24
=============================================================
x Fixed automatic reload issues (thanks GH113 for reporting)

v 2.9.5rc23
=============================================================
x Fixed UI not always synchronized on startup (thanks GH113
  for reporting)
x Fixed incompatibilities with older Firefox down to 45
  (thanks barbaz for reporting)

v 2.9.5rc22
=============================================================
x Fixed automatic reload impossible to be disabled (thanks
  GH113 for reporting)
x Fixed UI initially not synced on new windows (thanks GH113
  for reporting)

v 2.9.5rc21
=============================================================
+ Full e10s compatibility
x Fixed bug in secure cookie enforcement upgrading all the
  unsecure cookies on secure connections even if a secure
  cookie for the domain existed, increasing chances of
  incompatibilities (thanks PDL for reporting)
x Fixed escaping issues in the noscript.js preference file
  (thanks PDL for reporting)

v 2.9.0.14
=============================================================
x Fixed live bookmarks in Firefox 48 or above

v 2.9.0.13
=============================================================
x Added missing "s" in noscript.mandatory/about:feeds

v 2.9.0.12
=============================================================
x Updated DNT implementation to match the most recent spec
  about navigator.doNotTrack values (thanks Francois Merier)
x [XSS] Better compatibility with Unionbank's website (thanks
  Brent for reporting)
x Fixed bug 1278735 (JavaScript disabled in private windows)
x Fixed JSON viewer not working
x about:feed in the mandatory whitelist to fix bug 1272139
x [XSS] Disable JavaScript on FTP-served pages when a
  potential  DOM XSS threat is detected (thanks Emanuel
  Bronshtein @e3amn2l for reporting)
x Fixed DOS through script-triggered ClickToPlay confirmation
  dialogs in a loop (thanks Emanuel Bronshtein @e3amn2l for
  reporting)
x Fixed placeholder links might be potentially used as XSS
  vectors if stars were properly aligned(thanks Emanuel
  Bronshtein @e3amn2l for reporting)
x [Surrogate] Updated google-analytics.com replacement (
  thanks noscriptsplox)
x [XSS] Fixed regression (thanks Masato Kinugawa for report)

v 2.9.0.12rc2
=============================================================
x Updated DNT implementation to match the most recent spec
  about navigator.doNotTrack values (thanks Francois Merier)
x [XSS] Better compatibility with Unionbank's website (thanks
  Brent for reporting)
x Fixed bug 1278735 (JavaScript disabled in private windows)
x Fixed JSON viewer not working
x about:feed in the mandatory whitelist to fix bug 1272139
x [XSS] Disable JavaScript on FTP-served pages when a
  potential  DOM XSS threat is detected (thanks Emanuel
  Bronshtein @e3amn2l for reporting)
x Fixed DOS through script-triggered ClickToPlay confirmation
  dialogs in a loop (thanks Emanuel Bronshtein @e3amn2l for
  reporting)
x Fixed placeholder links might be potentially used as XSS
  vectors if stars were properly aligned(thanks Emanuel
  Bronshtein @e3amn2l for reporting)

v 2.9.0.12rc1
=============================================================
x [Surrogate] Updated google-analytics.com replacement (
  thanks noscriptsplox)
x [XSS] Fixed regression (thanks Masato Kinugawa for report)

v 2.9.0.11
=============================================================
x [XSS] Fixed infrastructure issue preventing one filter from
  being automatically synchronized with Mozilla's source code
  as designed (thanks .mario and Maxim Rupp for reporting)
x [XSS] Added filtering for a potential CSRF vector (thanks
  Masato Kinugawa for reporting)

v 2.9.0.10
=============================================================
x Fixed placeholder activation in Gecko 45 and above

v 2.9.0.9
=============================================================
x [XSS] Compatibility exception for the Printfriendly add-on
x Removed msn.com from the default whitelist, since it seems
  to be unable to support HTTPS consistently

v 2.9.0.8
=============================================================
x Fixed incompatibility with Firefox below version 38
x Tentative fix for an issue with explicit ports in HTTPS
  upgraded URLs

v 2.9.0.7
=============================================================
x [HTTPS] Removed legacy redirection methods when redirectTo()
  is available in HTTP channels, fixing YouTube embedding
  problem
x Replaced newChannel() with newChannel2() on Gecko 48

v 2.9.0.6
=============================================================
x [HTTPS] Limit httpsDefWhitelist effect to document loads
x [XSS] Reduced eval aliasing checks false positives

v 2.9.0.5
=============================================================
x [XSS] Improved detection of computed property accessors
  (thanks Emanuel Bronshtein @e3amn2l for report)
x [HTTPS] Fixed httpsDefWhitelist breaking OCSP (thanks al_9x
  for reporting)
x [HTTPS] Fixed httpsDefWhitelist breaking yui.yahooapis.com
  (thanks Rob Greenberg for reporting
x [XSS] Fixed OpenID-related false positive
x Restored Nightly compatibility broken by bug 1253016
x Fixed regression in HTTPS enforcing exceptions
x [Surrogate] Updated googletag replacement (thanks barbaz)
x [Surrogate] Updated ga replacement (thanks barbaz)
x [XSS] Improved replacement for dangerous keywords/built-in
  properties (thanks Emanuel Bronshtein @e3amn2l for report)
x [HTTPS] noscript.httpsDefWhitelist option to automatically
  upgrade to HTTPS sites found in the default whitelist
  (enabled by default, thanks  Mazin Ahmed for reporting)

v 2.9.0.4
=============================================================
x Fixed InjectionChecker over-optimization bug (thanks Maxim
  Rupp for reporting)
x [l10n] Updated ar (thanks Nassim Dhaher)

v 2.9.0.3
=============================================================
x Fixed NoScript blocking WebExtensions by default
x Fixed XSS filter JSON sanitization bug (thanks Maxim Rupp
  for reporting)

v 2.9.0.2
=============================================================
x Version bump to work around AMO's 404 when serving 2.9.0.1

v 2.9.0.1
=============================================================
x Replaced "for each ()" with "for (... of ...)"
x Removed array comprehension usage
- Removed compatibility with Gecko lt 13
x Fixed conflict w/ KeeFox + CTR (thanks amloessb for report)
  https://forums.informaction.com/viewtopic.php?p=80581

v 2.9
=============================================================
x [e10s] Fixed "Temporarily allow top-level sites by default"
  broken by Electrolysis
x Fixed "key.revokeTemp" preference management bug (thanks
  palme for patch)

v 2.7
=============================================================
- Removed informaction.com, flashgot.net and maone.net from
  the default whitelist to reduce the potential attack
  surface
- Removed vestigial noscript.forbidData preference
x Fixed shorthands not checked for ftp(s) sites (thanks
  Leon Winter for patch)
x [Surrogate] Fixed googletag replacement (thanks barbaz)
x Fixed incompatibility with importScript() from workers
  breaking new reCaptcha implementation (thanks Mr_KrzYch00
  for reporting)

v 2.6.9.39
=============================================================
x Work-around for a XSS "false positive" caused by nwolb.com
  passing Javascript code across subdomains in window.name
  (thanks Sagiv Masvari for reporting)

v 2.6.9.38
=============================================================
x Fixed breakage due to const declarations behavior changes
  in latest Firefox nightlies (thanks to all the people in
  https://bugzilla.mozilla.org/show_bug.cgi?id=1212707)

v 2.6.9.37
=============================================================
x Fixed bug: launching a bookmarklet on about:newTab caused
  allow scripts globally for that tab (thanks James Strange
  for reporting)
x [L10n] Updated French translation (thanks Syl)
x Fixed NOSCRIPT element hidden on Javascript-disabled pages
  (moz bug 1208818)
x [Surrogate] enhanced gogletags.com replacement (thanks
  therube)
x Fixed subtle bug in load context association causing an
  origin mismatch in one corner case (thanks Gareth Heyes
  for reporting)

v 2.6.9.37rc2
=============================================================
x Fixed bug: launching a bookmarklet on about:newTab caused
  allow scripts globally for that tab (thanks James Strange
  for reporting)
x [L10n] Updated French translation (thanks Syl)
x Fixed NOSCRIPT element hidden on Javascript-disabled pages
  (moz bug 1208818)

v 2.6.9.37rc1
=============================================================
x [Surrogate] enhanced gogletags.com replacement (thanks
  therube)
x Fixed subtle bug in load context association causing an
  origin mismatch in one corner case (thanks Gareth Heyes
  for reporting)

v 2.6.9.36
=============================================================
x [L10n] Fixed typo in nb-NO (thanks Mikkel H.)
x [e10s] Fixed top-level site auto-whitelisting broken
x [e10s] Fixed MozBug 1196477 (crash with allowLocalLinks)
x Shorthands reliability improvements
x [ClearClick] fixed console spam due to missing XPCOM
  interfaces for HTML elements
x In order to help Netflix users with the new video delivery
  system, users who have netflix.com already in their
  whitelist get https://*.nflxvideo.net whitelisted as
  well on upgrade

v 2.6.9.35
=============================================================
x [Surrogate] googletagservices.com replacement now supports
  custom googletag objects (thanks barbaz)
x [Surrogate] fixed surrogates stopped working on older
  Gecko versions (thanks barbaz)
x [XSS] Work-around for false positive on some Yahoo! URLs
x Corrected mistyped about:pocket-saved whitelist entry
x Fixed race condition in ABE options observer causing
  l.getRowCount() console spam

v 2.6.9.35rc2
=============================================================
x [Surrogate] fixed surrogates stopped working on older
  Gecko versions - take 2

v 2.6.9.35rc1
=============================================================
x [Surrogate] googletagservices.com replacement now supports
  custom googletag objects (thanks barbaz)
x [Surrogate] fixed surrogates stopped working on older
  Gecko versions
x [XSS] Work-around for false positive on some Yahoo! URLs
x Corrected mistyped about:pocket-saved whitelist entry
x Fixed race condition in ABE options observer causing
  l.getRowCount() console spam

v 2.6.9.34
=============================================================
x [Surrogate] Fixed a bug preventing some replacements from
  running
x [XSS] Fixed over-optimized JSON and dots erasure allowing
  for a filter bypass in specific (and likely rare)
  circumstances (thanks Gareth Heyes for reporting)

v 2.6.9.34rc2
=============================================================
x [Surrogate] Fixed a bug preventing some replacements from
  running

v 2.6.9.34rc1
=============================================================
x [XSS] Fixed over-optimized JSON and dots erasure allowing
  for a filter bypass in specific (and likely rare)
  circumstances (thanks Gareth Heyes for reporting)

v 2.6.9.33
=============================================================
x [XSS] Fixed bug in minimal inline JavaScript fragment
  detection (thanks Frederik Braun for reporting)
x [L10n] Updated Russian (thanks fatboy).
x [Surrogate] fixed scope conflicts caused by the $S() object
  replacement wrapper (e.g. with some EA games)

v 2.6.9.33rc2
=============================================================
x [XSS] Fixed bug in minimal inline JavaScript fragment
  detection (thanks Frederik Braun for reporting)
x [L10n] Updated Russian (thanks fatboy).

v 2.6.9.33rc1
=============================================================
x [Surrogate] fixed scope conflicts caused by the $S() object
  replacement wrapper (e.g. with some EA games)

v 2.6.9.32
=============================================================
+ Added domains required for Netflix playback to the default
  whitelist
x Fixed inline script blocking broken by latest Nightlies
x Fixed NOSCRIPT elements not being shown in script-blocked
  pages on Firefox betas
x [Surrogate] shimmed or replaced code causing deprecations
x [Surrogate] updated googletag replacement (thanks barbaz)
x [XSS] Fixed regression in minimal inline JavaScript
  fragment detection (thanks Gareth Heyes for reporting)
x Fixed edge case causing JavaScript redirections detection
  to fail on http://qklnk.co/ (thanks Jess Hampshire for RFE)

v 2.6.9.32rc4
=============================================================
x [Surrogate] fixed regression causing some replacements
  not to work correctly.

v 2.6.9.32rc3
=============================================================
+ Added domains required for Netflix playback to the default
  whitelist
x Fixed inline script blocking broken by latest Nightlies
x Fixed NOSCRIPT elements not being shown in script-blocked
  pages on Firefox betas
x [Surrogate] shimmed or replaced code causing deprecations
x [Surrogate] updated googletag replacement (thanks barbaz)

v 2.6.9.32rc2
=============================================================
x [XSS] Fixed regression in minimal inline JavaScript
  fragment detection (thanks Gareth Heyes for reporting)

v 2.6.9.32rc1
=============================================================
x Fixed edge case causing JavaScript redirections detection
  to fail on http://qklnk.co/ (thanks Jess Hampshire for RFE)

v 2.6.9.31
=============================================================
x [XSS] Fixed attribute injection checks regression (thanks
  Maxim Rupp and .mario of Cure53 for reporting)

v 2.6.9.30
=============================================================
x Fixed noscript.allowWhitelistUpdates preference being
  ignored
+ Filtering out whitelist additions not required by the
  the specific current browser type and version
+ Added about:pocket-save and about:pocket-signup to the
  default whitelist
x More restrictive and accurate INCLUSION type check   (thanks
  Meee for reporting)
x [XSS] Further invalid characters optimization refinement
  (thanks Mathias Karlsson for reporting)
x [XSS] Fixed XML stripping optimization to prevent inline
  injections (thanks Mathias Karlsson for reporting)
x Default whitelist maintenance: removed prototypejs.org,
  cdnjs.cloudflare.com; restored maps.googleapis.com
x [XSS] Updated inline event handlers related code preventing
  potential 2nd order injections on very badly coded websites
  (thanks Mathias Karlsson for reporting)

v 2.6.9.30rc5
=============================================================
x Fixed about:packet-save whitelisted instead of
  about:pocket-saved
x Fixed noscript.allowWhitelistUpdates preference being
  ignored
+ Filtering out whitelist additions not required by the
  the specific current browser type and version

v 2.6.9.30rc4
=============================================================
+ Added about:pocket-save and about:pocket-signup to the
  default whitelist
x More restrictive and accurate INCLUSION type check   (thanks
  Meee for reporting)

v 2.6.9.30rc3
=============================================================
x [XSS] Further invalid characters optimization refinement
  (thanks Mathias Karlsson for reporting)

v 2.6.9.30rc2
=============================================================
x [XSS] Fixed XML stripping optimization to prevent inline
  injections (thanks Mathias Karlsson for reporting)
x Default whitelist maintenance: removed prototypejs.org,
  cdnjs.cloudflare.com; restored maps.googleapis.com

v 2.6.9.30rc1
=============================================================
x [XSS] Updated inline event handlers related code preventing
  potential 2nd order injections on very badly coded websites
  (thanks Mathias Karlsson for reporting)

v 2.6.9.29
=============================================================
x [XSS] Improved specificity of invalid characters
  optimization to remove a string literal breaking detection
  bypass (thanks Mathias Karlsson for reporting)

v 2.6.9.28
=============================================================
x Narrowed googleapis.com default whitelist entry to
  ajax.googleapis.com
x [Surrogate] Updated gigya.com and 2mdn.net replacements
  (thanks saaib)

v 2.6.9.27
=============================================================
x Fixed media elements being blocked on first (uncached)
  request (thanks RobertDrew for reporting)
+ noscript.middlemouse_temp_allow_main_site about:config
  preference to control whether middle-clicking the toolbar
  button should allow current top document's site (thanks
  barbaz)
x [L10n] Updated Belarusian (thanks Dzmitry Drazdou)
+ Default whitelist retroactive removal ability
x Removed vjs.zendcdn.net from the default whitelist

v 2.6.9.26
=============================================================
x Extended the redirectTo() safety net for to all the internal
  redirections
x Work-around for redirectTo() breaking Flash plugin
  subrequests
x Got ChannelReplacement backed by HTTPChannel.redirectTo()
  whenever possible (should fix moz-bug 1153256 for good)
x Fixed double redirection in HTTPS enforcing

v 2.6.9.26rc3
=============================================================
x Extended the redirectTo() safety net for to all the internal
  redirections

v 2.6.9.26rc2
=============================================================
x Work-around for redirectTo() breaking Flash plugin
  subrequests

v 2.6.9.26rc1
=============================================================
x Got ChannelReplacement backed by HTTPChannel.redirectTo()
  whenever possible (should fix moz-bug 1153256 for good)
x Fixed double redirection in HTTPS enforcing

v 2.6.9.25
=============================================================
x Fixed regression preventing HTTPS enforcing exceptions from
  being honored

v 2.6.9.24
=============================================================
x Fix for intermittent crashes on older Gecko versions

v 2.6.9.23
=============================================================
x Work-around for moz-bug 1167371
x Fixed fatal regression on Firefox 34 and below
x Improved backward compatibility
x Work-around for anonymized plugin subrequests being vetoed
  by channel event sink
x Fixed backward compatibility PopupBoxObject shim
x [E10s] Fixed cascading permissions broken when checks are
  performed cross-process
x [Surrogate] Removed deprecated "for each" constructs from
  replacements
x [L10n] Updated ru-RU (thanks negodnik)
x Tentative fix for Bug 1153256 (thanks Dragana Damjanovic)
+ Added about:preferences to the mandatory whitelist
- Removed legacy STS support
+ [Surrogate] 2mdn.net inclusion replacement (thanks barbaz)
+ [E10s] Restored inline JavaScript blocking

v 2.6.9.23rc4
=============================================================
x Work-around for moz-bug 1167371
x Fixed fatal regression on Firefox 34 and below
x Improved backward compatibility

v 2.6.9.23rc3
=============================================================
x Work-around for anonymized plugin subrequests being vetoed
  by channel event sink
x Fixed backward compatibility PopupBoxObject shim

v 2.6.9.23rc2
=============================================================
x [E10s] Fixed cascading permissions broken when checks are
  performed cross-process
x [Surrogate] Removed deprecated "for each" constructs from
  replacements
x Fixed missing default preferences (thanks barbaz)

v 2.6.9.23rc1
=============================================================
x [L10n] Updated ru-RU (thanks negodnik)
x Tentative fix for Bug 1153256 (thanks Dragana Damjanovic)
+ Added about:preferences to the mandatory whitelist
- Removed legacy STS support
+ [Surrogate] 2mdn.net inclusion replacement (thanks barbaz)
+ [E10s] Restored inline JavaScript blocking

v 2.6.9.22
=============================================================
+ [Surrogate] Generalized OWASP antiClickjacking replacement
  (thanks barbaz for RFE)
+ [Surrogate] Wordpress scriptless site auto-show replacement
+ bootstrapcdn.com in default whitelist

v 2.6.9.21
=============================================================
+ Added "mediasource:" to the mandatory whitelist (Moz-Bug
  1151638)
x [Surrogate] Updated googletagservices.com replacement
  (thanks barbaz)
x Better compatibility with SDK-based add-ons using data:
  URIs (thanks Mingyi Liu for report)

v 2.6.9.20rc2
=============================================================
x Improved "Recently blocked sites..." recording
x Fixed inconsistencies in data: URIs handling (thanks barbaz
  for reporting)

v 2.6.9.20rc2
=============================================================
x Improved "Recently blocked sites..." recording

v 2.6.9.20rc1
=============================================================
x Fixed inconsistencies in data: URIs handling (thanks barbaz
  for reporting)

v 2.6.9.19
=============================================================
+ [Surrogate] .gigya.com replacement provided by barbaz
+ [Surrogate] js.stripe.com replacement provided by barbaz
+ Improved usability of new Yahoo! video activation (thanks
  Glenn for reporting)
+ Added googlevideo.com to the default whitelist because it's
  now required to play Youtube movies (thanks barbaz for RFE)

v 2.6.9.19rc2
=============================================================
+ [Surrogate] .gigya.com replacement provided by barbaz
+ [Surrogate] js.stripe.com replacement provided by barbaz

v 2.6.9.19rc1
=============================================================
+ Improved usability of new Yahoo! video activation (thanks
  Glenn for reporting)
+ Added googlevideo.com to the default whitelist because it's
  now required to play Youtube movies (thanks barbaz for RFE)

v 2.6.9.18
=============================================================
x Fixed restrictSubdocScripts/globalHTTPSWhitelist
  interaction issue (thanks Tor Project for report)
x Fixed regression always disabling scripts whenever site's
  host name is a IPv6 literal (thanks  ipv6user for report)
x Fixed menu automatic disappearance on mouse exit broken by
  Firefox 36 changes (thanks randavis, cumdacon and barbaz
  for report)

v 2.6.9.18rc3
=============================================================
x Fixed restrictSubdocScripts/globalHTTPSWhitelist
  interaction issue (thanks Tor Project for report)

v 2.6.9.18rc2
=============================================================
x Fixed regression always disabling scripts whenever site's
  host name is a IPv6 literal (thanks  ipv6user for report)

v 2.6.9.18rc1
=============================================================
x Fixed menu automatic disappearance on mouse exit broken by
  Firefox 36 changes (thanks randavis, cumdacon and barbaz
  for report)

v 2.6.9.17
=============================================================
x Fixed cascadePermissions/globalHTTPSWhitelist interaction
  issue with IFRAMEs (thanks Tor Project for report)
x Fixed cascadePermissions being enforced also if the top
  document is implicitly allowed by the globalHTTPSWhitelist
  policy, rather than explicitly whitelisted, causing HTTP
  subdocument and scripts to be unintendendly allowed when
  the top document is HTTPS (thanks Tor Project for report)
x [Surrogate] Update Google Analytics replacement (thanks
  barbaz)

v 2.6.9.17rc2
=============================================================
x Fixed cascadePermissions/globalHTTPSWhitelist interaction
  issue with IFRAMEs (thanks Tor Project for report)

v 2.6.9.17rc1
=============================================================
x Fixed cascadePermissions being enforced also if the top
  document is implicitly allowed by the globalHTTPSWhitelist
  policy, rather than explicitly whitelisted, causing HTTP
  subdocument and scripts to be unintendendly allowed when
  the top document is HTTPS (thanks Tor Project for report)
x [Surrogate] Update Google Analytics replacement (thanks
  barbaz)

v 2.6.9.16
=============================================================
+ [Surrogate] Updated Gravatar surrogate (thanks barbaz)
+ Additional HTML sanitization when pasting rich text into
  content-editable elements (thanks .mario for RFE)
+ Introduced framework for E10s migration, starting with new
  features and fixes
x Removed deprecated let () expressions from the code base

v 2.6.9.15
=============================================================
+ Fixed regression in 2.6.9.12 causing data: URI documents
  to be scripting-enabled (thanks GOF for tweet)

v 2.6.9.14
=============================================================
+ [Surrogate] OWASP legacy Javascript-based "antiClickjack"
  protection surrogate to unhide "protected" pages when
  scripting is disabled (thanks Thrawn)
+ Restored noscript.forbidXHR functionality trying to make it
  more web-compatible (thanks barbaz for RFE)

v 2.6.9.14rc2
=============================================================
+ [Surrogate] OWASP legacy Javascript-based "antiClickjack"
  protection surrogate to unhide "protected" pages when
  scripting is disabled (thanks Thrawn)

v 2.6.9.14rc1
=============================================================
+ Restored noscript.forbidXHR functionality trying to make it
  more web-compatible (thanks barbaz for RFE)

v 2.6.9.13
=============================================================
x [XSS] Fixed bugs in comment stripping optimization (thanks
  Masato Kinugawa for reporting)
x [XSS] Better protection against some ES6 attacks (thanks
  Masato Kinugawa for reporting)
- Removed support for  XMLHttpRequest blocking
  (noscript.forbidXHR preference). The same functionality,
  if really needed, can still be achieved through ABE anyway.

v 2.6.9.13rc3
=============================================================
x [XSS] Fixed regression in stripping optimizations (thanks
  Masato Kinugawa for reporting)

v 2.6.9.13rc2
=============================================================
x [XSS] Fixed bug in comment stripping optimization (thanks
  Masato Kinugawa for reporting)

v 2.6.9.13rc1
=============================================================
x [XSS] Better protection against some ES6 attacks (thanks
  Masato Kinugawa for reporting)
- Removed support for  XMLHttpRequest blocking
  (noscript.forbidXHR preference). The same functionality,
  if really needed, can still be achieved through ABE anyway.

v 2.6.9.12
=============================================================
x Fixed origin checking bug causing sandboxed IFRAMEs to have
  scripting always disabled (thanks Ellad Tadmor for report)

v 2.6.9.11
=============================================================
x [Surrogate] microsoftSupport surrogate to force the content
  to be shown if scripts are disabled (thanks thunderscript)
x Check private browsing against chrome rather than content
  windows (prevents annoying warning console messages)

v 2.6.9.10
=============================================================
x Fixed regression: permanently allow a web site erasing
  temporary whitelist items (thanks smersh for reporting)
x Fixed private windows detection for UI adaptation broken in
  SeaMonkey (thanks barbaz for reporting)
x Made the Permanent "allow" commands in private windows'
  checkbox look and behave like the other options in the
  "Appearance" tab, i.e. controlling the visibility of the
  menu item by the same name

v 2.6.9.10rc2
=============================================================
x Fixed regression: permanently allow a web site erasing
  temporary whitelist items (thanks smersh for reporting)

v 2.6.9.10rc1
=============================================================
x Fixed private windows detection for UI adaptation broken in
  SeaMonkey (thanks barbaz for reporting)
x Made the Permanent "allow" commands in private windows'
  checkbox look and behave like the other options in the
  "Appearance" tab, i.e. controlling the visibility of the
  menu item by the same name

v 2.6.9.9
=============================================================
x Updated GPL.txt and NoScript_License.txt with current FSF
  information (thanks Thomas Spura for reporting)
x Fixed regression causing "Revoke temporary permissions"
  gitches (thanks barbaz for reporting)
x Moved the Permanent "allow" commands in private windows'
  menu toggle next to the 'Options' command

v 2.6.9.8
=============================================================
+ 'Permanent "allow" commands in private windows' preference
  in NoScript Options|Appearance (inverse of
  noscript.volatilePrivatePermissions)
+ 'Permanent "allow" commands in private windows' toggle
  in NoScript menu while in Private Browsing mode, controlled
  by noscript.showVolatilePrivatePermissionsToggle
x Fixed regression in Cascade Permissions mode (thanks Kitty
  Box for reporting)
+ Fixed whitelisting regression on Gecko 25 and below (e.g.
  Palemoon)
+ Actually prevent temporary whitelist items from being saved
  in prefs (thanks to Mike Perry)

v 2.6.9.8rc3
=============================================================
+ 'Permanent "allow" commands in private windows' preference
  in NoScript Options|Appearance (inverse of
  noscript.volatilePrivatePermissions)
+ 'Permanent "allow" commands in private windows' toggle
  in NoScript menu while in Private Browsing mode, controlled
  by noscript.showVolatilePrivatePermissionsToggle
x Fixed regression in Cascade Permissions mode (thanks Kitty
  Box for reporting)

v 2.6.9.8rc2
=============================================================
+ Fixed whitelisting regression on Gecko 25 and below (e.g.
  Palemoon)

v 2.6.9.8rc1
=============================================================
+ Actually prevent temporary whitelist items from being saved
  in prefs (thanks to Mike Perry)

v 2.6.9.7
=============================================================
x Fixed inconsistencies in the globalHttpsWhitelist option
  implementation (thanks Mike Perry for reporting)
+ Volatile temporary whitelist, never gets saved to disk
  (thanks to Tor Project for sponsorship)
+ Never show permanent whitelist modifying commands when in
  private mode unless the noscript.volatilePrivatePermissions
  preference is false (thanks to Tor Project for sponsorship)
+ noscript.allowWhitelistUpdate preference to control whether
  NoScript should be able to tweak the whitelist on version
  updates when the 3rd party requirements for an already
  whitelisted website change (thanks Thencent for RFE)

v 2.6.9.7rc2
=============================================================
x Fixed inconsistencies in the globalHttpsWhitelist option
  implementation (thanks Mike Perry for reporting)

v 2.6.9.7rc1
=============================================================
+ Volatile temporary whitelist, never gets saved to disk
  (thanks to Tor Project for sponsorship)
+ Never show permanent whitelist modifying commands when in
  private mode, unless the oscript.volatilePrivatePermissions
  preference is false (thanks to Tor Project for sponsorship)
+ noscript.allowWhitelistUpdate preference to control whether
  NoScript should be able to tweak the whitelist on version
  updates when the 3rd party requirements for an already
  whitelisted website change (thanks Thencent for RFE)

v 2.6.9.6
=============================================================
+ Built-in force HTTPS list, seeded with www.youtube.com
x Work-around for bogus Youtube embedded frame activation
  patterns (thanks al_9x for reporting)
x Fixed bookmarklet execution regression in older Firefox
  versions (thanks 5keeve for reporting)
x Fixed subdocuments of a [System Principal] page not being
  allowed when they should in cascade permission modes (
  thanks hjkl for reporting)

v 2.6.9.6rc3
=============================================================
+ Built-in force HTTPS list, seeded with www.youtube.com
x Work-around for bogus Youtube embedded frame activation
  patterns (thanks al_9x for reporting)

v 2.6.9.6rc2
=============================================================
x Fixed bookmarklet execution regression in older Firefox
  versions (thanks 5keeve for reporting)

v 2.6.9.6rc1
=============================================================
x Fixed subdocuments of a [System Principal] page not being
  allowed when they should in cascade permission modes (
  thanks hjkl for reporting)

v 2.6.9.5
=============================================================
x Fixed memory leak when a top-level browser window is closed
  (thanks cks for reporting)
x [XSS] compatibility tweak for swisspost.ch
x Miscellaneous HTTPS URLs lockdown
+ Support for full-encrypted https://noscript.net
x Updated Twitter surrogate (thanks ozjuggler and barbaz)
x Work-around for thumbnail generation protection being
  broken by some add-ons
x Fully disable background processed thumbnail generation
  unless noscript.bgThumbs.allowed about:config preference
  is set to true
x Control JavaScript enabled in background thumbail
  generation through the noscript.bgThumbs.disableJS
  about:config preference
+ Forcing remote browsers used for thumbnail generation to
  disable JavaScript (thanks vpoint for reporting)
+ [Surrogate] Invodo dummy replacement (thanks barbaz)

v 2.6.9.5rc3
=============================================================
x Fixed memory leak when a top-level browser window is closed
  (thanks cks for reporting)
x [XSS] compatibility tweak for swisspost.ch
x Miscellaneous HTTPS URLs lockdown

v 2.6.9.5rc2
=============================================================
+ Support for full-encrypted https://noscript.net
x Updated Twitter surrogate (thanks ozjuggler and barbaz)
x Work-around for thumbnail generation protection being
  broken by some add-ons
x Fully disable background processed thumbnail generation
  unless noscript.bgThumbs.allowed about:config preference
  is set to true
x Control JavaScript enabled in background thumbail
  generation through the noscript.bgThumbs.disableJS
  about:config preference

v 2.6.9.5rc1
=============================================================
+ Forcing remote browsers used for thumbnail generation to
  disable JavaScript (thanks vpoint for reporting)
+ [Surrogate] Invodo dummy replacement (thanks barbaz)

v 2.6.9.4
=============================================================
+ Added vimeocdn.com as a vimeo.com dependency if already
  whitelisted
+ [Surrogate] Enabling imgserve.com age verification button
  even if JavaScript is disabled
x Fixed IP6 to IP4 mapping bug (thanks stack / inventati)

v 2.6.9.3
=============================================================
x More accurate referrer checks for some edge cases (thanks
  AlbertMTom for reporting)
x [ABE] More restrictive local IP checks (thanks AlbertMTom
  for reporting)
+ More permissive AddressMatcher IP parser
+ [XSS] Improved sensitivity (thanks Masato Kinugawa)

v 2.6.9.3rc3
=============================================================
x More accurate referrer checks for some edge cases (thanks
  AlbertMTom for reporting)
x Fixed regression in LOCAL IP matching for 192.168.0.0/16
  (thanks barbaz for reporting)

v 2.6.9.3rc2
=============================================================
x [ABE] More restrictive local IP checks (thanks AlbertMTom
  for reporting)
+ More permissive AddressMatcher IP parser

v 2.6.9.3rc1
=============================================================
+ [XSS] Improved sensitivity (thanks Masato Kinugawa)

v 2.6.9.2
=============================================================
+ [XSS] Improved sensitivity (thanks Masato Kinugawa)

v 2.6.9.1
=============================================================
+ [XSS] focus-based exfiltration protection (thanks Masato
  Kinugawa for reporting)
x [XSS] Fixed false positive in risky operators detection
  (thanks Roman Vock for reporting)

v 2.6.9.1rc2
=============================================================
+ [XSS] Improved focus-based exfiltration protection

v 2.6.9.1rc1
=============================================================
+ [XSS] focus-based exfiltration protection (thanks Masato
  Kinugawa for reporting)
x [XSS] Fixed false positive in risky operators detection
  (thanks Roman Vock for reporting)

v 2.6.9
=============================================================
+ [XSS] Improved location-based exfiltration protection
  (thanks Masato Kinugawa for reporting)
+ [Surrogate] login.person.org inclusion (thanks barbaz)
x [XSS] Fixed 2.6.8.43 regressions
x [XSS] Improved specificity for eval-like patterns
+ Switched to a treeview for faster management of very long
  whitelists (thanks barbaz for patch)
x Tentative work-around for potential performance problems
  reportedly related to Australis support

v 2.6.9rc4
=============================================================
+ [XSS] Fixed bug in location-based exfiltration protection
  (thanks Masato Kinugawa for reporting)

v 2.6.9rc3
=============================================================
+ [XSS] Improved location-based exfiltration protection
  (thanks Masato Kinugawa for reporting)

v 2.6.9rc2
=============================================================
+ [Surrogate] login.person.org inclusion (thanks barbaz)
x [XSS] Fixed 2.6.8.43 regressions
x [XSS] Improved specificity for eval-like patterns

v 2.6.9rc1
=============================================================
+ Switched to a treeview for faster management of very long
  whitelists (thanks barbaz for patch)
x Tentative work-around for potential performance problems
  reportedly related to Australis support
x [XSS] Fixed 2.6.8.43 regressions

v 2.6.8.43
=============================================================
x [XSS] Protection against some exfiltration attacks based on
  arithmetic operators (thanks Masato Kinugawa and File
  Descriptor AKA XSS Jigsaw for reporting)

v 2.6.8.42
=============================================================
+ User-facing "Reload the current tab only" option
x Fixed subtle bug in ScriptSurrogate.replaceScript()
x Fixed HTTPS and cascading permission policies not applying
  to XHR and XBL checks
x [XSS] Fixed ES6-based bypasses (thanks Masato Kinugawa for
  reporting)
+ [XSS] window.name exfiltration protection (thanks Masato
  Kinugawa for reporting)
x Fixed script sources enumeration breakage in Firefox 35
 (Moz Bug 1068508, thanks Octoploid for reporting)

 v 2.6.8.42rc3
=============================================================
+ User-facing "Reload the current tab only" option
x [XSS] Improved window.name exfiltration protection
  (thanks Masato Kinugawa for reporting)

v 2.6.8.42rc2
=============================================================
x Fixed subtle bug in ScriptSurrogate.replaceScript()
x Fixed HTTPS and cascading permission policies not applying
  to XHR and XBL checks
x [XSS] Fixed ES6-based bypasses (thanks Masato Kinugawa for
  reporting)
+ [XSS] window.name exfiltration protection (thanks Masato
  Kinugawa for reporting)

v 2.6.8.42rc1
=============================================================
x Fixed script sources enumeration breakage in Firefox 35
 (Moz Bug 1068508, thanks Octoploid for reporting)

v 2.6.8.41
=============================================================
x Improved Australis toolbar compatibility (thanks Quicksaver
  for help)
x Added "Always ask" checkbox to the removal confirmation
  dialog (thanks agaxwtmp for RFE)
x Fixed Options dialog broken on ancient Firefox versions
x [XSS] Fixed false positive within *.adxns.com

v 2.6.8.41rc3
=============================================================
x Improved Australis toolbar compatibility (thanks Quicksaver
  for help)

v 2.6.8.41rc2
=============================================================
x Added "Always ask" checkbox to the removal confirmation
  dialog (thanks agaxwtmp for RFE)
x Fixed Options dialog broken on ancient Firefox versions

v 2.6.8.41rc1
=============================================================
x Improved Australis toolbar compatibility (thanks Quicksaver
  for patch)
x [XSS] Fixed false positive within *.adxns.com

v 2.6.8.40
=========================================================================
x Fixed regression causing script inclusions with non-standard ports to
  be always blocked
x [ABE] Improved ruleset editing UI (thanks barbaz for patch)

v 2.6.8.40rc2
=========================================================================
x Fixed regression causing script inclusions with non-standard ports to
  be always blocked

v 2.6.8.40rc1
=========================================================================
x [ABE] Improved ruleset editing UI (thanks barbaz for patch)

v 2.6.8.39
=========================================================================
x [Surrogate] Removed DARLA surrogate and reimplemented its work-around
  as a XSS filter exception
x [Bookmarklets] Fixed bookmarklets broken when JavaScript is enabled
  (thanks therube for reporting)
x [Surrogate] Work-around for DARLA surrogate breaking Yahoo! Mail

v 2.6.8.39rc2
=========================================================================
x [Surrogate] Removed DARLA surrogate and reimplemented its work-around
  as a XSS filter exception
x [Bookmarklets] Fixed bookmarklets broken when JavaScript is enabled
  (thanks therube for reporting)

v 2.6.8.39rc1
=========================================================================
x [Surrogate] Work-around for DARLA surrogate breaking Yahoo! Mail

v 2.6.8.38
=========================================================================
x Fixed regression preventing Youtube movies from playing
x Completed work-around for Firefox's Bug 1044351
x [Surrogate] Improved Yahoo! DARLA source matching

v 2.6.8.38rc2
=========================================================================
x Fixed regression preventing Youtube movies from playing

v 2.6.8.38rc1
=========================================================================
x Completed work-around for Firefox's Bug 1044351
x [Surrogate] Improved Yahoo! DARLA source matching

v 2.6.8.37
=========================================================================
x Made the new additional script blocking policies more consistent with
  other features (e.g. the XSS filter)
x NoScript's toolbar button is now friendlier to other Australis-enabled
  add-ons
x Work-around for Firefox's Bug 1044351 (thanks al_9x for RFE)
x [XSS] Support for new insidious ES6 constructs introduced in Firefox 34
  (thanks .mario for reporting)
x [HTTPS] Experimental "Allow HTTPS scripts globally on HTTPS documents"
   mode
x [Surrogate] Yahoo! "DARLA" ads loader post-execution surrogate prevents
  the browser from stalling due to the many window.name-based XSSes
  intentionally used by this ads delivery script

v 2.6.8.37rc3
=========================================================================
x Made the new additional script blocking policies more consistent with
  other features (e.g. the XSS filter)
x NoScript's toolbar button is now friendlier to other Australis-enabled
  add-ons
x Work-around for Firefox's Bug 1044351 (thanks al_9x for RFE)

v 2.6.8.37rc2
=========================================================================
x [XSS] Support for new insidious ES6 constructs introduced in Firefox 34
  (thanks .mario for reporting)
x [HTTPS] Experimental "Allow HTTPS scripts globally on HTTPS documents"
   mode

v 2.6.8.37rc1
=========================================================================
x [Surrogate] Yahoo! "DARLA" ads loader post-execution surrogate prevents
  the browser from stalling due to the many window.name-based XSSes
  intentionally used by this ads delivery script

v 2.6.8.36
=========================================================================
x [Surrogate] Updated adf.ly replacement (thanks kasper93 for coding)
x [Surrogate] Updated connect.facebook.net replacement
x Fixed bookmarklet emulation compatibility issue breaking some add-ons
  which rely on the new getShortcutOrURIAndPostData() function signature
x Fixed regression causing preventing the Blocked Objects list from being
  manually reset

v 2.6.8.35
=========================================================================
x Improved compatibility with browser built-in Click To Play
+ Recently blocked sites are now recorded per-window (causing automatic
  oblivion of data from Private Browsing windows when they're closed)
+ Recently blocked sites are not collected at all unless the menu item
  is configured to be shown (thanks Barbaz for RFE and patch)

v 2.6.8.35rc2
=========================================================================
x Improved compatibility with browser built-in Click To Play

v 2.6.8.35rc1
=========================================================================
+ Recently blocked sites are now recorded per-window (causing automatic
  oblivion of data from Private Browsing windows when they're closed)
+ Recently blocked sites are not collected at all unless the menu item
  is configured to be shown (thanks Barbaz for RFE and patch)

v 2.6.8.34
=========================================================================
x Added "cdn.directvid.com/*.jsx" to inclusionTypeChecking.exceptions in
  in order to let the directvid video player work
x Better compatibility with null principal origins created by the
  Add-on SDK (thanks neilemon for reporting)

v 2.6.8.33
=========================================================================
x Fixed regression in smart reloading of just allowed HTML Media elements
  (thanks barbaz for reporting)

v 2.6.8.32
=========================================================================
x Fixed regression: NOSCRIPT element not shown on non-whitelisted pages
  (thanks Germán Ponte and Michael Kehrein for reporting)
x Replaced Ci.nsIDOMHTML(Video|Audio)Element (about to be removed) with
  window.(Video|Audio)Element counterparts (see Moz Bug 1034304)
x Fixed jammed icon on the navigation bar when "left clicking on toolbar
  icon toggles..." option is checked (thanks Larry for reporting)

v 2.6.8.32rc3
=========================================================================
x Fixed regression: NOSCRIPT element not shown on non-whitelisted pages
  (thanks Germán Ponte and Michael Kehrein for reporting)

v 2.6.8.32rc2
=========================================================================
x Replaced Ci.nsIDOMHTML(Video|Audio)Element (about to be removed) with
  window.(Video|Audio)Element counterparts (see Moz Bug 1034304)

v 2.6.8.32rc1
=========================================================================
x Fixed jammed icon on the navigation bar when "left clicking on toolbar
  icon toggles..." option is checked (thanks Larry for reporting)

v 2.6.8.31
=========================================================================
x Updated HTML5 and Gecko-specific markup elements list
x Fixed "too much recursion" book in bookmarklet emulation when executing
  window.open(..., "_self") (thanks al_9x)
x Improved icons consistence with cascading permissions
x Fixed 2.6.8.30rc1 regression: broken local file loads
x Make "[Temporarily] Allow all this page" affect only the top-level
  document's origin when cascading permissions mode is enabled
x [Surrogate] Fixed regression about a small change in sandbox principal
  management breaking some surrogates, including Google Analytics
x [CAPS] better compatibility with Firefox 30's restored checkloaduri
  prefs hack
+ UI support for cascadePermissions and restrictSubdocScripting
+ "NoScript Options|Advanced|Trusted|Cascade top document's permissions
  to 3rd party scripts" user-facing preference
+ "NoScript Options|Advanced|Untrusted|Block scripting in whitelisted
  subdocuments of non-whitelisted pages" user-facing preference
+ Backported cascadePermissions and restrictSubdocScripting support to
  ESR 24

v 2.6.8.30rc5
=========================================================================
x Updated HTML5 and Gecko-specific markup elements list
x Fixed "too much recursion" book in bookmarklet emulation when executing
  window.open(..., "_self") (thanks al_9x)

v 2.6.8.30rc4
=========================================================================
x Improved icons consistence with cascading permissions
x Fixed 2.6.8.30rc1 regression: broken local file loads

v 2.6.8.30rc3
=========================================================================
x Make "[Temporarily] Allow all this page" affect only the top-level
  document's origin when cascading permissions mode is enabled

v 2.6.8.30rc2
=========================================================================
x [Surrogate] Fixed regression about a small change in sandbox principal
  management breaking some surrogates, including Google Analytics

v 2.6.8.30rc1
=========================================================================
x [CAPS] better compatibility with Firefox 30's restored checkloaduri
  prefs hack
+ UI support for cascadePermissions and restrictSubdocScripting
+ "NoScript Options|Advanced|Trusted|Cascade top document's permissions
  to 3rd party scripts" user-facing preference
+ "NoScript Options|Advanced|Untrusted|Block scripting in whitelisted
  subdocuments of non-whitelisted pages" user-facing preference
+ Backported cascadePermissions and restrictSubdocScripting support to
  ESR 24

v 2.6.8.29
=========================================================================
x [Surrogate] googletagservices.com replacement (thanks Guest and barbaz)
x Fixed bookmarklet emulation "Object.getPrototypeOf(...).open is
  undefined" failure on Nightly (thanks Ria and barbaz for reporting)

v 2.6.8.28
=========================================================================
x Fixed bookmarklet execution on non-whitelisted page causing scripts
  to be globally allowed (thanks barbaz and therube for reporting)

v 2.6.8.27
=========================================================================
x Work-around for bug 1005552 (backport to ESR)
+ [Surrogate] External script surrogates are now triggered whenever a
  matching script fails to load, no matter the reason, e.g. NoScript
  permissions, ABE, ABP or RequestPolicy (thanks bonanza for RFE)
x [XSS] Worked around OpenID-related false positive (thanks Gunnar for
  reporting)
x [XSS] Better work around for false positive in gmx.com new webmail,
  designed to work across all its implementations

v 2.6.8.27rc3
=========================================================================
x [Surrogate] Better trigger timing
x Work-around for bug 1005552 (backport to ESR)

v 2.6.8.27rc2
=========================================================================
+ [Surrogate] External script surrogates are now triggered whenever a
  matching script fails to load, no matter the reason, e.g. NoScript
  permissions, ABE, ABP or RequestPolicy (thanks bonanza for RFE)

v 2.6.8.27rc1
=========================================================================
x [XSS] Worked around OpenID-related false positive (thanks Gunnar for
  reporting)
x [XSS] Better work around for false positive in gmx.com new webmail,
  designed to work across all its implementations

v 2.6.8.26
=========================================================================
x [XSS] gmx.com false positive work-around extended to international
  domains (thanks dood_97 for reporting)
x [XSS] gmx.com false positive work-around extended to mail.com (thanks
  boris for reporting)
+ noscript.cascadePermissions preliminary backend implementation
+ noscript.restrictSubdocScripting preliminary backend implementation

v 2.6.8.25
=========================================================================
x [ABE] Fixed inability to discriminate loads inititated from the URL bar
  on latest Nightlies (thanks Soothsayer for reporting)
x [XSS] Fixed false positive on new gmx.com login (thanks Luigi and LeeB
  for reporting)
x [Surrogate] Fixed new google-analytics.com surrogate causing Google
  Spreadsheet's columns not to be resizable (thanks bobbybrown for
  reporting)

v 2.6.8.25rc2
=========================================================================
x [ABE] Fixed inability to discriminate loads inititated from the URL bar
  on latest Nightlies (thanks Soothsayer for reporting)
x [XSS] Improved fix for false positive on new gmx.com login (thanks
  Luigi and LeeB for reporting)

v 2.6.8.25rc1
=========================================================================
x [Surrogate] Fixed new google-analytics.com surrogate causing Google
  Spreadsheet's columns not to be resizable (thanks bobbybrown for
  reporting)
x [XSS] Fixed false positive on new gmx.com login (thanks Luigi for
  reporting)

v 2.6.8.24
=========================================================================
+ Synthetic load events are sent and error events are suppressed for
  blocked script elements, in order to work around strict script
  inclusion enforcers. This feature is triggered by default only by
  Require.js module imports, but can be fully configured by
  noscript.fakeScriptLoadEvents.* about:config preferences:
  * .enabled: switches this feature on/off
  * .onlyRequireJS: if true (default) applies the feature only to script
    inclusions initiated by Require.js
  * .exceptions: AddressMatcher pattern matching the source URLs of
    script elements which should not cause fake load events when blocked
  * .docExceptions: AddressMatcher pattern matching the URLs of documents
    where no fake load event must be raised
x Improved toStaticHTML() implementation (thanks .mario for reporting)
x Removed useless ICC profiles from some icons (thanks taffit for RFE)
x [Surrogate] Improved google-analytics.com (ga) surrogate
x [XSS] Fixed characters redundancy reduction bug (thanks Masato Kinugawa
  for reporting)
x [XSS] Fixed typo in the new regular expression literals stripping
  routine implementation (thanks  Masato Kinugawa for reporting)
x [XSS] Fixed subtle bug in regular expression literals stripping
  optimization, potentially causing false negatives in edge cases (thanks
  Masato Kinugawa for reporting)
x Work-around for Firefox bug causing popup.hidePopup() to fail sometimes
  and NoScript's on-hover menu needing a click to be closed

v 2.6.8.24rc5
=========================================================================
+ More flexible implementation of the fake script load events feature,
  triggered by default only by Require.js module imports, can be fully
  configured by noscript.fakeScriptLoadEvents.* about:config preferences:
  * .enabled: switches this feature on/off
  * .onlyRequireJS: if true (default) applies the feature only to script
    inclusions initiated by Require.js
  * .exceptions: AddressMatcher pattern matching the source URLs of
    script elements which should not cause fake load events when blocked
  * .docExceptions: AddressMatcher pattern matching the URLs of documents
    where no fake load event must be raised

v 2.6.8.24rc4
=========================================================================
+ Synthetic load events are sent and error events are suppressed for
  blocked script elements, in order to work around strict script
  inclusion enforcers such as Require.js (this feature is configured by
  the noscript.fakeScriptLoadEvents about:config preference)
x Improved toStaticHTML() implementation (thanks .mario for reporting)
x Removed useless ICC profiles from some icons (thanks taffit for RFE)
x [Surrogate] Improved google-analytics.com (ga) surrogate

v 2.6.8.24rc3
=========================================================================
x [XSS] Fixed characters redundancy reduction bug (thanks Masato Kinugawa
  for reporting)

v 2.6.8.24rc2
=========================================================================
x [XSS] Fixed typo in the new regular expression literals stripping
  routine implementation (thanks  Masato Kinugawa for reporting)

v 2.6.8.24rc1
=========================================================================
x [XSS] Fixed subtle bug in regular expression literals stripping
  optimization, potentially causing false negatives in edge cases (thanks
  Masato Kinugawa for reporting)

v 2.6.8.23rc1
=========================================================================
x Work-around for Firefox bug causing popup.hidePopup() to fail sometimes
  and NoScript's on-hover menu needing a click to be closed

v 2.6.8.23
=========================================================================
x Work-around for Firefox bug causing popup.hidePopup() to fail sometimes
  and NoScript's on-hover menu needing a click to be closed

v 2.6.8.22
=========================================================================
x Better algorithm for menu items ordering

v 2.6.8.21
=========================================================================
x Fixed XSL check regression (thanks barbaz for reporting)
x Work-around for bug 1005552
+ [Surrogate] Gravatar dummy replacement
x [Australis] Support for reversed menu on surrogate status/addon bars

v 2.6.8.21rc2
=========================================================================
x Fixed XSL check regression (thanks barbaz for reporting)
x Work-around for bug 1005552

v 2.6.8.21rc1
=========================================================================
+ [Surrogate] Gravatar dummy replacement
x [Australis] Support for reversed menu on surrogate status/addon bars

v 2.6.8.20
=========================================================================
x Partially restored "Allow local links" functionality (works for HTML
  file:// links but not for embedded resources and scripted loads)
+ "allowLocalLinks.from" about:config preference to define a whitelist
  (in ABE URL pattern list syntax) which, if valid and not empty,
  overrides the JavaScript whitelist which is reused by legacy default
  for pages allowed to open file:// links (Gecko 28 and above)
+ "allowLocalLinks.to" about:config preference to define a whitelist
  (in ABE URL pattern list syntax) which, if valid and not empty,
  limits the file:// links which can be opened by allowed pages
  (Gecko 28 and above)
- Removed "Allow rich text copy and paste from external clipboard" option
  from the UI if the browser doesn't support CAPS (Gecko 28 and above)
x Implemented early permission changes enforcement on not yet reloaded
  pages, to better match the old CAPS-based behavior (thanks therube
  for reporting)
x [Surrogates] Fixed Google Analytics surrogate breaking some javascript:
  links (thanks Will for reporting)
x [L18n] Fixed Finnish typo (thanks Kalle Niemitalo for reporting)
x [XSS] Removed OAuth-triggered false positive (thanks Gunnar Scherf for
  reporting)
x [XSS] Stricter checks for HTTPS requests from a same domain origin with
  different scheme (thanks LouiseRBaldwin for reporting)

v 2.6.8.20rc3
=========================================================================
x Partially restored "Allow local links" functionality (works for HTML
  file:// links but not for embedded resources and scripted loads)
+ "allowLocalLinks.from" about:config preference to define a whitelist
  (in ABE URL pattern list syntax) which, if valid and not empty,
  overrides the JavaScript whitelist which is reused by legacy default
  for pages allowed to open file:// links (Gecko 28 and above)
+ "allowLocalLinks.to" about:config preference to define a whitelist
  (in ABE URL pattern list syntax) which, if valid and not empty,
  limits the file:// links which can be opened by allowed pages
  (Gecko 28 and above)
- Removed "Allow rich text copy and paste from external clipboard" option
  from the UI if the browser doesn't support CAPS (Gecko 28 and above)

v 2.6.8.20rc2
=========================================================================
x Implemented early permission changes enforcement on not yet reloaded
  pages, to better match the old CAPS-based behavior (thanks therube
  for reporting)

v 2.6.8.20rc1
=========================================================================
x [Surrogates] Fixed Google Analytics surrogate breaking some javascript:
  links (thanks Will for reporting)
x [L18n] Fixed Finnish typo (thanks Kalle Niemitalo for reporting)
x [XSS] Removed OAuth-triggered false positive (thanks Gunnar Scherf for
  reporting)
x [XSS] Stricter checks for HTTPS requests from a same domain origin with
  different scheme (thanks LouiseRBaldwin for reporting)

v 2.6.8.19
=========================================================================
x Fixed CAPS initialization broken in Gecko 27 and below
x Fixed wildcard port matching broken in Gecko 28 and below

v 2.6.8.19rc2
=========================================================================
x Fixed CAPS initialization broken in Gecko 27 and below

v 2.6.8.19rc1
=========================================================================
x Fixed wildcard port matching broken in Gecko 28 and below

v 2.6.8.18
=========================================================================
x Fixed some bookmarklets being broken by Gecko 28
x [Surrogate] Fixed some surrogates being broken by Gecko 28
- Disabled CAPS-based script blocking for Gecko 28 and above
x Fixed XSLT blocking broken by recent Gecko changes (thanks Xenos for
  reporting)

v 2.6.8.18rc2
=========================================================================
x Fixed some bookmarklets being broken by Gecko 28
x [Surrogate] Fixed some surrogates being broken by Gecko 28
- Disabled CAPS-based script blocking for Gecko 28 and above

v 2.6.8.18rc1
=========================================================================
x Fixed XSLT blocking broken by recent Gecko changes (thanks Xenos for
  reporting)

v 2.6.8.17
=========================================================================
x CSS tweak for Australis support (thanks Jared Wein)
x Fixed new bookmarklet execution module accidentally using X rays
  wrappers and therefore failing to interact with expando variables

v 2.6.8.16
=========================================================================
x Closing a placeholder doesn't collapse its space anymore, unless the
  noscript.placeholderCollapseOnClose is set to true or the "Collapse
  blocked objects" Embeddings option is checked (thanks Elmart for RFE)
x Further bookmarklet emulation improvements yet (thanks porl for RFEs)

v 2.6.8.16rc4
=========================================================================
x Closing a placeholder doesn't collapse its space anymore, unless the
  noscript.placeholderCollapseOnClose is set to true or the "Collapse
  blocked objects" Embeddings option is checked (thanks Elmart for RFE)

v 2.6.8.16rc3
=========================================================================
x Further bookmarklet emulation improvements yet (thanks porl for RFEs)

v 2.6.8.16rc2
=========================================================================
x Further bookmarklet emulation improvements (thanks porl for testbed)

v 2.6.8.16rc1
=========================================================================
x More faithful bookmarklet corner-cases emulation

v 2.6.8.15
=========================================================================
x [Surrogate] Fixed bug preventing local filesystem replacements
  (file:/// URLs) from being loaded
x [Surrogate] Fixed Surrogate sandbox being nuked and causing many web
  pages to break
x Fixed various bookmarklet emulation regressions caused by Firefox 24
  compatibility efforts (thanks porl for reporting)
x [L10n] Fixed double newline escaping in some localized strings (thanks
  porl for reporting)
x [Surrogate] Fixed regression: some surrogates not being correctly
  initialized (thanks barbaz for reporting)
x [Surrogate] Fixed replacements not being parsed as Unicode text
x Fixed listeners and timers in sandboxed non-whitelisted scripts on
  Gecko 27 and above
x Work-around for Firefox 27 and above preventing bookmarklets from
  attaching event listeners on non-whitelisted pages (thanks porl for
  reporting)

v 2.6.8.15rc6
=========================================================================
x [Surrogate] Fixed bug preventing local filesystem replacements
  (file:/// URLs) from being loaded
x [Surrogate] Fixed Surrogate sandbox being nuked and causing many web
  pages to break

v 2.6.8.15rc5
=========================================================================
x Fixed various bookmarklet emulation regressions caused by Firefox 24
  compatibility efforts (thanks porl for reporting)
x [L10n] Fixed double newline escaping in some localized strings (thanks
  porl for reporting)

v 2.6.8.15rc4
=========================================================================
x [Surrogate] Fixed regression: some surrogates not being correctly
  initialized (thanks barbaz for reporting)

v 2.6.8.15rc3
=========================================================================
x [Surrogate] Fixed replacements not being parsed as Unicode text

v 2.6.8.15rc2
=========================================================================
x Fixed listeners and timers in sandboxed non-whitelisted scripts on
  Gecko 27 and above

v 2.6.8.15rc1
=========================================================================
x Work-around for Firefox 27 and above preventing bookmarklets from
  attaching event listeners on non-whitelisted pages (thanks porl for
  reporting)

v 2.6.8.14
=========================================================================
x Fixed bookmarklet execution disabling JavaScript on whitelisted pages
  (Firefox >= 29, thanks vsemozhetbyt for reporting mozbug 970445)
x [ABE] Improved compatibility with .local domains (thanks func0der for
  reporting)

v 2.6.8.14rc2
=========================================================================
x Fixed bookmarklet execution disabling JavaScript on whitelisted pages
  (Firefox >= 29, thanks vsemozhetbyt for reporting mozbug 970445)

v 2.6.8.14rc1
=========================================================================
x [ABE] Improved compatibility with .local domains (thanks func0der for
  reporting)

v 2.6.8.13
=========================================================================
x Restored z-order mobility for options dialog on Linux (thanks barbaz
  for RFE)
x Moved ClearClick options into their own "Advanced" sub-tab (thanks
  Thrawn for RFE)
x Minor options dialog tweakings
- Removed External Filters options panel
x The option dialog is non-modal and recycled now (thanks barbaz for RFE)

v 2.6.8.13rc3
=========================================================================
x Restored z-order mobility for options dialog on Linux (thanks barbaz
  for RFE)

v 2.6.8.13rc2
=========================================================================
x Moved ClearClick options into their own "Advanced" sub-tab (thanks
  Thrawn for RFE)
x Minor options dialog tweakings
- Removed External Filters options panel

v 2.6.8.13rc1
=========================================================================
x The option dialog is non-modal and recycled now (thanks barbaz for RFE)

v 2.6.8.12
=========================================================================
x Improved work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=958962
+ [Surrogate] Prevent blank ModPagespeed-patched pages when meta refresh
  inside NOSCRIPT elements is blocked (thanks  thunderscript and barbaz)
x Fixed one-time this.getSite() error on startup
+ Browser Console support
x [L10n] Updated fr (thanks Jack Black)
x Fixed feed reader broken on non-whitelisted sites in non-stable Firefox
  (thanks LouCypher for reporting)

v 2.6.8.12rc4
=========================================================================
x Improved work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=958962
+ [Surrogate] Prevent blank ModPagespeed-patched pages when meta refresh
  inside NOSCRIPT elements is blocked (thanks  thunderscript and barbaz)

v 2.6.8.12rc3
=========================================================================
x Work-around for https://bugzilla.mozilla.org/show_bug.cgi?id=958962

v 2.6.8.12rc2
=========================================================================
x Fixed one-time this.getSite() error on startup
+ Browser Console support
x [L10n] Updated fr (thanks Jack Black)

v 2.6.8.12rc1
=========================================================================
x Fixed feed reader broken on non-whitelisted sites in non-stable Firefox
  (thanks LouCypher for reporting)

v 2.6.8.11
=========================================================================
x [XSS] Fixed nested URL parsing optimization bug (thanks Masato Kinugawa
  for reporting)
x [XSS] Abort, rather than filter, potential charset-based attacks (
  thanks Masato Kinugawa for reporting)
x [XSS] Improved Ebay compatibility (thanks Markus Wienand for reporting)

x [XSS] Fixed bad charset check regression from rc6 (thanks Masato
  Kinugawa for reporting)
x [XSS] Fixed bad charset checks not honoring exceptions (thanks Masato
  Kinugawa for reporting)
x Adopted the Components.utils.blockScriptForGlobal() API where possible
x [XSS] Further improvements in recursive link checks (thanks Masato
  Kinugawa for reporting)
x [XSS] Better checks for combined data/javascript URIs (thanks Masato
  Kinugawa for reporting)
x [XSS] Restored fuzzy HTML sniffing in nested data URI (thanks Masato
  Kinugawa for reporting)
x [XSS] Improved data URI checks (thanks Masato Kinugawa for reporting)
x [XSS] Enhanced recursive link checks (Thanks PK Cano for reporting)
x [XSS] Stricter HTML checks on second-order data URI injections exactly
  fitting whole URL attributes (thanks Masato Kinugawa for reporting)

v 2.6.8.11rc10
=========================================================================
x [XSS] Fixed new inline script blocking approach (in Firefox Nightly)
  not triggering NOSCRIPT element fallbacks

v 2.6.8.11rc9
=========================================================================
x [XSS] Fixed nested URL parsing optimization bug (thanks Masato Kinugawa
  for reporting)

v 2.6.8.11rc8
=========================================================================
x [XSS] Abort, rather than filter, potential charset-based attacks (
  thanks Masato Kinugawa for reporting)
x [XSS] Improved Ebay compatibility (thanks Markus Wienand for reporting)

v 2.6.8.11rc7
=========================================================================
x [XSS] Fixed bad charset check regression from rc6 (thanks Masato
  Kinugawa for reporting)

v 2.6.8.11rc6
=========================================================================
x [XSS] Fixed bad charset checks not honoring exceptions (thanks Masato
  Kinugawa for reporting)
x Adopted the Components.utils.blockScriptForGlobal() API where possible

v 2.6.8.11rc5
=========================================================================
x [XSS] Further improvements in recursive link checks (thanks Masato
  Kinugawa for reporting)

v 2.6.8.11rc4
=========================================================================
x [XSS] Better checks for combined data/javascript URIs (thanks Masato
  Kinugawa for reporting)

v 2.6.8.11rc3
=========================================================================
x [XSS] Restored fuzzy HTML sniffing in nested data URI (thanks Masato
  Kinugawa for reporting)

v 2.6.8.11rc2
=========================================================================
x [XSS] Improved data URI checks (thanks Masato Kinugawa for reporting)
x [XSS] Enhanced recursive link checks (Thanks PK Cano for reporting)

v 2.6.8.11rc1
=========================================================================
x [XSS] Stricter HTML checks on second-order data URI injections exactly
  fitting whole URL attributes (thanks Masato Kinugawa for reporting)

v 2.6.8.10
=========================================================================
x [XSS] Fixed regression causing Google Talk false positive (thanks
  Stuart Young for report)
x Made about:srcdoc placeholder URL for seamless iframes "mandatory"
  to reflect its actual permissions status (thanks barbaz for RFE)

v 2.6.8.9
=========================================================================
x [XSS] Stricter HTML checks (thanks Masato Kinugawa for reporting)
x [ClearClick] Exception to cope with Youtube's Google+ comments
x [XSS] Better data: URI detection (thanks Masato Kinugawa for reporting)
x [XSS] Improved pure HTML checks (thanks Masato Kinugawa for reporting)
x [XSS] Fixed InjectionChecker tolerance bug (thanks Masato Kinugawa for
  reporting)
x [XSS] Improved sanitization

v 2.6.8.9rc5
=========================================================================
x [XSS] Stricter HTML checks (thanks Masato Kinugawa for reporting)
x [ClearClick] Exception to cope with Youtube's Google+ comments

v 2.6.8.9rc4
=========================================================================
x [XSS] Better data: URI detection (thanks Masato Kinugawa for reporting)

v 2.6.8.9rc3
=========================================================================
x [XSS] Improved pure HTML checks (thanks Masato Kinugawa for reporting)

v 2.6.8.9rc2
=========================================================================
x [XSS] Better fix for InjectionChecker tolerance bug (thanks Masato
  Kinugawa for reporting)

v 2.6.8.9rc1
=========================================================================
x [XSS] Fixed InjectionChecker tolerance bug (thanks Masato Kinugawa for
  reporting)
x [XSS] Improved sanitization

v 2.6.8.8
=========================================================================
+ Enforce docShell-based script blocking for Gecko > 28
+ [Surrogate] addthis.com widget emulation (thanks Mathnerd314)

v 2.6.8.8rc2
=========================================================================
+ Enforce docShell-based script blocking for Gecko > 28

v 2.6.8.8rc1
=========================================================================
+ [Surrogate] addthis.com widget emulation (thanks Mathnerd314)

v 2.6.8.7
=========================================================================
x Fixed performance regression in request identity tracking (thanks
  cumdacon and nospamboz for reporting)
+ Protection against new SQLXSSI obfuscation techinques (thanks Alex
  Inführ for reporting)
x Fixed noscript.allowedMimeRegExp ignoring the FONT pseudo-type (thanks
  barbaz for reporting)

v 2.6.8.7rc4
=========================================================================
x Fixed performance regression in request identity tracking (thanks
  cumdacon and nospamboz for reporting)

v 2.6.8.7rc3
=========================================================================
+ Protection against new SQLXSSI obfuscation techinques (thanks Alex
  Inführ for reporting)

v 2.6.8.7rc2
=========================================================================
x Fixed noscript.allowedMimeRegExp ignoring the FONT pseudo-type take 2
  (thanks barbaz for reporting)

v 2.6.8.7rc1
=========================================================================
x Fixed noscript.allowedMimeRegExp ignoring the FONT pseudo-type (thanks
  barbaz for reporting)

v 2.6.8.6
=========================================================================
x Fixed bugs in noscript.allowedMimeRegExp support (thanks barbaz for
  reporting)
x [ABE] Fixed increased asynchronicity in Gecko's network processing
  causing intermittent failures (thanks barbaz and al_9x for reporting)
x [Surrogate] Fixed bug in asynchronous Google Analytics API emulation
  (thanks Lucas Malor for reporting)
x Fixed missing icon for blocked objects when no script is present in the
  page and scrips are globally allowed

v 2.6.8.6rc2
=========================================================================
x Fixed bugs in noscript.allowedMimeRegExp support (thanks barbaz for
  reporting)
x [ABE] Fixed increased asynchronicity in Gecko's network processing
  causing intermittent failures (thanks barbaz and al_9x for reporting)

v 2.6.8.6rc1
=========================================================================
x [Surrogate] Fixed bug in asynchronous Google Analytics API emulation
  (thanks Lucas Malor for reporting)
x Fixed missing icon for blocked objects when no script is present in the
  page and scrips are globally allowed

v 2.6.8.5
=========================================================================
x [ClearClick] Fixed empty contentEditable elements cannot receive
  keyboard events in cross-site frames (breaking latest Youtube comments)
x [XSS] Fixed false positive on redirected script inclusions (breaking
  Stripe payments on Humblebundle, thanks ableeker for reporting)
x [Surrogate] Better GA, GAPI, Twitter and Facebook compatibility

v 2.6.8.5rc2
=========================================================================
x [ClearClick] Fixed empty contentEditable elements cannot receive
  keyboard events in cross-site frames (breaking latest Youtube comments)
x [XSS] Fixed false positive on redirected script inclusions (breaking
  Stripe payments on Humblebundle, thanks ableeker for reporting)

v 2.6.8.5rc1
=========================================================================
x [Surrogate] Better GA, GAPI, Twitter and Facebook compatibility

v 2.6.8.4
=========================================================================
x Fixed shortcut bookmarklet execution requiring noscript.allowURLBarJS
  preference to be true on Firefox 25 beta (thanks ivank for report)
x [Surrogate] Better emulation of for Google Analytics asynchronous
  tracking (for instance, fixes GMail's "Sign in" link)
x [ClearClick] Fixed exception being thrown on Firefox 27 alpha (Nightly)
x Fixed URL bar enhancements broken by Firefox 25 beta
x Fixed SetVariable/GetVariable failing on dynamically created Flash
  elements, e.g. with SFWObject (thanks longsleep for reporting)

v 2.6.8.4rc3
=========================================================================
x Fixed shortcut bookmarklet execution requiring noscript.allowURLBarJS
  preference to be true on Firefox 25 beta (thanks ivank for report)

v 2.6.8.4rc2
=========================================================================
x [Surrogate] Better emulation of for Google Analytics asynchronous
  tracking (for instance, fixes GMail's "Sign in" link)
x [ClearClick] Fixed exception being thrown on Firefox 27 alpha (Nightly)
x Fixed URL bar enhancements broken by Firefox 25 beta

v 2.6.8.4rc1
=========================================================================
x Fixed SetVariable/GetVariable failing on dynamically created Flash
  elements, e.g. with SFWObject (thanks longsleep for reporting)

v 2.6.8.3
=========================================================================
x Fixed complex bookmarklet execution requiring synchronous XHR in a
  content policy callback
x Fixed full-page plugins failed activation until the page is reloaded
x Fixed full-page HTML5 media failing to play after activation until the
  page is reloaded

v 2.6.8.3rc3
=========================================================================
x Fixed complex bookmarklet execution requiring synchronous XHR in a
  content policy callback

v 2.6.8.3rc2
=========================================================================
x Fixed full-page plugins failed activation until the page is reloaded

v 2.6.8.3rc1
=========================================================================
x Fixed full-page HTML5 media failing to play after activation until the
  page is reloaded

v 2.6.8.2
=========================================================================
x Fixed request methods different than POST being turned into GET by
  internal channel redirection when the DNS entry is not cached yet
x Fixed regression from CTP fix: some kinds of embedded objects being
  displayed, even though in disabled state, along with placeholders

v 2.6.8.2rc2
=========================================================================
x Fixed request methods different than POST being turned into GET by
  internal channel redirection when the DNS entry is not cached yet

v 2.6.8.2rc1
=========================================================================
x Fixed regression from CTP fix: some kinds of embedded objects being
  displayed, even though in disabled state, along with placeholders

v 2.6.8.1
=========================================================================
+ Added to the default whitelist some CDN subdomains dedicated to serve
  popular open source JS libraries (thanks t3g for RFE)
x Fixed notification box issues with Seamonkey (thanks barbaz)
x Work-around for broken CTP notifications (bug 903675)
x Work-around for Youtube comments XSS false (?) positive
x [L10n] Updated fr (thanks Jack Black)

v 2.6.7.1
=========================================================================
x [XSS] Fixed false positive on GMail when opening the Google Docs file
  picker (thanks Harry for reporting)
x [XSS] Fixed parameter elision bug
+ Protection against another variant of error-based SQLXSSI (thanks Alex
  Inführ for reporting)

v 2.6.7.1rc2
=========================================================================
x [XSS] Fixed false positive on GMail when opening the Google Docs file
  picker (thanks Harry for reporting)
x [XSS] Fixed parameter elision bug

v 2.6.7.1rc1
=========================================================================
+ Protection against another variant of error-based SQLXSSI (thanks Alex
  Inführ for reporting)

v 2.6.7
=========================================================================
x Fixed HTML 5 media content types not blocked when loaded as top-level
  documents (thanks al_9x for reporting)
x [XSS] Fixed bug in SQLXSSI detection (thanks Alex Inführ for reporting)
x Fixed resources from resource: origin (such as PDF.js fonts) being
  unnecessarily blocked in restrictive embed blocking mode
x Removed "ReferenceError: PolicyState is not defined" message appearing
  sometimes in the console dump on startup
x Fixed scrollbars removed in frames activated from placeholder (thanks
  al_9x for reporting)

v 2.6.7rc3
=========================================================================
x Fixed HTML 5 media content types not blocked when loaded as top-level
  documents (thanks al_9x for reporting)

v 2.6.7rc2
=========================================================================
x Removed further "ReferenceError: PolicyState is not defined" messages
x [XSS] Fixed bug in SQLXSSI detection (thanks Alex Inführ for reporting)

v 2.6.7rc1
=========================================================================
x Fixed resources from resource: origin (such as PDF.js fonts) being
  unnecessarily blocked in restrictive embed blocking mode
x Removed "ReferenceError: PolicyState is not defined" message appearing
  sometimes in the console dump on startup
x Fixed scrollbars removed in frames activated from placeholder (thanks
  al_9x for reporting)


v 2.6.6.9
=========================================================================
+ [XSS] Added several experimental / unofficial markup atoms to the
  build-time matcher generator (thanks .mario for reporting)

v 2.6.6.8
=========================================================================
x [XSS] Protection against filter evasion exploiting Adobe Flash URL
  parsing and charset handling bugs (thanks Soroush Dalili for reporting)

v 2.6.6.7
=========================================================================
x Fixed ClearClick triggered by recently changed browser built-in Click
  To Play placeholders (bug 889228)
x [L10n] Updated Czech (thanks Karel)

v 2.6.6.6
=========================================================================
+ Made mimetype whitelisting through the noscript.allowedMimeRegExp
  preference work with the WebGL pseudo type (thanks Thrawn for RFE)

v 2.6.6.5
=========================================================================
x Better fix for Nightly breakages

v 2.6.6.4
=========================================================================
x Fixed some recent breakages on Nightly

v 2.6.6.3
=========================================================================
x Improved "fixable" JavaScript links detection (thanks asdf for RFE)

v 2.6.6.2
=========================================================================
x Fixed regression in Tab Mix Plus compatibility due to Gecko 21 changes
x Improved placeholder management for full-document plugin content, e.g.
  makes Youtube embeddings more usable on Facebook

v 2.6.6.2rc2
=========================================================================
x Fixed regression in Tab Mix Plus compatibility due to Gecko 21 changes

v 2.6.6.2rc1
=========================================================================
x Improved placeholder management for full-document plugin content, e.g.
  makes Youtube embeddings more usable on Facebook

v 2.6.6.1
=========================================================================
x Fixed backward compatibility issue with recent channel cloning changes
x [XSS] Compatibility with certain redirector URL patterns (thanks
  Stephen F. for reporting)
x [ABE] Fixed letest Tab Mix Plus version (4.1.0) causing loads started
  from the address bar to be considered cross-site
x [L10n] Updated Esperanto (thanks Michael Wolf)
x [L10n] Updated Upper Serbian (thanks Michael Wolf)

v 2.6.6.1rc2
=========================================================================
x Fixed backward compatibility issue with recent channel cloning changes
x [XSS] Compatibility with certain redirector URL patterns (thanks
  Stephen F. for reporting)

v 2.6.6.1rc1
=========================================================================
x [ABE] Fixed letest Tab Mix Plus version (4.1.0) causing loads started
  from the address bar to be considered cross-site
x [L10n] Updated Esperanto (thanks Michael Wolf)
x [L10n] Updated Upper Serbian (thanks Michael Wolf)

v 2.6.6
=========================================================================
x Added per-window private browsing support to some background requests
x Improved channel cloning for internal redirections
x Added further Microsoft mail services dependencies to the default
  whitelist
x [XSS] Fixed character class bug (thanks Masato Kinugawa for reporting)
x [XSS] Fixed potential jQuery-based injection (thanks Masato Kinugawa
  for reporting)
x Improved handling of some moz-null principal instances in ABE requests
  (thanks Thrawn for reporting)
+ New 360Haven surrogate lets the site work with 1st party scripts
  allowed and ads/tracker scripts forbidden

v 2.6.6rc5
=========================================================================
x Added per-window private browsing support to some background requests
x Improved channel cloning for internal redirections
x Added further Microsoft mail services dependencies to the default
  whitelist

v 2.6.6rc4
=========================================================================
x [XSS] Fixed character class bug  (thanks Masato Kinugawa for reporting)

v 2.6.6rc3
=========================================================================
x [XSS] Fixed potential jQuery-based injection (thanks Masato Kinugawa
  for reporting)

v 2.6.6rc2
=========================================================================
x Improved handling of some moz-null principal instances in ABE requests
  (thanks Thrawn for reporting)

v 2.6.6rc1
=========================================================================
+ New 360Haven surrogate lets the site work with 1st party scripts
  allowed and ads/tracker scripts forbidden

v 2.6.5.9
=========================================================================
x Fixed outlook.com UI broken in Nightly by work-around for bug 677050
  (thanks Raùl Duràn of Microsoft for troubleshooting help)
- Removed STS support for Gecko >= 4, which provides built-in HSTS
x Work around for multiple object creation causing UI inconsistencies
  (thanks al_9x for reporting)
x [XSS] Work-around for false positives caused by Gecko >= 18 changes in
  Function.prototype.toSource() (thanks yahoo mail user for report)

v 2.6.5.9rc3
=========================================================================
x Fixed outlook.com UI broken in Nightly by work-around for bug 677050
  (thanks Raùl Duràn of Microsoft for troubleshooting help)

v 2.6.5.9rc2
=========================================================================
- Removed STS support for Gecko >= 4, which provides built-in HSTS
x Work around for multiple object creation causing UI inconsistencies
  (thanks al_9x for reporting)

v 2.6.5.9rc1
=========================================================================
x [XSS] Work-around for false positives caused by Gecko >= 18 changes in
  Function.prototype.toSource() (thanks yahoo mail user for report)

v 2.6.5.8
=========================================================================
+ Automatic Google Analytics web bugs blocking if google-analytics.com is
  not whitelisted
+ "Mark as untrusted" button on the site info page (thanks SwissBIT for
  RFE)
+ "Allow"/"Forbid"/"Mark as untrusted" icons on the site info buttons
x Inclusion type checks exception for yandex.st
x [XSS] Exception for requests across *.photobucket.com subdomains, which
  may legitimately contain syntactically valid Javascript fragments
  (thanks RAJAH235 for reporting)

v 2.6.5.8rc4
=========================================================================
x Fixed "Mark as Untrusted" button on the "Site Info" page not working
  properly (thanks SwissBIT for reporting)

v 2.6.5.8rc3
=========================================================================
x Fixed Google Analytics cross-site checks breaking GMail composition
  window (thanks Michael Mischurow for reporting)

v 2.6.5.8rc2
=========================================================================
+ Automatic Google Analytics web bugs blocking if google-analytics.com is
  not whitelisted
+ "Mark as untrusted" button on the site info page (thanks SwissBIT for
  RFE)
+ "Allow"/"Forbid"/"Mark as untrusted" icons on the site info buttons
x Inclusion type checks exception for yandex.st

v 2.6.5.8rc1
=========================================================================
x [XSS] Exception for requests across *.photobucket.com subdomains, which
  may legitimately contain syntactically valid Javascript fragments
  (thanks RAJAH235 for reporting)

v 2.6.5.7
=========================================================================
x Made "Yes, remove all protections" the default button in the removal
  warning dialog
x [XSS] Fixed post-response encoding checks applied to UTF-8 pages too
  (thanks Masato Kinugawa for reporting)
x [XSS] Removed host redirection chance on XSS-vulnerable pages (thanks
  Masato Kinugawa for reporting)


v 2.6.5.7rc2
=========================================================================
x Made "Yes, remove all protections" the default button in the removal
  warning dialog

v 2.6.5.7rc1
=========================================================================
x [XSS] Fixed post-response encoding checks applied to UTF-8 pages too
  (thanks Masato Kinugawa for reporting)
x [XSS] Removed host redirection chance on XSS-vulnerable pages (thanks
  Masato Kinugawa for reporting)


v 2.6.5.6
=========================================================================
x [XSS] Smarter syntax check optimization, removes harmful side effect
  (thanks Masato Kinugawa for reporting)

v 2.6.5.5
=========================================================================
x [XSS] Fixed bug in broken string literals balancing (thanks Masato
  Kinugawa for reporting)

v 2.6.5.4
=========================================================================
+ [XSS] Obfuscated string literals detection (thanks Masato Kinugawa for
  reporting)

v 2.6.5.3
=========================================================================
x [XSS] Improved parsing while decoding mixed-charset encoded URLs
  (thanks Masato Kinugawa for reporting)
+ [XSS] Better decoding of maliciously mixed-charset encoded strings
  (thanks Masato Kinugawa for reporting)

v 2.6.5.3rc2
=========================================================================
x [XSS] Improved parsing while decoding mixed-charset encoded URLs
  (thanks Masato Kinugawa for reporting)

v 2.6.5.3rc1
=========================================================================
+ [XSS] Better decoding of maliciously mixed-charset encoded strings
  (thanks Masato Kinugawa for reporting)

v 2.6.5.2
=========================================================================
x [XSS] Work-around for a Gecko race condition allowing some
  script-enabled attackers to make the charset-mismatch checks abort
  prematurely (thanks Masato Kinugawa for reporting)

v 2.6.5.1
=========================================================================
+ [XSS] Forced unicode conversions more resilient to invalid input
  (thanks Masato Kinugawa for reporting)

v 2.6.5
=========================================================================
+ [XSS] More exotic charset awareness added to script injection checks
  (thanks Masato Kinugawa for reporting)
x [XSS] Removed limited injection chance allowing redirection of XSS
  vulnerable pages to an integral IP (thanks Masato Kinugawa for
  reporting)
+ "Security Downgrade Warning" suggests blacklist mode as a better option
  than uninstalling, to retain scripting-unrelated protections
- Removed legacy uninstall hooks and related localized strings

v 2.6.5rc2
=========================================================================
x Better wording for the "Security Downgrade Warning" options

v 2.6.5rc1
=========================================================================
+ [XSS] More exotic charset awareness added to script injection checks
  (thanks Masato Kinugawa for reporting)
x [XSS] Removed limited injection chance allowing redirection of XSS
  vulnerable pages to an integral IP (thanks Masato Kinugawa for
  reporting)
+ Suggestion of blacklist mode as a viable alternative to disablement or
  uninstall which retains protections unrelated to script blocking
- Removed legacy uninstall hooks and related localized strings

v 2.6.5rc2
=========================================================================
x Better wording for the "Security Downgrade Warning" options

v 2.6.5rc1
=========================================================================
+ [XSS] More exotic charset awareness added to script injection checks
  (thanks Masato Kinugawa for reporting)
x [XSS] Removed limited injection chance allowing redirection of XSS
  vulnerable pages to an integral IP (thanks Masato Kinugawa for
  reporting)
+ Suggestion of blacklist mode as a viable alternative to disablement or
  uninstall which retains protections unrelated to script blocking
- Removed legacy uninstall hooks and related localized strings


v 2.6.4.4
=========================================================================
x Fixed plugin placeholders not shown for plugin documents on Gecko >= 19
  (thanks therube for reporting)
+ [Surrogate] Support for callbacks in Google Analytics' _gaq.push()
  method (thanks Paola Moro for reporting)
+ Allow/Forbid button on the site info page (thanks Edward Huff for RFE)

v 2.6.4.4rc3
=========================================================================
x Fixed plugin placeholders not shown for plugin documents on Gecko >= 19
  (thanks therube for reporting)

v 2.6.4.4rc2
=========================================================================
+ [Surrogate] Support for callbacks in Google Analytics' _gaq.push()
  method (thanks Paola Moro for reporting)

v 2.6.4.4rc1
=========================================================================
+ Allow/Forbid button on the site info page (thanks Edward Huff for RFE)

v 2.6.4.3
=========================================================================
x [Surrogate] Less aggressive but more compatible adf.ly surrogate (it
  automatically skips ad but requires scripts enabled on adf.ly)
x Fixed whitelist listbox couldn't be fully selected by CTRL+A in recent
  Firefox versions (thanks Guardian for reporting)
+ [Surrogate] dimtus.com scriptless automatic image revelation
+ [Surrogate] imageteam.org scriptless automatic image revelation
x [External Filters] Fixed cache API compatibility issue

v 2.6.4.3rc2
=========================================================================
x [Surrogate] Less aggressive but more compatible adf.ly surrogate (it
  automatically skips ad but requires scripts enabled on adf.ly)
x Fixed whitelist listbox couldn't be fully selected by CTRL+A in recent
  Firefox versions (thanks Guardian for reporting)

v 2.6.4.3rc1
=========================================================================
+ [Surrogate] dimtus.com scriptless automatic image revelation
+ [Surrogate] imageteam.org scriptless automatic image revelation
x [External Filters] Fixed cache API compatibility issue

v 2.6.4.2
=========================================================================
x [ClearClick] Fixed miscalculations in screenshot comparison
x Fixed wrong placeholder position for standalone HTML 5 video content
  (thanks mjh563 for reporting)
+ "Appearance" option to hide the "About NoScript" menu item
x Deny loading of any empty Flash object
x Fixed HSB locale (thanks Michael Wolf)
x Fixed forced HTTPS breaks redirects on Firefox >= 18 (thanks mjh563 for
  reporting)
x Work-around for Gecko calling nsIContentPolicy::shouldProcess() with
  null location for Flash objects sometimes (thanks al_9x for report)
x Fixed broken early HTTP observer on Firefox >= 18 (thanks aloishammer
  for reporting)
x Fixed anti-popunder surrogate breaking BFCache (thanks whatever for
  reporting)

v 2.6.4.2rc6
=========================================================================
x [ClearClick] Fixed miscalculations in screenshot comparison

v 2.6.4.2rc5
=========================================================================
x Fixed wrong placeholder position for standalone HTML 5 video content
  (thanks mjh563 for reporting)

v 2.6.4.2rc4
=========================================================================
+ "Appearance" option to hide the "About NoScript" menu item
x Deny loading of any empty Flash object
x Fixed HSB locale (thanks Michael Wolf)

v 2.6.4.2rc3
=========================================================================
x Fixed forced HTTPS breaks redirects on Firefox >= 18 (thanks mjh563 for
  reporting)
x Work-around for Gecko calling nsIContentPolicy::shouldProcess() with
  null location for Flash objects sometimes (thanks al_9x for report)

v 2.6.4.2rc2
=========================================================================
x Fixed broken early HTTP observer on Firefox >= 18 (thanks aloishammer
  for reporting)

v 2.6.4.2rc1
=========================================================================
x Fixed anti-popunder surrogate breaking BFCache (thanks whatever for
  reporting)

v 2.6.4.1
=========================================================================
x Fixed new placeholder close button being hidden on some Youtube pages

v 2.6.4
=========================================================================
x [XSS] Improved compatibility with Twitter's cross-site requests
+ Close button on embedding placeholder (like using shift+click on the
  placeholder itself). Shift clicking the close button bypasses it.
x Fixed placeholders intercepting clicks from overlaid elements (thanks
  al_9x)
x Fixed unbound embed enablement confirmation dialog size (thanks therube
  for reporting)

v 2.6.4rc2
=========================================================================
x [XSS] Improved compatibility with Twitter's cross-site requests
+ Close button on embedding placeholder (like using shift+click on the
  placeholder itself). Shift clicking the close button bypasses it.
x Fixed placeholders intercepting clicks from overlayed elements (thanks
  al_9x)

v 2.6.4rc1
=========================================================================
x Fixed unbound embed enablement confirmation dialog size (thanks therube
  for reporting)

v 2.6.3
=========================================================================
x [XSS] Further tweaks to reduce false positives (thanks Edward C. Kim
  for reporting)
x [XSS] The "maybe JS" step now removes leading parens, reducing false
  positives e.g. on Picasa (thanks jerriy for reporting)
x [Surrogate] Work-around for anti-popunder surrogate causing Ebay to
  recreate phantom cookies on page unload (thanks mjh563 for reporting)
x Work-around for some extensions (e.g. Adblock Plus, Tab Mix Plus)
  breaking bookmarlets and URL bar Javascript support after being updated
  for Firefox 17
x Removed some console noise
+ [Surrogate] Updated adf.ly surrogate to work with new links

v 2.6.3rc4
=========================================================================
x [XSS] Further tweaks to reduce false positives (thanks Edward C. Kim
  for reporting)

v 2.6.3rc3
=========================================================================
x [XSS] The "maybe JS" step now removes leading parens, reducing false
  positives e.g. on Picasa (thanks jerriy for reporting)

v 2.6.3rc2
=========================================================================
x [Surrogate] Work-around for anti-popunder surrogate causing Ebay to
  recreate phantom cookies on page unload (thanks mjh563 for reporting)

v 2.6.3rc1
=========================================================================
x Work-around for some extensions (e.g. Adblock Plus, Tab Mix Plus)
  breaking bookmarlets and URL bar Javascript support after being updated
  for Firefox 17
x Removed some console noise
+ [Surrogate] Updated adf.ly surrogate to work with new links

v 2.6.2
=========================================================================
x Fixed Google links anonymizer surrogate interfering with the "Search
  tools" button (thanks Sledge Fox and Brian Admire for reporting)
x Fixed impossible to copy lines from Console² if opened by NoScript
  (thanks therube for reporting and Phil Chee for suggestion)
x [XSS] Exception for wpcomwidgets.com safe inclusions
x Slightly reduced About box width (thanks GµårÐïåñ for RFE)

v 2.6.2rc2
=========================================================================
x Fixed Google links anonymizer surrogate interfering with the "Search
  tools" button (thanks Sledge Fox and Brian Admire for reporting)

v 2.6.2rc1
=========================================================================
x Fixed impossible to copy lines from Console² if opened by NoScript
  (thanks therube for reporting and Phil Chee for suggestion)
x [XSS] Exception for wpcomwidgets.com safe inclusions
x Slightly reduced About box width (thanks GµårÐïåñ for RFE)

v 2.6.1
=========================================================================
x [XSS] Better compatibility with Ebay's saved searches
+ [Surrogate] Imagebax.com scriptless ads skipping redirection
x Fixed first non-cached page load in a session from about:newtab failing
- Removed legacy XUL script blocking code
+ Added optional diagnostic to centralized channel aborting
x Fixed bug in Java URLs resolution

v 2.6.1rc3
=========================================================================
x [XSS] Better compatibility with Ebay's saved searches

v 2.6.1rc2
=========================================================================
+ [Surrogate] Imagebax.com scriptless ads skipping redirection
x Fixed first non-cached page load in a session from about:newtab failing
- Removed legacy XUL script blocking code
+ Added optional diagnostic to centralized channel aborting

v 2.6.1rc1
=========================================================================
x Fixed bug in Java URLs resolution

v 2.6
=========================================================================
x Improved long URL wrapping for more manageable plugin placeholder
  tooltips
x Fixed ABE notifications bleeding out of the viewport when very long
  URLs are involved
+ [Surrogate] More efficient deferred script loading and syntax check,
  saves memory and startup time from unused surrogates
+ [Surrogate] Picbucks.com scriptless ads skipping redirection
+ [Surrogate] Imagebunk.com scriptless image revealing
+ [Surrogate] Picsee.net scriptless image revealing
+ Added navigator.doNotTrack property support

v 2.6rc3
=========================================================================
x Improved long URL wrapping for more manageable plugin placeholder
  tooltips
x Fixed ABE notifications bleeding out of the viewport when very long
  URLs are involved

v 2.6rc2
=========================================================================
+ [Surrogate] More efficient deferred script loading and syntax check,
  saves memory and startup time from unused surrogates
+ [Surrogate] Picbucks.com scriptless ads skipping redirection
+ [Surrogate] Imagebunk.com scriptless image revealing
+ [Surrogate] Picsee.net scriptless image revealing

v 2.6rc1
=========================================================================
+ Added navigator.doNotTrack property support

v 2.5.9
=========================================================================
+ Added afx.ms and gfx.ms (fully controlled by Microsoft, no user content
  allowed) to the default whitelist (required by MS mail services)
+ [XSS] Removed false positive on some Google Gadgets; the work-around
  can be disabled by setting the noscript.filterXExceptions.ggadgets
  about:config preference to false (thanks Silvana for reporting)
+ Added new fake mimetype placeholder "FRAME" to match FRAMEs and IFRAMES
  with the noscript.allowedMimeRegExp preference
+ Made mimetype whitelisting through the noscript.allowedMimeRegExp
  preference work with FRAMEs and IFRAMEs as well
x Fixed redirections involving sites marked as untrusted causing
  inconsistencies in page permissions, with JavaScript being blocked even
  if the site is whitelisted (thanks al_9x for reporting)
x Fixed regression on older Gecko versions causing NoScript to believe
  the browser is proxied when it's not

v 2.5.9rc3
=========================================================================
+ Added afx.ms and gfx.ms (fully controlled by Microsoft, no user content
  allowed) to the default whitelist (required by MS mail services)
+ [XSS] Removed false positive on some Google Gadgets; the work-around
  can be disabled by setting the noscript.filterXExceptions.ggadgets
  about:config preference to false (thanks Silvana for reporting)

v 2.5.9rc2
=========================================================================
+ Added new fake mimetype placeholder "FRAME" to match FRAMEs and IFRAMES
  with the noscript.allowedMimeRegExp preference
+ Made mimetype whitelisting through the noscript.allowedMimeRegExp
  preference work with FRAMEs and IFRAMEs as well
x Fixed redirections involving sites marked as untrusted causing
  inconsistencies in page permissions, with JavaScript being blocked even
  if the site is whitelisted (thanks al_9x for reporting)

v 2.5.9rc1
=========================================================================
x Fixed regression on older Gecko versions causing NoScript to believe
  the browser is proxied when it's not

v 2.5.8
=========================================================================
x Work-around for unique origins being assigned to URL bar loads by Gecko
  16 and above interfering with some ABE rules
x Work-around for bug 797684 patch causing ABE's Sandbox action to fail
x Work-around for regression from Mozilla bug 797684 fix causing frames
  not to be blocked correctly in recent >= 18 builds
x Slightly revised About box to make more room for contributors

v 2.5.8rc2
=========================================================================
x Work-around for unique origins being assigned to URL bar loads by Gecko
  16 and above interfering with some ABE rules
x Work-around for bug 797684 patch causing ABE's Sandbox action to fail

v 2.5.8rc1
=========================================================================
x Work-around for regression from Mozilla bug 797684 fix causing frames
  not to be blocked correctly in recent >= 18 builds
x Slightly revised About box to make more room for contributors

v 2.5.7
=========================================================================
x Fixed synchronous timeout emulation ordering bug in bookmarklet
  execution on scriptless pages (thanks Infocatcher for reporting)
x [XSS] Fixed comment preprocessing optimization affecting free
  JavaScript detection, thanks Masato Kinugawa for reporting
x [XSS] Fixed second order data: URLs sanitization issue, thanks Masato
  Kinugawa for reporting
x Fixed meta refresh blocker notification bar broken on Gecko < 4 (thanks
  nitou for reporting)
x Fixed iframe placeholder positioning issue (thanks al_9x for report)
x Fixed regression in placeholder positioning (thanks al_9x for report)
x [ClearClick] Fixed false positive on cross-site SVG document embeddings
  (thanks Steffen for reporting)

v 2.5.7rc5
=========================================================================
x Fixed synchronous timeout emulation ordering bug in bookmarklet
  execution on scriptless pages (thanks Infocatcher for reporting)

v 2.5.7rc4
=========================================================================
x [XSS] Fixed comment preprocessing optimization affecting free
  JavaScript detection, thanks Masato Kinugawa for reporting
x [XSS] Fixed second order data: URLs sanitization issue, thanks Masato
  Kinugawa for reporting

v 2.5.7rc3
=========================================================================
x Fixed meta refresh blocker notification bar broken on Gecko < 4 (thanks
  nitou for reporting)
x Fixed iframe placeholder positioning issue (thanks al_9x for report)

v 2.5.7rc2
=========================================================================
x Fixed regression in placeholder positioning (thanks al_9x for report)

v 2.5.7rc1
=========================================================================
x [ClearClick] Fixed false positive on cross-site SVG document embeddings
  (thanks Steffen for reporting)

v 2.5.6
=========================================================================
x [XSS] Fixed slow regular expression causing some base64 request
  payloads to trigger false positives (thanks Mirko Tasler for reporting)
+ Force placeholders to frontmost position e.g. on HTML 5 Youtube content
+ New icon for blocked embeddings on globally allowed pages (thanks
  therube for RFE)

v 2.5.6rc2
=========================================================================
+ [XSS] Fixed slow regular expression causing some base64 request
  payloads to trigger false positives (thanks Mirko Tasler for reporting)

v 2.5.6rc1
=========================================================================
+ Force placeholders to frontmost position e.g. on HTML 5 Youtube content
+ New icon for blocked embeddings on globally allowed pages (thanks
  therube for RFE)

v 2.5.5
=========================================================================
+ More reliable Java applet origin identification
x Cross-browser work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=789773

v 2.5.5rc2
=========================================================================
x Cross-browser work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=789773

v 2.5.5rc1
=========================================================================
+ More reliable Java applet origin identification
x Work-around for https://bugzilla.mozilla.org/show_bug.cgi?id=789773

v 2.5.4
=========================================================================
x Fixed HTTP checks not being skipped anymore for some chrome-generated
  XMLHttpRequest requests because of a Gecko 15 change
x Work-around for cloned DOM nodes not retaining additional
  chrome-attached information anymore, thus breaking placeholders in some
  cases (thanks al_9x for reporting)
x Fixed placeholder post-enablement event channeling broken by Sandbox
  changes
x Fixed placeholder sizes messed up by changes in Gecko 17
x Work-around for broken content policy call for Java plugin on Gecko 17
  and above (thanks marty60 for reporting)

v 2.5.4rc3
=========================================================================
x Fixed HTTP checks not being skipped anymore for some chrome-generated
  XMLHttpRequest requests because of a Gecko 15 change
x Work-around for cloned DOM nodes not retaining additional
  chrome-attached information anymore, thus breaking placeholders in some
  cases (thanks al_9x for reporting)
x Fixed placeholder post-enablement event channeling broken by Sandbox
  changes

v 2.5.4rc2
=========================================================================
x Fixed meta-refresh emulation regression in Gecko 16 and below

v 2.5.4rc1
=========================================================================
x Fixed placeholder sizes messed up by changes in Gecko 17
x Work-around for broken content policy call for Java plugin on Gecko 17
  and above (thanks marty60 for reporting)

v 2.5.3
=========================================================================
x [XSS] Fixed false positives on URLs containing an ASP.NET cookieless
  session identifier (thanks Trupti Chaudhari for reporting)
+ noscript.eraseFloatingElements about:config preference to switch the
  mousedown + del key floating popup erasing feature off and on
x Limited the mousedown + del key floating popup erasing feature to pages
  where scripts are forbidden and to absolute or fixed position elements
x Fixed JavaScript URL non-void expression evaluation in the URL bar
  causing scripts to get globally allowed (thanks al_9x for reporting)
x [XSS] Work-around for a Gecko URL parsing quirk (thanks .mario for
  reporting)

v 2.5.3rc4
=========================================================================
x Fixed false positives on URL containing an ASP.NET cookieless session
  identifier (thanks Trupti Chaudhari for reporting)

v 2.5.3rc3
=========================================================================
+ noscript.eraseFloatingElements about:config preference to switch the
  mousedown + del key floating popup erasing feature off and on
x Limited the mousedown + del key floating popup erasing feature to pages
  where scripts are forbidden and to absolute or fixed position elements

v 2.5.3rc2
=========================================================================
x Fixed JavaScript URL non-void expression evaluation in the URL bar
  causing scripts to get globally allowed (thanks al_9x for reporting)

v 2.5.3rc1
=========================================================================
x [XSS] Work-around for a Gecko URL parsing quirk (thanks .mario for
  reporting)

v 2.5.2
=========================================================================
x [ClearClick] Improved protection against clickjacking timing attacks
  (thanks Nafeez Ahmed for reporting)
x Fine tuned floating div (in-page popup) removal by locking it to the
  nearest positioned ancestor and swallowing the mouseup event if the
  DEL key has been hit after last mousedown

v 2.5.2rc2
=========================================================================
x [ClearClick] Improved protection against clickjacking timing attacks
  (thanks Nafeez Ahmed for reporting)

v 2.5.2rc1
=========================================================================
x Fine tuned floating div (in-page popup) removal by locking it to the
  nearest positioned ancestor and swallowing the mouseup event if the
  DEL key has been hit after last mousedown

v 2.5.1
=========================================================================
+ Holding the left mouse button down on an absolutely positioned page
  element and hitting the DEL key will remove it (useful to forcibly kill
  in-page popups when scripts are disabled)
x Fixed Acid3 test scoring 99 instead of 100 because of a Cursorjacking
  protection implementation detail
- Disabled LiveConnect interception on Gecko 16 or better, since Java
  globals have been removed from the DOM
x [XSS] Work-around for Mozilla TBPL DOS (thanks Daniel Holbert for
  reporting)
x Fixed Silverlight and Flash scripted initialization patches being
  broken by recent JavaScript interpreter changes
x Work-around for hp-ww.com misconfiguration (JavaScript files served
  with bogus content-type header)

v 2.5
=========================================================================
+ [XSS] Improved XML handling algorithm preserves E4X detection accuracy
  while removing false positives, e.g. against OAUTH payloads
x Work-around for additional browser tools placed on the bottom of the
  content messing with NoScript's notification height (thanks ochristi
  for report)
x [XSS] Added exception for self-injecting yahoo.com/yimg.com frames (can
  be disabled by setting the noscript.filterXExceptions.yahoo
  about:config preference to false)
x Fixed placeholders for absolutely positioned elements may cause layout
  glitches (thanks al_9x for reporting)
x Fixed interaction with built-in Firefox's click-to-play causing
  infinite object activation loop (thanks al_9x for reporting)

v 2.5rc6
=========================================================================
+ [XSS] Further reduction in false positives triggered by XML payloads

v 2.5rc5
=========================================================================
x Further hack to remove the height attribute automatically set on the
  notification stack by browser tools (thanks therube for reporting)

v 2.5rc4
=========================================================================
x Hack to automatically restore the notification bar position as the last
  of its sibling DOM nodes, as a better work-around for browser tools
  messing with its height
- Removed ineffective CSS-based work-around for the browser tools
  splitter messing with NoScript notification's height

v 2.5rc3
=========================================================================
+ [XSS] Improved XML handling algorithm preserves E4X detection accuracy
  while removing false positives, e.g. against OAUTH payloads
x [XSS] Added exception for self-injecting yahoo.com/yimg.com frames (can
  be disabled by setting the noscript.filterXExceptions.yahoo
  about:config preference to false)

v 2.5rc2
=========================================================================
x Work-around for additional browser tools placed on the bottom of the
  content messing with NoScript's notification height (thanks ochristi
  for report)
x Fixed placeholders for absolutely positioned elements may cause layout
  glitches (thanks al_9x for reporting)

v 2.5rc1
=========================================================================
x Fixed interaction with built-in Firefox's click-to-play causing
  infinite object activation loop (thanks al_9x for reporting)

v 2.4.9
=========================================================================
+ Added ability to replace obsolete default whitelist entries
x Replaced browserid.org with persona.org in the default whitelist
x Improved anti-DOS protection
x Better usability with some HTML5 Youtube videos (thanks Mike Perry
  for reporting)
x Reverted to the ctrl+shift+S main keyboard shortcut
x [XSS] Fixed XML preprocessing breaking detection of some E4X
  constructs (thanks Pepe Vila for reporting)
+ [XSS] Protection against error-based SQLI with a XSS payload (thanks
  Ashar Javed for reporting, original disclosure by Keith Makan)

v 2.4.9rc2
=========================================================================
+ Added ability to replace obsolete default whitelist entries
x Replaced browserid.org with persona.org in the default whitelist
x Improved anti-DOS protection
x Better usability with some HTML5 Youtube videos (thanks Mike Perry
  for reporting)
x Reverted to the ctrl+shift+S main keyboard shortcut
x [XSS] Fixed XML preprocessing breaking detection of some E4X
  constructs (thanks Pepe Vila for reporting)

v 2.4.9rc1
=========================================================================
+ [XSS] Protection against error-based SQLI with a XSS payload (thanks
  Ashar Javed for reporting, original disclosure by Keith Makan)

v 2.4.8
=========================================================================
x Work-around for Mozilla bug 771655 (broken debugger)
x Changed default UI shortcut to ctrl+shift+N because ctrl+shift+S is
  taken by the debugger
x Fixed feed: and pcast: URLs not being unwrapped in some checks (thanks
  Alex Inführ for reporting)
x Removed assumptions of a body element from some code paths which may
  handle generic XML documents

v 2.4.8rc3
=========================================================================
x Work-around for Mozilla bug 771655 (broken debugger)
x Changed default UI shortcut to ctrl+shift+N because ctrl+shift+S is
  taken by the debugger

v 2.4.8rc2
=========================================================================
x Fixed regression from 2.4.8rc1: new URL unwrapping code causing a XSS
  filter bypass (thanks Masato Kinugawa for report)

v 2.4.8rc1
=========================================================================
x Fixed feed: and pcast: URLs not being unwrapped in some checks (thanks
  Alex Inführ for reporting)
x Removed assumptions of a body element from some code paths which may
  handle generic XML documents

v 2.4.7
=========================================================================
x [ClearClick] Fixed Tumblr widgets false positive (thanks @Raydere for
  report)
x [XSS] Fixed false positive with some Base64-encoded Yahoo News
  subrequests
x Fixed regression, noscript.allowedMimeRegExp not working anymore for
  plugins other than Java, Flash and Silverlight
x Auto-anchored multi-valued regexp preferences can now be separated by
  regular spaces rather than just newlines (this behavior was documented
  but not actually implemented for noscript.allowedMimeRegExp)

v 2.4.7rc3
=========================================================================
x [ClearClick] Fixed regression: caret cursor not shown on text content
  (thanks Fanolian for reporting)

v 2.4.7rc2
=========================================================================
x [ClearClick] Fixed Tumblr widgets false positive (thanks @Raydere for
  report)

v 2.4.7rc1
=========================================================================
x [XSS] Fixed false positive with some Base64-encoded Yahoo News
  subrequests
x Fixed regression, noscript.allowedMimeRegExp not working anymore for
  plugins other than Java, Flash and Silverlight
x Auto-anchored multi-valued regexp preferences can now be separated by
  regular spaces rather than just newlines (this behavior was documented
  but not actually implemented for noscript.allowedMimeRegExp)

v 2.4.6 (same as 2.4.6rc1)
=========================================================================
x [XSS] Updated execution sink checks (thanks Masato Kinugawa for report)
x [XSS] Fixed newline parsing bug (thanks Masato Kinugawa for report)
x [XSS] Fixed document.cookie minimal assignment false negative (thanks
  Masato Kinugawa for report)
x [XSS] Fixed dotted query parameter names false positives, affecting
  OpenID, Hotmail and other services (thanks Gavin H for report)
x Fixed some messages being dumped to the console even if logging is
  turned off (thanks marbler for report)

v 2.4.5
=========================================================================
+ [XSS] Improved E4X handling (thanks Masato Kinugawa for report)
x [XSS] Fixed regression allowing some alert-only PoCs (thanks Soroush
  Dalili and Ahamed Nafeez for reporting)
x [XSS] Improved unconventional assignments detection  (thanks Masato
  Kinugawa for report)
x [L10n] Corrected he-IL merge (thanks baryoni)
x [XSS] Improved data: URIs detection (thanks Masato Kinugawa for report)
+ [XSS] More regular expression objects caching as a speed optimization
- [XSS] Removed optimization shortcut causing false negatives on some
  kind of concatenated assignments (thanks Masato Kinugawa for report)
+ [XSS] Improved "Maybe JS" heuristic (thanks Masato Kinugawa for report)
+ [XSS] More aggressive obsolete charsets filtering (thanks Masato
  Kinugawa for report)

v 2.4.5rc7
=========================================================================
+ [XSS] Improved E4X handling (thanks Masato Kinugawa for report)
x [XSS] Fixed regression allowing some alert-only PoCs (thanks Soroush
  Dalili and Ahamed Nafeez for reporting)

v 2.4.5rc6
=========================================================================
x [XSS] Improved unconventional assignments detection  (thanks Masato
  Kinugawa for report)

v 2.4.5rc5
=========================================================================
x [XSS] Work-around for Gecko ignoring spaces inside data: URIs (thanks
  Masato Kinugawa for report)
x [L10n] Corrected he-IL merge (thanks baryoni)
v 2.4.5rc4
=========================================================================
x [XSS] Further "Maybe JS" heuristic refinement (thanks Masato Kinugawa
  for report)
x [XSS] Improved data: URIs detection (thanks Masato Kinugawa for report)

v 2.4.5rc3
=========================================================================
+ [XSS] More regular expression objects caching as a speed optimization
- [XSS] Removed optimization shortcut causing false negatives on some
  kind of concatenated assignments (thanks Masato Kinugawa for report)

v 2.4.5rc2
=========================================================================
+ [XSS] Improved E4X compatibility (thanks Masato Kinugawa for report)

v 2.4.5rc1
=========================================================================
+ [XSS] Improved "Maybe JS" heuristic (thanks Masato Kinugawa for report)
+ [XSS] More aggressive obsolete charsets filtering (thanks Masato
  Kinugawa for report)

v 2.4.4
=========================================================================
x [L10n] Updated he-IL (thanks baryoni)
x Fixed early synthetic DNS notification causing blank stripe on the
  bottom of the first browser window if started maximized or fullscreen
- Removed Firefox 2.x compatibility code
x Fixed regression from 2.4.3rc3 causing same-site stylesheets to be
  checked for mime type mismatches and XSLT inclusions to be incorrectly
  blocked (thanks hanfi for reporting)

v 2.4.4rc2
=========================================================================
x [L10n] Updated he-IL (thanks baryoni)
x Fixed early synthetic DNS notification causing blank stripe on the
  bottom of the first browser window if started maximized or fullscreen
- Removed Firefox 2.x compatibility code

v 2.4.4rc1
=========================================================================
x Fixed regression from 2.4.3rc3 causing same-site stylesheets to be
  checked for mime type mismatches and XSLT inclusions to be incorrectly
  blocked (thanks hanfi for reporting)

v 2.4.3
=========================================================================
x Fixed JS links detection not resolving JS string escapes (thanks vyznev
  for reporting)
x Fixed HTML 5 parser detection in META refresh processing being broken
  by a removed browser preference
x Fixed exception raised by inclusion type checks when parent document's
  URI has no host
+ [XSS] Better detection of free inline script injections (without string
  literal evasion) inside function calls
+ The noscript.allowedMimeRegExp preference now applies also to Java,
  Flash and Silverlight mime types

v 2.4.3rc3
=========================================================================
x Fixed JS links detection not resolving JS string escapes (thanks vyznev
  for reporting)
x Fixed HTML 5 parser detection in META refresh processing being broken
  by a removed browser preference
x Fixed exception raised by inclusion type checks when parent document's
  URI has no host

v 2.4.3rc2
=========================================================================
+ [XSS] Better detection of free inline script injections (without string
  literal evasion) inside function calls

v 2.4.3rc1
=========================================================================
+ The noscript.allowedMimeRegExp preference now applies also to Java,
  Flash and Silverlight mime types

v 2.4.2
=========================================================================
x [ABE] IPv6 link-local addresses (fe80:/10) are not considered belonging
  to the LAN anymore for the purpose of cross-zone request forgery checks
  in order to safely work-around DNS misconfiguration issues in the wild
  (thanks siu and ralf for reporting)
x [ABE] Fixed router WEB UI fingerprinting failing on some devices
  because of redirection loops
x [XSS] Protection against HPP attacks exploiting URL parsing quirks
  specific to ASP Classic (thanks Soroush Dalili for reporting)
x Fixed first application updates check failing on Nightly (bug 754393)
x [XSS] Fixed false positive regression on some file hosting sites (thanks
   Janne Maekelae for reporting)

v 2.4.2rc7
=========================================================================
x [ABE] IPv6 link-local addresses (fe80:/10) are not considered belonging
  to the LAN anymore for the purpose of cross-zone request forgery checks
  in order to safely work-around DNS misconfiguration issues in the wild
  (thanks siu and ralf for reporting)
x [ABE] Fixed router WEB UI fingerprinting failing on some devices
  because of redirection loops

v 2.4.2rc6
==========================================================================
x [XSS] Fixed query string parsing bug in the new ASP-specific HPP
  protection (thanks Soroush Dalili for reporting)

v 2.4.2rc5
==========================================================================
x [XSS] Fixed recursion bug preventing ASP-specific unicode encodings from
  being correctly handled in presence of simultaneous HPP (thanks Soroush
  Dalili for reporting)

v 2.4.2rc4
==========================================================================
x [XSS] Fixed regression blocking any suspect HPP attack silently (thanks
  Soroush Dalili for reporting)

v 2.4.2rc3
==========================================================================
x [XSS] Protection against HPP attacks exploiting URL parsing quirks
  specific to ASP Classic (thanks Soroush Dalili for reporting)

v 2.4.2rc2
==========================================================================
x Fixed first application updates check failing on Nightly (bug 754393)

v 2.4.2rc1
==========================================================================
x [XSS] Fixed false positive regression on some file hosting sites (thanks
   Janne Maekelae for reporting)

v 2.4.1rc3
==========================================================================
x [XSS] Fixed bug in the InjectionChecker tokenization (thanks Phil
  Purviance for reporting)
+ Added inclusion type check exception to the lesscss Google Code file
  repository, often used as a CDN

v 2.4.1rc2
==========================================================================
+ [Surrogate] adagionet.com inclusion surrogate
x Fixed "Allow sites open through bookmarks" regression (thanks jerryi and
  therube for reporting)

v 2.4.1rc1
==========================================================================
+ [XSS] Protection against exploitation of classic MS ASP's coalescing of
  same-name query parameters (thanks  Soroush Dalili for reporting)
+ [XSS] Protection against URL injections in in window.name
x [XSS] Fixed case-sensitivity bug in detection of unicode escape
  sequences (thanks Masato Kinugawa for reporting)

v 2.4.1
==========================================================================
+ [XSS] Protection against exploitation of classic MS ASP's coalescing of
  same-name query parameters (thanks  Soroush Dalili for reporting)
+ [XSS] Protection against URL injections in in window.name
x [XSS] Fixed case-sensitivity bug in detection of unicode escape
  sequences (thanks Masato Kinugawa for reporting)
+ [Surrogate] adagionet.com inclusion surrogate
x Fixed "Allow sites open through bookmarks" regression (thanks jerryi and
  therube for reporting)
x [XSS] Fixed bug in the InjectionChecker tokenization (thanks Phil
  Purviance for reporting)
+ Added inclusion type check exception to the lesscss Google Code file
  repository, often used as a CDN

v 2.4.1rc3
==========================================================================
x [XSS] Fixed bug in the InjectionChecker tokenization (thanks Phil
  Purviance for reporting)
+ Added inclusion type check exception to the lesscss Google Code file
  repository, often used as a CDN

v 2.4.1rc2
==========================================================================
+ [Surrogate] adagionet.com inclusion surrogate
x Fixed "Allow sites open through bookmarks" regression (thanks jerryi and
  therube for reporting)

v 2.4.1rc1
==========================================================================
+ [XSS] Protection against exploitation of classic MS ASP's coalescing of
  same-name query parameters (thanks  Soroush Dalili for reporting)
+ [XSS] Protection against URL injections in in window.name
x [XSS] Fixed case-sensitivity bug in detection of unicode escape
  sequences (thanks Masato Kinugawa for reporting)


v 2.4
==========================================================================
x Improved temporary permissions management during bookmarklet execution
+ [Surrogate] Skimlinks surrogate script (thanks Drewett for reporting)
+ [XSS] Improved InjectionChecker detection of in-code multiple insertions
  (thanks Krzysztof Kotowicz)
+ [XSS] InjectionChecker detection of single assignment evaluation through
  global exception handling (thanks Gareth Heyes)
x [L10n] Fixed broken overlay on Basque localized browsers (thanks afa
  for reporting)
x [XSS] Fixed bug in late window.name payload checking (thanks Soroush
  Dalili for reporting)

v 2.4rc8
==========================================================================
x [XSS] Improved global exception injection detection
x [XSS] Fixed bug in late window.name payload checking (thanks Soroush
  Dalili for reporting)

v 2.4rc7
==========================================================================
+ [XSS] Improved InjectionChecker detection of in-code multiple insertions
  (thanks Krzysztof Kotowicz)
+ [XSS] InjectionChecker detection of single assignment evaluation through
  global exception handling (thanks Gareth Heyes)
x [L10n] Fixed broken overlay on Basque localized browsers (thanks afa
  for reporting)

v 2.4rc6
==========================================================================
+ [Surrogate] Skimlinks surrogate script (thanks Drewett for reporting)

v 2.4rc5
==========================================================================
x Improved temporary permissions management during bookmarklet execution

v 2.4rc4
==========================================================================
x Fixed 2.4rc3 regression in url bar JavaScript execution

v 2.4rc3
==========================================================================
x Fixed bookmarklet couldn't be executed on blacklisted sites in "Globally
  Allow" mode (thanks tharpa for reporting)

v 2.4rc2
==========================================================================
x [ClearClick] Fixed cross-site clicks blocked on Firefox < 3.6 (thanks
  Janet Whipple for reporting)

v 2.4rc1
==========================================================================
x [Surrogate] Fixed surrogates broken on Nightly

v 2.3.9
==========================================================================
+ [ClearClick] More tolerant snapshot comparation algorithm (partially
  backported from NSA) to reduce false positives (tweaked by the
  noscript.clearClick.threshold percentage value in about:config)
- Removed about:credits from default whitelist
x [ClearClick] Fixed false positives (e.g. on embedded Vimeo movies) in
  obscuration by windowed plugins checks
x Fixed compatibility regressions on Firefox 3.x
x Following links from the About dialog now closes it (thanks Guardian for
  suggestions)
x Fixed NOSCRIPT META refreshes blocking not working when scripts are
  globally allowed (thanks and Ken and Tom T. for reporting)
x [ClearClick] Fixed false positives caused by accelerated graphics with
  some plugin content

v 2.3.9rc4
==========================================================================
x [ClearClick] Fixed false positives caused by accelerated graphics with
  some plugin content

v 2.3.9rc3
==========================================================================
x Fixed compatibility regressions on Firefox 3.x
x Following links from the About dialog now closes it (thanks Guardian for
  suggestions)
x Fixed NOSCRIPT META refreshes blocking not working when scripts are
  globally allowed (thanks and Ken and Tom T. for reporting)

v 2.3.9rc2
==========================================================================
x [ClearClick] Fixed false positives (e.g. on embedded Vimeo movies) in
  obscuration by windowed plugins checks

v 2.3.9rc1
==========================================================================
+ [ClearClick] More tolerant snapshot comparation algorithm (partially
  backported from NSA) to reduce false positives (tweaked by the
  noscript.clearClick.threshold percentage value in about:config)
- Removed about:credits from default whitelist

v 2.3.8
==========================================================================
+ Smart integration with the new browser-native click to play: if a plugin
  object is manually allowed from NoScript's UI, it gets also natively
  activated (noscript.smartClickToPlay about:config preference)
+ Improved active content identity tracking, to avoid redundant blocking
  steps across reloads
x Fixed redirections in legacy frames not being blocked (thanks "utente"
  for reporting)
x [Surrogate] Surrogate to fix broken buttons at Uniblue e-commerce site


v 2.3.8rc2
==========================================================================
x Fixed 2.3.8rc1 regression slowing down flashvars parsing in some cases
  (thanks fred for reporting)
x Fixed redirections in legacy frames not being blocked (thanks "utente"
  for reporting)
x [Surrogate] Surrogate to fix broken buttons at Uniblue e-commerce site


v 2.3.8rc1
==========================================================================
+ Smart integration with the new browser-native click to play: if a plugin
  object is manually allowed from NoScript's UI, it gets also natively
  activated (noscript.smartClickToPlay about:config preference)
+ Improved active content identity tracking, to avoid redundant blocking
  steps across reloads

v 2.3.7
==========================================================================
x [ClearClick] Work-around for "rapid fire" protection interfering with
  some add-ons, such as 1Password (thanks Mike Tselikman for report) and
  FloatNotes (thanks endofmiles and Tom T. for reports)
x [ClearClick] Compatibility with Bitdefender TrafficLight (thanks
  Christopher A. M. Gerlach for reporting)
x [XSS] Enhanced InjectionChecker tolerance to certain URL patterns
  containing domain-names as parameter values (thanks gazer75 for report)

v 2.3.7rc5
==========================================================================
x [ClearClick] Further refinements in TrafficLight compatibility and
  "rapid fire" sensitvity

v 2.3.7rc4
==========================================================================
x [ClearClick] Further "rapid fire" protection sensitivity tweaking

v 2.3.7rc3
==========================================================================
x [ClearClick] Work-around for "rapid fire" protection interfering with
  some add-ons, such as 1Password (thanks Mike Tselikman for report)

v 2.3.7rc2
==========================================================================
x [ClearClick] Compatibility with Bitdefender TrafficLight (thanks
  Christopher A. M. Gerlach for reporting)

v 2.3.7rc1
==========================================================================
x [XSS] Enhanced InjectionChecker tolerance to certain URL patterns
  containing domain-names as parameter values (thanks gazer75 for report)

v 2.3.6
==========================================================================
x Restored Nightly compatibility, broken by bug 719154
+ [ClearClick] improved compatibility with Disqus widgets (thanks El Cid
  for reporting)
+ [AddressMatcher] Optimized trailing "*" in glob expressions
x Fixed origin URL detection flawed when certain wrapped URIs are loaded
 (thanks Masato Kinugawa for reporting)
x [XSS] Fixed false positive with query string patterns mimicking array
  access (thanks Aicke Schulz for reporting)

v 2.3.6rc4
==========================================================================
x Restored Nightly compatibility, broken by bug 719154

v 2.3.6rc3
==========================================================================
+ [ClearClick] improved compatibility with Disqus widgets (thanks El Cid
  for reporting)
+ [AddressMatcher] Optimized trailing "*" in glob expressions

v 2.3.6rc2
==========================================================================
x Fixed origin URL detection flawed when certain wrapped URIs are loaded
 (thanks Masato Kinugawa for reporting)

v 2.3.6rc1
==========================================================================
x [XSS] Fixed false positive with query string patterns mimicking array
  access (thanks Aicke Schulz for reporting)

v 2.3.5
==========================================================================
x Work-around for a Flash 32-bit issue (64-bit Firefox unaffected) causing
  Google Music Player to fail (thanks DG42 for original report, Alan Baxter
  for providing a test account, all the forum staff and many users for
  their help in reproducing)
x [ABE] Fixed "Sandbox" action permanently disabling plugins, frames and
  meta refreshes on the affected tab even if document changes (thanks
  Tom T. and Patrick E. for reporting)
x [ClearClick] Better special-casing for same-site embedded objects
x [Surrogate] Global variables introduced by sandboxed surrogates are
  attached as window properties after execution to fix recently surfaced
  scope-related bugs
x [XSS] Better window.name protection  (thanks Masato Kinugawa for report)
x [XSS] Improved detection of javascript: URL injections

v 2.3.5rc6
==========================================================================
x Work-around for a Flash 32-bit issue (64-bit Firefox unaffected) causing
  Google Music Player to fail (thanks DG42 for original report, Alan Baxter
  for providing a test account, all the forum staff and many users for
  their help in reproducing)

v 2.3.5rc5
==========================================================================
x [ABE] Fixed "Sandbox" action permanently disabling plugins, frames and
  meta refreshes on the affected tab even if document changes (thanks
  Tom T. and Patrick E. for reporting)

v 2.3.5rc4
==========================================================================
x [ClearClick] Better special-casing for same-site embedded objects

v 2.3.5rc3
==========================================================================
x [Surrogate] Global variables introduced by sandboxed surrogates are
  attached as window properties after execution to fix recently surfaced
  scope-related bugs

v 2.3.5rc2
==========================================================================
x [XSS] Further refinements in the window.name protection features (thanks
  Masato Kinugawa for reporting)

v 2.3.5rc1
==========================================================================
x [XSS] Fixed window.name being checked only for JavaScript injections,
  skipping pure HTML ones (thanks Masato Kinugawa for reporting)
x [XSS] Improved detection of javascript: URL injections

v 2.3.4
==========================================================================
x [ClearClick] Fixed subtle bug which may lead to infinite loops in some
  cases (thanks GµårÐïåñ for reporting)

v 2.3.3
==========================================================================
+ Improved InjectionChecker logging
x Reduced false positive rate on HTML injection checks (thanks therube for
  reporting)
x [ClearClick] Fixed clicking on some plugin content causing elements of
  the parent page to become white (thanks Markus Wienand for report)
x [ClearClick] Fixed minor bugs triggered by ABP placeholders
+ [ClearClick] Protection against partial obscuration via Flash objects
  with OS-native wmode values (thanks David Lin-Shung Huang for reporting)
x [XSS] Further sensitivity tweaks
x [XSS] Better compatibility with some 3rd party ads on Ebay
x [XSS] Fixed false positive on dotted name-value assignments chained with
  semicolons (e.g. on some Yahoo-served ads)

v 2.3.3rc6
==========================================================================
+ Improved InjectionChecker logging
x Reduced false positive rate on HTML injection checks (thanks therube for
  reporting)

v 2.3.3rc5
==========================================================================
x [ClearClick] Fixed clicking on some plugin content causing elements of
  the parent page to become white (thanks Markus Wienand for report)
x [ClearClick] Fixed minor bugs triggered by ABP placeholders
x [ClearClick] Removed debug borders on some DOM elements from 2.3.3rc4

v 2.3.3rc4
==========================================================================
x [ClearClick] Fixed false positives introduced by 2.3.3rc3 sensitivity
  enhancements

v 2.3.3rc3
==========================================================================
+ [ClearClick] Protection against partial obscuration via Flash objects
  with OS-native wmode values (thanks David Lin-Shung Huang for reporting)
x [XSS] Further sensitivity tweaks

v 2.3.3rc2
==========================================================================
x [XSS] Better compatibility with some 3rd party ads on Ebay

v 2.3.3rc1
==========================================================================
x [XSS] Fixed false positive on dotted name-value assignments chained with
  semicolons (e.g. on some Yahoo-served ads)

v 2.3.2
==========================================================================
x [XSS] Fixed regression in 2.3.2rc5 preventing some URLs from loading
x [XSS] Removed issue on Chinese pages using HZ-GB-2312 encoding (thanks
  Masato Kinugawa for reporting)
+ [XSS] Added event injection checks for scriptless pages too, in order to
  prevent edge-case execution on permissions change
x [XSS] Fixed InjectionChecker JavaScript scanning bug (thanks Masato
  Kinugawa for reporting)
x [XSS] Improved HTML detection accuracy
+ Better tagging of surrogate sandboxes for about:memory debugging
x Improved glinks surrogate

v 2.3.2rc6
==========================================================================
x [XSS] Fixed regression in 2.3.2rc5 preventing some URLs from loading

v 2.3.2rc5
==========================================================================
x [XSS] Removed issue on Chinese pages using HZ-GB-2312 encoding (thanks
  Masato Kinugawa for reporting)

v 2.3.2rc4
==========================================================================
x [XSS] Fixed regression from HTML detection changes in 2.3.2rc3 (thanks
  Masato Kinugawa for reporting)
+ [XSS] Added event injection checks for scriptless pages too, in order to
  prevent edge-case execution on permissions change

v 2.3.2rc3
==========================================================================
x [XSS] Fixed InjectionChecker JavaScript scanning bug (thanks Masato
  Kinugawa for reporting)
x [XSS] Improved HTML detection accuracy

v 2.3.2rc2
==========================================================================
x [XSS] Removed issue on Japanese pages using ISO-2022-JP encoding (thanks
  Masato Kinugawa for reporting)
x Improved glinks surrogate

v 2.3.2rc1
==========================================================================
+ Better tagging of surrogate sandboxes for about:memory debugging
x Improved glinks surrogate

v 2.3.1
==========================================================================
+ Surrogate to let news pages escape Digg's frame
+ [ClearClick] Improved compatibility with cross-frame overlapping shadows
x Removed ClearClick bypass based on a Firefox SVG CSS filter bug (thanks
  .mario for reporting)
+ adf.ly surrogate to automaticaly skip the interstitial page even if
  scripts are disabled
x Improved Google search surrogates
+ New surrogate against Google's scriptless tracking of search results
  navigation

v 2.3.1rc4
==========================================================================
+ Surrogate to let news pages escape Digg's frame
+ [ClearClick] Improved compatibility with cross-frame overlapping shadows

v 2.3.1rc3
==========================================================================
x Removed ClearClick bypass based on a Firefox SVG CSS filter bug (thanks
  .mario for reporting)

v 2.3.1rc2
==========================================================================
+ adf.ly surrogate to automaticaly skip the interstitial page even if
  scripts are disabled
x Improved Google search surrogates

v 2.3.1rc1
==========================================================================
+ New surrogate against Google's scriptless tracking of search results
  navigation

v 2.3
==========================================================================
x Fixed about:newtab not considered as a local origin by ABE
+ Added blob:, about:memory and about:support to the automatic whitelist
x Added reflected script inclusion check exception for intensedebate.com
x Fixed CSS issues on Gecko 1.8

v 2.3rc2
==========================================================================
x Fixed about:newtab not considered as a local origin by ABE

v 2.3rc1
==========================================================================
+ Added blob:, about:memory and about:support to the automatic whitelist
x Added reflected script inclusion check exception for intensedebate.com
x Fixed CSS issues on Gecko 1.8

v 2.2.9
==========================================================================
+ Right click on NoScript menu items copies the site to the clipboard, if
  any under the pointer, or all the page-related script sources prepended
  with a status mark: + for whitelisted, - for default, ! for untrusted (
  thanks Tom T. for RFE)
+ Added browserid.org to the default whitelist
x Improved default whitelist update mechanism
x Fixed some Flash movies failing to load on Nightly (thanks Nova6K0 for
  reporting)
x Fixed incompatibility between surrogates / content augmentations (e.g.
  toStaticHTML) and CSP (Content Security Policy), thanks Bruce Berry for
  reporting
x NoScript won't attempt to load the release notes page if the site is
  unreachable

v 2.2.9rc1
==========================================================================
x Fixed ABE failing to recognize some FE80:* IPv6 addresses as local ones
  (thanks Mitchum Owen for report)

v 2.2.8
==========================================================================
x [ClearClick] Fixed regression, 2.2.8rc1 swallowing clicks on some nested
  documents

v 2.2.8rc1
==========================================================================
x [ClearClick] Protection against Koto's Cursorjacking technique disclosed
  at http://blog.kotowicz.net/2012/01/cursorjacking-again.html

v 2.2.7
==========================================================================
x [ClearClick] Protection against two steps interaction attack based on
  HTML5 DnD (thanks .mario for reporting)

v 2.2.6
==========================================================================
x [XSS] Fixed sanitization reporting bug

v 2.2.6rc1
==========================================================================
+ [XSS] Protection against new kind of response splitting + XSS combo
  attack responsibly disclosed by Mike Brooks

v 2.2.5
==========================================================================
x [ClearClick] Better compatibility with recent Disqus widget versions

v 2.2.5rc3
==========================================================================
x [XSS] Better compatibility with Verified by VISA (www.securesuite.net)
x Tentative work-around for bug 710170

v 2.2.5rc2
==========================================================================
x Work around for Linux tooltips obstructing the embedding unblocking
  confirmation dialog

v 2.2.5rc1
==========================================================================
x Work around for Mozilla bug 712649

v 2.2.4
==========================================================================
x Fixed some localizations having newlines replaced with 'n' characters

v 2.2.4rc3
==========================================================================
x Fixed regression in SWFObject emulation for plugin placeholders
x Fixed top-level surrogates broken by ECMAv5 version specification

v 2.2.4rc2
==========================================================================
+ [ClearClick] Enhanced protection against same-window timing attacks
   with moving pointer (thanks Michal Zalewski for PoC)
x SyntaxChecker's JavaScript version can be configured per-instance
  (default "1.5")
x [Surrogate] JavaScript version set to "ECMAv5"
x [Surrogate] Use "ECMAv5" for early syntax checks

v 2.2.4rc1
==========================================================================
x Fixed reflected script inclusion false positive on redirections
- Removed "Forbid Web Bugs", which cannot be reliably enforced anymore
  because of speculative parsing
x Restored wlxrs.com in the default whitelist (it had
  accidentally changed back to two subdomains)
x Fixed resetting options doesn't erase the untrusted blacklist until
  browser restart (thanks ddigas for reporting)

v 2.2.3
==========================================================================
+ Configuration import/export directory is persisted across sessions

v 2.2.3rc3
==========================================================================
+ Generalized checks on drag and drop payloads
+ [XSS] Tightened checks on reflected javascript: URIs

v 2.2.3rc2
==========================================================================
x [Surrogate] DOMContentLoad listeners on windows (thanks al_9x for RFE)

v 2.2.3rc1
==========================================================================
+ [Surrogate] Capturing DOMContentLoad listeners (thanks al_9x for RFE)
+ [Surrogate] More homogeneous treatment for file-based surrogates (thanks
  al_9x for RFE)

v 2.2.2
==========================================================================
+ [Surrogate] Wrapped in lexical scoped blocks scripts also when debug
  mode is on (thanks al_9x for RFE)
+ [Surrogate] Early one-time syntax checks on setup (thanks al_9x for RFE)
x [ClearClick] Better compatibility with some GMail embeddings
x [XSS] Better compatibility with Visual Studio in-browser documentation
x [ClearClick] Fixed Adblock Plus causing false positives on Fx 3.6
x Improved HTML 5 DnD XSS protection (thanks Soroush Dalili for reporting)
x [L10n] Lithuanian (thanks Algimantas Margevičius)

v 2.2.2rc4
==========================================================================
x Protection against a new XSS technique based on HTML 5 DnD (thanks
  Soroush Dalili for reporting)

v 2.2.2rc3
==========================================================================
x Better compatibility with credit card verification systems
x [ABE] Fixed ruleset disablement status not surviving browser restarts
  (thanks ssj100 for reporting)

v 2.2.2rc2
==========================================================================
x Fixed escaped_fragment handling issue with proxies (thanks sourcejedi
  for reporting)
x Turned remaining channel URI modification instances into
  ChannelReplacement clients

v 2.2.2rc1
==========================================================================
+ [XSS] Explicit check for potentially dangerous SMIL elements (thanks
  .mario for suggestion)
+ Protection against scriptless keylogging (thanks .mario for reporting)

v 2.2.1
==========================================================================
+ [L10n] Updated he-il (thanks baryoni)
x [ClearClick] Fixed incompatibility with the FoxTab add-on

v 2.2.1rc2
==========================================================================
+ [XSS] Deeper decoding on sanitization (thanks .mario for reporting)

v 2.2.1rc1
==========================================================================
+ [XSS] More accurate recursive decoding (thanks .mario for reporting)

v 2.2
==========================================================================
+ [ClearClick] Improved protection against Clickjacking on nested windowed
  Flash targets (thanks Sommerrain and Tom T for reporting)

v 2.1.9
==========================================================================
x [Surrogate] fixed breakage caused by "1.8.1" JavaScript version spec
  used instead of "1.8"

v 2.1.9rc3
==========================================================================
+ [Surrogate] JavaScript 1.8 support (thanks al_9x for RFE)
+ Better heuristic for XSSI detection
- Removed previous work-around XSSI exceptions
x Fixed some DOM traversal bugs (thanks al_9x for reporting)
x Refined Google search meta refresh blocking exception
x Added meta refresh blocking exception for t.co (Twitter URL shortener)

v 2.1.9rc2
==========================================================================
x Work-around for XSSI checks breaking some Yahoo! Mail features

v 2.1.9rc1
==========================================================================
+ New noscript.forbidMetaRefresh.exceptions url pattern preference
+ Meta refresh blocking exception for Google Search (blank page shown
  otherwise if meta refresh blocking is enabled, cookies are disabled for
  Google and Google Search scripting is forbidden)

v 2.1.8
==========================================================================
+ Improved anti-popunder built-in surrogate
x Fixed object autowiring upon placeholder activation regressed by recent
  surrogate sandboxing changes

v 2.1.8rc2
==========================================================================
+ noscript.xss.checkInclusions about:config preference (default true)
  controls whether the new protection against reflected cross-site script
  inclusion (XSSI) is enabled or not (thanks al_9x for RFE)
+ noscript.xss.checkInclusions.exceptions about:confing preference to
  disable XSSI checks for certain script sources (thanks al_9x for RFE)

v 2.1.8rc1
==========================================================================
+ Protection against reflected script inclusion (thanks tlu for reporting)
x Fixed logged error message on permissions change (thanks Archaeopteryx
  for reporting)

v 2.1.7
==========================================================================
x [ABE] Fixed subrequests matching an Anon action rule not being shown in
  the logs if already anonymized by the browser

v 2.1.7rc1
==========================================================================
x Fixed error console noise regression from menu fixes (thanks al_9x and
  Archaeopteryx for reporting)

v 2.1.6
==========================================================================
+ noscript.keys.tempAllowPage about:config preference to configure a
  keyboard shortcut for "Temporarily allow all this page"
+ noscript.keys.revokeTemp about:config preference to configure a keyboard
  shortcut for "Revoke temporary permissions"
+ noscript.menuAccelerators about:config preference to switch keyboard
  accelerators for "(Temporary) allow all this page" menu items on/off
x Fixed notifications get all shown on the top in a tab where one
  notification has already been shown on the top
x Fixed quasi-leak (zombie compartment) after using the NoScript menu on
  a page where embedded content is present, until the menu is opened on
  another page (thanks Archaeopteryx for reporting)
x [ABE] Fixed Anonymize actions logged twice (thanks al_9x for reporting)

v 2.1.6rc1
==========================================================================
x [Surrogate] Fixed sandboxed surrogates unable to set global variables

v 2.1.5
==========================================================================
x Improved object wiring emulation on placeholder activation (thanks al_9x
  for report and code)

v 2.1.5rc3
==========================================================================
+ [Surrogate] noscript.surrogate.sandbox preference to control the
  execution method for inclusion surrogates

v 2.1.5rc2
==========================================================================
x Work-around for CORS incompatibility with internal redirects
- Removed legacy threading management support

v 2.1.5rc1
==========================================================================
x [Surrogate] Surrogates triggered by content policy calls get executed in
  a sandbox
x Moved SWFObject and Silverlight patching to early scripts
x Replaced every reference to XHR's "on..." event handler properties with
  their addEventListener() counterparts, to cope with bug 687332 fallouts

v 2.1.4
==========================================================================
x Fixed speculative parsing causing inclusion surrogates to be executed
  twice (thanks al_9x for reporting)

v 2.1.4rc1
==========================================================================
x More efficient and Gecko-friendly HTTPS enforcing method

v 2.1.3
==========================================================================
+ [Surrogate] Disqus surrogate to fix misplaced placeholder (thanks al_9x
  for code)
+ [L10n] Bengali (thanks svarnava)
x Fixed missing placeholder for hidden embeddings (thanks royallin for
  reporting)

v 2.1.3rc5
==========================================================================
+ [Surrogate] "Before" script surrogates (whose sources are prefixed with
  '<') get executed before the matching external script starts loading
  (thanks al_9x for RFE)
+ [Surrogate] "After" script surrogates (whose sources are prefixed with
  '>') get executed immediately after the matching external script runs
  (thanks al_9x for RFE)

v 2.1.3rc4
==========================================================================
x Fixed missing placeholder for plugin documents when collapsing blocked
  object preference is set (thanks Mc for reporting)
x Removed problematic "(Temporarily) Allow all on this page" access keys
x Even better heuristic to match id-less replaced embeddings on reload

v 2.1.3rc3
==========================================================================
x Better heuristic to match id-less replaced embeddings on reload

v 2.1.3rc2
==========================================================================
x [XSS] Better compatibility with Facebook Connect apps

v 2.1.3rc1
==========================================================================
x Fixed unblocking HTML 5 media clips from placeholder causes the throbber
  to spin indefinitely (thanks al_9x for reporting)
x Fixed "..txt" (rather than ".txt") being appended as the default file
  extension when exporting NoScript's configuration / whitelist (thanks
  SeanM for reporting)
x Fixed inital directory uncorrectly initialized by the configuration
  export dialog on some platforms (thanks SeanM for reporting)

v 2.1.2.9rc1
==========================================================================
x Facebook Connect surrogate (thanks al_9x for code)
- Removed outdated anti-anti-adblocker surrogate

v 2.1.2.8
==========================================================================
x Fixed placeholders hard to activate on HTML 5 Youtube videos

v 2.1.2.8rc2
==========================================================================
x [XSS] Improved out-of-the-box compatibility with some Facebook games
x Fixed plugin blocking not working sometimes on file:// pages
  loadeded before any network activity (thanks nagan for reporting)

v 2.1.2.8rc1
==========================================================================
+ Google Plus One surrogate (thanks al_9x for code)
- Removed t.co surrogate, since Twitter implemented a NOSCRIPT fallback

v 2.1.2.7
==========================================================================
x Better load progress feedback for hosts which are not DNS-cached yet
  (thanks al_9x for reporting)

v 2.1.2.7rc3
==========================================================================
x Improved Google Analytics surrogate (thanks al_9x for code)
x More intuitive handling of the "live" behavior of the ABE ruleset editor
  when syntax errors are introducd (thanks al_9x for reporting)

v 2.1.2.7rc2
==========================================================================
x Fixed OBJECT document inclusions failing under some circumstances

v 2.1.2.7rc1
==========================================================================
+ Prevent any website from embedding view-source URIs inside frames
x Firefox 9.0a1 compatibility

v 2.1.2.6
==========================================================================
x Temporarily disabled anti-anti-adblocker surrogate on any site except
  those explicitly added to noscript.surrogate.ab.sources preference, as a
  work-around for bug 677652
x Lazy initialization is deferred also when a file:// URL is loaded as the
  home page

v 2.1.2.6rc7
==========================================================================
x More accurate work around for bug 677050

v 2.1.2.6rc6
==========================================================================
x Work around for Nightly bug 677050

v 2.1.2.6rc5
==========================================================================
x Fixed rapid-fire cross-site interaction protection interfering with some
  keyboard-based UI patterns

v 2.1.2.6rc4
==========================================================================
x Fixed Firefox's built-in feed renderer broken unless about:feeds is
  whitelisted

v 2.1.2.6rc3
==========================================================================
x Plugin origin checks now account for multiple extra-codebase archives
x Work around for HTTPS script inclusions on JavaScript-disabled pages
  being loaded, albeit not executed (thanks al_9x for reporting)
x [ClearClick] Tentative work-around for ABP's "Block..." tab causing
  false positives on nested documents (thanks GµårÐïåñ for reporting)

v 2.1.2.6rc2
==========================================================================
x Work-around for content policy inconsistencies in Java applet origins
  handling (thanks al_9x for reporting)

v 2.1.2.6rc1
==========================================================================
+ Surrogate for the t.co Twitter URL shortener, which would otherwise
  require JavaScript
+ USER ruleset conveniently pre-selected when ABE options are opened
x Improved invisible links detection approach

v 2.1.2.5
==========================================================================
x Fixed bookmarklets from sidebars not working on JS-disabled pages
+ Improved Twitter surrogate for Fx 3.x

v 2.1.2.4
==========================================================================
+ Ubuntu-specific startup optimization

v 2.1.2.4rc5
==========================================================================
+ Halved startup time (< 50ms) by deferring costly initialitations to
  first remote request and fastloading the rest
x Minor tweaks to Twitter surrogate

v 2.1.2.4rc4
==========================================================================
+ Script Surrogate execution also for ABE-denied script requests (
  thanks al_9x for RFE)
+ Script Surrogate for Twitter inclusions (thanks al_9x)
x Improved compatibility with Readability
x Fixed switching from one rule to another in the Rulesets box looses
  changes in the current rule (thanks al_9x for reporting)

v 2.1.2.4rc3
==========================================================================
x Fixed url bar regression from rc2

v 2.1.2.4rc2
==========================================================================
x [ClearClick] noscript.clearClick.rapidFireCheck about:config preference
  to control whether rapid fire event checking should be enabled or not
x [Bookmarks] Fixed javascript-based keyword bookmarklet not being ran on
  Fx 6 and above (thanks al_9x for reporting)

v 2.1.2.4rc1
==========================================================================
x [ClearClick] Restored compatibility with bit.ly (now bitly.com)

v 2.1.2.3
==========================================================================
x [ClearClick] Refactoring and isolation of the rapid fire protection

v 2.1.2.3rc2
==========================================================================
x [ClearClick] Further refinement of rapid fire detection on tab switching

v 2.1.2.3rc1
==========================================================================
x [ClearClick] Fixed delay on first event response after some kinds of tab
  switching

v 2.1.2.2
==========================================================================
x [ClearClick] Fixed false positives due to backwards incompatibilities
  with Fx 3.5 and below (thanks chas35 for reporting)
x [Nightly compat] Fixed import/export broken by nsIJSON interface changes
  in recent nightly builds (thanks happy-dude for reporting)

v 2.1.2.1
==========================================================================
x Fixed rapid fire cross-site interaction protection interfering with
  keyboard-based tab switching (thanks tikl for reporting)

v 2.1.2 (same as 2.1.2rc6)
==========================================================================
x Minor tweaks to the new rapid fire cross-site interaction protection

v 2.1.2rc5
==========================================================================
+ ClearClick protection against rapid fire cross-site interaction (AKA
  double-clickjacking, thanks Colline Jackson for RFE)

v 2.1.2rc4
==========================================================================
+ ClearClick protection against view-source content extraction attacks
  (thanks Steven Roddis for RFE)
+ Current version number shown directly in all the "About NoScript" menu
  items (thanks therube for RFE)
x Fixed NoScript icon status not updated when a tab is moved to a new
  window (thanks dhouwn for reporting)

v 2.1.2rc3
==========================================================================
x Fixed work around for Bug 668690 breaking feed viewer (thanks Jim Too
  for reporting)

v 2.1.2rc2
==========================================================================
x Disabled NoScript's X-Frame-Options support on Firefox 3.6.10 and above,
  where it is built-in
x Work around for Bug 668690 affecting Gecko 2.0 and above (thanks Nemoar
  and al_9x for reporting)

v 2.1.2rc1
==========================================================================
x Fixed startup error in Nightly due to the merge of event target
  interfaces in bug 658714 (thanks Hydraxr for reporting)

v 2.1.1.2 (same as 2.1.2rc0)
==========================================================================
x Fixed conflict with Firebug console
x Removed legacy code in content policy and ClearClick

v 2.1.1.2rc9
==========================================================================
x Fixed surrogates causing duplicate history entries for some sites on
  Firefox 5
x Work around for bug 666371 breaking popunder surrogate and legitimate
  popups on some sites

v 2.1.1.2rc8
==========================================================================
x Work-around for Mac OS X filepicker in Firefox 5 preventing exported
  configuration files from being reimported

v 2.1.1.2rc7
==========================================================================
x Work-around for Nightly bug breaking the "View image" command
x Improved Google Analytics surrogate

v 2.1.1.2rc6
==========================================================================
+ HTML 5 media blocking extended to Mozilla's audio API extension (thanks
  al_9x for RFE)
x Improved handling of resource prefetching through object elements
x Removed msc.wlxrs.com and js.wlxrs.com, adding just wlxrs.com to the
  default whitelist and to the whitelists of Hotmail users, after Microsoft
  explained that this is the future-proof permission needed to ensure
  compatibility with the Live webmail

v 2.1.1.2rc5
==========================================================================
x Full page reload is not triggered anymore when invisible plugin objects
  are activated if the parent page has been loaded by a POST HTTP request
  (thanks al_9x for RFE)
x Full page reload is not triggered anymore on invisible frame activation
  (thanks al_9x for RFE)
x Fixed "Blocked Objects" menu missing on Hotmail inbox (thanks therube
  for reporting)
x Object elements used to prefetch JavaScript and CSS content are not
  blocked anymore, provided that the parent is whitelisted, This behavior
  can be disabled in about:config, noscript.allowCachingObjects (thanks
  al_9x for RFE)

v 2.1.1.2rc4
==========================================================================
+ Added msc.wlxrs.com to the default whitelist as requested by the Hotmail
  team (new domain required for Hotmail to work)
+ One-time merge of the default whitelist to integrate services already
  whitelisted as needed (e.g. hotmail.com to imply msc.wlxrs.com)
x Work-around for scripts served from amazonaws.com having wrong media
  type sometimes

v 2.1.1.2rc3
==========================================================================
x Fixed frame in-place activation causing the content to be loaded inside
  a nested iframe (thanks al_9x for reporting)

v 2.1.1.2rc2
==========================================================================
x [XSS] Work-around for an unfixable (JavaScript fragments get actually
  uploaded cross-site) false positive on Verizon login (thanks John Dwyer
  for reportng)

v 2.1.1.2rc1
==========================================================================
x Fixed onLocationChange2 missing in nsIWebProgressListener2 impl. causing
  noise on trunk after bug 311007 landed (thanks Hydraxr for report)

v 2.1.1.1
==========================================================================
+ Improved embedded object activation on Javascript-enabled pages via
  dynamic method proxies (thanks al_9x for RFE)

v 2.1.1.1rc2
==========================================================================
x [XSS] removed false positive at Well Fargo's login

v 2.1.1.1rc1
==========================================================================
x Reduced request garbage collection frequency

v 2.1.1
==========================================================================
x Fixed toolbar button hidden in popup windows (thanks Steven Roddis for
  reporting)

v 2.1.0.6rc14
==========================================================================
x Fixed double HTTP requests sent sometimes for document requests just
  after DNS cache invalidation (thanks Lekensteyn and SLED for reporting)
x Removed NoScript and FlashGot download pages and added Yahoo! Mail as a
  ClearClick exception, in order to prevent false positives in the message
  panel (thanks be and sabret00the for reporting)
x Fixed conflict with IE Tab 2 causing new tab not to open URLs entered
  in the address bar (thanks mc for reporting)

v 2.1.0.6rc13
==========================================================================
x Fixed placeholders broken on trunk after fix for Gecko's bug 308590

v 2.1.0.6rc12
==========================================================================
+ Added paypal.com and paypalobjects.com to the default whitelist, to cope
  with the new in-page contribution setup at AMO and reduce XSS risks
+ Improved toStaticHTML() emulation (thanks .mario for reporting)

v 2.1.0.6rc11
==========================================================================
x Fixed broken toolbar button on first window opened during first run ever
  on Firefox 4.x (thanks al_9x for reporting)

v 2.1.0.6rc10
==========================================================================
x Tentative fix for double HTTP requests sent sometimes upon DNS refresh
x Fixed XSS false positive on Google's Talk Gadget loading

v 2.1.0.6rc9
==========================================================================
+ Improved bookmarklet execution handling (thanks @nomaded for reporting)
= Compatibility bump for Fx 7.0a1

v 2.1.0.6rc8
==========================================================================
+ Further and less likely ASP-related tricks in InjectionChecker (thanks
  Soroush Dalili for reporting)
x Fixed bookmarklets and JavaScript URLs broken in about:blank unless
  imports are allowed (thanks Nick Ang for reporting)
+ JavaScript URL bar shortcuts are now treated as bookmarklet and executed
  by default (thanks @nomaded for reporting)

v 2.1.0.6rc7
==========================================================================
x More ASP idiosyncrasies taken in account by InjectionChecker (thanks
  Soroush Dalili for reporting)

v 2.1.0.6rc6
==========================================================================
x Fixed false positive in anti-exfiltration HTML injection checks

v 2.1.0.6rc5
==========================================================================
x Fixed rc2 frame blocking regression (thanks  milithruldur for report)

v 2.1.0.6rc4
==========================================================================
+ Per-site WebGL blocking support (WebGL is implicitly disabled wherever
  JavaScript is not allowed; it can be blocked on any other site by
  checking "NoScript Options|Embedding|Forbid WebGL", and allowed per-site
  by clicking on a placeholder of the blocked canvas or by using the
  "Blocked objects..." menu if no canvas had been inserted in the page)

v 2.1.0.6rc3
==========================================================================
x Work-around for Cocoon add-on being broken by NoScript's early usage
  of the IO Service (thanks Dan Staudigel for reporting)

v 2.1.0.6rc2
==========================================================================
x Fixed plugin documents can't be opened in NewsFox if embedding
  restrictions are in place (thanks Mc for reporting)

v 2.1.0.6rc1
==========================================================================
x Fixed broken anti image exfiltration rules in HTML injection checks on
  noscripted pages (thanks Gareth Heyes for reporting)

v 2.1.0.5
==========================================================================
x Fixed recent memory optimizations breaking compatibility with some
  extensions (thanks Alan Baxter for reporting)

v 2.1.0.5rc1
==========================================================================
x Work-around for a Seamonkey initialization timing issue

v 2.1.0.4rc11
==========================================================================
+ Improved performance and memory efficiency of cross-site checks
x Removed redundant primary origin from ABE messages
x More verbose initialization error reporting

v 2.1.0.4rc10
==========================================================================
x Fixed memory leak on Nightly when watching the movie at http://ro.me
  (thanks _nil and therube for reporting)

v 2.1.0.4rc9
==========================================================================
x Fixed Script Surrogate execution breaking some framesets
x Fixed executing an interactive bookmarklet and closing current tab
  during execution keeps scripts globally allowed
+ Disabled execution of javascript: and data: URLs typed or
  pasted in the address bar (noscript.allowURLBarJS preference)
+ Disabled execution of non-whitelisted scripts imported during execution
  of javascript: and data: URLs typed or pasted in the address bar
  (noscript.allowURLBarImports preference)
+ Work around for Verizon's cache serving scripts with wrong media type

v 2.1.0.4rc8
==========================================================================
x Fixed NoScript icon disappearing from add-on bar when mode == "text"

v 2.1.0.4rc7
==========================================================================
x Better work-around for bit.ly sidebar triggering ClearClick warnings
  (thanks Markus387 for reporting)

v 2.1.0.4rc6
==========================================================================
x Work-around for bit.ly sidebar triggering ClearClick warnings
x Fixed placeholders with undersized type icon regression

v 2.1.0.4rc5
==========================================================================
x Fixed Seamonkey hanging on some pages (thanks therube for reporting)

v 2.1.0.4rc4
==========================================================================
x Fixed labels being shown for NoScript buttons on the add-on bar in some
  configurations (thanks baciok for reporting)

v 2.1.0.4rc3
==========================================================================
x Fixed minimum placeholder size not applied when embeddings have "auto"
  as their computed CSS width or height (thanks al_9x for reporting)

v 2.1.0.4rc2
==========================================================================
+ On scriptless pages, empty forms meant to be submitted via JavaScript
  are automatically augmented with a submit button labeled after the
  destination URL (thanks timeless for RFE)

v 2.1.0.4rc1
==========================================================================
x Changed the noscript.forbidXBL default to 1 (OK for current Fx versions)
  in order to avoid Lotus Mail issues (thanks Tina for reporting)
x [XSS] Fixed a false positive involving Amazon mp3 checkout (thanks Dan
  Loomis for reporting)

v 2.1.0.3
==========================================================================
x [L10n] Updated ro
x Restored some locales gone missing in previous dev build

v 2.1.0.3rc5
==========================================================================
x Improved Google Analytics surrogate
x Experimental built-in Firefox Sync turned off by default (can be enabled
  through the noscript.sync.enabled about:config preference)
x Tentative fix for some synchronization annoyances

v 2.1.0.3rc4
==========================================================================
x Suppress any dump() logging when in Private Browsing mode, in order to
  avoid X session log leakages on Linux
x Tentative fix for a RequestWatchdog lazy initialization race condition
  (thanks Daniel Holbert for reporting)

v 2.1.0.3rc3
==========================================================================
+ Warning when user closes the options dialog leaving broken ABE ruleset
  behind (thanks al_9x for report)

v 2.1.0.3rc2
==========================================================================
x Fixed Yahoo Toolbar breaking first browser window if NoScript 2.1.0.2 is
  installed
x Various additional startup optimizations

v 2.1.0.3rc1
==========================================================================
x Added some null checks to prevent Venkman noise (thanks timeless)

v 2.1.0.2
==========================================================================
x [XSS] Improved XML prescreening

v 2.1.0.2rc5
==========================================================================
x Halved startup time

v 2.1.0.2rc4
==========================================================================
x More robust surrogate execution

v 2.1.0.2rc3
==========================================================================
+ Label automatically hidden when NoScript's toolbar buttons are added to
  the add-ons bar

v 2.1.0.2rc2
==========================================================================
x Fixed AddressMatcher broken by RegExp changes in latest Minefield (
  thanks linuser for reporting)

v 2.1.0.2rc1
==========================================================================
x Fixed ABE options panel regressions due to the changed storage (thanks
  al_9x for reporting)

v 2.1.0.1
==========================================================================
x Removed googlesyndication.com from the default whitelist
x Added securecode.com ("Verified by VISA") to the default whitelist, in
  order to prevent surprise transaction failures
x [XSS] Exception for POST requests coming from a secure albeit not
  whitelisted Verified by Visa (securecode.com) origin
x [ABE] Fixed bug causing excessive console noise from permissive rules
x Updated locales

v 2.1
==========================================================================
x Fixed various Script Surrogate inconsistencies

v 2.1.0rc6
==========================================================================
+ [ABE] Rulesets now are stored as preferences rather than files for
  faster startup (less I/O) and more consistent settings management
+ [ABE/Sync] Rulesets are integrated into Firefox Sync for preferences too
x On first Firefox 4 run toolbar icon now gets added to the add-on bar
  instead of the navigation bar if the latter is invisible, even if the
  former is invisible as well (many users seem to expect it there)
x Fixed additional toolbar buttons too wide when labels are shown
x Fixed some Script Surrogate regressions (thanks al_9x for reporting)
x Work around for alert on new windows due to Mozilla's bug 608628
x Fixed placeholder not shown for embed elements placed inside invalid
  object elements (thanks al_9x for reporting)

v 2.1.0rc5
==========================================================================
+ Firefox Sync integration can be switched off through the
  noscript.sync.enabled about:config preference
x [XSS] Fixed false positive regression from recent Firefox 4
  optimizations (thanks m_c for reporting)

v 2.1.0rc4
==========================================================================
x Further version-specific Script Surrogate optimizations

v 2.1.0rc3
==========================================================================
+ First shot at Firefox Sync native integration, synchronizes everything
  except custom ABE rules
x [ABE] Optimized origin tracing
+ [ABE] INC(MEDIA) subtype matching HTML5 video and audio requests
+ [ABE] INC(FONT) subtype matching font embedding requests
x Huge refactoring in regular expression usage to optimize for Fx 4
x Script Surrogate optimization

v 2.1.0rc2
==========================================================================
x [ABE] Work-around for some Java plugin requests bypassing HTTP observers
  (thanks tlu for reporting)
+ [ABE] Media HTML elements and plugin sub-requests are matched by the OBJ
  inclusion subtype
+ [ABE] Font requests are matched by the OTHER inclusion subtype

v 2.1.0rc1
==========================================================================
x Fixed iframe content being sometimes opened in new tabs on Fx 4 when ABE
  is enabled and DNS cache is missed

v 2.0.9.9
==========================================================================
x Fixed spaces in ipecho response breaking WAN IP detection with one of
  the mirrors
+ Experimental built-in profiler for debugging purposes

v 2.0.9.9rc5
==========================================================================
+ Compatibility with Fire.fm
+ [XSS] Compatibility with latest Readability
x Tentative work-around for a WAN IP detection issue after sleep/wakeup

v 2.0.9.9rc4
==========================================================================
+ Forced text-plain on documents which miss a content-type header but send
  "X-Content-Type-Options: nosniff"
+ Increased compatibility of the X-Content-Options implementation

v 2.0.9.9rc3
==========================================================================
x Work-around for surrogates not being executed on latest Fx 4 builds
x X-Content-Options implementation more compatible with Browserscope

v 2.0.9.9rc2
==========================================================================
x Fixed AJAX fallback last-minute breakage (thanks dhouwn for report)

v 2.0.9.9rc1
==========================================================================
+ Improved XSS filter to protect against potential risks from new HTML 5
  features
+ AJAX fallback support via Google's _escaped_fragment_ recommendation,
  can be disabled by toggling the noscript.ajaxFallback.enabled preference
  (see https://code.google.com/web/ajaxcrawling/, thanks alexbobp for RFE)
+ New noscript.placeholderLongTip about:config preference to control
  whether embedding placeholder tooltips should include query strings
  and hash fragments or not (true by default)

v 2.0.9.8
==========================================================================
x Fixed empty tooltip for embedded placeholder on some RTL pages (thanks
  Saad for reporting)
x Truncate URLs in placeholders tooltips at the the query string or hash,
  to increase readability (thanks anystupidassname for RFE)
x Increased WAN IP checks interval to 1 hour reducing log spam on routers
- Removed some obsolete code

v 2.0.9.8rc2
==========================================================================
x Fixed all IPv6 addresses in fc80::/24 subnet being erronously treated
  like link-local addresses (thanks Jojo999 for reporting)
x Fixed "Unsafe Reload" not working for sanitized POST requests from
  untrusted to trusted sites (thanks Lucas Malor for reporting)
+ Better compatibility with Paypal button hosted on non-whitelisted sites
+ Added mozilla.net to the default whitelist for AMO compatibility

v 2.0.9.8rc1
==========================================================================
x [UI] Fixed toolbar button being added on the right of the window resizer
  when Fx 4 is run for the first time with NoScript and the add-on bar is
  visible
+ [UI] Hitting the "show UI" shortcut (ctrl+shift+S) a second time
  dismisses NoScript's popup menu (thanks jso for RFE)
x [DNT] Restored header reordering after DNT header is added, in order to
  match Firefox 4's header fingerprint

v 2.0.9.7
==========================================================================
x Fixed status label menu popping up in a wrong position
x Updated locales

v 2.0.9.7rc5
==========================================================================
x Fixed external filters submenu not removed when external filters are
  disabled
x Blocked objects menus show IFRAME/FRAME rather than mime type info for
  blocked frames (thanks al_9x for suggestion)
+ Restored legacy status label by popular request
+ Sticky menu can be triggered by left clicking on status label now

v 2.0.9.7rc4
==========================================================================
x Work-around for menu icons hidden with some Linux distros and themes
  (thanks nickr for reporting)
x Changed the X-Do-Not-Track header name to DNT in anticipation of an IETF
  Internet-Draft, per Jonathan Mayer
x noscript.doNotTrack.forced gets honored for local addresses now (thanks
  Heptite for RFE)
x Fixed partial external filter definition could not be saved
x Fixed empty external filter whitelist could not be validated

v 2.0.9.7rc3
==========================================================================
x Fixed exception on cross-site POST requests from URIs not supporting
  the host component (thanks JeffCO for reporting)
x Fixed JS redirection detection being activated also on whitelisted
  pages sometimes (thanks scratchpaper for reporting)

v 2.0.9.7rc2
==========================================================================
+ 64x64 icon for Fx 4's add-ons manager
x Fixed bookmarklet execution machinery active even when JavaScript is
  disabled by Firefox's content options (thanks Martin Focke foir report)
x Tentative work-around for toolbar button being oriented vertically in
  some themes, disrupting toolbar's layout
x More updated locales

v 2.0.9.7rc1
==========================================================================
x Fixed a ClearClick bypass possible to whitelisted attackers who can run
  JavaScript (thanks Atul Agarwal for reporting)
x Updated locales
x Improved K-Meleon portability (thanks jk- for RFE)

v 2.0.9.6
==========================================================================
x Fixed X-Do-Not-Track after a DNS cache miss causing some embedded
  content requests to fail

v 2.0.9.5
==========================================================================
x Fixed NoScript toolbar buttons having wrong orientation in "icon and
  text" mode

v 2.0.9.4
==========================================================================
x Fixed toolbar button does not open the menu (unless you click the little
  arrow) if you disable hovering and toggling (thanks bleh for report)
- Removed dynamic localization fallback at runtime
+ Added static localization fallback to the build system
x Localization layout cleanup
x Legacy files cleanup

v 2.0.9.4rc2
==========================================================================
x Removed toolbarbutton-specific stylings
+ Better web compatibility for X-Content-Options
+ Better home router compatibility for X-Do-Not-Track

v 2.0.9.4rc1
==========================================================================
x Fixed DoNotTrack exceptions/forced patterns not being enforced
x Tentative work-around for basic HTTP authentication failing with some
  servers when X-Do-Not-Track is sent

v 2.0.9.3
==========================================================================
x Fixed some cross-site requests containing JSON-like fragments broken

v 2.0.9.2
==========================================================================
x Fixed forbid META refresh inside NOSCRIPT elements regression

v 2.0.9.1
==========================================================================
x Fixed partial options dialog breakage (ClearClick and Import/Export)

v 2.0.9
==========================================================================
- Removed JAR blocking (obsolete in supported browser versions)
- Removed emulated TLD service
x Hidden status bar icon option on applications which have no status bar
x Fixed noscript.doNotTrack.* preferences not being honored

v 2.0.9rc5
==========================================================================
x Fixed wrong popup position on status bar icon (Fx 3.6.x and below only)

v 2.0.9rc4
==========================================================================
+ X-Do-Not-Track and X-Behavioral-Ad-Opt-Out (tracking opt-out) support,
  controlled by the noscript.doNotTrack.* about:config preferences
x Restored "left+click on NoScript icon reopens the menu in legacy mode
  even if it's already opened in hover mode" feature
x Fixed bug preventing channel replacement when the HTTP method changes
+ Embedded permissions are now bound to the embedding site (thanks al_9x
  for RFE)
x Fixed permissions keys for Flash embeddings include FlashVars PARAMETER
  elements, rather than just attributes (thanks breakBug for report)
x Fixed embedding permission changes not honoring disabled autoreload
  preferences (thanks MMlosh for reporting)

v 2.0.9rc3
==========================================================================
+ Middle clicking toolbar button temporarily allows all on current page
- Removed forced embedding opacization legacy feature
- Removed tooltips from icons spawning hover UI
- Disabled permission toggling on left+click for hover UI toolbar buttons
  (can be reenabled by setting noscript.hoverUI.excludeToggling to true)
x Fixed notification regression

v 2.0.9rc2
==========================================================================
x No extra spacer added on addon-bar during first customization
x Long menus automatically scroll to the bottom when opened from the
  bottom of the browser
x Fixed legacy status bar icon switching permissions on left+click like
  the toolbar button
x Fixed legacy status bar icon always getting "after_start" popup position

v 2.0.9rc1
==========================================================================
+ Improved anti-popunder surrogate
+ Check for UI accessibility of Firefox 4 with hidden addon-bar and
  automatic installation of toolbar button on fail
x Fixed whitelisted iframe blocking getting in the way of web content
  embedded by privileged tabs (e.g. Firefox 4's add-on manager)
x [ClearClick] slightly shorter viewport to accomodate Facebook's "Like"
  mini buttons
x Fixed tooltips getting in the way of hover UI
- Removed status bar label
x Fixed regression: permissions changes on sites with non-standard ports
  failed to trigger page reload (thanks Andrew Black for reporting)
x Fixed layout issue triggered by JS redirect detection (thanks Teknorat
  for reporting)

v 2.0.8.1
==========================================================================
x Fixed new IFRAME-based Youtube embedding method broken on non
  whitelisted pages with embedding restrictions (thanks al_9x for report)

v 2.0.8
==========================================================================
x Fixed toolbar buttons icon size on Firefox 4 Windows theme
+ XSS check on permissions changes, suppressing events and forcing
  filtered reload if an injection is found (thanks dave b for reporting)
x Fixed graphic glitches on menu showing with accelerated graphics (thanks
  Das for reporting)
x Fixed permission changes causing unrelated tabs to be reloaded when
  automatic permissions had been previously granted

v 2.0.8rc2
==========================================================================
x Fixed unhandled exception caused by LiveConnect interception logging (
  thanks al_9x for reporting)
x Optimized QueryInterface generation
+ [ABE] 6to4 IP addresses support
x Fixed LiveConnect interception firing a dummy JVM sometimes on Gecko 2.0

v 2.0.8rc1
==========================================================================
x LiveConnect interception time reduced by 10 on Firefox 3.6 and by 100 on
  Firefox 4 (about 1ms each)
x Restored LiveConnect interception logging (LOG_CONTENT_INTERCEPT mask)
x Fixed bug in fake redirections code, causing it not to honor the
  redirection limit settings (thanks Peter Eckersley)
x [XSS] Improved SQLXSSI detection accuracy
x Updated revsci surrogate (thanks al_9x)

v 2.0.7
==========================================================================
+ [XSS] Detection and filtering of hexadecimal and binary encoded
  reflected XSS through SQL injection (SQLXSSI), partially found and
  disclosed (raw hexadecimal variant only) by Aditya K Sood

v 2.0.6
==========================================================================
+ Bug fixes and improvements in LiveConnect interception
x Fixed random "win is null" error message (thanks timeless for report)

v 2.0.6rc4
==========================================================================
+ Java packages exposed by LiveConnect on the window object are made
  unaccessible wherever Java is blocked by embedding restrictions

v 2.0.6rc3
==========================================================================
x [ABE] Work-around for Flash video playback and other HTTP subrequests
  from plugins sometimes failing on latest Minefield builds

v 2.0.6rc2
==========================================================================
x [ABE] Fixed 2.0.6rc1 regression: broken internal redirections

v 2.0.6rc1
==========================================================================
+ "Security and privacy info" pages shown also by middle-clicking items
  in NoScript Options|Whitelist (thanks dhouwn for RFE)
x [XSS] Better compatibility with 4shared embedded movies
x [ABE] Fixed regression: Anon action interfering with IFrame blocking
  when DNS record for current request is cached (thanks al_9x for report)

v 2.0.5.1
==========================================================================
x Improved LoadGroup integration of the new internal redirection machinery
  for better loading progress feedback.

v 2.0.5
==========================================================================
x Fixed stability issue when forcing HTTPS on images

v 2.0.5rc3
==========================================================================
x Faster and more "correct" hack for internal redirections

v 2.0.5rc2
==========================================================================
x Experimental asynchronous channel replacement for ABE and HTTPS
  enforcement, should prevent issues with image caching
x Work-around for Google/Youtube bug, sending "Content-Type: text/plain"
  header for script files even with "X-Content-Type-Options: nosniff" (see
  http://forums.informaction.com/viewtopic.php?f=7&t=5304)

v 2.0.5rc1
==========================================================================
x Fixed automatic allowing for XMLHttpRequest of sites with explicit port
  numbers whose domain is allowed (thanks evanpelt for reporting)

v 2.0.4
==========================================================================
+ Better logging for the "X-Content-Type-Options: nosniff" activity
+ noscript.nosniff about:config preference to control whether enforcing
  "X-Content-Type-Options: nosniff" (true, default) or not (false)

v 2.0.4rc1
==========================================================================
+ "X-Content-Type-Options: nosniff" support
x Fixed using bookmarklets with noscript.allowBookmarkletImports set to
  false erronously adds current website to the JavaScript whitelist

v 2.0.3.5
==========================================================================
x [UI] Fixed right-click on the toolbar button switching permissions

v 2.0.3.4
==========================================================================
+ [UI] Bold "Recently blocked" menu and items which have been attempted to
  load from the currently displayed web site (thanks therube for RFE)
- Removed legacy (pre Fx 3) notification code

v 2.0.3.4rc2
==========================================================================
- [UI] Removed status icon hover effect
+ [Surrogate] adriver.ru surrogate to prevent "pages never finish loading"
  problem (thanks al_9x)
+ [ClearClick] Unlocked flag caching performance optimizations
+ AddressMatcher now matches UTF8 (not IDN-encoded) host names too
+ AddressMatcher now matches scheme only (xyz:) patterns
x Work-around for X-Frame-Option interfering with mixed chrome/content
  UIs (e.g. Firefox 4 add-ons manager)

v 2.0.3.4rc1
==========================================================================
x Fixed unchecking and re-checking the toggle permissions toolbar button
  behavior ending in an inconsistent status (thanks Grump Old Lady for
  reporting)
x [XSS] Improved Blogger CMS compatibility (thanks Logos for reporting)

v 2.0.3.3
==========================================================================
x Changed noscript.forbidIFramesContext about:config preference default to
  3 (same base domain) to ensure better usability on complex sites (e.g.
  new Twitter) for people who's blocking iframes on trusted sites
x Optimal sensitivity calibration for Hover UI trigger events

v 2.0.3.3rc3
==========================================================================
+ Improved Hover UI usability with the noscript.hoverUI.delayStop
  about:config preference, dictating how many milliseconds the mouse must
  stand still on NoScript's icon before NoScript's menu is displayed

v 2.0.3.3rc2
==========================================================================
+ [Surrogate] Surrogate scripts are no longer wrapped inside anonymous
  functions, in order to allow top-level variables to be forced read-only
  by using the const keyword; built-in surrogates have been retrofitted to
  prevent scope clashes, by adding anonymous function wrappers as needed

v 2.0.3.3rc1
==========================================================================
+ [UI] Configurable enter and exit delays for the hover UI behavior, via
  noscript.hoverUI.delay* about:config preferences
x [ClearClick] improved compatibility with very short frames (like the top
  bar on www.blogger.com, thanks craftcove for reporting)
x [Policy] Removed legacy code specializing TYPE_OTHER

v 2.0.3.2
==========================================================================
x Work-around for first script element in body of a framed document not
  being executed unless password manager is enabled on Minefield
x Work-around for surrogates not being executed in frames on Minefield

v 2.0.3.2rc1
==========================================================================
x Fixed further menu glitches with URL ports (thanks al_9x for reporting)

v 2.0.3.1
==========================================================================
x [UI] added 250ms delay for menu disappearing on mouse out from icon (
  disappearing mouse out from menu already used a 500ms delay)
x Fixed explicit port URL related regression (thanks al_9x for reporting)

v 2.0.3.1rc6
==========================================================================
x Fixed further breakages due to Array prototype chain glitches introduced
  in latest Minefield

v 2.0.3.1rc5
==========================================================================
x Fixed redirections broken by Array prototype chain glitches introduced
  in latest Minefield

v 2.0.3.1rc4
==========================================================================
x Work-arounds for some CAPS implementation impedance mismatches (thanks
  GµårÐïåñ and al_9x for reporting)

v 2.0.3.1rc3
==========================================================================
+ [UI] Extended the "open on hover" behavior to the toolbar button
x about:crashes added to the mandatory whitelist

v 2.0.3.1rc2
==========================================================================
x [Surrogate] Fixed window.open not working for HTTP sites on recent
  Minefield builds
x Fixed minor glitch in channel replacement on trunk

v 2.0.3.1rc1
==========================================================================
x [Surrogate] Restored the previous document.cookie patching order, since
  it seems more compatible with some buggy sites

v 2.0.3
==========================================================================
x [Surrogate] Improved compatibility of the popunder surrogate
x [Surrogate] Fixed broken meebo.com detached windows
x [L10n] Updated it-IT

v 2.0.3rc4
==========================================================================
+ [Pref] "NoScript Options|Appearance|Open permissions menu when mouse
  hovers over NoScript's icon" checkbox
x [UI] Minor refinements in the new "UI on hovering" behavior

v 2.0.3rc3
==========================================================================
x [XSS] Fixed "Unsafe reload" not working under some circumstances (thanks
  the JoshMeister for reporting)
+ [XSS] Better compatibility with Blogspot's CMS (thanks the JoshMeister
  for reporting)
x Fixed "setting a property that has only a getter" warning in strict mode
x Better compatibility with CDNs improperly serving JavaScript files with
  a CSS mime type

v 2.0.3rc2
==========================================================================
x Fixed "Partially allowed" message instead of "Forbidden" when everything
  is blocked, including some embeddings (thanks jan for reporting)
x Fixed "No placeholder from untrusted" broken since 2.0.2.4 (thanks al_9x
  for reporting)

v 2.0.3rc1
==========================================================================
+ [UI] Clickless "on over" opening of the status bar menu, can be disabled
  via noscript.hoverUI about:config preference (thanks safemode for RFE)
x Fixed embedded fonts requiring the page to be allowed, rather than the
  just the object, if embedded in data: URIs (thanks Alexander Konovalenko
  for reporting)

v 2.0.2.5
==========================================================================
x [XSS] Further FBML compatibility improvements

v 2.0.2.4
==========================================================================
+ [XSS] Improved Facebook games compatibility
x [ClearClick] Fixed ABP tabs interfering with cross-window snapshots
x [ClearClick] Fixed bug preventing clicks on frames embedded by URLs
  which have no host field
- Removed legacy code to handle ABP tabs on NoScript-blocked objects

v 2.0.2.4rc1
==========================================================================
x [HSTS] Fixed SSL certificate error pages not being patched (removing
  the expert interface) when a broken HSTS site is open first time (thaks
  Porkulus for reporting)

v 2.0.2.3
==========================================================================
x [XSS] Fixed optimization bug which may lead to slower checks on specific
  source patterns

v 2.0.2.2
==========================================================================
x [XSS] Huge InjectionChecker speed optimization, prevents most DOS false
  positives caused by checks timeout (thanks Sylvia Oberstein for report)

v 2.0.2.1
==========================================================================
x [Surrogate] Fixed fallback regression (thanks al_9x for report)

v 2.0.2
==========================================================================
x Further accessibility enhancements (thanks Jonathan Ely for report)

v 2.0.2rc10
==========================================================================
x Further accessibility enhancements (thanks Jonathan Ely for report)

v 2.0.2rc9
==========================================================================
x [Surrogate] Fixed scoping issue in debug mode
x [Surrogate] Adapted existing surrogates to new page-level execution
  method
x Further accessibility enhancements (thanks Jonathan Ely for report)

v 2.0.2rc8
==========================================================================
x Minor accessibility enhancements (thanks Jonathan Ely for report)

v 2.0.2rc7
==========================================================================
x [Surrogate] Enabled back surrogate execution on pages created with
  document.open(), identified by the pseudo-URL "wyciwyg:" for matching
  purposes
x [Surrogate] Surrogates sources can match any URL except those with
  scheme chrome, resource, about or view-source

v 2.0.2rc6
==========================================================================
x Fixed regression in SWFObject emulated support (thanks al_9x for report)
x [Surrogate] Disabled inconsistent surrogate execution on pages created
  with document.open()

v 2.0.2rc5
==========================================================================
+ [Surrogate] Removed execution dependency on early DOM manipulation
x [ABE] Fixed Anonymize action causing exceptions to be reported in console
  sometimes on Minefield
x [ClearClick] Work-around for uservoice.com false positive

v 2.0.2rc4
==========================================================================
x [XSS] Work-around for XSS by design in the Facebook API preventing some
   games from working properly
x [Surrogate] fixed surrogates interfering with forced NOSCRIPT element
  activation

v 2.0.2rc3
==========================================================================
+ [Surrogate] Improved page-level surrogate timing on Gecko version
  1.9.2.8 and above
x [Surrogate] Fixed in-frame page-level surrogates causing some sites to
  loose history navigation functionality
- [Surrogate] Dropped support for page-level in-frame surrogates on Gecko
  version 1.9.2.7 and below
x [XSS] Correctness enhancement in the ASP Unicode homograph work-around

v 2.0.2rc2
==========================================================================
+ [XSS] Work-around for questionable Unicode to ASCII homographic
  conversions performed by Microsoft's "Classic" ASP
x Tighter UI synchronization callbacks

v 2.0.2rc1
==========================================================================
x Tentative fix for UI sync regression reported by al_9x

v 2.0.1
==========================================================================
+ [ABE] noscript.abe.localExtras about:config preference can specify net
  resources (space separated IPs and/or subnets) to be considered as
  LOCAL by ABE, in addition to the "regular" private subnetworks and the
  auto-detected WAN IP (thanks ammdispose for suggestion)
x [ClearClick] Better compatibility with iframes containing very tiny
  pages (e.g. horizontal Flattr buttons)
x Fixed page-level surrogates not always being executed inside iframes
  (thanks al_9x for reporting)
x [XSS] Fixed XML tags with no attributes which are homonymous of
  "sensitive" HTML tags triggering XSS false positives

v 2.0.1rc4
==========================================================================
+ Forced NOSCRIPT element activation is not triggered for sources marked
  as untrusted (thanks al_9x for suggestion)
+ Update for Firefox 4.0b4pre compatibility (bug 546606)

v 2.0.1rc3
==========================================================================
x Improved interaction between surrogates and NOSCRIPT element activation
x Fixed potential recursion issue during DNS resolution on SeaMonkey trunk
  (thanks therube for reporting)
x Fixed https://bugzilla.mozilla.org/show_bug.cgi?id=584334
x Fixed using IPv6 URL syntax causes confusion to some proxies
x Compatibility checks updates

v 2.0.1rc2
==========================================================================
+ [ABE] "X-ABE-Fingerprint: Off" header can be sent by web servers which
  don't want/need to be fingerprinted by ABE's WAN IP protection
+ [ABE] User agent header "Mozilla/5.0 (ABE, http://noscript.net/abe/wan)"
  is sent to help administrators finding info about ABE's fingerprinting
x [ABE] Fingerprint checks are performed every 15 minutes, rather than 5
x Fixed early access to document.documentElement breaking XBL bindings
  on SeaMonkey trunk (thanks therube for reporting)

v 2.0.1rc1
==========================================================================
x Fixed meta redirections being broken sometimes when a NOSCRIPT element
  activation is forced on a JavaScript-enabled page (thanks Supermop for
  reporting)

v 2.0
==========================================================================
x [Surrogate] Fixed Google thumbs surrogate broken by recent Gecko changes
x [ClearClick] Work-around for client(Height|Width) miscalculation

v 2.0rc8
==========================================================================
+ Full hand-over to InjectionChecker for untrusted origin requests as well
+ More efficient UI synchronization system
x Fixed status icon not being correctly updated when a new script source
  gets added after page is loaded

v 2.0rc7
==========================================================================
+ More web-compatible NOSCRIPT element handling on mixed permissions pages

v 2.0rc6
==========================================================================
+ [ABE] WAN IP checks logged on Error Console (thanks al_9x for RFE)

v 2.0rc5
==========================================================================
+ [ABE] Experimental cross-zone CSRF protection for flawed routers which
  expose their WAN IP on their LAN interface (thanks al_9x for report)

v 2.0rc4
==========================================================================
+ Anti-anti-adblocker generic page-level surrogate
+ Minimal surrogates for several ad/tracking sources
+ Revsci surrogate (thanks al_9x)
x Work-around for medicare.gov "benign" XSS

v 2.0rc3
==========================================================================
x Fixed X-Frame-Options being checked for plugin embeddings as well
  (thanks Richard Johnson for reporting)

v 2.0rc2
==========================================================================
+ External filters now receive the object URL as their 4th argument

v 1.10
==========================================================================
+ ABE built-in ruleset editor
+ Button to reset ABE's defaults
x Fixed setting noscript.cp.last to false causing embeddings not to be
  blocked
x Fixed 2nd order InjectionChecker bypass (thanks Sirdarckcat for report)
+ External filters now receive the object referrer as their 3rd argument

v 1.9.9.99
==========================================================================
x Emergency fix for a page reload bug on Mac OS X causing high CPU
  consumption after permission changes (thanks "D A" for reporting)

v 1.9.9.98
==========================================================================
+ Improved ClearClick clipping accuracy on framesets
+ Improved ClearClick clipping accuracy on nested scrolling elements

v 1.9.9.98rc6
==========================================================================
x Fixed work-around for Mozilla's bug 576492 breaking NoScript on browser
  restart

v 1.9.9.98rc5
==========================================================================
+ Support for the latest Gecko 2 XPCOM changes
x Work-around for Mozilla's bug 576492

v 1.9.9.98rc4
==========================================================================
+ noscript.surrogates.debug preference enables console logging of uncaught
  exceptions happening in surrogates (thanks al_9x for suggestion)
x Better error handling in surrogates, prevents a failing scripts to abort
  the others
x Improved AMO surrogates, allows right-click menu to work on install
  buttons (thanks Mc for reporting)

v 1.9.9.98rc3
==========================================================================
x Fixed bug on edge case minimum placeholder size computation when object
  to be replaced is out of the current viewport
x Version compatibility bump for Firefox 4.0b2pre
x Fixed regression: untrusted icon not being shown when all the sources
  of a page are untrusted (thanks al_9x for reporting)

v 1.9.9.98rc2
==========================================================================
+ window.toStaticHTML implementation
x Improved placeholders for embeds nested in ActiveX OBJECT elements

v 1.9.9.98rc1
==========================================================================
+ Surrogate for Google Search thumbnails when Google is not whitelisted
+ Automatic reload on permission change setting now affects pages
  containing embeddings which change status too, whose reload can be also
  forced through the noscript.autoReload.embedders preference:
  0 - never reload
  1 - inherit the noscript.autoReload setting
  2 - force reload
+ Prevent reload on pages where a 3rd party script changed its
  permissions status but the top-level is forbidden and unchanged
+ Surrogate to use InstallTrigger on AMO even if addons.mozilla.org is not
  whitelisted

v 1.9.9.97
==========================================================================
x Fixed ClearClick false positives on Fx 3.5 and below (thanks Deniz Sofu
  for reporting)
x Compatibility version bump for Seamokey trunk

v 1.9.9.97rc1
==========================================================================
x Fixed '@' surrogates being ran on scriptless pages
x Recentering on the parent form for ClearClick checks over a form widget
  reduces false positives over obstructed frames

v 1.9.9.96
==========================================================================
x Fixed Script Surrogates activation glitches

v 1.9.9.95
==========================================================================
x Fixed wrongly sized placeholders on Youtube (regression from rc1)

v 1.9.9.95rc2
==========================================================================
x More accurated feedback on nested object blocking (thanks al_9x for
  reporting)
+ External filters command line template updated with request origin as
  the 3rd argument

v 1.9.9.95rc1
==========================================================================
+ imagebam surrogate kills popups over images and popunders on click
+ imagehaven surrogate kills popups over images and popunders on click
+ inserstitialBox surrogate kills interstital on imagevenue.com
+ "!@" prefixed surrogates run no matter whether scripts are enabled or
  disabled for the page (in a DOMContentLoaded event handler)
x Fixed JS redirect handling causing duplicate object placeholders on
  scriptless pages containing embeddings only
x Fixed ABE's SELF checks fail on redirects which contain a browser URL

v 1.9.9.94
==========================================================================
x Fixed bookmarklets support on non-whitelisted pages broken in non-Places
  browsers like SeaMonkey (thanks therube for reporting)
X Better icon feedback on page where there's no script element but some
  plugin content has been blocked

v 1.9.9.93
==========================================================================
x Fixed ClearClick false positives when RTL content or browser settings
  put the vertical scrollbar on the left (thanks Mark Callow for report)
x Fixed setting noscript.checkInjectionType to false did not disable the
  feature (thanks al_9x for report)
x More accurate embedded object replacement (thanks al_9x for report)

v 1.9.9.92
==========================================================================
x Fixed Places-related bug on Minefield (thanks mpz for reporting)
x noscript.forbidIFrameContext=3 (allow same base domain) falls back to 2
  (allow same domain) if either the parent or the frame is marked as
  untrusted (thanks al_9x for suggestion)

v 1.9.9.91
==========================================================================
x More compatible docShell reaching, works around some buggy extensions
  which wrap browser.webNavigation just partially
x InjectionChecker's XML reduction more compatible with SAML

v 1.9.9.90
==========================================================================
+ Optimal timing for page-level surrogates in frames
x ClearClick exceptions are considered independently from the JavaScript
  whitelist as they should
x More consistent web bugs blocking with forced NOSCRIPT elements, take 2
  (thanks al_9x for reporting)

v 1.9.9.89
==========================================================================
x More consistent web bugs blocking with forced NOSCRIPT elements, take 2
  (thanks al_9x for reporting)
x More consistent icon feedback with docShell-based cascading JS blocking
  (thanks al_9x for reporting)

v 1.9.9.88
==========================================================================
x Inclusion type checks try to infer file type from directory-like URLs
x More consistent web bugs blocking with forced NOSCRIPT elements
x Fixed object placeholder regressions in Gecko < 1.9 (thanks Rob for
  reporting)
x Version compatibility bump to Firefox 3.7a6pre

v 1.9.9.87
==========================================================================
x Improved URL parsing in META refresh interception
x Optimized * universal pattern in AddressMatcher
x Better error reporting during the execution of location bar scriptlets

v 1.9.9.86
==========================================================================
+ Better timing for page-level script surrogates inside frames
+ mime/type@http://site.com syntax support for noscript.allowedMimeRegExp
  preference (thanks Gregyski for request)
+ Improved XSS checks accuracy (less false positives) and performance
+ Enhanced management of recent Silverlight versions (thanks al_9x for
  reporting)

v 1.9.9.85
==========================================================================
+ More accurate checks for META inside NOSCRIPT with HTML 5 parser
x Fixed possible DOS condition on some kinds of very long URLs

v 1.9.9.84
==========================================================================
x Improved hheuristic for background refresh automatic blocking and
  reenablement
x Fixed regressed "Follow" button on META refresh inside NOSCRIPT element

v 1.9.9.83
==========================================================================
x Fixed some sites refreshing themselves even if another load has been
  initiated (thanks Dirk S for reporting)

v 1.9.9.82
==========================================================================
+ More discreet and automated anti-tabnapping protection (refreshes are
  blocked on unfocused tabs and get automatically executed only when
  tab gets in focus again)
+ Slight optimization of AddressMatcher tests on .site.com clauses
x Fixed noscript.forbidBGRefresh.exceptions not being honored
x Better handling of error conditions happening during ABE's channel
  replacement internal redirections (thanks al_9x for reporting)
x Fixed minor feedback icon glitches (thanks al_9x for reporting)

v 1.9.9.81
==========================================================================
+ Experimental blocking of page refreshes happening inside untrusted
  unfocused tabs, should provide protection against Aviv Raff's scriptless
  "tabnapping" variant. Enabled by default, can be controlled through the
  noscript.forbidBGRefresh about:config integer preference:
  0 - no blocking
  1 - block refreshes on untrusted unfocused tabs
  2 - block refreshes on trusted unfocused tabs
  3 - block refreshes on both trusted and untrusted unfocused tab
  Address patterns matching pages which shouldn't be affected can be
  listed in the noscript.forbidBGRefresh.exceptions preference
x Fixed XSS false positive in new 3.7 add-ons manager
x Fixed meta-refresh URL parsing mismatch
x Fixed import script surrogates being broken by a 1.9.9.79 regression

v 1.9.9.80
==========================================================================
x Fixed "Partially allowed scripts" icon shown instead of the "Scripts
  allowed but some objects blocked" one when the blocked objects' domains
  are not whitelisted for scripting (thanks al_9x for reporting)
x Fixed "Scripts allowed but some objects blocked" icon not being used for
  blocked web fonts (thanks Alan Baxter for reporting)
x (ABE) Deny on INCLUSION don't trigger a notification even if the blocked
  request is for a subdocument (the blocking is logged in the Console, use
  SUB if user-facing notification is needed)
x Fixed privileged XMLHttpRequests for untrusted resources being blocked
  if HTTP redirections occurred (thanks mari for reporting)
+ Better compatibility with IronPort web-based tools (thanks Ron Collins
  for reporting)

v 1.9.9.79
==========================================================================
x Script surrogates whose source starts with the '!' get executed on
  pages where scripts are disabled (on document DOM completion, rather
  than before HTML parsing starts like regular surrogates)

v 1.9.9.78
==========================================================================
x Redirect cache for scripts and XBL only
x Fixed cross-site CSS being blocked under some circumstances (e.g.
  on Flicker and Yahoo)

v 1.9.9.77
==========================================================================
+ ABE INCLUSION(type1, type2, type3...) pseudo-method allows rules to take
  request type (e.g. SCRIPT vs CSS) in account
+ ABE SELF+ (same domain) and SELF++ (same base domain) pseudo-origins
x Fixed iconic feedback inconsistencies when untrusted blocked objects
  are mixed with full-trusted content (tanks al_9x for reporting)
x Fixed Injection Checker false positives on some kinds of complex nested
  URLs (thanks Sirdarckcat for reporting)
x Tweaked ClearClick for Disqus compatibility (thanks John for reporting)

v 1.9.9.76
==========================================================================
x Fixed broken menu on Minefield when External Filters are enabled (thanks
  linuser for reporting)
x Fixed about: URL not being shown in NoScript menu (thanks al_9x for
  reporting)
x Removed minor strict warnings on Minefield

v 1.9.9.75
==========================================================================
x Redirected site caching now skips plugin content
x Removed __parent__ usages for Minefield compatibility
x Removed some strict warnings (thanks timeless for reporting)

v 1.9.9.74
==========================================================================
x Fixed false positive issue with empty cross-site POST requests (thanks
  Bahamut for reporting)

v 1.9.9.73
==========================================================================
x Fixed potential double-firing command issue on Firefox Mobile
+ Added about:addons and about:home to the mandatory whitelist
+ Improved responsivity and usability on Firefox Mobile

v 1.9.9.72
==========================================================================
x Fixed configuration import/export/synchronization bug introduced by
  "configuration presets" for Firefox Mobile
+ Finger-friendlier UI on Firefox Mobile

v 1.9.9.71
==========================================================================
+ Added "Allowed with untrusted sources and blocked objects" icon
x Fixed minor inconsistencies in new partial allowance feedback icons
  (thanks al_9x for reporting)

v 1.9.9.70
==========================================================================
+ Compatibility and better integration with latest Firefox Mobile (Fennec)
+ Experimental external filters for plugin content (e.g. Blitzableiter for
  Adobe Flash), see NoScript Options|Advanced|External Filters (Fx >=3.5)
+ New specific partial status icon for pages where all scripts are allowed
  but some objects are blocked (thanks al_9x for RFE)
+ "about:blank" won't be shown as a secondary source in NoScript's UI. Old
  behavior can be restored by setting the noscript.showBlankSources
  preference to true (thanks al_9x for RFE)
+ googleapis.com in the default whitelist
x Fixed 2nd order indirect InjectionChecker bypass (thanks Sirdarckcat for
  reporting)
x Fixed a Mac OS X specific InjectionChecker decoding issue (thanks
  Colling Jackson for reporting)

v 1.9.9.69
==========================================================================
x Further compatibility improvements in complex bookmarklets handling

v 1.9.9.68
==========================================================================
x Better asynchronous bookmarklets handling, should not crash on
  Readability anymore
x Ultimate (maybe!) fix for trunk bug 556739 breakage

v 1.9.9.67
==========================================================================
x Better fix for trunk bug 556739 breakage

v 1.9.9.66
==========================================================================
x Further embed-only sites in menu fixes (thanks al_9x for reporting)

v 1.9.9.65
==========================================================================
x Fixed bookmarklet support broken on trunk by bug 556739 (thanks dhouwn
  for reporting)
x Fixed embed-only sites shown in main menu again (thanks al_9x for
  reporting)

v 1.9.9.64
==========================================================================
x Better untrusted menu behavior on embedding only sources (thanks al_9x
  for reporting)
x Improved InjectionChecker compatibility with OpenID and other complex
  requests (thanks Jamie Cox for reporting)
x Fixed accurate Base64 injection checks breaking some encrypted Paypal
  buttons

v 1.9.9.63
==========================================================================
x Removed ":0" wildcards from NoScript menu in ignorePorts=false mode to
  prevent confusing behaviors (thanks al_9x for suggestion)
+ Embedding-only sites are shown in the Untrusted menu if placeholders are
  set to be hidden for untrusted embeddings (thanks al_9x for suggestion)

v 1.9.9.62
==========================================================================
x Improved XSS filter sensitivity for Base64-encoded payloads (thanks
  Stefano Di Paola for suggestion)
x Improved Facebook connect compatibility (thanks Peter Alexander for
  reporting)
x Removed __count__ usage in DNS cache management (SpiderMonkey compat)
x Fixed "Attempt to fix Javascript links" not working when the javascript:
  scheme is mixed-case (thanks al_9x for reporting)

v 1.9.9.61
==========================================================================
x Fixed InjectionChecker infinite recursion bug on certain requests
 (thanks dhouwn for reporting)
x Fixed plugin activation patches not being applied under some
  circumnstances

v 1.9.9.60
==========================================================================
+ Pluggable site info page (default http://noscript.net/info/%utf8%;%ace%)
  can be opened by middle-click or shift+click on any site entry in
  NoScript's menus, and can be configured by editing the
  noscript.siteInfoProvider about:config preference
+ More user-friendly management of non-standard TCP ports
x Fixed release notes page might break session restore sometimes
x Locale files maintenance
+ Object sources won't appear in main menu when embedding restrictions
  apply to whitelist; previous behavior can be restored by setting the
  noscript.alwaysShowObjectSources to false (thanks al_9x for RFE)

v 1.9.9.59
==========================================================================
x Better management of cached requests
x Fixed allowing objects from "Blocked objects" reloading only the first
  of each URL/mime pair group (thanks al_9x for reporting)
x Improved Facebook widgets compatibility (thanks Peter Alexander and
  Chuck Mullen for reporting)
x Fixed "Allow scripts globally" setting being ignored by the bulk
  configuration import feature (thanks Mike Perry for reporting)
x Fixed "Mark as untrusted" menu items being shown in "Allow scripts
  globally" mode even if both "Untusted" and "Mark as untrusted" are
  unchecked in the Appearace options tab (thanks Mike Perry for reporting)
x Improved bookmarklets support
x Minor bug fixes in jolly port matching
x Improved Anti-Popunder surrogate (thanks justaguest for reporting)

v 1.9.9.58
==========================================================================
x Fixed HTMLObjectElement plugin content being blocked by X-Frame-Options
  checks (thanks Titioz for reporting)
x Fixed https://bugzilla.mozilla.org/show_bug.cgi?id=553901

v 1.9.9.57
==========================================================================
x Fixed feed subscription broken on sites implementing X-Frame-Policy
  (regression from 1.9.9.56, thanks al_9x for reporting)
x Included js.wlxrs.com in default whitelist in order to make Hotmail
  login work out-of-the-box for new users

v 1.9.9.56
==========================================================================
+ More reload-friendly and permission-friendly X-Frame-Policy error page
x Fixed bug in method surrogation for replaced/blocked plugin objects (
  thanks al_9x for reporting)

v 1.9.9.55
==========================================================================
+ Method surrogation for replaced and blocked plugin objects (thanks al_9x
  for suggestion)
x Regression fix: documents loaded in object elements not being checked
  for X-Frame-Policy anymore (thanks Alex Rodionov for report)
x Performance and accuracy improvements in plugin placeholder handling

v 1.9.9.54
==========================================================================
x Improved Flash version detection emulation (thanks al_9x for reporting)

v 1.9.9.53
==========================================================================
+ Remote whitelist and blacklist subscription, controlled by the noscript.
  subscription.trustedURL and noscript.subscription.untrustedURL
  about:config preference
x Fixed: lists export feature shouldn't include temporary and mandatory
  entries

v 1.9.9.52
==========================================================================
x Version bump for latest trunk apps compatibility

v 1.9.9.51
==========================================================================
+ Better bookmarklet imports management, more compatible with not cached
  3rd party scripts
x Fixed manually allowing a domain should always imply addresses with
  ports if noscript.ignorePorts is true (thanks al_9x for noticing)

v 1.9.9.50
==========================================================================
+ Updated ABE grammar to use new AddressMatcher syntactic sugar
+ Alert about ABE syntax errors when option dialog gets focused after a
  ruleset editing (thanks al_9x for suggestion)

v 1.9.9.49
==========================================================================
+ .x.y AddressMatcher syntactic sugar, matching both x.y and *.x.y (thanks
  al_9x for suggestion)
+ InjectionChecker speed and accuracy improvements
x Fixed top-level site not being correctly positioned and highlighted in
  permissions menu sometimes (thanks nagan for report)
x Fixed post-XSS "Unsafe reload" not working properly sometimes

v 1.9.9.48
==========================================================================
x Fixed a second level InjectionChecker bypass, requiring an open redirect
  which accepts and uses unfiltered data: URIs. Responsible disclosure by
  the SecuriTeam Secure Disclosure (SSD) project
x Fixed reload on permission change being triggered on the nearest 10 tabs
  only
x Fixed permanent address entry being added to the whitelist if domain is
  already allowed upon bookmarklet execution (thanks Bobabo for report)
x Better UI behavior for URLs with non-standard ports (thanks al_9x for
  report)
x Updated nb-NO localization

v 1.9.9.47
==========================================================================
x Fixed XSS checks skipped on some reloads (thanks Alejandro Rusell for
  report)
x Improved content placeholder management
x Mobile version bump

v 1.9.9.46
==========================================================================
x Fixed uneeded tab reload issue related to untrusted subdomains (thanks
  al_9x for reporting)
x Optimized reload checks for the "hundreds of tabs" case, in order to
  prevent UI locking
x Improved XSS checks on file uploads, should not hang even on gigabytes
x Trunk compatibility version bump

v 1.9.9.45
==========================================================================
x Enhanced compatibility with Paypal encrypted buttons
x Fixed some anti-popunder surrogate incompatibilities

v 1.9.9.44
==========================================================================
x Fixed allowing a Flash object causing a page reload sometimes (thanks
  al_9x for reporting)
x Script Surrogate to work around Facebook's "noscript" cookie
x Fixed minor incompatibilities caused by the anti-popunder surrogate

v 1.9.9.43
==========================================================================
x Fixed broken popup issue on some sites (thanks John for reporting)
x Fixed ghost sites in context menus on about:blank after a complex
  frame structure with redirects has been shown in the same tab (thanks
  simpleton for reporting)
x Fixed XSS false positive on certain nested URL patterns (thanks
  NoRelationToNed for reporting)

v 1.9.9.42
==========================================================================
+ ClearClick: more efficient code paths specific to Fx 3.6 and above
x Fixed zoom-related ClearClick false positives on Fx 3.6 and above
x Fixed fonts being reported as "unknown" type in Blocked Objects menu

v 1.9.9.41
==========================================================================
+ Fix for newline-based double-reflection InjectionChecker bypass (thanks
  Sirdarckcat for reporting)
x Surrogate scripts from local files: surrogate's replacement is treated
  as a file:// URL and resolved against current browser profile if it
  starts with "file://", "./" or "../" (thanks Richard Stallman, Johan
  Euphrosine and Sam Imtiaz)

v 1.9.9.40
==========================================================================
x Improved bookmarklet compatibility

v 1.9.9.39
==========================================================================
x Fixed quirks mode triggered by surrogate execution on Gecko < 1.9.1
  (thanks Power for suggestions)

v 1.9.9.38
==========================================================================
x Fix for some popups broken by 1.9.9.37

v 1.9.9.37
==========================================================================
x Fixed potential infinite loop occurring when window.open is called in a
  recursive context, e.g. on Google Reader (thanks Qbert for reporting)
x Fixed mishandling of non-default 1 value for the proxiedDNS preference

v 1.9.9.36
==========================================================================
+ Anti-Popunder surrogate now applies to all HTTP pages by default
+ DNS activity logging facility (disabled by default)
x Slight optimization of DNS lookups
x Temptative fix for https://bugzilla.mozilla.org/show_bug.cgi?id=501446
  crasher (thanks timeless)

v 1.9.9.35
==========================================================================
x Updated Firefox Mobile (Fennec) compatibility
x Improved and generalized Anti-Popunder surrogate

v 1.9.9.34
==========================================================================
+ Anti-Popunder surrogate extended to AWEmpire popunders (on empornium.us
  by default, customizable in noscript.surrogates.popunder.sources)
x Fixed bug in bookmarklet support on about:blank (thanks Milind for
  reporting)
x Improved InjectionChecker compatibility with letitbit.net uploads
x Improved InjectionChecker compatibility with Rapidshare uploads

v 1.9.9.33
==========================================================================
x Better HTTPS/HTTP redirection support (thanks ttt for reporting)

v 1.9.9.32
==========================================================================
+ Further InjectionChecker optimizations, providing a dramatic speed boost
  on nested URLs (e.g. on iGoogle and many ad networks)

v 1.9.9.31
==========================================================================
+ InjectionChecker accuracy optimization, preventing false positives in
  some edge cases with nested URLs (thanks Aditya K Sood for reporting)

v 1.9.9.30
==========================================================================
+ Injection Checker compatibility with Livejournal comment posting
+ Improved ClearClick compatibility with Facebook applications

v 1.9.9.29
==========================================================================
x Temptative work-around for hard to reproduce content policy DOS false
  positive on comcast.net (thanks Jim Too and Alan Baxter for reporting)

v 1.9.9.28
==========================================================================
x Work-around for a Flash player double-instantiation bug in Gecko 1.9.0
  preventing some movies from playing (thanks secdroid for reporting)
- Removed placeholder enhancements for Gecko 1.8.x, due to unwanted side
  effects on some sites

v 1.9.9.27
==========================================================================
x Placeholder enhancements backported to Gecko 1.8.x
x Fixed missing placeholders on Gecko 1.8.x (thanks al_9x for reporting)

v 1.9.9.26
==========================================================================
x Reduced reflow chances on placeholder activation
x Improved InjectionChecker compatibility with Facebook Connect

v 1.9.9.25
==========================================================================
x Fixed Flash swallowed clicks regression on Gecko 1.8.x (thanks al_9x for
  reporting)

v 1.9.9.24
==========================================================================
x Fixed "Temporarily allow" regression

v 1.9.9.23
==========================================================================
+ Specific scriptless partial permissions icon for partially allowed
  framesets (thanks al_9x for reporting)
x Reduced disk activity on permission change (thanks al_9x for RFE)
x Work-around for a Java initialization failure

v 1.9.9.22
==========================================================================
x Fixed "no partial icon when frameset and frame are scriptless" issue
  (thanks al_9x for reporting)

v 1.9.9.21
==========================================================================
x Better bounding checks for Gecko 1.9.2-compatible ClearClick
x Fixed residual bfcache-related issues (thanks al_9x for reporting)

v 1.9.9.20
==========================================================================
+ ClearClick made compatible with Gecko 1.9.2
+ ClearClick optimization for plugin content
+ Improved opacity management in ClearClick
+ Added ability for page-level script surrogates to run before page load
  even on untrusted sites
+ New "imdb" script surrogate to watch IMDB trailers without allowing
  doubleclick.com (thanks SeanM and Tom T for suggestion)
+ Improved Google Analytics surrogate
+ Turned the "fap" surrogate into a generic "popunder" one
x Fixed blocked embeddings info being wiped during bfcache lifecycle
  (thanks al_9x for reporting)

v 1.9.9.19
==========================================================================
+ Optimized matching for HTML 5 event handlers injection
+ "Allow sites opened through bookmarks" won't allow sites previously
  marked as untrusted
x Turned the noscript.canonicalFQDN to false by default
x Improved embedded objects identity checks upon reloads

v 1.9.9.18
==========================================================================
x Removed residual compound attribute-based injection chance (thanks
  Sirdarckcat for reporting)

v 1.9.9.17
==========================================================================
x Fixed residual crash issue when favicons need to be redirected to HTTPS
x Enhanced ClearClick compatibility with Photbucket

v 1.9.9.16
==========================================================================
+ Better object unblocking behavior, triggering a page reload if allowed
  object has no layout (i.e. was meant to be scripted only), increasing
  usability of trusted restrictions e.g. in VMWare Server's console
x Work-around for a Firefox image caching crashing bug triggered by HTTPS
  enforcement on mixed content
x Improved compatibility with Ebay (thanks STB2008 for reporting)

v 1.9.9.15
==========================================================================
x Fixed HTTPS enforcement for embedded images breaking HTTP authentication
  (thanks polie for report)
x Fixed XHR breakage when called from a Worker (thanks Apeiron for report)
x Skip link fixing on right click
x Improved bookmarklet execution mechanism
x Improved compatibility of InjectionChecker with Facebook Connect
x Improved compatibility of InjectionChecker with Lycos Mail

v 1.9.9.14
==========================================================================
x Fixed page loading issues (hard to reproduce but reported by many)

v 1.9.9.13
==========================================================================
x Fixed page loading regression from "Hijack checks skip error pages"
  optimization in 1.9.9.12 (hard to reproduce but reported by many)
x Fixed attribution of Romanian translation

v 1.9.9.12
==========================================================================
+ Allowing a plugin object which size is not set causes a page reload,
  assuming that scripts would be used to size it
+ Google Translate XSS exception
+ abine:* ClearClick subexception
+ Updated localizations
x Removed current URL leaking into RegExp properties if invisible link
  detection is enabled
x Hijack checks must skip error pages (thanks luntrus for report)
x Fixed XSS false positive at travelocity.com (thanks Chris Lonsberry)

v 1.9.9.11
==========================================================================
+ Reorganization of the "Embeddings" (FKA "Plugins") options panel
+ "Forbid <VIDEO> / <AUDIO>" option in the "Embeddings" panel
+ "Forbid @font-face" option in the "Embeddings" panel
+ ClearClick report id made selectable (thanks therube for RFE)

v 1.9.9.10
==========================================================================
+ Webfonts blocking from untrusted sources and on untrusted pages,
  controlled by the noscript.forbidFonts about:config preference (UI
  planned for later, thanks Mike Perry for RFE)
+ noscript.forbidMedia about:config preference controlling HTML 5 media
  blocking independently from the "Forbid other plugins" setting (UI
  planned for later)
+ Improved live object allowing/forbidding
x Fixed potential false positives generated by Spidermonkey's decompiler
  artifacts

v 1.9.9.09
==========================================================================
x Fixed noscript.forbidData not being honored (thanks Chris for report)
x Fixed Trillian to Yahoo Mail! XSS false positive (thanks maryadavies and
  Thomas for reports)

v 1.9.9.08
==========================================================================
x Fixed potential cache issues due by header cloning on internal redirects
  (thanks GregThomas for report)

v 1.9.9.07
==========================================================================
+ Improved Google Analytics surrogate, handling form submissions (thanks
  Alan Baxter for report)

v 1.9.9.06
==========================================================================
+ Added https://mail.google.com/* to X-Frame-Options parent whitelist, in
  order to allow GMail/Calendar mashups via extensions and GreaseMonkey
x Fixed noscript.forbidIFrameContext set to 0 blocking top-level web pages
  loading (thanks Aerik for report)
x Fixed Yahoo! Mail login persistence issue (thanks Ronnie for report)

v 1.9.9.05
==========================================================================
+ Improved emulation of complex bookmarklet import sequences
x Fixed potential issue in new InjectionChecker C++ style comments code

v 1.9.9.04
==========================================================================
x Fixed header cloning bug in internal redirections
x Better management of C++ style comments in InjectionChecker
x Fixed legacy frames retargeting bug (thanks Andrew Fisher for reporting)

v 1.9.9.03
==========================================================================
+ noscript.frameOptions.enabled about:config preference to control if the
  X-Frame-Options header must be honored
x noscript.frameOptions.parentWhitelist preference to exclude some parent
  window from X-Frame-Options checks on their embedded frames
x Enhanced internal redirection mechanism
x Fixed Weave 0.7pre log window incompatibility

v 1.9.9.02
==========================================================================
x Improved InjectionChecker's hheuristic (thanks Sirdarckcat for reporting)

v 1.9.9.01
==========================================================================
x Fixed InjectionChecker micro-injection scanning bug (thanks Sirdarckcat
  for reporting)

v 1.9.9 (FKA 1.9.8.9)
==========================================================================
+ First public Strict Transport Security implementation, see
  http://hackademix.net/2009/09/23/strict-transport-security-in-noscript/
x Fixed Javascript disabled in about:neterror pages if the broken
  destination page is marked as untrusted (thanks al_9x for report)
x Improved HTTPS enforcement, honoring original referer
x Fixed a potential "unresponsive script" InjectionChecker condition
  (thanks Sirdarckcat for reporting)
x Fixed help links not opening from NoScript's UI on Minefield
x Fixed ABE LOCAL symbol matching 172.16.0.0/16 rather than the
  whole 172.16.0.0/12 (thanks Antal for reporting)

v 1.9.8.89
==========================================================================
x InjectionChecker optimization on long Base64 sequences (thanks skl
  for report)

v 1.9.8.88
==========================================================================
x X-Frame-Options applied only to ultimate load, after redirection
  (compatibility with IE8's and Chrome's implementation)
x Fixed Flash activation bug on Gecko <= 1.9

v 1.9.8.87
==========================================================================
+ Quantserve surrogate script
x Added en-GB locale to legacy Seamonkey install script

v 1.9.8.86
==========================================================================
x Fixed kongregate.com incompatibility (thanks jthill for report)

v 1.9.8.85
==========================================================================
+ Updated MK locale
x QA for release

v 1.9.8.84
==========================================================================
x Flash object emulation to fool SWFObject 2.2 version detection
  without instantiating a real Flash object (thanks al_9x for test)

v 1.9.8.83
==========================================================================
x Fixed bug in the new Flash early instantiation management (thanks
  al_9x for reporting)

v 1.9.8.82
==========================================================================
x Upper limit to bookmarklet setTimeout() emulation, in order to
  prevent infinite pseudo-loops
x Improved InjectionChecker algorithms (thanks Sirdarckcat for
  suggestions)
x Early URL-less Flash objects are instantiated only if Flash
  permissions have been already granted to the origin site

v 1.9.8.81
==========================================================================
x Fixed issue with early manipulation of Flash objects whose source
  URL has not been set yet (thanks al_9x for reporting and Grump
  Old Lady for proxy/VPN testing infrastructure)

v 1.9.8.8
==========================================================================
x Improved bookmarklet setTimeout() emulation (delay ordering is
  honored and pseudo-recursion is supported)
x Update locales

v 1.9.8.72
==========================================================================
x Moved the NoScript status label to the left of the status icon,
  in order to avoid "jumps" when using the sticky menu (thanks nagan
  and frsch for suggestions)
x Improved management of HTTPS forcing during HTTP redirections
x Fixed incompatibility with Minefield/3.7a1pre build 20090827
  (thanks Itsnow for reporting)

v 1.9.8.71
==========================================================================
+ "Recently blocked sites" now shows the object icon for trusted
  sites which are listed because some content has ben blocked
x Fixed sites shown in "Recently blocked sites" if content-blocking
  restrictions are applied even when no content has been blocked yet
  (thanks Alan Baxter for reporting)

v 1.9.8.7
==========================================================================
x Fixed minor bugs in "Recent blocked sites" implementation
x Updated Rumenian
x Fixed encoding issue with configuration import/export/sync (thanks
  m_c for reporting)

v 1.9.8.61
==========================================================================
+ Optimization of multiple regexp preferences
x Fixed XSS filter exceptions not being honored if URL contains
  percent-encoded character which are invalid UTF-8 code points
  (thanks Bueller007 for reporting)
x Fixed UTF8 overdecoding checks interfering with some Japanese sites
  (thanks Bueller007 for reporting)

v 1.9.8.6
==========================================================================
+ Reset command in "Recently blocked sites" menu (thanks Fred for
  suggestion)
+ For privacy reasons "Recently blocked sites" are erased everytime
  user purges history
+ Temporary permissions are revoked and "Recently blocked sites" are
  erased everytime user exits the "Private Browsing" mode
x Fixed DNS-sensitive frame blocking bug

v 1.9.8.5
==========================================================================
+ New "Recently blocked sites" menu to allow active content origins
  which have been recently blocked but are unrelated with current
  page (e.g. loaded in custom frames provided by extensions)
x Fixed some glitch in temporary permissions handling (thanks
  computerfreaker for reporting)
x Simplified bookmarklet permissions granting
x Simplified ABERequest lifecycle management
x Prevented potential memory leak

v 1.9.8.4
==========================================================================
x Fixed ABE internal redirection on DNS cache miss interfering with
  injection checks under some circumstances

v 1.9.8.3
==========================================================================
+ Full HTML 5 event attributes InjectionChecker support
x Fixed DNS resolution notification causing event loop spinning and
  perceived slowness of "Open all in tabs" command
x Removed InjectionChecker bypass (thanks Sirdarckcat for reporting)
+ Updated locales

v 1.9.8.2
==========================================================================
x Improved protection against DOS attacks (thanks Gereth Heyes for
  testbed)

v 1.9.8.1
==========================================================================
x Fixed Mac OS X specific hang bug triggered by STATUS_RESOLVING DNS
  notifications for some sub-requests

v 1.9.8
==========================================================================
+ ABE's caching DNS requests now send STATUS_RESOLVING notifications
  (thanks al_9x for RFE)
x Improved injection checks (thanks Sirdarckcat for reporting)
x Fixed invalid chars in host names causing loads to fail without any
  visible error feedback
x Work around for breakages caused by the .NET Framework Assistant,
  http://adblockplus.org/blog/the-return-of-net-framework-assistant
+ ABE grammar source (ABE.g) included in the distributed XPI (thanks
  al_9x for noticing its absence)

v 1.9.7.9
==========================================================================
x Improved XSS filter compatibility with some decimal coordinates
  patterns
x Fixed JavaScript IFrame manipulation causes documents to be loaded
  in a new window sometimes (thanks Derek Greentree for reporting)

v 1.9.7.86
==========================================================================
x Improved XSS filter compatibility with MySpace modules (thanks
  Dixie for reporting)

v 1.9.7.85
==========================================================================
x Improved permission change speed for very long lists / very slow
  CPUs (thanks Boyd Noorda for reporting)

v 1.9.7.84
==========================================================================
x Fixed HTTPS-forced subrequests being cancelled sometimes

v 1.9.7.83
==========================================================================
x Fixed plugin content could not be navigated through legacy frames

v 1.9.7.82
==========================================================================
x Fixed URL classifier not being called for hosts whose DNS record is
  not cached yet by ABE (thanks "Fellow Noscripter" for reporting)

v 1.9.7.81
==========================================================================
x Fixed domain name resolution delayed for cached failed responses
  after a network reconnection (thanks foxicat for reporting)

v 1.9.7.8
==========================================================================
x Fixed invisible links detection turning some links into absolutely
  positioned if they have no layout on load (thanks dpmccabe for
  reporting)
x Improved specificity of data: URL injection detection (thanks Tom
  for reporting)

v 1.9.7.7
==========================================================================
x Fixed DNS cache status interfering with HTTPS redirections

v 1.9.7.6
==========================================================================
+ Fixed HTTPS-bound active content restrictions preferences not being
  honored sometimes (thanks Peter Meier for reporting)

v 1.9.7.5
==========================================================================
+ HTML 5 video and audio are blocked also when loaded as documents
  in a frame or in a top-level window

v 1.9.7.4
==========================================================================
x Decoupled legacy frame blocking from "Forbid IFrames" (thanks
  Grumpy Old Lady for reporting)

v 1.9.7.3
==========================================================================
x Fixed IFrame blocking being delayed to DNS resolution when ABE is
  active (thanks Mike A. for reporting)
x Fixed Frame blocking leading to extra history entries on unblocking

v 1.9.7.2
==========================================================================
x Content serviced with the "Content-disposition: attachment" header
  (forced downloads) should not be subject to plugin blocking
  policies (thanks nagan for reporting)
x ABE checks should be skipped for XHR requests made from chrome

v 1.9.7.1
==========================================================================
x Inclusion type checks accomodating hosting errors in AOL gadgets,
  outbrain.com widgets and E-junkie libraries
x Fixed es-CL locale metadata

v 1.9.7
==========================================================================
x 1.9.6.96 RC repackaged for release

v 1.9.6.96
==========================================================================
x Fixed "Send to" context menu item broken Google Toolbar 5 (thanks
  Juan Ignacio Gaviria for reporting)
x Fixed cache issues in non-ABE blocking context on Gecko < 1.9
  caused by alternate blocking method for ABE "Deny" action  (thanks
  al_9x and Tom T for reporting)

v 1.9.6.95
==========================================================================
+ Signed XPI
x Fixed JS redirect detection overzelous on pages containing CSS
  content-less links (thanks zaxy for reporting)
x Fixed issue with plugin content activation (thanks Mel Reyes for
  reporting)

v 1.9.6.94
==========================================================================
x More informative error messages on failed XSS filter DOS attempt

v 1.9.6.93
==========================================================================
x Inclusion type checks play smoother on script dynamically served
  with a wrong Content-type header
x Fixed temporarily allowing a class of objects from the Blocked
  Objects menu not working sometimes (thanks Chad Morse for report)
x Fixed placeholders not working (invalid host name) on Gecko 1.8
  (thanks hewee for report)

v 1.9.6.92
==========================================================================
x More accurate (and lenient towards misconfigured servers) inclusion
  type checks (thanks makini and Sheilaq for reports)

v 1.9.6.91
==========================================================================
x Fixed HTTP Referer header being omitted when a DNS cached record is
  not found for the request

v 1.9.6.9
==========================================================================
x Fixed default whitelist not being installed on first run anymore
  since 1.9.6's fix for multibyte temporary allow / mark as untrusted

v 1.9.6.8
==========================================================================
x Inclusion content type checking now graces default file extensions
x Improved XSS filter pre-screening efficiency
x Prefixed content type based inclusion blocking message

v 1.9.6.7
==========================================================================
x Fixed inclusion content type checks blocking Twitter JSON feeds
  loaded via SCRIPT elements (thanks Mel Reyes for reporting)

v 1.9.6.6
==========================================================================
x Inclusion content type checks made more tolerant to dynamically
  generated scripts and stylesheets (thanks therube for reporting)

v 1.9.6.5
==========================================================================
+ New layer of inclusion protection, checks if 3rd party script and
  CSS files are served with proper content type (it can be disabled
  via noscript.inclusionTypeChecking preference; exception patterns
  can be listed in the
  noscript.noscript.inclusionTypeChecking.exceptions preference)
x Fixed subdomain matching glitch with 1 char subdomain prefixes

v 1.9.6.4
==========================================================================
+ "Block JAR remote resources being loaded as documents" now blocks
  also script and CSS cross-site inclusions (thanks .mario for RFE)

v 1.9.6.3
==========================================================================
x Fixed XSS false positives when asynchronous activity must be
  performed in ABE

v 1.9.6.2
==========================================================================
x Fixed missing plugin placeholder when IFrames are forbidden
  (thanks Grumpy Old Lady for reporting)

v 1.9.6.1
==========================================================================
x Fixed session restore broken by some 1.9.6 ABE optimizations
x Fixed XMarks compatibility issue (thanks Matt Perkins for report)

V 1.9.6
==========================================================================
+ Support for raw IP and subnets with address prefix/mask syntax in
  ABE rulesets
x Improved UTF-8 XSS protection (thanks Sirdarckcat for discussion)
x Fixed ABE resource lists parsing glitches
x Improved "Anonymous" (formerly "Logout") ABE action behavior
x Fixed IP display in Allow/Forbid menu items on Gecko >= 1.9
x Added ABE local rulesets to configuration import/export dataset
x Fixed multibyte domain names couldn't be temporarily allowed nor
  marked as untrusted (thanks fujita for reporting)

v 1.9.5.73
==========================================================================
x Fixed "live" plugin unblocking broken on some sites (thanks therube
  for reporting)

v 1.9.5.72
==========================================================================
x Fixed CSS bug preventing placeholders from being hidden with
  Shift+click

v 1.9.5.71
==========================================================================
x Fixed Seamonkey 1.x breakage from 1.9.5.7 (thanks therube for
  reporting)

v 1.9.5.7
==========================================================================
+ ABE Logout action strips query strings from potential authorization
  and session-related parameters and neutralizes non-idempotent
  requests by switching their method to GET and removing uploads
x Fixed DNS optimizations causing ABE's "Logout" action to abort the
  request sometimes (Gecko <= 1.8 will abort on Logout anyway if DNS
  record is not cached)
x Improved usability with sites providing their own JS-based UI for
  HTML5 VIDEO element
x Fixed placeholder not clickable if overlayed with a transparent
  absolutely positioned element
x Fixed bug preventing the audio feedback sample from being changed
  (thanks Rodney Crnkovic for reporting)

v 1.9.5.6
==========================================================================
x Work around for Tab Mix Plus beta breaking bookmarklets and URL bar
  JavaScript one liners on untrusted sites (Fx 3.5)

v 1.9.5.5
==========================================================================
+ New Notifications|ABE option to disable ABE notifications
+ External requests on default ports to domain names different than
  "localhost" resolving to 127.0.0.1 don't generate notifications, in
  order to reduce spam from misconfigured hosts files (activity gets
  still logged to the Error Console and notifications can be restored
  by toggling the noscript.ABE.notify.namedLoopback preference)

v 1.9.5.4
==========================================================================
x Fixed incompatibility with back-forward gestures in Mouse Gesture
  Redux (thanks Kevin Schneider and Andrea Rodofili for reporting)
x Fixed "Open all tabs" glitches

v 1.9.5.3
==========================================================================
x Fixed Google Analytics surrogates causing some sites to open
  "undefined" URLs (thanks sanityvoid for reporting)

v 1.9.5.2
==========================================================================
x Fixed ABE RFC 3330 support bug (thanks SkyBeam for reporting)

v 1.9.5.1
==========================================================================
x Work around for NewTabUrl incompatibility
x Fixed undisclosed yet parsing bug (credits will be given where due
  in a later release)

v 1.9.5
==========================================================================
x Fixed forbidden objects in allowed documents not causing partially
  allowed icon on first load in Gecko < 1.9 (thanks al_9x for report)
x Fixed forbidden objects in mixed trusted/blacklisted pages not
  causing partially allowed icon (thanks al_9x for report)

v 1.9.4.91
==========================================================================
x Fixed late request cancelation of scripts preventing page from
  complete loading
x Fixed refreshing ABE rulesets enabling back disabled local rulesets

v 1.9.4.9
==========================================================================
x Fixed DNS cache purging bug (thanks therube for reporting)

V 1.9.4.8
==========================================================================
x Parallelization of DNS activity bringing huge ABE performance gain
x Minor fixes in LOCAL policies enforcing

V 1.9.4.7
==========================================================================
x Fixed possible deadlock introduced in 1.9.4.6
x Fixed DNS cache purging bug

v 1.9.4.6
==========================================================================
x Refactoring of content policy related code
x Another memory optimization iteration
x Restored automatic Seamonkey profile install cleaner

v 1.9.4.5
==========================================================================
x Further memory footprint and performance ABE optimizations

v 1.9.4.4
==========================================================================
+ Origin tracing speed and accuracy improvements
+ Enhanced frame busting emulation
+ Further DNS optimizations

v 1.9.4.3
==========================================================================
x Optimized garbage collection in DNS 2nd level cache

v 1.9.4.2
==========================================================================
x Fixed mixed content SSL false positives when ABE enabled
x Fixed file:// entry added to whitelist everytime a 2nd level
  domain gets allowed on Gecko >= 1.9 (thanks GµårÐïåñ for reporting)

v 1.9.4.1
==========================================================================
+ Implemented 2nd level DNS cache fixing some artifacts/crashes on
  Google Maps and some latency issues in Gecko < 1.9 (thanks therube
  and Alan Baxter for reporting)

v 1.9.4 RC2
==========================================================================
x Fixed page content getting randomly scrambled during heavily
  concurrent loads when ABE's asynchronous networking is enabled
x Fixed password manager autofill failing sometimes (thanks Tommy Coe
  for reporting)

v 1.9.4 RC1
==========================================================================
+ First stable ABE (Application Boundaries Enforcer) release
+ Improved JavaScript form submission emulation (thanks aladin235 for
  reporting about Twitter logout button)
+ Asyncrhonous networking in Gecko >= 1.9 for ABE preflight requests
  and DNS checks (can be turned off by noscript.asyncNetworking
  about:config preference)
+ noscript.ABE.legacySupport about:config preference to enable ABE
  on older, less supported platforms (Gecko < 1.9)
+ Modularized SeaMonkey uninstaller
+ Bookmarklet emulation made compatible with latest Fx 3.5 builds
x Better UI feedback about CAPS parsing artifacts

v 1.9.3.92
==========================================================================
x Fixed missing site rules being repeatedly fetched after 12 hours
  timeout

v 1.9.3.91
==========================================================================
+ Added gstatic.com (Google Maps and other services) to the default
  whitelist
x Fixed broken embeddings from file:// URLs (thanks Endor for report)

v 1.9.3.9
==========================================================================
x Fixed import/export buttons for whitelist and full configuration
  overriding each other (thanks Alan Baxter for reporting)

v 1.9.3.8
==========================================================================
+ Precise reporting of ABE DNS failures
+ Automatically include browser origins in Accept predicates
x Lighter XSS checks, relying on ABE for pre-screening when possible
  (preventing some timeout-related false positives and random hangs)

v 1.9.3.7
==========================================================================
+ More accurate NOSCRIPT web-bugs blocking, skipping same origin
  images and scripted pages (thanks Jorgo for suggestion)
x Working link to ABE documentation in NoScript Options|Advanced|ABE
x Fixed ABE external editor failing to open on Mac OS X (thanks David
  Bass for reporting)

v 1.9.3.6
==========================================================================
+ Improved Google Analytics script surrogates
+ New Imagefap anti-popup script surrogates
+ Seamonkey 1.x streamlined installation process (profile local
  installations are not supported anymore, but switching to
  browser-wide is automatic on update)
+ Seamonkey 1.x automatic uninstall procedure (button provided in
  NoScript Options)

v 1.9.3.5
==========================================================================
+ Better placeholder management with weird plugin content nesting
  (thanks nagan for request)
+ Faster and more streamlined cross-origin request tracking
x Fixed single aster ("*") glob pattern not compiling in URI pattern
  lists (thanks Sirdarckcat for reporting)
x Fixed Fx 2 (Gecko < 1.9) non-secure requests for HTTPS-forced
  resources being aborted rather than redirected (thanks al_9x for
  reporting)

v 1.9.3.4
==========================================================================
+ First public Application Boundaries Enforcer (ABE) prototype, see
  NoScript Options|Advanced|ABE
+ SYSTEM built-in ABE ruleset including one rule emulating LocalRodeo
  (check http://databasement.net/labs/localrodeo/ and
  http://databasement.net/labs/localrodeo/testcases.php )

v 1.9.3.3
==========================================================================
x Fixed fatal exception on JSON XSS checks (thanks HeikoAdams for
  report)

v 1.9.3.2
==========================================================================
x Fixed whitelist import/export broken by new global import/export (
  thanks Tim Johnson for report)

v 1.9.3.1
==========================================================================
x Fixed automatic secure cookie management being enabled by default
  (thanks therube for report)

v 1.9.3
==========================================================================
+ Redirect loops caused by HTTPS enforcement now trigger the standard
  redirect loop error page (thanks Matt McCutchen for RFE)
x Fixed https-forced embedded objects not being loaded unless already
  cached (thanks Matt McCutchen for report)

v 1.9.2.93
==========================================================================
x Fixed 1.9.2.92 regression breaking "Revoke temporary permissions"

v 1.9.2.92
==========================================================================
+ Improved bookmarklet support, trying to turn setTimeout calls into
  synchronous ones and to execute trusted imported scripts (e.g.
  in the Readability bookmarklet)
+ Slighty "beautifyed" JSON export format (one preference per line)
x Fixed 1.9.2.91 regression, preventing permissions changes made in
  NoScript Options from being saved under some random circumstances
  (thanks GµårÐïåñ for reporting)

v 1.9.2.91
==========================================================================
+ Import and Export buttons in NoScript Options to backup and restore
  the whole NoScript configuration (preferences and permissions) to
  and from a text file.

v 1.9.2.9
==========================================================================
+ Native media (audio/video HTML 5 elements) blocking
x Huge refactoring modularizing XSS, ABE, ClearClick, HTTPS extras
  and utility classes

v 1.9.2.8
==========================================================================
+ Speedup of bookmark-based configuration persistence
+ NoScript tries to synchronize its configuration with foreign
  bookmarks when the "Backup configuration in bookmarks" gets enabled
  in order to ease adding new "slaves"
x Excluded temporary permissions from bookmark-based synchronization
x Fixed XMark synchronization failing because of XMark's 4KB limit on
  bookmark URIs
x Fixed opening the [NoScript] configuration bookmark hanging the
  AutoPager extension
+ Disqus ClearClick exception
+ Feedly ClearClick exception

v 1.9.2.7
==========================================================================
+ "NoScript Options|Notification|Display release notes on update"
  checkbox
x Fixed XSLT blocking regression

v 1.9.2.6
==========================================================================
+ NoScript now automatically removes the controversial "NoScript
  Development Support Filterset" deployed with NoScript 1.9.2.3 and
  above on startup, permanently and with no questions asked.

v 1.9.2.5
==========================================================================
+ One-time startup prompt to ask users *beforehand* if they want to
  install/keep or permanently delete the AdBlock Plus "NoScript
  Development Support Filterset" deployed with NoScript 1.9.2.3
  and above
x Fixed filterset bug: it could be disabled but not removed.
x Fixed "Attempt to fix JS links" not working for drop-down lists on
  Gecko < 1.9 (thanks therube for report)
x Fixed XML feeds incorrectly reported as XSLT on XHTML documents
  (thanks mmcspadden for report)
x Updated zh-CN translation
x Updated el-GR translation


v 1.9.2.4
==========================================================================
+ Improved Gecko <= 1.9.1 support
x Updated nl-NL translation
x Fixed notification icons broken on Minefield (Fx 3.6a1pre)
x Fixed blocked objects in "restrictions on trusted sites" mode not
  being counted for "partially allowed" reporting

v 1.9.2.3
==========================================================================
+ Localization-agnostic title for configuration sync bookmark
+ Localizable info page when opening the configuration sync bookmark
x Fixed external XSLT sources not being reported in NoScript menus
  even if blocked unless a different type of active content comes
  from the same origin
+ A "NoScript development support filterset" gets added to AdBlock
  Plus, whitelisting the noscript.net, flashgot.net, informaction.com
  and hackademix.net web sites recently broken by an aggressive
  EasyList campaign against sites sponsoring NoScript development.
  ABP users are informed both on the install and on the release notes
  pages, so they can easily disable the filterset if they whish to.

v 1.9.2.2
==========================================================================
+ Performance optimization of preferences bookmark-based persistence
x Fixed residual object blocking glitches (thanks Aerik, Pirlouy and
  Endor)

v 1.9.2
==========================================================================
+ Experimental "Backup NoScript configuration in a bookmark for easy
  synchronization" feature (enable it in "NoScript Options|General")
x Fixed potential DNS leak in some proxied setups when opening URLs
  with FQDNs as their hostnames (thanks Rolf Wendolsky for report).

v 1.9.1.91
==========================================================================
x Fixed notifications reporting "Forbidden" on some partially allowed
  pages

v 1.9.1.9
==========================================================================
x Fixed notifications reporting "Partially allowed" on fully allowed
  pages (thanks Grant Parris for report)
x Fixed source code (view-source: originated) POST requests being
  turned into GET requests

v 1.9.1.8
==========================================================================
+ New "partially allowed subcontent" icon to indicate that the top
  site is blocked but some active sub-content (e.g. plugin objects
  or frames) is enabled
+ New script sources inventory behavior reporting "Scripts Forbidden"
  instead of "Scripts Partially Forbidden" even if 3rd party script
  sources are allowed unless their hosting document is allowed too
+ New "noscript.clearClick.subexceptions" preference to list sources
  of embedded content which don't need to be protected by ClearClick
x ClearClick compatibility with the "ShareThis" extension

v 1.9.1.7
==========================================================================
x Fixed multiple placeholder regression on Gecko < 1.9 (Firefox 2.x)

v 1.9.1.6
==========================================================================
+ Improved ClearClick specificity on zoomed pages (fixes a false
  positive on GMail's Flash-based attach link when zoom is active)
x Temporarily disabled ClearClick on 3.6a1pre because of bug 486200

v 1.9.1.5
==========================================================================
+ XSLT stylesheets are regarded as active content and blocked by
  default on untrusted documents and/or from untrusted origins
+ "Forbid IFrame" compatibility with the Google Notebook extension
  (thanks chojrak11 for RFE)
x Fixed HTTP not enforced on redirected background requests (thanks
  al_9x for report)
x Fixed work-around for bug 453825 work-around causing unhandled
  error messages visible in Firebug (thanks Pavol Goga for report)

v 1.9.1.4
==========================================================================
x Fixed placeholder size miscalculation for hidden blocked objects
  (thanks al_9x for report)
x Fixed HTTPS enforcing on documents causing an initial aborted
  HTTP documents request on Gecko < 1.9 (thanks al_9x for report)

v 1.9.1.3
==========================================================================
x Fixed URIPatternList glob compiling bug (thanks mattmcutchen)

v 1.9.1.2
==========================================================================
+ HTTPS forced on background requests (images, stylesheets,
  scripts, embeddings, AJAX...) as well (thanks mattmccutchen's RFE)
+ Fennec 1.0b1 compatibility

v 1.9.1.1
==========================================================================
x Fixeds XSS false positive on SAMLP payloads (thanks MysticOrchid
  for reporting)

v 1.9.1
==========================================================================
x ClearClick performance boost on crowded documents
x Updated French translation
x Reduced log spam on content blocking

v 1.9.0.92
==========================================================================
+ Yieldmanager script surrogate (thanks orngjce223 for suggestion)
x Fixed "Attempt to fix JavaScript links" causing middle-clicks to
  open JS link targets twice on Gecko 1.8 (thanks therube for report)

v 1.9.0.91
==========================================================================
+ ClearClick incident reporting tool

v 1.9.0.9
==========================================================================
x Fixed 20 seconds hang in injection checker on URLs containing long
  sequences of the "<" character

v 1.9.0.8
==========================================================================
x Work around for Mozilla bug 453825

v 1.9.0.7
==========================================================================
x Work around for SimpleViewer and other Flash movies replaced with
  innerHTML breaking on nsIContentPolicy presence (thanks Steffen
  Zahn for reporting).

v 1.9.0.6
==========================================================================
x Fixed page-level surrogates in subframes being executed too much
  early to be effective (thanks GossamerGremlin for report)
x Work-around for bug 4066046 (thanks Alice0755)
x Fixed incompatibility with the wfx_Versions extension (thanks
  Archaeopteryx for report)
x Fixed double activation for nested OBJECT elements, e.g. apple.com
  QuickTime movies (thanks al_9 for report)
x Fixed Silverlight applets not intercepted in Gecko 1.8.1.19-20
  (thanks al_9x for report)

v 1.9.0.5
==========================================================================
+ Upper limits for JS link detection loop (thanks Wladimir Palant)
+ about:certerror added to the intrinsic whitelist
+ ClearClick compatibility with the Link Alert extension
+ 3rd party script blocking improvements
x Updated Slovak translation

v 1.9.0.4
==========================================================================
x Fixed XHTML namespacing issues (thanks dhouwn for report)

v 1.9.0.3
==========================================================================
x Fixed E4X hijacking false positive with scripts delimited by XML
  comments and containing XML (thanks Jim Mattfield for report)

v 1.9.0.2
==========================================================================
x Fixed X-FRAME-OPTIONS not working inside OBJECT elements (thanks
  Joris van der Wel for report)
x Restored broken compatibility with Seamonkey 1.0.x (thanks James
  Andrewartha for report)

v 1.9.0.1
==========================================================================
x Work around for edge case false positive on plugins embedded in
  cross-site framesets (thanks therube for report)

v 1.9
==========================================================================
+ Improved ClearClick sensitivity (thanks Eric Lawrence for report)

v 1.8.9.9
==========================================================================
+ Experimental X-FRAME-OPTIONS compatibility support (see
  http://hackademix.net/2009/01/29/x-frame-options-in-firefox/ and
  http://evil.hackademix.net/frameopts/ )
x Updated pt-BR translation
x Fixed freeze on Poken URLs (thanks ksdz for report)
x Fixed URIs nested in query string being normalized with trailing
  slash (thanks Benny Brostrup and Carsten for reporting about
  login.service.csc.dk)

v 1.8.9.8
==========================================================================
+ Support for page-level surrogate scripts, executed before pages
  whose URL matches sources patterns starting with "@" start loading
x Enhanced "catch all" Google Analytics surrogate (thanks Jesse
  Andrew for reporting)
x Refactored the Silverlight IsVersionSupported() patch to use
  ScriptSurrogate.execute()
x Streamlined Silverlight support
+ Instant placeholders, being shown before page finishes loading

v 1.8.9.7
==========================================================================
x Improved script surrogation reliability
x Fixed URIValidator preferences not being updated at runtime
x Updated Sweden locale

v 1.8.9.6
==========================================================================
+ Evernote compatibility hacks

v 1.8.9.5
==========================================================================
+ Stricter checks for the "Attempt to fix JavaScript link" feature
  and emulation of form submission links (thanks Jah for report)

v 1.8.9.4
==========================================================================
x Fixed minimum sized placeholder potentially exceeding smaller
  frames (thanks greenhatch for report about BetFair's menu)
x Fixed ClearClick form bounds miscalculation with negative coords
  (thanks Zjakki Willems for report about BlogSpot's search feature)
x Fixed document loaded in a nested iframe when enabling a blocked
  legacy frame

v 1.8.9.3
==========================================================================
+ Extensible script surrogate mechanism (surrogating Google Analytics
  by default, look at noscript.surrogate.* in about:config)
+ noscript.placeholderMinSize (default 32) forces a minimum
  pixel size on object placeholders
x Cleaned up noscript.jsHack for custom usages

v 1.8.9.2
==========================================================================
x Fixed page loading stalled sometimes when the final destination of
  a redirected script inclusion gets blocked by NoScript

v 1.8.9.1
==========================================================================
x Fixed 3rd party script files starting with an XML comment being
  "swallowed" (breaking myway.com, netaddress.com and others)

v 1.8.9
==========================================================================
+ New noscript.clearclick.exceptions preference to specify URL
  patterns of page where clickjacking shouldn't be checked
x *.ebay.com ClearClick exception to temporarily work-around a false
  positive on one-click bids too difficult to reproduce
x Performance optimization of the JSON and E4X hijacking protection
x Compatibility with Amazon one-click
x Removed __count__ usage triggering a deprecated warning in Fx 3.0.x
x Relaxed XSS checks from same-domain HTTPS<->HTTP requests
x Improved E4X hijacking detection, skips leading XML comments in
  scripts (http://forums.mozillazine.org/viewtopic.php?p=5488645)
x Updated Japanese translation

v 1.8.8.95
==========================================================================
+ JSON and E4X hijacking protection (Gecko >= 1.9.0.4 required)

v 1.8.8.94
==========================================================================
x Removed a potential document leak

v 1.8.8.93
==========================================================================
x Improved accuracy of the new simulated onchange event handler

v 1.8.8.92
==========================================================================
x Work-around for 1.9.2a1 Components.utils.lookupMethod() breakage
x Restored placeholder outline on 1.9.2a1

v 1.8.8.91
==========================================================================
+ Added browser-built-in about:xyz URLs to the permanent whitelist
+ Simulated onchange event handling for simple HTML select drop-down
  with URL-like options
x Work-around for bug 453825 triggered by hack for bug 472495 and
  breaking smugmug.com Flash-based fullscreen slideshows (thanks
  Daniel Dorau for reporting)

v 1.8.8.9
==========================================================================
+ New zoom-guessing algorithm, giving more accurate results than
  nsIMarkupDocumentViewer.fullZoom built-in property, to fix
  ClearClick false positives at some fractional zoom levels

v 1.8.8.8
==========================================================================
+ Kazakh translation (thanks Baurzhan Muftakhidinov)
x ClearClick optimization by canvas recycling
x Work-around for bug 472495

v 1.8.8.7
==========================================================================
x Work-around for Windows Media Player embedded objects missing video
  streams under some circumstances (thanks AteUte52 for reporting)

v 1.8.8.6
==========================================================================
x Fixed ClearClick false positive on very narrow frames (e.g. on
  http://horseracing.betfair.com - thanks greenhatch for reporting)
x Fixed XSS false positive on very long indexed CGI parameters lists
  (e.g. on http://pingoat.com - thanks Daethian for reporting)

v 1.8.8.5
==========================================================================
x Further optimization of Base64 injection checks
x More accurate clipping of scrolling frames in ClearClick

v 1.8.8.4
==========================================================================
x Performance optimization of Base64 injection checks (thanks Dave
  Griffiths for reporting an Ebay chatroom issue)

v 1.8.8.3
==========================================================================
+ More specific injection checks for scriptless targets
+ Compatibility with the Fire.fm extension
x Fixed sporadic swallowed clicks on Google Street View

v 1.8.8.2
==========================================================================
x Fixed file:/// not showing anymore in NoScript menus

v 1.8.8.1
==========================================================================
x Fixed possible long-running loop on complex JSON-like requests

v 1.8.8
==========================================================================
x Fixed rare ClearClick false positives on the bottom edge of
  scrolling frames
x Fixed ClearClick false positive on some cnbc.com videos

v 1.8.7.8
==========================================================================
+ Compatibility with Fennec Alpha 2

v 1.8.7.7
==========================================================================
+ InjectionChecker checks HTML injections on untrusted targets too
+ Chained and nested JSON support (necessary to graceufully handle
  some Facebook APIs)
x Fixed too much aggressive data: URL sanitization
x Fixed sites whose URL doesn't support host not showing in menu
  (thanks timeless for report)

v 1.8.7.6
==========================================================================
x Improved specificity for "location=code" injection checks
x Compatibility with Facebook Connect JSON patterns

v 1.8.7.5
==========================================================================
x Heavy optimization of JSON reduction routine (up to 100x speedup),
  thanks Brian Krebs and Amy Buzby for reports and samples
x Fixed top-level plugin content difficult to allow by clicking its
  placeholder when other plugin-interacting extensions are active

v 1.8.7.4
==========================================================================
+ Contextual disablement with visual feedback for "Revoke temporary
  permissions" and "Temporarily allow all on this page" toolbar
  buttons (thanks WAPCE for suggestion).
x Improved early detection of event attribute XSS
x Updated Arabic translation by Khaled Hosny

v 1.8.7.3
==========================================================================
x Better viewport framing when scrollbars are present (thanks
  timeless for report)
x Compatibility with Firefox 3.2a1pre

v 1.8.7.2
==========================================================================
x Work-around for Google Toolbar 5 Beta conflict
x Work-around for newTabURL incompatibility
x Adaptation to bug 464754

v 1.8.7.1
==========================================================================
x Fixed issues with noscript.forbidIFrameContext = 0 (thanks Aerik
  for report)

v 1.8.7
==========================================================================
+ Updated zh-CN locale
+ Enhanced interaction with AdBlock Plus tabs appearing over
  NoScript placeholders
+ Flash-specific placeholder icon
+ Java-specific placeholder icon
+ Silverlight-specific placeholder icon
+ Improved ClearClick compatibility with Google Street View (thanks
  natron for report)
+ Finer grained object reload algorithm for mass permission changes
  from the "Blocked objects" menu (thanks Cinthya Wells for report)

v 1.8.6.4
==========================================================================
+ Improved compatibility with AdBlock Plus, by ensuring NoScript is
  always the latest content policy to run

v 1.8.6.3
==========================================================================
x Fixed automatically hidden notification bar make open menu
  disappear sometimes (thanks w-sky for report)

v 1.8.6.2
==========================================================================
x More consistent menu items with non-standard port sites

v 1.8.6.1
==========================================================================
x NoScript doesn't attempt to force placeholders visibility or size
  anymore, in order to minimize layout alteration (use the "Blocked
  objects" menu to enable less visible objects)
x Improved frame/iframe placeholder accuracy
x Fixed ClearClick false positive on http://www.st-audio.de

v 1.8.6
==========================================================================
+ Greatly increased sticky menu / Fennec UI responsiveness
+ Refactoring of ClearClick's document patching code
- Removed translucency transition from sticky menu
x Extra QA for release
x Updated localizations

v 1.8.5.5
==========================================================================
+ Better algorithm to handle semi-transparent elements, preventing
  edgy ClearClick false positives (e.g. sign-in menu on try.soup.io)

v 1.8.5.4
==========================================================================
+ Better algorithm to "single out" plugin content prevents edgy
  ClearClick false positives with absolutely positioned elements
  overlaying transparent plugin content, like in NFL.com scores page
+ Improved ClearClick plugin object snapshots

v 1.8.5.3
==========================================================================
x Fixed ClearClick false positives on absolutely positioned elements
  exceeding document size (thanks Apoc2400)

v 1.8.5.2
==========================================================================
x Improved ClearClick panning algorithm reducing false positives on
  partially hidden benign plugin content

v 1.8.5.1
==========================================================================
x Fixed minor CSS error breaking the "Forbid scripts globally" icon

v 1.8.5
==========================================================================
+ ClearClick enablement options on the ClearClick warning dialog
+ ClearClick session whitelist
x Forced non-sticky behavior when there's just one site to allow
  and noscript.sticky.liveReload is unset
x Fixed placeholders not working on Fx 3.1

v 1.8.4.93
==========================================================================
x Fixed mp3.walmart.com crash

v 1.8.4.92
==========================================================================
x Tweaked keyboard-triggered popup position
x Fixed "Allow global" menuitem not working
x Fixed "About" dialog's links not working
x Base64 XSS decoding tweaks
x Notification bar tweaks

v 1.8.4.91
==========================================================================
+ Support for XSS origin anchored exceptions, starting with "^@"
x Improved accuracy of ClearClick subframe management near borders

v 1.8.4.9
==========================================================================
x ClearClick false positives on large "guillotined" Flash applets
  reduced by trimming a 20% border (thanks Scott Gale for report)

v 1.8.4.8
==========================================================================
x Fixed about:xyz URLs matched literally without dropping search and
  fragment (thanks Daniel Holbert for report)
x Fixed parts of the sticky menu staying persistently translucent
  (thanks Aerik for report)

v 1.8.4.7
==========================================================================
x Restored old positioning algorithms for context menus

v 1.8.4.6
==========================================================================
x Fixed top-level automatic allow not working with non-standard port
  numbers (thanks Ulobor for report)

v 1.8.4.5
==========================================================================
x Fixed clicking on icon not hiding menu on Fx 2
x Fixed Entrecard ClearClick false positive
x Fixed AntiXSS filter false positive on some forum ads

v 1.8.4.4
==========================================================================
x Fixed menu usability issues on Fx 2

v 1.8.4.3
==========================================================================
+ Sticky UI enabled by default for all left click popups except the
  one on the notification bar
x Fixed off-screen status icon context menu on Fx 2
x Further tweaks in menu positioning and sticky UI usability
x Fixed ClearClick checks causing changes in framed form appearance

v 1.8.4.2
==========================================================================
+ Click-driven scroll buttons for sticky menu on Fennec
+ Several accessibility and appearance sticky menu improvements
x Fixed keyboard-triggered sticky menu unusable on maximized browser
  windows (thanks Alan Baxter for report)

v 1.8.4.1
==========================================================================
x Fixed incompatibility causing Tor Button to endlessy reload the
  page when disabled.

v 1.8.4
==========================================================================
+ Official Fennec support
+ Enabled ClearClick on trusted sites by default
+ Improved ClearClick internal whitelisting
+ Port numbers (mostly) ignored in site matching by default
+ Exprimental "sticky" menu UI (default for Fennec toolbar button,
  attached to ctrl+shift+S shortcut on other browsers)
+ noscript.sticky.liveReload about:config preference can be used to
  turn on automatic reload during operation on the new sticky menu
+ noscript.sticky about:config preference turns on sticky menu for
  left-click on the status bar icon

v 1.8.3.9.1
==========================================================================
x Fixed regression from experimental Fennec support, placeholder not
  working sometimes (thanks Alan Baxter for report)

v 1.8.3.9
==========================================================================
+ First experimental Fennec-compatible build
x Fixed Torbutton global Javascript-disablement issue

v 1.8.3.8
==========================================================================
x Fixed ClearClick false positive on semi-transparent Flash objects
  overlapping other content elements (thanks txhawkeye for report)

v 1.8.3.7
==========================================================================
x Restored Silverlight blocking on trusted pages for Firefox 2.0.x
  (thanks al_9x for report)

v 1.8.3.6
==========================================================================
+ Malay translation (thanks Joshua Issac)
+ Croatian translation (thanks Stiepan A. Kovac)

v 1.8.3.5
==========================================================================
x Fx 3.1 compatibility for JavaScript keyword bookmarklets and JS
  URLs entered in the location bar

v 1.8.3.4
==========================================================================
x Fixed Blocked Objects menu ordering issue (thanks Andy R.)
x Fixed forced visibility issue with ClearClick-checked embeddings
x Fixed inter-confessional "Make temporary permissions permanent"
  bug (thanks Alan Baxter for reports)

v 1.8.3.3
==========================================================================
x Fixed redirection issue (thanks pumaro for report)

v 1.8.3.2
==========================================================================
x Fixed problem with tab navigation on forms inside frames (thanks
  vivek for report)

v 1.8.3.1
==========================================================================
x Fixed notification bar not disappearing after allowing everything
x Fixed edge ClearClick cases with FullZoomed pages (thanks
  Sirdarckcat for report)

v 1.8.3
==========================================================================
x ClearClick work-around for misleading snapshot artifacts with
  justified text (thanks tmr250z for report)
x Fixed redirection blocking issue causing to some pages to hang in
  "loading..." status for a long time (thanks Mel Reyes for report)

v 1.8.2.95
==========================================================================
x Fixed click swallowing issues with scaled images (thanks Alan
  Baxter for reporting)
x Fixed about:blank invisible frames shouldn't be opaqued (thanks Mc
  for reporting)

v 1.8.2.94
==========================================================================
x Fixed ClearClick false positive when transparent plugin content has
  a visible HTML background (thanks therube for reporting)
x Fixed rendering glitch at the bottom of pages where notification
  bar is removed (thanks Bill Peavy for reporting)

v 1.8.2.93
==========================================================================
x Fixed random internal class name generation issue
x Enhanced "opaque embed" style

v 1.8.2.92
==========================================================================
x Fixed broken clicks on some frames (1.8.2.91 regression)

v 1.8.2.91
==========================================================================
x Fixed some "Opaque embedded objects" glitches

v 1.8.2.9
==========================================================================
x Improved viewport bounds matching
x Fixed incompatibility with iMacros (thanks OneMen)
x Fixed redirected frames 404 issue (thanks pumaro)

v 1.8.2.8
==========================================================================
x More aggressive bound trimming (for elements sized 24x24 or more)
  fixes false positives on Yahoo! Movies
x Semantic containers being ignored by ClearClick fixes issues with
  Yahoo! Mail

v 1.8.2.7
==========================================================================
x Better algorithm for ClearClick form expansion
x Work-around for scaled images causing broken screenshots
x Automatic scrollbars are not considered while taking screenshots

v 1.8.2.6
==========================================================================
x Bounds trimming for elements with size greater than 64x64 to take
  in account fancy CSS overlay borders (like on last.fm player,thanks
  tmr250z for report)
x Fixed Gecko 1.8.x complaints about missing getElementsByClassName
  (thanks therube for report)

v 1.8.2.5
==========================================================================
x Fixed external protocols (mailto:, e2k:...) not working outside
  frames (thanks Robert Janc for reporting)

v 1.8.2.4
==========================================================================
x Fixed late breaking POST injection checker regression, causing
  problems on some forms

v 1.8.2.3
==========================================================================
x Fixed minor horizontal offset miscalculation regression, causing
  weird snapshots under some scrolling conditions (incidentally, also
  on NoScript's install button - thanks Chuck Linart for report)

v 1.8.2.2
==========================================================================
+ Adapted Frame Break Emulation to alternate framebusting idioms
+ Several localization updates
+ Added a separate "Forbid FRAME" option for legacy FRAME elements
 (thanks Office Angel, al_9x and Chaosas for request and discussion)
+ Legacy FRAMEs nested inside IFRAMEs are forbidden by default if
  IFRAME blocking is on (about:config noscript.forbidMixedFrames)
x Fixed some ClearClick false positives when enabled for trusted
  sites or with some extensions mixing content and chrome
x Fixed mailto: URIs not working inside frames
x Fixed various typos in English localization of new features
x Restored compatibility with Fx 1.5.0.x (thanks Kevin for help)

v 1.8.2.1
==========================================================================
x ClearClick technology backported to Gecko 1.8.1 based browsers such
  as Firefox 2.0.x and SeaMonkey 1.1.x

v 1.8.2
==========================================================================
+ New "ClearClick" protection, specifically addressing Clickjacking,
  Clickjacket and other UI-redressing vulnerabilities: UI interaction
  with embedded objects is disabled if they're obstructed or not
  clearly visible (thanks Sirdarckcat, RSnake, Michal Zalewski and
  Matt Mastracci for inspiration and discussion)
+ "ClearClick protection" and "Opacize embedded objects" controls in
  "NoScript Options|Plugins", to enable/disable them on untrusted
  and/or trusted pages
+ Frame breaker emulation for frames where JS is disabled, controlled
  by the noscript.emulateFrameBreak about:config preference
x Fixed recursion problem with new legacy frame management
x Changed noscript.forbidIFrameContext default to 2 (allow same
  domain) unless "forbid non-HTTPS active content" is enforced: if
  this is the case, scheme must be the same as well.

v 1.8.1.9
==========================================================================
+ Opacized objects are forced to a minimum size of 50x50 pixels
+ Opacized iframes get automatic scrollbars when content overflows
  (thanks RSnake for discussion)
+ Enhanced legacy frames management (thanks RSnake for report)
x OBJECT elements embedding documents are treated like IFRAMEs
+ Improved Allow Page commands on pages changing document.domain

v 1.8.1.8
==========================================================================
x Refined anti-clickjacking opacization triggers to defeat malicious
  delay attempts (thanks Sirdarckcat for discussion)
x Ignore port number when checking permissions for script inclusion
  (thanks Vito Delre for zshare.net upload report)

v 1.8.1.7
==========================================================================
+ Specific "clickjacking" countermeasure working on non-whitelisted
  pages by default even if "Forbid IFRAME" is not checked: all plugin
  objects and frames are forcibly rendered opaque when embedding page
  is not in your whitelist. If you want to protect whitelisted pages,
  the best protection is still checking "Forbid IFRAME" together with
  "Apply these restrictions to trusted site as well" in the Plugins
  options panel (thanks Sirdarckcat for brainstorming)

v 1.8.1.6
==========================================================================
x Lowered sensibility to javascript: URLs (thanks C@rb0n for report)
x Fixed HTTP redirections from sites marked as untrusted sites
  forbidding JavaScript on the landing page even if whitelisted
  (thanks Willsee for reporting)

v 1.8.1.5
==========================================================================
x Fixed HTTPS cookie downgrading regression introduced in 1.8.1.4

v 1.8.1.4
==========================================================================
+ Leading regexp-like patterns reduction in InjectionChecker (thanks
  Nick Fnord for issue reporting)
x Fixed conflict with some extensions authenticating to web sites,
  like Google Reader Notifier (thanks naviretlav for report)

v 1.8.1.3
==========================================================================
x Fixed further "HTTPS|Automatic Secure Cookie Management" glitches
  affecting lwn.net and DNN (thanks Matthew Hile and LWN for reports)
x Localization updates
x Fixed http://*.sub.domain:1234 site matching working only with "0"
  (wildcard) port (thanks t3chnomanc3r for report).
x Fixed Torbutton JS status reporting

v 1.8.1.2
==========================================================================
x Switched "HTTPS|Automatic Secure Cookie Management" off by default:
  even if all the reported login issues (especially the ebay.com one)
  have been fixed, it probably deserves more testing from opt-in
  volunteers before a general "default-on" release
+ Unsafe cookies can be handled either globally (default), or per tab
  (noscript.secureCookies.perTab)
x Fixed "force HTTPS" not working across some redirection patterns

v 1.8.1.1
==========================================================================
+ On the fly patching of bookmarklets using setTimeout() executed on
  untrusted pages
x Fixed Automatic Secure Cookie Management preventing log in on
  ebay.com and other complex multi-domain sites

v 1.8.1
==========================================================================
x Fixed minor bugs in automatic fall-back for insecure cookies
x Updated localizations

v 1.8.0.7
==========================================================================
+ Panel for HTTPS-related options in the "Advanced" section
+ New Tor-friendly whitelist behaviours configurable in
  NoScript Options|Advanced|HTTPS: you can choose to apply the active
  content whitelist on HTTPS sites only, either always or just when
  a proxy is in use.
x Better "automatic" behavior for securing cookies:
  we check HTTPS response setting cookies and
  1) if host is in the noscript.secureCookiesExceptions list we let
     it pass through
  2) if host is in the noscript.secureCookiesForced list we append a
     ";Secure" flag to every non-secure cookie set by this response
  3) otherwise, we just log unsafe cookies BUT if no secure cookie
     is set, we patch all these cookies with ";Secure" like in #2.
     However, if a navigation from an encrypted to a non-encrypted
     part of the same site happens in the same tab, NoScript removes
     its ";Secure" patch to ensure compatibility. When it happens,
     this event is logged to the Error Console with an advice
     to try forcing HTTPS for this site.

v 1.8.0.6
==========================================================================
+ Changed "Forced Secure Cookies" enablement policy to per domain
  opt-in, controlled by the noscript.secureCookiesForced about:config
  preference. HTTPS sites listed in this preference get their
  Set-Cookie headers patched with the Secure flag, sites listed in
  noscript.secureCookiesException are ignored and the others have
  their non-secure cookies logged in the Error Console.
+ Experimental noscript.httpsForced about:config preference listing
  domains where HTTPS should be forced (HTTP requests are forcibly
  redirected to their HTTPS version by NoScript)

v 1.8.0.5
==========================================================================
+ Experimental "Forced Secure Cookies" feature, mitigates HTTPS
  cookie hijacking attacks (http://tinyurl.com/cookiehijack).
  Enabled by default, it can be disabled either globally, by toggling
  the noscript.secureCookies about:config preference, or for specific
  domains only, by listing them (space or comma separated) in the
  noscript.secureCookiesException about:config preference.
  Ref: http://hackademix.net/2008/09/10/noscript-vs-insecure-cookies/


v 1.8.0.4
==========================================================================
x Fixed GMail external login and GToolbar activation issues (thanks
  mldgr and Dan Virkler for reporting)

v 1.8.0.3
==========================================================================
x Work around for weird meez.com object "code" attribute usage with
  java: prefix (thanks sarai18 for reporting)

v 1.8.0.2
==========================================================================
x Improved InjectionChecker.reduceXML() method to work with whole
  documents rather than just fragments, removing a XSS false positive
  on outsourced GMail logins (thanks PrinceofWeasels for report)

v 1.8.0.1
==========================================================================
x Tweaked bracket balancing algorithm (thanks Buherátor for report)

v 1.8
==========================================================================
+ "Make page permissions permanent" command
+ Meaningful tooltip for "Allow all in this page" and "Temporarily
  allow all in this page", listing affected sites
+ More meaningful tooltip for Revoke Temporary Permission, listing
  affected sites and counting affected objects (Gecko >= 1.9)
x Rationalized keyboard accelerators for English menu items

v 1.7.9.3
==========================================================================
x Fixed excessive substitutions in nested query string sanitization
  (thanks David Lubertozzi for reporting)
x Fixed POST data removal in cross-site requests from null origins
  causing Google Gear not to work (thanks obatron for report).

v 1.7.9.2
==========================================================================
x DOS checks in InjectionChecker base64 decoding routines (thanks WHK
  and Sirdarckcat for PoC and reporting)

v 1.7.9.1
==========================================================================
x Various localization fixes (thanks Francesco Lodolo)
x InjectionChecker optimization over complex XML fragments

v 1.7.9
==========================================================================
x Fixed JS button auto-navigation problem with relative URLs
+ JavaScript redirections detected also in the onload attribute of
  the body element (thanks timeless)

v 1.7.8.5
==========================================================================
x Partially restored Untrusted menu behavior to allow blacklisting
  subdomains of a trusted domain

v 1.7.8.4
==========================================================================
x Fixed very large uploads (250MB and above) causing XSS false
  positives (thanks sharpie)

v 1.7.8.3
==========================================================================
x Fixed XPC error during certain uploads causing XSS false positive
  (thanks sharpie)

v 1.7.8.2
==========================================================================
x Fixed wrong "Allow all this page" label in Appearance options panel
x Fixed tab character in mailto: URLs triggering sanitization and all
  new line characters being turned into spaces (thanks Claudio
  Salazar Moyano for reporting)

v 1.7.8.1
==========================================================================
+ "Allow all this page" menu item
+ "Temporarily allow all this page" toolbar button
+ "Revoke temporary permissions" toolbar button
x Removed "Mark as untrusted" menu items for explicitly whitelisted
  sites (thanks BigRedBrent for suggestion)

v 1.7.8
==========================================================================
x InjectionChecker optimization to skip neutral dotted patterns (
  thanks Sirdarckcat for reporting)
+ JS link fixing works also with JS buttons
x Fixed IFrame always blocked if port number differs from parent and
  noscript.forbidIFramesContext is 3 (thanks al_9x for reporting)
x Fixed reload inconsistencies in blacklist mode (thanks therube)
x Changed noscript.autoReload.global default back to true, but global
  permission changes will cause reload only for the current tab,
  unless noscript.autoReload.allTabsOnGlobal is set to true

v 1.7.7.6
==========================================================================
+ Improved bracket balancing in syntax checks for short expressions
+ New "partially untrusted" and "untrusted" status icons for
  Globally Allow (GA) mode
+ Less confusing "Mark as untrusted" commands are shown in GA mode
  instead of "Forbid"
x Fixed sticky "Revoke temporary permission" command after operating
  temporary permissions for the same site both in GA and GF mode
  (thanks Alan Baxter for reporting)
x Fixed status bar icon disappearing when forbidding a site in
  GA mode
x Other minor bug fixes in GA blacklisting mode (thanks Alan Baxter
  and therube for reporting)
x Fixed Silverlight issues (thanks Urbane.Tiger)
x Changed noscript.autoReload.global default to false (global
  permission changes won't cause an automatic reload)

v 1.7.7.5
==========================================================================
x Separate temporary whitelists for normal and Globally Allow modes

v 1.7.7.4
==========================================================================
x Better behaved Seamonkey classic installer on Linux

v 1.7.7.3
==========================================================================
x Temporary whitelist is automatically revoked if user switches to
  "Allow scripts globally": this way temporarily allowed sites can't
  be accidentally marked as untrusted by manually revoking or
  restarting while still in global mode (thanks lakrids for report)

v 1.7.7.2
==========================================================================
x Fixed over-zealous sanitization on untrusted requests when URL is
  not UTF-8 encoded (thanks Sven Schoderboeck for report)
x Improved KMeleon compatibility (thanks jk-)

v 1.7.7.1
==========================================================================
+ InjectionChecker tests also POST data uploaded from trusted sources
x Tweaked URL checking to recognize and bypass bracketed session IDs
  (thanks benizi for report)
x Double overlay of bookmark code prevented (thanks stansmith)
x Fixed resetting preferences does not affect Global Allow mode (
  thanks Alan Baxter for report)
x Fixed XSS false positive on some bracketed Ebay search queries
  (thanks Lucas Malor for report)
x Better cache handling on plugin document reload (thanks Alan Baxter
  for report)

v 1.7.7
==========================================================================
x QA for release
x Localization updates
x Moved changelog online and removed full GPL text to reduce XPI size

v 1.7.6.4
==========================================================================
x Dramatic (100:1) InjectionChecker performance boost on very  long
  strings (thanks Lucas Malor for reporting)

v 1.7.6.3
==========================================================================
x InjectionChecker speed optimization for over-complex Bugzilla
  search queries (thanks Lucas Malor for reporting)

v 1.7.6.2
==========================================================================
x Main site always on the bottom of the menu even if subdomains are
  present
x "Revoke Temporary Permissions" honors the
  noscript.autoReload.allTabsOnPageAction preference
x Further InjectionChecker optimization for gmodules URLs

v 1.7.6.1
==========================================================================
x Fixed bookmarklets which navigate to a new location (e.g.
  del.icio.us) disabling Javascript in the current tab when invoked
  from a non-whitelisted site (thanks dingaling for reporting)

v 1.7.6
==========================================================================
x QA for release

v 1.7.5.4
==========================================================================
+ "Temporary allow all this page" will affect the most specific
  targets listed in NoScript's menu among "2nd level base domains",
  "full domains" or "full addresses", unless it's overridden by the
  noscript.allowPageLevel about:config preference (1 = full address,
  2 = full domain, 3 = 2nd level base domain)
x noscript.autoReload.allTabsOnPageAction about:config preference set
  to false by default, to prevent confusion among untrained users

v 1.7.5.3
==========================================================================
+ "Temporary allow all this page" will reload the current tab only,
  behavior controlled by noscript.autoReload.allTabsOnPageAction
  about:config preference (thanks robertmarley for hinting)
+ Whitelisting sites from NoScript Options|Whitelist obeys to the
  noscript.untrustedGranularity preference
x Fixed "about:" DocShell being JavaScript-disabled (thanks therube
  for reporting)
x Fixed "about:cache" becoming unresponsive if JS link detection is
  enabled (thanks Martin Focke for reporting)

v 1.7.5.2
==========================================================================
+ Work-around for NewTabURL buggy detection of a new tab
x Optimization of InjectionChecker for long nested URLs, e.g. those
  used by some gmodules widgets

v 1.7.5.1
==========================================================================
+ noscript.requireReloadRegExp about:config preference to force
  quick page reload on allowing for selected plugin mime types
+ Moveplayer plugin page reloading for one-click enablement

v 1.7.4
==========================================================================
+ Force top level site to be always the most reachable in the menu
  (on the bottom)
x Fixed import issue with edited lists using DOS newlines
x Minor cascading permissions bug fixes (sometimes a subdomain was
  not removed from the blacklist when its parent was whitelisted,
  leading to usability confusion because blacklist always prevails)
x Experimental work-around for a WMP crash when a page containing an
  embedded movie is opened in the same window where another movie
  is already playing (thanks SledgeFox for reporting)

v 1.7.3
==========================================================================
x Minor refinements to the docShell JS blocking machinery to make it
  play nice with other docShell-based permission handlers, such as
  Tab Mix Plus

v 1.7.2
==========================================================================
+ New values for the noscript.docShellJSBlocking preference:
  0 - no docShell JS blocking
  1 - (default) docShell JS blocking for untrusted sites (enables
    effective blacklists for defalut-deny modes)
  2 - docShell JS blocking for every non-whitelisted site (enables
  cross-frame inheritance of JS blocking)
x Fixed JavaScript enablement failing on some framed pages until
  the site is opened in a new tab (thanks rukia for reporting)
x Fixed Firefox preference window not showing with some Linux themes
  (thanks tom1978 for reporting)
x Fixed micro-injection false positive with 1password.com logins
  (thanks bwoodruff)

v 1.7.1
==========================================================================
x Fixed changing permissions on one tab reload all tabs issue (thanks
  redhat71 for reporting)

v 1.7
==========================================================================
+ JS redirect detector sensibility enhancement (thanks timeless)
+ "Temporarily allow all this page" command made visible by default

v 1.6.9.9
==========================================================================
+ More consistent UI in blacklist mode
x Fixed "Allow Scripts Gloabally" not working anymore

v 1.6.9.8
==========================================================================
x Restored the noscript.forbidData preference to its orginal "true"
  default value (thanks Sirdarckcat for reporting an issue in the
  about:blank context prevented by this change)

v 1.6.9.7
==========================================================================
x Fixed malfunctioning XUL error pages issue caused by the new
  docShell-level JavaScript blocking
x Fixed visualization issue on the toolbar in blacklist mode when all
  scripts of a page are untrusted
x Hide "Revoke temporary permissions" menu item in blacklist mode

v 1.6.9.6
==========================================================================
+ New "Temporarily allow all this page" command (hidden by default,
  to be enabled in NoScript Options|Appearance)
+ noscript.docShellJSBlocking about:config preference controlling
  the new additional docShell-level JavaScript permission enforcement
+ Separators in Untrusted menu

v 1.6.9.5
==========================================================================
+ Micro event-based DOS injections detection (thanks thornmaker)
+ (EXPERIMENTAL) More consistent blacklist behavior, blocking objects
  even if  "Scripts globally allowed" is checked, unless
  "Plugins|Block every object coming from an untrusted site" is off

v 1.6.9.4
==========================================================================
x Base64 decoded invalid characters handling optimization
x Regression fix: XSS exceptions not being honored (thanks hi_RAM)

v 1.6.9.3
==========================================================================
x Fixed Injection Checker false positive regression on URIs which
  contain encoded newline characters (thanks Kostas)

v 1.6.9.2
==========================================================================
x Fixed Injection Checker checking ASCII 43 as a "plus" sign but not
  as a www-form-encoded space (thanks Sirdarckcat for report)
x Google search anti-XSS exception now checks for real TLDs, rather
  than short 2nd level domains (thanks Sirdarckcat for report)
+ Refactored unescaping flow, allowing for easier extension
+ Ebay-style unescaping

v 1.6.9.1
==========================================================================
+ Improved XSS JavaScript unicode escape handling
+ Recursive JSON reduction, dramatically cutting analysis time on
  complex JSON URLs, e.g. for some Orkut widgets
x Critical work-around for
  https://bugzilla.mozilla.org/show_bug.cgi?id=439276

v 1.6.9
==========================================================================
+ Firefox 3.1a1pre compatibility
x Faster Base64 injection checks

v 1.6.8.2
==========================================================================
+ Better reporting of dynamically included external scripts, e.g.
  ajax.googleapis.com on goosh.org

v 1.6.8.1
==========================================================================
x Fixed regression: right-click on the status bar and "open UI"
  keyboard shortcut broken.

v 1.6.8
==========================================================================
x Fixed false positives in new Base64 decoding Injection Checker

v 1.6.7
==========================================================================
+ Base64 decoding in URI Injection Checker, thanks Zoiz for Yahoo PoC
  -- see http://zoiz.web.id/xss-corner/base64-encoded-xss.html
x Extra NOSCRIPT element showing won't add SCRIPT elements on buggy
  pages like evite.com (thanks zgendron and other reporters)

v 1.6.6
==========================================================================
x Fixed two bytes subnet shorthands broken if protocol is specified
x Fixed subnet shorthands not matching URLs with non-standard ports
x Firefox 3.0.* version bump
x Fixed XSS false positive on block.opendns.com

v 1.6.5
==========================================================================
x Fixed XSS URL sanitization issue with some proxy configurations
  (thanks Philipp Gühring for reporting and testing)
x Fixed false positives caused by Image(...).jpg file names

v 1.6.4
==========================================================================
x More effective cross-site POST blocking
+ Estonian translation (thanks aivo)

v 1.6.3
==========================================================================
x Work-around for Songbird 0.5 bug (nsIEffectiveTLDService present
  but not really working)

v 1.6.1
==========================================================================
+ Better feedback for blacklisted items on the page, by appending
  untrusted sites count to "Untrusted" menu label
x Fixed bogus "allowed.yu" label for partially allowed pages where
  all forbidden sites are marked as untrusted

v 1.6
==========================================================================
+ Specific shadowed status icon for pages where some origins are
  allowed and all the remaining have been marked as untrusted
+ Reviewed Russian translation (Alexander Sokolov and Sergei Smirnov)
x Dropped blockCssScanners code (SafeHistory and SafeCache extensions
  provide better prevention against navigation history sniffing)
+ Further QA for release

v 1.5.9.2
==========================================================================
x Fixed some Error Console noise (thanks timeless)
x Better Seamonkey installation algorithm (thanks therube)

v 1.5.9.1
==========================================================================
x Fixed infinite loop on some pages if noscript.blockCssScanners is
  true (thanks tlu and Itsnow for report)
x Placeholder compatibility with latest trunk
  (https://bugzilla.mozilla.org/show_bug.cgi?id=292789)
x Better installer for Seamonkey classic

v 1.5.9
==========================================================================
x Fixed regression from Songbird compatibility, making the Options
  button on the notification bar unusable when status bar was hidden
x Turned default for noscript.xss.trustExternal value to true
x Experimental protection against getComputedStyle() history sniffing
  attacks (you can enable it switching the noscript.blockCssScanners
  about:config preference to true)

v 1.5.8
==========================================================================
x Optimization of Injection Checker for iGoogle Calendar Widget
  (thanks JonCage for report)
x Fixed edge-case false positives due to URL encoding mixed to
  symmetric brackets(thanks Lundholm for report)
x Fixed legacy Seamonkey UI regression introduced by Songbird
  compatibility (thanks therube for report)

v 1.5.7
==========================================================================
+ Tweaked for Songbird compatibility
x Version bump for Firefox 3.0pre

v 1.5.6
==========================================================================
x Minor enhancements to IFRAME blocking

v 1.5.5
==========================================================================
+ Bracket balancing for inline JS literal-breaking micro injections

v 1.5.4
==========================================================================
+ InjectionChecker speed optimizations, preventing timeout on overly
  complex JSON requests (thanks John Danfort for report)

v 1.5.3
==========================================================================
+ Forbid toplevel site command in bold (thanks therube)
x Fixed rare XSS false positives on iGoogle
x Fixed "allowURLBarJS" preference cannot be disabled (thanks Aerik)

v 1.5.2
==========================================================================
x Fixed unwanted blocking of some trusted Java applets thanks Mick
  Bramhall for report)

v 1.5.1
==========================================================================
x Slightly revised icon set (thanks Karlosak and WAPCE for hints)
x Fixed bookmarklets invoked twice on untrusted sites (thanks al_9x)

v 1.5
==========================================================================
+ Slovenian translation (thanks Tomaž Mačus)
x Special bookmark management made compatible with Suiterunner's
  sidebar (thanks therube for reporting)
x Extra QA for release

v 1.4.9.9
==========================================================================
x Bookmarklet handling code adapted again to cope with methods moved
  from PlacesUtils to PlacesUIUtils after Fx 3 beta 4

v 1.4.9.8
==========================================================================
+ Prevention of Java applet same origin policy bypass via malformed
  class name (see http://tinyurl.com/2u387t)
+ Improved icons
x Fixed chrome "domain" showing in menus (thanks Aerik)

v 1.4.9.7
==========================================================================
+ New noscript.allowURLBarJS about:config preference allows
  javascript: and data: URLs to be run interactively from the
  location bar, e.g. for bookmarklet testing, even if currently
  displayed site is not whitelisted (default true)
+ Improved overall bookmarklet compatibility on Firefox 3
x Adapted bookmarklet handling code to latest Places refactoring with
  openXXX() methods in PlaceUtils (thanks Tobu for report)

v 1.4.9.6
==========================================================================
x Fixed "Forbid chrome:" menu items on some pages (thanks niko322)

v 1.4.9.5
==========================================================================
x Version bump for Firefox 3.0b5pre

v 1.4.9.4
==========================================================================
+ Added client-side policy control for new Firefox 3 cross-site XHR,
  configurable via noscript.forbidXHR about:config preference:
  0 - Allow any XHR
  1 - Allow cross-site XHR across trusted sites only (default)
  2 - Allow same-site XHR only (like Firefox 2)
  3 - Forbid all XHR

v 1.4.9.3
==========================================================================
x Fixed Firebug JS injection causing blocked IFrame
x Fixed plugin document detection making Acrobat Reader plugin hang

v 1.4.9.2
==========================================================================
x Minor InjectionChecker enhancements

v 1.4.9.1
==========================================================================
x Reduced vertical size of NoScript options panel for better usage
  on constrained devices (thanks pstepper for report)

v 1.4.9
==========================================================================
+ Improved Silverlight object identity based on "source" param

v 1.4.8
==========================================================================
+ Better differentiation of Flash-based movie players and other
  general purpose plugin content instances by taking in account
  flashvars attributes and param elements.
+ Improved Silverlight placeholders, now shown in real time and
  supporting more activation schemes

v 1.4.7
==========================================================================
+ Safe Silverlight placeholders restored by emulating the
  IsVersionSupported() machinery (placeholders are usually delayed
  by 3 secs or more)

v 1.4.6
==========================================================================
x Silverlight plugin objects in content blocking mode made completely
  disabled (not just content-less) until they're allowed per-page
x Work around for a conflict with the PDF Download extension conflict
  (thanks greenknight for report)

v 1.4.5
==========================================================================
x Fixed Silverlight unblocking hooks not working if all kinds of
  plugin content and IFrames are blocked (thanks al_9x for report)

v 1.4.4
==========================================================================
+ Content unblocking machinery made compatible with new Silverlight
  activation schemes (thanks al_9x and Alan Baxter for report)

v 1.4.3
==========================================================================
+ Further fuzzification of injection checker patterns
x Slightly released window.name checks to allow some legitimate frame
  tricks, e.g. in eBay Cross-promotions (thanks jlovie for report)
x External URI validation decoding changed to accomodate ISO-8859 and
  other encodings, rather than UTF-8 only (thanks Alf Buccheim)

v 1.4.2
==========================================================================
+ Bookmarklet return values support on Mozilla trunk
x Fixed mailto: empty URL (new mail message) considered invalid

v 1.4.1
==========================================================================
x Fixed "onclick.match is not a function" issue when clicking on
  named anchors with no href (thanks wangyi6854 for report)

v 1.4
==========================================================================
+ Updated translations
x Revised window.name injection checks to be more lenient on GModules
x Extra QA for release
x Fixed about dialog size to correctly show contributor list in any
  language

v 1.3.8
==========================================================================
x Fixed eMusic incompatibilities (thanks Mel Reyes)

v 1.3.7
==========================================================================
+ Added wildcard type entry in Blocked Objects temporary allow menu
x Fixed minor bugs in Blocked Objects menu early implementation

v 1.3.6
==========================================================================
+ Descriptive icon for content types when possible on object
  placeholders and menu items
x Improved CSS injection rules (thanks Azurite for report)

v 1.3.5
==========================================================================
+ More consistent plugin content temporary permissions management:
  object permissions are granted per-session(not bound to the current
  tab anymore) and honor the "Revoke Temporary Permissions" command.
+ "Temporary allow content-type@http://site.com" commands in the
  "Blocked Objects" menu temporary allows plugin content matching a
  certain mime type (e.g. shockwave-flash) on the whole site.
x Increased readability of the "Blocked Objects" menu by using plain
  font style instead of italics even if permissions are temporary
x Reduced console pollution on Linux
x Work-around for XPathResult not working in sandboxed bookmarklets


v 1.3.4
==========================================================================
+ "Blocked Objects" menu to temporarily allow plugin content even
  when placeholder is hidden or not easy to see
+ "Block every object coming from a site marked as untrusted" option
  in Plugins tab (checked by default)
x Further XSS filter sensibility refinement
x Fixed double separators sometimes in menus (thanks niko322)
x Fixed "StumbleUpon Discovery" not compatible with "Forbid IFrames"
  (thanks niko322)
x Fixed URI protocol handler protection removing mailto: line breaks
  (thanks Alf Buchheim)

v 1.3.3
==========================================================================
x Allow data: URIs in script src attributes on trusted sites (thanks
  Kravvitz for report)
x Fixed "a.getAttribute is not a function" issue (thanks wangyi6854
  for report)

v 1.3.2
==========================================================================
+ Scriptless support for history.go(x), history.forward() and
  history.back() links/buttons (thanks timeless for suggestion)
+ resource: URI path traversal protection
+ New "noscript.allowedMimeRegExp" about:config option to whitelist
  some content types not to be blocked by "Forbid other plugins", for
  instance "application/pdf" or "image/.*"
+ Plugin content is always forbidden if coming from sites explicitely
  marked as "Untrusted" (blacklisted). This behavior can be disabled
  by setting the "noscript.alwaysBlockUntrustedContent" about:config
  option to false (thanks NakedStranger for suggestion).
x Fixed XSS false positive at mail.yahoo.com
x noscript.jsredirectFollow preference more effective on blank but
  not empty (i.e. space only) body (thanks timeless for suggestion)

v 1.3.1
==========================================================================
x Fixed missing plugin content placeholder regression on some gaming
  sites (thanks Aerik and hewee for report)

v 1.3
==========================================================================
+ "Revoke temporary permissions" command in NoScript floating menus
+ Fixed plugin content placeholder sometime missing on background
  tabs Linux issue (thanks WAPCE for report)

v 1.2.9.6
==========================================================================
+ Better plugin content placeholder management
+ noscript.canonicalFQDN about:config preference to control
  canonicalization of domains ending with a dot.
+ Updated translations

v 1.2.9.5
==========================================================================
+ Transparent blocking of non-text frames (thanks sam41177878))

v 1.2.9.4
==========================================================================
+ Tweaked preliminary URL screening optimizations to enhance
  Injection Cheker sensibility (thanks Gareth Heyes)

v 1.2.9.3
==========================================================================
+ Updated Injection Checker to take in account upper Unicode
  JavaScript identifiers (thanks Gareth Heyes)

v 1.2.9.2
==========================================================================
x Further reduced false positives with post-syntax danger checks

v 1.2.9.1
==========================================================================
x Fixed issues with trans-domain redirections, stacking entries in
  the previously viewed site's menu (thanks Hanspeter Spalinger)

v 1.2.9
==========================================================================
x Set noscript.jsredirectFollow default to false
x Extra QA for release

v 1.2.8
==========================================================================
+ Injection Checker optimization on very long query strings
x Fixed OpenId XSS false positive on blogger.com (thanks dondado)

v 1.2.7
==========================================================================
x Fixed Yahoo search XSS false positive by double checking valid JS
  fragments for potential danger (10x firefoxisgreat2008 for report)
x Fixed the "form fields forgotten" issue by disabling the jsHack
  feature which caused it. If you need jsHack and you can afford this
  problem, just set the noscript.jsHackRegExp about:config preference
  to a regular expression matching the URLs where you want it enabled
x Fixed content placeholders not showing on some sites
x Fixed POST payload shouldn't stripped as a consequence of injection
  checking (thanks theiago for report)

v 1.2.6
==========================================================================
x Updated localizations
x Extra QA for release

v 1.2.5
==========================================================================
x Work-around for conflict with Tab Mix Plus dev. in Fx 3's Places
  (http://tmp.garyr.net/forum/viewtopic.php?t=8052)

v 1.2.4
==========================================================================
x Fixed NOSCRIPT content shown in pages allowed on the fly with
  "Temporarily allow top-level sites" (thanks Pirlouy for report)

v 1.2.3
==========================================================================
+ Improved Injection Checker JSON compatibility, now recursively
  checking content of string attributes
x Further JS syntax check optimizations
x Fixed potential XBL-based crash after successful -moz-binding
  injection (thanks Gareth Heyes for reporting)
x More discreet XSS notification for subframes

v 1.2.2
==========================================================================
x Changed noscript.filterXGetRx default to make single quote removal
  happen only after positive injection checks (thanks sirdarckcat for
  suggestion)

v 1.2.1
==========================================================================
x Fixed placeholder not shown for plugin content loaded in frames
  (thanks Apoc2400)
x Revised InjectionChecker made compatible with JSON GET parameters
  (thanks "Wilderness Of Mirrors")

v 1.2
==========================================================================
+ Better protection against Flash-based XSS and other plugin-related
  cross-site attacks
+ Better feedback for allowable sites from embedded redirections
  (thanks Leo Häfliger for report)
+ XSS filtering in subframes gets notified (was silent by default)
x Fixed temporary allowed site prevents parent from being allowed
  permanently (e.g. in auto-allow mode)
x Fixed stand-alone WM plugin pages delayed blocking (thanks therube)
x Extra QA for release
x Updated localizations

v 1.1.9.9
==========================================================================
+ Hardened injection checker (thanks Gareth Heyes)
x Better compatibility with Wikimedia sites
x Fixed rtsp: and mms: plugin content always considered untrusted
  (thanks Florian Gerstenlauer for report)
x Fixed one-click plugin activation (with no confirmation) sometimes
  deferred to next page refresh (thanks Erwin J. Knöll for report)

v 1.1.9.8
==========================================================================
+ Experimental noscript.jsHack about:config preference containing JS
  code to be executed before page loads in order to accomodate for
  missing features (default implants a fake urchinTracker, see
  http://forums.mozillazine.org/viewtopic.php?p=3183986#3183986)

v 1.1.9.7
==========================================================================
+ new "Revoke temporary permissions" command
+ new Plugins option: "Collapse blocked objects"
+ new Plugins option: "No placeholder for object coming from sites
  marked as untrusted"
x Fixed OBJECT count bug when placholders are not shown
x Work-around for IETab incompatibility with noscript.contentBlocker

v 1.1.9.6
==========================================================================
x Object placeholder rendering optimization
x Extra QA for release

v 1.1.9.5
==========================================================================
+ Plugins disabled by default on unknown sites
x References to "Macromedia Flash" changed into "Adobe Flash"
x Fixed wrong OBJECT count reported after 1st notification

v 1.1.9.4
==========================================================================
+ XBL protection compatible with extensions using XMLHttpRequest from
  a content-triggered event handler (e.g. Book Burro or PriceDrop)

v 1.1.9.3
==========================================================================
+ non-destructive cross-site XBL protection (handles the same case as
  https://bugzilla.mozilla.org/show_bug.cgi?id=387971)
x Better edge-case handling in invisible links detection (thanks
  Alexander Nikkta)

v 1.1.9.2
==========================================================================
+ Pre-scan optimization for unicode-escaped ASCII in InjectionChecker
+ Better compatibility with URLs containing HTML entities

v 1.1.9.1
==========================================================================
x Work-around for Minefield content policy / DOM interaction
  regression (thanks mmortal03)

v 1.1.9
==========================================================================
x Extra QA for release
+ Menu rendering speed optimizations
+ Emulated TLD Effective service up to 100x speedup
+ InjectionChecker performance up to 50x speedup (thanks therube)
+ Fixed leak regression from 1.1.8.3 redirection handling refinements
  (thanks L. David Baron)
x Fixed Firefox notifications not shown if NoScript notifications
  were suppressed (thanks gecco)

v 1.1.8.9
==========================================================================
x Fixed content-blocking regression (thanks L.A.R. Grizzly)

v 1.1.8.8
==========================================================================
x Better Google Toolbar compatibility (thanks brandonksu)

v 1.1.8.7
==========================================================================
+ More consistent and compatible bottom notification bar

v 1.1.8.6
==========================================================================
+ "Notifications" option to change message bar automatic hiding delay
x Fixed multiple profile problems on SeaMonkey (thanks therube)
x Fixed incompatibility with Translation Panel and other extensions
  (regression from 1.1.8.5 beta)

v 1.1.8.5
==========================================================================
+ Improved HTML attribute injection checks (thanks Gareth Heyes)
+ More flexible noscript.forbidXBL about:config preference:
  0 - allow all XBL
  1 - allow trusted and data: (Fx 3) XBL on any site
  2 - allow trusted and data: (Fx 3) XBL on trusted sites
  3 - allow only trusted XBL on trusted sites
  4 - allow only trusted XBL from the same site or chrome (default)
  5 - allow only chrome XBL

v 1.1.8.4
==========================================================================
x Fixed installation issue on SeaMonkey (thanks R.N. Folsom)

v 1.1.8.3
==========================================================================
+ The "noscript.tempGlobal" about:config preference causes the
  "Globally Allow" status to be revoked at the end of each session
  (thanks chconnor and Alan Baxter for suggestion)
+ The "noscript.lockPrivilegedUI" about:config preference blocks
  Error Console and DOM Inspector (useful in locked down setup to
  prevent preferences from being unlocked by user's chrome JS code)
+ More reliable base domain recognition
+ Switch to nsIEffectiveTLDService on Gecko >= 1.9 above (Firefox 3)
+ nsIEffectiveTLDService emulation on Gecko < 1.9 (Firefox 2)
x Updated translations
x Additional QA for release

v 1.1.8.2
==========================================================================
+ Friendlier IFrame handling (thanks war59312 and A. Baxter)
x Fixed Silverlight new detection scheme broken by IFrame blocking
x Fixed compatibility issue with Cooliris send link (thanks Tschua)

v 1.1.8.1
==========================================================================
+ More flexible and reliable redirection management

v 1.1.8
==========================================================================
+ Version bump for Firefox 3
+ Temporarily allow sites matching the regular expression(s) in the
  noscript.whitelistRegExp about:config preference (thanks MaZe)
x Further QA for release
x Fixed chrome.manifest for eMusic Remote (thanks Mel Reyes)
x Fixed shorthands broken when XSS protection was off (thanks MaZe)


v 1.1.7.9
==========================================================================
+ Notify bar for jar document blocking
x Fixed GreaseMonkey's XMLHttpRequest compatibility regression
x Fixed confusing option, "Forbid other plugins" shouldn't imply
  forbidding Java, Flash and Silverlight.

v 1.1.7.8
==========================================================================
+ JAR uris are forbidden from loading as documents by default, see
  http://noscript.net/faq#jar for details
+ Block untrusted XBL (thanks Sirdarckcat for inspiration)
x Various IFrame blocking refinements

v 1.1.7.7
==========================================================================
x Fixed installation problems with addons.mozilla.org automatic
  update

v 1.1.7.6
==========================================================================
+ srv.br "special" TLD (thanks Rodrigo Ristow Branco)
+ Better protection against "setter" based XSS vectors and encoded
  "name" payloads (thanks RSnake, Sirdarckcat and Kuza55, see
  http://ha.ckers.org/blog/20071104/owning-hackersorg-or-not/ )
+ Improved hidden links management, preserves original body CSS
  attributes when possible (thanks mdots)

v 1.1.7.4
==========================================================================
+ new noscript.forbidIFramesContext about:config option controls
  if actually enforcing IFRAME blocking depending on the parent page:
  0 -- block always
  1 -- block if parent is in a different site (default)
  2 -- block if parent is in a different domain
  3 -- block if parent is in a different 2nd level domain
+ Minefield version bump (0.3.0a9pre)
x XSideBar keyboard shortcut compatibility (thanks Philip Chee)

v 1.1.7.3
==========================================================================
x Work-around for hidden link detection being triggered by some CSS
  reporting offsetHeight 0 for anchors (thanks Gerrit Heeres)

v 1.1.7.2
==========================================================================
+ Object placeholders' minimum size set to 32x32 for visibility
+ Object placeholder override for Microsoft® Silverlight™
x Fixed "Forbid IFRAME" blocking also Flash (thanks niko322)
x Fixed "Forbid IFRAME" blocking also regular frames (thanks ievans)
x Fixed IFRAME in place activation shouldn't reload parent page

v 1.1.7.1
==========================================================================
+ New "Plugins/Forbid IFRAME" option per Gareth Hayes' and Om's
  request, see http://sla.ckers.org/forum/read.php?13,15701,15840
x Fixed logic inconsistency between "Plugins/Forbid xyx" and
  "Plugins/Forbid other plugins" (thanks Kadeos);
x Fixed overzealous behaviour of JS link detection (thanks Kadeos and
  plu for reporting)

v 1.1.7
==========================================================================
+ Further QA for release
+ Improvements in script redirection management

v 1.1.6.27 (1.1.7RC2)
==========================================================================
+ New "Forbid Web Bugs" option in the Advanced/Untrusted panel
x Fixed startup "sudden death" issue (thanks Alan Baxter)

v 1.1.6.26 (1.1.7RC1)
==========================================================================
+ Moved plugin content options to a new top-level "Plugins" tab
+ New "Plugins/Forbid Microsoft® Silverlight™" option, enabled by
  default like "Plugins/Forbid Java™"
+ New "Plugins/Apply these restrictions to trusted sites too" option
+ Enchanced sensibility for the JS URL detection feature
+ New "jsredirectForceShow" option to always display JavaScript-only
  navigation URLs at the bottom of pages, no matter what the visible
  content is (per timeless' RFE)
+ UTF-8 escaping awareness for InjectionChecker pre-syntax evaluator
+ Arabic (thanks Nassim Dhaher)
+ Indonesian(thanks regfreak)
+ Experimental Intel MidBrowser support
+ Experimental preference locking support (look at the mozilla.cfg
  sample inside the XPI for details)
x Fixed meta-refresh notification failing to appear sometimes
x Cleanup of the counter-measures against Sirdarckcat's redirected
  script trick (available for Fx >= 2.0 only) with user feedback
x Fixed full address no more shown in allowing menu for numeric IP
  or TCP-IP explicit port URLs (thanks blahhhy for report)
x noscriptOptionsWidth entity to localize option dialog size

v 1.1.6.25
==========================================================================
+ Fix for Sirdarckcat's JS redirection trick

v 1.1.6.24
==========================================================================
+ Fixed XSS notification infobar not showing

v 1.1.6.23
==========================================================================
+ Work-around for Daily Dilbert extension's CSS bug hijacking status
  bar icons (thanks gumble and Archaeopterix for reporting)

v 1.1.6.22
==========================================================================
x Fixed toolbar icon breaking when "Scripts Globally Allowed" and no
  script found in page (thanks Claus Valca and Gecco for reporting)

v 1.1.6.21
==========================================================================
x Fixed infobar icon not always properly updated upon tab-switching
  (regression from 1.1.6.20 feedback fix)

v 1.1.6.20
==========================================================================
x Fixed inconsistent status icon feedback (thanks Alan Baxter)

v 1.1.6.19
==========================================================================
x Fix for the massive breakage on Mozilla trunk caused by landing of
  the patch for https://bugzilla.mozilla.org/show_bug.cgi?id=377696
  (thanks Quarantine and Peter(6) for reporting)

v 1.1.6.18
==========================================================================
+ noscript.safeJSRx preference allows to specify a regular expression
  matching statements allowed in a top-level javascript: URL. Default
  value allows sessionstore prompt javascript:window.close() trick
  (http://forums.mozillazine.org/viewtopic.php?p=3033780#3033780)

v 1.1.6.17
==========================================================================
+ Smarter JS link fixing on untrusted sites (thanks timeless)
+ Smarter allowable sites detection/reporting if domain tricks are
  being used.
x Fixed CTRL+Enter address bar SeaMonkey feature (thanks blindtrust)
x Fixed conflict with SiteAdvisor tooltips

v 1.1.6.16
==========================================================================
x Fixed noscript.forbidChromeScripts preventing RSS subscribe UI from
  working: browser packages are whitelisted by default, extensions
  and other chrome packages can be optionally whitelisted adding a
  noscript.forbidChromeExceptions.packageName preference set to true,
  and the noscript.forbidChromeScripts preference defaults to false
  now, since Bug 292789 couldn't do any harm unless some extension
  does very stupid things.
x Fixed incompatibility with the BookmarksHome extension

v 1.1.6.15
==========================================================================
+ Support for keyword-driven bookmarklets on untrusted pages (thanks
  Mike Rocker and therube for report/request)
+ noscript.forbidChromeScripts preference (true by default), prevents
  script tags in content (non chrome:/resource:/file:) documents from
  referencing chrome: scripts, see
  https://bugzilla.mozilla.org/show_bug.cgi?id=292789
x Fix for fast reload not working on Minefield

v 1.1.6.14
==========================================================================
x Work-around for a reload problem caused by Firekeeper 0.2.11
x Version bump for Minefield

v 1.1.6.13
==========================================================================
+ Enhanced the "multi-port shorthand" feature to accept "*" wildcard
  for subdomains, e.g. "http://*.google.com:0" matches every http
  google subdomain with any port number (thanks Dave Faraldo for RFE)
+ Added a "noscript.fixURI.exclude" about:config preference where
  protocols which should not be escaped by NoScript can be specified
  as a space-separated list (thanks therube for inspiration)

v 1.1.6.12
==========================================================================
+ URI Validator facility for on-demand protection against URI-based
  exploits. You can add your uri-validator anchored regular
  expressions as an about:config preference named like
  "noscript.urivalid.protocolname" to validate the URI substring
  immediately following scheme + colon (see the noscript.urivalid.aim
  pre-configured example entry)
x Minor change in query string parser, it doesn't drop "=" splitted
  chunks exceeding the first two anymore

v 1.1.6.11
==========================================================================
+ Optional blocking of tracking images (also known as "Web Bugs")
  embedded inside NOSCRIPT tags: it can be enable through the
  noscript.blockNSWB about:config property (thanks lakrids/Arimfe)

v 1.1.6.10
==========================================================================
x Fixed configuration conflict preventing javascript: links from
  opening in some circumstances (thanks england and haklin)

v 1.1.6.08
==========================================================================
x Fix for popup content loaded in the opener window regression (from
  mail/news exploitation protection)

v 1.1.6.07
==========================================================================
x Further refinement of URL protocol handler protection to cope with
  special configuration-depending cases with mail/news protocols
  (not affecting SeaMonkey) - thanks Rios and McFeters for generic
  PoC, thanks Darkdata for specific test case

v 1.1.6.06
==========================================================================
x Early protection against URL protocol handling exploitation (see
  http://tinyurl.com/37o23j and Mozilla bug 389106)
x Fix to ampersand being sometimes escaped by anti-XSS filters

v 1.1.6.05
==========================================================================
+ Protection against UTF-7 encoded XSS attacks
x Improved plugin content blocking in background tabs
x Better XSS query string processing preserves "exotic" patterns

v 1.1.6.04
==========================================================================
+ Smarter Anti-XSS filters allowing non-latin characters
x Kill duplicates in "Partially allowed" statistics
x Switched to getDefaultBranch() for volatile CAPS preferences in
  order to grant a clean "Safe Mode" even after Firefox crashes
  (thanks Benjamin Smedberg for suggestion)

v 1.1.6.03
==========================================================================
+ Allowed sites and partial counts in the infobar when scripts are
  "Partially allowed" (timeless suggestion)
+ Window.name payload attacks neutralization
x Fixed over-optimization of JS detection relying on syntax errors

v 1.1.6.02
==========================================================================
x Fixed "Unresponsive Script" on specific complex URL patterns
  (many thanks to Sue Petersen)

v 1.1.6.01
==========================================================================
x Fixed "Clear private data" window not closing if you hit "OK" on
  browser exit with Firefox < 3.0 (thanks VT for first report)

v 1.1.6
==========================================================================
+ "Light" injection checks are enabled also with "Scripts Globally
  allowed" (notice that allowing scripts globally is still a very bad
  idea, since POST injections and other XSS attacks launched using
  JavaScript, Java or Flash are virtually undetectable)
x Better XSS notification/UI feedback on partial loads
x Depth limit to URL decoding
x Work-around for JS Development Environment scoped evaluation being
  blocked by noscript.safeToplevel feature
x Extra QA for public release

v 1.1.5.07
==========================================================================
x Extra QA and optimization for very complex URLs

v 1.1.5.06
==========================================================================
x Huge performance and accuracy enhancement in injection detector
x Bookmarklet bypass for Minefield Places (thanks Hwasung Kim)

v 1.1.5.05
==========================================================================
+ Smarter injection detector for trusted to trusted requests
x Fixed "this.docShell has no properties" issue (many thanks therube)
x Fixed external URLs not opening in IETab (thanks chili1)

v 1.1.5.04
==========================================================================
x Fixed traceback regression skipping checks on permissions change

v 1.1.5.03
==========================================================================
x Fixed XSS notification message bar not showing sometimes

v 1.1.5.02
==========================================================================
x More accurate origin detection on META refresh

v 1.1.5.01
==========================================================================
+ XSS filter sensibility enhancement
+ Notifications for Flash-based XSS too

v 1.1.5
==========================================================================
x Removed about:neterror from the permanent non-deletable whitelist
  (for the super-paranoids, thanks Aerik)
x Minor bug fix, anti-XSS notification bar skipped when an URL nested
  in a query string gets sanitized
x Extra QA for public release

v 1.1.4.9.070627
==========================================================================
+ Added "0" shorthand to match all *explicit* IP ports on the same
  protocol/host, e.g. http://acme.com:0 matches http://acme.com:8080
  and http://acme.com:9999, but neither https://acme.com:8080 nor
  http://acme.com
+ Partial numeric IPv4 are matched up to the 2nd leftmost byte, e.g.
  "192.168" matches 192.168.0.22 and "10.0.0" matches 10.0.0.33
x Minor cosmetic tweaks to XSS notifications threshold
x Improved reload on permissions change

v 1.1.4.9.070624
==========================================================================
+ Optimization of active counter-measures
x Additional QA for public bug fixing automatic update

v 1.1.4.9.070623
==========================================================================
+ More lenient yet the safest XSS filters
x Fixed a leak happening when a secondary browser window is closed

v 1.1.4.9.070622r3
==========================================================================
x Fixed some popup not closing issue (thanks Angelo Dicerni)

v 1.1.4.9.070622r2
==========================================================================
x Fixed issue with usernames embedded in home page (thanks england)

v 1.1.4.9.070622r1
==========================================================================
x Fixed incompatibility with certain malformed Ebay search URIs
  (thanks to Marc Van Buggenhout for reporting)

v 1.1.4.9.070622
==========================================================================
+ Full anti-XSS protection for every trusted URL opened from external
  applications
+ Protection against all the currently known cross-browser exploits
  targeting Firefox (Larholm, Rios, MacManus...)

v 1.1.4.9.070621
==========================================================================
+ Additional checks for toplevel windows (thanks dveditz)
x Work-around for interference of some tab-related extension with
  external URL interception

v 1.1.4.9.070620
==========================================================================
+ Protection against so called "Universal XSS" through JS URLs opened
  by external applications, as explained in
  http://www.xs-sniper.com/sniperscope/IE-Pwns-Firefox.html

v 1.1.4.9
==========================================================================
+ noscript.injectionCheck about:config option adds first-line
  detection for XSS injections in GET requests originated by
  whitelisted sites and landing on top level windows. Value can be:
    0 - never check
    1 - check cross-site requests from temporary allowed sites
    2 - check every cross-site request (default)
    3 - check every request
+ noscript.jsredirectIgnore about:config option enables/disables
  the new "Detect and show JavaScript redirections" feature
+ noscript.jsredirectFollow about:config option enables/disables
  auto-following if a single redirect is detected on a textless page
x "Allow top level sites by default" won't affect sites that have
  been manually forbidden during the current session (to make
  this exception permanent, mark the site as untrusted)

v 1.1.4.8.070618
==========================================================================
+ New placeholders for plugin content can be right clicked like any
  "regular" link, e.g. to "Save Link As..." or "Copy Link Location"
+ Placeholders for plugin content are rendered real-time during load
+ Experimental detection of JavaScript redirections (thanks timeless)
x Fixed glitch in plugin replacement with JS enabled (thanks lulu135)

v 1.1.4.8.070617
==========================================================================
x Fixed untrusted blacklist import bug (thanks MZFuser)

v 1.1.4.8.070606
==========================================================================
+ edu.tw special TLD (thanks twocs)
+ New noscript.autoReload.global about:config preference controls if
  automatic reload affects global allow / forbid (thanks lulu135)
+ New noscript.autoReload.allTabs about:config preference controls if
  automatic reload affacts all or just current tab (thanks lulu135)

v 1.1.4.8.070602
==========================================================================
x Removed console error message on document unload in SeaMonkey

v 1.1.4.8.070530
==========================================================================
x Fixed toggle shortcut regression (thanks therube)

v 1.1.4.8.070529
==========================================================================
x Automatic fixup of trailing dot domains, replacing them on the
  fly with their canonical name (thanks fartron and timeless)
+ "in.th" special TLD (thanks Kridsada)
x Fixed minor notification glitches in Fx 1.5 (thanks arete7)

v 1.1.4.8.070528
==========================================================================
x Performance optimization of options dialog closure for long
  whitelists used in conjunction with long blackists (thanks arete7)
x Automatic notification hiding for background tabs (thanks arete7)
v 1.1.4.8.070523
==========================================================================
x Improved notification consistency with back-forward navigation
x Better compatibility with Google Desktop Search and Paypal email
  notifications

v 1.1.4.8.070522
==========================================================================
+ "org.uy", "net.uy" and "edu.uy" special TLDs (thanks Mauricio)
x Nicer url randomization
x Improved notification on nested URL XSS sanitization
x Fixed external load request detection failing "randomly" in some
  setups (regression from the IETab incompatibility work-around)

v 1.1.4.8.070521
==========================================================================
x Fixed regression from bug 53901 work-around, "Mark as untrusted
  menu" not working anymore (thanks Ricky Ridgdill)

v 1.1.4.8.070520
==========================================================================
x Resolved 070509 conflict with IETab + Tab Mix Plus causing some
  tab-diverted links to open in new windows (thanks to Nuttysman,
  niko322, Alan Baxter)

v 1.1.4.8.070514
==========================================================================
x Sanitized URI randomization (thanks kuza55 for inspiration)
x *Fast* reload also with fragment URI (thanks Martin Focke)

v 1.1.4.8.070513
==========================================================================
x Fixed last minute regression slipped in Anti-XSS GET filter (some
  suspicious query strings entirely removed, rather than sanitized)

v 1.1.4.8.070512
==========================================================================
+ Appearence Option to show/hide "Allow" menu items(thanks mamas6667)
x Updated locales (cs-CZ, en-GB, pl-PL)

v 1.1.4.8.070511
==========================================================================
x Fixed "black boxes" glitch on page unload (thanks jdopple)
x Fixed XSS exceptions must allow blank value (thanks Martin Focke)
x Fixed reloading URLs with hash(thanks Martin Focke)
x Work-around for Minefield bug displaying wrong labels on cloned
  menu items (thanks Itsnow)
x Fixed regression, menu popup not shown by keyboard shortcut when
  both toolbar button and status bar element are hidden (thanks
  niko322)

v 1.1.4.8.070509
==========================================================================
+ noscript.xss.trustExternal about:config preference controls if
  anti-XSS filters should be bypassed for URLs opened from external
  applications like email clients (default false)
+ noscript.xss.trustTemp about:config preference controls if anti-XSS
  should be bypassed if URLs are opened from "temporary allow"ed
  sites (default true, thanks Salim for suggestion)
x Wikipedia default XSS exception tweaked to include apostrophes in
  titles (thanks Alan Baxter for report)

v 1.1.4.8.070505
==========================================================================
x Better compatibility with Google Toolbar's translation service

v 1.1.4.8.070502
==========================================================================
x Fixed Linux Flash blocking crash when placeholders are active
  (thanks mastro for report)
x (Hopefully) Last  bug fix in referrer XSS sanitization (thanks
  Alan Baxter)

v 1.1.4.8.070501
==========================================================================
x Further bug fix in referrer XSS notification template

v 1.1.4.8.070502
==========================================================================
x Fixed Linux Flash blocking crash when placeholders are active
  (thanks mastro for report)
x (Hopefully) ultimate fix in referrer XSS sanitization (thanks  Alan
   Baxter)

v 1.1.4.8.070501
==========================================================================
x Further cosmetic bug fix in referrer XSS notification template

v 1.1.4.8.070430
==========================================================================
x Localization updates and release QA

v 1.1.4.8.070429
==========================================================================
+ Shortcut to show NoScript menu works even if status bar icon and
  toolbar button are both hidden
x Fixed "Options..." button not working if status bar was hidden
  (thanks napiertt and joymus)
x Fixed regression in XSS notifications due to 070427 fix (some XSS
  suspicious requests were silently cancelled, rather than sanitized
  and notified)
x Fixed "empty Untrusted menu" (thanks niko322)

v 1.1.4.8.070428
==========================================================================
x Fixed using keyboard shortcut always shows status icon
x Fixed closing toolbar button menu always shows status icon

v 1.1.4.8.070428
==========================================================================
x Fixed using keyboard shortcut always shows status icon
x Fixed closing toolbar button menu always shows status icon

v 1.1.4.8.070427
==========================================================================
x Fixed referrer sanitization glitch (thanks Alan Baxter)

v 1.1.4.8.070426
==========================================================================
x Fixed Refresh Blocker and Tab Mix plus redirection permissions
  incompatibility (thanks tabasco.kfarmer and Mc)
x Fixed SeaMonkey "removed content" placeholder (thanks therube)
x Fixed Seamonkey "Reset" button placement (thanks Phil Chee)

v 1.1.4.8.070425
==========================================================================
+ Experimental "noscript.contentBlocker" about:config preference
  to block Java, Flash and other plugins in whitelisted sites as well
x Fixed bug in toolbar button Untrusted submenu (thanks Steve1000)
x Better XSS management on whitelisting automatic reloads (XSS checks
  for whitelisting reloads can be disabled by toggling off the
  "noscript.xss.trustReloads" preference in about:config)

v 1.1.4.8.070424
==========================================================================
+ "Reset" command in Options Dialog resets options to their default
  values (thanks Frank Myers)
+ Always bypass cache on XSS Unsafe Reload (thanks Jussi Lahtinen)
+ Serbian translation (thanks Ivan Pesic)
x Improved Wikipedia XSS exception

v 1.1.4.8.070423
==========================================================================
+ Lituanian (thanks to Mindaugas Jakutis)
x Additional localization updates and minor fixes

v 1.1.4.8.070422
==========================================================================
+ Forbid META redirection inside NOSCRIPT element in Seamonkey too
+ XSS notifications for Fx 1.5 too
+ XSS status bar icon appears when XSS activity is detected:
  left/right click opens XSS menu, middle click hides icon
+ META redirection status bar icon appears when needed:
  click follows redirection once, shift+click remembers for session,
  middle click hides icon
x Fixed a regression (070420 only) with Import/Export buttons broken
x Fixed toolbar button removal messing with other NoScript menus
  (thanks niko322 for report)
x Fixed file:// URL item not showing anymore regression
  (thanks Shingoshi for report)
x Fixed regression in Option Dialog: removing from whitelist didn't
  work if applied to just one site (multiple batch did work, though)
  - thanks Alan Baxter for report

v 1.1.4.8.070420
==========================================================================
x Fixed "Forbid other plugins implies Forbid Flash" - thanks Dwedit
x Fixed Options dialog issues with Fx 1.5

v 1.1.4.8
==========================================================================
x Minor improvements in XSS exceptions regular expression parsing
x Fixed last-minute Seamonkey breakage (many thanks therube!!!)

v 1.1.4.8RC3 (1.1.4.7.070420.1)
==========================================================================
x Further refinement in XSS filters (thanks niko322)

v 1.1.4.8RC2 (1.1.4.7.070420)
==========================================================================
x Fixed 2nd level domain toggle option (thanks therube)
x Fixed multi-window feedback synchronization (thanks lakrids)

v 1.1.4.8RC1 (1.1.4.7.070419)
==========================================================================
+ Option to block META refresh inside NOSCRIPT elements: a prompt
  will be shown asking if you want to follow the redirect, and
  choice will be remebered across the current session
  (noscript.forbidMetaRefresh.remember preference, dismissing the
  notification with its close button means "keep blocked")
  thanks rsnake and Alan Baxter for suggestion (Firefox 2 only)
+ "XSS-Unsafe Reload" menu item in the XSS notification bar popup
+ "XSS FAQ" menu item in the XSS notification bar popup
+ noscript.xss.notify.subframes about:config preference to control
  notification for XSS in subframes (default false, suppressed)
+ Option to toggle sites by (2nd level) domain, rather than full URL
x Default "Show NoScript menu" shortcut changed to Ctrl+Shift+S
  (Ctrl+Shift+X conflicting with "change direction" Firefox command)
x moved "Show Console" from XSS notify button to an "Options" popup
x Options Dialog reorganization
x Right click on toolbar button and status bar elements opens menu
x Mass-removal speedup in Options Dialog|Whitelist

v 1.1.4.7.070414
==========================================================================
+ Finer grained treatment for data: and javascript: urls in frames,
  whose domain is considered the one of the nearest window ancestor
  having a meaningful web address (thanks to Vectorspace for his
  suggestion)


v 1.1.4.7.070413
==========================================================================
+ "noscript.globalwarning" about:config hidden preference controls
  wether a warning prompt should be issued or not whenever user
  switches on scripts globally (true by default)
x Improved Anti-XSS Protection compatibility with some message boards
  (special thanks to Aerik and Olaf Schweppe)

v 1.1.4.7
==========================================================================
+ First "official" anti-XSS release
+ New plugin content detection algorithm defeats latest aggressive
  Flash cloaking strategies (e.g. http://www.hardocp.com/ )
+ Improved subframe detection, includes object elements (e.g.
  http://www.operamini.com/demo/ )
+ Improved fast reload, preserving form input data.
+ Minefield full compatibility

v 1.1.4.6.070409
==========================================================================
x Fixed weird intermittent interference with dynamic JavaScript
  inclusion via document.write() used by some JavaScript libraries
  (e.g. Prototype, Dojo or Tiny-MCE)

v 1.1.4.6.070404
==========================================================================
x Drastic reduction of XSS redirection-related false positives

v 1.1.4.6.070325
==========================================================================
x Fixed regression, leak happening on window closure (10x pirlouy)
x Fixed regression, file:// entries missing from menus (10x therube)

v 1.1.4.6.070322
==========================================================================
+ Safer behaviour on reloading/whitelisting a XSSed page

v 1.1.4.6.070321
==========================================================================
+ XSS sanitization of the whole request URL
+ XSS sanitization of the referrer URL
+ XSS filters exceptions for some "trusted" addresses requiring
  cross-site complex query strings (controlled by a regexp in the
  noscript.filterXExceptions hidden preference, defaults to Google
  search and Yahoo search)
+ Better general search engine compatibility with anti-XSS filters
x Several performance optimizations

v 1.1.4.6.070318
==========================================================================
+ First anti-XSS countermeasures round: "default deny" sanitization
  is applied to every request coming from an unknown (restricted)
  site and landing on a trusted (scripting allowed) site:
  1. GET requests with a query string get all the matches for the
     noscript.filterXGetRx regular expression replaced with space
  2. POST requests are turned into no-data GET
  3. Every request filtering action is logged to the Console, while a
     short notification is issued through the info-bar* (if enabled)
     *Info-bar notifications require Fx 2.0 or above
  Behaviours 1 and 2 can be controlled from NoScript Options|Advanced

v 1.1.4.6.070317
==========================================================================
x Customizable keyboard shortcuts (about:config - noscript.keys.*)
x Quick toggle (by shortcut or toolbar) behaviour changed to
  *Temporarily* Allow / Forbid (old behaviour can be restored by
  setting the about:config noscript.toggle.temp pref to false)

v 1.1.4.6.070316
==========================================================================
+ Super fast reloading after toggling permissions
+ Hebrew (thanks to Asaf Bartov)
x removed mozillazine.org and mozilla.org from the default list
  (thanks Wladimir Palant)
x Fixed a resource deallocation issue (thanks Higmmer)
x Fixed a potential slowdown on startup
x Removed logging code slipped in a release

v 1.1.4.6.070304
==========================================================================
+ Added many ".id" special TLDs (thanks FatMan)
x Fixed localization-related bugs (e.g. untrusted menu showing just
  the first character for each site)
x Other minor bug fixes

v 1.1.4.6.070302
==========================================================================
+ SeaMonkey compatible keyboard shortcuts
+ Added a couple of about:config options (noscript.keys.*) to disable
  keyboard shortcuts: just blank their values. Notice: changing the
  option value to a different key is possible, but it  doesn't
  actually work (yet?)
x Fixed a regression in the "Export" functionality

v 1.1.4.6
==========================================================================
x Stable "blacklist" release
+ Vietnamese (thanks tonynguyen)
+ Galician (thanks roebek)

v 1.1.4.5.070222
==========================================================================
x Fixed a "Mark as untrusted" menu item bug

v 1.1.4.5.070210
==========================================================================
x Fixed a bug affecting some locales on Mozilla/SeaMonkey/Fx 1.0

v 1.1.4.5.070207
==========================================================================
x "Forbid" doesn't mark the site as untrusted by default anymore (old
  behaviour can be restored via "noscript.forbidImpliesUntrust" pref)

v 1.1.4.5.070127
==========================================================================
+ Experimental blacklist ("Mark as untrusted" + "Untrusted|Allow")
+ Global shortcut toggling top level status: "CTRL + SHIFT + \"
+ Global shortcut to NoScript menu: "CTRL + SHIFT + X"
+ Extra control on NOSCRIPT elements rendering
+ "Allow Globally" menu item is optional now (shown by default)
+ "Link Local Files" optional permission for trusted sites
+ "noscript.excaps" hidden pref for CAPS conflicts resolution (e.g.
  with Google Toolbar and other Google extensions)
+ "Temporarily allow top-level sites by default" new preference
  (not advised and disabled by default)
+ Menu items referring to current location are hilighted in bold
+ New preference in Options|General controls toolbar button reaction
  to left click (default none, optional toggles top level status)
+ net.uk, com.uk and org.uk pseudo TLDs

v 1.1.4.5.061231
==========================================================================
x Fixed "cancel with non-failure status code" assertion
v 1.1.4.5.061221

==========================================================================
+ Minefield (3.0a2) support
+ Fixed plugin placeholder trunk issue (thanks timeless for report)
+ added *.ua "special" TLDs (thanks Devan Chetty)

v 1.1.4.5.061206
==========================================================================
+ Added org.in and co.sy to the "special" TLDs list
x Fixed some bookmarklet quirks (not in trunk, though)
x Fixed a bug in "uk.xyz" special TLDs management

v 1.1.4.5.061030
==========================================================================
x Minefield fix: feedback during/after document loading (bug 335251)
x Minefield fix: bookmarklet on the fly enablement (bug 351633)
x Restored Flock compatibility

v 1.1.4.5
==========================================================================
+ Some user interface tweakings in the Options UI
+ Several optimizations
x Fixed XML issue
x Fixed BFCache side-effects on certain pages
x Fixed a timing bug in stand-alone plugin interception

v 1.1.4.4
==========================================================================
+ be-BY (Belarusian) thanks to DRKA
+ JavaScript links fixing made compatible with AllPeers
+ Better interception of plugin content
x Fixed a plugin placeholder bug (thanks to tanstaafl for reporting)
x Fixed interception of xml and xhtml content (thanks to Poly Peptide, hrikjsen,
  Redoute and johnnydrinkwater for reporting)
x Fixed some strict warnings (thanks to timeless for reporting)

v 1.1.4.3
==========================================================================
+ Emulated Firefox 1.0.x top-level plugin content blocking behaviour
+ uk-UA (Ukrainian) thanks to MozUA
+ th-TH (Thai) thanks to Qen
+ fa-IR (Persian) thanks to Pedram Veisi
+ el-GR (Greek) thanks to Sonickydon
+ en-GB (English GB) thanks to Ian Moody
+ hr-HR (Croatian) thanks to Krcko
x Other updated translations
x Fixed plugin content reloading bug

v 1.1.4.2
==========================================================================
+ Notifications Firefox 2+ compatible
x Fixed whitelist import bug (phantom resource:xyz entry)
x Fixed "removeLinkFixer" warning (thanks to Pablo)

v 1.1.4.1
==========================================================================
+ Left clicking on NoScript toolbar button toggles permissions for
  current top-level site
+ Shift+Click on a Java/Flash/Object placeholder temporarily hides it
+ "Attempt to fix JavaScript links" now skips "real" hash URLs
+ Added live.com to the default whitelist (for MS webmails)
x Removed a leak caused by "Attempt to fix JavaScript links" option
x Fixed Macedonian translation

v 1.1.4
==========================================================================
+ "Allow sites opened through bookmarks" option
+ Notification delay in seconds can be changed through the
  "noscript.notify.hideDelay" about:config preference
x Removed bogus JS messages on SeaMonkey startup
x Fixed bookmarklet support to work with the new "Places" code,
  the bookmark sidebar and the bookmark manager
x Added mozilla.com to the default whitelist
x Always honour "Attempt to fix JavaScript links" option (links
  were processed anyway if "Forbid <a...ping>" was enabled)

v 1.1.3.9
==========================================================================
x Fixed temporary memory leak when loading pages containing plugins
  (many thanks to Steve England)
x JavaScript links should not be "fixed" when scripts are globally
  allowed (thanks Lt. Worf)

v 1.1.3.8
==========================================================================
x Another emergency release to fix Babelzilla bugs with Asian
  languages (mass-reverting to 1.1.3.5 properties files to be sure).
- Removed permanent whitelist (all the web sites can can
  be forbidden from the UI, no more about:config need)

v 1.1.3.7
==========================================================================
x Fixed some localization bugs with Hungarian and other languages

v 1.1.3.6
==========================================================================
+ "Fix JavaScript links" option: enabled by default, attempts to
  automatically turn JavaScript links into regulars anchors on load
+ Advanced options "Allow <a ping...>" on trusted sites (defaults to
  the browser settings) and  "Forbid <a ping...>" on untrusted sites
  (default yes) give user control on the new, debated "ping" anchor
  attribute

+ New hidden (about:config) boolean preference "noscript.consoleDump"
  controls if blocked contents must be logged to the console (false
  by default)
+ Slovak (thanks to Slovak Soft)
+ Romanian (thanks to Ultravioletu)
+ Hungarian (thanks to LocaLiceR)
+ Chinese Traditional (thanks to Chiu Po-Jung)

v 1.1.3.5
==========================================================================
+ "Truncate title" option: enabled by default, even on whitelisted
  sites, is a quick & dirty work around for Firefox DOS bug 319004
+ "com.xy" 2nd level domains are always considered special TLDs
+ Other special TLDs added
x Fixed "Forbid other plugins" semantics: Java and Flash should
  remain allowed unless their specific "Forbid" option is flagged.
x Fixed portuguese locale bug

v 1.1.3.4
==========================================================================
+ Flock support
+ Finnish (thanks to Mika Pirinen)
+ Norwegian bokmål (thanks to Håvard Mork)

v 1.1.3.3
==========================================================================
+ Placeholder icon can be hidden (NoScript Options|Advanced)
+ Message bar notifications can be set to go away automatically after
  5 seconds
+ Bulgarian (thanks to Georgi Marchev)
+ Simplified Chinese (thanks to George C. Tsoi)
+ Russian (thanks to Alexander Sokolov)
+ Turkish (thanks to Engin Yazılan)
x Best effort XPCOM auto registration on Mozilla Suite installation
x Minor menu formatting glitches removed
x Some about:xxx URLs added to the default whitelist

v 1.1.3.2
==========================================================================
+ Bookmarklet support. It allows JS on current page just for the
  bookmarklet execution lifespan. If you don't want or don't need it,
  turn on "NoScript Options|Advanced|Forbid Bookmarklets"
x Fixed right-click status label crash affecting pre-1.8 browser. Now
  status label context menu works on Mozilla and Firefox 1.0.x too.

v 1.1.3.1
==========================================================================
+ Option to skip confirmation when temporarily unblocking objects
+ Optional status bar label (with Firefox-only context menu)
+ Support for Unicode domains
x Work-around for Firefox bug #307678 (dialogs freeze)
x Handle about:neterror and about: (help) "always allowed" exception

v 1.1.3
==========================================================================
+ Toolbar button
+ Java/Flash/Plugin content can be temporarily allowed (for the
  current tab) with a left click on its placeholder
+ Further optimizations in site matching
+ Japanese (thanks to beerboy)
+ Polish (thanks to Lukasz Biegaj)
+ Catalan (thanks to Joan-Josep Bargues)
+ Czech (thanks to Petr Jirsa)
x Bug fix: "Allow JavaScript Globally" didn't affect Java, Flash and
  Plugin immediately

v 1.1.2.20050901
==========================================================================
x Bug fix: temporarily allowed sites were not removed if no
  permission change happened in the following session

v 1.1.2
==========================================================================
+ Java/Flash/Plugins blocking works in Mozilla Suite / SeaMonkey too
+ Huge performance (up to 100x) improvements in policy matching
+ More consistent temporary sites handling (allowing a temporary
  domain while subdomains are allowed, now forbids ancestors of that
  domain but not its subdomains anymore on restart)
+ Added "ar.com" to the list of "special" TLDs
x No more "phantom" http:// and https:// entries in whitelist

v 1.1.1
==========================================================================
x Fixed a bug with whitelist synchronization from the Options window
x Fixed little Spanish locale issue

v 1.1.0
==========================================================================
+ Customizable message position, top or bottom (new default)
+ Customizable audio sample for feedback
+ (Firefox only) Advanced options to forbid Java™, Flash® and other
  plugins (Java™ forbidden by default, since many users don't
  know the difference between Java and JavaScript)
+ Advanced options to allow rich-text clipboard on trusted sites
+ Portoguese translation (thanks to Dario Ornelas)
x New (less ambiguous) "partially allowed" icon
x Audio feedback off by default
x Statusbar icon hidden status persists across sessions
x Proper jar: scheme handling (will allow per-domain selection when
  Firefox bug preventing it is patched -
  see https://bugzilla.mozilla.org/show_bug.cgi?id=298823)
x jar: scheme can be allowed only temporarily (see above)
x No more browser activity stop after permission changes

v 1.0.9
==========================================================================
+ Temporarily allow URLs (for current session only): temporary items
  are shown in italics font
+ Clean uninstall in Deer Park
+ Added jar: to the default white-list, to allow about:plugin
  and other "special" URLs to work out-of-the-box
x Better work-arounds for Firefox synchronization bugs
x Fixed conflict when a "View Source" window was open

v 1.0.8
==========================================================================
+ Whole addresses are shown when a port number is specified, no
  matter which the Appearance options are, since enabling a domain
  doesn't enable it for non-standard ports (thanks to jayvdb for
  suggestion)
+ Stop every browser activity before changing policies (this should
  be a workaround for most crashes dued to Firefox CAPS bugs)

v 1.0.7
==========================================================================
+ "Popup blocker" style notification message (Firefox only)
+ Autoreload synchronizes every view whose permissions have changed
+ Spanish translation (thanks to Alberto Martínez)
x Improved subframes management in the contextual menu
x Better UI support for "special" TLDS like co.uk, co.nz and others
x Improved support for numeric addresses
x Audio feedback with more discreet sound effect :-)

v 1.0.6
==========================================================================
+ Whitelist import/export (thanks hsmwrv for suggestion)
+ Only 2nd level (base) domains shown by default in the "Allow" menu
  items (easier operation for non-geeks; geeks can still revert to
  the old fine grained interface using the "Appearance" options)
+ Blocked scripts audio feedback (thanks to Markus for suggestion)
+ about:config/noscript.permanent can be changed live (no FF restart)
x chrome content URL are properly whitelisted (XUL error pages OK)
x Fixed empty permanent list problem (thanks to Patrick and Oremina
  for report)

v 1.0.5
==========================================================================
+ "Appearance" option to hide/show popup menu and status bar icon; if
  you decide to hide both, options are still reachable through the
  Extension Manager context menu (thanks Dick Minor for suggestion)
+ 2nd level domain trick doesn't clutter Options Dialog anymore
  (http[s]:// auto-prefixed domains are hidden in whitelist)
x Fixed menu layout (thanks to TheOneKEA for report)

v 1.0.4
==========================================================================
+ Automatically creates http:// and https:// prefixed URLs when a 2nd
  level domain (xyz.com) is allowed, as a workaround for Firefox not
  matching URLs with a raw 2nd level domain if no protocol is listed
  (thanks to Laura for report)
+ "Allowed" status feedback for chrome:// URLs (pacanukeha)
x Core functionality refactored in a XPCOM service

v 1.0.3
==========================================================================
+ Feedback about actual presence of script elements in current page
  (white "S" icons if no script tag is found, while number of found
  tags is shown in the tooltip - thanks to Volker for suggestion)
+ Feedback about partial permissions in pages containing subframes
  (a broken red "stop" sign means only some frames are forbidden)
+ Events are coalesced for better performance and stability
+ Improved options dialog usability (new items are ensured visible
  and "delete" key performs mouse-less site removal)
+ Added hotmail/msn/passport domains to default whitelist (thanks to
  Swann for suggestion)
+ Added googlesyndication.com and noscript.net to permanent list ;)
x Fixed whitelist options dialog sometimes "forgetting" recently
  added items (thanks to TheOneKEA, Bill Mayer and Bill Selden for
  their reports)

v 1.0.2
==========================================================================
+ Option dialog shortcuts (thanks to Ulysses for suggestion)
+ French translation (thanks to Xavier Robin)
x NoScript doesn't ignore port number in URLs anymore
x moved "Options" and "About" items to the top of status bar menu
  (thanks to Filipp0s for suggestion and for the smaller icons too)
x added mozillazine.org and gmail.google.com to default allow list
x no duplicates in menu when multiple frames share the same
  ancestor domain (e.g. mozillazine.org)

v 1.0.1
==========================================================================
+ Contextual menu for easy operation in statusbar-less windows
+ Current page is automatically reloaded when permissions are changed
+ Support for implicit subdomain inclusion (e.g. if you add
  mozilla.org, you allow www.mozilla.org, addons.mozilla.org etc.)
+ German translation (thanks to my friend Thomas Weber)
x Fixed localization issue
x Work around for Firefox occasional crashes

v 1.0
==========================================================================
First public release
```
