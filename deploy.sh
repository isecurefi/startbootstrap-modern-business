#!/bin/sh

FILES=`grep '.php"' *.php | cut -f 2 -d ':' | cut -f 2-4 -d '"' | sed 's/\.php.*//' | sed 's/^.*"//g' | sed 's/^.*"//g' | sort | uniq `
FILES="$FILES thankyou error"

echo $FILES |  xargs -I{} -n1 sh -c 'aws s3 cp "$1.html" s3://www2.isecure.fi/' -- {}
aws s3 cp --recursive js s3://www2.isecure.fi/js/
aws s3 cp --recursive images s3://www2.isecure.fi/images/
aws s3 cp --recursive css s3://www2.isecure.fi/css/
aws s3 cp --recursive font-awesome s3://www2.isecure.fi/font-awesome/

scp -r js images css font-awesome isecure.fi:/var/www/isecure.fi-SSL/

