select title as 'Title',summary as 'Summary', prod_year FROM film
inner join genre on film.id_genre = genre.id_genre
where genre.name = 'erotic'
order by prod_year DESC;
