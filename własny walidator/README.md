vendor/Symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig

grupy walidacji

       new Assert\NotBlank(
                        ['groups' => ['tag-default']]
                    ),

dotyczy tylko podanych grup (tu: tag-default);
poza tym powinno byc ZAWSZE jesli pole ma nie byc zostawione puste - inaczej inne walidatory nie odpala

TRZEBA ustawic domyslna grupe, inaczej jej nie przydzieli

kazdy formularz ma dodatkowa tablice o nazwie options

 `dump($options)`  - w $data sa pola przeslane z formularza, 

 `'required' => true`, - to nie walidacja, jest tylko w htmlu

