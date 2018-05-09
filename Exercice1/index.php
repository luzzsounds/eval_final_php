<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/05/2018
 * Time: 13:11
 */

/** EXERCICE 1 Ludwig Lebrun */

SELECT users.firstname as "firstname", users.lastname as "lastname", articles.* FROM users LEFT JOIN articles ON users.id = articles.id_user where articles.id = 10