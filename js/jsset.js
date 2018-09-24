/**
 * @file
 * Contains JS function
 */

(function ($, Drupal, drupalSettings) {
  'use strict';
  Drupal.behaviors.jsDrupalupTest = {
    attach: function (context, settings) {
      $('.js-var').once('jsDrupalupTest').append('<button class="button">' + drupalSettings.js_example.title + '</button>');
      console.log(drupalSettings.js_example.title);
    }
  };
})(jQuery, Drupal, drupalSettings);
