jest to pakiet angularfilemanager gotowy do wrzucenia na produkcj�

1. Wyedytowa� �cie�k� do katalogu z plikami w bridges/php-local/index.php oraz w lib/pdf2jpeg.php, src/controllers/main.js basepath.
2. Folder z plikami musi zawiera� katalog .pdf-thumbs do przechowywania miniatur podgl�du plik�w pdf.

Po edycji src/templates nale�y odpali� komend� gulp build z katalogu plugins/ang-fm.

New features:
1. Dodano thumbnails (miniatury) plik�w obraz�w i pdf.
2. Preview for first page of pdf files.
2. Poprawka dla wy�wietlania plik�w "tif".
3. Wy�wietlanie podgl�du pierwszej strony pdf.
4. Dodano ikonk� obrazu dla obraz�w w widoku listy.
5. In the file preview popup added buttons: 'open in new tab', 'download'.
6. File list view changed icons -> image, pdf or other document.
7. Larger icons with more modern layout. 
