select reverse(substring(phone_number, 2, length(phone_number))) as 'rebmunenohp' from distrib
where phone_number like '05%';
