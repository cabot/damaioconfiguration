# damaioconfiguration
phpBB extension to configure the damaïo style without having to modify the files.

## Minimum Requirements
* phpBB 3.3.11
* PHP 7.1.3
* [damaïo](https://github.com/cabot/damaio) >= 1.0.8

## Install
1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `damaioconfiguration`.
3. In the `ext` directory of your phpBB board, create a new directory named `cabot` (if it does not already exist).
4. Copy the `damaioconfiguration` folder to `/ext/cabot/`.
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
![damaïo configuration](https://github.com/cabot/damaioconfiguration/assets/6350179/246daa4e-7fc8-4bb3-a23f-a42744d51f66)

© 2023 - cabot
