SELECT *
FROM sakila.film
JOIN sakila.film_category
ON sakila.film_category.film_id = sakila.film.film_id
JOIN sakila.category
ON sakila.film.category.category_id = sakila.category.category_id;