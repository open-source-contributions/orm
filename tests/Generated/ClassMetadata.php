<?php return unserialize('a:13:{s:37:"Brick\\ORM\\Tests\\Resources\\Models\\User";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";N;s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:0:{}s:14:"proxyClassName";s:41:"Brick\\ORM\\Tests\\Generated\\Proxy\\UserProxy";s:9:"tableName";s:4:"User";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:4:{i:0;s:4:"name";i:1;s:14:"billingAddress";i:2;s:15:"deliveryAddress";i:3;s:9:"lastEvent";}s:19:"selfNonIdProperties";a:4:{i:0;s:4:"name";i:1;s:14:"billingAddress";i:2;s:15:"deliveryAddress";i:3;s:9:"lastEvent";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:37:"Brick\\ORM\\Tests\\Resources\\Models\\User";s:10:"properties";a:5:{i:0;s:2:"id";i:1;s:4:"name";i:2;s:14:"billingAddress";i:3;s:15:"deliveryAddress";i:4;s:9:"lastEvent";}s:16:"propertyMappings";a:5:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"name";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:4:"name";s:10:"isNullable";b:0;}s:14:"billingAddress";O:43:"Brick\\ORM\\PropertyMapping\\EmbeddableMapping":3:{s:13:"classMetadata";O:28:"Brick\\ORM\\EmbeddableMetadata":3:{s:9:"className";s:40:"Brick\\ORM\\Tests\\Resources\\Models\\Address";s:10:"properties";a:5:{i:0;s:6:"street";i:1;s:4:"city";i:2;s:8:"postcode";i:3;s:7:"country";i:4;s:7:"isPoBox";}s:16:"propertyMappings";a:5:{s:6:"street";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:6:"street";s:10:"isNullable";b:0;}s:4:"city";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:4:"city";s:10:"isNullable";b:0;}s:8:"postcode";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:7:"zipcode";s:10:"isNullable";b:1;}s:7:"country";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";N;s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:0:{}s:14:"proxyClassName";s:44:"Brick\\ORM\\Tests\\Generated\\Proxy\\CountryProxy";s:9:"tableName";s:7:"Country";s:12:"idProperties";a:1:{i:0;s:4:"code";}s:15:"nonIdProperties";a:1:{i:0;s:4:"name";}s:19:"selfNonIdProperties";a:1:{i:0;s:4:"name";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:0;s:9:"className";s:40:"Brick\\ORM\\Tests\\Resources\\Models\\Country";s:10:"properties";a:2:{i:0;s:4:"code";i:1;s:4:"name";}s:16:"propertyMappings";a:2:{s:4:"code";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:4:"code";s:10:"isNullable";b:0;}s:4:"name";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:4:"name";s:10:"isNullable";b:0;}}}s:15:"fieldNamePrefix";s:8:"country_";s:10:"isNullable";b:0;}s:7:"isPoBox";O:37:"Brick\\ORM\\PropertyMapping\\BoolMapping":2:{s:9:"fieldName";s:7:"isPoBox";s:10:"isNullable";b:0;}}}s:15:"fieldNamePrefix";s:0:"";s:10:"isNullable";b:1;}s:15:"deliveryAddress";O:43:"Brick\\ORM\\PropertyMapping\\EmbeddableMapping":3:{s:13:"classMetadata";O:28:"Brick\\ORM\\EmbeddableMetadata":3:{s:9:"className";s:43:"Brick\\ORM\\Tests\\Resources\\Models\\GeoAddress";s:10:"properties";a:2:{i:0;s:7:"address";i:1;s:8:"location";}s:16:"propertyMappings";a:2:{s:7:"address";O:43:"Brick\\ORM\\PropertyMapping\\EmbeddableMapping":3:{s:13:"classMetadata";r:37;s:15:"fieldNamePrefix";s:8:"address_";s:10:"isNullable";b:0;}s:8:"location";O:50:"Brick\\ORM\\Tests\\Resources\\Mappings\\GeometryMapping":2:{s:12:"' . "\0" . '*' . "\0" . 'fieldName";s:8:"location";s:13:"' . "\0" . '*' . "\0" . 'isNullable";b:0;}}}s:15:"fieldNamePrefix";s:16:"deliveryAddress_";s:10:"isNullable";b:1;}s:9:"lastEvent";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";N;s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:2:{i:0;s:4:"user";i:1;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:4:"user";}s:12:"childClasses";a:4:{i:0;s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";i:1;s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";i:2;s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";i:3;s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";}s:15:"isAutoIncrement";b:1;s:9:"className";s:48:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent";s:10:"properties";a:3:{i:0;s:2:"id";i:1;s:4:"user";i:2;s:4:"time";}s:16:"propertyMappings";a:3:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"user";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:5:"user_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:15:"fieldNamePrefix";s:10:"lastEvent_";s:10:"isNullable";b:1;}}}s:39:"Brick\\ORM\\Tests\\Resources\\Models\\Follow";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";N;s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:0:{}s:14:"proxyClassName";s:43:"Brick\\ORM\\Tests\\Generated\\Proxy\\FollowProxy";s:9:"tableName";s:6:"Follow";s:12:"idProperties";a:2:{i:0;s:8:"follower";i:1;s:8:"followee";}s:15:"nonIdProperties";a:1:{i:0;s:5:"since";}s:19:"selfNonIdProperties";a:1:{i:0;s:5:"since";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:0;s:9:"className";s:39:"Brick\\ORM\\Tests\\Resources\\Models\\Follow";s:10:"properties";a:3:{i:0;s:8:"follower";i:1;s:8:"followee";i:2;s:5:"since";}s:16:"propertyMappings";a:3:{s:8:"follower";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:9:"follower_";s:10:"isNullable";b:0;}s:8:"followee";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:9:"followee_";s:10:"isNullable";b:0;}s:5:"since";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:5:"since";s:10:"isNullable";b:0;}}}s:40:"Brick\\ORM\\Tests\\Resources\\Models\\Country";r:56;s:38:"Brick\\ORM\\Tests\\Resources\\Models\\Event";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";N;s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:1:{i:0;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:4:"time";}s:12:"childClasses";a:9:{i:0;s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";i:1;s:51:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent";i:2;s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";i:3;s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";i:4;s:48:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent";i:5;s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";i:6;s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";i:7;s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";i:8;s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:15:"isAutoIncrement";b:1;s:9:"className";s:38:"Brick\\ORM\\Tests\\Resources\\Models\\Event";s:10:"properties";a:2:{i:0;s:2:"id";i:1;s:4:"time";}s:16:"propertyMappings";a:2:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:13:"CreateCountry";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:74:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\CountryEvent\\CreateCountryEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:2:{i:0;s:7:"country";i:1;s:4:"time";}s:19:"selfNonIdProperties";a:0:{}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:10:"properties";a:3:{i:0;s:2:"id";i:1;s:7:"country";i:2;s:4:"time";}s:16:"propertyMappings";a:3:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:7:"country";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:56;s:15:"fieldNamePrefix";s:8:"country_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:51:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";N;s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";N;s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:2:{i:0;s:7:"country";i:1;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:7:"country";}s:12:"childClasses";a:2:{i:0;s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";i:1;s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";}s:15:"isAutoIncrement";b:1;s:9:"className";s:51:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent";s:10:"properties";a:3:{i:0;s:2:"id";i:1;s:7:"country";i:2;s:4:"time";}s:16:"propertyMappings";a:3:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:7:"country";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:56;s:15:"fieldNamePrefix";s:8:"country_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:15:"EditCountryName";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:76:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\CountryEvent\\EditCountryNameEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:3:{i:0;s:7:"newName";i:1;s:7:"country";i:2;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:7:"newName";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"properties";a:4:{i:0;s:7:"newName";i:1;s:2:"id";i:2;s:7:"country";i:3;s:4:"time";}s:16:"propertyMappings";a:4:{s:7:"newName";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:7:"newName";s:10:"isNullable";b:0;}s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:7:"country";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:56;s:15:"fieldNamePrefix";s:8:"country_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:10:"CreateUser";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:68:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\UserEvent\\CreateUserEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:2:{i:0;s:4:"user";i:1;s:4:"time";}s:19:"selfNonIdProperties";a:0:{}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:10:"properties";a:3:{i:0;s:2:"id";i:1;s:4:"user";i:2;s:4:"time";}s:16:"propertyMappings";a:3:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"user";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:5:"user_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:48:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent";r:105;s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:22:"EditUserBillingAddress";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:80:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\UserEvent\\EditUserBillingAddressEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:3:{i:0;s:10:"newAddress";i:1;s:4:"user";i:2;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:10:"newAddress";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:10:"properties";a:4:{i:0;s:10:"newAddress";i:1;s:2:"id";i:2;s:4:"user";i:3;s:4:"time";}s:16:"propertyMappings";a:4:{s:10:"newAddress";O:43:"Brick\\ORM\\PropertyMapping\\EmbeddableMapping":3:{s:13:"classMetadata";r:37;s:15:"fieldNamePrefix";s:11:"newAddress_";s:10:"isNullable";b:0;}s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"user";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:5:"user_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:23:"EditUserDeliveryAddress";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:81:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\UserEvent\\EditUserDeliveryAddressEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:3:{i:0;s:10:"newAddress";i:1;s:4:"user";i:2;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:10:"newAddress";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:10:"properties";a:4:{i:0;s:10:"newAddress";i:1;s:2:"id";i:2;s:4:"user";i:3;s:4:"time";}s:16:"propertyMappings";a:4:{s:10:"newAddress";O:43:"Brick\\ORM\\PropertyMapping\\EmbeddableMapping":3:{s:13:"classMetadata";r:89;s:15:"fieldNamePrefix";s:11:"newAddress_";s:10:"isNullable";b:0;}s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"user";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:5:"user_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:12:"EditUserName";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:70:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\UserEvent\\EditUserNameEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:3:{i:0;s:7:"newName";i:1;s:4:"user";i:2;s:4:"time";}s:19:"selfNonIdProperties";a:1:{i:0;s:7:"newName";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"properties";a:4:{i:0;s:7:"newName";i:1;s:2:"id";i:2;s:4:"user";i:3;s:4:"time";}s:16:"propertyMappings";a:4:{s:7:"newName";O:39:"Brick\\ORM\\PropertyMapping\\StringMapping":2:{s:9:"fieldName";s:7:"newName";s:10:"isNullable";b:0;}s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:4:"user";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:5:"user_";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";O:24:"Brick\\ORM\\EntityMetadata":13:{s:19:"discriminatorColumn";s:4:"type";s:18:"discriminatorValue";s:10:"FollowUser";s:16:"discriminatorMap";a:7:{s:13:"CreateCountry";s:70:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\CreateCountryEvent";s:15:"EditCountryName";s:72:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\CountryEvent\\EditCountryNameEvent";s:10:"CreateUser";s:64:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\CreateUserEvent";s:22:"EditUserBillingAddress";s:76:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserBillingAddressEvent";s:23:"EditUserDeliveryAddress";s:77:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserDeliveryAddressEvent";s:12:"EditUserName";s:66:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\UserEvent\\EditUserNameEvent";s:10:"FollowUser";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";}s:14:"proxyClassName";s:58:"Brick\\ORM\\Tests\\Generated\\Proxy\\Event\\FollowUserEventProxy";s:9:"tableName";s:5:"Event";s:12:"idProperties";a:1:{i:0;s:2:"id";}s:15:"nonIdProperties";a:4:{i:0;s:8:"follower";i:1;s:8:"followee";i:2;s:8:"isFollow";i:3;s:4:"time";}s:19:"selfNonIdProperties";a:3:{i:0;s:8:"follower";i:1;s:8:"followee";i:2;s:8:"isFollow";}s:12:"childClasses";a:0:{}s:15:"isAutoIncrement";b:1;s:9:"className";s:54:"Brick\\ORM\\Tests\\Resources\\Models\\Event\\FollowUserEvent";s:10:"properties";a:5:{i:0;s:2:"id";i:1;s:8:"follower";i:2;s:8:"followee";i:3;s:8:"isFollow";i:4;s:4:"time";}s:16:"propertyMappings";a:5:{s:2:"id";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:2:"id";s:10:"isNullable";b:0;}s:8:"follower";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:9:"follower_";s:10:"isNullable";b:0;}s:8:"followee";O:39:"Brick\\ORM\\PropertyMapping\\EntityMapping":3:{s:13:"classMetadata";r:2;s:15:"fieldNamePrefix";s:9:"followee_";s:10:"isNullable";b:0;}s:8:"isFollow";O:37:"Brick\\ORM\\PropertyMapping\\BoolMapping":2:{s:9:"fieldName";s:8:"isFollow";s:10:"isNullable";b:0;}s:4:"time";O:36:"Brick\\ORM\\PropertyMapping\\IntMapping":2:{s:9:"fieldName";s:4:"time";s:10:"isNullable";b:0;}}}}');
