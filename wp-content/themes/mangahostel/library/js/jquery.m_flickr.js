(function(window, jQuery, undefined) {
  var m_flickr = function(arg) { // core constructor
    // ensure to use the `new` operator
    if (!(this instanceof m_flickr))
      return new m_flickr(arg);
    // store an argument for this example
    this.myArg = arg;
    //..
  };

  // create `fn` alias to `prototype` property
  m_flickr.fn = m_flickr.prototype = {
    init: function () {/*...*/}
    //...
  };

  // expose the library
  window.m_flickr = m_flickr;
})(window, jQuery);