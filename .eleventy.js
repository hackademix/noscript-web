const eleventyNavigationPlugin = require("@11ty/eleventy-navigation");
const CleanCSS = require("clean-css");

module.exports = eleventyConfig => {

  {
    // Markdown renderer customization
    const md = require('markdown-it')();
    eleventyConfig.setLibrary('md', md);

    {
      let slugify = x => String(x).trim().replace(/[^\w\s]/g, "").replace(/\s+/g, '-').toLowerCase();
      // Allow CSS styling through id/class and heading-based TOCs
      md.use(require('markdown-it-attrs'), {
        allowedAttributes: ["id", "class"]
      })
        .use(require("markdown-it-anchor"), { slugify })
        .use(require("markdown-it-toc-done-right"), { slugify });
    }
   // Remember old renderer, if overridden, or proxy to default renderer
    let defaultRender = md.renderer.rules.link_open || function(tokens, idx, options, env, self) {
      return self.renderToken(tokens, idx, options);
    };

     const isExternalURL = url => /https?:\/\/(?!noscript\.net(?:\/|$))/.test(url);

    md.renderer.rules.link_open = function (tokens, idx, options, env, self) {
      let token = tokens[idx];
      let href = token.attrs[token.attrIndex("href")];
      if (href && isExternalURL(href[1])) {
        // If you are sure other plugins can't add `target` - drop check below
        let aIndex = token.attrIndex('target');
        if (aIndex < 0) {
          token.attrPush(['target', '_blank']); // add new attribute
        } else {
          tokens.attrs[aIndex][1] = '_blank';    // replace value of existing attr
        }
      }
      // pass token to default renderer.
      return defaultRender(tokens, idx, options, env, self);
    };
  }

  eleventyConfig.addShortcode("screenshot",
    (screenshot, alt, title = alt) => {
      let url = `/img/screenshots/${screenshot}.jpg`; // TODO: apply the url filter
      return `[![${alt}](${url})](${url} "${title}"){.screenshot}`;
    }
  );

  eleventyConfig.addFilter("cssmin", function(code) {
    return new CleanCSS({}).minify(code).styles;
  });

  // configure passthrugh copy directories
  ["img", "css", "fonts", "js",
    {"favicon": "/"},
  ].forEach(dir => eleventyConfig.addPassthroughCopy(dir));

  // take all the sources from the content directory
  eleventyConfig.addPlugin(eleventyNavigationPlugin);
  return {
    dir: {
      input: 'content',
    }
  };

};
