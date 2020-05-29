# Understrap Jazz (cp3402-2020-team11)
A smooth and dark theme for WordPress that accentuates jazz music vibes. Perfect for jazz clubs and jazz music venues! 

## Website Server Info
- Staging Address: http://34.87.236.236/stage/
- Production Address: http://34.87.236.236/prod/
- Ubuntu 16.04 hosted on a Google Cloud IAAS Computer Engine Instance.
- PHP Version 7.0.33
- Apache 2.4.18
- MySQL 5.7.30

## Workflow
- Collaboration tools: Slack, GitHub Projects, Discord
- Development tools: PhpStorm, Git, Gulp.js, Bootstrap, WinScp, PhpMyAdmin
- SCSS and Gulp to increase workflow: SCSS and Gulp was used as many features and tools such as variables, nestins and inheritance allow greatly increased workflow which makes writing CSS become much less time consuming. Compiling the files to CSS is automated with Gulp.
- Database Migration: Migrating Data is done through two easy steps of importing and exporting through wordpress also keeping the workflow process lightweight and efficient.


### Wordpress
- Version 5.4
- Parent Theme: Understrap
- Theme: Understrap Jazz

### Theme Installation
Be sure to install or already be using [WordPress](https://wordpress.org/download/ "Download WordPress") on your site.
#### Without our Install Zip
- Install the 'Understrap' parent theme [See documentation](https://understrap.github.io/#installation "Understap").  
- Copy the /understrap-jazz theme directory to wp-content/themes inside your WordPress installation directory.
- Login to WordPress and select the Understrap-Jazz theme.
#### With our Install Zip
- Download and extract our ready made [theme_install.zip](https://github.com/cp3402-students/cp3402-2020-team11/raw/stage/theme_install.zip "Download") to wp-content/themes inside your WordPress installation directory.
- Login to WordPress and select the Understrap-Jazz theme.

## Creating Site Content
### Adding a New Post (Band/Event/Photos/etc)
To add a new post for any band/event/photos create a new post [See WordPress' documentation](https://wordpress.org/support/article/writing-posts/) and assign it a category according to what kind of post it is.
### Custom Pages
This theme includes a custom hero-page with parallax cityscape image, perfect for home pages or making a statement!

To use this custom page simply select the 'Hero Page Template' under *Page Attributes* when creating or editing a page.
### Embedding Google Maps locations
To add an interactive location on any page or post simply add a *custom HTML* block and paste in the code generated by Google: [See here](https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en "Google Maps Embeds")
### Forms
Add forms using the wpForms plugin. [See Plugins](#wpForms) for details.
### Social Media
Add Facebook embeds using the Magic Embeds plugin. [See Plugins](#magic-embeds) for details.

Add YouTube content with built in WordPress blocks.

## Plugins
### Magic Embeds
To use short code for adding Facebook content to the site: [See documentation](https://wpembedfb.com/documentation/wp-embed-facebook-shortcode-attributes-and-examples/ "Facebook Shortcode")
### wpForms
Add and manage web forms. For usages: [See documentation](https://wpforms.com/docs/creating-first-form/?utm_source=WordPress&utm_medium=link&utm_campaign=liteplugin "wpForms How to")
### Media Library Folders (MLF)
Keep media uploads organised with this file system. For how to use: [See documentation](https://maxgalleria.com/media-library-plus/?utm_source=repo&utm_medium=video&utm_content=video&utm_campaign=video "MLF How-to")

#### Existing directories are

- *photos* - all site photo content.
- *branding* - logos and branding for the site, email, facebook, triple t radio and youtube.
### Triple T Radio
To add a embedded Triple T banner just add a *custom HTML* block and paste in the code generated from the Triple T website. 
Just click the share button.
