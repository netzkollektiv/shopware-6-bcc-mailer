# Netzkollektiv BCC Mailer Extension for Shopware 6

This Shopware 6 plugin by Netzkollektiv adds BCC (Blind Carbon Copy) support to outgoing emails, allowing you to archive or monitor sent mail.

## Features

- Automatically adds one or more BCC recipients to all outgoing Shopware mails
- Configure BCC addresses via plugin configuration
- Useful for email archiving, compliance, or monitoring purposes

## Installation

### Requirements

- Shopware 6.6 or higher (may work with earlier versions as well)
- Composer

### Installation via Composer

1. Navigate to your Shopware installation root directory:
   ```bash
   cd /path/to/shopware
   ```

2. Require the plugin using Composer:
   ```bash
   composer require netzkollektiv/shopware-bcc-mailer
   ```

3. Install and activate the plugin:
   ```bash
   bin/console plugin:install --activate NetzkollektivBccMailer
   ```

4. (Optional) Clear the cache:
   ```bash
   bin/console cache:clear
   ```

## Configuration

After installation, go to the **Admin Panel > Extensions > My Extensions > Netzkollektiv BCC Mailer** and configure the BCC email addresses you want to use.

## Plugin Commands

To manage the plugin via CLI:

```bash
bin/console plugin:install --activate NetzkollektivBccMailer
bin/console plugin:update NetzkollektivBccMailer
bin/console plugin:uninstall NetzkollektivBccMailer
bin/console plugin:remove NetzkollektivBccMailer
```

## Support

For issues or feature requests, please open an issue on the GitHub repository.

---

© [NETZKOLLEKTIV](https://netzkollektiv.com) – Made with ❤️ for Shopware
