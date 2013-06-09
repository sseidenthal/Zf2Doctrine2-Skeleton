# ZF2 Doctrine2 Skeleton Application

This is a working Skeleton Application of ZF2 with Doctrine2.

It includes an example of generating entities from XML/YAML files.

I inspired myself from this realy nice post: http://www.fadoe.de/blog/archives/388-ZF2-und-Doctrine-als-Modul-einbinden.html

## How to setup the easiest way
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

##How to generate the sample entities

This project contains both an example to generate your entities from XML and YAML files. 
By default the XML example is enabled as i find XML more readable then YAML files.

You can find the examples in 

* module/Application/config/xml/application/ (xml example)
* module/Application/config/yml/application/ (yaml example)

The following command from within the root folder of your project will let you generate your entities
```
./vendor/bin/doctrine-module orm:generate-entities module/Application/src/
```

##What's next

If you start using Zf2 and Doctrine2 i suggest the following realy nice tutorial.

DOCTRINE 2 & ZF2 by MARCO PIVETTA: http://marco-pivetta.com/doctrine-orm-zf2-tutorial/#/
