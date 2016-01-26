#!/bin/sh

FILES=`grep '.php"' *.php | cut -f 2 -d ':' | cut -f 2-4 -d '"' | sed 's/\.php.*//' | sed 's/^.*"//g' | sed 's/^.*"//g' | sort | uniq `
FILES="$FILES thankyou"

# Create .html files
echo $FILES | xargs -I{} -n1 sh -c 'php "$1.php" > "$1.html"' -- {}

# Change hrefs from .php to .html
echo $FILES | xargs -I{} -n1 sh -c 'gsed -i "s/\.php/.html/g" $1.html ' -- {}

