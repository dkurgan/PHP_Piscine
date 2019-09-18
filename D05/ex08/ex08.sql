select last_name, first_name, date(birthdate) AS birthdate FROM user_card
where year(birthdate) = '1989'
order by last_name;
