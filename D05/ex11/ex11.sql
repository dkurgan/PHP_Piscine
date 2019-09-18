select upper(last_name) as 'NAME', first_name, subscription.price FROM user_card
inner join member ON member.id_user_card = user_card.id_user
inner join subscription ON subscription.id_sub = member.id_sub
where subscription.price > 42
order by last_name, first_name ASC;
