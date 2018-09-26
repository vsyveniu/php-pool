SELECT title, summary FROM film
WHERE summary LIKE UPPER('%vincent%')
ORDER BY id_film ASC; 