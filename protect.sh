chmod -R a-w ./wp-content/
chmod -R u+w ./wp-content/uploads/
chmod -R u+w ./wp-content/cache/
chmod -R u+w ./wp-content/upgrade/
chmod -R u+w ./wp-content/gallery/
chmod -R a-w ./wp-includes/
chmod -R a-w ./cgi-bin/
chmod -R a-w ./wp-admin/
find . -name '.htaccess' -exec chmod 0444 {} \;
find . -maxdepth 1 -name '*.php' -exec chmod 0400 {} \;
find . -name 'index.php' -exec chmod 0400 {} \;
chmod 0400 wp-config.php
chmod 0644 wp-admin/.htaccess
chmod u+w ./wp-content/plugins/all-in-one-seo-pack/all_in_one_seo_pack.log
