<!-- Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// Creo 3 parametri get
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

// Creo una funzione che controlla la lunghezza del nome
function check_name($par_name){
    if(strlen($par_name) > 3){
        return true;
    } else{
        return false;
    }
};

// Creo una funzione che controlla se nell'email ci sono il punto e la chiocciola
function check_email($par_email){
    if(strpos($par_email, "@") && strpos($par_email, ".")){
        return true;
    }
    else{
        return false;
    }
};

// Se tutte le condizioni sono vere
if ( check_name($name) && check_email($email) && is_numeric($age)){
    echo "Accesso Riuscito";
    // se anche una condizione risulta falsa allora entrerà nel ramo else
} else{
    echo "Accesso Negato";
};
?>
