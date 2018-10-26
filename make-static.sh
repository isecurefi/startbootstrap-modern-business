#!/bin/sh

FILES=`grep '.php"' *.php | cut -f 2 -d ':' | cut -f 2-4 -d '"' | sed 's/\.php.*//' | sed 's/^.*"//g' | sed 's/^.*"//g' | sort | uniq | grep -v https`
FILES="$FILES thankyou"

echo "Creating HTML files.."
echo $FILES | xargs -I{} -n1 sh -c 'php "$1.php" > "$1.html__"' -- {}
echo $FILES | xargs -I{} -n1 sh -c 'html-minifier --collapse-whitespace --remove-comments --remove-optional-tags --remove-redundant-attributes --remove-script-type-attributes --remove-tag-whitespace --use-short-doctype --minify-css true --minify-js true "$1.html__" > "$1.html"' -- {}
rm *.html__

echo "Creating compacted CSS files.."
postcss css/modern-business.css__ -o css/modern-business.css
postcss css/bootstrap.min.css__ -o css/bootstrap.min.css
#postcss css/bootstrap.css__ -o css/bootstrap.css
postcss css/isecure.css__ -o css/isecure.css

# Change hrefs from .php to .html
echo $FILES | xargs -I{} -n1 sh -c 'gsed -i "s/\.php/.html/g" $1.html ' -- {}

