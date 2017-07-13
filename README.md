# Redirect when the video ends
A shortcode that allows you to embed an HTML5 video and redirect the page when the video is over

Version 1.1

## Description
This plugin will allow you to use the shortcode `[redirvid]` and embed an HTML5 video.  Once this video is over, the page will be automatically redirected

Originally created to [answer a question](https://wordpress.org/support/topic/video-plugin-looking-for-a-special-one/) on the WordPress forum.

### Attributes for this shortcode
`src` - The source of the video file.
`link` - The link that is opened when the video ends.
`target` - The default is `_self`, which redirects the page.  You can use any of the values that you could use with the [`target` attribute of an `<a>` tag](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-target).
`autoplay` - This  attribute specifies whether or not the video begins playing on its own.  The value `yes` means the video will autoplay.  The value `no` means that the video will not autoplay.  The default is value `no`.
`controls` - This  attribute specifies whether or not the video has user controls.  The value `no` means that the video will not have controls.  The value `yes` means 
`muted` - This  attribute specifies whether or not the video is muted.  The value `no` means that the video will not have controls.  The value `yes` means the video will have controls.  The default is value `no`.
`poster` - The source of the poster image of the HTML5 video.  This is the image that shows up before the video plays.
`class` - The HTML class of the video.
`id` - The HTML id of the video.


## Installation

1. Download the [plugin](https://wordpress.org/plugins/redirect-when-video-ends/)
2. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress

## Frequently Asked Questions

### Does the redirect use JavaScript

Yes, the redirect needs JavaScript.  If the JavaScript is turned off on the user’s device, this plugin won’t work.


## Changelog

### 1.0
* The plugin has been created

### 1.1 
* Allows muting, class, and id.

## Upgrade Notice 
    
1.0 - first version
1.1 - current version
