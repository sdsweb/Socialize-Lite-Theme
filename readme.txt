Changelog
===

1.1.6
- Added readme/changelog

1.1.5
- Initial release on wordpress[dot]org

1.1.3 (Adjusting version number)
---
- Updated SDS Core (Theme Options)
- Added all content layout options as a function
- Added theme styles for content layouts
- Added featured image size adjustments based on content layout option
- Added functionality to adjust content width based on content layout option

1.1.1
---
- Fixed issue with Gravity Forms confirmation hook - was breaking page/re-direct confirmation functionality
- Checking to verify Gravity Forms cssClass isset in our hooks (fixes PHP warning)
- Updated SDS Core (Theme Options)
- Made soc_mobile_menu() pluggable
- Added option to specify whether or not child pages should be shown on mobile menu

1.1.0
---
- Updated SDS Core (Theme Options)
- Updated tags

1.0.9
---
- Updated SDS Core (Theme Options)
- Switched child theme functionality check to use is_child_theme()
- Fixed issue with translation strings (wrong domain name was used)
- Fixed issue where full width content pages were not 100% width when in responsive view

1.0.8
---
- Updated to latest version of SDS Core (includes new Toolbar menu for Theme Options)
- Removed attribution to Nav Walker Class
- Updated call to stylesheets: parent stylesheet is always loaded and a child theme stylesheet is now enqueued if a child theme is enabled

1.0.7
---
- Added default styling for all form elements
- Fixed issue where checkboxes and radio buttons were not appearing on front end
- Added styles for MailChimp Gravity Form CTA for Newsletters using .mc-gravity, .mc_gravity, .mc-newsletter, .mc_newsletter classes
- Removed most references to slocumstudio.com

1.0.6
---
- Updated to latest SDS core (Theme Options)
- Fixed issue with color scheme dropdown menu colors not appearing
- Fixed issue where fallback menu items were not shown in mobile menu when no Primary Nav was selected
- Fixed issue where footer was not styled properly when a color scheme was selected
- Added filter for developers to adjust default primary nav fallback label
- Adjusted margin on bottom of content paragraphs to be smaller
- Fixed issue with search widget title (had -10px margin on top before, removed margins entirely)
- Fixed issue with bottom margin on all heading elements

1.0.5
---
- Fixed issue where leave a reply form would not appear due to conditional
- Fixed styling issue where borders would appear in comments section when comments were disabled on a post/page

1.0.3
---
- Fixed issue where comment template borders were displayed when comments were disabled on a page
- Fixed issue with pagination borders appearing when no pagination existed

1.0.2
---
- Added max-width for iframes
- Fixed bug with search widget title (was too wide previously)

1.0.1
---
- Fixed $content_width value for embeds
- Adjusted with of logo box and header widget container when window was above 1000px
- Updated links on slocum blue to ensure they were bolded to stand out from content
- Fixed search box on 404 template (and in general when inserted elswhere other than widgets)
- Fixed size of post title on responsive view
- Removed dropdown walker nav class
- Removed the_excerpt and replaced with the_content, removed "more link" from output using `the_content_more_link` filter

1.0
---
- New Theme