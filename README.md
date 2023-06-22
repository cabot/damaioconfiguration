# damaioconfiguration
Extension for phpBB 3.3 to configure the damaïo style without having to modify the files.

## Minimum Requirements
* phpBB 3.3.10
* PHP 7.1.3
* [damaïo style 1.0.8](https://github.com/cabot/damaio)

## Install
1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `damaioconfiguration`.
3. In the `ext` directory of your phpBB board, create a new directory named `cabot` (if it does not already exist).
4. Copy the `damaioconfiguration` folder to `/ext/cabot/` (if done correctly, you'll have the main extension class at (your forum root)/ext/cabot/damaioconfiguration/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Damaïo configuration` under the Disabled Extensions list, and click its `Enable` link.

## Usage
1. Navigate in the ACP to `Extensions -> Damaïo style configuration`.

## Uninstall
1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Damaïo configuration` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/cabot/damaioconfiguration` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

## Screenshot
![damaio_configuration](https://github.com/cabot/damaioconfiguration/assets/6350179/b66b7cb2-c5f7-4588-a58d-32018711c841)

© 2023 - cabot
