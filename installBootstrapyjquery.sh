composer require twbs/bootstrap:3.3.7
composer require components/jquery
mkdir -p webroot/css/bootstrap webroot/js/bootstrap webroot/js/jquery webroot/css/fonts
cp vendor/twbs/bootstrap/dist/css/* webroot/css/bootstrap/.
cp vendor/twbs/bootstrap/dist/js/* webroot/js/bootstrap/.
cp vendor/twbs/bootstrap/dist/fonts/* webroot/css/fonts/.
cp vendor/components/jquery/jquery.js webroot/js/jquery/.
git add .gitignore \
webroot/css/bootstrap \
webroot/js/bootstrap \
webroot/js/jquery