# alexa-domain-rank

```
php global.php
awk '{print $2}' global.txt | sort | uniq -c | sort -n
php cn500.php
awk '{print $2}' cn500.txt | sort | uniq -c | sort -n
php cn2000.php
awk '{print $2}' cn2000.txt | sort | uniq -c | sort -n
```
