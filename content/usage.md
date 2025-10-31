---
title: Usage
nav: 3
---

[[toc]]
### Getting started
{% screenshot "chromium-conf", "Pinning icon and configuring permissions (Chromium)" %}

First of all, [install NoScript in your browser]({{ "/getit" | url }})!

Don't forget to allow NoScript to __run in Private / Incognito windows__, either when prompted on installation or later in the extensions manager option.

Otherwise you won't find NoScript where you need it the most.

For the same reason, __on Chromium-based browsers__, you'll probably want to __Pin NoScript's icon to the toolbar__, in order to have a visual indicator of what is going on with current page's permissions and a fast way to configure them.

{% screenshot "icon", "Clicking on NoScript toolbar icon" %}

After installation, you can quickly access NoScript:
* __on a desktop OS__, either
  1. by left-clicking the NoScript toolbar icon...
  2. ...or by right-clicking on any web page and selecting the NoScript contextual menu item (most useful on popup windows where the toolbar is hidden)...
  3. ... or by using the _Alt+Shift+N_ [keyboard shortcut](#keyboard-shortcuts).
* __on Firefox for Android__,
  by selecting _Add-ons_ in Firefox's main menu and tapping the NoScript entry.


### Trust levels

By using NoScript's popup UI you can assign any website or sub-resource origin (e.g. "cnn.com" or "ads-twitter.com") either one of __4 preset trust levels__ or a __per-site customized level__.
{% screenshot "trust-levels", "Working with trust levels in NoScript's popup" %}
- {% ui-icon "no", "__DEFAULT__", true %}, as the name implies, is the fallback low trust level which NoScript automatically enforces on any not yet configured website. This way unknown sites you visit for the first time are unable to perform any harmful action against you.
- {% ui-icon "temp", "__Temp. TRUSTED__", true %} is the high trust level you can assign to sites requiring JavaScript or other active (and potentially harmful) capabilities to be enabled in order to work. **_Temp._** stands for "Temporarily", meaning that the trust level for this site gets reset to __DEFAULT__ as soon as the browser is closed or if you use the {% ui-icon "revoke-temp", "_Revoke Temporary Permissions_" %} button. This is the preferred way to tentatively enable sites which you need to work just now but you're unlikely to visit every day.
You can also assign this level to all the sites you _currently_ listed in the popup UI by using
the {% ui-icon "temp-all", "_Set all on this page to Temporarily TRUSTED_" %}  button.
- {% ui-icon "yes", "__TRUSTED__" ,true %} is the permanent high trust level, enabling JavaScript and other active capabilities and persisting across browser restarts: use it only for sites which you really trust and use frequently.
- {% ui-icon "black", "__UNTRUSTED__" , true %} is the zero-trust level, which blocks every capability (including rendering of plain HTML frames and alternate &lt;noscript&gt; content). It may be useful to flag sites which are definitely not welcome in your browser.
- {% ui-icon "custom" "__CUSTOM__", true %} is a special level which can be tailored specifically for each site by turning on and off individual capabilities, such as _script_, _object_, _media_, _frame_, _font_, _webgl_, _fetch_, _ping_, _noscript_, _unrestricted CSS_, _other_. Capabilities which the site has tried to use, being blocked by NoScript, are highlighted in red. The temporary/permanent behavior of this level is controlled by a tiny clock-shaped toggle.

#### Contextual Policies
{% screenshot "contextual", "Example: contextual policy for Twitter embedded timeline" %}

Contextual policies let you assign different permissions (or "enable different capabilities", in NoScript's parlance) to a certain site depending on its context, i.e. which is the top level site (the address currently shown in the navigation bar).

For instance, you might want to enable scripts from _twitter.com_ only if you're visiting _maone.net_ (in order to read the embedded tweet feed) but not elsewhere, because you don't like Twitter to track you everywhere you go:

1. While on _maone.net_, open NoScript's popup and select CUSTOM as the policy for twitter.com. You'll see a new drop down box, initially set to ANY SITE.
2. Remove all the capabilities (e.g. script) you don't want Twitter to use on ANY SITE (notice that when CUSTOM is selected first time, the capabilities from the previously selected preset get copied, so if it was DEFAULT you can probably leave them that way).
3. Then select _...maone.net_ from the drop down, and switch script, fetch and frame (the capabilities outlined in red, meaning they're are needed by twitter.com) on.

You're done: scripts from twitter.com are allowed to run only when the main site displayed is __maone.net__.
You can repeat this on any website (including twitter.com itself) where you want Twitter scripts and subdocuments to work normally.
If you change your mind, you can reset some or all the contextual policies you previously set in the CUSTOM permissions deck, either on from the popup (only for the current context) or from the _NoScript Options>Per-site_ permissions panel, where all the context sites you had configured plus the _ANY SITE_ default are listed in the _Enable these capabilities when top page matches..._ dropdown.

### Preset customization
{% screenshot "preset-customization", "Customizing the DEFAULT preset." %}
Even though this is not recommended, power users may customize also the built-in presets, from _NoScript Options>General>Preset customization_. The modified capability permissions will be automatically applied to all the sites which the trust level preset has been or will be assigned to.

#### LAN Protection{.subh}

Simply put, the LAN capability lets documents coming from the public Internet (AKA World Area Network / WAN) to link / send requests to hosts inside your Local Area Network (LAN), which is pretty much what they can do now, allowing so called cross-zone CSRF/XSS attacks.
By keeping it disabled (the factory setting in the DEFAULT and UNTRUSTED presets), you're replicating [the Application Boundaries Enforcer feature](https://classic.noscript.net/abe/index.html) from "Classic" NoScript, without the hassle of going through ABE's firewall-like rules when you need to set an exception, which now is just a matter of checking the LAN capability box.

### Per-site preferences editor
{% screenshot "per-site-prefs", "Configuring per-site permissions (light scheme)" %}
You usually assign trust levels on the fly to the current site and its sub-resources from the popup UI.

But you may also want to assign a different trust level to a site you've previously configured, or to configure new sites without actually visiting them.

In order to do that, just use the _NoScript Options>Per-site permissions_ panel.
To make NoScript "forget" the configuration for a certain site configuration, just assign it the DEFAULT preset.

### Bulk-disabling restrictions
{% screenshot "unrestricted", "Restrictions disabled on current tab" %}
Sometimes you are in a hurry on a complex workflow, spanning multiple redirections through different websites, which must succeed no matter what.

One example may be a credit card payment, bouncing from an e-commerce site to one or more payment processor web services.

In this case you may want to temporarily relax all the restrictions normally enforced by NoScript for all the sites loaded in the current tab until said tab is closed, by using the {% ui-icon "tab", "__Disable restrictions for this tab__" %}  button.

More radical (and __not__ recommended) is the {% ui-icon "global", "__Disable restrictions globally (dangerous)__" %} button: using it amounts to disabling NoScripts permanently on any site/tab, keeping enabled the XSS filter only. Don't do it!

### Cross-site protections
NoScript provides also protection mechanisms independent from core script blocking: most notably, its __XSS Filter__ and __Cross-tab Identity Leak Protection__

#### XSS Filter
{% screenshot "xss-warning", "NoScript's XSS warning dialog" %}
NoScript's __XSS filter__ (also known as "Injection Checker") has been the first one and always the most effective available in a web browser.
It prevents requests originating from a certain (possibly malicious) web site from injecting and executing code in a different web site, an attack known [as Cross-Site Scripting (XSS)](https://en.wikipedia.org/wiki/Cross-site_scripting). When a suspicious request is detected, a warning dialog is shown for the user to block or allow it, either temporarily or permanently.
Exception can be managed from _NoScript Options>Advanced>XSS_


#### Cross-tab Identity Leak Protection
NoScript's __Cross-tab Identity Leak Protection__ (or "TabGuard") is an experimental countermeasure against the [Targeted Deanonymization via the Cache Side Channel](https://leakuidatorplusteam.github.io/) attack by Mojtaba Zaheri, Yossi Oren and Reza Curtmola, presented at [Usenix Security in August 2022](https://www.usenix.org/conference/usenixsecurity22/presentation/zaheri).
{% screenshot "tabguard-warning", "NoScript's Potential Identity Leak dialog" %}
It is loosely inspired by the Leakuidator+ browser extension proposed by the authors as a defense, but it's designed to better integrate with Firefox and the Tor Browser and provide protection against variants of the attack not covered yet. When triggered, i.e. on cross-site requests across related tabs, TabGuard removes the authentication headers from the request and shows a red `TG`{.badge} badge near its icon. If you're unexpectedly logged out from a website loaded in a new tab and you can see this badge, you just need to _manually_ reload the page or follow any link, and the authorization will be automatically restored. Only in the rare occurrence of cross-tab cross-site POST requests, which might not be consistently replayed after the fact, TabGuard suspends the load with a __Potential Identity Leak__ warning to provide users with the ability to either "Load anonymously" (preventing the attack but also logging out from the target site) or "Load normally", which may be required by some legitimate cross-site workflows such as online payments, single sign-on and 3rd party authentication systems.
This protection is enabled by default on any Private Browsing window (and therefore in the Tor Browser and in Mullvad Browser), but can be disabled or enabled globally from the _NoScript Options>Advanced_ panel.

### Keyboard Shortcuts
You can open and navigate all the NoScript UI by using the following keyboard shortcuts:
````
Alt+Shift+N     start (open NoScript Popup)
Arrows/Tab      move around
DEL/BKSPC/0     DEFAULT
+               TRUSTED
-               UNTRUSTED
C               CUSTOM
T               Temp
S               HTTPS-lock
HOME            jump to the toolbar
ESC/ENTER       Close the UI
R               Reload current page without closing the UI
Shift+G         Globally disable restrictions
Shift+T         Disable restrictions on this tab
P               Set all on this page to Temp. TRUSTED
F               Forget temporary permissions
````
### User-contributed guides

* [A guide to using NoScript 10.x](https://blog.jeaye.com/2017/11/30/noscript/)
* [A basic guide to NoScript 10](https://noscript.net/forum/?t=23974)

### Limitations on Chromium
The API exposed by Chromium to browser extensions is not as powerful and flexible as its Firefox counterpart. When Mozilla switched for "all powerful" add-ons to the WebExtensions tech (their "clone" of the Chrome Extensions tech), they contracted me  to [help design and implement](https://bugzilla.mozilla.org/buglist.cgi?classification=Client%20Software&classification=Developer%20Infrastructure&classification=Components&classification=Server%20Software&classification=Other&query_format=advanced&product=WebExtensions&list_id=17331459&email1=maone&emailtype1=substring&emailassigned_to1=1&resolution=FIXED) improved versions of `webRequest` and other APIs, specifically suited to support privacy and security extensions like NoScript.
This already provides a significant advantage to Firefox in Manifest V2, and the difference [gets worse with Manifest V3](https://www.eff.org/deeplinks/2021/12/googles-manifest-v3-still-hurts-privacy-security-innovation), especially hurting privacy and security innovation.
Therefore, even if NoScript is compatible with most browsers, some of its most advanced features are available only on Firefox and its derivatives, such as the [Tor Browser](https://torproject.org).
In details, these are the current limitations imposed to NoScript by Chromium-based browsers such as Google Chrome, Edge or Vivaldi:
* __The Injection Checker XSS filter__ ("Sanitize cross-site suspicious requests") __is disabled__ because there's no asynchronous blocking webRequest API
* __The Cross-tab Identity Leak Protection (TabGuard) is unavailable__ (same reason as above)
* __The LAN protection works for numeric IPs but cannot resolve domain names__ (no viable DNS + request interception API combo)
