<!-- Generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->

<?php



class User{

  public $userName;
  public $password;
  public $mail;
  public $nickName;

  public function __construct($userName, $password, $mail){

    $this -> nomeUtente = $userName;
    $this -> password = $password;
    $this -> mail = $mail;

  }



  public function __toString(){


    $utente = "User<br>Name: " . $this -> nomeUtente . "<br>";

        if ($this -> nickName) {
          $utente .= "Nickname: "  . $this -> nickName . "<br>";
        } else {
          $utente .= "Nickname: -----<br>";
        }

    return $utente   .  "Password: " . $this -> password . "<br>"
           . "Mail: " . $this -> mail . "<br>";
  }

}


    $user = new User("Giugi", "12345", "giulos@libero.it");

    $user -> nickName = "Batman";

    echo $user;
