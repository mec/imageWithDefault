<?php

  function imageWithDefault($page, $field, $default) {
    // given a page and field object
    // check the field has a value
    if ( $field->isEmpty() ) {
      // there is no value so return the default image
      // create an image object from the special folder with
      // the supplied name
      $image = new Asset('assets/images/defaults/' . $default );
      return $image;
    } else {
      // there is a value so create an image object and return it
      $image = $page->image($field);
      return $image;
    }
  }
