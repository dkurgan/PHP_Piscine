SELECT title, summary FROM film
where title like '%42%' OR summary like '%42%'
order by duration;
