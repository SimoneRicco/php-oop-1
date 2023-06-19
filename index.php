<?php
class Movie
{
    public $title;
    public $prod_year;
    public $gender;
    public function __construct($title, $prod_year, $gender)
    {
        $this->title = $title;
        $this->prod_year = $prod_year;
        $this->gender = $gender;
    }
    public function movieInfo()
    {
        return "Titolo: " . $this->title . ", Produzione: " . $this->prod_year . ", Genere: " . $this->gender . "<br>";
    }
}
$m1 = new Movie("Endgame", "2019", "Azione");
$m2 = new Movie("Justice League", "2017", "Azione");
$m3 = new Movie("Animali fantastici", "2015", "Fantasy");
echo $m1->movieInfo();
echo $m2->movieInfo();
echo $m3->movieInfo();
