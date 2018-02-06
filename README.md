# Webservices.nl

This package has been generated from the [Webservices.nl WSDL](https://ws1.webservices.nl/soap_doclit?wsdl) using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

# Summary

- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package

You can generate again the package's sources using the [generate.sh](generate.sh) script:

```bash
$ git clone https://github.com/JCID/webservices.nl.git jcid-webservices-nl
$ cd jcid-webservices-nl
$ ./generate.sh
```

*Takes into account that it takes about 30 minutes to generate the full package*

After generating the package, don't forget to edit the generated [composer.json](composer.json) file in order to update the psr-4 autoloading:

```json
"psr-4": {
    "Webservices\\": "./src/",
    "SoapClient\\": "./SoapClient/"
}
```

Then run:

```bash
$ composer update
```

To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project

```bash
$ git clone https://github.com/JCID/webservices.nl.git jcid-webservices-nl
$ cd jcid-webservices-nl
$ composer update
```

## Learn from the tutorial

Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by Webservices.nl and the way to call them.

# Need support or having a question?

We can help you understand how to use it and how to customize it. Feel free to contact us at info@jcid.nl.
