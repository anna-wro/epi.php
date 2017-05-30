# Notatki

php mamy zmienne gl

$_post, get, cookie, files -> nie uzywamy ich

uzywamy request w silexie

serwer generuje unikalny klucz sesji phpid -> potem odsyla ten klucz do przegladarki i w ten sposob w sesji mamy tylko dane 1 uzytkownika, ktory wchodzi na strone, wprowadza dane (np. hasla, loginy - ze jest zalogowny);
(nie np. wszytskich uzytkownikow, ktorzy korzystaja w tym samym czasie)

gdy uzytkownik jeszcze raz chce odwiedzic serwer i ma phpid i sesja jest zywa, to moze korzystac z tych samych poswiadczen -> z serwera dostanie to czego szukal (dane sesyjne -np. ze jest zalogowany)
 
proces serializacji, deserializacji - do pliku tekstowego ida z serwera dane (tylko najwazniejsze rzeczy, nie przechowujemy np. awatarow -te sa brane z bd) 
 
czas zycia sesji 24 min

phpid - najczesciej przechowywany w cookie

https 
certyfikaty
-niezbedne do bezpieczenstwa

mechanizm 
flash bag oparty o sesje
mozna pobrac wszystkei dane z requestu, wyswietlic w przegladrce

dla bookmarks ustawimy w repository - public action save
:ustawiamy domyslne - dd jesli nie jest uzupelnione
 
