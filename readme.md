### Requires
Git
Composer (installed by vvv?)

### Install
1. Install Vagrant

http://VagrantUp.com

1. Install the [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)

`vagrant plugin install vagrant-hostsupdater`

1.Install the [vagrant-triggers](https://github.com/emyl/vagrant-triggers)

`vagrant plugin install vagrant-triggers`

1. Switch to user root

`cd ~/`

1. Clone [VVV] into ~/vagrant

`git clone git://github.com/Varying-Vagrant-Vagrants/VVV.git vagrant`

1. Optional: Vagrant Up To Test That You Have VVV Working


`cd vagrant`

`vagrant up`


Go to http://vvv.dev and see links to default sites and utilities.

1. Update vvv-hosts

`cd www`

Open vvv-hosts in text editor via GUI or `nano vvv-hosts`

Add on new line:

`holotree.dev`

1. Clone this repo into ~/vagrant/www/ht-build


`git clone git://github.com/Holo-Tree/ht-build.git`


1. Change name of "make-htdocs" to "ht-docs"
@TODO Figure out how to get those two files in there without messing up .gitignore

`mv make-htdocs htdocs`

1. Run composer to build

`composer update`

1. Re-provision vagrant

`vagrant provision`

Note: may require a `vagrant halt` and `vagrant up` to get new site to work after provisioning.

1. Go to http://holotree.dev and install WordPress. Details are unimportant.

1. Switch to plugin directory and clone HoloTree
@TODO Do this in composer setup or vvv-init.sh or otherwise automate.

`cd htdocs/ht/plugins`

`git clone https://github.com/Holo-Tree/ht_dms.git ht_dms`

`git clone https://github.com/Holo-Tree/holotree.git holotree`

1. Switch to theme dir and install theme.
@todo automate
`cd ../`

`cd themes`

`git clone https://github.com/Holo-Tree/ht_dms_theme.git`

@todo which theme?

1. In WP admin activate plugins

1. @TODO DATABASE

### File Structure

```
├── composer.json
├── dev-config.php -> WordPressConfiguration for VVV/dv usage only
├── Gemfile
├── vendor
└── htdocs
    ├── ht
    │   ├── mu-plugins
    │   ├── plugins
    │   └── themes
    ├── wp-config.php
    ├── index.php
    └── wp
```
