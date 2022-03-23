{
  let patchSheet = s => {
    let rules = s.cssRules;
    for (let j = 0, len = rules.length; j < len; j++) {
      let rule = rules[j];
      if (rule.styleSheet && patchSheet(rule.styleSheet)) {
        return true;
      }
      if (rule.conditionText !== "(prefers-color-scheme: light)") continue;
      for (let r of rule.cssRules) {
        s.insertRule(`${r.selectorText}[data-theme="light"] {${r.style.cssText}}`, j);
      }
      return true;
    }
    return false;
  }

  let patchAll = () => {
    for (let s of document.styleSheets) {
      if (patchSheet(s)) return true;
    }
    return false;
  }

  if (!patchAll()) {
    console.error("Couldn't patch sheets while loading, deferring to onload");
    let onload = e => {
      if (patchAll()) {
        removeEventListener(e.type, onload, true);
      }
    }
    addEventListener("load", onload, true);
  }
}
// TODO: split me
{
  let prefers = theme => matchMedia(`(prefers-color-scheme: ${theme})`).matches;
  const THEME_KEY = "darklight.theme";
  const root = document.documentElement;
  root.dataset.theme = localStorage.getItem(THEME_KEY) || (prefers("light") ? "light" : "dark");
  document.addEventListener("DOMContentLoaded", () => {
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