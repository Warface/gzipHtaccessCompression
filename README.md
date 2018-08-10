# gzipHtaccessCompression
# Gzip compression

Some base code for GZip compression for Apache and IIS servers.

## Websites that calculate page speed and optimization

[GTMetrix](https://gtmetrix.com/)

[Pingdom](https://tools.pingdom.com/)

[Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)

Google PageSpeed isn't stable and can lower the score by 10 points just because the response time isn't fast enough.

Instead you can install node.js with PSI. PSI is a plugin from Google PageSpeed Insights and seems to be more accurate when runned local than from their website.

Install it globaly

`npm install -g psi`

Then run this command 

`psi http://www.example.com --nokey --strategy=mobile`

Change `--strategy=mobile` to `--strategy=desktop` to switch for desktop