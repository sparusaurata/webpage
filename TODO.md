# Améliorer les listes de publications

- ~~Les références sont repérées par leur bibid~~
- ~~Réparer l'affichage du résumé~~
- ~~Distinguer la génération des listes de leur affichage~~
- Plusieurs styles de listes
    + ~~supprimer les puces existantes et commenter les styles~~
    + ~~prévoir des styles par défaut dans settings.php (4 possibilités)~~
    + ~~indiquer le style de puces dans une classe~~
    + ajouter un `<div>` pour les puces, remplir et faire le style pour :
    + ~~style puces (rien à faire)~~
    + style puces personnalisées pour chaque type
    + style numéro global
    + style numéro par type avec préfixe
        ```
        .p-bibid.book { color: #f8c91f; }
        .p-bibid.journal { color: #c71a6b; }
        .p-bibid.bookchapter { color: #e47b04; }
        .p-bibid.proceedings { color: #1767d6; }
        .p-bibid.thesis { color: #f8c91f; }
        .p-bibid.unpublished { color: #888; }
        ```
- ~~Retourner la correspondance bibid -> texte avec les listes de publications~~
- Créer une fonction de citation des références
- Réfléchir à ce qui se passe si on cite une référence dans une référence
    + option 1 : on fait des liens à la main
    + option 2 : on code un truc automatique, qui insère la citation à la fin de la génération de la liste

# Automatiser l'affichage des news

# Décrire le workflow pour les prochaines modifications
