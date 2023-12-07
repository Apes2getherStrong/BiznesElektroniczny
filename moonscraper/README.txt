jak sie pobierze mozliwe ze bedzie trzeba stworzyc venv
python -m venv moonscraper_venv


nastepnie aktywowac venv 
moonscraper_venv\Scripts\activate


potem zaktualizowac biblioteki to wystarczy jak raz sie utworzy venv
python -m pip install -r requirements.txt


w odpowiednim folderze podobnie zeby zapisac 
python -m pip freeze > requirements.txt