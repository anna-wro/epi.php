# Zajęcia ze :elephant:

> #### Zawsze twórz swój kod z myślą, że będzie go później czytać psychopata, który wie, gdzie mieszkasz

* [Prawie puste](https://github.com/anna-wro/epi.php/tree/master/starting%20point)
* [Przestrzenie nazw](https://github.com/anna-wro/epi.php/tree/master/przestrzenie%20nazw)
* [Bookmarks - Silex ](https://github.com/anna-wro/epi.php/tree/master/bookmarks%20-%20silex)
* [View and templates](https://github.com/anna-wro/epi.php/tree/master/view%20and%20templates)
* [Bookmarks with templates :elephant:](https://github.com/anna-wro/epi.php/tree/master/bookmarks%20with%20templates)
* [Bookmarks with Twig :bird:](https://github.com/anna-wro/epi.php/tree/master/bookmarks%20with%20twig)
* [Bookmarks - Twigowe tabelki :full_moon:](https://github.com/anna-wro/epi.php/tree/master/bookmarks%20-%20twig%20tables)
* [Bookmarks - Bootstrap & Controllers](https://github.com/anna-wro/epi.php/tree/master/bookmarks%20-%20controllers)
* [Silex Skeleton z zajęć](https://github.com/anna-wro/epi.php/tree/master/Silex%20Skeleton)
* [Silex - translations :earth_africa:](https://github.com/anna-wro/epi.php/tree/master/Silex%20-%20translations)
* [Silex - odnośniki w aplikacji :link:](https://github.com/anna-wro/epi.php/tree/master/Silex%20-%20odno%C5%9Bniki)
* [Silex - doctrine DBAL](https://github.com/anna-wro/epi.php/tree/master/Silex%20-%20doctrine%20DBAL)
* [Bookmarks - add](https://github.com/anna-wro/epi.php/tree/master/Bookmarks%20-%20type%20%26%20add)
* [Bookmarks - edit & delete :thermometer:](https://github.com/anna-wro/epi.php/tree/master/Bookmarks%20-%20edit%20%26%20delete)
* [Bookmarks - walidacja :pill:](https://github.com/anna-wro/epi.php/tree/master/Bookmarks%20-%20walidacja)
* [Własny walidator](https://github.com/anna-wro/epi.php/tree/master/w%C5%82asny%20walidator)
* [Bookmarks - final 💜](https://github.com/anna-wro/epi.php/tree/master/Bookmarks%20-%20final)

***

### Uruchamianie serwera bez aktualizowania composera :rabbit2: 

    composer run
  
  działa bez przechodzenia do `app`. Wystarczy w katalogu projektu (u mnie epi.php) utworzyć `composer.json` o treści: 
  
      {
       "scripts": {
         "run": [
           "echo 'Started web server on http://localhost:8888'",
           "php -S localhost:8888 -t app/web"
        ]
       }
      }

i voilà :sparkles:.
