# ESERCIZIO "laravel-model-controller"

Creo un'interazione con il database utilizzando l’ORM di Laravel.
- Creo un nuovo progetto Laravel 9
- tramite phpMyAdmin creo un nuovo database "laravel_model_controller"
- Importo nel database la tabella movies *(allegato)*
- inserisco le mie credenziali per il database nel file .env
- Creo un model Movie *`php artisan make:model Movie`*
- Creo un controller che gestirà la rotta *`php artisan make:controller Guest/PageController`*
- All’interno della funzione index() del controller, recupero tutti i film dal database e li passo alla view, che quindi li visualizzerà a schermo, tramite delle card.
