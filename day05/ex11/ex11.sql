SELECT UPPER(last_name) AS 'NAME', first_name, price
FROM user_card
INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso
INNER JOIN abonnement ON membre.id_abo = abonnement.id_abo
WHERE prix > 42
ORDER BY fiche_personne.nom, prenom;