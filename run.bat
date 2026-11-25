@echo off
cd /d "%~dp0"
echo Menjalankan server PHP di http://localhost:8000 ...
echo Tekan Ctrl+C untuk berhenti.
start "" "http://localhost:8000"
php -S localhost:8000
