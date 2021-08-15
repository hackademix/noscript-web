---
title: Usage
nav: 3
---

[[toc]]

### Getting started

First of all, [install NoScript in your browser]({{ "/getit" | url }})!

Don't forget to allow NoScript to __run in Private / Incognito windows__, either when prompted on installation or later in the extensions manager option. Otherwise you won't find NoScript where you need it the most.

After installation, you can quickly access NoScript: {% screenshot "icon", "Clicking on NoScript toolbar icon" %}
* __on a desktop OS__, either
  1. by left-clicking the NoScript toolbar icon...
  2. ...or by right-clicking on any web page and selecting the NoScript contextual menu item (most useful on popup windows where the toolbar is hidden)
* __on Firefox for Android__,
  by selecting _Add-ons_ in Firefox's main menu and tapping the NoScript entry.


### Trust levels

By using NoScript's popup UI you can assign any website or sub-resource origin (e.g. "cnn.com" or "ads-twitter.com") either one of 4 preset trust levels or a per-site customized level.
{% screenshot "trust-levels", "Working with trust levels in NoScript's popup UI" %}
- __DEFAULT__, as the name implies, is the fallback low trust level which NoScript automatically enforces on any not yet configured website. This way unknown sites you visit for the first time are unable to perform any harmful action against you.
- __Temp. TRUSTED__ is the high trust level you can assign to sites requiring JavaScript or other active (and potentially harmful) capabilities to be enabled in order to work. **_Temp._** stands for "Temporarily", meaning that the trust level for this site gets reset to __DEFAULT__ as soon as the browser is closed or if you use the _Revoke Temporary Permissions_ ![Revoke Temporary Permissions]( {{ "/img/ui/ui-revoke-temp64.png" | url }}){.uibtn} button. This is the preferred way to tentatively enable sites which you need to work just now but you're unlikely to visit every day.
You can also assign this level to all the sites you _currently_ listed in the popup UI by using the _Set all on this page to Temporarily TRUSTED_ ![Set all on this page to Temporarily TRUSTED]( {{ "/img/ui/ui-temp-all64.png" | url }}){.uibtn} button.
- __TRUSTED__ is the permanent high trust level, enabling JavaScript and other active capabilities and persisting across browser restarts: use it only for sites which you really trust and use frequently.
- __UNTRUSTED__ is the zero-trust level, which blocks every capability (including rendering of plain HTML frames and alternate &lt;noscript&gt; content). It may be useful to flag sites which are definitely not welcome in your browser.
- __CUSTOM__ is a special level which can be tailored specifically for each site by turning on and off individual capabilities, such as _script_, _object_, _media_, _frame_, _font_, _webgl_, _fetch_, _ping_, _noscript_, _unrestricted CSS_, _other_. Capabilities which the site has tried to use, being blocked by NoScript, are highlighted in red. The temporary/permanent behavior of this level is controlled by a tiny clock-shaped toggle.

### Preset customization
{% screenshot "preset-customization", "Customizing the DEFAULT preset." %}
Even though this is not recommended, power users may customize also the built-in presets, from _NoScript Options>General>Preset customization_. The modified capability permissions will be automatically applied to all the sites which the trust level preset has been or will be assigned to.

### Per-site preferences editor
{% screenshot "per-site-prefs", "Configuring NoScript's per-site permissions" %}
You usually assign trust levels on the fly to the current site and its sub-resources from the popup UI.

But you may also want to assign a different trust level to a site you've previously configured, or to configure new sites without actually visiting them.

In order to do that, just use the _NoScript Options>Per-site permissions_ panel.
To make NoScript "forget" the configuration for a certain site configuration, just assign it the DEFAULT preset.

### Bulk-disabling restrictions

Sometimes you are in a hurry on a complex workflow, spanning multiple redirections through different websites, which must succeed no matter what.

One example may be a credit card payment, bouncing from an e-commerce site to one or more payment processor web services.

In this case you may want to temporarily relax all the restrictions normally enforced by NoScript for all the sites loaded in the current tab until said tab is closed, by using the __Disable restrictions for this tab__  ![Disable restriction for this tab]( {{ "/img/ui/ui-tab64.png" | url }}){.uibtn} button.

More radical (and __not__ recommended) is the __Disable restrictions globally (dangerous)__ ![Disable restrictions globally (dangerous)]( {{ "/img/ui/ui-global64.png" | url }}){.uibtn} button: using it amounts to disabling NoScripts permanently on any site/tab, keeping enabled the XSS filter only. Don't do it!