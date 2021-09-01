# Contribute
_Add your instance to the official list of Lookup Ninja instances._

## Requirements

**You'll need to know your instance's...**
- [x] URL
- [x] Version

**You'll also need to know some server information...**
- [x] Network name
- [x] Country

**You'll need to know if your server has any of the following..**
- [x] SSl
- [x] IPv4
- [x] IPv6

## How to get required Information
**Your instance's URL and version** should be able to be found easily. The URL is what you type in to access it (eg `example.org`, `lookupninja.example.net`), and the version is in the footer.

**Server information**, including network name and country, **and whether you have IPv4/IPv6** can be found through a Lookup Ninja lookup:
1. Visit a Lookup Ninja instance, and enter your instance's URL and hit 'Lookup!'
2. Change the tab to DNS
3. If you see an entry under "AAAA", you have IPv6, if you see an entry under "A", you have IPv4, if you have both, you have both
4. Click on either an IPv4 address (eg `162.55.175.126`) or IPv6 address (eg `2a01:4f8:c010:6e92::1`), this will bring up its WHOIS
5. In the first block of text, the server's country location is under "country", and should be two letters (eg `GB`, `DE`, `US)
6. In the first block of text, the server's network name is under "netname", (eg `DE-HETZNER-19920803`)

**Whether your instance has SSL** can be checked at [ssltools.com](https://ssltools.com).

## Formatting your submission
Submissions are submitted as PHP arrays, an example would be:
```
$instances = array(
    array('instance.lookup.ninja', '1.0', 'FI', 'DE-HETZNER', TRUE, TRUE, TRUE),
);
```

Open a pull request, and modify `instances.php` to have your submission at the bottom, just before `);`.

Use the following template:

```
//    url             ver*   cc    netname    SSL?  IPv4? IPv6?
array('example.org', '9.2', 'FR', 'LUNJ123', FALSE, TRUE, FALSE), 
```
* cc = country code
* ver = version

SSL, IPv4, IPv6 should be set as `TRUE` or `FALSE` based on whether your instance has them. Don't surround `TRUE`/`FALSE` with `'` `'` or `"` `"`.

**!! Make sure you have a `,` after the closing bracket**
