<html>


 On va creer un petit site de deux pages uniquement en Symfony,
 ci joint le details de nos manips (petit rappels de nos basiques)
**Installation**

Installer un nouveau projet Symfony "skeleton", via l'utilitaire _symfony_ : `composer create-project symfony/skeleton angrybirds` et entrer dans le dossier du projet avec `cd angrybirds`.

> :hand: Si besoin de passer par Apache, on installe le `.htaccess` via `composer require apache-pack`.
> :hand: Sinon, on peut utiliser le serveur PHP `php -S 0.0.0.0:8000 -t public`.

**Conception de la structure : Routes, réponses, assets**

> :hand: Ici on ne code des contrôleurs qui répondent à une route, et affichent un simple "Page d'accueil", "Page oiseau", etc. Dans les étapes suivantes on codera les fonctionnalités attendues.

1. Lister les pages attendues afin d'en déduire les routes (URL, contrôleur, méthode, paramètres, description). Les noter dans un fichier de routes en markdown par ex.
2. Créer le/les contrôleurs nécessaires (rubrique _Controllers_).
3. Créér les méthodes et les routes associées (`.yaml` ou annotations au choix) (rubrique _Controllers/Routing_) et nommer ces routes.
   - Bien que le _yaml_ reste possible pour l'écriture des routes, les annotations sont recommandées : les inclure au projet via `composer require annotations`
4. Créer des réponses simples via l'objet `Response` (rubrique _Creating Pages_).
5. Afficher les routes dans le terminal avec `debug:router`.
6. Tester manuellement l'accès à toutes les routes pour vérifier le bon fonctionnement de l'application.