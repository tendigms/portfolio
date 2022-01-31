<?php 

$pdo = getPDO();



// Pour les langues : 

if ( isset ($_GET['lang'] ) ) {

    $lang = $_GET['lang'];
}
else $lang = "FR";


// Résultats de mes fonctions 


$tab_titre = titre($pdo, $lang);
$tab_gtkm = GTKM ($pdo, $lang);
$tab_img = image($pdo);
$tab_hobbies = hobbies($pdo);
$tab_saisonnier = saisonnier($pdo,$lang);
$tab_projetsweb = projets_web($pdo, $lang);
$tab_formationxdiplome = formationxdiplome($pdo, $lang);
$tab_form = form($pdo, $lang);




//  Requêtes PDO ET BDD 

 function getPDO() {
        $host = 'localhost';
        $db   = 'portfolio2021-2022_gomes';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';
        
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=3306";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }


// Fonctions à écho plus tard 

function titre($pdo,$lang) {
        $resultats = $pdo->query("SELECT * FROM `title` WHERE LANG='$lang';")->fetch();
        return $resultats;
    }


function GTKM ($pdo,$lang) {
    $resultats = $pdo->query("SELECT * FROM `gtkm` WHERE LANG = '$lang';")->fetch();      
     return $resultats;
}


function image($pdo) {

      $resultats = $pdo->query("SELECT * FROM `images` ;")->fetch();
       return $resultats;
}


function hobbies($pdo) {

      $resultats = $pdo->query("SELECT * FROM `hobbies` ;")->fetch();
       return $resultats;

}

function saisonnier($pdo,$lang) {
        $resultats = $pdo->query("SELECT * FROM `saisonnier1` WHERE bulle='$lang';")->fetch();        
       return $resultats;
    }

function projets_web($pdo,$lang) {
        $resultats = $pdo->query("SELECT * FROM `projets_web` WHERE LANG='$lang';")->fetch();
       return $resultats;
    }

function formationxdiplome($pdo,$lang) {
        $resultats = $pdo->query("SELECT * FROM `formationxdiplome` WHERE LANG='$lang';")->fetchALL();
       return $resultats;
    }

function form($pdo,$lang) {
        $resultats = $pdo->query("SELECT * FROM `form` WHERE LANG='$lang';")->fetchALL();
               return $resultats;
    }


// Pour mon backoffice


function message( $pdo,$nom,$prenom,$email,$message ) {

        $ajout = $pdo->prepare("INSERT INTO `message` (`NOM`, `PRENOM`, `MAIL`, `MESSAGE`) VALUES (?,?,?,?) ") ; 
        
        return $ajout;
    }


function addtable( $pdo, $nom ) {

        $ajout = $pdo->prepare("CREATE TABLE $nom (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT  )") ; 
        
        return $ajout;
    }

function supptable ($pdo,$nomtable) {

        $supp = $pdo->query("DROP TABLE $nomtable");
        
        return $supp;
    }

?> 