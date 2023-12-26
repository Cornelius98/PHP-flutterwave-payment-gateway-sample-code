# PHP-flutterwave-payment-gateway-sample-code

## Description

The PHP-flutterwave-payment-gateway-sample-code is PHP code designed and developed to be used as sample code  to interfaces the Flutterwave Payment Gateway API with PHP server code, recording all payments committed from the Flutterwave Payment Interface. This sample codes works like a library, without any UI/UX

Available pages and sections include:
- Receive pay load from payment page
- Sending payment requests to Flutterwave Payment Gateway
- Handling payment response from Flutterwave Payment Gateway
- Obtain data from PHP Std Object class from Flutterwave into a PHP array
- Insert the response into a PHP database
- paymentProcessor.php PHP code
- paymentEventListener.php PHP code
- Handling sucessful transactions
- Handling failed transactions

## Table of Contents (Optional)

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Support](#support)
- [License](#license)

## Requirements

To successfully run the project, the following are required;
- Internet access, to load CDN resources
- XAMP V3.3.0 or higher
- PHP 8.0 or higher
- MySQLi support
- Browser (Preferably Edge, Chrome, Mozilla)
- Basic database installation knowledge


## Installation

The installation procedure to run the project on your local machine is as follows;

- Install XAMP on your local machine
- Run your XAMP as administrator
- Open phpMydmin
- Create a database with the name `payments`
- Import the database
- Go to Xamp/htdocs folder and creater a folder names `flutter`
- Move the downloaded ZIP file to `flutter` folder or clone the respository in `flutter` folder
- Access the the project manage through the browser on 127.0.0.1/green

## Usage

To use this code smaple, the following ought to be practiced;
- Create an account with Flutterwave [here](https://flutterwave.com/us/)
- Generate API Keys
- Copy API Keys from Flutterwave account, add them to the `CURLOPT_HTTPHEADER` array, for every payment request, for all curl requests to the payment gateway
- configure payment success return URL in your website or app
- configure payment failed return URL in your website or app

## Support

For additional assistance using this library, contact the developer experience (DX) team via;
- [WhatsApp Developer](https://wa.me/+260977742472)
- [Email Developer](mailto:corneliuskasokola101@gmail.com)

## License

By contributing to the PHP-flutterwave-payment-gateway-sample-code, you agree that your contributions will be licensed under its MIT license.

Copyright (c) Omae Software.
