# Kirby Image with default Plugin
A simple plugin for Kirby that aims to provide a way for your image fields to have a default image when one is not added by a user.

## Installation
Download the plugin from Github rename it to imageWithDefault and put it into /site/plugins. It will automatically be loaded by Kirby.

## Usage
You will need a content type with an image field setup first, the blueprint would look something like this:
```
title: Project
files:
  sortable: true
pages: false
fields:
  title:
    label: Title
    type:  text
    width: 3/4
  year:
    label: Year
    type:  text
    width: 1/4
  text:
    label: Text
    type:  textarea
  coverImage:
    label: Cover Image
    type: image

```
Once you have your blueprint create a folder in your assets/images folder called 'defaults'. Place your default images into this folder.

In your template or snippet, call imageWithDefault() and pass in your page object, your field object and the name of the default image you want to use.

You will get back an image object to use like you would normally, so you can do things like:
```
<?php
  $image = imageWithDefault( $page, $page->coverImage(), 'defaultImage.png');

  echo $image; // shows the original image or default if one is not specified
  echo $image->url(); // shows the original image or default images url
  echo thumb( $image, array( 'width' => 300)); //shows a 300px wide version of the image or default image
?>
```
That's it!
