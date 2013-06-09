This is where you put your YAML files that define your entities

To enable using YAML files in this project you have to uncomment the following 2 lines in / module / Application / config / module.config.php and of course comment the ones for the XmlDriver

```
//'class' => 'Doctrine\ORM\Mapping\Driver\YamlDriver',
//'paths' => __DIR__ . '/yml/application'
```

The Files located here can then be used to generate your Entities with the following command from the root folder of your project.

```
./vendor/bin/doctrine-module orm:generate-entities module/Application/src/
```
