#!/usr/bin/env bash

# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php -d memory_limit=-1 wsdltophp.phar generate:package \
    --urlorpath="https://ws1.webservices.nl/soap_doclit?wsdl" \
    --destination=$DEST \
    --composer-name="jcid/webservices" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:JCID <info@jcid.nl>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="Webservices";

# generate package
php -d memory_limit=-1 wsdltophp.phar generate:package \
    --urlorpath="https://ws1.webservices.nl/soap_doclit?wsdl" \
    --destination=$DEST \
    --composer-name="jcid/webservices" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:JCID <info@jcid.nl>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="Webservices" \
    --force;
