<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/05/2018
 * Time: 14:48
 */

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    //- Prénom (string de 3 à 20 caractères)
    //- Age (int)
    //- Couleur (string de 3 à 10 caractères)
    //- Sexe (string : male ou femelle)
    //- Race (string de 3 à 20 caractères)

    public function set_Prenom($value){
        if(is_string($value) !== false){
            if(strlen($value) > 3 && strlen($value) < 20){
                $this->prenom = $value;
                echo "Vous avez nommer votre chat : " . $value;
            }
            else{
                echo "Veuillez entrez entre 3 et 20 caractères !";
            }
        }
        else{
            echo "Veuillez entrez une chaine de caratères";
        }
    }


    public function set_Age($value){
        if(filter_var($value,FILTER_VALIDATE_INT)){
            $this->age = $value;
            echo "Votre chat à " . $value . "ans";
        }
    }


    public function set_Couleur($value){
        if(is_string($value) !== false){
            if(strlen($value) > 3 && strlen($value) < 10){
                $this->couleur = $value;
                echo "Votre chat est de couleur : " . $value;
            }
            else{
                echo "Veuillez entrez entre 3 et 10 caractères !";
            }
        }
        else{
            echo "Veuillez entrez une chaine de caratères";
        }
    }


    public function set_Sexe($value){
        if(is_string($value) !== false){
            if($value == 'male'){
                $this->sexe = $value;
                echo "Votre chat est un " . $value;
            }
            elseif($value == 'femelle'){
                $this->sexe = $value;
                echo "Votre chat est une " . $value;
            }
            else{
                echo "Veuillez saisir si votre chat est un male ou un femelle";
            }
        }
        else{
            echo "Veuillez entrez une valeur";
        }
    }

    public function set_Race($value){
        if(is_string($value) !== false){
            if(strlen($value) > 3 && strlen($value) < 20){
                $this->race = $value;
                echo "Votre chat à pour race :" . $value;
            }
            else{
                echo "Veuillez entrez entre 3 et 20 caractères !";
            }
        }
        else{
            echo "Veuillez entrez une chaine de caratères";
        }
    }

    public function get_Prenom(){
        var_dump($this->prenom);
    }
    public function get_Age(){
        var_dump($this->age);
    }
    public function get_Couleur(){
        var_dump($this->couleur);
    }
    public function get_Sexe(){
        var_dump($this->sexe);
    }
    public function get_Race(){
        var_dump($this->race);
    }

    public function get_Infos(){
        var_dump($this);
    }
}