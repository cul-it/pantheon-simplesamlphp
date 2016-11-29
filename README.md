SimpleSAMLphp - customized for Pantheon
=============

This is an unofficial fork of simplesaml 1.13.1. 

How to use:
===========

There are 3 files that differ depending on whether you're in production or non-production (test) mode:
```
	config/authsources.php
	metadata/shib13-idp-remote.php
	metadata/saml20-idp-remote.php

1. Each of these files has a .test and .prod version. Rename the appropriate version to [filename].php to use it. 

2. Extract it to ./private/simplesamlphp in your Pantheon site repo.

3. Create a symlink at ./simplesaml to ./private/simplesamlphp/www. 

4. Add the following to ./sites/default/settings.php:

```
<?php
$ps = json_decode($_SERVER['PRESSFLOW_SETTINGS'], TRUE);
$conf['simplesamlphp_auth_installdir'] = '/srv/bindings/'. $ps['conf']['pantheon_binding'] .'/code/private/simplesamlphp';
?>
```

5. Push the changes to the remote Pantheon git repo

6. Test at http://[sitename]/simplesaml/module.php/core/authenticate.php
