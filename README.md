# damaioconfiguration
phpBB extension to configure the damaïo style without having to modify the files.

## Minimum Requirements
* phpBB 3.3.11
* [damaïo](https://github.com/cabot/damaio) >= 1.0.8

## Install (easy)
1. Download the latest ready-to-install version [cabot_damaioconfiguration.zip](https://github.com/cabot/damaioconfiguration/releases/latest/download/cabot_damaioconfiguration.zip).
2. Unzip the downloaded archive and download the folder it contains into the `ext/` directory of your phpBB board.
3. Navigate in the CPA to `Customise -> Manage extensions`.
4. Look for `Damaïo configuration` in the list of deactivated extensions, and click on its `Enable` link.

## Install (advanced)
1. Download the latest release `Source code`.
2. Unzip the downloaded release, and change the name of the folder to `damaioconfiguration`.
3. In the `ext/` directory of your phpBB board, create a new directory named `cabot` (if it does not already exist).
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
![damaio configuration](https://github.com/cabot/damaioconfiguration/assets/6350179/4dbbba80-7acd-4dd3-a1c4-4876b2723d4c)

© 2023 - cabot
