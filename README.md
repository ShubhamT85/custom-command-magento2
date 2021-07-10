# Magento 2(Custom command)
This module will create a custom command in magento to get magento version, PHP version and current mode set in magento.
## Basic Flow of the module
- Firstly, after cloning the git and extracting the folder wrap it inside folder **Command** and again wrap this folder in **Task** so inshort, create your directory as magento-root-directory/app/code/Task/Command/cloned_directory.
- After that open the magento root directory in terminal and hit the following commands,
  - `sudo php bin/magento module:enable Task_Command`
  - `sudo php bin/magento setup:upgrade`
  - `sudo php bin/magento setup:di:compile`
  - `sudo php bin/magento cache:flush`
  - `sudo chmod 777 -R var/ pub/ generated/`
- Now since your module is now installed now you can run command `sudo php bin/magento get:version` you will get your magento version, current PHP version as well as mode of operation set in magento.

**Note :**
- Be sure to experiment with various commands that you want to try out at once but don't forget to add sudo in the prefix.

### Happy Coding :)

