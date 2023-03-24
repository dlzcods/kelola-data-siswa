# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## v.1.0.5 (2023-03-24)
### Changed:
- Improve notification(Create, Update, Delete) with SweetAlert2 [#11](https://github.com/dlzcods/kelola-data-siswa/commit/e547d76393c91b45c94119b1f912241939aaf0ff)

## v1.0.4 (2023-03-19)
### Added:
- Add confirmation before saving data on input form [#10](https://github.com/dlzcods/kelola-data-siswa/commit/06e0fc9adc7cbd7ac2ef5122a95dd02098abf5b1)
### Fixed bugs:
- Fix error when updating data because the system reads name and no_hp as unique data [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)
  <br>
  Read more about [unique validation rule](https://laravel.com/docs/9.x/validation#rule-unique)
### Changed:
- Rename looping foreach variable '$student' to '$siswa_row' in input form to be more consistent [#13](https://github.com/dlzcods/kelola-data-siswa/commit/467f309f6a565da6237fd3a9188c5b3519400685)
- Update the position of the index to be more centered [#13](https://github.com/dlzcods/kelola-data-siswa/commit/467f309f6a565da6237fd3a9188c5b3519400685)
- Rename route from '/sisw' to '/siswa' [#12](https://github.com/dlzcods/kelola-data-siswa/commit/c9eadb35eb79ede316007c392cc2742242c93686)
- Rename variable '$sisw' to '$siswa' for all files [#12](https://github.com/dlzcods/kelola-data-siswa/commit/c9eadb35eb79ede316007c392cc2742242c93686)
- Update the position of the update form to be more centered [#11](https://github.com/dlzcods/kelola-data-siswa/commit/4b6b7806324db2142a1f47b6ae5e506929eb3545)
- Update validation on update method for:
    - nama: Allows letters only, unique [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)
    - no_hp: Allows numbers only, unique, min 10 digits and max 12 digits [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)
- Update validation on store method for:
    - NIS: Must be 5 digits [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)
    - nama: Allows letters only [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)
    - no_hp: Allows numbers only, unique, min 10 digits and max 12 digits [#9](https://github.com/dlzcods/kelola-data-siswa/commit/cf2a1314d15154b8fa8d84c885bb6a424885b276)

### Unused change:
- Rename looping foreach variable '$siswa' to '$student' in input form [#12](https://github.com/dlzcods/kelola-data-siswa/commit/c9eadb35eb79ede316007c392cc2742242c93686)

## v1.0.3 (2023-03-19)
### Added:
- Add warning notification(NIS cannot be changed) on update form [#8](https://github.com/dlzcods/kelola-data-siswa/commit/76cb5c69268e9e290bea4f7d22e4458ad0c597a8)

### Changed:
- Simplify and finished validation on update method for:
    - nama: Allows letters only [#7](https://github.com/dlzcods/kelola-data-siswa/commit/a4c0c3fb4c2d920f6e9baccc79a5029ace069f8f)
    - no_hp: Allows numbers only, min 10 digits and max 12 digits [#7](https://github.com/dlzcods/kelola-data-siswa/commit/a4c0c3fb4c2d920f6e9baccc79a5029ace069f8f)

## v1.0.2 (2023-03-18)
### Changed:
- Finishing the design for all field on update form [#6](https://github.com/dlzcods/kelola-data-siswa/commit/2d250664f88347e6f3bfcc6eaccb64ae3c2464f0)
- Finishing the design for all field on input form [#5](https://github.com/dlzcods/kelola-data-siswa/commit/0d8d4c67fe6360e7c2bbd16530f66a82a8716582)
- Update validation on update method for: 
    - nama: Allows letters only [#4](https://github.com/dlzcods/kelola-data-siswa/commit/329e732cdb741216a6e204564929caa3c9aa85b4)
    - no_hp: Allows numbers only(unfinished), min 10 digits and max 12 digits [#4](https://github.com/dlzcods/kelola-data-siswa/commit/329e732cdb741216a6e204564929caa3c9aa85b4)

## v1.0.1 (2023-03-18)
### Changed:
- Simplify code in update form [#3](https://github.com/dlzcods/kelola-data-siswa/commit/ba979501f652d4b87e05c12f0fd1fba688fa7a09)
- Update design for update form [#3](https://github.com/dlzcods/kelola-data-siswa/commit/ba979501f652d4b87e05c12f0fd1fba688fa7a09)
- Update design for no hp field on input form [#2](https://github.com/dlzcods/kelola-data-siswa/commit/b0cdb697e41faa74775a7f33aeee4aeb601085e6) 
- Update design for NIS and nama field on input form [#1](https://github.com/dlzcods/kelola-data-siswa/commit/119eb04aa94b36660f2b653630b6f58dd59da400)

## v1.0.0 (2023-03-18)
- Initial release
- Implemented CRUD functionally for managing student data
