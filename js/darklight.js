{
  let patchSheet = s => {
    let rules = s.cssRules;
    for (let j = 0, len = rules.length; j < len; j++) {
      let rule = rules[j];
      if (rule.conditionText !== "(prefers-color-scheme: light)") continue;
      for (let r of rule.cssRules) {
        if (r.selectorText === ":root") {
          s.insertRule(`:root[data-theme="light"] {${r.style.cssText}}`, j);
          return true;
        }
      }
      break;
    }
    return false;
  }

  let patched = false;
  let patchAll = () => {
    for (let s of document.styleSheets) {
      if (patched = patchSheet(s)) break;
    }
  }

  patchAll();
  if (!patched) {
    let onload = e => {
      if (patchAll()) {
        removeEventListener(e.type, onload, true);
      }
    }
    addEventListener("load", onload, true);
  }

  let prefers = theme => matchMedia(`(prefers-color-scheme: ${theme})`).matches;
  const THEME_KEY = "darklight.theme";
  const root = document.documentElement;
  root.dataset.theme = localStorage.getItem(THEME_KEY) || (prefers("light") ? "light" : "dark");
  document.addEventListener("DOMContentLoaded", () => {
    if (!patched) patchAll();
    let toggle = document.querySelector(".darklight");
    toggle.style.display = "block";
    toggle.removeAttribute("aria-hidden");
    toggle.addEventListener("click", e => {
      let {theme} = root.dataset;
      root.dataset.theme = theme = theme === "light" ? "dark" : "light";
      if (prefers(theme)) {
        localStorage.removeItem(THEME_KEY);
      } else {
        localStorage.setItem(THEME_KEY, theme);
      }
    });
  });
}