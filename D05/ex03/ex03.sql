insert into ft_table(login, groupe, creation_date)
  select last_name, 'other', birthdate FROM user_card
  where last_name LIKE '%a%' AND LENGTH(last_name) < 9
  order by last_name ASC LIMIT 10;
