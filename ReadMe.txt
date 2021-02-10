1. Nukopijuoti visa aplikacijos folderi i AMpps->www direktorija (arba atitinkama kito WEB serverio root'a)

2. DB prisijungimai yra standartiniai (.env faile). Jei MySQL serverio prisijungimai - kitokie, reikia pakoreguoti .emv faila.

3. Sukurti MySQL'e DB pavadinimu "travelsite"

4. Paleisti DB migracija is CommandLine'o (esant aplikacijos): php artisan migrate

5. Paleidziam DB seed is CommandLine'o (esant aplikacijos folderyje): php artisan db:seed --class=UserSeeder

6. Atidarom narsykleje: http://localhost/travelsite-Demo/public/ (prisijungimas: test@test.lt; pswd: test) 