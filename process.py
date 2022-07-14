import yaml

"""
This file is used to pretty-print the values of offers.yaml
"""

FILENAME = "offers.yaml"
yaml_file = open(FILENAME, 'r')
yaml_content = yaml.safe_load(yaml_file)

for key, value in yaml_content.items():
    print(f"{key}: {value}")
