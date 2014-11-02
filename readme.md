[![Deployment status from dploy.io](https://holotree.dploy.io/badge/13023223949736/12812.png)](http://dploy.io)

### Requires
Git
Composer

### Install
@TODO redo

### File Structure

```
├── composer.json
├── dev-config.php -> WordPress Configuration for VVV/dv usage only
├── production-config.php -> WordPress Configuration for live site
├── vendor
└── public_html
    ├── ht
    │   ├── mu-plugins
    |   |   ├── vendor
    │   ├── plugins
    │   └── themes
    ├── wp-config.php
    ├── application.php -> Common WordPress config
    ├── index.php
    └── wp -> WordPress itself.
```

### License, Sources, Thanks Etc.
Copyright 2014 Josh Pollock.
License: GPL v2 or later.

This is based on: https://github.com/simonwheatley/vvv-demo-2 with inspiration and light copypasta from https://github.com/roots/bedrock (MIT License)
