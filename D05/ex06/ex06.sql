SELECT title, summary FROM film
WHERE lower(summary) LIKE '%vincent%'
order by id_film;
