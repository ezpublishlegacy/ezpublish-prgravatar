PR Gravatar extension installation documentations

Requirements
========

- ezjscore
- eZ Publish 4.7 or later version.
- eZ Comments 1.11
- eZ Demo 1.0

Installation
=======

1) Copy prgravatar into 'extension' folder

2) Activate prgravatar
   In administrator user interface, click 'setup' tab->'extensions' menu, select 'prgravatar', click button 'Apply Changes'.
   or in settings/override/site.ini.append.php, add acivation configuration under "ExtensionSettings" section:
     [ExtensionSettings]
     ActiveExtensions[]=prgravatar
     
3) Regenerate autoloads
    In administrator user interface, click 'setup' tab->'extensions' menu, select 'prgravatar', click button 'Regenerate autoload arrays for extensions',
    or in eZ Publish installation folder, run "php bin/php/ezpgenerateautoloads.php -e"
    
4) Clear cache
    Clear INI and template caches. (from admin 'Setup' tab or commandline)