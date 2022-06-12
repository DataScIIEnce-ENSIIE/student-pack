# Student pack


## Introduction


If you want to run the Python processing script in order to view, export or even perform an external-processing protocol :

1. You first have to install the depencencies through this command :
```bash
pip3 install -r requirements.txt
```

2. Run the script
```bash
python3 process.py > offers.out
```
(if you want to redirect the standard output stream into an empty file)

## Add a new student plan

If you have spotted a new student plan, a ENSIIE/Université de Paris-Saclay/incoming exchange student could have access, please take the time to add it to our file.

In order to do it, please init a new pull request (PR) on this current repository, with the prefix **[New SP]** within the title.


*Example* :
* PR title : [New SP] *Adding GitHub Pro plan*
* PR body : Please append at the end of the document `offers.yaml` a new YAML item as follows :
```yaml
<new id>:
    title: "<Title of student plan>"
    desc: "<Small description of the plan>"
    url: "<Official URL of the student plan>"
    tested: [0|1]
```

**WARNING** : Please check if the `<new id>` string is **unique** and not already used in a previous saved student plan in `offers.yaml`.

**WARNING** : the field `tested` only has 2 possibles values :
- 1 if the offer has been tested and is still operational
- 0 otherwise


## PHP development side

The [Spyc](https://github.com/mustangostang/spyc) library is used to perform optimized YAML parsing. Using the grid system of Bootstrap and the raw [offers.yaml] raw file hosted by this Git repository, we can extract useful information from the student club webpage : [Student pack](https://datasciience.iiens.net/student-pack/).



## License & Authors

* Development start date : Sep. 2021

Copyright &copy; 2021 - 2022 DataScIIEnce. All rights reserved.

* Initial development & Maintener
    * Lucas RODRIGUEZ • portfolio • lucas.paul.rodriguez@gmail.com
* Other resources : all rights to respective authors
