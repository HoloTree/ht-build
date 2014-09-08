### Requires
Git
Composer (installed by vvv?)

### Install
1. Install Vagrant

http://VagrantUp.com

2. Install the [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)

`vagrant plugin install vagrant-hostsupdater`

3.Install the [vagrant-triggers](https://github.com/emyl/vagrant-triggers)

`vagrant plugin install vagrant-triggers`

4. Switch to user root

`cd ~/`

5. Clone [VVV] into ~/vagrant

`git clone git://github.com/Varying-Vagrant-Vagrants/VVV.git vagrant`

6. Optional: Vagrant Up To Test That You Have VVV Working


`cd vagrant`

`vagrant up`


Go to http://vvv.dev and see links to default sites and utilities.

7. Update vvv-hosts

`cd www`

Open vvv-hosts in text editor via GUI or `nano vvv-hosts`

Add on new line:

`gus.dev`

8. Clone this repo into ~/vagrant/www/ht-build


`git clone git://github.com/Holo-Tree/ht-build.git ht-build`


9. Run composer to build

`composer update`

or

`php composer.phar update`

11. Re-provision vagrant

`vagrant provision`

Note: may require a `vagrant halt` and `vagrant up` to get new site to work after provisioning.


12. In WP admin activate plugins

http://holotree.dev/wp/wp-admin/plugins.php

Activate Plugins:
* Pods
* HoloTree
* HoloTree DMS
* Gus UI Mods
* Debug Bar
* Debug Bar Console
* Simpley Show IDs
* mobble

Switch Theme To App_Starter:

http://holotree.dev/wp/wp-admin/themes.php


### File Structure

```
├── composer.json
├── dev-config.php -> WordPressConfiguration for VVV/dv usage only
├── Gemfile
├── vendor
└── public_html
    ├── ht
    │   ├── mu-plugins
    │   ├── plugins
    │   └── themes
    ├── wp-config.php
    ├── index.php
    └── wp
```

### License, Sources, Thanks Etc.
Copyright 2014 Josh Pollock.
License: GPL v2 or later.

This is based on: https://github.com/simonwheatley/vvv-demo-2 with inspiration and light copypasta from https://github.com/roots/bedrock (MIT License)
