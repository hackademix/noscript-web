module.exports = {
  eleventyNavigation: data => data.nav && {
    key: data.navKey || data.title,
    parent: data.parent,
    order: data.nav,
    url: data.url
  }
};
