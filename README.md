# SaaS Subscription API (Laravel)

> Projekt pokazowy SaaS typu Subscription Billing – zbudowany z myślą o prezentacji umiejętności fullstack backend developera PHP (Laravel). 

## 🎯 Cel

Celem projektu jest zbudowanie pełnoprawnej aplikacji backendowej w Laravel do zarządzania subskrypcjami (SaaS) wraz z:
- testami,
- CI/CD (GitHub Actions),
- jakością kodu (PHPStan, CS Fixer),
- integracjami z płatnościami,
- REST API i dokumentacją.

---

## 🚧 Etapy budowy projektu

### Etap 1: Inicjalizacja repozytorium
- [x] Zainicjalizuj projekt Laravel.
- [x] Skonfiguruj `.env`, `APP_KEY`.
- [x] Stwórz strukturę katalogów i dodaj `README.md`.

### Etap 2: CI/CD i testy
- [x] Dodaj GitHub Actions do uruchamiania:
  - `PHP-CS-Fixer`
  - testów (SQLite in-memory lub MySQL)
  - analiza statyczna z `PHPStan`
- [x] Testy przechodzą (status `OK`)
- [x] Wyświetlanie struktury katalogów w pipeline

### Etap 3: API i podstawowe modele
- [x] Modele: User, Subscription, Plan
- [x] Relacje i migracje
- [x] Endpointy REST:
  - GET `/api/plans`
  - POST `/api/subscribe`
  - GET `/api/me/subscription`

### Etap 4: Autoryzacja i dostęp
- [x] Sanctum / Passport
- [ ] Middleware `auth:api`
- [ ] Testy dostępu

### Etap 5: System płatności
- [ ] Integracja z Stripe (lub np. Coinbase)
- [ ] Webhooki dla potwierdzenia płatności
- [ ] Testy symulujące webhooki i opłacenie subskrypcji

### Etap 6: Admin + raporty
- [ ] Panel dla admina (Livewire lub REST)
- [ ] Eksport danych do CSV, Excel
- [ ] Lista aktywnych subskrypcji / planów

### Etap 7: Jakość kodu
- [ ] Test coverage report
- [ ] PHPStan (level 5+)
- [ ] PHP-CS-Fixer z predefiniowanym configiem

---

## 🧪 Uruchomienie testów

```bash
php artisan test
