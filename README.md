<p align="center">
<img src="https://datasciience.iiens.net/assets/img/logo_DS.png" width="200"/>
</p>

<img src="https://img.shields.io/static/v1?label=DataScIIEnce&message=Associative project&color=007bff"/>

# DataScIIEnce - Student pack

This repository is aiming to centralize all available free student offers from various companies (Microsoft, GitHub, JetBrains, ...) in data-science and web development sectors (free services, products, ...).

The official list of offers is publicly available on [this page](https://datasciience.iiens.net/student-pack/) *(french)*.

## Add a new student plan

If you have spotted a new student plan a ENSIIE/Université de Paris-Saclay/incoming exchange student could have access, please take the time to add it to our system.

To do so, please [init a new issue](https://github.com/DataScIIEnce-ENSIIE/student-pack/issues) on this current repository **with label [NEW OFFER]** :


*Example* :
* PR title : *Adding GitHub Pro plan*
* PR body : Please describe the following items in the most accurate way possible:

    - *title*: Title of student plan
    - *desc*: Small description of the plan (no more than 200 symbols)
    - *url*: Official URL of the student plan
    - *tested*: `[0|1]`

**Remark**: Please check if the `<new id>` string is **unique** and not already used in a previous saved student plan in `offers.yaml`.

**Remark**: The `tested` field only has 2 possibles values :
- 1 if the offer has been tested and is still operational
- 0 otherwise

## Report an error related to a plan

If you try to access a student plan described above and you encounter a problem (service not available, student plan not free anymore, ...), please create a [new issue](https://github.com/DataScIIEnce-ENSIIE/student-pack/issues/new).

If your issue is closed in the coming days, this means it has been taken into account by the team.


## Development

This section highlights the details of the two scripts behind the webpage.

### Python-side

If you want to run the little Python script to view, export or even perform an external-processing script :

1. You first have to install the depencencies through this command :
```bash
pip3 install -r requirements.txt
```

2. Run the script
```bash
python3 process.py > offers.out
```
(if you want to redirect the stdout stream into an empty file)

### PHP-side

The [Spyc](https://github.com/mustangostang/spyc) library is used to perform optimized YAML parsing. Using the grid system of Bootstrap and the raw [offers.yaml](offers.yaml) raw file hosted by this Git repository, we can extract useful information from the student club webpage : [Student pack](https://datasciience.iiens.net/student-pack/).



## License & Authors

* Development start date : May. 2022

Copyright &copy; 2021 - 2022 DataScIIEnce. All rights reserved.

* Initial development & Maintener
    * Lucas RODRIGUEZ • [portfolio](https://lcsrodriguez.github.io/)
* Other resources : all rights to respective authors