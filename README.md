# ZF2 Doctrine2 Skeleton Application

This is a working Skeleton Application of ZF2 with Doctrine2.

It includes example mappers for ANNOTATIONS, XML, YAML driver.

I inspired myself from this realy nice post: http://www.fadoe.de/blog/archives/388-ZF2-und-Doctrine-als-Modul-einbinden.html

##1. How to setup the easiest way
Note: on a Mac with ZendServer 6 installed
```
git clone https://github.com/sseidenthal/Zf2Doctrine2-Skeleton.git
cd Zf2Doctrine2-Skeleton
php composer.phar self-update
php composer.phar install
cd public/
php -S localhost:8000
```

You can now navigate to http://localhost:8000/ with your favorite Browser.

##2. Setup your Database connection

Setting up your database is really easy, open ```config / autoload / doctrine.local.php``` and set your credentials.

##3. How to generate the sample entities

This project contains 3 example Mappers to generate entities from (ANNOTATION, XML, YAML)
By default the Annotations driver is enabled because it is the most powerfull way.

You can find the examples in 
* module/Application/config/annotation/application/Track.php (annotiations example)
* module/Application/config/xml/application/Application.Entity.Track.dcm.xml (xml example)
* module/Application/config/yml/application/Application.Entity.Track.dcm.yml (yaml example)

If you want to try YAML and XML you have to enable the appropriate Driver in ```module / Application / config / module.config.php```

The following command from within the root folder of your project will let you generate your entities
```
./vendor/bin/doctrine-module orm:generate-entities module/Application/src/
```
##4. Manipulate Database (create, update, drop)
Note: the database credentials must be set correctly as described in part 2.


The following command will create database schema based on your already generated entities, you will have to run this probably only once.

```
./vendor/bin/doctrine-module orm:schema-tool:create
```

If you have made changes to your entities you can update database with this command.

```
./vendor/bin/doctrine-module orm:schema-tool:update --force
```

This will drop Database Schema (!!pay attention when playing around)
```
./vendor/bin/doctrine-module orm:schema-tool:drop
```
if you are realy sure hat you want to drop then use this
```
./vendor/bin/doctrine-module orm:schema-tool:drop --force
```



##What's next

If you start using Zf2 and Doctrine2 i suggest the following realy nice tutorial.

DOCTRINE 2 & ZF2 by MARCO PIVETTA: http://marco-pivetta.com/doctrine-orm-zf2-tutorial/#/
